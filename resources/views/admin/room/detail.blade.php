@extends('admin.layouts.master')

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Details Room {{ isset($room->id)?$room->name:'' }}</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="mb-3"> 
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr> 
                            <th style="width:50%">Image</th>
                            <th>Speciality</th>        
                        </tr>
                    </thead>
                    <tbody>
                        <tr>                                     
                            <td >
                                <img src="{{ asset('image/room/'.$room->image )}}" width="100%" vspace="15px">
                            </td>                               
                            <td>
                                {{$room->description}}
                            </td>  
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection