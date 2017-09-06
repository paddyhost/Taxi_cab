<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Vehicle_Model
 *
 * @author Geneka Technologies2
 */
class Vehicle_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function getNearVehicles($lan, $lat) {

        $sql = "SELECT vehicle_master.* ,vehicle_master_id, ( 3959 * aco.*,s( cos( radians(" . $lat . ") ) * cos( radians( latitude ) ) * cos( radians( langitude ) - radians(" . $lan . ") ) + sin( radians(" . $lat . ") ) * sin( radians( latitude ) ) ) ) AS distance FROM vehicle_location LEFT JOIN vehicle_master ON (vehicle_master_id=id) LEFT JOIN driver_detilas  ON (driver_detilas.driver_id=vehicle_master.driver_id ) HAVING distance < 25 ORDER BY distance LIMIT 0 , 20";
        $query = $this->db->query($sql);
        $result = $query->result();
        //Free Memory for resource id
        $query->free_result();
        return $result;
    }

    public function updateVehicleLoaction($insertArray) {


        $data = array(
            'latitude' => '',
            'langitude' => '',
            'vehicle_master_id' => ''
        );
        $data = array_merge($data, $insertArray);
        extract($data);
        $data1 = array('latitude' => $latitude,
            'langitude' => $langitude,
            'vehicle_master_id' => $vehicle_master_id);


        $this->db->replace('vehicle_location', $data1);
        $this->db->select('*');
        $this->db->from('vehicle_location');
        $this->db->where('vehicle_master_id', $vehicle_master_id);
        $query = $this->db->get();
        $result = $query->result();
        //Free Memory for resource id
        $query->free_result();
        return $result;
    }

}
