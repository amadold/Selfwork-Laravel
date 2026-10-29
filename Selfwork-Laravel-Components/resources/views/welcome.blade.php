<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">
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

    <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL" crossorigin="anonymous">
    </script>
</body>

</html>
