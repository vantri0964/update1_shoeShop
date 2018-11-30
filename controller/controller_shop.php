<?php
/**
 * summary
 */
include_once '../model/processro.php';
class controller_class{
	public $current_page;
	public $total_page;

	public function product()
	{
	    	$load = new process(); //gọi hàm model
	    	 $this->current_page=isset($_GET['page'])? $_GET['page']:1; // kiểm tra số trang trong đường link
	    	$limit=4; // số record hiển thị mỗi trang là 4
	    	$number_record=$load->number_record(); // số lượng record trong mysql
	    	$this->total_page= ceil($number_record / $limit);

	    	if($this->current_page > $this->total_page){
	    		$this->current_page=$this->total_page;
	    	}else if($this->current_page <1){
	    		$this->current_page=1;
	    	}

	    	$start=($this->current_page -1)*$limit;




	    	$result =$load->loadPro($start,$limit);
	    	return $result;
	    }

	    public function loginController()
	    {

                        //Code xử lý phần đăng nhập
	    	if(isset($_POST['btn_submit'])){
	    		$mk= $_POST['matkhau'];
	    		$name=$_POST['user1'];
	    		$name=trim($name);
	    		$mk=$mk;
	    		if($name == '' || $mk == ''){
	    			if($name=='')echo "<script>$('#user1P').text('* username can not blank')</script>";
	    			if($name=='')echo "<script>$('#passP').text('* password can not  blank')</script>";
	    		}else{
	    			$pro=new process1();
	    			$result=$pro -> login($name,md5($mk));

                       // $sohang=mysqli_num_rows($result);
	    			if($result != 0){
	    				session_start();
	    				$_SESSION['tendangnhap']=$name;

	    				header('Location:/demoMNM/views/index.php');
	    			}else{

	    				echo "<script>var tb=document.getElementById('note');
	    				tb.innerHTML='<i><font color=red >Đăng nhập thất bại</font></i>';
	    				</script>";
	    			}
	    		}

	    	}
	    }
	    public function detail(){
	    	//if(isset($_POST['btn_deatil'])){
	    		$id=$_GET['id'];
	    		$pro=new process();
	    		$result=$pro -> Detail_Page($id);
	    		return $result;
	    	//}
	    }
	    public function giohang(){
	    	echo "vào giohang";
	    	if(isset($_POST['btn-giohang'])){
	    		echo "vào giohang 1";
	    	echo "<script>$(document).ready(function(){
	    		$('#btn-gh').click(function(){
					
					$('#sumGH').text($('#sumGH').text()*1+1);
	    			});

	    	});</script>";
	    }
	    }



	}

	?>