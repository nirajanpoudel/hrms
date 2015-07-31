
    <!-- jQuery 2.1.4 -->
    <script src="{{ asset('plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <!-- Slimscroll -->
    <script src=" {{ asset('plugins/slimScroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='{{ asset('plugins/fastclick/fastclick.min.js') }}'></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/app.min.js') }}" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('dist/js/demo.js') }}" type="text/javascript"></script>
    <script>
    (function($){
        $('.add-new-btn').click(function(e){
            var input = '<div class="form-group">'
             input += '{!! Form::text('departments[]',null,['class'=>'form-control']) !!}';
            input += '</div>';
            e.preventDefault();
                $('.append').append(input);

        });
       

    })(jQuery);
    </script>
    @yield('script')
  </body>
</html>
