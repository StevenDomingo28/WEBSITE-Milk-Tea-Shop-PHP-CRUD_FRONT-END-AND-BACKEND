<?php
function insertT(){
  if (!empty($_GET['name']) && !empty($_GET['items'])){
    $insert = new insert($_GET['name'],$_GET['items']);
    if($insert->insertTask()){
      echo '<div class=" container col-md-9 alert alert-success alert-dismissible fade show" role="alert">
        <strong>Holy guacamole!</strong> Reviewing...
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }else{
      echo '<div class="col-md-9 alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Holy guacamole!</strong> Error.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }
  }
}

function deleteT(){
  if(!empty($_GET['delete'])){
    $delete= new delete($_GET['delete']);
    if($delete->deleteTask()){
      echo '<div class="col-md-9 alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Holy guacamole!</strong> Deleted successfully.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }else{
      echo '<div class="col-md-9 alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Holy guacamole!</strong> Error.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }
  }
}

function editT(){
  if(!empty($_GET['edit'])){
    $edit= new edit($_GET['edit']);
    if($edit->editTask()){
      echo '<div class="col-md-9 alert alert-info alert-dismissible fade show" role="alert">
        <strong>Holy guacamole!</strong> You accepted one comments.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }else{
      echo '<div class="col-md-9 alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Holy guacamole!</strong> Error.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }
  }
}

?>
