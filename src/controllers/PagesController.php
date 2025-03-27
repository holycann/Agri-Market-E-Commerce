<?php

require_once __DIR__ . '/../core/BaseController.php';

class PagesController extends BaseController
{
    public function __construct(Request $request)
    {
        parent::__construct($request);
    }

    public function IndexPage()
    {
        // Menampilkan halaman utama
        $this->render('user/Homepage');
    }

    public function LoginPage()
    {
        // Menampilkan halaman login
        $this->render('user/Login');
    }

    public function RegisterPage()
    {
        // Menampilkan halaman register
        $this->render('user/Register');
    }

}
