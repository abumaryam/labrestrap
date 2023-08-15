@props(['messages'])

@if ($messages)
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <ul>
        @foreach ((array) $messages as $message)
        <li>{{ $message }}</li>
        @endforeach
    </ul>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif