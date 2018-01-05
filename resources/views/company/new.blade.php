@extends('layouts.app')

@section('content')
  <h1>Add a Company</h1>
  <div class="card">
      <div class="card-content">
      <form method="POST" action="create" id="boolean">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="row">
          <div class="input-field col s12">
            <input name="name" id="title" type="text">
            <label for="name">Name:</label>
          </div>
          <br /><br />
          <div class="input-field col s12">
            <button class="btn btn-primary">Submit</button>
            {{ link_to_route('list.companies', 'Back') }}
          </div>
        </div>
        </form>
    </div>
  </div>
@stop
