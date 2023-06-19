@extends('layout/admin')
@section('subtitle', 'Panel Admina')

@section('content')
    <main class="test">

        <h2>siema</h2>
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
        <form action="{{route('admin.categories.store')}}" method="post">
            @csrf
            <label for="name">Nazwa Kategori</label>
            <input type="text" name="name" id="name">
            <button type="submit">Dodaj</button>
        </form>

        <table>
            <thead>
                <tr>
                    <th>1</th>
                    <th>Nazwa Kategorii:</th>
                    <th>Usuń</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                <tr>
                    
                    <th>{{$category->name}}</th>
                    <td><form action="{{route('admin.categories.destroy',$category->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">X</button>
                    </form></td>
                </tr>
                @endforeach
                   

            </tbody>
        </table>

    </main>
@endsection
