<footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 footer-copyright">
                <p class="mb-0">{{ __('Copyright © '.date("Y").' | All Rights Reserved by ')}}</p>
              </div>
              <div class="col-md-6">
                <p class="pull-right mb-0">Developed By <a href="https://portfolio-ratin.com/" target="_blank"> Md.Khasrur Rahman</a><i class="fa fa-heart font-secondary"></i></p>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <script src="{{asset('assets/backend/js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('assets/backend/js/icons/feather-icon/feather.min.js')}}"></script>
    <script src="{{asset('assets/backend/js/icons/feather-icon/feather-icon.js')}}"></script>
    <script src="{{asset('assets/backend/js/sidebar-menu.js')}}"></script>
    <script src="{{asset('assets/backend/js/config.js')}}"></script>
    <script src="{{asset('assets/backend/js/bootstrap/popper.min.js')}}"></script>
    <script src="{{asset('assets/backend/js/bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/backend/js/script.js')}}"></script>
    <script src="{{asset('assets/backend/js/theme-customizer/customizer.js')}}"></script>
    @stack('js')
  </body>
</html>
