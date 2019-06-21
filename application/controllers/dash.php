<?php

/**
 * Class: Dash
 * 
 * Dash controller
 */
class Dash extends Controller
{
    /**
     * index
     * 
     * provjera ako je korisnik ulogiran
     * preusmjeravanje s obzirom da admin status
     */
    public function index(){
        if(!isset($_SESSION['id'])){
            header('Location:' .URL. '/login');
        }else if($_SESSION['admin'] == 1){
            require('application/views/dash/admin.php');
        }else{
            require('application/views/dash/user.php');
        }
    }
}