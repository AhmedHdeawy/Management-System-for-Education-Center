
<?php 

class Validator{

	function checkString($value, $key){

		$pattern = "^[A-Za-z][0-9][ا-ي]'\",().:-";
		$validator = eregi($pattern, $value);

		if($validator == false){
			throw new Exception("Error: The $key must be a valid String");
		}

		return $validator;
	}


	function checkEmail($value, $key){

		
		$validator = filter_var($value, FILTER_VALIDATE_EMAIL);

		if($validator == false){
			throw new Exception("Error: The $key must be a valid Email");
		}

		return $validator;
	}


	function checkUrl($value, $key){

		
		$validator = filter_var($value, FILTER_VALIDATE_URL);

		if($validator == false){
			throw new Exception("Error: The $key must be a valid URL");
		}

		return $validator;
	}


	function checkIP($value, $key){

		
		$validator = filter_var($value, FILTER_VALIDATE_IP);

		if($validator == false){
			throw new Exception("Error: The $key must be a valid IP");
		}

		return $validator;
	}


	function checkInteger($value, $key){

		
		$validator = filter_var($value, FILTER_VALIDATE_INT);

		if($validator == false){
			throw new Exception("Error: The $key must be a valid number");
		}

		return $validator;
	}

	function checkRequired($value){
		$validator = empty($value);

		if($validator == flase){
			throw new Exception("Error!! must be not Empty");
		}

		return $validator;
	}


	// Function Sanitization

	function sanitiziationItem($value, $key){

		$flag = NULL;

		switch ($key) {
			case email:
				$value = substr($value, 0, 250);
				$filter = FILTER_SANITIZE_EMAIL);
				break;
			
			case url:
				$filter = FILTER_SANITIZE_URL;
				break;

			case int:
				$filter = FILTER_SANITIZE_NUMBER_INT;
				break;

			default:
				$filter = FILTER_SANITIZE_STRING;
				$flag = FILTER_FLAG_NO_ENCODE_QUOTES;
				break;
		}

		$validator = filter_var($value, $filter, $key);
		if($validator == flase){
			throw new Exception("Error!! must be not Empty");
		}

		return $validator;
		
	}

// End of Class
}
?>