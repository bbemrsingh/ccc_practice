<?php 

class file{
    public $filename;
    public $size;

    public function getFileExtension(){
        $parts = explode(".", $this->filename);
        return end($parts);   
    }

    public function displayFileInfo(){
        echo "filename: $this->filename, file size: $this->size KB";

    }

}


// Example Usage:
$file = new File();
$file->filename = "document.txt";
$file->size = 1024;

echo "File Extension: " . $file->getFileExtension() . "<br>";
$file->displayFileInfo();

?>