<?php 
	require_once('common/database.php');

class M_NumberRecord extends Database
{	

	function __construct()
	{
		parent::__construct();
	}
	public function number_record(){
		$conn = parent::getConn();
		$stmt = null;
		try {
    	$sqlCount="select count(id) as total from productshoe";
        $stmt=$conn->prepare($sqlCount);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        $number_record =$stmt->fetchColumn();
        return $number_record;
		}catch(PDOException $e){
	    	echo "Query failed of number_record in m_numberRecord: " . $e->getMessage();
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

}
 ?>