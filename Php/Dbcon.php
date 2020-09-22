<?php
 
 class DataAccess 

    {

       
        
        public $con;
        
      
        public function __Construct()
        {
            $serverName = "localhost";
        $userName = "root";
        $password = "";
        $dbName = "efarm";
        
        $this->con= mysqli_connect($serverName, $userName, $password, $dbName);
    
      
      
        
            /*if(! $this->con){

               echo"connection failed";



            }

            else{echo"connection establish";}*/
            
            
        }

        public function GetData($sql)
        {
            
    
           $result=mysqli_query( $this->con,$sql);

           return $result;
           
            
        }

        public function ExecuteQuery($sql)
        {
        
    
          
          $sa=mysqli_query( $this->con,$sql);

          
       
          
        }

        public function Dispose()
        {
           mysqli_close( $this->con);
        }
    }






?>



