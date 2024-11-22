<label for="{{ $name }}" class="block mt-2 text-lg">
    {{ $label }}
</label>
<textarea id="{{ $name }}"
    @if ($method == 'livewire') wire:model.blur="{{ $name }}" @else name="{{ $name }}" @endif
    placeholder="{{ $label }}"
    class="border border-[#33353F] @error('{{ $name }}') border-orange-700  @enderror bg-[#18191E]  placeholder-[#9CA2A9] text-gray-100 text-lg rounded-lg block w-full p-2.5"></textarea>
@error('{{ $name }}')
    <p class="text-red-500 italic">{{ $message }}</p>
@enderror
