<a href="{{route('category.index')}}">View all categories</a>
<form action="{{route('category.store')}}" method="POST">
  @csrf
  <label for="title">Title</label>
  <input type="text" name="title">
  <input type="submit" value="Submit">
</form>