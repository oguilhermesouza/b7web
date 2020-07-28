<?php 

namespace classe;

class Calculadora {
	private $numero;
	private $total;

	public function Add($n) {
		return $this->numero += $n;
	}

	public function Sub($n) {
		return $this->numero -= $n;
	}

	public function multiply($n) {
		return $this->numero *= $n;
	}

	public function divide($n) {
		return $this->numero /= $n;
	}

	public function getTotal() {
		return $this->numero;
	}

	public function clear() {
		return $this->numero = 0;
	}
}



