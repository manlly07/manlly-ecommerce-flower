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
        <a href="index.html" class="logo d-flex align-items-center">
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
          <p class="text-center fw-bold fs-4">Thanh toán</p>
        </div>
        <div class="row">
            <div class="details" id="details">
              <div class="row">
                  <div class="col-lg-7">
                      <form action="" id="formAddOrder">
                          <div class="card">
                              <div class="card-body">
                                  <h4 class="card-title fw-bold fs-5">Thông tin liên lạc</h4>
                                  
                                  <div class="row">
                                      <div class="col-lg-6 mb-3">
                                          <label for="firstname" class="form-label">Họ</label>
                                          <input type="text" class="form-control" name="firstname" id="firstname">
                                      </div>
                                      <div class="col-lg-6 mb-3">
                                          <label for="lastname" class="form-label">Tên</label>
                                          <input type="text" class="form-control" name="lastname" id="lastname">
                                      </div>
                                      <div class="col-lg-12 mb-3">
                                          <label for="phone" class="form-label">Số điện thoại</label>
                                          <input type="text" class="form-control" name="phone" id="phone">
                                      </div>
                                      <div class="col-lg-12 mb-3">
                                          <label for="provice" class="form-label">Thành phố</label>
                                          <input type="text" class="form-control" name="provice" id="provice">
                                      </div>
                                      <div class="col-lg-12 mb-3">
                                          <label for="district" class="form-label">Quận</label>
                                          <input type="text" class="form-control" name="district" id="district">
                                      </div>
                                      <div class="col-12 mb-3">
                                          <label for="address" class="form-label">Địa chỉ</label>
                                          <textarea type="text" class="form-control" name="address" id="address"></textarea>
                                      </div>
                                      <div class="col-12 mb-3">
                                          <label for="address" class="form-label">Ghi chú</label>
                                          <textarea type="text" class="form-control" name="note" id="note"></textarea>
                                      </div>
                                      <div class="col-12 mb-3 gap-3  nav nav-tabs nav-tabs-bordered">
                                        <div class="form-check form-switch nav-item">
                                          <input class="form-check-input active" type="radio" id="flexSwitchCheckDefault" value="COD" name="payment-method" checked 
                                          data-bs-toggle="tab"
                                          data-bs-target="#cod"
                                          >
                                          <label class="form-check-label" for="flexSwitchCheckDefault">Thanh toán khi nhận hàng</label>
                                        </div>
                                        <div class="form-check form-switch nav-item">
                                          <input class="form-check-input" type="radio" id="flexSwitchCheckChecked" value="OnlineBanking" name="payment-method"
                                          data-bs-toggle="tab"
                                          data-bs-target="#pay"
                                          >
                                          <label class="form-check-label" for="flexSwitchCheckChecked">Thanh toán chuyển khoản</label>
                                        </div>
                                      </div>
                                      <!-- <div class="tab-content">
                                        <div class="tab-pane fade show active cod" id="cod">
                                          hello
                                        </div>
                                        <div class="tab-pane fade show pay" id="pay">
                                          pay
                                        </div>
                                      </div> -->
                                  </div>
                                  <button class="btn btn-dark w-100 p-3 buy-now ">Đặt hàng</button>
                              </div>
                          </div>
                      </form>
                  </div>
                  <div class="col-lg-5">
                      <div class="card">
                          <div class="card-body">
                              <div class="card-title fw-bold">Chi tiết giỏ hàng</div>
                              <div class="row">
                                  <table class="table">
                                      <tbody id="table-cart-2">
                                        
                                      </tbody>
                                      <tfoot>
                                        <tr>
                                            <td scope="row" class="fw-bold fs-5">
                                                Tổng
                                            </td>
                                            <td><span class="fs-6 fw-bold"><span class="total-bill">0</span></span></td>
                                          </tr>
                                      </tfoot>
                                    </table>
                              </div>
                          </div>
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

    <!-- Modal -->
    <div class="modal fade" id="modalBankingOnline" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <!-- <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Thanh toán chuyển khoản</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div> -->
          <div class="modal-body">
            <div
              class="row justify-content-center align-items-center g-2"
            >
              <div class="col-12">
                <img class="w-100 h-100 qrcode" src="https://img.vietqr.io/image/BIDV-45010005259968-print.png" alt="">
              </div>
              <div class="col-12 fs-5 fw-semibold text-danger text-center">Mã QR thanh toán tự động</div>
              <div class="col-12 fs-6 fw-semibold text-danger text-center mt-0">(Xác nhận tự động thường không quá 3p)</div>
            </div>
            <div class="row mt-4 px-5">
              <div class="col-12 fw-semibold ">
                Số tiền: <span class="totalBanking">2.000.000</span>
              </div>
              <div class="col-12 fw-semibold ">
                Nội dung: <span class="text-warning descriptionBanking">TIME10064</span>
              </div>
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
            <!-- <button type="button" class="btn btn-primary">Understood</button> -->
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
    <script src="assets/js/main.js"></script>

    <script src="./assets/js/auth.js"></script>

    <script>


      var modalBankingOnline = new bootstrap.Modal(document.getElementById('modalBankingOnline'), {
        keyboard: false
      })
      let totalBill = 0
      let MY_BANK = {
        BANK_ID: "MB",
        ACCOUNT_NO: "0982193203"
      }
      let carts = []
      let isSuccess = false
      const getCartById = () => {
        let cart = JSON.parse(localStorage.getItem('cart')) ?? [];
        console.log(cart);
        $('#table-cart-2').empty()
        $.ajax({
          url: 'http://localhost:3000/server/product.php',
          type: 'POST',
          data: `action=getcartbyid&carts=${JSON.stringify(cart)}`,
          success: (response) => {
            console.log(JSON.parse(response));
            carts = JSON.parse(response)
            totalBill = 0
            carts.map((cart, index) => {
              totalBill += cart.bought * cart.price
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
                                        <a href="about-product.php?id=${cart.product_id}" class="text-truncate">
                                          <span class="text-heading fs-6 fw-medium">${name}</span>
                                        </a>
                                        <div class="form-group" style="width: 84px;">
                                          <input type="number" class="form-control" value="${cart.bought}" min="1" disabled readonly>
                                        </div>
                                      </div>
                                    </div>
                              </td>
                              <td class="fw-bold fs-5" style="vertical-align:middle">
                                  <span>${cart.bought * cart.price}</span>
                                  <sup>đ</sup>
                              </td>
                            </tr>
              `
              $('#table-cart-2').append(htmls)
            })
            $('.total-bill').html(convertToCurrency(totalBill))
          }
        })
      }
      const handleDelete = (id) => {
        console.log(id);
        $.ajax({
          url: 'http://localhost:3000/server/cart.php',
          type: 'POST',
          data: `action=delete&id=${id}`,
          success: (response) => {
            console.log(JSON.parse(response));
            let {status, message} = JSON.parse(response)
            if (status) {
              getCartById()
              showAlert('success', message)
            }else {
              showAlert('danger', message)
            }
          }
        })
      }
      const calculateTotal = (input) => {
        // Lấy giá trị số lượng từ ô input
        var quantity = input.value;

        // Lấy ô td cuối cùng trong hàng chứa ô input
        var row = input.parentNode.parentNode.parentNode; // Điều chỉnh dựa trên cấu trúc của bảng thực tế
        var totalCell = row.querySelector("td:last-child");

        // Lấy giá sản phẩm từ ô td giá
        var price = parseFloat(row.querySelector("td:nth-child(3) span").innerText);

        // Tính toán tổng giá mới
        var total = price * quantity;

        // Cập nhật giá trị tổng giá trong ô td cuối cùng
        totalCell.innerHTML = `<span>${total}</span><sup>đ</sup>`;


        // Lấy id sản phẩm từ thuộc tính href của thẻ a trong cùng hàng
        var productId = $(input).closest("tr").find("a").attr("href").split("=")[1];
        console.log(productId);
        var data = {
          user_id: 16,
          product_id: productId,
          quantity,
          action: 'update'
        }
        $.ajax({
          url: 'http://localhost:3000/server/cart.php',
          type: 'POST',
          data: data,
          success: (response) => {
            console.log(JSON.parse(response));
            let {status, message} = JSON.parse(response)
            if (!status) {
              showAlert('danger', message)
            }
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
      const handleOrder = async (dataJson) => {
        $.ajax({
          url: 'http://localhost:3000/server/order.php',
          type: 'POST',
          data: `${dataJson}&carts=${JSON.stringify(carts)}&action=create`,
          success: (response) => {
            console.log(JSON.parse(response));
            let data = JSON.parse(response)
            if (data.status) {
              window.location.href = `./order-success.php?order_id=${data.order}&date=${getDate()}&total=${totalBill}&method=${$('input[name="payment-method"]:checked').val()}`
            }else {
              showAlert('danger', data.message)
            }
          }
        })
      }

      const checkPaid = async (price, content, dataJson) => {
        if(isSuccess) {
          console.log('Đã thanh toán');
          localStorage.removeItem('cart')
          return
        }else {
          try {
            let url = 'https://script.google.com/macros/s/AKfycbxsraxRjr3WZldtB8UVXdpHwKCUVH6g8s72t_Yffjrz8ftJGmTKkhkD62EBqFY6Qm_w/exec'
            const res = await fetch(url);
            const data = await res.json();
            console.log(data);
    
            const lastPaid = data.data[data.data.length - 1];
            const lastPrice = lastPaid['Giá trị']
            const lastContent = lastPaid['Mô tả']
            if(lastPrice >= price && lastContent.includes(content)) {
              await handleOrder(dataJson)
              isSuccess = true
              alert('Thanh toán thành công');
            }else {
              console.log('Chưa thanh toán');
            }
            
          } catch (error) {
            console.log(error);
          }
        }
      }

      // checkPaid()
      $('#formAddOrder').on('submit', function(e) {
        e.preventDefault()
        
        let formData = $(this).serializeArray();
        let data = {};
        formData.forEach(field => {
          data[field.name] = field.value;
        });

        let requiredFields = ['firstname', 'lastname', 'phone', 'provice', 'district', 'address']; // Add the required field names here
        let isValid = true;
        requiredFields.forEach(field => {
          if (!data.hasOwnProperty(field) || data[field] === "") {
            isValid = false;
            return;
          }
        });

        if (!isValid) {
          // Handle the case when required fields are missing or empty
          showAlert('danger','Không được để trống các trường bắt buộc');
          return;
        }
        // Rest of your code
        // debugger

        let dataJson = $(this).serialize()
        console.log(dataJson);
        
        if(dataJson.includes('payment-method=OnlineBanking')){
          console.log('banking');
          modalBankingOnline.show();
          const addInfo = `${data['phone']} ${totalBill}`;
          // const amount = totalBill;
          const amount = 2000;
          
          let qrcode = `https://img.vietqr.io/image/${MY_BANK.BANK_ID}-${MY_BANK.ACCOUNT_NO}-qr_only.png?amount=${amount}&addInfo=${addInfo}`


          console.log(addInfo);
          console.log(amount);

          $('.qrcode').attr('src', qrcode);
          $('.totalBanking').html(convertToCurrency(amount));
          $('.descriptionBanking').html(addInfo)
          
          setInterval(() => {
            checkPaid(amount, addInfo, dataJson)
          }, 5000);
        }
        if(dataJson.includes("payment-method=COD")){
          console.log('cod');
          // window.location.href = `./verify-phone.php?${dataJson}`
        }
        // console.log(payload);
        // $.ajax({
        //   url: 'http://localhost:3000/server/order.php',
        //   type: 'POST',
        //   data: payload,
        //   success: (response) => {
        //     console.log(JSON.parse(response));
        //     let data = JSON.parse(response)
        //     if (data.status) {
        //       window.location.href = `./order-success.php?order_id=${data.order}&date=${getDate()}&total=${total}&method=${shipping_method}`
        //     }else {
        //       showAlert('danger', data.message)
        //     }
        //   }
        // })
      })
      getCartById()
    </script>
  </body>
</html>
