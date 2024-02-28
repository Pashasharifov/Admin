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
<body>
    @include("menu")
    <br><br>
    <div class="container">
        <table class="table">
            @foreach($table as $data)
            <tr>
                <td class="w-50">
                    {{$data->title}}
                </td> <td>
                    {{$data->name}}
                </td>
                <td>
                <a href="deleteNews/{{$data->newsid}}" class="btn btn-danger">Delete</a>
                <a href="editNews/{{$data->newsid}}" class="btn btn-success ms-5">Edit</a>
                </td>
               
                @endforeach
            </tr>

        </table>
    </div>

</body>
</html>
</body>
</html>