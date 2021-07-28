<?php
$title = 'Index';
require_once 'includes/header.php'; 
require_once 'db/conn.php'; 

$results = $crud->getSpecialities();

?>

    <h1 class = "text-center">Registration for IT Conference</h1>
    <form method = "post" action ="success.php">
  <div class="mb-3 form-group">
    <label for="firstname" >First Name</label>
    <input required type="text" class="form-control" id="firstname" name="firstname">
    
  </div>
  <div class="mb-3 form-group">
    <label for="lastname" >Last Name</label>
    <input required type="text" class="form-control" id="lastname" name="lastname">
    
  </div>
  <div class="mb-3 form-group">
    <label for="dob" >Date Of Birth</label>
    <input type="text" class="form-control" id="dob"  name="dob">
    
  </div>
  <div class="mb-3 form-group">
    <label for="specialty" >Area of Expertise</label>
    <select class="form-select form-select-sm" id="specialty" name="specialty">
    <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>
      <option value = "<?php echo $r['specialty_id'] ?>"><?php echo $r['name'] ?></option>


      <?php }?>

        </select>  
  </div>
  <div class="mb-3 form-group">
    <label for="email" class="form-label">Email address</label>
    <input required type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
   
  </div> 
  <div class="mb-3 form-group">
    <label for="phone" class="form-label">Phone Number</label>
    <input type="text" class="form-control" id="phone"  name="phone">
   
  </div> 

  
  <button type="submit" name= "submit" class="btn btn-primary btn-block">Submit</button>
</form>    


<?php require_once 'includes/footer.php'; ?>
    