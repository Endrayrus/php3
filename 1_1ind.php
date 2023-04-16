<div>
        Список позьзователей:
        
        </div>

        <?php
            require "0connect.php";
            $sql = "SELECT * FROM users";
            $query = $pdo -> prepare($sql);
            $query -> execute();


             
            while ($row = $query->fetch())
            {
                
                echo
                '<li>'
                .$row['login']. ' ';
                $ban = $row["isBan"];

                if ($ban == 0)
                {
                    echo 
                    '<form  method="post" action="Banning.php">
                    <input type="submit" name="ban" value="Заблокировать">
                    </form>';
                }
                else
                {echo 
                    '<form  method="post" action="Banning.php">
                    <input type="submit" name="unban" value="Разблокировать">
                    </form>';
                    
                }
                echo'
                </li>';
                
                
                 
            }
             

        ?>