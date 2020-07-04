
<html>
    <head>
        <title> Tra Cuu </title>
    </head> 
    <body>
        <div align="center" >
            <form action="search.php" method="get">
                Tim hoa don: <input type="text" name="search" placeholder="Nhap Ma hoa don" />
                <input type="submit" name="ok" value="search" />
            </form>
        </div>
        <?php
        if (isset($_REQUEST['ok'])) 
        {
           
            $search = addslashes($_GET['search']);
 
            
            if (empty($search)) {
                echo "Yeu cau nhap du lieu vao o trong";
            } 
            else
            {
               //lệnh query
                $query = "select * from hoadon where hoadon.MaHD like '%$search%'";
                
                $dphost="localhost";
                $dphost="root";
                $dppass="";
                $dpname="qlhh";
                
                mysql_connect($dphost,$dpuser ,$dppass ,$dbname );
 
         
                $sql = mysql_query($query);
 
                $num = mysql_num_rows($sql);
 
               
                if ($num > 0 && $search != "") 
                {
                
                    echo "$num ket qua tra ve voi tu khoa <b>$search</b>";
 
               
                    echo '<table border="1" cellspacing="0" cellpadding="10">';
                    while ($row = mysql_fetch_assoc($sql)) {
                        echo '<tr>';
                            echo "<td>{$row['MaHD']}</td>";
                            echo "<td>{$row['NgayLapHD']}</td>";
                            echo "<td>{$row['MaKH']}</td>";
                            echo "<td>{$row['TongTien']}</td>";
                            
                        echo '</tr>';
                    }
                    echo '</table>';
                } 
                else {
                    echo "Khong tim thay ket qua!";
                }
            }
        }
        ?>   
        
    </body>
</html>