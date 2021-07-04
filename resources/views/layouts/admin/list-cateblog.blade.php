<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">category</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <?php $stt = 1; ?>
    @foreach($Categoryblog as $item)
    <tr>
      <th scope="row"><?php echo $stt++ ?></th>
      <td>{{$item->categoryblog_name }}</td>
      <td style="display: flex;">
        <a href="{{url('/admin/edit-cateblog', $item->id)}}" class="btn btn-success">update</a>
        <form action="{{ url('/admin/delete-cateblog', $item->id) }}" method="post">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger">Delete</button>
        </form>
      </td>
    </tr>

    @endforeach
  </tbody>
</table>