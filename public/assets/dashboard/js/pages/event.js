// DROPZONE INSTANCE
Dropzone.autoDiscover = false;
var coverPhoto = new Dropzone("#dropzone", {
    paramName: 'file',
    maximumFileSize: 3,
    accepted: '.jpg, .jpeg, .png'
});

$(document).ready(function () {
    coverPhoto.on("success", function(file, response) {
        eventData.cover_image_path = response;
    });
});

// SUMMERNOTE INSTANCE
$(document).ready(function() {
    $('#summernote').summernote({
        height: 100,
        toolbar: [
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['font', ['strikethrough', 'superscript', 'subscript']],
            ['fontsize', ['fontsize']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['height', ['height']]
        ],
        callbacks: {
            onChange: function(contents, $editable) {
                eventData.description = contents;
            }
        }
    });
});


// DATETIMEPICKER INSTANCES
$('#startDate').datetimepicker({
    format: 'yyyy-mm-dd hh:ii',
    weekStart: 1,
    todayBtn: true,
    autoclose: true,
    todayHighlight: true,
    startView: 2,
    forceParse: false,
    showMeridian: false,
    minuteStep: 10,
    sideBySide: true,
    toolbarPlacement: 'top'
}).on('changeDate', function (ev) {
    eventData.start_date = ev.date.toISOString();
});
$('#endDate').datetimepicker({
    format: 'yyyy-mm-dd hh:ii',
    weekStart: 1,
    todayBtn: true,
    autoclose: true,
    todayHighlight: true,
    startView: 2,
    forceParse: false,
    showMeridian: false,
    minuteStep: 10,
    sideBySide: true,
    toolbarPlacement: 'top'
}).on('changeDate', function (ev) {
    eventData.end_date = ev.date.toISOString();
});
$('#onSaleDate').datetimepicker({
    format: 'yyyy-mm-dd hh:ii',
    weekStart: 1,
    todayBtn: true,
    autoclose: true,
    todayHighlight: true,
    startView: 2,
    forceParse: false,
    showMeridian: false,
    minuteStep: 10,
    sideBySide: true,
    toolbarPlacement: 'top'
}).on('changeDate', function (ev) {
    eventData.on_sale_date = ev.date.toISOString();
});

// SELECT2 INSTANCE
$('.countries').select2({
    placeholder: 'Select your event place.',
    minimumInputLength: 3,
    data: countries,
}).on('select2:select', function (e) {
    eventData.location = e.params.data.text;
}).on('select2:change', function (e) {
    eventData.location = e.params.data.text();
});

// Event Vue Instance
var eventData = new Vue({
    el: '#app',
    data: {
        organizer_id: '',
        category_id: '',
        title: '',
        description: '',
        location: '',
        // Status 0 => Draft, 1 => Published
        status: '1',
        // Listing 0 => Public, 1 => Unlisted
        listing: '0',
        is_featured: '1',
        start_date: '',
        end_date: '',
        on_sale_date: '',
        cover_image_path: '',
    },
    methods: {
        postEventData: function () {
            axios.post('/foobar', eventData._data);
        }
    },
    mounted: function () {
        this.organizer_id = $("meta[name=organizer]").attr('content');
    }
});