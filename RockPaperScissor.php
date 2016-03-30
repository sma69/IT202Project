#!/usr/bin/php
<?
require_once("clientDB.php.inc");



   private $db = new ClientDB();
   private$player1 = db->getClientID($name);
   $answer2($rock,$paper,$scissor);
   private $p1win =  $player."wins";
   private $p2win = "player 2 wins";
   $request = $_POST['request'];
   $answer = '';
   $rock = "rock";
   $paper = "paper";
   $scissor = "scissor";
   $quit = "quit";
   
   public beats($answer1, $answer2)
   {
   	switch($answer1 == $rock)
	{
	  case ($answer2 == $paper):
	      $answer $p2win."<p>";
	      break;
	  case ($answer2 == $scissor):
	      $answer = $p1win."<p>";
	      break;
	  case ($answer2 == $rock):
	      $answer = "Tie!<p>";
	      break;
	}    
	switch($answer1 == $paper)
	{
	  case ($answer2 == $paper):
	      $answer = "Tie!<p>";
	      break;
	  case ($answer2 == $scissor):
	      $answer = $p2win."<p>";
	  case ($answer2 == $rock):
	      $answer = $p1win."<p>";
	}
	switch($answer1 == $scissor)
	{
	  case ($answer2 == $paper):
	      $answer = $p2win."<p>";
	  case ($answer2 == $scissor):
	      $answer = $p1win."<p>";
	  case ($answer2 == $rock):
	      $answer = "Tie!<p>";
	      break;
	}
	echo $answer;
    }
   

switch($request)
{
      case 'move':
      {
         echo array_rand($answer2);
         beats($answer1,$answer2);

      }
      case 'challenge':
      {
      }
   }	    
   

      $answer = '';
      $rock = "rock";
      $paper = "paper";
      $scissor = "scissor";
      $quit = "quit";
      



