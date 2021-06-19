<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <input wire:model="name" type="text" />
    <button wire:click="submit">Submit</button>

    @if($success)<div>Saved</div>@endif
</div>
