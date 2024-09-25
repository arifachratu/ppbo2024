<?php 

Class Book{
    public $ISBN;
    public $tittle;
    public $description;
    public $category;
    public $language;
    public $numberOfPage;
    public $author;
    public $publisher;

    public function __construct($ISBN,$tittle,$description,$category,$language,$numberOfPage,$author,$publisher){
        $this->ISBN = $ISBN ;
        $this->tittle = $tittle;
        $this->description = $description;
        $this->category = $category;
        $this->language = $language;
        $this->numberOfPage = $numberOfPage;
        $this->author = $author;
        $this->publisher =$publisher;

    }
    public function showAll() {
        return [
            "ISBN" => $this->ISBN,
            "title" => $this->tittle,
            "description" => $this->description,
            "category" => $this->category,
            "language" => $this->language,
            "numberOfPage" => $this->numberOfPage,
            "author" => $this->author->show("name"),
            "publisher" => $this->publisher->name
        ];
    }
    public function detail($ISBN) {
        if ($this->ISBN == $ISBN) {
            return $this->showAll();
        } else {
            return "Book not found";
        }
    }
}