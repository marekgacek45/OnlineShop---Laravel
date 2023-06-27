@extends('layout/admin')
@section('subtitle', 'Panel Admina')




@section('content')
<div class="create">
    <h1>Dodaj produkt</h1>
    <form action="{{ route('admin.product.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        @error('loginError')
            <span class="error-text">{{ $message }}</span>
        @enderror
        <div class="create__field">
            <label for="title">Nazwa</label>
            <input type="text" name="title" id="title" placeholder="Nazwa produktu" value="{{ old('title') }}">
            @error('title')
                <span class="error-text">{{ $message }}</span>
            @enderror
        </div>
        <div class="create__field">
            <label for="category_id">Kategoria</label>
            <select name="category_id" id="category_id">
                <option value="" selected disabled>-- Wybierz Kategorię--</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}"
                        {{ old('category_id') == $category->id ? 'selected' : '' }}>{{$category->name}}</option>
                @endforeach
            </select>
            @error('category_id')
            <span class="error-text">{{ $message }}</span>
        @enderror
        </div>
        <div class="create__field">
            <label for="team_id">Drużyna</label>
            <select name="team_id" id="category_id">
                <option value="" selected disabled>-- Wybierz Drużynę--</option>
                @foreach ($teams as $team)
                    <option value="{{ $team->id }}"
                        {{ old('category_id') == $team->id ? 'selected' : '' }}>{{$team->name}}</option>
                @endforeach
            </select>
            @error('team_id')
                <span class="error-text">{{ $message }}</span>
            @enderror
        </div>
        <div class="create__field">
            <label for="sizes">Rozmiar</label>
            <div class="create__field--checkbox">
            @foreach ($sizes as $size)
            <label for="sizes[]">{{$size->name}}
               <input type="checkbox" name="sizes[]" id="{{$size->name}}" value="{{$size->id}}"></label>
            @endforeach
            </div>
            @error('sizes')
            <span class="error-text">{{ $message }}</span>
        @enderror
        </div>
        <div class="create__field">
            <label for="genders">Płeć</label>
            <div class="create__field--checkbox">
            @foreach ($genders as $gender)
            <label for="gender[]">{{$gender->name}}
               <input type="checkbox" name="genders[]" id="{{$gender->name}}" value="{{$gender->id}}"></label>
            @endforeach
            </div>
        </div>
        <div class="create__field">
            <label for="price">Cena</label>
            <input type="number" name="price" id="price" placeholder="Cena">
            @error('price')
                <span class="error-text">{{ $message }}</span>
            @enderror
        </div>
        <div class="create__field">
            <label for="thumbnail">Miniaturka</label>
            <input type="file" name="thumbnail" id="thumbnail">
            @error('thumbnail')
                <span class="error-text">{{ $message }}</span>
            @enderror
        </div>
        
        <div class="create__field">
            <label for="Description">Opis</label>
            <textarea name="description" id="description" cols="30" rows="10" placeholder="Opis">{{ old('description') }}</textarea>
            @error('description')
                <span class="error-text">{{ $message }}</span>
            @enderror
        </div>

        <div class="create__field">
            <button type="submit">Dodaj Produkt</button>
        </div>
    </form>
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
    <div class="theme-toggler">
        <i class="uil uil-sun active"></i>
        <i class="uil uil-moon"></i>
    </div>
    <div class="profile">
        <div class="info">
            <p>Hey, <b>Rafał</b></p>
            <small>admin</small>
        </div>
        <div class="profile-photo">
            <img src="https://cdn.pixabay.com/photo/2016/09/01/08/25/smiley-1635458_1280.png" alt="">
        </div>
    </div>
</div>
@endsection
