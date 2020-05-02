<?php

class Marcas extends CI_Controller {

    private $detalle_view;
    private $recs;
    private $con;

    function __construct() {
        parent::__construct();
        $this->detalle_view = new stdClass;
        $this->load->model('marcas_model');
        $this->recs = 0;
    }

    public function index() {
        $con = $this->marcas_model->detalle(0);
        $this->maestroDetalle($con);
    }

    public function maestroDetalle($det) {
        $consulta = $this->marcas_model->listaMarcas();
        $data = array(
            //'lista' => $consulta -- este se uso anteriormente
            'header' => 'section/header',
            'sidebar' => 'section/sidebar',
            'content' => 'marcas/maestroDetalle_view',
            'consulta' => $consulta,
            'det' => $det
        );
        $this->load->view('master/master', $data);
    }

    public function detalle($valor) {
        $con = $this->marcas_model->detalle($valor);
        $this->maestroDetalle($con);
    }

    public function insertar() {
        $marca = $this->input->post('marca');
        $fecha = $this->input->post('fecha');
        $propietario = $this->input->post('propietario');
        $imagen = $_FILES["imagen"]["name"];
        $temporal = $_FILES["imagen"]["tmp_name"];
        move_uploaded_file($temporal, "content/img/" . $imagen);
        $resultado = $this->marcas_model->insertarMarcas($marca, $fecha, $propietario, $imagen);
        if ($resultado = 1) {
            redirect('/marcas', 'refresh');
        }
    }
    
    public function insertardetalle() {
        $marca = $this->input->post('cbmarcas');
        $estilo = $this->input->post('estilo');
        $fechacreacion = $this->input->post('fechacreacion');
        $fechalanzamiento = $this->input->post('fechalanzamiento');
        $disenador = $this->input->post('disenador');
        $resultado = $this->marcas_model->insertaEstilos($marca, $estilo, $fechacreacion, $fechalanzamiento, $disenador);
        if ($resultado = 1) {
            redirect('/marcas', 'refresh');
        }
    }

    public function eliminarmarca($id_marca) {
        $resultado = $this->marcas_model->eliminarmarca($id_marca);

        redirect('/marcas', 'refresh');
    }

    

}

?>