<?php
$title = 'Edit Records';
require_once 'includes/header.php'; 
require_once 'db/conn.php'; 

$results = $crud->getSpecialities();

if(!isset($_GET['id'])){
        // echo "error";
        include 'includes/errormessage.php';
        header('location: viewrecords.php');
}else {
        $id = $_GET['id'];
        $attendee = $crud->getAttendeesDetails($id);

?>

    <h1 class = "text-center">Edit Records</h1>

    <form method = "post" action ="editpost.php">
            <input type="hidden" name="id" value =" <?php echo $attendee['attendee_id'] ?>"  />
  <div class="mb-3 form-group">
    <label for="firstname" >First Name</label>
    <input type="text" class="form-control" value =" <?php echo $attendee['firstname'] ?>" id="firstname" name="firstname">
    
  </div>
  <div class="mb-3 form-group">
    <label for="lastname" >Last Name</label>
    <input type="text" class="form-control" value =" <?php echo $attendee['lastname'] ?>" id="lastname" name="lastname">
    
  </div>
  <div class="mb-3 form-group">
    <label for="dob" >Date Of Birth</label>
    <input type="text" class="form-control" value =" <?php echo $attendee['dateofbirth'] ?>" id="dob"  name="dob">
    
  </div>
  <div class="mb-3 form-group">
    <label for="specialty" >Area of Expertise</label>
    <select class="form-select form-select-sm" id="specialty" name="specialty">
    <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>
      <option value = "<?php echo $r['specialty_id'] ?>" <?php if($r['specialty_id'] == $attendee['specialty_id']) echo 'selected'; ?> >
      
      <?php echo $r['name'] ?></option>


      <?php }?>

        </select>  
  </div>
  <div class="mb-3 form-group">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control"  value =" <?php echo $attendee['emailaddress'] ?>" id="email" name="email" aria-describedby="emailHelp">
   
  </div> 
  <div class="mb-3 form-group">
    <label for="phone" class="form-label">Phone Number</label>
    <input type="text" class="form-control" value =" <?php echo $attendee['contactnumber'] ?>" id="phone"  name="phone">
   
  </div> 

  
  <a  href="viewrecords.php" class="btn btn-default">Back To List</a>
  <button type="submit" name= "submit" class="btn btn-success ">Save Changes</button>
</form>    
<?php } ?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>
    