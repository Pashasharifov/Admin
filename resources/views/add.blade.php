<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
<body>  @include("menu")
@if($errors->any())

@foreach($errors->all() as $a)

{{ $a }}

@endforeach

@endif
  
    <br><br>
<form  method="post" action="{{ route('add')}}">
 
    @csrf
    <label >Title</label>
    <input type="text" name="ad" value="{{old('ad')}}" class="form-control">
    <label >News</label>
    <textarea name="editor1" id="" cols="30" rows="10">
       
    </textarea> <script>
            CKEDITOR.replace('editor1');
        </script>
        <label for="">Categories</label>
<select name="select" id="">
    @foreach($table as $data)
    <option value="{{$data->id}}" >{{ $data->name}}</option>
    @endforeach
</select>

    <button class="btn btn-success w-100 mt-2">Add news</button>

</form>
<br>
@if(isset($success))
<span style="color:green;font-weight:bold;">News added.</span>
@endif

</body>
</html>