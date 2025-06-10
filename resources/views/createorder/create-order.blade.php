@extends('theme')
@section('title', 'Услуги и цены')
@section('style', asset('css/create-order-style.css'))
@section('content')
    <section class="menu">
        <div class="menu-window">
            <div class="about-company">
                <form action="/create-order" method="POST">
                    <h1 class="name-sect">Заказать услугу</h1>
                    <div class="styled-select">
                        <select name="service_id" id="">
                            @foreach ($services as $s)
                                <option value="{{$s->id}}">{{$s->name}} ({{$s->servicetype->name}})</option>
                            @endforeach
                        </select>
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </div>
                    <div class="styled-select">
                        <select name="stuff" id="">
                            @foreach ($stuffs as $s)
                                <option value="{{$s->id}}">{{$s->name}} {{mb_substr($s->surname, 0, 1);}}.
                                    ({{$s->specialization->name}})
                                </option>
                            @endforeach
                        </select>
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Удобная дата</span>
                        <input type="date" name="order_date" class="form-control" aria-label="Username"
                               aria-describedby="basic-addon1">
                    </div>
                    <div class="styled-select">
                        <select name="stuff" id="">
                            @for ($i = 9; $i < 19; $i++)
                                <option value="">{{$i}}:00</option>
                                <option value="">{{$i}}:30</option>
                            @endfor
                        </select>
                    </div>
                    <input type="hidden" name="user_id" value="{{--Auth::user()->id--}}">

                    <input type="submit" value="Записаться" class="create-btn">
                    <p class="mt-3">Статус заявки можно посмотреть в личном кабинете</p>

                </form>
            </div>

        </div>
    </section>



    <script src="https://code.jquery.com/jquery-3.6.3.js"
            integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
            crossorigin="anonymous">
    </script>

    <script>
        $(function () {
            $(window).scroll(function () {
                var scroll = $(window).scrollTop();
                if (scroll >= 97) {
                    $("header").addClass('shrink');
                } else {
                    $("header").removeClass("shrink");
                }
            });
        });
    </script>

@endsection
