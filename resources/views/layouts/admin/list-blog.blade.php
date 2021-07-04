<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">category</th>
      <th scope="col">image</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <?php $stt = 1; ?>
    @foreach($getBlog as $item)
    <tr>
      <th scope="row"><?php echo $stt++ ?></th>
      <td>{{$item->title_blog}}</td>
      <td>{{$item->categoryblog_name}}</td>
      <td><img src="{{ asset('storage/photo/' . $item->image_blog) }}" alt="{{$item->image_blog}}" width="100px"/></td>
      <td style="display: flex;">
      <a href="{{url('#')}}" class = "btn btn-success">update</a>
        <form action="{{ url('blog/delete',$item->id) }}" method="post">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger">Delete</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>