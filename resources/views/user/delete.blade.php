<form method="POST" action="{{url('/users/'.$user->id)}}" class="inline-block">
    @csrf
    @method('DELETE')
    <input type="submit"  class="btn btn-primary" value='Eliminar'>
</form>