<header>
    <!-- header top -->
    <div class="header-top">
        <div class="container d-flex justify-content-end align-items-center">
            <small>DC POWER™ VISA®</small>
            <div class="dropdown d-flex align-items-center ms-5">
                <button class="ms-dropdown secondary-dropdown dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  ADDITIONAL DC SITES
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /header top -->
    <!-- header bottom -->
    <div class="header-bottom container d-flex justify-content-between align-items-center">
        <img src="{{ Vite::asset('resources\img\dc-logo.png')}}" alt="DC Comics logo">
        <nav class="main-nav">
            <ul class="d-flex">
                <li><a href="#">CHARACTERS</a></li>
                <li><a href="#" class="active">COMICS</a></li>
                <li><a href="#">MOVIES</a></li>
                <li><a href="#">TV</a></li>
                <li><a href="#">GAMES</a></li>
                <li><a href="#">COLLECTIBLES</a></li>
                <li><a href="#">VIDEOS</a></li>
                <li><a href="#">FANS</a></li>
                <li><a href="#">NEWS</a></li>
                <li>
                    <a href="#">SHOP</a>
                    <button class="ms-dropdown primary-dropdown dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    </button>
                    <div class="dropdown">
                        <ul class="dropdown-menu ms-dropdown-item">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </nav>
        <form action="" class="search-bar d-flex" role="search">
            <input type="search" name="" id="" class="search-bar__input" placeholder="Search">
            <div class="search-bar__icon"><i class="fa-solid fa-magnifying-glass"></i></div>
        </form>
    </div>
    <!-- /header bottom -->
</header>