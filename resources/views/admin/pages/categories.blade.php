@extends('layout/admin')
@section('subtitle', 'Panel Admina')

@section('content')
    <main>
        <div class="create">

            <h1>Dodaj Kategorię</h1>
            @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <form action="{{route('admin.categories.store')}}" method="post">
        @csrf
        <div class="create__field">
            <label for="name">Nazwa Kategori</label>
            <input type="text" name="name" id="name">
            @error('name')
                <span class="error-text">{{ $message }}</span>
            @enderror
        </div>
        <div class="create__field">
            <button type="submit" style="margin-bottom: 2em">Dodaj</button>

        </div>
      
    </form>

    <table class="table table-striped products-table ">
        <thead>
            <tr>
                <th scope="col">Nazwa Kategorii</th>
                <th scope="col">Usuń</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
            <tr>
                
                <th>{{$category->name}}</th>
                <td><form action="{{route('admin.categories.destroy',$category->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="deleteBtn"><i class="uil uil-times-circle"></i></button>
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