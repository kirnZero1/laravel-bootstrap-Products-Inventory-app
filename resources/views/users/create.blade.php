<x-layout>  
      <div class="bg-light w-100 vh-100 text-dark">
            <div class='container'>
                <div class="text-center pt-5">
                        <h3>Create User</h3>
                </div>
                        <form method="post" action="{{route('user.store')}}">
                            @csrf
                            @method('post')
                            <div class='col-12 d-flex align-items-center justify-content-center mt-4 '>
                                <div class='col-6 border bg-slate-50 rounded shadow-sm'>
                                    <div class='row p-2'>   
                                        <div class='col-4 d-flex align-items-center justify-content-center'><label for="username">Username:</label></div>
                                        <div class='col-8'><input type="text" class='form-control' name="username" value="{{old('username')}}" /></div>
                                        @error('username')
                                            <p class='text-danger'>{{$message}}</p>
                                        @enderror
                                    </div>
                                    <div class='row p-2'>   
                                        <div class='col-4 d-flex align-items-center justify-content-center'><label for="email">Email:</label></div>
                                        <div class='col-8'><input type="email" class='form-control' name="email" value="{{old('email')}}" /></div>
                                        @error('email')
                                        <p class='text-danger'>{{$message}}</p>
                                    @enderror
                                    </div>
                                    <div class='row p-2'>   
                                        <div class='col-4 d-flex align-items-center justify-content-center'><label for="password">Password:</label></div>
                                        <div class='col-8'><input type="password" class='form-control' name="password" /></div>
                                        @error('password')
                                        <p class='text-danger'>{{$message}}</p>
                                    @enderror
                                    </div>
                                    <div class='row p-2'>   
                                        <div class='col-4 d-flex align-items-center justify-content-center'><label for="password_confirmation">Confirm Password:</label></div>
                                        <div class='col-8'><input type="password" class='form-control' name="password_confirmation"  /></div>
                                        @error('password_confirmation')
                                        <p class='text-danger'>{{$message}}</p>
                                    @enderror
                                    </div>
                                    <div class='row p-2'>   
                                        <div class='col-4 '></div>
                                        <div class=' col-8 d-flex align-items-center justify-content-center'>
                                            <input type='submit' value='Submit' class='btn btn-primary btn-sm px-5 me-4' />
                                            <a class='btn btn-danger btn-sm px-5' href="{{route('user.login')}}">Back</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
            </div>
      </div>
</x-layout>