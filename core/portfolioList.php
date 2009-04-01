<?php
class portfolioList{
	private $head;
	private $first;
	
	public function __construct(){
		$this->head = null;
		$this->first = null;
	}
	
	public function setCur($id){
		if($this->head != null){
			$pointer = $this->head;
			do {
				if($pointer->getId() != $id){
					$pointer = $pointer->getPrev();
				} else {
					break;
				}
			} while($pointer != null && $pointer != $this->head);
			$this->head = $pointer;
		}
	}
	
	public function getCur(){
		return $this->head;
	}
	
	public function add($node){
		$temp = $this->head;
		$this->head = $node;
		$this->head->setPrev($temp);
		
		if($temp != null){
			$oldNext = $temp->getNext();
			$temp->setNext($this->head);
			
			if($oldNext != null){
				$this->head->setNext($oldNext);
			} else
				$this->head->setNext($temp);
				
			$this->first->setPrev($this->head);
		} else 
			$this->first = $this->head;
	}
	
	public function init(){
		$ports = portfolio::getAll();
		for($i = count($ports)-1; $i >= 0; $i--){
			$this->add($ports[$i]);
		}
	}
}
?>