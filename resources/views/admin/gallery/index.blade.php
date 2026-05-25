@extends('layouts.admin.master')
@section('content')

 <table class="table table-bordered table-hover text-center">

                <thead class="table-primary">
                    <tr>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Description</th>
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
    <td><img src="{{ asset('storage/' . $data->image) }}" alt="Image" style="max-width: 100px; max-height: 100px;"></td>
    <td>{{ $data->description }}</td>
    <td><a href="{{ route('gallery.create') }}" ><button>Create</button></a></td>
    <!-- Edit Button -->
    <td><a href="{{ route('gallery.edit', $data->id) }}" ><button>Edit</button></a></td>
    <td><a href="{{ route('gallery.show', $data->id) }}" ><button>Show</button></a></td>
    <td>
    <form action="{{ route('gallery.destroy', $data->id) }}" method="POST">
        @csrf
        
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    </td>
</tr>

@endforeach
        

                </tbody>

            </table>

@endsection