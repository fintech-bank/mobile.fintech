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
    <meta name="keywords"
          content="bootstrap, wallet, banking, fintech mobile template, cordova, phonegap, mobile, html, responsive" />
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
<div class="appHeader bg-primary text-light">
    <div class="left">
        <a href="#" class="headerButton" data-bs-toggle="modal" data-bs-target="#sidebarPanel">
            <ion-icon name="menu-outline"></ion-icon>
        </a>
    </div>
    <div class="pageTitle">
        <img src="/assets/img/logo/logo_long_white.png" alt="logo" class="logo">
    </div>
    <div class="right">
        <a href="{{ route('account.notifications.index') }}" class="headerButton">
            <ion-icon class="icon" name="notifications-outline"></ion-icon>
            <span class="badge badge-danger">{{ auth()->user()->unreadNotifications()->count() }}</span>
        </a>
        <a href="{{ route('account.settings.index') }}" class="headerButton">
            <img src="{{ Gravatar::get(auth()->user()->email) }}" alt="image" class="imaged w32">
        </a>
    </div>
</div>
<!-- * App Header -->


<!-- App Capsule -->
<div id="appCapsule">

    <!-- Wallet Card -->
    <div class="section wallet-card-section pt-1">
        <div class="wallet-card">
            <!-- Balance -->
            <div class="balance">
                <div class="left">
                    <span class="title">Bonjour {{ \App\Helper\CustomerHelper::getName($customer, true) }}, Votre solde est de</span>
                    <h1 class="total">{{ eur($wallet->balance_actual) }}</h1>
                </div>
                <div class="right">
                    <a href="#" class="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Approvisionner mon compte">
                        <ion-icon name="add-outline"></ion-icon>
                    </a>
                </div>
            </div>
            <!-- * Balance -->
        </div>
    </div>
    <!-- Wallet Card -->

    <!-- Transactions -->
    <div class="section mt-4">
        <div class="section-heading">
            <h2 class="title">Mes comptes courant</h2>
        </div>
        <div class="transactions">
            <!-- item -->
            <a href="app-transaction-detail.html" class="item">
                <div class="detail">
                    <img src="assets/img/sample/brand/1.jpg" alt="img" class="image-block imaged w48">
                    <div>
                        <strong>Amazon</strong>
                        <p>Shopping</p>
                    </div>
                </div>
                <div class="right">
                    <div class="price text-danger"> - $ 150</div>
                </div>
            </a>
            <!-- * item -->
            <!-- item -->
            <a href="app-transaction-detail.html" class="item">
                <div class="detail">
                    <img src="assets/img/sample/brand/2.jpg" alt="img" class="image-block imaged w48">
                    <div>
                        <strong>Apple</strong>
                        <p>Appstore Purchase</p>
                    </div>
                </div>
                <div class="right">
                    <div class="price text-danger">- $ 29</div>
                </div>
            </a>
            <!-- * item -->
            <!-- item -->
            <a href="app-transaction-detail.html" class="item">
                <div class="detail">
                    <img src="assets/img/sample/avatar/avatar3.jpg" alt="img" class="image-block imaged w48">
                    <div>
                        <strong>Alex Ljung</strong>
                        <p>Transfer</p>
                    </div>
                </div>
                <div class="right">
                    <div class="price">+ $ 1,000</div>
                </div>
            </a>
            <!-- * item -->
            <!-- item -->
            <a href="app-transaction-detail.html" class="item">
                <div class="detail">
                    <img src="assets/img/sample/avatar/avatar4.jpg" alt="img" class="image-block imaged w48">
                    <div>
                        <strong>Beatriz Brito</strong>
                        <p>Transfer</p>
                    </div>
                </div>
                <div class="right">
                    <div class="price text-danger">- $ 186</div>
                </div>
            </a>
            <!-- * item -->
        </div>
    </div>
    <!-- * Transactions -->

    <!-- my cards -->
    <div class="section full mt-4">
        <div class="section-heading padding">
            <h2 class="title">My Cards</h2>
            <a href="app-cards.html" class="link">View All</a>
        </div>

        <!-- carousel single -->
        <div class="carousel-single splide">
            <div class="splide__track">
                <ul class="splide__list">

                    <li class="splide__slide">
                        <!-- card block -->
                        <div class="card-block bg-primary">
                            <div class="card-main">
                                <div class="card-button dropdown">
                                    <button type="button" class="btn btn-link btn-icon" data-bs-toggle="dropdown">
                                        <ion-icon name="ellipsis-horizontal"></ion-icon>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">
                                            <ion-icon name="pencil-outline"></ion-icon>Edit
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <ion-icon name="close-outline"></ion-icon>Remove
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <ion-icon name="arrow-up-circle-outline"></ion-icon>Upgrade
                                        </a>
                                    </div>
                                </div>
                                <div class="balance">
                                    <span class="label">BALANCE</span>
                                    <h1 class="title">$ 1,256,90</h1>
                                </div>
                                <div class="in">
                                    <div class="card-number">
                                        <span class="label">Card Number</span>
                                        •••• 9905
                                    </div>
                                    <div class="bottom">
                                        <div class="card-expiry">
                                            <span class="label">Expiry</span>
                                            12 / 25
                                        </div>
                                        <div class="card-ccv">
                                            <span class="label">CCV</span>
                                            553
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- * card block -->
                    </li>

                    <li class="splide__slide">
                        <!-- card block -->
                        <div class="card-block bg-dark">
                            <div class="card-main">
                                <div class="card-button dropdown">
                                    <button type="button" class="btn btn-link btn-icon" data-bs-toggle="dropdown">
                                        <ion-icon name="ellipsis-horizontal"></ion-icon>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">
                                            <ion-icon name="pencil-outline"></ion-icon>Edit
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <ion-icon name="close-outline"></ion-icon>Remove
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <ion-icon name="arrow-up-circle-outline"></ion-icon>Upgrade
                                        </a>
                                    </div>
                                </div>
                                <div class="balance">
                                    <span class="label">BALANCE</span>
                                    <h1 class="title">$ 1,256,90</h1>
                                </div>
                                <div class="in">
                                    <div class="card-number">
                                        <span class="label">Card Number</span>
                                        •••• 9905
                                    </div>
                                    <div class="bottom">
                                        <div class="card-expiry">
                                            <span class="label">Expiry</span>
                                            12 / 25
                                        </div>
                                        <div class="card-ccv">
                                            <span class="label">CCV</span>
                                            553
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- * card block -->
                    </li>

                    <li class="splide__slide">
                        <!-- card block -->
                        <div class="card-block bg-secondary">
                            <div class="card-main">
                                <div class="card-button dropdown">
                                    <button type="button" class="btn btn-link btn-icon" data-bs-toggle="dropdown">
                                        <ion-icon name="ellipsis-horizontal"></ion-icon>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">
                                            <ion-icon name="pencil-outline"></ion-icon>Edit
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <ion-icon name="close-outline"></ion-icon>Remove
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <ion-icon name="arrow-up-circle-outline"></ion-icon>Upgrade
                                        </a>
                                    </div>
                                </div>
                                <div class="balance">
                                    <span class="label">BALANCE</span>
                                    <h1 class="title">$ 1,256,90</h1>
                                </div>
                                <div class="in">
                                    <div class="card-number">
                                        <span class="label">Card Number</span>
                                        •••• 9905
                                    </div>
                                    <div class="bottom">
                                        <div class="card-expiry">
                                            <span class="label">Expiry</span>
                                            12 / 25
                                        </div>
                                        <div class="card-ccv">
                                            <span class="label">CCV</span>
                                            553
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- * card block -->
                    </li>

                </ul>
            </div>
        </div>
        <!-- * carousel single -->

    </div>
    <!-- * my cards -->

    <!-- Send Money -->
    <div class="section full mt-4">
        <div class="section-heading padding">
            <h2 class="title">Send Money</h2>
            <a href="#" class="link">Add New</a>
        </div>
        <!-- carousel small -->
        <div class="carousel-small splide">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <a href="#">
                            <div class="user-card">
                                <img src="assets/img/sample/avatar/avatar2.jpg" alt="img" class="imaged w-100">
                                <strong>Jurrien</strong>
                            </div>
                        </a>
                    </li>
                    <li class="splide__slide">
                        <a href="#">
                            <div class="user-card">
                                <img src="assets/img/sample/avatar/avatar3.jpg" alt="img" class="imaged w-100">
                                <strong>Elwin</strong>
                            </div>
                        </a>
                    </li>
                    <li class="splide__slide">
                        <a href="#">
                            <div class="user-card">
                                <img src="assets/img/sample/avatar/avatar4.jpg" alt="img" class="imaged w-100">
                                <strong>Alma</strong>
                            </div>
                        </a>
                    </li>
                    <li class="splide__slide">
                        <a href="#">
                            <div class="user-card">
                                <img src="assets/img/sample/avatar/avatar5.jpg" alt="img" class="imaged w-100">
                                <strong>Justine</strong>
                            </div>
                        </a>
                    </li>
                    <li class="splide__slide">
                        <a href="#">
                            <div class="user-card">
                                <img src="assets/img/sample/avatar/avatar6.jpg" alt="img" class="imaged w-100">
                                <strong>Maria</strong>
                            </div>
                        </a>
                    </li>
                    <li class="splide__slide">
                        <a href="#">
                            <div class="user-card">
                                <img src="assets/img/sample/avatar/avatar7.jpg" alt="img" class="imaged w-100">
                                <strong>Pamela</strong>
                            </div>
                        </a>
                    </li>
                    <li class="splide__slide">
                        <a href="#">
                            <div class="user-card">
                                <img src="assets/img/sample/avatar/avatar8.jpg" alt="img" class="imaged w-100">
                                <strong>Neville</strong>
                            </div>
                        </a>
                    </li>
                    <li class="splide__slide">
                        <a href="#">
                            <div class="user-card">
                                <img src="assets/img/sample/avatar/avatar9.jpg" alt="img" class="imaged w-100">
                                <strong>Alex</strong>
                            </div>
                        </a>
                    </li>
                    <li class="splide__slide">
                        <a href="#">
                            <div class="user-card">
                                <img src="assets/img/sample/avatar/avatar10.jpg" alt="img" class="imaged w-100">
                                <strong>Stina</strong>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- * carousel small -->
    </div>
    <!-- * Send Money -->

    <!-- Monthly Bills -->
    <div class="section full mt-4">
        <div class="section-heading padding">
            <h2 class="title">Monthly Bills</h2>
            <a href="app-bills.html" class="link">View All</a>
        </div>
        <!-- carousel multiple -->
        <div class="carousel-multiple splide">
            <div class="splide__track">
                <ul class="splide__list">

                    <li class="splide__slide">
                        <div class="bill-box">
                            <div class="img-wrapper">
                                <img src="assets/img/sample/brand/1.jpg" alt="img" class="image-block imaged w48">
                            </div>
                            <div class="price">$ 14</div>
                            <p>Prime Monthly Subscription</p>
                            <a href="#" class="btn btn-primary btn-block btn-sm">PAY NOW</a>
                        </div>
                    </li>

                    <li class="splide__slide">
                        <div class="bill-box">
                            <div class="img-wrapper">
                                <img src="assets/img/sample/brand/2.jpg" alt="img" class="image-block imaged w48">
                            </div>
                            <div class="price">$ 9</div>
                            <p>Music Monthly Subscription</p>
                            <a href="#" class="btn btn-primary btn-block btn-sm">PAY NOW</a>
                        </div>
                    </li>

                    <li class="splide__slide">
                        <div class="bill-box">
                            <div class="img-wrapper">
                                <div class="iconbox bg-danger">
                                    <ion-icon name="medkit-outline"></ion-icon>
                                </div>
                            </div>
                            <div class="price">$ 299</div>
                            <p>Monthly Health Insurance</p>
                            <a href="#" class="btn btn-primary btn-block btn-sm">PAY NOW</a>
                        </div>
                    </li>

                    <li class="splide__slide">
                        <div class="bill-box">
                            <div class="img-wrapper">
                                <div class="iconbox">
                                    <ion-icon name="card-outline"></ion-icon>
                                </div>
                            </div>
                            <div class="price">$ 962</div>
                            <p>Credit Card Statement
                            </p>
                            <a href="#" class="btn btn-primary btn-block btn-sm">PAY NOW</a>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
        <!-- * carousel multiple -->
    </div>
    <!-- * Monthly Bills -->


    <!-- Saving Goals -->
    <div class="section mt-4">
        <div class="section-heading">
            <h2 class="title">Saving Goals</h2>
            <a href="app-savings.html" class="link">View All</a>
        </div>
        <div class="goals">
            <!-- item -->
            <div class="item">
                <div class="in">
                    <div>
                        <h4>Gaming Console</h4>
                        <p>Gaming</p>
                    </div>
                    <div class="price">$ 499</div>
                </div>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="85"
                         aria-valuemin="0" aria-valuemax="100">85%</div>
                </div>
            </div>
            <!-- * item -->
            <!-- item -->
            <div class="item">
                <div class="in">
                    <div>
                        <h4>New House</h4>
                        <p>Living</p>
                    </div>
                    <div class="price">$ 100,000</div>
                </div>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 55%;" aria-valuenow="55"
                         aria-valuemin="0" aria-valuemax="100">55%</div>
                </div>
            </div>
            <!-- * item -->
            <!-- item -->
            <div class="item">
                <div class="in">
                    <div>
                        <h4>Sport Car</h4>
                        <p>Lifestyle</p>
                    </div>
                    <div class="price">$ 42,500</div>
                </div>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 15%;" aria-valuenow="15"
                         aria-valuemin="0" aria-valuemax="100">15%</div>
                </div>
            </div>
            <!-- * item -->
        </div>
    </div>
    <!-- * Saving Goals -->


    <!-- News -->
    <div class="section full mt-4 mb-3">
        <div class="section-heading padding">
            <h2 class="title">Lastest News</h2>
            <a href="app-blog.html" class="link">View All</a>
        </div>

        <!-- carousel multiple -->
        <div class="carousel-multiple splide">
            <div class="splide__track">
                <ul class="splide__list">

                    <li class="splide__slide">
                        <a href="app-blog-post.html">
                            <div class="blog-card">
                                <img src="assets/img/sample/photo/1.jpg" alt="image" class="imaged w-100">
                                <div class="text">
                                    <h4 class="title">What will be the value of bitcoin in the next...</h4>
                                </div>
                            </div>
                        </a>
                    </li>

                    <li class="splide__slide">
                        <a href="app-blog-post.html">
                            <div class="blog-card">
                                <img src="assets/img/sample/photo/2.jpg" alt="image" class="imaged w-100">
                                <div class="text">
                                    <h4 class="title">Rules you need to know in business</h4>
                                </div>
                            </div>
                        </a>
                    </li>

                    <li class="splide__slide">
                        <a href="app-blog-post.html">
                            <div class="blog-card">
                                <img src="assets/img/sample/photo/3.jpg" alt="image" class="imaged w-100">
                                <div class="text">
                                    <h4 class="title">10 easy ways to save your money</h4>
                                </div>
                            </div>
                        </a>
                    </li>

                    <li class="splide__slide">
                        <a href="app-blog-post.html">
                            <div class="blog-card">
                                <img src="assets/img/sample/photo/4.jpg" alt="image" class="imaged w-100">
                                <div class="text">
                                    <h4 class="title">Follow the financial agenda with...</h4>
                                </div>
                            </div>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
        <!-- * carousel multiple -->

    </div>
    <!-- * News -->


    <!-- app footer -->
    <div class="appFooter">
        <div class="footer-title">
            Copyright © Finapp 2021. All Rights Reserved.
        </div>
        Bootstrap 5 based mobile template.
    </div>
    <!-- * app footer -->

</div>
<!-- * App Capsule -->


<!-- App Bottom Menu -->
<div class="appBottomMenu">
    <a href="index.html" class="item active">
        <div class="col">
            <ion-icon name="pie-chart-outline"></ion-icon>
            <strong>Overview</strong>
        </div>
    </a>
    <a href="app-pages.html" class="item">
        <div class="col">
            <ion-icon name="document-text-outline"></ion-icon>
            <strong>Pages</strong>
        </div>
    </a>
    <a href="app-components.html" class="item">
        <div class="col">
            <ion-icon name="apps-outline"></ion-icon>
            <strong>Components</strong>
        </div>
    </a>
    <a href="app-cards.html" class="item">
        <div class="col">
            <ion-icon name="card-outline"></ion-icon>
            <strong>My Cards</strong>
        </div>
    </a>
    <a href="app-settings.html" class="item">
        <div class="col">
            <ion-icon name="settings-outline"></ion-icon>
            <strong>Settings</strong>
        </div>
    </a>
</div>
<!-- * App Bottom Menu -->

<!-- App Sidebar -->
<div class="modal fade panelbox panelbox-left" id="sidebarPanel" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                <!-- profile box -->
                <div class="profileBox pt-2 pb-2">
                    <div class="image-wrapper">
                        <img src="assets/img/sample/avatar/avatar1.jpg" alt="image" class="imaged  w36">
                    </div>
                    <div class="in">
                        <strong>Sebastian Doe</strong>
                        <div class="text-muted">4029209</div>
                    </div>
                    <a href="#" class="btn btn-link btn-icon sidebar-close" data-bs-dismiss="modal">
                        <ion-icon name="close-outline"></ion-icon>
                    </a>
                </div>
                <!-- * profile box -->
                <!-- balance -->
                <div class="sidebar-balance">
                    <div class="listview-title">Balance</div>
                    <div class="in">
                        <h1 class="amount">$ 2,562.50</h1>
                    </div>
                </div>
                <!-- * balance -->

                <!-- action group -->
                <div class="action-group">
                    <a href="index.html" class="action-button">
                        <div class="in">
                            <div class="iconbox">
                                <ion-icon name="add-outline"></ion-icon>
                            </div>
                            Deposit
                        </div>
                    </a>
                    <a href="index.html" class="action-button">
                        <div class="in">
                            <div class="iconbox">
                                <ion-icon name="arrow-down-outline"></ion-icon>
                            </div>
                            Withdraw
                        </div>
                    </a>
                    <a href="index.html" class="action-button">
                        <div class="in">
                            <div class="iconbox">
                                <ion-icon name="arrow-forward-outline"></ion-icon>
                            </div>
                            Send
                        </div>
                    </a>
                    <a href="app-cards.html" class="action-button">
                        <div class="in">
                            <div class="iconbox">
                                <ion-icon name="card-outline"></ion-icon>
                            </div>
                            My Cards
                        </div>
                    </a>
                </div>
                <!-- * action group -->

                <!-- menu -->
                <div class="listview-title mt-1">Menu</div>
                <ul class="listview flush transparent no-line image-listview">
                    <li>
                        <a href="index.html" class="item">
                            <div class="icon-box bg-primary">
                                <ion-icon name="pie-chart-outline"></ion-icon>
                            </div>
                            <div class="in">
                                Overview
                                <span class="badge badge-primary">10</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="app-pages.html" class="item">
                            <div class="icon-box bg-primary">
                                <ion-icon name="document-text-outline"></ion-icon>
                            </div>
                            <div class="in">
                                Pages
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="app-components.html" class="item">
                            <div class="icon-box bg-primary">
                                <ion-icon name="apps-outline"></ion-icon>
                            </div>
                            <div class="in">
                                Components
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="app-cards.html" class="item">
                            <div class="icon-box bg-primary">
                                <ion-icon name="card-outline"></ion-icon>
                            </div>
                            <div class="in">
                                My Cards
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- * menu -->

                <!-- others -->
                <div class="listview-title mt-1">Others</div>
                <ul class="listview flush transparent no-line image-listview">
                    <li>
                        <a href="app-settings.html" class="item">
                            <div class="icon-box bg-primary">
                                <ion-icon name="settings-outline"></ion-icon>
                            </div>
                            <div class="in">
                                Settings
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="component-messages.html" class="item">
                            <div class="icon-box bg-primary">
                                <ion-icon name="chatbubble-outline"></ion-icon>
                            </div>
                            <div class="in">
                                Support
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="app-login.html" class="item">
                            <div class="icon-box bg-primary">
                                <ion-icon name="log-out-outline"></ion-icon>
                            </div>
                            <div class="in">
                                Log out
                            </div>
                        </a>
                    </li>


                </ul>
                <!-- * others -->

                <!-- send money -->
                <div class="listview-title mt-1">Send Money</div>
                <ul class="listview image-listview flush transparent no-line">
                    <li>
                        <a href="#" class="item">
                            <img src="assets/img/sample/avatar/avatar2.jpg" alt="image" class="image">
                            <div class="in">
                                <div>Artem Sazonov</div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="item">
                            <img src="assets/img/sample/avatar/avatar4.jpg" alt="image" class="image">
                            <div class="in">
                                <div>Sophie Asveld</div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="item">
                            <img src="assets/img/sample/avatar/avatar3.jpg" alt="image" class="image">
                            <div class="in">
                                <div>Kobus van de Vegte</div>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- * send money -->

            </div>
        </div>
    </div>
</div>
<!-- * App Sidebar -->



<!-- iOS Add to Home Action Sheet -->
<div class="modal inset fade action-sheet ios-add-to-home" id="ios-add-to-home-screen" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add to Home Screen</h5>
                <a href="#" class="close-button" data-bs-dismiss="modal">
                    <ion-icon name="close"></ion-icon>
                </a>
            </div>
            <div class="modal-body">
                <div class="action-sheet-content text-center">
                    <div class="mb-1"><img src="assets/img/icon/192x192.png" alt="image" class="imaged w64 mb-2">
                    </div>
                    <div>
                        Install <strong>Finapp</strong> on your iPhone's home screen.
                    </div>
                    <div>
                        Tap <ion-icon name="share-outline"></ion-icon> and Add to homescreen.
                    </div>
                    <div class="mt-2">
                        <button class="btn btn-primary btn-block" data-bs-dismiss="modal">CLOSE</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- * iOS Add to Home Action Sheet -->


<!-- Android Add to Home Action Sheet -->
<div class="modal inset fade action-sheet android-add-to-home" id="android-add-to-home-screen" tabindex="-1"
     role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add to Home Screen</h5>
                <a href="#" class="close-button" data-bs-dismiss="modal">
                    <ion-icon name="close"></ion-icon>
                </a>
            </div>
            <div class="modal-body">
                <div class="action-sheet-content text-center">
                    <div class="mb-1">
                        <img src="assets/img/icon/192x192.png" alt="image" class="imaged w64 mb-2">
                    </div>
                    <div>
                        Install <strong>Finapp</strong> on your Android's home screen.
                    </div>
                    <div>
                        Tap <ion-icon name="ellipsis-vertical"></ion-icon> and Add to homescreen.
                    </div>
                    <div class="mt-2">
                        <button class="btn btn-primary btn-block" data-bs-dismiss="modal">CLOSE</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- * Android Add to Home Action Sheet -->



<!-- ========= JS Files =========  -->
<!-- Bootstrap -->
<script src="/assets/js/lib/bootstrap.bundle.min.js"></script>
<!-- Ionicons -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<!-- Splide -->
<script src="/assets/js/plugins/splide/splide.min.js"></script>
<!-- Base Js File -->
<script src="/assets/js/base.js"></script>

<script>
    // Add to Home with 2 seconds delay.
    AddtoHome("2000", "once");
</script>

</body>

</html>
