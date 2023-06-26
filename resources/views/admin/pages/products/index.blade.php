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
                    <th scope="col">Kategoria</th>
                    <th scope="col">Drużyna</th>
                    <th scope="col">Rozmiar</th>
                    <th scope="col">Akcje</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>
                            <div class="td-image"><img src="{{ asset('storage/' . $product->thumbnail) }}" alt=""
                                    style="width:50px">
                                {{ $product->title }}
                            </div>
                        </td>
                        <td>
                            <div class="td">{{ $product->price }} zł</div>
                        </td>
                        <td>
                            <div class="td">{{ $product->category->name }}</div>
                        </td>
                        <td>
                            <div class="td"><img src="{{ asset('storage/' . $product->team->logo) }}" alt=""
                                    style="width:50px"></div>
                        </td>
                        <td>@foreach ($product->sizes as $item)
                            <div class="td"><p>{{$item->name}}</p></div>
                        @endforeach</td>
                        <td>
                            <div class="actions">
                                <button><a href="{{route("admin.product.edit", $product->id)}}"><i class="uil uil-eye"></i></a></button>
                                <button><i class="uil uil-edit"></i></button>
                                <button><i class="uil uil-times-circle"></i></button>
                            </div>
                        </td>

                    </tr>
                @endforeach


            </tbody>
        </table>
    </main>
@endsection
