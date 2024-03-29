<!-- resources/views/comments.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Комментарии</title>
    <link rel="stylesheet" href="{{ asset('css/comments.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
</head>
<body>
<div class="comment_container">
    <div class="comments_container swiper-container">
        <h2 class="comments_title">{{__('comments.title')}}</h2>
        <div class="swiper-wrapper">
            @foreach ($comments as $comment)
                <div class="swiper-slide comments_user {{ strtolower($comment->name) }}">
                    <p class="comments_username">{{ $comment->name }}</p>
                    <p class="comment_text">{{ $comment->comment }}</p>
                    <p class="comment_date">{{ $comment->created_at->format('H:i d.m.Y') }}</p>
                </div>
            @endforeach
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>


    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 3,
            spaceBetween: 30,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>


    <div class="comments_add_and_map">
        <div class="comments_add">
            <h2 class="comments_add_title">{{__('comments.write_comm')}}</h2>
            <form action="{{ route('comments.create') }}" method="post">
                @csrf
                <label class="comments_add_name" for="name">{{__('comments.name')}}</label>
                <input type="text" name="name" required placeholder="Name">

                <label class="comments_add_comment" for="comment">{{__('comments.comment')}}</label>
                <textarea name="comment" rows="4" maxlength="100" required placeholder="Desc"></textarea>

                <button class="comments_add_btn" type="submit">{{__('comments.add_comm')}}</button>
            </form>
        </div>

        <div class="comments_map">
            <iframe
                class="contact-section__map"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4370.189584249795!2d35.13425154460875!3d47.84241371593426!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40dc6733f05c7f41%3A0x34c77dc7e5bb22b1!2z0KLQpiDQo9C60YDQsNGX0L3QsA!5e0!3m2!1suk!2sua!4v1706103301838!5m2!1suk!2sua"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                style="width: 100%; height: 400px; margin-bottom: 15px; margin-top: 20px;"
            ></iframe>
        </div>
    </div>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 3,
            spaceBetween: 30,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>

</div>
</body>
</html>
