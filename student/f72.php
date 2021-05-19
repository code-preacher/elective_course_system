<?php
ob_start();
require_once '../library/lib.php';
require_once '../classes/crud.php';

$lib=new Lib;
$crud=new Crud;

$lib->check_login2();
?>
<?php
if(isset($_POST['submit'])){
// $crud->insertF1($_POST);
}

?>

<?php
include 'inc/header.php';
include 'inc/sidebar.php';
?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2 bg-dark">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark"></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">400L First Semester</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

<?php
$check=$crud->checkReg($_SESSION['id'],'f7');

if($check){ 

?>
<!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-md-12">
         <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">400L First Semester Course Registration: </h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" action="#" method="post">
            <div class="card-body">
              <div class="row">

                <div class="col-md-3">
                 <div class="form-group">

                  <label class="control-label">SIWES II(CMP401) </label>
                </div>
              </div>

                <div class="col-md-3">
                 <div class="form-group">

                  <label class="control-label">Software Engineering I  (CMP421) </label>
                </div>
              </div>


              <div class="col-md-3">
                 <div class="form-group">

                  <label class="control-label">Organization of Programming Languages(CMP431) </label>
                </div>
              </div>

              <div class="col-md-3">
                 <div class="form-group">

                  <label class="control-label">Data Communication and Network(CMP451) </label>
                </div>
              </div>

              <div class="col-md-3">
                 <div class="form-group">

                  <label class="control-label">Human Computer Interface(CMP461) </label>
                </div>
              </div>

              <div class="col-md-3">
                 <div class="form-group">

                  <label class="control-label">Research Methods(MSC401) </label>
                </div>
              </div>



            </div>

          </div>
          <!-- /.card-body -->
        </form>
      </div>
      <!-- /.card -->

    </div>
    <!-- /.row -->
    <!-- Main row -->
  </div>
</div>
<!-- /.card -->
</section>

<section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-md-12">
         <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Prefered Elective: </h3>
          </div>
          <!-- /.card-header -->
     
            <div class="card-body">
              <div class="row">

                <div class="col-md-6">
                 <div class="form-group">

                  <label class="control-label"> Assembly Language Programming (CMP441) *Most Prefered </label>
                </div>
              </div>

              <div class="col-md-6">
                 <div class="form-group">

                  <label class="control-label"> Compiler Construction II (CMP411) *Most Prefered </label>
                </div>
              </div>


      </div>
      <!-- /.card -->

    </div>
    <!-- /.row -->
    <!-- Main row -->
  </div>
</div>
<!-- /.card -->
</section>


  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-md-12">
         <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Other Electives: </h3>
          </div>
          <!-- /.card-header -->
     
            <div class="card-body">
              <div class="row">

                <div class="col-md-4">
                 <div class="form-group">

                  <label class="control-label"> Modelling and Simulation (CMP481) </label>
                </div>
              </div>

               <div class="col-md-4">
                 <div class="form-group">

                  <label class="control-label"> Queuing Theory (CMP491)</label>
                </div>
              </div>

               <div class="col-md-4">
                 <div class="form-group">

                  <label class="control-label"> Operations Research III (STA461) </label>
                </div>
              </div>


      </div>
      <!-- /.card -->

    </div>
    <!-- /.row -->
    <!-- Main row -->
  </div>
</div>
<!-- /.card -->
</section>


<?php
}
else{

?>
<!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-md-12">
         <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">400L First Semester Course Registration:</h3>
          </div>
          <!-- /.card-header -->
     
            <div class="card-body">
              <div class="row">

                <div class="col-md-12">
                 <div class="form-group">

                  <label class="control-label"> You have not yet registered your courses.... </label>
                </div>
              </div>


      </div>
      <!-- /.card -->

    </div>
    <!-- /.row -->
    <!-- Main row -->
  </div>
</div>
<!-- /.card -->
</section>


<?php
}


?>
  
<!-- right col -->
</div>
<!-- /.row (main row) -->
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<br/><br/>
<?php
include 'inc/footer.php';
?>