<div>
     <form wire:submit="add">

     <input  type="text" wire:model.change="todo">
    <span>current todo: {{ $todo }}</span>
     <button type="submit"></button>
     </form>

    <ul>
        @foreach ($todos as $todo)
            <li>{{ $todo }}</li>
        @endforeach
    </ul>

</div>
