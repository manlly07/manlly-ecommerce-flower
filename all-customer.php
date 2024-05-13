<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Khách hàng</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <link href="assets/img/favicon.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <link href="https://fonts.gstatic.com" rel="preconnect" />
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
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

  </head>

  <body>
    <header id="header" class="header fixed-top d-flex align-items-center">
      <div class="d-flex align-items-center justify-content-between">
        <a href="index.php" class="logo d-flex align-items-center">
          <img src="assets/img/logo.png" alt="" />
          <span class="d-none d-lg-block">ThaoHien</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
      </div>

      <div class="search-bar">
        <form
          class="search-form d-flex align-items-center"
          method="POST"
          action="#"
        >
          <input
            type="text"
            name="query"
            placeholder="Search"
            title="Enter search keyword"
          />
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
                <h6 style="width: 250px;" class="text-truncate ">Kevin Anderson</h6>
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
          <a
            class="nav-link collapsed"
            data-bs-target="#products-nav"
            data-bs-toggle="collapse"
            href="#"
          >
            <i class="bi bi-menu-button-wide"></i><span>Sản phẩm</span
            ><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul
            id="products-nav"
            class="nav-content collapse"
            data-bs-parent="#sidebar-nav"
          >
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
          <a
            class="nav-link collapsed"
            data-bs-target="#orders-nav"
            data-bs-toggle="collapse"
            href="#"
          >
            <i class="bi bi-menu-button-wide"></i><span>Đơn hàng</span
            ><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul
            id="orders-nav"
            class="nav-content collapse"
            data-bs-parent="#sidebar-nav"
          >
            <li>
              <a href="orders-list.php">
                <i class="bi bi-circle"></i><span>Danh sách đơn hàng</span>
              </a>
            </li>
          </ul>
        </li>

        <!-- <li class="nav-item">
          <a
            class="nav-link"
            data-bs-target="#customer-nav"
            data-bs-toggle="collapse"
            href="#"
          >
            <i class="bi bi-menu-button-wide"></i><span>Khách hàng</span
            ><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul
            id="customer-nav"
            class="nav-content collapse show"
            data-bs-parent="#sidebar-nav"
          >
            <li>
              <a href="all-customer.php" class="active">
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
        <h1>Khách hàng</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
            <li class="breadcrumb-item">Khách hàng</li>
            <li class="breadcrumb-item active">Danh sách khách hàng</li>
          </ol>
        </nav>
      </div>


      <section class="section">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <h5
                  class="card-title d-flex align-items-center justify-content-between"
                >
                  Bộ lọc
                  <button
                    class="btn btn-primary"
                    data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasEcommerceCustomerAdd"
                    aria-controls="DataTables_Table_0"
                  >
                    Thêm khách hàng mới
                  </button>
                </h5>

                <table class="table datatable">
                  <thead>
                    <tr>
                      <th>Khách hàng</th>
                      <th>No</th>
                      <th>Số điện thoại</th>
                      <th>Đơn hàng</th>
                      <th>Tiên chi</th>
                      <th>Trạng thái</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div
                          class="d-flex justify-content-start align-items-center"
                        >
                          <div class="avatar-wrapper me-3">
                            <div class="avatar avatar-sm">
                              <img
                                src="./assets/img/messages-1.jpg"
                                alt="Avatar"
                                class="rounded-circle"
                              />
                            </div>
                          </div>
                          <div class="d-flex flex-column">
                            <a
                              href="pages-profile-user.php"
                              class="text-truncate"
                            >
                              <span class="text-heading fs-7 fw-medium"
                                >Cristine Easom</span
                              >
                            </a>
                            <small class="text-truncate"
                              >ceasomw@theguardian.com</small
                            >
                          </div>
                        </div>
                      </td>
                      <td>
                        <a href="orders-detail.php">
                          <span>#6979</span>
                        </a>
                      </td>
                      <td>
                        <span class="text-nowrap text-secondary"
                          >0789456133</span
                        >
                      </td>
                      <td>
                        <span class="text-nowrap text-secondary">539</span>
                      </td>
                      <td>
                        <span
                          class="text-nowrap text-secondary text-center d-block"
                          >539</span
                        >
                      </td>
                      <td></td>
                      <td>
                        <div
                          class="d-flex align-items-sm-center justify-content-sm-center"
                        >
                          <button
                            class="btn btn-sm btn-icon dropdown-toggle hide-arrow"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                          >
                            <i class="bi bi-three-dots-vertical me-2"></i>
                          </button>
                          <div class="dropdown-menu dropdown-menu-end m-0">
                            <a href="javascript:0;" class="dropdown-item"
                              >View</a
                            >
                            <a href="javascript:0;" class="dropdown-item"
                              >Suspend</a
                            >
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <!-- End Table with stripped rows -->
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

    <a
      href="#"
      class="back-to-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    <div
      class="offcanvas offcanvas-end"
      tabindex="-1"
      id="offcanvasEcommerceCustomerAdd"
      aria-labelledby="offcanvasEcommerceCustomerAddLabel"
      aria-modal="true"
      role="dialog"
    >
      <div class="offcanvas-header border-bottom">
        <h5 id="offcanvasEcommerceCustomerAddLabel" class="offcanvas-title">
          Thêm khách hàng mới
        </h5>
        <button
          type="button"
          class="btn-close text-reset"
          data-bs-dismiss="offcanvas"
          aria-label="Close"
        ></button>
      </div>
      <div class="offcanvas-body mx-0 flex-grow-0">
        <form
          class="ecommerce-customer-add pt-0"
          id="eCommerceCustomerAddForm"
        >
          <div class="ecommerce-customer-add-basic mb-4">
            <h6 class="mb-4 fw-medium">Thông tin cơ bản</h6>
            <div
              class="form-floating form-floating-outline mb-4"
            >
              <input
                type="text"
                class="form-control"
                id="ecommerce-customer-add-first-name"
                placeholder="John Doe"
                name="customerName"
                aria-label="John Doe"
                required
              />
              <label for="ecommerce-customer-add-first-name">Họ</label>
              <div
                class="invalid-feedback"
              ></div>
            </div>
            <div
              class="form-floating form-floating-outline mb-4"
            >
              <input
                type="text"
                class="form-control"
                id="ecommerce-customer-add-last-name"
                placeholder="John Doe"
                name="customerName"
                aria-label="John Doe"
                required
              />
              <label for="ecommerce-customer-add-last-name">Tên</label>
              <div
                class="invalid-feedback"
              ></div>
            </div>
            <div
              class="form-floating form-floating-outline mb-4"
            >
              <input
                type="number"
                id="ecommerce-customer-add-phone"
                class="form-control"
                placeholder="john.doe@example.com"
                aria-label="john.doe@example.com"
                name="customerphone"
                required
              />
              <label for="ecommerce-customer-add-phone">Số điện thoại*</label>
              <div
                class="invalid-feedback"
              ></div>
            </div>
            <div
              class="form-floating form-floating-outline mb-4"
            >
              <input
                type="password"
                id="ecommerce-customer-add-password"
                class="form-control"
                placeholder="********"
                aria-label="********"
                name="customerphone"
                required
              />
              <label for="ecommerce-customer-add-phone">Mật khẩu</label>
              <div
                class="invalid-feedback"
              ></div>
            </div>
            <div
              class="form-floating form-floating-outline mb-4"
            >
              <input
                type="password"
                id="ecommerce-customer-add-confirm-password"
                class="form-control"
                placeholder="********"
                aria-label="********"
                name="customerphone"
                required
              />
              <label for="ecommerce-customer-add-phone">Nhập lại mật khẩu</label>
              <div
                class="invalid-feedback"
              ></div>
            </div>

            <div class="row mb-4">
              <label for="formFile" class="form-label">Chọn ảnh của bạn</label>
              <input class="form-control" type="file" id="formFile" hidden>
              <span class="choose-file d-flex p-0 align-items-center justify-content-center border-secondary" style="margin-left: 16px; border: 1px dashed;width: 60px;height: 60px;">
                <i class="bi bi-plus"></i>
              </span>
            </div>
            

            <div
              class="form-floating form-floating-outline mb-4"
            >
            <select class="form-select" aria-label="Default select example" name="role">
              <option value="user">Khách hàng</option>
              <option value="admin">Admin</option>
            </select>
              <label for="ecommerce-customer-add-phone">Vai trò</label>
              <div
                class="invalid-feedback"
              ></div>
            </div>
            
          </div>
          <div class="ecommerce-customer-add-shiping mb-3">
            <h6 class="mb-4 fw-bold ">Thông tin địa chỉ đặt hàng</h6>
            <div class="form-floating form-floating-outline mb-4">
              <input
                type="text"
                id="ecommerce-customer-add-address"
                class="form-control"
                placeholder="45 Roker Terrace"
                aria-label="45 Roker Terrace"
                name="customerAddress1"
                required
              />
              <label for="ecommerce-customer-add-address">Địa chỉ</label>
            </div>
          </div>
          <div class="error text-danger fw-bold"></div>
          <div class="pt-3">
            <button
              type="submit"
              class="btn btn-primary me-sm-3 me-1 data-submit waves-effect waves-light"
            >
              Thêm
            </button>
            <button
              type="reset"
              class="btn btn-outline-danger waves-effect"
              data-bs-dismiss="offcanvas"
            >
              Đóng
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
      $('#eCommerceCustomerAddForm').on('submit', function(e) {
        e.preventDefault();
        var formData = new FormData();
        var firstName = $('#ecommerce-customer-add-first-name').val();
        var lastName = $('#ecommerce-customer-add-last-name').val();
        var phone = $('#ecommerce-customer-add-phone').val();
        var password = $('#ecommerce-customer-add-password').val();
        var confirmPassword = $('#ecommerce-customer-add-confirm-password').val();
        var role = $('select[name="role"]').val();
        var address = $('#ecommerce-customer-add-address').val();
        formData.append('firstname', firstName);
        formData.append('lastname', lastName);
        formData.append('phone', phone);
        formData.append('password', password);
        formData.append('confirmPassword', confirmPassword);
        formData.append('role', role);
        formData.append('address', address);
        var imageInput = $('#formFile');
        if (imageInput.get(0).files.length > 0) {
          formData.append('image', imageInput.prop('files')[0]);
        }
        formData.append('verify', 1);
        formData.append('is_active', 1);
        formData.append('action', 'create')

        $.ajax({
          url: "http://localhost:3000/server/user.php",
          type: "POST",
          data: formData,
          contentType: false,
          processData: false,
          success: function(response) {
            console.log(response);
            const {status, message} = JSON.parse(response)
            if(status) {
              showAlert('success', message)
              window.location.reload();
            }else {
              console.log(message);
              showAlert('danger', message)
            }
          }
        });
      })

      $('.choose-file').click(function() {
        $('#formFile').click()
      })

      $('#formFile').change(function() {
        const file = this.files[0];
        if (file) {
          const reader = new FileReader();

          reader.addEventListener('load', function() {

            const image = $('<img>').attr('src', reader.result).css('width', '100%').css('height', '100%');
            $('#span').innerHTML = '';
            $('.choose-file').empty().append(image);

          });
          reader.readAsDataURL(file);
        }else {
          $('.choose-file').html('<i class="bi bi-plus"></i>');
        }
      })

      const handleDelete = (id) => {
        $.ajax({
          url: 'http://localhost:3000/server/user.php',
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

      const showCustomers = () => {
        $.ajax({
          url: "http://localhost:3000/server/user.php",
          type: "POST",
          data: 'action=readbyfilter',
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
                  return `
                  <div class="d-flex justify-content-start align-items-center">
                          <div class="avatar-wrapper me-3">
                            <div class="avatar avatar-sm">
                              ${row.image ? 
                                `
                                  <img src="./server/${row.image}" alt="Avatar" class="rounded-circle">
                                ` : 
                                `
                                  <img src="./assets/img/user-default.png" alt="Avatar" class="rounded-circle">
                                `}
                              
                            </div>
                          </div>
                          <div class="d-flex flex-column">
                            <a href="customer-detail.php?id=${row.user_id}" class="text-truncate">
                              <span class="text-heading fs-7 fw-medium">${row.first_name + ' ' + row.last_name}</span>
                            </a>
                            <small class="text-truncate">${row.role == 'user' ? 'Khách hàng' : 'Chủ cửa hàng'}</small>
                          </div>
                        </div>
                  `
                }
              },
              {
                data: null,
                render: function(data, type, row) {
                  return `
                  <a href="customer-detail.php?id=${row.user_id}">
                          <span>#${row.user_id}</span>
                        </a>
                  `
                }
              },
              {
                data: null,
                render: function(data, type, row) {
                  return `
                  <span class="text-nowrap text-secondary">${row.phone}</span>
                  `
                }
              },
              {
                data: null,
                render: function(data, type, row) {
                  return `
                  <span class="text-nowrap text-secondary">${row.total_orders}</span>
                  `
                }
              },
              {
                data: null,
                render: function(data, type, row) {
                  return `
                  <span class="text-nowrap text-secondary">${row.total_amount_paid ? row.total_amount_paid : 0}</span>
                  `
                }
              },
              {
                data: 'status',
                render: function(data, type, row) {
                  if(row.is_active == 0) {
                    return `
                        <span class="badge rounded-pill bg-label-danger text-capitalized">
                          Vô hiệu hóa
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
                        <a href="customer-detail.php?id=${row.user_id}" class="btn btn-sm btn-icon">
                          <i class="bi bi-pencil"></i>
                        </a>
                        <button class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="bi bi-three-dots-vertical me-2"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end m-0">
                          <a href="javascript:0;" class="dropdown-item" onclick="handleView(${row.user_id})">View</a>
                          <a href="javascript:0;" class="dropdown-item" onclick="handleDelete(${row.user_id})">Delete</a>
                        </div>
                      </div>
                  `
                }
              }
            ],
          })
          }
        });
      }



      showCustomers()
    </script>
  </body>
</html>
