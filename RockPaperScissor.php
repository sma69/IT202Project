
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
   $ans1 = 
   $pName = $_POST['playerName'];

   


switch($request)
{
      case 'rock':
      {
      $ans1 = $rock;
      }
      case 'paper':
      {
      $ans1 = $paper;
      }
      case 'scissor':
      {
      $ans1 = $scissor;
      }
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