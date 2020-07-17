<?php

class winking{
   public $send_id;
   public $recieve_id;

    function set_send_id($send_id){
        $this->send_id = $send_id;
    }

    function get_send_id(){
        return $this->send_id;
    }

    function set_recieve_id($recieve_id){
        $this->recieve_id = $recieve_id;
    }

    function get_recieve_id(){
        return $this->recieve_id;
    }

    function winkFunc($from_login_id, $to_u_id){
        require "Configuration/Configuration.php";
        $conn = OpenCon();

        $sql = "insert into wink (sender_id, receiver_id) values ('".$from_login_id."','".$to_u_id."') ";
        $result = mysqli_query($conn,$sql);

        if($result){
            //return $result;
            header("Location:View/home.php");
        }
        else{
            echo "Error occured while returning";
        }

        CloseCon($conn);
    }

    function winkSelectFunc($from_login_id){
        require "../Configuration/Configuration.php";
        $conn = OpenCon();

        $sql = "SELECT (sender_id, receiver_id) FROM WINK WHERE  sender_id = '".$from_login_id."'";
        $result = mysqli_query($conn,$sql);

        if($result){
            //  return $result;
            header("Location: ../home.php");
        }
        else{
            echo "Error occured while returning";
        }

        CloseCon($conn);
    }
}

?>