      <?php
            connecting to database
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "jms_images";

            //create a connection , create object
            $conn = mysqli_connect ($servername, $username, $password, $database);

            $sql = " SELECT * from jms_img_path";
            $result = mysqli_query($conn, $sql);


            while ($row = mysqli_fetch_assoc($result))
            {
                // $img=$row;
                $row['Sr_no'];
                $imgname = $row['img_path'];
                //echo "<img src='/jms_project/images/$imgname' height ='120px' width='120'>";//deleted

            }
        ?> 