<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class ImageUpload extends Component
{
    use WithFileUploads;
    //array of temporary uploaded files
    public $image = [];
    //create a method for saving images
    public function save(){
        //validates that image is of certain size.
        $this->validate([
            'image.*' => 'image|max:1024', //1MB Max
        ]);
        //each uploaded img is stored in the public directory
        foreach ($this->image as $image){
            $image->store('public');
        }
    }
    public function render()
    {
        return view('livewire.image-upload', [
            //make a collection in the public directory while ensuring that the uploaded image is either
            //png, jpg, jpeg, gif, or webp
            //maps images into url.
            'images' => collect(Storage::files('public'))
                ->filter(function($file){
                    return in_array(strtolower(pathinfo($file, PATHINFO_EXTENSION)), ['png', 'jpg', 'jpeg', 'gif', 'webp']);
                })
                ->map(function($file){
                    return Storage::url($file);
                })
        ])->layout('layouts.app');
    }
}
