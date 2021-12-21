@extends("layouts.default")

{{-- Sostutizione yield con una semplice stringa --}}
@section("page_title", "DC | Welcome to DC")

{{-- Sostituzione yield con del codice html --}}
@section("content")

    <main>
        <div class="container">
            <div class="products-container">
                @foreach ($lista_fumetti as $comic)

                    <div class="product-card">
                        <img src="{{$comic['thumb']}}" alt="" />
                        <h4>{{ $comic['series'] }}</h4>
                    </div>
                    
                @endforeach
            </div>
        </div>
    </main>

@endsection
