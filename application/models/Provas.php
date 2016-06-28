<?php
class Provas extends CI_Model {

	var $table    = 'provas';

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function save($data)
    {
        try {
            $sql = "INSERT INTO ".$this->table."
                        (usuario_id, data, categoria_id)
                    VALUES
                        ('".$data['usuario_id']."', '".$data['data']."', '".$data['categoria_id']."');";

            $this->db->query($sql);

            return $this->db->insert_id();
        } catch (Exception $e) {
            return FALSE;
        }
    }

    function find($data)
    {
        try {
            $sql = "SELECT * FROM ".$this->table." where id = '".$data['id']."' LIMIT 1;";
            $query = $this->db->query($sql); 
            return $query->result();
        } catch (Exception $e) {
            return FALSE;
        }
    }

}