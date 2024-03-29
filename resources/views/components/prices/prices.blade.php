@extends('layouts.master')

@section('title', __('prices.title'))

@section('vendor-styles')
@endsection

@section('content')
    {{--    HEADER --}}
    @include('layouts.header')

    <div class="prices_container">

        <div class="prices_decorations_desc">
            <div class="prices_decorations_title">
                <span class="prices_decorations_desc-text">{{__('prices.decoration_title')}}</span>
                <div class="prices_decorations_desc_description"> {!! __('prices.decoration_desc') !!}</div>
            </div>
        </div>

        <form id="price-calculator">
            {{--DECORATIONS--}}
            <div class="prices_decoration_bloc_content">
                <div class="decoration-block">
                    <div class="decoration-info">
                        <img
                            src="https://cs.copart.com/v1/AUTH_svc.pdoc00001/PIX449/a05f4b83-2d08-4986-bc56-549bd23d58d4.JPG"
                            class="prices_img">
                        <div class="prices_decoration_block_name_price">
                            <p class="prices_decoration-name">{{__('prices.no_decor')}}</p>
                            <p class="prices_decoration-price"></p>
                        </div>
                    </div>
                    <input type="radio" name="decoration" value="0">
                </div>
                @foreach($decorations as $decoration)
                    <div class="decoration-block">
                        <div class="decoration-info">
                            <img src="{{ asset($decoration->img_url) }}" alt="{{ $decoration->name }}"
                                 class="prices_img">
                            <div class="prices_decoration_block_name_price">
                                <p class="prices_decoration-name">{{ $decoration->name }}</p>
                                <p class="prices_decoration-price">{{ $decoration->price }} {{__('prices.uah')}}</p>
                            </div>
                        </div>
                        <input type="radio" name="decoration" value="{{ $decoration->price }}">
                    </div>
                @endforeach
            </div>

            <div class="prices_time_city">

                {{--SELECT TIME--}}
                <div class="prices_select_time">
                    <label for="time">{{__('prices.time')}}</label>
                    <select name="start_time" id="start_time">
                        @for ($hour = 6; $hour < 24; $hour++)
                            @for ($minute = 0; $minute < 60; $minute += 30)
                                <option
                                    value="{{ sprintf('%02d', $hour) }}:{{ sprintf('%02d', $minute) }}">{{ sprintf('%02d', $hour) }}
                                    :{{ sprintf('%02d', $minute) }}</option>
                            @endfor
                        @endfor
                    </select>
                    -
                    <select name="end_time" id="end_time">
                        @for ($hour = 7; $hour < 24; $hour++)
                            @for ($minute = 0; $minute < 60; $minute += 30)
                                <option
                                    value="{{ sprintf('%02d', $hour) }}:{{ sprintf('%02d', $minute) }}">{{ sprintf('%02d', $hour) }}
                                    :{{ sprintf('%02d', $minute) }}</option>
                            @endfor
                        @endfor
                    </select>
                </div>

                {{--SELECT CITY--}}
                <div class="prices_select_city">
                    <label for="city">{{__('prices.city')}}</label>
                    <select name="city" id="city">
                        <option value="Zaporizhya" selected>{{__('prices.city_zp')}}</option>
                    </select>
                </div>
            </div>
            <hr style="  border-bottom: 1px solid #8c7e60; margin-left: 60px; margin-right: 60px; margin-top: 30px;"/>
            {{--INFO--}}
            <div class="prices_info_block">
                <div class="prices_additional-services">
                    <div class="checkbox-label">
                        <span>{{__('prices.rent_car')}}</span>
                        <span class="checkbox_ok" style="font-size: 40px">&#10003;</span>
                    </div>
                    <div class="prices_total_price">
                        <p>{{__('prices.total_price')}}<span id="total-price">0</span> {{__('prices.uah')}}</p>
                    </div>
                </div>

                <div class="prices_additional-services">
                    <div class="checkbox-label">
                        <span>{{__('prices.oil')}}</span>
                        <span class="checkbox_ok">&#10003;</span>
                    </div>
                    <a class="btn prices_btn home_icon" href="tel:+380660762002">
                        <span>{{__('prices.order')}}</span>
                    </a>
                </div>
            </div>


        </form>
    </div>


    @include('scripts.prices')

    {{--    FOOTER --}}
    @include('layouts.footer')
@endsection

@section('vendor-scripts')
    <!-- Vendor scripts here if needed -->
@endsection
