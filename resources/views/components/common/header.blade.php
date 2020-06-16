<header>
    <nav class="navbar navbar-expand-lg navbar-dark d-lg-flex d-none" style="height: 30px; background-color: #234d4e;">
        <div class="container">
            <span class="text-light navbar-nav font-weight-light" style="color: rgba(255,255,255,.8) !important;"> {{ date('\N\g\à\y d \T\h\á\n\g m \N\ă\m Y') }}</span>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="https://www.facebook.com/3ei3isaki"><i class="fab fa-facebook-square"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fab fa-instagram"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fab fa-twitter"></i></a>
                </li>
            </ul>
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="/">
                <h2 class="py-0 mb-0 font-weight-medium"><img src="{{ asset('image/src/Logo.png') }}" alt="Logo" height="30px"> <span style="color: #29878b;">M</span>ei <span style="color: #29878b;">News</span></h2>
                <h6 class="py-0 font-weight-light">Cập nhật tin tức mới nhanh chóng</h6>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarHeader">
                <ul class="navbar-nav ml-auto">
                    @if (!Auth::check())
                    <li class="nav-item">
                        <a class="nav-link btn btn-light mx-1" href="auth/login">Đăng nhập</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-light mx-1" href="/register">Đăng ký</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link btn btn-light mx-1" href="auth/logout">Hi! <span class="text-success">{{ Auth::user()['name'] }}</span> | Đăng xuất</a>
                    </li>
                    @endif

                </ul>
            </div>
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #90909014; border-top: #ff000073 solid 2px; box-shadow: 0px 6px 15px -15px;">
        <div class="container">
            <ul class="navbar-nav mr-auto">
                <li class=" nav-item">
                    <a class="nav-link" href="/">Trang chủ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/news">Tin tổng hợp</a>
                </li>
            </ul>
        </div>
    </nav>
</header>