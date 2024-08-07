<div style="text-align:center"> 

    <h1>Counter Application</h1>
    <button wire:click="increment">+</button>
    <h1>
      {{$count}}
    </h1>
    <button wire:click="decrement">-</button>
    <br>
    <button style="margin-top:20px" wire:click="del">Reset</button>
</div>
