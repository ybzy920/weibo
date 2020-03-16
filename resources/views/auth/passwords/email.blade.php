@extends('layouts.default')
@section('title', '重置密码')

@section('content')
  <div class="offset-md-2 col-md-8">
    <div class="card">
      <div class="card-header">
        <h5>重置密码</h5>
      </div>
      <div class="card-body">
        @if (session('status'))
          <div class="alert alert-success">
            {{ session('status') }}
          </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
          {{ csrf_field() }}

          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email">邮箱地址：</label>
            <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>

            @if ($errors->has('email'))
              <span class="form-text text-danger">
                <strong>{{ $errors->first('email') }}</strong>
              </span>
            @endif
          </div>

          <div class="from-group">
            <button type="submit" class="btn btn-primary">发送密码重置邮件</button>
          </div>
        </form>
      </div>
    </div>
  </div>
@stop
