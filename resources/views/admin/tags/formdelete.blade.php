<form
  class="d-inline"
  action="{{route('admin.tags.destroy', $tag)}}"
  method="POST"
  onsubmit="return confirm('{{$tag->title}} will be deleted.')">
  @csrf
  @method('DELETE')
  <button type="submit" class="btn btn-danger mb-1"><i class="fa-solid fa-trash-can"></i></button>
</form>