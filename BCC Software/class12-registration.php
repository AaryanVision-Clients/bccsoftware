<?php

$cand_f_name = $_POST['cand_f_name'];
$cand_l_name = $_POST['cand_l_name'];
$father_name = $_POST['father_name'];
$mother_name = $_POST['mother_name'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$date = $_POST['date'];
$village_name = $_POST['village_name'];
$police_station = $_POST['police_station'];
$post_office = $_POST['post_office'];
$pin_code_no = $_POST['pin_code_no'];
$state_name = $_POST['state_name'];
$distt_name = $_POST['distt_name'];
$contact_number = $_POST['contact_number'];


//connection

$conn = new mysqli('localhost', 'root', '', 'bcc_web');
if ($conn->connect_error) {
	die('connection failed : '.$conn->connect_error);
}
else{
	$stmt = $conn->prepare("insert into class12_admission(cand_f_name, cand_l_name, father_name, mother_name, dob, gender, date, village_name, police_station, post_office, pin_code_no, state_name, distt_name, contact_number)
		values(?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
	$stmt->bind_param("ssssssssssssss",$cand_f_name, $cand_l_name, $father_name, $mother_name, $dob, $gender, $date, $village_name, $police_station, $post_office, $pin_code_no, $state_name, $distt_name, $contact_number);
    $stmt->execute();
    echo "Admission Success";
    $stmt->close();
    $conn->close();
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="favicon" href="logo.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Admission Success</title>
    <link rel="icon" href="logo.jpeg" type="image/jpeg" sizes="16x16">
    <style>
    body{
	font-family: arial !important;
}
.sign{
	color:#000;
}
.footer-right span{
    text-align: right !important;
}
.footer-left{
	text-align: left !important;
}
.txt-right{
	text-align: right;
	margin-top: 0px;
}
.txt-center {
    text-align: center;
}
.border- {
    border: 1px solid #000 !important;
}
.padding {
    padding: 15px;
}
.mar-bot {
    margin-bottom: 15px;
}
.admit-card {
    border: 2px solid #000;
    padding: 15px;
    margin: 20px 0;
}
.BoxA h5, .BoxA p {
    margin: 0;
}
h5 {
    text-transform: uppercase;
}
table img {
    width: 100%;
    margin: 0 auto;
}
.table-bordered td, .table-bordered th, .table thead th {
    border: 1px solid #000000 !important;
}
.rcv{
	font-family: courier!important; 
	font-size: 19px;
}
    </style>


  </head>
  <body>
  <div class="container">
    <div class="admit-card">
      <div class="BoxA border- padding mar-bot"> 
        <div class="row">
          <div class="col-sm-4">
            <h5>British Coaching Centre</h5>
            <p>Dharipur, Harajee, Saran<br> Mobile: 8825186361 & 6204866053</p>
          </div>
          <div class="col-sm-4 txt-center">
            <img src="logo.png" width="100px;" />
          </div>
          <div class="col-sm-4">
            <h5>Admission Form</h5>
            <p>Session 2021-22</p>
          </div>
        </div>
      </div>
      <div class="BoxC border- padding mar-bot">
        <div class="row">
          <div class="col-sm-6">
            <h5>Roll No. : </h5>
          </div>
        </div>
      </div>
      <div class="BoxD border- padding mar-bot">
        <div class="row">
          <div class="col-sm-10">
            <table class="table table-bordered">
              <tbody>
              <tr>
                <td><b>Receipt No. :</b> <span class="rcv"><b>BCC/2021-22</b></span></td>
                <td><b>Class:</b> 12</td>
              </tr>
              <tr>
                <td><b>Student Name: </b><?php echo $_POST['cand_f_name']; $_POST['cand_l_name']; ?></td>
                <td><b>Sex: </b><?php echo $_POST['gender'];?></td>
              </tr>
              <tr>
                <td><b>Father Name: </b><?php echo $_POST['father_name']; ?></td>
                <td><b>Mother Name: </b><?php echo $_POST['mother_name']; ?></td>
              </tr>
              <tr>
                <td><b>DOB: </b><?php echo $_POST['dob'];?></td>
                <td><b>Date of Admission: </b><?php echo $_POST['date'];?></td>
              </tr>
              <tr>
                <td colspan="2" style="    height: 125px;"><b>Address-<br>
                Village/Town:</b> <?php echo $_POST['village_name']; ?><br>
                <b>Post Office:</b> <?php echo $_POST['post_office']; ?><br>
                <b>Police Station:</b> <?php echo $_POST['police_station']; ?><br>
                <b>Pin Code:</b> <?php echo $_POST['pin_code_no']; ?><br>
                <b>District:</b> <?php echo $_POST['distt_name']; ?><br>
                <b>State:</b> <?php echo $_POST['state_name']; ?><br>

                </td>
              </tr>
              </tbody>
            </table>
          </div>
          <div class="col-sm-2 txt-center">
            <table class="table table-bordered">
              <tbody>
              <tr>
                <th scope="row "width="100px" height="150px"></th>
              </tr>
              <tr>
                <td colspan="2" style=" height: 25px; color:#fff" class="sign">Signature</th>
              </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
     
     
  
</section>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html> <!-- Student Name: <b><?php echo $_POST['cand_name']; ?><br></b>
    Father's Name: <b><?php echo $_POST['fath_name']; ?>
-->