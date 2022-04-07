<?php include('header.php') ?>
<?php include('sidebar.php') ?>
<?php
  session_start();
?>
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
                        <h3>Thêm gia sư
                            <a href="teacher.php" class="btn btn-danger float-end">Back</a>
                        </h3>
                    </div>
                    <div class="card-body">
                       <form action="code-add-teacher.php" method="POST">
                           <!-- <div class="mb-3">
                               <label>ID Gia sư</label>
                               <input type="text" name = "IDGiaSu" class="form-control">
                           </div>
                           <div class="mb-3">
                               <label>Họ tên Gia sư</label>
                               <input type="text" name = "fullname" class="form-control">
                           </div>
                           <div class="mb-3">
                           <label>Chon gioi tinh</label><br>
                                <input type="radio" name="gender" value="male" id="male">
                                <label for="male">Nam</label>
                                <input type="radio" name="gender" value="female" id="female" >
                                <label for="female">Nu</label>
                           </div>
                           <div class="mb-3">
                               <label>Số điện thoại</label>
                               <input type="text" name = "phone" class="form-control">
                           </div>
                           <div class="mb-3">
                               <label>Địa chỉ</label>
                               <input type="text" name = "address" class="form-control">
                           </div>
                           <div class="mb-3">
                               <label>Mật khẩu</label>
                               <input type="password" name = "password" class="form-control">
                           </div>
                           <div class="mb-3">
                                <label for="idmajors">ID chuyên ngành</label><br>
                                    <select name="idmajors" id="idmajors" class="form-control">
                                        <option value="1">200</option>
                                        <option value="2">201</option>
                                    </select>
                           </div>
                           <div class="mb-3">
                                <label for="namemajors">Tên chuyên ngành</label><br>
                                    <select name="namemajors" id="namemajors" class="form-control">
                                        <option value="1">Sư phạm Toán</option>
                                        <option value="2">Sư phạm Anh</option>
                                    </select>
                           </div>
                           <div class="mb-3">
                                <label for="idlevel">ID trình độ</label><br>
                                    <select name="idlevel" id="idlevel" class="form-control">
                                        <option value="1">1001</option>
                                        <option value="2">1002</option>
                                    </select>
                           </div>
                           <div class="mb-3">
                           <label for="namelevel">Tên trình độ</label><br>
                                    <select name="namelevel" id="namelevel" class="form-control">
                                        <option value="1">Sinh Viên</option>
                                        <option value="2">Giáo viên</option>
                                    </select>
                           </div> -->
                          
                           <div class="mb-3">
                               <label>Type</label>
                               <input type="text" name = "type" class="form-control">
                           </div>
                           <div class="mb-3">
                               <label>email</label>
                               <input type="email" name = "email" class="form-control">
                           </div>
                           <div class="mb-3">
                               <label>password</label>
                               <input type="password" name = "password" class="form-control">
                           </div>
                           <div class="mb-3 text-center">
                               <button type="submit" name="save_teacher_btn" class="btn btn-primary ">Save Teacher</button>
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