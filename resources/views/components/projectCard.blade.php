<div class="mb-5">
    <div class="h-52 md:j:h-72 rounded-t-xl relative group overflow-hidden"
        style="background: url({{ Storage::url($project->img) }}); background-size: cover; background-repeat: no-repeat;background-position: center;">
        <div
            class="overlay items-center justify-center absolute top-0 left-0 w-full h-full bg-[#181818] bg-opacity-0 hidden group-hover:flex group-hover:bg-opacity-80 transition-all duration-500">
            <a target="_blank" href={gitUrl}
                class="h-14 w-14 mr-2 border-2 relative rounded-full border-[#ADB7BE] hover:border-white group/link">
                <i
                    class="bi bi-code-slash text-2xl text-[#ADB7BE] absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2  cursor-pointer group-hover/link:text-white"></i>

            </a>
            <a target="_blank" href={gitUrl}
                class="h-14 w-14 border-2 relative rounded-full border-[#ADB7BE] hover:border-white group/link">
                <i
                    class="bi bi-eye-slash text-2xl text-[#ADB7BE] cursor-pointer group-hover/link:text-white absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2"></i>
            </a>
        </div>
    </div>
    <div class="text-white rounded-b-xl mt-3 bg-[#181818] py-6 px-4">
        <h5 class="font-xl font-semibold mb-2">{{ $project->name }}</h5>
        <p class="text-[#ADB7BE]"> {{ $project->description }} </p>
    </div>
</div>
