<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>LOGIN</title>
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


  <script src="assets/vendor/jquery/jquery-3.7.1.js"></script>
  <script src="./assets/js/auth.js"></script>
  
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
                    <h5 class="card-title text-center pb-0 fs-4">Đăng nhập tài khoản của bạn</h5>
                    <p class="text-center small">Đăng nhập bằng số điện thoại và mật khẩu</p>
                  </div>

                  <form method="post" class="row g-3 needs-validation" id="formLogin" novalidate>

                    <div class="col-12">
                      <label for="yourPhone" class="form-label">Số điện thoại</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="phone" class="form-control" id="yourPhone" required>
                        <div class="invalid-feedback">Nhập đúng định dạng số điện thoại.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Nhập mật khẩu của bạn</div>
                    </div>

                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Đăng nhập</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Bạn chưa có tài khoản? <a href="pages-register.php">Tạo một tài khoản</a></p>
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
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  
  <script src="assets/js/main.js"></script>
  <script>
    // $ tương ứng với document.querySelector
    // on nghĩa là lắng nghe sự kiện
    // submit: gửi lên server
    var userRole = checkAuth()
    console.log(userRole);
    $('#formLogin').on('submit', function(e) {
      e.preventDefault();

      // chuyển số điện thoại và mật khẩu thành dạng chuỗi phone=0987654321&password=1234
      var form = $(this).serialize()
      $.ajax({
        url: 'http://localhost:3000/server/auth.php',
        type: 'POST',  // có  2 định dạng gửi xuống database. POST: mã hóa dữ liệu để gửi xuống. GET: 
        data: `${form}&action=login`, // 
        success: (response) => {
          console.log(JSON.parse(response));
          let data = JSON.parse(response) // chuyển từ dạng chuỗi sang kí tự, mảng
          if (data.status) {
            if(!data.phone) {
              window.location.href = `./verify-phone.php?id=${data.id}`
            }else {
              window.location.href = `./index.php`
            }
          }else {
            alert(data.message)
          }
        }
      })
    })
  </script>
</body>

</html>