<html>
    <head>
        <title>1st Lab, Comp 3</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <style>
            body{
                background: #ad5389;
                background: -webkit-linear-gradient(to right, #3c1053, #ad5389);
                background: linear-gradient(to right, #3c1053, #ad5389);
            }
            #helpString{
                font-size: 0.9rem !important;
            }
        </style>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>
    <body>     
        <nav class="navbar navbar-expand-md navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ml-auto">
                        <a class="nav-item nav-link" href="<?php echo base_url('Parte1'); ?>">Parte 1</a>
                        <a class="nav-item nav-link" href="<?php echo base_url('Parte2'); ?>">Parte 2</a>
                    </div>
                </div>
            </div>

        </nav>
        <?php
        $this->load->view($content);
        ?>
    </body>
</html>
