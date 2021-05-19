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
if(isset($_POST['submit'])){
// $crud->insertF1($_POST);

  $check=$crud->compareF7($_POST,$_SESSION['id']);

if($check){ 
$result=$check['result'];

?>
<!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-md-12">
         <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">400L First Semester Recommended Electives: </h3>
          </div>
          <!-- /.card-header -->
     
            <div class="card-body">
              <div class="row">

                <div class="col-md-12">
                 <div class="form-group">

                  <label class="control-label"> <?=$check['result'];?> </label>
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
$result='No Result';
$advice='No Result'; 

?>
<!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-md-12">
         <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">400L First Semester Recommended Electives: </h3>
          </div>
          <!-- /.card-header -->
     
            <div class="card-body">
              <div class="row">

                <div class="col-md-12">
                 <div class="form-group">

                  <label class="control-label"> No Result </label>
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

}


?>
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-md-12">
         <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">400L First Semester: </h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" action="#" method="post">
            <div class="card-body">
              <div class="row">

                <div class="col-md-3">
                 <div class="form-group">

                  <label class="control-label">
                    <input type="checkbox" class="" name="c1" value="1" >SIWES II(CMP401) </label>
                </div>
              </div>

                <div class="col-md-3">
                 <div class="form-group">

                  <label class="control-label">
                    <input type="checkbox" class="" name="c2" value="1" >Software Engineering I  (CMP421) </label>
                </div>
              </div>


              <div class="col-md-3">
                 <div class="form-group">

                  <label class="control-label">
                    <input type="checkbox" class="" name="c3" value="1" >Organization of Programming Languages(CMP431) </label>
                </div>
              </div>

              <div class="col-md-3">
                 <div class="form-group">

                  <label class="control-label">
                    <input type="checkbox" class="" name="c4" value="1" >Data Communication and Network(CMP451) </label>
                </div>
              </div>

              <div class="col-md-3">
                 <div class="form-group">

                  <label class="control-label">
                    <input type="checkbox" class="" name="c5" value="1" >Human Computer Interface(CMP461) </label>
                </div>
              </div>

              <div class="col-md-3">
                 <div class="form-group">

                  <label class="control-label">
                    <input type="checkbox" class="" name="c6" value="1" >Research Methods(MSC401) </label>
                </div>
              </div>



            </div>

          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary col-md-3" name="submit">Perform Recommendation</button>
            <button type="reset" class="btn btn-danger col-md-3">Clear</button>
          </div>
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