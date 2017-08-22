<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Driver extends CI_Controller{
    
    
     public function __construct()
   {
                parent::__construct();
                $this->load->helper('url');
                $this->load->model('registration_model');
                $this->load->model('account_model');
                
                // Your own constructor code
   }
   public function index() {
        $data = array();
        $this->load->view('webservices/webservice_index', $data);
    }

    public function login()
    {
        $data = $result = array();
	$status = $type = $message = ''; $count = 0;
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
    
}
