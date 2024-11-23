<div>
    <div class="grid sm:grid-cols-12 gap-4 mt-4">
        <div class="col-span-12 grid sm:grid-cols-12 gap-4 mb-5">

            <h2 class="text-2xl text-amber-500 sm:col-span-2 font-bold hover:cursor-pointer capitalize"> <i
                    class="bi bi-arrow-down-circle mr-1"></i> Elenco {{ $element }} </h2>
            <div
                class="col-start-5 col-span-2 flex items-center ps-4 border border-[#33353F] bg-[#18191E] rounded dark:border-[#33353F]">
                <input id="skill" type="radio" value="skill" name="bordered-radio" wire:model.live="element"
                    class=" w-4 h-4 dark:bg-[#33353F] ">
                <label for="skill" class="w-full py-4 ms-2 text-sm font-medium text-white">Skill</label>
            </div>
            <div
                class=" col-span-2 flex items-center ps-4 border border-[#33353F] rounded dark:border-[#33353F] bg-[#18191E]">
                <input id="experience" type="radio" value="experience" name="bordered-radio" wire:model.live="element"
                    class=" w-4 h-4 dark:bg-[#33353F] ">
                <label for="experience" class="w-full py-4 ms-2 text-sm font-medium text-white">Experience</label>
            </div>
            <div
                class=" col-span-2 flex items-center ps-4 border border-[#33353F] rounded dark:border-[#33353F] bg-[#18191E]">
                <input id="certification" type="radio" value="certification" name="bordered-radio"
                    wire:model.live="element" class=" w-4 h-4 dark:bg-[#33353F] ">
                <label for="certification" class="w-full py-4 ms-2 text-sm font-medium text-white">Certification</label>
            </div>
        </div>
    </div>

    <table class="p-4 table-auto text-white border ">
        <thead>
            <tr>
                @foreach ($cols as $col)
                    <th>{{ $col }}</th>
                @endforeach

            </tr>
        </thead>
        @dump($cols)
        <tbody>
            @foreach($elementList as $element)
            <tr>
                @foreach($element->getFillable() as $attribute)
                <td>{{$element->$attribute}} </td>
                @endforeach
            </tr>
           @endforeach
        </tbody>
    </table>

</div>
