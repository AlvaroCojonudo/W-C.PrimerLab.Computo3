<div class="container">
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <div class="card mt-5 border border-warning">
                <div class="card-header bg-dark text-white">
                    <h5>Parte 1: Validación de String</h5>
                </div>
                <div class="card-body">
                    <form method="GET" action="<?php echo base_url('Parte1/validacion'); ?>">
                        <div class="form-group">
                            <label for="string">Ingrese una cadena de texto:</label>
                            <input type="text" class="form-control" id="string" required="required" aria-describedby="helpString" name="string" placeholder="Ejemplo: DASFjhfksa56453">
                            <small class="form-text text-muted lead" id="helpString">
                                <span>La cadenad debe de contener:</span>
                                <ul>
                                    <li>Letras MAYUSCULAS y minusculas.</li>
                                    <li>Solo números.</li>
                                    <li>Letras MAYUSCULAS y minisculas; y números.</li>
                                </ul>
                            </small>
                        </div>
                        <button type="submit" class="btn btn-warning btn-block border shadow">Validar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
