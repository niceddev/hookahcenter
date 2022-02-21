<div class="row mb-3">
    <label for="{{ $fieldName }}" class="text-secondary col-md-3 col-form-label">{{ $fieldLabel }}</label>

    <div class="col-md-5">
        <x-validation-error fieldName="{{ $fieldName }}"></x-validation-error>
        @if($fieldType === 'textarea')
            <textarea {{ $attributes->class(['form-control']) }}
                    id="{{ $fieldName }}"
                    name="{{ $fieldName }}"
                    rows="3">{{ $fieldValue ?? old($fieldName) }}</textarea>
        @else
            <input {{ $attributes->class(['form-control']) }}
                   id="{{ $fieldName }}"
                   type="{{ $fieldType }}"
                   name="{{ $fieldName }}"
                   value="{{ $fieldValue ?? old($fieldName) }}">
        @endif
    </div>

    <span class="col-md-3 form-text fs-6">
        Длина текста в диапазоне {{ $fieldRange }} символов.
    </span>
</div>
