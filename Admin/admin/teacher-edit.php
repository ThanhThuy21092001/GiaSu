<?php session_start(); ?>
<?php include('header.php') ?>
<?php include('sidebar.php') ?>

<?php include("./includes/config.php");?>
     <!-- Content Header (Page header) -->
     <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 texxt-dark">Gia sư</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item active">Gia Sư</li>
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
              <div class="col-md-12 mt-4">
                  <div class="card">
                    <div class="card-header">
                        <h3>Chỉnh sửa và update thông tin gia sư
                            <a href="teacher.php" class="btn btn-danger float-end">Back</a>
                        </h3>
                    </div>
                    <div class="card-body">
                        <?php
                            if(isset($_GET['id'])){
                                $teacher_id =  $_GET['id'];
                                $query = "SELECT * FROM accounts WHERE id=:teacher_id";
                                $statement = $conn->prepare($query);
                                $data = [ ':teacher_id' => $teacher_id ];
                                $statement->execute($data);
                                $result = $statement->fetch(PDO::FETCH_OBJ);
                            }
                        ?>
                       <form action="code-add-teacher.php" method="POST">
                          <input type="text" name="teacher_id" value="<?=$result->id ?>">
                           <div class="mb-3">
                               <label>Type</label>
                               <input type="text" name = "type" class="form-control" value="<?= $result->type; ?>">
                           </div>
                           <div class="mb-3">
                               <label>email</label>
                               <input type="email" name = "email" class="form-control" value="<?= $result->email; ?>">
                           </div>
                           <div class="mb-3">
                               <label>password</label>
                               <input type="password" name = "password" class="form-control" value="<?= $result->password; ?>">
                           </div>
                           <div class="mb-3 text-center">
                               <button type="submit" name="update_teacher_btn" class="btn btn-primary ">Update Teacher</button>
                           </div>
                       </form> 
                    </div>
                  </div>
              </div>
          </div>
        <!-- /.row -->
          </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php include('footer.php') ?>