@extends('admin.layouts.master')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Thêm mới Phòng</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
                <a  style="float: right; border: 1px solid #cccc; border-radius:5%; padding:5px" href="{{ route('admin.form') }}"><i class="fas fa-fw fa-save"></i> Save</a>
                <div class="sbp-preview">
                    <div class="sbp-preview-content">
                        <form>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1">Name</label>
                                <input class="form-control" id="exampleFormControlInput1"  placeholder="Room name" />
                            </div>
                        </form>
                    </div>
                </div>
        </div>
    </div>

</div>


@endsection
@section('js')
<script src="{{asset('admin/vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin/js/demo/datatables-demo.js')}}"></script>
@endsection