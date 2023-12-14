<?php 

// namespace Person;
  class Person
{
    protected string $name;
    protected string $cin;
    protected string $email;
    protected string $phone;
    
    public function __construct(string $name,string $cin,string $email,string $phone){
        $this->setName($name);
        $this->cin=$cin;
        $this->email=$email;
        $this->phone=$phone;
    }
    

    public function getName():string{
        return $this->name;
    }
    public function setName(string $name){
        $this->validateName($name);
    }

    public function getCin():string{
        return $this->cin;
    }
    public function setCin(string $cin){
        $this->validateCin($cin);
        $this->cin=$cin;
    }

    public function getEmail():string{
        return $this->email;
    }
    public function setEmail(string $email){
        $this->validateEmail($email);
        $this->email=$email;
    }

    public function getPhone():string{
       
        return $this->phone;
    }
    public function setPhone(string $phone){
        $this->validatePhone($phone);
        $this->phone=$phone;
    }

    private function validateName(string $name):void{
        $this->name=$this->validation_input($name);
        if(empty($this->name) || !preg_match("/[A-Za-z]/",$this->name)) throw new InvalidArgumentException('Name is Required !!!');
    }
    private function validateCin(string $cin):void{
        $this->cin=$this->validation_input($cin);
        if(empty($this->cin) || !preg_match("/^[A-Z]{1,2}[0-9]{4,8}$/",$this->cin)) throw new InvalidArgumentException('Format Cin Incorrect !!!');
    }
    private function validateEmail(string $email):void{
        $this->email=$this->validation_input($email);
        if(empty($this->email) || !filter_var($this->email,FILTER_VALIDATE_EMAIL)) throw new InvalidArgumentException('Format Email Incorrect !!!');
    }
    private function validatePhone(string $phone):void{
        $this->phone=$this->validation_input($phone);
        if(empty($this->phone) || !preg_match("/^[0-9]{10}$/",$this->phone)) throw new InvalidArgumentException('Format Phone Incorrect !!!');
    }
    
    
    private function validation_input(string $data):string {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    public function toString():void{
        echo "Name : -$this->name- <br> Cin : $this->cin <br> Email : $this->email <br> Phone : $this->phone";
    }



}
