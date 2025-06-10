@extends('theme')
@section('title', 'Вход')
@section('style', asset('css/reg-style.css'))
@section('content')
    <section class="menu">
        <div class="menu-window">
            <div class="contact-info-container">
                <form action="{{ route('sign-in') }}" method="post">
                    @csrf

                    <div class="grid-form">
                        <h1 class="name-sect">Авторизация</h1>

                        <div class="full-row">
                            <label for="phone">Номер телефона</label>
                            <input type="text" name="phone" class="mask-phone" id="phone"
                                   placeholder="+7(___) ___-__-__" value="{{ old('phone') }}">
                            @error('phone') <p class="phoneError">{{ $message }}</p> @enderror
                        </div>
                        <div class="full-row">
                            <label for="password">Пароль</label>
                            <input type="password" name="password" id="password" placeholder="******">
                            @error('password') <p class="passError">{{ $message }}</p> @enderror
                        </div>

                        @session('error') <p>{{ $value }}</p> @endsession

                        <input type="submit" class="reg" value="Войти">
                    </div>
                </form>

            </div>
        </div>
    </section>

    <script src="https://snipp.ru/cdn/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://snipp.ru/cdn/maskedinput/jquery.maskedinput.min.js"></script>

    <script src="js/input-mask.js"></script>
@endsection
