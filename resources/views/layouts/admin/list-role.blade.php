<a href="{{url('/admin/create-role')}}">Thêm Role</a> <br><br>
@foreach($role as $content)
<h1>{{$content->type}}</h1>
<form action="{{ url('/admin/delete-role', $content->id) }}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit">Delete Role</button>
</form>
<a href="{{url('/admin/edit-role',$content->id)}}">Edit Role</a>
@endforeach