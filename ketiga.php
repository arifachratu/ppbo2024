<?php

class Author {
    public $name;
    public $description;

    public function __construct($name, $description) {
        $this->name = $name;
        $this->description = $description;
    }

    public function show($type): array {
        if ($type === 'name') {
            return ['name' => $this->name];
        } else if ($type === 'description') {
            return ['description' => $this->description];
        }
        return [];
    }
}

class Publisher {
    public $name;
    public $address;
    private $phone;

    public function __construct($name, $address) {
        $this->name = $name;
        $this->address = $address;
    }

    public function setPhone(int $phone): void {
        $this->phone = $phone;
    }

    public function getPhone(): int {
        return $this->phone;
    }
}

class Book {
    public $ISBN;
    public $title;
    public $description;
    public $category;
    public $language;
    public $numberOfPage;
    public $author;
    public $publisher;

    public function __construct($ISBN, $title, $description, $category, $language, $numberOfPage, $author, $publisher) {
        $this->ISBN = $ISBN;
        $this->title = $title;
        $this->description = $description;
        $this->category = $category;
        $this->language = $language;
        $this->numberOfPage = $numberOfPage;
        $this->author = $author;
        $this->publisher = $publisher;
    }

    public function showAll(): array {
        return [
            'ISBN' => $this->ISBN,
            'title' => $this->title,
            'description' => $this->description,
            'category' => $this->category,
            'language' => $this->language,
            'numberOfPage' => $this->numberOfPage,
            'author' => $this->author,
            'publisher' => $this->publisher,
        ];
    }

    public function detail($ISBN): array {
        if ($this->ISBN === $ISBN) {
            return $this->showAll();
        }
        return [];
    }
}

// Contoh penggunaan
$author = new Author("Darwis", "dikenal dengan nama pena Tere Liye adalah penulis dan akuntan berkebangsaan Indonesia");
$publisher = new Publisher("Republika", "Jakarta");
$publisher->setPhone(123456789);

$book = new Book(9780747532743, "Hujan", "menceritakan tentang cinta, tentang persahabatan, tentang perpisahan, tentang melupakan, dan tentang hujan", "Fantasi", "jakarta", 223, $author->name, $publisher->name);

print_r($book->showAll());
print_r($book->detail(9780747532743));
?>
