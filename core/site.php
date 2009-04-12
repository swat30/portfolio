<?php
include_once('portfolio.php');
include_once('portfolioList.php');
class site {
	private $curClass;
	private $template;
	private $pageData;
	private $obj;
	private static $dbLink;
	
	public function __construct(){
		$this->curClass = 'main';
		$this->template = 'main';
	}
	
	public function init($get){
		if(!empty($get)){
			$this->curClass = $get['section'];
			
			if($this->curClass == 'portfolio'){
				$this->template = 'portfolio';
				$this->loadPortfolio($get['id']);
			} else
				$this->template = 'subpage';
		} else {
			$this->curClass = 'main';
			$this->template = 'main';
			$this->loadPortfolio($get['id']);
		}
	}
	
	public function getCurClass(){
		return $this->curClass;
	}
	
	public function getTemplate(){
		return $this->template;
	}
	
	public function getPageData(){
		return $this->pageData;
	}
	
	public function &getObj(){
		return $this->obj;
	}
	
	public static function getLink(){
		return $dbLink;
	}
	
	public static function setLink($link){
		site::$dbLink = $link;
	}
	
	public static function closeDB(){
		site::$dbLink->close();
	}
	
	public function loadPortfolio($id){
		$this->obj =& new portfolioList();
		$this->obj->init();
		$this->obj->setCur($id);
	}
	
	public static function db_query($sql){
		$row = array();

		if($results = site::$dbLink->query($sql)){
			
			while($data = $results->fetch_assoc()){
				$row[] = $data;
			}
			
			$results->close();
		}
		
		return $row;
	}
}
?>