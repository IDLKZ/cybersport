{{--Modal window to create Company--}}
<div>
    <div class="modal-body">
        @if(count($tournaments)>0 && count($steps)>0)

        <form wire:submit.prevent="submit" enctype = 'multipart/form-data'>


            <div class="form-group">
                <h4>Турнир</h4>
                <select class="form-control" name="type" wire:model = "tournament_id">
                    @foreach($tournaments as $tournament)
                        <option wire:click="getTeam({{$tournament->id}})" value="{{$tournament->id}}">{{$tournament->title}}</option>
                    @endforeach
                </select>
                @error('tournament_id') <p class="text-danger"> {{$message}}</p>  @enderror
            </div>

            <div class="form-group">
                <h4>Этап</h4>
                <select class="form-control" name="type" wire:model = "step_id">
                    @foreach($steps as $step)
                        <option value="{{$step->id}}">{{$step->title}}</option>
                    @endforeach
                </select>
                @error('step_id') <p class="text-danger"> {{$message}}</p>  @enderror
            </div>

            <div class="form-group">
                <h4>Команда 1</h4>
                <select class="form-control" name="type" wire:model = "team1">
                    @if(!is_null($teams))
                    @foreach($teams as $team)
                        <option wire:click="addTeam1({{$team['id']}}, '{{$team['title']}}')" value="{{$team['id']}}">{{$team['title']}}</option>
                    @endforeach
                        @endif
                </select>
                @error('team1') <p class="text-danger"> {{$message}}</p>  @enderror
            </div>

            <div class="form-group">
                <h4>Команда 2</h4>
                <select class="form-control" name="type" wire:model = "team2">
                    @if(!is_null($teams))
                    @foreach($teams as $team)
                        <option wire:click="addTeam2({{$team['id']}}, '{{$team['title']}}')" value="{{$team['id']}}">{{$team['title']}}</option>
                    @endforeach
                        @endif
                </select>
                @error('team2') <p class="text-danger"> {{$message}}</p>  @enderror
            </div>

            <div class="form-group">
                <h4>Победитель</h4>
                <select class="form-control" name="type" wire:model = "winner">
                    @if(isset($winners['id1']))
                        <option value="{{$winners['id1']}}">{{$winners['title1']}}</option>
                    @endif
                    @if(isset($winners['id2']))
                        <option value="{{$winners['id2']}}">{{$winners['title2']}}</option>
                    @endif
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
                <button type="submit" class="btn btn-primary">Создать</button>
            </div>
        </form>

            @else
        <h1>Создайте турнир или команду!</h1>
            @endif
    </div>

</div>
