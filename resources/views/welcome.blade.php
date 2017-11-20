<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>

            <div class="content">
                <div class="listing_area col-sm-8 col-sm-offset-2" id="room-ads-area" data-test="rs-list">
                    <div class="listing_area_content">
                        <div class="hp_title">8,075 rooms to rent in United States</div>

                            <!-- item -->
                            <div class="listing-item">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <figure>
                                            <img src="" alt="">
                                        </figure>
                                        <div class="listing-item-price">
                                            $200
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="heading">Cool place for cool people</div>
                                        <div class="listing-item-desc">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates dicta eius impedit ut, ipsa tempora assumenda, praesentium similique hic dolores dolorum esse, consequuntur sit quaerat numquam earum molestiae maxime eligendi.
                                        </div>
                                        <div class="status">Available Now</div>
                                        <div class="listing-item-member">
                                            2 Guys
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <!-- end item -->
                    </div> 
                </div>
            </div>


        </div>
    </body>
</html>
