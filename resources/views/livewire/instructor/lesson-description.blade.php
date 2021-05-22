<div>
    <article class="card" x-data="{open:false}">
        <div class="card-body bg-gray-100">
            <header>
                <h1 class="cursor-pointer" x-on:click="open = !open">Descripción de la lección</h1>
                <div x-show="open">
                    <hr class="my-2">
                    @if ($lesson->description)
                        <form wire:submit.prevent="update">
                            <textarea class="form-input w-full" wire:model="description.name"></textarea>
                            @error('description.name')
                                <span class="text-sm text-red-400"> {{$message}} </span>
                            @enderror
                            <div class="flex justify-end pt-2">
                                <button wire:click="destroy" type="button" class="btn btn-danger text-sm">Eliminar</button>
                                <button type="submit" class="btn btn-primary text-sm ml-2">Actualizar</button>
                            </div>
                        </form>
                    @else
                        <div>
                            <textarea class="form-input w-full" wire:model="name" placeholder="Agregue una descripción de la lección..."></textarea>
                            @error('name')
                                <span class="text-sm text-red-400"> {{$message}} </span>
                            @enderror
                            <div class="flex justify-end pt-2">
                                <button wire:click="store" class="btn btn-primary text-sm ml-2">Agregar</button>
                            </div>
                        </div>
                    @endif
                </div>
            </header>
        </div>
    </article>
</div>
