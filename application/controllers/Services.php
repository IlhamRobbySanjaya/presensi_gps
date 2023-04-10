<?php
defined('BASEPATH') OR die('No direct script access allowed!');

class Services extends CI_Controller
{
// this function will redirect to book service page
    function index()
    {
        $this->book_service();
    }


 // this function to load service book page
    function book_service()
    {

        $this->view('content/book_service');

    }
}