<?php

class Validate {
	private $_passed = false,
			$_errors = array(),
			$_db = null;
	
	public function __construct(){
		$this->_db = DB ::getInstance();
	}
	
	public function check ($source, $items = array()){ // hier werden die regeln überprüft die erste foreach schleife durchläuft das array der post's und nimmt die regeln davon bei dem zweien foreach übrtnimmt er dann den inhalt der regeln des jeweiligen post's
		foreach($items as $item => $rules){
			foreach($rules as $rule => $rule_value){
				//echo "{$item}{$rule} must be {$rule_value}<br>"; // ist nur zur verständnis was durchlaufen wird 
				 
				$value = trim ($source[$item]); // es wird der wert jedes gegenstaned genommen
				$item = escape($item);
				
				if($rule === 'required' && empty($value)){ // es wird hier überprüft ob die bedingungen von register->validations erfüllt werden welches er mit dem switch case überprüft für jedes post
					$this->addError("{$item} ist erforderlich");
				} else if (!empty($value)){
					switch ($rule) {
						case 'min':
							if(strlen($value) < $rule_value){
								$this->addError("{$item} muss aus mindestens {$rule_value} zeichen bestehen.");
							}
							break;
						case 'max':
							if(strlen($value) > $rule_value){
								$this->addError("{$item} muss aus mindestens {$rule_value} zeichen bestehen.");
							}
							break;
						case 'matches':
							if($value != $source[$rule_value]){
								$this->addError("{$rule_value} muss passen {$item}");
								
							}
							
							break;
						case 'unique':
							$check = $this->_db->get($rule_value, array($item, '=', $value));
							if($check->count()){
								$this->addError("{$item} existiert bereits.");
								
							}
							break;
					}
					
				}
			}
			
		}
		if(empty($this->_errors)){
			$this->_passed = true;
			
		}
		return $this;
	}
	private function addError($error){
		$this->_errors[]=$error;
		
	}
	
	public function errors (){
		
		return $this->_errors;
	}
	
	public function passed(){
		return $this->_passed;
	}
}
