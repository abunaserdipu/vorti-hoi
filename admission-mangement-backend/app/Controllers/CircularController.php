<?php

namespace App\Controllers;

use App\Models\CircularModel;
use CodeIgniter\Exceptions\AlertError;
use CodeIgniter\RESTful\ResourceController;

class CircularController extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $model = new CircularModel();
        $data['circulars'] = $model->orderBy('id')->findAll();
        return view('admins/circulars', $data);
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
        return view('admins/admission_circular');
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $rules = [
            'school_name' => 'required|min_length[5]|max_length[100]',
            'circular_details' => 'required|min_length[50]',
            'available_classes' => 'required|min_length[5]',
            'apply_fees' => 'required|min_length[3]',
            'circular_image' => [
                // 'uploaded[product_image]',
                'mime_in[circular_image,image/jpg,image/jpeg,image/png]',
                'max_size[circular_image,1024]',
            ]
        ];
        $errors = [
            'product_name' => [
                'required' => 'School name must be filled',
                'min_length' => 'Minimum length is 5!',
                'max_length' => 'Maximum length is 100!'
            ],
            'circular_details' => [
                'required' => 'Circular details must be filled',
                'min_length' => 'Minimum length is 50!'
            ],
            'available_classes' => [
                'required' => 'Available classes must be filled',
                'min_length' => 'Minimum length is 50!'
            ],
            'apply_fees' => [
                'required' => 'Apply fees must be filled',
                'min_length' => 'Minimum length is 3!'
            ],
            'circular_image' => [
                'mime_in' => 'Only jpg, png, jpeg are allowed',
                'max_size' => 'Not more then 1MB'
            ],
        ];

        $validate = $this->validate($rules, $errors);

        if (!$validate) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        } else {
            $img = $this->request->getFile('circular_image');
            $path = "/assets/uploads/";
            $img->move($path);
            $model = new CircularModel();
            $data['school_name'] = $this->request->getPost('school_name');
            $data['available_classes'] = $this->request->getPost('available_classes');
            $data['apply_fees'] = $this->request->getPost('apply_fees');
            $data['circular_details'] = $this->request->getPost('circular_details');
            $namepath = $path . $img->getName();
            $data['circular_image'] = $namepath;

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
