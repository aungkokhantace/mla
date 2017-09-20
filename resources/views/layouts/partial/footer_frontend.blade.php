    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <!-- <p>copyright&copy;consalxvii</p> -->
                    <p>Copyright &copy; 2017 Consalxvii.org All Rights Reserved.</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="text-align:right;padding-top:20px;">
                    <a target="_blank" href="https://www.facebook.com/consalxvii/"><i class="fa fa-facebook-square fb-btn"></a></i>&nbsp;&nbsp;<i class="fa fa-twitter-square"></i>
                </div>
            </div>
        </div>
    </footer>


    <!-- jQuery -->
    <script src="/assets/frontend/js/jquery.js"></script>
    <script src="/assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/assets/frontend/js/bootstrap.min.js"></script>
    <script src="/assets/frontend/js/validation/jquery.validate.js"></script>
    <script src="/assets/frontend/js/validation/validation.js"></script>
    <script src="/assets/js/crud.js"></script>
    <script src="/assets/js/sweetalert.min.js"></script>
    <script src="/assets/js/sweetalert-dev.js"></script>
    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>


    <script>
        $(document).ready(function() {
            $("#search_term").autocomplete({
                source: "/autocomplete"
            });
        });
    </script>

</body>

</html>