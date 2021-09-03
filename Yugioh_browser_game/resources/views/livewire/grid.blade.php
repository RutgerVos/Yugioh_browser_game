<div class="bg-blue-900">
<!-- <div wire:poll.keep-alive>
    Current time: {{ now() }}
</div> -->
    <p class="font-italic">counter</p>
   
    <h1>{{ $count }}</h1>
    <div>
      <button wire:click="increment()" class="">+</button>
      <button wire:click="decrement()">-</button>
      <div wire:loading.inline>
          Processing change....
      </div>
    </div>
    <form wire:submit.prevent="save">
        <!-- <div wire:loading wire:target="photo">Uploading...</div> -->
        @if ($photo)
            Photo Preview:
            <img src="{{ $photo->temporaryUrl() }}" width="50" height="60">
        @endif
        <input type="file" wire:model="photo" name="photo">

        @error('photo') <span class="error">{{ $message }}</span> @enderror

        <button type="submit">Save Photo</button>
    </form>
<footer class="font-italic">© 2021</footer>
</div>
