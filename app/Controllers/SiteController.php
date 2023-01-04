<?php
namespace App\Controllers;

use App\Models\User;

class SiteController extends BaseController{
    
    function users(){
        $user = new User();
        // $data['user'] = $user->findAll();
        return view("/Template/user", 
        // $data
    );
    }
}
?>