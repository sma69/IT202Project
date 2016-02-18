#!/usr/bin/php
<?php

# this is a comment, yo
echo "begin script ".$argv[0].PHP_EOL;

class Student
{
    private $name;
    private $addresss;
    private $gpa;
    private $year;

    public $major;
    

    
    public function __construct($name)
    {
        $this->name = $name;
    }  
    public function printName()
    {
       echo "name: ".$this->name.PHP_EOL;
    }

    public function PrintStudent()
    { 
    echo "Student: ".PHP_EOL;
    echo "   name: ".PHP_EOL;
    echo "   address: ".PHP_EOL;
    echo "   gpa: ".PHP_EOL;
    echo "   year: ".PHP_EOL;
    }
    public function setGpa($gpa)
    {
       $this->gpa = $gpa;
    }
}

$myStudent = new Student("Steve");
$myStudent->setGPA("2.3");
$myStudent->major = "Information Technology";
$myStudent->printName();

/*
this

whale
block
of comments

*/

$var = "some value";
$var = $var." some other value";
$number = 412342134; //thi is is a comment
$realNumber = 12341234.1241241;
//this is also a comment, datebayo
$arr = array();
$arr[] = 5;
$arr[] = "words";
$arr[] = 5345.2342;
$arr[] = array("food", "water", "shelter","heart");

print_r($arr);

var_dump($arr);



echo "end script ".$argv[0].PHP_EOL;
?>
