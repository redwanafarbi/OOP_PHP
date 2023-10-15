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
        $result = <i> . $this->title . '</i> - ' . $this->author ;

        if($this->available < 1){
            $result .= '<b>Not Available Right Now</b>'
        }

        return $result ;
    }
}