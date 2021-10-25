@extends('dashboard.master')
@section('content')

<table class="table table-striped table-hover">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Código</th>
        <th scope="col">Categoría</th>
        <th scope="col">Descripción</th>
        <th scope="col">Opciones</th>
      </tr>
    </thead>

    <tbody>
      @foreach($categories as $category)
      <tr>
        <th scope= "row">{{ $category -> id}}</th>
        <td>{{ $category -> name}}</td>
        <td>{{ $category -> description}}</td>
        <td>
          <a href="{{ route('category.show',$category -> id)}}" class="btn btn-info">Ver</a>
          <a href="{{ route('category.edit',$category -> id)}}" class="btn btn-info">Editar</a>
          <button class="btn btn-danger" data-toggle="modal" data-target="#exampleModal"
          data-id="{{ $category->id }}">
            Eliminar
          </button>
        </td>

      </tr>
      @endforeach
    </tbody>
</table>
<div class="mb-3">
  <button class="btn btn-info" href="{{ URL::previous() }}">Regresar</button>
</div>
@endsection
{{ $categories->links() }}

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <label class="text-muted">¿Seguro que deseas eliminar la categoría seleccionada?</label>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">
          Cancelar
        </button>
        <form id="formDelete" method="POST" action="{{ route('category.destroy', 0) }}" 
        data-action="{{ route('category.destroy', 0) }}">
        @method('DELETE')
        @csrf
          <button type="submit" class="btn btn-danger btn-sm">Confirmar</button>
        </form>
        
      </div>
    </div>
  </div>
</div>
<script>
  window.onload=function(){
    $('#exampleModal').on('show.bs.modal',function(event){
      var button = $(event.relatedTarget)
      var id = button.data('id')
      action = $('#formDelete').attr('data-action').slice(0,-1)
      action += id
      $('#formDelete').attr('action', action)
      var modal = $(this)
      modal.find('.modal-title').text('Vas a eliminar la Categoría con Id'+ id)
    });
  }
</script>