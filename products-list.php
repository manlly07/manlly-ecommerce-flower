<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title>Sản phẩm</title>
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
        <a class="nav-link" data-bs-target="#products-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Sản phẩm</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="products-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
          <li>
            <a href="products-list.php" class="active">
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
        <a class="nav-link collapsed" data-bs-target="#orders-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Đơn hàng</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="orders-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
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

    </ul>
  </aside>


  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Sản phẩm</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
          <li class="breadcrumb-item">Sản phẩm</li>
          <li class="breadcrumb-item active">Danh sách sản phẩm</li>
        </ol>
      </nav>
    </div>


    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Lọc</h5>

              <!-- Table with stripped rows -->
              <table class="table datatable table-responsive ">
                <thead>
                  <tr>
                    <th><b>S</b>ản phẩm</th>
                    <th>Tồn kho</th>
                    <!-- <th>Gía</th> -->
                    <th data-type="date" data-format="YYYY/DD/MM">
                      Ngày tạo
                    </th>
                    <th>Trạng thái</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <!-- <tr>
                    <td>
                      <div class="d-flex justify-content-start align-items-center product-name">
                        <div class="avatar-wrapper me-3">
                          <div class="avatar rounded-2 bg-label-secondary">
                            <img src="./assets/img/apple-touch-icon.png" alt="Product-55" class="rounded-2" />
                          </div>
                        </div>
                        <div class="d-flex flex-column">
                          <span class="text-nowrap text-heading fw-medium">Matsoft</span>
                          <small class="text-truncate d-none d-sm-block">Air Jordan is a line of basketball shoes produced
                            by Nike
                          </small>
                        </div>
                      </div>
                    </td>
                    <td>Laptop Gaming</td>
                    <td>Dell Inspiron</td>
                    <td>100</td>
                    <td>13.000.000</td>
                    <td>2009/29/11</td>
                    <td>
                      <span class="badge rounded-pill bg-label-danger text-capitalized">
                        Inactive
                      </span>
                    </td>
                    <td>
                      
                    </td>
                  </tr> -->
                </tbody>
              </table>
              <!-- End Table with stripped rows -->
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

  <script src="./assets/js/auth.js"></script>

  <script src="assets/js/main.js"></script>
  <script>


    const handleView = (id) => {
      $.ajax({
        url: 'http://localhost:3000/server/product.php',
        type: 'POST',
        data: `id=${id}&action=getbyid`,
        success: (response) => {
          let {
            status,
            message
          } = JSON.parse(response)
          console.log(status);
          console.log(message);
          if (status) {
            window.location.reload()
          } else {
            // $('.cerror').html(message);
          }
        }
      })
    }

    const handleDelete = (id) => {
      console.log('hehe');
      $.ajax({
        url: 'http://localhost:3000/server/product.php',
        type: 'POST',
        data: `id=${id}&action=delete`,
        success: (response) => {
          let {
            status,
            message
          } = JSON.parse(response)
          console.log(status);
          console.log(message);
          if (status) {
            window.location.reload()
          } else {
            // $('.cerror').html(message);
          }
        }
      })
    }

    const handleUpdate = (id, status) => {
      console.log('hehe');
      status = status == 0 ? 1 : 0
      $.ajax({
        url: 'http://localhost:3000/server/product.php',
        type: 'POST',
        data: `id=${id}&status=${status}&action=updateStatus`,
        success: (response) => {
          let {
            status,
            message
          } = JSON.parse(response)
          console.log(status);
          console.log(message);
          if (status) {
            window.location.reload()
          } else {
            // $('.cerror').html(message);
          }
        }
      })
    }

    const showProduct = () => {
      $.ajax({
        url: 'http://localhost:3000/server/product.php',
        type: 'POST',
        data: {
          role: 1,
          action: "read"
        },
        success: (response) => {
          console.log(JSON.parse(response));
          let products = JSON.parse(response)
          $('.datatable').DataTable({
            searching: true,
            paging: true,
            data: products,
            columns: [{
                data: 'null',
                render: function(data, type, row) {
                  return `
                      <div class="d-flex justify-content-start align-items-center product-name">
                        <div class="avatar-wrapper me-3">
                          <div class="avatar2 rounded-2 bg-label-secondary">
                            <img src="./server/${row.product_image}" alt="Product-55" class="rounded-2" />
                          </div>
                        </div>
                        <div class="d-flex flex-column">
                          <span class="text-nowrap text-heading fw-medium">${row.product_name}</span>
                          <small style="max-width: 370px;overflow-x: hidden;"  class="text-truncate d-none d-sm-block">${row.category_name}</small>
                        </div>
                      </div>
                  `
                }
              },
              {
                data: 'quantity',
                render: function(data, type, row) {
                  return `
                    <div class="px-4">
                      <div class="progress mb-1" style="height: 4px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 15%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <span class="fs-7">${row.total_quantity} trong kho</span>
                    </div>
                  `
                }
              },
              {
                data: 'created_at',
                render: function(data, type, row) {
                  return row.product_created_at
                }
              },
              {
                data: 'status',
                render: function(data, type, row) {
                  if (row.product_is_deleted == 1) {
                    return `
                        <span class="badge rounded-pill bg-label-danger text-capitalized">
                          Dừng bán
                        </span>
                    `
                  } else {
                    return `
                        <span class="badge rounded-pill bg-label-success text-capitalized">
                          Đang bán
                        </span>
                    `
                  }
                }
              },
              {
                data: null,
                render: function(data, type, row) {
                  console.log(row);
                  return `
                      <div class="d-flex align-items-sm-center justify-content-sm-center">
                        <a href="./edit-product.php?id=${row.product_id}" class="btn btn-sm btn-icon">
                          <i class="bi bi-pencil"></i>
                        </a>
                        <button onclick="handleUpdate(${row.product_id}, ${row.product_is_deleted})" class="btn btn-sm btn-icon">
                          <i class="bi bi-trash3-fill me-2"></i>
                        </button>
                      </div>
                  `
                }
              }
            ],
          })
        }
      })
    }
    showProduct()
  </script>
</body>

</html>