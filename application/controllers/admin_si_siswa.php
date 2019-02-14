<?php
class admin_si_siswa extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('logon') !=TRUE){
            $url=base_url('login_si');
            redirect($url);
        };
		
		$this->load->model('m_siswa');
		$this->load->model('m_pengguna');
		$this->load->library('form_validation');
		$this->load->model('m_kelas');
		$this->load->library('upload');
	}


	function index(){
		$x['kelas']=$this->m_kelas->get_all_kelas();
		$x['data']=$this->m_siswa->get_all_siswa();
		$this->load->view('apps/admin/v_siswa',$x);
	}
	
	function simpan_siswa(){
				$config['upload_path'] = './assets/images/'; //path folder
	            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	            $config['encrypt_name'] = TRUE; //nama yang terupload nantinya
 $cek = $this->db->query("SELECT * FROM tbl_siswa where siswa_nis='".$this->input->post('siswa_nis')."'")->num_rows();
    if ($cek<=0){
	            $this->upload->initialize($config);
	            if(!empty($_FILES['filefoto']['name']))
	            {
	                if ($this->upload->do_upload('filefoto'))
	                {
	                        $gbr = $this->upload->data();
	                        //Compress Image
	                        $config['image_library']='gd2';
	                        $config['source_image']='./assets/images/'.$gbr['file_name'];
	                        $config['create_thumb']= FALSE;
	                        $config['maintain_ratio']= FALSE;
	                        $config['quality']= '60%';
	                        $config['width']= 300;
	                        $config['height']= 300;
	                        $config['new_image']= './assets/images/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();

	                        $photo=$gbr['file_name'];
                            $nis=strip_tags($this->input->post('nis'));
                            $nama=strip_tags($this->input->post('xnama'));
                             $jenkel=strip_tags($this->input->post('xjenkel'));
                             $kelas=strip_tags($this->input->post('xkelas'));
                              $tempat_lahir=strip_tags($this->input->post('xtempat_lahir'));
                               $tgl_lahir=strip_tags($this->input->post('xtgl_lahir'));
                                $alamat=strip_tags($this->input->post('xalamat'));
                           
                             $ortu=strip_tags($this->input->post('xortu'));
                              $asal_sekolah=strip_tags($this->input->post('xasal_sekolah'));
                               $ijasah=strip_tags($this->input->post('xijasah'));
                            
                             $dataUser = array(
               'pengguna_username' => $this ->input ->post('nis'),              	
            'pengguna_nama' => $this ->input ->post('xnama'),
    		'pengguna_siswa' => $this ->input ->post('nis'),
    		'pengguna_password' => md5($this ->input ->post('nis')),
    		'pengguna_level' => '4');
        
        
        $this ->db ->insert("tbl_pengguna",$dataUser);
           
                            $this->m_siswa->simpan_siswa($nis,$nama,$jenkel,$kelas,$tempat_lahir,$tgl_lahir,$alamat,$ortu,$asal_sekolah,$ijasah,$photo);

                            

							echo $this->session->set_flashdata('msg','success');
							redirect('admin_si_siswa');
					}else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin_si_siswa');
	                }
	                 
	            }else{
	            	 $nis=strip_tags($this->input->post('nis'));
                            $nama=strip_tags($this->input->post('xnama'));
                             $jenkel=strip_tags($this->input->post('xjenkel'));
                             $kelas=strip_tags($this->input->post('xkelas'));
                              $tempat_lahir=strip_tags($this->input->post('xtempat_lahir'));
                               $tgl_lahir=strip_tags($this->input->post('xtgl_lahir'));
                                $alamat=strip_tags($this->input->post('xalamat'));
                           
                             $ortu=strip_tags($this->input->post('xortu'));
                              $asal_sekolah=strip_tags($this->input->post('xasal_sekolah'));
                               $ijasah=strip_tags($this->input->post('xijasah'));


                             $dataUser = array(
                             	 'pengguna_username' => $this ->input ->post('nis'),  
             'pengguna_nama' => $this ->input ->post('xnama'),
    		'pengguna_siswa' => $this ->input ->post('nis'),
    		'pengguna_password' => md5($this ->input ->post('nis')),
    		'pengguna_level' => '4');
        
        
        $this ->db ->insert("tbl_pengguna",$dataUser);

					$this->m_siswa->simpan_siswa_tanpa_img($nis,$nama,$jenkel,$kelas,$tempat_lahir,$tgl_lahir,$alamat,$ortu,$asal_sekolah,$ijasah);
					echo $this->session->set_flashdata('msg','success');
					redirect('admin_si_siswa');
				}
				
				 }else {  
        echo $this->session->set_flashdata('msg','Data sudah ada !!');
	redirect('admin_si_siswa');
				
	}
}
	
	function update_siswa(){
				
	            $config['upload_path'] = './assets/images/'; //path folder
	            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	            $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

	            $this->upload->initialize($config);
	            if(!empty($_FILES['filefoto']['name']))
	            {
	                if ($this->upload->do_upload('filefoto'))
	                {
	                        $gbr = $this->upload->data();
	                        //Compress Image
	                        $config['image_library']='gd2';
	                        $config['source_image']='./assets/images/'.$gbr['file_name'];
	                        $config['create_thumb']= FALSE;
	                        $config['maintain_ratio']= FALSE;
	                        $config['quality']= '60%';
	                        $config['width']= 300;
	                        $config['height']= 300;
	                        $config['new_image']= './assets/images/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();
	                        $gambar=$this->input->post('gambar');
							$path='./assets/images/'.$gambar;
							unlink($path);

	       $photo=$gbr['file_name'];
                            $nis=strip_tags($this->input->post('nis'));
                            $nama=strip_tags($this->input->post('xnama'));
                             $jenkel=strip_tags($this->input->post('xjenkel'));
                             $kelas=strip_tags($this->input->post('xkelas'));
                              $tempat_lahir=strip_tags($this->input->post('xtempat_lahir'));
                               $tgl_lahir=strip_tags($this->input->post('xtgl_lahir'));
                                $alamat=strip_tags($this->input->post('xalamat'));
                           
                             $ortu=strip_tags($this->input->post('xortu'));
                              $asal_sekolah=strip_tags($this->input->post('xasal_sekolah'));
                               $ijasah=strip_tags($this->input->post('xijasah'));
                           

                            $this->m_siswa->simpan_siswa($nis,$nama,$jenkel,$kelas,$tempat_lahir,$tgl_lahir,$alamat,$jenkel,$ortu,$asal_sekolah,$ijasah,$photo);
							echo $this->session->set_flashdata('msg','info');
							redirect('admin_si_siswa');
	                    
	                }else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin_si_siswa');
	                }
	                
	            }else{
							$nis=strip_tags($this->input->post('nis'));
                            $nama=strip_tags($this->input->post('xnama'));
                             $jenkel=strip_tags($this->input->post('xjenkel'));
                             $kelas=strip_tags($this->input->post('xkelas'));
                              $tempat_lahir=strip_tags($this->input->post('xtempat_lahir'));
                               $tgl_lahir=strip_tags($this->input->post('xtgl_lahir'));
                                $alamat=strip_tags($this->input->post('xalamat'));
                           
                             $ortu=strip_tags($this->input->post('xortu'));
                              $asal_sekolah=strip_tags($this->input->post('xasal_sekolah'));
                               $ijasah=strip_tags($this->input->post('xijasah'));

							$this->m_siswa->update_siswa_tanpa_img($nis,$nama,$jenkel,$kelas,$tempat_lahir,$tgl_lahir,$alamat,$ortu,$asal_sekolah,$ijasah);
							echo $this->session->set_flashdata('msg','info');
							redirect('admin_si_siswa');
	            } 

	}

	function delete_siswa(){
		$nis=$this->input->post('nis');
		$gambar=$this->input->post('gambar');
		$path='./assets/images/'.$gambar;
		unlink($path);
		$this->m_siswa->hapus_siswa($nis);
		$this->m_siswa->hapus_user($nis);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin_si_siswa');
	}

}
