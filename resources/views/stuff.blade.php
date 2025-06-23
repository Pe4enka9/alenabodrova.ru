@extends('theme')
@section('title', 'Специалисты')
@section('style', asset('css/stuff-style.css'))
@section('content')
    <section class="stuff">
        <h1 class="name-sect">Специалисты</h1>
        <div class="stuff-cont">
            @foreach($stuffs as $stuff)
                <div class="stuff-elem">
                    <div class="stuff-number-name ">
                        <h1 class="stuff-number">{{ $stuff->id }}</h1>
                        <div class="stuff-main-inf">
                            <h1 class="stuff-name">{{ "$stuff->surname " . mb_substr($stuff->name, 0, 1) . '.' . mb_substr($stuff->patronymic, 0, 1) . '.' }}</h1>
                            <p class="exp">Стаж: от {{ $stuff->experience }} года</p>
                        </div>
                    </div>
                    <p class="role">
                        {{ $stuff->specializations->pluck('name')->implode(' / ') }}
                    </p>

                    @if(auth()->check())
                        <a href="{{ route('stuff.create', $stuff) }}">
                            <button class="stuff-make-order">Записаться</button>
                        </a>
                    @else
                        <a href="{{ route('sign-in.form') }}">
                            <button class="stuff-make-order">Записаться</button>
                        </a>
                    @endif
                </div>
            @endforeach

            {{--            <div class="stuff-elem">--}}
            {{--                <div class="stuff-number-name ">--}}
            {{--                    <h1 class="stuff-number">1</h1>--}}
            {{--                    <div class="stuff-main-inf ">--}}
            {{--                        <h1 class="stuff-name">Марченко А.С.</h1>--}}
            {{--                        <p class="exp">Стаж: от 1 года</p>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--                <p class="role">бровист / мастер маникюра</p>--}}
            {{--                <button class="stuff-make-order">Записаться</button>--}}
            {{--            </div>--}}
            {{--            <div class="stuff-elem">--}}
            {{--                <div class="stuff-number-name">--}}
            {{--                    <h1 class="stuff-number">1</h1>--}}
            {{--                    <div class="stuff-main-inf">--}}
            {{--                        <h1 class="stuff-name">Марченко А.С.</h1>--}}
            {{--                        <p class="exp">Стаж: от 1 года</p>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--                <p class="role">бровист / мастер маникюра</p>--}}
            {{--                <button class="stuff-make-order">Записаться</button>--}}
            {{--            </div>--}}
            {{--            <div class="stuff-elem">--}}
            {{--                <div class="stuff-number-name">--}}
            {{--                    <h1 class="stuff-number">1</h1>--}}
            {{--                    <div class="stuff-main-inf">--}}
            {{--                        <h1 class="stuff-name">Марченко А.С.</h1>--}}
            {{--                        <p class="exp">Стаж: от 1 года</p>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--                <p class="role">бровист / мастер маникюра</p>--}}
            {{--                <button class="stuff-make-order">Записаться</button>--}}
            {{--            </div>--}}
            {{--            <div class="stuff-elem">--}}
            {{--                <div class="stuff-number-name">--}}
            {{--                    <h1 class="stuff-number">1</h1>--}}
            {{--                    <div class="stuff-main-inf">--}}
            {{--                        <h1 class="stuff-name">Марченко А.С.</h1>--}}
            {{--                        <p class="exp">Стаж: от 1 года</p>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--                <p class="role">бровист / мастер маникюра</p>--}}
            {{--                <button class="stuff-make-order">Записаться</button>--}}
            {{--            </div>--}}
            {{--            <div class="stuff-elem">--}}
            {{--                <div class="stuff-number-name">--}}
            {{--                    <h1 class="stuff-number">1</h1>--}}
            {{--                    <div class="stuff-main-inf">--}}
            {{--                        <h1 class="stuff-name">Марченко А.С.</h1>--}}
            {{--                        <p class="exp">Стаж: от 1 года</p>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--                <p class="role">бровист / мастер маникюра</p>--}}
            {{--                <button class="stuff-make-order">Записаться</button>--}}
            {{--            </div>--}}
        </div>
    </section>

@endsection
