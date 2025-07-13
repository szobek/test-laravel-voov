@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <h1 class="title">Ügyfelek</h1>
            </div>
            <div class="col-md-11 table-container">
                <table class="table  list-user-table">
                    <thead>
                        <th class="text-center">Név</th>
                        <th>Email</th>
                        <th>Telefonszám</th>
                        <th>Művelet</th>
                    </thead>
                    <tbody>
                        @forelse ($clients as $client)
                        <tr>
                            <td class="subtitle w700">
                                <img src="assets/img/{{$client->avatar}}" alt="">
                                {{ $client->name }}</td>
                            <td class="subtitle w400">{{ $client->email }}</td>
                            <td class="subtitle w400">{{ $client->phone }}</td>
                            <td class="subtitle w400">
                                <span class="js-delete-span">
                                    <a class="subtitle w700 opt" href="{{route('delete-client',['id'=>$client->id])}}" data-id="{{$client->id}}" >Törlés</a>
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
                    <a href="/create-client"><button class="btn btn-create" >Új ügyfél hozzáadása</button></a>
                </p>
            </div>
        </div>
    </div>
@endsection
