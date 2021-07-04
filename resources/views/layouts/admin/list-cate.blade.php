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
    @foreach($Categoryjob as $content)
    <tr>
      <th scope="row"><?php echo $stt++ ?></th>
      <td>{{$content->category_name}}</td>
      <td style="display: flex;">
        <a href="{{url('/admin/edit-cate',$content->id_cate_post)}}" class="btn btn-success">update</a>
        <form action="{{ url('/admin/delete-cate', $content->id_cate_post) }}" method="post">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger">Delete</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>