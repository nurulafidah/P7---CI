<?php
class Mahasiswa extends CI_Controller{
    // membuat method index
    public function index(){
        $this->load->model('mahasiswa_model','mhs1');

            // buat objek model 1 dan nilai nya
            $this->mhs1->id=1;
            $this->mhs1->nim='0110121302';
            $this->mhs1->nama='Merri Utami';
            $this->mhs1->gender='P';
            $this->mhs1->ipk='3.86';

        $this->load->model('mahasiswa_model','mhs2');   

            // buat objek model 2 dan nilai nya
            $this->mhs2->id=2;
            $this->mhs2->nim='0110131204';
            $this->mhs2->nama='Rasya';
            $this->mhs2->gender='L';
            $this->mhs2->ipk='3.60';


            // simpan data ke array
            $list_mhs = [$this->mhs1, $this->mhs2];
            //data yang dikirim ke view
            $data['list_mhs'] = $list_mhs;
            // render data dan kirim data ke view
            $this->load->view('mahasiswa/index', $data);
    }

    // Method Dosen
    public function dosen(){
        $this->load->model('dosen_model','dsn1');
            $this->dsn1->nidn=014;
            $this->dsn1->pendidikan='S1';

        $this->load->model('dosen_model','dsn2');
            $this->dsn2->nidn=024;
            $this->dsn2->pendidikan='S2';

        $this->load->model('dosen_model','dsn3');
            $this->dsn3->nidn=034;
            $this->dsn3->pendidikan='S3';
            
            $list_dsn = [$this->dsn1, $this->dsn2, $this->dsn3];
            $data['list_dsn'] = $list_dsn;
            $this->load->view('mahasiswa/dosen', $data);
    }
    // Method Matakuliah
    public function matakuliah(){
        $this->load->model('matakuliah_model', 'matkul1');
            $this->matkul1->nama='Pemograman Web';
            $this->matkul1->sks=3;
            $this->matkul1->kode='PW';

        $this->load->model('matakuliah_model', 'matkul2');
            $this->matkul2->nama='Basis Data';
            $this->matkul2->sks=4;
            $this->matkul2->kode='Basdat';

            $list_matkul = [$this->matkul1, $this->matkul2];
            $data['list_matkul'] = $list_matkul;
            $this->load->view('mahasiswa/matakuliah', $data);
    }
} 
?>