<?php
class Administrator extends CI_Controller{
    function __construct(){
        parent:: __construct();
        $this->load->model('m_login');
    }
    function index(){
        $this->load->view('admin/v_login');
    }
    function auth(){
        $username=strip_tags(str_replace("'", "", $this->input->post('username')));
        $password=strip_tags(str_replace("'", "", $this->input->post('password')));

        $u=$username;
        $p=$password;

        $cadmin=$this->m_login->cekadmin($u,$p);
      

        if($cadmin->num_rows > 0 ){
         $this->session->set_userdata('masuk',true);
         $this->session->set_userdata('user',$u,$ug,$us);
         $xcadmin=$cadmin->row_array();
     
         if($xcadmin['pengguna_level']=='1')
            $this->session->set_userdata('akses','1');
            $idadmin=$xcadmin['pengguna_id'];
            $user_nama=$xcadmin['pengguna_nama'];
            $this->session->set_userdata('idadmin',$idadmin);
            $this->session->set_userdata('nama',$user_nama);
         if($xcadmin['pengguna_level']=='2'){
             $this->session->set_userdata('akses','2');
             $idadmin=$xcadmin['pengguna_id'];
             $user_nama=$xcadmin['pengguna_nama'];
             $this->session->set_userdata('idadmin',$idadmin);
             $this->session->set_userdata('nama',$user_nama);
         } 
         if($xcadmin['pengguna_level']=='3'){
             $this->session->set_userdata('akses','3');
             $idadmin=$xcadmin['pengguna_id'];
             $user_nama=$xcadmin['pengguna_nama'];
             $this->session->set_userdata('idadmin',$idadmin);
             $this->session->set_userdata('nama',$user_nama);
         }//Front Office
         if($xcadmin['pengguna_level']=='4'){
             $this->session->set_userdata('akses','4');
             $idadmin=$xcadmin['pengguna_id'];
             $user_nama=$xcadmin['pengguna_nama'];
             $this->session->set_userdata('idadmin',$idadmin);
             $this->session->set_userdata('nama',$user_nama);
         }
           
         
         
        }
        
        if($this->session->userdata('masuk')==true && ('akses')==1){
            redirect('administrator/berhasillogin');
        }elseif($this->session->userdata('masuk')==true && ('akses')==2){
            redirect('administrator/berhasil_login_kepsek');}
            elseif($this->session->userdata('masuk')==true && ('akses')==3){
            redirect('administrator/berhasil_login_guru');}
            elseif($this->session->userdata('masuk')==true && ('akses')==4){
            redirect('administrator/berhasil_login_siswa');}
            else{
            redirect('administrator/gagallogin');
        }
    }
        function berhasillogin(){
            redirect('admin/dashboard');
        }

function berhasil_login_kepsek(){
            redirect('kepsek_khusus_dahboard');
        }

        function berhasil_login_gugu(){
            redirect('guru_khusus_dashboard');
        }

        function berhasil_login_siswa(){
            redirect('admin/dashboard');
        }

        function gagallogin(){
            $url=base_url('administrator');
            echo $this->session->set_flashdata('msg','<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert"><span class="fa fa-close"></span></button> Username Atau Password Salah</div>');
            redirect($url);
        }
        function logout(){
            $this->session->sess_destroy();
            $url=base_url('administrator');
            redirect($url);
        }
}