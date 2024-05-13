<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title>Thương hiệu</title>
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
            <a href="branch-list.php" class="active">
              <i class="bi bi-circle"></i><span>Danh sách nhãn hàng</span>
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
          <span>Quản lý sản phẩm</span>
        </a>
      </li>
    </ul>
  </aside>

  <main id="main" class="main">
    <div class="pagetitle">
      <h1>Trang chủ</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
          <li class="breadcrumb-item">Sản phẩm</li>
          <li class="breadcrumb-item active">Danh sách thương hiệu</li>
        </ol>
      </nav>
    </div>

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title d-flex align-items-center justify-content-between">
                Lọc
                <button class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#offcanvasEcommerceBranchList" aria-controls="DataTables_Table_0">Thêm thương hiệu</button>
              </h5>

              <table class="table datatable" id="dataTable">
                <thead>
                  <tr>
                    <th><b>T</b>hương hiệu</th>
                    <th>Tồn kho</th>
                    <th>Doanh thu</th>
                    <th>Trạng thái</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
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
                    <td>
                      <div class="text-center">4186</div>
                    </td>
                    <td>
                      <div class="text-center">79.000.000</div>
                    </td>
                    <td>
                      <span class="badge rounded-pill bg-label-danger text-capitalized">
                        Inactive
                      </span>
                    </td>
                    <td>
                      <div class="d-flex align-items-sm-center justify-content-sm-center">
                        <button class="btn btn-sm btn-icon">
                          <i class="bi bi-pencil"></i>
                        </button>
                        <button class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="bi bi-three-dots-vertical me-2"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end m-0">
                          <a href="javascript:0;" class="dropdown-item" onclick="handleView(1)">View</a>
                          <a href="javascript:0;" class="dropdown-item" onclick="handleDelete(16)">Delete</a>
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

  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasEcommerceBranchList" aria-labelledby="offcanvasEcommerceBranchListLabel" aria-modal="true" role="dialog">

    <div class="offcanvas-header py-4">
      <h5 id="offcanvasEcommerceBranchListLabel" class="offcanvas-title">
        Thêm thương hiệu
      </h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>

    <div class="offcanvas-body border-top">
      <form class="pt-0" id="eCommerceBranchListForm" data-select2-id="eCommerceBranchListForm">

        <div class="form-floating mb-4">
          <input type="text" class="form-control" id="ecommerce-branch-name" placeholder="Enter branch title" name="branch_name" aria-label="branch title" required />
          <label for="ecommerce-branch-name">Tên thương hiệu</label>
          <div class="invalid-feedback"></div>
        </div>

        <div class="form-floating mb-4">
          <input type="text" id="ecommerce-branch-slug" class="form-control" placeholder="Enter slug" aria-label="slug" name="description" required />
          <label for="ecommerce-branch-slug">Mô tả</label>
          <div class="invalid-feedback"></div>
        </div>

        <div class="mb-4">
          <label for="formFile" class="form-label">Logo</label>
          <input class="form-control" type="file" id="formFile" name="image" required>
        </div>

        <div class="mb-4">
          <label class="form-label">Trạng thái của thương hiệu</label>
          <select class="form-select" aria-label="Default select example" id="status" name="status">
            <option value="1">Kích hoạt</option>
            <option value="0">Vô hiệu hóa</option>
          </select>
        </div>
        <div class="invalid-feedback mb-4 cerror"></div>

        <div class="mb-3">
          <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit waves-effect waves-light">
            Thêm
          </button>
          <button type="reset" class="btn btn-outline-danger waves-effect" data-bs-dismiss="offcanvas">
            Clear
          </button>
        </div>
      </form>
    </div>
  </div>

  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasEcommerceBranchEdit" aria-labelledby="offcanvasEcommerceBranchListLabel" aria-modal="true" role="dialog">

    <div class="offcanvas-header py-4">
      <h5 id="offcanvasEcommerceBranchListLabel" class="offcanvas-title">
        Xem/chỉnh sửa thương hiệu
      </h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>

    <div class="offcanvas-body border-top">
      <form class="pt-0" id="eCommerceBranchListFormEdit" data-select2-id="eCommerceBranchListFormEdit">

        <div class="form-floating mb-4">
          <input type="text" class="form-control" id="ecommerce-branch-name-edit" placeholder="Enter branch title" name="branch_name" aria-label="branch title" required />
          <label for="ecommerce-branch-name">Tên thương hiệu</label>
          <div class="invalid-feedback"></div>
        </div>

        <div class="form-floating mb-4">
          <input type="text" id="ecommerce-branch-slug-edit" class="form-control" placeholder="Enter slug" aria-label="slug" name="description" required />
          <label for="ecommerce-branch-slug">Mô tả</label>
          <div class="invalid-feedback"></div>
        </div>

        <div class="mb-4">
          <label for="formFile" class="form-label">Logo</label>
          <input class="form-control" type="file" id="formFile-edit" name="image">
        </div>

        <div class="mb-4">
          <label class="form-label">Trạng thái của thương hiệu</label>
          <select class="form-select" aria-label="Default select example" id="status-edit" name="status">
            <option value="1">Kích hoạt</option>
            <option value="0">Vô hiệu hóa</option>
          </select>
        </div>
        <div class="invalid-feedback mb-4 cerror"></div>

        <div class="mb-3">
          <input type="text" id="id" hidden />
          <input type="text" id="image_old" hidden />
          <button type="submit" class="btn btn-primary border-0 me-sm-3 me-1 data-submit waves-effect waves-light">
            Update
          </button>
          <button type="reset" class="btn btn-outline-danger waves-effect" data-bs-dismiss="offcanvas">
            Clear
          </button>
        </div>
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
    $('#eCommerceBranchListForm').on('submit', function(e) {
      e.preventDefault();
      var formData = new FormData();
      var file = $('#formFile')[0].files;
      formData.append('branch_name', $('#ecommerce-branch-name').val());
      formData.append('image', file[0]);
      formData.append('description', $('#ecommerce-branch-slug').val());
      formData.append('status', $('#status').val());
      formData.append('action', 'create');
      $.ajax({
        url: 'http://localhost:3000/server/branch.php',
        type: 'POST',
        data: formData,
        processData: false,
        contentType: false,
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
            console.log('hehe');
            $('.cerror').html(message);
          }
        }
      })
    })

    $('#eCommerceBranchListFormEdit').on('submit', function(e) {
      e.preventDefault();
      var formData = new FormData();
      var file = $('#formFile-edit')[0].files;
      if (file[0]) {
        formData.append('image', file[0]);
      }
      formData.append('id', $('#id').val());
      formData.append('image_old', $('#image_old').val());
      formData.append('branch_name', $('#ecommerce-branch-name-edit').val());
      formData.append('description', $('#ecommerce-branch-slug-edit').val());
      formData.append('status', $('#status-edit').val());
      formData.append('action', 'update');
      $.ajax({
        url: 'http://localhost:3000/server/branch.php',
        type: 'POST',
        data: formData,
        processData: false,
        contentType: false,
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
            $('.cerror').html(message);
          }
        }
      })
    })

    const handleView = (id) => {
      $.ajax({
        url: 'http://localhost:3000/server/branch.php',
        type: 'POST',
        data: `id=${id}&action=getbyid`,
        success: (response) => {
          let data = JSON.parse(response)[0]
          $('#ecommerce-branch-name-edit').val(data.name);
          $('#ecommerce-branch-slug-edit').val(data.description);
          $('#id').val(data.id);
          $('#image_old').val(data.image);
          $('#offcanvasEcommerceBranchEdit').offcanvas('show');
        }
      })
    }

    const handleDelete = (id) => {
      $.ajax({
        url: 'http://localhost:3000/server/branch.php',
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
            $('.cerror').html(message);
          }
        }
      })
    }

    const showBrachFilter = () => {
      $.ajax({
        url: 'http://localhost:3000/server/branch.php',
        type: 'POST',
        data: {
          action: "readandfilter"
        },
        success: (response) => {
          console.log(JSON.parse(response));
          let branches = JSON.parse(response)
          $('.datatable').DataTable({
            searching: true,
            paging: true,
            data: branches,
            columns: [{
                data: 'null',
                render: function(data, type, row) {
                  return `
                      <div class="d-flex justify-content-start align-items-center product-name">
                        <div class="avatar-wrapper me-3">
                          <div class="avatar rounded-2 bg-label-secondary">
                            <img src="./server/${row.branch_image}" alt="Product-55" class="rounded-2" />
                          </div>
                        </div>
                        <div class="d-flex flex-column">
                          <span class="text-nowrap text-heading fw-medium">${row.branch_name}</span>
                          <small class="text-truncate d-none d-sm-block">${row.branch_description}</small>
                        </div>
                      </div>
                  `
                }
              },
              {
                data: null,
                render: function(data, type, row) {
                  return `
                    <div class="text-center">${row.total_products}</div>
                  `
                }
              },
              {
                data: null,
                render: function(data, type, row) {
                  return `
                    <div class="text-center">${row.total_sales ? convertToCurrency(row.total_sales) : convertToCurrency(0)}</div>
                  `
                }
              },
              {
                data: 'status',
                render: function(data, type, row) {
                  if(row.branch_status == 0) {
                    return `
                        <span class="badge rounded-pill bg-label-danger text-capitalized">
                          Tạm dừng
                        </span>
                    `
                  }else {
                    return `
                        <span class="badge rounded-pill bg-label-success text-capitalized">
                          Hoạt động
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
                        <button class="btn btn-sm btn-icon" onclick="handleView(${row.branch_id})">
                          <i class="bi bi-pencil"></i>
                        </button>
                        <button class="btn btn-sm btn-icon" onclick="handleDelete(${row.branch_id})">
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

    showBrachFilter()
  </script>
</body>

</html>