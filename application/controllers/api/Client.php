<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Client extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('client_model');
        $this->load->model('vehicle_model');
        //       $this->load->model('account_model');
        // Your own constructor code
    }

    public function index() {
        $data = array();
        $this->load->view('webservices/clientindex', $data);
    }

    public function clientRgistration() {
        $data = $result = array();
        $status = $type = $message = '';
        $count = 0;
        // $data['key'] = $this->isValidKey($this->input->get_post('key'));
        $data['key'] = TRUE;
        $data['format'] = $this->input->get_post('format');
        $mobile = $this->input->get_post('mobile');
        if ($data['key'] == TRUE) {
            // $password = random_string('alnum', 8);
            $arrdata = array(
                'Name' => $this->input->get_post('name'),
                'Email' => $this->input->get_post('email'),
                'mobile' => $this->input->get_post('mobile'),
                'password' => $this->input->get_post('password'),
                'langitude' => $this->input->get_post('langitude'),
                'latitude' => $this->input->get_post('latitude'),
            );

            $client = $this->client_model->getClientDetailsByMobile($mobile);

            if (count($client) == 0) {
                $clientid = $this->client_model->addClientDetails($arrdata);

                if ($clientid > 0) {
                    $clientdetails = $this->client_model->getClientDetailsById($clientid);
                    $count = count($clientdetails);
                    $status = 'success';
                    $result = $clientdetails;
                    $message = 'Client registered successfully';
                } else {
                    $status = 'failed';
                    $message = 'Client not registered';
                }
            } else {
                $clientdetails = $client;
                $count = count($clientdetails);
                $status = 'success';
                $result = $clientdetails;
                $message = 'Client Already Exists';
            }
            $type = 'clientegistration';
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
            $result = $this->client_model->isClientExist($mobile, $password);
            if (count($result) > 0) {
                $status = 'Success';
                $type = 'login';
                $message = 'Login successfully';
                $count = count($result);
            } else {
                $status = 'failed';
                $type = 'login';
                $message = 'client Not exist';
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

    public function getNearVehicles() {
        $data = $result = array();
        $status = $type = $message = '';
        $count = 0;
        // $data['key'] = $this->isValidKey($this->input->get_post('key'));
        $data['key'] = TRUE;
        $data['format'] = $this->input->get_post('format');
        $langitude = $this->input->get_post('langitude');
        $latitude = $this->input->get_post('latitude');
        if ($data['key'] == TRUE) {
            $result = $this->vehicle_model->getNearVehicles($langitude, $latitude);
            if (count($result) > 0) {
                $status = 'Success';
                $type = 'getNearVehicles';
                $message = 'Vehicle Found';
                $count = count($result);
            } else {
                $status = 'failed';
                $type = 'getNearVehicles';
                $message = 'No Near Vehicle  exist';
                $count = count($result);
            }
        } else {
            $status = 'failed';
            $type = 'getNearVehicles';
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
