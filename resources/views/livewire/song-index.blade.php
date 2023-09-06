<div>



    <section class="container mt-5" >
    <div class="row" >
    @foreach($songs as $song)
    <div class="col-12 col-md-3 my-3 bordi">
    <div class="card" style="width: 18rem;height: 28rem;">
        <div class="card-body text-center">
        <h5 class="card-title">{{$song->name}}</h5>
        <p class="card-text">{{$song->id}}</p>
        <p class="card-text">{{$song->author}}</p>
        <p class="card-text">{{$song->price}}€</p>
        <p class="card-text">{{$song->category}}</p>
        </div>
    </div>
    </div>
    @endforeach
    </div>
    </section>  
















</div>
