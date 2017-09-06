<?php

class Registration_Model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function addDriverDetails($insertArray) {

        $data = array(
            'driver_id' => '',
            'firstname' => '',
            'lastname' => '',
            'midlename' => '',
            'mobile_no' => '',
            'dob' => '',
            'gender' => '',
            'Expirience_year' => '',
            'license_no' => '',
            'Expiry_date' => '',
            'state' => '',
            'city' => '',
            'otherAddresss_aria' => '',
            'dirver_photo' => '',
            'address_proof' => '',
            'photo_id' => '',
            'password' => '521521521',
        );
        $data = array_merge($data, $insertArray);
        extract($data);
        $data1 = array(
            'driver_id' => $driver_id,
            'firstname' => $firstname,
            'lastname' => $lastname,
            'midlename' => $midlename,
            'mobile_no' => $mobile_no,
            'dob' => $dob,
            'gender' => $gender,
            'Expirience_year' => $Expirience_year,
            'license_no' => $license_no,
            'Expiry_date' => $Expiry_date,
            'state' => $state,
            'city' => $city,
            'otherAddresss_aria' => $otherAddresss_aria,
            'dirver_photo' => $dirver_photo,
            'address_proof' => $address_proof,
            'photo_id' => $photo_id,
            'password' => $password,
        );

        $id = $this->db->insert('driver_detilas', $data1);
        $newid = $this->db->insert_id();
        return $newid;
    }

    public function isDriverExist($driverMobile, $password) {

        $this->db->select('*');
        $this->db->from('driver_detilas dr');
        $this->db->where('password', $password);
        $this->db->where('mobile_no', $driverMobile);
        $this->db->join('vehicle_master vm', 'dr.driver_id = vm.driver_id', 'left');
        $query = $this->db->get();
        $result = $query->result();
        //Free Memory for resource id
        $query->free_result();

        return $result;
    }

    public function getDriverList() {
        $query = $this->db->get('driver_detilas');
        $result = $query->result();
        //Free Memory for resource id
        $query->free_result();
        return $result;
    }

    public function getDriverInfoById($driver_id) {
        $this->db->where('driver_id', $driver_id);
        $query = $this->db->get('driver_detilas');
        $result = $query->result();
        //Free Memory for resource id
        $query->free_result();
        return $result;
    }

    public function addCarDetails($insertArray) {

        $data = array(
            'name' => '',
            'model_no' => '',
            'no_of_seat' => '',
            'category' => '',
            'passing_no' => '',
            'passing_type' => '',
            'ac_type' => '',
            'passing_expiery_date' => '',
            'Ensurance_no' => '',
            'ensurance_expiry_date' => '',
            'car_photo' => '',
            'driver_id' => ''
        );
        $data = array_merge($data, $insertArray);
        extract($data);


        $data1 = array(
            'name' => $name,
            'model_no' => $model_no,
            'no_of_seat' => $no_of_seat,
            'category' => $category,
            'passing_no' => $passing_no,
            'passing_type' => $passing_type,
            'ac_type' => $ac_type,
            'passing_expiery_date' => $passing_expiery_date,
            'Ensurance_no' => $Ensurance_no,
            'ensurance_expiry_date' => $ensurance_expiry_date,
            'car_photo' => $car_photo,
            'driver_id' => $driver_id,
        );


        $id = $this->db->insert('vehicle_master', $data1);
        $newid = $this->db->insert_id();
        return $newid;
    }

    public function getCarList() {
        $query = $this->db->get('vehicle_master');
        $result = $query->result();
        //Free Memory for resource id
        $query->free_result();
        return $result;
    }

    public function getCarInfoById($car_id) {

        $this->db->where('id', $car_id);
        $query = $this->db->get('vehicle_master');
        $result = $query->result();

        //Free Memory for resource id
        $query->free_result();
        return $result;
    }

    public function residterToke($insertArray) {

        $data = array(
            'driver_Id' => '',
            'token' => '',
        );
        $data = array_merge($data, $insertArray);
        extract($data);
        $data1 = array('driver_Id' => $driver_Id,
            'token' => $token,);
        $this->db->replace('drivertokenmaster', $data1);
        $this->db->select('*');
        $this->db->from('drivertokenmaster');
        $this->db->where('driver_Id', $driver_Id);
        $query = $this->db->get();
        $result = $query->result();
        //Free Memory for resource id
        $query->free_result();
        return $result;
    }

    public function changeOnlineStatus($driverid, $status) {


        $this->db->set('status', $status);
        $this->db->where('id', $driverid);
        $this->db->update('vehicle_master'); // gives UPDATE `mytable` SET `field` = 'field+1' WHERE `id` = 2

     
                $this->db->select('*');
        $this->db->from('vehicle_master');
        $this->db->where('id', $driverid);
        $query = $this->db->get();
        $result = $query->result();
        //Free Memory for resource id
        $query->free_result();
        return $result;

        
        
    }

}
