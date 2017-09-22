@extends('dashboard::layouts.master')

@section('title', 'Orders & Attendees')

@section('page-description')
    <p class="mb-0">This panel allows you to manage the settings for both the ticket purchaser and attendees.</p>
    <p class="mb-0">View, edit and delete orders or add additional guests.</p>
    <p class="mb-0">You can also send mass messages to the entire group or contact individuals directly</p>
@stop

@section('page-header')
    <a href="#" class="btn btn-outline btn-success" data-toggle="tooltip" data-original-title="Manage Invoices" data-container="body">
        <i class="icon wb-order" aria-hidden="true"></i>
        <span class="hidden-sm-down">Manage Invoices</span>
    </a>
    <a href="#" class="btn btn-outline btn-success" data-toggle="tooltip" data-original-title="Mass Email" data-container="body">
        <i class="icon wb-envelope" aria-hidden="true"></i>
        <span class="hidden-sm-down">Send Mass Email</span>
    </a>
@stop

@section('content')
    <div class="col-md-12">
        <div class="panel">
            <div class="panel-body">
                <div class="nav-tabs-horizontal" data-plugin="tabs">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a href="#orders" class="nav-link active" data-toggle="tab" role="tab">
                                <i class="icon wb-payment"></i> Orders
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="#attendees" class="nav-link" data-toggle="tab" role="tab">
                                <i class="icon wb-users"></i> Attendees
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="#addAttendee" class="nav-link" data-toggle="tab" role="tab">
                                <i class="icon wb-user-add"></i> Add New Attendee
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content pt-20">
                        <div class="tab-pane active" id="orders">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Purchaser</th>
                                        <th>Reference</th>
                                        <th>Transaction ID</th>
                                        <th>Total</th>
                                        <th class="text-nowrap">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Orcun Otacıoğlu</td>
                                        <td>TgBjlq</td>
                                        <td>4567902</td>
                                        <td>182₺</td>
                                        <td class="text-nowrap">
                                            <a href="#" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip" data-original-title="Edit">
                                                <i class="icon wb-wrench" aria-hidden="true"></i>
                                            </a>
                                            <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip" data-original-title="Delete">
                                                <i class="icon wb-close" aria-hidden="true"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Cabbar Tekin</td>
                                        <td>BnUywz</td>
                                        <td>1450946</td>
                                        <td>197₺</td>
                                        <td class="text-nowrap">
                                            <a href="#" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip" data-original-title="Edit">
                                                <i class="icon wb-wrench" aria-hidden="true"></i>
                                            </a>
                                            <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip" data-original-title="Delete">
                                                <i class="icon wb-close" aria-hidden="true"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane" id="attendees">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Surname</th>
                                    <th>Email</th>
                                    <th>Country</th>
                                    <th class="text-nowrap">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Orcun</td>
                                    <td>Otacıoğlu</td>
                                    <td>orcun.otacioglu@acikgise.com</td>
                                    <td>Turkey</td>
                                    <td class="text-nowrap">
                                        <a href="#" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip" data-original-title="Edit">
                                            <i class="icon wb-wrench" aria-hidden="true"></i>
                                        </a>
                                        <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip" data-original-title="Delete">
                                            <i class="icon wb-close" aria-hidden="true"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Cabbar</td>
                                    <td>Tekin</td>
                                    <td>cabbar.tekin@gmail.com</td>
                                    <td>Turkey</td>
                                    <td class="text-nowrap">
                                        <a href="#" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip" data-original-title="Edit">
                                            <i class="icon wb-wrench" aria-hidden="true"></i>
                                        </a>
                                        <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip" data-original-title="Delete">
                                            <i class="icon wb-close" aria-hidden="true"></i>
                                        </button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane" id="addAttendee">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop