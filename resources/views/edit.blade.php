<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
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
<style>
    label{
        font-weight: bold;
    }
</style>
<body>
    @include("menu")
    <br><br>
    <form  method="post" action="{{ route('updateNews')}}">
 
 @csrf
 <label >Title</label>
 <input type="text" name="ad" class="form-control" value="{{$table[0]->title }}">
 <label >News</label>
 <textarea name="editor1" id="" cols="30" rows="10">{{$table[0]->text }}
    
 </textarea>
 <label for="">Category</label>
 <select name="category" class="form-control">
@foreach($table2 as $data)
<option value="{{$data->id}}">{{$data->name}}</option>
@endforeach
 </select>
 <input type="hidden" name="id" value="{{$table[0]->id}}"> <script>
         CKEDITOR.replace('editor1');
     </script>
    

 <button class="btn btn-success w-100 mt-2">Edit news</button>
    </form>

</body>
</html>
</body>
</html>