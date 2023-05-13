<?php

namespace App\Controllers;

use App\Models\CustomerModel;
use CodeIgniter\RESTful\ResourceController;

class Customer extends ResourceController
{
    public function __construct()
    {
        $this->model = new CustomerModel();
    }

    public function index()
    {

        $results = $this->model->findAll();
        return view('header', ['title'=>'Customers']).view('table_view',
                ['title'=>'Customers', 'results'=>$results]).view('footer');
    }


    public function show($id = null)
    {

        $results = $this->model->find($id);
        return view('header', ['title'=>'Customer']).view('table_view',
                ['title'=>'Customer', 'results'=>[$results]]).view('footer');
    }


    public function new()
    {
        $db = db_connect();
        $fields = $db->getFieldNames('customers');
        $fields = array_diff($fields, ['customerNumber']);
        return view('header', ['title'=>'Customer']).view('insert_view',
                ['title'=>'Add Customer', 'fields'=>$fields, 'tablename'=>'customers', 'route_table'=>'customer'])
            .view('footer');
    }


    public function create()
    {
        try{
            $db = db_connect();
            $data = $this->request->getPost();
            foreach ($data as $key=>$value){
                $data[$key] = $db->escapeString($value);
            }
            $lastId = $db->query("select max(customerNumber) as id from customers")->getResultArray();
            $newId = intval($lastId[0]['id']) + 1;
            $data['customerNumber'] = $newId;
            $this->model->insert($data);
            $this->response->redirect('/customer/'.$newId);

        }
        catch (Excecption $ex){
            return "Bad stuff";
        }


    }


    public function edit($id = null)
    {
        $results = $this->model->find($id);
        unset($results['customerNumber']);
        return view('header', ['title'=>'Customer'])
            . view('update_view', ['title'=>'Customer', 'results'=>$results, 'pk'=>$id])
            . view('footer');
    }


    public function update($id = null)
    {
        $data = $this->request->getPost();
        $this->model->where('customerNumber', $id)->set($data)->update();
        $this->response->redirect("/customer/$id");
    }
}