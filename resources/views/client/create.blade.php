@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 create-customer-container">
                <h1 class="title">Új ügyfél hozzáadása</h1>
                <div class="col-md-12 create-customer-div-outer">

                    <div class="col-md-4  create-customer-div ">
                        <form action="{{ route('store-clients') }}" method="post" id="create-customer-form">
                            @csrf
                            <input type="hidden" name="avatar">
                            <div class="form-group">
                                <label for="client-name">Név</label>
                                <input type="text" autocomplete="off" class="form-control" id="client-name"
                                    placeholder="Add meg a teljes nevet" name="name">
                                <span class="error">Adj meg nevet!</span>
                            </div>
                            <div class="form-group">
                                <label for="client-name">Email</label>
                                <input type="email" autocomplete="off" class="form-control" id="client-name"
                                    placeholder="Add meg az email címet" name="email">
                                <span class="error">Adj meg email címet!</span>
                            </div>
                            <div class="form-group">
                                <label for="client-name">Telefonszám</label>
                                <input type="text" autocomplete="off" class="form-control" id="client-name"
                                    placeholder="Add meg a telefonszámot" name="phone">
                                <span class="error">Adj meg telefonszámot!</span>
                            </div>
                            <div class="form-group avatars">
                                <p class="label">Profilkép</p>
                                @foreach ($imgs as $img)
                                    <img class="js-avatar" src="/assets/img/{{ $img }}" alt="avatar"
                                        data-avatar="{{ $img }}">
                                @endforeach
                            </div>

                        </form>
                    </div>
                </div>
                <p class="text-center">
                    <button onclick="submitForm()" class="btn btn-primary" id="create-customer-btn">Ügyfél mentése</button>
                </p>
            </div>
        </div>
    </div>
@endsection
