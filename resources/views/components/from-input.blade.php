<div class="col">
    <label for="{{ $name }}" class="form-label">{{ $title }}</label>
    <input type="{{ $type }}" class="form-control"
           id="{{ $name }}"
           name="{{ $name }}"
           placeholder="{{ $placeHolder ?? $title }}"
           @if(!in_array($type, ['file', 'password', 'submit'])) value="{{ $value ?? old($name) }}" @endif>
</div>
