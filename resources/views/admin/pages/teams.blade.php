@extends('layout/admin')
@section('subtitle', 'Panel Admina')

@section('content')
 
@section('content')
    <main>
        <div class="create">

            <h1>Dodaj Drużynę</h1>
            @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <form action="{{route('admin.team.store')}}" method="post">
        @csrf
        <div class="create__field">
            <label for="name">Nazwa Drużyny</label>
            <input type="text" name="name" id="name">
            @error('name')
                <span class="error-text">{{ $message }}</span>
            @enderror
        </div>
        <div class="create__field">
            <label for="logo">Dodaj Logo</label>
            <input type="file" name="logo" id="logo">
            @error('logo')
                <span class="error-text">{{ $message }}</span>
            @enderror
        </div>
        <div class="create__field">
            <button type="submit">Dodaj</button>

        </div>
      
    </form>

    <table class="table table-striped products-table ">
        <thead>
            <tr>
                <th scope="col">Nazwa Drużyny</th>
                <th scope="col">Usuń</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($teams as $team)
            <tr>
                
                <th><img src="{{asset('storage/'.$team->logo)}}" alt="" style="width:30px">{{$team->name}}</th>
                <td><form action="{{route('admin.categories.destroy',$team->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit"><i class="uil uil-times-circle"></i></button>
                </form></td>
            </tr>
            @endforeach
               

        </tbody>
    </table>
        </div>
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