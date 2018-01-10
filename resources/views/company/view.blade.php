@extends('layouts.app')

@section('content')
  <h1>Company:</h1>
  <div>{{ $company->name }}</div>
  {{ link_to_route('edit.company', 'Edit', ['id'=>$company->id], array('class' => 'btn btn-primary'))}}
  {{ link_to_route('list.companies', 'Back', array(), array('class' => 'btn btn-default')) }}
@stop
