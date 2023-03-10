@extends('admin.layouts.master')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Thêm mới Phòng</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <ul>
                @foreach ($errors->all() as $error)
            
            <li>{{ $error }}</li>
            
            @endforeach
            
            </ul>
            <form action="{{ route('admin.room.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <button type='submit'  style='float: right; border: 1px solid #cccc; border-radius:5%; padding:5px'><i class="fas fa-fw fa-save"></i> Save</button>
                <div class="sbp-preview">
                    <div class="sbp-preview-content">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1">Name</label>
                                <input class="form-control" name="name" id="exampleFormControlInput1"  placeholder="Room name" />
                            </div>
                            
                            <div class="mb-3">
                                <label for="exampleFormControlInput1">Room Type</label>
                                <select name="type_id" class="form-control">
        
                                    @foreach($room_types as $type)
                                    
                                    <option value="{{$type->id}}">{{$type->name}}</option>
                                    
                                    @endforeach
                                    
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1">Image</label>
                                <input type="file" class="form-control" placeholder="Image" value="" name="image" />
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1">Description</label>
                                <textarea class="form-control" style="height:150px" name="description" placeholder="Description"></textarea>
                            </div>
                    </div>
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