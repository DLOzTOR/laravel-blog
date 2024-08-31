<div>
  <ul>
  @foreach ($categories as $item)
      <li>{{ $item->id}} {{$item->title}}</li>
  @endforeach
  </ul>
  <a href="{{route('category.create')}}">create</a>
</div>