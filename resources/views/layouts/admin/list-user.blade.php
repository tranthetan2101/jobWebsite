
<table class="table table-centered table-borderless table-hover table-nowrap mb-0" id="datatable">
    <thead class="thead-light">
        <tr>
            <th class="border-top-0">Name</th>
            <th class="border-top-0">Email</th>
            <th class="border-top-0">Role</th>
            @if (Auth::check() && Auth::user()->type == 'admin')
            <th class="border-top-0">Update</th>
            <th class="border-top-0">Delete</th>
            @endif
        </tr>
    </thead>
    <tbody>
        @foreach ($Users as $content)
        <tr>
            <td>
                <span class="ml-2">{{ $content->name }}</span>
            </td>
            <td>
                <span class="ml-2">{{ $content->email }}</span>
            </td>
            <td><span class="ml-2">{{ $content->type }}</span></td>
            @if (Auth::check() && Auth::user()->type == 'admin')
            <td><a class="ml-2 btn btn-primary" href="{{ url('/admin/edit-user', $content->id) }}">Update</a></td>
            <td>
                @if ($content->type != 'admin')
                <form action="{{ url('/admin/delete-user', $content->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit"  class="btn btn-danger">Delete</button>
                </form>
                @endif
            </td>
            @endif
        </tr>
        @endforeach
    </tbody>
</table>