<div>


<section class="container mt-5" >
    <div class="row" >
    @foreach($songs as $song)
    <div class="col-12 col-md-3 my-5">
        <div class="card">
        <div class="card-body text-center">
            <h5 class="card-title">{{$song->name}}</h5>
            <p class="card-text">{{$song->id}}</p>
            <p class="card-text">{{$song->author}}</p>
            <p class="card-text">{{$song->price}}€</p>
            <p class="card-text">{{$song->category}}</p>
        </div>
        <a href="{{ route('song.edit', $song) }}" class="btn btn-secondary bottoni" >Modifica</a>
        <button class="btn btn-danger bottoni" wire:click="delete({{ $song->id }})">Cancella</button>
    </div>
    </div>
    @endforeach
    </div>
</section>  



</div>
