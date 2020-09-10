<?php
class User_model extends CI_Model {

        public function __construct()
        {
        parent::__construct();
        }
        public function index()
        {

        } 

    public function create()
	{

		$insert_data = array(
                            'usr_firstName'                     => $this->input->post('usr_fname'),
                            'usr_lastName'          	        => $this->input->post('usr_lname'),  
                            'usr_email'   		                => $this->input->post('usr_email'),  
                            'usr_zipCode' 		                => $this->input->post('usr_zip_code'),
                            'usr_noOfGuest'		                =>$this->input->post('usr_no_guest'),
                            'usr_sub_seasonTicketWaitlist'	    =>$this->input->post('seasonTicketWaitlist'),
                            'usr_sub_womensClub'                =>$this->input->post('womensClub'),
                            'usr_sub_offers'                    =>$this->input->post('offers'),
                'usr_sub_saluteMilitaryAppreciationClub'        =>$this->input->post('saluteMilitaryAppreciationClub'),
                'usr_status'                                    =>1
                             );

            $status = $this->db->insert('user', $insert_data);
            if($status == true)
            {
            $insert_id = $this->db->insert_id();
                if(!empty($this->input->post('registration[guests]')))
                {
                    foreach ($this->input->post('registration[guests]') as $key => $value)
                    {
                        if($value['firstName'] != '')
                        {
                            $data['frnd_user_id'] = $insert_id ;
                            $data['frnd_fname']   = $value['firstName'];
                            $data['frnd_lname']   = $value['lastName'];
                            $data['frnd_email']   = $value['email'];
                            $this->db->insert('friend', $data);

                            $result =  $this->sendEmail($data['frnd_email'],$data,2);
                        }
            
                     }

                 }
                 
                  $toEmail = $this->input->post('usr_email');
                  $result =  $this->sendEmail($toEmail,$insert_data,1);
                   return $insert_id;
                        }
            
            
	}

    public function getData($guestId)
    {

        $this->db->where('user_id',$guestId);
        $query= $this->db->get('user');
        return $query->result();
    }

     public  function sendEmail($email,$data,$tempType)
        {

         // $toEmail =  $this->input->post('usr_email');
                      $this->load->library('email');
                      $this->email->set_newline('\r\n');
                      $this->email->set_mailtype("html");
                      $this->email->from('sang.kri.cs155@gmail.com','Sangita');
                      $this->email->to($email);
                      $this->email->subject("Redskins Training Camp Pass");
                      if($tempType == 1)
                      {
                        $body    =  $this->load->view('emails/user_email',$data, true);
                      }
                      else
                      {
                        $body    =  $this->load->view('emails/user_guest',$data, true);
                      }
          
                      $this->email->message($body);
                      $this->email->set_newline("\r\n");
                      $result = $this->email->send();
                      return $result ;

        }

}
?>