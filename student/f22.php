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
$check=$crud->checkReg($_SESSION['id'],'f2');

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
            <h3 class="card-title">100L Second Semester Course Registration: </h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" action="#" method="post">
            <div class="card-body">
              <div class="row">

                <div class="col-md-3">
                 <div class="form-group">

                  <label class="control-label">Basic Computer Science(CMP122) </label>
                </div>
              </div>

                <div class="col-md-3">
                 <div class="form-group">

                  <label class="control-label">Calculus(MTH122) </label>
                </div>
              </div>


              <div class="col-md-3">
                 <div class="form-group">

                  <label class="control-label">Applied Mathematics(MTH132) </label>
                </div>
              </div>

              <div class="col-md-3">
                 <div class="form-group">

                  <label class="control-label">Probability 1(STA112) </label>
                </div>
              </div>

              <div class="col-md-3">
                 <div class="form-group">

                  <label class="control-label">Electricity amd Magnesim(PHY142) </label>
                </div>
              </div>

              <div class="col-md-3">
                 <div class="form-group">

                  <label class="control-label">Philosophy and Haman Existence(GST112) </label>
                </div>
              </div>

              <div class="col-md-3">
                 <div class="form-group">

                  <label class="control-label">Use of Library, Study skills and ICT(GST114) </label>
                </div>
              </div>

              <div class="col-md-3">
                 <div class="form-group">

                  <label class="control-label">Communication in English II(GST116) </label>
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

                <div class="col-md-12">
                 <div class="form-group">

                  <label class="control-label"> Optics, Sound and Waves (PHY132) *Most Prefered </label>
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

                <div class="col-md-6">
                 <div class="form-group">

                  <label class="control-label"> Basic Physical Chemistry (CHM122)</label>
                </div>
              </div>

              <div class="col-md-6">
                 <div class="form-group">

                  <label class="control-label"> Biology for Physical Sciences (BIO104)</label>
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
            <h3 class="card-title">100L Second Semester Course Registration: </h3>
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