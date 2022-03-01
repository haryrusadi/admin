<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

         function __construct() {
   	     parent::__construct();
   	     $this->load->model('m_user');
         }

   function index(){
        
        if($this->session->userdata('is_login')==TRUE)
          {
          redirect('dashboard');
          }
          // $data['_view'] = 'form_login';
          $this->load->view('form_login');
    
  }
  
  }

  function login_proses() {

  $this->form_validation->set_rules('email', 'E-mail', 'trim|required|min_length[3]|max_length[45]');
  $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]|max_length[12]');

    if ($this->form_validation->run() == TRUE) {
    	
          if($this->m_user->m_cek_mail()->num_rows()==1) {
          
             $db=$this->m_user->m_cek_mail()->row();
             if(hash_verified($this->input->post('password'),$db->password)) {

                     $data_login=array('is_login'=>TRUE,
                             'email'  =>$db->email,
                             'username'   =>$db->username);
             
                     $this->session->set_userdata($data_login);
                     redirect('user/securepage','refresh');

                        } else {

                        $this->session->set_flashdata('pesan', 'Login gagal: password salah!');
                        redirect('/','refresh');

                        }

          } else { // jika email tidak terdaftar!
           
           $this->session->set_flashdata('pesan', 'Login gagal: email salah!');
           redirect('/','refresh');

          }

    } else { 

    	$this->load->view('form_login');
    }

  }



  //  function logout() {

  //   $this->session->unset_userdata('is_login');
  //   $this->session->unset_userdata('username');
  //   $this->session->unset_userdata('email');

  //   session_destroy();
  //   //$this->session->set_flashdata('pesan', 'Sign Out Berhasil!');
  //   redirect('/','refresh');
  // }

// }

/* End of file User.php */
/* Location: ./application/controllers/User.php */