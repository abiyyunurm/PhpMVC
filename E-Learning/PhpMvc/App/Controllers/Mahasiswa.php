<?php

class Mahasiswa extends Controller {
    public function index()
    {
        $data['judul'] = 'Daftar Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
        $this->view('templates/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('templates/footer'); 
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);
        $this->view('templates/header', $data);
        $this->view('mahasiswa/detail', $data);
        $this->view('templates/footer'); 
    }

    public function tambah()
    {
        if ($this->model('Mahasiswa_model')->tambahDataMahasiswa($_POST) > 0 ) {
            Flasher::setFlash('Berhasil','Ditambahkan','success');
            header('Location: ' . BASEURL . '/Mahasiswa');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'Ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/Mahasiswa');
            exit;
        }
    }


    public function hapus($id)
    {
        if ($this->model('Mahasiswa_model')->hapusDataMahasiswa($id) > 0 ) {
            Flasher::setFlash('Berhasil','Dihapus','success');
            header('Location: ' . BASEURL . '/Mahasiswa');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'Dihapus', 'danger');
            header('Location: ' . BASEURL . '/Mahasiswa');
            exit;
        }
    }


    public function getUbah()
    {
      echo json_encode($this->model('Mahasiswa_model')->getMahasiswaById($_POST['id']));
    }



    public function cari(){
        $data['judul'] = 'Daftar Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->cariDataMahasiswa();
        $this->view('templates/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('templates/footer'); 



    }







}
 


?>