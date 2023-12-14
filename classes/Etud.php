<?php 
// namespace Etud;


require "Person.php";
// use Person\Person;
class Etud extends Person
{
    private float $note;
    private string $filier;
    
    public function __construct(string $name,string $cin,string $email,string $phone,float $note,string $filier){
        parent::__construct($name,$cin,$email,$phone);
        $this->setNote($note);
        $this->setFilier($filier);
    }
    

    public function getNote():float{
        return $this->note;
    }
    public function setNote(float $note){
        $this->note=$note;
    }

    public function getFilier():string{
        return $this->filier;
    }
    public function setFilier(string $filier){
        $this->filier=$filier;
    }
    
    // private function validation_input(string $data):string {
    //     $data = trim($data);
    //     $data = stripslashes($data);
    //     $data = htmlspecialchars($data);
    //     return $data;
    // }
    public function toString():void{
        parent::toString();
        echo "Note : $this->note <br> Filier : $this->filier <br>";
    }



}
