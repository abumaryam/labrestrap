@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['style' => 'font-weight: 500; font-size: 0.875rem; line-height: 1.25rem; color: rgb(22 163 74);']) }}>
        {{ $status }}
    </div>
@endif
