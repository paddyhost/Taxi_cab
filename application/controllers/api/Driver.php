<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Driver extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('registration_model');
        $this->load->model('account_model');
        $this->load->model('vehicle_model');
        $this->load->model('ride_model');
        
        

        // Your own constructor code
    }

    public function index() {
        $data = array();
        $this->load->view('webservices/webservice_index', $data);
    }

    public function login() {
        $data = $result = array();
        $status = $type = $message = '';
        $count = 0;
        // $data['key'] = $this->isValidKey($this->input->get_post('key'));
        $data['key'] = TRUE;
        $data['format'] = $this->input->get_post('format');
        $mobile = $this->input->get_post('mobile');
        $password = $this->input->get_post('password');
        if ($data['key'] == TRUE) {
            $result = $this->registration_model->isDriverExist($mobile, $password);
            if (count($result) > 0) {
                $status = 'Success';
                $type = 'login';
                $message = 'Login successfully';
                $count = count($result);
            } else {
                $status = 'failed';
                $type = 'login';
                $message = 'User Not exist';
                $count = count($result);
            }
        } else {
            $status = 'failed';
            $type = 'login';
            $message = 'Invalid Api Key';
            $count = 0;
        }
        $data['status'] = $status;
        $data['count'] = $count;
        $data['type'] = $type;
        $data['result'] = $result;
        $data['message'] = $message;
        $this->load->view('webservices/webservice_newclient', $data);
    }

    public function updateVehicleLocation() {

        $data = $result = array();
        $status = $type = $message = '';
        $count = 0;
        // $data['key'] = $this->isValidKey($this->input->get_post('key'));
        $data['key'] = TRUE;
        $data['format'] = $this->input->get_post('format');
        if ($data['key'] == TRUE) {
            // $password = random_string('alnum', 8);

            $arrdata = array(
                'latitude' => $this->input->get_post('latitude'),
                'langitude' => $this->input->get_post('langitude'),
                'vehicle_master_id' => $this->input->get_post('vehicle_master_id')
            );
            $vehicle = $this->vehicle_model->updateVehicleLoaction($arrdata);

            if (count($vehicle) > 0) {
                $count = count($vehicle);
                $status = 'success';
                $result = $vehicle;
                $message = 'Location Updated successfully';
            } else {
                $status = 'failed';
                $message = 'Location Not Updated';
            }
            $type = 'updateVehicleLocation';
        } else {
            $status = $type = 'error';
            $message = 'Invalid key';
        }
        $data['status'] = $status;
        $data['count'] = $count;
        $data['type'] = $type;
        $data['result'] = $result;
        $data['message'] = $message;
        $this->load->view('webservices/webservice_newclient', $data);
    }

    public function updateDriverToken() {

        $data = $result = array();
        $status = $type = $message = '';
        $count = 0;
        // $data['key'] = $this->isValidKey($this->input->get_post('key'));
        $data['key'] = TRUE;
        $data['format'] = $this->input->get_post('format');
        if ($data['key'] == TRUE) {
            // $password = random_string('alnum', 8);

            $arrdata = array(
                'driver_Id' => $this->input->get_post('driver_Id'),
                'token' => $this->input->get_post('token'),
            );
            $vehicle = $this->registration_model->residterToke($arrdata);

            if (count($vehicle) > 0) {
                $count = count($vehicle);
                $status = 'success';
                $result = $vehicle;
                $message = 'Token Registerd successfully';
            } else {
                $status = 'failed';
                $message = 'Token Not Registerd ';
            }
            $type = 'updateDriverToken';
        } else {
            $status = $type = 'error';
            $message = 'Invalid key';
        }
        $data['status'] = $status;
        $data['count'] = $count;
        $data['type'] = $type;
        $data['result'] = $result;
        $data['message'] = $message;
        $this->load->view('webservices/webservice_newclient', $data);
    }
    
    public function updateDriverState() {

        $data = $result = array();
        $status = $type = $message = '';
        $count = 0;
        // $data['key'] = $this->isValidKey($this->input->get_post('key'));
        $data['key'] = TRUE;
        $data['format'] = $this->input->get_post('format');
        if ($data['key'] == TRUE) {
            // $password = random_string('alnum', 8);
                $driver_Id = $this->input->get_post('driver_Id');
                $state = $this->input->get_post('state');
            $vehicle = $this->registration_model->changeOnlineStatus($driver_Id,$state);

            if (count($vehicle) > 0) {
                $count = count($vehicle);
                $status = 'success';
                $result = $vehicle;
                $message = 'Token Registerd successfully';
            } else {
                $status = 'failed';
                $message = 'Token Not Registerd ';
            }
            $type = 'updateDriverToken';
        } else {
            $status = $type = 'error';
            $message = 'Invalid key';
        }
        $data['status'] = $status;
        $data['count'] = $count;
        $data['type'] = $type;
        $data['result'] = $result;
        $data['message'] = $message;
        $this->load->view('webservices/webservice_newclient', $data);
    }
    
    public function getRideDetails() {
        $data = $result = array();
        $status = $type = $message = '';
        $count = 0;
        // $data['key'] = $this->isValidKey($this->input->get_post('key'));
        $data['key'] = TRUE;
        $data['format'] = $this->input->get_post('format');
        $ride_id = $this->input->get_post('ride_id');
        if ($data['key'] == TRUE) {
            $result = $this->ride_model->getRide($ride_id);
            if (count($result) > 0) {
                $status = 'Success';
                $type = 'getRideDetails';
                $message = 'Ride Found';
                $count = count($result);
            } else {
                $status = 'failed';
                $type = 'getRideDetails';
                $message = 'No Ride exist';
                $count = count($result);
            }
        } else {
            $status = 'failed';
            $type = 'getRideDetails';
            $message = 'Invalid Api Key';
            $count = 0;
        }
        $data['status'] = $status;
        $data['count'] = $count;
        $data['type'] = $type;
        $data['result'] = $result;
        $data['message'] = $message;
        $this->load->view('webservices/webservice_newclient', $data);
    }

}
