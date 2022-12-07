<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post as Posts;

class Post extends Component
{
    public $posts, $title, $img_url, $price, $description, $post_id;
    public $updatePost = false;

    protected $listeners = [
        'deletePost' => 'deletePost',
    ];

    // Validation rules
    protected $rules = [
        'title' => 'required',
        'price' => 'required',
        'description' => 'required',
    ];

    public function render()
    {
        $this->posts = Posts::all();
        return view('livewire.post');
    }

    public function resetFields()
    {
        $this->title = '';
        $this->img_url = '';
        $this->price = '';
        $this->description = '';
    }

    public function store()
    {
        $this->validate();

        Posts::create([
            'title' => $this->title,
            'img_url' => $this->img_url,
            'price' => $this->price,
            'description' => $this->description,
        ]);

        session()->flash('message', 'Post created successfully.');

        $this->resetFields();

        $this->emit('postAdded');
    }

    public function edit($id)
    {
        $post = Posts::find($id);
        $this->post_id = $id;
        $this->title = $post->title;
        $this->img_url = $post->img_url;
        $this->price = $post->price;
        $this->description = $post->description;

        $this->updatePost = true;
    }

    public function cancel()
    {
        $this->updatePost = false;
        $this->resetFields();
    }

    public function update()
    {
        $this->validate();

        try {
            $post = Posts::find($this->post_id);
            $post->update([
                'title' => $this->title,
                'img_url' => $this->img_url,
                'price' => $this->price,
                'description' => $this->description,
            ]);

            $this->updatePost = false;

            session()->flash('message', 'Post updated successfully.');
            $this->resetFields();
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());
        }
    }

    public function deletePost($id)
    {
        try {
            Posts::find($id)->delete();
            session()->flash('message', 'Post deleted successfully.');
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());
        }
    }
}
