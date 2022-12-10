<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap" rel="stylesheet">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
<link rel="stylesheet" href="styles.css">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>

</head>
<body>
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="ajax.php">Admission</a>
    <form class="d-flex" method="post">
      <input class="form-control me-2" type="search" name="regis"  placeholder="Search" aria-label="Search">
      
      <button class="btn btn-outline-success" type="button"  name="search">Search</button>
      <button class="btn btn-outline-primary" type="submit" name="editData">Edit</button>
      <button class="btn btn-outline-danger" onclick="window.print()" >Print</button>

    </form>
  </div>
</nav>



<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "admin";

// creating a connection
$con =new mysqli($host, $username, $password, $dbname);

// to ensure that the connection is made
if (!$con)
{
    die("Connection failed!" . mysqli_connect_error());
}




@$reg_no = $_POST['reg'];
@$name = $_POST['name'];
@$dob = $_POST['dob'];
@$parent_name = $_POST['parent'];
@$mobile_number=$_POST['phno'];
@$gender=$_POST['gender'];
@$religion=$_POST['religion'];
@$nationality = $_POST['nation'];
@$email = $_POST['email'];

@$category = $_POST['category'];
@$caste = $_POST['caste'] ;

    @$pwd = $_POST['pwd'];
    @$games = $_POST['games'];
    @$wardOfService = $_POST['ward'];
    @$NRI = $_POST['nri'];
    @$andaman = $_POST['andaman'];
    @$NccHolder = $_POST['NccHolder'];
    @$srilankaRefugee = $_POST['srilanka'];
      @$preferreddegree=$_POST['predegree'];
      @$programname=$_POST['programname'];
      @$natives=$_POST['nativeplace'];
@$sslc_status=$_POST['sslc_status'];
@$sslc_school=$_POST['sslc_school'];
@$sslc_Board=$_POST['sslc_board'];
@$sslc_mark=$_POST['sslc_mark'];
@$sslc_yop=$_POST['sslc_yop'];

@$hsc_group=$_POST['hsc_group'];
@$hsc_status=$_POST['hsc_status'];
@$hsc_school=$_POST['hsc_school'];
@$hsc_Board=$_POST['hsc_board'];
@$hsc_mark=$_POST['hsc_mark'];
@$hsc_yop=$_POST['hsc_yop'];


@$g_status=$_POST["g_status"];
@$g_exampattern=$_POST["g_exampattern"];
@$g_college=$_POST["g_college"];
@$g_university=$_POST["g_university"];
@$g_branch=$_POST["g_branch"];
@$g_yop=$_POST["g_yop"];
@$g_mark1=$_POST["g_mark1"];
@$g_mark2=$_POST["g_mark2"];
@$g_mark3=$_POST["g_mark3"];

@$checkvalue=$_POST["gradcheck"];
@$id=$_POST['regis'];


$sql="select nationid from nationality where nationalityname='$nationality'";

@$check=$con->query($sql);
@$row = mysqli_fetch_row($check);

@$nid=$row[0];
if(is_null($nid))
{
 
 $sql1="INSERT INTO nationality(nationalityname) values ('$nationality')";
 $con->query($sql1);
 $sql2="select nationid from nationality where nationalityname='$nationality'";

 $result= mysqli_query($con,$sql2);

 @$row = mysqli_fetch_row($result);

 @$nid=$row[0]; 

}

$sql2="select religionId from religion where religionname='$religion'";

$check=$con->query($sql2);
@$row = mysqli_fetch_row($check);

@$rid=$row[0];
if(is_null($rid))
{

$sql1="INSERT INTO religion(religionname) values('$religion')";
$con->query($sql1);
$sql2="select religionid from religion where religionname=''$religion''";

$result= mysqli_query($con,$sql2);

@$row = mysqli_fetch_row($result);

@$rid=$row[0];

}
///

$sql="select genderid from gender where gendername='$gender'";

$check=$con->query($sql);
@$row = mysqli_fetch_row($check);

@$gid=$row[0];
if(is_null($gid))
{
 
 $sql1="INSERT INTO gender(gendername) values ('$gender')";
 $con->query($sql1);
 $sql2="select genderid from gender where gendername='$gender'";

 $result= mysqli_query($con,$sql2);

 @$row = mysqli_fetch_row($result);

 @$gid=$row[0]; 

}



$sql="select categoryid from category where categoryname='$category'";
  
  $check=$con->query($sql);
  @$row = mysqli_fetch_row($check);

  @$categoryid=$row[0];
  if(is_null($categoryid))
{
   
   $sql1="INSERT INTO category(categoryname) values ('$category')";
   $con->query($sql1);
   $sql2="select categoryid from category where categoryname='$category'";
  
   $result= mysqli_query($con,$sql2);
 
   @$row = mysqli_fetch_row($result);

   @$categoryid=$row[0]; 

}

$sql="select casteid from caste where castename='$caste'";
  
  $check=$con->query($sql);
  @$row = mysqli_fetch_row($check);

  @$casteid=$row[0];
  if(is_null($casteid))
{
   
   $sql1="INSERT INTO caste(castename) values ('$caste')";
   $con->query($sql1);
   $sql2="select casteid from caste where castename='$caste'";
  
   $result= mysqli_query($con,$sql2);
 
   @$row = mysqli_fetch_row($result);

   @$casteid=$row[0]; 

}



$sslc="sslc";
$hsc="hsc";

$sql="select gradeid from schooldegree where schoolgrade='$sslc'";
  
  $check=$con->query($sql);
  @$row = mysqli_fetch_row($check);

  @$grade1id=$row[0];
  if(is_null($grade1id))
{
   
   $sql1="INSERT INTO schooldegree(schoolgrade) values ('$sslc')";
   $con->query($sql1);
   $sql2="select gradeid from schooldegree where schoolgrade='$sslc'";
  
   $result= mysqli_query($con,$sql2);
 
   @$row = mysqli_fetch_row($result);

   @$grade1id=$row[0]; 

}

////

$sql="select gradeid from schooldegree where schoolgrade='$hsc'";
  
  $check=$con->query($sql);
  @$row = mysqli_fetch_row($check);

  @$grade2id=$row[0];
  if(is_null($grade2id))
{
   
   $sql1="INSERT INTO schooldegree(schoolgrade) values ('$hsc')";
   $con->query($sql1);
   $sql2="select gradeid from schooldegree where schoolgrade='$hsc'";
  
   $result= mysqli_query($con,$sql2);
 
   @$row = mysqli_fetch_row($result);

   @$grade2id=$row[0]; 

}



$sql="select schoolid from school where schoolname='$sslc_school'";
  
  $check=$con->query($sql);
  @$row = mysqli_fetch_row($check);

  @$sslcschoolid=$row[0];
  if(is_null($sslcschoolid))
{
   
   $sql1="INSERT INTO school(schoolname) values ('$sslc_school')";
   $con->query($sql1);
   $sql2="select schoolid from school where schoolname='$sslc_school'";
  
   $result= mysqli_query($con,$sql2);
 
   @$row = mysqli_fetch_row($result);

   @$sslcschoolid=$row[0]; 

}




$sql="select schoolid from school where schoolname='$hsc_school'";
  
  $check=$con->query($sql);
  @$row = mysqli_fetch_row($check);

  @$hscschoolid=$row[0];
  if(is_null($hscschoolid))
{
   
   $sql1="INSERT INTO school(schoolname) values ('$hsc_school')";
   $con->query($sql1);
   $sql2="select schoolid from school where schoolname='$hsc_school'";
  
   $result= mysqli_query($con,$sql2);
 
   @$row = mysqli_fetch_row($result);

   @$hscschoolid=$row[0]; 

}





$sql="select boardid from board where boardname='$sslc_Board'";
  
  $check=$con->query($sql);
  @$row = mysqli_fetch_row($check);

  @$sslcboardid=$row[0];
  if(is_null($sslcboardid))
{
   
   $sql1="INSERT INTO board(boardname) values ('$sslc_Board')";
   $con->query($sql1);
   $sql2="select boardid from board where boardname='$sslc_Board'";
  
   $result= mysqli_query($con,$sql2);
 
   @$row = mysqli_fetch_row($result);

   @$sslcboardid=$row[0]; 

}





$sql="select boardid from board where boardname='$hsc_Board'";
  
  $check=$con->query($sql);
  @$row = mysqli_fetch_row($check);

  @$hscboardid=$row[0];
  if(is_null($hscboardid))
{
   
   $sql1="INSERT INTO board(boardname) values ('$hsc_Board')";
   $con->query($sql1);
   $sql2="select boardid from board where boardname='$hsc_Board'";
  
   $result= mysqli_query($con,$sql2);
 
   @$row = mysqli_fetch_row($result);

   @$hscboardid=$row[0]; 

}


$getData=array("reg"=>"$reg_no","name"=>"$name","dob"=>"$dob","parent"=>$parent_name,"phno"=>"$mobile_number","gender"=>"$gender","religion"=>"$religion","nationality"=>"$nationality","email"=>"$email","category"=>"$category","caste"=>"$caste","pwd"=>"$pwd","games"=>"$games","ward"=>"$wardOfService","nri"=>"$NRI","andaman"=>"$andaman","ncc"=>"$NccHolder","srilanka"=>"$srilankaRefugee","preferreddegree"=>$preferreddegree,"programname"=>"$programname","natives"=>"$natives","sslc_status"=>"$sslc_status","sslc_school"=>"$sslc_school","sslc_board"=>"$sslc_Board","sslc_mark"=>"$sslc_mark","sslc_yop"=>"$sslc_yop","hsc_group"=>"$hsc_group","hsc_status"=>"$hsc_status","hsc_school"=>"$hsc_school","hsc_board"=>"$hsc_Board","hsc_mark"=>"$hsc_mark","hsc_yop"=>"$hsc_yop","g_status"=>"$g_status","g_exampattern"=>"$g_exampattern","g_college"=>"$g_college","g_university"=>"$g_university","g_branch"=>$g_branch,"g_yop"=>$g_yop,"g_mark1"=>$g_mark1,"g_mark2"=>"$g_mark2","g_mark3"=>"$g_mark3","checkvalue"=>"$checkvalue","id"=>"$id","rid"=>"$rid","gid"=>"$gid","nid"=>$nid,"casteid"=>"$casteid","categoryid"=>"$categoryid","grade1id"=>"$grade1id","grade2id"=>"$grade2id","sslcboardid"=>"$sslcboardid","sslcschoolid"=>"$sslcschoolid","hscboardid"=>"$hscboardid","hscschoolid"=>"$hscschoolid","checkvalue"=>"$checkvalue");



if(isset($_POST["submitData"]))
{
    insertData($getData,$con);
}

function insertData($getData,$con)
{

  print_r($getData);
  echo "'".$getData['reg']."'";
 
$sql="select reg from personaldetail where reg='".$getData['reg']."'";
$result=$con->query($sql);
@$row = mysqli_fetch_row($result);

@$regid=$row[0]; 
if(is_null($regid))
{
$sql1 = "INSERT INTO personaldetail(reg,studentname,dob, parentName,mobileNo,genderId,religionId,nationId,emailId) VALUES ('".$getData['reg']."', '".$getData['name']."', '".$getData['dob']."', '".$getData['parent']."','".$getData['phno']."', '".$getData['gid']."', '".$getData['rid']."', '".$getData['nid']."','".$getData['email']."')";
$con->query($sql1);



$sql2 = "INSERT INTO communitydetail(reg,categoryid,casteid,pwd,games,wardofservice,NRI,AndamanIsland,NccHolder,srilankaRefugee) VALUES ('".$getData['reg']."','".$getData['categoryid']."', '".$getData['casteid']."', '".$getData['pwd']."', '".$getData['games']."','".$getData['ward']."', '".$getData['nri']."', '".$getData['andaman']."', '".$getData['ncc']."','".$getData['srilanka']."')";
if ($con->query($sql2) === TRUE) {
  // echo "New record created successfully";
} else {
  echo "Error: " . $sql2 . "<br>" . $con->error;
}


$sql = "INSERT INTO programmedetail(reg,preferred_degree,programme_name,nativity) VALUES ('".$getData['reg']."','".$getData['preferreddegree']."', '".$getData['programname']."', '".$getData['natives']."')";
if ($con->query($sql) === TRUE) {
  // echo "New record created successfully";
} else {
  echo "Error: " . $sql2 . "<br>" . $con->error;
}
///





$sql="INSERT INTO schooldetail(reg,currentstatus,schooldegree,schoolid,Boardid,mark,yop)values('".$getData['reg']."','".$getData['sslc_status']."','".$getData['grade1id']."','".$getData['sslcschoolid']."','".$getData['sslcboardid']."','".$getData['sslc_mark']."','".$getData['sslc_yop']."')";
$con->query($sql);
$sql="INSERT INTO schooldetail(reg,currentstatus,schooldegree,schoolid,Boardid,mark,yop,subgroup)values('".$getData['reg']."','".$getData['hsc_status']."','".$getData['grade2id']."','".$getData['hscschoolid']."','".$getData['hscboardid']."','".$getData['hsc_mark']."','".$getData['hsc_yop']."','".$getData['hsc_group']."')";
$con->query($sql);



if(is_null($checkvalue))
{
      $sql="INSERT INTO graduationdetails(g_id,g_status,g_exampattern,g_college,g_university,g_branch,g_yop,g_mark1,g_mark2,g_mark3) VALUES ('".$getData['reg']."','".$getData['g_status']."','".$getData['g_exampattern']."','".$getData['g_college']."','".$getData['g_university']."','".$getData['g_branch']."','".$getData['g_yop']."','".$getData['g_mark1']."','".$getData['g_mark2']."','".$getData['g_mark3']."')";
      $con->query($sql);  
}

}
  

}




  if(isset($_POST["editData"]))
  {
    // echo $id;
        $ed=editData($id,$con);
      //  print_r($ed[0]["studentname"]);

  }
  
  

function editData($id,$con)
{

    // database details
    

    $sql="select reg from personaldetail where reg='$id'";
  
    $check=$con->query($sql);
    @$row = mysqli_fetch_row($check);
  
    @$rid=$row[0];
    if(isset($rid))
  {
    //personaldetails
$sql = "SELECT * FROM personaldetail A INNER JOIN gender ON A.genderid = gender.genderid INNER JOIN nationality nat ON A.nationid = nat.nationid INNER JOIN religion rel ON A.religionid = rel.religionid INNER JOIN communitydetail cmd using (reg) INNER JOIN category cg ON cmd.categoryid=cg.categoryid INNER JOIN caste ct ON cmd.casteid=ct.casteid JOIN programmedetail pdt using (reg) JOIN schooldetail sdt using (reg) RIGHT JOIN schooldegree scd ON sdt.schooldegree=scd.gradeid INNER JOIN school schl ON sdt.schoolid=schl.schoolid INNER JOIN board brd ON sdt.boardid=brd.boardid where reg='$id'";

$table =$con->query($sql);

$pd = $table -> fetch_assoc();
// echo $pd["subgroup"];

   // echo @$pd["mark"]."<br>";

   $sql="SELECT * from schooldetail JOIN schooldetail sdt using (reg) INNER JOIN schooldegree scd ON sdt.schooldegree=scd.gradeid INNER JOIN school schl ON sdt.schoolid=schl.schoolid INNER JOIN board brd ON sdt.boardid=brd.boardid 
   where reg='$id' and sdt.schooldegree=1";
   
$table =$con->query($sql);

$sslc = $table -> fetch_assoc();

$sql="SELECT * from schooldetail JOIN schooldetail sdt using (reg) INNER JOIN schooldegree scd ON sdt.schooldegree=scd.gradeid INNER JOIN school schl ON sdt.schoolid=schl.schoolid INNER JOIN board brd ON sdt.boardid=brd.boardid 
where reg='$id' and sdt.schooldegree=2";

$table =$con->query($sql);

$hsc = $table -> fetch_assoc();




   $sql="SELECT * FROM graduationdetails where g_id='$id'";
   
$table =$con->query($sql);

$graduate = $table -> fetch_assoc();




  }
  
$getEdit=array($pd,$sslc,$hsc,$graduate);


return $getEdit;

}


if(isset($_POST["submitedit"]))
{
  updatedata($con,$getData);
}
function updatedata($con,$getData)
{

  $sql = "UPDATE personaldetail SET studentname='".$getData['name']."',dob='".$getData['dob']."' WHERE reg='".$getData['reg']."'";
  $con->query($sql);  



}







?>

<section>
<header class="header">
  <h1 class="header__title">ADMISSION</h1>
</header>
<div class="content">
  <div class="content__inner">
   
    <div class="container overflow-hidden">
      <div class="multisteps-form">
        <div class="row">
          <div class="col-12 col-lg-12 col-md-12 col-sm-12 ml-auto mr-auto mb-4">
            <div class="multisteps-form__progress">
              <button class="multisteps-form__progress-btn js-active" type="button" title="PInfo">Personal</button>
              <button class="multisteps-form__progress-btn" type="button" title="comdetail">community</button>
              <button class="multisteps-form__progress-btn" type="button" title="perogramme">school</button>
              <button class="multisteps-form__progress-btn" type="button" title="school">graduation</button>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-lg-10 m-auto">

            <form  action="ajax.php" method="post" class="multisteps-form__form" >
              <div class="multisteps-form__panel shadow p-4 rounded bg-white js-active" data-animation="scaleIn">
                <h3 class="multisteps-form__title">Personal Details</h3>
                <div class="multisteps-form__content">
                  <div class="form-row mt-5 d-flex justify-content-between" >
                    <div class="col-12 col-lg-5 col-sm-6  ">
                      <input class="multisteps-form__input  form-control " type="text" name="reg"  value="<?php print @$ed[0]['reg']; ?>" placeholder="Register no" />
                    </div>
                    <div class="col-12 col-lg-5 col-sm-6  mt-4 mt-sm-0" class="float-lg-right">
                      
                      <select name="gender" class="multisteps-form__input form-control">
                        <option>Male</option>
                        <option>Female</option>
                        <option>Others</option>
                     </select>
                    </div>
                  </div>
                  <div class="form-row mt-5 d-flex justify-content-between" >
                    <div class="col-12 col-sm-6 col-lg-5 ">
                      <input class="multisteps-form__input form-control" type="text" id="validationTooltip01"  name="name" value="<?php print @$ed[0]['studentname']; ?>" placeholder="Name" />
                    </div>
                    <div class="col-12 col-sm-6 mt-5 mt-sm-0 col-lg-5" >
                      <input class="multisteps-form__input form-control" type="text" name="religion" value="<?php print @$ed[0]['religionname']; ?>" placeholder="Religion"/>
                    </div>
                  </div>
                  <div class="form-row mt-5 d-flex justify-content-between" >
                    <div class="col-12 col-sm-6 col-lg-5 ">
                      <input class="multisteps-form__input form-control" type="date" name="dob"  value="<?php print @$ed[0]['dob']; ?>" placeholder="dateofbirth"/>
                    </div>
                    <div class="col-12 col-sm-6 mt-5 mt-sm-0 col-lg-5 ">
                      <input class="multisteps-form__input form-control" type="text"name="nation"  value="<?php print @$ed[0]['nationalityname']; ?>" placeholder="nationality"/>
                    </div>
                  </div>
                  <div class="form-row mt-5 d-flex justify-content-between">
                    <div class="col-12 col-sm-6 col-lg-5">
                      <input class="multisteps-form__input form-control" type="text"  name="parent" value="<?php print @$ed[0]['parentName']; ?>" placeholder="parentname"/>
                    </div>
                    <div class="col-12 col-sm-6 mt-4 mt-sm-0 col-lg-5">
                      <input class="multisteps-form__input form-control" type="email" name="email" value="<?php print @$ed[0]['emailId']; ?>" placeholder="Email"/>
                    </div>
                  </div>
                  <div class="form-row mt-5 d-flex justify-content-between">
                    <div class="col-12 col-sm-6 col-lg-5">
                      <input class="multisteps-form__input form-control" type="text"  name="phno" value="<?php print @$ed[0]['mobileNo']; ?>" placeholder="Contact number"/>
                    </div>
                  
                  </div>
                  <div class="button-row d-flex mt-4 ">
                    <button class="btn btn-primary ml-auto js-btn-next"  type="button" title="Next" name="btn1" id="next1">Next</button>
                  </div>
                </div>
              </div>

              <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
              <h3 class="multisteps-form__title">community Details</h3>
                <div class="multisteps-form__content">
                  <div class="form-row mt-5 d-flex justify-content-between">
                    <div class="col-12 col-sm-6 col-lg-5">
                      <input class="multisteps-form__input  form-control " type="text"  name="category" value="<?php print @$ed[0]['categoryname']; ?>"  placeholder="category" />
                    </div>
                    <div class="col-12 col-sm-6  mt-5 mt-sm-0 col-lg-5">
                      
                    <input class="multisteps-form__input  form-control " type="text"  name="caste" value="<?php print @$ed[0]['castename']; ?>"  placeholder="caste" />

                    </div>
                  </div>
                  <div class="form-row mt-5 d-flex justify-content-between">
                     <div class="col-12 col-sm-6 col-lg-5">
                       <div class="label">Are you PWD(Persons with Disability)</div>
                        <label for="radio11">Yes 
                        <input type="radio" id="radio11" name="pwd"   <?php if(@$ed[0]['pwd']=="yes") {echo "checked";}else{echo "";}?> value="yes"></label>
                        <label for="radio12">No
                        <input type="radio" id="radio12" name="pwd"   <?php if(@$ed[0]['pwd']=="no") {echo "checked";}else{echo "";}?> value="no"></label>   
                       </div>
                    <div class="col-12 col-sm-6 mt-4 mt-sm-0 col-lg-5">
                       <div class="label">Represented the University in Games</div>
                       <label for="radio21">Yes 
                       <input type="radio" id="radio21" name="games"  <?php if(@$ed[0]['games']=="yes") {echo "checked";}else{echo "";}?> value="yes"> </label>
                      <label for="radio22">No
                       <input type="radio" id="radio22" name="games" <?php if(@$ed[0]['games']=="no") {echo "checked";}else{echo "";}?> value="no"></label>
                          </div>
                        </div>
                
                  <div class="form-row mt-5 d-flex justify-content-between">
                    <div class="col-12 col-sm-6 col-lg-5">
                      <div class="label">Are You a ward of Service/Ex-Serviceman?</div>
                        <label for="radio31">Yes 
                       <input type="radio" id="radio31" name="ward"  <?php if(@$ed[0]['wardofservice']=="yes") {echo "checked";}else{echo "";}?> value="yes"></label>
                       <label for="radio32">No
                         <input type="radio" id="radio32" name="ward"<?php if(@$ed[0]['wardofservice']=="no") {echo "checked";}else{echo "";}?> value="No"></label>
                        </div>
                
              
                    <div class="col-12 col-sm-6 mt-4 mt-sm-0 col-lg-5">
                     <div class="label">NRI/Industrial Sponsored</div>
                      <label for="radio41">Yes 
                       <input type="radio" id="radio41" name="nri" <?php if(@$ed[0]['NRI']=="yes") {echo "checked";}else{echo "";}?> value="yes"></label>
                     <label for="radio42">No
                        <input type="radio" id="radio42" name="nri"  <?php if(@$ed[0]['NRI']=="no") {echo "checked";}else{echo "";}?>  value="no"></label>        
                        </div>
                
               </div>
                  <div class="form-row mt-5 d-flex justify-content-between">
                    <div class="col-12 col-sm-6 col-lg-5">
                    <div class="label">Are you NCC Certificate Holder</div>
                     <label for="radio61">Yes 
                    <input type="radio" id="radio61" name="NccHolder"<?php if(@$ed[0]['NccHolder']=="yes") {echo "checked";}else{echo "";}?> value="yes"></label>
                     <label for="radio62">No
                   <input type="radio" id="radio62" name="NccHolder" <?php if(@$ed[0]['NccHolder']=="yes") {echo "checked";}else{echo "";}?>value="no"></label>                 
                     </div>
                    <div class="col-12 col-sm-6 mt-4 mt-sm-0 col-lg-5">
                    <div class="label">Are you from a Sri Lankan Tamil Refugee Camp?</div>
            <label for="radio71">Yes 
               <input type="radio" id="radio71" name="srilanka" <?php if(@$ed[0]['srilankaRefugee']=="yes") {echo "checked";}else{echo "";}?> value="yes"></label>
               <label for="radio72">No
               <input type="radio" id="radio72" name="srilanka" <?php if(@$ed[0]['srilankaRefugee']=="no") {echo "checked";}else{echo "";}?> value="no"></label>                    </div>
                  </div>
                  <div class="form-row mt-5">
                    <div class="col-12 col-sm-6 col-lg-5">
                    <div class="label">Are you Tamil Origin from Andaman and Nicobar Islands?</div>
              <div class="spacetop">
              <label for="radio51">Yes 
               <input type="radio" id="radio51" name="andaman" <?php if(@$ed[0]['AndamanIsland']=="yes") {echo "checked";}else{echo "";}?> value="yes"></label>
               <label for="radio52">No
               <input type="radio" id="radio52" name="andaman" <?php if(@$ed[0]['AndamanIsland']=="no") {echo "checked";}else{echo "";}?> value="no"></label>
            </div>                    </div>
                  
                  </div>
                  <div class="button-row d-flex mt-4">
                    <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>
                    <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Next</button>
                  </div>
                </div>
              </div>

              <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
              <h3 class="multisteps-form__title">Programme Detail</h3>
                <div class="multisteps-form__content">
                  <div class="form-row mt-5 d-flex justify-content-between">
                    <div class="col-12 col-sm-6 col-lg-5 ">
                      <input type="text" name="predegree"  class="multisteps-form__input form-control" value="<?php print @$ed[0]['preferred_degree']; ?>"  placeholder="preferred degree programme">                    </div>
                    <div class="col-12 col-sm-6 col-lg-5 mt-5 mt-sm-0">
                      
                    <input   class="multisteps-form__input form-control" type="text" name="nativeplace" value="<?php print @$ed[0]['nativity']; ?>"  placeholder="nativity">
                    </div>
                  </div>
                  <div class="form-row mt-5 d-flex justify-content-between">
                    <div class="col-12 col-sm-6 col-lg-5">
                    <input class="multisteps-form__input form-control"  type="text" name="programname" value="<?php print @$ed[0]['programme_name']; ?>"  placeholder="programme name">
                    </div>
                   
                  </div>
                  <h2 id="head" >SSLC</h2>

                  <div class="form-row mt-5 d-flex justify-content-between">
                    <div class="col-12 col-sm-6 col-lg-5">
                    <div class="label">Status</span></div>
               
               <select name="sslc_status" class="multisteps-form__input form-control" value="<?php print @$ed[1]['status']; ?>" >
                 <option value="Ongoing">Ongoing</option>
                 <option value="Completed">Completed</option>
              </select>              
                  </div>

                  </div>
                  <div class="form-row mt-5 d-flex justify-content-between">
                    <div class="col-12 col-sm-6 col-lg-5">
                    <input type="text" name="sslc_school"  class="multisteps-form__input form-control" value="<?php print @$ed[1]['schoolname']; ?>" placeholder="School">
                  
                  </div>
                    <div class="col-12 col-sm-6 col-lg-5 mt-5 mt-sm-0">
                    <select name="sslc_board" class="multisteps-form__input form-control" value="<?php print @$ed[1]['boardname']; ?>" >
                  <option value="State Board">STATE BOARD</option>
                  <option value="CBSC">CBSC</option>
                  <option value="ICSC">ICSC</option>
               </select>                     </div>
                  </div>
                  <div class="form-row mt-5 d-flex justify-content-between">
                    <div class="col-12 col-sm-6 col-lg-5">
                    <input type="text" name="sslc_mark"  class="multisteps-form__input form-control" value="<?php print @$ed[1]['mark']; ?>" placeholder="Mark">
                    </div>
                    <div class="col-12 col-sm-6 col-lg-5 mt-5 mt-sm-0">
                      
                    <input type="text" name="sslc_yop"  class="multisteps-form__input form-control" value="<?php print @$ed[1]['yop']; ?>"placeholder="year of passing"> 
                      </div>
                  </div>
                  <h3 class="multisteps-form__title" id="head">HSC</h3>
                  <div class="form-row mt-5 d-flex justify-content-between">
                    <div class="col-12 col-sm-6 col-lg-5">
                    <div class="label">Status</span></div>
               
               <select name="hsc_status" class="multisteps-form__input form-control " value="<?php print @$ed[2]['status']; ?>">
                 <option value="Ongoing">Ongoing</option>
                 <option value="Completed">Completed</option>
              </select>              
                  </div>
                  
                  <div class="col-12 col-sm-6 col-lg-5 mt-5 mt-sm-0">
                  <div><label for="g_hsc_group">&nbsp;</label></div>

                  <input type="text" name="hsc_group"  class="multisteps-form__input form-control" value="<?php print @$ed[2]['subgroup']; ?>" placeholder="GROUP/SUBJECT">
                    </div>

                  </div>
       

                  <div class="form-row mt-5 d-flex justify-content-between">
                    <div class="col-12 col-sm-6 col-lg-5">
                    <input type="text" name="hsc_school"  class="multisteps-form__input form-control" value="<?php print @$ed[2]['schoolname']; ?>" placeholder="School">       
                  </div>
                  <div class="col-12 col-sm-6 col-lg-5 mt-5 mt-sm-0">
                      
    
                <select name="hsc_board" class="multisteps-form__input form-control">
                 <option value="State Board">STATE BOARD</option>
                 <option value="CBSC">CBSC</option>
                 <option value="ICSC">ICSC</option>
              </select>
                    </div>

                  </div>
                  
                  <div class="form-row mt-5 d-flex justify-content-between">
                    <div class="col-12 col-sm-6 col-lg-5">
                    <input type="text" name="hsc_mark" class="multisteps-form__input form-control"value="<?php print @$ed[2]['mark']; ?>"  placeholder="Mark">
                    </div>
                    <div class="col-12 col-sm-6 col-lg-5 mt-5 mt-sm-0">
                      
                    <input type="text" name="hsc_yop"  class="multisteps-form__input form-control" value="<?php print @$ed[2]['yop']; ?>"  placeholder="year of passing"> 
                      </div>
                  </div>
                  <div class="row">
                    <div class="button-row d-flex mt-4 col-12">
                      <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>
                      <button class="btn btn-primary ml-auto js-btn-next" type="button" title="Next">Next</button>
                
                    </div>
                  </div>
                </div>
              </div>

            <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">

            <h4 id="headline" class="bg-danger text-white"><input type="checkbox" style="height:20px; width:20px; margin:20px" id="chbox" name="gradcheck">PLEASE CLICK HERE, IF YOU ARE APPLYING FOR UNGER GRADUATION</h4>
            <div id="gd">
                            <h3 class="multisteps-form__title">Graduation Details</h3>

                <div class="multisteps-form__content">
                <div class="form-row mt-5 d-flex justify-content-between">
                    <div class="col-12 col-sm-6 col-lg-5">
                        <div><label for="g_status">Status</label></div>
                    <select name="g_status" class="multisteps-form__input form-control" >
                                 <option value="Ongoing">Ongoing</option>
                                 <option value="Completed">Completed</option>
                              </select>                    </div>
                    <div class="col-12 col-sm-6 col-lg-5  mt-5 mt-sm-0">
                      
                    <div><label for="g_exampattern">&nbsp;</label></div>
                      <input type="text" name="g_exampattern" class="multisteps-form__input form-control" value="<?php print @$ed[3]['g_exampattern']; ?>" placeholder="exampattern">   
                     </div>
                  </div>
                  <div class="form-row mt-5 d-flex justify-content-between">
                    <div class="col-12 col-sm-6 col-lg-5">
                    <input type="text" name="g_college"  class="multisteps-form__input form-control" value="<?php print @$ed[3]['g_college']; ?>" placeholder="College">     
                                 </div>
                    <div class="col-12 col-sm-6 col-lg-5 mt-5 mt-sm-0">
                      
                    <input type="text" name="g_university"  class="multisteps-form__input form-control" value="<?php print @$ed[3]['g_university']; ?>"  placeholder="University">         
                               </div>
                  </div>
                  <div class="form-row mt-5 d-flex justify-content-between">
                    <div class="col-12 col-sm-6 col-lg-5">
                    <input type="text" name="g_branch"  class="multisteps-form__input form-control"  value="<?php print @$ed[3]['g_branch']; ?>" placeholder="branch">     
                                 </div>
                    <div class="col-12 col-sm-6 col-lg-5 mt-5 mt-sm-0">
                      
                    <input type="text" name="g_yop"  class="multisteps-form__input form-control" value="<?php print @$ed[3]['g_yop']; ?>"  placeholder="Year of passing">         
                               </div>
                  </div>
                  <div class="form-row mt-5 d-flex justify-content-between">
                    <div class="col-12 col-sm-6 col-lg-5">
                    <input type="text" name="g_mark1"  class="multisteps-form__input form-control" value="<?php print @$ed[3]['g_mark1']; ?>" placeholder="Percentage of Mark(PART 1)">     
                                 </div>
                    <div class="col-12 col-sm-6 col-lg-5 mt-5 mt-sm-0">
                      
                    <input type="text" name="g_mark2"  class="multisteps-form__input form-control" value="<?php print @$ed[3]['g_mark2']; ?>" placeholder="Percentage of Mark(PART 2)">     
                               </div>
                  </div>
                  <div class="form-row mt-5">
                    <div class="col-12 col-sm-6 col-lg-5">
                    <input type="text" name="g_mark3"  class="multisteps-form__input form-control" value="<?php print @$ed[3]['g_mark3']; ?>" placeholder="Percentage of Mark(PART 3)">     
                                 </div>
                  
                  </div>
                  </div>

                  <div class="button-row d-flex mt-4" id="btn">
                    <button class="btn btn-primary js-btn-prev" type="button" title="Prev">Prev</button>

                    <button type="submit" class="btn btn-success"  class="submitbtn" id="submitbtn" name="submitData">Submit</button>       
                    <button type="submit" class="btn btn-success" class="editbtn" id="submitchange" name="submitedit">Submit changes</button>       


                     </div>
                  
                </div>
              </div>
          
            </form>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<script>
  

// n.addEventListener("click",function()
// {

//   n.setAttribute("disabled","disabled");
// } ); 
  
  
  
  
  var cb=document.getElementById("chbox");

cb.addEventListener("click",function(){
  document.getElementById("gd").classList.toggle("visible");
  document.getElementById("btn").classList.add("visible");

});


</script>

<script  src="function.js"></script>


</body>
</html>