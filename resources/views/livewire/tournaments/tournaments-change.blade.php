{{--Modal window to create Company--}}
<div>
    <div class="modal-body">
        <form wire:submit.prevent="submit" enctype = 'multipart/form-data'>
            <div class="form-group">
                <h4>Наименование турнира</h4>
                <input type="text" class="form-control"   wire:model = "title">
                @error('title') <p class="text-danger"> {{$message}}</p> @enderror
            </div>
            <div class="form-group">
                <h4>Начало</h4>
                <input type="text" class="form-control"   wire:model = "start">
                @error('start') <p class="text-danger"> {{$message}}</p> @enderror
            </div>
            <div class="form-group">
                <h4>Тип игры</h4>
                <select class="form-control" name="type" wire:model = "game_id">
                    <option value="{{$game_id2}}">{{$game_id2_title}}</option>
                    @foreach($games as $game)
                        @if($game->id !== $game_id2)
                            <option value="{{$game->id}}">{{$game->title}}</option>
                        @endif
                    @endforeach
                </select>
                @error('game_id') <p class="text-danger"> {{$message}}</p>  @enderror

            </div>
            <div class="form-group">
                <h4>Информация о турнире</h4>
                <textarea placeholder="" class="form-control" rows="2" name="info" wire:model = "info"></textarea>
                @error('info') <p class="text-danger"> {{$message}}</p>  @enderror
            </div>
            <div class="form-group">
                <h4>Статус</h4>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck1" name="status" wire:model = "status">
                    <label class="custom-control-label show" style="font-size: 16px" for="customCheck1">Активный</label>
                </div>
            </div>
            <div class="form-group">
                <h4>Картинка турнира</h4>
                <img src="{{$image}}" width="150px" height="100px">
                <input type="file" class="form-control" id="exampleInputName" name="img" wire:model="img">
                @error('img') <p class="text-danger"> {{$message}}</p>  @enderror
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Отмена</button>
                <button type="submit" class="btn btn-primary">Создать</button>
            </div>
        </form>
    </div>

</div>
