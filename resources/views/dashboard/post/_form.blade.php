@csrf
@include('dashboard.structure.validation-error')
<div class="form-group ">
    {{-- input:text --}}

    <label for="publication" class="col-md-4 col-form-label text-md-right">{{ __('Publicación') }}</label>
    <div class="col-md-6">
         <input id="publication" type="text-Area" class="form-control @error('publication') is-invalid @enderror" 
         name="publication" paceholder="Nombre publicación" value="{{ old('publication') }}" required autocomplete="publication" autofocus>
         @error('name')
             <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
             </span>
         @enderror
    </div>
    <br>
    <div class="form-group col-md-6">
        <select class="form-control" name="state-publication" id="state-publication">
            <option value="">Publicado</option>
            <option value="">No publicado</option>
            <option value="">En revisión</option>
        </select>
    </div>
    <br>

    <div class="form-group col-md-6">
        <textarea class="form-control" name="content_publication" id="content_publication" placeholder="Contenido de la publicación">
        {{ old('content_publication') }}
</textarea>
    </div>
</div>
<br>
<button type="submit" class="btn btn-success">Aceptar</button>
<button class="btn btn-danger" href="{{URL::previous()}}">Cancelar</button>