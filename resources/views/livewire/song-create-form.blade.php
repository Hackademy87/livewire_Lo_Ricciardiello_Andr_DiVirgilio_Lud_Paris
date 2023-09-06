
<x-layout>
<form wire:model="">
  <div class="mb-3">
    <label  class="form-label">nome</label>
    <input type="email" class="form-control" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label  class="form-label">artista</label>
    <input type="text" class="form-control">
  </div>


  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">categorie</label>
    <input type="text" class="form-control">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">prezzo</label>
    <input type="numeric" class="form-control">
  </div>

  

  <button type="submit" class="btn btn-primary">Submit</button>
</form>


</x-layout>
