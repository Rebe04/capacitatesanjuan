<x-app-layout>
    <div class="max-w-4xl mx-auto sm:px-6 lg:px-8 py-12">
        <h1 class="text-gray-500 text-3xl font-bold pb-4">Detalle del pedido</h1>
        <div class="card text-gray-600">
            <div class="card-body">
                <article class="flex items-center">
                    <img class="h-12 w-12 object-cover" src=" {{Storage::url($course->image->url)}} " alt="Imagen del curso">
                    <h1 class="text-lg ml-2"> {{$course->title}} </h1>
                    <p class="text-xl font-bold ml-auto">$ {{$course->price->value}} </p>
                </article>
                <div class="flex justify-end mt-2">
                    <a class="btn btn-primary mb-2" href=" {{route('payment.pay', $course)}} ">Comprar este curso</a>
                </div>
                <hr>
                <p class="text-sm mt-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus nihil cupiditate numquam nisi perferendis dicta facere et ad, ipsum voluptatem excepturi veritatis nobis porro delectus quos eaque? Officiis, officia consequatur!</p>
                <a class="text-red-500 font-bold" href="">Terminos y condiciones</a>
            </div>
        </div>
    </div>
</x-app-layout>