{{--Modal window to create Company--}}


<div>
    <div class="modal-body">
        @if(count($tournaments)>0 && count($teams)>0 && count($steps)>0 && !is_null($current))

            <form wire:submit.prevent="submit" enctype = 'multipart/form-data'>


                <div class="form-group">
                    <h4>Турнир</h4>
                    <select class="form-control" name="type" wire:model = "tournament_id">
                        <option selected value="{{$match["tournament_id"]}}">{{$current["tournament"]}}</option>

                    @foreach($tournaments as $tournament)
                            @if($tournament->id !== $match["tournament_id"])
                            <option value="{{$tournament->id}}">{{$tournament->title}}</option>
                            @endif
                        @endforeach
                    </select>
                    @error('tournament_id') <p class="text-danger"> {{$message}}</p>  @enderror
                </div>

                <div class="form-group">
                    <h4>Этап</h4>
                    <select class="form-control" name="type" wire:model = "step_id">
                        <option selected value="{{$match["step_id"]}}">{{$current["step"]}}</option>

                    @foreach($steps as $step)
                            @if($step->id !== $match["step_id"])
                            <option value="{{$step->id}}">{{$step->title}}</option>
                            @endif
                        @endforeach
                    </select>
                    @error('step_id') <p class="text-danger"> {{$message}}</p>  @enderror
                </div>

                <div class="form-group">
                    <h4>Команда 1</h4>
                    <select class="form-control" name="type" wire:model = "team1">
                        <option selected value="{{$match["team1"]}}">{{$current["team1"]}}</option>
                        @foreach($teams as $team)
                            @if($team->id !== $match["team1"])
                            <option value="{{$team->id}}">{{$team->title}}</option>
                            @endif
                        @endforeach
                    </select>
                    @error('team1') <p class="text-danger"> {{$message}}</p>  @enderror
                </div>

                <div class="form-group">
                    <h4>Команда 2</h4>
                    <select class="form-control" name="type" wire:model = "team2">
                        <option selected value="{{$match["team2"]}}">{{$current["team2"]}}</option>
                        @foreach($teams as $team)
                            @if($team->id !== $match["team2"])
                                <option value="{{$team->id}}">{{$team->title}}</option>
                            @endif
                        @endforeach
                    </select>
                    @error('team2') <p class="text-danger"> {{$message}}</p>  @enderror
                </div>

                <div class="form-group">
                    <h4>Победитель</h4>
                    <select class="form-control" name="type" wire:model = "winner">
                        <option selected value="{{$match["winner"]}}">{{$current["winner"]}}</option>
                        @foreach($teams as $team)
                            @if($team->id !== $match["winner"])
                                <option value="{{$team->id}}">{{$team->title}}</option>
                            @endif
                        @endforeach
                    </select>
                    @error('winner') <p class="text-danger"> {{$message}}</p>  @enderror
                </div>

                <div class="form-group">
                    <h4>Результат</h4>
                    <input type="text" class="form-control"   wire:model = "result">
                    @error('result') <p class="text-danger"> {{$message}}</p> @enderror
                </div>
                <div class="form-group">
                    <h4>Начало</h4>
                    <input type="text" class="form-control datepicker" autocomplete="off"
                           data-provide="datepicker" data-date-autoclose="true"
                           data-date-format="mm/dd/yyyy" data-date-today-highlight="true"
                           onchange="this.dispatchEvent(new InputEvent('input'))" wire:model = "start">
                    @error('start') <p class="text-danger"> {{$message}}</p> @enderror
                </div>
                <div class="form-group">
                    <h4>Информация о команде</h4>
                    <textarea placeholder="" class="form-control" rows="2" name="info" wire:model = "info"></textarea>
                    @error('info') <p class="text-danger"> {{$message}}</p>  @enderror
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Отмена</button>
                    <button type="submit" class="btn btn-primary">Обновить</button>
                </div>
            </form>

        @else
            <h1>Создайте турнир или команду!</h1>
        @endif
    </div>

</div>

