@extends('theme')
@section('title', 'Запись')
@section('style', asset('css/reg-style.css'))
@section('content')
    <section class="menu">
        <div class="menu-window">
            <div class="contact-info-container">
                <form action="{{ route('stuff.store', $user) }}" method="post">
                    @csrf

                    <div class="grid-form">
                        <h1 class="name-sect">Запись</h1>

                        <div class="full-row">
                            <label for="date">Дата</label>
                            <input type="datetime-local" name="date" id="date" value="{{ old('date') }}">
                            @error('date') <p class="phoneError">{{ $message }}</p> @enderror
                        </div>
                        <div class="full-row">
                            <label for="service_id">Услуга</label>
                            <select name="service_id" id="service_id">
                                @foreach($services as $service)
                                    <option value="{{ $service->id }}">{{ $service->specialization->name }}</option>
                                @endforeach
                            </select>
                            @error('service_id') <p class="phoneError">{{ $message }}</p> @enderror
                        </div>

                        <input type="submit" class="reg" value="Записаться">
                    </div>
                </form>

            </div>
        </div>
    </section>

    <script src="https://snipp.ru/cdn/jquery/2.1.1/jquery.min.js"></script>
@endsection
