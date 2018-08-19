        <!-- Right column -->
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
<div id="col" class="noprint">
            <div id="col-in">

                <!-- About Me -->
                

          <!-- /about-me -->

              
				
                <!-- Category -->
             
<div class="login">
                <form name="form1" method="post" action="login.php">
                  <table width="100%" border="0" style="background-color:AQUA" >
                    <tr>
                      <td><strong>User Name</strong></td>
                    </tr>
                    <tr>
        <td><span id="sprytextfield1">
                        <label>
                        <input type="text" name="txtUser" id="txtUser">
                        </label>
                      <span class="textfieldRequiredMsg">*</span></span>
          <label></label></td>
                    </tr>
                    <tr>
                      <td><strong>Password</strong></td>
                    </tr>
                    <tr>
                <td><span id="sprytextfield2">
                        <label>
                        <input type="text" name="txtpass" id="txtpass">
                        </label>
                      <span class="textfieldRequiredMsg">*</span></span></td>
                    </tr>
                    <tr>
                      <td><strong>User Type</strong></td>
                    </tr>
                    <tr>
                      <td><label>
                        <select name="cmbUser" id="cmbUser">
                          <option value="JobSeeker">JobSeeker</option>
                          <option value="Employer" selected="selected">Employer</option>
                          <option value="Administrator">Administrator</option>
                          </select>
                      </label></td>
                    </tr>
                    <tr>
                      <td><label>
                        <div align="center">
						<button type="button" class="btn btn-primary" name="button"  value="Login">Login</button>
                         
                          </div>
                      </label></td>
                    </tr>
                    <tr>
                      <td><div align="center"><a href="Forget.php"><strong>Forgot Password? </strong></a></div></td>
                    </tr>
                  </table>
      </form>
              </div>
                <br/>

    
          </div> <!-- /col-in -->
</div> <!-- /col -->
        <script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
//-->
</script>
