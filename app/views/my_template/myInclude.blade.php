@extends('layouts.master')

<h1 style="color: green;">From include</h1>
@include('hello')
@section('content')
	<h1  style="color: red;">This is Content.</h1>
	
@stop
