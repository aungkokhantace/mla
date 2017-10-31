<!-- begin #Footer -->
<div id="footer" class="footer">
    <div class="pull-right">&copy; <?php echo date('Y'); ?> AcePlus Solutions All Rights Reserved</div>
    Backend v1.0.0
</div>        <!-- end #footer -->

<!-- begin scroll to top btn -->
<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
<!-- end scroll to top btn -->
</div>
<!-- end page container -->

<script src="/assets/js/jktCuteDropdown.min.js"></script>
<script src="/assets/js/datepicker/bootstrap-datepicker.js"></script>
<script src="/assets/js/combodate.js"></script>
<script src="/assets/js/amcharts.min.js"></script>
<script src="/assets/js/serial.min.js"></script>
<script src="/assets/js/light.min.js"></script>
<script src="/assets/js/crud.js"></script>
<script src="/assets/js/checkbox.js"></script>
<script src="/assets/js/sweetalert-dev.js"></script>
<script src="/assets/js/dropdown-checkbox.js"></script>
<script src="/assets/js/moment.min.js"></script>
<script src="/assets/js/custom.min.js"></script>
<script src="/assets/js/fileupload.js"></script>

<script src="/assets/js/validation/jquery.validate.js"></script>
<script src="/assets/js/validation/validation.js"></script>

{{--For amcharts--}}
<script src="/assets/js/amcharts/amcharts.js"></script>
<script src="/assets/js/amcharts/serial.js"></script>
<script src="/assets/js/amcharts/pie.js"></script>
<script src="/assets/js/amcharts/themes/light.js"></script>
<script src="/assets/js/amcharts/themes/chalk.js"></script>
<script src="/assets/js/amcharts/themes/dark.js"></script>
<script src="/assets/js/amcharts/plugins/export/export.js"></script>

<script>
$(document).ready(function() {
    //make sidebar active current tab when a page is selected
    var path = window.location.pathname;
    // path = path.replace(/\/$/, “”);
    // path = decodeURIComponent(path);
    var submenu = '.sub-menu li';
    var hassub = '.has-sub';

    $(hassub).removeClass('active');
    $(submenu).removeClass('active');

    $(".sub-menu li a").each(function () {
        var href = $(this).attr('href');

        if (path === href) {
        $(this).closest('li').addClass('active');
        $(this).closest('.has-sub').addClass('active');
        $(this).parents(".has-sub:eq(1)").toggleClass("active");
        }
    });
});
</script>


</body>
</html>