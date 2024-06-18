<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title>Chi tiết đơn hàng</title>
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
        <span class="d-none d-lg-block">Floda</span>
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

      </ul>
    </nav>

  </header>


  <main class="main bg-white">

    <div class="positive-relative">
      <div class="authentication-wrapper authentication-basic">
        <div class="authentication-inner py-4">

          <div class="card p-2 cardOrderId">
            <!-- Logo -->
            <div class="app-brand justify-content-center mt-5">
              <a href="index.php" class="app-brand-link gap-2">
                <span class="app-brand-logo demo">
                  <span style="color:#9055FD;">
                    <svg width="30" height="24" viewBox="0 0 250 196" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M12.3002 1.25469L56.655 28.6432C59.0349 30.1128 60.4839 32.711 60.4839 35.5089V160.63C60.4839 163.468 58.9941 166.097 56.5603 167.553L12.2055 194.107C8.3836 196.395 3.43136 195.15 1.14435 191.327C0.395485 190.075 0 188.643 0 187.184V8.12039C0 3.66447 3.61061 0.0522461 8.06452 0.0522461C9.56056 0.0522461 11.0271 0.468577 12.3002 1.25469Z" fill="currentColor"></path>
                      <path opacity="0.077704" fill-rule="evenodd" clip-rule="evenodd" d="M0 65.2656L60.4839 99.9629V133.979L0 65.2656Z" fill="black"></path>
                      <path opacity="0.077704" fill-rule="evenodd" clip-rule="evenodd" d="M0 65.2656L60.4839 99.0795V119.859L0 65.2656Z" fill="black"></path>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M237.71 1.22393L193.355 28.5207C190.97 29.9889 189.516 32.5905 189.516 35.3927V160.631C189.516 163.469 191.006 166.098 193.44 167.555L237.794 194.108C241.616 196.396 246.569 195.151 248.856 191.328C249.605 190.076 250 188.644 250 187.185V8.09597C250 3.64006 246.389 0.027832 241.935 0.027832C240.444 0.027832 238.981 0.441882 237.71 1.22393Z" fill="currentColor"></path>
                      <path opacity="0.077704" fill-rule="evenodd" clip-rule="evenodd" d="M250 65.2656L189.516 99.8897V135.006L250 65.2656Z" fill="black"></path>
                      <path opacity="0.077704" fill-rule="evenodd" clip-rule="evenodd" d="M250 65.2656L189.516 99.0497V120.886L250 65.2656Z" fill="black"></path>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M12.2787 1.18923L125 70.3075V136.87L0 65.2465V8.06814C0 3.61223 3.61061 0 8.06452 0C9.552 0 11.0105 0.411583 12.2787 1.18923Z" fill="currentColor"></path>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M12.2787 1.18923L125 70.3075V136.87L0 65.2465V8.06814C0 3.61223 3.61061 0 8.06452 0C9.552 0 11.0105 0.411583 12.2787 1.18923Z" fill="white" fill-opacity="0.15"></path>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M237.721 1.18923L125 70.3075V136.87L250 65.2465V8.06814C250 3.61223 246.389 0 241.935 0C240.448 0 238.99 0.411583 237.721 1.18923Z" fill="currentColor"></path>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M237.721 1.18923L125 70.3075V136.87L250 65.2465V8.06814C250 3.61223 246.389 0 241.935 0C240.448 0 238.99 0.411583 237.721 1.18923Z" fill="white" fill-opacity="0.3"></path>
                    </svg>
                  </span>
                </span>
                <span class="app-brand-text demo fs-3 fw-semibold">Materio</span>
              </a>
            </div>
            <!-- /Logo -->
            <div class="card-body mt-2">
              <h4 class="mb-2">Nhập mã đơn hàng bạn muốn xem</h4>
              <p class="text-start mb-4">
                <!-- Chúng tôi đã gửi một mã xác thực đến điện thoại di động của bạn. Vui lòng nhập mã từ điện thoại vào ô bên dưới. -->
                <!-- <span class="d-block mt-2">******1234</span> -->
              </p>
              <!-- <p class="mb-0">Vui lòng nhập mã bảo mật gồm 6 chữ số của bạn.</p> -->
              <form id="orderCode" class="fv-plugins-bootstrap5 fv-plugins-framework">
                <div class="mb-3 fv-plugins-icon-container">
                  <div class="auth-input-wrapper d-flex align-items-center justify-content-sm-between numeral-mask-wrapper">
                    <input required type="number" name="orderId" class="form-control text-center h-px-50 mx-1 my-2" maxlength="1" autofocus="">

                  </div>

                  <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                </div>
                <button class="sendOtp btn btn-primary d-grid w-100 mb-3 waves-effect waves-light">
                  Gửi mã
                </button>
                <input type="hidden">
              </form>
            </div>
          </div>

          <!--  Two Steps Verification -->
          <div class="card p-2 cardVerify d-none">
            <!-- Logo -->
            <div class="app-brand justify-content-center mt-5">
              <a href="index.php" class="app-brand-link gap-2">
                <span class="app-brand-logo demo">
                  <span style="color:#9055FD;">
                    <svg width="30" height="24" viewBox="0 0 250 196" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M12.3002 1.25469L56.655 28.6432C59.0349 30.1128 60.4839 32.711 60.4839 35.5089V160.63C60.4839 163.468 58.9941 166.097 56.5603 167.553L12.2055 194.107C8.3836 196.395 3.43136 195.15 1.14435 191.327C0.395485 190.075 0 188.643 0 187.184V8.12039C0 3.66447 3.61061 0.0522461 8.06452 0.0522461C9.56056 0.0522461 11.0271 0.468577 12.3002 1.25469Z" fill="currentColor"></path>
                      <path opacity="0.077704" fill-rule="evenodd" clip-rule="evenodd" d="M0 65.2656L60.4839 99.9629V133.979L0 65.2656Z" fill="black"></path>
                      <path opacity="0.077704" fill-rule="evenodd" clip-rule="evenodd" d="M0 65.2656L60.4839 99.0795V119.859L0 65.2656Z" fill="black"></path>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M237.71 1.22393L193.355 28.5207C190.97 29.9889 189.516 32.5905 189.516 35.3927V160.631C189.516 163.469 191.006 166.098 193.44 167.555L237.794 194.108C241.616 196.396 246.569 195.151 248.856 191.328C249.605 190.076 250 188.644 250 187.185V8.09597C250 3.64006 246.389 0.027832 241.935 0.027832C240.444 0.027832 238.981 0.441882 237.71 1.22393Z" fill="currentColor"></path>
                      <path opacity="0.077704" fill-rule="evenodd" clip-rule="evenodd" d="M250 65.2656L189.516 99.8897V135.006L250 65.2656Z" fill="black"></path>
                      <path opacity="0.077704" fill-rule="evenodd" clip-rule="evenodd" d="M250 65.2656L189.516 99.0497V120.886L250 65.2656Z" fill="black"></path>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M12.2787 1.18923L125 70.3075V136.87L0 65.2465V8.06814C0 3.61223 3.61061 0 8.06452 0C9.552 0 11.0105 0.411583 12.2787 1.18923Z" fill="currentColor"></path>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M12.2787 1.18923L125 70.3075V136.87L0 65.2465V8.06814C0 3.61223 3.61061 0 8.06452 0C9.552 0 11.0105 0.411583 12.2787 1.18923Z" fill="white" fill-opacity="0.15"></path>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M237.721 1.18923L125 70.3075V136.87L250 65.2465V8.06814C250 3.61223 246.389 0 241.935 0C240.448 0 238.99 0.411583 237.721 1.18923Z" fill="currentColor"></path>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M237.721 1.18923L125 70.3075V136.87L250 65.2465V8.06814C250 3.61223 246.389 0 241.935 0C240.448 0 238.99 0.411583 237.721 1.18923Z" fill="white" fill-opacity="0.3"></path>
                    </svg>
                  </span>
                </span>
                <span class="app-brand-text demo fs-3 fw-semibold">Materio</span>
              </a>
            </div>
            <!-- /Logo -->
            <div class="card-body mt-2">
              <h4 class="mb-2">Xác thực số điện thoại 💬</h4>
              <p class="text-start mb-4">
                Chúng tôi đã gửi một mã xác thực đến điện thoại di động của bạn. Vui lòng nhập mã từ điện thoại vào ô bên dưới.
                <!-- <span class="d-block mt-2">******1234</span> -->
              </p>
              <p class="mb-0">Vui lòng nhập mã bảo mật gồm 6 chữ số của bạn.</p>
              <form id="twoStepsForm" class="fv-plugins-bootstrap5 fv-plugins-framework">
                <div class="mb-3 fv-plugins-icon-container">
                  <div class="auth-input-wrapper d-flex align-items-center justify-content-sm-between numeral-mask-wrapper">
                    <input required type="tel" class="form-control auth-input text-center numeral-mask h-px-50 mx-1 my-2" maxlength="1" autofocus="">
                    <input required type="tel" class="form-control auth-input text-center numeral-mask h-px-50 mx-1 my-2" maxlength="1">
                    <input required type="tel" class="form-control auth-input text-center numeral-mask h-px-50 mx-1 my-2" maxlength="1">
                    <input required type="tel" class="form-control auth-input text-center numeral-mask h-px-50 mx-1 my-2" maxlength="1">
                    <input required type="tel" class="form-control auth-input text-center numeral-mask h-px-50 mx-1 my-2" maxlength="1">
                    <input required type="tel" class="form-control auth-input text-center numeral-mask h-px-50 mx-1 my-2" maxlength="1">
                  </div>
                  <!-- Create a hidden field which is combined by 3 fields above -->
                  <input type="hidden" name="otp">
                  <input type="number" id="phone" hidden>
                  <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                </div>
                <button class="verify-now btn btn-primary d-grid w-100 mb-3 waves-effect waves-light">
                  Xác thực tài khoản
                </button>
                <div class="text-center">Chưa nhận được mã?
                  <a id="resend" href="javascript:void(0);">
                    Gửi lại
                  </a>
                </div>
                <input type="hidden">
              </form>
            </div>
          </div>
          <!-- / Two Steps Verification -->
          <img src="./assets/img/tree-3.png" alt="auth-tree" class="authentication-image-object-left d-none d-lg-block">
          <img src="../../assets/img/auth-basic-mask-light.png" class="authentication-image d-none d-lg-block" alt="triangle-bg" data-app-light-img="auth-basic-mask-light.png" data-app-dark-img="auth-basic-mask-dark.png">
          <img src="../../assets/img/tree.png" alt="auth-tree" class="authentication-image-object-right d-none d-lg-block">

          <div id="sign-in-button"></div>

        </div>
      </div>
    </div>

    <div class="section container-2xxl d-none">
        <section class="section pt-4">
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body pt-4 d-flex justify-content-between">
                  <div class="d-flex flex-column justify-content-center">
                    <div class="d-flex">
                      <h5 class="mb-0">Đơn hàng #<span class="orderId">32543</span></h5>
                      <span class="badge mx-2 rounded-pill statusOrder">Paid</span>
                    </div>
                    <p class="mt-1 mb-0 text-secondary"><span id="orderDate"></span></p>
                  </div>
                  <div class="d-flex align-content-center flex-wrap gap-2">
                    <button class="btn btn-outline-danger fw-medium dropdown-toggle btn-update" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                      Cập nhật trạng thái
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" id="handleUpdate"  href="#">Hủy đơn hàng</a></li>
                      </ul>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-lg-8">
              <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                  <h5 class="card-title m-0">Đơn hàng chi tiết</h5>
                  <!-- <h6 class="m-0"><a href=" javascript:void(0)">Edit</a></h6> -->
                </div>
                <div class="card-body">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col" colspan="2">Products</th>
                        <th scope="col">Price</th>
                        <th scope="col">Qty</th>
                        <th scope="col">Total</th>
                      </tr>
                    </thead>
                    <tbody class="tableProduct">   
                      
                    </tbody>
                  </table>
                  <div class="d-flex justify-content-end align-items-center m-3 p-1">
                    <div class="col-4">
                      <div class="d-flex justify-content-between mb-2">
                        <span class="w-px-100">Tạm tính:</span>
                        <h6 class="mb-0 fw-medium total">$5000.25</h6>
                      </div>
                      <div class="d-flex justify-content-between mb-2">
                        <span class="w-px-100">Giảm giá:</span>
                        <h6 class="mb-0 fw-medium">00.00<sup>đ</sup></h6>
                      </div>
                      <div class="d-flex justify-content-between mb-2">
                        <span class="w-px-100">Thuế:</span>
                        <h6 class="mb-0 fw-medium">00.00<sup>đ</sup></h6>
                      </div>
                      <div class="d-flex justify-content-between">
                        <h6 class="w-px-100 mb-0 fw-medium">Tổng:</h6>
                        <h6 class="mb-0 fw-medium total">5100.25</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-4">
              <div class="card mb-4">
                <div class="card-body">
                  <h6 class="card-title mb-4">Thông tin chi tiết</h6>
                  <div class="d-flex justify-content-start align-items-center mb-4">
                    <div class="avatar me-2 pe-1">
                      <img src="./assets/img/news-2.jpg" alt="Avatar" class="rounded-circle">
                    </div>
                    <div class="d-flex flex-column">
                      <a href="#">
                        <h6 class="mb-1 fw-bolder text-black userName">Shamus Tuttle</h6>
                      </a>
                      <!-- <small class="text-secondary">Mã khách hàng: #<span class="userId"></span></small> -->
                    </div>
                  </div>
                  <div class="d-flex justify-content-start align-items-center mb-4">
                    <span class="avatar rounded-circle bg-label-success me-2 d-flex align-items-center justify-content-center"><i class="bi bi-cart-plus"></i></span>
                    <h6 class="text-nowrap mb-0 fw-medium"><span class="totalOrder"></span> Đơn hàng</h6>
                  </div>
                  <div class="d-flex justify-content-between align-items-center">
                    <h6 class="mb-2 fw-medium">Contact info</h6>  
                  </div>
                  <!-- <p class=" mb-1 text-secondary">Email: <span class="userGmail"></span></p> -->
                  <p class=" mb-0 text-secondary">Số diện thoại: <span class="userPhone"></span></p>
                  <div class="d-flex justify-content-between align-items-center mt-3">
                    <h6 class="mb-2 fw-medium">Địa chỉ đặt hàng</h6>
                  </div>
                  <p class="mb-0 province"></p>
                  <p class="mb-0 district"></p>
                  <p class="mb-0 address"></p>
                </div>
              </div>
            </div>
          </div>
    
        </section>
    </div>

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
  <script src="assets/js/main.js"></script>

  <script src="./assets/js/auth.js"></script>

  <script type="module">
    // Import the functions you need from the SDKs you need
    import {
      initializeApp
    } from "https://www.gstatic.com/firebasejs/10.11.0/firebase-app.js";
    import {
      getAnalytics
    } from "https://www.gstatic.com/firebasejs/10.11.0/firebase-analytics.js";

    // // Add Firebase products that you want to use
    import {
      getAuth,
      RecaptchaVerifier,
      signInWithPhoneNumber
    } from 'https://www.gstatic.com/firebasejs/10.11.0/firebase-auth.js'
    // import { getFirestore } from 'https://www.gstatic.com/firebasejs/10.9.0/firebase-firestore.js'

    const firebaseConfig = {
      apiKey: "AIzaSyBCfTlrzaicTBPtgWmliILfmivM8YV0uXc",
      authDomain: "manlly.firebaseapp.com",
      projectId: "manlly",
      storageBucket: "manlly.appspot.com",
      messagingSenderId: "496516597171",
      appId: "1:496516597171:web:a4b4c84b69d2af73f5b7c6",
      measurementId: "G-054FP3C2CP"
    };

    // const urlParams = new URLSearchParams(window.location.search);
    // const id = urlParams.get('id');
    // console.log(id);
    // if(!id) {
    //   history.back()
    // }
    let id = null;
    let res = null;
    // Initialize Firebase
    const app = initializeApp(firebaseConfig);
    const analytics = getAnalytics(app);
    const auth = getAuth(app)
    const onCaptchVerify = () => {
      if (!window.recaptchaVerifier) {
        window.recaptchaVerifier = new RecaptchaVerifier(auth, 'sign-in-button', {
          'size': 'invisible',
          'callback': (response) => {
            debugger
            // reCAPTCHA solved, allow signInWithPhoneNumber.
            console.log('recaptcha resolved');
            onSignUp()
          },
          'expired-callback': () => {
            // Response expired. Ask user to solve reCAPTCHA again.
            // ...
            console.log('recaptcha expired');
            reCAPTCHA();
          }
        });
      }
    }

    const onSignUp = (phone) => {
      if(!phone) return
      phone = phone.replace(/^0/, '+84');
      // rest of the code

      debugger
      onCaptchVerify()

      const appVerify = window.recaptchaVerifier
      console.log(appVerify);
      signInWithPhoneNumber(auth, phone, appVerify)
        .then((confirmationResult) => {
          // SMS sent. Prompt user to type the code from the message, then sign the
          // user in with confirmationResult.confirm(code).
          window.confirmationResult = confirmationResult;
          // ...
        }).catch((error) => {
          // Error; SMS not sent
          console.log('sms not sent', error);
          // ...
        });
    }

    const reCAPTCHA = () => {
      window.recaptchaVerifier = new RecaptchaVerifier(auth, 'sign-in-button', {
        'size': 'invisible',
        'callback': (response) => {
          debugger
          // reCAPTCHA solved, allow signInWithPhoneNumber.
          console.log('recaptcha resolved');
        },
        'expired-callback': () => {
          // Response expired. Ask user to solve reCAPTCHA again.
          // ...
          console.log('recaptcha expired');
        }
      });
    }

    const appendData = (data) => {
          $('.orderId').html(data.id);
          $('#orderDate').html(data.order_date);
          let label = ''
          let text = ''
          if (data.status == 'pending') {
            label = 'bg-label-warning'
            text = 'Đang chờ'
          }
          if (data.status == 'processing') {
            label = 'bg-label-info'
            text = 'Đang xử lý'
          }
          if (data.status == 'shipped') {
            label = 'bg-label-primary'
            text = 'Đã vận chuyển'
          }
          if (data.status == 'delivered') {
            label = 'bg-label-success'
            text = 'Đã nhận hàng'
            $('.btn-update').remove()
          }
          if (data.status == 'cancelled') {
            label = 'bg-label-danger'
            text = 'Đã hủy đơn'
            $('.btn-update').remove()
          }
          $('.statusOrder').removeClass(function(index, className) {
            console.log(className);
            return (className.match(/\bbg-label\S+/g) || []).join(' ');
          }).addClass(label).html(text);
          let html = "";
          console.log(data.details);
          $('.tableProduct').empty();
          data.details.forEach(function(item, index) {
            html += `<tr>
                            <th scope="row">${index + 1}</th>
                            <td colspan="2">
                                <div class="d-flex justify-content-start align-items-center product-name"><div class="avatar-wrapper me-3"><div class="avatar rounded-2 bg-label-secondary"><img src="./server/${item.image}" alt="product-Wooden Chair" class="rounded-2"></div></div><div class="d-flex flex-column"><span class="text-nowrap text-heading fw-medium">${item.name}</span><small class="text-truncate d-none d-sm-block">Material: Wooden</small></div></div>
                            </td>
                            <td>${convertToCurrency(item.price)}</td>
                            <td>${item.quantity}</td>
                            <td>${convertToCurrency(item.price * item.quantity)}</td>
                          </tr>
                          `;
          })
          $('.tableProduct').append(html);
          $('.userName').html(`${data.firstname} ${data.lastname}`);
          // $('.userId').html(data.user_id);
          $('.totalOrder').html(data.details.length);
          // $('.userGmail').html(data.email);
          $('.userPhone').html(data.phone);
          $('.province').html(`Thành Phố: ${data.province}`)
          $('.district').html(`Quận: ${data.district}`)
          $('.address').html(`Địa chỉ: ${data.address}`);
          $('.total').html(convertToCurrency(data.total));
    }

    const onVerifyCaptcha = () => {
      let code = $('input[name="otp"]').val()
      console.log(code);
      window.confirmationResult.confirm(code).then((result) => {
        // User signed in successfully.
        console.log("signed in successfully", result);
        const user = result.user;
        // ...
        $('#cardVerify').addClass('d-none')
        $('.positive-relative').remove()
        $('.container-2xxl').removeClass('d-none')
        appendData(res)

      }).catch((error) => {
        // User couldn't sign in (bad verification code?)
        // ...
        console.log('error verify: ', error);
        showAlert('danger', error.toString())
        return false;
      });
    }

    const showOrderDetail = () => {
      $.ajax({
        url: "http://localhost:3000/server/order.php",
        type: "POST",
        data: {
          action: "getOrderById",
          id: id,
        },
        success: function(response) {
          const data = JSON.parse(response);
          res = data
          console.log(data);
          console.log(res);
          onSignUp(res.phone)
        }
      });
    }
    
    const handleUpdateStatus = (status) => {
      console.log(status);
      $.ajax({
        url: "http://localhost:3000/server/order.php",
        type: "POST",
        data: {
          action: "updateStatus",
          id: id,
          status: status
        },
        success: function(response) {
          console.log(response);
          let {
            status,
            message
          } = JSON.parse(response)
          if (status) {
            showAlert('success', message)
            //showOrderDetail()
            $('.btn-update').remove()
          } else {
            showAlert('danger', message)
          }
        }
      })
    }

    $(document).on('click', '#handleUpdate', () => handleUpdateStatus('cancelled'))

    $('#resend').on('click', () => onSignUp(res.phone))
    // onSignUp()
    //   $('.verify-now').on('click', () => onVerifyCaptcha())
    
    $('#twoStepsForm').on('submit', (e) => {
      e.preventDefault()
      onVerifyCaptcha()
    })

    $('#orderCode').on('submit', (e) => {
      e.preventDefault()
      id = $('input[name="orderId"]').val()
      console.log(id);

      if (id) {
        $('.cardOrderId').addClass('d-none')
        $('.cardVerify').removeClass('d-none')

        showOrderDetail()
      }
    })
  </script>

  <script>
    // const showOrderDetail = () => {
    //   $.ajax({
    //     url: "http://localhost:3000/server/order.php",
    //     type: "POST",
    //     data: {
    //       action: "getOrderById",
    //       id: id,
    //     },
    //     success: function(response) {
    //       const data = JSON.parse(response);
    //       console.log(data);
    //       $('.orderId').html(data.id);
    //       $('#orderDate').html(data.order_date);
    //       let label = ''
    //       let text = ''
    //       if (data.status == 'pending') {
    //         label = 'bg-label-warning'
    //         text = 'Đang chờ'
    //       }
    //       if (data.status == 'processing') {
    //         label = 'bg-label-info'
    //         text = 'Đang xử lý'
    //       }
    //       if (data.status == 'shipped') {
    //         label = 'bg-label-primary'
    //         text = 'Đã vận chuyển'
    //       }
    //       if (data.status == 'delivered') {
    //         label = 'bg-label-success'
    //         text = 'Đã nhận hàng'
    //         $('.btn-update').remove()
    //       }
    //       if (data.status == 'cancelled') {
    //         label = 'bg-label-danger'
    //         text = 'Đã hủy đơn'
    //         $('.btn-update').remove()
    //       }
    //       $('.statusOrder').removeClass(function(index, className) {
    //         console.log(className);
    //         return (className.match(/\bbg-label\S+/g) || []).join(' ');
    //       }).addClass(label).html(text);
    //       let html = "";
    //       console.log(data.details);
    //       $('.tableProduct').empty();
    //       data.details.forEach(function(item, index) {
    //         html += `<tr>
    //                         <th scope="row">${index + 1}</th>
    //                         <td colspan="2">
    //                             <div class="d-flex justify-content-start align-items-center product-name"><div class="avatar-wrapper me-3"><div class="avatar rounded-2 bg-label-secondary"><img src="./server/${item.image}" alt="product-Wooden Chair" class="rounded-2"></div></div><div class="d-flex flex-column"><span class="text-nowrap text-heading fw-medium">${item.name}</span><small class="text-truncate d-none d-sm-block">Material: Wooden</small></div></div>
    //                         </td>
    //                         <td>${convertToCurrency(item.price)}</td>
    //                         <td>${item.quantity}</td>
    //                         <td>${convertToCurrency(item.price * item.quantity)}</td>
    //                       </tr>
    //                       `;
    //       })
    //       $('.tableProduct').append(html);
    //       $('.userName').html(`${data.firstname} ${data.lastname}`);
    //       // $('.userId').html(data.user_id);
    //       $('.totalOrder').html(data.details.length);
    //       // $('.userGmail').html(data.email);
    //       $('.userPhone').html(data.phone);
    //       $('.province').html(`Thành Phố: ${data.province}`)
    //       $('.district').html(`Quận: ${data.district}`)
    //       $('.address').html(`Địa chỉ: ${data.address}`);
    //       $('.total').html(convertToCurrency(data.total));
    //     }
    //   });
    // }
    // const handleUpdateStatus = (status) => {
    //   console.log(status);
    //   $.ajax({
    //     url: "http://localhost:3000/server/order.php",
    //     type: "POST",
    //     data: {
    //       action: "updateStatus",
    //       id: id,
    //       status: status
    //     },
    //     success: function(response) {
    //       console.log(response);
    //       let {
    //         status,
    //         message
    //       } = JSON.parse(response)
    //       if (status) {
    //         showAlert('success', message)
    //         showOrderDetail()
    //       } else {
    //         showAlert('danger', message)
    //       }
    //     }
    //   })
    // }
    // showOrderDetail();
    $(document).ready(function() {
            $('.numeral-mask').on('input', function() {
                if (this.value.length === this.maxLength) {
                    var nextInput = $(this).next('.numeral-mask');
                    if (nextInput.length) {
                        nextInput.focus();
                    }
                }
            });
            $('.numeral-mask').on('focus', function() {
                $(this).select();
            });
            // Lấy form và các ô input
            var form = $('#twoStepsForm');
            var inputFields = form.find('.numeral-mask');

            // Gán sự kiện 'input' cho mỗi ô input
            inputFields.on('input', combineInputValues);

            // Hàm để kết hợp các giá trị trong ô input
            function combineInputValues() {
                var otpValue = '';
                inputFields.each(function() {
                    otpValue += $(this).val();
                });
                form.find('input[name="otp"]').val(otpValue);
                console.log($('input[name="otp"]').val());
            }
            // getUserById(userId)
        });
  </script>

</body>

</html>