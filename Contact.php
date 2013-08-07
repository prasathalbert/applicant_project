<?php
require_once("./AbstractModel.php");
Class Contact extends Form
{
    public $hostname;
    public $username;
    public $password;
    public $database;
    
	protected $_table = "contacts";
	protected $_pk	  = "id";
    
    public $id;
    public $name;
    public $email;
    
    /**
     * Contact::__construct()
     * Initiate Dataabase Connection
     * @param mixed $hostname
     * @param mixed $username
     * @param mixed $password
     * @param mixed $database
     * @return
     */
    public function __construct($hostname , $username, $password, $database)
    {
        $this->hostname = $hostname;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
        $this->conn_id = $this->db_connect();
    }
}    