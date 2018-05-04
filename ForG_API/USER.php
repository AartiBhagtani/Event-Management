<?php
class user{
  private $dbHost = "localhost";
  private $dbusername = "root";
  private $password = "";
  private $dbname = "e-met";
  private $usertb= "users";
  //connect to db
  public function _construct()
  {
    if(!isset($this->db))

    {
      $conn = new mysqli($this->dbhost,$this->dbusername,$this->password,$this->dbname);
      if($conn->connect_error)
      {
        die("failed connection with mysql : ".$conn->connect_error);
      }
      else
      {
        $this->db = $conn;
      }
    }
  }
    //check user
    function checkuser($userData = array())
    {
      if(!empty($userData))
      {
        $prevQuery = "select * from ".$this->usertb."where oauth_provider = "
        .$userData['oauth_provider']."'AND oauth_uid = '".$userData['oauth_uid']."'";

        $prevResult = $this->db->query($prevQuery);

        if($prevResult->num_rows > 0 )
        {
          //user data update as exist
          $query="UPDATE". $this->$usertb."SET first_name = '".$userData['first_name']."',
          last_name = '".$userData['last_name']."',email = '".$userData['email']."',
          gender = '".$userData['gender']."',locale = '".$userData['locale']."',
          picture = '".$userData['oauth_provider']."',link = '".$userData['link']."',
          created = '".date("Y-m-d H:i:s")."', modified = '".date("Y-m-d H:i:s")."'
          WHERE oauth_provider = '".$userData['oauth_provider']."',
          AND oauth_uid = '".$userData['oauth_uid']."'";

            $update= $this->db->query($query);
        }
        else
        {
          //insert data
          $query = "INSERT INTO ".$this->$usertb."SET oauth_provider =
          '".$userData['oauth_provider']."',oauth_uid = '".$userData['oauth_uid']."',
          first_name = '".$userData['first_name']."', last_name = '".$userData['last_name']."',
          email = '".$userData['email']."', gender = '".$userData['gender']."',
          locale = '".$userData['locale']."', picture = '".$userData['picture']."',
          link = '".$userData['link']."', created = '".date("Y-m-d H:i:s")."',
          modified = '".date("Y-m-d H:i:s")."'";

            $insert=$this->db->query($query);
        }
        //get user data from db
        $result = $this->db->query($prevQuery);
        $userData = $result->fetch_assoc();

      }
      return $userData;
  }
}
?>
