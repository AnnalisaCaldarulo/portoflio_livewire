<x-layout>
    <div class="grid md:grid-cols-1 my-12 py-24">
        <h1 class="text-4xl text-amber-500 text-center font-bold">Inserisci una Skill</h1>
        <form class="text-white flex flex-col gap-4 w-full" action="{{route('skill.store')}}" method="POST">
            @csrf
            {{--  email --}}
            <label for="name" class="block mt-5  text-lg">
                Skill name
            </label>
            <input type="text" id="name" required name="name" placeholder="nome della skill"
                class="bg-[#18191E] border border-[#33353F] placeholder-[#9CA2A9] text-gray-100 text-lg rounded-lg block w-full p-5" />
            {{--  subject --}}
            <label for="subject" class="block mt-2 text-lg">
                Subject
            </label>
            <input type="text" id="subject" required name="subject" placeholder="linguaggio di programmazione e framework relativi"
                class="bg-[#18191E] border border-[#33353F] placeholder-[#9CA2A9] text-gray-100 text-lg rounded-lg block w-full p-2.5" />
            <button type="submit" class="mt-5 w-1/4 self-center font-medium text-lg py-2.5 px-5 rounded bg-orange-500">
                Salva
            </button>

        </form>
    </div>
</x-layout>
