<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/style.css">
</head>

<body>
    {{-- Navbar --}}
    <nav class="navbar sm:navbar-expand bg-1 fg-2">
        <div class="container-fluid">
            <a class="navbar-brand" href="/"><img class="nav-img"
                    src="/media/Gemini_Generated_Image_3ekr1w3ekr1w3ekr.jpg" alt="Logo"></a>
            <button class="btn-icon navbar-toggler" type="button" data-bs-toggle="drawer"
                data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" aria-hidden="true"></span>
            </button>
            <dialog class="drawer drawer-end align-items-center justify-content-center" tabindex="-1"
                id="navbarNavAltMarkup" aria-labelledby="navbarNavAltMarkupLabel">
                <div class="drawer-header">
                    <h5 class="drawer-title" id="navbarNavAltMarkupLabel">Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="drawer" aria-label="Close"></button>
                </div>
                <div class="drawer-body">
                    <div class="nav nav-pills navbar-nav">
                        <a class="nav-link" href="/home">Home</a>
                        <a class="nav-link active" aria-current="page" href="/service">Services</a>
                        <a class="nav-link" href="/about">About Us</a>
                    </div>
                </div>
            </dialog>
        </div>
    </nav>

    {{-- Title --}}
    <h1 class="text-center d-flex aling-items-center justify-content-center">Mondo Viaggio</h1>

    {{-- Main --}}

    <main>
        <section class="container d-flex flex-wrap mb-5">
            <div class="row row-cols-12 row-cols-md-3">
                @foreach ($destinations as $destination)
                    <div class="col-4 col-md-12 mb-5">
                        <div class="card h-100">
                            <img src="{{ $destination['img'] }}" class="card-img-top h-50 card-img-custom"
                                alt="{{ $destination['title'] }}">
                            <div class="card-body card-custom">
                                <h4 class="card-title mb-4">{{ $destination['title'] }}</h4>
                                <p class="card-text">This is a longer card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit longer.</p>
                                <a href="{{ route('detail', ['id' => $destination['id']]) }}"
                                    class="btn-solid theme-primary">Learn More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

    </main>

    {{-- Footer --}}
    <footer class="bg-dark text-white text-center">
        <div class="container-fluid d-flex align-items-center justify-content-evenly">
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
        <div class="text-center">
            <p class="mb-0">Project Laravel Aulab</p>
        </div>
    </footer>

    <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL" crossorigin="anonymous">
    </script>
</body>

</html>
