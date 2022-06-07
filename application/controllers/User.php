<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
		$this->load->model('Sewa_model');
		$this->load->library('upload');
	}

	public function index()
	{
		$data['title'] = 'Profil Akun';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('user/index', $data);
		$this->load->view('templates/footer');
	}

	public function edit()
	{
		$data['title'] = 'Edit Profil';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('name', 'Nama Lengkap', 'required|trim');

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('user/edit', $data);
			$this->load->view('templates/footer');
		} else {
			$name = $this->input->post('name');
			$email = $this->input->post('email');

			//cek gambar jika akan diupload
			$upload_image = $_FILES['image']['name'];

			if ($upload_image) {
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '2048';
				$config['upload_path'] = './assets/img/profil/';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('image')) {
					$old_image = $data['user']['image'];
					if ($old_image != 'def.jpg') {
						unlink(FCPATH . 'assets/img/profil/' . $old_image);
					}

					$new_image = $this->upload->data('file_name');
					$this->db->set('image', $new_image);
				} else {
					echo $this->upload->display_errors();
				}
			}

			$this->db->set('name', $name);
			$this->db->where('email', $email);
			$this->db->update('user');

			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Profil Anda telah diperbarui.</div>');
			redirect('user');
		}
	}

	public function sewa()
	{
		$data['title'] = 'Beli';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		//var_dump
		$data['sewa'] = ($this->Sewa_model->tampil_sewa($data['user']['id']));

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('user/sewa', $data);
		$this->load->view('templates/footer');
	}

	public function tambah_sewa()
	{
		$data['title'] = 'Beli';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['barang'] = $this->Sewa_model->ambil_data();


		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('user/tambah_sewa', $data);
		$this->load->view('templates/footer');
	}
	public function tambah_sewa_aksi()
	{
		$total_harga = intval($this->input->post('lama')) * intval($this->Sewa_model->ambil_data_id($this->input->post('id_sewa'))->harga_sewa);
		$barang = ($this->Sewa_model->ambil_data_id($this->input->post('id_sewa'))->nama_barang);
		$harga = intval($this->Sewa_model->ambil_data_id($this->input->post('id_sewa'))->harga_sewa);
		$data = array();
		$this->load->library('upload');
		$nmfile = "" . time(); //nama file saya beri nama langsung dan diikuti fungsi time
		$config['upload_path'] = './assets/img/desain/'; //path folder
		$config['allowed_types'] = 'jpg|png|jpeg'; //type yang dapat diakses bisa anda sesuaikan
		$config['max_size'] = '3072'; //maksimum besar file 3M
		$config['max_width']  = '5000'; //lebar maksimum 5000 px
		$config['max_height']  = '5000'; //tinggi maksimu 5000 px
		$config['file_name'] = $nmfile; //nama yang terupload nantinya

		$this->upload->initialize($config);

 
		if (!empty($_FILES['gambardesain'])) {
			if ($this->upload->do_upload('gambardesain')) {
				$gbr = $this->upload->data();
				$data = array(
					'id_sewa'       => $this->input->post('id_sewa'),
					'id_user'       => $this->input->post('id_user'),
					'lama'			=> $this->input->post('lama'),
					'total_harga'	=> $total_harga,
					'harga'			=> $harga,
					'nama_barang'	=> $barang,
					'kemasan'		=> $this->input->post('kemasan'),
					'namalengkap'	=> $this->input->post('namalengkap'),
					'nohp'			=> $this->input->post('nohp'),
					'jasa'			=> $this->input->post('jasa'),
					'alamat'		=> $this->input->post('alamat'),
					'gambardesain'  => $gbr['file_name']
				);
				$this->Sewa_model->tambah_sewa($data);
			
			}
		}
		

		redirect(site_url('user/sewa'));
	}

	public function reset_sewa($id)
	{
		$this->db->delete('user_sewa', ['id_user' => $id]);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil dihapus</div>');
		redirect('user/sewa');
	}

	public function gantiKataSandi()
	{
		$data['title'] = 'Ganti Kata Sandi';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		//rules kata sandi
		$this->form_validation->set_rules('current_password', 'Kata Sandi saat ini', 'required|trim');
		$this->form_validation->set_rules('new_password1', 'Kata Sandi baru', 'required|trim|min_length[3]|matches[new_password2]', [
			'required' => 'Kata sandi harus diisi',
			'matches' => 'Kata sandi tidak sama!',
			'min_length' => 'Kata sandi minimal 3 karakter'
		]);
		$this->form_validation->set_rules('new_password2', 'Ulangi Kata Sandi baru', 'required|trim|matches[new_password1]');

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('user/gantikatasandi', $data);
			$this->load->view('templates/footer');
		} else {
			$current_password = $this->input->post('current_password');
			$new_password = $this->input->post('new_password1');
			if (!password_verify($current_password, $data['user']['password'])) {
				//cek kata sandi saat ini
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Kata sandi saat ini salah</div>');
				redirect('user/gantikatasandi');
			} else {
				if ($current_password == $new_password) {
					//cek kata sandi tidak boleh sama dengan kata sandi lama
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Kata sandi tidak boleh sama</div>');
					redirect('user/gantikatasandi');
				} else {
					//password berhasil dirubah
					$password_hash = password_hash($new_password, PASSWORD_DEFAULT);

					$this->db->set('password', $password_hash);
					$this->db->where('email', $this->session->userdata('email'));
					$this->db->update('user');

					$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Kata sandi berhasil diubah</div>');
					redirect('user/gantikatasandi');
				}
			}
		}
	}

	public function katalog()
	{
		$data['title'] = 'Katalog';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['sewa'] = $this->Sewa_model->ambil_data();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('user/katalog', $data);
		$this->load->view('templates/footer');
	}

	public function bayar()
	{
		$data['title'] = 'Upload Pembayaran';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('user/bayar', $data);
		$this->load->view('templates/footer');
	}

	public function upload()
	{
		$this->load->library('upload');
		$nmfile = "" . time(); //nama file saya beri nama langsung dan diikuti fungsi time
		$config['upload_path'] = './assets/img/bayar/'; //path folder
		$config['allowed_types'] = 'jpg|png|jpeg'; //type yang dapat diakses bisa anda sesuaikan
		$config['max_size'] = '3072'; //maksimum besar file 3M
		$config['max_width']  = '5000'; //lebar maksimum 5000 px
		$config['max_height']  = '5000'; //tinggi maksimu 5000 px
		$config['file_name'] = $nmfile; //nama yang terupload nantinya

		$this->upload->initialize($config);


		if (!empty($_FILES['gambar'])) {
			if ($this->upload->do_upload('gambar')) {
				$gbr = $this->upload->data();
				$data = array(
					'gambar'                 => $gbr['file_name'],
					'nama'					=> $this->input->post('nama')
				);
				$this->Sewa_model->tambah_bayar($data);
				$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Upload Pembayaran Berhasil</div></div>");
				redirect('user/bayar');
			} else {
				$this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Upload pembayaran gagal. Mohon upload pembayaran dengan format JPG, JPEG dan PNG</div></div>");
				redirect('user/bayar');
			}
		}
	}

	public function status()
	{
		$data['title'] = 'Status Pembayaran';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['status'] = ($this->Sewa_model->ambil_status());

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('user/status', $data);
		$this->load->view('templates/footer');
	}
}
