<x-layout>
    <x-hero />


    <div id="about" class="pt-24">
        <section class="text-white ">
            <div class="md:grid md:grid-cols-2 gap-8 items-start px-4 xl:gap-16 sm:py-16 xl:px-16 z-10">
                <img alt="about me" src="/images/about.png" width="500" height="500" />
                <div class="mt-4 md:mt-0 text-left flex flex-col h-full">
                    <h2 class="text-4xl font-bold text-white mb-4">About me</h2>
                    <p class="text-base md:text-lg">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illo
                        qui, itaque ipsum voluptatem voluptates unde iste repudiandae, rem harum optio eaque debitis
                        officia similique accusantium, alias totam id. Voluptas, minus.</p>
                    @livewire('qualification-section')
                </div>
            </div>

        </section>
        <section>
            @livewire('projects-section')
        </section>
    </div>
</x-layout>
