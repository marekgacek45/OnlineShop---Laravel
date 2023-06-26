@extends('layout/admin')
@section('subtitle', 'Panel Admina')

@section('content')
    <main class="test">



        <div class="form__box form--login" >
            <div class="form__box-title">
            </div>
            <div class="form__box-content" >
                <h2>Edytuj produkt</h2>
                <form action="{{ route('admin.product.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @error('loginError')
                        <span class="error-text">{{ $message }}</span>
                    @enderror
                    <div class="form__field">
                        <label for="title">Nazwa</label>
                        <input type="text" name="title" id="title" placeholder="Nazwa" value="{{ $product->title }}">
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
                                    {{ $product->category->id == $category->id ? 'selected' : '' }}>{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form__field">
                        <label for="team_id">Drużyna</label>
                        <select name="team_id" id="category_id">
                            <option value="" selected disabled>-- Wybierz Drużynę</option>
                            @foreach ($teams as $team)
                                <option value="{{ $team->id }}"
                                    {{ $product->team->id == $team->id ? 'selected' : '' }}>{{$team->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    {{-- <div class="form__field">
                        <label for="colors">Kolor</label>
                        @foreach ($colors as $color)
                           <input type="checkbox" name="colors[]" id="{{$color->name}}" value="{{$color->id}}">
                           <span style="width:30px;height:30px;background-color:{{$color->code}}"></span>
                        @endforeach
                    </div> --}}
                    <div class="form__field">
                        <label for="colors">Rozmiar</label>
                        @foreach ($sizes as $size)
                        <label for="{{$size->name}}">{{$size->name}}</label>
                           <input type="checkbox" name="sizes[]" id="{{$size->name}}" value="{{$size->id}}"{{in_array($size->id,$product->sizes->pluck('id')->toArray())?'checked':''}}>
                        @endforeach
                    </div>
                    <div class="form__field">
                        <label for="colors">Płeć</label>
                        @foreach ($genders as $gender)
                        <label for="gender[]">{{$gender->name}}</label>
                           <input type="checkbox" name="genders[]" id="{{$gender->name}}" value="{{$gender->id}}"value="{{$gender->id}}"{{in_array($gender->id,$product->genders->pluck('id')->toArray())?'checked':''}}>
                        @endforeach
                    </div>
                    
                    <div class="form__field">
                        <label for="price">Cena</label>
                        <input type="number" name="price" id="price" placeholder="Cena" value="{{$product->price}}">
                        @error('price')
                            <span class="error-text">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form__field">
                        <img src="{{asset('storage/'. $product->thumbnail)}}" alt="" style="width: 30px">
                        <label for="thumbnail">Miniaturka</label>
                        <input type="file" name="thumbnail" id="thumbnail">
                        @error('thumbnail')
                            <span class="error-text">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    <div class="form__field">
                        <label for="Description">Opis</label>
                        <textarea name="description" id="description" cols="30" rows="10" placeholder="Opis">{{ $product->description }}</textarea>
                        @error('price')
                            <span class="error-text">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form__field">
                        <button type="submit">Zaktualizuj</button>
                    </div>
                </form>
            </div>
            


        </div>

    </main>
@endsection
