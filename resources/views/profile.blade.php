@extends('theme')
@section('title', 'Личный кабинет')
@section('style', asset('css/profile-style.css'))
@section('content')
    <h1 class="name-sect">Личный кабинет</h1>
    <div class="container container-main-info">
        <div class="account-info">
            <div class="account-appearance">
                <div class="foto-profile">
                    <img class="" src="{{ asset('img/makeup.jpg') }}" alt="Фото профиля" srcset="">
                </div>
                <h1>{{ Auth::user()->name }} {{ Auth::user()->surname }}</h1>
                <div class="username">
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type="submit">Выйти</button>
                    </form>
                </div>
            </div>
            <div class="main-info">
                <h1 class="sect-name">Общая информация</h1>
                <div class="grid-main-info">
                    <p>Имя</p>
                    <input type="text" name="name" id="name" placeholder="{{ Auth::user()->name }}" disabled>
                    <p>Фамилия</p>
                    <input type="text" name="last_name" id="last_name" placeholder="{{ Auth::user()->surname }}"
                           disabled>
                    <p>Отчество</p>
                    <input type="text" name="patronymic" id="patronymic" placeholder="{{ Auth::user()->patronymic }}"
                           disabled>
                    <p>Телефон</p>
                    <input type="text" name="dateBirth" id="dateBirth" placeholder="{{ Auth::user()->phone }}" disabled>
                </div>
            </div>
            <div class="">

            </div>

        </div>

    </div>
    <div class="container">
        <h1 class="name-sect">Текущие записи</h1>
        <div class="card-container">
            @foreach($employments as $employment)
                <div class="card">
                    <p class="card-header">{{ $employment->specialist->user->name }} {{ mb_substr($employment->specialist->user->surname, 0, 1) }}. — {{ $employment->specialist->specialization->name }}</p>
                    <p class="card-detail"><span class="card-label">Время:</span> {{ $employment->date->format('H:i') }}</p>
                    <p class="card-detail"><span
                            class="card-label">Услуга:</span> {{ $employment->service->subcategory->category->name }}: {{ $employment->service->subcategory->name }}</p>
                    <p class="card-detail"><span
                            class="card-label">Дата:</span> {{ $employment->date->format('d.m.Y') }}</p>
                </div>
            @endforeach
        </div>
    </div>
@endsection
