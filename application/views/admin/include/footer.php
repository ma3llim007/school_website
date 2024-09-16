<!-- Main Footer -->
<footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">

    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2023 - <script>
        document.write(new Date().getFullYear())
        </script> <a href="<?php echo base_url('');?>admin/dashboard">Bright View International School</a> </strong> All
    rights reserved.
</footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="<?php echo base_url('');?>admin_assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('');?>admin_assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url('');?>admin_assets/plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="<?php echo base_url('');?>admin_assets/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js">
</script>
<!-- InputMask -->
<script src="<?php echo base_url('');?>admin_assets/plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url('');?>admin_assets/plugins/inputmask/jquery.inputmask.min.js"></script>
<!-- date-range-picker -->
<script src="<?php echo base_url('');?>admin_assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="<?php echo base_url('');?>admin_assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js">
</script>
<!-- Tempusdominus Bootstrap 4 -->
<script
    src="<?php echo base_url('');?>admin_assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js">
</script>
<!-- Bootstrap Switch -->
<script src="<?php echo base_url('');?>admin_assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- BS-Stepper -->
<script src="<?php echo base_url('');?>admin_assets/plugins/bs-stepper/js/bs-stepper.min.js"></script>
<!-- dropzonejs -->
<script src="<?php echo base_url('');?>admin_assets/plugins/dropzone/min/dropzone.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('');?>admin_assets/dist/js/adminlte.min.js"></script>
<!-- Jquery Table JS-->
<script src="<?php echo base_url('');?>admin_assets/dist/datatable/datatables.js"></script>
<!-- JS TEXT EDITOR -->
<script src="https://ckeditor.com/latest/ckeditor.js"></script>
<!-- Page specific script -->
<script>
$(document).ready(function() {
    //Initialize Select2 Elements
    $('.select2').select2();
    //Initialize Select2 Elements
    $('.select2bs4').select2({
        theme: 'bootstrap4'
    })
    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', {
        'placeholder': 'dd/mm/yyyy'
    })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', {
        'placeholder': 'mm/dd/yyyy'
    })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });
    //Date and time picker
    $('#reservationdatetime').datetimepicker({
        icons: {
            time: 'far fa-clock'
        }
    });
    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
        timePicker: true,
        timePickerIncrement: 30,
        locale: {
            format: 'MM/DD/YYYY hh:mm A'
        }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker({
            ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month')
                    .endOf('month')
                ]
            },
            startDate: moment().subtract(29, 'days'),
            endDate: moment()
        },
        function(start, end) {
            $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
        })
    //Timepicker
    $('#timepicker').datetimepicker({
        format: 'LT'
    })
    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()
    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()
    $('.my-colorpicker2').on('colorpickerChange', function(event) {
        $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    })

    $("input[data-bootstrap-switch]").each(function() {
        $(this).bootstrapSwitch('state', $(this).prop('checked'));
    })
})
// BS-Stepper Init
document.addEventListener('DOMContentLoaded', function() {
    window.stepper = new Stepper(document.querySelector('.bs-stepper'))
})


    $(document).ready(function(){
        $('#edit_button').click(function(){
            $('#general_companyname').prop('disabled', false);
            $('#general_contactpersonname').prop('disabled', false);
            $('#general_address').prop('disabled', false);
            $('#general_pincode').prop('disabled', false);
            $('#general_city').prop('disabled', false);
            $('#general_county').prop('disabled', false);
            $('#general_phoneno').prop('disabled', false);
            $('#general_emailid').prop('disabled', false);
            $('#general_gstno').prop('disabled', false);
            $('#general_gstno_per').prop('disabled', false);
            $('#general_fax').prop('disabled', false);
            $('#general_mobilno').prop('disabled', false);
            $('#general_website').prop('disabled', false);
            $('#general_panno').prop('disabled', false);
            $('#general_facebook').prop('disabled', false);
            $('#general_twitter').prop('disabled', false);
            $('#general_linkedin').prop('disabled', false);
            $('#general_pinterest').prop('disabled', false);
            $('#general_whatsapp').prop('disabled', false);
            $('#general_instagram').prop('disabled', false);
            $('#general_googleplus').prop('disabled', false);
            $('#general_skype').prop('disabled', false);
            $('#general_iframe_address').prop('disabled', false);
            $('#general_financial_start_date').prop('disabled', false);
            $('#general_financial_end_date').prop('disabled', false);
            $('#general_holiday_start_date').prop('disabled', false);
            $('#general_holiday_end_date').prop('disabled', false);
            $('#genaral_statename').prop('disabled', false);
            $('#general_about_us').prop('disabled', false);
            $('#uploaded_passport').prop('disabled', false);
            $("#edit_button").hide();
            $("#update_button").show();
            $("#full_day_start_time_hide").show();
            $("#full_day_end_time_hide").show();
            $("#general_half_day_starttime_hide").show();
            $("#general_half_day_endtime_hide").show();
        });
    });
</script>
<!-- Table JQuery Script Start -->
<script>
    $(document).ready( function () {
        $('#Slider_Table').DataTable();
        $('#Banner_Table').DataTable();
        $('#Enquiry_Table').DataTable();
        $('#Online_Admission_Form').DataTable();
    });
</script>
<!-- Table JQuery Script End -->
</body>
</html>