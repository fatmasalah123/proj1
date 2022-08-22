<?php
namespace APP\database\contract;
class connection{
    private string $db_server = 'localhost';
    private string $db_username = 'root';
    private string $db_password = '';
    private string $db_name = 'ecommerce';
    
    public \mysqli $conn;

    public function __construct()
    {
        $this->conn = new \mysqli($this->db_server,$this->db_username,
        $this->db_password,$this->db_name);  


        // Check connection
// if ($this->conn->connect_error) {
//     die("Connection failed: " . $this->conn->connect_error);
//   }
//   echo "Connected successfully";
  
    }
}
//new connection;
?>