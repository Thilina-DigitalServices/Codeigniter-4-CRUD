<?php
namespace App\Controllers;

use App\Models\Employee;

class SiteController extends BaseController{
    
    public function employee(){
        $employee = new Employee();
        $data["employee"] = $employee->findAll();
        return view("Template/employee",$data);
    }
}
?>