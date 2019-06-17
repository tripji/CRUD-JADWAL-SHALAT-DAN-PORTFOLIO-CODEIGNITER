<!DOCTYPE html>
<html lang="en">

<head>

  <?php include 'admin/template/head.php'; ?>

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-sm-6">

        <div class="card o-hidden border-0 shadow-lg my-5 ">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row justify-content-center">
              <div class="col-sm-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                  </div>
                  <form class="user" action="<?php echo base_url('login/aksi_login'); ?>" method="post">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Email Address">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                    </div>
                    <button type="submit" value="Login" class="btn btn-primary btn-user btn-block">Login</button>
                  </form>
                </div>
                <?php include 'admin/template/footer.php'; ?>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <?php include 'admin/template/ending.php'; ?>

</body>

</html>
