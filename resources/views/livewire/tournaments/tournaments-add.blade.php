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
                <input type="text" class="form-control datepicker" autocomplete="off"
                       data-provide="datepicker" data-date-autoclose="true"
                       data-date-format="mm/dd/yyyy" data-date-today-highlight="true"
                       onchange="this.dispatchEvent(new InputEvent('input'))" wire:model = "start">
                @error('start') <p class="text-danger"> {{$message}}</p> @enderror
            </div>
            <div class="form-group">
                <h4>Тип игры</h4>
                <select class="form-control" name="type" wire:model = "game_id">
                    @foreach($games as $game)
                        <option value="{{$game->id}}">{{$game->title}}</option>
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
            <div class="custom-file">
                <h4>Картинка турнира</h4>
                <input type="file" id="inputGroupFile01" class="custom-file-input" name="img" wire:model="img">
                <label style="font-size: 16px" class="custom-file-label" for="inputGroupFile01">Выбрать файл</label>
                @error('img') <p class="text-danger"> {{$message}}</p>  @enderror
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Отмена</button>
                <button type="submit" class="btn btn-primary">Создать</button>
            </div>
        </form>
    </div>

</div>
