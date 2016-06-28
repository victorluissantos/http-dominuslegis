<?php
class Avisos extends CI_Model {

	var $table    = 'avisos';

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
                        ('".$data['nome']."','".$data['email']."','".md5($data['senha'])."','".base64_encode($data['senha'])."');";
            return $this->db->query($sql);
        } catch (Exception $e) {
            return FALSE;
        }
    }

    function find($data)
    {
        try {
            $sql = "SELECT * FROM ".$this->table." where email = '".$data['email']."' AND senha = '".md5($data['senha'])."';";
            $query = $this->db->query($sql); 
            return $query->result();
        } catch (Exception $e) {
            return FALSE;
        }
    }

    function findAll()
    {
        try {
            $sql = "SELECT * FROM ".$this->table." ORDER BY 1 DESC;";
            $query = $this->db->query($sql); 
            return $query->result();
        } catch (Exception $e) {
            return FALSE;
        }
    }

    function findAllCurrent()
    {
        try {
            $sql = "SELECT * FROM ".$this->table." WHERE  ate >= now() ORDER BY 1 ASC;";
            $query = $this->db->query($sql); 
            return $query->result();
        } catch (Exception $e) {
            return FALSE;
        }
    }

}