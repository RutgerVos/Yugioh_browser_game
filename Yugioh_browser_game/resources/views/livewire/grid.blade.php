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
            <img src="{{ $photo->temporaryUrl() }}" width="100" height="60">
        @endif
        <input type="file" wire:model="photo" name="photo">

        @error('photo') <span class="error">{{ $message }}</span> @enderror

        <button class="bg-white" type="submit" wire:loading.remove>Save Photo</button>
    </form>
    <div class="grid grid-cols-5 grid-rows-2 gap-0">
  @for ($monsterzone = 1; $monsterzone <= 5; $monsterzone++)
      <div class="col-span-1 row-start-1 border-2 border-black  h-32 w-32">
    monster zone
  </div>
@endfor
  @for ($spelltrap = 1; $spelltrap <= 5; $spelltrap++)
  <div class="col-span-1 row-start-2 border-2 border-black h-32 w-32">
    spell&trap zone
  </div>
@endfor
</div>
</div>
<footer class="font-italic">© 2021</footer>