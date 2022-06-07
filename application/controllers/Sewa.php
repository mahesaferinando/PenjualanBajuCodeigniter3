<?php
class Sewa extends CI_Controller
{
    var $limit = 10;
    var $offset = 10;

    function __construct()
    {
        parent::__construct();
        $this->load->model('Sewa_model');
        $this->load->helper(array('url'));
    }

    function index($page = NULL, $offset = '', $key = NULL)
    {
        $data['title'] = 'Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['sewa'] = $this->Sewa_model->ambil_data();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/Sewa_list', $data);
        $this->load->view('templates/footer');
    }

    function tambah()
    {
        $data = array(
            'aksi'                 => site_url('sewa/tambah_aksi'),
            'nama'                 => set_value('nama'),
            'deskripsi'         => set_value('deskripsi'),
            'harga'             => set_value('harga'),
            'id_sewa'             => set_value('id_sewa'),
            'button'             => 'Tambah'
        );
        $data['title'] = 'Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/Sewa_form', $data);
        $this->load->view('templates/footer');
    }

    function tambah_aksi()
    {

        $this->load->library('upload');
        $nmfile = "" . time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/img/uploads/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '3072'; //maksimum besar file 3M
        $config['max_width']  = '5000'; //lebar maksimum 5000 px
        $config['max_height']  = '5000'; //tinggi maksimu 5000 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);


        if (!empty($_FILES['filefoto']['name'])) {
            if ($this->upload->do_upload('filefoto')) {
                $gbr = $this->upload->data();
                $data = array(
                    'gambar'                 => $gbr['file_name'],
                    'nama_barang'             => $this->input->post('nama'),
                    'deskripsi_barang'         => $this->input->post('deskripsi'),
                    'harga_sewa'             => $this->input->post('harga')

                );
                $this->Sewa_model->tambah_data($data); //akses model untuk menyimpan ke database

                //pesan yang muncul jika berhasil diupload pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Data berhasil ditambahkan</div></div>");
                redirect('sewa'); //jika berhasil maka akan ditampilkan view upload
            } else {
                //pesan yang muncul jika terdapat error dimasukkan pada session flashdata
                $this->session->set_flashdata("pesan", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Data gagal ditambahkan</div></div>");
                redirect('sewa'); //jika gagal maka akan ditampilkan form upload
            }
        }


        $data = array(
            'nama_barang'             => $this->input->post('nama'),
            'deskripsi_barang'         => $this->input->post('deskripsi'),
            'harga_sewa'             => $this->input->post('harga')
        );

        $this->Sewa_model->tambah_data($data);
        redirect(site_url('sewa'));
    }

    function delete($id)
    {
        $this->Sewa_model->hapus_data($id);
        $this->session->set_flashdata("sewa", "<div class=\"col-md-12\"><div class=\"alert alert-danger\" id=\"alert\">Data berhasil dihapus!!</div></div>");
        redirect('sewa');
    }

    function update($id)
    {
        $sewa = $this->Sewa_model->ambil_data_id($id);
        $data = array(
            'aksi'                 => site_url('sewa/update_aksi'),
            'nama'                 => set_value('nama', $sewa->nama_barang),
            'deskripsi'         => set_value('deskripsi', $sewa->deskripsi_barang),
            'harga'             => set_value('harga', $sewa->harga_sewa),
            'id_sewa'             => set_value('id_sewa', $sewa->id_sewa),
            'button'             => 'Perbarui'
        );
        $data['title'] = 'Edit Penyewaan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/Sewa_form', $data);
        $this->load->view('templates/footer');
    }

    function update_aksi()
    {

        $this->load->library('upload');
        $nmfile = "" . time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/img/uploads/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '3072'; //maksimum besar file 3M
        $config['max_width']  = '5000'; //lebar maksimum 5000 px
        $config['max_height']  = '5000'; //tinggi maksimu 5000 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if (!empty($_FILES['filefoto']['name'])) {
            if ($this->upload->do_upload('filefoto')) {
                $gbr = $this->upload->data();
                $data = array(
                    'gambar'                 => $gbr['file_name'],
                    'nama_barang'             => $this->input->post('nama'),
                    'deskripsi_barang'         => $this->input->post('deskripsi'),
                    'harga_sewa'             => $this->input->post('harga')

                );

                $id_sewa = $this->input->post('id_sewa');
                $this->Sewa_model->edit_data($id_sewa, $data);

                $this->session->set_flashdata("sewa", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Update Data berhasil diubah!!</div></div>");
                redirect('sewa');
            } else {
                $this->session->set_flashdata("sewa", "<div class=\"col-md-12\"><div class=\"alert alert-success\" id=\"alert\">Update Data gagal!!</div></div>");
                redirect('sewa_form', 'refresh');
            }
        }
        $data = array(
            'nama_barang'           => $this->input->post('nama'),
            'deskripsi_barang'      => $this->input->post('deskripsi'),
            'harga_sewa'            => $this->input->post('harga')
        );
        $id_sewa = $this->input->post('id_sewa');
        $this->Sewa_model->edit_data($id_sewa, $data);
        redirect('sewa');
    }
}
