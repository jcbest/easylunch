<div class="section-title">
          
          <p>MY ORDER</p>
        </div>

       
    
        <form action="/" method="POST" style="background-color:white;" >
                <table class="table">
                    <thead class="thead-dark" style="background-color:black; color:white;">
                        <tr>
                            <th>S/N</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Type of Food</th>
                            <th>Lunch Time</th>
                            <th>Date of Order</th>
                            <th>Comments</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php 
$idcard=$_SESSION['login'];
$sql = "SELECT users.name,users.email,users.phone,booking.food,booking.book_time,booking.time,booking.message from users inner join booking where  users.idcard=booking.idcard and users.idcard='$idcard' ";

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
                                                            <td><?php echo htmlentities($result->name);?></td>
                                                            <td><?php echo htmlentities($result->email);?></td>
                                                            <td><?php echo htmlentities($result->phone);?></td>
                                                            <td><?php echo htmlentities($result->food);?></td>
                                                            <td><?php echo htmlentities($result->book_time);?></td>
                                                            <td><?php echo htmlentities($result->time);?></td>
                                                            <td><?php echo htmlentities($result->message);?></td>
                                                      
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
