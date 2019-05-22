//prikazuje modal za insertovanje korisnika
function show_add_modal()
{
	$('#add_user').modal('show'); 

}

//ajaks kojim se kreira novi korisnik
function save_new_user()
{
	var name = $('#name').val();
	var email = $('#email').val();
	var password = $('#password').val();
	var user_rola =$('#user_rola').val();
	$.ajax({
      url:'inc/funkcije.php?funkcija=unesi_podatke',
      methot:'POST',
      data:{name:name, email:email, password:password, user_rola:user_rola},
      success:function(ret)
      {
       
        var data = JSON.parse(ret);
        console.log(data.data_for_user);
        if(data.flag ==false)
        {
          //alert(data.poruka);
          $('#error').html(data.poruka);
              
        }
        else
        {
     
             
              $('#name').val('');
              $('#email').val('');
              $('#password').val('');
              $('#user_rola').val('');

              $('#add_user').modal('hide');
               $("#pagination_data").load("#pagination_data ");

        }
      }
    });

}

/*
otvara edit modal i preko ajaksa puni modal sa podaima korisnika
*/


function update(e)
{
     $('#edit_user').modal('show'); 
   
    $.ajax({
      url:'inc/funkcije.php?funkcija=update_user',
      methot:'POST',
      data:{id:e},
      success:function(ret)
      {
  

        var data = JSON.parse(ret);
        
             
              $('#name_edit').val(data.data_for_edit[0]['ime_prezime']);
              $('#email_edit').val(data.data_for_edit[0]['email']);
              $('#password_edit').val(data.data_for_edit[0]['lozinka']);
              $('#user_rola_edit').val(data.data_for_edit[0]['users']);
              $('#id_user').val(data.data_for_edit[0]['id']);
      }
    });
}

/*
ajaks funkcija edituje korisnika
*/
function edit_user_data()
{

  var name = $('#name_edit').val();
  var email = $('#email_edit').val();
  var password = $('#password_edit').val();
  var user_rola =$('#user_rola_edit').val();
  var id = $('#id_user').val();
  $.ajax({
      url:'inc/funkcije.php?funkcija=change_data',
      methot:'POST',
      data:{name:name, email:email, password:password, user_rola:user_rola, id:id},
      success:function(ret)
      {
        
        var data = JSON.parse(ret);
      console.log(data);
        if(data.flag ==false)
        {
         
          $('#error_edit').html(data.poruka);
              
        }
        else
        {

              $('#edit_user').modal('hide');
              $("#pagination_data").load("#pagination_data ");


        }
      }
    });
}


/*
modal za brisanje  user
*/


function delete_user(e)
{
  $('#delete_user').modal('show');
  $('#delete_user_id').val(e);
}

/*
Preko ajaksa se brisu podaci
*/
function delete_user_data()
{
   var id =$('#delete_user_id').val(); 
   
    $.ajax({
      url:'inc/funkcije.php?funkcija=delete_user_data',
      methot:'POST',
      data:{id:id},
      success:function(ret)
      {
        var data = JSON.parse(ret);
        if(data.flag==true)
        {
          $("#pagination_data").load("#pagination_data ");
           $('#delete_user').modal('hide');
        }
              
      }
    });
}



