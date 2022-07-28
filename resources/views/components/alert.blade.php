@props([
    'type' => 'success'
])
<div class="alert alert-{{ $type }} alert-dismissible fade show" role="alert" {{ $attributes }} {{--{{ $attributes->merge(['class' => 'mb-4']) }}--}}>
    <strong>{{ $slot }}</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
