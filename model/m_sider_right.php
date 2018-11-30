<?php 
	require_once('common/database.php');

class M_slider_right extends Database
{	

	function __construct()
	{
		parent::__construct();
	}
	public function querySliderRight($start,$limit){
		$conn = parent::getConn();
		$stm = null;
		try {
    	$sql="select * from productshoe LIMIT $start,$limit ";
    	$stm=$conn->prepare($sql);
    	$stm->setFetchMode(PDO::FETCH_ASSOC);
    	$stm->execute();
    	$result =$stm->fetchAll();
    	return $result;
		}catch(PDOException $e){
	    	echo "Query failed of querySliderRight in m_querySliderRight: " . $e->getMessage();
	    }
	    if(($stmt->fetch()) == false){
	    	$stmt=null;
	    	$conn=null;
	    	return false;
	    }else{
		    $stmt=null;
		    $conn=null;
		    return true;
		}
	}


	//name, username, email, sex, birthday, phone, crtime
}
 ?>