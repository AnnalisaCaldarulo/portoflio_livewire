<div class="grid md:grid-cols-1 my-12">
    @filepondScripts
    <h1 class="text-4xl text-amber-500  font-bold">Inserisci un progetto </h1>
    <form class="text-white flex flex-col gap-4 w-full">
        <div class="gap-4 flex flex-col">
            <label for="name" class="block mt-5 text-lg">
                Nome del progetto
            </label>
            <input type="text" id="name" required placeholder="nome della skill"
                class="bg-[#18191E] border border-[#33353F] placeholder-[#9CA2A9] text-gray-100 text-lg rounded-lg block w-full p-5" />
        </div>
        <div class="gap-4 flex flex-col">
            <label for="stack" class="block mt-2 text-lg">
                Stack
            </label>
            <input type="text" id="stack" required
                placeholder="linguaggio di programmazione e framework relativi"
                class="bg-[#18191E] border border-[#33353F] placeholder-[#9CA2A9] text-gray-100 text-lg rounded-lg block w-full p-2.5" />
        </div>
        <div class="grid sm:grid-cols-12 gap-4">
            <h5 class="mt-2 text-lg col-span-12">Categoria</h5>
            <div
                class=" col-span-2 flex items-center ps-4 border border-[#33353F] bg-[#18191E] rounded dark:border-[#33353F]">
                <input id="radio-fe" type="radio" name="bordered-radio"
                    class="w-4 h-4 text-amber-600 bg-gray-100 border-gray-300 focus:ring-amber-500 dark:focus:ring-amber-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-[#33353F] dark:border-gray-600">
                <label for="radio-fe" class="w-full py-4 ms-2 text-sm font-medium text-white">Frontend</label>
            </div>
            <div
                class=" col-span-2 flex items-center ps-4 border border-[#33353F] rounded dark:border-[#33353F] bg-[#18191E]">
                <input id="radio-be" type="radio" name="bordered-radio"
                    class="w-4 h-4 text-amber-600 bg-gray-100 border-gray-300 focus:ring-amber-500 dark:focus:ring-amber-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-[#33353F] dark:border-gray-600">
                <label for="radio-be" class="w-full py-4 ms-2 text-sm font-medium text-white">Backend</label>
            </div>
        </div>
        <div class="grid sm:grid-cols-12 gap-4">
            <h5 class="mt-2 text-lg col-span-12">Immagine</h5>
            <x-filepond::upload class="col-span-12 border-orange-200" max-files="1"  wire:model="img" />
        </div>
        <div class="gap-4 flex flex-col">
            <label for="gihub" class="block mt-2 text-lg">
                Url github
            </label>
            <input type="url" id="gihub" required placeholder="indirizzo@github.com"
                class="bg-[#18191E] border border-[#33353F] placeholder-[#9CA2A9] text-gray-100 text-lg rounded-lg block w-full p-2.5" />
        </div>
        <div class="gap-4 flex flex-col">
            <label for="preview" class="block mt-2 text-lg">
                Url preview
            </label>
            <input type="url" id="preview" required placeholder="indirizzo@github.com"
                class="bg-[#18191E] border border-[#33353F] placeholder-[#9CA2A9] text-gray-100 text-lg rounded-lg block w-full p-2.5" />
        </div>

        <button type="submit" class="mt-5 w-1/4 self-center font-medium text-lg py-2.5 px-5 rounded bg-orange-500">
            Salva
        </button>

    </form>
</div>
