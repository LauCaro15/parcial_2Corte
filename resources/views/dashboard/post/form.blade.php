@csrf    
<div class="form-group mb-3">        
    <input type="type" class="form-control" name ="name" id ="name"
    placeholder="nombre publicación" value= "{{old('name',$category->name)}}" >
</div>


<div class="form-group mb-3">
    <label class="form label" for="description">Contenido</label>
    <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="nombre publicación" >
    {{old('description',$category->description)}}
    </textarea>   
</div>

    
<div class="row-s12 center mb-3">
    <button type="submit" class="btn btn-outline-primary btn-sm">Confirmar</button>
</div>
