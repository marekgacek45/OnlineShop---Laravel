@extends('layout/master')
@section('subtitle','Strona Główna')

@section('content')
    
<p>strona główna</p>
@foreach ($sizes as $size)
    <p>{{$size->name}}</p>
@endforeach
@endsection