@extends('welcome')
@section('main-content')
<div class="message">
    @if(session('success'))
        <div class="alert alert-success">
            {!! session('success') !!}
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">
            {!! session('error') !!}
        </div>
    @endif
</div>
<form action="{{ route('send-email') }}" method="POST">
    @csrf
    <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">From</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" placeholder="From" name="from">
        </div>
    </div>
    <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">Subject</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" placeholder="Subject" name="subject">
        </div>
    </div>
    <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">Body</label>
        <div class="col-sm-10">
            <textarea class="form-control" name="body" rows="3"></textarea>
        </div>
    </div>
    <div class="mb-3 row">
        <div class="col-sm-10">
          <button type="submit" class="btn btn-outline-success px-5">SEND</button>
        </div>
    </div>
</form>
@endsection