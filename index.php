<?php

  $obj = new main();
  
  for ($count = 0; $count <20; $count++)
  {
	    $text = "wilfred";
        $obj->stringFunct($text, $count);
  }

  
  class main {

    public function __construct() {

      echo "<h1> STRING FUNCTION -- ASSIGNMENT -- CONSTRUCTOR CALLED </h1></br>";
	  echo "<hr>";

    }
	
	public function stringFunct($str, $number) {

	   switch($number)
	   {
		   	case 0:
			echo "<h2> String Function 1 ---- strlen </h2>";
	        echo "<h3> The length of the string</h3>" ." " .$str ." " ."<h3> is </h3>" ." " .strlen($str);
			break;
			
			case 1:
			$text1 = "Castelino";
			$text2 = $str ." ".$text1; 
			echo "<h2> String Function 2 ---- str_word_count </h2>";
	        echo "<h3> Word Count of </h3>" ." " .$str ." " .$text1."<h3> is </h3>" ." " .str_word_count($text2);
			break;
			
			case 2:
			echo "<h2> String Function 3 ---- strrev </h2>";
	        echo "<h3> Reverse String of </h3>" ." " .$str ." " ."<h3> is </h3>" ." " .strrev($str);
			break;
			
		    case 3:
			echo "<h2> String Function 4 ---- strpos </h2>";
	        echo "<h3> The position of the string</h3>" ." " .$str ." " ."<h3> is </h3>" ." " .strpos($str , "red");
			break; 
			
			case 4:
			echo "<h2> String Function 5 ---- substr </h2>";
	        echo "<h3> SubString of </h3>" ." " .$str ." " ."<h3> is </h3>" ." " .substr($str , 4, 3);
			break;
			
		    case 5:
			echo "<h2> String Function 6 ---- str_pad </h2>";
	        echo "<h3> Returns Padded string </h3>" ." " .$str ." " ."<h3> is </h3>" ." " .str_pad($str, 12 , "*");
			break;

            case 6:
			echo "<h2> String Function 7 ---- str_repeat </h2>";
	        echo "<h3> String Repeat of: </h3>" ." " .$str ." " ."<h3> is </h3>" ." " .str_repeat($str, 4);
			break; 

            case 7:
			echo "<h2> String Function 8 ---- str_split </h2>";
			$arr1 = str_split($str);
	        echo "<h3> Returns Padded string </h3>" ." " .$str ." " ."<h3> is </h3>";
			print_r($arr1);
			break; 
   
            case 8:
			$str1 = "Castelino";
			echo "<h2> String Function 9 ---- strcmp </h2>";
	        echo "<h3> Comparison of two strings </h3>" ." " .strcmp ($str, $str1);
			break; 
            
            case 9:
			echo "<h2> String Function 10---- strtoupper</h2>";
			echo "<h3> Lower string is:</h3>" ." " .$str;
	        echo "<h3> String in CAPS is : </h3>" ." " .strtoupper($str);
			break;

            case 10:
			echo "<h1> ARRAY FUNCTION -- ASSIGNMENT</h1></br>";
			echo "<h2> Array Function 1 ---- Array() </h2>";
			$cars = array("BMW", "Mercedes", "Chevrolet");
	        echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
			break;
			
			case 11:
			echo "<h2> Array Function 2 ---- array_change_key_case </h2>";
	        $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
            print_r(array_change_key_case($age,CASE_UPPER));
			break;
			
			case 12:
			echo "<h2> Array Function 3 ---- array_chunk </h2>";
	        $cars=array("Volvo","BMW","Toyota","Honda","Mercedes","Opel");
            print_r(array_chunk($cars,2));
			break;
			
		    case 13:
			echo "<h2> Array Function 4 ---- array_combine </h2>";
	        $fname=array("Wilfred","Ben","Gaurav");
            $age=array("25","22","27");

            $c=array_combine($fname,$age);
            print_r($c);
			break; 
			
			case 14:
			echo "<h2> Array Function 5 ---- array_count_values </h2>";
	        $a=array("A","C","D","A","D");
            print_r(array_count_values($a));
			break;
			
		    case 15:
			echo "<h2> Array Function 6 ---- array_fill </h2>";
	        $a1=array_fill(3,4,"blue");
            print_r($a1);
			break;

            case 16:
			echo "<h2> Array Function 7 ---- array_flip </h2>";
	        $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
            $result=array_flip($a1);
            print_r($result);
			break; 

            case 17:
			echo "<h2> Array Function 8 ---- array_intersect </h2>";
			$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
            $a2=array("e"=>"red","f"=>"green","g"=>"blue");

            $result=array_intersect($a1,$a2);
            print_r($result);
			break; 
   
            case 18:
			echo "<h2> Array Function 9 ---- array_keys </h2>";
	        $a=array("Wilfred" => "wilfy","Ben"=>"benzo","Aviral"=>"Avi");
            print_r(array_keys($a));
			break; 
            
            case 19:
			echo "<h2> Array Function 10---- array_shift</h2>";
			$a=array("a"=>"red","b"=>"green","c"=>"blue");
            echo array_shift($a);
            print_r ($a);
			break; 			
	   }
	   
	   echo "<hr>";
	}
    
    public function __destruct() {

      echo '</br> <h1> DESTRUCTOR CALLED: I am done with the assignment</h1>';

    }
  }
  
?>