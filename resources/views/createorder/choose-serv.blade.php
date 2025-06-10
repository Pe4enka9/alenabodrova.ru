@extends('theme')
@section('title', 'Услуги и цены')
@section('style', asset('css/choose-serv-style.css'))
@section('content')
    <section class="menu">
        <div class="menu-window">
            <div class="about-company">
                <h1 class="name-sect">Выбрать услугу</h1>
            </div>
            <div class="nav-menu">
                @foreach($servicetypes as $st)
                    @foreach ($st->subcategories as $s)
                        @if (!$st->last)
                            <a class="menu-item" href="/createbyspecialist/{{$s->id}}">
                                <h2>{{$s->name}} ({{$st->name}})</h2>
                                <img src="img/grey-arrow-right.svg" alt="" srcset="">
                            </a>
                            <hr class="menu-hr">
                        @else
                            <a class="menu-item" href="/createbyspecialist/{{$s->id}}">
                                <h2>{{$s->name}} ({{$st->name}})</h2>
                                <img src="img/grey-arrow-right.svg" class="arrow" alt="" srcset="">
                            </a>
                        @endif
                    @endforeach
                @endforeach

            </div>

        </div>
    </section>

@endsection
