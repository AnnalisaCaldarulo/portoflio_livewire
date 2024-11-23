<div class="grid grid-cols-12 my-12">
    <h2 class="text-2xl col-span-12 sm:col-span-2 text-amber-500 font-bold hover:cursor-pointer collapseSelector "> <i
            class="bi  mr-1 collapse-arrow rotating"></i> Inserisci un progetto</h2>
    <form
        class="text-white flex flex-col gap-4 w-full col-span-12 sm:col-span-10 sm:col-start-3 sm:row-start-2 toBeCollapsed openCollapse"
        wire:submit="createProject">
        <div class="gap-4 flex flex-col">
            <x-ui.input name="name" label="Nome del progetto" type="text" method="livewire" />
        </div>
        <div class="gap-4 flex flex-col">
            <x-ui.input name="stack" label="Linguaggio di programmazione e framework relativi" type="text"
                method="livewire" />
        </div>
        <div class="gap-4 flex flex-col">
            <x-ui.textarea method="livewire" label="Descrizione" name="description" />
        </div>
        <div class="grid sm:grid-cols-12 gap-4">
            <h5 class="mt-2 text-lg col-span-12">Categoria</h5>
            <div
                class=" col-span-2 flex items-center ps-4 border border-[#33353F] bg-[#18191E] rounded dark:border-[#33353F]">
                <input id="radio-fe" type="radio" value="1" name="bordered-radio" wire:model.blur="category"
                    class="@error('category') border-orange-700  @enderror w-4 h-4 dark:bg-[#33353F] ">
                <label for="radio-fe" class="w-full py-4 ms-2 text-sm font-medium text-white">Frontend</label>
            </div>
            <div
                class=" col-span-2 flex items-center ps-4 border border-[#33353F] rounded dark:border-[#33353F] bg-[#18191E]">
                <input id="radio-be" type="radio" value="2" name="bordered-radio" wire:model.blur="category"
                    class="@error('category') border-orange-700   @enderror w-4 h-4 dark:bg-[#33353F] ">
                <label for="radio-be" class="w-full py-4 ms-2 text-sm font-medium text-white">Backend</label>
            </div>
            @error('category')
                <p class="text-red-500 italic">{{ $message }}</p>
            @enderror
        </div>
        <div class="grid sm:grid-cols-12 gap-4">
            <h5 class="mt-2 text-lg col-span-12">Immagine</h5>
            <x-filepond::upload class="col-span-12 @error('img') border-orange-700  @enderror" max-files="1"
                wire:model.blur="img" />
            @error('img')
                <p class="text-red-500 italic">{{ $message }}</p>
            @enderror
        </div>
        <div class="gap-4 flex flex-col">
            <x-ui.input type="url" name="github" label="Github URL" method="livewire" />
        </div>
        <div class="gap-4 flex flex-col">
            <x-ui.input type="url" name="preview" label="Preview URL" method="livewire" />
        </div>
        <x-ui.submitButton label="Salva" />
        @if (session('success'))
            <p className="text-green-500 italic text-2xl mt-2">{{ session('success') }}</p>
        @endif
    </form>
</div>
