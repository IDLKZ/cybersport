{{--Modal window to create Company--}}
<div>
    <div class="modal-body">
        <form wire:submit.prevent="submit" enctype = 'multipart/form-data'>
            <div class="form-group">
                <h4>Наименование команды</h4>
                <input type="text" class="form-control"   wire:model = "title">
                @error('title') <p class="text-danger"> {{$message}}</p> @enderror
            </div>
            <div class="form-group">
                <h4>Почта</h4>
                <input type="email" class="form-control"   wire:model = "email">
                @error('email') <p class="text-danger"> {{$message}}</p> @enderror
            </div>
            <div class="form-group">
                <h4>Телефон команды</h4>
                <input type="text" class="form-control"   wire:model = "phone">
                @error('phone') <p class="text-danger"> {{$message}}</p> @enderror
            </div>
            <div class="form-group">
                <h4>ФИО Капитана команды</h4>
                <input type="text" class="form-control"   wire:model = "captain">
                @error('captain') <p class="text-danger"> {{$message}}</p> @enderror
            </div>
            <div class="form-group">
                <h4>Секретный ключ</h4>
                <input type="password" class="form-control"   wire:model = "secret_key">
                @error('secret_key') <p class="text-danger"> {{$message}}</p> @enderror
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
                <h4>Информация о команде</h4>
                <textarea placeholder="" class="form-control" rows="2" name="info" wire:model = "info"></textarea>
                @error('info') <p class="text-danger"> {{$message}}</p>  @enderror
            </div>
            <div class="form-group">
                <h4>Статус</h4>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck1" name="status" wire:model = "status">
                    <label class="custom-control-label show" style="font-size: 16px" for="customCheck1">Верифицирован</label>
                </div>
            </div>
            <div class="form-group">
                <h4>Логотип компании</h4>
                <input type="file" class="form-control" id="exampleInputName" name="img" wire:model="logo">
                @error('logo') <p class="text-danger"> {{$message}}</p>  @enderror
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Отмена</button>
                <button type="submit" class="btn btn-primary">Создать</button>
            </div>
        </form>
    </div>

</div>
