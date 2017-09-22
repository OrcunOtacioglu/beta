@extends('dashboard::layouts.master')

@section('title', 'Create New Event')

@section('custom.css')
    <link rel="stylesheet" href="{{ asset('assets/dashboard/css/vendor/dropify/dropify.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dashboard/css/vendor/summernote/summernote.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dashboard/css/vendor/bootstrapDateTimePicker/bootstrap-datetimepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dashboard/css/vendor/select2/select2.min.css') }}">
@stop

@section('content')
    <div class="col-md-8 col-md-offset-2">

        <!-- BASIC INFORMATION -->
        <div class="panel panel-default panel-line">
            <div class="panel-heading">
                <h3 class="panel-title">Basic Information</h3>
            </div>

            <div class="panel-body">

                <!-- EVENT TITLE -->
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>
                <!-- END EVENT TITLE -->

                <!-- EVENT DESCRIPTION -->
                <div class="example-wrap">
                    <p class="form-control-static pb-0">Description</p>
                    <span class="text-help mt-0">This description will appear on the event listing page.</span>
                    <div id="summernote"><p>Describe your event</p></div>
                </div>
                <!-- END EVENT DESCRIPTION -->

            </div>
        </div>
        <!-- END BASIC INFORMATION -->

        <!-- EVENT TIME -->
        <div class="panel panel-default panel-line">
            <div class="panel-heading">
                <h3 class="panel-title">When is your event?</h3>
            </div>

            <div class="panel-body">

                <div class="row">

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="startDate">Start Date</label>
                            <div class="input-group">
                                <input type="text" name="startDate" id="startDate" class="form-control">
                                <div class="input-group-addon">
                                    <i class="icon wb-calendar"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="endDate">End Date</label>
                            <div class="input-group">
                                <input type="text" name="endDate" id="endDate" class="form-control">
                                <div class="input-group-addon">
                                    <i class="icon wb-calendar"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="onSaleDate">On Sale Date</label>
                            <div class="input-group">
                                <input type="text" name="onSaleDate" id="onSaleDate" class="form-control">
                                <div class="input-group-addon">
                                    <i class="icon wb-calendar"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- END EVENT TIME -->

        @include('dashboard::entities.rate.create')

    </div>

    <div class="col-md-4">

        <!-- PROMOTE EVENT -->
        <div class="panel panel-default panel-line">
            <div class="panel-heading">
                <h3 class="panel-title">Promote Event</h3>
            </div>

            <div class="panel-body">

                <!-- EVENT CATEGORY -->
                <div class="form-group">
                    <label for="category" class="pb-0">Category</label>
                    <span class="text-help mt-0">This will help people to find your event.</span>
                    <select name="category" id="category" class="form-control">
                        <option value="0">Müzik</option>
                        <option value="1">Spor</option>
                        <option value="2">Gala</option>
                        <option value="3">Sanat</option>
                    </select>
                </div>
                <!-- END EVENT CATEGORY -->

                <!-- EVENT LISTING -->
                <div class="form-group">
                    <label for="listing" class="pb-0">Listing</label>
                    <span class="text-help mt-0">Anyone can see and search for public events.</span>
                    <select name="listing" id="listing" class="form-control">
                        <option value="0">Public (recommended)</option>
                        <option value="1">Unlisted</option>
                    </select>
                </div>
                <!-- END EVENT LISTING -->

                <!-- FEATURED EVENT -->
                <div class="form-group">
                    <label for="listing" class="pb-0">Featured event?</label>
                    <span class="text-help mt-0">Featured events will show up on the top listing.</span>
                    <select name="listing" id="listing" class="form-control">
                        <option value="0">Yes</option>
                        <option value="1">No</option>
                    </select>
                </div>
                <!-- END FEATURED EVENT -->

            </div>
        </div>
        <!-- END PROMOTE EVENT -->

        <!-- EVENT LOCATION -->
        <div class="panel panel-default panel-line">
            <div class="panel-heading">
                <h3 class="panel-title">Where is your event?</h3>
            </div>

            <div class="panel-body">
                <!-- Title Form Input -->
                <div class="form-group">
                    <label for="location">Location</label>
                    <select name="location" id="location" class="form-control countries"></select>
                </div>
            </div>
        </div>
        <!-- END EVENT LOCATION -->

        <!-- EVENT MEDIA -->
        <div class="panel panel-default panel-line">
            <div class="panel-heading">
                <h3 class="panel-title">Event Media</h3>
            </div>

            <div class="panel-body">
                <!-- Media Form Input -->
                <span class="text-help mt-0">Upload a photo that captures the spirit of your event. Use a high-quality JPG or PNG file that is at least 1110 x 444 px (2.5x1 ratio) and no larger than 5mb.
Avoid including any text on the photo as it will not always be legible.</span>
                <input type="file" class="dropify">
            </div>
        </div>
        <!-- END EVENT MEDIA -->

    </div>
@stop

@section('custom.html')
    <footer class="create-footer">
        <div class="create-content-wrapper">
            <div class="row create-content">
                <div class="create-details-content">
                    <p class="create-details-text">You can edit these details at any time.</p>
                </div>

                <div class="setup">
                    <div class="float-right">
                        <a href="#" class="btn btn-success">
                            <i class="icon wb-share"></i> Publish
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
@stop

@section('footer.scripts')
    <script src="{{ asset('assets/dashboard/js/plugins/dropify.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/plugins/summernote.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/plugins/bootstrap-datetimepicker.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/plugins/select2.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/config/countries.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/pages/eventCreate.js') }}"></script>
@stop