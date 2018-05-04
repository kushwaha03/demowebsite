<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Meta title & meta -->
    @meta

    <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
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
                padding: 0 20px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .footer {
                position:fixed;
                width:100%;
                height:20px;
                padding:5px;
                bottom:0px;
                font-size: smaller;
            }

            .m-b-md {
                margin-bottom: 30px;
            }


            .main_nav {
              overflow: hidden;
              position: fixed;
              top: 0;
              width: 100%
            }


        </style>

        <!-- Laravel variables for js -->
        @tojs
    </head>
    <body>
      <div class="main_nav" id="navbar">
          <div class="nav_inner">
            <div class="site-logo">
    <a href="#"><img src="http://myweb.joburg/wp-content/uploads/2015/12/My-Website.gif" alt="logo" height="50" width="320" style="margin-top: 10px;"></a>
</div>

              <div class="main_nav_inner">

                <div class="top-right links">

                    <a href="#home">{{ __('home') }}</a>
                    <a href="#about">{{ __('about') }}</a>
                    <a href="#product">{{ __('product') }}</a>
                    <a href="#feature">{{ __('feature') }}</a>
                    <a href="{{ route('protection.membership') }}">{{ __('views.welcome.member_area') }}</a>

                    @if (Route::has('login'))
                        @if (!Auth::check())
                            @if(config('auth.users.registration'))
                                <a href="{{ url('/register') }}">{{ __('views.welcome.register') }}</a>
                            @endif
                            <a href="{{ url('/login') }}">{{ __('views.welcome.login') }}</a>
                        @else
                            @if(auth()->user()->hasRole('administrator'))
                                <a href="{{ url('/admin') }}">{{ __('views.welcome.admin') }}</a>
                            @endif
                            <a href="{{ url('/logout') }}">{{ __('views.welcome.logout') }}</a>
                        @endif
                    @endif
                    <a href="#contact">{{ __('contact us') }}</a>

                </div>
                </div>
                </div>
                </div>

            <div class="content">
                @yield('content')

<div class="icon-bar">

<a href="https://www.linkedin.com/in/krishna-kushwaha/" target="_blank" ><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAVXSURBVGhD7ZppyGZjGMdf+x7GTihLBlEUvtg+IEu2ZP1iFKMouy9Eka0QEdlFIkvZjSHNhAmFD8q+Zc++7+vvd8975XTPWZ/3Oc8zTfOvX/Ne576fc5/73Mt13deZicVahLURzIAbYC58Cj/Av/AXfANvwANwEewFK8JCoWlwKrwEPnBXfoG7YB9YAkauNeFS+BHiob6Ee+BE2B3Wh+UhtCpMh4PgAngWHKn4/StwGIykQzYyE74GG/8HnCr7wzLQVXb2NHgPokNOyy2hNzkKj0A0+CBsA8PQ0nA0fALe+1fwhQ1dW8GHYCOfgSPQh1aGq8GRtq2bwU4ORTtATKWnYF3oW66jb8E2H4ZlYUpy6nwB3tDdZco37KBtwS3ctu+DpWAguSZiOt0BS8KotRnEi7zcC13l7vQoeIM5UDUSy8HAb6qldgL9jevmAC90kTuGnXBhr+OFTI7W/fAn6EsugT47dDz4PI7OGl5oo7XgK/CHVbvTQ2D5T2Bn/Ptk6FOx9V+XrBbSY/sD/USZVoAYCUOUvcH6z0Cf2gT0L0YDm3uhTj6YD+h8rHJ27us/wx+wJ5wFduRx6FtXgW3pX2p1CtSNRsgdxHpF9oW+tSE4GxyZ1bxQpZfBh2ry3C7s0+E5mA37waikg/QZK0OYjcEKLvSmAHB1cM4WcSsOubPk5cV7eg7x/FKMjtvqSPA5H0tWiTwUWeHuZFVrJfCQZN0is0CtDe5meblv0vX0NkQs9TcYzh8DbR2uL8nfeWgrfeHXgzf3PFEn36T1focXwXOEtv8qNwltnZjlr07aRfRP74JzPa7ZobZxXLS5fbIyPQ0W7pasakVHPkjW/3bekbCNnLUdhRuhuHU6tTxM2SnrvAYewJp0J1jfabaAPgYLN0hWtbp2xI3hfDgwWfPf+hZQXB+uuefB393qhQZ5P+uek6xMkSjQ4dWpa0dCxkwvgGXiOtL5xibh1qp/cv67OdTpJPAelyUrkwXepEmDdGRHiPXwPbwDtqXtJhDn9JvAax5/6+TmYL1rk5UpYqYmDdKRyLK4RmIEtoMI0Q/xAvK4q93kuSOIvCZZmeJE1rTYunbENaft/Yu+RkUkcVuy5jtWbUepTmeA9S5OVqbXwUJ3mTp17UjYRgG53CEtM7JV0ZGwq3QlWK804ja+srDp8DJoR8qi453Bsq4diUNfaXx3IVho8qxO4+6IG0OsLdteQOZiLZyXrGqNuyNxP51oqQzkDCs8uKznhQqNuyM6QevUnhRN+VjJXaFK4+yI0+otsE5tKGVW3ErmYqsyfPHgn8MecNSknT+497D8uEm7riOGJ9Y9e9Ku6oiL2/L3IZxoqSz0gaxsWF+m8As50ZEIEnMMSnNFR3KqTqjzwPITktWgQ8HKBpGreCGTnb0CnizwBBg2KM8IHgmK5Z4iD4dcnm1uh2JdzzXOjFwx8h9BUzyY5IOa2vdHJpQXBplHi/TpEV5oq63BIG+g7N6Q5YsNB+jIdlYEZt+BC3hcMp7yORyRsqxnK3nI8SbOSw9Do5bhvO3r35pOrrXydBcxmGGB30pGIaeT+WTb1UEPZXobet8L3tR108snsYLMkuhHor2DYWhyZDxWRhrHhjaFYcstNnYnMy27QC/yk5ifoW3IeWsuVk8/Vek3wtmJeeTeP/GZ6NbhxTdyk9luj+7v7vdt5BpwJzQAfBOiA37VLXOcvcr81C3wG8SDmFAwVDH4PA/MdhwLrqszwZOdnts4LX4jxk4mBgdJoQ5NnvF9UEel+D8hmvA84cjuCuP4PlkrI2bTmGYAzwXzVj6s2Q63U5MNrgdzWIu1CGti4j8MzwW59YJofQAAAABJRU5ErkJggg=="></a>
<a href="https://twitter.com/krrishkushwaha" target="_blank" ><img src="data:image/png;base64,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"></a>
<a href="https://www.facebook.com/kushwaha03" target="_blank" ><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAUQSURBVGhD7Zpp6GZTHMf/djOILDHWsi+RZhKyvlIUoYzlDUrENHbemSJbWRIRCik7L8g6LzTWF7IUJYwxkz3MIGTfPp9jfua6z/O/zzn3/9ybpvnWp55z7z3n3HPPOb/zO7/zTKzSSqxt4RS4HZ6Dz+A7+At+h6/hXXgUroTDYDr8L7QxnAevgy9cyo9wPxwOq0Hv2hSuge8hXuoreAjmwKGwJawLoQ1hVzgaLoeXwJ6K/G/BbOilQVZyOiwDK/8THCpHwlpQKht7PiyGaJDDcjfoTPbCExAVPgZ7wji0JpwMn4Jl/wR+sLFrd/gIrORzsAe60PpwE9jT1nUH2MixaB+IofQsbAFdy3n0DVjn47A2TEkOnS/BArUubQtcAzb652e29gJNuHU/ApbRSs6JGE73wOpQogPgbvgELEO0UqafhEtgJjRZqR0hPuR1XiiVhVuZBSyAkp7wyzm24+XlZ3BB/KVyLbgemrQvuN44b47yQom0GFbixN7cCwW6Fcz7LVwM20FVegDHwgPgcy/CKJ0BPmvvbOKFHG0GS8GMpdZpf/DL/QB7e6FBB0JuQ1SYfj9UllyxzeA6Uaq7wLyXptSgNgB7ZHtwFS9piHlcX5xnO3mhSfpOuh1+1TaL3cfgy+2cUiuky/IaeK/O85CrG8E8zsFGnQs+2KY3/NrmdW5UpbULy+OQ+6DC+3Am5Gob+A3smUZz/gZYYZuV2yFj3kUptUIOA6+/Ca3XgopcIC1vUhdG6+IDTvQ2DqBD0fx6sVXF9dy5MEonguU9lVJD5KbIBx5MqXw5r5yI7imaGvIq+FydUl9K8/sHuGkb+sFvAyt0P5Er9xixCwwma8hkWG+prMO8egYDegG8eUhK5SnmhSu2VkkugqrWA4dB3A/CddFkl+o+MK/DbEBR8FYpladoyIcpVSb39uadm1JlugzMq782oBgi01IqT1NpiHPGvPulVJnOBvNem1I1ecNJVKJoiD7ZrOUMi4xo/+O+uMdxOLpKt4mknArWe0tK1eRC480SRUOqzIeqtoZfof6c1A1DrsKJvDmlaoodmZYoVy5w94KT920Y9nJhtXR9qpP9FTgO2uhCsMyrUqqmd8Cb7s/bqK8FUd0AlnlOStWkf+XN4s3LcvXZkNj0HZFSNV0B3jR41kZ9NcTdazihztEBGYv15sspVa6+GhLl6T0PlWbQvbEmcYYXCtVXQ1wELa9xp2jIx4e0CqXqoyEOq4VgeY2uVHiwxmJLvdI+GuLktqwl0BRGSjd9ER/WrS9RHw1x/lrWWSk1Qi5SPqwT6fY1V1035CSwHOMCWf6gvWJo30wGlHPVZUOMekb49AQv5GoPcINfEt2LF9YTtleDC2AqDfHDxgJY9+OyFI6ZURFfcpQ8nPH5yXDj1kb6U+a3R0qjnv8qAm6Oy1280CDDPgaaPX4bhkcFpfI0y/pd30p2rgPSuw0fTLfAfUQfcjhdDdbrAt3W//uP1oGHwUI7OxKryChJxHmt7xgYm+wZt5VxJGZFO8C4pYkN6+Su8yDoRI5zj6GtyHFrLHaoB1ooPYpY7OQZ6PyIz4CcsSjHrpW6jdU8at+19zlyDmgJdQDfg2iAp7rHQ68ypnsneBoVL2LwwgVR59OjBaMdp4HzyniXO7un4QuIPKLvZGCw+geD3uUe3xe1V6r/hBiF+wl79mAoPZ/sXHrMhjGNAM4DD418WaMdmlOPLZwPhodWaSXWxMTfYNjASj1Sw7oAAAAASUVORK5CYII="></a>
<a href="https://plus.google.com/u/0/115921361167804858766" target="_blank" ><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAU6SURBVGhD7ZpXyCRFFEZ/cw6ouyZUTJgwYMAX05NgdhEjmMCAu2BCBRFFxQQqiKKooL4YMCvmBwPmhVVBRF1FBV1zxJz1nMILY093T3dP9ewq+8F5qDBV1V1Vt27dnqmF+h9rXTgKroen4CP4Fv6C3+EreBPug4tgd1gWFgitAqfAS+CA2/Ij3AZ7wCIwca0Gl8J3EIP6HO6AWbAbrAVLQ2gl2BT2hwvgWXCm4vevwkEwkQeyk+PgS7DzP8Glsg8sAW3lw54K70I8kMtyM+hNzsKDEB3eD1tCDi0OR8KHYNs/gS8suzaH98FOPgZnoA8tD1eBM21fN4APmUU7QCylx2EN6Fvuo6/BPh+AJWEsuXQ+AxvUuozdYAttBZpw+74LFoNOck/EcroZFoVJayOIF3m5GW2ldXoIbOBJmORMFLUjeN64b/Y1o420GD6EG3t1M+azjgfH4+ysakYTTYMvwB/2ZZ26KEz/tSnVQJ7Y/sBzoq2cPd2WPrQBeL7oDWxsRp0chG6H67HJYaejeC68Ar+AL0C+B031sbAc5NKVYPueL7U6GZrMhu7IxeAmjMH/Bp7Mn8Af/+SJlm8G5NA6YD/OzMpmVOllsPO6vWEDWrIY/E2gkzho53UQdQCfB+s5w9tADnlA2malC7MeWMGNXuUAaoZdMtbT0dsa6qQZ1+KcllJ5dCjY/8MpVSIvRVa4PaXKdR5Y5z2YbkZmedFyU9e5QZpfl66XttIXfh04SO8TZdLl/gFsZHszetBe4Bg0tXXy7mK9bVOqoKfBwl1TalhnguW3pFQ/avogt4L1XGZDmgcWrp1Sw3oBLPeuXadlYLsRuB9Duu6RfxLYxzMDeetDUeeD9c5OqYIiUOBAyhTlowIGnj/Wq+NuCO0EZXWCshVwIlh2WUoVZIHrv0wO3vJvUqpeeqxzKjCKYjtPQEizHOVvQ/QTed7vizoarHdNShXkmWBhmbyl+ZA/p1R3xR64N6WG1XSPhBN5dUoVFDcyD7MyxSXH07WrYg+UDgA1fRDPJevpXQzpDbDQ+3mZPF8s92101WNgGwem1LDcLy6nK1KqWpbbji9mSPpXFlZdXuzc8tehS0DAveDy9CxawYwxFJe+PVOqoAvBwrLNpfSlXgPrnGVGC+navAj+1n7GkW5PXH/1vofk+WDhcylVLp1D7wNyuBkNtBTEstQqrQjjKMz7OylVIk2sbrmDXNOMCs0EGxI3rUGKKnmgzQbraky2gHHlIWh7tTdFQz5WGuWtHgGaYut6UPo7jcDecACcAYY+I9DmTOQIg7qs3gLbrHKlkoyKW0kXfdSG3gTugRhsGT6kN0jdkBxyc9uu3rcPVSkLw7PUrW8iveITwFCnAW0dOl2H/SD39w/3r2NzeY9UmFmdyHHNZE4dBo7rA6jyB/8lZ8X17Y98ywuCNCjhWRxiRlNpXbzgd4ruZZYvNg5APYPWCsdMTzTXd5Au0p9yHM5I56inERIbcV1qpSYtv2bZv+dbrbkdJd2S8MF0C/xWMgm5nC4B+/WAzrK8dTHuBBvt7ZPYgIySRJzX/nIF95KcGc+GOPzsaEPILU1sWCe/BOwMvchPYn6GtiPXrbHYUg+0pfQo4rCTR6H3T3wGuo2BuXbt9FfQPGrf6xzIQbkHtIQ6gHMhHsDY8cEwURnavxHCeRQvTro4OpFGJY12HAPuq9PBm90j8CnEb0TfycDg4B8MJi7v+A7UWRn8J8QovE84s7vA/Pg+WSs9ZsOYRgDPAT8aOVjvLZpTP1u4H8YJYCzUf0BTU38DBy+aNI56LBYAAAAASUVORK5CYII="></a>
<a href="#"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAQ1SURBVGhD7ZlLqFVVGMdvvsAn5QOVQBFtGIRCo1AIUQeKg9JEQTR74APUqCaiNchn6UQj0kmQj/KJOrOJjgSJFCdmWUpCNvBFJprv32/DgsPh7H3W3mcdzx3cP/zgrnXX+vb+zl5rfd9aq6tHPeq8XoDXYQOchqvwAJ4m4l+4AMfhAxgFyTUDfoH6hz+CmwnQiXrbD+FbGA0taxAcgGD8CmyGyeADekEq9YfxsAD2w//gM/+D+VBZL8M50Nh1WAb94HlpLOwBn/8E1kNpDYDzoBGd0WintBDug+/yiRVldAjsqDODreiwpoPzUfw7SjYMw2mMFd1EH4Hv9Rv0taJILrFnwQ7LreiAHNaN5MIS5qzztVDGCRtehqZet0G74DFcglesqNNM8P0MBYUy2Nnwy6z0fPUa+OyATtWrN9wA/1+4ABmxbTQlK6XRMMgbLrUyhvg1giNboJG+B/+/KCvlyLTDRq2kBxPBL/orhKAmt+EnWAFDoZE+BFfKffCSFQ30GWhvbVbKkbmTS5yfsKzGwWEILy7a+ht0orb+FnwMfaCsloA2vslKObKBDy2rqWDOFF7yC5gEtSmM8ehtOArBoROQ98vnyXTFvkb9XFVx5E0wwbOv4zdv2NTqDfgL7ONyHzOHgtriiMPJL2C/z60ooZEQ0qAfrYhUWxwJc2J3ViovfwgzCG1MsyJCyR1xDpiV+kVihlOejNI+9+es1FzJHfkKbF8pva6RGcQ/oK1G0bxeyR1xW2p740arMopra1VWKlZyRwx2VWNOvdyj++wdWalYSR0ZAba9lpVa12zQnotHMyV1xP11bNsYzQXtxax+yYeW7Ww/JCu1pk9BW3mJYq2SO2ICaPu3slJrCrbmZKViJXfELNb25k6tyH2FyaoHDB4/NVNyRwyCIVE0d6oqX0gbHsbFKLkjyuMZ+7iPcSUrq3fB/ncg9kSxLY4YQ8L4NgE0d4qVThiLTHPmWRGptjiiXoRwLux+2typaMPkEZM7QNvrxBooo2hH/MxlNRB+APuLudNOMGLPgnfAYejXCyf4Psf6sgqOuPfJVTgVN+BVkYd7ZyA41Ih7oJNVT9lXgna2ZqUcXQQbTchK1WUWuxq2wxHw1zPYGSdiltgieRvgO2o/V8fARh7td1edBN/Rw7pcvQ828n6iO2o4mHHfhcLh73mWBwlG2U5eJeQpnGl5W9BUTkQbV92Ht0suDq50Ltlus5vKDl536YyXLN1B3pSFubHXilg52fXcyBt9sdImuaf/DnTiDyidCm0EOzu5vGRJefEZK0dH+BJmHK9CJbnh0RENmYYYpVPs0ZvJ1cmJ7Zzw2X9CZSeCHFq/gwbFAzUD3Dp4DwxyrWLSaMTeBKcg/HgOb+eEjiWR43QphGu5dmOcOAhRq1NVGV8Wg1/ka3BDlIJtYNrh8K2a6/WoR2nV1fUMno6jbVpFA9IAAAAASUVORK5CYII="></a>
<a href="#"><img src="data:image/png;base64,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"></a>
<a href="#"><img src="data:image/png;base64,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"></a>
<a href="#"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAPFSURBVGhD7ZpJqBRHHIdf3DW4YlTcIIoXwYMLekhy0QhBCXiSuBAPauKCggt4VxFMNFHQgCAiYgRFIgkaUBFFQcRED4IggqCRICJqxBhXjN/Xb0raftPjm+5+zAzMDz6Yf3VXTf2mu2qq/9UtKeoJ8+AQXIcn8H+NuAuX4XuYDO3WfLgF5RqtB36D0ZCqzrATQoULsBg+hu5QK/WDKbAJHoB9uw+fQ1kFE4/hKwvqUJr6Geynt7sG39EcCAcnWFDn2gr29zb0sUD1gL/AAxpqBDkMToN9Xm+BcnBbcD6KGkfj4TU4brpa4BSrkUUGBchL3T+GU3lH6U+w79MM/J8wGGWQU0fBtuK8gqXQEdoMfscag/Bnl3eKHQah415ueVQqOwsdoZVg+z8Y+EHy6jOwneNR1KpxYNm5KCpeXmnb/8mgKCOrwHa+i6JWNZyRD+Aq2M50C0pqOCPLwTY0o6mghjLyKfwHzulfWBBTwxiZCa7NrP+jBQkFI3+A03uSjyCPchtx8bYDvArW3QOdIKlgJA3rL4OsymXkW7gH1nkOqyE+LuL6EFwT3SjD32AbHs+qzEZ6wwvw/N9hLGSVY8t28oyfzEZGguf6BJlXTSMx5TZyByaWcDndC9I0FMK5cRZCzYwMgHB+nFNQTpp4BuXqBFwxZ1VmI2otXASfBa6AddNutTD9+l/j+UnOQFUpnoRyGYnrfWOmYf7Zm0YKUtNIUk0jBalpJKmmkYJUmJHhUMnIGPD4tSgqXoUZMR1qXZcg5eRToxlzzzHvldQn8CvchHj2pb0qzIh6CNYfFEVtZTrT4//CXtgGhyEYDPwC1apQIyfA+rOiqK18DDZp9xLCdwXMOx8ofc6yCi7USMgwupNUSY6nueCXfwmOHxUesGpuZAj4a/vcUXGTMkV1Y0RtAds4Cd0sqEJfQyFG3Mc2cFMmq9zcCdt3bh+/ry3NToUjEHJj8eR3e7UOrLvB4FIpaLNDWqVMDYWZ6B/YDeaEZ8OC0mc7ewxCdlLcR7FDXaBamRi0DXNt0RsFBhsNcmow7AM3e0JHy+FV8Af0sbkvZJHGw90Ujc1JpcBN+Dy3V1wjwJcNtsN+2AXuKpmVnAEDIa+WgP32B3kr72sLnULT0p/1JBPgIW1rIv2tPBBej3AGch+7XmVfw6bSQQuSchZ5Cp5gYtnEWz3JMeHtFK6E78qkJgbNMYUsuQPS3JNbwCvgmxrhjObsFAa2+G6Amf6KMuPuvBxutXrC97acLKqSl9I3Cly9uhvlzFMLfNfE/4kKy5+Wljf5yTbVoR6INAAAAABJRU5ErkJggg=="></a>

<a href="#"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAANVSURBVGhD7ZhbyE1pHIc/gwkZRgkZZhwm5ULkUE6jkZRpJGIyicgFoRwSUk7jhjtCikuNC1MOc3AKqXG4MLlRXEwylEMYIgzTlPE8a763Vqu99sG399prT99TT7z/tXbf+9t7rffU1Eo2fND8b8PyJV7CF9jXQqPyBf7b7CQLjUpXDEGWWmhkbqFBdkWtHDII2/z336L8iAY5FbVyhJ1fjq9xmYUSfIcGuR21ckRbdCSyc45G/bEYs9B732InC3nic3yJdvAsFnvEvNf7dKiFvOFjFTq42EIKToYh9GwLecNf4QzawefYB9O4jN63KWrlEGfrZ2gnT1hIYR96z8GolVPmo53UBRYKsAS9fjVq5ZhjaEefYm8LCcai1x3lMqU9LsRyV6098THa2Z8sJPgIHX69nunicSX6R3/DERbKYCb6GZ1rIcFN9Fpmi0dHoysYOvUP7kS/1VL4MvuZJ9jLQowj6LVMF48d0KHyLwyB7qLfejG64T30/sMWYmxG67ujVsYMwJ8xhFHb/TCNKRjeB5cngRlo7XTUqhPT8A8MYV7hOmyHhdiP3vcQu1uAHjgPh0WtOtIRt+IbDIGu4ThM0hnDPsTP5BIXge4tQhgfI38B3484E9AlfNqvlht88e9gCORj5KNTzmYrd/gIbce/MQQ6h8UWkDXFmfk+HkDXTp9gJQxGAxjkEX6MdeEbDN9o8AZ6YOCI1QXL4dtm68anuAJd/LnwS4Zydnd768vrWdWHWDfca7tuKjWOu1AcjqvRyc9NUzKYq9jjuAqHYKEX3DMt/56jXFUJh2VuhCrBL2AUrsWTaIhksAf4PX6Fga/Ra79ErSryvkGSOC+MwfXoVtdZPgQybCD3QZL4vozHjRhfg4UgR6NWFalVkDRCkKrv09OCuBu8jr/iIXTI3YDuEKfiSHSCq3SkyjzIQLRejn+ioc+jHdyBroKdRCdjnMyD+PJ+hqPRyW8Ruqnag26OLuLvGA7Z0nQrGyfzIJXg2a2bLU9FpqPHPFtwL27DOLkOUgmtQUqRFsTHxUVjS52IcTIP4oLReku9gHEyD+LhwA8ltDMeRBdzDcZpfUdKUa8gDs1V5X8XxGV3oVGn2jpB1jRI1lY9iCeFhUabWjsHW2lQmpreAW6TZTc5DqX+AAAAAElFTkSuQmCC"></a>


<a href="#"><img src="data:image/png;base64,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"></a>

</div>
<style>
.icon-bar {
  position: fixed;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}

.icon-bar a {
  display: block;
  text-align: right;
  padding: 1px;
  transition: all 0.3s ease;
  color: white;
  font-size: 20px;
}

.icon-bar a:hover {
    background-color: #007bb5;
}
</style>


                <div class="footer">

                  <a>&copy; {{ date('Y') }} {{ config('app.name') }}. {{ __('views.auth.login.copyright') }}</a>

                    Credits:&nbsp;
                    <a href="http://netlicensing.io/?utm_source=Laravel_Boilerplate&amp;utm_medium=github&amp;utm_campaign=laravel_boilerplate&amp;utm_content=credits" target="_blank" title="Online Software License Management"><i class="fa fa-lock" aria-hidden="true"></i>NetLicensing</a>&nbsp;&bull;&nbsp;
                    <a href="https://photolancer.zone/?utm_source=Laravel_Boilerplate&amp;utm_medium=github&amp;utm_campaign=laravel_boilerplate&amp;utm_content=credits" target="_blank" title="Individual digital content for your next campaign"><i class="fa fa-camera-retro" aria-hidden="true"></i>Photolancer Zone</a>

                    <a href="https://www.linkedin.com/in/krishna-kushwaha/" target="_blank" title="Individual digital content for your next campaign"><i class="fa fa-camera-retro" aria-hidden="true"></i>Linkedin</a>
                    <a href="https://twitter.com/krrishkushwaha" target="_blank" title="Individual digital content for your next campaign"><i class="fa fa-camera-retro" aria-hidden="true"></i>Twitter</a>
                    <a href="https://www.facebook.com/kushwaha03" target="_blank" title="Individual digital content for your next campaign"><i class="fa fa-camera-retro" aria-hidden="true"></i>Facebook</a>
                    <a href="https://plus.google.com/u/0/115921361167804858766" target="_blank" title="Individual digital content for your next campaign"><i class="fa fa-camera-retro" aria-hidden="true"></i>Google Plus</a>



                </div>

            </div>

        </div>

    </body>
</html>
