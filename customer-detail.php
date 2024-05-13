<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Thông tin khách hàng</title>
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
          <span class="d-none d-lg-block">Flodia</span>
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
            <li class="breadcrumb-item">Thông tin khách hàng</li>
            <li class="breadcrumb-item active">Tổng quan</li>
          </ol>
        </nav>
      </div>
      

      <section class="section">
        <div class="row">
          <div
            class="d-flex flex-column flex-sm-row align-items-center justify-content-sm-between mb-4 text-center text-sm-start gap-2"
          >
            <div class="mb-2 mb-sm-0">
              <h4 class="mb-1 fw-medium fs-5">Mã khách hàng <span class="custommer-id">#634759</span></h4>
              <p class="mb-0 fs-7 text-secondary created_at">Aug 17, 2020, 5:48 (ET)</p>
            </div>
            <button
              type="button"
              class="btn btn-outline-danger delete-customer waves-effect"
              data-status=""
            >
              Vô hiệu hóa tài khoản này
            </button> 
          </div>
        </div>
        <div class="row">
          <div class="col-xl-4 col-lg-5 col-md-5 order-1 order-md-0">
            
            <div class="card mb-4">
              <div class="card-body">
                <div class="customer-avatar-section">
                  <div class="d-flex align-items-center flex-column">
                    <div id="customer-avatar">
                      <img
                        class="img-fluid rounded mb-3 mt-4"
                        src="./assets/img/apple-touch-icon.png"
                        height="120"
                        width="120"
                        alt="User avatar"
                        style="width: 120px; height: 120px"
                      />
                    </div>
                    <div class="customer-info text-center mb-4">
                      <h5 class="mb-1 fw-medium custommer-name">Lorine Hischke</h5>
                      <span class="text-secondary fs-7"
                        >Mã khách hàng <span class="custommer-id">#634759</span></span
                      >
                    </div>
                  </div>
                </div>
                <div class="d-flex justify-content-around flex-wrap mb-4">
                  <div class="d-flex align-items-center gap-2">
                    <div class="avatar me-1">
                      <div class="avatar-initial rounded-3 bg-label-primary">
                        <i class="bi bi-cart"></i>
                      </div>
                    </div>
                    <div>
                      <h5 class="mb-0 fw-medium total-order">184</h5>
                      <span class="fs-7 text-secondary">Đơn hàng</span>
                    </div>
                  </div>
                  <div class="d-flex align-items-center gap-2">
                    <div class="avatar me-1">
                      <div class="avatar-initial rounded-3 bg-label-primary">
                        <i class="bi bi-currency-dollar"></i>
                      </div>
                    </div>
                    <div>
                      <h5 class="mb-0 fw-medium total-spent">$12,378</h5>
                      <span class="fs-7 text-secondary">Đã chi tiêu</span>
                    </div>
                  </div>
                </div>

                <div class="info-container">
                  <h5 class="border-bottom text-uppercase pb-3 fw-medium fs-5">
                    Chi tiết 
                  </h5>
                  <ul class="list-unstyled mb-4">
                    <li class="mb-2">
                      <span class="me-1 fw-medium">Họ và tên:</span>
                      <span class="fw-7 text-secondary custommer-name">lorine.hischke</span>
                    </li>
                    <li class="mb-2">
                      <span class="me-1 fw-medium">Trạng thái:</span>
                      <span class="badge bg-label-success rounded-pill custommer-status"
                        >Kích hoạt</span
                      >
                    </li>
                    <li class="mb-2">
                      <span class="me-1 fw-medium">Số điện thoại:</span>
                      <span class="fw-7 text-secondary custommer-phone">(123) 456-7890</span>
                    </li>

                    <li>
                      <span class="me-1 fw-medium">Địa chỉ:</span>
                      <span class="fw-7 text-secondary custommer-address">Việt Nam</span>
                    </li>
                  </ul>
                  <div class="d-flex justify-content-center">
                    <a
                      href="javascript:;"
                      class="btn btn-primary me-3 "
                      data-bs-target="#editUser"
                      data-bs-toggle="modal"
                      >Chỉnh sửa</a
                    >
                  </div>
                </div>
              </div>
            </div>
            
          </div>
          <div class="col-xl-8 col-lg-7 col-md-7 order-0 order-md-1">
            
            <ul class="nav nav-pills flex-column flex-md-row mb-4">
              <li class="nav-item">
                <a
                  class="nav-link active "
                  href="javascript:void(0);"
                  ><i class="bi bi-person-circle me-1"></i
                  >Tổng quan</a
                >
              </li>
              <li class="nav-item">
                <a
                  class="nav-link custommer-navigate-security"
                  href="#"
                  ><i class="bi-lock-fill mdi-20px me-1"></i
                  >Bảo mật</a
                >
              </li>
            </ul>

            <!-- Invoice table -->
            <div class="card mb-4">
              <div class="table-responsive mb-3">
                <div
                  id="DataTables_Table_0_wrapper dataTable"
                  class="dataTables_wrapper dt-bootstrap5 no-footer"
                >
                  <div class="card-header d-flex flex-wrap py-3 py-sm-2">
                    <div class="head-label text-center me-4 ms-1">
                      <h5 class="card-title mb-0 text-nowrap">Lịch sử đặt hàng</h5>
                    </div>
                  </div>
                  <table
                    class="table datatable no-footer"
                    
                  >
                    <thead class="table-light">
                      <tr>
                        <th
                          class="sorting sorting_desc"
                          tabindex="0"
                          aria-controls="DataTables_Table_0"
                          rowspan="1"
                          colspan="1"
                          style="width: 89px"
                          aria-label="Order: activate to sort column ascending"
                          aria-sort="descending"
                        >
                          Mã đơn hàng
                        </th>
                        <th
                          class="sorting"
                          tabindex="0"
                          aria-controls="DataTables_Table_0"
                          rowspan="1"
                          colspan="1"
                          style="width: 155px"
                          aria-label="Date: activate to sort column ascending"
                        >
                          Ngày đặt hàng
                        </th>
                        <th
                          class="sorting"
                          tabindex="0"
                          aria-controls="DataTables_Table_0"
                          rowspan="1"
                          colspan="1"
                          style="width: 182px"
                          aria-label="Status: activate to sort column ascending"
                        >
                          Trạng thái
                        </th>
                        <th
                          class="sorting"
                          tabindex="0"
                          aria-controls="DataTables_Table_0"
                          rowspan="1"
                          colspan="1"
                          style="width: 99px"
                          aria-label="Spent: activate to sort column ascending"
                        >
                          Tổng tiền
                        </th>
                        <th
                          class="sorting_disabled"
                          rowspan="1"
                          colspan="1"
                          style="width: 108px"
                          aria-label="Actions"
                        >
                          
                        </th>
                      </tr>
                    </thead>
                    <tbody class="orderHistory">
                      <tr>
                        <td class="sorting_1">
                          <a href="app-ecommerce-order-details.php"
                            ><span>#9957</span></a
                          >
                        </td>
                        <td><span class="text-nowrap">Nov 29, 2022</span></td>
                        <td>
                          <span
                            class="badge rounded-pill bg-label-primary"
                            text-capitalized=""
                            >Out for delivery</span
                          >
                        </td>
                        <td><span>$59.28</span></td>
                        <td>
                          <div>
                            <button
                              class="btn btn-sm btn-icon dropdown-toggle hide-arrow"
                              data-bs-toggle="dropdown"
                              aria-expanded="false"
                            >
                              <i class="mdi mdi-dots-vertical"></i>
                            </button>
                            <div
                              class="dropdown-menu dropdown-menu-end m-0"
                            >
                              <a href="javascript:;" class="dropdown-item"
                                >View</a
                              ><a
                                href="javascript:;"
                                class="dropdown-item delete-record"
                                >Delete</a
                              >
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr class="even">
                        <td class="sorting_1">
                          <a href="app-ecommerce-order-details.php"
                            ><span>#9941</span></a
                          >
                        </td>
                        <td><span class="text-nowrap">Jun 20, 2022</span></td>
                        <td>
                          <span
                            class="badge rounded-pill bg-label-info"
                            text-capitalized=""
                            >Ready to Pickup</span
                          >
                        </td>
                        <td><span>$333.83</span></td>
                        <td>
                          <div>
                            <button
                              class="btn btn-sm btn-icon dropdown-toggle hide-arrow"
                              data-bs-toggle="dropdown"
                            >
                              <i class="mdi mdi-dots-vertical"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end m-0">
                              <a href="javascript:;" class="dropdown-item"
                                >View</a
                              ><a
                                href="javascript:;"
                                class="dropdown-item delete-record"
                                >Delete</a
                              >
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="sorting_1">
                          <a href="app-ecommerce-order-details.php"
                            ><span>#9885</span></a
                          >
                        </td>
                        <td><span class="text-nowrap">Sep 11, 2022</span></td>
                        <td>
                          <span
                            class="badge rounded-pill bg-label-success"
                            text-capitalized=""
                            >Delivered</span
                          >
                        </td>
                        <td><span>$62.71</span></td>
                        <td>
                          <div>
                            <button
                              class="btn btn-sm btn-icon dropdown-toggle hide-arrow"
                              data-bs-toggle="dropdown"
                            >
                              <i class="mdi mdi-dots-vertical"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end m-0">
                              <a href="javascript:;" class="dropdown-item"
                                >View</a
                              ><a
                                href="javascript:;"
                                class="dropdown-item delete-record"
                                >Delete</a
                              >
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr class="even">
                        <td class="sorting_1">
                          <a href="app-ecommerce-order-details.php"
                            ><span>#9879</span></a
                          >
                        </td>
                        <td><span class="text-nowrap">Dec 23, 2022</span></td>
                        <td>
                          <span
                            class="badge rounded-pill bg-label-warning"
                            text-capitalized=""
                            >Dispatched</span
                          >
                        </td>
                        <td><span>$100.18</span></td>
                        <td>
                          <div>
                            <button
                              class="btn btn-sm btn-icon dropdown-toggle hide-arrow"
                              data-bs-toggle="dropdown"
                            >
                              <i class="mdi mdi-dots-vertical"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end m-0">
                              <a href="javascript:;" class="dropdown-item"
                                >View</a
                              ><a
                                href="javascript:;"
                                class="dropdown-item delete-record"
                                >Delete</a
                              >
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="sorting_1">
                          <a href="app-ecommerce-order-details.php"
                            ><span>#9877</span></a
                          >
                        </td>
                        <td><span class="text-nowrap">Nov 1, 2022</span></td>
                        <td>
                          <span
                            class="badge rounded-pill bg-label-success"
                            text-capitalized=""
                            >Delivered</span
                          >
                        </td>
                        <td><span>$67.26</span></td>
                        <td>
                          <div>
                            <button
                              class="btn btn-sm btn-icon dropdown-toggle hide-arrow"
                              data-bs-toggle="dropdown"
                            >
                              <i class="mdi mdi-dots-vertical"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end m-0">
                              <a href="javascript:;" class="dropdown-item"
                                >View</a
                              ><a
                                href="javascript:;"
                                class="dropdown-item delete-record"
                                >Delete</a
                              >
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr class="even">
                        <td class="sorting_1">
                          <a href="app-ecommerce-order-details.php"
                            ><span>#9793</span></a
                          >
                        </td>
                        <td><span class="text-nowrap">Jan 23, 2023</span></td>
                        <td>
                          <span
                            class="badge rounded-pill bg-label-success"
                            text-capitalized=""
                            >Delivered</span
                          >
                        </td>
                        <td><span>$856.58</span></td>
                        <td>
                          <div>
                            <button
                              class="btn btn-sm btn-icon dropdown-toggle hide-arrow"
                              data-bs-toggle="dropdown"
                            >
                              <i class="mdi mdi-dots-vertical"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end m-0">
                              <a href="javascript:;" class="dropdown-item"
                                >View</a
                              ><a
                                href="javascript:;"
                                class="dropdown-item delete-record"
                                >Delete</a
                              >
                            </div>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!-- /Invoice table -->
          </div>
        </div>
      </section>
    </main>
    
    <div class="modal fade" id="editUser" tabindex="-1" aria-modal="true" role="dialog" style="display: none; padding-left: 0px;">
      <div class="modal-dialog modal-lg modal-simple modal-edit-user">
        <div class="modal-content p-3 p-md-5">
          <div class="modal-body py-3 py-md-0">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="text-center mb-4">
              <h3 class="mb-2 fw-bold ">Cập nhật thông tin khách hàng</h3>
              <p class="pt-1">Cập nhật chi tiết thông tin khách hàng này</p>
            </div>
            <form id="editUserForm" class="row g-4 fv-plugins-bootstrap5 fv-plugins-framework">
              <div class="col-12 col-md-6">
                <div class="form-floating form-floating-outline">
                  <input type="text" id="modalEditUserFirstName" name="modalEditUserFirstName" class="form-control" placeholder="John">
                  <label for="modalEditUserFirstName">Họ</label>
                </div>
              <!-- <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div> -->
            </div>
              <div class="col-12 col-md-6">
                <div class="form-floating form-floating-outline">
                  <input type="text" id="modalEditUserLastName" name="modalEditUserLastName" class="form-control" placeholder="Doe">
                  <label for="modalEditUserLastName">Tên</label>
                </div>
              <!-- <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div> -->
            </div>
              <div class="col-12 fv-plugins-icon-container">
                <div class="form-floating form-floating-outline">
                  <input type="text" id="modalEditPhone" name="modalEditPhone" class="form-control" placeholder="john.doe.007">
                  <label for="modalEditPhone">Số điện thoại</label>
                </div>
              <!-- <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div> -->
            </div>
              <div class="col-12 col-md-6">
                <div class="form-floating form-floating-outline">
                  <select id="modalEditUserStatus" name="modalEditUserStatus" class="form-select" aria-label="Default select example">
                    <option value="1">Kích hoạt</option>
                    <option value="0">Vô hiệu</option>
                  </select>
                  <label for="modalEditUserStatus">Trạng thái tài khoản</label>
                </div>
              </div>
              <div class="col-12 col-md-6">
                <div class="form-floating form-floating-outline">
                  <input type="text" id="modalEditAddress" name="modalEditAddress" class="form-control modal-edit-tax-id" placeholder="123 456 7890">
                  <label for="modalEditAddress">Địa chỉ</label>
                </div>
              </div>
              <div class="col-12 col-md-6">
                <div class="form-floating form-floating-outline">
                  <select id="modalEditUserRole" name="modalEditUserRole" class="form-select" aria-label="Default select example">
                    <option value="user">Khách hàng</option>
                    <option value="admin">Admin</option>
                  </select>
                  <label for="modalEditUserRole">Cho phép</label>
                </div>
              </div>
              <div class="col-12 col-md-6">
                <div class="form-floating form-floating-outline">
                  <input class="form-control" type="file" id="formFile" hidden>
                  <span class="choose-file d-flex p-0 align-items-center justify-content-center border-secondary" style="margin-left: 16px; border: 1px dashed;width: 60px;height: 60px;">
                    <i class="bi bi-plus"></i>
                  </span>
                </div>
              </div>
              
              <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary me-sm-3 me-1 waves-effect waves-light">Xác nhận</button>
                <button type="reset" class="btn btn-outline-secondary waves-effect" data-bs-dismiss="modal" aria-label="Close">Hủy</button>
              </div>
            <input type="text" hidden id="image_old">
          </form>
          </div>
        </div>
      </div>
    </div>

    

    <a
      href="#"
      class="back-to-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    
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
        var urlParams = new URLSearchParams(window.location.search);
        var custommerId = urlParams.get('id');
        if(!custommerId) {
          console.log(custommerId);
          window.location.href = 'page-error.php'
        }
        $('.custommer-navigate-security').attr('href', `./customer-detail-security.php?id=${custommerId}`)
        const showCustomerById = (id) => {
          $.ajax({
            url: 'http://localhost:3000/server/user.php',
            type: 'POST',
            data: `id=${id}&action=getbyid`,
            success: (response) => {
              const custommer = JSON.parse(response)
              console.log(custommer);
              $('.custommer-id').each(function() {
                console.log($(this));
                console.log(custommer.id);
                $(this).html('#'+custommer.id)
              });
              $('.created_at').html(custommer.created_at);
              
              $('.custommer-name').each(function() {
                $(this).html(custommer.first_name + ' ' + custommer.last_name)                
              })
              $('.total-order').html(custommer.total_orders)
              $('.total-spent').html(custommer.total_amount_paid ? custommer.total_amount_paid : 0)

              if (custommer.is_active == 0) {
                $('.custommer-status').removeClass('bg-label-success').addClass('bg-label-danger').html('Vô hiệu hóa')

                $('.delete-customer').removeClass('btn-outline-danger').addClass('btn-outline-success').html('Kích hoạt tài khoản này')
              }
              $('.custommer-phone').html(custommer.phone)
              $('.custommer-address').html(custommer.address)

              $('#modalEditUserFirstName').val(custommer.first_name)
              $('#modalEditUserLastName').val(custommer.last_name)
              $('#modalEditPhone').val(custommer.phone)
              $('#modalEditUserStatus').val(custommer.is_active)
              $('#modalEditAddress').val(custommer.address)
              $('#modalEditUserRole').val(custommer.role)
              $('#image_old').val(custommer.image)
              $('.delete-customer').data("status", custommer.is_active)
              if (custommer.image) {
                $("#customer-avatar img").attr('src', `./server/${custommer.image}`)

                const image = $('<img>').attr('src', `./server/${custommer.image}`).css('width', '100%').css('height', '100%');
                $('#span').innerHTML = '';
                $('.choose-file').empty().append(image);
              }else {
                const span = `
                    <span
                      class="d-flex align-items-center justify-content-center fw-bold fs-3 img-fluid rounded mb-3 mt-4"
                      style="width: 120px; height: 120px; background: #eee;"
                    >
                      ${custommer.first_name.charAt(0)}
                      ${custommer.last_name.charAt(0)}
                    </span>
                `
                $("#customer-avatar").empty().append(span)
              }
            }
          })
        }

        const showOrderHistory = (id) => {
          // orderHistory
          $.ajax({
            url: 'http://localhost:3000/server/order.php',
            type: 'POST',
            data: `id=${id}&action=getOrderByUserId`,
            success: (response) => {
              const orders = JSON.parse(response)
              console.log(orders);
              $('.orderHistory').empty()
              orders.forEach(function(order) {
                let label = ''
                if (order.status == 'pending') {
                  label = 'bg-label-warning'
                }
                if (order.status == 'processing') {
                  label = 'bg-label-info'
                }
                if (order.status == 'shipped') {
                  label = 'bg-label-primary'
                }
                if (order.status == 'delivered') {
                  label = 'bg-label-success'
                }
                if (order.status == 'cancelled') {
                  label = 'bg-label-danger'
                }
                let html = `
                          <tr>
                            <td class="sorting_1">
                              <a href="orders-detail.php?id=${order.id}"
                                ><span>#${order.id}</span></a
                              >
                            </td>
                            <td><span class="text-nowrap">${order.order_date}</span></td>
                            <td>
                              <span
                                class="badge rounded-pill ${label} text-capitalize"
                                >${order.status}</span
                              >
                            </td>
                            <td><span>${order.total}<sup>đ</sup></span></td>
                          </tr>
                `
                $('.orderHistory').append(html)
              })
            }
          })
        }

        $('.choose-file').click(function() {
          $('#formFile').click()
        })

        $('#formFile').change(function() {
          const file = this.files[0];
          if (file) {
            const reader = new FileReader();

            reader.addEventListener('load', function() {

              const image = $('<img>').attr('src', reader.result).css('width', '100%').css('height', '100%');
              $('.choose-file').empty().append(image);

            });
            reader.readAsDataURL(file);
          }else {
            $('.choose-file').html('<i class="bi bi-plus"></i>');
          }
        })

        $('#editUserForm').on('submit', function(e) {
          e.preventDefault()
          var formData = new FormData();
          var firstName = $('#modalEditUserFirstName').val();
          var lastName = $('#modalEditUserLastName').val();
          var phone = $('#modalEditPhone').val();
          var status = $('#modalEditUserStatus').val();
          var role = $('#modalEditUserRole').val();
          var address = $('#modalEditAddress').val();
          var image_old = $('#image_old').val()
          formData.append('firstname', firstName);
          formData.append('lastname', lastName);
          formData.append('phone', phone);
          formData.append('status', status);
          formData.append('role', role);
          formData.append('address', address);
          var imageInput = $('#formFile');
          if (imageInput.get(0).files.length > 0) {
            formData.append('image', imageInput.prop('files')[0]);
          }
          formData.append('image_old', image_old)
          formData.append('verify', true);
          formData.append('id', custommerId)
          formData.append('action', 'update')
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
                window.location.reload();
              }else {
                console.log(message);
              }
            }
          });
        })

        $('.delete-customer').click(function() {
          let status = $(this).data('status')
          console.log('status bandau' + status);
          status = status == 1 ? 0 : 1;
          console.log(status);
          $.ajax({
            url: "http://localhost:3000/server/user.php",
            type: "POST",
            data: `action=status&data=${status}&id=${custommerId}`,
            success: function(response) {
              console.log(response);
              const {status, message} = JSON.parse(response)
              if(status) {
                window.location.reload();
              }else {
                console.log(message);
              }
            }
          });
        })



        showCustomerById(custommerId)
        showOrderHistory(custommerId)
    </script>
  </body>
</html>
