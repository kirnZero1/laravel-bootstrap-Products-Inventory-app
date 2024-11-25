<x-layout>  
    <div class="bg-light w-100 vh-100 text-dark">
          <div class='container'>
              <div class="text-center pt-5">
                      <h3>Login User</h3>
              </div>
                      <form method="post" action="{{route('user.login')}}">
                          @csrf
                          @method('post')
                          <div class='col-12 d-flex align-items-center justify-content-center mt-4 '>
                              <div class='col-6 border bg-slate-50 rounded shadow-sm'>
                                  <div class='row p-2'>   
                                      <div class='col-4 d-flex align-items-center justify-content-center'><label for="email">Email:</label></div>
                                      <div class='col-8'><input type="email" class='form-control' name="email" value="{{old('email')}}" /></div>
                                  </div>
                                  <div class='text-center'>
                                    @error('email')
                                    <p class='text-danger'>{{$message}}</p>
                                   @enderror
                                  </div>
                                  <div class='row p-2'>   
                                      <div class='col-4 d-flex align-items-center justify-content-center'><label for="password">Password:</label></div>
                                      <div class='col-8'><input type="password" class='form-control' name="password" /></div>
                                  </div>
                                  <div class='text-center'>
                                    @error('password')
                                    <p class='text-danger'>{{$message}}</p>
                                   @enderror
                                  </div>
                                  <div class='row p-2'>   
                                    <div class='col-4 '>
                                    </div>
                                    <div class='col-8'><input type="checkbox" class='me-1' name="remember" /><label for="remember">Remember password?</label></div>
                                </div>
                                    <div class='text-center'>      
                                         @error('failed')
                                        <p class='text-danger'>{{$message}}</p>
                                        @enderror</div>
                                  <div class='row p-2'>   
                                      <div class='col-4 '></div>
                                      <div class=' col-8 d-flex align-items-center justify-content-center'>
                                          <input type='submit' value='Submit' class='btn btn-primary btn-sm px-md-4 me-4' />
                                          <a class='btn btn-danger btn-sm px-md-4' href="{{route('user.create')}}">Register</a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </form>
          </div>
    </div>
</x-layout>