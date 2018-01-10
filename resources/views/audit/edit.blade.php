@extends('layouts.app')

@section('content')
    <form method="POST" action="/audit/{{ $audit->id }}/update">
        {{ method_field('PATCH') }}
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <h1>Edit Audit</h2>
        <div class="row">
            {{ Form::label('company_id', 'Company: ') }}
            {{ Form::select(
                'company_id', 
                $companies,
                [], 
                [
                'class' => 'company form-control select2',
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
                    'class' => 'country form-control select2',
                ]
            )
            }}
        </div>
        <div class="row">
            {{ Form::label('date', 'Date of the Audit: ') }}
            {{
            Form::text(
                'date',
                $audit->date,
                array(
                'class' => 'form-control datepicker',
                'size' => '10',
                )
            )
            }}
        </div>
        <div class="row">
            <button class="btn btn-primary">Update</button>
            <a class="btn btn-default" href="{{ URL::previous() }}">Cancel</a>
        </div>  
    </form>
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
            // Set default values
            $('.company.select2').val('{{ $audit->company_id }}').trigger('change');
            $('.country.select2').val('{{ $audit->country }}').trigger('change');
        });
    </script>
@stop
