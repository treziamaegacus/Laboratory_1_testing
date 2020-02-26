<html>
<head>
  <title>Student Registration Form</title>
  <link href="C:\xampp2\htdocs\PHP\style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<form action="validation.php" method="POST">
<table border="2" align="center" width="600" bgcolor="#CCCCCC" >
<caption>Student Registration Form</caption>

  <table align="center" cellpadding="20">

    <!----- First Name ---------------------------------------------------------->
    <tr>
      <td>FIRST NAME</td>
      <td><input type="text" name="First_Name" placeholder="First Name" required/>
      </td>
    </tr>

    <!----- Last Name ---------------------------------------------------------->
    <tr>
      <td>LAST NAME</td>
      <td><input type="text" name="Last_Name" placeholder="Last Name" required/>
      </td>
    </tr>
    <!----- Middle Name ---------------------------------------------------------->
    <tr>
      <td>MIDDLE NAME</td>
      <td><input type="text" name="Middle_Name" placeholder="Middle Name" required/>
      </td>
    </tr>
     <!----- Address ---------------------------------------------------------->
     <tr>
      <td>ADDRESS <br /><br /><br /></td>
      <td><textarea name="Address" rows="4" cols="30"required></textarea></td>
    </tr>
    
    <!----- Date Of Birth -------------------------------------------------------->
    <tr>
      <td>DATE OF BIRTH</td>

      <td>
        <select name="Birthday_day" id="Birthday_Day">
          <option value="-1">Day:</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>

          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>

          <option value="13">13</option>
          <option value="14">14</option>
          <option value="15">15</option>
          <option value="16">16</option>
          <option value="17">17</option>
          <option value="18">18</option>
          <option value="19">19</option>
          <option value="20">20</option>
          <option value="21">21</option>

          <option value="22">22</option>
          <option value="23">23</option>
          <option value="24">24</option>
          <option value="25">25</option>
          <option value="26">26</option>
          <option value="27">27</option>
          <option value="28">28</option>
          <option value="29">29</option>
          <option value="30">30</option>

          <option value="31">31</option>
        </select>

        <select id="Birthday_Month" name="Birthday_Month">
          <option value="-1">Month:</option>
          <option value="January">Jan</option>
          <option value="February">Feb</option>
          <option value="March">Mar</option>
          <option value="April">Apr</option>
          <option value="May">May</option>
          <option value="June">Jun</option>
          <option value="July">Jul</option>
          <option value="August">Aug</option>
          <option value="September">Sep</option>
          <option value="October">Oct</option>
          <option value="November">Nov</option>
          <option value="December">Dec</option>
        </select>

        <select name="Birthday_Year" id="Birthday_Year">

          <option value="-1">Year:</option>
          <option value="2012">2012</option>
          <option value="2011">2011</option>
          <option value="2010">2010</option>
          <option value="2009">2009</option>
          <option value="2008">2008</option>
          <option value="2007">2007</option>
          <option value="2006">2006</option>
          <option value="2005">2005</option>
          <option value="2004">2004</option>
          <option value="2003">2003</option>
          <option value="2002">2002</option>
          <option value="2001">2001</option>
          <option value="2000">2000</option>

          <option value="1999">1999</option>
          <option value="1998">1998</option>
          <option value="1997">1997</option>
          <option value="1996">1996</option>
          <option value="1995">1995</option>
          <option value="1994">1994</option>
          <option value="1993">1993</option>
          <option value="1992">1992</option>
          <option value="1991">1991</option>
          <option value="1990">1990</option>

          <option value="1989">1989</option>
          <option value="1988">1988</option>
          <option value="1987">1987</option>
          <option value="1986">1986</option>
          <option value="1985">1985</option>
          <option value="1984">1984</option>
          <option value="1983">1983</option>
          <option value="1982">1982</option>
          <option value="1981">1981</option>
          <option value="1980">1980</option>
        </select>
      </td>
    </tr>
    <!----- Place of Birth ---------------------------------------------------------->
      <tr>
      <td>Place of Birth <br /><br /><br /></td>
      <td><textarea name="Place_of_Birth" placeholder="Place of Birth"rows="4" cols="30"required></textarea></td>
    </tr>
    
    <!----- Gender ----------------------------------------------------------->
    <tr>
      <td>GENDER</td>
      <td>
        Male <input type="radio" name="Gender" value="Male" />
        Female <input type="radio" name="Gender" value="Female" />
      </td>
    <!----- Contact Number ---------------------------------------------------------->
    <tr>
      <td>CONTACT NUMBER</td>
      <td>
        <input type="text" name="Contact_Number" maxlength="10" placeholder="+63"required />
        (+63XXXXXXXXXX)
      </td>
    </tr>
    <!----- Civil Status ---------------------------------------------------------->
    <tr>
      <td>CIVIL STATUS</td>
      <td><input type="text" name="Civil_Status" placeholder="Civil Status"required />
      </td>
    </tr>
    <!----- Year Level ---------------------------------------------------------->
    <tr>
    <td>YEAR LEVEL</td>
    <td>
      <select id="Year_Level" name="Year_Level" required>
        <option value="First_Year">First Year</option>
        <option value="Second_Year">Second Year</option>
        <option value="Third_Year">Third Year</option>
        <option value="Fourth_Year">Fourth Year</option>
        <option value="Fifth_Year">Fifth Year</option>
      </select>
    </td>
    <!----- Course ---------------------------------------------------------->
    <tr>
    <td>COURSE</td>
    <td>
     <select id="Course" name="Course" required>
        <option value=>B.S. in Architecture</option>
        <option value=>B.S. in Civil Engineering</option>
        <option value=>B.S. in Electrical Engineering</option>
        <option value=>B.S. in Electronics Engineering</option>
        <option value=>B.S. in Mechanical Engineering</option>
        <option value=>B.S. in Applied Physical Sciences</option>
        <option value=>B.S. in Chemistry</option>
        <option value=>B.S. in Environmental Science and Technology</option>
        <option value=>B.S. in Food Science and Technology</option>
        <option value=>B.S. in Information Technology</option>
    <!----- School Year ---------------------------------------------------------->
    <tr>
      <td>SCHOOL YEAR</td>
      <td><input type="text" name="School_Year" placeholder="School Year"required />
      </td>
    </tr>

      </select>
    </td>

    <!----- Submit ------------------------------------------------->
    <tr>
      <td colspan="2" align="center">
        <input type="SUBMIT" value="SUBMIT">
      </td>
    </tr>
  </table>

  </form>
