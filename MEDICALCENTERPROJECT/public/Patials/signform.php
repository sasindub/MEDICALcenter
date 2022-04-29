<div class="modal fade" id="usermodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-center">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Sign in</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

	  <form id="addformSign" method="post" enctype="multipart/form-data">
      <div class="modal-body">
	
	  <div id="errorMob">
	  	<label for="error" id="errormsgMob" class="error"></label>
	  <br>
		
	  </div>
		
	  <div id="errorPass">
	  	<label for="error" id="errormsgPass" class="error"></label>
	  <br>
		
	  </div>

	  <div id="errorId">
	  	<label for="error" id="errormsgId" class="error"></label>
	  <br>
		
	  </div>


	 <div class="row">
		<div class="col-12">
	  <label>Full Name:</label>
		<div class="input-group mb-3" >
  			<span class="input-group-text bg-dark" ><i class="fas fa-user text-light"></i></span>
  			<input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"
			   placeholder="Enter your full name" autocomplete="off" required="required" id="pusername" name="pusername">
		</div>
		</div>

		<div class="col-6">	
		<label>Email:</label>
		<div class="input-group mb-3">
  			<span class="input-group-text bg-dark" ><i class="fas fa-envelope-open text-light"></i></span>
  			<input type="email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"
			   placeholder="Enter your user email" autocomplete="off" required="required" id="pemail" name="pemail">
		</div>
		</div>

		<div class="col-6">			
		<label>Mobile:</label>
		<div class="input-group mb-3">
  			<span class="input-group-text bg-dark" ><i class="fas fa-phone text-light"></i></span>
  			<input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"
			   placeholder="07xxxxxxxx" autocomplete="off" required="required" id="pmobile" name="pmobile" maxLength="10" minLength="10">
		</div>
		</div>

		<div class="col-6">
		<label>Adress:</label>
		<div class="input-group mb-3">
  			<span class="input-group-text bg-dark" ><i class="fas fa-address-book text-light"></i></span>
  			<input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"
			   placeholder="Enter your address" autocomplete="off" required="required" id="paddress" name="padrs">
		</div>
		</div>

		<div class="col-6">
		<label>Id no:</label>
		<div class="input-group mb-3">
  			<span class="input-group-text bg-dark" ><i class="fa-solid fa-id-card text-light"></i></span>
  			<input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"
			   placeholder="Enter your id no." autocomplete="off" required="required" id="pidno" name="pidnum"  maxLength="12" minLength="11">
		</div>
		</div>

		<div class="col-6">
		<label>Password:</label>
		<div class="input-group mb-3">
  			<span class="input-group-text bg-dark" ><i class="fa-solid fa-key text-light"></i></span>
  			<input type="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"
			   placeholder="Create a password" autocomplete="off" required="required" id="ppassword" name="ppswd">
		</div>
		</div>

		<div class="col-6">
		<label>Confirm Password:</label>
		<div class="input-group mb-3">
  			
  			<input type="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"
			   placeholder="Confirm the password" autocomplete="off" required="required" id="pcpassword" name="pcpswd">
		</div>
		</div>
		
		<div class="mb-3">
			<label class="valid" id="pss"><b>Password should include,</b></label><br>
			<label class="valid" id="int"><i class="fa-solid fa-circle-check me-1"></i>a digit</label><br>
			<label class="valid" id="upp"><i class="fa-solid fa-circle-check me-1"></i>a uppercase</label><br>
			<label class="valid" id="char"><i class="fa-solid fa-circle-check me-1"></i>at least 8 characters</label><br>
		</div>
		
		<div class="col-12" style="padding-left: 150px; padding-right: 150px;">
		<label>Photo:</label>
		<div class="input-group mb-3">
			<label for="formFile" class="form-label"></label>
			<input class="form-control " type="file" id="puserphoto" name="pphoto">
		</div>
		</div>

	</div>

      </div>
      <div class="modal-footer">
	  <div class="btn-dct">	<a class="btn dctsign" data-bs-toggle="modal" data-bs-dismiss="modal" data-bs-target="#exampleModal">DOCTOR SIGN IN</a> </div>

        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-sub">Submit</button>
		<!-- 2 indputs 1st for add 2nd delete update delete  -->
      </div>
    </div>
	</form>

  </div>
</div>