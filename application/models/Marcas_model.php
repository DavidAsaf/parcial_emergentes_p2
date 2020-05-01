<?php
class Marcas_model extends CI_Model{

    function __construct(){
        parent ::__construct();
        $this->order = 'DESC';
        $this->id    = 'idEstilo';
    }

    public function listaMarcas(){
        $consulta = $this->db->get('marcas');
        return $consulta->result();
    }

    public function insertarMarcas($marca, $fecha, $propietario, $imagen)
    {
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

    function detalle($id_item)
    {
        $this->db->order_by($this->id, $this->order);
        $this->db->where('estilos.idMarca', $id_item);
        return $this->db->get('estilos')->result();
    }
    
}


?>