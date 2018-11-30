<?php
include_once'../model/m_detail.php';
class controller_class_detail{
	public $current_page;
	public $total_page;
	public function detail(){
	    	
	    		$id=$_GET['id'];
	    		$detail=new M_Detail();
	    		$result=$detail -> Detail_Page($id);
	    		return $result;
	 
	    }
}

?>