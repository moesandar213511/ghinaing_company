@extends('admin.layouts.site_admin.site_admin_design')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <style>
        .imagePreview {
            width: 100%;
            height: 150px;
            background-position: center center;
            background:url('http://cliquecities.com/assets/no-image-e3699ae23f866f6cbdf8ba2443ee5c4e.jpg');
            background-color:#fff;
            background-size: cover;
            background-repeat:no-repeat;
            display: inline-block;
            /* box-shadow:0px -3px 6px 2px rgba(0,0,0,0.2); */
        }
        .upload_btn
        {
            display:block;
            border-radius:10px;
            /* box-shadow:0px 4px 6px 2px rgba(0,0,0,0.2); */
            margin-bottom: 15px;
        }
        .imgUp
        {
            margin-bottom:15px;
        }
    </style>
@endsection

@section('nav_bar_text')
    About Page
@endsection
@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 offset-2">
                    <div class="card">
                        <div class="card-body">
                            <form id="update_data">
                                {{csrf_field()}}

                                <div class="row">
                                    <input type="hidden" name="id" class="form-control" id="id_edit" value="">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="update_description
                                            "><b>About Description</b></label><br>
                                            <textarea name="description" rows="4" class="form-control" id="update_description"></textarea>
                                        </div>
                                    </div><br><hr>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="update_intro
                                            "><b>Introduction</b></label><br>
                                            <textarea name="introduction" rows="8" class="form-control" id="update_intro"></textarea>
                                        </div>
                                    </div><br><hr>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="update_technical
                                            "><b>Our Technical Work</b></label><br>
                                            <textarea name="technical_work" rows="8" class="form-control" id="update_technical"></textarea>
                                        </div>
                                    </div><br><hr>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="update_vision
                                            "><b>Vision</b></label><br>
                                            <textarea name="vision" rows="8" class="form-control" id="update_vision"></textarea>
                                        </div>
                                    </div><br><hr>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="update_mission
                                            "><b>Mission</b></label><br>
                                            <textarea name="mission" rows="8" class="form-control" id="update_mission"></textarea>
                                        </div>
                                    </div><br><hr>
                                </div>
                                <button type="submit" class="btn btn-primary pull-right" id="update_btn">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection

@section('js')
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).ready(function () {

            function reset(){
                $('#update_data')[0].reset();
            }

            load();

            function load(){
                $.ajax({
                  type: "POST",
                  url: "{{url('get_all_about')}}",
                  cache: false,
                  success: function(data){
                    reset();
                    var data_return=JSON.parse(data);
                    //console.log(data_return);
                    //မွွတ္ခ်က္ ။   customclass မသဳံးရင္ data_return ေနာက္မွာ [0] ထည္ံ ။
                    $('#id_edit').val(data_return[0]['id']);
                    //$('#update_description').val(data_return['description']);
                    //$('#update_intro').val(data_return['introduction']);
                    //$('#update_technical').html(data_return['technical_work']);
                    // $('#update_about').html(data_return['about']);
                    // $('#update_vision').html(data_return['vision']);
                    // $('#update_mission').html(data_return['mission']);
                    $('#update_description').summernote('code',data_return[0]['description']);
                    $('#update_intro').summernote('code',data_return[0]['introduction']);
                    $('#update_technical').summernote('code',data_return[0]['technical_work']);
                    $('#update_vision').summernote('code',data_return[0]['vision']);
                    $('#update_mission').summernote('code',data_return[0]['mission']);
                  }
                });
            }


            $('#update_data').on('submit',function (e)
            {
                e.preventDefault();
                var updateData = new FormData(this);
                $.ajax
                ({
                    type: 'POST',
                    url: "{{url('update/about')}}",
                    data:updateData,
                    cache:false,
                    processData: false,
                    contentType: false,
                    success: function(data){
                        console.log(data);
                        toastr.success('Update data successful');
                        load();
                    }
                });
                return false;
            });


            // start summernote
            $("#update_description").summernote({
                height : "150px",
                placeholder: 'About Description ....',
              });

            $("#update_technical").summernote({
                height : "150px",
                placeholder: 'Technical Work ....',
              });


              $("#update_intro").summernote({
                height : "150px",
                placeholder: 'About ....',
              });

              $("#update_vision").summernote({
                height : "150px",
                placeholder: 'Vision ....',
              });

              $("#update_mission").summernote({
                height : "150px",
                placeholder: 'Mission ....',
              });


            // $("#description").summernote({
            //     height : "150px",
            //     placeholder: 'Text ....',
            //     toolbar: [
            //         ['style', ['style','bold', 'italic', 'underline', 'clear','fontname','fontsize']],
            //         ['font', ['strikethrough', 'superscript', 'subscript']],
            //         ['color', ['color']],
            //         ['para', ['ul', 'ol', 'paragraph']],
            //         ['height', ['height']],
            //         ['view', ['fullscreen', 'codeview', 'help']],
            //     ],
            // });

            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
@endsection