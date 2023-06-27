@extends('layout/admin')
@section('subtitle', 'Panel Admina')

@section('content')
    <main class="main">
        <h1>Lista produktów</h1>
        <table class="table table-striped products-table">
            <thead>
                <tr>
                    <th scope="col">Produkt</th>
                    <th scope="col">Cena</th>
                    <th scope="col" class="desktop">Kategoria</th>
                    <th scope="col" class="desktop">Drużyna</th>
                    <th scope="col" class="desktop">Rozmiar</th>
                    <th scope="col" class="desktop">Płeć</th>
                    <th scope="col">Akcje</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>
                            <div class="td-image"><img src="{{ asset('storage/' . $product->thumbnail) }}" alt=""
                                    style="width:50px">
                                <p class="small">{{ $product->title }}</p>
                            </div>
                        </td>
                        <td>
                            <div class="td">{{ $product->price }} zł</div>
                        </td>
                        <td class="desktop">
                            <div class="td">{{ $product->category->name }}</div>
                        </td>
                        <td class="desktop">
                            <div class="td"><img src="{{ asset('storage/' . $product->team->logo) }}" alt=""
                                    style="width:50px"></div>
                        </td>
                        <td class="desktop">
                            @foreach ($product->sizes as $item)
                                <div class="td">
                                    <p>{{ $item->name }}</p>
                                </div>
                            @endforeach
                        </td>
                        <td class="desktop">
                            @foreach ($product->genders as $item)
                                <div class="td">
                                    <p>{{ $item->name }}</p>
                                </div>
                            @endforeach
                        </td>

                        <td class="flex">
                            <div class="actions">
                                <button><i class="uil uil-eye"></i></button>
                                <button><a href="{{ route('admin.product.edit', $product->id) }}"><i
                                            class="uil uil-edit"></i></a></button>
                                <form action="{{ route('admin.product.delete', $product->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"><i class="uil uil-times-circle">
                                        </i></button>
                                </form>
                            </div>
                        </td>

                    </tr>
                @endforeach


            </tbody>
        </table>
    </main>
@endsection
@section('right')
<div class="top">
    <div class="asside__top-hamburger">
        <button class="dashboard__hamburger">

            <i class="uil uil-bars"></i>
        </button>

    </div>
    
    <div class="profile">
        <div class="info">
            <p>Cześć, <b>Admin</b></p>
            <small>admin</small>
        </div>
        <div class="profile-photo">
            <img src="https://cdn.pixabay.com/photo/2016/09/01/08/25/smiley-1635458_1280.png" alt="">
        </div>
    </div>
</div>
@endsection