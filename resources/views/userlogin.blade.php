@include('components.LoginHeader')

<!-- Registration Content -->

    <section class="vh-100 gradient-custom pt-5">
        <div class="container py-5 h-100">
          <div class="row justify-content-center align-items-center h-100">
            <div class="glass col-12 col-lg-9 col-xl-7">
              <div class="glass card shadow-2-strong card-registration border-primary" style="border-radius: 15px; color:#091353;">
                <div class="glass card-body p-4 p-md-5">
                  <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Welcome to The BMA</h3>
                  <form>

                      <div class="row">

                        <div class="col-lg mb-4 pt-5">
        
                          <div class="form-outline">
                            <label class="form-label" for="email">Email<span style="color:#CD1818">*</span> </label>  
                            <input type="email" id="email" class="form-control form-control-lg border-primary" name="email" placeholder="Enter Your Email" required />
                          </div>
        
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-lg mb-4 pt-5">
        
                          <div class="form-outline">
                            <label class="form-label" for="password">Password<span style="color:#CD1818">*</span></label>
                            <input type="password" id="password" class="form-control form-control-lg border-primary" name="password" placeholder="Enter Your Password" required />
                          </div>
        
                        </div>
                      </div>

                      <div class="row pt-5">
                        <div class="form-group mb-3">
                          <button type="submit" name="login" class="btn btn-primary">Login</button>
                        </div>
                        <div class="form-group mb-3">
                          <a href="{{url('register')}}" class="btn btn-secondary ml-5">New to BMA ?</a>
                        </div>
                      </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      
@include('components.footer')