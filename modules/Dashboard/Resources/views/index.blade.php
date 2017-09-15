@extends('dashboard::layouts.master')

@section('content')
    <h1 class="red">Hello World</h1>

    <p>
        This view is loaded from module: {!! config('dashboard.name') !!}
    </p>
@stop
