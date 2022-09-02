<?php include('nbase.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/register.css">
  <title></title>
</head>
<body>

<div class="Register">
      <form action="" method="post">
      <h2>Personal Information</h2>
      <label for="First Name">First Name</label>
          <input type="text" id="fname" name="fname" placeholder="Your First Name.." maxlength="10" /required>
          <label for="Middle Name">Middle Name</label>
        <input type="text" id="mname" name="mname" placeholder="Your Middle Name.."maxlength="10"/required>
      <label for="Last Name">Last Name</label>
        <input type="text" id="lname" name="lname" placeholder="Your Last Name.."maxlength="10"/required>
      <label for="Phone no 1">Phone no 1</label>
        <input type="number" id="phone1" name="phone1" placeholder="Your Phone no 1.." min="0" maxlength="10" 
        /required>
        <label for="Phone no 2">Phone no 2</label>
        <input type="number" id="phone2" name="phone2" placeholder="Your Phone no 2.." min="0" maxlength="10" 
        /required>
        <label for="Address">Address</label>
          <input type="text" id="addr" name="addr" placeholder="Your StreetName.." row="5"column=""30/required>
           
      <label for="state">Choose State:</label>
      <select id="state" name="state">
      <option value=" Andaman and Nicobar Islands"> Andaman and Nicobar Islands</option>
      <option value=" Andhra Pradesh">  Andhra Pradesh</option>
      <option value=" Arunachal Pradesh"> Arunachal Pradesh</option>
      <option value=" Assam"> Assam</option>
      <option value=" Bihar"> Bihar</option>
      <option value="Chandigarh">Chandigarh</option>
      <option value="Chhattisgarh">Chhattisgarh</option>
      <option value="Dadra and Nagar Haveli and Daman and Diu ">Dadra&NagarHaveli&Daman&Diu </option>
      <option value="Delhi">Delhi</option>
      <option value="Goa">Goa</option>
      <option value=" Gujarat">Gujarat</option>
      <option value="Haryana">Haryana</option>
      <option value="Himachal Pradesh">Himachal Pradesh</option>
      <option value="Jammu and Kashmir ">Jammu and Kashmir </option>
      <option value="Jharkhand">Jharkhand</option>
      <option value=" Karnataka"> Karnataka</option>
      <option value=" Kerala">Kerala</option>
      <option value=" Ladakh">Ladakh</option>
      <option value=" Lakshadweep ">Lakshadweep</option>
      <option value="Madhya Pradesh">Madhya Pradesh</option>
      <option value="Maharashtra">Maharashtra</option>
      <option value="Manipur">Manipur</option>
      <option value="Meghalaya">Meghalaya</option>
      <option value=" Mizoram"> Mizoram</option>
      <option value=" Nagaland">Nagaland</option>      
      <option value=" Odisha">Odisha</option>      
      <option value="Puducherry">Puducherry</option>      
      <option value="Punjab">Punjab</option>      
      <option value=" Rajasthan">Rajasthan</option>      
      <option value="Sikkim">Sikkim</option>
      <option value="Tamil Nadu">Tamil Nadu</option>
      <option value="Telangana">Telangana</option>      
      <option value=" Tripura"> Tripura</option>      
      <option value=" Uttar Pradesh">Uttar Pradesh</option>      
      <option value="Uttarakhand">Uttarakhand</option>      
      <option value="West Bengal">West Bengal</option>      
    </select><br>
 
<label for="state">Choose city:</label>
      <select id="city" name="city">
      <option value="Adoni">Adoni</option>
      <option value="Agartala">Agartala</option>
      <option value=" Agra">Agra</option>
      <option value="Ahmedabad">Ahmedabad</option>
      <option value="Ahmednagar">Ahmednagar</option>
      <option value="Aizawl">Aizawl</option>
      <option value="Ajmer">Ajmer</option>
      <option value="Akola">Akola</option>
      <option value="Alappuzha">Alappuzha</option>
      <option value="Aligarh">Aligarh</option>
      <option value="Allahabad">Allahabad</option>
      <option value="Alwar">Alwar</option>
      <option value="Amaravati">Amaravati</option>
      <option value="Ambala">Ambala</option>
      <option value="Ambarnath">Ambarnath</option>
      <option value="Ambattur">Ambattur</option>
      <option value="Amravati">Amravati</option>
      <option value="Amritsar">Amritsar</option>
      <option value="Amroha">Amroha</option>
      <option value="Anand">Anand</option>
      <option value="Anantapur">Anantapur</option>
      <option value="Arrah">Arrah</option>
      <option value="Asansol">Asansol</option>
      <option value="Aurangabad">Aurangabad</option>
      <option value="Avadi">Avadi</option>
      <option value="Bahraich">Bahraich</option>
      <option value="Ballia">Ballia</option>
      <option value="Bally">Bally</option>
      <option value="Bangalore">Bangalore</option>
      <option value="Baranagar">Baranagar</option>
      <option value="Barasat">Barasat</option>
      <option value="Bardhaman">Bardhaman</option>
      <option value="Bareilly">Bareilly</option>
      <option value="Bathinda">Bathinda</option>
      <option value="Begusarai">Begusarai</option>
      <option value="Belgaum">Belgaum</option>
      <option value="Bellary">Bellary</option>
      <option value="Berhampore">Berhampore</option>
      <option value="Berhampur">Berhampur</option>
      <option value="Bettiah">Bettiah</option>
      <option value="Bhagalpur">Bhagalpur</option>
      <option value="Bhalswa Jahangir Pur">Bhalswa Jahangir Pur</option>
      <option value="Bharatpur">Bharatpur</option>
      <option value="Bhatpara">Bhatpara</option>
      <option value="Bhavnagar">Bhavnagar</option>
      <option value="Bhilai">Bhilai</option>
      <option value="Bhilwara">Bhilwara</option>
      <option value="Bhimavaram">Bhimavaram</option>
      <option value="Bhind">Bhind</option>
      <option value="Bhiwandi">Bhiwandi</option>
      <option value="Bhiwani">Bhiwani</option>
      <option value="Bhopal">Bhopal</option>
      <option value="Bhubaneswar">Bhubaneswar</option>
      <option value="Bhusawal">Bhusawal</option>
      <option value="Bidar">Bidar</option>
      <option value="Bidhannagar">Bidhannagar</option>
      <option value="Bihar Sharif">Bihar Sharif</option>
      <option value="Bijapur">Bijapur</option>
      <option value="Bikaner">Bikaner</option>
      <option value="Bilaspur">Bilaspur</option>
      <option value="Bokaro">Bokaro</option>
      <option value="Bulandshahr">Bulandshahr</option>
      <option value="Burhanpur">Burhanpur</option>
      <option value="Buxar">Buxar</option>
      <option value="Chandigarh">Chandigarh</option>
      <option value="Chandrapur">Chandrapur</option>
      <option value="Chapra">Chapra</option>
      <option value="Chennai">Chennai</option>
      <option value="Chinsurah">Chinsurah</option>
      <option value="Chittoor">Chittoor</option>
      <option value="Coimbatore">Coimbatore</option>
      <option value="Cuttack">Cuttack</option>
      <option value="Danapur">Danapur</option>
      <option value="Darbhanga">Darbhanga</option>
      <option value="Davanagere">Davanagere</option>
      <option value="Dehradun">Dehradun</option>
      <option value="Dehri">Dehri</option>
      <option value="Delhi">Delhi</option>
      <option value="Deoghar">Deoghar</option>
      <option value="Dewas">Dewas</option>
      <option value="Dhanbad">Dhanbad</option>
      <option value="Dharmavaram">Dharmavaram</option>
      <option value="Dhule">Dhule</option>
      <option value="Dindigul">Dindigul</option>
      <option value="Durg">Durg</option>
      <option value="Durgapur">Durgapur</option>
      <option value="Eluru">Eluru</option>
      <option value="Erode">Erode</option>
      <option value="Etawah">Etawah</option>
      <option value="Faridabad">Faridabad</option>
      <option value="Farrukhabad">Farrukhabad</option>
      <option value="Fatehpur">Fatehpur</option>
      <option value="Firozabad">Firozabad</option>
      <option value="Gandhidham">Gandhidham</option>
      <option value="Gandhinagar">Gandhinagar</option>
      <option value="Gangtok">Gangtok</option>
      <option value="Gaya">Gaya</option>
      <option value="Ghaziabad">Ghaziabad</option>
      <option value="Gopalpur">Gopalpur</option>
      <option value="Gorakhpur">Gorakhpur</option>
      <option value="Gudivada">Gudivada</option>
      <option value="Gulbarga">Gulbarga</option>
      <option value="Guna">Guna</option>
      <option value="Guntakal">Guntakal</option>
      <option value="Guntur">Guntur</option>
      <option value="Gurgaon">Gurgaon</option>
      <option value="Guwahati">Guwahati</option>
      <option value="Gwalior">Gwalior</option>
      <option value="Hajipur">Hajipur</option>
      <option value="Haldia">Haldia</option>
      <option value="Hapur">Hapur</option>
      <option value="Haridwar">Haridwar</option>
      <option value="Hindupur">Hindupur</option>
      <option value="Hospet">Hospet</option>
      <option value="Howrah">Howrah</option>
      <option value="Hubli–Dharwad">Hubli–Dharwad</option>
      <option value="Hyderabad">Hyderabad</option>
      <option value="Ichalkaranji">Ichalkaranji</option>
      <option value="Imphal">Imphal</option>
      <option value="Indore">Indore</option>
      <option value="Jabalpur">Jabalpur</option>
      <option value="Jaipur">Jaipur</option>
      <option value="Jalandhar">Jalandhar</option>
      <option value="Jalgaon">Jalgaon</option>
      <option value="Jalna">Jalna</option>
      <option value="Jamalpur">Jamalpur</option>
      <option value="Jammu">Jammu</option>
      <option value="Jamnagar">Jamnagar</option>
      <option value="Jamshedpur">Jamshedpur</option>
      <option value="Jaunpur">Jaunpur</option>
      <option value="Jehanabad">Jehanabad</option>
      <option value="Jhansi">Jhansi</option>
      <option value="Jodhpur">Jodhpur</option>
      <option value="Junagadh">Junagadh</option>
      <option value="Kadapa">Kadapa</option>
      <option value="Kakinada">Kakinada</option>
      <option value="Kalyan-Dombivli">Kalyan-Dombivli</option>
      <option value="Kamarhati">Kamarhati</option>
      <option value="Kanpur">Kanpur</option>
      <option value="Karaikudi">Karaikudi</option>
      <option value="Karawal Nagar">Karawal Nagar</option>
      <option value="Karimnagar">Karimnagar</option>
      <option value="Karnal">Karnal</option>
      <option value="Katihar">Katihar</option>
      <option value="Katni">Katni</option>
      <option value="Kavali">Kavali</option>
      <option value="Khammam">Khammam</option>
      <option value="Khandwa">Khandwa</option>
      <option value="Kharagpur">Kharagpur</option>
      <option value="Kirari Suleman Nagar">Kirari Suleman Nagar</option>
      <option value="Kishanganj">Kishanganj</option>
      <option value="Kochi">Kochi</option>
      <option value="Kolhapur">Kolhapur</option>
      <option value="Kolkata">Kolkata</option>
      <option value="Kollam">Kollam</option>
      <option value="Korba">Korba</option>
      <option value="Kota">Kota</option>
      <option value="Kottayam">Kottayam</option>
      <option value="Kozhikode">Kozhikode</option>
      <option value="Kulti">Kulti</option>
      <option value="Kumbakonam">Kumbakonam</option>
      <option value="Kurnool">Kurnool</option>
      <option value="Latur">Latur</option>
      <option value="Loni">Loni</option>
      <option value="Lucknow">Lucknow</option>
      <option value="Ludhiana">Ludhiana</option>
      <option value="Machilipatnam">Machilipatnam</option>
      <option value="Madanapalle">Madanapalle</option>
      <option value="Madhyamgram">Madhyamgram</option>
      <option value="Madurai">Madurai</option>
      <option value="Mahaboobnagar">Mahaboobnagar</option>
      <option value="Maheshtala">Maheshtala</option>
      <option value="Malda">Malda</option>
      <option value="Malegaon">Malegaon</option>
      <option value="Mangalore">Mangalore</option>
      <option value="Mango">Mango</option>
      <option value="Mathura">Mathura</option>
      <option value="Mau">Mau</option>
      <option value="Meerut">Meerut</option>
      <option value="Mehsana">Mehsana</option>
      <option value="Mira-Bhayandar">Mira-Bhayandar</option>
      <option value="Miryalaguda">Miryalaguda</option>
      <option value="Mirzapur">Mirzapur</option>
      <option value="Moradabad">Moradabad</option>
      <option value="Morbi">Morbi</option>
      <option value="Morena">Morena</option>
      <option value="Motihari">Motihari</option>
      <option value="Mumbai">Mumbai</option>
      <option value="Munger">Munger</option>
      <option value="Muzaffarnagar">Muzaffarnagar</option>
      <option value="Muzaffarpur">Muzaffarpur</option>
      <option value="Mysore">Mysore</option>
      <option value="Nadiad">Nadiad</option>
      <option value="Nagercoil">Nagercoil</option>
      <option value="Nagpur">Nagpur</option>
      <option value="Naihati">Naihati</option>
      <option value="Nanded">Nanded</option>
      <option value="Nandyal">Nandyal</option>
      <option value="Nangloi Jat">Nangloi Jat</option>
      <option value="Narasaraopet">Narasaraopet</option>
      <option value="Nashik">Nashik</option>
      <option value="Navi Mumbai">Navi Mumbai</option>
      <option value="Nellore">Nellore</option>
      <option value="New Delhi">New Delhi</option>
      <option value="Nizamabad">Nizamabad</option>
      <option value="Noida">Noida</option>
      <option value="North Dumdum">North Dumdum</option>
      <option value="Ongole">Ongole</option>
      <option value="Orai">Orai</option>
      <option value="Ozhukarai">Ozhukarai</option>
      <option value="Pali">Pali</option>
      <option value="Pallavaram">Pallavaram</option>
      <option value="Panchkula">Panchkula</option>
      <option value="Panihati">Panihati</option>
      <option value="Panipat">Panipat</option>
      <option value="Panvel">Panvel</option>
      <option value="Parbhani">Parbhani</option>
      <option value="Patiala">Patiala</option>
      <option value="Patna">Patna</option>
      <option value="Phagwara">Phagwara</option>
      <option value="Pimpri-Chinchwad">Pimpri-Chinchwad</option>
      <option value="Pondicherry">Pondicherry</option>
      <option value="Proddatur">Proddatur</option>
      <option value="Pune">Pune</option>
      <option value="Purnia">Purnia</option>
      <option value="Raebareli">Raebareli</option>
      <option value="Raichur">Raichur</option>
      <option value="Raiganj">Raiganj</option>
      <option value="Raipur">Raipur</option>
      <option value="Rajahmundry">Rajahmundry</option>
      <option value="Rajkot">Rajkot</option>
      <option value="Rajpur Sonarpur">Rajpur Sonarpur</option>
      <option value="Ramagundam">Ramagundam</option>
      <option value="Rampur">Rampur</option>
      <option value="Ranchi">Ranchi</option>
      <option value="Ratlam">Ratlam</option>
      <option value="Raurkela Industrial Township">Raurkela Industrial Township</option>
      <option value="Rewa">Rewa</option>
      <option value="Rohtak">Rohtak</option>
      <option value="Rourkela">Rourkela</option>
      <option value="Sagar">Sagar</option>
      <option value="Saharanpur">Saharanpur</option>
      <option value="Saharsa">Saharsa</option>
      <option value="Salem">Salem</option>
      <option value="Sambalpur">Sambalpur</option>
      <option value="Sambhal">Sambhal</option>
      <option value="Sangli-Miraj & Kupwad">Sangli-Miraj & Kupwad</option>
      <option value="Sasaram">Sasaram</option>
      <option value="Satara">Satara</option>
      <option value="Satna">Satna</option>
      <option value="Secunderabad">Secunderabad</option>
      <option value="Serampore">Serampore</option>
      <option value="Shahjahanpur">Shahjahanpur</option>
      <option value="Shimla">Shimla</option>
      <option value="Shimoga">Shimoga</option>
      <option value="Shivpuri">Shivpuri</option>
      <option value="Sikar">Sikar</option>
      <option value="Siliguri">Siliguri</option>
      <option value="Singrauli">Singrauli</option>
      <option value="Sirsa">Sirsa</option>
      <option value="Siwan">Siwan</option>
      <option value="Solapur">Solapur</option>
      <option value="Sonipat">Sonipat</option>
      <option value="South Dumdum">South Dumdum</option>
      <option value="Sri Ganganagar">Sri Ganganagar</option>
      <option value="Srikakulam">Srikakulam</option>
      <option value="Srinagar">Srinagar</option>
      <option value="Sultan Pur Majra">Sultan Pur Majra</option>
      <option value="Surat">Surat</option>
      <option value="Surendranagar Dudhrej">Surendranagar Dudhrej</option>
      <option value="Suryapet">Suryapet</option>
      <option value="Tadepalligudem">Tadepalligudem</option>
      <option value="Tadipatri">Tadipatri</option>
      <option value="Tenali">Tenali</option>
      <option value="Thane">Thane</option>
      <option value="Thanjavur">Thanjavur</option>
      <option value="Thiruvananthapuram">Thiruvananthapuram</option>
      <option value="Thoothukudi">Thoothukudi</option>
      <option value="Thrissur">Thrissur</option>
      <option value="Tiruchirappalli">Tiruchirappalli</option>
      <option value="Tirunelveli">Tirunelveli</option>
      <option value="Tirupati">Tirupati</option>
      <option value="Tiruppur">Tiruppur</option>
      <option value="Tiruvottiyur">Tiruvottiyur</option>
      <option value="Tumkur">Tumkur</option>
      <option value="Udaipur">Udaipur</option>
      <option value="Udupi">Udupi</option>
      <option value="Ujjain">Ujjain</option>
      <option value="Ulhasnagar">Ulhasnagar</option>
      <option value="Uluberia">Uluberia</option>
      <option value="Unnao">Unnao</option>
      <option value="Vadodara">Vadodara</option>
      <option value="Varanasi">Varanasi</option>
      <option value="Vasai-Virar">Vasai-Virar</option>
      <option value="Vellore">Vellore</option>
      <option value="Vijayanagaram">Vijayanagaram</option>
      <option value="Vijayanagaram">Vijayanagaram</option>
      <option value="Visakhapatnam">Visakhapatnam</option>
      <option value="Warangal">Warangal</option>
      <option value="Yamunanagar">Yamunanagar</option>      
      </select><br>

          <label for="Pincode">Pincode</label>
        <input type="number" id="pincode" name="pincode" placeholder="Your Pincode.." min="0" maxlength="6" /required>  
      <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Your Email id.."/required>
        <label for="Password">Password</label>
        <input type="Password" id="passwd" name="passwd" placeholder="Your Password.."
        pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
        <label for="Age">Age</label>
        <input type="number" id="age" name="age" placeholder="Your Age.." min="0" maxlength="3" /required>

<br>
        Gender:<br>
      <p>Please select your gender:</p>
  <input type="radio" name="gender" id="gender" value="male"> Male<br>
  <input type="radio" name="gender" id="gender" value="female"> Female<br>
  <input type="radio" name="gender" id="gender" value="other"> Other<br>
            
        <input type="submit" onclick="myalert()">

      </form>
    </div>

</body>
</html>
  <?php include('footer.php'); ?>
<script type="text/javascript">
       function myalert() {
                alert("Welcome to to our portal\n " + 
                "Thanks!for registration"); 
            }
</script>

<?php
$index = 1;
if(isset($_POST['fname'])){$fname = $_POST['fname'];}
if(isset($_POST['mname'])){$mname = $_POST['mname'];}
if(isset($_POST['lname'])){$lname = $_POST['lname'];}
if(isset($_POST['phone1'])){$phone1 = $_POST['phone1'];}
if(isset($_POST['phone2'])){$phone2 = $_POST['phone2'];}
if(isset($_POST['addr'])){$addr = $_POST['addr'];}
if(isset($_POST['state'])){$state = $_POST['state'];}
if(isset($_POST['city'])){$city = $_POST['city'];}
if(isset($_POST['pincode'])){$pincode = $_POST['pincode'];}
if(isset($_POST['email'])){$email = $_POST['email'];}
if(isset($_POST['passwd'])){$passwd = $_POST['passwd'];}
if(isset($_POST['age'])){$age = $_POST['age'];}
if(isset($_POST['gender'])){$gender = $_POST['gender'];}

$conn = new mysqli('localhost','root','','esewa') ;
if($conn->connect_error){
      die('connection failed :' .$conn->connect_error);
}
else
{
      $stmt = $conn->prepare("INSERT INTO signup(fname,mname,lname,phone1,phone2,addr,state,city,pincode,email,passwd,age,gender)
            values(?,?,?,?,?,?,?,?,?,?,?,?,?)");
            echo $conn -> error;
            $stmt->bind_param("sssiisssissss", $fname, $mname, $lname, $phone1, $phone2, $addr, $state, $city, $pincode, $email, $passwd, $age, $gender);
            header('Location: c login.php');
            $stmt->execute();
            $stmt->close();
            $conn->close();
}?>