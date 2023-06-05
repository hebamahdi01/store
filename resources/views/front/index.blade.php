@extends("layouts.front")

@section("content")
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">

    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">السابق</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">التالي</span>
    </button>
</div>


<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
        @foreach ($products as $product)
        <div class="col-lg-4">
            <svg class="bd-placeholder-img rounded-circle" width="140" height="140"
                xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder"
                preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
            </svg>
            <h2 class="fw-normal">{{ $product->name }}</h2>
            <p>{{ $product->description }}</p>
            @if(auth()->id())
                <form action="{{ url('/orders/' . $product->id . '/buy') }}" method="post">
                    @csrf
                    <input type="number" class="form-control" placeholder="0" value="1" name="quantity" min="0">
                    <p><button class="btn btn-primary" type="submit">شراء المنتج</button></p>
                </form>

            @endif
        </div><!-- /.col-lg-4 -->
        @endforeach
    </div><!-- /.row -->

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

</div><!-- /.container -->
@endsection
