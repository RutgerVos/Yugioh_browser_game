<div>
    <p>HELLO world</p>
   
    <h1>{{ $count }}</h1>
    <div>
      <button wire:click="increment()">+</button>
      <button wire:click="decrement()">-</button>
      <div wire:loading>
          Processing Add....
      </div>
    </div>
</div>
