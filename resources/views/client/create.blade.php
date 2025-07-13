@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h1 class="title">Új ügyfél hozzáadása</h1>
            </div>
            <div class="col-md-10">
                <form action="{{ route('store-clients') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="client-name">Név</label>
                        <input type="text" autocomplete="off" class="form-control" id="client-name" placeholder="Add meg a teljes nevet" name="name">
                    </div>
                    <div class="form-group">
                        <label for="client-name">Email</label>
                        <input type="email" autocomplete="off" class="form-control" id="client-name" placeholder="Add meg az email címet" name="email">
                    </div>
                    <div class="form-group">
                        <label for="client-name">Telefonszám</label>
                        <input type="text" autocomplete="off" class="form-control" id="client-name" placeholder="Add meg a telefonszámot" name="phone">
                    </div>
                    <div class="form-group">

                        @foreach ($imgs as $img)
                        <img width="50" src="{{ $img }}" alt="avatar">
                        @endforeach
                    </div>
                    <button type="submit" class="btn btn-primary">Küld</button>

                </form>
            </div>
        </div>
    </div>
@endsection
