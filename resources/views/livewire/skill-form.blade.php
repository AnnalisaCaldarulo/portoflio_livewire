<div class="grid md:grid-cols-12 my-12">
    <div class="col-span-12 grid sm:grid-cols-12 gap-4 mb-5">

        <h2 class="text-2xl text-amber-500 sm:col-span-2 font-bold hover:cursor-pointer capitalize"> <i
                class="bi bi-arrow-down-circle mr-1"></i> {{ $editMode ? 'Modifica "' . $model . '"' : 'Inserisci ' . $model }}</h2>
        <div
            class="col-start-5 col-span-2 flex items-center ps-4 border border-[#33353F] bg-[#18191E] rounded dark:border-[#33353F]">
            <input id="skill" type="radio" value="skill" name="bordered-radio" wire:model.live="model"
                class=" w-4 h-4 dark:bg-[#33353F] ">
            <label for="skill" class="w-full py-4 ms-2 text-sm font-medium text-white">Skill</label>
        </div>
        <div
            class=" col-span-2 flex items-center ps-4 border border-[#33353F] rounded dark:border-[#33353F] bg-[#18191E]">
            <input id="experience" type="radio" value="experience" name="bordered-radio" wire:model.live="model"
                class=" w-4 h-4 dark:bg-[#33353F] ">
            <label for="experience" class="w-full py-4 ms-2 text-sm font-medium text-white">Experience</label>
        </div>
        <div
            class=" col-span-2 flex items-center ps-4 border border-[#33353F] rounded dark:border-[#33353F] bg-[#18191E]">
            <input id="certification" type="radio" value="certification" name="bordered-radio" wire:model.live="model"
                class=" w-4 h-4 dark:bg-[#33353F] ">
            <label for="certification" class="w-full py-4 ms-2 text-sm font-medium text-white">Certification</label>
        </div>
    </div>
    @if ($model == 'skill')
        <form class="text-white flex flex-col gap-4 w-full sm:row-start-2 sm:col-span-10 sm:col-start-3"
            wire:submit="saveSkill">
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

    @elseif($model == 'experience')
    <h1 class="text-white">form experience</h1>
    @elseif($model == 'certification')
    <h1 class="text-white">form certification</h1>
    @endif
</div>
