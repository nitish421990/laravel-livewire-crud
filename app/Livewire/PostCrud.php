<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;

class PostCrud extends Component
{
    public $posts, $title, $content, $postId;
    public $isEdit=false;
    public function render()
    {
        $this->posts = Post::latest()->get();

        return view('livewire.post-crud');
    }

    public function resetInput(){
        $this->title='';
        $this->content='';
        $this->postId='';
        $this->isEdit = false;
    }

    public function store()
    {

        $this->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        Post::Create([
            'title' => $this->title,
            'content' => $this->content,
        ]);

        session()->flash('message',"Post Created Successfully");
        $this->resetInput();
    }

    public function edit($id){
     $post= Post::findOrFail($id);
    //  dd($post);

    $this->title= $post->title;
    $this->content = $post->content;
    $this->postId= $post->id;
    $this->isEdit=true;
    }

    public function update(){
         $this->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        if($this->postId){
          $post= Post::find($this->postId);
           $post->update([
            'title' => $this->title,
            'content' => $this->content,
           ]);

           session()->flash('message',"Post Updted Successfully");
           $this->resetInput();

        }
    }

    public function delete($id){
        // dd($id);

        Post::find($id)->delete();
        session()->flash('message',"Post Deleted Successfully");

    }
}

// seeder in laravel
