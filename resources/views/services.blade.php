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

                                        <div class="price-lists">
                                            @foreach($subcategory->grouped_services as $serviceInGroup)
                                                <div class="price-list">
                                                    <p class="serv-name">{{ optional($serviceInGroup[0]->specialization)->name }}</p>

                                                    @foreach($serviceInGroup as $service)
                                                        @if(!is_null($service?->length?->name))
                                                            <p>{{ $service->length->name }} - {{ $service->price }}
                                                                &#8381;</p>
                                                        @else
                                                            <p>{{ $service->price }} &#8381;</p>
                                                        @endif

                                                        @if(!is_null($service->additionally))
                                                            <p>+ {{ $service->additionally }} материал</p>
                                                        @endif
                                                    @endforeach
                                                </div>
                                            @endforeach
                                        </div>
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
