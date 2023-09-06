<?php

namespace App\Livewire;

use App\Models\Song;
use Livewire\Component;

class SongIndex extends Component
{

  public function delete($id){
    Song::find($id)->delete();
}

    public function render()
    {


      $songs = Song::all();
        return view('livewire.song-index', compact('songs'));
    }
}
