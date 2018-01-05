@extends('layouts.app')

@section('content')
  <div class="card">
      <div class="card-content">
      <span class="card-title"> Company:</span>
      <p>
        <span class="flow-text">{{ $company->name }}</span>
            {{ link_to_route('edit.company', 'Edit', ['id'=>$company->id])}}
      </p>
    </div>
  </div>
  {{ link_to_route('list.companies', 'Back') }}
@stop
