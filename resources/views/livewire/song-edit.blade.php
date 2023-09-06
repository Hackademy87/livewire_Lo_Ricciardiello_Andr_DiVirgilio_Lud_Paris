<div>
    
<form wire:submit.prevent="update">
    <div class="mb-3">
        <label class="form-label">Nome</label>
        <input wire:model.blur="name" type="text" class="form-control">
        <div class="text-danger">@error('name') {{ $message }} @enderror</div>
    </div>
    <div class="mb-3">
        <label  class="form-label">Artista</label>
        <input wire:model.blur="author" type="text" class="form-control">
        <div class="text-danger">@error('author') {{ $message }} @enderror</div>
    </div>
    <div class="mb-3">
        <label  class="form-label">Categoria</label>
        <input wire:model.blur="category" type="text" class="form-control">
        <div class="text-danger">@error('category') {{ $message }} @enderror</div>
    </div>
    <button type="submit" class="btn btn-primary">Salva</button>
</form>

</div>
