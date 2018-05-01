<?php 

class Render{
	protected $data 	= array();
	protected $sentence	= null;

	function words(array $data){
		foreach ($data as $word) {
			$this->data[] = $word;
		}
		return $this;
	}

	function separador($separador){
		foreach ($this->data as $word) {
			$this->sentence .= $word . $separador;
		}
		return $this;
	}
	function get(){
		return $this->sentence;
	}
}