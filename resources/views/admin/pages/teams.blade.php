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
        <form action="{{route('admin.team.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <label for="name">Nazwa Drużyny</label>
            <input type="text" name="name" id="name">
            <label for="logo">Logo</label>
            <input type="file" name="logo" id="logo">
            <button type="submit">Dodaj</button>
        </form>

        <table>
            <thead>
                <tr>
                    <th>1</th>
                    <th>Drużyna:</th>
                    
                    <th>Usuń</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($teams as $team)
                <tr>
                    
                    <th><img src="{{asset('storage/'. $team->logo)}}" alt="" style='width:50px'>{{$team->name}}</th>
                    <td><form action="{{route('admin.team.destroy',$team->id)}}" method="POST">
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
