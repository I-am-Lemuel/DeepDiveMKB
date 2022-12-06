<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post as Posts;

class Post extends Component
{
    public $posts;

    protected $rules = [
        'title' => 'required',
        'price' => 'required',
        'description' => 'required',
    ];


    public function render()
    {
        $this->posts = Posts::all();
        // $this->posts = Posts::select('id', 'title', 'file_path', 'price', 'description')->get();
        return view('livewire.post');
    }
}