<!-- <?php

class DB
{
  //Databse Connection

    protected $servername = "database-2.cvjx5pxclqbm.us-east-2.rds.amazonaws.com";
    protected $username = "admin";
    protected $password = "harmeet2001";
    protected $dbname = "zwiggy";

    public $conn = null;

    public function __construct()
    {
        $this->conn = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);
        if ($this->conn->connect_error) {
            echo "Connection failed: " . $this->conn->connect_error;
        }
        // echo "Connected successfully <br/>";
    }

    public function __destruct()
    {
        $this->closeConnection();
    }

    protected function closeConnection()
    {
        if($this->conn != null)
        {
            $this->conn->close();
            $this->conn = null;
        }
    }
}


    
?> -->
