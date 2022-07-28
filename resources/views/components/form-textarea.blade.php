<div class="col">
    <label for="{{ $name }}" class="form-label">{{ $title }}</label>
    <textarea class="form-control"
              id="{{ $name }}"
              name="{{ $name }}"
              placeholder="{{ $placeHolder ?? $title }}">{!! $value ?? old($name)  !!}</textarea>
</div>
