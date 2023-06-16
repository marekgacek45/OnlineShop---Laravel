@extends('layout/master')
@section('subtitle','Strona Główna')

@section('content')
    
<p>user panel</p>


<a href="{{route('postLogout')}}"><button>wyloguj</button></a>
@endsection