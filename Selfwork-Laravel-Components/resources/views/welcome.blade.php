<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mondo Viaggio</title>
    @vite('resources/css/app.css')

</head>

<body>
    <h1 class="text-center m-5">Mondo Viaggio</h1>
    <main class="d-flex align-items-center justify-content-center">

        {{-- Welcome --}}
        <section class="card d-flex align-items-center justify-content-center" style="max-width: 320px">
            <img src="{{ asset($welcomeImg) }}" class="card-img-top" alt="Logo">
            <div class="card-body d-flex aling-items-center justify-content-center">
                <a href="/home" class="btn-outline theme-success">Find you next destination</a>
            </div>
        </section>

    </main>

    @vite('resources/js/app.js')
</body>

</html>
