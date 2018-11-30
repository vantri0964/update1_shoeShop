<?php
/**
 * summary
 */
include_once 'connect.php';
class process extends classConnect
{
    /**
     * summary
     */
    public function loadPro($start,$limit)
    { 
    	try{
    	$conn=$this->toConnect();
       
    	$sql="select * from productshoe LIMIT $start,$limit ";

    	$stm=$conn->prepare($sql);
    	 // $stm->bindParam(':a',$start);
    	 // $stm->bindParam(':b',$limit);
    	$stm->setFetchMode(PDO::FETCH_ASSOC);
    	$stm->execute();
    	$result =$stm->fetchAll();
    	return $result;
    }catch(PDOException $e){
    	echo "Loi login: ".$e->getMessage();
    }
    }
    public function number_record(){
        try{
        $conn=$this->toConnect();
        //tong so ban ghi
        $sqlCount="select count(id) as total from productshoe";
        $stmCount=$conn->prepare($sqlCount);
        $stmCount->setFetchMode(PDO::FETCH_ASSOC);
        $stmCount->execute();
        $number_record =$stmCount->fetchColumn();
        return $number_record;
        }catch(PDOException $e){
            echo "Loi number_record: ".$e->getMessage();
        }
    }
    public function Detail_Page($id)
    { 
        try{
        $conn=$this->toConnect();
       
        $sql="select * from productshoe where id=?";

        $stm=$conn->prepare($sql);
        $stm->bindParam(1,$id);
        $stm->setFetchMode(PDO::FETCH_ASSOC);
        $stm->execute();
        $result =$stm->fetchAll();
        return $result;
    }catch(PDOException $e){
        echo "Loi detail_page: ".$e->getMessage();
    }
    }
}
?>