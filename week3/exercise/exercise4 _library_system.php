<?php 

    class Book {
        public $title;
        public $author;

        public function displayInfo(){
            echo "Title: $this->title <br> Author: $this->author <br><br>";
        }
    }

    class Library {
        private $books = [];

        public function addBook(Book $book) {   // here $book need to be a object of "Book" class for execution of this method else it will return error. 
            $this->books[] = $book;
        }

        public function displayAllBooks() {
            foreach ($this->books as $book) {
                $book->displayInfo();
                echo "<br>";
            }
        }
    }

    // Example Usage:
    $book1 = new Book();
    $book1->title = "Attitude is Everything";
    $book1->author = "jeff keller";

    $book2 = new Book();
    $book2->title = "Zero to One";
    $book2->author = "Peter Thiel";

    $library = new Library();
    $library->addBook($book1);
    $library->addBook($book2);

    $library->displayAllBooks();

?>