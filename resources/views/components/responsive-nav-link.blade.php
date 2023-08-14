@props(['active'])

@php
$classes = ($active ?? false)
            ? 'link-dark'
            : 'link-primary';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
