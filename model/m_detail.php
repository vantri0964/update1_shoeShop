<?php 
	require_once('common/database.php');

class M_Detail extends Database
{	

	function __construct()
	{
		parent::__construct();
	}
	public function  Detail_Page($id){
		$conn = parent::getConn();
		$stm = null;
		try { 	
        $sql="select * from productshoe where id=?";
        $stm=$conn->prepare($sql);
        $stm->bindParam(1,$id);
        $stm->setFetchMode(PDO::FETCH_ASSOC);
        $stm->execute();
        $result =$stm->fetchAll();
        return $result;
		}catch(PDOException $e){
	    	echo "Query failed of detail in m_detail: " . $e->getMessage();
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