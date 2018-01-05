@extends('layouts.app')

@section('content')
  <h1>Add an Audit</h1>
  <div class="card">
      <div class="card-content">
      <form method="POST" action="create" id="boolean">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="row">
          {{ Form::label('company', 'Company: ') }}
          {{ Form::select(
              'company', 
              $companies,
              [], 
              [
                'class' => 'form-control select2', 
              ]
            ) 
          }}
        </div>
        <div class="row">
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
        </div>
        <div class="row">
          {{ Form::label('date', 'Date of the Audit: ') }}
          {{
            Form::text(
              'date',
              null,
              array(
                'class' => 'form-control datepicker',
                'size' => '10',
              )
            )
          }}
        </div>
        <div class="row">
          <button class="btn btn-primary">Submit</button>
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
