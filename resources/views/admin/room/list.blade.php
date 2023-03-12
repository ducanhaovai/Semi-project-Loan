@extends('admin.layouts.master')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">List of Room</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <a  style="float: right; border: 1px solid #cccc; border-radius:5%; padding:5px; margin-bottom:5px" href="{{ route('room.form') }}"><i class="fas fa-fw fa-plus"></i> Add New </a>
                <table class="table table-bordered" id="dataTable_room" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Kind of room</th>
                            <th style="width:30%">Image</th>
                            <th>Price</th>
                            <th>Description</th>
                            <th colspan="2" width=10%>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($rooms as $key => $room)
                        <tr>
                            <td>{{ $room->name }}</td>
                            <td>{{ $room->room_type->name }}</td>
                            <td ><img src="{{ asset('image/room/'.$room->image )}}" width="100%" ></td>
                            <td>{{ number_format($room->price) }}</td>
                            <td>{{ $room->description }}<td>
                                <a href="{{ route('room.detail',$room->id) }}"><i class="fas fa-fw fa-eye"></i></a>
                                <a href="{{ route('room.edit',$room->id) }}"><i class="fas fa-fw fa-pen"></i></a>
                                <a href="{{ route('room.delete',$room->id) }}" onclick="return confirm('Are you sure?')"><i class="fas fa-fw fa-trash" style="color:red"></i></a>
                            </td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
                
    </div>
</div>

{!! $rooms->links() !!}

@endsection
@section('js')
<script src="{{asset('admin/vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin/js/demo/datatables-demo.js')}}"></script>
@endsection





