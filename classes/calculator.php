<?php

	class Calculator {

		public $a = NULL;

		public $b = NULL;

		public $operator = NULL;

		public function __construct($data) {

			if (isset($data['a'])) {

				$this->a = $data['a'];

			}

			if (isset($data['b'])) {

				$this->b = $data['b'];

			}

			if (isset($data['operator'])) {

				switch ($data['operator']) {
				    case '+':
				        $this->operator = '+';
				        break;
				    case '-':
				        $this->operator = '-';
				        break;
				    case '*':
				        $this->operator = '*';
				        break;
				    case '/':
				        $this->operator = '/';
				        break;
				   
				}

			}			

		}

		public function getResult() {

			if ($this->operator == "+") {

				return $this->a + $this->b;

			}
			
			if ($this->operator == "-") {

				return $this->a - $this->b;

			}

			if ($this->operator == "*") {

				return $this->a * $this->b;

			}

			if ($this->operator == "/") {

				return $this->a / $this->b;

			}

			

			

		}

		public function encodeJSON() {

			$jsonoutput = array('a' => $this->a, 'b' => $this->b, 'operator' => $this->operator, 'result' => $this->getResult());

			return json_encode($jsonoutput);

		}

	}


	$calculator = new Calculator($_GET);

	echo $calculator->encodeJSON();

?>
