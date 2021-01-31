<div class="form-group">

    <label for="Grupo" class="control-label" >{{'Grupo'}}</label>

    <select name="Grupo" class="form-control {{$errors->has('Grupo')?'is-invalid':''}}" name="Grupo" id="Grupo" 
        value="{{ isset($grupo->Grupo)?$grupo->Grupo:old("Grupo")}}">
            
        
            <option value="">{{''}}</option>
            <option value="1-A">{{'1-A'}}</option>
            <option value="2-A">{{'2-A'}}</option>
            <option value="1-B">{{'1-B'}}</option>
            <option value="2-B">{{'2-B'}}</option>
            <option value="1-C">{{'1-C'}}</option>
            <option value="2-C">{{'2-C'}}</option>


        </select>

    
        <input type="text" disabled=»disabled» class="form-control {{$errors->has('Grupo')?'is-invalid':''}}" name="Grupo" id="Grupo" 
        value="{{ isset($grupo->Grupo)?$grupo->Grupo:old("Grupo")}}">
    
        {!! $errors->first('Grupo','<div class="invalid-feedback">:message</div>')!!}
        
    
    </div>
    
    <div class="form-group">
    
        <label for="Semestre" class="control-label">{{'Semestre'}}</label>

        <select name="Semestre" class="form-control {{$errors->has('Semestre')?'is-invalid':''}}" name="Semestre" id="Semestre" 
            value="{{ isset($grupo->Semestre)?$grupo->Semestre:old("Semestre")}}">
                
            
                <option value="''">{{''}}</option>
                <option value="Primer Semestre">{{'1°'}}</option>
                <option value="Segundo Semestre">{{'2°'}}</option>
                <option value="Tercero Semestre">{{'3°'}}</option>
                <option value="Cuarto Semestre">{{'4°'}}</option>
                <option value="Quinto Semestre">{{'5°'}}</option>
                <option value="Sexto Semestre">{{'6°'}}</option>
                <option value="Septimo Semestre">{{'7°'}}</option>
                <option value="Octavo Semestre">{{'8°'}}</option>
                <option value="Noveno Semestre">{{'9°'}}</option>
                <option value="Decimo Semestre">{{'10°'}}</option>
            </select>
    
    
        <input type="text" disabled=»disabled» class="form-control {{$errors->has('Semestre')?'is-invalid':''}}" name="Semestre" id="Semestre" 
        value="{{ isset($grupo->Semestre)?$grupo->Semestre:old("Semestre")}}">
    
        {!! $errors->first('Semestre','<div class="invalid-feedback">:message</div>')!!}
    
    </div>


    <div class="form-group">

        <label for="Turno" class="control-label">{{'Turno'}}</label>

        <select name="Turno" class="form-control {{$errors->has('Turno')?'is-invalid':''}}" name="Turno" id="Turno" 
        value="{{ isset($grupo->Turno)?$grupo->Turno:old("Turno")}}">
            
        
            <option value="">{{''}}</option>
            <option value="Matutino">{{'Matutino'}}</option>
            <option value="Vespertino">{{'Vespertino'}}</option>
            <option value="Sabatino">{{'Sabatino'}}</option>


        </select>

        <input type="text" disabled=»disabled» class="form-control {{$errors->has('Turno')?'is-invalid':''}}" name="Turno" id="Turno" 
        value="{{ isset($grupo->Turno)?$grupo->Turno:old("Turno")}}">

    
       {!! $errors->first('Turno','<div class="invalid-feedback">:message</div>')!!} 
    
    </div>



    <br>
    
        <input type="submit" class="btn btn-outline-primary" value="{{ $Modo=='crear' ? 'Agregar' : 'Mododificar' }}">
    
        <a class="btn btn-outline-secondary" href="{{ url('grupos')}}">Regresar</a>
    
    