<?php

namespace App\Controllers;

use CodeIgniter\Model;
use App\Models\MotivasiModel;
use App\Models\SkillModel;
use App\Models\UserModel;

class Crud extends BaseController
{
  public function home()
  {
    $data = [
      'judul' => 'Home |Webprograming | Zam.Dev'
    ];
    return view('Crud/home', $data);
  }
  public function about()
  {
    $data = [
      'judul' => ' Aboute |Webprograming | Zam.Dev'
    ];
    return view('Crud/about', $data);
  }
  public function data()
  {
    $keyword = $this->request->getPost('keyword');
    $model = new MotivasiModel();
    $data['judul'] = 'Data |Webprograming | Zam.Dev';
    if ($keyword) {
      $data['data_motivasi'] = $model
        ->join('skill', 'skill.id_skill = data_motivasi.id_skill')
        ->cari($keyword);
    } else {
      $data['data_motivasi'] = $model
        ->select('*')
        ->join('skill', 'skill.id_skill = data_motivasi.id_skill')
        ->findAll();
    }
    return view('Crud/data', $data);
  }
  public function contac()
  {
    $data = [
      'judul' => 'Contac |Webprograming | Zam.Dev'
    ];
    return view('Crud/contac', $data);
  }

  public function login()
  {
    $join = new SkillModel();
    $data['judul'] = "Form Data";
    $data['join'] =
      $join->findAll();
    return view('Crud/register', $data);
  }
  // insert data 
  public function save()
  {
    $model = new MotivasiModel();
    // $join = new SkilModel();
    $model->save([
      'Nama' => $this->request->getVar('Nama'),
      'Hobi' => $this->request->getVar('Hobi'),
      'Motivasi' => $this->request->getVar('Motivasi'),
      'Umur'    => $this->request->getVar('Umur'),
      'id_skill'  => $this->request->getVar('id_skill')
    ]);
    session()->setFlashdata('pesan', 'WAW ,MOTIVASIMU KEREN ');
    return redirect()->to('/Crud/data');
  }
  //hapus data 
  public function hapus($id)
  {
    $model = new MotivasiModel();
    $hapus = $model->delete($id);
    if ($hapus) {
      session()->setFlashdata('pesan', 'Data berhasil di hapus');
      return redirect()->to('/Crud/data');
    } else {
      echo " data tidak bisa dihapus";
    }
  }
  //edit data
  public function edit($id)
  {
    $model = new MotivasiModel();
    $skil = new SkillModel();
    $data['skil'] = $skil->findAll();
    $data['isi'] = $model->find($id);
    return view('Crud/edit', $data);
  }
  //update
  public function update($id)
  {
    $model = new MotivasiModel();
    $model->save([
      'id' => $id,
      'Nama' => $this->request->getVar('Nama'),
      'Hobi' => $this->request->getVar('Hobi'),
      'Motivasi' => $this->request->getVar('Motivasi'),
      'Umur'    => $this->request->getVar('Umur'),
      'id_skill'  => $this->request->getVar('id_skill')
    ]);
    //kirim pesan jika data berhasil ditambah
    session()->setFlashdata('pesan', 'MOTIVASIMU BERHASIL DI UBAH ');
    return redirect()->to('/Crud/data');
  }
  // login
  protected $daftarmodel;
  public function __construct()
  {
    $this->daftarmodel = new UserModel();
  }
  public function Userlogin()
  {
    session();
    $data = [
      'valid' => \Config\Services::validation()
    ];
    return view('/login/register', $data);
  }
  public function getdata()
  {
    $validation = \Config\Services::validation();
    if (!$this->validate([
      'Email' => [
        'rules'  => 'is_unique[login.Email]',
        'errors' => [
          'is_unique' => '{field} sudah terdaftar silahkan daftarkan email yang lain!!'
        ],
      ],
      'Username' => [
        'rules' => 'is_unique[login.Username]|exact_length[12]',
        'errors' => [
          'is_unique' => '{field} sudah didaftarkan, coba daftarkan username yang lain!!!',
          'exact_length' => '{field} maksimal 12 karakter'
        ],
      ],
      'Password' => [
        'rules' => 'is_unique[login.Password]|exact_length[7]',
        'errors' => [
          'is_unique' => '{field} sudah didaftarkan, buatlah Password yang mudah anda ingat!!',
          'exact_length' => '{field} maksimal 7 karakter'
        ],
      ],
    ])) {
      return view('/login/register', ['valid' => $validation]); //mengirim pesan kesalahan dari validation
    }
    $register = $this->daftarmodel->insert([
      'Username' => $this->request->getVar('Username'),
      'Password' => $this->request->getVar('Password'),
      'Email' => $this->request->getVar('Email')
    ]);
    if (empty($register)) {
      session()->setFlashdata('gagal', 'silahkan registrasi terlebih dahulu');
      return redirect()->to('/login/register');
    } else {
      session()->setFlashdata('register', 'silahkan masukkan username dan password yang sudah anda daftarkan!!');
      return redirect()->to('/login/login_admin');
    }
    // return redirect()->to('halaman/login_admin');
  }
  //sigin multi level
  public function sigin()
  {
    return view('/login/login_admin');
  }
  public function get_sigin()
  {
    $session = session();
    $Username = $this->request->getVar('Username');
    $Password = $this->request->getVar('Password');
    $dataUser = $this->daftarmodel->where([
      'Username' => $Username
    ])->first();
    if (!$dataUser) {
      $session->setFlashdata('notreg', 'username dan password yang anda masukkan belum di daftar!!
      silahkan daftar dibawah ');
      return redirect()->to('/login/register');
    }
    if ($dataUser['Password'] != $Password) {
      $session->setFlashdata('error', 'Password yang anda masukkan salah!!');
      return redirect()->to('/login/login_admin');
    } else {
      if ($dataUser['Password'] == $Password) {
        $session->set('login', true);
        $session->set('id', $dataUser['id']);
        $session->set('Username', $dataUser['Username']);
        $session->set('Email', $dataUser['Email']);
        return redirect()->to('/Crud/ViewAdmin');
      }
    }
  }

  public function ViewAdmin()
  { //mengambil data dari tabel login
    session();
    //ambil data dari session
    $data['Email'] = session()->get('Email');
    $data['Username'] = session()->get('Username');
    $keyword = $this->request->getPost('keyword');
    $model = new MotivasiModel();
    $data['judul'] = 'Data |Webprograming | Zam.Dev';
    if ($keyword) {
      $data['data_motivasi'] = $model
        ->join('skill', 'skill.id_skill = data_motivasi.id_skill')
        ->cari($keyword);
    } else {
      $data['data_motivasi'] = $model
        ->select('*')
        ->join('skill', 'skill.id_skill = data_motivasi.id_skill')
        ->findAll();
    }
    return view('Crud/data', $data);
  }
  public function logout()
  {
    $session = session();
    $session->destroy();
    $session->setFlashdata('logout', 'anda sudah logout');
    return redirect()->to('/login/register');
  }
}
