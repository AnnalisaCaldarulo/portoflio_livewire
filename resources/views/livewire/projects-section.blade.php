<div id="projects" class="pt-24">
    <h2 class="text-4xl font-bold text-white mb-4">My Projects</h2>
    <div class="text-white flex flex-row justify-center items-center gap-2 py-6">
        <button wire:click="openList('all')"
            class="rounded-full border-2 px-6 py-3 text-lg cursor-pointer {{ $btn === 'all' ? 'text-white  border-yellow-500' : 'text-[#ADB7BE] border-slate-600 hover:border-white hover:text-white' }}">
            All
        </button>
        <button wire:click="openList('frontend')"
            class="rounded-full border-2 px-6 py-3 text-lg cursor-pointer {{ $btn === 'frontend' ? 'text-white  border-yellow-500' : 'text-[#ADB7BE] border-slate-600 hover:border-white hover:text-white' }}">
            Frontend
        </button>
        <button wire:click="openList('backend')"
            class="rounded-full border-2 px-6 py-3 text-lg cursor-pointer {{ $btn === 'backend' ? 'text-white  border-yellow-500' : 'text-[#ADB7BE] border-slate-600 hover:border-white hover:text-white' }}">
            Backend
        </button>
    </div>
    <div class="grid md:grid-cols-2 gap-8 md:gap-12">
        @foreach ($projects as $project)
            <x-projectCard :project="$project" />
        @endforeach
    </div>
</div>
