<div>
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="jumbotron">
                        <h2 class="display-4">Удалить команд из турнира</h2>
                        <p class="lead"></p>
                        <hr class="my-4">
                        <form wire:submit.prevent="submit">
                            @foreach($teams as $team)
                                @foreach($team->teams as $item)
                                    <div class="mb-4">
                                        <div class="custom-control custom-checkbox mb-4">
                                            <input wire:click="tima({{$item->id}})" type="checkbox" class="custom-control-input" id="customCheckThis[{{$item->id}}]">
                                            <label class="custom-control-label" for="customCheckThis[{{$item->id}}]">{{$item->title}}</label>
                                        </div>
                                    </div>
                                @endforeach
                            @endforeach
                            <div class="row">
                                <button type="submit" class="btn btn-danger">Удалить</button>
                                <a href="{{route('backend-tournaments')}}" class="btn btn-info">Назад</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


