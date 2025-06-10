@extends('theme')
@section('title', 'Услуги и цены')
@section('style', asset('css/services-style.css'))
@section('content')
    <section class="services-cont">
        <div class="services">
            <h1 class="name-sect">Услуги и цены</h1>
            <ul class="services-list">
                @foreach($categories as $category)
                    <li class="serv-item">
                        <input type="checkbox" name="" id="" checked>
                        <i></i>
                        <h2 class="serv-cat-name">{{ $category->name }}</h2>

                        <div class="serv-prices">
                            <div class="price-list">
                                @foreach($category->subcategories as $subcategory)
                                    <div class="price-list-item">
                                        <p>{{ $subcategory->name }}</p>

                                        @foreach($subcategory->specializations as $specialization)
                                            <p class="serv-name">{{ $specialization->name }}</p>

                                            <div class="price-table">
                                                <div class="price-table-row">
                                                    @foreach($specialization->services as $service)
                                                        <p>{{ !is_null($service->length) ? "{$service->length->name}:" : '' }} {{ !is_null($service->additionally) ? "+$service->additionally материал" : '' }} {{ $service->price }}
                                                            руб.</p>
                                                    @endforeach
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </li>
                @endforeach
                {{--                @foreach ($serviceTypes as $st)--}}
                {{--                    <li class="serv-item">--}}
                {{--                        <input type="checkbox" checked>--}}
                {{--                        <i></i>--}}
                {{--                        <h2 class="serv-cat-name">{{$st->name}}</h2>--}}
                {{--                        <div class="serv-prices">--}}
                {{--                            <div class="price-list">--}}
                {{--                                @foreach ($st->subcategories as $s)--}}
                {{--                                    <div class="price-list-item">--}}
                {{--                                        <div class="price-list-item">--}}
                {{--                                            <p class="serv-name">{{$s->name}}</p>--}}
                {{--                                            <div class="price-table">--}}
                {{--                                                @foreach ($s->specs() as $p)--}}
                {{--                                                    <div class="price-table-row">--}}
                {{--                                                        @if (isset($p->specialization) && $p->specialization->id <= 3)--}}
                {{--                                                            <span--}}
                {{--                                                                class="price-table-cell pad-right">{{$p->specialization->name}}</span>--}}
                {{--                                                        @endif--}}
                {{--                                                        @foreach ($s->catserv($p->specialization_id) as $cs)--}}
                {{--                                                            @if (isset($cs->length))--}}
                {{--                                                                <span class="price-table-cell">--}}
                {{--                                                                {{$cs->length->name}}--}}
                {{--                                                                <a href="">--}}
                {{--                                                                    <span class="price-btn">{{$cs->price}}</span>--}}
                {{--                                                                </a>--}}
                {{--                                                            </span>--}}
                {{--                                                            @else--}}
                {{--                                                                <span class="price-table-cell">--}}
                {{--                                                                <a href="">--}}
                {{--                                                                    <span class="price-btn">{{$cs->price}}</span>--}}
                {{--                                                                </a>--}}
                {{--                                                            </span>--}}
                {{--                                                            @endif--}}
                {{--                                                        @endforeach--}}
                {{--                                                    </div>--}}
                {{--                                                @endforeach--}}
                {{--                                            </div>--}}
                {{--                                        </div>--}}
                {{--                                    </div>--}}

                {{--                                @endforeach--}}
                {{--                                --}}{{-- @foreach ($subcategories as $sub)--}}
                {{--                                    @include('your_view_file', ['categories' => $subcategory->subcategories])--}}
                {{--                                @endforeach --}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                    </li>--}}
                {{--                @endforeach--}}

            </ul>
        </div>
    </section>
@endsection
