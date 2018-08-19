<html>
<head>
<script type="text/javascript" src="validate.js"></script>
</head>
<body>
<form action="JobSeekerInsert.php" method="post" onSubmit="return validateForm(this,arrFormValidation);" enctype="multipart/form-data" id="form2">
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td>JobSeeker Name:</td>
                      <td><span id="sprytextfield3">
                        <label>
                        <input type="text" name="txtName" id="txtName" />
                        </label>
                      </span></td>
                    </tr>
                   
                    <tr>
                      <td>Address:</td>
                      <td><span id="sprytextarea1">
                        <label>
                        <textarea name="txtAddress" id="txtAddress" cols="25" rows="4"></textarea>
                        </label>
                      </span></td>
                    </tr>
					
					<tr>
                      <td>City:</td>
                      <td><span id="sprytextfield6">
                        <label>
                        <input type="text" name="txtCity" id="city" />
                        </label>
                      </span></td>
                    </tr>
					
                    
                    <tr>
						<tr>
                      <td>State:</td>
                      <td><span id="sprytextarea1">
                        <label>
                        <select Name="cmbState">
						<option value="-1" selected><------------select----------></option>
						<option value="New Delhi">NEW DELHI</option>
						<option value="Uttar Pradesh">Uttar Pradesh</option>
						<option value="Jharkhand">Jharkhand</option>
						<option value="Bihar">BIHAR</option>
						</select>
                        </label>
                      </span></td>
                    </tr>

						

						
						
						<tr>
                      <td>Pincode:</td>
                      <td><span id="sprytextfield6">
                        <label>
                        <input type="text" name="txtPin" id="pin" />
                        </label>
                      </span></td>
                    </tr>
						
                    <tr>
                      <td>Email:</td>
                      <td><span id="sprytextfield5">
                        <label>
                        <input type="text" name="txtEmail" id="txtEmail" />
                        </label>
                      </span></td>
                    </tr>
					
                    <tr>
                      <td>Mobile:</td>
                      <td><span id="sprytextfield6">
                        <label>
                        <input type="text" name="txtMobile" id="txtMobile" />
                        </label>
                      </span></td>
                    </tr>
					
                    <tr>
                      <td>Qualification:</td>
                      <td><label>
                        <select name="cmbQual" id="cmbQual">
                          <option value="B.C.A">B.C.A</option>
                          <option value="M.C.A">M.C.A</option>
                          <option value="B.Sc.I.T">B.Sc.I.T</option>
                          <option value="B.Sc.C.S">B.Sc.C.S</option>
                          <option value="M.Sc.I.T">M.Sc.I.T</option>
                          <option value="M.Sc.C.S">M.Sc.C.S</option>
                          <option value="M.B.A">M.B.A</option>
                          <option value="B.B.A">B.B.A</option>
			
                          <option value="Other">Other</option>
                        </select>
                      </label></td>
                    </tr>
					
                    <tr>
                      <td>Other:</td>
                      <td><label>
                        <input type="text" name="txtOther" id="txtOther" />
                      </label></td>
                    </tr>
					
                    <tr>
                      <td>Gender:</td>
                      <td><label>
                        <select name="cmbGender" id="cmbGender">
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                        </select>
                      </label></td>
                    </tr>
					
                    <tr>
                      <td>BirthDate:</td>
                      <td><span id="sprytextfield7">
                        <label>
                        <input type="date" name="txtBirthDate"  id="txtBirthDate" />
                        </label>
                      </span></td>
                    </tr>
					
					 <tr>
                      <td>Adharcard Number:</td>
                    <td><span id="sprytextfield8">
                        <label>
                        <input type="text" name="txtAdhar" id="txtAdhar" />
                        </label>
                      </span></td>
					  
                    </tr>
					
                    <tr>
                      <td>Upload Adharcard:</td>
                      <td><label>
                        <input type="file" name="txtFile" id="txtFile" />
                      </label></td>
                    </tr>
					
                   <tr>
                      <td>User Name:</td>
                    <td><span id="sprytextfield8">
                        <label>
                        <input type="text" name="txtUserName" id="txtUserName" />
                        </label>
                      </span></td>
                    </tr>
					
                    <tr>
                      <td>Password:</td>
                      <td><label><span id="sprytextfield9">
                        <input type="password" name="txtPassword" id="txtPassword" />
                      </span></label></td>
                    </tr>
					
                    <tr>
                      <td>Security Question:</td>
                      <td><label>
                        <select name="cmbQue" id="cmbQue">
                          <option selected="selected">What is Your Pet Name?</option>
                          <option>Who is Your Last Name?</option>
                          <option>What is Your Friend Name?</option>
                        </select>
                      </label></td>
                    </tr>
					
                    <tr>
                      <td>Answer:</td>
                      <td><span id="sprytextfield10">
                        <label>
                        <input type="text" name="txtAnswer" id="txtAnswer" />
                        </label>
                      </span></td>
                    </tr>
                    <td></td>
                      <td colspan="2"><label>
                        <label></label>
                        <div align="center">
                         <button type="submit" class="btn btn-primary btn-block" >Proceed..</button>
                          </div>
                      </label></td>
                    
                  </table>
                 </form>
</body>
</html>





<script>

function validate()
{ 
   if( document.StudentRegistration.textnames.value == "" )
   {
     alert( "Please provide your Name!" );
     document.StudentRegistration.textnames.focus() ;
     return false;
   }
   if( document.StudentRegistration.fathername.value == "" )
   {
     alert( "Please provide your Father Name!" );
     document.StudentRegistration.fathername.focus() ;
     return false;
   }
   
   if( document.StudentRegistration.paddress.value == "" )
   {
     alert( "Please provide your Postal Address!" );
     document.StudentRegistration.paddress.focus() ;
     return false;
   }
   if( document.StudentRegistration.personaladdress.value == "" )
   {
     alert( "Please provide your Personal Address!" );
     document.StudentRegistration.personaladdress.focus() ;
     return false;
   }
   if ( ( StudentRegistration.sex[0].checked == false ) && ( StudentRegistration.sex[1].checked == false ) )
   {
   alert ( "Please choose your Gender: Male or Female" );
   return false;
   }   
   if( document.StudentRegistration.City.value == "-1" )
   {
     alert( "Please provide your City!" );
     document.StudentRegistration.City.focus() ;
     return false;
   }   
   if( document.StudentRegistration.Course.value == "-1" )
   {
     alert( "Please provide your Course!" );
    
     return false;
   }   
   if( document.StudentRegistration.District.value == "-1" )
   {
     alert( "Please provide your Select District!" );
    
     return false;
   }   
   if( document.StudentRegistration.State.value == "-1" )
   {
     alert( "Please provide your Select State!" );
     
     return false;
   }
   if( document.StudentRegistration.pincode.value == "" ||
           isNaN( document.StudentRegistration.pincode.value) ||
           document.StudentRegistration.pincode.value.length != 6 )
   {
     alert( "Please provide a pincode in the format ######." );
     document.StudentRegistration.pincode.focus() ;
     return false;
   }
 var email = document.StudentRegistration.emailid.value;
  atpos = email.indexOf("@");
  dotpos = email.lastIndexOf(".");
 if (email == "" || atpos < 1 || ( dotpos - atpos < 2 )) 
 {
     alert("Please enter correct email ID")
     document.StudentRegistration.emailid.focus() ;
     return false;
 }
  if( document.StudentRegistration.dob.value == "" )
   {
     alert( "Please provide your DOB!" );
     document.StudentRegistration.dob.focus() ;
     return false;
   }
  if( document.StudentRegistration.mobileno.value == "" ||
           isNaN( document.StudentRegistration.mobileno.value) ||
           document.StudentRegistration.mobileno.value.length != 10 )
   {
     alert( "Please provide a Mobile No in the format 123." );
     document.StudentRegistration.mobileno.focus() ;
     return false;
   }
   return( true );
}

</script>