<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Registration Form</title>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
         <script type="text/JavaScript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" ></script>
        <script src="js/script.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="wrapper">
            <fieldset >
                <legend>Registration</legend>
                <form>
                    <table >
                        <tr>
                            <td>First Name</td>
                            <td><input type="text" id="fname" name="fname" /></td>
                        
                        
                        
                            <td>Last Name</td>
                            <td><input type="text" id="lname" name="lname" /></td>
                        </tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                        <tr>
                            <td>Username</td>
                            <td><input type="text" id="uname" name="uname" /></td>
                            
                            <td colspan="2">
                                <div class="msg" ><p class="check"></p></div>
                            </td>
                        </tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                        <tr>
                            <td><lable id="dob-l">DOB</lable></td>
                            <td><input type="date" name="dob" id="dob" /></td>
                        </tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                        <tr>
                            <td>Password</td>
                            <td><input type="password" id="pass" name="pass" /></td>
                        </tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                        
                        <tr>
                            <td>Mobile Number</td>
                            <td><input type="text" id="mob" name="mob" /></td>
                        </tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                        
                        <tr>
                            <td>Gender</td>
                            <td><input type="radio" name="gender" value="Male" checked="true">Male</td>
                            <td><input type="radio" name="gender" value="Female" >Female</td>
                        </tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                        <tr>
                            <td><button type="button" id="reg" name="reg" >Register</button></td>
                            <td><button type="reset" id="reset" name="reset">Reset</button></td>
                        </tr>
                    </table>
                </form>
            </fieldset>
        </div>
    </body>
</html>
