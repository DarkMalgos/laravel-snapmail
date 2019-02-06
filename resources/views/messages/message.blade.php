@extends('layouts.default')

@section('content')
    <div class="container">
        @if (strlen($email) > 2)
            <div class="row mt-4">
                <div class="col-md-6 offset-md-3 order-md-1">
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <h2 class="text-center">📫 Votre message 📫️</h2>
                        </div>
                    </div>

                    @foreach ($email as $key => $data)
                        <div class="row mt-5 text-center">
                            <div class="col-md-12">
                                <h4>🤖 Sujet : </h4>
                                <h4>{!! $data['subject'] !!}</h4>
                            </div>
                        </div>
                        <div class="row mt-3 text-center">
                            <div class="col-md-12">
                                <h4>✉️ Message : </h4>
                                <h4>{!! $data['message'] !!}</h4>
                            </div>
                        </div>
                    @endforeach
                    <div class="row mt-5">
                        <div class="col-md-12">
                            <div class="alert alert-danger">
                                <h5 class="text-center">🚨 Une fois la page fermée ou rechargée, le message explosera 🧨🧨🧨</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="row mt-4">
                <div class="col-md-6 offset-md-3 order-md-1">
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <h2 class="text-center">📭 Message supprimé 📭</h2>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col-md-12">
                            <h4>💣</h4>
                            <h4>💥 Desolé brou c'est fini le message à explosé 💥</h4>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection