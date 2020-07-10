<div>
    <form wire:submit.prevent = 'submit' enctype="multipart/form-data">
        <div class="form-group">
            <label>Наименование команды</label>
            <input type="text" class="form-control"  wire:model = 'title'>
            @error('title') <p class="text-danger"> {{$message}}</p> @enderror
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" wire:model = 'email'>
            @error('email') <p class="text-danger"> {{$message}}</p> @enderror

        </div>

        <div class="form-group">
            <label>Телефон</label>
            <input type="text" class="form-control"  wire:model="phone">
            @error('phone') <p class="text-danger"> {{$message}}</p> @enderror

        </div>

        <div class="form-group">
            <label>ФИО капитана команды</label>
            <input type="text" class="form-control"  wire:model="captain">
            @error('captain') <p class="text-danger"> {{$message}}</p> @enderror

        </div>

        <div class="form-group">
            <label>Немного слов о команде</label>
            <textarea class="form-control" cols="5" rows="5" wire:model="info"> </textarea>
            @error('info') <p class="text-danger"> {{$message}}</p> @enderror

        </div>

        <div class="form-group">
            <label>Специализация игры</label>
            <select class="form-control" wire:model='game_id'>
                @if(!is_null($games))
                    @foreach($games as $game)
                        <option value="{{$game->id}}">{{$game->title}}</option>
                    @endforeach
                    @endif


            </select>

            @error('game_id') <p class="text-danger"> {{$message}}</p> @enderror

        </div>

        <div class="form-group">
            <label>Секретное слово</label>
            <input type="password" class="form-control" wire:model='secret_key'>
            @error('secret_key') <p class="text-danger"> {{$message}}</p> @enderror

        </div>

        <div class="form-group">
            <label>Логотип команды</label>
            <input type="file" class="form-control" style="padding: 12px 0 12px 12px" wire:model='logo'>
            @error('logo') <p class="text-danger"> {{$message}}</p> @enderror

        </div>


        <button type="submit">Зарегистрироваться</button>
    </form>
</div>
