<?php
class Marcas extends CI_Controller{

    private $detalle_view;
    private $recs;
    private $con;

    function __construct(){
        parent::__construct();
        $this->detalle_view = new stdClass;
        $this->load->model('marcas_model');
        $this->recs     = 0;  
    }

    public function index(){
        $con = $this->marcas_model->detalle(0);
        //$this->recs        = $id_item;
        //$consulta = $this->marcas_model->listaMarcas();
        $this->maestroDetalle($con);

    }

    public function maestroDetalle($det){
        $consulta = $this->marcas_model->listaMarcas();
        $data = array(
            //'lista' => $consulta -- este se uso anteriormente
            'header'=>'section/header',
            'sidebar'=>'section/sidebar',
            'content'=> 'marcas/maestroDetalle_view',
            'consulta' => $consulta,
            'det' => $det
        );
        $this->load->view('master/master', $data);
    }

    public function detalle($valor){
        $con = $this->marcas_model->detalle($valor);
        //$this->recs        = $id_item;
        //$consulta = $this->marcas_model->listaMarcas();
        $this->maestroDetalle($con);
        
    }

    public function insertar()
    {
        $marca = $this->input->get('marca');
        $fecha = $this->input->get('fecha');
        $propietario = $this->input->get('propietario');
        $resultado = $this->marcas_model->insertarMarcas($marca, $fecha, $propietario);
        if($resultado=1){
            redirect('/marcas', 'refresh');
        }
    }

    
}

?>