<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">category</th>
      <th scope="col">status</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <?php $stt = 1; ?>
    @foreach($Post as $detail)
    <tr>
      <th scope="row"><?php echo $stt++ ?></th>
      <td>{{$detail->post_name}}</td>
      <td>{{$detail->category_name}}</td>
      <td>@mdo</td>
      <td style="display: flex;">
      <a href="{{url('/admin/edit-post',$detail->id)}}" class = "btn btn-success">update</a>
        <form action="{{ url('/admin/delete-post', $detail->id) }}" method="post">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger">Delete</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>