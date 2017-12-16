@extends('layouts.app')

@section('content')
  <div class="card">
      <div class="card-content">
      <span class="card-title">Add Audit</span>
      <form method="POST" action="create" id="boolean">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="row">
          <div class="input-field col s12">
            <input name="company" id="company" type="text">
            <label for="title">Company</label>
          </div>
          <!-- <div class="input-field col s12">
            <input name="country" id="country" type="select">
            <label for="description">Country</label>
          </div> -->
          {{ Form::label('country', 'Country: ') }}
          {{
              Form::select(
                  'country',
                  $countries,
                  [],
                  [
                      'class' => 'form-control select2 moderation-filter',
                      
                  ]
              )
          }}
          <div class="input-field col s12">
            <input name="date" id="date" type="text">
            <label for="description">Date</label>
          </div>
          <div class="input-field col s12">
          <button class="btn waves-effect waves-light">Submit</button>
          </div>
        </div>
        </form>
    </div>
  </div>
@stop
