@props(['detail'])

<section class="container d-flex flex-wrap mb-5">
    <div class="row row-cols-12 row-cols-md-3">
        <div class="col-4 col-md-12 mb-5">
            <div class="card h-100">
                <img src="{{ $detail['img'] }}" class="card-img-top" alt="{{ $detail['title'] }}">
                <div class="card-body">
                    <h4 class="card-title mb-4">{{ $detail['title'] }}</h4>
                    <p class="card-text">{{ $detail['description'] }}</p>
                </div>
            </div>
        </div>
    </div>
</section>
