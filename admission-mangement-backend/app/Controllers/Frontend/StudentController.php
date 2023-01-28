<?php

namespace App\Controllers\Frontend;

use App\Models\StudentModel;
use CodeIgniter\RESTful\ResourceController;

class StudentController extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        return view("frontend/student_entry.php");
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
        $rules = [
            'student_name' => 'required|min_length[5]|max_length[100]',
            'class' => 'required',
            'birth_date' => 'required',
            'transaction_id' => 'required',
            'guardian_name' => 'required|min_length[5]|max_length[100]',
            'gender' => 'required',
            'nationality' => 'required',
            'phone' => 'required|max_length[30]',
            'email' => 'required|max_length[100]',
            'street_address' => 'required|min_length[5]|max_length[100]',
            'city' => 'required|min_length[5]|max_length[50]',
            'division' => 'required|min_length[5]|max_length[50]',
            'zip_code' => 'required|max_length[5]',
            'country' => 'required|min_length[5]|max_length[50]',
            'student_image' => [
                // 'uploaded[product_image]',
                'mime_in[student_image,image/jpg,image/jpeg,image/png]',
                'max_size[student_image,1024]',
            ]
        ];
        $errors = [
            'student_name' => [
                'required' => 'Student name must be filled',
                'min_length' => 'Minimum length is 5!',
                'max_length' => 'Maximum length is 100!'
            ],
            'class' => [
                'required' => 'Class must be filled',
            ],
            'birth_date' => [
                'required' => 'Birth date must be filled',
            ],
            'transaction_id' => [
                'required' => 'Transaction ID must be filled',
            ],
            'guardian_name' => [
                'required' => 'Guardian name must be filled',
                'min_length' => 'Minimum length is 5!',
                'max_length' => 'Maximum length is 100!'
            ],
            'gender' => [
                'required' => 'Gender must be filled',
            ],
            'nationality' => [
                'required' => 'Nationality must be filled',
            ],
            'phone' => [
                'required' => 'Phone must be filled',
                'max_length' => 'Maximum length is 30!'
            ],
            'email' => [
                'required' => 'Email must be filled',
                'max_length' => 'Maximum length is 100!'
            ],
            'street_address' => [
                'required' => 'Street address must be filled',
                'min_length' => 'Minimum length is 5!',
                'max_length' => 'Maximum length is 100!'
            ],
            'city' => [
                'required' => 'City must be filled',
                'min_length' => 'Minimum length is 5!',
                'max_length' => 'Maximum length is 50!'
            ],
            'division' => [
                'required' => 'Division must be filled',
                'min_length' => 'Minimum length is 5!',
                'max_length' => 'Maximum length is 50!'
            ],
            'zip_code' => [
                'required' => 'Zip code must be filled',
                'max_length' => 'Maximum length is 5!'
            ],
            'country' => [
                'required' => 'Country must be filled',
                'min_length' => 'Minimum length is 5!',
                'max_length' => 'Maximum length is 50!'
            ],
            'student_image' => [
                'mime_in' => 'Only jpg, png, jpeg are allowed',
                'max_size' => 'Not more then 1MB'
            ],
        ];

        $validate = $this->validate($rules, $errors);

        if (!$validate) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        } else {
            $img = $this->request->getFile('student_image');
            $path = "/assets/uploads/";
            $img->move($path);
            $model = new StudentModel();
            $data['student_name'] = $this->request->getPost('student_name');
            $data['class'] = $this->request->getPost('class');
            $data['birth_date'] = $this->request->getPost('birth_date');
            $data['transaction_id'] = $this->request->getPost('transaction_id');
            $data['guardian_name'] = $this->request->getPost('guardian_name');
            $data['gender'] = $this->request->getPost('gender');
            $data['nationality'] = $this->request->getPost('nationality');
            $data['phone'] = $this->request->getPost('phone');
            $data['email'] = $this->request->getPost('email');
            $data['street_address'] = $this->request->getPost('street_address');
            $data['city'] = $this->request->getPost('city');
            $data['division'] = $this->request->getPost('division');
            $data['zip_code'] = $this->request->getPost('zip_code');
            $data['country'] = $this->request->getPost('country');
            $data['result'] = $this->request->getPost('result');
            $namepath = $path . $img->getName();
            $data['student_image'] = $namepath;

            $model->save($data);
            echo 'Inserted Successfully';
            return redirect()->to('admin/circulars')->with('msg', 'Inserted Successfully');
        }
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
