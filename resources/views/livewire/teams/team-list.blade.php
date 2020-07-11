{{--Modal window to show lists of Companies--}}
<div>
    <div class="mb-2">

        <div class="collapse d-md-block" id="displayOptions">
            {{--Start Accepted and Banned companies--}}
            <div class="d-block d-md-inline-block">
                <div class="btn-group float-md-left mr-1 mb-1">
                    <button class="btn btn-outline-dark btn-xs dropdown-toggle" type="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Сортировка:
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" wire:click.prevent = "changeFilter(0,1)">Все команды</a>
                        <a class="dropdown-item" wire:click.prevent = "changeFilter(1)">Разрешенные команды</a>
                        <a class="dropdown-item" wire:click.prevent = "changeFilter(0)">Забаненные команды</a>
                    </div>
                </div>


                {{--Search--}}
                <div class="search-sm d-inline-block float-md-left mr-1 mb-1 align-top">
                    <input placeholder="Поиск..." wire:model = "search" >
                </div>
            </div>
            {{--         Start By Pagination  Sorting --}}
            <div class="float-md-right">
                <span class="text-muted text-small">Показать </span>
                <button class="btn btn-outline-dark btn-xs dropdown-toggle" type="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                    {{session()->get("limit")}}
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" wire:click.prevent = "changeLimit(5)">5</a>
                    <a class="dropdown-item" wire:click.prevent = "changeLimit(10)">10</a>
                    <a class="dropdown-item" wire:click.prevent = "changeLimit(20)">20</a>
                    <a class="dropdown-item" wire:click.prevent = "changeLimit(40)">40</a>
                    <a class="dropdown-item" wire:click.prevent = "changeLimit(60)">60</a>
                    <a class="dropdown-item" wire:click.prevent = "changeLimit(100)">100</a>

                </div>
            </div>
        </div>
    </div>
    <div class="separator mb-5"></div>
    <div class="col-12 list" data-check-all="checkAll">
        @if(count($teams)>0)
            @foreach($teams as $team)
                <div class="card d-flex flex-row mb-3">
                    <a class="d-flex" href="Layouts.Details.html">
                        <img src="{{$team->logo}}" class="list-thumbnail responsive border-0" />
                    </a>
                    <div class="pl-2 d-flex flex-grow-1 min-width-zero">
                        <div class="card-body align-self-center d-flex flex-column flex-lg-row justify-content-between min-width-zero align-items-lg-center">
                            <a href="Layouts.Details.html" class="w-40 w-sm-100">
                                <p class="list-item-heading mb-1 truncate">{{$team->title}}</p>
                            </a>
                            <p class="mb-1 text-muted text-small w-15 w-sm-100">{{$team->games->title}}</p>
                            <p class="mb-1 text-muted text-small w-15 w-sm-100">{{$team->created_at->diffForHumans()}}</p>
                            <div class="w-15 w-sm-100">
                                @if($team->status)
                                    <span class="badge badge-pill badge-success">Верифицирован</span>
                                @else
                                    <span class="badge badge-pill badge-danger">Не верифицирован</span>
                                @endif
                            </div>
                        </div>
                        {{--Companies Action--}}
                        <div class="custom-control custom-checkbox pl-1 align-self-center pr-4">

                            <button type="button" class="btn btn-outline-primary"  data-toggle="modal" wire:click="getInfo({{$team->id}})" data-target="#readCompanyModal">
                                <i class="simple-icon-eye"></i>
                            </button>


                            <button type="button" class="btn btn-outline-primary" data-toggle="modal"  data-target="#changeCompanyModal" wire:click="$emit('changeTeam',{{$team->id}})" >
                                <i class="iconsmind-Pencil"></i>
                            </button>


                            <button type="button" class="btn btn-outline-primary" onclick="confirm('Вы уверены?') || event.stopImmediatePropagation()"  wire:click="deleteTeam({{$team->id}})">
                                <i class="simple-icon-trash"></i>
                            </button>

                        </div>
                    </div>
                </div>
            @endforeach


            <nav class="mt-4 mb-3">
                {{$teams->links()}}
            </nav>
        @else
            <h2>Ничего не найдено!</h2>
        @endif

    </div>



</div>
