<label for="{{ $name }}" class="block mt-5 text-lg mb-3">
    {{ $label }}
</label>
<input type="{{ $type }}" id="{{ $name }}" placeholder="{{ $label }}"
    @if ($method == 'livewire') wire:model.live="{{ $name }}" 
     @else name="{{ $name }}" @endif
    class="date border border-[#33353F] @error('{{ $name }}') border-orange-700  @enderror bg-[#18191E] placeholder-[#9CA2A9] text-gray-100 text-lg rounded-lg block w-full p-5" />
