
<?php 

session_start();
error_reporting(0);
ini_set('display_errors', 0);

 

require_once 'inc/init.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Imenik</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/osnovni.css">
 

<script type="text/javascript" src="js/javascript_funkcije.js"></script>

</head>
<body >

<!-- 
  <div class="table-responsive" id="pagination_data">  
                </div>   -->


<div class="container">
<div class="row">

	<?php 
 //ucitava pocetnu stranicu user.php
  loadContent('sadrzaj', 'user');
  ?>
</div>
</div>
 
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript">
/*
* ucitava ajaksom tabelu sa paginacijama
*/
  $(document).ready(function(){  
      load_data();  
      function load_data(page)  
      {  
           $.ajax({  
                url:"pagination.php",  
                method:"POST",  
                data:{page:page},  
                success:function(ret){  
                    var data = JSON.parse(ret);
                   
                     $('#pagination_data').html(data.tabela + data.paginacija);  
                }  
           })  
      }  
      $(document).on('click', '.pagination_link', function(){  
           var page = $(this).attr("id");  
           load_data(page);  
      });  
 });  


</script>
</body>
</html>


