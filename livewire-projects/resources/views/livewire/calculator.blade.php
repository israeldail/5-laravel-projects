<div>
    {{-- Success is as dangerous as failure. --}}
    <div class="flex flex-col items-center">
        <div class="flex p-16 mx-auto justify-center items-center gap-4">
            <input type="number" wire:model="number1" placeholder="Number 1">
            <select class="w-24" wire:model="action" name="action" id="action">
                <option>+</option>
                <option>-</option>
                <option>*</option>
                <option>/</option>
                <option>%</option>
            </select>
            <input type="number" wire:model="number2" placeholder="Number 2">
            <button
            class="py-2 px-4 bg-indigo-500 hover:bg-indigo-600 disabled:cursor-not-allowed disabled:bg-opacity-90 rounded text-white"
             wire:click="calculate"
             >=</button>
        </div>
        <p class="text-3xl">{{ $result }}</p>
    </div>

</div>
