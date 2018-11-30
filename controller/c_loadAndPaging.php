<?php
include_once '../model/m_loadAndPaging.php';
include_once'../model/m_numberRecord.php';
class controller_class_load{
	public $current_page;
	public $total_page;
	public function product()
	{
	    	$loadAndPaging = new M_LoadAndPaging(); //gọi hàm model
	    	$numberRecord=new M_NumberRecord();
	    	$this->current_page=isset($_GET['page'])? $_GET['page']:1; // kiểm tra số trang trong đường link
	    	$limit=4; // số record hiển thị mỗi trang là 4
	    	$number_record=$numberRecord->number_record(); // số lượng record trong mysql
	    	$this->total_page= ceil($number_record / $limit);
	    	if($this->current_page > $this->total_page){
	    		$this->current_page=$this->total_page;
	    	}else if($this->current_page <1){
	    		$this->current_page=1;
	    	}
	    	$start=($this->current_page -1)*$limit;
	    	$result =$loadAndPaging->queryLoadShoePaging($start,$limit);
	    	return $result;
	    }
}

?>