@extends('layouts.app')

@section('content')
    <h1>Companies</h1>
    @forelse ($companies as $company)
        <li class="collection-item">
            {{ link_to_route('view.company', $company->name, ['id'=>$company->id])}}
        </li>
    @empty
        <p class="flow-text center-align">Nothing to show</p>
    @endforelse
@stop