<h1>Excluir</h1>
<hr>
<form action="/messages/{{$messages->id}}" method="POST">
{{csrf_field()}}
{{method_field('DELETE')}}
<p>Vai deletar {{$messages->id}} mesmo?</p>
<input type="submit" value="Deletar">
</form>