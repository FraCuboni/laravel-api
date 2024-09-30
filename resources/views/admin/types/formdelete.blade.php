<form
  class="d-inline"
  action="{{route('admin.types.destroy', $type)}}"
  method="POST"
  onsubmit="return confirm('{{$type->title}} will be deleted.')">
  @csrf
  @method('DELETE')
  <button type="submit" class="btn btn-danger mb-1"><i class="fa-solid fa-trash-can"></i></button>
</form>