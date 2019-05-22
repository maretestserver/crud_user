<?php
class Dbase 
{
    //properties
    private $_host = "localhost";
    private $_user = "root";
    private $_password = "";
    private $_name = "markostankovic";
   
    public $_conndb = false;
    public $_last_query = null;
   
    

    
    //constructor
    
    public function __construct() 
    {
        $this->connect();
    }
    
    /*
     * konektuje se na bazu
     */
    
    private function connect()
    {
        
        $this->_conndb= @new mysqli($this->_host, $this->_user, $this->_password, $this->_name);
        if($this->_conndb->connect_error)
        {
            die('Connection Error');
        }
        
     mysqli_set_charset($this->_conndb, 'utf8');
    

         
    }
  
    /*
     * zatvara konekciju
     */
    
    public function close()
    {
        if(!mysqli_close())
        {
            die("Closing connection failed.");
        }
    }
    /*
     *izbegaca sql injection, 
     */
    public function escape($value)
    {
        if(function_exists("mysqli_real_escape_string"))
        {
            if(get_magic_quotes_gpc())
            {
                $value = stripslashes($value);
            }
             
             $value = mysqli_real_escape_string($this->_conndb, $value);

            
        }
        else
        {
            if(!get_magic_quotes_gpc())
            {
                $value = addcslashes($value);
            }
        }
       return $value;
    }
    
    
    /*
     * izvrsava sql upit
     */
    
    public function query($sql)
    {
        $this->_last_query= $sql;
        $result = mysqli_query( $this->_conndb, $sql);
      
        $this->displayQuery($result);
        return $result;
    }
    
    /*
     * prikazuje podatke odnosno upit gde je greska
     */
    public function displayQuery($result)
    {
        if(!$result)
        {
            $output = "Database query failed:". mysqli_error()."<br>";
            $output.="Last query was: ".$this->_last_query;
            die($output);
        }
        else 
        {
            $this->_affected_rows= mysqli_affected_rows($this->_conndb);
        }
 
    }
    
    
    /*
     *uzima sve podatke iz querija
     */
    public function fetchAll($sql)
    {
        $result = $this->query($sql);
        $out = array();
        
        while($row = mysqli_fetch_assoc($result))
        {
            $out[] = $row;
        }
        //mysqli_free_result($result);
        
        return $out;
    }


   
    
    
    
    
}

?>