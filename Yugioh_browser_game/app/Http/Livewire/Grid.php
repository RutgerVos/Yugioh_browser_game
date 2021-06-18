<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
// use Illuminate\Support\Facades\Storage;

class Grid extends Component
{
    use WithFileUploads;

    public $count = 0;
    public $photo;

    public function save()
    {
        // $this->validate([
        //     'photo' => 'image|max:1024', // 1MB Max
        // ]);

        $this->photo->store('photos');
        $this->photo = "";
    }

    public function increment()
    {
        $this->count++;
    }
    public function decrement()
    {
        if($this->count != 0){
        $this->count--;
        }
    }
    public function render()
    {
        return view('livewire.grid');
    }
}
