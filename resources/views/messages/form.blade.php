@extends('layouts.default')

@section('content')
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-6 offset-md-3 order-md-1">
                <div class="row mb-3">
                    <div class="col-md-12">
                        <h2 class="text-center">📬 Envoyer un email 📬</h2>
                    </div>
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <div><span>{{ $error }}</span></div>
                        @endforeach
                    </div>
                @endif
                @if(session()->has('result'))
                    @if (session()->get('result') == 'Success')
                        <div class="alert alert-success">
                            C'est bien brou !
                        </div>
                    @else
                        <div class="alert alert-danger">
                            {{ session()->get('result') }}
                        </div>
                    @endif
                @endif
                <form action="{{ route('message.store') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <input name="email" type="email"
                                   class="form-control @if ($errors->has('email')) is-danger @endif"
                                   placeholder="Email" value="{{ old('email') }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <input name="subject" type="text"
                                   class="form-control @if ($errors->has('subject')) is-danger @endif"
                                   placeholder="Sujet" value="{{ old('subject') }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <textarea name="message" type="text"
                                      rows="5"
                                      class="form-control @if ($errors->has('message')) is-danger @endif"
                                      placeholder="Message" value="{{ old('message') }}"></textarea>
                        </div>
                    </div>
                    <button class="btn btn-dark btn-lg btn-block" type="submit">Envoyer</button>
                </form>
            </div>
        </div>
    </div>

@endsection
