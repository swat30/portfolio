<?php
class portfolio{
	private $name;
	private $description;
	private $image;
	private $id;
	private $order;
	private $next;
	private $prev;
	private $url;
	
	public function __construct($id = null){
		$link = site::getLink();
		if($id == null)
			$id = portfolio::getByOrder(1, $link);
		
		$sql = "SELECT * FROM sites WHERE id = ".$id;
		$results = site::db_query($sql, $link);
		$results = $results[0];
		
		$this->name = $results['name'];
		$this->description = $results['description'];
		$this->image = $results['image'];
		$this->id = $id;
		$this->order = $results['order'];
		$this->url = $results['url'];
	}
	
	public function getImage(){
		if(!empty($this->image))
			return $this->image;
		return 'thumb.jpg';
	}
	
	public function getName(){
		return $this->name;
	}
	
	public function getDescription(){
		return $this->description;
	}
	
	public function getOrder(){
		return $this->order;
	}
	
	public function getPrev(){
		return $this->prev;
	}
	
	public function getNext(){
		return $this->next;
	}
	
	public function getId(){
		return $this->id;
	}
	
	public function getUrl(){
		return $this->url;
	}
	
	public function setPrev($prev){
		$this->prev = $prev;
	}
	
	public function setNext($next){
		$this->next = $next;
	}
	
	public static function getByOrder($order){
		$link = site::getLink();
		$sql = "SELECT `id` FROM `sites` WHERE `order` = ".$order;
		$data = site::db_query($sql);
		
		return $data[0]['id'];
	}
	
	public static function getAll(){
		$link = site::getLink();
		$sql = "SELECT `id` FROM `sites` ORDER BY `order` ASC";
		$data = site::db_query($sql);
		
		foreach($data as &$site){
			$site = new portfolio($site['id']);
		}
		
		return $data;
	}
}
?>