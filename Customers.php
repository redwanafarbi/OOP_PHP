<?php
class Customers{
    private $id ;
    private $firstName;
    private $lastName;
    private $email;

    public function __construct(int $id, string $firstName, string $lastName, string $email){
        $this->id = $id ;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
    }

    //Implement getter method
    public function getId(): int {
        return $this->id ;
    }

    public function getFirstName(): string {
        return $this->firstName;
    }

    public function getLastName(): string {
        return $this->lastName ;
    }

    public function getEmail(): string {
        return $this->email ;
    }

    // Implement setter method
    public function setId(string $id){
        $this->id = $id ;
    }

    public function setFirstName(string $firstName){
        $this->firstName = $firstName ;
    }

    public function setLastName(string $lastName){
        $this->lastName = $lastName ;
    }

    public function setEmail(string $email){
        $this->email = $email ;
    }

    // Implement __toString method
    public function __toString(){
        $customerDetails = 
        "</br></br>ID: ".$this->id."</br>".
        "First Name: ".$this->firstName."</br>".
        "Last Name: ".$this->lastName."</br>".
        "Email: ".$this->email;

        return $customerDetails ;
    }

    // Implement Magic Method __call
    public function __call($method, $value){
        return "Invalid Method";
    }

    // Implement Magic Method __get
    public function __get($var_name){
        if(property_exists(__CLASS__, $var_name)){
            return $this->{$var_name};
        }
        return "\nInvalid Method";
    }

    // Implement Magic Method __set
    public function __set($var_name, $value){
        if(property_exists(__CLASS__, $var_name)){
            $this->{$var_name} = $value;
        }
        return "\nInvalid Method";
    }
}
?>