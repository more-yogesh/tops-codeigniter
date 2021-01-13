<?php

class Home extends CI_Controller
{
    public function index()
    {
        echo "Hello I am home index";
    }

    public function info()
    {
        echo "hello I am info";
    }

    public function dashboard($userName, $lastName)
    {
        $name = $userName . $lastName;
        $this->load->view('dashboard.html', ['fullName' => $name]);
    }
}
