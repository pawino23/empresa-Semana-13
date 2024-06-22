<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="cperApellido">Apellido</label>
            <input type="text" class="form-control @error('cperApellido') is-invalid @enderror" id="cperApellido" name="cperApellido" value="{{ old('cperApellido', $persona->cperApellido ?? '') }}">
            @error('cperApellido')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="cPerNombre">Nombre</label>
            <input type="text" class="form-control @error('cPerNombre') is-invalid @enderror" id="cPerNombre" name="cPerNombre" value="{{ old('cPerNombre', $persona->cPerNombre ?? '') }}">
            @error('cPerNombre')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="cPerDireccion">Dirección</label>
            <input type="text" class="form-control @error('cPerDireccion') is-invalid @enderror" id="cPerDireccion" name="cPerDireccion" value="{{ old('cPerDireccion', $persona->cPerDireccion ?? '') }}">
            @error('cPerDireccion')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="dPerFechaNac">Fecha de Nacimiento</label>
            <input type="date" class="form-control @error('dPerFechaNac') is-invalid @enderror" id="dPerFechaNac" name="dPerFechaNac" value="{{ old('dPerFechaNac', $persona->dPerFechaNac ?? '') }}">
            @error('dPerFechaNac')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="nPerEdad">Edad</label>
            <input type="number" class="form-control @error('nPerEdad') is-invalid @enderror" id="nPerEdad" name="nPerEdad" value="{{ old('nPerEdad', $persona->nPerEdad ?? '') }}">
            @error('nPerEdad')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="nPerSueldo">Sueldo</label>
            <input type="number" step="0.01" class="form-control @error('nPerSueldo') is-invalid @enderror" id="nPerSueldo" name="nPerSueldo" value="{{ old('nPerSueldo', $persona->nPerSueldo ?? '') }}">
            @error('nPerSueldo')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="nPerEstado">Estado</label>
            <select class="form-control @error('nPerEstado') is-invalid @enderror" id="nPerEstado" name="nPerEstado">
                <option value="1" {{ old('nPerEstado', $persona->nPerEstado ?? '') == '1' ? 'selected' : '' }}>Activo</option>
                <option value="0" {{ old('nPerEstado', $persona->nPerEstado ?? '') == '0' ? 'selected' : '' }}>Inactivo</option>
            </select>
            @error('nPerEstado')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
</div>