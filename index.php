<?php

  $obj = new main();

  class main {
	  	  
    public function __construct() {
       
	   htmlTags::printHeaders("STRING ARRAY FUNCTION -- ASSIGNMENT -- CONSTRUCTOR CALLED");
	   htmlTags::printHorizontal();
	   
	   //STRING VARIABLES
	   $text1 = "Wilfred Castelino";
	   $text2 = "red";
	   $stringOneFunctionNames = array("strlen","str_word_count","strrev","strtoupper","strtolower");
	   $stringTwoFunctionNames = array("strpos","strcmp");
	   $stringThreeFunctionNames = array("substr","str_pad");
       
	   //CALL STATIC STRING FUNCTIONS
	   stringFunctions::printOneString($text1 , $stringOneFunctionNames);
	   stringFunctions::printTwoStrings($text1, $text2, $stringTwoFunctionNames);
	   stringFunctions::printThreeStrings($text1 , $stringThreeFunctionNames);
       
	   $myArray = array("One","Two","Three","Four");
	   $name1 = array("Wilfred", "Bennet", "Amey", "Aviral");
	   $name2 = array("Wilfred", "Aviral", "Gaurav");
	   $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
	   
	   //CALL STATIC ARRAY FUNCTIONS
       arrayFunctions::printOneArray($myArray);
	   arrayFunctions::chunkArray($myArray);
	   arrayFunctions::changeKeyArray($age);
	   arrayFunctions::combineArray($name1 , $myArray);
	   arrayFunctions::countArray($name1);
	   arrayFunctions::flipArray($age);
	   arrayFunctions::fillArray();
	   arrayFunctions::intersectArray($name1, $name2);
	   arrayFunctions::arrayKeys($age);
	   arrayFunctions::shiftArray($age);
    }
	
	public function __destruct() {
		 
	  htmlTags::printHeaders("DESTRUCTOR CALLED: I am done with the assignment");
    }
  }

  class stringFunctions {
	  
     static public function printOneString($inputText, $str) {
		 
		 foreach ($str as $value)
		 {
				htmlTags::printFirstStringHeaders($inputText, $value);
				htmlTags::printHorizontal();
		 }        
     }
	 
	 static public function printTwoStrings($inputText1, $inputText2, $str) {
		 
		 foreach ($str as $value)
		 {
				htmlTags::printSecondStringHeaders($inputText1, $inputText2, $value);
				htmlTags::printHorizontal();
		 }  		
     }
	 
	 static public function printThreeStrings($inputText1, $str) {
		 
		 foreach ($str as $value)
		 {
				htmlTags::printThirdStringHeaders($inputText1, $value);
				htmlTags::printHorizontal();
		 }  		
     } 		
  }
  
  class arrayFunctions {
	   
	 static public function printOneArray($array) {
		 
		htmlTags::printHeaders("Array Function 1 :array");
		print_r($array);
		htmlTags::printHorizontal();  
      }	

	 static public function chunkArray($array) {
		 
		htmlTags::printHeaders("Array Function 2 :chunk array");
		print_r(array_chunk($array, 2));
		htmlTags::printHorizontal();  
      }	
	  
	 static public function changeKeyArray($array) {
		 
		htmlTags::printHeaders("Array Function 3 :array_change_key_case");
		print_r(array_change_key_case($array,CASE_UPPER));
		htmlTags::printHorizontal();  
      }
	  
	 static public function combineArray($array1,$array2) {
		 
		htmlTags::printHeaders("Array Function 4 :array_combine");
		$combine=array_combine($array1,$array2);
		print_r($combine);
		htmlTags::printHorizontal();  
      }
	  
	 static public function countArray($array) {
		 
		htmlTags::printHeaders("Array Function 5 :array_count_values");
		print_r(array_count_values($array));
		htmlTags::printHorizontal();  
      }
	  
	 static public function flipArray($array) {
		 
		htmlTags::printHeaders("Array Function 6 :array_flip");
		print_r(array_flip($array));
		htmlTags::printHorizontal();  
      }
	  
	 static public function fillArray() {
		 
		htmlTags::printHeaders("Array Function 7 :array_fill");
		print_r(array_fill(3,4,"blue"));
		htmlTags::printHorizontal();  
      }
	  
	 static public function intersectArray($array1,$array2) {
		 
		htmlTags::printHeaders("Array Function 8 :array_intersect");
		print_r(array_intersect($array1,$array2));
		htmlTags::printHorizontal();
      }
	  
	 static public function arrayKeys($array) {
		 
		htmlTags::printHeaders("Array Function 9 :array_keys");
		print_r(array_keys($array));
		htmlTags::printHorizontal();
      }
	  
	 static public function shiftArray($array) {
		 
		htmlTags::printHeaders("Array Function 10 :array_shift");
		echo array_shift($array);
		print_r($array);
		htmlTags::printHorizontal();
      }
    }
	
  class htmlTags {
	   
	 static public function printHorizontal() {
         echo '<hr>';
     }
	 
	 static public function printHeaders($text) {
         echo '<h1>' . $text . '</h1>';
     }
	 
	 static public function printFirstStringHeaders($text,$output) {
         echo "<h1> String Function :</h1>" .$output ." " ."<h2> of </h2>" .$text ." " ."<h2> is </h2>" ." " .$output($text);
     }
	 
	 static public function printSecondStringHeaders($text1, $text2, $output) {
         echo  "<h1> String Function :</h1>" .$output ." " ."<h2> value </h2>" ." " ."<h2> is </h2>" ." " .$output($text1,$text2);
     }
	 
	 static public function printThirdStringHeaders($text,$output) {
         echo  "<h1> String Function :</h1>" .$output ." " ."<h2> of </h2>" .$text ." " ."<h2> is </h2>" ." " .$output($text, 4, 3);
     }
	 	 
  }
?>