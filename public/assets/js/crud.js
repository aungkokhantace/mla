/**
 * Created by Dell on 6/24/2016.
 * author Wai Yan Aung
 */

function create_setup(type){
    window.location ='/backend/' + type + '/create';
}

function edit_setup(type) {
    var data = [];
    $("input[name='edit_check']:checked").each(function () {
        data.push($(this).val());
    });
    var d = typeof(data);

    if (data[0] == null) {

        sweetAlert("Oops...", "Please select at least one item to edit !", "error");

    }
    else if (data[1] != null) {

        sweetAlert("Oops...", "Please select only one item to edit !", "error");

    }
    else {
        window.location ='/backend/' + type + "/edit/" + data;
    }
}

function delete_setup(type) {
    var data = [];
    $("input[name='edit_check']:checked").each(function () {
        data.push($(this).val());
    });
    var d = typeof(data);
    if (data[0] == null) {
        sweetAlert("Oops...", "Please select at least one item to delete !", "error");
    }
    //else if (data[1] != null) {
    //    sweetAlert("Oops...", "Please select only one item to delete !", "error");
    //
    //}
    else {
        swal({
                title: "Are you sure?",
                text: "You will not be able to recover!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55 ",
                confirmButtonText: "Confirm",
                cancelButtonText: "Cancel",
                closeOnConfirm: false,
                closeOnCancel: true
            },
            function (isConfirm) {
                if (isConfirm) {
                    //window.location = "/" + type + "/destroy/" + data;
                    //route path to do deletion in controller

                    $("#selected_checkboxes").val(data);
                    $("#frm_" + type).submit();
                } else {
                    return;
                }
            });
    }
}

function cancel_setup(type) {
    window.location.href = '/backend/' + type;
}


$("#check_all").click(function(event){
    if(this.checked) {
        $('.check_source').each(function() { //loop through each checkbox
            this.checked = true;  //select all checkboxes with class "checkbox1"
        });
    }else{
        $('.check_source').each(function() { //loop through each checkbox
            this.checked = false; //deselect all checkboxes with class "checkbox1"
        });
    }
});

function status_confirm_registration(id){

    swal({
            title: "Are you sure to confirm?",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55 ",
            confirmButtonText: "Yes",
            cancelButtonText: "No",
            closeOnConfirm: false,
            closeOnCancel: true
        },
        function (isConfirm) {
            if (isConfirm) {
                console.log('id'+id);
                /*window.location = "/" + type + "/destroy/" + data;*/
                window.location = "/backend/conference_registration" + "/2/"+id;
            } else {
                return;
            }
        });
}

function status_cancel_registration(id){
    swal({
            title: "Are you sure to cancel?",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55 ",
            confirmButtonText: "Yes",
            cancelButtonText: "No",
            closeOnConfirm: false,
            closeOnCancel: true
        },
        function (isConfirm) {
            if (isConfirm) {
                /*window.location = "/" + type + "/destroy/" + data;*/
                console.log('id'+id);
                window.location = "/backend/conference_registration" + "/3/"+id;
                //route path to do deletion in controller

                /* $("#selected_checkboxes").val(data);
                 $("#frm_" + type).submit();*/
            } else {
                return;
            }
        });
}

function status_confirm_programcall(id){

    swal({
            title: "Are you sure to confirm?",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55 ",
            confirmButtonText: "Yes",
            cancelButtonText: "No",
            closeOnConfirm: false,
            closeOnCancel: true
        },
        function (isConfirm) {
            if (isConfirm) {
                console.log('id'+id);
                /*window.location = "/" + type + "/destroy/" + data;*/
                window.location = "/backend/program_call" + "/2/"+id;
            } else {
                return;
            }
        });
}

function status_cancel_programcall(id){
    swal({
            title: "Are you sure to cancel?",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55 ",
            confirmButtonText: "Yes",
            cancelButtonText: "No",
            closeOnConfirm: false,
            closeOnCancel: true
        },
        function (isConfirm) {
            if (isConfirm) {
                /*window.location = "/" + type + "/destroy/" + data;*/
                console.log('id'+id);
                window.location = "/backend/program_call" + "/3/"+id;
                //route path to do deletion in controller

                /* $("#selected_checkboxes").val(data);
                 $("#frm_" + type).submit();*/
            } else {
                return;
            }
        });
}

function status_confirm_program_poster(id){

    swal({
            title: "Are you sure to confirm?",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55 ",
            confirmButtonText: "Yes",
            cancelButtonText: "No",
            closeOnConfirm: false,
            closeOnCancel: true
        },
        function (isConfirm) {
            if (isConfirm) {
                console.log('id'+id);
                /*window.location = "/" + type + "/destroy/" + data;*/
                window.location = "/backend/program_poster" + "/2/"+id;
            } else {
                return;
            }
        });
}

function status_cancel_program_poster(id){
    swal({
            title: "Are you sure to cancel?",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55 ",
            confirmButtonText: "Yes",
            cancelButtonText: "No",
            closeOnConfirm: false,
            closeOnCancel: true
        },
        function (isConfirm) {
            if (isConfirm) {
                /*window.location = "/" + type + "/destroy/" + data;*/
                console.log('id'+id);
                window.location = "/backend/program_poster" + "/3/"+id;
                //route path to do deletion in controller

                /* $("#selected_checkboxes").val(data);
                 $("#frm_" + type).submit();*/
            } else {
                return;
            }
        });
}

function status_confirm_exhibitor(id){

    swal({
            title: "Are you sure to confirm?",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55 ",
            confirmButtonText: "Yes",
            cancelButtonText: "No",
            closeOnConfirm: false,
            closeOnCancel: true
        },
        function (isConfirm) {
            if (isConfirm) {
                console.log('id'+id);
                /*window.location = "/" + type + "/destroy/" + data;*/
                window.location = "/backend/exhibitor" + "/2/"+id;
            } else {
                return;
            }
        });
}

function status_cancel_exhibitor(id){
    swal({
            title: "Are you sure to cancel?",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55 ",
            confirmButtonText: "Yes",
            cancelButtonText: "No",
            closeOnConfirm: false,
            closeOnCancel: true
        },
        function (isConfirm) {
            if (isConfirm) {
                /*window.location = "/" + type + "/destroy/" + data;*/
                console.log('id'+id);
                window.location = "/backend/exhibitor" + "/3/"+id;
                //route path to do deletion in controller

                /* $("#selected_checkboxes").val(data);
                 $("#frm_" + type).submit();*/
            } else {
                return;
            }
        });
}

function add_confirm_setup(type) {
    swal({
            title: "Are you sure?",
            text: "You want to confirm to submit your registration",
            type: "info",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55 ",
            confirmButtonText: "Confirm",
            cancelButtonText: "Cancel",
            closeOnConfirm: true,
            closeOnCancel: true
        },
        function (isConfirm) {
            if (isConfirm) {
                //window.location = "/" + type + "/destroy/" + data;
                //route path to do deletion in controller

                //$("#selected_checkboxes").val(data);
                $("#frm_" + type).submit();
            } else {
                return;
            }
        });
}
