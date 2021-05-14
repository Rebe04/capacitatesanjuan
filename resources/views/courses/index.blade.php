<x-app-layout>
    <section class="bg-cover" style="background-image: url({{asset('img/cursos/banner_cursos.jpg')}})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-48">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-white font-bold text-3xl">Encuentra variedad de cursos para ti</h1>
                <p class="text-white text-lg mt-2 mb-4">La mejor alternativa para reforzar tus conocimientos y potenciar tu ritmo
                    laboral o estudiantil
                </p>

                @livewire('search')
            </div>
        </div>
    </section>

    @livewire('courses-index')
</x-app-layout>