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
                        <li class="nav-item"><a class="nav-link" href="/page1">On Screen</a></li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="/page2">Prices and
                                FAQ</a></li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                        <button class="btn-outline theme-success" type="submit">Search</button>
                    </form>
                </div>
            </dialog>
        </div>
    </nav>

    <h1 class="prices">Prices and FAQ</h1>
    <main>
        {{-- Cards --}}
        <section id="prices" class="container-fluid">
            <div class="row g-3 d-flex justify-content-evenly align-items-stretch prices-card">

                <!-- Card Kids -->
                <div class="card w-100" style="max-width: 320px; min-width: 280px;">
                    <div class="card-body h-100 d-flex flex-column">
                        <h4 class="card-title">Kids</h4>
                        <p class="card-text">Kids from ages 7 to 12 pay €3,99 every day of the week</p>
                    </div>
                </div>


                <!-- Card Student -->
                <div class="card w-100" style="max-width: 320px; min-width: 280px;">
                    <div class="card-body h-100 d-flex flex-column">
                        <h4 class="card-title">Student</h4>
                        <p class="card-text">Students and Grad-Students pay €5,99 every day of the week</p>
                    </div>
                </div>


                <!-- Card Adult -->
                <div class="card w-100" style="max-width: 320px; min-width: 280px;">
                    <div class="card-body h-100 d-flex flex-column">
                        <h4 class="card-title">Adult</h4>
                        <p class="card-text">Adults pay €11,99 from Monday to Thursday and €13,99 from Friday to
                            Sunday</p>
                    </div>
                </div>

            </div>
        </section>
        {{-- Plans --}}
        <section id="membership" class="my-5">
            <label class="form-label">Select a plan</label>
            <div class="d-flex flex-column aling-items-center justify-content-center text-center">
                <div class="form-group mb-3">
                    <div class="vstack gap-2">
                        <div class="form-field form-field-card custom-field">
                            <input type="radio" id="fieldRadioGroup1" class="radio" name="fieldRadioGrouped" />
                            <div class="form-field-content">
                                <label for="fieldRadioGroup1">Basic</label>
                                <small class="form-text">€5,99/month — Basic.</small>
                            </div>
                        </div>
                        <div class="form-field form-field-card custom-field">
                            <input type="radio" id="fieldRadioGroup2" class="radio" name="fieldRadioGrouped" />
                            <div class="form-field-content">
                                <label for="fieldRadioGroup2">Intermediate</label>
                                <small class="form-text">$9,99/month — Intermediate</small>
                            </div>
                        </div>
                        <div class="form-field form-field-card custom-field">
                            <input type="radio" id="fieldRadioGroup3" class="radio" name="fieldRadioGrouped" />
                            <div class="form-field-content">
                                <label for="fieldRadioGroup3">Premium</label>
                                <small class="form-text">$14,99/month — Premium</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <button class="btn-outline btn-styled theme-success custom-btn">Select Plan</button>
        </section>
        {{-- FAQ --}}
        <section id="faq" class="container my-5">
            <h2>FAQ</h2>
            <div class="accordion">
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
                        <code>open</code> attribute is present. The native <code>&lt;details&gt;</code> element handles
                        all
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
                        <strong>This is the second item’s accordion body.</strong> The <code>name</code> attribute
                        groups
                        this with other accordion items. When you open this item, any other open item in the same group
                        will
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
                        <strong>This is the third item’s accordion body.</strong> This exclusive accordion behavior is
                        built
                        into the browser—no Bootstrap JavaScript required. Just use matching <code>name</code>
                        attributes on
                        your <code>&lt;details&gt;</code> elements.
                    </div>
                </details>
            </div>
        </section>
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
