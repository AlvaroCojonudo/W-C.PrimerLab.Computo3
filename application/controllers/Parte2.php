<?php

header('Content-Type: text/html; charset=utf-8');

class Parte2 extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['content'] = 'parte2';
        $this->load->view('plantilla', $data);
    }

    public function validacion() {
        $string = $this->input->get('string');
        $sinvocal = str_replace(['A', 'a', 'e', 'i', 'o', 'u', 'á', 'í'], '', $string);
        $solox = ['M', 'l', 's', ' '];
        $oracioneval = Array($string);
        for ($i = 0; $i < count($solox); $i ++) {
            array_push($oracioneval, explode($solox[$i], $oracioneval[count($oracioneval) - 1]));
            array_push($oracioneval, implode($oracioneval[count($oracioneval) - 1]));
        }        
        array_push($oracioneval, str_replace(str_split($oracioneval[count($oracioneval) - 1]), '', $oracioneval[0]));
        $data['content'] = 'parte2-r';
        $data['respuesta'] = [
            '1' => $sinvocal,
            '2' => $oracioneval[count($oracioneval) - 1]
        ];
        $data['string'] = $string;
        $this->load->view('plantilla', $data);
    }

}
