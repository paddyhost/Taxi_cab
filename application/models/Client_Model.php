<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Client_Model
 *
 * @author Geneka Technologies2
 */
class Client_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function addClientDetails($insertArray) {
        $data = array(
            'Name' => '',
            'Email' => '',
            'mobile' => '',
            'password' => '',
            'langitude' => '',
            'latitude' => '',
        );
        $data = array_merge($data, $insertArray);
        extract($data);
        $data1 = array(
            'Name' => $Name,
            'Email' => $Email,
            'mobile' => $mobile,
            'password' => $password,
            'langitude' => $langitude,
            'latitude' => $latitude,
        );

        $id = $this->db->insert('client_table', $data1);
        $newid = $this->db->insert_id();
        return $newid;
    }

    public function getClientDetailsById($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('client_table');
        $result = $query->result();
        //Free Memory for resource id
        $query->free_result();
        return $result;
    }

    public function getClientDetailsByMobile($mobile) {
        $this->db->where('mobile', $mobile);
        $query = $this->db->get('client_table');
        $result = $query->result();
        //Free Memory for resource id
        $query->free_result();
        return $result;
    }
    
    public function isClientExist($mobile, $password) {


        $this->db->where('mobile', $mobile);
        
        $this->db->where('password', $password);
        $query = $this->db->get('client_table');
        $result = $query->result();
        //Free Memory for resource id
        $query->free_result();

        return $result;
    }

    //put your code here
}
