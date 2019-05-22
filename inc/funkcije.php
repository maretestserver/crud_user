<?php
//require_once 'init.php';

include '../classes/Application.php';
include '../classes/Dbase.php';
include '../classes/User.php';
//gadja funkcije prosledjene ajaksom

if(isset($_REQUEST['funkcija']) AND $_REQUEST['funkcija'] =='unesi_podatke')
{
	return unesi_podatke_sa_forme();
}

if(isset($_REQUEST['funkcija']) AND $_REQUEST['funkcija'] =='prikazi_tabelu')
{
	return prikazi_tabelu();
}

if(isset($_REQUEST['funkcija']) AND $_REQUEST['funkcija'] =='update_user')
{
	return update_user();
}
if(isset($_REQUEST['funkcija']) AND $_REQUEST['funkcija'] =='change_data')
{
	return change_data();
}
if(isset($_REQUEST['funkcija']) AND $_REQUEST['funkcija'] =='delete_user_data')
{
	return delete_user_data();
}

/*
*Prosledjuju se podaci sa modala za kreiranje novog korisnika, proveravaju se prosledjeni podaci ukoliko j eneki paramatar praan prikazuje se poruka
*/
function unesi_podatke_sa_forme()
{
	$ret = new stdClass();
	$flag=true;
	$poruka="";

	$name = trim($_REQUEST['name']);
	$email = trim($_REQUEST['email']);
	$password = trim($_REQUEST['password']);
	$user_rola = trim($_REQUEST['user_rola']);

	if($flag)
	{
       $flag = ($name =='' || empty($name) ) ? false: $flag;
       $poruka = ($flag) ? $poruka : "*Enter name"; 
      
	}
	if($flag)
	{
       $flag = ($email =='' || empty($email) ) ? false: $flag;
       $poruka = ($flag) ? $poruka : "*Enter email"; 
       
	}
	if($flag)
	{
       $flag = ($password =='' || empty($password) ) ? false: $flag;
       $poruka = ($flag) ? $poruka : "*Enter password"; 
       
	}
	if($flag)
	{
       $flag = ($user_rola =='-1' || empty($user_rola) ) ? false: $flag;
       $poruka = ($flag) ? $poruka : "*Enter rola"; 
      
	}

	if($flag)
	{
		//prosledjuju se promenljive funkcijij saveData user klase koja insertuje podatke u bazu
		$flag =true;
		$save = new User();
        $save->saveData($name, $email, $password,$user_rola);

	}
		$ret->flag=$flag;
		$ret->poruka=$poruka;


	echo json_encode($ret);
	exit;
}

/*
*vraca podatke korisnika po id korisnika i ispisuje u modalu. 
*/
function update_user()
{
	

	$id = $_REQUEST['id'];
	$edit = new User();
	$podaci = $edit->editdata($id);
	$data=array("data_for_edit"=>$podaci);
    echo json_encode($data);

	
}
/*
* updejtuje podatke korisnika, provera da li je neko polje prazno 
*/
function change_data()
{
	$ret = new stdClass();
	$flag=true;
	$poruka="";

	$id =trim($_REQUEST['id']);
	$name = trim($_REQUEST['name']);
	$email = trim($_REQUEST['email']);
	$password = trim($_REQUEST['password']);
	$user_rola = trim($_REQUEST['user_rola']);

	if($flag)
	{
       $flag = ($name =='' || empty($name) ) ? false: $flag;
       $poruka = ($flag) ? $poruka : "*Enter name"; 
      
	}
	if($flag)
	{
       $flag = ($email =='' || empty($email) ) ? false: $flag;
       $poruka = ($flag) ? $poruka : "*Enter email"; 
       
	}
	if($flag)
	{
       $flag = ($password =='' || empty($password) ) ? false: $flag;
       $poruka = ($flag) ? $poruka : "*Enter password"; 
       
	}
	if($flag)
	{
       $flag = ($user_rola =='-1' || empty($user_rola) ) ? false: $flag;
       $poruka = ($flag) ? $poruka : "*Enter rola"; 
      
	}
	//prosledjuju se parametri funkciji savedata iz user klase
	if($flag)
	{
		$flag =true;
		$save = new User();
        $save->saveData($name, $email, $password,$user_rola);

	}
		$ret->flag=$flag;
		$ret->poruka=$poruka;
	

	echo json_encode($ret);
	exit;
}



/*
*brise podatke iz baze
*/

function delete_user_data()
{
	$id =  $_REQUEST['id'];

	$delete = new User();
	$delete_data = $delete->delete_user_by_id($id);
	$flag =true;
	$data=array("flag"=>$flag);
    echo json_encode($data);
}

?>