<!DOCTYPE html>
<html>
<head>
    <style>
        input[type=text] {
            width: 100%;
            padding: 25px 10px;
            margin: 12px 0;
            box-sizing: border-box;
            border: none;
            background-color: powderblue;
            color: whitesmoke;
        }
    </style>
</head>
<body>

<div style="color: olivedrab" class="form-group">
    <label for="name"><i><strong>Name :</strong></i></label>
    <input type="text" name="name" value="{{old('name')}}" class="form-control">
    <div>{{$errors->first('name')}}</div>
</div>


<div style="color: olivedrab" class="form-group">
    <label for="email"><i><strong>Email :</strong></i></label>
    <input type="text" name="email"value="{{old('email')}}" class="form-control">
    <div>{{$errors->first('email')}}</div>
</div>


<div style="color: olivedrab" class="form-group">
    <label for="link"><i><strong>Link :</strong></i></label>
    <input type="text" name="link"value="{{old('link')}}" class="form-control">
    <div>{{$errors->first('link')}}</div>
</div>



<div  style="color: oliverdrab" class="form-group">
    <label for="active"><i><strong>Status :</strong></i></label>
    <select style="background-color:powderblue" name="active" id="active" class="form-control">
        <option style="background-color: whitesmoke" value="" disabled>Select customer status</option>
        <option style="background-color: whitesmoke" value="1"> Active</option>
        <option style="background-color: whitesmoke" value="0"> Inactive</option>
    </select>
</div>


<div style="color: olivedrab" class="form-group">
    <label for="catagory_id"><i><strong>Catagory :</strong></i></label>
    <select style="background-color:powderblue" name="catagory_id" id="catagory_id" class="form-control">
        @foreach($catagory as $catagory)
            <option style="background-color: whitesmoke" value="{{ $catagory->id }}">{{$catagory->name}}</option>
        @endforeach
    </select>

</div>
@csrf
</body>
</html>
