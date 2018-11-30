<?php
include_once '../model/m_sider_right.php';
include_once'../model/m_numberRecord.php';
class controller_class_slider{
	public $current_page;
	public $total_page;
	public function slider()
	{
	    	$loadAndPaging = new M_LoadAndPaging(); //gọi hàm model
	    	$numberRecord=new M_NumberRecord();
	    	$this->current_page=isset($_GET['page'])? $_GET['page']:1; // kiểm tra số trang trong đường link
	    	$limit=4; // số record hiển thị mỗi trang là 4
	    	$start=$numberRecord->number_record(); // số lượng record trong mysql			
	    	$result =$loadAndPaging->queryLoadShoePaging($start-4,$limit);
	    	return $result;
	    }
}

?>