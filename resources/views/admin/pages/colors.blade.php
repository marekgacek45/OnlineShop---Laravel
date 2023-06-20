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
        <form action="{{route('admin.color.store')}}" method="post">
            @csrf
            <label for="name">Dodaj kolor</label>
            <input type="text" name="name" id="name">
            {{-- <label for="color">Wybierz kolor</label> --}}
            <input type="color" name="code" id="code">
            <button type="submit">Dodaj</button>
        </form>

        <table>
            <thead>
                <tr>
                    <th>1</th>
                    <th>Kolor:</th>
                    <th>Usuń</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($colors as $color)
                <tr>
                    
                    <th>{{$color->name}} <div style="width:30px;height:30px;background-color:{{$color->code}}"></div></th>
                    <td><form action="{{route('admin.color.destroy',$color->id)}}" method="POST">
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
