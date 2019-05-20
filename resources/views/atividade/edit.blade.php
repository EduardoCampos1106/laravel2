<h1>Formulário de Edição de Atividades (Editando Atividade nº{{$atividade->id}})</h1>
<hr>

<form action="/atividades/{{$atividade->id}}" method="post"> 
    {{ csrf_field() }}
    {{ method_field('PUT') }}
    Título:         <input type="text" name="title" value="{{$atividade->title}}">                 <br><br>
    Descrição:      <input type="text" name="description" value="{{$atividade->description}}">           <br><br>
    Agendado para:  <input type="datetime-local" name="scheduledto" value="{{Carbon\Carbon::parse($atividade->scheduledto)->format('Y-m-d\TH:i:s')}}"> <br><br>
    <hr>
    <input type="submit" value="Salvar">
</form>
<hr>


<!-- MENSAGEM DE ERRO -->
@if ($errors->any())
    <div class="row">
	    <div class="alert alert-danger">
		    <ul>
		      @foreach ($errors->all() as $error)
		      <li>{{ $error }}</li>
		      @endforeach
		    </ul>
		</div>
	</div>
@endif