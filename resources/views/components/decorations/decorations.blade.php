<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{__('decorations.title')}}</title>
    <link rel="stylesheet" href="{{ asset('css/decorations.css') }}">
    <link rel="stylesheet" href="{{ asset('css/decorations_modal.css') }}">
</head>
<body>
<div class="decoration_block">
    <div class="decoration_container">
        @foreach ($decorations as $decoration)
            <div class="decoration_item"
                 onclick="openModal('{{ $decoration->name }}', '{{ asset($decoration->img_url) }}')">
                <img src="{{ asset($decoration->img_url) }}" alt="{{ $decoration->name }}">
                <div class="decoration_info">
                    <h3 class="decoration_name">{{ $decoration->name }}</h3>
                    <p class="decoration_price">{{ $decoration->price }} {{__('decorations.uah')}}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>
@include('__partials.__modal-show-decorations')

<script src="{{ asset('js/decorations.js') }}"></script>
</body>
</html>
