<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class ApplicationController extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $db = db_connect();
        $builder1 = $db->table("students,results")->select('students.id,student_image,student_name,transaction_id,phone')->where('students.result=results.id');
        $data = $builder1->get()->getResultArray();
        $builder2 = $db->table('results')->select('id,result_name');
        $applicationdata = $builder2->get()->getResultArray();
        return view('admins/applications.php', ['applications' => $data, 'results' => $applicationdata]);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        //
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        //
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        //
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        //
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        //
    }
}
