@props(['services'])

<section class="container d-flex aling-items-center justify-content-evenly mb-5">
    <div class="row row-cols-12 row-cols-md-3">
        @foreach ($services as $service)
            <div class="col-3 col-md-12 mb-5">
                <div class="card my-5" style="width: 18rem;">
                    <div class="card-body">
                        <img src="{{ $service['img'] }}" class="card-img" alt="{{ $service['title'] }}">
                        <h5 class="mt-2 mb-0">{{ $service['title'] }}</h5>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
