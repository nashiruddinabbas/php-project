<?php

namespace App\classes;

class HelloWorld
{
    public $message, $students = [], $x, $data = [], $y, $z, $firstName, $lastName, $fullName;

    public function __construct()
    {
        $this->message = "Hello Forhad bai kmon asen ";
    }

    public function index()
    {
        
        $this->students = [ 
            0 => [
                'name'      => 'Siam', 
                'email'     => 'siam@gmail.com', 
                'mobile'    => '01716151413'
            ],
            1 => [
                'name'      => 'Ratul', 
                'email'     => 'ratul@gmail.com', 
                'mobile'    => '01918171615'
            ],
            2 => [
                'name'      => 'Nasrin', 
                'email'     => 'nasrin@gmail.com', 
                'mobile'    => '01615141312'
            ]
        ];

        //echo '<pre>';
        //print_r($this->students);
    
       return view('home', ['siam' => $this->students]);
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
}

