
@section('content')
  <form action="{{ action('TransactionController@create') }}" method="post" enctype="multipart/form-data">
    <!-- アップロードフォームの作成 -->
    <input type="file" name="image">
    {{ csrf_field() }}
    <input type="submit" value="アップロード">
  </form>
@endsection