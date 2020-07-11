<div>
    <form wire:submit.prevent="submit">
    @foreach($teams as $team)
    <div class="mb-4">
        <div class="custom-control custom-checkbox mb-4">
            <input wire:click="tima({{$team->id}})" type="checkbox" class="custom-control-input" id="customCheckThis[{{$team->id}}]">
            <label class="custom-control-label" for="customCheckThis[{{$team->id}}]">{{$team->title}}</label>
        </div>
    </div>
        @endforeach
    <button type="submit">SEND</button>
    </form>
</div>


