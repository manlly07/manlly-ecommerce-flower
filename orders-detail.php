<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title>Chi tiết đơn hàng</title>
  <meta content="" name="description" />
  <meta content="" name="keywords" />


  <link href="assets/img/favicon.png" rel="icon" />
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />


  <link href="https://fonts.gstatic.com" rel="preconnect" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />


  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet" />
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet" />
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet" />


  <link href="assets/css/style.css" rel="stylesheet" />


</head>

<body>

  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="" />
        <span class="d-none d-lg-block">Flodia</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
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

          <li class="nav-item dropdown pe-3">
            <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
              <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle profile-image" />
              <span class="d-none d-md-block dropdown-toggle ps-2 profile-name text-truncate" style="width: 120px;">K. Anderson</span> </a>

            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
              <li class="dropdown-header">
                <h6 style="width: 250px;" class="text-truncate profile-name">Kevin Anderson</h6>
                <span>Web Designer</span>
              </li>
              <li>
                <hr class="dropdown-divider" />
              </li>

              <li>
                <a class="dropdown-item d-flex align-items-center" href="users-profile.php">
                  <i class="bi bi-person"></i>
                  <span>My Profile</span>
                </a>
              </li>
              <li>
                <hr class="dropdown-divider" />
              </li>

              <li>
                <hr class="dropdown-divider" />
              </li>

              
              <li>
                <hr class="dropdown-divider" />
              </li>

              <li>
                <a class="dropdown-item d-flex align-items-center sign-out" href="#">
                  <i class="bi bi-box-arrow-right"></i>
                  <span>Sign Out</span>
                </a>
              </li>
            </ul>

          </li>

        </ul>
      </nav>

  </header>



  <aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-item">
        <a class="nav-link collapsed" href="dashboard.php">
          <i class="bi bi-grid"></i>
          <span>Trang chủ</span>
        </a>
      </li>


      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#products-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Sản phẩm</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="products-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="products-list.php">
              <i class="bi bi-circle"></i><span>Danh sách sản phẩm</span>
            </a>
          </li>
          <li>
            <a href="add-product.php">
              <i class="bi bi-circle"></i><span>Thêm sản phẩm</span>
            </a>
          </li>
          <li>
            <a href="category-list.php">
              <i class="bi bi-circle"></i><span>Danh sách phân loại</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-bs-target="#order-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Đơn hàng</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="order-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
          <li>
            <a href="orders-list.php">
              <i class="bi bi-circle"></i><span>Danh sách đơn hàng</span>
            </a>
          </li>
        </ul>
      </li>

      <!-- <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#customer-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Khách hàng</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="customer-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="all-customer.php">
              <i class="bi bi-circle"></i><span>Danh sách khách hàng</span>
            </a>
          </li>
        </ul>
      </li> -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="manage-review.php">
          <i class="bi bi-grid"></i>
          <span>Quản lý đánh giá</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#blog-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Blog</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="blog-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="blog-list.php">
              <i class="bi bi-circle"></i><span>Danh sách blog</span>
            </a>
          </li>
          <li>
            <a href="add-blog.php">
              <i class="bi bi-circle"></i><span>Thêm blog</span>
            </a>
          </li>
        </ul>
      </li>
    </ul>
  </aside>


  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Đơn hàng</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
          <li class="breadcrumb-item">Đơn hàng</li>
          <li class="breadcrumb-item active">Chi tiết đơn hàng</li>
        </ol>
      </nav>
    </div>


    <section class="section pt-4">
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body pt-4 d-flex justify-content-between">
                  <div class="d-flex flex-column justify-content-center">
                    <div class="d-flex">
                      <h5 class="mb-0">Đơn hàng #<span class="orderId">32543</span></h5>
                      <span class="badge mx-2 rounded-pill statusOrder">Paid</span>
                    </div>
                    <p class="mt-1 mb-0 text-secondary"><span id="orderDate"></span></p>
                  </div>
                  <div class="d-flex align-content-center flex-wrap gap-2">
                    <button class="btn btn-outline-danger fw-medium dropdown-toggle btn-update" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                      Cập nhật trạng thái
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                          <li><a class="dropdown-item" onclick="handleUpdateStatus('processing')" href="#">Đang xử lý</a></li>
                        <li><a class="dropdown-item" onclick="handleUpdateStatus('pending')" href="#">Đang chờ gửi đơn</a></li>
                        <li><a class="dropdown-item" onclick="handleUpdateStatus('shipped')" href="#">Đang gửi</a></li>
                        <li><a class="dropdown-item" onclick="handleUpdateStatus('delivered')" href="#">Đã giao hàng</a></li>
                        <li><a class="dropdown-item" onclick="handleUpdateStatus('cancelled')" href="#">Hủy đơn hàng</a></li>
                      </ul>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-lg-8">
              <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                  <h5 class="card-title m-0">Đơn hàng chi tiết</h5>
                  <!-- <h6 class="m-0"><a href=" javascript:void(0)">Edit</a></h6> -->
                </div>
                <div class="card-body">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col" colspan="2">Products</th>
                        <th scope="col">Price</th>
                        <th scope="col">Qty</th>
                        <th scope="col">Total</th>
                      </tr>
                    </thead>
                    <tbody class="tableProduct">   
                      
                    </tbody>
                  </table>
                  <div class="d-flex justify-content-end align-items-center m-3 p-1">
                    <div class="col-4">
                      <div class="d-flex justify-content-between mb-2">
                        <span class="w-px-100">Tạm tính:</span>
                        <h6 class="mb-0 fw-medium total">$5000.25</h6>
                      </div>
                      <div class="d-flex justify-content-between mb-2">
                        <span class="w-px-100">Giảm giá:</span>
                        <h6 class="mb-0 fw-medium">00.00<sup>đ</sup></h6>
                      </div>
                      <div class="d-flex justify-content-between mb-2">
                        <span class="w-px-100">Thuế:</span>
                        <h6 class="mb-0 fw-medium">00.00<sup>đ</sup></h6>
                      </div>
                      <div class="d-flex justify-content-between">
                        <h6 class="w-px-100 mb-0 fw-medium">Tổng:</h6>
                        <h6 class="mb-0 fw-medium total">5100.25</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-4">
              <div class="card mb-4">
                <div class="card-body">
                  <h6 class="card-title mb-4">Thông tin chi tiết</h6>
                  <div class="d-flex justify-content-start align-items-center mb-4">
                    <div class="avatar me-2 pe-1">
                      <img src="./assets/img/news-2.jpg" alt="Avatar" class="rounded-circle">
                    </div>
                    <div class="d-flex flex-column">
                      <a href="#">
                        <h6 class="mb-1 fw-bolder text-black userName">Shamus Tuttle</h6>
                      </a>
                      <!-- <small class="text-secondary">Mã khách hàng: #<span class="userId"></span></small> -->
                    </div>
                  </div>
                  <div class="d-flex justify-content-start align-items-center mb-4">
                    <span class="avatar rounded-circle bg-label-success me-2 d-flex align-items-center justify-content-center"><i class="bi bi-cart-plus"></i></span>
                    <h6 class="text-nowrap mb-0 fw-medium"><span class="totalOrder"></span> Đơn hàng</h6>
                  </div>
                  <div class="d-flex justify-content-between align-items-center">
                    <h6 class="mb-2 fw-medium">Contact info</h6>  
                  </div>
                  <!-- <p class=" mb-1 text-secondary">Email: <span class="userGmail"></span></p> -->
                  <p class=" mb-0 text-secondary">Số diện thoại: <span class="userPhone"></span></p>
                  <div class="d-flex justify-content-between align-items-center mt-3">
                    <h6 class="mb-2 fw-medium">Địa chỉ đặt hàng</h6>
                  </div>
                  <p class="mb-0 province"></p>
                  <p class="mb-0 district"></p>
                  <p class="mb-0 address"></p>
                </div>
              </div>
            </div>
          </div>
    
        </section>

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
  <script src="./assets/js/auth.js"></script>

  <script>
    const urlParams = new URLSearchParams(window.location.search);
    const id = urlParams.get('id');
    if(!id) {
      window.location.href = 'page-error.php'
    }
    const showOrderDetail = () => {
      $.ajax({
        url: "http://localhost:3000/server/order.php",
        type: "POST",
        data: {
          action: "getOrderById",
          id: id,
        },
        success: function(response) {
          const data = JSON.parse(response);
          console.log(data);
          $('.orderId').html(data.id);
          $('#orderDate').html(data.order_date);
          let label = ''
          let text = ''
          if (data.status == 'pending') {
            label = 'bg-label-warning'
            text = 'Đang chờ'
          }
          if (data.status == 'processing') {
            label = 'bg-label-info'
            text = 'Đang xử lý'
          }
          if (data.status == 'shipped') {
            label = 'bg-label-primary'
            text = 'Đã vận chuyển'
          }
          if (data.status == 'delivered') {
            label = 'bg-label-success'
            text = 'Đã nhận hàng'
            $('.btn-update').remove()
          }
          if (data.status == 'cancelled') {
            label = 'bg-label-danger'
            text = 'Đã hủy đơn'
            $('.btn-update').remove()
          }
          $('.statusOrder').removeClass(function(index, className) {
            console.log(className);
            return (className.match(/\bbg-label\S+/g) || []).join(' ');
          }).addClass(label).html(text);
          let html ="";
          console.log(data.details);
          $('.tableProduct').empty();
          let total = 0
          data.details.forEach(function(item,index) {
            total += item.price * item.quantity
            html += `<tr>
                            <th scope="row">${index + 1}</th>
                            <td colspan="2">
                                <div class="d-flex justify-content-start align-items-center product-name"><div class="avatar-wrapper me-3"><div class="avatar rounded-2 bg-label-secondary"><img src="./server/${item.image}" alt="product-Wooden Chair" class="rounded-2"></div></div><div class="d-flex flex-column"><span class="text-nowrap text-heading fw-medium">${item.name}</span><small class="text-truncate d-none d-sm-block">Material: Wooden</small></div></div>
                            </td>
                            <td>${convertToCurrency(item.price)}</td>
                            <td>${item.quantity}</td>
                            <td>${convertToCurrency(item.price * item.quantity)}</td>
                          </tr>
                          `;
          })
          $('.tableProduct').append(html);
          $('.userName').html(`${data.firstname} ${data.lastname}`);
          // $('.userId').html(data.user_id);
          $('.totalOrder').html(data.details.length);
          // $('.userGmail').html(data.email);
          $('.userPhone').html(data.phone);
          $('.province').html(`Thành Phố: ${data.province}`)
          $('.district').html(`Quận: ${data.district}`)
          $('.address').html(`Địa chỉ: ${data.address}`);
          $('.total').html(convertToCurrency(total));
        }
      });
    }
    const handleUpdateStatus = (status) => {
      console.log(status);
      $.ajax({
        url: "http://localhost:3000/server/order.php",
        type: "POST",
        data: {
          action: "updateStatus",
          id: id,
          status: status
        },
        success: function(response) {
          console.log(response);
          let {status, message} = JSON.parse(response)
          if(status) {
            showAlert('success', message)
            showOrderDetail()
          }else {
            showAlert('danger', message)
          }
        }
      })
    }
    showOrderDetail();
  </script>

</body>
</html>