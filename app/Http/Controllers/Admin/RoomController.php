<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    // list data
    public function index()
    {
        return view('admin.room.list');
    }
    // detail data by id
    public function show($id)
    {
        return view('admin.room.detail');
    }
    // view form add data
    public function create()
    {
        return view('admin.room.form');
    }
    
    // function to save data
    public function store()
    {
        // code here
    }
    // view form edit data by id
    public function edit($id)
    {
        return view('admin.room.form');
    }
    // function to update data
    public function update($id)
    {
        // code here
    }
    // function to update data by id
    public function destroy($id)
    {
        // code here
    }
}
