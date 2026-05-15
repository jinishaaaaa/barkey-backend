@extends('layouts.admin.master')
@section('content')

 <table class="table table-bordered table-hover text-center">

                <thead class="table-primary">
                    <tr>
                        <th>Title</th>
                        <th>Subtitle</th>
                        <th>Description</th>
                        <th>Author</th>
                        <th>Date</th>
                        <th>Message</th>
                        <th>Create</th>
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
    <td><a href="{{ route('blogformpage') }}" ><button>Create</button></a></td>
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

@endsection