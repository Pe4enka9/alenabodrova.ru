@extends('theme')
@section('title', 'Услуги и цены')
@section('style', asset('css/choose-spec-style.css'))
@section('content')
    <section class="menu">
        <div class="menu-window">
            <div class="about-company">
                <h1 class="name-sect">Выбрать специалиста</h1>
            </div>
            <div class="nav-menu">
                @foreach ($stuffspec as $s)

                    @if ($s!=$stuffspec->last())
                        <a class="menu-item" href="/createbyservice/{{$s->id}}">
                            <div class="">
                                <h2>{{$s->user->name}} {{mb_substr($s->user->surname, 0, 1);}}.
                                    ({{$s->specialization->name}})</h2>
                            </div>
                            <img src="img/grey-arrow-right.svg" alt="" srcset="">
                        </a>
                        <hr class="menu-hr">
                    @else
                        <a class="menu-item" href="/createorder?service_id=&&stuff_id={{$s->id}}">
                            <div class="">
                                <h2>{{$s->user->name}} {{mb_substr($s->user->surname, 0, 1);}}.
                                    ({{$s->specialization->name}})</h2>
                            </div>
                            <img src="img/grey-arrow-right.svg" alt="" srcset="">
                        </a>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
    <script src="js/overflow.js"></script>
@endsection
