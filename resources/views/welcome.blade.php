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
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
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
        </div>
        <div class="container">
            <div class="row">
                <div class="listing_area col-sm-8 col-sm-offset-2" id="room-ads-area" data-test="rs-list">
                    <div class="listing_area_content">
                        <div class="total_list">8,075 rooms to rent in United States</div>
                            <!-- item -->
                            <div class="listing-item">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="listing-image">
                                            <figure>
                                                <img src="{{asset('images/images.jpg')}}" alt="" class="img-responsive">
                                            </figure>
                                            <div class="listing-item-price">
                                                $200
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="heading">Cool place for cool people</div>
                                        <div class="listing-item-desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates dicta eius impedit ut, ipsa tempora assumenda, praesentium similique hic dolores dolorum esse, consequuntur sit quaerat numquam earum molestiae maxime eligendi.</p>
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
