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
	
	</div>



@stop

@section('content')
	 {!! Form::model($department, ['route' => ['departments.update', $department->id],'method' => 'put']) !!}
          <div class="from-group">
            {!! Form::label('name', 'Name', array('class' => 'form-label')) !!}
            {!!Form::text('name',null,['class'=>'form-control']) !!}
          </div>
          @foreach($department->departments as $dept)
            {!!Form::text('departments[]',$dept,['class'=>'form-control']) !!}
          @endforeach
          <div class="append">
          </div>
          <a href="" class="add-new-btn">ADD</a>
          {!! Form::submit('Save'); !!}
      {!! Form::close() !!}
@stop
@section('script')
	
@stop