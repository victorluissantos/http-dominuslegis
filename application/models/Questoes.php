<?php
class Questoes extends CI_Model {

	var $table    = 'questoes';

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

    function buildRandNQuestions($disciplina_id, $quantidade, $nivel = 1)
    {
        try {
            $sql = "SELECT * FROM ".$this->table." WHERE disciplina_id = ".$disciplina_id." AND nivel = ".$nivel." ORDER BY RAND() LIMIT ".$quantidade;
            $query = $this->db->query($sql); 
            return $query->result();
        } catch (Exception $e) {
            return FALSE;
        }
    }

    function findById($id)
    {
        try {
            $sql = "SELECT * FROM ".$this->table." WHERE id = ".$id;
            $query = $this->db->query($sql); 
            return $query->result();
        } catch (Exception $e) {
            return FALSE;
        }
    }


}