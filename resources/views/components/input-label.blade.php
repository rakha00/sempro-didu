@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-[#2563EA]']) }}>
    {{ $value ?? $slot }}
</label>
