<button {{ $attributes->merge(['class' => 'bg-gray-200 text-black font-medium py-2 px-4 rounded']) }}>
    {{ $slot }}
</button>
