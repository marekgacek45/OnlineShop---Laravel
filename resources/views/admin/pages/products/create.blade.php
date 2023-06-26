@extends('layout/admin')
@section('subtitle', 'Panel Admina')

@section('content')
    <main class="test">
        <div class="form__box form--login" >
            <div class="form__box-title">
            </div>
            <div class="form__box-content" >
                <h2>Dodaj nowy produkt</h2>
                <form action="{{ route('admin.product.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @error('loginError')
                        <span class="error-text">{{ $message }}</span>
                    @enderror
                    <div class="form__field">
                        <label for="title">Nazwa</label>
                        <input type="text" name="title" id="title" placeholder="Nazwa" value="{{ old('title') }}">
                        @error('titlel')
                            <span class="error-text">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form__field">
                        <label for="category_id">Kategoria</label>
                        <select name="category_id" id="category_id">
                            <option value="" selected disabled>-- Wybierz Kategorię</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    {{ old('category_id') == $category->id ? 'selected' : '' }}>{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form__field">
                        <label for="team_id">Drużyna</label>
                        <select name="team_id" id="category_id">
                            <option value="" selected disabled>-- Wybierz Drużynę</option>
                            @foreach ($teams as $team)
                                <option value="{{ $team->id }}"
                                    {{ old('category_id') == $team->id ? 'selected' : '' }}>{{$team->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="form__field">
                        <label for="colors">Rozmiar</label>
                        @foreach ($sizes as $size)
                        <label for="sizes[]">{{$size->name}}</label>
                           <input type="checkbox" name="sizes[]" id="{{$size->name}}" value="{{$size->id}}">
                        @endforeach
                    </div>
                    <div class="form__field">
                        <label for="colors">Płeć</label>
                        @foreach ($genders as $gender)
                        <label for="gender[]">{{$gender->name}}</label>
                           <input type="checkbox" name="genders[]" id="{{$gender->name}}" value="{{$gender->id}}">
                        @endforeach
                    </div>
                    
                    <div class="form__field">
                        <label for="price">Cena</label>
                        <input type="number" name="price" id="price" placeholder="Cena">
                        @error('price')
                            <span class="error-text">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form__field">
                        <label for="thumbnail">Miniaturka</label>
                        <input type="file" name="thumbnail" id="thumbnail">
                        @error('thumbnail')
                            <span class="error-text">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    <div class="form__field">
                        <label for="Description">Opis</label>
                        <textarea name="description" id="description" cols="30" rows="10" placeholder="Opis">{{ old('description') }}</textarea>
                        @error('price')
                            <span class="error-text">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form__field">
                        <button type="submit">Dodaj Produkt</button>
                    </div>
                </form>
            </div>
            <div class="form__box-link">
                <p>Nie masz konta?<label for="flip">stwórz je</label></p>
            </div>


        </div>

    </main>
@endsection
