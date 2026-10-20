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
                        <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="/page1">On Screen</a>
                        </li>
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
    <h1 class="mx-5">Your next session</h1>
    <main class="container align-items-center justify-content-center py-4 on-screen">
        <h2 class="text-center mb-4">On Screen</h2>
        <div class="row row-cols-3 justify-content-center">
            <div class="col custom-card">
                <div class="card h-100">
                    <div class="d-flex justify-content-center p-2">
                        <img src="https://resizing.flixster.com/y-53m4gfgKXkibWLD7x4S-8bcCA=/164x246/v2/https://resizing.flixster.com/5E-7HN_emoAz2OrB98I9ol7Lero=/ems.cHJkLWVtcy1hc3NldHMvbW92aWVzLzViY2ViYTc5LWQwZDItNDIzNS1iOWUyLTY5Yjc2MjdjM2IyMi5qcGc="
                            class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Card title</h4>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col custom-card">
                <div class="card h-100">
                    <div class="d-flex justify-content-center p-2">
                        <img src="https://resizing.flixster.com/KMI97W_98kuvqFjO7WIlnYG8Th4=/164x246/v2/https://resizing.flixster.com/HI64aC1g5q3IEbUvYxwC7aD2k8E=/ems.cHJkLWVtcy1hc3NldHMvbW92aWVzLzBmZTYzOGEwLTRjMTQtNDcxYS1hMzY3LTUwOTI5OGQ1OTI0Ny5qcGc="
                            class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Card title</h4>
                        <p class="card-text">This is a short card.</p>
                    </div>
                </div>
            </div>
            <div class="col custom-card">
                <div class="card h-100">
                    <div class="d-flex justify-content-center p-2">
                        <img src="https://resizing.flixster.com/7uhRa2Jh_hwUQel8ybQqZS9PfGU=/164x246/v2/https://resizing.flixster.com/wkyovIOKHfAiMl1v4nSk6__GsJs=/ems.cHJkLWVtcy1hc3NldHMvbW92aWVzLzdjNzc1YmE5LTY3ZTItNDA5Yi05YzI3LWI0MjM5YzJiZTk0ZS5qcGc="
                            class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Card title</h4>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                            additional content.</p>
                    </div>
                </div>
            </div>
            <div class="col custom-card">
                <div class="card h-100">
                    <div class="d-flex justify-content-center p-2">
                        <img src="https://resizing.flixster.com/aKmNgdMI6EOeYCjDsFw3n3Gyp1Y=/164x246/v2/https://resizing.flixster.com/fDttnOieJGu-1t50whHJP_noHoM=/ems.cHJkLWVtcy1hc3NldHMvbW92aWVzL2YwNzc1ODkzLTljM2MtNDRlMS1iMTAyLWI3MmFiY2M2ZmU0OS5qcGc="
                            class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Card title</h4>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col custom-card">
                <div class="card h-100">
                    <div class="d-flex justify-content-center p-2">
                        <img src="https://resizing.flixster.com/2KDqZe_gapgVPM1Lsxea1Y0l5l0=/164x246/v2/https://resizing.flixster.com/UZ6p6ZIWkY5DqZ-MYEWbSY0YoqQ=/ems.cHJkLWVtcy1hc3NldHMvbW92aWVzL2ZhYzE3OWYxLTVlZjctNDIxZS1hOTYxLTA0ODFhN2Y0MTFkMS5qcGc="
                            class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Card title</h4>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col custom-card">
                <div class="card h-100">
                    <div class="d-flex justify-content-center p-2">
                        <img src="https://resizing.flixster.com/nO_7pmyci80MC32ED2pzkxDxumc=/164x246/v2/https://resizing.flixster.com/Tsm3tUCaKQbiCD0WfMpJnCNCarY=/ems.cHJkLWVtcy1hc3NldHMvbW92aWVzLzEyMWVmOGFjLThmZTQtNDhjYi04YWM5LTMxMDljYmFkOTQwMS5qcGc="
                            class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Card title</h4>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
        </div>
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
