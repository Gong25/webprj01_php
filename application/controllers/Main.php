<?php

class Main extends CI_Controller{
    function __construct(){
        parent::__construct();

        

    }


    public function index(){
        $this->main()
    }

    public function main(){

        $this->load->view('Main')

    }


}