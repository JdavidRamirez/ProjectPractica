use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\URL;
{{-- Falsificación de peticiones en sitios cruzados --}}
@csrf
@include('dashboard.structure.validation-error')
<div class="form-group">
    {{-- input:text --}}
    <input class="form-control" type="text" name="publication" id="publication"
    placeholder="Nombre publicación">
     {{old('publication', $post -> publication)}}
</div>
<div class="form-group">
    <select class="form-control" name="state_publication" id="state_publication">
        <option value="">Publicado</option>
        <option value="">No Publicado</option>
        <option value=""></option>
    </select>
</div>
<div class="form-group">
    <textarea class="form-control" name="content_publication" id="content_publication"
    cols="30" rows="10" placeholder="Contenido de la publicación"> 
    {{old('content_publication', $post -> content_publication)}}
    </textarea>
</div>
<button type="submit" class="btn btn-success">Aceptar</button>
<button class="btn btn-danger" href="{{URL::previous()}}">Cancelar</button>