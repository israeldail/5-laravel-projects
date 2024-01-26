<div class="flex flex-col w-{300px} mx-auto py16">
    {{-- The whole world belongs to you. --}}
    <div class="flex gap-4 justify-between">
        <input type="text" wire:model="todoText" wire:keydown.enter="addTodo" class="flex-1" placeholder="Type and hit enter">
    </div>
    <p>{{$todos}}</p>
</div>
