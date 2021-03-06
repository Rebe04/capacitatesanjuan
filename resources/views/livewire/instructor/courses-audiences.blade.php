
<section>
    <h1 class="text-2xl font-bold">AUDIENCIA DEL CURSO</h1>
    <hr class="mt-2 mb-6">
    
    @foreach ($course->audiences as $item)
        <article class="card mb-4">
           <div class="card-body bg-gray-10">
              @if ($audience->id == $item->id)
                  <form wire:submit.prevent="update">
                     <input type="text" wire:model="audience.name" class="form-input w-full">
                     @error('audience.name')
                        <span class="text-xs text-red-400"> {{$message}} </span> 
                     @enderror
                  </form>
              @else
              <header class="flex justify-between">
                <h1> {{$item->name}} </h1>
                <div>
                  <i wire:click="edit( {{$item}}) " class="fas fa-edit text-blue-500 cursor-pointer"></i>
                  <i wire:click="destroy( {{$item}} )" class="fas fa-trash text-red-500 cursor-pointer ml-2"></i>
                </div>
             </header>
              @endif
           </div>
        </article>
    @endforeach
    <article class="card">
       <div class="card-body bg-gray-100">
          <form wire:submit.prevent="store">
             <input wire:model="name" type="text" class="form-input w-full" placeholder="Agregar el nombre de la audiencia">
             @error('name')
                 <span class="text-xs text-red-400"> {{$message}} </span>
             @enderror
             <div class="flex justify-end mt-2">
                <button class="btn btn-primary" type="submit">Agregar audiencia</button>
             </div>
          </form>
       </div>
    </article>
 </section>