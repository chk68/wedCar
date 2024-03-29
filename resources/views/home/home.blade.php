@extends('layouts.master')

@section('title', __('home.title'))

@section('vendor-styles')

@endsection
{{--   #TODO сделать модалку нормальную --}}
{{--   #TODO сделать формат для мобилок --}}
{{--   #TODO сделать админку для управления + админа который меняет текст. --}}
@section('content')
    {{--    HEADER --}}
    @include('layouts.header')
    {{--MAIN--}}
    <div class="home_main_container">
        <div class="home_section"
             style="background: url('{{ asset('images/background.jpg') }}') center/cover no-repeat; height: 500px;">

            <div class="home_overlay">
                <div class="home_text">
                    <div class="home_title">
                        <h1 class="home_title-h1"></h1>
                        <span class="home_title-text">{{__('home.banner')}}</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="home_car_desc">
            <div class="home_car_desc_title">

                <div class="home_icons">
                    <a class="home_icon" href="tel:+380660762002">
                        <i class="fas fa-phone"></i>
                        <p>{{__('home.tel')}}</p>
                    </a>
                    <a class="home_icon" href="https://www.instagram.com/svadebnoe_avto/">
                        <i class="fab fa-instagram"></i>
                        <p>{{__('home.instagram')}}</p>
                    </a>
                </div>
                <div class="home_car_description">{!! __('home.description_car') !!}</div>
            </div>
        </div>

        {{--DECORATIONS--}}
        <div class="home_decorations" id="home_decorations">
            @include('components.decorations.decorations')
        </div>

        {{--DECORATION DESC--}}
        <div class="home_decorations_desc">
            <div class="home_decorations_title">
                <span class="home_decorations_desc-text">{{__('home.decoration_title')}}</span>
                <div class="home_decorations_desc_description"> {!! __('home.decoration_desc') !!}</div>
            </div>
        </div>

        {{--COMMENTS--}}
        <div class="home_comments" id="home_comments">
            @include('components.comments.comments')
        </div>
    </div>

    {{--    FOOTER --}}
    @include('layouts.footer')

@endsection

@section('vendor-scripts')
    <!-- Vendor scripts here if needed -->
@endsection
