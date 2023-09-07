<?php

namespace App\Livewire;

use App\Models\Song;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Rule;

class SongCreateForm extends Component
{
    use WithFileUploads;
    public $name;
    public $author;
    public $category;
    public $price;

 // #[Rule('image|max:1024')]
 public $img;

 protected $rules = [
    'name' => 'required|min:3',
    'author' => 'required|min:5',
    'category'=> 'required|min:4',
    'price' => 'required|min:2',
    'img' => 'image|max:1024'
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
            'img'=> $this->img->store('public/songs')
        ]);
        $this->reset();
    }

    public function updated($property){
        $this->validateOnly($property);
    }


    public function render()
    {
        return view('livewire.song-create-form');
    }
}
