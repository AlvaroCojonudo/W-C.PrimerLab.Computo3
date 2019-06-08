<?php

class InsertData extends CI_Controller {

    public $tipo = [
        'identity' => 'tipo de gasto',
        'Alimentacion',
        'Transporte',
        'Estudios'
    ];
    public $id_user = [
        'identity' => 'id de usuarios',
        1,
        2,
        3,
        4
    ];
    public $costos = [
        'identity' => 'costos',
        'min' => 0.50,
        'max' => 5.00,
        'moda' => 2.00
    ];
    public $fechas = [
        'identity' => 'rango de fechas',
        'min' => '12-02-2019',
        'max' => '07-06-2019',
        'ignore' => [
            'saturday',
            'sunday'
        ]
    ];
    public $hora = [
        'identity' => 'rango de horas de insercion',
        'min' => '18:16:00',
        'max' => '22:55:00'
    ];

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        echo 'aqui va el index de la api';
    }

    public function show() {
        $variables = [
            $this->tipo,
            $this->id_user,
            $this->costos,
            $this->fechas,
            $this->hora
        ];
        foreach ($variables as $value) {
            echo '<h3 style="margin-top: 25px;">' . $value['identity'] . '</h3>';
            echo '<table border="1">'
            . '<tbody>';
            foreach ($value as $key => $contenido) {
                if ($key !== 'identity') {
                    if (is_array($contenido)) {
                        foreach ($contenido as $key2 => $contenidos) {
                            echo '<tr>'
                            . '<td>'
                            . $key2
                            . '</td>'
                            . '<td>'
                            . $contenidos
                            . '</td>'
                            . '</tr>';
                        }
                    } else {
                        echo '<tr>'
                        . '<td>'
                        . $key
                        . '</td>'
                        . '<td>'
                        . $contenido
                        . '</td>'
                        . '</tr>';
                    }
                }
            }
            echo '</tbody>'
            . '</table><hr/>';
        }
    }

}
