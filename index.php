<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="assets/img/favicon.png" rel="icon" />
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />


  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300;400;500;600;700&family=Poppins:ital,wght@0,300;0,600;0,700;1,400;1,500&display=swap" rel="stylesheet">


  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
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
      <div class="section my-4">
        <div class="row">
          <div class="col-lg-3 bg-four pt-4 h-fit">
            <ul class="list-unstyled" id="filter-category">
              <li class="text-heading p-2 fw-bold fs-5">
                Loại
              </li>
            </ul>
            <ul class="list-unstyled" id="filter-branch">
              <li class="text-heading p-2 fw-bold fs-5">
                Thương hiệu
              </li>
            </ul>
            <ul class="list-unstyled">
              <li class="text-heading p-2 fw-bold fs-5">
                Gía
              </li>
              <li>
                <div class="input-group">
                  <input id="fromPrice" type="number" aria-label="Fprice" placeholder="From" class="form-control">
                  <span class="input-group-text">
                    <i class="bi bi-dash-lg"></i>
                  </span>
                  <input id="toPrice" type="number" aria-label="Lprice" placeholder="To" class="form-control">
                </div>
              </li>
              <li>
                <button id="priceButton" type="button" class="w-100 mt-2 btn btn-danger">Lọc</button>
              </li>
            </ul>
            <ul class="list-unstyled">
              <li class="text-heading p-2 fw-bold fs-5">
                Đánh giá
              </li>
              <li id="rate-5">
                <div class="col px-2">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                </div>
              </li>
              <li id="rate-4">
                <div class="col px-2">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star text-warning"></i>
                  <span>Up to</span>
                </div>
              </li>
              <li id="rate-3">
                <div class="col px-2">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star text-warning"></i>
                  <i class="bi bi-star text-warning"></i>
                  <span>Up to</span>
                </div>
              </li>
              <li id="rate-2">
                <div class="col px-2">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star text-warning"></i>
                  <i class="bi bi-star text-warning"></i>
                  <i class="bi bi-star text-warning"></i>
                  <span>Up to</span>
                </div>
              </li>
              <li id="rate-1">
                <div class="col px-2">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star text-warning"></i>
                  <i class="bi bi-star text-warning"></i>
                  <i class="bi bi-star text-warning"></i>
                  <i class="bi bi-star text-warning"></i>
                  <span>Up to</span>
                </div>
              </li>
            </ul>
            <ul class="list-unstyled">
              <li>
                <button id="clearFilterBtn" type="button" class="btn btn-danger w-100">Bỏ lọc tất cả</button>
              </li>
            </ul>

          </div>
          <div class="col-lg-9">
            <!-- <div class="col-lg min-w-200 col-md-3 col-sm-12 p-1">
              <div class="card h-100 mb-0">
                  <div class="card-body pt-1 pb-0">
                      <div class="col-12 badge rounded-pill bg-label-success text-capitalized">
                          <i class="bi bi-check-circle me-1"></i>
                          <span>In stock</span>
                      </div>
                      <div class="col-12 my-1">
                          <img src="./assets/img/lap-7.png" alt="" class="w-100 h-150px">
                          <div class="rate col">
                              <i class="bi bi-star-fill fs-8"></i>
                              <i class="bi bi-star-fill fs-8"></i>
                              <i class="bi bi-star-fill fs-8"></i>
                              <i class="bi bi-star-fill fs-8"></i>
                              <i class="bi bi-star-fill fs-8"></i>
                              <span class="fs-8 text-third">Review (4)</span>
                          </div>
                          <div class="name col font-poppins text-warp text-truncate-3 fs-7">
                              EX DISPLAY : MSI Pro 16 Flex-036AU 15.6 MULTITOUCH All-In-On...
                          </div>
                          <div class="price col mt-2">
                              <small class="fs-6 text-decoration-line-through">$499.00</small>
                              <p class="fw-bold fs-5 mb-0">$499.00</p>
                          </div>
                      </div>
                      
                  </div>
              </div>
            </div> -->
            <div class="row align-items-start flex-wrap filter-product-list">

            </div>
          </div>

        </div>
      </div>
  </main>

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
    // Lấy giá trị từ tham số 'price' trong URL và điền vào các trường input
    const urlParams = new URLSearchParams(window.location.search);
    const priceParam = urlParams.get('price');
    const rateParam = urlParams.get('rate');

    if (rateParam) {
      $(`#${rateParam}`).addClass('bg-five');
    }

    if (priceParam) {
      const [fromPrice, toPrice] = priceParam.split(';');
      $('#fromPrice').val(fromPrice);
      $('#toPrice').val(toPrice);
    }

    // Xử lý sự kiện khi nhấp vào các dòng đánh giá
    $('li[id^="rate"]').click(function() {
      const rate = $(this).attr('id');

      const urlParams = new URLSearchParams(window.location.search);

      if ($(this).hasClass('bg-five')) {
        $(this).removeClass('bg-five')
        urlParams.delete('rate');
        const newUrl = `${window.location.pathname}?${urlParams.toString()}`;
        history.pushState(null, '', newUrl);
      } else {
        // Xóa lớp active của tất cả các dòng đánh giá
        $('li[id^="rate"]').removeClass('bg-five');
        // Thêm lớp active cho dòng được nhấp vào
        $(this).addClass('bg-five');
        urlParams.set('rate', rate);
        const newUrl = `${window.location.pathname}?${urlParams.toString()}`;
        history.pushState(null, '', newUrl);
      }

      filterProduct()
    });

    // Xử lý sự kiện khi nhấp vào nút "Lọc"
    $('#priceButton').click(function() {
      const fromPrice = $('#fromPrice').val();
      const toPrice = $('#toPrice').val();

      // Tạo tham số 'price' từ giá trị nhập vào
      const priceParam = `${fromPrice || ''};${toPrice || ''}`;

      // Cập nhật URL với tham số 'price'
      const urlParams = new URLSearchParams(window.location.search);
      urlParams.set('price', priceParam);

      const newUrl = `${window.location.pathname}?${urlParams.toString()}`;
      history.pushState(null, '', newUrl);
      filterProduct()
    });

    const updateUrlParamsCategory = () => {
      const selectedCategories = [];
      $('input[type="checkbox"][name="category"]:checked').each(function() {
        const categoryId = $(this).attr('id').split('-')[1];
        selectedCategories.push(categoryId);
      });

      const urlParams = new URLSearchParams(window.location.search);
      if (selectedCategories.length > 0) {
        urlParams.set('categories', selectedCategories.join(';'));
      } else {
        urlParams.delete('categories');
      }

      const newUrl = `${window.location.pathname}?${urlParams.toString()}`;
      history.pushState(null, '', newUrl);
      filterProduct()
    };

    const updateUrlParamsBranch = () => {
      const selectedBranch = [];
      $('input[type="checkbox"][name="branch"]:checked').each(function() {
        const branchId = $(this).attr('id').split('-')[1];
        selectedBranch.push(branchId);
      });

      const urlParams = new URLSearchParams(window.location.search);
      if (selectedBranch.length > 0) {
        urlParams.set('branches', selectedBranch.join(';'));
      } else {
        urlParams.delete('branches');
      }

      const newUrl = `${window.location.pathname}?${urlParams.toString()}`;
      history.pushState(null, '', newUrl);
      filterProduct()
    };

    const showCategoryFilter = () => {
      $.ajax({
        url: 'http://localhost:3000/server/category.php',
        type: 'POST',
        data: {
          action: "read"
        },
        success: (response) => {
          console.log(JSON.parse(response));
          let categories = JSON.parse(response);
          categories.forEach((category) => {
            let html = `
              <li>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="category" value="${category.id}" id="category-${category.id}" onclick="updateUrlParamsCategory()">
                    <label class="form-check-label text-black" for="category-${category.id}">
                      ${category.title}
                    </label>
                  </div>
              </li>
            `;
            $('#filter-category').append(html);

            const urlParams = new URLSearchParams(window.location.search);
            const selectedCategories = urlParams.get('categories');
            if (selectedCategories) {
              const selectedIds = selectedCategories.split(';');
              if (selectedIds.includes(category.id.toString())) {
                $(`#category-${category.id}`).prop('checked', true);
              }
            }
          });
          // filterProduct()
        }
      });
    };

    $('#clearFilterBtn').click(function() {
      // Xóa tất cả các tham số trong URL
      const newUrl = window.location.pathname;
      history.pushState(null, '', newUrl);
      // Tải lại trang
      location.reload();
    });

    const showProduct = () => {
      $.ajax({
        url: 'http://localhost:3000/server/product.php',
        type: 'POST',
        data: {
          action: "readandfilter"
        },
        success: (response) => {
          console.log(JSON.parse(response));
          let products = JSON.parse(response)
          products.forEach(product => {
            let label = product.quantity == 0 ? 'bg-label-danger' : 'bg-label-success'
            let text = product.quantity == 0 ? 'Hết hàng' : 'Còn hàng'
            let html = `
                <div class="col-lg-3 min-w-200 col-md-6 col-sm-12 p-1">
                  <div class="card h-100 mb-0">
                      <div class="card-body pt-1 pb-2">
                          <div class="col-12 badge rounded-pill ${label} text-capitalized">
                              <i class="bi bi-check-circle me-1"></i>
                              <span>${text}</span>
                          </div>
                          <div class="col-12 my-1">
                              <img src="./server/${product.image}" alt="" style="width:100%; height:185px; object-fit:cover" class="w-100 h-150px">
                              <div class="rate col">
                                  <i class="bi bi-star-fill text-danger fs-8"></i>
                                  <i class="bi bi-star-fill text-danger fs-8"></i>
                                  <i class="bi bi-star-fill text-danger fs-8"></i>
                                  <i class="bi bi-star-fill text-danger fs-8"></i>
                                  <i class="bi bi-star-fill text-danger fs-8"></i>
                                  <span class="fs-8 text-third">Review (${product.total_reviews})</span>
                              </div>
                              <div class="name col fw-bold  font-poppins text-warp text-truncate-3 fs-7">
                                  ${product.name}
                              </div>
                              <div class="price col mt-2">
                                  <p class="fw-bold fs-5 mb-0">${product.price}<sup>đ</sup></p>
                              </div>
                          </div>
                          
                      </div>
                  </div>
                </div>
            `
            $('.filter-product-list').append(html);
          })
        }
      })
    }

    const filterProduct = () => {
      const urlParams = new URLSearchParams(window.location.search);
      const categoryParams = urlParams.get('categories')?.split(';') || [];
      const branchParams = urlParams.get('branches')?.split(';') || [];
      const price = urlParams.get('price')?.split(';') || []
      const priceFrom = price.length > 0 ? Math.min(...price) : '';
      const priceTo = price.length > 0 ? Math.max(...price) : '';
      const rate = urlParams.get('rate')?.replace('rate-', '');
      
      // var rate = urlParams.get('rate')?.replace('rate-','');
      console.log(categoryParams, branchParams, priceFrom, priceTo, rate);

      var requestData = {
        categories: JSON.stringify(categoryParams),
        branches: JSON.stringify(branchParams),
        priceFrom: priceFrom,
        priceTo: priceTo,
        rate: rate,
        role: 0,
        action: 'readandfilter'
      }

      $.ajax({
        url: "http://localhost:3000/server/product.php",
        type: "POST",
        data: requestData,
        success: (response) => {
          console.log(JSON.parse(response));
          let products = JSON.parse(response)
          $('.filter-product-list').empty()
          products.forEach(product => {
            let label = product.quantity == 0 ? 'bg-label-danger' : 'bg-label-success'
            let text = product.quantity == 0 ? 'Hết hàng' : 'Còn hàng'
            let html = `
                <a href="./about-product.php?id=${product.id}" class="col-lg-3 min-w-200 col-md-6 col-sm-12 p-1">
                  <div class="card h-100 mb-0 position-relative">
                      <div class="card-body pt-1 pb-2">
                          <div class="col-12 my-1">
                              <img src="./server/${product.image}" alt="" style="width:100%; height:185px; object-fit:cover" class="w-100 h-150px">
                              <div class="rate col">
                                  <i class="bi bi-star-fill text-warning fs-8"></i>
                                  <i class="bi bi-star-fill text-warning fs-8"></i>
                                  <i class="bi bi-star-fill text-warning fs-8"></i>
                                  <i class="bi bi-star-fill text-warning fs-8"></i>
                                  <i class="bi bi-star-fill text-warning fs-8"></i>
                                  <span class="fs-8 text-third">Review (${product.total_reviews})</span>
                              </div>
                              <div class="name col font-poppins text-warp text-truncate-3 fs-5 mt-2 ">
                                  ${product.name}
                              </div>
                              <div class="price col mt-2">
                                  <p class="fw-bold fs-6 mb-0">${convertToCurrency(product.price)}</p>
                              </div>
                          </div>
                          
                      </div>
                  </div>
                </a>
            `
            $('.filter-product-list').append(html);
          })
        }
      });
    }

    const getCartById = () => {
      let userId = localStorage.getItem('userId');
      $.ajax({
        url: 'http://localhost:3000/server/cart.php',
        type: 'POST',
        data: `action=read&id=${userId}`,
        success: (response) => {
          console.log(JSON.parse(response));
          let carts = JSON.parse(response)
          $('.total-cart').each(function() {
            $(this).html(carts.length)
          })
        }
      })
    }


    showCategoryFilter()
    filterProduct()
    getCartById()
  </script>
</body>

</html>