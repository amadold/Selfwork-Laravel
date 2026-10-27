@props(['destinations'])

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
