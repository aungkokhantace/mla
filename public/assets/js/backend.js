/**
 * Created by william on 1/25/2017.
 * Created by william on 1/25/2017.
 */


function report_search_by_date(module) {
    var type = $("#type").val();
    var from_date = $("#from_date").val();
    var to_date = $("#to_date").val();

    if(from_date == "" && to_date == ""){
        var form_action = "/"+module+"/search/"+ type;
    }
    else if(from_date == "" && to_date != "") {
        sweetAlert("Oops...", "Please Choose the date !");
        return;
    }
    else if(from_date != "" && to_date == "") {
        sweetAlert("Oops...", "Please Choose the date !");
        return;
    }
    else{
        var dateComparison = check_date(from_date, to_date);

        if(dateComparison){
            var form_action = "/"+module+"/search/"+type+"/"+ from_date + "/" + to_date;
        }
        else{
            sweetAlert("Oops...", "Please Choose the valid date !");
            return;
        }
    }
    window.location = form_action;
}

function report_export(module) {
    var type = $("#type").val();
    var from_date = $("#from_date").val();
    var to_date = $("#to_date").val();

    if(from_date == "" && to_date == ""){
        var form_action = "/"+module+"/exportexcel/"+ type;
    }
    else if(from_date == "" && to_date != "") {
        sweetAlert("Oops...", "Please Choose the date !");
        return;
    }
    else if(from_date != "" && to_date == "") {
        sweetAlert("Oops...", "Please Choose the date !");
        return;
    }
    else{
        var dateComparison = check_date(from_date, to_date);

        if(dateComparison){
            var form_action = "/"+module+"/exportexcel/"+type+"/"+ from_date + "/" + to_date;
        }
        else{
            sweetAlert("Oops...", "Please Choose the valid date !");
            return;
        }
    }
    window.location = form_action;
}

/*function report_pdf_export(module) {
    var from_date = $("#from_date").val();
    var to_date = $("#to_date").val();

    if(from_date == "" && to_date == ""){
        var form_action = "/"+module+"/export";
    }
    else if(from_date == "" && to_date != "") {
        sweetAlert("Oops...", "Please Choose the date !");
        return;
    }
    else if(from_date != "" && to_date == "") {
        sweetAlert("Oops...", "Please Choose the date !");
        return;
    }
    else{
        var dateComparison = check_date(from_date, to_date);

        if(dateComparison){
            var form_action = "/"+module+"/export/"+ from_date + "/" + to_date;
        }
        else{
            sweetAlert("Oops...", "Please Choose the valid date !");
            return;
        }
    }
    window.location = form_action;
}*/

function check_date(from_date, to_date){

    var dateFirst = from_date.split('-');
    var dateSecond = to_date.split('-');
    var dateFistTemp = new Date(dateFirst[2], dateFirst[1], dateFirst[0]); //Year, Month, Date
    var dateSecondTemp = new Date(dateSecond[2], dateSecond[1], dateSecond[0]);

    if(dateSecondTemp < dateFistTemp){
        return false;
    }
    else{
        return true;
    }
}



