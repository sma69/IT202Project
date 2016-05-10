
<?php



class RockPaperScissor
{

 


   public function beats($answer1, $answer2)
   {
        $p1win =  "player 1 wins";
        $p2win = "player 2 wins";
        $rock = "rock";
        $paper = "paper";
        $scissor = "scissor";
        $answer = '';
	if (($answer1 == $rock) && ($answer2 == $paper))
	{
	    $answer = $p2win."<p>";
	}
	
	if (($answer1 == $rock) && ($answer2 == $scissor))
	{      
	    $answer = $p1win."<p>";
	}
	
	if ($answer1 == $answer2)
	{
	    $answer = "Tie!<p>";
	}
	
	if (($answer1 == $paper) && ($answer2 == $rock))
	{
	   $answer = $p1win."<p>";
	}
	
	if (($answer1 == $paper) && ($answer2 == $scissor))
	{      
	    $answer = $p2win."<p>";
	}
	
	if (($answer1 == $scissor) && ($answer2 == $rock))
	{
	    $answer = $p2win."<p>";
	}
	
	if (($answer == $scissor) && ($answer2 == $paper))
	{
	    $answer = $p1win."<p>";
	}

	echo $answer;
   }  
}

?>

