<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $login;
    public $password;

    public function updated($field)
    {
        $this->validateOnly($field,[
            'login' => 'required',
            'password' => 'required|min:6',
        ]);
    }

    public function submit()
    {
        $this->validate([
            'login' => 'required',
            'password' => 'required|min:6',
        ]);

        if(Auth::attempt(['login' => $this->login, 'password' => $this->password])){
            return redirect()->route('admin');
        }
        else{
            session()->flash("message","Неправильный логин или пароль");
            return back();
        }
    }

    public function render()
    {
        return view('livewire.login');
    }
}
