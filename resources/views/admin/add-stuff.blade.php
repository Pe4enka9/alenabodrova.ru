@extends('theme')
@section('title', 'Добавить сотрудника')
@section('style', asset('css/reg-style.css'))
@section('content')
    <section class="menu">
        <div class="menu-window">
            <div class="contact-info-container">
                <form action="{{ route('admin.add-stuff') }}" method="post">
                    @csrf

                    <div class="grid-form">
                        <h1 class="name-sect">Добавить сотрудника</h1>
                        <div class="two-rows">
                            <div class="full-row">
                                <label for="name">Имя</label>
                                <input type="text" name="name" id="name" placeholder="Имя" value="{{ old('name') }}">
                                @error('name') <p class="nameError">{{ $message }}</p> @enderror
                            </div>
                            <div>
                                <label for="patronymic">Отчество</label>
                                <input type="text" name="patronymic" id="patronymic" placeholder="Отчество"
                                       value="{{ old('patronymic') }}">
                                @error('patronymic') <p class="patronymicError">{{ $message }}</p> @enderror
                            </div>
                        </div>
                        <div class="two-rows">
                            <div class="full-row">
                                <label for="surname">Фамилия</label>
                                <input type="text" name="surname" id="surname" placeholder="Фамилия"
                                       value="{{ old('surname') }}">
                                @error('surname') <p class="surnameError">{{ $message }}</p> @enderror
                            </div>
                            <div class="full-row">
                                <label for="phone">Номер телефона</label>
                                <input type="text" name="phone" class="mask-phone" id="phone"
                                       placeholder="+7(___) ___-__-__" value="{{ old('phone') }}">
                                @error('phone') <p class="phoneError">{{ $message }}</p> @enderror
                            </div>
                        </div>
                        <div class="full-row">
                            <label for="specializations">Специализация</label>
                            <select name="specializations[]" id="specializations" multiple>
                                @foreach($specializations as $specialization)
                                    <option value="{{ $specialization->id }}">{{ $specialization->name }}</option>
                                @endforeach
                            </select>
                            @error('specializations') <p class="passError">{{ $message }}</p> @enderror
                        </div>
                        <div class="full-row">
                            <label for="experience">Стаж работы</label>
                            <input type="number" name="experience" id="experience" placeholder="10"
                                   value="{{ old('experience') }}">
                            @error('experience') <p class="passError">{{ $message }}</p> @enderror
                        </div>
                        <div class="full-row">
                            <label for="password">Пароль</label>
                            <input type="password" name="password" id="password" placeholder="******">
                            @error('password') <p class="passError">{{ $message }}</p> @enderror
                        </div>
                        <div class="full-row">
                            <label for="password_confirmation">Повторите пароль</label>
                            <input type="password" name="password_confirmation" id="password_confirmation"
                                   placeholder="******">
                            @error('password_confirmation') <p class="passconfError">{{ $message }}</p> @enderror
                        </div>

                        <input type="submit" class="reg" value="Добавить">
                    </div>
                </form>

            </div>
        </div>
    </section>

    <script src="https://snipp.ru/cdn/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://snipp.ru/cdn/maskedinput/jquery.maskedinput.min.js"></script>

    <script src="{{ asset('js/input-mask.js') }}"></script>
@endsection
