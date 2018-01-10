@extends('layouts.app')

@section('content')
    <h1> Audit:</h1>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">{{ $company->name }}</h3>
        </div>
        <div class="panel-body">
            <div>{{ $country }}</div>
            <div>{{ $audit->date }}</div>
        </div>
    </div>
    {{ link_to_route('edit.audit', 'Edit', ['id'=>$audit->id], array('class' => 'btn btn-primary'))}}
    {{ link_to_route('list.audits', 'Back', array(), array('class' => 'btn btn-default')) }}
@stop