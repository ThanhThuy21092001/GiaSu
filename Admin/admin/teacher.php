<?php session_start() ?>
<?php include('header.php') ?>
<?php include('sidebar.php') ?>
<?php include('./includes/config.php') ?>
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
                  <?php if(isset($_SESSION['message'])): ?>
                          <h5 class="alert alert-sucess">
                            <?= $_SESSION['message']; ?>
                          </h5>
                  <?php
                      unset($_SESSION['message']);
                      endif; 
                  ?>

                  <div class="card">
                    <div class="card-header">
                      <a href="teacher-add.php" class="btn btn-primary float-end">Add</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-border table-striped" border="2">
                            <thead >
                                <tr >
                                    
                                    <th>id</th>
                                    <th>type</th>
                                    <th>email</th>
                                    <th>password</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php
                                $query = "SELECT * FROM accounts";
                                $statement = $conn->prepare($query);
                                $statement->execute();

                               
                                $result = $statement->fetchAll(PDO::FETCH_OBJ);
                                if($result)
                                {
                                    foreach($result as $row){
                                        ?>
                                          <tr>
                                            <td><?=$row->id; ?></td>
                                            <td><?=$row->type; ?></td>
                                            <td><?=$row->email; ?></td>
                                            <td><?=$row->password; ?></td>
                                              <td>
                                                <a href="teacher-edit.php?id=<?= $row->id; ?>" class="btn btn-primary">Edit</a>
                                              </td>
                                              <td>
                                                <form action="code-add-teacher.php" method="POST">
                                                  <button type="Submit" name="delete_teacher" value="<?=$row->id; ?>" class="btn btn-danger">Delete</button>

                                                </form>
                                              </td>
                                          </tr>

                                        <?php
                                    }
                                }
                                else{
                                  ?>
                                    <tr>
                                      <td colspan="4">No Record Found</td>
                                    </tr>
                                  <?php
                                }
                              ?>
                                <tr>
                                    <td>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
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