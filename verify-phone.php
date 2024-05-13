<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link href="assets/img/favicon.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300;400;500;600;700&family=Poppins:ital,wght@0,300;0,600;0,700;1,400;1,500&display=swap" rel="stylesheet" />

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
    <div class="positive-relative">
        <div class="authentication-wrapper authentication-basic">
            <div class="authentication-inner py-4">

                <!--  Two Steps Verification -->
                <div class="card p-2">
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

        const urlParams = new URLSearchParams(window.location.search);
        const jsonData = {};
        for (const [key, value] of urlParams) {
            jsonData[key] = value;
        }
        const jsonString = JSON.stringify(jsonData);
        console.log(jsonString);
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

        const onSignUp = () => {
            debugger
            onCaptchVerify()

            const appVerify = window.recaptchaVerifier
            console.log(appVerify);
            signInWithPhoneNumber(auth, '+84368366282', appVerify)
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


        const onVerifyCaptcha = () => {
            let code = $('input[name="otp"]').val()

            window.confirmationResult.confirm(code).then((result) => {
                // User signed in successfully.
                console.log("signed in successfully", result);
                const user = result.user;
                // ...
                jsonData['action'] = 'create'

                $.ajax({
                    url: 'http://localhost:3000/server/order.php',
                    type: 'POST',
                    data: jsonData,
                    success: (response) => {
                        console.log(JSON.parse(response));
                        let data = JSON.parse(response)
                        if (data.status) {
                            // window.location.href = `./order-success.php?order_id=${data.order}&date=${getDate()}&total=${total}&method=${shipping_method}`
                        } else {
                            showAlert('danger', data.message)
                        }
                    }
                })



            }).catch((error) => {
                // User couldn't sign in (bad verification code?)
                // ...
                console.log('error verify: ', error);
                showAlert('danger', error.toString())
                return false;
            });
        }

        $('#resend').on('click', () => onSignUp())
        onSignUp()
        //   $('.verify-now').on('click', () => onVerifyCaptcha())
        $('#twoStepsForm').on('submit', (e) => {
            e.preventDefault()
            onVerifyCaptcha()
        })
    </script>


    <script>
        //var urlParams = new URLSearchParams(window.location.search);
        // var userId = urlParams.get('id');
        // if(!userId) {
        //     window.location.href = './page-error.php'
        // }

        // const getUserById = (id) => {
        //     $.ajax({
        //         url: 'http://localhost:3000/server/user.php',
        //         type: 'POST',
        //         data: `action=getbyid&id=${id}`,
        //         success: (response) => {
        //             console.log(JSON.parse(response));
        //             let user = JSON.parse(response)
        //             $('#phone').val(user.phone)
        //             if (!user) {
        //                 window.location.href = './page-error.php'
        //             }
        //             if (user.phone_verify == 1) {
        //                 window.location.href = './filter.php'
        //             }
        //         }
        //     })
        // }

        // const handleResendOtp = () => {
        //     var phone = $('#phone').val()
        //     $.ajax({
        //         url: 'http://localhost:3000/server/auth.php',
        //         type: 'POST',
        //         data: `action=resend&phone=${phone}&id=${userId}`,
        //         success: (response) => {
        //             let {
        //                 status,
        //                 message
        //             } = JSON.parse(response);
        //             if (status) {
        //                 showAlert('success', message)
        //                 window.location.reload()
        //             } else {
        //                 showAlert('danger', message)
        //             }
        //         }
        //     })
        // }

        // $('#twoStepsForm').on('submit', function(e) {
        //     e.preventDefault();
        //     var otp = $('input[name="otp"]').val();
        //     $.ajax({
        //         url: 'http://localhost:3000/server/auth.php',
        //         type: 'POST',
        //         data: `action=verify&otp=${otp}&id=${userId}`,
        //         success: (response) => {
        //             console.log(JSON.parse(response));
        //             let {status, message} = JSON.parse(response);
        //             if (status) {
        //                 showAlert('success', message)
        //                 window.location.reload()
        //             }else {
        //                 showAlert('danger', message)
        //             }
        //         }
        //     })
        // })

        // $('#resend').on('click', handleResendOtp)

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