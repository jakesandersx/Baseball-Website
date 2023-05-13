<?php

namespace App\Controllers;

use App\Models\EmployeeModel;
use CodeIgniter\RESTful\ResourceController;

class Employee extends ResourceController
{


    public function __construct()
    {
        $this->model = new EmployeeModel();
    }

    public function index()
    {
        //$model = new EmployeeModel();
        $results = $this->model->findAll();
        return view('header',['title'=>"Employees"])
            .view('table_view',['title'=>"Employees", 'results'=>$results])
            .view('footer');
    }


    public function show($id = null)
    {
        //$model = new EmployeeModel();
        $results = $this->model->find($id);
        return view('header',['title'=>"Employees"])
            .view('table_view',['title'=>"Employees", 'results'=>[$results]])
            .view('footer');
    }


    public function new()
    {
        $db = db_connect();
        $fields = $db->getFieldNames("employees");
        $fields = array_diff($fields,['employeeNumber']);
        return view('header',['title'=>"Employee"])
            .view('insert_view',['title'=>"Add Employee",
                'fields'=>$fields,'tablename'=>"employees",'route_table'=>'employee'])
            .view('footer');
    }


    public function create()
    {
        try{
            $db = db_connect();
            $data = $this->request->getPost();
            foreach($data as $key=>$value){
                $data[$key] = $db->escapeString($value);
            }
            $lastId = $db->query("select max(employeeNumber) as id from employees")->getResultArray();
            $newId = intval($lastId[0]['id']) + 1;
            $data['employeeNumber'] = $newId;
            $this->model->insert($data);
            $this->response->redirect('/employee/'. $newId);
        }
        catch(Exception $ex){
            return "Bad stuff";
        }


    }


    public function edit($id = null)
    {
        $results = $this->model->find($id);
        unset($results['employeeNumber']);
        return view('header',['title'=>"Employee"])
            .view('update_view',['title'=>'Employee','results'=>$results,
                'pk'=>$id]);
    }


    public function update($id = null)
    {
        $data = $this->request->getPost();
        $this->model->where('employeeNumber',$id)->set($data)->update();
        $this->response->redirect("/employee/$id");
    }


    public function delete($id = null)
    {
        //
    }
}

