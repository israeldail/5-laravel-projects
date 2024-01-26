<div class="flex flex-col w-[300px] mx-auto py-16">
    {{-- The whole world belongs to you. --}}
    <div class="flex gap-4 justify-between">
        <input type="text" wire:model="todoText" wire:keydown.enter="addTodo" class="flex-1" placeholder="Type and hit enter">
        <button
        class="px-4 bg-indigo-500 hover:bg-indigo-600 disabled:cursor-not-allowed disabled:opacity-90 rounded text-white"
        wire:click='addTodo'
        >Add</button>
    </div>
    <div class="py-6">
        @if (count($todos) == 0)
            <p class="text-gray-500 text-center">There are no todos</p>
        @endif
        @foreach ($todos as $todo)
            <div class="flex gap-4 justify-between items-center py-1">
                <input type="checkbox" {{$todo->completed ? ' checked' : ''}} wire:change='toggleTodo({{$todo->id}})'>
                <label class="flex-1 {{$todo->completed ? 'line-through' : ''}}">{{ $todo->todo }}</label>
                <button wire:click='deleteTodo({{$todo->id}})'>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 hover:text-red-700">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                    </svg>
                      
                </button>
            </div>
        @endforeach
    </div>
</div>
