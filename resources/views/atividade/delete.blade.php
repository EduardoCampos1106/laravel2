<h1>Excluir</h1>
<hr>
<form action="/atividades/{{$atividade->id}}" method="POST">
{{csrf_field()}}
{{method_field('DELETE')}}
<p>Vai deletar {{$atividade->id}} mesmo?</p>
<input type="submit" value="Deletar">
</form>