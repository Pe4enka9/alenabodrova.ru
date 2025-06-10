@extends('theme')
@section('title', 'Изменить сотрудника')
@section('style', asset('css/reg-style.css'))
@section('content')
    <section class="menu">
        <div class="menu-window">
            <div class="contact-info-container">
                <form action="{{ route('admin.edit-stuff', $user) }}" method="post">
                    @csrf
                    @method('PUT')

                    <div class="grid-form">
                        <h1 class="name-sect">Изменить сотрудника</h1>
                        <div class="two-rows">
                            <div class="full-row">
                                <label for="name">Имя</label>
                                <input type="text" name="name" id="name" placeholder="Имя" value="{{ $user->name }}">
                                @error('name') <p class="nameError">{{ $message }}</p> @enderror
                            </div>
                            <div>
                                <label for="patronymic">Отчество</label>
                                <input type="text" name="patronymic" id="patronymic" placeholder="Отчество"
                                       value="{{ $user->patronymic }}">
                                @error('patronymic') <p class="patronymicError">{{ $message }}</p> @enderror
                            </div>
                        </div>
                        <div class="two-rows">
                            <div class="full-row">
                                <label for="surname">Фамилия</label>
                                <input type="text" name="surname" id="surname" placeholder="Фамилия"
                                       value="{{ $user->surname }}">
                                @error('surname') <p class="surnameError">{{ $message }}</p> @enderror
                            </div>
                            <div class="full-row">
                                <label for="phone">Номер телефона</label>
                                <input type="text" name="phone" class="mask-phone" id="phone"
                                       placeholder="+7(___) ___-__-__" value="{{ $user->phone }}">
                                @error('phone') <p class="phoneError">{{ $message }}</p> @enderror
                            </div>
                        </div>
                        <div class="full-row">
                            <label for="specializations">Специализация</label>
                            <select name="specializations[]" id="specializations" multiple>
                                @foreach($specializations as $specialization)
                                    <option
                                        value="{{ $specialization->id }}" {{ in_array($specialization->id, $user->specializations->pluck('id')->toArray()) ? 'selected' : '' }}>{{ $specialization->name }}</option>
                                @endforeach
                            </select>
                            @error('specializations') <p class="passError">{{ $message }}</p> @enderror
                        </div>
                        <div class="full-row">
                            <label for="experience">Стаж работы</label>
                            <input type="number" name="experience" id="experience" placeholder="10"
                                   value="{{ $user->experience }}">
                            @error('experience') <p class="passError">{{ $message }}</p> @enderror
                        </div>

                        <input type="submit" class="reg" value="Изменить">
                    </div>
                </form>

            </div>
        </div>
    </section>

    <script src="https://snipp.ru/cdn/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://snipp.ru/cdn/maskedinput/jquery.maskedinput.min.js"></script>

    <script src="{{ asset('js/input-mask.js') }}"></script>
@endsection
