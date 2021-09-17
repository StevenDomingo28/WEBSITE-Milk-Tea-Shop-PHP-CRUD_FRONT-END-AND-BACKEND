<?php
class insert extends config{
  public $task;
  public $item;

  public function __construct($task,$item){
    $this->task= $task;
    $this->item= $item;
  }
  public function insertTask(){
    $con = $this->con();
    $sql = "INSERT INTO `tbl_todolist`(`Name`,`item`) VALUES('$this->task','$this->item')";
    $data = $con->prepare($sql);
    if($data->execute()){
      return true;
    }else{
      return false;
    }
  }
}


?>
