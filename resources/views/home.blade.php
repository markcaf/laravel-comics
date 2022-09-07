@extends('layouts.main')

@section('title', 'Home')

@section('main-content')

{{-- Jumbo --}}
<section id="jumbo">

</section>
{{-- /Jumbo --}}

{{-- Main Content Comic --}}
<main>

    <div class="container">
        <div class="row">
            <div class="col-2 heading text-center py-2">
                Current Series
            </div>
        </div>

        <div class="row">
            <div class="col-12 py-5 comics-container d-flex flex-wrap">

                {{-- Comic card --}}
                @foreach ($comics as $comic)
                    <div class="comic mb-5">
                        <div class="image-container">
                        <img class="comic-cover" src="{{ $comic->image }}" alt="{{ $comic->type }}" />
                        </div>
                        <div class="title text-white text-uppercase mt-3">
                        {{ $comic->title }}
                        </div>
                    </div>
                @endforeach
                {{-- /Comic card --}}
            </div>
        </div>

        <div class="row">
            <div class="col text-center d-flex justify-content-center">
                <div class="load-more text-white py-2 mb-5">
                    LOAD MORE
                </div>
            </div>
        </div>
    </div>

</main>
{{-- /Main Content Comic --}}

{{-- Market --}}
<section id="market" class="py-5">
    <nav class="d-flex justify-content-center gap-5">
        <ul class="list-unstyled">
            <li>
                <img src="../assets/images/buy-comics-digital-comics.png" alt="Buy Comics">
            </li>
            <li>
                DIGITAL COMICS
            </li>
        </ul>

        <ul class="list-unstyled">
            <li>
                <img src="../assets/images/buy-comics-merchandise.png" alt="Buy Comics">
            </li>
            <li>
                DC MERCHANDISE
            </li>
        </ul>

        <ul class="list-unstyled">
            <li>
                <img src="../assets/images/buy-comics-subscriptions.png" alt="Buy Comics">
            </li>
            <li>
                SUBSCRIPTION
            </li>
        </ul>

        <ul class="list-unstyled">
            <li>
                <img src="../assets/images/buy-comics-shop-locator.png" alt="Buy Comics">
            </li>
            <li>
                COMIC SHOP LOCATOR
            </li>
        </ul>

        <ul class="list-unstyled">
            <li>
                <img class="svg-icon" src="../assets/images/buy-dc-power-visa.svg" alt="Buy Comics">
            </li>
            <li>
                DC POWER VISA
            </li>
        </ul>
    </nav>
</section>
{{-- /Market --}}
@endsection