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
    Training Page
@endsection
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <button data-placement="top" title="Add" type="button" name="button" class="btn btn-success pull-right" data-target="#modalBox" data-toggle="modal" data-keyboard="false" data-backdrop="static"><i class="fa fa-plus"></i></button>
                        </div>
                        <div class="card-body">
                            <strong>[   <a href="https://www.w3schools.com/icons/fontawesome_icons_webapp.asp" target="_blank">https://www.w3schools.com/icons/fontawesome_icons_webapp.asp</a>     ] Click Link for Icon Name</strong>
                            <div class="table-responsive">
                                <table class="table" id="datatable">
                                    <thead class=" text-primary">
                                    <th>
                                        No
                                    </th>
                                    <th>
                                        Title
                                    </th>
                                    <th>
                                        Icon Name
                                    </th>
                                    <th>
                                        Description
                                    </th>
                                    <th></th>
                                    <th></th>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- insert_model --}}
        <div class="modal fade" id="modalBox">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Create New Training</h4>
                        <button data-dismiss="modal" class="close">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form id="insert_training" enctype="multipart/form-data" class="md-form">
                            {{csrf_field()}}

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <textarea name="title" class="form-control" id="title" required rows="1"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="icon_name">Icon Name</label>
                                        <textarea name="icon_name" class="form-control" id="icon_name" required rows="1"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="description">Description</label><br>
                                        <textarea name="description" class="form-control" id="description" required rows="8"></textarea>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary pull-right" id="btn_submit">Create</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- edit modal -->
        <div class="modal fade" id="edit_modalBox">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Training</h4>
                        <button data-dismiss="modal" class="close">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form id="update_data">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="hidden" name="id" class="form-control" id="id_edit" value="">
                                    <div class="form-group">
                                        <label for="edit_title">Title</label>
                                        <textarea name="title" class="form-control" id="edit_title" required rows="1"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="edit_icon_name">Icon Name</label>
                                        <textarea name="icon_name" class="form-control" id="edit_icon_name" required rows="1"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="edit_description">Description</label><br>   
                                        <textarea name="description" class="form-control" id="edit_description" required rows="8"></textarea>
                                    </div>
                                </div>
                            </div>

                            <button class=" btn btn-primary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary pull-right" id="update_btn">Update</button>
                        </form>
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

            var t=$("#datatable").DataTable({
                "ordering": false,
                // "paging": false,
                "bInfo" : false,
                // "bPaginate": false,
                "bLengthChange": false
                // "bFilter": true,
                // "bAutoWidth": false
            });
            function reset(){
                $('#update_data')[0].reset();
            }

            load();

            function load(){
                $.ajax({
                    type: "POST",
                    url: "{{url('get_all_training')}}",

                    cache: false,
                    success: function(data){
                        var data_return=JSON.parse(data);
                        console.log(data);
                        t.clear();
                        var no = 1;
                        for(var i = 0;i<data_return.length;i++){
                            t.row.add( [
                                no++,
                                data_return[i]['title'],
                                data_return[i]['icon_name'],
                                data_return[i]['description'],
                                '<button data-placement="top" title="Edit" type="button" name="button" class="btn btn-info btn-sm" data-target="#edit_modalBox" onclick="edit_data('+data_return[i]['id']+')" data-toggle="modal" data-keyboard="false" data-backdrop="static"><i class="fa fa-edit"></i></button>',
                                '<button data-toggle="tooltip" data-placement="top" title="Delete" class="btn btn-danger btn-sm" onclick="delete_data('+data_return[i]['id']+')"><i class="fa fa-trash"></i></button>'
                            ] ).draw( false );
                        }

                        $('#insert_training')[0].reset();

                    }
                });
            }

            $('#insert_training').on('submit',function (e)
            {
                e.preventDefault();
                var alldata = new FormData(this);
                $.ajax
                ({
                    type: "POST",
                    url: "{{url('insert/training')}}",
                    data:alldata,
                    cache:false,
                    processData: false,
                    contentType: false,
                    success: function(data){
                        //alert(data);
                        console.log(data);
                        $('#modalBox').modal('hide');
                        $("#description").summernote('reset');
                        toastr.success('Insert training data successful');
                        load();
                    }
                });
                return false;
            });

            edit_data=function(id){

                $.ajax({
                    type: "POST",
                    url: "../edit/training/"+id,

                    cache: false,
                    success: function(data){
                        reset();
                        var training=JSON.parse(data);
                        console.log(training);
                        $('#id_edit').val(training['id']);
                        $('#edit_title').val(training['title']);
                        $('#edit_icon_name').val(training['icon_name']);
                        $('#edit_description').summernote({
                        height : "150px",
                        toolbar: [
                        // [groupName, [list of button]]
                        ['style', ['style','bold', 'italic', 'underline', 'clear','fontname','fontsize','paragraph']],
                        ['font', ['strikethrough', 'superscript', 'subscript']],
                        ['fontsize', ['fontsize']],
                        ['color', ['color']],
                        ['para', ['ul', 'ol', 'paragraph']],
                        ['height', ['height']],
                        ['view', ['fullscreen', 'codeview', 'help']],
                    ],
                    });
                        $('#edit_description').summernote('code',training['description']);
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
                    url: "{{url('update/training')}}",
                    data:updateData,
                    cache:false,
                    processData: false,
                    contentType: false,
                    success: function(data){
                        //console.log(data);
                        //alert(data);
                        $('#edit_modalBox').modal('hide');
                        $("#description").summernote('reset');
                        toastr.success('Update training data successful');
                        load();
                    }
                });
                return false;
            });

            delete_data=function(id){
                if(confirm('Are you sure You want to delete!')==true){
                    $.ajax({
                        type: "POST",
                        url: "../delete/training/"+id,

                        cache: false,
                        success: function(data){
                            toastr.success('Delete training data successful');
                            load();
                        }
                    });
                }else{
                    return false;
                }
            }

            // start summernote
            $("#description").summernote({
                height : "150px",
                placeholder: 'Description ...',
                toolbar: [
                    ['style', ['style','bold', 'italic', 'underline', 'clear','fontname','fontsize']],
                    ['font', ['strikethrough', 'superscript', 'subscript']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']],
                    ['view', ['fullscreen', 'codeview', 'help']],
                ],
            });

            $('[data-toggle="tooltip"]').tooltip();


        });
    </script>
@endsection