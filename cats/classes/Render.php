<?php
class Render {

  public static function renderTable ($rows) {
    $table = "
      <table id='newsletter'>
      <thead>
        <tr>
           <th>Date</th>
           <th>Title</th>
        </tr>
       </thead>";
    foreach($rows as $row) {
      $data = explode('|', $row);
      $table .= "<tr><td>{$data[0]}</td><td>{$data[1]}</td></tr>";
    }
    $table .= "</table>";
    echo $table;
  }
}
