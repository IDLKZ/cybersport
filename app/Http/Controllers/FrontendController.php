<?php

namespace App\Http\Controllers;

use App\Match;
use App\News;
use App\Team;
use App\Tournament;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\DomCrawler\Crawler;
use Illuminate\Support\Str;
use Twilio\Rest\Client;

class FrontendController extends Controller
{
    public function index(){
        $teams = Team::where("status",1)->get();

        $oldmatch = Match::where("winner","!=",null)->orderBy("updated_at","desc")->paginate(4);
        $newmatch = Match::where("winner",null)->orderBy("updated_at","desc")->paginate(4);
        $allmatch = Match::orderBy("updated_at","desc")->paginate(4);


        return view('frontend.home',compact("teams","oldmatch","newmatch","allmatch"));
    }

    public function whatsapp()
    {
        // Find your Account Sid and Auth Token at twilio.com/console
// DANGER! This is insecure. See http://twil.io/secure
        $sid    = "ACc7b8e2d596891efbe3f1e065db1fb0aa";
        $token  = "ac12ceb66d1a0e2369df17e4278730ad";
        $twilio = new Client($sid, $token);

        $numbers = ['+77064171796', '+77758495961'];

        foreach ($numbers as $number){
            $message = $twilio->messages
                ->create($number, // to
                    ["from" => "+15017122661", "body" => "Hello World!"]
                );
        }


        print($message->sid);
    }



    public function login(){
        return view('backend.login');
    }

    public function register(){
        return view("frontend.auth.register");
    }

    public function logout(){
        if(Auth::check()){Auth::logout();}
        return redirect()->route('main');
    }

    public function news(){
        $news = News::orderBy('created_at',"desc")->paginate(6);
        return view("frontend.news",compact("news"));
    }

    public function news_detail($slug){
        $news = News::where("slug",$slug)->first();
        return view("frontend.news-detail",compact("news"));
    }

    public function teams(){
        $teams = Team::where("status",1)->paginate(12);
        return view("frontend.teams",compact("teams"));
    }

    public function tournaments()
    {
        $tournaments = Tournament::where('status', 1)->get();
        return view('frontend.tournaments', compact('tournaments'));
    }

    public function singleTournament($slug)
    {
        $tournament = Tournament::where('slug', $slug)->first();
        return view('frontend.single-tournament', compact('tournament'));
    }

    public function contacts(){
        return view("frontend.contacts");
    }




    public function createNews(){
        $link = "https://www.igromania.ru/news/";
        $html = file_get_contents($link);
        $crawler = new Crawler(null, $link);
        $crawler->addHtmlContent($html, 'UTF-8');
        $content = $crawler->filter(".aubl_item")->each(function (Crawler $node, $i) {
            $data =  $node->filter(".aubli_date")->text();
            $end = substr($data,0,strrpos($data,"|") -2 );
            if($end == Carbon::now()->format("d.m.yy")){
                $title = $node->filter(".aubli_name")->text();
                $src = $node->filter("img")->attr("src");
                $href = "https://www.igromania.ru/".$node->filter(".aubli_name")->attr("href");
                $html2 = file_get_contents($href);
                $crawler2 = new Crawler(null, $href);
                $crawler2->addHtmlContent($html2, 'UTF-8');
                $content =  $crawler2->filter(".universal_content")->text();
                $img =  $crawler2->filter(".main_pic_container > img")->attr("src");
                News::create([
                    "title" => $title,
                    "thumbnail" => $src,
                    "img" => $img,
                    "content" => $content,
                    "original" => $href,
                    "slug" =>Str::slug($title).Str::random(4)
                ]);
                return ["title"=>$title,"thumbnail"=>$src,"original" => $href,"content"=>$content,"img"=>$img];

            }
        });

    }



}
