<div class="container">
    <form>
        <div class="mb-3 row">
            <label for="inputName" class="col-4 col-form-label">Ubicación:</label>
            <div class="col-8">
                <input type="text" class="form-control form" name="Nombre_CC" id="Nombre_CC" value="{{ isset($registro->Nombre_CC) ? $registro->Nombre_CC :'' }}">
            </div>
        </div>
        <fieldset class="mb-3 row">
            <legend class="col-form-legend col-4">Indica la ubicación</legend>
            <div class="col-8">
                Puedes nombrar un centro comercial o punto de referencia
            </div>
        </fieldset>
        <hr>
        <br>
        <div class="mb-3 row">
            <label for="inputName" class="col-4 col-form-label">Latitud:</label>
            <div class="col-8">
                <input type="text" class="form-control" name="Latitud" id="Latitud" value="{{ isset($registro->Latitud) ? $registro->Latitud :'' }}">
            </div>
        </div>
        <fieldset class="mb-3 row">
            <legend class="col-form-legend col-4">Indica latitud</legend>
            <div class="col-8">
                Primer campo para ubicación exacta
            </div>
        </fieldset>
        <hr>
        <br>
        <div class="mb-3 row">
            <label for="inputName" class="col-4 col-form-label">Longitud</label>
            <div class="col-8">
                <input type="text" class="form-control" name="Longitud" id="Longitud" value="{{ isset($registro->Longitud) ? $registro->Longitud :'' }}">
            </div>
        </div>
        <fieldset class="mb-3 row">
            <legend class="col-form-legend col-4">Indica la longitud</legend>
            <div class="col-8">
                Segundo campo para ubicación exacta
            </div>
        </fieldset>
        <hr>
        <br>
        <div class="mb-3 row">
            <label for="inputName" class="col-4 col-form-label">Fecha de instalación</label>
            <div class="col-8">
                <input type="date" class="form-control" name="Fecha_inst" id="Fecha_inst" value="{{ isset($registro->Fecha_inst) ? $registro->Fecha_inst :'' }}">
            </div>
        </div>
        <fieldset class="mb-3 row">
            <legend class="col-form-legend col-4">Instalación</legend>
            <div class="col-8">
                Indica la fecha en la que fue instalado el servicio
            </div>
        </fieldset>
        <hr>
        <br>
        <div class="mb-3 row">
            <label for="inputName" class="col-4 col-form-label">Serie</label>
            <div class="col-8">
                <input type="number" class="form-control" name="Serie" id="Serie" value="{{ isset($registro->Serie) ? $registro->Serie :'' }}">
            </div>
        </div>
        <fieldset class="mb-3 row">
            <legend class="col-form-legend col-4">Identificación ATM</legend>
            <div class="col-8">
                Indica el número de serie del ATM
            </div>
        </fieldset>
        <hr>
        <br>


        <div class="mb-3 row">
            <label for="inputName" class="col-4 col-form-label">Dias para mantenimiento:</label>
            <div class="col-8">
                <input type="text" class="form-control" name="D_p_M" id="D_p_M"  value="{{ isset($registro->D_p_M) ? $registro->D_p_M :'' }}">
            </div>
        </div>
        <fieldset class="mb-3 row">
            <legend class="col-form-legend col-4">Mantenimiento</legend>
            <div class="col-8">
                Indica una fecha para enviar a mantenimiento al ATM
            </div>
        </fieldset>
        <hr>
        <br>

        <div class="mb-3 row">
            <div class="offset-sm-4 col-sm-8">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </form>
</div>