<!DOCTYPE html>
<html>
<head>
    <title>Student Table</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

    <div class="card shadow border rounded-4">

        <div class="card-header bg-dark text-white ">
            <h3 class="mb-0">Student Registration Table</h3>
        </div>

        <div class="card-body">
            


            <table class="table table-bordered table-hover text-center">

                <thead class="table-primary">
                    <tr>
                        <th>Title</th>
                        <th>Subtitle</th>
                        <th>Description</th>
                        <th>Author</th>
                        <th>Date</th>
                        <th>Message</th>
                        <th>Edit</th>
                        
                        <th>Show</th>
                        <th>Delete</th>
                    </tr>
                </thead>

                <tbody>


</tbody>

            @foreach ($datas as $data)

<tr>

    <td>{{ $data->title }}</td>
    <td>{{ $data->subtitle }}</td>
    <td>{{ $data->description }}</td>
    <td>{{ $data->author }}</td>
    <td>{{ $data->date }}</td>
    <td>{{ $data->message }}</td>
    <!-- Edit Button -->
    <td><a href="{{ route('blogeditpage', $data->id) }}" ><button>Edit</button></a></td>
    <td><a href="{{ route('blogdisplaypage', $data->id) }}" ><button>Show</button></a></td>
    <td>
    <form action="{{ route('blogdelete', $data->id) }}" method="POST">
        @csrf
        
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    </td>
</tr>

@endforeach
        

                </tbody>

            </table>

        </div>

    </div>

</div>

</body>
</html>




