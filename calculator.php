<?php 

/*
*
* This is a simpel php oop calculator, hope it will be
* of use, enjoy and happy coding. 
*
*/

class Calculator
{

	public function operators(){

		$operaters = array('+', '-', '/', '*');
		return $operaters;

	}


	public function get_Operator(){

		$operaters = $this->operators();

		foreach($operaters as $operater){

			echo '<option>' . $operater . '</option>';
			
		}
	}


	public function run(){

		$operaters = $this->operators();

		if(isset( $_POST['calculate'] ))

		{		

			$operatorr = $_POST['operator'];

			foreach($operaters as $operater)

			{	

				if($operatorr == $operater)

				{

					$this->sum();

				}

			}	

		}
	}

	public function sum(){

		$operaters = $this->operators();

		foreach($operaters as $operater)
		{

			if(isset( $_POST['calculate'] ))

			{
		
				$operatorr = $_POST['operator'];

				if($operatorr == $operater) // can also run without this if statement 

				{

				$value1 = $_POST['val1'];
				$value2 = $_POST['val2'];

				$result = eval("return $value1 $operater $value2;");

				return $result;

				}

			}
		}

	}

}
