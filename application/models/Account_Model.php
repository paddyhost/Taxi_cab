<?php
class Account_Model extends CI_Model {

        public function __construct()
        {
                $this->load->database();

        }

        public function addUserDetails($insertArray)
        {

        		$data = array(
     		 	'user_mobile' => '',
	      	    'user_Fname' => '',
        		'user_LastName' => '',
     		 	'user_password' => '',
	      	    'user_role' => '',
        		
				);
				$data=array_merge($data,$insertArray);
				extract($data);
        		$data1 = array(
     		 	'user_mobile' => $user_mobile,
                'user_Fname' => $user_Fname,
                'user_LastName' =>$user_Fname,
                'user_password' => $user_password,
                'user_role' => $user_role,
				);

				$id=$this->db->insert('user_master', $data1);
				   $newid = $this->db->insert_id();
			return $newid;

        }

        

        public function getUserlist()
        {
        		$query = $this->db->get('user_master');
				$result = $query->result();
        		//Free Memory for resource id
		        $query->free_result();
        		return $result;
        }
		 public function isUserExists($user_moblie,$user_password)
        {
        		$this->db->where('user_mobile', $user_moblie);
                $this->db->where('user_password', $user_password);
        		$query = $this->db->get('user_master');
				$result = $query->result();
        		//Free Memory for resource id
		        $query->free_result();
        		return $result;
        }
        
 		public function addCarDetails($insertArray)
        {

        		$data = array(
     		 	'name' => '',
	      	   
     		 	
	      	    'model_no' => '',
        		'no_of_seat' => '',
     		 	'category' => '',
	      	    'passing_no' =>'' ,
        		'passing_type' => '',
     		 	'ac_type' => '',
	      	    'passing_expiery_date' => '',
        		'Ensurance_no' => '',
     		 	'ensurance_expiry_date' => '',
	      	    'car_photo' => '',
	      	    'driver_id'=>''
	      	    );
			$data=	array_merge($data,$insertArray);
			extract($data);
            $data1 = array(
        		'name'=>$name,
	      	    'model_no' => $model_no,
        		'no_of_seat' => $no_of_seat,
     		 	'category' => $category,
	      	    'passing_no' =>$passing_no ,
        		'passing_type' => $passing_type,
     		 	'ac_type' => $ac_type,
	      	    'passing_expiery_date' => $passing_expiery_date,
        		'Ensurance_no' => $Ensurance_no,
     		 	'ensurance_expiry_date' => $ensurance_expiry_date,
	      	    'car_photo' => $car_photo,
	      	    'driver_id'=>$driver_id,

        		);
			$id =$this->db->insert('vehicle_master', $data1);
			$newid = $this->db->insert_id();
			return $newid;

        }
        
		}

		



}