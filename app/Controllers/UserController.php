<?php
namespace App\Controllers;

class UserController extends BaseController{
    public function userIndex(){
        return view("Template/user");
    }
}
?>