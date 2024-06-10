<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Quản lý đánh giá</title>
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
              <a href="branch-list.php">
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
            <li>
              <a href="orders-detail.php">
                <i class="bi bi-circle"></i><span>Chi tiết đơn hàng</span>
              </a>
            </li>
          </ul>
        </li>

        <!-- <li class="nav-item">
          <a
            class="nav-link collapsed"
            data-bs-target="#customer-nav"
            data-bs-toggle="collapse"
            href="#"
          >
            <i class="bi bi-menu-button-wide"></i><span>Khách hàng</span
            ><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul
            id="customer-nav"
            class="nav-content collapse"
            data-bs-parent="#sidebar-nav"
          >
            <li>
              <a href="all-customer.php">
                <i class="bi bi-circle"></i><span>Danh sách khách hàng</span>
              </a>
            </li>
          </ul>
        </li> -->

        <li class="nav-item">
          <a class="nav-link" href="manage-review.php">
            <i class="bi bi-grid"></i>
            <span>Đánh giá sản phẩm</span>
          </a>
        </li>

      </ul>
    </aside>
    

    <main id="main" class="main">
      <div class="pagetitle">
        <h1>Đánh giá</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
            <li class="breadcrumb-item active">Quản lý đánh giá</li>
          </ol>
        </nav>
      </div>
      

      <section class="section">
        <div class="row mb-4 g-4">
          <div class="col-md-6">
            <div class="card">
              <div class="row card-body pt-4">
                <div class="col-sm-5 border-end">
                  <div class="d-flex align-items-center mb-3">
                    <span class="text-primary display-7 fw-normal average_rating">4.89</span>
                    <span class="bi bi-star-fill ms-1 text-primary"></span>
                  </div>
                  <h6 class="fs-7 fw-medium">Tổng <span class="total_reviews">187</span> đánh giá</h6>
                  <p class="fs-7 text-secondary">
                    Tất cả đánh giá đều từ khách hàng chính hãng
                  </p>
                  <span
                    class="badge bg-label-primary rounded-pill p-2 mb-3 mb-sm-0"
                    >+<span class="new_reviews">5</span> tuần này</span
                  >
                  <hr class="d-sm-none" />
                </div>
                <div
                  class="col-sm-7 g-2 text-nowrap d-flex flex-column justify-content-between px-4 gap-3"
                >
                  <div class="d-flex align-items-center gap-3">
                    <small class="text-secondary">5 Sao</small>
                    <div
                      class="progress w-100 rounded-pill"
                      style="height: 10px"
                    >
                      <div
                        class="progress-bar bg-primary"
                        role="progressbar"
                        style="width: 61.5%"
                        aria-valuenow="61.50"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                    <small class="w-px-20 text-end text-secondary five_star_reviews">124</small>
                  </div>
                  <div class="d-flex align-items-center gap-3">
                    <small class="text-secondary">4 Sao</small>
                    <div
                      class="progress w-100 rounded-pill"
                      style="height: 10px"
                    >
                      <div
                        class="progress-bar bg-primary"
                        role="progressbar"
                        style="width: 24%"
                        aria-valuenow="24"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                    <small class="w-px-20 text-end text-secondary four_star_reviews">40</small>
                  </div>
                  <div class="d-flex align-items-center gap-3">
                    <small class="text-secondary">3 Sao</small>
                    <div
                      class="progress w-100 rounded-pill"
                      style="height: 10px"
                    >
                      <div
                        class="progress-bar bg-primary"
                        role="progressbar"
                        style="width: 12%"
                        aria-valuenow="12"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                    <small class="w-px-20 text-end text-secondary three_star_reviews">12</small>
                  </div>
                  <div class="d-flex align-items-center gap-3">
                    <small class="text-secondary">2 Sao</small>
                    <div
                      class="progress w-100 rounded-pill"
                      style="height: 10px"
                    >
                      <div
                        class="progress-bar bg-primary"
                        role="progressbar"
                        style="width: 7%"
                        aria-valuenow="7"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                    <small class="w-px-20 text-end text-secondary two_star_reviews">7</small>
                  </div>
                  <div class="d-flex align-items-center gap-3">
                    <small class="text-secondary">1 Sao</small>
                    <div
                      class="progress w-100 rounded-pill"
                      style="height: 10px"
                    >
                      <div
                        class="progress-bar bg-primary"
                        role="progressbar"
                        style="width: 2%"
                        aria-valuenow="2"
                        aria-valuemin="0"
                        aria-valuemax="100"
                      ></div>
                    </div>
                    <small class="w-px-20 text-end text-secondary one_star_reviews">2</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body pt-4">
                <!-- Table with stripped rows -->
                <table class="table datatable">
                  <thead>
                    <tr>
                      <th>Sản phẩm</th>
                      <th>Người đánh giá</th>
                      <th>Đánh giá</th>
                      <th>Ngày</th>
                      <!-- <th>Trạng thái</th> -->
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <!-- <tr>
                      <td>
                        <div
                          class="d-flex justify-content-start align-items-center customer-name"
                        >
                          <div class="avatar-wrapper">
                            <div
                              class="avatar me-3 rounded-2 bg-label-secondary"
                            >
                              <img
                                src="./assets/img/logo.png"
                                alt="Product-15"
                                class="rounded-2"
                              />
                            </div>
                          </div>
                          <div class="d-flex flex-column">
                            <span class="text-nowrap text-heading fw-medium"
                              >Apple iPad</span
                            >
                            <small class="fs-8 text-secondary">10.2-inch Retina Display, 64GB</small>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div
                          class="d-flex justify-content-start align-items-center customer-name" style="padding-right: 24px; margin: auto;"
                        >
                          <div class="avatar-wrapper me-3">
                            <div class="avatar avatar-sm">
                              <img
                                src="./assets/img/news-1.jpg"
                                alt="Avatar"
                                class="rounded-circle"
                              />
                            </div>
                          </div>
                          <div class="d-flex flex-column">
                            <a
                              href="app-ecommerce-customer-details-overview.php"
                            >
                              <span class="fw-medium">Jabez Heggs</span>
                            </a>
                            <small class="text-nowrap fs-8 text-secondary">jheggse@nba.com</small>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="col gap-3 mb-2">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </div>
                        <h6 class="mb-1 text-truncate text-capitalize fw-medium">ac consequat</h6>
                        <small style="width: 500px;" class="d-block text-break pe-3 fs-8 text-secondary">Curabitur at ipsum ac tellus semper interdum. Mauris ullamcorper purus sit amet nulla. Quisque arcu libero, rutrum ac, lobortis vel, dapibus at, diam.</small>
                      </td>
                      <td>
                        <span class="text-nowrap text-secondary">Apr 21, 2020</span>
                      </td>
                      <td>
                        <span class="badge rounded-pill bg-label-success">Published</span>
                      </td>
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
                            <a href="javascript:0;" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#viewReview"
                              >View</a
                            >
                            <a href="javascript:0;" class="dropdown-item"
                              >Suspend</a
                            >
                          </div>
                        </div>
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
    
    

    <a
      href="#"
      class="back-to-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    <div class="modal fade" id="viewReview" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="viewReview">Chi tiết đánh <span class="product-name"></span></h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <table class="table">
                <tbody>
                    <tr>
                        <td class="text-secondary">Sản phẩm:</td> 
                        <td>
                            <div class="d-flex justify-content-start align-items-center customer-name">
                                <div class="avatar-wrapper">
                                    <div class="avatar me-3 rounded-2 bg-label-secondary">
                                        <img src="./assets/img/card.jpg" alt="Product-15" class="rounded-2 product-image">
                                    </div>
                                </div>
                                <div class="d-flex flex-column">
                                    <span class="text-nowrap text-heading fw-medium product-name">Apple iPad</span>
                                    <small class="text-secondary text-truncate  fs-7 prodcut-description" style="width: 200px;">10.2-inch Retina Display, 64GB</small>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Người đánh giá:</td>
                        <td>
                            <div class="d-flex justify-content-start align-items-center customer-name">
                                <div class="avatar-wrapper me-3">
                                    <div class="avatar avatar-sm">
                                        <img src="./assets/img/messages-1.jpg" alt="Avatar" class="rounded-circle user-image">
                                    </div>
                                </div>
                                <div class="d-flex flex-column">
                                    <a href="app-ecommerce-customer-details-overview.php">
                                        <span class="fw-medium user-name">Jabez Heggs</span>
                                    </a>
                                    <small class="text-nowrap text-secondary fs-7 user-phone">jheggse@nba.com</small>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Review:</td>
                        <td>
                            <div class="col gap-3 mb-2 review-rate">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </div>
                            <!-- <h6 class="mb-1 text-truncate text-capitalize fw-medium">ac consequat</h6> -->
                            <small class="text-break pe-3 fs-8 text-secondary review-content">Curabitur at ipsum ac tellus semper interdum. Mauris ullamcorper purus sit amet nulla. Quisque arcu libero, rutrum ac, lobortis vel, dapibus at, diam.</small>
                            <div class="d-flex gap-2 review-image">
                              <img src="./assets/img/product-1.jpg" alt="" class="p-1" style="width: 84px; height: 84px;">
                              <img src="./assets/img/product-1.jpg" alt="" class="p-1" style="width: 84px; height: 84px;">
                              <img src="./assets/img/product-1.jpg" alt="" class="p-1" style="width: 84px; height: 84px;">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Ngày:</td>
                        <td>
                            <span class="text-nowrap text-secondary review-date">Apr 21, 2020</span>
                        </td>
                    </tr>
                    <tr>
                        <td>Phản hồi: </td>
                        <td>
                            <textarea placeholder="Phản hồi đánh giá này" class="form-control review-reply" name="" id="" cols="30" rows="2"></textarea>
                            <input type="text" hidden class="review-id">
                        </td>
                    </tr>
                </tbody>
              </table>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
              <button type="button" class="btn btn-primary handleReply">Xác nhận</button>
            </div>
          </div>
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

    <script src="./assets/js/auth.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
      const showInfoReview = () => {
        $.ajax({
          url: "http://localhost:3000/server/review.php",
          type: "POST",
          data: `action=statistics`,
          success: function(response) {
            const statistics = JSON.parse(response)
            console.log(statistics);
            $('.average_rating').html(Number.parseFloat(statistics.average_rating).toFixed(2));
            $('.total_reviews').html(statistics.total_reviews)
            $('.new_reviews').html(statistics.new_reviews)
            $('.five_star_reviews').html(statistics.five_star_reviews)
            $('.five_star_reviews').parent().find('.progress-bar').width(statistics.five_star_reviews/statistics.total_reviews * 100 + '%')
            $('.four_star_reviews').html(statistics.four_star_reviews)
            $('.four_star_reviews').parent().find('.progress-bar').width(statistics.four_star_reviews/statistics.total_reviews * 100 + '%')
            $('.three_star_reviews').html(statistics.three_star_reviews)
            $('.three_star_reviews').parent().find('.progress-bar').width(statistics.three_star_reviews/statistics.total_reviews * 100 + '%')
            $('.two_star_reviews').html(statistics.two_star_reviews)
            $('.two_star_reviews').parent().find('.progress-bar').width(statistics.two_star_reviews/statistics.total_reviews * 100 + '%')
            $('.one_star_reviews').html(statistics.one_star_reviews)
            $('.one_star_reviews').parent().find('.progress-bar').width(statistics.one_star_reviews/statistics.total_reviews * 100 + '%')
          }
        });
      }
      const showAllReview = () => {
        $.ajax({
          url: "http://localhost:3000/server/review.php",
          type: "POST",
          data: `action=view`,
          success: function(response) {
            const reviews = JSON.parse(response)
            console.log(reviews);
            $('.datatable').DataTable({
              searching: true,
              paging: true,
              data: reviews,
              columns: [{
                data: 'null',
                render: function(data, type, row) {
                  return `
                        <div class="d-flex justify-content-start align-items-center customer-name">
                          <div class="avatar-wrapper">
                            <div class="avatar me-3 rounded-2 bg-label-secondary">
                              <img src="./server/${row.image}" alt="Product-15" class="rounded-2">
                            </div>
                          </div>
                          <div class="d-flex flex-column">
                            <span class="text-nowrap text-heading fw-medium">${row.product_name}</span>
                            <small class="fs-8 text-secondary text-trancate" style="width:300px">${row.description}</small>
                          </div>
                        </div>
                  `
                }
              },
              {
                data: null,
                render: function(data, type, row) {
                  let bg = ['bg-label-info', 'bg-label-primary', 'bg-label-secondary', 'bg-label-danger', 'bg-label-warning', 'bg-label-success']
                  let index = row.id % bg.length
                  return `
                        <div class="d-flex justify-content-start align-items-center customer-name" style="padding-right: 24px; margin: auto;">
                          <div class="avatar-wrapper me-2 ">
                            <div class="avatar avatar-sm">
                              <div class="w-100 h-100 rounded-circle d-flex align-items-center justify-content-center fs-7 ${bg[index]}">
                                ${row.reviewer_name.charAt(0)}
                              </div>
                            </div>
                          </div>
                          <div class="d-flex flex-column">
                            <a href="#">
                              <span class="fw-medium">${row.reviewer_name}</span>
                            </a>
                            <small class="text-nowrap fs-8 text-secondary">${row.phone}</small>
                          </div>
                        </div>
                  `
                }
              },
              {
                data: null,
                render: function(data, type, row) {
                  let starHtml = ''
                  for (let i = 0; i < row.rate; i++) {
                    starHtml += '<i class="bi bi-star-fill text-warning"></i>';
                  }
                  for (let i = 0; i < 5 - row.rate; i++) {
                    starHtml += '<i class="bi bi-star-fill"></i>';
                  }
                  return `
                      <td>
                        <div class="col gap-3 mb-2">
                            ${starHtml}
                        </div>
                        <small style="width: 500px;" class="d-block text-break pe-3 fs-8 text-secondary">${row.content}</small>
                      </td>
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
                  return `
                      <div class="d-flex align-items-sm-center ">
                        <button onclick="showReviewById(${row.id})" class="btn btn-sm btn-icon" data-bs-toggle="modal" data-bs-target="#viewReview">
                          <i class="bi bi-eyeglasses me-2"></i>
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

      const showReviewById = (id) => {
        console.log(id);
        $.ajax({
          url: "http://localhost:3000/server/review.php",
          type: "POST",
          data: `action=view&id=${id}`,
          success: function(response) {
            const review = JSON.parse(response)[0]
            console.log(review);
            $('.product-name').html(review.product_name)
            $('.product-image').attr('src', `./server/${review.image}`)
            $('.prodcut-description').html(review.description)
            $('.user-image').attr('src', `./server/${review.image}`)
            $('.user-name').html(review.reviewer_name)
            $('.user-phone').html(review.phone)
            let starHtml = ''
            for (let i = 0; i < review.rate; i++) {
              starHtml += '<i class="bi bi-star-fill text-warning"></i>';
            }
            for (let i = 0; i < 5 - review.rate; i++) {
              starHtml += '<i class="bi bi-star-fill"></i>';
            }
            $('.review-rate').html(starHtml)
            $('.review-content').html(review.content)
            $('.review-image').empty()


            let images = review.review_images.split(';')
            images.pop()
            images.forEach(function(image) {
              $('.review-image').append(`<img src="./server/${image}" alt="" class="p-1" style="width: 84px; height: 84px;">`)
            })
            $('.review-date').html(review.created_at)
            $('.review-reply').html(review.reply)
            $('.review-id').val(review.id)
          }
        });
      }
      $('.handleReply').on('click', function() {
        var id = $('.review-id').val()
        var reply = $('.review-reply').val()
        $.ajax({
          url: "http://localhost:3000/server/review.php",
          type: "POST",
          data: `action=reply&id=${id}&reply=${reply}`,
          success: function(response) {
            const {status, message} = JSON.parse(response)
            if(status) {
              alert(message)
            }else {
              alert(message)
            }
          }
        });
      })
      showInfoReview()
      showAllReview()
    </script>
  </body>
</html>
