@extends("layouts.app")

@section("css")

@endsection


@section("content")

    <!-- Wallet Card -->
    <div class="section wallet-card-section pt-1">
        <div id="push-permission" class="d-none">
            <div class="alert alert-imaged alert-secondary alert-dismissible fade show mb-2" role="alert">
                <div class="icon-wrap">
                    <ion-icon name="notifications-outline" role="img" class="md hydrated" aria-label="cash outline"></ion-icon>
                </div>
                <div>
                    Cette application peut vous envoyer certaine notification
                </div>
                <button class="btn btn-outline-primary me-1 mb-1 p-2" style="position: absolute; top: 0; right: 0; padding: 0; margin-top: 3px">Activer les notifications</button>
            </div>
        </div>
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
    <div class="section mt-4 mb-5">
        <div class="section-heading">
            <h2 class="title">Mes comptes courant</h2>
        </div>
        <div class="transactions">
            @foreach($customer->wallets()->where('type', 'compte')->get() as $wallet)
            <!-- item -->
            <a href="app-transaction-detail.html" class="item">
                <div class="detail">
                    <!--<img src="assets/img/sample/brand/1.jpg" alt="img" class="image-block imaged w48">-->
                    <i class="fa-solid fa-user imaged image-block w24"></i>
                    <div>
                        <strong>{{ \App\Helper\CustomerWalletHelper::getNameAccount($wallet, true) }}</strong>
                        <p>Shopping</p>
                    </div>
                </div>
                <div class="right">
                    @if($wallet->balance_actual >= 0)
                        <div class="price text-success"> {{ eur($wallet->balance_actual) }}</div>
                    @else
                        <div class="price text-danger"> {{ eur($wallet->balance_actual) }}</div>
                    @endif
                </div>
            </a>
            <!-- * item -->
            @endforeach
        </div>
    </div>
    <!-- * Transactions -->

    <!-- Transactions -->
    <div class="section mt-4 mb-5">
        <div class="section-heading">
            <h2 class="title">Mes comptes épargnes</h2>
        </div>
        <div class="transactions">
            @foreach($customer->wallets()->where('type', 'epargne')->get() as $wallet)
                <!-- item -->
                <a href="app-transaction-detail.html" class="item">
                    <div class="detail">
                        <!--<img src="assets/img/sample/brand/1.jpg" alt="img" class="image-block imaged w48">-->
                        <i class="fa-solid fa-user imaged image-block w24"></i>
                        <div>
                            <strong>{{ \App\Helper\CustomerWalletHelper::getNameAccount($wallet, true) }}</strong>
                            <p>Shopping</p>
                        </div>
                    </div>
                    <div class="right">
                        @if($wallet->balance_actual >= 0)
                            <div class="price text-success"> {{ eur($wallet->balance_actual) }}</div>
                        @else
                            <div class="price text-danger"> {{ eur($wallet->balance_actual) }}</div>
                        @endif
                    </div>
                </a>
                <!-- * item -->
            @endforeach
        </div>
    </div>
    <!-- * Transactions -->

    <!-- Transactions -->
    <div class="section mt-4 mb-5">
        <div class="section-heading">
            <h2 class="title">Mes Crédit</h2>
        </div>
        <div class="transactions">
            @foreach($customer->wallets()->where('type', 'pret')->get() as $wallet)
                <!-- item -->
                <a href="app-transaction-detail.html" class="item">
                    <div class="detail">
                        <!--<img src="assets/img/sample/brand/1.jpg" alt="img" class="image-block imaged w48">-->
                        <i class="fa-solid fa-user imaged image-block w24"></i>
                        <div>
                            <strong>{{ \App\Helper\CustomerWalletHelper::getNameAccount($wallet, true) }}</strong>
                            <p>Shopping</p>
                        </div>
                    </div>
                    <div class="right">
                        @if($wallet->balance_actual >= 0)
                            <div class="price text-success"> {{ eur($wallet->balance_actual) }}</div>
                        @else
                            <div class="price text-danger"> {{ eur($wallet->balance_actual) }}</div>
                        @endif
                    </div>
                </a>
                <!-- * item -->
            @endforeach
        </div>
    </div>
    <!-- * Transactions -->
@endsection

@section("script")
    @include("scripts.dashboard")
@endsection
