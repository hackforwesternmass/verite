@extends('layouts.app')

@section('content')
  <form method="POST" action="/company/{{ $company->id }}/update">
    {{ method_field('PATCH') }}
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <h2 class="flow-text">Edit Company</h2>
    <div class="input-field col s12">
      <label for="name">Name:</label>
      <input name="name" id="title" type="text" value="{{ $company->name }}">
    </div>
    <div class="input-field col s12">
      <button class="btn btn-primary">Update</button>
      {{ link_to_route('list.companies', 'Cancel', array(), array('class' => 'btn btn-default')) }}
    </div>
  </form>
@stop
