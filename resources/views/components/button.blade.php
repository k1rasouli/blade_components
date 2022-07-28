@props([
    'look' => 'primary',
    'type' => 'button'
])
<div class="row mb-2">
    <div class="col-12">
        <button type="{{ $type }}" class="btn btn-{{ $look }}" {{ $attributes }}>{{ $slot }}</button>
    </div>
</div>
