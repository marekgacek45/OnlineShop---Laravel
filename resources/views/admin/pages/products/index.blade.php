@extends('layout/admin')
@section('subtitle', 'Panel Admina')

@section('content')
    <main class="test">

        <h2>lista produktów</h2>
        <table class="table table-striped">
            
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
                        <td><img src="{{asset('storage/'. $product->thumbnail)}}" alt="" style="width:50px"> {{$product->title}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->category->name}}</td>
                        <td>{{$product->team->name}}</td>
                        <td>{{$product->sizes}}</td>
                        <td>{{$product->colors}}</td>
                        <td>-</td>
                    </tr>
                @endforeach
              
            </tbody>
          </table>
         

    </main>
@endsection
