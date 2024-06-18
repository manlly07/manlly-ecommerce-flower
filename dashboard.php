<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - NiceAdmin Bootstrap Template</title>
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


</head>

<body>


  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">Flodia</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div>

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
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
        <a class="nav-link " href="dashboard.php">
          <i class="bi bi-grid"></i>
          <span>Trang chủ</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#products-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Sản phẩm</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="products-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
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
      <h1>Trang chủ</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item active"><a href="index.php">Trang chủ</a></li>
          <!-- <li class="breadcrumb-item active">Dashboard</li> -->
        </ol>
      </nav>
    </div>

    <section class="section dashboard">
      <div class="row">


        <div class="col-lg-12">
          <div class="row">


            <div class="col-xxl-6 col-md-6">
              <div class="card info-card sales-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Lọc</h6>
                    </li>

                    <li><a class="dropdown-item sale-today" href="#" onclick="showSale('sale', 'sale', 'today')">Hôm nay</a></li>
                    <li><a class="dropdown-item sale-month" href="#" onclick="showSale('sale', 'sale', 'month')">Trong tháng</a></li>
                    <li><a class="dropdown-item sale-year" href="#" onclick="showSale('sale', 'sale', 'year')">Trong năm</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Doanh số <span class="sale-filter">| Hôm nay</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-cart"></i>
                    </div>
                    <div class="ps-3">
                      <h6 class="total-sale">145</h6> <span>Sản phẩm</span>
                      <!-- <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">Tăng</span> -->
                    </div>
                  </div>
                </div>

              </div>
            </div>


            <div class="col-xxl-6 col-md-6">
              <div class="card info-card revenue-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Lọc</h6>
                    </li>

                    <li><a class="dropdown-item" href="#" onclick="showSale('revenue', 'revenue', 'today')">Hôm nay</a></li>
                    <li><a class="dropdown-item" href="#" onclick="showSale('revenue', 'revenue', 'month')">Trong tháng</a></li>
                    <li><a class="dropdown-item" href="#" onclick="showSale('revenue', 'revenue', 'year')">Trong năm</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Doanh thu <span class="revenue-filter">| Trong tháng</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-currency-dollar"></i>
                    </div>
                    <div class="ps-3">
                      <h6><span class="total-revenue">3,264</span><sup>đ</sup></h6>
                      <!-- <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">tăng</span> -->

                    </div>
                  </div>
                </div>

              </div>
            </div>


            <div class="col-12">
              <div class="card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Lọc</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Trong tháng</a></li>
                    <li><a class="dropdown-item" href="#">Trong năm</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Báo cáo <span>/Trong tháng</span></h5>

                  <!-- Line Chart -->
                  <div id="reportsChart"></div>




                </div>

              </div>
            </div>

            <div class="col-12">
              <div class="card top-selling overflow-auto">

                <!-- <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Lọc</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Hôm nay</a></li>
                    <li><a class="dropdown-item" href="#">Trong tháng</a></li>
                    <li><a class="dropdown-item" href="#">Trong năm</a></li>
                  </ul>
                </div> -->

                <div class="card-body pb-0">
                  <h5 class="card-title">Top doanh số</h5>

                  <table class="table table-borderless">
                    <thead>
                      <tr>
                        <th scope="col">Ảnh</th>
                        <th scope="col">Sản phẩm</th>
                        <th scope="col">Giá</th>
                        <th scope="col">Đã bán</th>
                        <th scope="col">Doanh thu</th>
                      </tr>
                    </thead>
                    <tbody class="tbody">
                      <tr>
                        <th scope="row"><a href="#"><img src="assets/img/product-1.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Ut inventore ipsa voluptas nulla</a></td>
                        <td>$64</td>
                        <td class="fw-bold">124</td>
                        <td>$5,828</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src="assets/img/product-2.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Exercitationem similique doloremque</a></td>
                        <td>$46</td>
                        <td class="fw-bold">98</td>
                        <td>$4,508</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src="assets/img/product-3.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Doloribus nisi exercitationem</a></td>
                        <td>$59</td>
                        <td class="fw-bold">74</td>
                        <td>$4,366</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src="assets/img/product-4.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Officiis quaerat sint rerum error</a></td>
                        <td>$32</td>
                        <td class="fw-bold">63</td>
                        <td>$2,016</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src="assets/img/product-5.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Sit unde debitis delectus repellendus</a></td>
                        <td>$79</td>
                        <td class="fw-bold">41</td>
                        <td>$3,239</td>
                      </tr>
                    </tbody>
                  </table>

                </div>

              </div>
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
    const showSale = (el, action, filter) => {
      $.ajax({
        url: "http://localhost:3000/server/statistics.php",
        type: "POST",
        data: `action=${action}&filter=${filter}`,
        success: function(response) {
          let sale = JSON.parse(response)[0];
          console.log(sale);
          $(`.total-${el}`).html(sale.current_day_units_sold)
          if (filter == 'today') {
            $(`.${el}-filter`).html('| Hôm nay')
          }
          if (filter == 'month') {
            $(`.${el}-filter`).html('| Tháng này')
          }
          if (filter == 'year') {
            $(`.${el}-filter`).html('| Năm nay')
          }
        }
      });
    }
    const showTopProduct = () => {
      $.ajax({
        url: "http://localhost:3000/server/statistics.php",
        type: "POST",
        data: `action=products`,
        success: function(response) {
          console.log(response);
          let products = JSON.parse(response)
          $('.tbody').empty()
          products.forEach(product => {
            let htmls = `
                      <tr>
                        <th scope="row"><a href="#"><img src="./server/${product.image}" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">${product.product_name}</a></td>
                        <td>${convertToCurrency(product.product_price)}</td>
                        <td class="fw-bold">${product.total_quantity_sold}</td>
                        <td>${convertToCurrency(product.product_price * product.total_quantity_sold)}</td>
                      </tr>
            `
            $('.tbody').append(htmls)
          });
        }
      });
    }

    showSale('sale', 'sale', 'today')
    showSale('revenue', 'revenue', 'today')
    showTopProduct()
  </script>
  <script>
    $(document).on("DOMContentLoaded", () => {
      $.ajax({
        url: "http://localhost:3000/server/statistics.php",
        type: "POST",
        data: `action=report`,
        success: function(response) {
          console.log(response);
          let arr = JSON.parse(response)
          console.log(arr);
          // let sale = JSON.parse(response)[0];
          new ApexCharts(document.querySelector("#reportsChart"), {
            series: [{
              name: 'Doanh số',
              data: arr.map(item => item.sale),
            }, {
              name: 'Doanh thu',
              data: arr.map(item => item.revenue)
            }],
            chart: {
              height: 350,
              type: 'area',
              toolbar: {
                show: false
              },
            },
            markers: {
              size: 4
            },
            colors: ['#4154f1', '#2eca6a', '#ff771d'],
            fill: {
              type: "gradient",
              gradient: {
                shadeIntensity: 1,
                opacityFrom: 0.3,
                opacityTo: 0.4,
                stops: [0, 90, 100]
              }
            },
            dataLabels: {
              enabled: false
            },
            stroke: {
              curve: 'smooth',
              width: 2
            },
            xaxis: {
              type: 'month',
              categories: arr.map(item => item.month)
            },
            tooltip: {
              x: {
                format: 'dd/MM/yy HH:mm'
              },
            }
          }).render();
        }
      });
    });
  </script>
</body>

</html>