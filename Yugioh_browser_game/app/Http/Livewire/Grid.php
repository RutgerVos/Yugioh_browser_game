<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class Grid extends Component
{
    use WithFileUploads;

    public $count = 0;
    public $photo;
    public $numbers;

    public function save()
    {
        $this->validate([
            'photo' => 'required', // 2MB Max
        ]);
        
        $this->photo->storeAs('photos','render'.Auth::id().'.png');
        $this->reset('photo');
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
