<?php
class Books{
    private $isbn;
    private $title;
    private $author;
    private $available;

    public function __construct(int $isbn, string $title, string $author, int $available){
        $this->isbn = $isbn;
        $this->title = $title;
        $this->author = $author;
        $this->available = $available;
    }

    // Implement getter method
    public function getIsbn(): int {
        return $this->isbn ;
    }

    public function getTitle(): string{
        return $this->title ;
    }

    public function getAuthor(): string {
        return $this->author ;
    }

    public function getAvailable(): int {
        return $this->available;
    }

    // Implement setter method
    public function setIsbn(int $isbn){
        $this->isbn = $isbn ;
    }

    public function setTitle(string $title){
        $this->title = $title ;
    }

    public function setAuthor(string $author) {
        $this->author = $author;
    }

    public function setAvailable(int $available) {
        $this->available = $available;
    }

    public function getCopy(): bool{
        if($this->available < 1){
            return false ;
        }else{
            $this->available-- ;
            return true;
        }

    }

    // Implement addCopy() method
    public function addCopy(int $num): bool {
        $this->available += $num;
        return true;
    }

    // Implement __toString method
    public function __toString(){
        $bookDetails= 
        "</br>ISBN: ".$this->isbn."</br>".
        "Title: ".$this->title."</br>".
        "Author: ".$this->author."</br>".
        "Available: ".$this->available;

        return $bookDetails ;
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
        return "\nInvalid Property";
    }

    // Implement Magic Method __set
    public function __set($var_name, $value){
        if(property_exists(__CLASS__, $var_name)){
            $this->{$var_name} = $value;
        }
        return "\nInvalid Property";
    }
}
?>