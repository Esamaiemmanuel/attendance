<?php
<table class="table">
  <thead class="thead-dark">
        <tr>
        <th> </th>
        <th>First Name  </th>
        <th>Last Name  </th>
        <th>Date of Birth  </th>
        <th>Contact </th>
        <th>Email Address  </th>
        <th>Specialty  </th>
        <th>Actions </th>
</tr>
</thead>
<?php while($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>
<tr>
        <td><?php echo $r['attendee_id'] ?> </td>
        <td><?php echo $r['firstname'] ?> </td>
        <td> <?php echo $r['lastname'] ?></td>
        <td><?php echo $r['dateofbirth'] ?> </td>
        <td> <?php echo $r['emailaddress'] ?></td>
        <td><?php echo $r['contactnumber'] ?> </td>
        <td><?php echo $r['name'] ?> </td>
        <td><a href="view.php" class="btn btn-primary">View</a> </td>
</tr>

<?php }?>
</table>