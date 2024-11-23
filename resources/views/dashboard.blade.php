<x-layout>
    <section class="grid grid-cols-12 mt-4">
        <div class="sm:col-start-5 sm:col-end-9 col-span-12 sm:col-span-6 ">
            <h1 class="text-center text-white mb-4 text-4xl sm:text-5xl lg:text-6xl lg:leading-normal font-extrabold ">
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 to-orange-600">
                    Dashboard
                </span>
            </h1>
        </div>
        <div class="min-h-[50px]" id="skillform"></div>
        <div class="col-span-12">
            <hr>
            @livewire('skill-form')
        </div>
        <div class="col-span-12">
            <hr>
            @livewire('create-project-form')
        </div>

        <div class="col-span-12 ">
            <hr>
            @livewire('element-list')
        </div>
    </section>
</x-layout>
