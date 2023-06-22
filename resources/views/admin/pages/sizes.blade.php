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
        <form action="{{route('admin.size.store')}}" method="post">
            @csrf
            <label for="name">Dodaj Rozmiar</label>
            <input type="text" name="name" id="name">
            <button type="submit">Dodaj</button>
        </form>

        <table>
            <thead>
                <tr>
                    <th>1</th>
                    <th>Rozmiar:</th>
                    <th>Usuń</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sizes as $size)
                <tr>
                    
                    <th>{{$size->name}}</th>
                    <td><form action="{{route('admin.color.destroy',$size->id)}}" method="POST">
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