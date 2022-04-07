<?php include('./includes/config.php') ?>
<?php include('header.php') ?>
<?php include('sidebar.php') ?>
     <!-- Content Header (Page header) -->
     <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Accounts</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item active"><?php echo ucfirst($_REQUEST['user']) ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
        <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <?php
            $user_query = 'SELECT * FROM accounts';
            $user_result = mysqli_query($db_conn, $user_query);
            // $users = mysqli_fetch_array($user_result);
            while($users = mysqli_fetch_object($user_result)){
              echo $users->email;
              echo "<br>";
            }

            
          ?>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php include('footer.php') ?>