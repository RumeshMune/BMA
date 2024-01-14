@include('components.header')

<div class="page-heading header-text ">
    <div class="container">
      
        <div class="col-md-14">
          <h1>Welcome to The BMA professionalists' portal</h1>
<section class="vh-100 gradient-custom pt-5">
        
          <div class="row justify-content-center align-items-center h-100">
            <div class="glass col-12 col-lg-9 col-xl-7">
              <div class="glass card shadow-2-strong card-registration border-primary" style="border-radius: 15px; color:#091353;">
                <div class="glass card-body p-4 p-md-5">
                  <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Certified BMA professionalists</h3>
                  <div class="filter-header">
                    <form id="sform" action="{{route('exameview')}}" method="post">  
                         @csrf
                      <label class="form-label" for="text">Enter Your certificate ID<span style="color:#CD1818"></span></label> <br>               
                        <input type="text" id="q" name="q" required="required" placeholder="certificate ID"
                            class="input-large typerhead" autocomplete="off">
                            <input type="submit" name="submit" role="button" value="submit">
                            <lebel class="{{url('uploadproduct')}}"for="text"><span style="color:#CD1818"></span></label>

                      </div>

                           <!--<button type="submit" name="login" class="btn btn-primary">Login</button> -->
                         <!-- <a class="btn btn-primary" href="assets/images/f-1.png" role="button">Login</a>-->
                        </div>
                        <div class="form-group mb-3">
                         <!-- <img src="assets/images/service_02.jpg" alt=""> -->
                          <!-- <a href="{{url('register')}}" class="btn btn-secondary ml-5">New to BMA ?</a> -->
                        </div>
                      </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      
       </div>
      </div>
    </div>
  </div>
      
@include('components.footer')

@push('scripts')
<script type ="text/javascript">
  var path = "{{route('autocomplete')}}";
  $('input.typeahead').typeahead({
    source:function(query,process){
      return $.get(path,{query:query},function(data){
        return process(data);
      });
    }
  });
  </script>
  @endpush


 
 