@extends('layout/master')
@section('subtitle', 'Strona Główna')

@section('content')
    <div class="product__container box wrapper">
        <div class="product__container-images"><img src="{{ asset('storage/' . $product->thumbnail) }}" alt=""></div>
        <div class="product__container-info">
            <div class="top">
                <img src="{{ asset('storage/' . $product->team->logo) }}" alt="">
                <h1>{{ $product->title }}</h1>
                <p><span>{{ $product->description }}</span><br>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem nesciunt rerum ipsam natus praesentium ut, eum voluptatibus illum quibusdam deserunt voluptate repellat iusto cum perferendis facere autem. Consequuntur dolorem nam amet dolorum quo deserunt cumque expedita praesentium! In, labore ratione.</p>
            </div>

            <div class="sizes__container">
                <div class="sizes__box">
                    <label for="sizes">Rozmiary:</label>
                    <select name="sizes" id="sizes" class="btn">
<option value="" disabled selected>--Wybierz rozmiar--</option>
                        @foreach ($product->sizes as $size)
                            <option>{{ $size->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="actions">
                <button class="btn">Dodaj do koszyka</button>
            </div>
        </div>
    </div>

<section class="section">
        <h2>Inne produkty tej drużyny</h2>
        <div class="products__container wrapper">
            @foreach ($products as $other_product)
                @php if ($other_product->id !== $product->id) { @endphp
                <a href="{{ route('product', $other_product->id) }}" class="product__card box">
                    <img src="{{ asset('storage/' . $other_product->thumbnail) }}" alt="" style="width:150px">
                    <div class="product__card-text">
                        <h2>{{ $other_product->title }}</h2>
                        <h3>{{ $other_product->price }} zł</h3>
                    </div>
                </a>
                @php } @endphp
            @endforeach
        </div>
    </section>

@endsection

