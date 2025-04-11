<?php

require_once __DIR__ . '/../../core/BaseController.php';

class PagesController extends BaseController
{
    public function __construct(Request $request)
    {
        parent::__construct($request);
    }

    public function IndexPage()
    {
        // Menampilkan halaman utama
        $this->render('Homepage');
    }

    public function LoginPage()
    {

        // Menampilkan halaman login
        $this->render('auth/Login');
    }

    public function RegisterPage()
    {
        // Menampilkan halaman register
        $this->render('auth/Register');
    }

    public function NotFoundPage()
    {
        // Menampilkan halaman 404
        $this->render('error/404');
    }
}
