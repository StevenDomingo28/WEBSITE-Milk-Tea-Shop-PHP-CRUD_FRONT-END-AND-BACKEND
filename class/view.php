<?php
class view extends config{
  public function viewData(){
    $con = $this->con();
    $sql = "SELECT * FROM `tbl_todolist` WHERE `status` = 'PENDING'";
    $data = $con->prepare($sql);
    $data->execute();
    $result = $data->fetchAll(PDO::FETCH_ASSOC);
    echo "<h3 class='mb Th container'>Pending Comments</h3>";
    echo "<table class='container table table-light table-sm'>";
    echo "<thead>
            <tr>
              <th> Name</th>
              <th> Comments</th>
              <th> Action</th>
            </tr>
            </thead><tbody>";
    foreach ($result as $data){
      echo "<tr>";
      echo "<td>$data[Name]</td>";
      echo "<td>$data[item]</td>";
      echo "<td>
            <a class='btn btn-info btn-sm' href='testimonial.php?edit=$data[id]'>Accept</a>
            <a class='btn btn-danger btn-sm' href='testimonial.php?delete=$data[id]'>Deny</a>
          </td>";
      echo "</tr>";
    }
    echo "<tbody></table>";
  }

  public function viewCompleteData(){
    $con = $this->con();
    $sql = "SELECT * FROM `tbl_todolist` WHERE `status` = 'COMPLETED'";
    $data = $con->prepare($sql);
    $data->execute();
    $result = $data->fetchAll(PDO::FETCH_ASSOC);
    echo "<h3 class='md-9 mt-5 container Th'>Comments:</h3>";
    echo "<table class='table table-light table-md-9 container'>";
    echo "<thead>
            <tr>
              <th> Name</th>
              <th> Comments</th>
              <th> Date</th>
            </tr>
            </thead><tbody>";
    foreach ($result as $data){
      echo "<tr>";
      echo "<td>$data[Name]</td>";
      echo "<td>$data[item]</td>";
      echo "<td>$data[day_completed]</td>";
      echo "</tr>";
    }
    echo "<tbody></table>";
  }
}
?>
