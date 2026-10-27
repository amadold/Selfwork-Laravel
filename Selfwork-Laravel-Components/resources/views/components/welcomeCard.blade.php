@props(['welcomeImg'])

<section class="card d-flex align-items-center justify-content-center" style="max-width: 320px">
    <img src="{{ asset($welcomeImg) }}" class="card-img-top" alt="Logo">
    <div class="card-body d-flex aling-items-center justify-content-center">
        <a href="/home" class="btn-outline theme-success">Find you next destination</a>
    </div>
</section>
