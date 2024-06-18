const filePaths = [
    { path: 'dashboard.php', role: 'admin' },
    { path: 'products-list.php', role: 'admin' },
    { path: 'add-product.php', role: 'admin' },
    { path: 'edit-product.php', role: 'admin' },
    { path: 'category-list.php', role: 'admin' },
    { path: 'manage-review.php', role: 'admin' },
    { path: 'orders-detail.php', role: 'admin' },
    { path: 'orders-list.php', role: 'admin' },
    { path: 'blog-list.php', role: 'admin' },
    { path: 'add-blog.php', role: 'admin' },
    { path: 'edit-blog.php', role: 'admin' },
];
const checkAuth = () => {
    $.ajax({
      url: 'http://localhost:3000/server/auth.php',
      type: 'POST',
      data: {
        action: "checkAuth"
      },
      success: (response) => {
        // console.log(response);
        let {status, message, user} = JSON.parse(response)
        console.log(status, message, user);

        var url = window.location.href;
        var filePath = '';

        // Tìm vị trí của ký tự "/" sau tên miền
        var domainSlashIndex = url.indexOf('/', 8); // 8 là chiều dài của "http://" hoặc "https://"

        if (domainSlashIndex !== -1) {
            // Lấy đường dẫn sau tên miền
            filePath = url.substr(domainSlashIndex + 1);
        }
        console.log(filePath);
        var allowedRoles = filePaths.filter(function(item) {
            return filePath.includes(item.path);
          }).map(function(item) {
            return item.role;
        })[0];
        console.log(allowedRoles);

        if (allowedRoles == 'admin') {
            if(user.role != 'admin') {
                window.location.href = 'index.php';
            }
        }

        if(user.role == 'admin') {
            $('#header .logo').attr('href', 'dashboard.php')
        }else {
            $('#header .logo').attr('href', 'index.php')
        }

        localStorage.setItem('userId', user.id)
        $('.profile-image').attr('src', `./assets/img/user-1.png`)
        $('.profile-name').html(user.username)
      }
    })
}

const showAlert = (type, message) => {
    console.log("alert");
    let alertElment = `  <div class="position-absolute" id="box-alert" style="z-index: 100000000; top:80px; right: 10px">
                            <div class="alert alert-${type}" role="alert">
                                ${message}
                            </div>
                        </div>`
    $('body #box-alert').remove()
    $('body').append(alertElment)
    $(".alert").fadeTo(2000, 500).slideUp(500, function() {
      $(".alert").slideUp(500);
    });
}
const convertToCurrency = (number) => {
    var formatter = new Intl.NumberFormat('vi-VN', {
      style: 'currency',
      currency: 'VND'
    });
    var currencyString = formatter.format(number);
    var currencyWithoutSymbol = currencyString.replace(/đ/g, '');
    return currencyWithoutSymbol;
  }

$(document).on('click', '.sign-out', function() {
    $.ajax({
        url: 'http://localhost:3000/server/auth.php',
        type: 'POST',
        data: {
          action: "logout"
        },
        success: (response) => {
          console.log(response);
          window.location.reload()
        }
      })
})


checkAuth()