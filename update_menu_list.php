<div class="section-title">
          
          <p>EDIT MENU LIST</p>
        </div>
<?php
if(isset($_POST['edit'])){
    extract($_POST);
    echo"
    <form action='' method='POST' style='background-color:white;' >
                <table class='table'>
               

                    <tbody>";
                    

$sql = "SELECT distinct id,type_of_food,qty,booked_qty FROM food_list where id=:id ";

$query = $dbh->prepare($sql);
$query->bindParam(':id',$id,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{   
echo"
<tr>
 <td> $cnt</td>
    <td><input type= 'text' name='type_of_food' class='form-control'  value = '$result->type_of_food'  data-rule='minlen:4' ></td>
    <td> <input type= 'text' name='type_of_food' class='form-control'  value = '$result->qty'  data-rule='minlen:4' ></td>
    <td><input type= 'text' name='type_of_food' class='form-control'  value = ' $result->booked_qty'  data-rule='minlen:4' ></td>
                                                           
                                                      
<td>
    <input type='hidden' name = 'id' value='$result->id'/>
<button type='submit' name='saveedite'>Save</button> 


</td>
</tr>";
$cnt=$cnt+1;}} 
}
?>
       
    
        <form action="" method="POST" style="background-color:white;" >
                <table class="table">
                    <thead class="thead-dark" style="background-color:black; color:white;">
                        <tr>
                            <th>S/N</th>
                            <th>NAMES OF FOOD</th>
                            <th>QUANTITIES OF FOOD</th>
                            <th>TOTAL BOOKED FOOD</th>
                            <th>ACTION</th>
                           
                        </tr>
                    </thead>

                    <tbody>
                        <?php 

$sql = "SELECT * FROM food_list ";

$query = $dbh->prepare($sql);

$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{   ?>
<tr>
 <td><?php echo htmlentities($cnt);?></td>
                                                            <td><?php echo htmlentities($result->type_of_food);?></td>
                                                            <td><?php echo htmlentities($result->qty);?></td>
                                                            <td><?php echo htmlentities($result->booked_qty);?></td>
                                                           
                                                      
<td>
    <input type="hidden" name = "id" value="<?php echo htmlentities($result->id);?>"/>
<button type='submit' name='edit'>Edit</button> | 
<button type='submit' name='del'>Del</button> 

</td>
</tr>
<?php $cnt=$cnt+1;}} ?>
                    </tbody>
                </table>
            </form>

      
<!-- End Book A Table Section -->
