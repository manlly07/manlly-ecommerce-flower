<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link href="assets/img/favicon.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300;400;500;600;700&family=Poppins:ital,wght@0,300;0,600;0,700;1,400;1,500&display=swap"
      rel="stylesheet"
    />

    <link
      href="assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet" />
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet" />
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet" />

    <link href="assets/css/style.css" rel="stylesheet" />

    <title>Home</title>
  </head>

  <body>
    <header id="header" class="header fixed-top d-flex align-items-center">
      <div class="container-2xxl d-flex align-items-center">
        <div class="d-flex align-items-center justify-content-between">
          <a href="index.php" class="logo d-flex align-items-center">
            <img src="assets/img/logo.png" alt="" />
            <span class="d-none d-lg-block">Flodia</span>
          </a>
        </div>


        <div class="search-bar">
          <form class="search-form d-flex align-items-center" method="POST" action="#">
            <input type="text" name="query" placeholder="Search" title="Enter search keyword" />
            <button type="submit" title="Search">
              <i class="bi bi-search"></i>
            </button>
          </form>
        </div>


        <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">
          <li class="nav-item d-block d-lg-none">
            <a class="nav-link nav-icon search-bar-toggle" href="#">
              <i class="bi bi-search"></i>
            </a>
          </li>


          <li class="nav-item dropdown">
            <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
              <i class="bi bi-cart"></i>
              <span class="badge bg-primary badge-number total-cart">4</span> </a>

            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
              <li class="dropdown-header">
                Bạn có <span class="total-cart">4</span> sản phẩm trong giỏ hàng
                <a href="./cart.php"><span class="badge rounded-pill bg-primary p-2 ms-2">xem tất cả</span></a>
              </li>
            </ul>

          </li>

          <li class="nav-item d-block">
                        <a class="nav-link nav-icon" href="users-order-detail.php">
                            <i class="bi bi-bag-check"></i>
                        </a>
                    </li>

          <li class="nav-item d-block">
              <a class="nav-link nav-icon search-bar-toggle" href="#">
                <a class="btn btn-primary ms-3" href="pages-login.php">Đăng nhập</a>
              </a>
            </li>

        </ul>
      </nav>
      </div>
    </header>

    <main class="main bg-white">
      <div class="section container-2xxl">
        <div class="row">
            <div class="mt-4 mb-4">
                <div class="success" id="success">
                    <div class="card w-fit m-auto">
                        <div class="card-body text-center p-4">
                            <div class="card-title fw-bold text-secondary fs-4">
                                Cảm ơn! 🎉
                            </div>
                            <p class="fw-bold fs-4">Đơn hàng của bạn đã được đặt thành công</p>
                            <table class="table">
                                <tr>
                                    <td scope="row">Mã</td>
                                    <td class="fw-bold orderId">#1</td>
                                </tr>
                                <tr>
                                    <td scope="row">Ngày</td>
                                    <td class="fw-bold date">#1</td>
                                </tr>
                                <tr>
                                    <td scope="row">Tổng</td>
                                    <td class="fw-bold total">#1</td>
                                </tr>
                                <tr>
                                    <td scope="row">Vận chuyển</td>
                                    <td class="fw-bold method">#1</td>
                                </tr>
                            </table>

                            <a href="#" class="btn btn-dark rounded-pill px-4 btn-navigate">Lịch sử giao dịch</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </main>


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
    <!-- <script src="./assets/js/auth.js"></script> -->

    <script>
        var urlParams = new URLSearchParams(window.location.search);
        var orderId = urlParams.get('order_id');
        var date = urlParams.get('date');
        var total = urlParams.get('total');
        var method = urlParams.get('method');
        if (!orderId && !date && !total) {
          window.location.href = 'page-error.php';
        }
        $('.orderId').html(orderId)
        $('.date').html(date)
        $('.total').html(total)
        $('.method').html(method)
        $('.btn-navigate').attr('href', `users-order-detail.php?id=${orderId}`)
    </script>
  </body>
</html>
