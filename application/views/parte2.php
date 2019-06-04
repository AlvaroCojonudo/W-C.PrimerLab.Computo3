<div class="container">
    <div class="row">
        <div class="col col-lg-4 offset-lg-4">
            <div class="card mt-5 border border-warning">
                <div class="card-header bg-dark text-white">
                    <h5>Parte 2: </h5>
                </div>
                <div class="card-body">
                    <form id="formEval" method="GET" action="<?php echo base_url('Parte2/validacion'); ?>">
                        <div class="form-group">
                            <label for="string">Ingrese una cadena de texto:</label>
                            <input type="text" class="form-control" id="string" required="required" aria-describedby="helpString" name="string" value="Mañana será un día soleado.">
                            <small class="form-text text-muted lead mt-2" id="helpString">
                                <span>Por favor, no ingreses lo siguiente:</span>
                                <ul>
                                    <li>La letra 'Ñ/ñ'.</li>
                                </ul>
                                <span>Se te devolverá:</span>
                                <ul>
                                    <li>La oración sin vocales.</li>
                                    <li>Unicamente las letras 'M, s, l'.</li>
                                </ul>
                            </small>

                        </div>
                        <button type="submit" class="btn btn-warning btn-block border shadow" id="btnEnviarVal">Validar</button>
                    </form>
                    <script>
                        $(document).ready(() => {
                            console.log('se cargó');
                            $('#btnEnviarVal').click((e) => {
                                e.preventDefault();
                                console.log('se previo el submit');
                                var frase = $('#string').val();
                                var n = frase.search(/ñ/i);
                                if(n !== -1){
                                    alert('No se puede continuar ya que tu frase contiene la letra Ñ.');
                                    $('#string').focus();
                                }else{                                    
                                    $('#formEval').submit();
                                }
                            });
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>