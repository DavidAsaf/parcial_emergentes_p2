<?php

class Marcas_model extends CI_Model {

    function __construct() {
        parent ::__construct();
        $this->order = 'DESC';
        $this->id = 'idEstilo';
    }

    public function listaMarcas() {
        $consulta = $this->db->get('marcas');
        return $consulta->result();
    }

    public function insertarMarcas($marca, $fecha, $propietario, $imagen) {
        $data = array(
            'nombreMarca' => $marca,
            'fechaFundacion' => $fecha,
            'propietario' => $propietario,
            'enlaceFoto' => $imagen
        );
        $this->db->insert('marcas', $data);
        $num = $this->db->affected_rows();
        return $num;
    }

    public function insertaEstilos($marca, $estilo, $fechacreacion, $fechalanzamiento, $disenador) {
        $data = array(
            'idMarca' => $marca,
            'nombreEstilo' => $estilo,
            'fechaCreacion' => $fechacreacion,
            'fechaLanzamiento' => $fechalanzamiento,
            'disenador' => $disenador
        );
        $this->db->insert('estilos', $data);
        $num = $this->db->affected_rows();
        return $num;
    }

    function detalle($id_item) {
        $this->db->order_by($this->id, $this->order);
        $this->db->where('estilos.idMarca', $id_item);
        return $this->db->get('estilos')->result();
    }

    function editarmarca($id_marca) {
        $this->db->where('marcas.id', $id_marca);
        return $this->db->get('marcas')->result();
    }

    function eliminarMarca($id_marca) {
        $num = 0;
        try {
            $this->db->where('marcas.id', $id_marca);
            $this->db->delete('marcas');
            $num = $this->db->affected_rows();
        } catch (Exception $ex) {
            
        }

        return $num;
    }

    function eliminarEstilo($id_estilo) {
        $num = 0;
        try {
            $this->db->where('estilos.idEstilo', $id_estilo);
            $this->db->delete('estilos');
            $num = $this->db->affected_rows();
        } catch (Exception $ex) {
            
        }

        return $num;
    }

}

?>