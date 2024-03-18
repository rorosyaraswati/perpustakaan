<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tubes extends CI_Controller {

    function __construct(){
		parent::__construct();
		$this->load->model('databuku');
		$this->load->model('peminjam');
        $this->load->model('user');
        $this->load->model('transaksibuku');
        $this->load->model('user');
	}

    public function admin(){
        $data['databukuArr']=$this->databuku->get_databuku();
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('admin', $data);
        $this->load->view('layout/footer');
	}

    //LOGIN, CHECK LOGIN DAN LOGOUT

	public function login (){
        $this->load->view('login');
    }

    public function checkLogin() {
        // Menangkap data input post
        $data = $this->input->post();
    
        // Check ke database
        $check = $this->user->check_user($data['username'], $data['password']);
        if($check) {
            // Create session
            $this->session->set_userdata('username', $data['username']);
    
            // Load models based on user role
            $user_role = $check['username']; // Added line
            if($user_role === 'admin') {
                $this->load->model('databuku');
                $this->load->model('peminjam');
                $this->load->model('transaksibuku');
                $this->load->model('user');
            } else if($user_role === 'penjaga') {
                $this->load->model('databuku');
                $this->load->model('peminjam');
                $this->load->model('transaksibuku');
            } else {
                // Invalid user role, handle the error accordingly
                $this->session->set_flashdata('message', 'Invalid user role');
                redirect('login'); // Redirect to login page
                return;
            }
    
            // Redirect to the appropriate page based on user role
            if($user_role === 'admin') {
                redirect('admin');
            } else if($user_role === 'penjaga') {
                redirect('admin');
            }
        } else {
            // Lempat message atau redirect
            $this->session->set_flashdata('message', '
                <div class="alert alert-danger pastel alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                Username dan Password salah
                </div>');
            redirect('login'); // Redirect to login page
        }
    }


    public function logout(){
        $this->session->sess_destroy();
        redirect('login');
    }
    

    #BUKU

	public function add_databuku (){
        #menampilkan form
        $this->load->view('add_databuku');
    }
    public function  save_databuku(){
        #menangkap isi form
        #melanjutkan ke model
        #pindah kemana/redirect
        $data=$this->input->post();
        $simpan=$this->databuku->databuku_save($data);
        if($simpan){
            #tampilkan informasi berhasil
            $this->session->set_flashdata('message', 
            '
            <div class="alert alert-success pastel alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            Matakuliah berhasil di tambah.
            </div>');
        }else{
             #tampilkan informasi gagal
             $this->session->set_flashdata('message', 
            '
            <div class="alert alert-danger pastel alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            Matakuliah gagal di tambah
            </div>');
        }
        redirect('admin');
    }

    public function delete_databuku($kode_buku){
        #menerusakan ke model untuk delete
        #redirect
		$save_databuku = $this->databuku->del_databuku($kode_buku);
		redirect('admin');
	}

	public function edit_dtbk($kode_buku){
        #mengambil data sesuai kodeMk
        #menampilkan form edit
        $data["detail_dtbk"]=$this->databuku->detail_databuku($kode_buku);
        $this->load->view('edit_databuku', $data);
    }

    public function update_databuku($kode_buku){
        #melanjutkan data ke model
        #redirect
        $data=$this->input->post();
        $update=$this->databuku->update_databuku($kode_buku, $data);
        if($update){
            #tampilkan informasi berhasil
            $this->session->set_flashdata('message', 
            '
            <div class="alert alert-success pastel alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            Matakuliah berhasil  diubah.
            </div>');
        }else{
             #tampilkan informasi gagal
             $this->session->set_flashdata('message', 
            '
            <div class="alert alert-danger pastel alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            Matakuliah gagal  diubah
            </div>');
        }
        redirect('admin');
	}

    #PEMINJAM

    public function member(){
        $data['peminjamArr']=$this->peminjam->get_peminjam();
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('member', $data);
        $this->load->view('layout/footer');
	}


	public function add_peminjam (){
        $this->load->view('add_peminjam');
    }
    public function  save_peminjam(){
        $data=$this->input->post();
        $simpan=$this->peminjam->peminjam_save($data);
        if($simpan){
            #tampilkan informasi berhasil
            $this->session->set_flashdata('message', 
            '
            <div class="alert alert-success pastel alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            Matakuliah berhasil di tambah.
            </div>');
        }else{
             #tampilkan informasi gagal
             $this->session->set_flashdata('message', 
            '
            <div class="alert alert-danger pastel alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            Matakuliah gagal di tambah
            </div>');
        }
        redirect('member');
    }

    public function delete_peminjam($nim){
		$save_peminjam = $this->peminjam->del_peminjam($nim);
		redirect('member');
	}

	public function edit_pnjm($nim){
        $data["detail_pnjm"]=$this->peminjam->detail_peminjam($nim);
        $this->load->view('edit_peminjam', $data);
    }

    public function update_peminjam($nim){
        $data=$this->input->post();
        $update=$this->peminjam->update_peminjam($nim, $data);
        redirect('member');
	}

//transaksibuku PEMINJAMAN DAN PENGEMBALIAN BUKU

public function buku_kembali()
    {
        $this->load->model('transaksibuku');
        $data['kode_buku'] = $this->input->post('kode_buku');
        $data['nama_anggota'] = $this->input->post('nama_anggota');
        $data['tanggal_pengembalian'] = $this->input->post('tanggal_pengembalian');

        // panggil method pada model untuk menghitung denda
        $data['denda'] = $this->transaksibuku->hitung_denda($data['kode_buku'], $data['tanggal_pengembalian']);

        // kode untuk mengembalikan buku dan menampilkan jumlah denda
    }

public function transaksi(){
    $data['transaksibukuArr']=$this->transaksibuku->get_transaksibuku();
    $this->load->view('layout/header');
    $this->load->view('layout/sidebar');
    $this->load->view('transaksi', $data);
    $this->load->view('layout/footer');
    
}

public function add_transaksibuku(){
    #menampilkan form
    $this->load->view('add_transaksibuku');
}

public function save_transaksibuku() {
    $data = $this->input->post();
    
    // Simpan data transaksibuku
    $simpan = $this->transaksibuku->transaksibuku_save($data);
    
    if ($simpan) {
        // Ambil kode_buku yang dipilih
        $kode_buku = $data['kode_buku'];
        
        // Perbarui status buku menjadi "terpinjam" di tabel databuku
        $this->databuku->update_status_terpinjam($kode_buku);
        
        // Tampilkan informasi berhasil
        $this->session->set_flashdata('message', '
            <div class="alert alert-success pastel alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            Matakuliah berhasil ditambahkan.
            </div>');
    } else {
        // Tampilkan informasi gagal
        $this->session->set_flashdata('message', '
            <div class="alert alert-danger pastel alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            Matakuliah gagal ditambahkan.
            </div>');
    }
    
    redirect('transaksi');
}


public function delete_transaksibuku($kode_buku) {
    // Hapus transaksi buku
    $this->transaksibuku->del_transaksibuku($kode_buku);

    // Hapus status terpinjam dari model databuku
    $this->databuku->update_databuku($kode_buku, NULL);

    // Tampilkan informasi berhasil
    $this->session->set_flashdata('message', '
        <div class="alert alert-success pastel alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        Transaksi berhasil dihapus.
        </div>');

    redirect('transaksi');
}


public function edit_trs($kode_buku){
    #mengambil data sesuai kodeMk
    #menampilkan form edit
    $data["detail_trs"]=$this->databuku->detail_transaksibuku($kode_buku);
    $this->load->view('edit_transaksibuku', $data);
}

public function update_transaksibuku($kode_buku){
    #melanjutkan data ke model
    #redirect
    $data=$this->input->post();
    $update=$this->transaksibuku->update_transaksibuku($kode_buku, $data);
    if($update){
        #tampilkan informasi berhasil
        $this->session->set_flashdata('message', 
        '
        <div class="alert alert-success pastel alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        Matakuliah berhasil  diubah.
        </div>');
    }else{
         #tampilkan informasi gagal
         $this->session->set_flashdata('message', 
        '
        <div class="alert alert-danger pastel alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        Matakuliah gagal  diubah
        </div>');
    }
    redirect('transaksi');
}

##USERS

public function users(){
    $data['userArr']=$this->user->get_user();
    $this->load->view('layout/header');
    $this->load->view('layout/sidebar');
    $this->load->view('users', $data);
    $this->load->view('layout/footer');
}


public function add_user (){
    $this->load->view('add_user');
}

public function  save_user(){
    $data=$this->input->post();
    $simpan=$this->user->user_save($data);
    if($simpan){
        #tampilkan informasi berhasil
        $this->session->set_flashdata('message', 
        '
        <div class="alert alert-success pastel alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        Matakuliah berhasil di tambah.
        </div>');
    }else{
         #tampilkan informasi gagal
         $this->session->set_flashdata('message', 
        '
        <div class="alert alert-danger pastel alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        Matakuliah gagal di tambah
        </div>');
    }
    redirect('users');
}

public function delete_user($id_user){
    $save_user = $this->user->del_user($id_user);
    redirect('users');
}

public function edit_usb($id_user){
    $data["detail_usb"]=$this->user->detail_user($id_user);
    $this->load->view('edit_user', $data);
}

public function update_user($id_user){
    $data=$this->input->post();
    $update=$this->user->update_user($id_user, $data);
    redirect('users');
}
}