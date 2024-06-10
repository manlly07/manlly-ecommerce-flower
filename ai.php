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

    <main class="main bg-white" style="min-height: 100vh;">
        <div class="section container-2xxl">
            <div class="d-flex align-items-center justify-content-center">
                <div class="shadow-lg p-3 mb-5 bg-body rounded" style="width: 580px; margin-top: 100px;">
                    <div class="row py-4 mb-4 text-center">
                        <h3 class="fw-bold">Tìm kiếm sản phẩm với AI</h3>
                    </div>
                    <div class="row">
                        <form action="" id="submit-form">
                            <div class="mb-3">
                                <input
                                    type="file"
                                    class="form-control"
                                    name=""
                                    id="imageInput"
                                    placeholder=""
                                />
                            </div>
                            <div class="d-grid gap-2 col-12 mx-auto">
                                <button class="btn btn-primary" type="submit">Tìm kiếm</button>
                            </div>
                        </form>
                    </div>
                    <div class="row">
                        <div class="product-name">
    
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
        const showBlogs = () => {
            $.ajax({
                url: 'http://localhost:3000/server/blog.php',
                type: 'POST',
                data: {
                    action: "read"
                },
                success: (response) => {
                    console.log(JSON.parse(response));
                    let blogs = JSON.parse(response)
                    $('#blog-list').empty();
                    blogs.forEach(blog => {
                        let html = `
                                    <div class="col-md-3 shadow-lg p-3 mb-5 bg-body rounded">
                                        <div class="post-entry">
                                            <div class="media mb-1">
                                                <a href="inner-page.php?id=${blog.id}"><img src="./server/${blog.thumbnail}" alt="Image" class="img-fluid"></a>
                                            </div>
                                            <div class="text">
                                                <h2 class="fs-4 mt-2 text-black"><a href="inner-page.php?id=${blog.id}" style="color: black;">${blog.title}</a></h2>
                                                <div class="meta fs-6 mb-1" style="color: rgba(152, 152, 152, 0.7);">
                                                    <span>${blog.created_at}</span>
                                                </div>
                                                <p>${blog.description}</p>
                                            </div>
                                        </div>
                                    </div>
                                `
                        $('#blog-list').append(html);
                    })
                }
            })
        }

        $('#submit-form').on('submit', async function (e){
            e.preventDefault();
            let formData = new FormData();
            if(!$('input[type=file]')[0].files[0]) {
                return
            }
            console.log($('input[type=file]')[0].files[0])
            formData.append('image', $('input[type=file]')[0].files[0]);
            try {
                const response = await fetch('http://localhost:8080/ai', {
                method: 'POST',
                body: formData,
                });

                const { data } = await response.json();
                console.log(data);
                window.location.href = `index.php?q=${data.top}`
                $('.product-name').html(data)
            } catch (error) {
                console.error(error);
            }
        });

        const getCartById = () => {
            let cart = localStorage.getItem('cart');
            cart = cart ? JSON.parse(cart) : [];
            $('.total-cart').each(function() {
                $(this).html(cart.length)
            })
        }
        showBlogs()
        getCartById()
    </script>
</body>

</html>