function showChangeAddress() {
    element = document.getElementById("address_shipment_data");
    check = document.getElementById("mrw_change_address");
    if (check.checked) {
        element.style.display='block';
    }
    else {
        element.style.display='none';
    }
}

//Get time slot value
function getTimeSlot(){

    //Get timeSlot
    var timeSlotValue=document.getElementsByName("tramo");

    for(var i=0;i<timeSlotValue.length;i++)
    {
        if(timeSlotValue[i].checked)
            resultado=timeSlotValue[i].value;
    }
        return resultado;
}

jQuery(document).ready(function($) { 

     //Controls show timeslot on Ecommerce service
    if(document.getElementById('mrw_select_service') && document.getElementById('show_select_timeSlot')){
        
        if ($('select[name=mrw_select_service]').val() == '0800'){
        timeSlot = document.getElementById('show_select_timeSlot');
        timeSlot.style.display='block';
        }
        else{
            timeSlot = document.getElementById('show_select_timeSlot');
            timeSlot.style.display='none';
        }
    }

    $("select[name=mrw_select_service]").change(function(){

        ch_service = $('select[name=mrw_select_service]').val();
        timeSlot = document.getElementById("show_select_timeSlot");

        if (ch_service == "0800") {
        timeSlot.style.display='block';
        }
        else {
            timeSlot.style.display='none';
        }
    });    


    jQuery("#btn_generate").click(function (){

    //Get order variables
    var billing_phone       = $("#billing_phone").val();
    var billing_email       = $("#billing_email").val();
    var shipping_address_1  = $("#shipping_address_1").val();
    var shipping_address_2  = $("#shipping_address_2").val();
    var shipping_postcode   = $("#shipping_postcode").val();
    var shipping_first_name = $("#shipping_first_name").val();
    var shipping_last_name  = $("#shipping_last_name").val();
    var shipping_weight     = $("#shipping_weight").val();
    var shipping_city       = $("#shipping_city").val();
    var order_id            = $("#order_id").val();
    var select_franchised   = 'N';
    var select_saturdayd    = 'N';
    var select_return       = 'N';
    var select_comments     = $("#mrw_select_comments").val();
    var select_npackages    = $("#mrw_select_npackages").val();  
    var select_service      = $("#mrw_select_service").val();
    var company_name        = $("#shipping_company").val();
    var time_slot           = getTimeSlot();

    var shipping_address = shipping_address_1 + ' ' + shipping_address_2;

    //New address
    var check_address   = false;
    var select_name     = null;
    var select_street   = null;
    var select_number   = null;
    var select_pc       = null;
    var select_city     = null;   
    var select_phone    = null;

    //Check change address
    if ($("#mrw_change_address").is(":checked")){

      if ($("#mrw_select_name").val().length === 0 || $("#mrw_select_street").val().length === 0 || $("#mrw_select_number").val().length === 0 || $("#mrw_select_pc").val().length === 0 || $("#mrw_select_city").val().length === 0 || $("#mrw_select_phone").val().length === 0){
        alert('Debe rellenar todos los campos de la dirección de recogida o desmarcar la opción!');
        return;
      }
        
      else{
        check_address   = true;
        select_name     = $("#mrw_select_name").val();
        select_street   = $("#mrw_select_street").val();
        select_number   = $("#mrw_select_number").val();
        select_pc       = $("#mrw_select_pc").val();
        select_city     = $("#mrw_select_city").val();
        select_phone    = $("#mrw_select_phone").val();
      }
    }

    //Check delivery on Saturday
    if ($("#mrw_select_saturdayd").is(":checked")){
      select_saturdayd = 'S';
    }

    //Check return
    if ($("#mrw_select_return").is(":checked")){
      select_return = 'S';
    }

    //Check delivery in Franchise
    if ($("#mrw_select_franchised").is(":checked")){
      select_franchised = 'E';
    }

    //Check if the number of packages is between 1 and 99
    if (select_npackages > 99 || select_npackages < 1 || isNaN(select_npackages)){
      select_npackages = 1;
    }

    $( "#mrw_tracking_info_no" ).css("display", "block");
    //$( "#mrw_address_info_no" ).css("display", "block");
    $( "#btn_generate" ).remove();
    $( "#shipment_data" ).remove();
    $( "#address_shipment_data" ).remove();
    $( "#mrw_check_address" ).remove();
    $( "#msg_generate" ).css("display", "block");

    jQuery.ajax({ 
         data: {action: 'generate_mrw_label',
                billing_phone:billing_phone,
                billing_email:billing_email,
                shipping_address:shipping_address,
                shipping_postcode:shipping_postcode,
                shipping_first_name:shipping_first_name,
                shipping_last_name:shipping_last_name,
                shipping_weight:shipping_weight,
                shipping_city:shipping_city,
                order_id:order_id,
                select_franchised:select_franchised,
                select_saturdayd:select_saturdayd,
                select_return:select_return,
                select_npackages:select_npackages,
                select_comments:select_comments,
                select_service:select_service,
                select_name:select_name,
                select_street:select_street,
                select_number:select_number,
                select_pc:select_pc,
                select_city:select_city,
                select_phone:select_phone,
                check_address:check_address,
                company_name:company_name,
                time_slot:time_slot
                },
         type: 'post',
         dataType: 'json',
         url: "admin-ajax.php",
         success: function(data) {

              //If the label is generated correctly
              if (data.state == 1){
                $( "#msg_generate" ).remove();
                $( "#btn_download" ).attr("type", "button");
                $( "#btn" ).attr("href", data.url_label);
                $ ("#mrw_service").text(data.service);
                $ ("#mrw_npackages").text(data.npack);
                $ ("#mrw_franchisedel").text(data.frandel);
                $ ("#mrw_saturdaydel").text(data.satdel);
                $ ("#mrw_return").text(data.ret);
                $ ("#mrw_timeslot").text(data.time_slot);
                $ ("#mrw_comments").text(data.comm);
                $ ("#mrw_tracking_num").text(data.mrw_tracking_number);
                $ ("#mrw_tracking_info").text(data.message);
                $ ("#mrw_timeslot").text(data.time_slot);

                if ( data.ad_check == 'true' ){
                    $( "#mrw_address_info_si" ).css("display", "block");
                    $ ("#mrw_addr_name").text(data.ad_name);
                    $ ("#mrw_addr_street").text(data.ad_street);
                    $ ("#mrw_addr_number").text(data.ad_number);
                    $ ("#mrw_addr_pc").text(data.ad_pc);
                    $ ("#mrw_addr_city").text(data.ad_city);
                    //$ ("#mrw_addr_phone").text(data.ad_phone);
                }

                alert(data.success);
              }
              //If there is any error generating the label
              if (data.state == 0){
                 alert(data.nosuccess);
              }

              // Refresh the page to complete the order
              window.location.reload();
        }
    });
});
});