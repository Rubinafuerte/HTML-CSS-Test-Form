<html>
<head>
<style> 


h1{
    text-shadow: 2px 2px 4px white;

}
body {
    text-shadow: 2px 2px 4px white;
    font-family: Arial, Helvetica, sans-serif;
    background-color: mediumseagreen;
    /*background-image: url("img7.jpg");}*/
* {box-sizing: border-box;}

input[type=text], select, textarea { 
  
  width: 100%;
  padding: 5px;
  border: 2px solid lightgreen;
  border-radius: 5px;
  box-sizing: border-box;
  margin-top: 5px;
  margin-bottom: 5px;
  resize: vertical;

}

input[type=submit] {
  text-shadow: 2px 2px 4px white;
  background-color: lightgreen;
  color: black;
  padding: 10px 10px;
  border: 2px solid white;
  border-radius: 5px;
  cursor: pointer;
}


</style>

<title>untitled form</title>
</head>
<body>
<form class="form-inline">
<center>
<table>
<div class="form-group row">
<h1 > Student Details</h1>
<tr>
<td><label id="nm">Name</label></td>
<td><input type="text" name="Name" placeholder="Name" required><br></td>
</tr>

<tr>
<td><label id="email">Email-id</label></td>
<td><input type="text" name="Email-id" placeholder="Email-id" required><br></td>
</tr>

<tr>
<td><label id="pwd">Password</label></td>
<td><input type="text" name="Password" placeholder="Password" required><br></td>
</tr>

<tr>
<td><label id="cnfrm_pwd">Confirm Password</label></td>
<td><input type="text" name="Confirm Password" placeholder="Confirm Password" required><br></td>
</tr>

<tr>
<td><label id="city">City</label></td>
<td><select id="city" name="city">
      <option value="Amreli">Amreli</option>
      <option value="Rajkot">Rajkot</option>
      <option value="Mumbai">Mumbai</option>
      <option value="Ahmedabad">Ahmedabad</option>
    </select><br></td>
</tr>

<tr>
<td><label id="hobbies">Hobbies</label></td>
<td><input type="checkbox" name="chk1" value="Reading">Reading
<input type="checkbox" name="chk2" value="Travelling">Travelling
<td><input type="checkbox" name="chk3" value="Music">Music<br></td>
</tr>

<tr>
<td><label for="Msg">Message</label></td>
 <td><textarea id="msg" name="Message" placeholder="Write something.." style="height:200px" required></textarea><br></td>
</tr>

<tr>
<td><input type="submit" value="Submit">
<input type="submit" value="Clear"></td>
</tr>
</table>
</center>
</form>
</body>
</html>


