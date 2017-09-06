<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Ride_model
 *
 * @author Geneka Technologies2
 */
class Ride_model extends CI_Model {

    //put your code here
    public function __construct() {
        $this->load->database();
    }

    public function addRide($insertArray) {
        $data = array(
            's_langitude' => '',
            's_latitude' => '',
            'd_langitude' => '',
            'd_latitude' => '',
            'BokingTime' =>  date('Y-m-d H:i:s'),
            'client_id' => '',
            'Driver_id' => '',
            'distance' => '',
            'amount' => '',
            'status' => 'P',
            'vehicle_id' => '',
            'ride_type' => '',
            'ride_datetime' => '',
        );
        $data = array_merge($data, $insertArray);
        extract($data);
        $data1 = array(
            's_langitude' => $s_langitude,
            's_latitude' => $s_latitude,
            'd_langitude' => $d_langitude,
            'd_latitude' => $d_latitude,
            'BokingTime' => $BokingTime,
            'client_id' => $client_id,
            'Driver_id' => $Driver_id,
            'distance' => $distance,
            'amount' => $amount,
            'status' => $status,
            'vehicle_id' => $vehicle_id,
            'ride_type' => $ride_type,
            'ride_datetime' => $ride_datetime,
        );
        $this->db->insert('ride_master', $data1);
        $newid = $this->db->insert_id();
        return $newid;
    }

    public function getRide($rideID) {
        $this->db->where('id', $rideID);
        $query = $this->db->get('ride_master');
        $result = $query->result();
        //Free Memory for resource id
        $query->free_result();
        return $result;
    }

    public function updateRideStatus($id, $status) {
        $data = array(
            'status' => $status,
        );
        $this->db->where('id', $id);
        $this->db->update('ride_master', $data);
        return $this->getRide($id);
        
    }

}
