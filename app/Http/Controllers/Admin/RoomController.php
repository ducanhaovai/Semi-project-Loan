<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\RoomType;
use Illuminate\Support\Facades\Validator;

class RoomController extends Controller
{
    // list data
    public function index()
    {
        $rooms = Room::latest()->paginate(5);
        return view('admin.room.list', compact("rooms"))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    // detail data by id
    public function show($id)
    {
        $room=Room::findOrFail($id);
        return view('admin.room.detail',compact('room'));
    }
    // view form add data
    public function create()
    {
        $room_types = RoomType::all();
        return view('admin.room.create', compact('room_types'));
    }

    // function to save data
    public function store(Request $request)
    {
        if ($request->isMethod('POST')) {

            $validator = Validator::make($request->all(), [

                'name' => 'required',

                'description' => 'required',

                'image' => 'image|mimes:jpg,jpeg,png|max:1000',

                'type_id' => 'required'

            ]);

            if ($validator->fails()) {

                return redirect()->back()

                    ->withErrors($validator)

                    ->withInput();
            }

            if ($request->hasFile('image')) {

                $file = $request->file('image');

                $path = public_path('image/room');

                $fileName = time() . '_' . $file->getClientOriginalName();

                $file->move($path, $fileName);
            } else {

                $fileName = 'noname.jpg';
            }

            $input = $request->all();

            $input['image'] = $fileName;

            Room::create($input);
            return redirect()->route('room');
            }
    }
    // view form edit data by id
    public function edit($id)
    {
        $room_types = RoomType::all();
        $room = Room::findOrFail($id);
        return view('admin.room.edit', compact('room','room_types'));
    }
    // function to update data
    public function update(Request $request,$id)
    {
        $room=Room::findOrFail($id);
        $validator = Validator::make($request->all(), [

            'name' => 'required',
            'description' => 'required',
            'type_id' => 'required'

        ]);

        if ($validator->fails()) {

            return redirect()->back()

                ->withErrors($validator)

                ->withInput();
        }

        if ($request->hasFile('image')) {

            $file = $request->file('image');

            $path = public_path('image/room');

            $fileName = time() . '_' . $file->getClientOriginalName();

            $file->move($path, $fileName);
        } else {

            $fileName = $room->image;
        }

        $input = $request->all();

        $input['image'] = $fileName;

        $room->update($input);
        return redirect()->route('room');
    }
    // function to update data by id
    public function destroy($id)
    {
        $room=Room::findOrFail($id);
        $room->delete();
        return redirect()->route('room');
    }
}
