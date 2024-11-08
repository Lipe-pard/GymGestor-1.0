<button type="{{$type}}" class="@if (isset($primary)) bg-[#F39C12] hover:bg-[#E67E22]@else bg-[#2C3E50] hover:bg-[#34495E] @endif border border-transparent text-white px-4 py-2 rounded flex items-center gap-2" {{$attributes}} wire:loading.attr="disabled">
    {{ $slot }}
</button>
