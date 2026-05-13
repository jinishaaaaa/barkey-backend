@foreach ($datas as $data)

<tr>

    <td>{{ $data->id }}</td>
    <td>{{ $data->fullname }}</td>
    <td>{{ $data->phonenumber }}</td>
    <td>{{ $data->emailaddress }}</td>
    <td>{{ $data->courseselection }}</td>
    <td>{{ $data->durationselection }}</td>
    <td>{{ $data->message }}</td>

    <!-- Edit Button -->
    <td>
        <a href="{{ route('editpage', $data->id) }}"
           class="btn btn-primary btn-sm">

           Edit
        </a>
    </td>

    <!-- Delete Button -->
    <td>

        <form action="{{ route('deletepage', $data->id) }}"
              method="POST">

            @csrf

            <button type="submit"
                    class="btn btn-danger btn-sm">

                Delete
            </button>

        </form>

    </td>

</tr>

@endforeach
