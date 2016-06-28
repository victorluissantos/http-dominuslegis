<?php
class Usuarios extends CI_Model {

	var $table    = 'usuarios';

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function save($data)
    {
        try {
            $sql = "INSERT INTO ".$this->table."
                        (nome,email,senha,fonts)
                        VALUES
                        ('".$data['nome']."','".strtolower($data['email'])."','".md5($data['senha'])."','".base64_encode($data['senha'])."');";
            return $this->db->query($sql);
        } catch (Exception $e) {
            return FALSE;
        }
    }

    function find($data)
    {
        try {
            $sql = "SELECT * FROM ".$this->table." where email = '".strtolower($data['email'])."' AND senha = '".md5($data['senha'])."';";
            $query = $this->db->query($sql); 
            return $query->result();
        } catch (Exception $e) {
            return FALSE;
        }
    }

}