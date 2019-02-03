<?php
class admin_si_guru extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('logon') !=TRUE){
            $url=base_url('login_si');
            redirect($url);
        };
		$this->load->model('m_guru');

		$this->load->model('m_pengguna');
		$this->load->library('upload');
	}


	function index(){
		
		$x['data']=$this->m_guru->get_all_guru_piket();
		$x['jabatan']=$this->m_guru->get_jabatan();
		$x['piket']=$this->m_guru->get_piket();
		$x['mapel']=$this->m_guru->get_mapel();
		$this->load->view('apps/admin/v_guru',$x);
	}
	
	function simpan_guru(){
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

	                        $photo=$gbr['file_name'];
	                        $kode=strip_tags($this->input->post('kode'));
	                        $mapel=strip_tags($this->input->post('xmapel'));
	                        $jabatan=strip_tags($this->input->post('xjabatan'));
	                        $piket=strip_tags($this->input->post('xpiket'));
							$nip=strip_tags($this->input->post('xnip'));
							$nama=strip_tags($this->input->post('xnama'));
							$alamat=strip_tags($this->input->post('xalamat'));
							$jam=strip_tags($this->input->post('xjam'));
							$jenkel=strip_tags($this->input->post('xjenkel'));
							$tmp_lahir=strip_tags($this->input->post('xtmp_lahir'));
							$tgl_lahir=strip_tags($this->input->post('xtgl_lahir'));
							
							$dataUser = array(
			'pengguna_nama' => $this ->input ->post('xnama'),
    		'pengguna_guru' => $this ->input ->post('kode'),
    		'pengguna_password' => md5($this ->input ->post('kode')),
    		'pengguna_level' => '3');
        
        
        $this ->db ->insert("tbl_pengguna",$dataUser);

							$this->m_guru->simpan_guru($kode,$mapel,$jabatan,$piket,$nip,$nama,$alamat,$jam,$jenkel,$tmp_lahir,$tgl_lahir,$photo);
							echo $this->session->set_flashdata('msg','success');
							redirect('admin_si_guru');
					}else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin_si_guru');
	                }
	                 
	            }else{
	            	 $kode=strip_tags($this->input->post('kode'));
	                        $mapel=strip_tags($this->input->post('xmapel'));
	                        $jabatan=strip_tags($this->input->post('xjabatan'));
	                        $piket=strip_tags($this->input->post('xpiket'));
							$nip=strip_tags($this->input->post('xnip'));
							$nama=strip_tags($this->input->post('xnama'));
							$alamat=strip_tags($this->input->post('xalamat'));
							$jam=strip_tags($this->input->post('xjam'));
							$jenkel=strip_tags($this->input->post('xjenkel'));
							$tmp_lahir=strip_tags($this->input->post('xtmp_lahir'));
							$tgl_lahir=strip_tags($this->input->post('xtgl_lahir'));
							
							$dataUser = array(
			'pengguna_nama' => $this ->input ->post('xnama'),
    		'pengguna_guru' => $this ->input ->post('kode'),
    		'pengguna_password' => md5($this ->input ->post('kode')),
    		'pengguna_level' => '3');
        
        
        $this ->db ->insert("tbl_pengguna",$dataUser);
					$this->m_guru->simpan_guru_tanpa_img($kode,$mapel,$jabatan,$piket,$nip,$nama,$alamat,$jam,$jenkel,$tmp_lahir,$tgl_lahir);
					echo $this->session->set_flashdata('msg','success');
					redirect('admin_si_guru');
				}
				
	}
	
	function update_guru(){
				
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
	                         $kode=strip_tags($this->input->post('kode'));
	                        $mapel=strip_tags($this->input->post('xmapel'));
	                        $jabatan=strip_tags($this->input->post('xjabatan'));
	                        $piket=strip_tags($this->input->post('xpiket'));
							$nip=strip_tags($this->input->post('xnip'));
							$nama=strip_tags($this->input->post('xnama'));
							$alamat=strip_tags($this->input->post('xalamat'));
							$jam=strip_tags($this->input->post('xjam'));
							$jenkel=strip_tags($this->input->post('xjenkel'));
							$tmp_lahir=strip_tags($this->input->post('xtmp_lahir'));
							$tgl_lahir=strip_tags($this->input->post('xtgl_lahir'));

							$this->m_guru->update_guru($kode,$mapel,$jabatan,$piket,$nip,$nama,$alamat,$jam,$jenkel,$tmp_lahir,$tgl_lahir,$photo);
							echo $this->session->set_flashdata('msg','info');
							redirect('admin_si_guru');
	                    
	                }else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin_si_guru');
	                }
	                
	            }else{
							 $kode=strip_tags($this->input->post('kode'));
	                        $mapel=strip_tags($this->input->post('xmapel'));
	                        $jabatan=strip_tags($this->input->post('xjabatan'));
	                        $piket=strip_tags($this->input->post('xpiket'));
							$nip=strip_tags($this->input->post('xnip'));
							$nama=strip_tags($this->input->post('xnama'));
							$alamat=strip_tags($this->input->post('xalamat'));
							$jam=strip_tags($this->input->post('xjam'));
							$jenkel=strip_tags($this->input->post('xjenkel'));
							$tmp_lahir=strip_tags($this->input->post('xtmp_lahir'));
							$tgl_lahir=strip_tags($this->input->post('xtgl_lahir'));
							$this->m_guru->update_guru_tanpa_img($kode,$mapel,$jabatan,$piket,$nip,$nama,$alamat,$jam,$jenkel,$tmp_lahir,$tgl_lahir);
							echo $this->session->set_flashdata('msg','info');
							redirect('admin_si_guru');
	            } 

	}

	function hapus_guru(){
		$kode=$this->input->post('kode');
		$gambar=$this->input->post('gambar');
		$path='./assets/images/'.$gambar;
		unlink($path);
		$this->m_guru->hapus_guru($kode);
		$this->m_guru->hapus_user($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin_si_guru');
	}

}