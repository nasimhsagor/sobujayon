<footer>
    <div class="container">
       <div class="row">
          <div class="col-md-4">
              <div class="full">
                 <div class="logo_footer">
                   <a href="#"><img width="210" src="images/logo.png" alt="#" /></a>
                 </div>
                 <div class="information_f">
                   <p><strong>ADDRESS:</strong> 89/Ka, Kuratoli, Vatara, Dhaka-1229, Bangladesh</p>
                   <p><strong>PHONE:</strong> +8801746330309</p>
                   <p><strong>EMAIL:</strong> sobujayon.official@gmail.com</p>
                 </div>
              </div>
          </div>
          <div class="col-md-8">
             <div class="row">
             <div class="col-md-7">
                <div class="row">
                   <div class="col-md-6">
                <div class="widget_menu">
                   <h3>Menu</h3>
                   <ul>
                      <li><a href="{{ '/' }}">Home</a></li>
                      <li><a href="{{ url('/view_about') }}">About</a></li>
                      <li><a href="{{ url('/view_contact') }}">Contact</a></li>
                   </ul>
                </div>
             </div>
             <div class="col-md-6">
                <div class="widget_menu">
                   <h3>Account</h3>
                   <ul>
                      <li><a href="{{ url('/user/profile') }}">Account</a></li>
                      <li><a href="{{ url('/show_cart') }}">Checkout</a></li>
                      <li><a href="{{ url('/view_products') }}">Shopping</a></li>
                   </ul>
                </div>
             </div>
                </div>
             </div>
             <div class="col-md-5">
                <div class="widget_menu">
                   <h3>Newsletter</h3>
                   <div class="information_f">
                     <p>Subscribe by our newsletter and get update.</p>
                   </div>
                   <div class="form_sub">
                      <form>
                         <fieldset>
                            <div class="field">
                               <input type="email" placeholder="Enter Your Mail" name="email" />
                               <input type="submit" value="Subscribe" />
                            </div>
                         </fieldset>
                      </form>
                   </div>
                </div>
             </div>
             </div>
          </div>
       </div>
    </div>
 </footer>
