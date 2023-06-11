<x-layout>
  <!-- Content Start -->
  <div class="container-xl mt-5 pt-5 d-flex justify-content-center">
      <div class="row-xl-9 m-5 loginCard" >
        <div class="col-xl p-5">
    
          @if (session('failure'))
              <p class="col my-3 mx-0  alert alert-danger shadow-sm"> {{ session('failure') }} </p>
          @endif
            <form action="/login" method="POST" >
              @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('loginEmail')
                    <p class="col small m-0 p-2 alert alert-danger shadow-sm">
                        {{ $message }}
                    </p>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input id="password"  name="password" type="password" class="form-control" required autocomplete="current-password">
                    @error('loginPass')
                    <p class="col small m-0 p-2  alert alert-danger shadow-sm">
                        {{ $message }}
                    </p>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">
                  {{ __('Login') }}</button>

                  @if (Route::has('password.request'))
                      <a class="btn btn-link" href="{{ route('password.request') }}">
                          {{ __('Forgot Your Password?') }}
                      </a>
                  @endif
            </form>
    
        </div>
      </div>
    </div>
    
    <!-- Content End -->
  </x-layout>