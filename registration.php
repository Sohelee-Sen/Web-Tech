<!DOCTYPE html>
<html>
<head>

<title> Registration page </title>
</head>
<body>
    <h1> My Registration page</h1>

    <form>
    <table>
    <tr><td>First Name:</td></tr>
    <tr><td> <input type="text" name="firstname"></td></tr>
    <br>
    <br>
    <tr>
    <td>Email:
    </td>
   <tr> <td> <input type="text" name="email"></td>
    </tr>
    <tr><td>User Name :</td></tr>
    <tr><td> <input type="text" name="UserName"></td></tr>
    <br>
    <br>
    <tr>
    <td>password:
    </td>
   <tr> <td> <input type="text" name="password"></td>
    </tr>

    <td>Confirm password:
    </td>
   <tr> <td> <input type="text" name=" Confirm password"></td>
    </tr>
    </td>

    <tr><td>Gender<br>


  <input type="radio" id="male" name="gender" value="male">
  <label for="male">Male</label><br>
  <input type="radio" id="female" name="gender" value="female">
  <label for="female">Female</label><br>
  <input type="radio" id="other" name="gender" value="other">
  <label for="other">Other</label><br> </td> </tr>
  <tr><td>
  <label for="birthday">"Date of Birth:"</label>
  <input type="date"id ="dob" name="dob"><br>
<br>
  <input type="submit" value="submit">
  <input type="reset" value="reset">


    </table>
    
    
    </form>
</body>
</html>