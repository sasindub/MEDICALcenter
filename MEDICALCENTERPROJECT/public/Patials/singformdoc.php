

<!-- Modal -->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg modal-center">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Doctors' Sign In</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
	  <form id="addformdoc" method="post" enctype="multipart/form-data">
      <div class="modal-body">


	  <div id="docerrorMob">
	  	<label for="error" id="derrormsgMob" class="error"></label>
	  <br>
		
	  </div>
		
	  <div id="docerrorPass">
	  	<label for="error" id="derrormsgPass" class="error"></label>
	  <br>
		
	  </div>

	  <div id="docerrorId">
	  	<label for="error" id="derrormsgId" class="error"></label>
	  <br>
		
	  </div>


	<div class="row">
		<div class="col-12">
	  <label>Full Name:</label>
		<div class="input-group mb-3" >
  			<span class="input-group-text bg-dark" ><i class="fas fa-user text-light"></i></span>
  			<input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"
			   placeholder="Enter your full name" autocomplete="off" required="required" id="username" name="username">
		</div>
		</div>

		<div class="col-6">	
		<label>Email:</label>
		<div class="input-group mb-3">
  			<span class="input-group-text bg-dark" ><i class="fas fa-envelope-open text-light"></i></span>
  			<input type="email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"
			   placeholder="Enter your user email" autocomplete="off" required="required" id="email" name="email">
		</div>
		</div>

		<div class="col-6">			
		<label>Mobile:</label>
		<div class="input-group mb-3">
  			<span class="input-group-text bg-dark" ><i class="fas fa-phone text-light"></i></span>
  			<input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"
			   placeholder="Enter your user mobile no." autocomplete="off" required="required" id="mobile" name="mobile" maxLength="10" minLength="10">
		</div>
		</div>

		<div class="col-6">
		<label>Position:</label>
		<div class="input-group mb-3">
  			<span class="input-group-text bg-dark" ><i class="fa-solid fa-circle-plus text-light"></i></span>
  			<select id="position" name="pos" class="form-select" aria-label="Default select example">
			<option selected value="0">Select doctor position</option>
			<option value="1">Dermatology</option>
			<option value="2">Anesthesiology</option>
			<option value="3">Pediatrics</option>
			<option value="4">Psychiatry</option>
			<option value="5">Clinical Immunology/Allergy</option>
			<option value="6">General/Clinical Pathology</option>
			<option value="7">Ophthalmology</option>
			<option value="8">Nephrology</option>
			<option value="8">Diagnostic Radiology</option>
			<option value="8">VOG</option>
			<option value="8">Physician</option>
			<option value="8">Primary care doctor</option>
			
			</select>
		</div>
		</div>

		<!-- <div class="col-6">
		<label>Working years:</label>
		<div class="input-group mb-3">
  			<span class="input-group-text bg-dark" ><i class="fa-solid fa-calendar-plus text-light"></i></span>
  			<input type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"
			   placeholder="Working years" autocomplete="off" required="required" id="workyear" name="wyear" max="1" min="50">
		</div>
		</div> -->

		<div class="col-6">
		<label>Id no:</label>
		<div class="input-group mb-3">
  			<span class="input-group-text bg-dark" ><i class="fa-solid fa-id-card text-light"></i></span>
  			<input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"
			   placeholder="Enter your id no." autocomplete="off" required="required" id="idno" name="idnum">
		</div>
		</div>

		<div class="col-6">
		<label>Working Hospital:</label>
		<div class="input-group mb-3">
  			<span class="input-group-text bg-dark" ><i class="fa-solid fa-hospital text-light"></i></span>
  			<input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"
			   placeholder="Enter your working hopital" autocomplete="off" required="required" id="whospital" name="hospital">
		</div>
		</div>

		<div class="col-6">
		<label>Password:</label>
		<div class="input-group mb-3">
  			<span class="input-group-text bg-dark" ><i class="fa-solid fa-key text-light"></i></span>
  			<input type="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"
			   placeholder="Create a password" autocomplete="off" required="required" id="password" name="pswd">
		</div>
		</div>

		<div class="col-6">
		<label>Confirm Password:</label>
		<div class="input-group mb-3">
  			
  			<input type="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"
			   placeholder="Confirm the password" autocomplete="off" required="required" id="cpassword" name="cpswd">
		</div>
		</div>
		
		<div class="mb-3">
			<label class="valid">password should include</label><br>
			<label class="valid" id="numeric"><i class="fa-solid fa-circle-check me-1"></i>a digit</label><br>
			<label class="valid" id="uppercase"><i class="fa-solid fa-circle-check me-1"></i>a uppercase</label><br>
			<label class="valid" id="8char"><i class="fa-solid fa-circle-check me-1"></i>at least 8 characters</label><br>
		</div>
		
		<div class="col-12" style="padding-left: 150px; padding-right: 150px;">
		<label>Photo:</label>
		<div class="input-group mb-3">
			<label for="formFile" class="form-label"></label>
			<input class="form-control " type="file" id="userphoto" name="photo">
		</div>
		</div>

		
	</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-sub">Submit</button>
		
      </div>
    </div>
	</form>
  </div>
</div>