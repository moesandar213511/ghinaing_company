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
    Member
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
                            <div class="table-responsive">
                                <table class="table" id="datatable">
                                    <thead class=" text-primary">
                                    <th>
                                        No
                                    </th>
                                    <th>
                                        Photo
                                    </th>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Position
                                    </th>
                                    <th>
                                        Link
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
                        <h4 class="modal-title">Create New Member</h4>
                        <button data-dismiss="modal" class="close">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form id="insert_member" enctype="multipart/form-data" class="md-form">
                            {{csrf_field()}}

                            <div class="row">
                                <div class="col-sm-4 imgUp">
                                    <img src="{{asset('images/default.jpg')}}" id="image" class="imagePreview img-thumbnail">
                                    <label class="btn btn-primary upload_btn"><i class="fa fa-upload"></i>
                                        Upload<input type="file" accept="image/png,image/jpeg,image/jpg" onchange="displaySelectedPhoto('upload_photo','image')" id="upload_photo" name="photo" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;" required>
                                    </label>
                                </div>
                                <div class="col-sm-8">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="name">Name</label>
                                                <textarea name="name" class="form-control" id="name" required rows="1"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="position">Position</label>
                                                <textarea name="position" class="form-control" id="position" required rows="1"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="link">Link</label>
                                                <textarea name="link" class="form-control" id="link" required rows="1"></textarea>
                                            </div>
                                        </div>
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
                        <h4 class="modal-title">Edit Event</h4>
                        <button data-dismiss="modal" class="close">&times;</button>
                    </div>
                    <div class="modal-body">


                        <form id="update_data">
                            {{csrf_field()}}

                            <div class="row">
                                <div class="col-sm-4 imgUp">
                                    <input type="hidden" name="id" class="form-control" id="id_edit" value="">
                                    <img src="{{asset('images/default.jpg')}}" id="imgs" class="imagePreview img-thumbnail">
                                    <label class="btn btn-primary upload_btn"><i class="fa fa-upload"></i>
                                        Upload<input type="file" accept="image/png,image/jpeg,image/jpg" onchange="displaySelectedPhoto('update_photo','imgs')" id="update_photo" name="photo" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;">
                                    </label>
                                </div>
                                <div class="col-sm-8">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="update_name">Name</label>
                                                <textarea name="name" class="form-control" id="update_name" required rows="1"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="update_position">Position</label>
                                                <textarea name="position" class="form-control" id="update_position" required rows="1"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="update_link">Link</label>
                                                <textarea name="link" class="form-control" id="update_link" required rows="1"></textarea>
                                            </div>
                                        </div>
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
                    url: "{{url('get_all_member')}}",

                    cache: false,
                    success: function(data){
                        var data_return=JSON.parse(data);
                        //console.log(data);
                        t.clear();
                        var no = 1;
                        for(var i = 0;i<data_return.length;i++){
                            t.row.add( [
                                no++,
                                '<img src="'+data_return[i]['photo_url']+'" alt="" style="width:100px;height:100px">',
                                data_return[i]['name'],
                                data_return[i]['position'],
                                data_return[i]['link'],
                                '<button class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="top" title="Edit" onclick="edit_data('+data_return[i]['id']+')" data-target="#edit_modalBox" data-toggle="modal" data-keyboard="false" data-backdrop="static"><i class="fa fa-edit"></i></button>',
                                '<button data-toggle="tooltip" data-placement="top" title="Delete" class="btn btn-danger btn-sm" onclick="delete_data('+data_return[i]['id']+')"><i class="fa fa-trash"></i></button>'
                            ] ).draw( false );
                        }

                        $('#insert_member')[0].reset();
                        $('#image').attr('src','{{asset('images/default.jpg')}}');

                    }
                });
            }

            $('#insert_member').on('submit',function (e)
            {
                e.preventDefault();
                var alldata = new FormData(this);
                $.ajax
                ({
                    type: "POST",
                    url: "{{url('insert/member')}}",
                    data:alldata,
                    cache:false,
                    processData: false,
                    contentType: false,
                    success: function(data){
                        //alert(data);
                        //console.log(data);
                        $('#modalBox').modal('hide');
                        toastr.success('Insert member data successful');
                        load();
                    }
                });
                return false;
            });

            edit_data=function(id){

                $.ajax({
                    type: "POST",
                    url: "../edit/member/"+id,

                    cache: false,
                    success: function(data){
                        reset();
                        var member=JSON.parse(data);

                        //console.log(product);
                        $("#imgs").attr("src", member['photo_url']);
                        $('#id_edit').val(member['id']);
                        $('#update_name').val(member['name']);
                        $('#update_position').val(member['position']);
                        $('#update_link').val(member['link']);

                        $('#edit_modalBox').modal('show');
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
                    url: "{{url('update/member')}}",
                    data:updateData,
                    cache:false,
                    processData: false,
                    contentType: false,
                    success: function(data){
                        //console.log(data);
                        //alert(data);
                        $('#edit_modalBox').modal('hide');
                        toastr.success('Update member data successful');
                        load();
                    }
                });
                return false;
            });

            delete_data=function(id){
                if(confirm('Are you sure You want to delete!')==true){
                    $.ajax({
                        type: "POST",
                        url: "../delete/member/"+id,

                        cache: false,
                        success: function(data){
                            toastr.success('Delete member data successful');
                            load();
                        }
                    });
                }else{
                    return false;
                }
            }

            $('[data-toggle="tooltip"]').tooltip();


        });
    </script>
@endsection