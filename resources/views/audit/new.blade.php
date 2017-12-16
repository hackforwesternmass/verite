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
                      'class' => 'form-control select2',

                  ]
              )
          }}
          <div class="input-field col s12">
            <!-- <input name="date" id="date" type="text">
            <label for="description">Date</label> -->
            {{ Form::label('date', 'Date of the Audit: ') }}
            {{
              Form::text(
                'date',
                null,
                array(
                  'class' => 'form-control datepicker',
                  'size' => '10',
                  'width' => '256px',
                )
              )
            }}
          </div>
          <br /><br />
          <div class="input-field col s12">
          <button class="btn btn-primary">Submit</button>
          </div>
        </div>
        </form>
    </div>
  </div>
  <script>
  $(document).ready(function ($) {
      $(function() {
          $('.datepicker').datepicker({ dateFormat: 'MM dd, yy'}).val();
      });

      // Defaults for select2
      var defaults = {
          width: '256px',
          theme: 'bootstrap'
      };

      // Apply select2 js to elements with select2 css class.
      $('.select2').select2(defaults);
});
  </script>
@stop
