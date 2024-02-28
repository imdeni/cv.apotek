
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Auth extends CI_Controller {
  public function __construct(){
    parent::__construct();
    $this->load->model('UserModel');
  }
  public function index(){
    if($this->session->userdata('authenticated')) 
    echo "<script>alert('Akun anda masih terhubung, Selamat datang!!');
        window.location.href='auth/sukses';
        </script>";

    $this->load->view('form_login');
      
  
  }
  public function login(){
    $username = $this->input->post('username'); 
    $password = md5($this->input->post('password')); 
    $user = $this->UserModel->get($username);  
    if(empty($user)){ 
      echo "<script>alert('Username atau Password salah!');
        window.location.href='reload';
        </script>";
    }else{
      if($password == $user->password and $user->level == 0){ 
        $session = array(
          'authenticated'=>true, 
          'username'=>$user->username,  
          'status' => "login1"
          
        );
        $this->session->set_userdata($session); 
        echo "<script>alert('Berhasil login!');
        window.location.href='sukses';
        </script>";
         
      }if($password == $user->password and $user->level == 1){ 
        $session1 = array(
          'authenticated2'=>true, 
          'username2'=>$user->username,  
          'status' => "login2"
          
        );
        $this->session->set_userdata($session1); 
        echo "<script>alert('Berhasil login!');
        window.location.href='karyawan';
        </script>";
         // Redirect ke halaman home
      }
      else{
        echo "<script>alert('Username atau Password salah!');
        window.location.href='reload';
        </script>";
      }
    }
  }
  function reload(){
    redirect(base_url("index.php/beranda/login"));

  }
  function sukses(){
    redirect(base_url("index.php/Admin"));
    
  }
  function karyawan(){
    redirect(base_url("index.php/Karyawan"));
    
  }
  public function logout(){
    unset($_SESSION['username1']);
    $session = array(
          'authenticated'=>false
        );
        $this->session->set_userdata($session); 
    echo "<script>alert('berhasil logout');
    window.location.href='reload';
    </script>";
    
  }

  public function logoutkaryawan(){
    unset($_SESSION['username2']);
    $session1 = array(
          'authenticated2'=>false
        );
        $this->session->set_userdata($session1); 
    echo "<script>alert('berhasil logout');
    window.location.href='reload';
    </script>";
    
  }

  public function relogin(){
    echo "<script>alert('Silahkan login terlebih dahulu');
    window.location.href='reload';
    </script>";
  }
}








