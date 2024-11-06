@extends('layouts.custom')
@section('mytittle', "the first custom view")

@section('maincontent')
<h1>welcome</h1>
<p>
    {{$name}} {{$surname}}
@endsection