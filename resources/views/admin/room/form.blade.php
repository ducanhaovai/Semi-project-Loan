<div class="sbp-preview-content">
    <div class="mb-3">
        <label for="exampleFormControlInput1">Name</label>
        <input class="form-control" name="name" id="exampleFormControlInput1"  placeholder="Room name" value="{{ isset($room->id)?$room->name:""  }}" />
    </div>
    
    <div class="mb-3">
        <label for="exampleFormControlInput1">Room Type</label>
        <select name="type_id" class="form-control">

            @foreach($room_types as $type)
            
            <option value="{{$type->id}}" {{ isset($room->id)&&$room->type_id==$type->id?'selected':'' }} >{{$type->name}}</option>
            
            @endforeach
            
        </select>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1">Price</label>
        <input class="form-control" name="price" id="exampleFormControlInput1"  placeholder="Price" value="{{ isset($room->id)?$room->price:""  }}" />
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1">Image</label>
        <input type="file" class="form-control" placeholder="Image" value="" name="image" />
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1">Description</label>
        <textarea class="form-control" style="height:150px" name="description" placeholder="Description" >{{ isset($room->id)?$room->description:""  }}</textarea>
    </div>
</div>