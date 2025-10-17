<a {{ $attributes }}
    class=" 
    {{ $active
        ? 'flex items-center px-4 py-2.5 text-txtPrimary rounded-xl bg-bgSecondary/20 group'
        : 'flex items-center px-4 py-2.5 text-txtPrimary rounded-xl hover:bg-bgSecondary/10 
            group transition-colors duration-200' }} "
    @if ($active) aria-current="page" @endif>
    {{ $slot }}
</a>
