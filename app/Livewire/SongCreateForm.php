<?php

namespace App\Livewire;

use App\Models\Song;
use Livewire\Component;

class SongCreateForm extends Component
{

    public $name;
    public $author;
    public $category;
    public $price;

    public $rules = [
        'name' => 'required|min:10',
        'author' => 'required|min:3',
        'category' => 'required|min:4',
        'price' => 'required'
    ];

    protected $messages = [
        'name.required' => "Il titolo non puo' essere vuoto"
    ];

    public function store(){
        $this->validate();


        Song::create([
            'name'=>$this->name,
            'author'=>$this->author,
            'category'=>$this->category,
            'price'=>$this->price,
        ]);
        $this->reset();
    }

    public function render()
    {
        return view('livewire.song-create-form');
    }
}
