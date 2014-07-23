<?php

	 
class NewNumber extends Eloquent {
		var $number;
		var $feedback_message;
		var $variable_default;

		
		public function set_number($new_number) {
		
	//	setting defaults
		$this->feedback_message = "Success! ";
		$this->variable_default = 4;
		
	//	checking if number is set
		if (isset($new_number)){
		
		//	if yes, then check if it's a number
			if (is_numeric($new_number)) {
			
			//	if yes, then set to intiger
				$this->number = intval($new_number);
				
			//	check for 0, 1, or negative numbers
				if ($this->number == 0){
					$this->feedback_message = "You really wanted zero results? ";
					//
				}
				elseif ($this->number == 1){
					$this->feedback_message = "One. Singular sensation! ";
				}
				elseif ($this->number < 0){
					$this->number = $this->number * -1;
					$this->feedback_message = "Why so negative? I strive to be positive whenever I can.";
				}
				elseif ($this->number > 100) {
					$this->feedback_message = "We&rsquo;d be here all day if I gave you " . $this->number . "! I can do 99 though. ";
					$this->number = 99;
				}
			}
			
		//	if not a number, set to default value and give can't process characters message
			else {
				$this->number = $this->variable_default;
				$this->feedback_message = "I can't process anything but numbers, sad to say. But I did want to give you some results";
				}
		}
		
	//	if not set set default and welcome message
		else{
			$this->feedback_message = "Welcome! ";
			$this->number = $this->variable_default;
		}
		
	}
}