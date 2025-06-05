<?php

namespace App\Controllers;

use App\Models\ConModel;
use CodeIgniter\HTTP\ResponseInterface;

class Contract extends BaseController
{
    public function index()
    {
        return view("contract");
    }

    public function submit()
    {
        $conModel = new ConModel();
        $firstname = $this->request->getPost("firstname");
        $lastname = $this->request->getPost("lastname");
        $fathername = $this->request->getPost("fathername");
        $email = $this->request->getPost("email");
        $dob = $this->request->getPost("dob");
        $phone = $this->request->getPost("phone");
        $company = $this->request->getPost("company");
        $validfrom = $this->request->getPost("validfrom");
        $validto = $this->request->getPost("validto");

        $nocFile = $this->request->getFile("noc");
        $appointmentLetterFile = $this->request->getFile("appointment_letter");

        if ($nocFile->isValid() && !$nocFile->hasMoved()) {
            $nocFilePath = $nocFile->store();
        } else {
            $nocFilePath = null; // Handle the error as needed
        }

        if ($appointmentLetterFile->isValid() && !$appointmentLetterFile->hasMoved()) {
            $appointmentLetterFilePath = $appointmentLetterFile->store();
        } else {
            $appointmentLetterFilePath = null; // Handle the error as needed
        }

        $data = [
            'firstname' => $firstname,
            'lastname' => $lastname,
            'dob' => $dob,
            'fathername' => $fathername,
            'email' => $email,
            'phone' => $phone,
            'company' => $company,
            'validfrom' => $validfrom,
            'validto' => $validto,
            'noc' => $nocFilePath,
            'appointment_letter' => $appointmentLetterFilePath
        ];

        $r = $conModel->insert($data);

        if ($r) 
        {
            echo 'submitted successfully';
            return redirect()->to('http://localhost/ci4/public/contract');
        }
        else 
        {
            echo 'failed';
        }
    }

    public function report()
    {
        $conModel = new ConModel();
        $data['table'] = $conModel->findAll();
        return view('report', $data);
    }

    public function download($id, $type)
    {
        $conModel = new ConModel();
        $contract = $conModel->find($id);
    
        if ($type == 'noc') {
            $filePath = $contract['noc'];
        } else if ($type == 'appointment_letter') {
            $filePath = $contract['appointment_letter'];
        } else {
            throw new \Exception("Invalid file type requested");
        }
    
        $path = WRITEPATH . 'uploads/' . $filePath;
    
        if (!file_exists($path)) {
            throw new \CodeIgniter\Files\Exceptions\FileNotFoundException("File not found: " . $filePath);
        }
    
        return $this->response->download($path, null);
    }
    

    public function edit($id)
    {
        $conModel = new ConModel();
        $data['contract'] = $conModel->find($id);

        return view('edit_contract', $data);
    }

    public function update($id)
{
    $conModel = new ConModel();

    $data = [
        'firstname' => $this->request->getPost("firstname"),
        'lastname' => $this->request->getPost("lastname"),
        'fathername' => $this->request->getPost("fathername"),
        'email' => $this->request->getPost("email"),
        'dob' => $this->request->getPost("dob"),
        'phone' => $this->request->getPost("phone"),
        'company' => $this->request->getPost("company"),
        'validfrom' => $this->request->getPost("validfrom"),
        'validto' => $this->request->getPost("validto")
    ];

    // Check if a new NOC file is uploaded
    $nocFile = $this->request->getFile("noc");
    if ($nocFile && $nocFile->isValid() && !$nocFile->hasMoved()) {
        $nocFilePath = $nocFile->store();
        $data['noc'] = $nocFilePath;
    }

    // Check if a new Appointment Letter file is uploaded
    $appointmentLetterFile = $this->request->getFile("appointment_letter");
    if ($appointmentLetterFile && $appointmentLetterFile->isValid() && !$appointmentLetterFile->hasMoved()) {
        $appointmentLetterFilePath = $appointmentLetterFile->store();
        $data['appointment_letter'] = $appointmentLetterFilePath;
    }

    if ($conModel->update($id, $data)) {
        return redirect()->to('public/report');
    } else {
        return redirect()->back()->withInput()->with('error', 'Update failed');
    }
}

    public function delete($id)
    {
        $conModel = new ConModel();
        if ($conModel->delete($id)) {
            return redirect()->to('public/report');
        } else {
            return redirect()->back()->with('error', 'Deletion failed');
        }
    }
}


    