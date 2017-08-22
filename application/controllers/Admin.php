<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     * 
     * 
     * 
     */
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('registration_model');
        $this->load->model('account_model');

        $this->load->library('session');

        // Your own constructor code
    }
    public function index() {
        $this->load->view("login");
    }
    public function dashboard() {
      $result=$this->session->get_userdata('login');
      
      
      
      if(isset($result)&&  count($result)>1)
      {
        $this->load->view("index");
      }
      else
      {
          $this->load->view("login");
      }
        
    }
    public function registration() {
         $result=$this->session->get_userdata('login');
      
      
      
      if(isset($result)&&  count($result)>1)
      {
        $this->load->view('registration');
    }
    else
    {
         $this->load->view('login');
    }
    }
    public function api_registerDriver() {
        $data = $result = array();
        $status = $type = $message = '';
        $count = 0;
        // $data['key'] = $this->isValidKey($this->input->get_post('key'));
        $data['key'] = TRUE;
        $data['format'] = $this->input->get_post('format');
        if ($data['key'] == TRUE) {
            // $password = random_string('alnum', 8);
            $arrdata = array(
                'driver_id' => $this->input->get_post('driver_id'),
                'firstname' => $this->input->get_post('firstname'),
                'lastname' => $this->input->get_post('lastname'),
                'midlename' => $this->input->get_post('midlename'),
                'mobile_no' => $this->input->get_post('mobile_no'),
                'dob' => $this->input->get_post('dob'),
                'gender' => $this->input->get_post('gender'),
                'Expirience_year' => $this->input->get_post('Expirience_year'),
                'license_no' => $this->input->get_post('license_no'),
                'Expiry_date' => $this->input->get_post('Expiry_date'),
                'state' => $this->input->get_post('state'),
                'city' => $this->input->get_post('city'),
                'otherAddresss_aria' => $this->input->get_post('otherAddresss_aria'),
                'dirver_photo' => $this->input->get_post('dirver_photo'),
                'address_proof' => $this->input->get_post('address_proof'),
                'photo_id' => $this->input->get_post('photo_id'),
            );

            $carid = $this->registration_model->addDriverDetails($arrdata);
            if ($carid > 0) {
                $driverdetails = $this->registration_model->getDriverInfoById($carid);
                $count = count($driverdetails);
                $status = 'success';
                $result = $driverdetails;
                $message = 'Driver registered successfully';
            } else {
                $status = 'failed';
                $message = 'Driver not registered';
            }
            $type = 'registerclient';
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
    public function api_registerCar() {
        $data = $result = array();
        $status = $type = $message = '';
        $count = 0;
        // $data['key'] = $this->isValidKey($this->input->get_post('key'));
        $data['key'] = TRUE;
        $data['format'] = $this->input->get_post('format');
        if ($data['key'] == TRUE) {
            // $password = random_string('alnum', 8);
            $arrdata = array(
                'name' => $this->input->get_post('name'),
                'model_no' => $this->input->get_post('model_no'),
                'no_of_seat' => $this->input->get_post('no_of_seat'),
                'category' => $this->input->get_post('category'),
                'passing_no' => $this->input->get_post('passing_no'),
                'passing_type' => $this->input->get_post('passing_type'),
                'ac_type' => $this->input->get_post('ac_type'),
                'passing_expiery_date' => $this->input->get_post('passing_expiery_date'),
                'Ensurance_no' => $this->input->get_post('Ensurance_no'),
                'ensurance_expiry_date' => $this->input->get_post('ensurance_expiry_date'),
                'car_photo' => $this->input->get_post('car_photo'),
                'driver_id' => $this->input->get_post('driver_id')
            );


            $carid = $this->registration_model->addCarDetails($arrdata);
            if ($carid > 0) {
                $driverdetails = $this->registration_model->getCarInfoById($carid);
                $count = count($driverdetails);
                $status = 'success';
                $result = $driverdetails;
                $message = 'Car registered successfully';
            } else {
                $status = 'failed';
                $message = 'Car not registered';
            }
            $type = 'registerclient';
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
    public function api_login() {
 
        $data = $result = array();
        $status = $type = $message = '';
        $count = 0;
        $data['key'] = TRUE;
        $data['format'] = $this->input->get_post('format');
        $username = $this->input->get_post('username');
        $password = $this->input->get_post('password');
        if ($data['key'] == TRUE) {
            $result = $this->account_model->isUserExists($username, $password);
            if (count($result) > 0) {
                $status = 'Success';
                $type = 'api_login';
                $message = 'Login successfully';
                $count = count($result);
        
                
                $this->session->set_userdata('login',$result[0]);
               
               
               // $this-> session_write_close();
                //$this->session->session_write_close();
            }
            else
            {
                $status = 'failed';
                $type = 'api_login';
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
    public function logout()
    {
       $data = $result = array();
       $status = $type = $message = '';
       $count = 0;
       $data['key'] = TRUE;
       $data['format'] = $this->input->get_post('format');
       
        if ($data['key'] == TRUE) {
            
            
                $this->session->unset_userdata('login');
                
        $this->load->view("login");
               
            
        }
        
    }

}
