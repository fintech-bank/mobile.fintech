<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport"
          content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#000000">
    <title>{{ config('app.name') }}</title>
    <meta name="description" content="Finapp HTML Mobile Template">
    <meta name="keywords" content="bootstrap, wallet, banking, fintech mobile template, cordova, phonegap, mobile, html, responsive" />
    <link rel="icon" type="image/png" href="/assets/img/favicon.png" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/img/icon/192x192.png">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="manifest" href="/__manifest.json">
</head>

<body>

<!-- loader -->
<div id="loader">
    <img src="/assets/img/loading-icon.png" alt="icon" class="loading-icon">
</div>
<!-- * loader -->

<!-- App Header -->
<div class="appHeader no-border transparent position-absolute">
    <div class="left">
        <a href="#" class="headerButton goBack">
            <ion-icon name="chevron-back-outline"></ion-icon>
        </a>
    </div>
    <div class="pageTitle"></div>
    <div class="right">
    </div>
</div>
<!-- * App Header -->

<!-- App Capsule -->
<div id="appCapsule">

    <div class="section mt-2 mb-5 text-center">
        <img src="/assets/img/logo/logo_long_color.png" style="width: 150px" alt="{{ config('app.name') }}"/>
        <h1>Connexion</h1>
    </div>
    <div class="section mb-5 p-2">

        <form action="{{ route('login') }}" method="POST">
            @if($errors->has('email'))
                <div class="alert alert-imaged alert-danger alert-dismissible fade show mb-2" role="alert">
                    <div class="icon-wrap">
                        <ion-icon name="warning-outline" role="img" class="md hydrated" aria-label="warning-outline"></ion-icon>
                    </div>
                    <div>
                        {{ $errors->first('email') }}
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @csrf
            <div class="card">
                <div class="card-body pb-1">
                    <div class="form-group basic">
                        <div class="input-wrapper">
                            <label class="label" for="email1">E-mail</label>
                            <input type="email" class="form-control" name="email" id="email1" placeholder="Votre email ou identifiant">
                            <i class="clear-input">
                                <ion-icon name="close-circle"></ion-icon>
                            </i>
                        </div>
                    </div>

                    <div class="form-group basic">
                        <div class="input-wrapper">
                            <label class="label" for="password1">Mot de Passe</label>
                            <input type="password" class="form-control" name="password" id="password1" autocomplete="off"
                                   placeholder="Votre Mot de passe">
                            <i class="clear-input">
                                <ion-icon name="close-circle"></ion-icon>
                            </i>
                        </div>
                    </div>
                </div>
            </div>


            <div class="form-links mt-2">
                <div><a href="app-forgot-password.html" class="text-muted">Mot de passe perdu ?</a></div>
            </div>

            <div class="form-button-group  transparent">
                <button type="submit" class="btn btn-primary btn-block btn-lg">Connexion</button>
            </div>

        </form>
    </div>

</div>
<!-- * App Capsule -->



<!-- ========= JS Files =========  -->
<!-- Bootstrap -->
<script src="/assets/js/lib/bootstrap.bundle.min.js"></script>
<!-- Ionicons -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<!-- Splide -->
<script src="/assets/js/plugins/splide/splide.min.js"></script>
<!-- Base Js File -->
<script src="/assets/js/base.js"></script>


</body>

</html>
