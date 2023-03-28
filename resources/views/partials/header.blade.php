<header class='position-fixed top-0 w-100 shadow-white' style="z-index: 1000;">
    <nav class="navbar navbar-expand-xl navbar-dark rounded max-1440 mx-auto px-60-auto shadow-lg">
        <div class="container-fluid p-0">
            <a class="navbar-brand me-5" href="/">
                <img src="/assets/images/logo.svg" height="58" />
            </a>
            <div class="navbar-toggler border-0 p-0">
                <a href="" class="btn fs-5"><i class="fa-solid fa-search"></i></a>
                <a class="btn fs-5" data-bs-toggle="collapse" data-bs-target="#top-navbar" aria-controls="top-navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fa-solid fa-bars"></span>
                </a>
            </div>
            <div class="ms-auto collapse navbar-collapse d-xl-flex justify-content-between align-items-center py-3 py-xl-0" id="top-navbar">
                <ul class="navbar-nav justify-content-lg-center gap-2 gap-xl-3">
                    <li class="nav-item">
                        <a class="nav-link text-light active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Marketing Support</a>
                    </li>
                    <li class="nav-item dropdown">
                        <span class="nav-link dropdown-toggle d-flex align-items-center cursor-pointer" data-bs-toggle="dropdown" aria-expanded="false">
                            <a class="text-decoration-none text-light" href="#">Services</a>
                            <i class='fa-solid fa-chevron-right'></i>
                        </span>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item py-2" href="https://commerce.coinbase.com/checkout/c6628131-3f8a-46b2-8a2f-0b941b7340df">Get Gold Verification (KYC Verified)</a></li>
                            <li><a class="dropdown-item py-2" href="https://commerce.coinbase.com/checkout/c6628131-3f8a-46b2-8a2f-0b941b7340df">Get your project featured</a></li>
                            <li><a class="dropdown-item py-2" href="https://commerce.coinbase.com/checkout/c6628131-3f8a-46b2-8a2f-0b941b7340df">Purchase an article</a></li>
                            <li><a class="dropdown-item py-2" href="https://commerce.coinbase.com/checkout/c6628131-3f8a-46b2-8a2f-0b941b7340df">Email blast</a></li>
                            <li><a class="dropdown-item py-2" href="https://commerce.coinbase.com/checkout/c6628131-3f8a-46b2-8a2f-0b941b7340df">Free Listing</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <span class="nav-link dropdown-toggle d-flex align-items-center cursor-pointer" data-bs-toggle="dropdown" aria-expanded="false">
                            <a class="text-decoration-none text-light" href="#">News</a>
                            <i class='fa-solid fa-chevron-right'></i>
                        </span>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Option 1</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <span class="nav-link dropdown-toggle d-flex align-items-center cursor-pointer" data-bs-toggle="dropdown" aria-expanded="false">
                            <a class="text-decoration-none text-light" href="#">
                                Calendar
                            </a>
                            <i class='fa-solid fa-chevron-right'></i>
                        </span>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Future</a></li>
                            <li><a class="dropdown-item" href="#">This Week</a></li>
                            <li><a class="dropdown-item" href="#">Today</a></li>
                            <li><a class="dropdown-item" href="#">Minting Now</a></li>
                            <li><a class="dropdown-item" href="#">Finished</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="d-flex flex-column flex-md-row col-xl-6 align-items-center justify-content-lg-end mt-4 mt-xl-0 gap-lg-4">
                    <form action="{{route('projects.search')}}" method="GET">

                    <div class="input-group d-none d-xl-flex h-46 bg-secondary-10 rounded-5 ps-2">
                            {{-- @csrf --}}
                            <input required type="text" class="form-control col-auto bg-transparent border-0 shadow-none" name="keyword" value="{{old('search_keyword')}}" placeholder="Project name, type" aria-describedby="button-addon2" />
                            <button class="btn btn-secondary col-auto px-20 rounded-5 border-0 text-light" type="submit" id="button-addon2">Search</button>
                        </div>
                    </form>
                    <div class='col-12 col-md-auto'>
                        <a href="{{route('projects.create')}}" class="btn-theme w-100 px-4 h-46">
                            Submit a project <i class='fa-solid fa-chevron-right'></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </nav>
</header>
