@props(['destinations'])

<section class="container d-flex aling-items-center justify-content-center mb-5">
    <div id="carouselExampleInterval" class="carousel slide w-50" data-bs-autoplay="true">
        <div class="carousel-inner rounded-5">
            @foreach ($destinations as $destination)
                <div class="carousel-item active" data-bs-interval="6000">
                    <a href="{{ route('detail', ['id' => $destination['id']]) }}"><img src="{{ $destination['img'] }}"
                            class="d-block w-100 carousel-img" alt="{{ $destination['title'] }}"></a>
                </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-between align-items-center mt-3">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="3"
                    aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="4"
                    aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="5"
                    aria-label="Slide 3"></button>
            </div>
        </div>
    </div>
</section>
