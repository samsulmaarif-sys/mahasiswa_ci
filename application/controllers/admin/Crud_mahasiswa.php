<?php 


class Crud_mahasiswa extends CI_Controller{

	function __construct()
	{
		parent::__construct();		
		$this->load->model('admin/m_data');
		$this->load->helper('url');
		$this->load->library('session');

	}

	function index()
	{
		$data['mahasiswa'] = $this->m_data->tampil_data()->result();
		$this->load->view('admin/templates/header');
		$this->load->view('admin/v_tampil',$data);
		$this->load->view('admin/templates/footer');
	}

	function riwayat()
	{
		$data['mahasiswa'] = $this->m_data->tampil_data_riwayat()->result();
		$this->load->view('admin/templates/header');
		$this->load->view('admin/v_riwayat_mahasiswa',$data);
		$this->load->view('admin/templates/footer');
	}


	function tambah()
	{
		$this->load->view('admin/v_input');
	}

	function tambah_aksi()
	{
		$id = $this->input->post('id');
		$nim = $this->input->post('nim');
		$nama = $this->input->post('nama');
		$photo = $this->input->post('photo');
		$alamat = $this->input->post('alamat');
		$jk = $this->input->post('jk');
		$no = $this->input->post('no');
		$tanggal = $this->input->post('tanggal');

		$data = array(
			'id' => $id,
			'nim' => $nim,
			'nama_mahasiswa' => $nama,
			'alamat_mahasiswa' => $alamat,
			'jenis_kelamin' => $jk,
			'no_hp' => $no,
			'tanggal_input' => $tanggal

			);
		$this->m_data->input_data($data,'data_mahasiswa');
		redirect('admin/crud_mahasiswa/index');
	}

	function hapus($id){
		$where = array('id' => $id);
		$this->m_data->hapus_data($where,'data_mahasiswa');
		redirect('admin/crud_mahasiswa/index');
	}

	function edit($id){
		$where = array('id' => $id);
		$data['mahasiswa'] = $this->m_data->edit_data($where,'data_mahasiswa')->result();
		$this->load->view('admin/templates/header');
		$this->load->view('admin/v_edit',$data);
		$this->load->view('admin/templates/footer');
	}

	function update(){
		$id = $this->input->post('id');
		$nim = $this->input->post('nim');
		$nama = $this->input->post('nama');
		$photo = $this->input->post('photo');
		$alamat = $this->input->post('alamat');
		$jk = $this->input->post('jk');
		$no = $this->input->post('no');
		$tanggal = $this->input->post('tanggal');


		$data = array(
			'id' => $id,
			'nim' => $nim,
			'nama_mahasiswa' => $nama,
			'alamat_mahasiswa' => $alamat,
			'jenis_kelamin' => $jk,
			'no_hp' => $no,
			'tanggal_input' => $tanggal
	);

	$where = array(
		'id' => $id
	);

	$this->m_data->update_data($where,$data,'data_mahasiswa');
	redirect('admin/crud_mahasiswa/index');
}

}