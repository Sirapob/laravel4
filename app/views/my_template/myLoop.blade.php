@extends('layouts.master')

@section('content')
	<ul>
	
	@for($i = 0; $i < 6; $i++)
		<li>Now is {{ $i }}</li>
	
	@endfor
	
	</ul>
@stop
