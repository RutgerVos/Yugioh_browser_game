<div class="bg-blue-900">
    <p>counter</p>
   
    <h1>{{ $count }}</h1>
    <div>
      <button wire:click="increment()" class="animate-spin">+</button>
      <button wire:click="decrement()">-</button>
      <div wire:loading.inline>
          Processing Add....
      </div>
    </div>
    <!-- <div wire:poll.keep-alive>
    Current time: {{ now() }}
</div> -->
<form wire:submit.prevent="save">
    <input type="file" wire:model="photo">

    @error('photo') <span class="error">{{ $message }}</span> @enderror

    <button type="submit">Save Photo</button>
</form>
</div>
