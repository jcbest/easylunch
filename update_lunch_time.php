<div class="section-title">
          
          <p>EDIT TIME</p>
        </div>

       
    
        <form action="/" method="POST" style="background-color:white;" >
                <table class="table">
                    <thead class="thead-dark" style="background-color:black; color:white;">
                        <tr>
                            <th>S/N</th>
                            <th>TIME RANGE</th>
                            <th>NUMBERS OF PERSON PER TIME</th>
                            <th>TOTAL BOOKED </th>
                            <th>ACTION</th>
                           
                        </tr>
                    </thead>

                    <tbody>
                        <?php 

$sql = "SELECT * FROM dbtime ";

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
                                                            <td><?php echo htmlentities($result->time);?></td>
                                                            <td><?php echo htmlentities($result->qty);?></td>
                                                            <td><?php echo htmlentities($result->booked_qty);?></td>
                                                           
                                                      
<td>
<a href="?page=edit_order<?php echo htmlentities($result->id);?>">Edit |</i> </a> 
<a href="?page=edit_order<?php echo htmlentities($result->id);?>">Cancel</i> </a> 

</td>
</tr>
<?php $cnt=$cnt+1;}} ?>
                    </tbody>
                </table>
            </form>

      
<!-- End Book A Table Section -->
