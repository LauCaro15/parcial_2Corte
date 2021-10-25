@extends('dashboard.master')
@section('content')
<div class="container">
    <div class="jumbotron">
        <div class="form-group mb-3">        
            <input readonly type="type" class="form-control" name ="RUT" id ="RUT" 
            placeholder="RUT" value= "{{old('name',$doctor->RUT)}}" >
        </div>
        <div class="form-group mb-3">        
            <input readonly type="type" class="form-control" name ="name" id ="name" 
            placeholder="Nombre" value= "{{old('name',$doctor->name)}}" >
        </div>
        <div class="form-group mb-3">        
            <input readonly type="type" class="form-control" name ="lastname" id ="lastname" 
            placeholder="Apellido" value= "{{old('name',$doctor->lastname)}}" >
        </div>            
        <div class="row-s12 center mb-3">
            <button type="submit" class="btn btn-outline-primary btn-sm">Confirmar</button>
        </div>
    </div>
</div>
@endsection