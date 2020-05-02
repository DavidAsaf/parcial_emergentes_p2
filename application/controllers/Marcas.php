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
        $archivo = file('content/filter/black_list.txt');
        $encontrado = 0;

        foreach ($archivo as $linea) {

            if (strpos($marca, ' ' . trim($linea) . ' ') !== false) {
                $encontrado = 1;
                break;
            } elseif (strpos($fecha, ' ' . trim($linea) . ' ') !== false) {
                $encontrado = 1;
                break;
            } elseif (strpos($propietario, ' ' . trim($linea) . ' ') !== false) {
                $encontrado = 1;
                break;
            }
        }

        if ($encontrado == 1) {
            echo '<script language="javascript">alert("Hey! No te pases de listo.");</script>';
            redirect('/marcas', 'refresh');
        } else {
            $imagen = $_FILES["imagen"]["name"];
            $temporal = $_FILES["imagen"]["tmp_name"];
            move_uploaded_file($temporal, "content/img/" . $imagen);
            $resultado = $this->marcas_model->insertarMarcas($marca, $fecha, $propietario, $imagen);
            if ($resultado = 1) {
                redirect('/marcas', 'refresh');
            }
        }
        fclose($archivo);
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

    public function editarmarca() {
        $idMarca = $this->input->post('eidmarca');
        $marca = $this->input->post('emarca');
        $fecha = $this->input->post('efecha');
        $propietario = $this->input->post('epropietario');
        $archivo = file('content/filter/black_list.txt');
        $encontrado = 0;

        foreach ($archivo as $linea) {

            if (strpos($marca, ' ' . trim($linea) . ' ') !== false) {
                $encontrado = 1;
                break;
            } elseif (strpos($fecha, ' ' . trim($linea) . ' ') !== false) {
                $encontrado = 1;
                break;
            } elseif (strpos($propietario, ' ' . trim($linea) . ' ') !== false) {
                $encontrado = 1;
                break;
            }
        }

        if ($encontrado == 1) {
            echo '<script language="javascript">alert("Hey! No te pases de listo.");</script>';
            redirect('/marcas', 'refresh');
        } else {
            $imagen = $_FILES["eimagen"]["name"];
            $temporal = $_FILES["eimagen"]["tmp_name"];
            move_uploaded_file($temporal, "content/img/" . $imagen);
            $resultado = $this->marcas_model->editandoMarcas($idMarca, $marca, $fecha, $propietario, $imagen);
            if ($resultado = 1) {
                redirect('/marcas', 'refresh');
            }
        }
        fclose($archivo);
    }

    public function eliminarmarca($id_marca) {
        $retorno = $this->marcas_model->comprobacion($id_marca);
        if ($retorno < 1) {
            echo '<script language="javascript">alert("No se puede eliminar, porque en un registro maestro que posee detalles.");</script>';
            redirect('/marcas', 'refresh');
        } else {
            try {
                $this->marcas_model->eliminarMarca($id_marca);
                redirect('/marcas', 'refresh');
            } catch (PDOException $e) {
                echo '<script language="javascript">alert("No se puede eliminar, porque en un registro maestro que posee detalles.");</script>';
            }
        }
    }

    public function eliminarEstilo($id_estilo) {
        $resultado = $this->marcas_model->eliminarEstilo($id_estilo);
        redirect('/marcas', 'refresh');
    }

}

?>