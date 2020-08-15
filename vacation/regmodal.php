
<?php 

include('connect.php');

if(isset($_POST['save'])){

  $sql="Insert into staff(EmpId,name,email,DOB,phone,username,password,role) values(:id,:name,:email,:dob,:phone,:username,:password,:role)";
  $stmt=$conn->prepare($sql);
  $stmt->execute(array(
    'id'=>$_POST['EmpId'],
    'name'=>$_POST['name'],
    'email'=>$_POST['Email'],
    'dob'=>$_POST['date'],
    'phone'=>$_POST['Phone'],
    'username'=>$_POST['username'],
    'password'=>$_POST['Password'],
    'role'=>$_POST['role']

  ));
  header('location:View.php');

}


 ?>


<div class="container"> <!-- The Modal -->
  <div class="modal fade" id="regModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Sign In Here</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         <form target="blank" method="post" onclick="return validate();">
      
        <div class="form-group">
          <label >Employement Id</label>
          <input type="text" id="eid" name="EmpId"class="form-control"  ><br>
          <span id="idvalid"></span>
        </div>
        
        
          <div class="form-group">
            
            <label>Name</label>
          <input type="text" name="name" class="form-control" required=""><br>
          <span id="namevalid"></span>
          </div>

        <div class="form-group">
          

          <label>Email</label>
          <input type="Email" name="Email" class="form-control" required=""><br>
          <span id="emailvalid"></span>

        
        
        </div>
        
        <div class="form-group">
          
          <label>Date Of Birth</label>
         <input type="date" name="date" class="form-control" required=""><br>
         <span id="datevalid"></span>

       
        </div>
        <div class="form-group">
          
          <label>Phone Number</label>
          <input type="text" name="Phone" class="form-control" required=""><br>
          <span id="phonevalid"></span>

       
        </div>
        <div class="form-group">
          
          <label>User Name</label>
          <input type="" name="username" class="form-control" required=""><br>
          <span id="unvalid"></span>

        
        </div>
         <div class="form-group">
          
          <label>Password</label>
          <input type="Password" name="Password" class="form-control" required=""><br>
          <span id="passvalid"></span>

        
        </div>
        <div class="form-group">
          
          <label>Role</label>
          <input type="text" name="role" class="form-control" required=""><br>
          <span id="rolevalid"></span>

        
        </div>
          
         
          
       
       
         <input type="submit" class="btn btn-primary" name="save" value="Save">
        
            <input type="reset" name="reset" class="btn btn-warning" value="reset"> 
        
      
    </form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  </div>
  <script type="text/javascript">
    function validate(){
      var id=document.getElementById('eid').value;
      var idv=document.getElementById('emailvalid').innerHTML;
      var idreg=/^staff[0-9]{3}+$/;
      if(!idreg.test(id.value)){
        idv="not correct";
        id.style.border="1px solid red";
        focus();
      }
      return false; 


    }
  </script>
  