@extends('master')

@section('content-header')
  <h1>
            Simple Tables
            <small>preview of simple tables</small>
   </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Departments</a></li>
    <li class="active">Create</li>
  </ol>
	<div class="">
		<button class="btn btn-primary" data-target="#myModal" data-toggle="modal">Add</button>
	</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
    	    {!! Form::open(array('route' => 'departments.store')) !!}
    			<div class="from-group">
    				{!! Form::label('name', 'Name', array('class' => 'form-label')) !!}
    				{!!Form::text('name',null,['class'=>'form-control']) !!}
    			</div>
    			<div class="append">
    			</div>
    			<a href="" class="add-new-btn">ADD</a>
    			{!! Form::submit('Save'); !!}
			{!! Form::close() !!}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>



@stop

@section('content')
	<table class="table table-bordered table-stripped ">
		<tr>
			<th></th>
			<th></th>
			<th></th>
			<th>Action</th>
		</tr>
		
		@foreach($departments as $depart)
			<tr>
				<td>{{$depart->name}}</td>
				<td>
				<ul>
					@foreach($depart->departments as $d)
								<li>{{$d}}</li>
					@endforeach
				</ul>
				</td>
				<td></td>
				<td>
					<a href="{{url("departments/$depart->id/edit")}}"  data-toggle="modal" class="btn btn-edit btn-success">Edit</a>
				</td>
			</tr>
			
		@endforeach
	</table>
@stop
@section('script')
	
@stop