
    
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
<body>
    @include("menu")
    <br><br>
    <div class="container">
       <form action="{{route('updateCategory')}}" method="post">
        @csrf
        <br>
        <input type="text" name="category" id="" value="{{$table[0]->name}}" class="form-control">
        <input type="hidden" name="id" value="{{$table[0]->id}}">
        <button type="submit" class="btn btn-success w-100 mt-3">Edit category</button>

       </form>

</body>
</html>