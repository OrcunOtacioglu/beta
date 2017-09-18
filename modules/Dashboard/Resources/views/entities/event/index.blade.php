@extends('dashboard::layouts.master')

@section('title', 'Manage Your Events')

@section('page-description')
    This panel allows you to manage the settings for your events.
    View, edit and delete events or add new events.
@stop

@section('page-header')
    <a href="{{ url('dashboard/event/create') }}" class="btn btn-outline btn-success" data-toggle="tooltip" data-original-title="Create New Event" data-container="body">
        <i class="icon wb-plus" aria-hidden="true"></i>
        <span class="hidden-sm-down">New Event</span>
    </a>
    <a href="#" class="btn btn-outline btn-success" data-toggle="tooltip" data-original-title="Featured Events" data-container="body">
        <i class="icon wb-star" aria-hidden="true"></i>
        <span class="hidden-sm-down">Featured Events</span>
    </a>
@stop

@section('content')
    <div class="col-md-12">
        <div class="panel">
            <div class="panel-body">
                <div class="nav-tabs-horizontal nav-tabs-animate" data-plugin="tabs">
                    <div class="dropdown page-event-sortlist">
                        Order By: <a class="dropdown-toggle inline-block" data-toggle="dropdown" href="#" aria-expanded="false">Last Created</a>
                        <div class="dropdown-menu animation-scale-up animation-top-right animation-duration-250" role="menu">
                            <a class="active dropdown-item" href="javascript:void(0)">Last Created</a>
                            <a class="dropdown-item" href="javascript:void(0)">Activity</a>
                            <a class="dropdown-item" href="javascript:void(0)">Location</a>
                        </div>
                    </div>
                    <ul class="nav nav-tabs nav-tabs-line" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" data-toggle="tab" href="#allEvents" aria-controls="all_contacts" role="tab">All Events</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane animation-fade active" id="allEvents" role="tabpanel" aria-expanded="true">
                            <ul class="list-group">
                                <li class="list-group-item event-item">
                                    <div class="media">
                                        <div class="pr-20">
                                            <img src="{{ asset('assets/dashboard/img/login.jpg') }}" alt="" class="w-150">
                                        </div>
                                        <div class="media-body">
                                            <h4 class="mt-0 mb-5">Turkish Airlines Final Four Belgrade 2018</h4>
                                            <p>
                                                <i class="icon wb-map"></i> Belgrade
                                            </p>
                                            <div>
                                                <a href="#" class="text-action" data-toggle="tooltip" data-original-title="Orders & Attendees">
                                                    <i class="icon text-success wb-users"></i>
                                                </a>
                                                <a href="#" class="text-action" data-toggle="tooltip" data-original-title="Reports">
                                                    <i class="icon text-indigo wb-stats-bars"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="pl-20 align-self-center">
                                            <a href="#" class="btn btn-outline btn-primary btn-sm">
                                                <i class="icon wb-wrench"></i> Edit
                                            </a>
                                            <a href="#" class="btn btn-outline btn-default btn-sm">
                                                <i class="icon wb-trash"></i> Delete
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop