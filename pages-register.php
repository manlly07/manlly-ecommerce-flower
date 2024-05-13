<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Đăng ký</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Tạo một tài khoản</h5>
                    <p class="text-center small">Nhập thông tin chi tiết để tạo tài khoản</p>
                  </div>

                  <form class="row g-3 needs-validation" id="formRegister" novalidate>
                    <div class="col-12">
                      <label for="yourFirstName" class="form-label">Họ</label>
                      <input type="text" name="firstname" class="form-control" id="yourFirstName" required>
                      <div class="invalid-feedback">Please, enter your first name!</div>
                    </div>
                    <div class="col-12">
                      <label for="yourLastName" class="form-label">Tên</label>
                      <input type="text" name="lastname" class="form-control" id="yourLastName" required>
                      <div class="invalid-feedback">Please, enter your last name!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourPhone" class="form-label">Số điện thoại</label>
                      <input type="text" name="phone" class="form-control" id="yourPhone" required>
                      <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourConfirmPassword" class="form-label">Xác nhận mật khẩu</label>
                      <input type="password" name="confirmPassword" class="form-control" id="yourConfirmPassword" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="col-12">
                      <label for="yourAddress" class="form-label">Địa chỉ</label>
                      <input type="text" name="address" class="form-control" id="yourAddress" required>
                      <div class="invalid-feedback">Please enter your address!</div>
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input"
                        $.ajax({
                          url: 
                        }) type="checkbox" value="" id="acceptTerms" required>
                        <label class="form-check-label" for="acceptTerms">Tôi đồng ý với mọi <a href="#">điều khoản và dịch vụ</a></label>
                        <div class="invalid-feedback">You must agree before submitting.</div>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Đăng ký</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Bạn đã có tài khoản? <a href="pages-login.php">Đăng nhập</a></p>
                    </div>
                  </form>

                </div>
              </div>

              <div class="credits">
                Designed by <a href="#">Thảo</a>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/jquery/jquery-3.7.1.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>

  
  <script src="assets/js/main.js"></script>
  <script>
    $('#formRegister').on('submit', function(e) {
      e.preventDefault();
      var form = $(this).serialize()
      console.log(form);
      $.ajax({
        url: 'http://localhost:3000/server/auth.php',
        type: 'POST',
        data: `${form}&action=register`,
        success: (response) => {
          console.log(JSON.parse(response));
          let data = JSON.parse(response)
          if (data.status) {
            window.location.href = `./verify-phone.php?id=${data.id}`
          }
        }
      })
    })
  </script>
</body>

</html>