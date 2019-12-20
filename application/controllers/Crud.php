<?php 

class Crud extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
                $this->load->helper('url');
	}

	function index(){
		$data['ijin'] = $this->m_data->tampil_data()->result();
		$this->load->view('v_tampil',$data);
	}

	function tambah(){
		$this->load->view('v_input');
	}
 
	function tambah_aksi(){
		$id_marketting = $this->input->post('id_marketting');
		$jenis = $this->input->post('jenis');
		$tgl_a = $this->input->post('tgl_a');
		$tgl_b = $this->input->post('tgl_b');
		$keterangan = $this->input->post('keterangan');
 
		$data = array(
			'id_marketting' => $id_marketting,
			'jenis' => $jenis,
			'tgl_a' => $tgl_a,
			'tgl_b' => $tgl_b,
			'ket' => $keterangan,
			);
		$this->m_data->input_data($data,'ijin');
		redirect('crud/index');
	}

	function hapus($id){
		$where = array('id' => $id);
		$this->m_data->hapus_data($where,'ijin');
		// redirect('localhost/ci_ijin/index.php/crud/index');
		header('location:http://localhost/ci_ijin/index.php/crud/index');
	}

	function edit($id){
		$where = array('id' => $id);
		$data['ijin'] = $this->m_data->edit_data($where,'ijin')->result();
		$this->load->view('v_edit',$data);
	}
	function update(){
		$id = $this->input->post('id');
		$id_marketting = $this->input->post('id_marketting');
		$jenis = $this->input->post('jenis');
		$tgl_a = $this->input->post('tgl_a');
		$tgl_b = $this->input->post('tgl_b');
		$keterangan = $this->input->post('keterangan');

	 
		$data = array(
			'id_marketting' => $id_marketting,
			'jenis' => $jenis,
			'tgl_a' => $tgl_a,
			'tgl_b' => $tgl_b,
			'ket'   => $keterangan
		);
	 
		$where = array(
			'id' => $id
		);
	 
		$this->m_data->update_data($where,$data,'ijin');
		redirect('crud/index');
	}

}