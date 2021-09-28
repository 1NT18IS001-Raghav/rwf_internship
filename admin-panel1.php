<!DOCTYPE html>
<html lang="en">
  <head>


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <a class="navbar-brand" href="#"><i class="fa fa-user-plus" aria-hidden="true"></i> Global Hospital </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <script >
    var check = function() {
  if (document.getElementById('dpassword').value ==
    document.getElementById('cdpassword').value) {
    document.getElementById('message').style.color = '#5dd05d';
    document.getElementById('message').innerHTML = 'Matched';
  } else {
    document.getElementById('message').style.color = '#f55252';
    document.getElementById('message').innerHTML = 'Not Matching';
  }
}

    function alphaOnly(event) {
  var key = event.keyCode;
  return ((key >= 65 && key <= 90) || key == 8 || key == 32);
};
  </script>

  <style >
    .bg-primary {
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
}

.col-md-4{
  max-width:20% !important;
}

.list-group-item.active {
    z-index: 2;
    color: #fff;
    background-color: #342ac1;
    border-color: #007bff;
}
.text-primary {
    color: #342ac1!important;
}

#cpass {
  display: -webkit-box;
}

#list-app{
  font-size:15px;
}

.btn-primary{
  background-color: #3c50c1;
  border-color: #3c50c1;
}
  </style>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
     <ul class="navbar-nav mr-auto">
       <li class="nav-item">
        <a class="nav-link" href="logout1.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
    </ul>
  </div>
</nav>
  </head>
  <style type="text/css">
    button:hover{cursor:pointer;}
    #inputbtn:hover{cursor:pointer;}
  </style>
  <body style="padding-top:50px;">
   <div class="container-fluid" style="margin-top:50px;">
    <h3 style = "margin-left: 40%; padding-bottom: 20px;font-family: 'IBM Plex Sans', sans-serif;"> WELCOME RECEPTIONIST </h3>
    <div class="row">
  <div class="col-md-4" style="max-width:25%;margin-top: 3%;">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-dash-list" data-toggle="list" href="#list-dash" role="tab" aria-controls="home">Dashboard</a>
      <a class="list-group-item list-group-item-action" href="#list-doc" id="list-doc-list"  role="tab"    aria-controls="home" data-toggle="list">Doctor List</a>
      <a class="list-group-item list-group-item-action" href="#list-pat" id="list-pat-list"  role="tab" data-toggle="list" aria-controls="home">Patient List</a>
      <a class="list-group-item list-group-item-action" href="#list-app" id="list-app-list"  role="tab" data-toggle="list" aria-controls="home">Appointment Details</a>
      <a class="list-group-item list-group-item-action" href="#list-pres" id="list-pres-list"  role="tab" data-toggle="list" aria-controls="home">Prescription List</a>
      <a class="list-group-item list-group-item-action" href="#list-settings" id="list-adoc-list"  role="tab" data-toggle="list" aria-controls="home">Add Doctor</a>
      <a class="list-group-item list-group-item-action" href="#list-settings1" id="list-ddoc-list"  role="tab" data-toggle="list" aria-controls="home">Delete Doctor</a>
      <a class="list-group-item list-group-item-action" href="#list-mes" id="list-mes-list"  role="tab" data-toggle="list" aria-controls="home">Queries</a>
      
    </div><br>
  </div>
  <div class="col-md-8" style="margin-top: 3%;">
    <div class="tab-content" id="nav-tabContent" style="width: 950px;">



      <div class="tab-pane fade show active" id="list-dash" role="tabpanel" aria-labelledby="list-dash-list">
        <div class="container-fluid container-fullw bg-white" >
              <div class="row">
               <div class="col-sm-4">
                  <div class="panel panel-white no-radius text-center">
                    <div class="panel-body">
                      <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-users fa-stack-1x fa-inverse"></i> </span>
                      <h4 class="StepTitle" style="margin-top: 5%;">Doctor List</h4>
                      <script>
                        function clickDiv(id) {
                          document.querySelector(id).click();
                        }
                      </script> 
                      <p class="links cl-effect-1">
                        <a href="#list-doc" onclick="clickDiv('#list-doc-list')">
                          View Doctors
                        </a>
                      </p>
                    </div>
                  </div>
                </div>

                <div class="col-sm-4" style="left: -3%">
                  <div class="panel panel-white no-radius text-center">
                    <div class="panel-body" >
                      <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-users fa-stack-1x fa-inverse"></i> </span>
                      <h4 class="StepTitle" style="margin-top: 5%;">Patient List</h4>
                      
                      <p class="cl-effect-1">
                        <a href="#app-hist" onclick="clickDiv('#list-pat-list')">
                          View Patients
                        </a>
                      </p>
                    </div>
                  </div>
                </div>
              

                <div class="col-sm-4">
                  <div class="panel panel-white no-radius text-center">
                    <div class="panel-body" >
                      <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-paperclip fa-stack-1x fa-inverse"></i> </span>
                      <h4 class="StepTitle" style="margin-top: 5%;">Appointment Details</h4>
                    
                      <p class="cl-effect-1">
                        <a href="#app-hist" onclick="clickDiv('#list-app-list')">
                          View Appointments
                        </a>
                      </p>
                    </div>
                  </div>
                </div>
                </div>

                <div class="row">
                <div class="col-sm-4" style="left: 13%;margin-top: 5%;">
                  <div class="panel panel-white no-radius text-center">
                    <div class="panel-body" >
                      <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-list-ul fa-stack-1x fa-inverse"></i> </span>
                      <h4 class="StepTitle" style="margin-top: 5%;">Prescription List</h4>
                    
                      <p class="cl-effect-1">
                        <a href="#list-pres" onclick="clickDiv('#list-pres-list')">
                          View Prescriptions
                        </a>
                      </p>
                    </div>
                  </div>
                </div>


                <div class="col-sm-4" style="left: 18%;margin-top: 5%">
                  <div class="panel panel-white no-radius text-center">
                    <div class="panel-body" >
                      <span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-plus fa-stack-1x fa-inverse"></i> </span>
                      <h4 class="StepTitle" style="margin-top: 5%;">Manage Doctors</h4>
                    
                      <p class="cl-effect-1">
                        <a href="#app-hist" onclick="clickDiv('#list-adoc-list')">Add Doctors</a>
                        &nbsp|
                        <a href="#app-hist" onclick="clickDiv('#list-ddoc-list')">
                          Delete Doctors
                        </a>
                      </p>
                    </div>
                  </div>
                </div>
                </div>
                        

      
                
              </div>
            </div>
      
                
      






      <div class="tab-pane fade" id="list-doc" role="tabpanel" aria-labelledby="list-home-list">
              

              <div class="col-md-8">
      <form class="form-group" action="doctorsearch.php" method="post">
        <div class="row">
        <div class="col-md-10"><input type="text" name="doctor_contact" placeholder="Enter Email ID" class = "form-control"></div>
        <div class="col-md-2"><input type="submit" name="doctor_search_submit" class="btn btn-primary" value="Search"></div></div>
      </form>
    </div>
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">Doctor Name</th>
                    <th scope="col">Specialization</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    
                  </tr>
                </thead>
                <tbody>
                  <tr>
                        <td>ashok</td>
                        <td>General</td>
                        <td>ashok@gmail.com</td>
                        <td>ashok123</td>
                       
                      </tr><tr>
                        <td>arun</td>
                        <td>Cardiologist</td>
                        <td>arun@gmail.com</td>
                        <td>arun123</td>
                       
                      </tr><tr>
                        <td>Dinesh</td>
                        <td>General</td>
                        <td>dinesh@gmail.com</td>
                        <td>dinesh123</td>
                       
                      </tr><tr>
                        <td>Ganesh</td>
                        <td>Pediatrician</td>
                        <td>ganesh@gmail.com</td>
                        <td>ganesh123</td>
                       
                      </tr><tr>
                        <td>Amit</td>
                        <td>Cardiologist</td>
                        <td>amit@gmail.com</td>
                        <td>amit123</td>
                       
                      </tr><tr>
                        <td>Abbis</td>
                        <td>Neurologist</td>
                        <td>abbis@gmail.com</td>
                        <td>abbis123</td>
                       
                      </tr><tr>
                        <td>Tiwary</td>
                        <td>Pediatrician</td>
                        <td>tiwary@gmail.com</td>
                        <td>tiwary123</td>
                       
                      </tr><tr>
                        <td>Anoop</td>
                        <td>General</td>
                        <td>anoop@gmail.com</td>
                        <td>12345</td>
                       
                      </tr>                </tbody>
              </table>
        <br>
      </div>
    

    <div class="tab-pane fade" id="list-pat" role="tabpanel" aria-labelledby="list-pat-list">

       <div class="col-md-8">
      <form class="form-group" action="patientsearch.php" method="post">
        <div class="row">
        <div class="col-md-10"><input type="text" name="patient_contact" placeholder="Enter Contact" class = "form-control"></div>
        <div class="col-md-2"><input type="submit" name="patient_search_submit" class="btn btn-primary" value="Search"></div></div>
      </form>
    </div>
        
              <table class="table table-hover">
                <thead>
                  <tr>
                  <th scope="col">RWF Employee ID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contact</th>
                
                  </tr>
                </thead>
                <tbody>
                  <tr>
                        <td>1</td>
                        <td>Ram</td>
                        <td>Kumar</td>
                        <td>Male</td>
                        <td>ram@gmail.com</td>
                        <td>9876543210</td>
                        
                      </tr><tr>
                        <td>2</td>
                        <td>Alia</td>
                        <td>Bhatt</td>
                        <td>Female</td>
                        <td>alia@gmail.com</td>
                        <td>8976897689</td>
                        
                      </tr><tr>
                        <td>3</td>
                        <td>Shahrukh</td>
                        <td>khan</td>
                        <td>Male</td>
                        <td>shahrukh@gmail.com</td>
                        <td>8976898463</td>
                        
                      </tr><tr>
                        <td>4</td>
                        <td>Kishan</td>
                        <td>Lal</td>
                        <td>Male</td>
                        <td>kishansmart0@gmail.com</td>
                        <td>8838489464</td>
                        
                      </tr><tr>
                        <td>5</td>
                        <td>Gautam</td>
                        <td>Shankararam</td>
                        <td>Male</td>
                        <td>gautam@gmail.com</td>
                        <td>9070897653</td>
                        
                      </tr><tr>
                        <td>6</td>
                        <td>Sushant</td>
                        <td>Singh</td>
                        <td>Male</td>
                        <td>sushant@gmail.com</td>
                        <td>9059986865</td>
                        
                      </tr><tr>
                        <td>7</td>
                        <td>Nancy</td>
                        <td>Deborah</td>
                        <td>Female</td>
                        <td>nancy@gmail.com</td>
                        <td>9128972454</td>
                        
                      </tr><tr>
                        <td>8</td>
                        <td>Kenny</td>
                        <td>Sebastian</td>
                        <td>Male</td>
                        <td>kenny@gmail.com</td>
                        <td>9809879868</td>
                        
                      </tr><tr>
                        <td>9</td>
                        <td>William</td>
                        <td>Blake</td>
                        <td>Male</td>
                        <td>william@gmail.com</td>
                        <td>8683619153</td>
                        
                      </tr><tr>
                        <td>10</td>
                        <td>Peter</td>
                        <td>Norvig</td>
                        <td>Male</td>
                        <td>peter@gmail.com</td>
                        <td>9609362815</td>
                        
                      </tr><tr>
                        <td>11</td>
                        <td>Shraddha</td>
                        <td>Kapoor</td>
                        <td>Female</td>
                        <td>shraddha@gmail.com</td>
                        <td>9768946252</td>
                        
                      </tr><tr>
                        <td>12</td>
                        <td>anoop</td>
                        <td>r</td>
                        <td>Male</td>
                        <td>asgdhsdjsdh@gfhf</td>
                        <td>1234567890</td>
                        
                      </tr>                </tbody>
              </table>
        <br>
      </div>


      <div class="tab-pane fade" id="list-pres" role="tabpanel" aria-labelledby="list-pres-list">

       <div class="col-md-8">
  
        <div class="row">
        
    
        
              <table class="table table-hover">
                <thead>
                  <tr>
                  <th scope="col">Doctor</th>
                    <th scope="col">Patient ID</th>
                    <th scope="col">Appointment ID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Appointment Date</th>
                    <th scope="col">Appointment Time</th>
                    <th scope="col">Disease</th>
                    <th scope="col">Allergy</th>
                    <th scope="col">Prescription</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                        <td>Dinesh</td>
                        <td>4</td>
                        <td>11</td>
                        <td>Kishan</td>
                        <td>Lal</td>
                        <td>2020-03-27</td>
                        <td>15:00:00</td>
                        <td>Cough</td>
                        <td>Nothing</td>
                        <td>Just take a teaspoon of Benadryl every night</td>
                      </tr><tr>
                        <td>Ganesh</td>
                        <td>2</td>
                        <td>8</td>
                        <td>Alia</td>
                        <td>Bhatt</td>
                        <td>2020-03-21</td>
                        <td>10:00:00</td>
                        <td>Severe Fever</td>
                        <td>Nothing</td>
                        <td>Take bed rest</td>
                      </tr><tr>
                        <td>Kumar</td>
                        <td>9</td>
                        <td>12</td>
                        <td>William</td>
                        <td>Blake</td>
                        <td>2020-03-26</td>
                        <td>12:00:00</td>
                        <td>Sever fever</td>
                        <td>nothing</td>
                        <td>Paracetamol -> 1 every morning and night</td>
                      </tr><tr>
                        <td>Tiwary</td>
                        <td>9</td>
                        <td>13</td>
                        <td>William</td>
                        <td>Blake</td>
                        <td>2020-03-26</td>
                        <td>14:00:00</td>
                        <td>Cough</td>
                        <td>Skin dryness</td>
                        <td>Intake fruits with more water content</td>
                      </tr>                </tbody>
              </table>
        <br>
      </div>
      </div>
      </div>




      <div class="tab-pane fade" id="list-app" role="tabpanel" aria-labelledby="list-pat-list">

         <div class="col-md-8">
      <form class="form-group" action="appsearch.php" method="post">
        <div class="row">
        <div class="col-md-10"><input type="text" name="app_contact" placeholder="Enter Contact" class = "form-control"></div>
        <div class="col-md-2"><input type="submit" name="app_search_submit" class="btn btn-primary" value="Search"></div></div>
      </form>
    </div>
        
              <table class="table table-hover">
                <thead>
                  <tr>
                  <th scope="col">Appointment ID</th>
                  <th scope="col">Patient ID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Doctor Name</th>
                    
                    <th scope="col">Appointment Date</th>
                    <th scope="col">Appointment Time</th>
                    <th scope="col">Appointment Status</th>
                  </tr>
                </thead>
                <tbody>
                                        <tr>
                        <td>1</td>
                        <td>4</td>
                        <td>Kishan</td>
                        <td>Lal</td>
                        <td>Male</td>
                        <td>kishansmart0@gmail.com</td>
                        <td>8838489464</td>
                        <td>Ganesh</td>
                        
                        <td>2020-02-14</td>
                        <td>10:00:00</td>
                        <td>
                    Cancelled by Doctor</td>
                      </tr>
                                          <tr>
                        <td>2</td>
                        <td>4</td>
                        <td>Kishan</td>
                        <td>Lal</td>
                        <td>Male</td>
                        <td>kishansmart0@gmail.com</td>
                        <td>8838489464</td>
                        <td>Dinesh</td>
                        
                        <td>2020-02-28</td>
                        <td>10:00:00</td>
                        <td>
                    Cancelled by Patient</td>
                      </tr>
                                          <tr>
                        <td>3</td>
                        <td>4</td>
                        <td>Kishan</td>
                        <td>Lal</td>
                        <td>Male</td>
                        <td>kishansmart0@gmail.com</td>
                        <td>8838489464</td>
                        <td>Amit</td>
                        
                        <td>2020-02-19</td>
                        <td>03:00:00</td>
                        <td>
                    Cancelled by Patient</td>
                      </tr>
                                          <tr>
                        <td>4</td>
                        <td>11</td>
                        <td>Shraddha</td>
                        <td>Kapoor</td>
                        <td>Female</td>
                        <td>shraddha@gmail.com</td>
                        <td>9768946252</td>
                        <td>ashok</td>
                        
                        <td>2020-02-29</td>
                        <td>20:00:00</td>
                        <td>
                    Active</td>
                      </tr>
                                          <tr>
                        <td>5</td>
                        <td>4</td>
                        <td>Kishan</td>
                        <td>Lal</td>
                        <td>Male</td>
                        <td>kishansmart0@gmail.com</td>
                        <td>8838489464</td>
                        <td>Dinesh</td>
                        
                        <td>2020-02-28</td>
                        <td>12:00:00</td>
                        <td>
                    Active</td>
                      </tr>
                                          <tr>
                        <td>6</td>
                        <td>4</td>
                        <td>Kishan</td>
                        <td>Lal</td>
                        <td>Male</td>
                        <td>kishansmart0@gmail.com</td>
                        <td>8838489464</td>
                        <td>Ganesh</td>
                        
                        <td>2020-02-26</td>
                        <td>15:00:00</td>
                        <td>
                    Cancelled by Patient</td>
                      </tr>
                                          <tr>
                        <td>8</td>
                        <td>2</td>
                        <td>Alia</td>
                        <td>Bhatt</td>
                        <td>Female</td>
                        <td>alia@gmail.com</td>
                        <td>8976897689</td>
                        <td>Ganesh</td>
                        
                        <td>2020-03-21</td>
                        <td>10:00:00</td>
                        <td>
                    Active</td>
                      </tr>
                                          <tr>
                        <td>9</td>
                        <td>5</td>
                        <td>Gautam</td>
                        <td>Shankararam</td>
                        <td>Male</td>
                        <td>gautam@gmail.com</td>
                        <td>9070897653</td>
                        <td>Ganesh</td>
                        
                        <td>2020-03-19</td>
                        <td>20:00:00</td>
                        <td>
                    Cancelled by Doctor</td>
                      </tr>
                                          <tr>
                        <td>10</td>
                        <td>4</td>
                        <td>Kishan</td>
                        <td>Lal</td>
                        <td>Male</td>
                        <td>kishansmart0@gmail.com</td>
                        <td>8838489464</td>
                        <td>Ganesh</td>
                        
                        <td>0000-00-00</td>
                        <td>14:00:00</td>
                        <td>
                    Cancelled by Doctor</td>
                      </tr>
                                          <tr>
                        <td>11</td>
                        <td>4</td>
                        <td>Kishan</td>
                        <td>Lal</td>
                        <td>Male</td>
                        <td>kishansmart0@gmail.com</td>
                        <td>8838489464</td>
                        <td>Dinesh</td>
                        
                        <td>2020-03-27</td>
                        <td>15:00:00</td>
                        <td>
                    Active</td>
                      </tr>
                                          <tr>
                        <td>12</td>
                        <td>9</td>
                        <td>William</td>
                        <td>Blake</td>
                        <td>Male</td>
                        <td>william@gmail.com</td>
                        <td>8683619153</td>
                        <td>Kumar</td>
                        
                        <td>2020-03-26</td>
                        <td>12:00:00</td>
                        <td>
                    Active</td>
                      </tr>
                                          <tr>
                        <td>13</td>
                        <td>9</td>
                        <td>William</td>
                        <td>Blake</td>
                        <td>Male</td>
                        <td>william@gmail.com</td>
                        <td>8683619153</td>
                        <td>Tiwary</td>
                        
                        <td>2020-03-26</td>
                        <td>14:00:00</td>
                        <td>
                    Active</td>
                      </tr>
                                    </tbody>
              </table>
        <br>
      </div>

<div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">...</div>

      <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
        <form class="form-group" method="post" action="admin-panel1.php">
          <div class="row">
                  <div class="col-md-4"><label>Doctor Name:</label></div>
                  <div class="col-md-8"><input type="text" class="form-control" name="doctor" onkeydown="return alphaOnly(event);" required></div><br><br>
                  <div class="col-md-4"><label>Specialization:</label></div>
                  <div class="col-md-8">
                   <select name="special" class="form-control" id="special" required="required">
                      <option value="head" name="spec" disabled selected>Select Specialization</option>
                      <option value="General" name="spec">General</option>
                      <option value="Cardiologist" name="spec">Cardiologist</option>
                      <option value="Neurologist" name="spec">Neurologist</option>
                      <option value="Pediatrician" name="spec">Pediatrician</option>
                    </select>
                    </div><br><br>
                  <div class="col-md-4"><label>Email ID:</label></div>
                  <div class="col-md-8"><input type="email"  class="form-control" name="demail" required></div><br><br>
                  <div class="col-md-4"><label>Password:</label></div>
                  <div class="col-md-8"><input type="password" class="form-control"  onkeyup='check();' name="dpassword" id="dpassword"  required></div><br><br>
                  <div class="col-md-4"><label>Confirm Password:</label></div>
                  <div class="col-md-8"  id='cpass'><input type="password" class="form-control" onkeyup='check();' name="cdpassword" id="cdpassword" required>&nbsp &nbsp<span id='message'></span> </div><br><br>
                   
                  
                 
                  
                </div>
          <input type="submit" name="docsub" value="Add Doctor" class="btn btn-primary">
        </form>
      </div>

      <div class="tab-pane fade" id="list-settings1" role="tabpanel" aria-labelledby="list-settings1-list">
        <form class="form-group" method="post" action="admin-panel1.php">
          <div class="row">
          
                  <div class="col-md-4"><label>Email ID:</label></div>
                  <div class="col-md-8"><input type="email"  class="form-control" name="demail" required></div><br><br>
                  
                </div>
          <input type="submit" name="docsub1" value="Delete Doctor" class="btn btn-primary" onclick="confirm('do you really want to delete?')">
        </form>
      </div>


       <div class="tab-pane fade" id="list-attend" role="tabpanel" aria-labelledby="list-attend-list">...</div>

       <div class="tab-pane fade" id="list-mes" role="tabpanel" aria-labelledby="list-mes-list">

         <div class="col-md-8">
      <form class="form-group" action="messearch.php" method="post">
        <div class="row">
        <div class="col-md-10"><input type="text" name="mes_contact" placeholder="Enter Contact" class = "form-control"></div>
        <div class="col-md-2"><input type="submit" name="mes_search_submit" class="btn btn-primary" value="Search"></div></div>
      </form>
    </div>
        
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">User Name</th>
					<th scope="col">Rwf Employee Id</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Message</th>
					
                  </tr>
                </thead>
                <tbody>
				
                                        <tr>
                        <td>Anu</td>
						<td>5856</td>
                        <td>anu@gmail.com</td>
                        <td>7896677554</td>
                        <td>Hey Admin</td>
                      </tr>
                                          <tr>
                        <td> Viki</td>
						<td>456</td>
                        <td>viki@gmail.com</td>
                        <td>9899778865</td>
                        <td>Good Job, Pal</td>
                      </tr>
                                          <tr>
                        <td>Ananya</td>
						<td>4544</td>
                        <td>ananya@gmail.com</td>
                        <td>9997888879</td>
                        <td>How can I reach you?</td>
                      </tr>
                                          <tr>
                        <td>Aakash</td>
						<td>464</td>
                        <td>aakash@gmail.com</td>
                        <td>8788979967</td>
                        <td>Love your site</td>
                      </tr>
                                          <tr>
                        <td>Mani</td>
						<td>9354</td>
                        <td>mani@gmail.com</td>
                        <td>8977768978</td>
                        <td>Want some coffee?</td>
                      </tr>
                                          <tr>
                        <td>Karthick</td>
						<td>7354</td>
                        <td>karthi@gmail.com</td>
                        <td>9898989898</td>
                        <td>Good service</td>
                      </tr>
                                          <tr>
                        <td>Abbis</td>
						<td>4855</td>
                        <td>abbis@gmail.com</td>
                        <td>8979776868</td>
                        <td>Love your service</td>
                      </tr>
                                          <tr>
                        <td>Asiq</td>
						<td>075643</td>
                        <td>asiq@gmail.com</td>
                        <td>9087897564</td>
                        <td>Love your service. Thank you!</td>
                      </tr>
                                          <tr>
                        <td>Jane</td>
						<td>56</td>
                        <td>jane@gmail.com</td>
                        <td>7869869757</td>
                        <td>I love your service!</td>
                      </tr>
                                    </tbody>
              </table>
        <br>
      </div>



    </div>
  </div>
</div>
   </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.10.1/sweetalert2.all.min.js"></script>
  </body>
</html>