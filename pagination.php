<?php

/*
*selektuje podatke po limitu kreira tebelu i button paginaciju u ovom slucaju  spanove
*/
$connect = mysqli_connect("localhost", "root", "", "markostankovic");  
 $record_per_page = 5;  
 $page = '';  
 $output = '';  
 if(isset($_POST["page"]))  
 {  
      $page = $_POST["page"];  
 }  
 else  
 {  
      $page = 1;  
 }  
 $start_from = ($page - 1)*$record_per_page;  
 $query = "SELECT * FROM user_data ORDER BY id DESC LIMIT $start_from, $record_per_page";  
 $result = mysqli_query($connect, $query);  
 $output .= "  
      <table class='table' >  
           <tr>  
                <th>Name</th>  
                <th >Email</th>  
              
              
                <th>User</th> 
                <th>Update/Delete</th>   
           </tr>  
 ";  
 while($row = mysqli_fetch_array($result))  
 {  
      $output .= '  
           <tr>  
                <td>'.$row["ime_prezime"].'</td>
                <td>'.$row["email"].'</td>   
               
               
                <td>'.$row["users"].'</td> 
                <td><button type="button" class="btn btn-info" onclick="update('.$row["id"].')">Edit</button> <button type="button" class="btn btn-danger"  onclick="delete_user('.$row["id"].')">Delete</button></td> 
           </tr>  
      ';  
 }  
 $output .= '</table><br /><div align="center">';  
 $page_query = "SELECT * FROM user_data ORDER BY id DESC";  
 $page_result = mysqli_query($connect, $page_query);  
 $total_records = mysqli_num_rows($page_result);  
 $total_pages = ceil($total_records/$record_per_page);  
 $output1 ='<div align="center">';
 for($i=1; $i<=$total_pages; $i++)  
 {  
      $output1 .= "<span class='pagination_link' style='cursor:pointer; padding:6px; border:1px solid #ccc;' id='".$i."'>".$i."</span>";  
 }  
 $output1 .= '</div><br /><br />'; 

 $data=array('tabela'=>$output, 'paginacija'=>$output1);
      echo json_encode($data); 
