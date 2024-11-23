<div class="grid md:grid-cols-12 my-12">
    <div class="col-span-12 grid grid-cols-12 gap-4 mb-5">

        <h2 class="text-2xl text-amber-500 col-span-12 sm:col-span-2 font-bold hover:cursor-pointer capitalize"> <i
                class="bi bi-arrow-down-circle mr-1"></i>
            {{ $editMode ? 'Modifica "' . $model . '"' : 'Inserisci ' . $model }}</h2>
        <div
            class="sm:col-start-5 col-span-12 sm:col-span-2 flex items-center ps-4 border   @if ($model == 'skill') border-orange-500 @else border-[#33353F] @endif bg-[#18191E] rounded">
            <input id="skill" type="radio" value="skill" name="modelRadio" wire:model.live="model" class=" w-4 h-4">
            <label for="skill" class="w-full py-4 ms-2 text-sm font-medium text-white">Skill</label>
        </div>
        <div
            class=" col-span-12 sm:col-span-2 flex items-center ps-4 border  @if ($model == 'experience') border-orange-500 @else border-[#33353F] @endif rounded bg-[#18191E]">
            <input id="experience" type="radio" value="experience" name="modelRadio" wire:model.live="model"
                class=" w-4 h-4">
            <label for="experience" class="w-full py-4 ms-2 text-sm font-medium text-white">Experience</label>
        </div>
        <div
            class=" col-span-12 sm:col-span-2 flex items-center ps-4 border  @if ($model == 'certification') border-orange-500 @else border-[#33353F] @endif rounded bg-[#18191E]">
            <input id="certification" type="radio" value="certification" name="modelRadio" wire:model.live="model"
                class=" w-4 h-4">
            <label for="certification" class="w-full py-4 ms-2 text-sm font-medium text-white">Certification</label>
        </div>
    </div>
    @if ($model == 'skill')
        <form class="text-white flex flex-col gap-4 w-full sm:row-start-2 sm:col-span-8 sm:col-start-3"
            wire:submit="saveItem">
            {{--  skill name --}}
            <x-ui.input name="name" label="Skill name" method="livewire" type="text" />
            @error('name')
                <p class="text-red-500 italic">{{ $message }}</p>
            @enderror
            {{--  subject --}}
            <x-ui.input name="subject" label="Ambito" method="livewire" type="text" />
            @error('subject')
                <p class="text-red-500 italic">{{ $message }}</p>
            @enderror
            <x-ui.submitButton label="Salva" />
            <div class="w-1/2">
                <x-ui.success-message />
            </div>
        </form>
    @elseif($model == 'experience')
        <form class="text-white col-span-12 flex flex-col gap-4 w-full sm:row-start-2 sm:col-span-8 sm:col-start-3"
            wire:submit="saveItem">
            {{--  lavoro --}}
            <x-ui.input name="job" label="Titolo dell'incarico" method="livewire" type="text" />
            @error('job')
                <p class="text-red-500 italic">{{ $message }}</p>
            @enderror
            {{--  date --}}
            <div class="sm:grid gap-8 sm:grid-cols-12">
                <div class="sm:col-span-4">
                    <x-ui.input name="start" label="Data di inizio:" method="livewire" type="date" />
                    @error('start')
                        <p class="text-red-500 italic">{{ $message }}</p>
                    @enderror
                </div>
                <div class="sm:col-span-4">
                    <x-ui.input name="finish" label="Data di fine:" method="livewire" type="date" />
                    @error('finish')
                        <p class="text-red-500 italic">{{ $message }}</p>
                    @enderror
                </div>
                <div class="sm:col-span-4 my-auto">
                    <x-ui.input name="is_current" label="Lavoro attuale?" method="livewire"
                        type="checkbox" />
                    @error('is_current')
                        <p class="text-red-500 italic">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <x-ui.submitButton label="Salva" />

            <div class="w-1/2 self-center">
                <x-ui.success-message />
            </div>

        </form>
    @elseif($model == 'certification')
        <form class="text-white flex flex-col gap-4 w-full sm:row-start-2 sm:col-span-8 sm:col-start-3"
            wire:submit="saveItem">
            {{--   name --}}
            <x-ui.input name="certificationName" label="Certificazione" method="livewire" type="text" />
            @error('certificationName')
                <p class="text-red-500 italic">{{ $message }}</p>
            @enderror
            {{--  link --}}
            <x-ui.input name="link" label="Link" method="livewire" type="url" />
            @error('link')
                <p class="text-red-500 italic">{{ $message }}</p>
            @enderror
            <x-ui.submitButton label="Salva" />
        </form>
    @endif
    <script>
        let is_current = document.querySelector('#is_current')
        let finish = document.querySelector('#finish')
        is_current.addEventListener('change', toggleInput());

        function toggleInput() {
            console.log('in');

            // Se la checkbox è selezionata, disabilita l'input
            if (is_current.checked == true) {
                console.log('checked');

                finish.disabled = true;
            } else {
                console.log('unchecked');

                finish.disabled = false;
            }
        }
    </script>
</div>
