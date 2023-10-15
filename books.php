class Books{
    private $isbn;
    private $title;
    private $author;
    private $available;

    public function __construct(int $isbn, string $title, string $author, int $available){
        &this->isbn = $isbn;
        $this->title = $title;
        $this->author = $author;
        $this->available = $available;
    }

    public function getIsbn(): int {
        return $this->isbn ;
    }

    public function getTitle(): string{
        return $this->title ;
    }

    public function getAuthor(): string {
        return $this->author ;
    }

    public function getCopy(): bool{
        if($this->available < 1){
            return false ;
        }else{
            $this->available-- ;
            return true;
        }

    }

    public function addCopy(): bool{
        $this->available ++ ;
    }

    public function __toString(){
        $bookDetails= 
        "</br>ISBN: ".$this->isbn."</br>".
        "Title: ".$this->title."</br>".
        "Author: ".$this->author."</br>".
        "Available: ".$this->available;

        return $bookDetails ;
    }

    public function __call($method, $value){
        return "Invalid Method";
    }

    public function __get($var_name){
        if(property_exists(__CLASS__, $var_name)){
            return $this->{$var_name};
        }
        return "\nInvalid Method";
    }

    public function __set($var_name, $value){
        if(property_exists(__CLASS__, $var_name)){
            $this->{$var_name} = $value;
        }
        return "\nInvalid Method";
    }
}