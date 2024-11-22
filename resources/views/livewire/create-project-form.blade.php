<div class="grid md:grid-cols-1 my-12">
    <h1 class="text-4xl text-amber-500  font-bold">Inserisci un progetto </h1>
    <form class="text-white flex flex-col gap-4 w-full" wire:submit="createProject">
        <div class="gap-4 flex flex-col">
            <label for="name" class="block mt-5 text-lg">
                Nome del progetto
            </label>
            <input type="text" id="name" placeholder="nome del progetto" wire:model.blur="name"
                class=" border border-[#33353F] @error('name') border-orange-700  @enderror bg-[#18191E] placeholder-[#9CA2A9] text-gray-100 text-lg rounded-lg block w-full p-5" />
            @error('name')
                <p class="text-red-500 italic">{{ $message }}</p>
            @enderror
        </div>
        <div class="gap-4 flex flex-col">
            <label for="stack" class="block mt-2 text-lg">
                Stack
            </label>
            <input type="text" id="stack" wire:model.blur="stack"
                placeholder="linguaggio di programmazione e framework relativi"
                class="border border-[#33353F] @error('stack') border-orange-700  @enderror bg-[#18191E]  placeholder-[#9CA2A9] text-gray-100 text-lg rounded-lg block w-full p-2.5" />
            @error('stack')
                <p class="text-red-500 italic">{{ $message }}</p>
            @enderror
        </div>
        <div class="gap-4 flex flex-col">
            <label for="description" class="block mt-2 text-lg">
                Descrizione
            </label>
            <textarea id="description" wire:model.blur="description"
                placeholder="linguaggio di programmazione e framework relativi"
                class="border border-[#33353F] @error('description') border-orange-700  @enderror bg-[#18191E]  placeholder-[#9CA2A9] text-gray-100 text-lg rounded-lg block w-full p-2.5" ></textarea>
            @error('description')
                <p class="text-red-500 italic">{{ $message }}</p>
            @enderror
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
            <x-filepond::upload
                class="col-span-12 @error('img') border-orange-700  @enderror"
                max-files="1" wire:model.blur="img" />
            @error('img')
                <p class="text-red-500 italic">{{ $message }}</p>
            @enderror
        </div>
        <div class="gap-4 flex flex-col">
            <label for="gihub" class="block mt-2 text-lg">
                Url github
            </label>
            <input type="url" id="gihub" placeholder="indirizzo@github.com" wire:model.blur="github"
                class="border border-[#33353F] @error('github') border-orange-700 @enderror bg-[#18191E]  placeholder-[#9CA2A9] text-gray-100 text-lg rounded-lg block w-full p-2.5" />
            @error('github')
                <p class="text-red-500 italic">{{ $message }}</p>
            @enderror
        </div>
        <div class="gap-4 flex flex-col">
            <label for="preview" class="block mt-2 text-lg">
                Url preview
            </label>
            <input type="url" id="preview" placeholder="indirizzo@preview.com" wire:model.blur="preview"
                class="border border-[#33353F] @error('preview') border-orange-700 @enderror bg-[#18191E]  placeholder-[#9CA2A9] text-gray-100 text-lg rounded-lg block w-full p-2.5" />
            @error('preview')
                <p class="text-red-500 italic">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="mt-5 w-1/4 self-center font-medium text-lg py-2.5 px-5 rounded bg-orange-500">
            Salva
        </button>
        @if (session('success'))
            <p className='text-green-500 text-lg mt-2'>{{ session('success') }}</p>
        @endif
    </form>
</div>
