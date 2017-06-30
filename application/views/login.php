<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login</title>
  </head>
  <body>
    <h1>Login Page!</h1>
    <p>Fill the details.</p>

   <form action="<?php echo base_url();?>UserLogin/Login" method="POST"> 
      <table>
      <tr>  
        <td>Username</td>
        <td>:</td>
        <td><input  name="txtUsername" id="username" type="text"></td>
      </tr>
      <tr>
        <td>Password</td>
        <td>:</td>
        <td><input  name="txtUsername" id="password" type="password"></td>
      </tr>
       <tr>
        <td><input  name="btnLogin" value="Login"  type="submit"></td>
        <td></td>
        <td><input  name="btnLogin" value="Cancel"  type="submit"></td>
      </tr>
    </table>
    </form>
   </body>
</html>