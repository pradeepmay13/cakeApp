$(function () {
    //Initialize Select2 Elements
    $(".select2").select2({
        allowClear: true
    });
    //Datemask dd/mm/yyyy
    $("#date_to").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
    //Datemask2 mm/dd/yyyy
    $("#date_from").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    //Money Euro
    $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    
    $("#volumeperweek").numeric({ decimal : ".",  negative : false, scale: 2, precision: 8 });
    $("#volumepermonth").numeric({ decimal : ".",  negative : false, scale: 2, precision: 8 });
    $("#volumeperyear").numeric({ decimal : ".",  negative : false, scale: 2, precision: 8 });
    
    $("#shipmentperweek").numeric({ decimal : false,  negative : false, precision: 5});
    $("#shipmentpermonth").numeric({ decimal : false,  negative : false, precision: 5 });
    $("#shipmentperyear").numeric({ decimal : false,  negative : false, precision: 5});
    $("#No_of_Packages").numeric({ decimal : false,  negative : false, precision: 5});
    $("#TransitTime").numeric({ decimal : false,  negative : false, precision: 5});
    
    $("#CNTR_CBM_perweek").numeric({ decimal : ".",  negative : false, scale: 2, precision: 8 });
    $("#CNTR_CBM_permonth").numeric({ decimal : ".",  negative : false, scale: 2, precision: 8 });
    $("#CNTR_CBM_peryear").numeric({ decimal : ".",  negative : false, scale: 2, precision: 8 });
    $("#Dimensionlength").numeric({ decimal : ".",  negative : false, scale: 2, precision: 8 });
    $("#Dimensionwidth").numeric({ decimal : ".",  negative : false, scale: 2, precision: 8 });
    $("#Dimensionheight").numeric({ decimal : ".",  negative : false, scale: 2, precision: 8 });
    
    $("#Sell_Rate").numeric({ decimal : ".",  negative : false, scale: 2, precision: 8 });
    
    $("[data-mask]").inputmask();

    //Date range picker
    $('#reservation').daterangepicker();
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
    //Date range as a button
    $('#daterange-btn').daterangepicker(
            {
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                startDate: moment().subtract(29, 'days'),
                endDate: moment()
            },
    function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
    }
    );

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
        checkboxClass: 'icheckbox_minimal-blue',
        radioClass: 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
        checkboxClass: 'icheckbox_minimal-red',
        radioClass: 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
        checkboxClass: 'icheckbox_flat-green',
        radioClass: 'iradio_flat-green'
    });

    //Colorpicker
    $(".my-colorpicker1").colorpicker();
    //color picker with addon
    $(".my-colorpicker2").colorpicker();

    //Timepicker
    $(".timepicker").timepicker({
        showInputs: false
    });
    //$('#current_line').empty();
     //$("#current_line").empty().trigger('change')
    //var data = [{ id: 0, text: 'item1' }, { id: 1, text: 'item2' }];
    //$("#destination_country").select2({
    //  data: data    
});
var $tabs = $('.nav-tabs-custom li');
$('#prevtab').on('click', function() {
    $tabs.filter('.active').prev('li').find('a[data-toggle="tab"]').tab('show');
});

$('#nexttab').on('click', function() {
    $tabs.filter('.active').next('li').find('a[data-toggle="tab"]').tab('show');
});

// Save Details
$('.btnNext').click(function(){
    if ($('#form_details').valid())
    {
        saveDetails('save','Next');            
    }
});
// save Tradelanes
$('#addtradelane, #updatetradelane').click(function(){
    //validateQuote(); // Note the form validation does not work when put inside it's own function, thus keep it here  
    //if (validateQuote() == true) {
        if($("#form_tradelanes #iquote_id").val()=='' || $("#form_tradelanes #iquote_id").val()==null || $("#form_tradelanes #iquote_id").val()==undefined) // quote ID number for tradelanes
        {
            bootbox.alert({message: "Please save quotation details first, after that you are able to save tradelanes", title: "Tradelanes not saved"});
        }
        else{
            if ($('#form_tradelanes').valid())
            {
                saveTradelanes('save','Next');
            }
        }
    //}
});
//save charges
$('#savecharges').click(function(){
    if ($('#form_charges').valid())
    {
        if($("#form_charges #tradelaneID").val()=='' || $("#form_charges #tradelaneID").val()==null || $("#form_charges #tradelaneID").val()==undefined) // tradelane ID number for tradelanes
        {
            bootbox.alert({message: "Please add and select tradelane first, after that you are able to save charges", title: "Charges not saved"});
        }
        else{
            saveCharges('save','Next');
        }
    }
});
$('.btnPrevious').click(function(){
    tab_redirect('Previous');    
});