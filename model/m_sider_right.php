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
		$stmt = null;
		try {
    	$sql="select * from productshoe LIMIT $start,$limit ";
    	$stmt=$conn->prepare($sql);
    	$stmt->setFetchMode(PDO::FETCH_ASSOC);
    	$stmt->execute();
    	$result =$stmt->fetchAll();
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