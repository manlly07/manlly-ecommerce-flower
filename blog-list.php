<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title>Phân loại sản phẩm</title>
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

      <li class="nav-item ">
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


      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#blog-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Blog</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="blog-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
          <li>
            <a href="blog-list.php" class="active">
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
      <h1>Danh sách Blog</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
          <li class="breadcrumb-item">Blog</li>
          <li class="breadcrumb-item active">Danh sách blog</li>
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
                <a href="./add-blog.php" class="btn btn-primary">Thêm blog mới</a>
              </h5>

              <table class="table datatable" id="dataTable">
                <thead>
                  <tr>
                    <th><b>L</b>oại</th>
                    <th>Ngày tạo</th>
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
                      <div>79.000.000</div>
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

  <!-- <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasEcommerceCategoryList" aria-labelledby="offcanvasEcommerceCategoryListLabel" aria-modal="true" role="dialog">

    <div class="offcanvas-header py-4">
      <h5 id="offcanvasEcommerceCategoryListLabel" class="offcanvas-title">
        Thêm loại mặt hàng
      </h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>

    <div class="offcanvas-body border-top">
      <form class="pt-0" id="eCommerceCategoryListForm" data-select2-id="eCommerceCategoryListForm">

        <div class="form-floating mb-4">
          <input type="text" class="form-control" id="ecommerce-category-name" placeholder="Enter branch title" name="category_name" aria-label="branch title" required />
          <label for="ecommerce-category-name">Tên loại mặt hàng</label>
          <div class="invalid-feedback"></div>
        </div>

        <div class="form-floating mb-4">
          <input type="text" id="ecommerce-category-slug" class="form-control" placeholder="Enter slug" aria-label="slug" name="description" required />
          <label for="ecommerce-category-slug">Mô tả</label>
          <div class="invalid-feedback"></div>
        </div>

        <div class="mb-4">
          <label class="form-label">Trạng thái của loại mặt hàng</label>
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
  </div> -->

  <!-- <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasEcommerceCategoryEdit" aria-labelledby="offcanvasEcommerceCategoryListLabel" aria-modal="true" role="dialog">

    <div class="offcanvas-header py-4">
      <h5 id="offcanvasEcommerceCategoryListLabel" class="offcanvas-title">
        Xem/chỉnh sửa loại mặt hàng
      </h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>

    <div class="offcanvas-body border-top">
      <form class="pt-0" id="eCommerceCategoryListFormEdit" data-select2-id="eCommerceCategoryListFormEdit">

        <div class="form-floating mb-4">
          <input type="text" class="form-control" id="ecommerce-category-name-edit" placeholder="Enter branch title" name="category_name" aria-label="branch title" required />
          <label for="ecommerce-category-name-edit">Tên loại mặt hàng</label>
          <div class="invalid-feedback"></div>
        </div>

        <div class="form-floating mb-4">
          <input type="text" id="ecommerce-category-slug-edit" class="form-control" placeholder="Enter slug" aria-label="slug" name="description" required />
          <label for="ecommerce-category-slug-edit">Mô tả</label>
          <div class="invalid-feedback"></div>
        </div>

        <div class="mb-4">
          <label class="form-label">Trạng thái của loại mặt hàng</label>
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
  </div> -->

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
    $('#eCommerceCategoryListForm').on('submit', function(e) {
      e.preventDefault();
      var formData = new FormData();
      formData.append('category_name', $('#ecommerce-category-name').val());
      formData.append('description', $('#ecommerce-category-slug').val());
      formData.append('status', $('#status').val());
      formData.append('action', 'create');
      $.ajax({
        url: 'http://localhost:3000/server/category.php',
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

    const handleView = (id) => {
      window.location.href = `./edit-blog.php?id=${id}`
    }

    const handleDelete = (id) => {
        console.log(id);
      $.ajax({
        url: 'http://localhost:3000/server/blog.php',
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

    const showBlogFilter = () => {
      $.ajax({
        url: 'http://localhost:3000/server/blog.php',
        type: 'POST',
        data: {
          action: "read"
        },
        success: (response) => {
          console.log(JSON.parse(response));
          let categories = JSON.parse(response)
          $('.datatable').DataTable({
            searching: true,
            paging: true,
            data: categories,
            columns: [{
                data: 'null',
                render: function(data, type, row) {
                  return `
                      <div class="d-flex justify-content-start align-items-center product-name">
                        
                        <div class="d-flex flex-column">
                          <span class="text-nowrap text-heading fw-medium">${row.title}</span>
                          <small class="text-truncate d-none d-sm-block">${row.description}</small>
                        </div>
                      </div>
                  `
                }
              },
              {
                data: null,
                render: function(data, type, row) {
                  return `
                    <div class="text-center">${row.created_at}</div>
                  `
                }
              },
              {
                data: 'status',
                render: function(data, type, row) {
                  if(row.is_deleted == 1) {
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
                        <button class="btn btn-sm btn-icon" onclick="handleView(${row.id})">
                          <i class="bi bi-pencil"></i>
                        </button>
                        <button class="btn btn-sm btn-icon" onclick="handleDelete(${row.id})">
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

    showBlogFilter()
  </script>
</body>
</html>