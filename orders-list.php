<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title>Order List</title>
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
        <a class="nav-link" data-bs-target="#orders-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Đơn hàng</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="orders-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
          <li>
            <a href="orders-list.php" class="active">
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
          <li class="breadcrumb-item active">Danh sách đơn hàng</li>
        </ol>
      </nav>
    </div>


    <section class="section">
      <!-- <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body pt-4 d-flex gap-2">
              <div class="col-sm-6 col-lg-3">
                <div class="d-flex justify-content-between align-items-start card-widget-1 border-end pb-3 pb-sm-0">
                  <div>
                    <h3 class="mb-2 fw-bolder">56</h3>
                    <p class="mb-0 text-secondary fs-6">Pending Payment</p>
                  </div>
                  <div class="avatar me-sm-4">
                    <span class="avatar-initial rounded bg-label-secondary">
                      <i class="bi bi-calendar-month"></i>
                    </span>
                  </div>
                </div>
                <hr class="d-none d-sm-block d-lg-none me-4" />
              </div>
              <div class="col-sm-6 col-lg-3">
                <div class="d-flex justify-content-between align-items-start card-widget-1 border-end pb-3 pb-sm-0">
                  <div>
                    <h3 class="mb-2 fw-bolder">56</h3>
                    <p class="mb-0 text-secondary fs-6">Pending Payment</p>
                  </div>
                  <div class="avatar me-sm-4">
                    <span class="avatar-initial rounded bg-label-secondary">
                      <i class="bi bi-calendar-month"></i>
                    </span>
                  </div>
                </div>
                <hr class="d-none d-sm-block d-lg-none me-4" />
              </div>
              <div class="col-sm-6 col-lg-3">
                <div class="d-flex justify-content-between align-items-start card-widget-1 border-end pb-3 pb-sm-0">
                  <div>
                    <h3 class="mb-2 fw-bolder">56</h3>
                    <p class="mb-0 text-secondary fs-6">Pending Payment</p>
                  </div>
                  <div class="avatar me-sm-4">
                    <span class="avatar-initial rounded bg-label-secondary">
                      <i class="bi bi-calendar-month"></i>
                    </span>
                  </div>
                </div>
                <hr class="d-none d-sm-block d-lg-none me-4" />
              </div>
              <div class="col-sm-6 col-lg-3">
                <div class="d-flex justify-content-between align-items-start pb-3 pb-sm-0">
                  <div>
                    <h3 class="mb-2 fw-bolder">56</h3>
                    <p class="mb-0 text-secondary fs-6">Pending Payment</p>
                  </div>
                  <div class="avatar me-sm-4">
                    <span class="avatar-initial rounded bg-label-secondary">
                      <i class="bi bi-calendar-month"></i>
                    </span>
                  </div>
                </div>
                <hr class="d-none d-sm-block d-lg-none me-4" />
              </div>
            </div>
          </div>
        </div>
      </div> -->
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title d-flex align-items-center justify-content-between">
                Lọc
              </h5>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>Mã</th>
                    <th>Ngày đặt</th>
                    <th>Khách hàng</th>
                    <th>Thanh toán</th>
                    <th>Trạng thái</th>
                    <th>Phương thức</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <a href="orders-detail.php">
                        <span>#6979</span>
                      </a>
                    </td>
                    <td>
                      <span class="text-nowrap text-secondary">Apr 15, 2023, 10:21</span>
                    </td>
                    <td>
                      <div class="d-flex justify-content-start align-items-center">
                        <div class="avatar-wrapper me-3">
                          <div class="avatar avatar-sm">
                            <img src="./assets/img/messages-1.jpg" alt="Avatar" class="rounded-circle" />
                          </div>
                        </div>
                        <div class="d-flex flex-column">
                          <a href="pages-profile-user.php" class="text-truncate">
                            <span class="text-heading fw-medium">Cristine Easom</span>
                          </a>
                          <small class="text-truncate">ceasomw@theguardian.com</small>
                        </div>
                      </div>
                    </td>
                    <td>
                      <h6 class="mb-0 fw-bolder text-warning">
                        <i class="bi bi-circle-fill me-2"></i>Pending
                      </h6>
                    </td>
                    <td>
                      <span class="badge rounded-pill bg-label-danger text-capitalized">
                        Inactive
                      </span>
                    </td>
                    <td>
                        <div class="d-flex align-items-center text-nowrap text-secondary">
                          <img
                            src="./assets/img/momo.png"
                            alt="mastercard"
                            class="me-2"
                            width="32"
                          />
                          <span><i class="bi bi-three-dots"></i>2356</span>
                        </div>
                      </td>
                    <td>
                      <div class="d-flex align-items-sm-center justify-content-sm-center">
                        <button class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="bi bi-three-dots-vertical me-2"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end m-0">
                          <a href="javascript:0;" class="dropdown-item">View</a>
                          <a href="javascript:0;" class="dropdown-item">Suspend</a>
                        </div>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>

            </div>
          </div>
        </div>
      </div>
    </section>
  </main>



  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasEcommerceCategoryList" aria-labelledby="offcanvasEcommerceCategoryListLabel" aria-modal="true" role="dialog">
    <!-- Offcanvas Header -->
    <div class="offcanvas-header py-4">
      <h5 id="offcanvasEcommerceCategoryListLabel" class="offcanvas-title">
        Add Category
      </h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <!-- Offcanvas Body -->
    <div class="offcanvas-body border-top">
      <form class="pt-0 fv-plugins-bootstrap5 fv-plugins-framework" id="eCommerceCategoryListForm" onsubmit="return false" novalidate="novalidate" data-select2-id="eCommerceCategoryListForm">
        <!-- Title -->

        <div class="form-floating mb-4 fv-plugins-icon-container">
          <input type="text" class="form-control" id="ecommerce-category-title" placeholder="Enter category title" name="categoryTitle" aria-label="category title" />
          <label for="ecommerce-category-title">Title</label>
          <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
        </div>

        <!-- Slug -->
        <div class="form-floating mb-4 fv-plugins-icon-container">
          <input type="text" id="ecommerce-category-slug" class="form-control" placeholder="Enter slug" aria-label="slug" name="slug" />
          <label for="ecommerce-category-slug">Description</label>
          <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
        </div>

        <div class="mb-4">
          <label for="formFile" class="form-label">Attachment</label>
          <input class="form-control" type="file" id="formFile" />
        </div>

        <div class="mb-4">
          <textarea id="default">Enter your description</textarea>
        </div>

        <div class="mb-4">
          <select class="form-select" aria-label="Default select example">
            <option selected>Select Category status</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
        </div>
        <!-- Submit and reset -->
        <div class="mb-3">
          <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit waves-effect waves-light">
            Add
          </button>
          <button type="reset" class="btn btn-outline-danger waves-effect" data-bs-dismiss="offcanvas">
            Discard
          </button>
        </div>
        <input type="hidden" />
      </form>
    </div>
  </div>

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
    const showListOrders = () => {
      $.ajax({
        url: "http://localhost:3000/server/order.php",
        type: "POST",
        data: 'action=read',
        success: function(response) {
          console.log(response);
          const customers = JSON.parse(response);
          $('.datatable').DataTable({
            searching: true,
            paging: true,
            data: customers,
            columns: [{
                data: 'null',
                render: function(data, type, row) {
                  console.log(row);
                  return `
                      <a href="orders-detail.php?id=${row.id}">
                        <span>#${row.id}</span>
                      </a>
                  `
                }
              },
              {
                data: null,
                render: function(data, type, row) {
                  return `
                      <span class="text-nowrap text-secondary">${row.created_at}</span>
                  `
                }
              },
              {
                data: null,
                render: function(data, type, row) {
                  let bg = ['bg-label-info', 'bg-label-primary', 'bg-label-secondary', 'bg-label-danger', 'bg-label-warning', 'bg-label-success']
                  let index = row.id % bg.length
                  return `
                      <div class="d-flex justify-content-start align-items-center">
                        <div class="avatar-wrapper me-2 ">
                          <div class="avatar avatar-sm">
                            <div class="w-100 h-100 rounded-circle d-flex align-items-center justify-content-center fs-7 ${bg[index]}">
                              ${row.firstname.charAt(0) + row.lastname.charAt(0)}
                            </div>
                          </div>
                        </div>
                        <div class="d-flex flex-column">
                          <a class="text-truncate">
                            <span class="text-heading fw-medium">${row.firstname + ' ' + row.lastname}</span>
                          </a>
                          <small class="text-truncate">${row.phone}</small>
                        </div>
                      </div>
                  `
                }
              },
              {
                data: null,
                render: function(data, type, row) {
                  let text = ''
                  let html = ''
                  if (row.payment_status == 'paid') {
                    text = 'text-success'
                    html = 'Đã thanh toán'
                  }else {
                    text = 'text-warning'
                    html = 'Đang chờ'
                  }
                  return `
                      <h6 class="mb-0 fw-bolder ${text}">
                        <i class="bi bi-circle-fill me-2"></i>${html}
                      </h6>
                  `
                }
              },
              {
                data: null,
                render: function(data, type, row) {
                  let label = ''
                  let text = ''
                  if (row.status == 'pending') {
                    label = 'bg-label-warning'
                    text = 'Đang chờ'
                  }
                  if (row.status == 'processing') {
                    label = 'bg-label-info'
                    text = 'Đang xử lý'
                  }
                  if (row.status == 'shipped') {
                    label = 'bg-label-primary'
                    text = 'Đã vận chuyển'
                  }
                  if (row.status == 'delivered') {
                    label = 'bg-label-success'
                    text = 'Đã nhận hàng'
                  }
                  if (row.status == 'cancelled') {
                    label = 'bg-label-danger'
                    text = 'Đã hủy đơn'
                  }
                  return `
                      <span class="badge rounded-pill ${label} text-capitalized">
                        ${text}
                      </span>
                  `
                }
              },
              {
                data: null,
                render: function(data, type, row) {
                  let img = data.payment_method == 'cod' ? './assets/img/cod.png' : './assets/img/onlinebanking.png'
                    return `
                        <div class="d-flex justify-content-center align-items-center text-nowrap text-secondary">
                          <img
                            src=${img}
                            alt="mastercard"
                            class="me-2"
                            width="32"
                          />
                        </div>
                    `
                }
              },
              {
                data: null,
                render: function(data, type, row) {
                  return `
                      <div class="d-flex align-items-sm-center ">
                        <button onclick="handleDelete(${row.id})" class="btn btn-sm btn-icon">
                          <i class="bi bi-trash me-2"></i>
                        </button>
                      </div>
                  `
                }
              }
            ],
          })
        }
      });
    }

    const handleDelete = (id) => {
      $.ajax({
        url: "http://localhost:3000/server/order.php",
        type: "POST",
        data: `action=delete&id=${id}`,
        success: function(response) {
          console.log(response);
          const {status, message} = JSON.parse(response);
          if(status) {
            window.location.reload();
          }else {
            alert(message)
          }
        }
      });
    }
    showListOrders();

  </script>
</body>

</html>