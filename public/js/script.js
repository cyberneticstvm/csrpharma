$(function(){
    "use strict";

    $('.select2').select2();

    $(".search-select").select2({
        allowClear: true
    });

    $(".dtpicker").pickadate({
        format: "dd/mmm/yyyy",
        selectYears: 100,
        selectMonths: true,
        //max: true
    });

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('form').submit(function(){
        $(".btn-submit").attr("disabled", true);
        $(".btn-submit").html("<span class='spinner-grow spinner-grow-sm' role='status' aria-hidden='true'></span>&nbsp;Loading...");
    });

    $(document).on("keydown", ".tblStock tbody .srp", function(e){
        if(e.keyCode == 9){
            addRowInStockTbl();
        }
    });
});

$('#MyDataTable').addClass( 'nowrap' ).dataTable({
    responsive: true
});

function addRowInStockTbl(){
    $(".tblStock tbody").append("<tr><td><select class='form-control select2 selProduct' name='product[]' required='required'></td><td><input type='text' class='form-control' placeholder='Batch No.' name='batch_no[]' required='required'></td><td><input type='text' class='form-control' placeholder='mm/yyyy' name='expiry_date[]' required='required'></td><td><input type='number' step='any' class='form-control text-end qty' placeholder='0' name='qty[]' required='required'></td><td><input type='number' step='any' class='form-control text-end mrp' placeholder='0' name='mrp[]' required='required'></td><td><input type='number' step='any' class='form-control text-end srp' placeholder='0' name='srp[]' required='required'></td><td class='text-center'><a href='javascript:void(0)' onClick='$(this).parent().parent().remove()'><i class='fa fa-trash text-danger'></i></a></td></tr>");
    bindDDL('selProduct', '/helper/product/');
    return false;
}
function bindDDL(ddl, url){
    $.ajax({
        type: 'GET',
        url: url
    }).then(function (data){
        xdata = $.map(data, function(obj){
            obj.text = obj.name || obj.id;  
            return obj;
        });
        $('.'+ddl).select2({data:xdata});
    });
}