<div>
    <div class="flex flex-row mt-8">
        <button wire:click="openList('skillTab')">
            <p
                class="mr-3 font-semibold hover:text-white @if ($skillTab) text-white border-b border-orange-500 @else text-[#ADB7BE] @endif">
                Skills
            </p>
        </button>
        <button wire:click="openList('experienceTab')">
            <p
                class="mr-3 font-semibold hover:text-white @if ($experienceTab) text-white border-b border-orange-500 @else text-[#ADB7BE] @endif">
                Experience
            </p>
        </button>
        <button wire:click="openList('certificationTab')">
            <p
                class="mr-3 font-semibold hover:text-white @if ($certificationTab) text-white border-b border-orange-500 @else text-[#ADB7BE] @endif">
                Certifications
            </p>
        </button>


    </div>
    <div class="mt-8">
        @foreach ($list as $item)
            @if ($skillTab)
                <li> {{ $item->name }} </li>
            @else
                {{ $item }}
            @endif
        @endforeach
    </div>
</div>
