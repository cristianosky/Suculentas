    <div class="form-group">
        <label for="" class="control-label">
            {{ $Modo=='crear' ? 'Agregar planta' : 'Modificar planta' }} 
        </label><br>
    </div>
<div class="form-group">
    
    <label for="" class="control-label">Nombre</label>
<input type="text" class="form-control {{ $errors->has('Nombre')?'is-invalid':''}}" name="Nombre" id="Nombre" value="{{ isset($planta->Nombre)?$planta->Nombre:old('Nombre') }}">
    {!! $errors->first('Nombre','<div class="invalid-feedback">:message</div>') !!}

</div>
    
<div class="form-group">
    <label for="" class="control-label">Descripcion</label>
    <input type="text" class="form-control {{ $errors->has('Descripcion')?'is-invalid':''}}" name="Descripcion" id="Descripcion" value="{{ isset($planta->Descripcion)?$planta->Descripcion:old('Descripcion') }}">
    {!! $errors->first('Descripcion','<div class="invalid-feedback">:message</div>') !!}
</div>
    
<div class="form-group">
    <label for="" class="control-label">Foto</label>
    <br>
    @if (isset($planta->foto))
    <img src="{{ asset ('storage').'/'.$planta->foto}}" alt="" width="100">
    @endif
    <br>
    
    <input type="file" class="form-control {{ $errors->has('foto')?'is-invalid':''}}" name="foto" id="foto" value="">
    
</div>
    
    
    
    <input type="submit" class="btn btn-success" value="{{ $Modo=='crear' ? 'Agregar planta' : 'Modificar planta' }}">

    <a href="{{ url('plantas')}}" class="btn btn-primary">Regresar</a>