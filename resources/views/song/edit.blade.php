<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>Modifica del libro: {{ $song->name }}</h3>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <livewire:song-edit songid="{{ $song->id }}" />
            </div>
        </div>
    </div>
</x-layout>