<?php

require_once("error.php.inc");

class playerDB
{   
   public function __construct($iniFile)
   {
     $ini = parse_ini_file($iniFile,true);
     $this->logger = new errorLogger("/var/log/it202.log");
     $this->db = new mysqli(
     $ini['playerDB']['host'],
     $ini['playerDB']["user"],
     $ini['playerDB']["password"],
     $ini['playerDB']["db"]);
     $this->salt = $ini['loginDB']['salt'];
     if ($this->db->connect_errno > 0 )
     {
        $this->logger->log(__FILE__.__LINE__."failed to connect to database re: ".$this->db->connect_error);
        exit(0);
     }
     $this->logger->log("testing");
   }
   
   public function __destruct()
   {
      $this->db->close();
   }
   public function getPlayerId($name)
   {
    $query = "select playerId from players where clientName = '$name';";
    $results = $this->db->query($query);
    if (!$results)
    {
      $this->logger->log("error with results: ".$this->db->error);
      return 0;
    }
    $ = $results->fetch_assoc();
    if (isset($player['playerId']))
    {
    return $player['playerId'];
    }
    return 0;
   }
  public function addNewPlayer($name,$password)
  {
    if ($this->getClientId($name) != 0)
    {
      $this->logger->log("user $name already exists!!!!!");
      $response = array(
      "message"=>"user $name already exists!",
      "success"=>false
      );
      return $response;
    }
    $now = date("Y-m-d h:i:s",time());
    $name = $this->db->real_escape_string($name);
    $password = $this->saltPassword($password);
    $addQuery = "insert into players (clientName, wins,lastLogin) values ('$name','$wins,'$now');";
    $results = $this->db->query($addQuery);
    if (!$results)
    {
      $this->logger->log("error: ".$this->db->error);
    }
    return array("success"=>true);
  }
}

?>