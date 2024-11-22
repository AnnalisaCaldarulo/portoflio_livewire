<x-layout>
    <div class="grid sm:grid-cols-12">
        <div class="min-h-[100px] bg-red-500 shadow rounded-full"></div>
        <div class="min-h-[100px] bg-red-500 shadow rounded-full"></div>
        <div class="min-h-[100px] bg-red-500 shadow rounded-full"></div>
        <div class="min-h-[100px] bg-red-500 shadow rounded-full"></div>
        <div class="min-h-[100px] bg-red-500 shadow rounded-full"></div>
        <div class="min-h-[100px] bg-red-500 shadow rounded-full"></div>
        <div class="min-h-[100px] bg-red-500 shadow rounded-full"></div>
        <div class="min-h-[100px] bg-red-500 shadow rounded-full"></div>
        <div class="min-h-[100px] bg-red-500 shadow rounded-full"></div>
        <div class="min-h-[100px] bg-red-500 shadow rounded-full"></div>
        <div class="min-h-[100px] bg-red-500 shadow rounded-full"></div>
        <div class="min-h-[100px] bg-red-500 shadow rounded-full"></div>
    </div>
    <section class="grid grid-cols-12 mt-4">
        <div class="sm:col-start-5 sm:col-end-9 col-span-12 sm:col-span-6 ">
            <h1 class="text-center text-white mb-4 text-4xl sm:text-5xl lg:text-6xl lg:leading-normal font-extrabold ">
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 to-orange-600">
                    Dahsboard
                </span>
            </h1>
        </div>
        <div class="col-span-12">
            <hr>
            <div class="grid md:grid-cols-12 my-12">
                <h2 class="text-2xl text-amber-500 sm:col-span-2 font-bold hover:cursor-pointer"> <i
                        class="bi bi-arrow-down-circle mr-1"></i> Inserisci una Skill</h2>
                <form class="text-white flex flex-col gap-4 w-full sm:row-start-2 sm:col-span-10 sm:col-start-3"
                    action="{{ route('skill.store') }}" method="POST">
                    @csrf
                    {{--  skill name --}}
                    <x-ui.input name="name" label="Skill name" method="classic" type="text" />
                    {{--  subject --}}
                    <x-ui.input name="subject" label="Ambito" method="classic" type="text" />
                    <x-ui.submitButton label="Salva" />

                </form>

            </div>
        </div>
        <div class="col-span-12">
            <hr>
            @livewire('create-project-form')
        </div>
    </section>
</x-layout>
