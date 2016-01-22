<?php 

/**
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

		if(isset( $_REQUEST['calculate'] ))

		{		

			$operatorr = $_REQUEST['operator'];

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

			if(isset( $_REQUEST['calculate'] ))

			{
		
				$operatorr = $_REQUEST['operator'];

				if($operatorr == $operater) // can also run without this if statement 

				{

				$value1 = $_REQUEST['val1'];
				$value2 = $_REQUEST['val2'];

				$result = eval("return $value1 $operater $value2;");

				return $result;

				}

			}
		}

	}

}