<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.2/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">
    <link rel="stylesheet" href="/style.css">
</head>

<body>
    <nav class="navbar bg-1 fg-2">
        <div class="container-fluid">
            <a class="navbar-brand" href="/"><img class="img-logo" src="/media/logo.jpg" alt=""></a>
            <button class="btn-icon navbar-toggler" type="button" data-bs-toggle="drawer"
                data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" aria-hidden="true"></span>
            </button>
            <dialog class="drawer drawer-end" tabindex="-1" id="navbarTogglerDemo02"
                aria-labelledby="navbarTogglerDemo02Label">
                <div class="drawer-header">
                    <h5 class="drawer-title" id="navbarTogglerDemo02Label">Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="drawer" aria-label="Close"></button>
                </div>
                <div class="drawer-body">
                    <ul class="navbar-nav me-auto mb-2">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="/">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="/page1">On Screen</a></li>
                        <li class="nav-item"><a class="nav-link" href="/page2">Prices and FAQ</a></li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                        <button class="btn-outline theme-success" type="submit">Search</button>
                    </form>
                </div>
            </dialog>
        </div>
    </nav>
    <div class="header">
        <h1 class="title">Cine Multi</h1>
    </div>

    <div class="text-center my-10">
        <h2 class="h2-title">On Screen</h2>
    </div>

    <main class="d-flex align-items-center justify-content-center my-4">

        <div id="carouselExampleInterval" class="carousel slide" data-bs-autoplay="true">
            <div class="carousel-inner rounded-5">
                <div class="carousel-item active" data-bs-interval="6000">
                    <img src="https://resizing.flixster.com/y-53m4gfgKXkibWLD7x4S-8bcCA=/164x246/v2/https://resizing.flixster.com/5E-7HN_emoAz2OrB98I9ol7Lero=/ems.cHJkLWVtcy1hc3NldHMvbW92aWVzLzViY2ViYTc5LWQwZDItNDIzNS1iOWUyLTY5Yjc2MjdjM2IyMi5qcGc="
                        class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="6000">
                    <img src="https://resizing.flixster.com/qpSbFx5QSvR3mkLQnJiP0cpscEk=/164x246/v2/https://resizing.flixster.com/nkAjyNfvQ0czMcFMa0Gsjl5bI28=/ems.cHJkLWVtcy1hc3NldHMvbW92aWVzLzM5YWIzYTg3LWIxYmYtNDM1ZC1iZjg3LWQ1YWIwZTFmNjYwOS5qcGc="
                        class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="6000">
                    <img src="https://resizing.flixster.com/aKmNgdMI6EOeYCjDsFw3n3Gyp1Y=/164x246/v2/https://resizing.flixster.com/fDttnOieJGu-1t50whHJP_noHoM=/ems.cHJkLWVtcy1hc3NldHMvbW92aWVzL2YwNzc1ODkzLTljM2MtNDRlMS1iMTAyLWI3MmFiY2M2ZmU0OS5qcGc="
                        class="d-block w-100" alt="...">
                </div>
            </div>
            <div class="carousel-indicators position-relative mt-3 mb-5">
                <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
        </div>

        {{-- Form --}}

    </main>
    <footer>
        <div class="container-fluid d-flex stiky-bottom align-items-center justify-content-evenly">
            <div>
                <ul class="list-unstyled mb-0">
                    <li>Contact us:</li>
                    <li>Address:</li>
                    <li>About us:</li>
                </ul>
            </div>
            <div>
                <ul class="list-unstyled mb-0">
                    <li>Work with us</li>
                    <li>Partners</li>
                    <li>Socials: <i class="bi bi-instagram"></i></li>
                </ul>
            </div>
        </div>
        <div class="text-center footer-text">
            <p>Project Laravel Aulab</p>
        </div>
    </footer>
    <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL" crossorigin="anonymous">
    </script>
</body>

</html>
