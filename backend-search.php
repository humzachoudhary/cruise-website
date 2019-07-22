<table class="table-fill">
      <thead>
        <tr>
          <th>Date</th>
          <th>Destination</th>
          <th>Cruise Lines</th>
          <th>Ships</th>
          <th>Sail From</th>
        </tr>
      </thead>
      <tbody>

<?php

$link = mysqli_connect("localhost", "1415481", "chelsea123", "db1415481");
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$term = mysqli_real_escape_string($link, $_REQUEST['term']);
 
if(isset($term)){
    $sql = "SELECT * FROM cruise WHERE Dates LIKE '" . $term . "%'";
    if($result = mysqli_query($link, $sql)){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                echo 
                "<tr>
                              <td>{$row['Dates']}</td>
                              <td>{$row['Destination']}</td>
                              <td>{$row['Cruise_Lines']}</td>
                              <td>{$row['Ships']}</td>
                              <td>{$row['Sail_From']}</td>         
            </tr>\n";
        }
            mysqli_free_result($result);
        } else{
            echo "<p>No matches found</p>";
        }
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
}

mysqli_close($link);
?>
      </tbody>
    </table> 