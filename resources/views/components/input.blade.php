@props([
    '$errorType'
])

<div class="row mb-3">
    @error($errorType)
        <p class="alert-danger">{{ $message }}</p>
    @enderror
{{--    <label for="input" class="text-secondary col-form-label">{{ $slot }}</label>--}}
{{--    <div class="col-md-5">--}}
{{--        <input {{ $attributes->class(['form-control']) }} id="input">--}}
{{--    </div>--}}
{{--    <span class="col-md-3 form-text">--}}
{{--        Длина текста в диапазоне 5-30 букв.--}}
{{--    </span>--}}
</div>



{{--<div class="row mb-3">--}}
{{--    @error('description')--}}
{{--    <p class="alert-danger">{{ $message }}</p>--}}
{{--    @enderror--}}
{{--    <label for="productDescription">Описание</label>--}}
{{--    <textarea name="description" class="form-control" rows="3" id="productDescription"></textarea>--}}
{{--</div>--}}
