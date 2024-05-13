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
                <span class="d-none d-lg-block">Flodia</span>
              </a>
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
                    <i class="bi bi-bell"></i>
                    <span class="badge bg-primary badge-number">4</span> </a
                  >
      
                  <ul
                    class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications"
                  >
                    <li class="dropdown-header">
                      You have 4 new notifications
                      <a href="#"
                        ><span class="badge rounded-pill bg-primary p-2 ms-2"
                          >View all</span
                        ></a
                      >
                    </li>
                    <li>
                      <hr class="dropdown-divider" />
                    </li>
      
                    <li class="notification-item">
                      <i class="bi bi-exclamation-circle text-warning"></i>
                      <div>
                        <h4>Lorem Ipsum</h4>
                        <p>Quae dolorem earum veritatis oditseno</p>
                        <p>30 min. ago</p>
                      </div>
                    </li>
      
                    <li>
                      <hr class="dropdown-divider" />
                    </li>
      
                    <li class="notification-item">
                      <i class="bi bi-x-circle text-danger"></i>
                      <div>
                        <h4>Atque rerum nesciunt</h4>
                        <p>Quae dolorem earum veritatis oditseno</p>
                        <p>1 hr. ago</p>
                      </div>
                    </li>
      
                    <li>
                      <hr class="dropdown-divider" />
                    </li>
      
                    <li class="notification-item">
                      <i class="bi bi-check-circle text-success"></i>
                      <div>
                        <h4>Sit rerum fuga</h4>
                        <p>Quae dolorem earum veritatis oditseno</p>
                        <p>2 hrs. ago</p>
                      </div>
                    </li>
      
                    <li>
                      <hr class="dropdown-divider" />
                    </li>
      
                    <li class="notification-item">
                      <i class="bi bi-info-circle text-primary"></i>
                      <div>
                        <h4>Dicta reprehenderit</h4>
                        <p>Quae dolorem earum veritatis oditseno</p>
                        <p>4 hrs. ago</p>
                      </div>
                    </li>
      
                    <li>
                      <hr class="dropdown-divider" />
                    </li>
                    <li class="dropdown-footer">
                      <a href="#">Show all notifications</a>
                    </li>
                  </ul>
                  
                </li>
                
      
                <li class="nav-item dropdown">
                  <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                    <i class="bi bi-chat-left-text"></i>
                    <span class="badge bg-success badge-number">3</span> </a
                  >
      
                  <ul
                    class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages"
                  >
                    <li class="dropdown-header">
                      You have 3 new messages
                      <a href="#"
                        ><span class="badge rounded-pill bg-primary p-2 ms-2"
                          >View all</span
                        ></a
                      >
                    </li>
                    <li>
                      <hr class="dropdown-divider" />
                    </li>
      
                    <li class="message-item">
                      <a href="#">
                        <img
                          src="assets/img/messages-1.jpg"
                          alt=""
                          class="rounded-circle"
                        />
                        <div>
                          <h4>Maria Hudson</h4>
                          <p>
                            Velit asperiores et ducimus soluta repudiandae labore
                            officia est ut...
                          </p>
                          <p>4 hrs. ago</p>
                        </div>
                      </a>
                    </li>
                    <li>
                      <hr class="dropdown-divider" />
                    </li>
      
                    <li class="message-item">
                      <a href="#">
                        <img
                          src="assets/img/messages-2.jpg"
                          alt=""
                          class="rounded-circle"
                        />
                        <div>
                          <h4>Anna Nelson</h4>
                          <p>
                            Velit asperiores et ducimus soluta repudiandae labore
                            officia est ut...
                          </p>
                          <p>6 hrs. ago</p>
                        </div>
                      </a>
                    </li>
                    <li>
                      <hr class="dropdown-divider" />
                    </li>
      
                    <li class="message-item">
                      <a href="#">
                        <img
                          src="assets/img/messages-3.jpg"
                          alt=""
                          class="rounded-circle"
                        />
                        <div>
                          <h4>David Muldon</h4>
                          <p>
                            Velit asperiores et ducimus soluta repudiandae labore
                            officia est ut...
                          </p>
                          <p>8 hrs. ago</p>
                        </div>
                      </a>
                    </li>
                    <li>
                      <hr class="dropdown-divider" />
                    </li>
      
                    <li class="dropdown-footer">
                      <a href="#">Show all messages</a>
                    </li>
                  </ul>
                  
                </li>
                
      
                <li class="nav-item dropdown pe-3">
                  <a
                    class="nav-link nav-profile d-flex align-items-center pe-0"
                    href="#"
                    data-bs-toggle="dropdown"
                  >
                    <img
                      src="assets/img/profile-img.jpg"
                      alt="Profile"
                      class="rounded-circle"
                    />
                    <span class="d-none d-md-block dropdown-toggle ps-2"
                      >K. Anderson</span
                    > </a
                  >
      
                  <ul
                    class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile"
                  >
                    <li class="dropdown-header">
                      <h6>Kevin Anderson</h6>
                      <span>Web Designer</span>
                    </li>
                    <li>
                      <hr class="dropdown-divider" />
                    </li>
      
                    <li>
                      <a
                        class="dropdown-item d-flex align-items-center"
                        href="users-profile.html"
                      >
                        <i class="bi bi-person"></i>
                        <span>My Profile</span>
                      </a>
                    </li>
                    <li>
                      <hr class="dropdown-divider" />
                    </li>
      
                    <li>
                      <a
                        class="dropdown-item d-flex align-items-center"
                        href="users-profile.html"
                      >
                        <i class="bi bi-gear"></i>
                        <span>Account Settings</span>
                      </a>
                    </li>
                    <li>
                      <hr class="dropdown-divider" />
                    </li>
      
                    <li>
                      <a
                        class="dropdown-item d-flex align-items-center"
                        href="pages-faq.html"
                      >
                        <i class="bi bi-question-circle"></i>
                        <span>Need Help?</span>
                      </a>
                    </li>
                    <li>
                      <hr class="dropdown-divider" />
                    </li>
      
                    <li>
                      <a class="dropdown-item d-flex align-items-center" href="#">
                        <i class="bi bi-box-arrow-right"></i>
                        <span>Sign Out</span>
                      </a>
                    </li>
                  </ul>
                  
                </li>
                
              </ul>
            </nav>
        </div>
    </header>

    <main class="main">
        <div class="section container-2xxl">
            <div class="row">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="./assets/img/slide-1.png" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="./assets/img/slide-2.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="./assets/img/slide-3.jpg" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12">
                    <div class="card mb-0">
                        <div class="card-body">
                            <h5 class="card-title d-flex align-items-center justify-content-between">
                                <span class="fw-bold fs-5 mb-0 text-black">NEW PRODUCT</span>
                                <a href="#" class="text-decoration-underline">See All New Product</a>
                            </h5>

                            <div class="products-list row">
                                <div class="col-lg-2 col-md-3 col-sm-12 p-1">
                                    <div class="card">
                                        <div class="card-body pt-1 pb-0">
                                            <div class="col-12 badge rounded-pill bg-label-success text-capitalized">
                                                <i class="bi bi-check-circle me-1"></i>
                                                <span>In stock</span>
                                            </div>
                                            <div class="col-12 my-1">
                                                <img src="./assets/img/lap-1.png" alt="" class="w-100 h-150px">
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
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-12 p-1">
                                    <div class="card">
                                        <div class="card-body pt-1 pb-0">
                                            <div class="col-12 badge rounded-pill bg-label-success text-capitalized">
                                                <i class="bi bi-check-circle me-1"></i>
                                                <span>In stock</span>
                                            </div>
                                            <div class="col-12 my-1">
                                                <img src="./assets/img/lap-2.png" alt="" class="w-100 h-150px">
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
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-12 p-1">
                                    <div class="card">
                                        <div class="card-body pt-1 pb-0">
                                            <div class="col-12 badge rounded-pill bg-label-success text-capitalized">
                                                <i class="bi bi-check-circle me-1"></i>
                                                <span>In stock</span>
                                            </div>
                                            <div class="col-12 my-1">
                                                <img src="./assets/img/lap-3.png" alt="" class="w-100 h-150px">
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
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-12 p-1">
                                    <div class="card">
                                        <div class="card-body pt-1 pb-0">
                                            <div class="col-12 badge rounded-pill bg-label-success text-capitalized">
                                                <i class="bi bi-check-circle me-1"></i>
                                                <span>In stock</span>
                                            </div>
                                            <div class="col-12 my-1">
                                                <img src="./assets/img/lap-4.png" alt="" class="w-100 h-150px">
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
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-12 p-1">
                                    <div class="card">
                                        <div class="card-body pt-1 pb-0">
                                            <div class="col-12 badge rounded-pill bg-label-success text-capitalized">
                                                <i class="bi bi-check-circle me-1"></i>
                                                <span>In stock</span>
                                            </div>
                                            <div class="col-12 my-1">
                                                <img src="./assets/img/lap-5.png" alt="" class="w-100 h-150px">
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
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-12 p-1">
                                    <div class="card">
                                        <div class="card-body pt-1 pb-0">
                                            <div class="col-12 badge rounded-pill bg-label-success text-capitalized">
                                                <i class="bi bi-check-circle me-1"></i>
                                                <span>In stock</span>
                                            </div>
                                            <div class="col-12 my-1">
                                                <img src="./assets/img/lap-6.png" alt="" class="w-100 h-150px">
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
                                </div>
                            </div>

                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-0">
                    <img src="./assets/img/banner-4.png" alt="">
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body pt-4">
                            <div class="products-list row">
                                <div class="col-lg-2 col-md-3 col-sm-12 p-1">
                                    <div class="card position-relative h-100 mb-0">
                                        <img src="./assets/img/label-1.png" alt="" class="w-100 h-100">
                                        <div class="position-absolute text-white translate-middle top-50 start-50 text-center fw-bold fs-5">CUSTOMER BUILD</div>
                                        <a href="#" class="banner-link position-absolute text-white start-50 text-center fs-6 text-decoration-underline">See All Product</a>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-12 p-1">
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
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-12 p-1">
                                    <div class="card h-100 mb-0">
                                        <div class="card-body pt-1 pb-0">
                                            <div class="col-12 badge rounded-pill bg-label-success text-capitalized">
                                                <i class="bi bi-check-circle me-1"></i>
                                                <span>In stock</span>
                                            </div>
                                            <div class="col-12 my-1">
                                                <img src="./assets/img/lap-8.png" alt="" class="w-100 h-150px">
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
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-12 p-1">
                                    <div class="card h-100 mb-0">
                                        <div class="card-body pt-1 pb-0">
                                            <div class="col-12 badge rounded-pill bg-label-success text-capitalized">
                                                <i class="bi bi-check-circle me-1"></i>
                                                <span>In stock</span>
                                            </div>
                                            <div class="col-12 my-1">
                                                <img src="./assets/img/lap-9.png" alt="" class="w-100 h-150px">
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
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-12 p-1">
                                    <div class="card h-100 mb-0">
                                        <div class="card-body pt-1 pb-0">
                                            <div class="col-12 badge rounded-pill bg-label-success text-capitalized">
                                                <i class="bi bi-check-circle me-1"></i>
                                                <span>In stock</span>
                                            </div>
                                            <div class="col-12 my-1">
                                                <img src="./assets/img/lap-10.png" alt="" class="w-100 h-150px">
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
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-12 p-1">
                                    <div class="card h-100 mb-0">
                                        <div class="card-body pt-1 pb-0">
                                            <div class="col-12 badge rounded-pill bg-label-success text-capitalized">
                                                <i class="bi bi-check-circle me-1"></i>
                                                <span>In stock</span>
                                            </div>
                                            <div class="col-12 my-1">
                                                <img src="./assets/img/lap-11.png" alt="" class="w-100 h-150px">
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body pt-4">
                            <div class="products-list row">
                                <div class="col-lg-2 col-md-3 col-sm-12 p-1">
                                    <div class="card position-relative h-100 mb-0">
                                        <img src="./assets/img/banner-5.png" alt="" class="w-100 h-100">
                                        <div class="position-absolute text-white translate-middle top-50 start-50 text-center fw-bold fs-5">MSI Laptops</div>
                                        <a href="#" class="banner-link position-absolute text-white start-50 text-center fs-6 text-decoration-underline">See All Product</a>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-12 p-1">
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
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-12 p-1">
                                    <div class="card h-100 mb-0">
                                        <div class="card-body pt-1 pb-0">
                                            <div class="col-12 badge rounded-pill bg-label-success text-capitalized">
                                                <i class="bi bi-check-circle me-1"></i>
                                                <span>In stock</span>
                                            </div>
                                            <div class="col-12 my-1">
                                                <img src="./assets/img/lap-8.png" alt="" class="w-100 h-150px">
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
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-12 p-1">
                                    <div class="card h-100 mb-0">
                                        <div class="card-body pt-1 pb-0">
                                            <div class="col-12 badge rounded-pill bg-label-success text-capitalized">
                                                <i class="bi bi-check-circle me-1"></i>
                                                <span>In stock</span>
                                            </div>
                                            <div class="col-12 my-1">
                                                <img src="./assets/img/lap-9.png" alt="" class="w-100 h-150px">
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
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-12 p-1">
                                    <div class="card h-100 mb-0">
                                        <div class="card-body pt-1 pb-0">
                                            <div class="col-12 badge rounded-pill bg-label-success text-capitalized">
                                                <i class="bi bi-check-circle me-1"></i>
                                                <span>In stock</span>
                                            </div>
                                            <div class="col-12 my-1">
                                                <img src="./assets/img/lap-10.png" alt="" class="w-100 h-150px">
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
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-12 p-1">
                                    <div class="card h-100 mb-0">
                                        <div class="card-body pt-1 pb-0">
                                            <div class="col-12 badge rounded-pill bg-label-success text-capitalized">
                                                <i class="bi bi-check-circle me-1"></i>
                                                <span>In stock</span>
                                            </div>
                                            <div class="col-12 my-1">
                                                <img src="./assets/img/lap-11.png" alt="" class="w-100 h-150px">
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
            </div>

            <div class="row">
                <div class="col">
                    <img src="./assets/img/brand-1.png" alt="">
                </div>
                <div class="col">
                    <img src="./assets/img/brand-2.png" alt="">
                </div>
                <div class="col">
                    <img src="./assets/img/brand-3.png" alt="">
                </div>
                <div class="col">
                    <img src="./assets/img/brand-4.png" alt="">
                </div>
                <div class="col">
                    <img src="./assets/img/brand-5.png" alt="">
                </div>
                <div class="col">
                    <img src="./assets/img/brand-6.png" alt="">
                </div>
                <div class="col">
                    <img src="./assets/img/brand-7.png" alt="">
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
                        <input type="text" class=" form-control py-2 bg-transparent text-white" placeholder="Recipient's email" aria-label="Recipient's email" aria-describedby="button-addon2">
                        <button class="btn btn-primary border-0" type="button" id="button-addon2">Subcribe</button>
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
                    <li class="mt-1 font-poppins fs-6">Cases / Power Supplies / Cooling</li>
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
                    <li class="mt-1 font-poppins fs-6">Address: 1234 Street Adress City Address, 1234</li>
                    <li class="mt-1 font-poppins fs-6">Phones: (00) 1234 5678</li>
                    <li class="mt-1 font-poppins fs-6">We are open: Monday-Thursday: 9:00 AM - 5:30 PM</li>
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
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <script src="assets/js/main.js"></script>
</body>
</html>