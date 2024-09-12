<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class LoginFilter implements FilterInterface
{

    public function before(RequestInterface $request, $arguments = null)
    {
        //// cek ketika user belum login
    if (session()->get('login') != true ) {
        session()->setFlashdata('login', 'silahkan anda daftar/sigin terlebih dahulu');
        return redirect()->to(site_url('/login/register2'));
    }
    }
    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        if (session()->get('login') === true ) {
        return view('/');
    }
    }
}
