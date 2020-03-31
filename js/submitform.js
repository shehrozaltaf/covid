$(document).ready(
    function () {
        othercountry();
        cough();
        sob();
    }
);

function submitdata() {
    var flag = 0;
    var data = {};
    data['user_name'] = $('#user_name').val();
    data['contact_num'] = $('#contact_num').val();
    data['mr_number'] = $('#mr_number').val();
    data['age'] = $('#age').val();
    if (data['age'] == undefined || data['age'] == '') {
        flag = 1;
        swal("Age", "Invalid Age", "error");
        return false;
    }
    data['gender'] = $('#gender').val();
    if (data['gender'] == undefined || data['gender'] == '' || data['gender'] == '0') {
        flag = 1;
        swal("Gender", "Invalid Gender", "error");
        return false;
    }
    data['weight'] = $('#weight').val();
    data['height'] = $('#height').val();
    data['blood_group'] = $('#blood_group').val();
    if (data['blood_group'] == undefined || data['blood_group'] == '' || data['blood_group'] == '0') {
        flag = 1;
        swal("Blood Group", "Invalid Blood Group", "error");
        return false;
    }
    data['marital_status'] = $('#marital_status').val();
    if (data['marital_status'] == undefined || data['marital_status'] == '' || data['marital_status'] == '0') {
        flag = 1;
        swal("Marital Status", "Invalid Marital Status", "error");
        return false;
    }
    data['fever'] = $('#fever').val();
    if (data['fever'] == undefined || data['fever'] == '' || data['fever'] == '0') {
        flag = 1;
        swal("Fever", "Invalid Fever", "error");
        return false;
    }
    data['duration_of_fever'] = $('#duration_of_fever').val();
    data['current_temperature'] = $('#current_temperature').val();
    data['hospital_admission'] = $('#hospital_admission').val();
    if (data['gender'] == undefined || data['gender'] == '' || data['gender'] == '0') {
        flag = 1;
        swal("Gender", "Invalid Gender", "error");
        return false;
    }
    data['date_of_discharge'] = $('#date_of_discharge').val();
    data['contact_with_Patient'] = $('#contact_with_Patient').val();
    if (data['contact_with_Patient'] == undefined || data['contact_with_Patient'] == '' || data['contact_with_Patient'] == '0') {
        flag = 1;
        swal("Contact with Patient", "Invalid Contact with Patient", "error");
        return false;
    }
    data['contact_with_covid_patient'] = $('#contact_with_covid_patient').val();
    data['travel_history'] = $('#travel_history').val();
    if (data['travel_history'] == undefined || data['travel_history'] == '' || data['travel_history'] == '0') {
        flag = 1;
        swal("Travel History", "Invalid Travel History", "error");
        return false;
    }
    var countryVisited = [];
    $.each($("input[name='countryVisited']:checked"), function () {
        countryVisited.push($(this).val());
    });
    data['countryVisited'] = countryVisited;
    data['other_country'] = $('#other_country').val();
    data['date_of_arrival'] = $('#date_of_arrival').val();
    data['Cough'] = $("#Cough:checked").val();
    data['Sore_Throat'] = $("#Sore_Throat:checked").val();
    data['Shortness_of_Breath'] = $("#Shortness_of_Breath:checked").val();
    data['Fatigue_Weakness'] = $("#Fatigue_Weakness:checked").val();
    data['Pain'] = $("#Pain:checked").val();
    data['Phelgm'] = $("#Phelgm:checked").val();
    data['Chills'] = $("#Chills:checked").val();
    data['Headache'] = $("#Headache:checked").val();
    data['Nausea'] = $("#Nausea:checked").val();
    data['Vomiting'] = $("#Vomiting:checked").val();
    data['Stomach_Pain'] = $("#Stomach_Pain:checked").val();
    data['Sneezing'] = $("#Sneezing:checked").val();
    data['Runny_Nose'] = $("#Runny_Nose:checked").val();
    data['days_cough'] = $("#days_cough").val();
    data['day_sob'] = $("#day_sob").val();
    data['Heart_Problems'] = $("#Heart_Problems:checked").val();
    data['Diabetics'] = $("#Diabetics:checked").val();
    data['Hypertensive'] = $("#Hypertensive:checked").val();
    data['Respiratory_Illness'] = $("#Respiratory_Illness:checked").val();
    data['Cancer'] = $("#Cancer:checked").val();
    if (flag == 0) {
        $.ajax({
            url: './backend/submitData.php',
            method: 'POST',
            data: data,
            success: function (res) {
                $('.msg').removeClass('dhide');

                if (data['fever'] == 'Yes' && data['Cough'] == 'Y' && data['Shortness_of_Breath'] == 'Y') {
                    $('.msg').removeClass('error').addClass('success');
                    $('.msgText').html('You should consult your nearest COVID-19 center and tell the doctor about you symptoms');
                    swal("Please get yourself tested for Coronavirus.", "We successfully received your query");
                } else if (res == 1) {
                    $('.msg').removeClass('error').addClass('success');
                    $('.msgText').html('We successfully received your query');
                    swal("Good job!", "We successfully received your query", "success");
                } else {
                    $('.msg').removeClass('success').addClass('error');
                    $('.msgText').html('OOPS! Something went wrong');
                    swal("OOPS!", "Something went wrong", "error");
                }
            }
        });
    } else {
        swal("OOPS!", "Some data is missing.", "error");
    }
}

function skipQuestion(main, child) {
    var fever = $('#' + main).val();
    if (fever == 'No') {
        $('.' + child).addClass('dhide');
    } else {
        $('.' + child).removeClass('dhide');
    }
}

function othercountry() {
    var Others = $("#Others:checked").val();
    if (Others == 'Others') {
        $('.othercountry').removeClass('dhide');
    } else {
        $('.othercountry').addClass('dhide')
    }
}

function cough() {
    var Cough = $("#Cough:checked").val();
    if (Cough == 'Y') {
        $('.othercough').removeClass('dhide');
    } else {
        $('.othercough').addClass('dhide')
    }
}

function sob() {
    var Shortness_of_Breath = $("#Shortness_of_Breath:checked").val();
    if (Shortness_of_Breath == 'Y') {
        $('.otherShortness_of_Breath').removeClass('dhide');
    } else {
        $('.otherShortness_of_Breath').addClass('dhide')
    }
}