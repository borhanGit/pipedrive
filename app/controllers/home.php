<?php
class Home extends Controller{

    public function index()
    {
         $json = file_get_contents('php://input');
         $data = json_decode($json,true);
         $email = $data['current']['email'][0]['value'];

            try {
                 $to = $email;
                $subject = "Pipedrive";
                $txt = "Hello"." ".$to;
                $headers = "From: support@techservicebd.com";
            
                mail($to,$subject,$txt,$headers);
                echo "successfully";
            } catch(Exception $e)
            {
                echo  $e->getMessage();
            }
    }

}
?>