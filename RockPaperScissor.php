
<?php
require_once("clientDB.php.inc");
require_once("RockPaperScissor.php.inc");




   $db = new clientDB('connect.ini');
   $rps = new RockPaperScissor();
   $rock = "rock";
   $paper = "paper";
   $scissor = "scissor";

   $hands = array($rock,$paper,$scissor);
   $ans2;

   $request = $_POST['request'];
   $ans1 = $_POST['hand'];
   $pName = $_POST['playerName'];

   


switch($request)
{
      case 'move':
      {
         
         $key = array_rand($hands);
         $ans2 = $hands[$key];
         $rps->beats($ans1,$ans2);
         $db ->addNewPlayer($pName);
         $db ->addNewMatch($pName,$db ->addNewPlayer($pName));

      }
      case 'challenge':
      {
      }
}	      

?>