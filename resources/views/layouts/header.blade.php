<header class="home_header">
    <nav class="home_navbar_logo">
        <div class="home_navbar_logo_div">
            <a href="/">
                <img class="home_navbar_logo_img" src="{{ asset('images/logo@2x.png') }}" style="height: 100px;"
                     alt="Логотип">
            </a>
        </div>
    </nav>
    <div class="content">
        <div class="home_nav-links-top">
            <ul>
                <li><a href="/prices">{{__('home.check_price')}}</a></li>
                <li style="color: white">|</li>
                <li><a href="tel:+380660762002">{{__('home.tel')}}</a></li>
                <li style="color: white">|</li>
                <li>
                    <a href="https://www.instagram.com/svadebnoe_avto/"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.facebook.com/svadebnoe_avto/"><i class="fab fa-facebook"></i></a>
                    <a href="https://www.facebook.com/svadebnoe_avto/"><i class="fab fa-telegram"></i></a>
                </li>
            </ul>
        </div>
        <div class="home_nav-links-bottom">
            <ul>
                <li><a href="/#home_decorations">{{__('home.decorations')}}</a></li>
                <li><a href="/#home_comments">{{__('home.reviews')}}</a></li>
                <li><a href="/prices">{{__('home.prices')}}</a></li>

            </ul>
        </div>
    </div>
</header>
