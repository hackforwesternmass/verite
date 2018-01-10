@extends('layouts.app')

@section('content')
    <h1>Companies</h1>
    <table class="table">
        <tbody>
            @forelse ($companies as $company)
                <tr>
                    <td>{{ link_to_route('view.company', $company->name, ['id'=>$company->id])}}</td>
                </tr>
            @empty
                <tr><td>Nothing to show</td></tr>
            @endforelse
        </tbody>
    </table>
    {{ link_to_route('new.company', 'New Company', array(), array('class' => 'btn btn-primary')) }}
@stop