        <?php
        /**
         * summary
         */
        class classConnect
        {
            /**
             * summary
             */
            public function toConnect()
            {
                try{
                   $hostnameAndDB='mysql:host=localhost;dbname=shoeShop';
                   $user='MNN';
                   $pass='123456';
                   $options = array(
                    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                );
                   
                   $conn=new PDO($hostnameAndDB,$user,$pass,$options);
                   return $conn;
               }catch(PDOException $e){
                echo "Loi connect:".$e->getMessage();
            }
            
        }
    }
    ?>