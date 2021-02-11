<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Competition Batch Registration Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="class1.css">
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
     <style type="text/css">
       @import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";
body {
    font-family: 'Poppins', sans-serif;
    background: #fafafa;
}
p {
    font-family: 'Poppins', sans-serif;
    font-size: 1.1em;
    font-weight: 300;
    line-height: 1.7em;
    color: #999;
}
.active-nav{
    background-color: #e8e8e8 !important;
    color:#000;
}
.developer-credit{
    margin-top: 220px;
}
a,
a:hover,
a:focus {
    color: inherit;
    text-decoration: none;
    transition: all 0.3s;
}
.bannertext-head{
    text-align: center;
    margin-top: -30px;
}
.bannertext-head-dim{
    color:#e8e8e8;
    margin-top: -15px;
}
.navbar {
    padding: 15px 10px;
    background: #fff;
    border: none;
    border-radius: 0;
    margin-bottom: 40px;
    box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
}

.navbar-btn {
    box-shadow: none;
    outline: none !important;
    border: none;
}

.line {
    width: 100%;
    height: 1px;
    border-bottom: 1px dashed #ddd;
    margin: 40px 0;
}
.wrapper {
    display: flex;
    width: 100%;
    align-items: stretch;
}

#sidebar {
    min-width: 250px;
    max-width: 250px;
    background: #7386D5;
    color: #fff;
    transition: all 0.3s;
}
#sidebar.active {
    margin-left: -250px;
}

#sidebar .sidebar-header {
    padding: 20px;
    background: #6d7fcc;
}

#sidebar ul.components {
    padding: 20px 0;
    border-bottom: 1px solid #47748b;
}

#sidebar ul p {
    color: #fff;
    padding: 10px;
}

#sidebar ul li a {
    padding: 10px;
    font-size: 1.1em;
    display: block;
}
#sidebar ul li a:hover {
    color: #7386D5;
    background: #fff;
}
#sidebar ul li.active>a,
a[aria-expanded="true"] {
    color: #fff;
    background: #6d7fcc;
}
a[data-toggle="collapse"] {
    position: relative;
}
.dropdown-toggle::after {
    display: block;
    position: absolute;
    top: 50%;
    right: 20px;
    transform: translateY(-50%);
}
ul ul a {
    font-size: 0.9em !important;
    padding-left: 30px !important;
    background: #6d7fcc;
}
ul.CTAs {
    padding: 20px;
}
ul.CTAs a {
    text-align: center;
    font-size: 0.9em !important;
    display: block;
    border-radius: 5px;
    margin-bottom: 5px;
}
a.download {
    background: #fff;
    color: #7386D5;
}
a.article,
a.article:hover {
    background: #6d7fcc !important;
    color: #fff !important;
}
#content {
    width: 100%;
    padding: 20px;
    min-height: 100vh;
    transition: all 0.3s;
}
@media (max-width: 768px) {
    #sidebar {
        margin-left: -250px;
    }
    #sidebar.active {
        margin-left: 0;
    }
    #sidebarCollapse span {
        display: none;
    }
}

    </style>
</head>

<body>
    <div class="wrapper">
        <nav id="sidebar">

            <ul class="list-unstyled components">
                <p>British Coaching Centre</p>

                <li>
                    <a href="home.php" class="">Home</a>
                </li>
                <li>
                    <a href="locked.php" >Registration</a>
                </li>
                 <li>
                    <a href="locked.php">Candidates' Data</a>
                </li>
                <li>
                    <a href="class-selection.html" class="active-nav drop-btn">Admission</a>
                </li>
                <li>
                    <a href="">Students' Data</a>
                </li>
            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    <a href="" class="download">Back to Login Page</a>
                </li>
            </ul>
        </nav>

        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Option</span>
                    </button>

                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item">
                                
                            </li>
                        </ul>
                    </div>
            </nav>
            <div class="bannertext-head">

               <form action="competition_admission.php" method="post" enctype="mutlipart/form-data">
                <div class="row">
                <div class="col">
                  <input autocomplete="off" type="text" name="cand_f_name" id="first_name"class="form-control" placeholder="Enter Your First name" required>
               </div>
                 <div class="col">
                  <input autocomplete="off" type="text" name="cand_l_name" id="last_name" class="form-control" placeholder="Enter Your Last name">
             </div>
                 </div>
                 <br>
                 <div class="row">
                <div class="col">
                  <input autocomplete="off" type="text" name="father_name" id="father_name" class="form-control" placeholder="Enter Your Father's name" required>
               </div>
                 <div class="col">
                  <input autocomplete="off" type="text" name="mother_name" id="mother_name" class="form-control" placeholder="Enter Your Mother's name" required>
             </div>
                 </div>
                 <br>
                 <div class="row">
                <div class="col">
                  <input autocomplete="off" type="text" name="dob" id="dob" class="form-control" placeholder="Enter Your Date Of Birth" required>
               </div>
                 <div class="col">
                  <input autocomplete="off" type="text" name="gender" id="gender"class="form-control" placeholder="Enter Your Gender, example: M/F/O" required>
             </div>
                 </div>
                 <br>
                 <div class="row">
                <div class="col">
                  <input autocomplete="off" type="text" name="date" id="date" class="form-control" placeholder="Date"required>
               </div>
                 <div class="col">
                  <input autocomplete="off" type="text" name="village_name" id="village_name"class="form-control" placeholder="Enter Your Village/Town's name"required>
             </div>
                 </div>
                 <br>
                 <div class="row">
                <div class="col">
                  <input autocomplete="off" type="text" name="police_station" id="police_station_name" class="form-control" placeholder="Enter Your Police Station's name" required>
               </div>
                 <div class="col">
                  <input autocomplete="off" type="text" name="post_office" id="post_office_name"class="form-control" placeholder="Enter Your Post Office's name" required>
             </div>
                 </div>
                 <br>
                 <div class="row">
                <div class="col">
                  <input autocomplete="off" type="text" name="pin_code_no" vid="pincode" class="form-control" placeholder="Enter Your Pincode" required>
               </div>
                 <div class="col">
                  <input autocomplete="off" type="text" name="state_name" id="state_name" class="form-control" placeholder="Enter Your State's name" required>
             </div>
                 </div>
                 <br>
                 <div class="row">
                <div class="col">
                  <input autocomplete="off" type="text" name="distt_name" id="distt_name" class="form-control" placeholder="Enter Your District's name" required>
               </div>
                 <div class="col">
                  <input autocomplete="off" type="text" name="contact_number" id="contact_number" class="form-control" placeholder="Enter Your Contact number" required>
             </div>
                 </div>
                 <br>
                 <a href=""><button type="button" class="btn btn-secondary">Abort</a></button>
                 <button type="submit" class="btn btn-primary" name="submit">Submit</button>

</form>
            </div>
           

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
 
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>
</html>