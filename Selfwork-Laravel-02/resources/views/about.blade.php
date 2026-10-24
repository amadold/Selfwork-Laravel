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
    <nav class="navbar md:navbar-expand bg-1">
        <div class="container-fluid">
            <a class="navbar-brand" href="/"><img class="nav-img"
                    src="/media/Gemini_Generated_Image_3ekr1w3ekr1w3ekr.jpg" alt="Logo"></a>
            <button class="btn-icon navbar-toggler" type="button" data-bs-toggle="drawer"
                data-bs-target="#navbarDrawer" aria-controls="navbarDrawer" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" aria-hidden="true"></span>
            </button>
            <dialog class="drawer drawer-end" tabindex="-1" id="navbarDrawer" aria-labelledby="navbarDrawerLabel">
                <div class="drawer-header">
                    <h5 class="drawer-title" id="navbarDrawerLabel">Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="drawer" aria-label="Close"></button>
                </div>
                <div class="drawer-body mb-2 md:mb-0">
                    <ul class="nav navbar-nav me-auto">
                        <li class="nav-item">
                            <button class="nav-link" type="button" data-bs-toggle="menu" aria-expanded="false">
                                Menu
                            </button>
                            <div class="menu">
                                <a class="menu-item" href="/home">Home</a>
                                <a class="menu-item" href="/service">Services</a>
                                <hr class="menu-divider">
                                <a class="menu-item" href="about">About Us</a>
                            </div>
                        </li>
                    </ul>
                    <form class="hstack gap-2" role="search">
                        <input class="form-control" type="search" placeholder="Search" aria-label="Search" />
                        <button class="btn-solid btn-icon theme-secondary" type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-search" viewBox="0 0 16 16">
                                <path
                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                            </svg>
                        </button>
                    </form>
                </div>
            </dialog>
        </div>
    </nav>

    {{-- Title --}}
    <h1 class="text-center d-flex aling-items-center justify-content-center">Mondo Viaggio</h1>

    {{-- Main --}}

    <main>
        {{-- About --}}
        <div class="container d-flex align-items-center justify-content-between custom-avatar">
            <span class="avatar" style="--bs-avatar-size: 8rem;">
                <img class="avatar-img" src="/media/Gemini_Generated_Image_3ekr1w3ekr1w3ekr.jpg" alt="mdo">
            </span>
            <p>Lorem ipsum dolor sit amet.</p>
        </div>

        {{-- FAQ --}}

        <h1 class="text-center my-5">FAQ</h1>
        <div class="accordion container aling-items-center justify-content-center mb-5 w-50">
            <details class="accordion-item" name="accordionExample" open>
                <summary class="accordion-header">
                    Accordion Item #1
                    <svg class="accordion-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="none"
                        stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m2 5 6 6 6-6" />
                    </svg>
                </summary>
                <div class="accordion-body">
                    <strong>This is the first item’s accordion body.</strong> It is shown by default because the
                    <code>open</code> attribute is present. The native <code>&lt;details&gt;</code> element handles all
                    the show/hide logic without any JavaScript. You can put any HTML content within the
                    <code>.accordion-body</code>.
                </div>
            </details>
            <details class="accordion-item" name="accordionExample">
                <summary class="accordion-header">
                    Accordion Item #2
                    <svg class="accordion-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="none"
                        stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m2 5 6 6 6-6" />
                    </svg>
                </summary>
                <div class="accordion-body">
                    <strong>This is the second item’s accordion body.</strong> The <code>name</code> attribute groups
                    this with other accordion items. When you open this item, any other open item in the same group will
                    close automatically.
                </div>
            </details>
            <details class="accordion-item" name="accordionExample">
                <summary class="accordion-header">
                    Accordion Item #3
                    <svg class="accordion-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                        fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m2 5 6 6 6-6" />
                    </svg>
                </summary>
                <div class="accordion-body">
                    <strong>This is the third item’s accordion body.</strong> This exclusive accordion behavior is built
                    into the browser—no Bootstrap JavaScript required. Just use matching <code>name</code> attributes on
                    your <code>&lt;details&gt;</code> elements.
                </div>
            </details>
        </div>
    </main>

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
