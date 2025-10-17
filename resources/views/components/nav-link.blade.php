@props(['active' => false])

<a {{ $attributes->merge([
    'class' => ($active
        ? 'block py-2 px-3 md:p-0 text-txtPrimary font-light rounded-sm md:bg-transparent md:text-txtPrimary md:border-b md:border-txtPrimary/80'
        : 'block py-2 px-3 md:p-0 text-txtPrimary font-light rounded-sm md:bg-transparent md:text-txtPrimary hover:md:border-b hover:md:border-txtPrimary/80')
]) }}>
    {{ $slot }}
</a>
