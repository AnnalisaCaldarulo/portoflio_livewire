<div class="grid md:grid-cols-12 my-12" wire:submit="saveSkill">
    @dump($editMode)
    <h2 class="text-2xl text-amber-500 sm:col-span-2 font-bold hover:cursor-pointer"> <i
            class="bi bi-arrow-down-circle mr-1"></i>{{ $editMode ? 'Modifica "' . $name . '"' : 'Inserisci una Skill' }}
    </h2>
    <form class="text-white flex flex-col gap-4 w-full sm:row-start-2 sm:col-span-10 sm:col-start-3">
        {{--  skill name --}}
        <x-ui.input name="name" label="Skill name" method="livewire" type="text" />
        {{--  subject --}}
        <x-ui.input name="subject" label="Ambito" method="livewire" type="text" />
        <x-ui.submitButton label="Salva" />
        @if (session('success'))
            <div class="alert border rounded">
                <p className="text-green-500 italic text-2xl mt-2">{{ session('success') }}</p>
            </div>
        @endif
    </form>
</div>
