<?php

namespace App\Http\Livewire\Post;

use Livewire\Component;

class Index extends Component
{
    public $user;
    public function render()
    {
        return view('livewire.post.index');
    }
}
