<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>assignment</title>
</head>

<body>
<form action="upload.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
<p>Name :&nbsp;
  <input type="text" name="name" />
</p>
<p>Age :&nbsp;<input type="text" name="age" />
</p>


  <label>Deagree :&nbsp;
  <select name="degree">
    <option value="1">B.tech</option>
    <option value="2">B.sc</option>
    <option value="3">B.com</option>
    <option value="4">BCA</option>
  
  </select>
  </label><br />
  <br />
  percentage of marks :<br />
 <table width="100" border="1" cellspacing="5" cellpadding="5">
  <tr>
    <th scope="col">&nbsp;10th</th>
    <th scope="col">&nbsp;+2</th>
    <th scope="col">&nbsp;degree</th>
  </tr>
  <tr>
   <td><input type="text" name="sslc" /></td>
   <td><input type="text" name="+2" /></td>
   <td><input type="text" name="pdegree" /></td>
   </tr>
</table>
 <p><br />
    <br />
   Upload your resume here :&nbsp;
    <input type="file" name="resume" />
</p>
 <p align="left">&nbsp;<input type="submit" value="SUBMIT" name="submit" /></p>
</form>
</body>
</html>
