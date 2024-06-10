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
          <span class="d-none d-lg-block">Floda</span>
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
        <ul class="d-flex align-items-center gap-4 ">
          <li class="nav-item d-block">
            <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#">
              <span class="d-none d-md-block ps-2 text-truncate">
                HOME
              </span>
            </a>
          </li>

          <li class="nav-item d-block">
            <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#">
              <span class="d-none d-md-block ps-2 text-truncate">
                SHOP
              </span>
            </a>
          </li>

          <li class="nav-item d-block">
            <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#">
              <span class="d-none d-md-block ps-2 text-truncate">
                BLOG
              </span>
            </a>
          </li>

          <li class="nav-item d-block">
            <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#">
              <span class="d-none d-md-block ps-2 text-truncate">
                CONTACT US
              </span>
            </a>
          </li>

        </ul>
      </nav>

      <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">
          <li class="nav-item d-block">
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

        </ul>
      </nav>
    </div>
  </header>

    <main class="main bg-white">
      <div class="section container-2xxl">

        <div class="row mt-5 pt-5">
          <p class="text-center fw-bold fs-4">Giỏ hàng</p>
        </div>
        <div class="row">
            <div class="about-product" id="about-product">
                <div class="row ">
                    <div class="col-lg-12">
                      <div class="card">
                          <div class="card-body">
                            <h5 class="card-title"></h5>
    
                            <!-- Default Table -->
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">Sản phẩm</th>
                                    <th scope="col">Số lượng</th>
                                    <th scope="col">Gía</th>
                                    <th scope="col">Tổng giá</th>
                                    <th scope="col">Xóa</th>
                                </tr>
                                </thead>
                                <tbody id="table-cart">
                                <tr>
                                    <td scope="row">
                                        <div class="d-flex justify-content-start align-items-center">
                                            <div class="avatar-wrapper me-3">
                                            <div style="width: 80px;height: 96px;">
                                                <img src="./assets/img/messages-1.jpg" class="w-100 h-100" alt="Avatar">
                                            </div>
                                            </div>
                                            <div class="d-flex flex-column">
                                            <a href="about-product.php" class="text-truncate">
                                                <span class="text-heading fs-7 fw-medium">Cristine Easom</span>
                                            </a>
                                            </div>
                                        </div>
                                    </td>
                                    <td style="vertical-align:middle">
                                        <div class="form-group" style="width: 84px;">
                                            <input type="number" class="form-control" value="1" min="1">
                                        </div>
                                    </td>
                                    <td style="vertical-align:middle">
                                        <span>19000000</span>
                                        <sup>đ</sup>
                                    </td>
                                    <td class="fw-bold" style="vertical-align:middle">
                                        <span>19000000</span>
                                        <sup>đ</sup>
                                    </td>
                                    <td style="vertical-align:middle">
                                      <a href="javascript:void(0)" class="d-flex align-items-center fw-medium text-secondary"><i class="bi bi-trash fs-3"></i></a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <!-- End Default Table Example -->
                            <div class="d-flex justify-content-between ">
                              <div>

                              </div>
                              <!-- <button class="btn btn-primary ">Cập nhật giỏ hàng</button> -->
                              <a href="./checkout.php" class="btn btn-danger">Thanh toán</a>
                            </div>
                          </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
          <div class="col-5">
            <div class="card p-4">
              <div class="card-title fs-4 fw-semibold">
                Tổng hóa đơn
              </div>
              <div class="card-content">
                <div class="d-flex align-items-center justify-content-between ">
                  <p class="fw-semibold ">
                    Phụ tổng
                  </p>
                  <p class="fw-semibold ">
                    <span class="sub-fee">0</span>
                  </p>
                </div>

                <div class="d-flex align-items-center justify-content-between ">
                  <p class="fw-semibold ">
                    Phí ship
                  </p>
                  <p class="fw-semibold ">
                    <span class="ship-fee">0 </span>
                  </p>
                </div>

                <div class="d-flex align-items-center justify-content-between ">
                  <p class="fw-semibold ">
                    Phụ tổng
                  </p>
                  <p class="fw-semibold text-danger">
                    <span class="total-fee">30</span>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <footer class="bg-black">
      <div class="container-2xxl p-10 text-white">
        <div class="row align-items-end">
          <div class="col-md-6 col-sm-12">
            <h3 class="fw-bold fs-2">Sign Up To Our Newsletter.</h3>
            <p>Be the first to hear about the latest offers.</p>
          </div>
          <div class="col-md-6 col-sm-12">
            <div class="input-group mb-3 gap-1">
              <input
                type="text"
                class="form-control py-2 bg-transparent text-white"
                placeholder="Recipient's email"
                aria-label="Recipient's email"
                aria-describedby="button-addon2"
              />
              <button
                class="btn btn-primary border-0"
                type="button"
                id="button-addon2"
              >
                Subcribe
              </button>
            </div>
          </div>
        </div>
        <div class="row mt-4">
          <ul class="col list-unstyled">
            <li class="fw-bold text-secondary fs-4 mb-4">Information</li>
            <li class="mt-1 font-poppins fs-6">About us</li>
            <li class="mt-1 font-poppins fs-6">About Zip</li>
            <li class="mt-1 font-poppins fs-6">Privacy Policy</li>
            <li class="mt-1 font-poppins fs-6">Search</li>
            <li class="mt-1 font-poppins fs-6">Terms</li>
            <li class="mt-1 font-poppins fs-6">Orders and Returns</li>
            <li class="mt-1 font-poppins fs-6">Contact Us</li>
            <li class="mt-1 font-poppins fs-6">Advanced Search</li>
            <li class="mt-1 font-poppins fs-6">Newsletter Subscription</li>
          </ul>
          <ul class="col list-unstyled">
            <li class="fw-bold text-secondary fs-4 mb-4">PC Parts</li>
            <li class="mt-1 font-poppins fs-6">CPUS</li>
            <li class="mt-1 font-poppins fs-6">Add On Cards</li>
            <li class="mt-1 font-poppins fs-6">Hard Drives (Internal)</li>
            <li class="mt-1 font-poppins fs-6">Graphic Cards</li>
            <li class="mt-1 font-poppins fs-6">Keyboards / Mice</li>
            <li class="mt-1 font-poppins fs-6">
              Cases / Power Supplies / Cooling
            </li>
            <li class="mt-1 font-poppins fs-6">RAM (Memory)</li>
            <li class="mt-1 font-poppins fs-6">Software</li>
            <li class="mt-1 font-poppins fs-6">Speakers / Headsets</li>
            <li class="mt-1 font-poppins fs-6">Motherboards</li>
          </ul>
          <ul class="col list-unstyled">
            <li class="fw-bold text-secondary fs-4 mb-4">Desktop PCs</li>
            <li class="mt-1 font-poppins fs-6">Custom PCs</li>
            <li class="mt-1 font-poppins fs-6">Servers</li>
            <li class="mt-1 font-poppins fs-6">MSI All-In-One PCs</li>
            <li class="mt-1 font-poppins fs-6">HP/Compaq PCs</li>
            <li class="mt-1 font-poppins fs-6">ASUS PCs</li>
            <li class="mt-1 font-poppins fs-6">Tecs PCs</li>
          </ul>
          <ul class="col list-unstyled">
            <li class="fw-bold text-secondary fs-4 mb-4">Laptops</li>
            <li class="mt-1 font-poppins fs-6">Evryday Use Notebooks</li>
            <li class="mt-1 font-poppins fs-6">MSI Workstation Series</li>
            <li class="mt-1 font-poppins fs-6">MSI Prestige Series</li>
            <li class="mt-1 font-poppins fs-6">Tablets and Pads</li>
            <li class="mt-1 font-poppins fs-6">Netbooks</li>
            <li class="mt-1 font-poppins fs-6">Infinity Gaming Notebooks</li>
          </ul>
          <ul class="col list-unstyled">
            <li class="fw-bold text-secondary fs-4 mb-4">Address</li>
            <li class="mt-1 font-poppins fs-6">
              Address: 1234 Street Adress City Address, 1234
            </li>
            <li class="mt-1 font-poppins fs-6">Phones: (00) 1234 5678</li>
            <li class="mt-1 font-poppins fs-6">
              We are open: Monday-Thursday: 9:00 AM - 5:30 PM
            </li>
            <li class="mt-1 font-poppins fs-6">Friday: 9:00 AM - 6:00 PM</li>
            <li class="mt-1 font-poppins fs-6">Saturday: 11:00 AM - 5:00 PM</li>
            <li class="mt-1 font-poppins fs-6">E-mail: shop@email.com</li>
          </ul>
        </div>
      </div>
    </footer>

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
      let totalBill = 0
      const getCartById = () => {
        let cart = JSON.parse(localStorage.getItem('cart')) ?? [];
        console.log(cart);
        $('.total-cart').each(function() {
          $(this).html(cart.length)
        })
        $('#table-cart').empty()
        $.ajax({
          url: 'http://localhost:3000/server/product.php',
          type: 'POST',
          data: `action=getcartbyid&carts=${JSON.stringify(cart)}`,
          success: (response) => {
            console.log(JSON.parse(response));
            let carts = JSON.parse(response)
            let total = 0
            carts.map((cart, index) => {
              total += cart.bought * cart.price
              let htmls = `
                        <tr>
                          <td scope="row">
                              <div class="d-flex justify-content-start align-items-center">
                                  <div class="avatar-wrapper me-3">
                                  <div style="width: 80px;height: 96px;">
                                      <img src="./server/${cart.image}" class="w-100 h-100" alt="Avatar">
                                  </div>
                                  </div>
                                  <div class="d-flex flex-column">
                                  <a href="#id=${cart.sku_id}"></a> 
                                  <a href="about-product.php?id=${cart.product_id}" class="text-truncate">
                                      <span class="text-heading fs-5 fw-medium">${cart.name}</span>
                                  </a>
                                  </div>
                              </div>
                          </td>
                          <td style="vertical-align:middle">
                              <div class="form-group" style="width: 84px;">
                                  <input type="number" class="form-control" value="${cart.bought}" min="1" max="${cart.quantity}" onchange="calculateTotal(this, ${index})">
                              </div>
                          </td>
                          <td style="vertical-align:middle">
                              <span>${convertToCurrency(cart.price)}</span>
                          </td>
                          <td class="fw-bold item-fee" style="vertical-align:middle">
                              <span>${convertToCurrency(cart.bought * cart.price)}</span>
                          </td>
                          <td style="vertical-align:middle">

                              <div onclick="handleDelete(this, ${index})" class="d-flex align-items-center fw-medium text-secondary"><i class="bi bi-trash fs-3"></i></div>
                          </td>
                        </tr>
              `
              $('#table-cart').append(htmls)
            })
            $('.sub-fee').html(convertToCurrency(total))
            $('.ship-fee').html(convertToCurrency(30000))
            $('.total-fee').html(convertToCurrency(total + 30000))
          }
        })
      }
      const handleDelete = (element, index) => {
        console.log('delete', index);
        $(element).closest('tr').remove();

        let carts = JSON.parse(localStorage.getItem('cart')) ?? []
        carts.splice(index, 1);
        localStorage.setItem('cart', JSON.stringify(carts));
      }

      const calculateTotal = (input, index) => {
        debugger
        let carts = JSON.parse(localStorage.getItem('cart')) ?? []

        // Lấy giá trị số lượng từ ô input
        var quantity = input.value;

        // Lấy ô td cuối cùng trong hàng chứa ô input
        var row = input.parentNode.parentNode.parentNode; // Điều chỉnh dựa trên cấu trúc của bảng thực tế

        if(quantity == 0) {
          row.remove();
          carts.splice(index, 1);
          localStorage.setItem('cart', JSON.stringify(carts));
          return
        }

        var totalCell = row.querySelector("td:nth-child(4)");

        // Lấy giá sản phẩm từ ô td giá
        var price = parseFloat(row.querySelector("td:nth-child(3) span").innerText);

        // Tính toán tổng giá mới
        var total = price * quantity;

        // Cập nhật giá trị tổng giá trong ô td cuối cùng
        totalCell.innerHTML = `<span>${total}</span><sup>đ</sup>`;


        // Lấy id sản phẩm từ thuộc tính href của thẻ a trong cùng hàng
        console.log($(input).closest("tr").find("a").attr("href").split("=")[1]);
        var productId = $(input).closest("tr").find("a").attr("href").split("=")[1];
        console.log(productId);
        var data = {
          product_id: productId,
          quantity,
          action: 'updateQuantityInCart'
        }
        $.ajax({
          url: 'http://localhost:3000/server/cart.php',
          type: 'POST',
          data: data,
          success: (response) => {
            debugger
            console.log(JSON.parse(response));
            let {status, message} = JSON.parse(response)
            if (!status) {
              showAlert('danger', message)
              console.log("max", $(input).attr('max'));
              $(input).val($(input).attr('max'))
              carts[index].quantity = parseInt($(input).attr('max'));
              localStorage.setItem('cart', JSON.stringify(carts));
              getCartById()
              return
            }
            carts[index].quantity = quantity;
            localStorage.setItem('cart', JSON.stringify(carts));
            getCartById()
          }
        })
      }
      
      const getDate = () => {
        var currentDate = new Date();

        var day = currentDate.getDate();
        var month = currentDate.getMonth() + 1;
        var year = currentDate.getFullYear();

        var currentTime = day + '/' + month + '/' + year;
        return currentTime
      }
      getCartById()
      
    </script>
  </body>
</html>
