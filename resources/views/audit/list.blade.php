@extends('layouts.app')

@section('content')
    <h1>Audits</h1>
    <table class="table">
        <tbody>
            @forelse ($audits as $audit)
                <tr>
                    <td>{{ link_to_route('view.audit', $companies[$audit->company_id-1]->name, ['id'=>$audit->id])}}</td>
                    <td>{{ $countries[$audit->country] }}</td>
                    <td>{{ $audit->date }}</td>
                </tr>
            @empty
                <p>Nothing to show</p>
            @endforelse
        </tbody>
    </table>
    {{ link_to_route('new.audit', 'New Audit', array(), array('class' => 'btn btn-primary')) }}
@stop