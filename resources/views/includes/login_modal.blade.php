<div class="modal" id="loginModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal body -->
        <div class="modal-body">
          <div class="card card-login card-plain">
          <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
              @csrf
              <div class="card-header text-center">
                <div class="logo-container brand">
                <!-- <img class="n-logo" src="./assets/img/fototells.jpg" alt=""> -->
                </div>
              </div>
              <div class="card-body">
                <div class="input-group no-border input-md">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="now-ui-icons users_circle-08"></i>
                    </span>
                  </div>
                  <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                  @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('email') }}</strong>
                    </span>
                  @endif
                </div>
                <div class="input-group no-border input-md">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="now-ui-icons objects_key-25"></i>
                    </span>
                  </div>
                  <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                  @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('password') }}</strong>
                    </span>
                  @endif
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        {{ __('Remember Me') }}
                        <span class="form-check-sign">
                            <span class="check"></span>
                        </span>
                    </label>
                </div>

              </div>
              <div class="card-footer text-center">
                <button type="submit" class="btn btn-primary btn-round btn-lg mb-2">
                  {{ __('Login') }}
                </button>
                <div class="row" >
                  <div class="ml-auto mr-auto">
                    <h6>
                        <a href="/register" class="btn btn-link">Create Account</a>
                      </h6>
                      <!-- <h6>
                        <a href="{{ route('password.request') }}" class="btn btn-link">Forgot Password?</a>
                      </h6> -->
                  </div>
                </div>
            </form>
          </div>
        </div>
        <!-- Modal footer -->
          <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
    </div>
  </div>
<!-- modal end -->