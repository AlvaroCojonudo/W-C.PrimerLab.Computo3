<div class="container">
    <div class="row">
        <div class="col-lg-4 offset-lg-4">
            <div class="card mt-5 border border-warning">
                <div class="card-header bg-dark text-white">
                    <h5>Respuesta de Validación: <?php echo $string; ?></h5>
                </div>
                <div class="card-body">                    
                    <p class="lead">
                        La oracion <b>sin vocales</b> es: 
                        <?php
                        echo $respuesta[1];
                        ?>
                    </p>
                    <p class="lead">
                        La oracion solo mostrando la letra <b>'M, s, l'</b>: 
                        <?php
                        echo $respuesta[2];
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>