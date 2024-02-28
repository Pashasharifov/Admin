
    
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
       <form action="{{route('addCategory')}}" method="post">
        @csrf
        <br>
        <input type="text" name="category" id="" placeholder="Category name" class="form-control">
        <button type="submit" class="btn btn-success w-100 mt-3">Add category</button>

       </form>

@if(isset($_GET['error']))
<span style="color:red;font-weight:bold;">New exists in this category</span>
@endif

       <table class="table">
            @foreach($table as $data)
            <tr>
                <td class="w-50">
                    {{$data->name}}
                </td>
                <td>
                <a href="deleteCategory/{{$data->id}}" class="btn btn-danger">Delete</a>
                <a href="editCategory/{{$data->id}}" class="btn btn-success ms-5">Edit</a>
                </td>
                @endforeach
            </tr>

        </table>
    </div>

</body>
</html>
</body>
</html>