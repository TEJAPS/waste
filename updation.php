
<?php
include 'connections.php';

        
        $findu=$_POST['findup'];									
        
        
    $sql="select * from iproduct where product_name like '$findu' ";
    $result=$conn->query($sql);
    if ($result->num_rows > 0) {
        ?>										
    
        <?php
        while($row = $result->fetch_assoc())
        { 
        ?>
        <tr>
                <td>name_of_organisation</td><td><input type=text name=t1 id=t1 value=<?php echo $row['name_of_organisation'];?> ></td>
        </tr>
        <tr>
                <td>attach_with_mail</td><td><input  type="file" name=image id=image value=<?php echo $row["attach_with_mail"];?>></td>
        </tr>
        <tr>
                <td>invitations_to</td><td><input type=text name=t8 id=t8 value=<?php echo $row["invitations_to"];?>></td>
        </tr>
        
        <tr>
            <td>date</td><td><input type="date" name="t10" id="t10" value=<?php echo $row["date_added"];?>></td>
        </tr>
        
        <tr>
            <td>innovator_name</td><td><input type="text" name="t12" id="t12" value=<?php echo $row["innovator_name"];?>></td>
        </tr>
        <tr>
            <td>Category</td><!--<td><input type="text" name="t13" id="t13" value=?php echo $row["category"];?>></td>-->
            <td>
            <select class="form-control" name="t13" id="t13" value="<?php echo $row["category"];?>" >                  
                <option value="<?php echo $row["category"];?>">"<?php echo $row["category"];?>"</option>
                <?php include 'categories.php';?>										  
            </select>
            </td>
        </tr>
        <tr>
            <td>Cost</td><td><input type="text" name="t14" id="t14" value=<?php echo $row["cost"];?>></td>
        </tr>
                                            
        <?php
                    
        }//while
        ?>
        
        </table><input type=submit name=update_btn>
        </form>
        <?php
    }//if
        

?>