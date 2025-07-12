@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <h1>Ügyfelek</h1>
            </div>
            <div class="col-md-11">
                <table class="table table-striped list-user-table">
                    <thead>
                        <th>Név</th>
                        <th>Email</th>
                        <th>Telefonszám</th>
                        <th>Művelet</th>
                    </thead>
                    <tbody>
                        @forelse ($clients as $client)
                        <tr>
                            <td>
                                <img src="assets/img/{{$client->avatar}}" alt="">
                                {{ $client->name }}</td>
                            <td>{{ $client->email }}</td>
                            <td>{{ $client->phone }}</td>
                            <td>
                                <span class="js-delete-span">
                                    <a href="{{route('delete-client',['id'=>$client->id])}}" data-id="{{$client->id}}" > törlés</a>
                                </span>
                            </td>
                        </tr>
                        @empty
                            <td colspan="4">Nincs kliens.</td>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="col-12 ">
                <p class="text-center">
                    <a href="/create-client"><button class="btn btn-primary" >Új ügyfél hozzáadása</button></a>
                </p>
            </div>
        </div>
    </div>
@endsection
