<html>
<head>
<script type="text/javascript" src="validate.js"></script>
</head>
<body>
<form action="complainInsert.php" method="post" name="StudentRegistration" onsubmit="return(validate());">

<table cellpadding="0" width="30%" bgcolor="99FFFF"  cellspacing="0" border="0">



<tr>
<td>Comp.Date:</td>
<td><span id="sprytextfield7">
<label>
<input type="date" name="Date"  id="comp.Date" />
</label>
</span></td>
</tr>
<tr>
                      <td>Name:</td>
                      <td><span id="sprytextfield3">
                        <label>
                        <input type="text" name="txtName" id="txtName" />
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
                      <td>State:</td>
                      <td><span id="sprytextarea1">
                        <label>
                        <select Name="cmbState">
						<option value="-1" selected><------------select-----------></option>
						<option value="New Delhi">NEW DELHI</option>
						<option value="Mumbai">MUMBAI</option>
						<option value="Goa">GOA</option>
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
                      <td>Choose Category:</td>
                      <td><span id="sprytextarea1">
                        <label>
                        <select Name="cmbCat">
						<option value="-1" selected><------------select-----------></option>
						<option value="Computer">Computer</option>
						<option value="Laptop">Laptop</option>
						</select>
                        </label>
                      </span></td>
                    </tr>
<tr>
<td>Complains</td>
<td><textarea name="txtComp" id="txtcomplain" cols="45" rows="5"></textarea></td>
</tr>

<tr><td></td>
<td colspan="2"><button type="submit" class="btn btn-success">Register</button></td>
</tr>
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