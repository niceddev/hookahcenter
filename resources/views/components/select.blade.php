<div class="row mb-3">
    <label for="{{ $fieldName }}" class="text-secondary col-md-3 col-form-label">{{ $fieldLabel }}</label>
    <div class="col-md-5">
        <x-validation-error fieldName="{{ $fieldName }}"></x-validation-error>
        <select class="form-select" id="{{ $fieldName }}" name="{{ $fieldName }}">
            <option value="default" @if((old($fieldName) == 'default') || isset($fieldSelected)) selected @endif>Выберите категорию</option>
            @foreach($dataSet as $category)
                <option value="{{ $category->id }}"
                        @if((old($fieldName) == $category->id) || (isset($fieldSelected) && $fieldSelected == $category->id)) selected @endif>
                    {{ $category->title }}
                </option>
            @endforeach
        </select>
    </div>
</div>
