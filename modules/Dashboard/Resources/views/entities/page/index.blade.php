@extends('dashboard::layouts.master')

@section('title', 'Static Pages')

@section('page-description')
    <p class="mb-0">This panel allows you to create and manage static pages of your website.</p>
    <p class="mb-0">View, edit and delete pages accordingly your needs.</p>
    <p class="mb-0">You can then manage the structure of these pages from Menu Management.</p>
@stop

@section('page-header')
    <a href="{{ url('/dashboard/page/create') }}" class="btn btn-outline btn-success" data-toggle="tooltip" data-original-title="Manage Invoices" data-container="body">
        <i class="icon wb-plus" aria-hidden="true"></i>
        <span class="hidden-sm-down">Create New Page</span>
    </a>
    <a href="#" class="btn btn-outline btn-success" data-toggle="tooltip" data-original-title="Mass Email" data-container="body">
        <i class="icon wb-menu" aria-hidden="true"></i>
        <span class="hidden-sm-down">Menu Management</span>
    </a>
@stop

@section('content')
    <div class="col-md-12">
        <div class="panel">
            <div class="panel-body">

            </div>
        </div>
    </div>
@stop