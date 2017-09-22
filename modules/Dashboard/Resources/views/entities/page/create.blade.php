@extends('dashboard::layouts.master')

@section('title', 'Create New Page')

@section('custom.css')
    <link rel="stylesheet" href="{{ asset('assets/dashboard/css/vendor/summernote/summernote.min.css') }}">
@stop

@section('content')
    <div class="col-md-12">
        <div class="panel panel-default panel-line">
            <div class="panel-heading">
                <h3 class="panel-title">Basic Information</h3>
            </div>

            <div class="panel-body">
                <!-- Title Form Input -->
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>

                <div class="example-wrap">
                    <p class="form-control-static pb-0">Content</p>
                    <div id="summernote"><p>Write down your page content.</p></div>
                </div>
            </div>
        </div>
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
    <script src="{{ asset('assets/dashboard/js/plugins/summernote.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard/js/pages/pageCreate.js') }}"></script>
@stop