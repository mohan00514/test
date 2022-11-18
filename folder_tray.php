<?php
class tray{
    private $tray = array();
    private $folder_element;
    
    function __construct($folder_element) {
        $this->folder_element = $folder_element;
    }

    public function set_folder_element($folder_element){
       
        $this->folder_element = $folder_element;
       
    }
    // get Folder Name
    public function get_folder_element(){
        return  $this->folder_element;
    }

}

$tray = new Tray();
$tray()->set_folder_element(1);


/*
class Folder{

    private $folderName;
    private $createdDate;
    private $folderOwner;
    private $fileType;
    
    private $file_array = array();
    
    public function add_file($file){
        //$file_array = array_push_assoc($file_array, $file->fileName, $file_array['fileName']);

        
        
    }
    
    public function delete_file(){
        
    }

   // set Folder Name;


    public function set_folder_name($folderName){
       
        $this->folderName = $folderName;
       
    }
    // get Folder Name
    public function get_folder_name(){
        return  $this->folderName;
    }
    
    // set  created date of Folder
    public function set_create_date($createdDate){
       
        $this->createdDate = $createdDate;
       
    }
    // get created date of Folder
    public function get_create_date(){
        return  $this->createdDate;
    }
    
    // set owner of folder
    public function set_folder_owner( $folderOwner){
        $this->folderOwner = $folderOwner;
    }
    
    // get owner of folder
    public function get_folder_owner(){
        return $this->get_folder_owner;
    }
    
    //set file type 
    public function set_file_type($fileType){
        $this->fileType = $fileType;
    }
    // get file type
    public function get_file_type(){
        return $this->fileType;
    }
}
   



class File {
      
      private $fileNumber;
      private $fileName;
      private $created_Date;
      private $content; 
     

      
     // set Folder Number
    public function set_file_number($fileNumber){
       
        $this->fileNumber = $fileNumber;
       
    }
    // get file Number
    public function get_folder_name(){
        return 'file number is'. $this->fileNumber;
    }
    
    // set Name of File
    public function set_file_name($fileName){
       
        $this->fileName = $fileName;
       
    }
    // get name of file
    public function get_file_name(){
        return 'name of file is'. $this->fileName;
    }
    
    // set created date of file
    public function set_date( $created_Date){
        $this->created_Date =  $created_Date;
    }
    
    // get owner of folder
    public function get_date(){
        return "created date of file" .$this->created_Date;
    }
    
    //set file content
    public function set_file_content($content){
        $this->content =$content;
    }
    // get file content
    public function get_file_content(){
        return " File type is" .$this->content;
    }
    

    



}




$folder = new Folder();
$file = new File();
*/