@props(['messages'])

@if ($messages)
<div class="alert alert-danger" role="alert">
    <h4 class="alert-heading">Warning!</h4>
    <ul>
        @foreach ((array) $messages as $message)
        <li>{{ $message }}</li>
        @endforeach
    </ul>
</div>
@endif