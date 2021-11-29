$(document).ready(function() {
    $('#user-list-table').DataTable();
    $('#class-list-table').DataTable();
    $('#insurance-list-table').DataTable();
    $('#violation-list-table').DataTable();
    $('#maintenance-list-table').DataTable();
    $('#branches-list-table').DataTable();
    $('#pieces-list-table').DataTable();
    $('#reason-list-table').DataTable();
    $('#conditions-list-table').DataTable();
    $('#additions-list-table').DataTable();

    $(document).on('click', '.del_click', function() {
        var id = $(this).attr('id');
        var tbl = $(this).attr('table');
        $('#ids').val(id);
        $('#table_name').val(tbl);

    });
    $('.add_click').on('click', function() {
        $('.form_modal').trigger("reset");
        $(".js-example-rtl").val("").trigger("change");
        $('.modal-title').html("<h5 class='modal-title'>إضافة</h5>");
        $('.submit_click').attr('name', 'add');
        $('.enter_date').hide();
        $('.counter_back').hide();
        $('#oil_images').show();
        $('#accident_images').show();
    });

    $('.edit_click').on('click', function() {
        $('.form_modal').trigger("reset");
        $('.modal-title').html("<h5 class='modal-title'>تعديل</h5>");
        $('.submit_click').attr('name', 'edit');
    });

    $("body").on("submit", "form", function() {
        $(this).submit(function() {
            return false;
        });
        return true;
    });

    var count = 1;
    $('#add_maintenance_part').click(function() {
        count++;
        var a = '<div id="maintenance' + count + '" class="row">' + '<div class="col-md-5" >' + document.getElementById("maintenance_type").innerHTML + '</div>';
        var b = '<div class="col-md-5" >' + document.getElementById("maintenance_method").innerHTML + '</div>';
        var c = '<div class="col-md-2">' + '<div class="form-group" >' +
            '<button type="button" id ="' + count + '" class="btn btn_remove_maintenance btn-icon btn-danger has-ripple" > <i class="feather icon-minus" > </i><span class="ripple ripple-animate"></span > </button></div > </div>' + '</div > ';
        $('#maintenance_part').append(a + b + c);
    });

    $(document).on('click', '.btn_remove_maintenance', function() {
        var button_id = $(this).attr("id");
        $('#maintenance' + button_id).remove();
    });

    $('#add_piece_part').click(function() {
        count++;
        var pre_a = '<div id="piece' + count + '" class="row">' + '<div class="col-md-3 station_div" >' +
            '<div class="form-group">' +
            '<h5 class="text-primary" > اسم المحطة</h5>' +
            '<select name="piece_station[]" id="p_station' + count + '" class="js-example-rtl form-control">' +
            '<option value=""></option>' + '</select></div>' +
            '</div>';
        $(document).ready(function() {
            $.ajax({
                url: "actions/get_stations.php",
                data: {},
                dataType: 'json',
                method: 'POST',
                success: function(data) {
                    $.each(data, function(key, value) {
                        $('#p_station' + count).append($("<option value='" + value.id + "'>" + value.name + "</option>"));
                    });
                },
                error: function(error) {
                    alert("error try again");
                }
            });
        });
        var a = '<div class="col-md-3" >' +
            '<div class="form-group">' +
            '<h5 class="text-primary" > اسم القطعة</h5> ' +
            '<select required name="piece_type[]" id="piece_type' + count + '" class="js-example-rtl form-control">' +
            '<option value=""></option>' + '</select></div>' +
            '</div>';
        $(document).ready(function() {
            $.ajax({
                url: "actions/get_piece.php",
                data: {},
                dataType: 'json',
                method: 'POST',
                success: function(data) {
                    $.each(data, function(key, value) {
                        $('#piece_type' + count).append($("<option value='" + value.id + "'>" + value.name + "</option>"));
                    });
                },
                error: function(error) {
                    alert("error try again");
                }
            });
        });
        var b = '<div class="col-md-3" >' + document.getElementById("country").innerHTML + '</div>';
        var c = '<div class="col-md-3" >' + document.getElementById("method").innerHTML + '</div>';
        var d = '<div class="col-md-3" >' + document.getElementById("invoice").innerHTML + '</div>';
        var e = '<div class="col-md-3" >' + document.getElementById("price").innerHTML + '</div>';
        var f = '<div class="col-md-3" >' + document.getElementById("status").innerHTML + '</div>';
        var g = '<div class="col-md-2" >' + document.getElementById("note").innerHTML + '</div>';
        var h = '<div class="col-md-1">' + '<div class="form-group" >' +
            '<button type="button" id ="' + count + '" class="btn btn_remove_piece btn-icon btn-danger has-ripple" > <i class="feather icon-minus" > </i><span class="ripple ripple-animate"></span > </button></div > </div>' + '</div > <hr>';
        $('#piece_part').append(pre_a + a + b + c + d + e + f + g + h);
        $('.js-example-rtl').select2();
    });

    $('#add_piece_part_piece').click(function() {
        count++;

        var a = '<div id="piece' + count + '" class="row">' + '<div class="col-md-3" >' +
            '<div class="form-group">' +
            '<select required name="piece_type[]" id="piece_type' + count + '" class="js-example-rtl form-control">' +
            '<option value=""></option>' + '</select></div>' +
            '</div>';
        $(document).ready(function() {
            $.ajax({
                url: "actions/get_piece.php",
                data: {},
                dataType: 'json',
                method: 'POST',
                success: function(data) {
                    $.each(data, function(key, value) {
                        $('#piece_type' + count).append($("<option value='" + value.id + "'>" + value.name + "</option>"));
                    });
                },
                error: function(error) {
                    alert("error try again");
                }
            });
        });
        var b = '<div class="col-md-2" >' + document.getElementById("country").innerHTML + '</div>';
        var c = '<div class="col-md-2" >' + document.getElementById("note").innerHTML + '</div>';
        var d = '<div class="col-md-2" >' + document.getElementById("price").innerHTML + '</div>';
        var e = '<div class="col-md-2" >' + document.getElementById("status").innerHTML + '</div>';
        var f = '<div class="col-md-1">' + '<div class="form-group" >' +
            '<button type="button" id ="' + count + '" class="btn btn_remove_piece btn-icon btn-danger has-ripple" > <i class="feather icon-minus" > </i><span class="ripple ripple-animate"></span > </button></div > </div>' + '</div > ';
        $('#piece_part').append(a + b + c + d + e + f);
        $('.js-example-rtl').select2();
    });
    $(document).on('click', '.btn_remove_piece', function() {
        var button_id = $(this).attr("id");
        $('#piece' + button_id).remove();
    });

    $('#add_vehicle_attachment').click(function() {
        count++;
        var a = '<div id="attachment' + count + '" class="row">' + '<div class="col-md-5" >' + document.getElementById("attachment_div").innerHTML + '</div>';
        var b = '<div class="col-md-4">' + '<div class="form-group" >' +
            '<button type="button" id ="' + count + '" class="btn btn_remove_attachment btn-icon btn-danger has-ripple" > <i class="feather icon-minus" > </i><span class="ripple ripple-animate"></span > </button></div > </div>' + '</div > ';
        $('#add_attachment').append(a + b);
    });

    $(document).on('click', '.btn_remove_attachment', function() {
        var button_id = $(this).attr("id");
        $('#attachment' + button_id).remove();
    });


    $('#add_compensation').click(function() {
        count++;

        var a = '<div id="num_claim' + count + '" class="row">' + '<div class="col-md-2" >' + '<div class="form-group" >' + document.getElementById("num_claim").innerHTML + '</div>' + '</div>';
        var b = '<div class="col-md-2" >' + '<div class="form-group" >' + document.getElementById("status_claim").innerHTML + '</div>' + '</div>';
        var c = '<div class="col-md-2" >' + '<div class="form-group " >' + document.getElementById("date_claim").innerHTML + '</div>' + '</div>';
        var d = '<div class="col-md-1" >' + '<div class="form-group" >' + document.getElementById("responsibility").innerHTML + '</div>' + '</div>';
        var e = '<div class="col-md-2" >' + '<div class="form-group" >' + document.getElementById("insu_other_driver").innerHTML + '</div>' + '</div>';
        var f = '<div class="col-md-2" >' + '<div class="form-group" >' + document.getElementById("amount").innerHTML + '</div>' + '</div>';


        var g = '<div class="col-md-1">' + '<div class="form-group" >' +
            '<button type="button" id ="' + count + '" class="btn btn_remove_attachment btn-icon btn-danger has-ripple" > <i class="feather icon-minus" > </i><span class="ripple ripple-animate"></span > </button></div > </div>' + '</div > ' + '</div > ';
        $('#add_attachment2').append(a + b + c + d + e + f + g);
    });

    $(document).on('click', '.btn_remove_attachment', function() {
        var button_id = $(this).attr("id");
        $('#num_claim' + button_id).remove();
    });


    function validateNumber(event) {
        var key = window.event ? event.keyCode : event.which;
        if (event.keyCode === 8 || event.keyCode === 46) {
            return true;
        } else if (key < 48 || key > 57) {
            return false;
        } else {
            return true;
        }
    };

    function validateChar() {
        var key = window.event ? event.keyCode : event.which;
        if (event.keyCode === 8 || event.keyCode === 46) {
            return false;
        } else if (key < 48 || key > 57) {
            return true;
        } else {
            return false;
        }
    };

    $('.numberInput').keypress(validateNumber);
    $('.charInput').keypress(validateChar);

    $(document).on('change', '.calculate_oil', function() {
        var cost = parseFloat($('#oil_cost').val());
        var install = parseFloat($('#oil_install').val());
        var filter = parseFloat($('#oil_filter').val());
        var air = parseFloat($('#oil_air').val());
        var total = cost + install + filter + air;
        $('#oil_total').val(total);
    });
    $(document).on('click', '#checkfilter', function() {
        if ($('#checkfilter').prop('checked')) {
            $(".oil_filter").show();
            $('#oil_filter').prop('required', true);
        } else {
            $(".oil_filter").hide();
            $('#oil_filter').prop('required', false);

        }
    });
    $(document).on('click', '#checkinsurance', function() {
        if ($('#checkinsurance').prop('checked')) {
            $(".accident_insurance").show();
            $('#accident_insurance').prop('required', true);
            // $('#accident_damages').prop('disabled', true);
            // $('#accident_percent').prop('disabled', true);
            $('#accident_damages').prop('required', false);
            $('#accident_percent').prop('required', false);
            // $('#accident_damages').val('0');
            // $('#accident_percent').val('0');
        } else {
            $(".accident_insurance").hide();
            $('#accident_insurance').prop('required', false);
            $('#accident_damages').prop('disabled', false);
            $('#accident_percent').prop('disabled', false);
            $('#accident_damages').prop('required', true);
            $('#accident_percent').prop('required', true);
            $('#accident_insurance').val('0');
        }
    });

    $(document).on('click', '#checkair', function() {
        if ($('#checkair').prop('checked')) {
            $(".oil_air").show();
            $('#oil_air').prop('required', true);
        } else {
            $(".oil_air").hide();
            $('#oil_air').prop('required', false);

        }
    });
    $(document).on('change', '.accident_total', function() {
        var damage = parseFloat($('#accident_damages').val());
        var percent = parseFloat($('#accident_percent').val());
        var insurance = parseFloat($('#accident_insurance').val());
        var total = percent + damage + insurance;
        $('#accident_cost').val(total);
    });

    $(document).on('click', '#has_piece', function() {
        if ($('#has_piece').prop('checked')) {
            $("#part-two").show();
            $('#piece_type').prop('required', true);
            $('#p_method').prop('required', true);
            $('#p_invoice_num').prop('required', true);
            $('#piece_type').prop('required', true);
            $('#piece_price').prop('required', true);
            $('#p_method').prop('required', true);
        } else {
            $("#part-two").hide();
            $("#piece_part").hide();
            $('#piece_type').prop('required', false);
            $('#p_method').prop('required', false);
            $('#p_invoice_num').prop('required', false);
            $('#piece_type').prop('required', false);
            $('#piece_price').prop('required', false);
            $('#p_method').prop('required', false);
        }
    });
    $(document).on('change', '.interval', function() {
        var val = $(this).val();
        if (val == 1) {
            $(".range_div").show();
            $(".year_div").hide();
            $('.range_input').prop('required', true);
            $('.year_input').prop('required', false);
        } else if (val == 2) {
            $(".range_div").hide();
            $(".year_div").show();
            $('.range_input').prop('required', false);
            $('.year_input').prop('required', true);
        }
    });


});