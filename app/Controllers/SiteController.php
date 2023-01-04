<?php
namespace App\Controllers;

use App\Models\Employee;

class SiteController extends BaseController{
    
    public function index(){
        $employee = new Employee();
        $data["employee"] = $employee->findAll();
        return view("employee/index",$data);
    }
    
    public function create(){
        
        return view("employee/create");
    }
    public function save(){
        $employee = new Employee();
        $data = [
            'name' => $this->request->getPost('name'),
            'age' => $this->request->getPost('age'),
            'email' => $this->request->getPost('email'),
            'phone' => $this->request->getPost('phone')
        ];
        $employee->save($data);

        return redirect()->to(base_url('employee')); 
    }

    public function edit($id){
        $employee = new Employee();
        $data['employee'] = $employee->find($id);

        return view("employee/edit",$data);
    }
    public function update($id){
        $employee = new Employee();
        $data = [
            'name' => $this->request->getPost('name'),
            'age' => $this->request->getPost('age'),
            'email' => $this->request->getPost('email'),
            'phone' => $this->request->getPost('phone')
        ];
        $employee->update($id, $data);

        return redirect()->to(base_url('employee')); 
    }

    public function delete($id){
        $employee = new Employee();
        $employee->delete($id);

        return redirect()->to(base_url('employee')); 

    }

}
?>