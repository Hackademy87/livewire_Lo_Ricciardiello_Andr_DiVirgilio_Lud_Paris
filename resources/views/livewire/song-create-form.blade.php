<div>
 
  <form wire:submit.prevent="store">
    <div class="mb-3">
      <label  class="form-label">nome</label>
      <input wire:model.blur="name" type="text" class="form-control">
      <div class="text-danger">@error('name') {{ $message }} @enderror</div>
    </div>
    
    
    <div class="mb-3">
      <label  class="form-label">artista</label>
      <input wire:model.blur="author" type="text" class="form-control">
      <div class="text-danger">@error('author') {{ $message }} @enderror</div>
    </div>


    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">categorie</label>
      <input wire:model.blur="category" type="text" class="form-control">
      <div class="text-danger">@error('category') {{ $message }} @enderror</div>
    </div>

    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">prezzo</label>
      <input wire:model.blur="price" type="number" class="form-control">
      <div class="text-danger">@error('price') {{ $message }} @enderror</div>
    </div>

    

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>



</div>
