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
                        <a class="nav-link" href="/service">Services</a>
                        <a class="nav-link active" aria-current="page" href="/about">About Us</a>
                    </div>
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

        {{-- Form --}}

        <h2 class="text-center my-5">Registration</h2>
        <div class=" d-flex align-items-center justify-content-center registration">
            <form class="row g-3 container">
                <div class="md:col-6">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail4">
                </div>
                <div class="md:col-6">
                    <label for="inputPassword4" class="form-label">Password</label>
                    <input type="password" class="form-control" id="inputPassword4">
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Address</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                </div>
                <div class="col-12">
                    <label for="inputAddress2" class="form-label">Address 2</label>
                    <input type="text" class="form-control" id="inputAddress2"
                        placeholder="Apartment, studio, or floor">
                </div>
                <div class="md:col-6">
                    <label for="inputCity" class="form-label">City</label>
                    <input type="text" class="form-control" id="inputCity">
                </div>
                <div class="md:col-4">
                    <label for="inputState" class="form-label">State</label>
                    <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="md:col-2">
                    <label for="inputZip" class="form-label">Zip</label>
                    <input type="text" class="form-control" id="inputZip">
                </div>
                <div class="col-12">
                    <div class="form-field">
                        <input type="checkbox" id="gridCheck" class="check">
                        <label for="gridCheck">
                            Subscribe to our newsletter
                        </label>
                    </div>
                </div>
                <div class="col-12">
                    <button onclick="alert('Registration completed')" type="submit"
                        class="btn-solid theme-primary">Sign in</button>
                </div>
            </form>
        </div>

        {{-- FAQ --}}

        <h1 class="text-center my-5">FAQ</h1>
        <div class="accordion container aling-items-center justify-content-center mb-5 w-50">
            <details class="accordion-item" name="accordionExample" open>
                <summary class="accordion-header">
                    Accordion Item #1
                    <svg class="accordion-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                        fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
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
                    <svg class="accordion-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                        fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
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
