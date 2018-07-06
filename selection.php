
<?php
include 'connections.php';                                  
        
    $sql="select * from iproduct ";
    $result=$conn->query($sql);
    if ($result->num_rows > 0) {
        ?>
        <table>
        <?php
        while($row = $result->fetch_assoc())
        { 
        ?>
        <tr>
                <td>name</td><td><input type=text name=t1 id=t1 value=<?php echo $row['name'];?> ></td>
        </tr>
        <tr>
                <td>mail</td><td><input type=text name=t2 id=t2  value=<?php echo $row["mail"];?>></td>
        </tr>
        <tr>
                <td>image</td><td><input  type="file" name=image id=image value=<?php echo $row["image"];?>></td>
        </tr>
        <tr>
                <td>password</td><td><input type=text name=t8 id=t8 value=<?php echo $row["pwd"];?>></td>
        </tr>
        									 
        <tr>
            <td>date</td><td> <input type="date" name="t10" id="t10" value=<?php echo $row["date"];?>>  <hr/> <br/> </td>
            
        </tr>
        
        
        <?php }//while 
        ?>
        </table>
        <?php
    }//if
?>