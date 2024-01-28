<div class="p-6">
    {{-- Be like water. --}}
    <form wire:submit.prevent="save" class="flex flex-col w-[400px] mx-auto py-16">
        @if($image)
            Preview:
            <div class="flex flex-wrap justify-center gap-6">
                @foreach($image as $img)
                    <img src="{{$img->temporaryUrl()}}" class="w-[110px] h-[90px] object-cover" alt="images">
                @endforeach
            </div>
        @endif
        <input type="file" wire:model="image" class="mb-4" multiple >

        @error('image') <span class="error">{{ $message }}</span> @enderror

        <button type="submit" class="py-2 bg-indigo-500 hover:bg-indigo-600 rounded text-white">Save Photo</button>
    </form>
    @foreach($images as $image)
        <img src="{{$image}}" class="w-[128px] object-cover" alt="pic">
    @endforeach
</div>
