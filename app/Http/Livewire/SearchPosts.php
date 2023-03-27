<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\BlogPost;

class SearchPosts extends Component
{
    public $search = '';
    
    public function render()
    {
        //return view('livewire.search-posts');
        return view('livewire.search-posts', [
            'posts' => BlogPost::where('title', $this->search)->get(),
        ]);
    }
}
