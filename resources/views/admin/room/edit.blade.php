@extends('admin.layouts.master')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><a href="{{ route('room') }}" class="btn btn-default"><i class="fas fa-fw fa-arrow-left"></i></a>Sửa Phòng {{ isset($room->id)?$room->name:'' }}</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <ul>
                @foreach ($errors->all() as $error)
            
            <li>{{ $error }}</li>
            
            @endforeach
            
            </ul>
            <form action="{{ route('room.update',$room->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <button type='submit'  style='float: right; border: 1px solid #cccc; border-radius:5%; padding:5px'><i class="fas fa-fw fa-save"></i> Save</button>
                <div class="sbp-preview">
                    @include('admin.room.form')
                </div>
            </form>

        </div>
    </div>

</div>


@endsection
@section('js')
<script src="{{asset('admin/vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin/js/demo/datatables-demo.js')}}"></script>
@endsection