@extends('layout/admin')
@section('subtitle', 'Panel Admina')

@section('content')
    <main >
<div class="create">
    <h1>Edytuj produkt</h1>
    <form action="{{ route('admin.product.update', $product->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @error('loginError')
            <span class="error-text">{{ $message }}</span>
        @enderror
        <div class="create__field">
            <label for="title">Nazwa</label>
            <input type="text" name="title" id="title" placeholder="Nazwa" value="{{ $product->title }}">
            @error('title')
                <span class="error-text">{{ $message }}</span>
            @enderror
        </div>
        <div class="create__field">
            <label for="category_id">Kategoria</label>
            <select name="category_id" id="category_id">
                <option value="" selected disabled>-- Wybierz Kategorię</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}"
                        {{ $product->category->id == $category->id ? 'selected' : '' }}>{{$category->name}}</option>
                @endforeach
            </select>
            @error('category_id')
                <span class="error-text">{{ $message }}</span>
            @enderror
        </div>
        <div class="create__field">
            <label for="team_id">Drużyna</label>
            <select name="team_id" id="category_id">
                <option value="" selected disabled>-- Wybierz Drużynę</option>
                @foreach ($teams as $team)
                    <option value="{{ $team->id }}"
                        {{ $product->team->id == $team->id ? 'selected' : '' }}>{{$team->name}}</option>
                @endforeach
                @error('team_id')
                <span class="error-text">{{ $message }}</span>
            @enderror
            </select>
        </div>
        <div class="create__field">
            <label for="sizes">Rozmiar</label>
            <div class="create__field--checkbox">
            @foreach ($sizes as $size)
            <label for="{{$size->name}}">{{$size->name}}
               <input type="checkbox" name="sizes[]" id="{{$size->name}}" value="{{$size->id}}"{{in_array($size->id,$product->sizes->pluck('id')->toArray())?'checked':''}}></label>
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
               <input type="checkbox" name="genders[]" id="{{$gender->name}}" value="{{$gender->id}}"value="{{$gender->id}}"{{in_array($gender->id,$product->genders->pluck('id')->toArray())?'checked':''}}></label>
               @endforeach
            </div>
            @error('genders')
            <span class="error-text">{{ $message }}</span>
        @enderror
        </div>
        <div class="create__field">
            <label for="price">Cena</label>
            <input type="number" name="price" id="price" placeholder="Cena" value="{{$product->price}}">
            @error('price')
                <span class="error-text">{{ $message }}</span>
            @enderror
        </div>
        <div class="create__field">
            <label for="thumbnail">Miniaturka</label>
            <img src="{{asset('storage/'. $product->thumbnail)}}" alt="" style="width: 50px;margin-bottom:.5em">
            <input type="file" name="thumbnail" id="thumbnail">
            @error('thumbnail')
                <span class="error-text">{{ $message }}</span>
            @enderror
        </div>
        <div class="create__field">
            <label for="description">Opis</label>
            <textarea name="description" id="description" cols="30" rows="10" placeholder="Opis">{{ $product->description }}</textarea>
            @error('description')
                <span class="error-text">{{ $message }}</span>
            @enderror
        </div>
        <div class="create__field">
            <button type="submit">Zaktualizuj</button>
        </div>
    </form>
</div>


    </main>
    @endsection
    @section('right')
    <div class="top top--create">
        <div class="asside__top-hamburger">
            <button class="dashboard__hamburger">

                <i class="uil uil-bars"></i>
            </button>

            {{-- <button class="hamburger hamburger--boring dashboard__hamburger" type="button">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </button> --}}
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
    
