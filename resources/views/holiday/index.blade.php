@extends('master')
@section('content')
	<table class="table table-bordered table-stripped">
		<tr>
			<td>date</td>
			<td>type</td>
			<td>Action</td>
		</tr>
		@foreach($holidays as $holiday)
			<tr>
				<td>{{$holiday->date}}</td>
				<td>{{$holiday->type}}</td>
			</tr>
		@endforeach

	</table>
@stop