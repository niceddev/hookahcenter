<x-panel-layout>
    <x-slot name="title">Вход в Админ-панель</x-slot>

    <div class="text-center container">
        <main class="form-signin">
            <form method="POST" action="{{ route('panel.auth') }}">
                @csrf
                <a href="{{ route('panel.login') }}" class="text-decoration-none">
                    <img class="my-5" src="{{ asset('images/logo.svg') }}" width="250px">
                    <h1 class="h3 mb-3 fw-normal">Вход в Админ-панель</h1>
                </a>
                @error('failed_auth')
                <p class="alert-danger">{{ $message }}</p>
                @enderror
                @error('email')
                <p class="mt-2 alert-danger">{{ $message }}</p>
                @enderror
                <div class="form-floating">
                    <input name="email" type="email" class="form-control" id="floatingInput" value="{{ old('email') }}">
                    <label for="floatingInput">Ваша почта:</label>
                </div>
                @error('password')
                <p class="mt-2 alert-danger">{{ $message }}</p>
                @enderror
                <div class="form-floating my-3">
                    <input name="password" type="password" class="form-control" id="floatingPassword">
                    <label for="floatingPassword">Ваш пароль</label>
                </div>

                <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" value="remember-me"> Запомнить меня
                    </label>
                </div>

                <button class="w-100 btn btn-lg btn-dark" type="submit">Вход</button>
                <p class="mt-5 mb-3 text-muted">&copy; 2021–2022</p>
            </form>
        </main>
    </div>


</x-panel-layout>
