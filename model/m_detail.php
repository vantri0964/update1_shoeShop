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
		$stmt = null;
		try { 	
        $sql="select * from productshoe where id=?";
        $stmt=$conn->prepare($sql);
        $stmt->bindParam(1,$id);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        $result =$stmt->fetchAll();
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