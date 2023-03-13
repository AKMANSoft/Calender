<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/assets/images/icons/favicon.png" type="image/x-icon">
    <title>Calendar</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/assets/css/styles.css">
</head>

<body>
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
                            <a class="nav-link active" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Marketing Support</a>
                        </li>
                        <li class="nav-item dropdown">
                            <span class="nav-link dropdown-toggle d-flex align-items-center" data-bs-toggle="dropdown" aria-expanded="false">
                                <a class="text-decoration-none text-light" href="#">Services</a>
                                <i class='fa-solid fa-chevron-right'></i>
                            </span>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item py-2" href="#">Get Gold Verification (KYC Verified)</a></li>
                                <li><a class="dropdown-item py-2" href="#">Get your project featured</a></li>
                                <li><a class="dropdown-item py-2" href="#">Purchase an article</a></li>
                                <li><a class="dropdown-item py-2" href="#">Email blast</a></li>
                                <li><a class="dropdown-item py-2" href="#">Free Listing</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <span class="nav-link dropdown-toggle d-flex align-items-center" data-bs-toggle="dropdown" aria-expanded="false">
                                <a class="text-decoration-none text-light" href="#">News</a>
                                <i class='fa-solid fa-chevron-right'></i>
                            </span>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Option 1</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <span class="nav-link dropdown-toggle d-flex align-items-center" data-bs-toggle="dropdown" aria-expanded="false">
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
                        <div class="input-group d-none d-xl-flex h-46 bg-secondary-10 rounded-5 ps-2">
                            <input type="text" class="form-control col-auto bg-transparent border-0 shadow-none" placeholder="Project name, type" aria-describedby="button-addon2" />
                            <button class="btn btn-secondary col-auto px-20 rounded-5 border-0 text-light" type="button" id="button-addon2">Search</button>
                        </div>
                        <div class='col-12 col-md-auto'>
                            <a href="/submit-project.php" class="btn-theme w-100 px-4 h-46">
                                Submit a project <i class='fa-solid fa-chevron-right'></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </nav>
    </header>