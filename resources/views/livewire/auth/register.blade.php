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

                @if(!is_null($games))
                    @foreach($games as $game)
                        <div class="row pl-5">
                            <input type="radio"id="game{{$game->id}}" name="gameID" class="form-check-input" wire:model="game_id" value="{{$game->id}}">
                            <label for="game{{$game->id}}" class="form-check-label">{{$game->title}}</label>
                        </div>

                    @endforeach
                @endif


            @error('game_id') <p class="text-danger"> {{$message}}</p> @enderror

        </div>

        <div class="form-group">
            <label>Секретное слово</label>
            <small>(Используйте секретное слово для подачи заявки на участие в наших будущих турнирах )</small>
            <input type="password" class="form-control" wire:model='secret_key'>
            @error('secret_key') <p class="text-danger"> {{$message}}</p> @enderror

        </div>

        <div class="form-group">
            <label>Логотип команды</label>
            <input type="file" class="form-control" style="padding: 12px 0 12px 12px" wire:model='logo'>
            @error('logo') <p class="text-danger"> {{$message}}</p> @enderror

        </div>

        <div class="form-group">
            <label>Взнос команды для участия в турнире 10.000тг!</label>
        </div>
        <div class="form-group">
            <label>По всем вопросам можете обратиться</label>
            <a href="https://wa.me/77064142427" target="_blank"><i class="bx bxl-whatsapp"></i>+7 706 414 24-27</a>
        </div>

        <button type="submit" onclick="checkEvent()">Зарегистрироваться</button>
    </form>
</div>

@push('scripts')
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function () {

            function checkEvent() {
                fbq('track', 'CompleteRegistration');
            }

        })
    </script>
@endpush
