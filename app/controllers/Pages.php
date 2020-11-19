<?php

class Pages extends Controller
{
    public function __construct()
    {
        if(isLoggedIn()){
            redirect('posts');
        }
    }

    public function index()
    {
        $data = [
            'title' => 'Share Posts',
            'description' => 'Simple social network built on the MVC PHP framework'
            ];
        $this->view('pages/index', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About',
            'description' => 'About simple social network'
        ];
        $this->view('pages/about', $data);
    }
}