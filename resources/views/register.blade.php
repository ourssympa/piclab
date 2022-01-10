<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from colorlib.com/etc/lf/Login_v18/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 Jan 2022 11:14:17 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <title>Login V18</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="login/images/icons/favicon.ico" />

    <link rel="stylesheet" type="text/css" href="log/vendor/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="log/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="log/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">

    <link rel="stylesheet" type="text/css" href="log/vendor/animate/animate.css">

    <link rel="stylesheet" type="text/css" href="log/vendor/css-hamburgers/hamburgers.min.css">

    <link rel="stylesheet" type="text/css" href="log/vendor/animsition/css/animsition.min.css">

    <link rel="stylesheet" type="text/css" href="log/vendor/select2/select2.min.css">

    <link rel="stylesheet" type="text/css" href="log/vendor/daterangepicker/daterangepicker.css">

    <link rel="stylesheet" type="text/css" href="log/css/util.css">
    <link rel="stylesheet" type="text/css" href="log/css/main.css">
    {{-- <link rel="stylesheet" href="css/app.css"> --}}
    <meta name="robots" content="noindex, follow">
    <script>
        (function(w, d) {
            ! function(e, t, r, a, s) {
                e[r] = e[r] || {}, e[r].executed = [], e.zaraz = {
                    deferred: []
                };
                var n = t.getElementsByTagName("title")[0];
                e[r].c = t.cookie, n && (e[r].t = t.getElementsByTagName("title")[0].text), e[r].w = e.screen.width, e[
                        r].h = e.screen.height, e[r].j = e.innerHeight, e[r].e = e.innerWidth, e[r].l = e.location.href,
                    e[r].r = t.referrer, e[r].k = e.screen.colorDepth, e[r].n = t.characterSet, e[r].o = (new Date)
                    .getTimezoneOffset(), //
                    e[s] = e[s] || [], e.zaraz._preTrack = [], e.zaraz.track = (t, r) => e.zaraz._preTrack.push([t, r]),
                    e[s].push({
                        "zaraz.start": (new Date).getTime()
                    });
                var i = t.getElementsByTagName(a)[0],
                    o = t.createElement(a);
                o.defer = !0, o.src = "https://colorlib.com/cdn-cgi/zaraz/s.js?" + new URLSearchParams(e[r]).toString(),
                    i.parentNode.insertBefore(o, i)
            }(w, d, "zarazData", "script", "dataLayer");
        })(window, document);
    </script>
</head>

<body style="background-color: #666666;">
    <div class="limiter">

        <div class="container-login100 ">
            <div class="wrap-login100">

                <form method="POST" action="{{ route('register') }}" class="login100-form validate-form bg-dark">
                    @csrf
                    <span class="login100-form-title p-b-43 text-white">
                        ENREGISTREMENT:

                    </span>

                    <div class="wrap-input100 validate-input form-control @error('name') is-invalid @enderror"  data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input100" id="name" type="text" name="name" value="{{ old('name') }}"
                            required autocomplete="name">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Nom</span>
                    </div>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <div class="wrap-input100 validate-input form-control @error('email') is-invalid @enderror" data-validate="Valid email is required: ex@abc.xyz">
                        <input class="input100" id="email" type="email" name="email" value="{{ old('email') }}"
                            required autocomplete="email">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Email</span>
                    </div>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <div class="wrap-input100 validate-input form-control @error('password') is-invalid @enderror" data-validate="Password is required">
                        <input class="input100" id="password" type="password"  name="password" required autocomplete="new-password">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Mot de passe</span>
                    </div>
                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror


                    <div class="wrap-input100 validate-input form-control" data-validate="Password is required">
                        <input class="input100" id="password-confirm" type="password" name="password_confirmation"
                            required autocomplete="new-password">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Confirmez Votre Mot de Passe</span>
                    </div>

                    <div class="flex-sb-m w-full p-t-3 p-b-32">

                        <div>
                            <a href="{{ route('login') }}" class="txt1">

                                <p class="text-primary" style="font-weight: bold;font-size: large;"> Connectez vous !!
                                </p>
                            </a>
                        </div>
                    </div>
                    <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn">
                            Enregistrement
                        </button>
                    </div>
                </form>

                <div class="login100-more" style="background-image: url('REG.jpg');">
                    {{-- <div class="col d-flex justify-content-center ">
                        <div class="card justify-content-center " style="width: 18rem; margin-top:40%">
                            <img class="card-img-top" src="down.svg" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text" style="font-weight: bold;font-size: large;">Pour effectuer un
                                    télechargement veuillez vous connecter</p>

                            </div>
                        </div>
                    </div> --}}

                </div>
            </div>
        </div>
    </div>

    <script src="log/vendor/jquery/jquery-3.2.1.min.js"></script>

    <script src="log/vendor/animsition/js/animsition.min.js"></script>

    <script src="log/vendor/bootstrap/js/popper.js"></script>
    <script src="log/vendor/bootstrap/js/bootstrap.min.js"></script>

    <script src="log/vendor/select2/select2.min.js"></script>

    <script src="log/vendor/daterangepicker/moment.min.js"></script>
    <script src="log/vendor/daterangepicker/daterangepicker.js"></script>

    <script src="log/vendor/countdowntime/countdowntime.js"></script>

    <script src="log/js/main.js"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194"
        integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw=="
        data-cf-beacon='{"rayId":"6caffccb1ab772b5","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.12.0","si":100}'
        crossorigin="anonymous"></script>
</body>

<!-- Mirrored from colorlib.com/etc/lf/Login_v18/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 Jan 2022 11:14:38 GMT -->

</html>
