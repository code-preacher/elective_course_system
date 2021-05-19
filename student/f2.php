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
            <li class="breadcrumb-item active">100L Second Semester</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

<?php
if(isset($_POST['submit'])){
// $crud->insertF1($_POST);

  $check=$crud->compareF2($_POST,$_SESSION['id']);

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
            <h3 class="card-title">100L Second Semester Recommended Electives: </h3>
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
            <h3 class="card-title">100L Second Semester Recommended Electives: </h3>
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
            <h3 class="card-title">100L Second Semester: </h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" action="#" method="post">
            <div class="card-body">
              <div class="row">

                <div class="col-md-3">
                 <div class="form-group">

                  <label class="control-label">
                    <input type="checkbox" class="" name="c1" value="1" >Basic Computer Science(CMP122) </label>
                </div>
              </div>

                <div class="col-md-3">
                 <div class="form-group">

                  <label class="control-label">
                    <input type="checkbox" class="" name="c2" value="1" >Calculus(MTH122) </label>
                </div>
              </div>


              <div class="col-md-3">
                 <div class="form-group">

                  <label class="control-label">
                    <input type="checkbox" class="" name="c3" value="1" >Applied Mathematics(MTH132) </label>
                </div>
              </div>

              <div class="col-md-3">
                 <div class="form-group">

                  <label class="control-label">
                    <input type="checkbox" class="" name="c4" value="1" >Probability 1(STA112) </label>
                </div>
              </div>

              <div class="col-md-3">
                 <div class="form-group">

                  <label class="control-label">
                    <input type="checkbox" class="" name="c5" value="1" >Electricity amd Magnesim(PHY142) </label>
                </div>
              </div>

              <div class="col-md-3">
                 <div class="form-group">

                  <label class="control-label">
                    <input type="checkbox" class="" name="c6" value="1" >Philosophy and Haman Existence(GST112) </label>
                </div>
              </div>

              <div class="col-md-3">
                 <div class="form-group">

                  <label class="control-label">
                    <input type="checkbox" class="" name="c7" value="1" >Use of Library, Study skills and ICT(GST114) </label>
                </div>
              </div>

              <div class="col-md-3">
                 <div class="form-group">

                  <label class="control-label">
                    <input type="checkbox" class="" name="c8" value="1" >Communication in English II(GST116) </label>
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