<?php
class Friend_model extends CI_Model {

        public function __construct()
        {
        parent::__construct();
         $this->load->model('User_model');
        }
        public function index()
        {

        } 

   

    public function getData($guestId)
    {

        $this->db->where('frnd_user_id',$guestId);
        $query= $this->db->get('friend');
        return $query->result();
    }

        public function saveFriend($guestId)
        {

                $updateData= array('usr_firstName' => $this->input->post('registration[primaryGuest][firstName]'));
                $this->db->where('user_id',$guestId);
                $status = $this->db->update('user',$updateData);
                foreach ($this->input->post('registration[guests]') as $key => $value)
                 {
                    if($value['firstName'] != '')
                    {
                    $data['frnd_user_id'] = $guestId ;
                    $data['frnd_fname']   = $value['firstName'];
                    $data['frnd_lname']   = $value['lastName'];
                    $data['frnd_email']   = $value['email'];
                    $this->db->insert('friend', $data);                
                    }
                 }
        return $guestId;           
        }

        public  function sendEmail($email,$data,$tempType)
        {

       //   $toEmail =  $this->input->post('usr_email');
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