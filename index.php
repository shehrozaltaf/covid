<!DOCTYPE html>
<html lang="en">
<head>
    <title>COVID 19</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
<div class="container-contact100">
    <div class="wrap-contact100">
        <div class="contact100-form validate-form">
				<span class="contact100-form-title">
					Corornavirus Self Assessment
				</span>

            <div class="wrap-input100 bg1">
                <span class="label-input100">MR-Number:</span>
                <input class="input100" type="text" name="mr_number" id="mr_number" placeholder="Enter MR-Number">
                <span class="focus-input100"></span>
            </div>

            <div class="wrap-input100 bg1">
                <span class="label-input100">Age (in years) *: </span>
                <input class="input100" type="number" min="1" max="99" name="age" id="age"
                       placeholder="Enter Age (in years)">
            </div>

            <div class="wrap-input100 input100-select bg1">
                <span class="label-input100">Gender *:</span>
                <div>
                    <select class="js-select2" name="gender" id="gender">
                        <option value="0" readonly disabled selected>Select gender</option>
                        <option value="1">Male</option>
                        <option value="2">Female</option>
                        <option value="3">Other</option>
                    </select>
                    <div class="dropDownSelect2"></div>
                </div>
            </div>

            <div class="wrap-input100 bg1 rs1-wrap-input100">
                <span class="label-input100">Weight:</span>
                <input class="input100" type="text" name="weight" id="weight" placeholder="Enter Weight">
            </div>

            <div class="wrap-input100 bg1 rs1-wrap-input100">
                <span class="label-input100">Height</span>
                <input class="input100" type="text" name="height" id="height" placeholder="Enter Height">
            </div>

            <div class="wrap-input100 input100-select bg1 rs1-wrap-input100">
                <span class="label-input100">Blood Group *:</span>
                <div>
                    <select class="js-select2" name="blood_group" id="blood_group">
                        <option value="0" readonly disabled selected>Select Blood Group</option>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                    </select>
                    <div class="dropDownSelect2"></div>
                </div>
            </div>

            <div class="wrap-input100 input100-select bg1 rs1-wrap-input100">
                <span class="label-input100">Marital Status *:</span>
                <div>
                    <select class="js-select2" name="marital_status" id="marital_status">
                        <option value="0" readonly disabled selected>Select Marital Status</option>
                        <option value="Single">Single</option>
                        <option value="Married">Married</option>
                        <option value="Single Parent">Single Parent (Widow/Divorce)</option>
                    </select>
                    <div class="dropDownSelect2"></div>
                </div>
            </div>
            <div class="wrap-input100 input100-select bg1">
                <span class="label-input100">Fever *:</span>
                <div>
                    <select class="js-select2" name="fever" id="fever"
                            onchange="skipQuestion('fever','fever_child')">
                        <option value="0" readonly disabled selected>Select Fever Status</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                    <div class="dropDownSelect2"></div>
                </div>
            </div>
            <div class="wrap-input100  bg1 rs1-wrap-input100 fever_child dhide">
                <span class="label-input100">Duration of Fever (in Days):</span>
                <input class="input100" type="number" min="1" name="duration_of_fever" id="duration_of_fever"
                       placeholder="Enter Duration of Fever">
            </div>
            <div class="wrap-input100  bg1 rs1-wrap-input100 fever_child dhide">
                <span class="label-input100">Current Temperature (in Celsius )*:</span>
                <input class="input100" type="number" value="99" min="99" max="102" name="current_temperature"
                       id="current_temperature" placeholder="Enter Current Temperature">
            </div>
            <div class="wrap-input100 input100-select bg1">
                <span class="label-input100">Hospital Admission (last 14 days) *:</span>
                <div>
                    <select class="js-select2"
                            onchange="skipQuestion('hospital_admission','hospital_admission_child')"
                            name="hospital_admission" id="hospital_admission">
                        <option value="0" readonly disabled selected>Select Hospital Admission</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                    <div class="dropDownSelect2"></div>
                </div>
            </div>

            <div class="wrap-input100  bg1 hospital_admission_child dhide">
                <span class="label-input100">Date of Discharge:</span>
                <input class="input100" type="date" name="date_of_discharge" id="date_of_discharge"
                       placeholder="Enter Date of Discharge">
            </div>

            <div class="wrap-input100 input100-select bg1 ">
                <span class="label-input100">Contact with Patient *:</span>
                <div>
                    <select class="js-select2" name="contact_with_Patient"
                            onchange="skipQuestion('contact_with_Patient','contact_with_Patient_child')"
                            id="contact_with_Patient">
                        <option value="0" readonly disabled selected>Select Contact with Patient</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                    <div class="dropDownSelect2"></div>
                </div>
            </div>
            <div class="wrap-input100 input100-select bg1 contact_with_Patient_child dhide">
                <span class="label-input100">Contact with COVID Patient *:</span>
                <div>
                    <select class="js-select2" name="contact_with_covid_patient" id="contact_with_covid_patient">
                        <option value="0" readonly disabled selected>Select Contact with COVID Patient</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                    <div class="dropDownSelect2"></div>
                </div>
            </div>
            <div class="wrap-input100 input100-select bg1">
                <span class="label-input100">History of Travel (last 14 days) *:</span>
                <div>
                    <select class="js-select2" name="travel_history" id="travel_history"
                            onchange="skipQuestion('travel_history','travel_history_child')">
                        <option value="0" readonly disabled selected>Select History of Travel</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                    <div class="dropDownSelect2"></div>
                </div>
            </div>
            <div class="wrap-input100 bg1 travel_history_child dhide">
                <span class="label-input100">Countries Visited</span>
                <div class="m-t-15 checbox_maindiv">
                    <div class="checkbox">
                        <input id="Italy" type="checkbox" name="countryVisited" value="Italy">
                        <label for="Italy">Italy</label>
                    </div>
                    <div class="checkbox">
                        <input id="China" type="checkbox" name="countryVisited" value="China">
                        <label for="China">China</label>
                    </div>
                    <div class="checkbox">
                        <input id="Iran" type="checkbox" name="countryVisited" value="Iran">
                        <label for="Iran">Iran</label>
                    </div>
                    <div class="checkbox">
                        <input id="Spain" type="checkbox" name="countryVisited" value="Spain">
                        <label for="Spain">Spain</label>
                    </div>
                    <div class="checkbox">
                        <input id="Germany" type="checkbox" name="countryVisited" value="Germany">
                        <label for="Germany">Germany</label>
                    </div>
                    <div class="checkbox">
                        <input id="France" type="checkbox" name="countryVisited" value="France">
                        <label for="France">France</label>
                    </div>
                    <div class="checkbox">
                        <input id="USA" type="checkbox" name="countryVisited" value="USA">
                        <label for="USA">USA</label>
                    </div>
                    <div class="checkbox">
                        <input id="UK" type="checkbox" name="countryVisited" value="UK">
                        <label for="UK">UK</label>
                    </div>
                    <div class="checkbox">
                        <input id="Netherlands" type="checkbox" name="countryVisited" value="Netherlands">
                        <label for="Netherlands">Netherlands</label>
                    </div>
                    <div class="checkbox">
                        <input id="Japan" type="checkbox" name="countryVisited" value="Japan">
                        <label for="Japan">Japan</label>
                    </div>
                    <div class="checkbox">
                        <input id="Others" type="checkbox" name="countryVisited" value="Others"
                               onclick="othercountry()">
                        <label for="Others">Others (Specify)</label>
                    </div>
                </div>
            </div>

            <div class="wrap-input100  bg1 dhide othercountry">
                <span class="label-input100">Others (country):</span>
                <input class="input100" type="text" name="other_country" id="other_country"
                       placeholder="Enter Country that you visited">
            </div>

            <div class="wrap-input100  bg1 travel_history_child dhide">
                <span class="label-input100">Date of Arrival (in Pakistan):</span>
                <input class="input100" type="date" name="date_of_arrival" id="date_of_arrival"
                       placeholder="Enter Date of Arrival (in Pakistan)">
            </div>

            <div class="wrap-input100 bg1 ">
                <span class="label-input100">Symptoms</span>
                <div class="m-t-15 checbox_maindiv">
                    <div class="checkbox">
                        <input id="Cough" type="checkbox" name="Cough" value="Y">
                        <label for="Cough">Cough</label>
                    </div>
                    <div class="checkbox">
                        <input id="Sore_Throat" type="checkbox" name="Sore_Throat" value="Y">
                        <label for="Sore_Throat">Sore Throat</label>
                    </div>
                    <div class="checkbox">
                        <input id="Shortness_of_Breath" type="checkbox" name="Shortness_of_Breath" value="Y">
                        <label for="Shortness_of_Breath">Shortness of Breath</label>
                    </div>
                    <div class="checkbox">
                        <input id="Fatigue_Weakness" type="checkbox" name="Fatigue_Weakness" value="Y">
                        <label for="Fatigue_Weakness">Fatigue/Weakness</label>
                    </div>
                    <div class="checkbox">
                        <input id="Pain" type="checkbox" name="Pain" value="Y">
                        <label for="Pain">Pain/Aches</label>
                    </div>
                    <div class="checkbox">
                        <input id="Phelgm" type="checkbox" name="Phelgm" value="Y">
                        <label for="Phelgm">Phelgm</label>
                    </div>
                    <div class="checkbox">
                        <input id="Chills" type="checkbox" name="Chills" value="Y">
                        <label for="Chills">Chills</label>
                    </div>
                    <div class="checkbox">
                        <input id="Headache" type="checkbox" name="Headache" value="Y">
                        <label for="Headache">Headache</label>
                    </div>
                    <div class="checkbox">
                        <input id="Nausea" type="checkbox" name="Nausea" value="Y">
                        <label for="Nausea">Nausea</label>
                    </div>
                    <div class="checkbox">
                        <input id="Vomiting" type="checkbox" name="Vomiting" value="Y">
                        <label for="Vomiting">Vomiting</label>
                    </div>
                    <div class="checkbox">
                        <input id="Stomach_Pain" type="checkbox" name="Stomach_Pain" value="Y">
                        <label for="Stomach_Pain">Stomach Pain</label>
                    </div>
                    <div class="checkbox">
                        <input id="Sneezing" type="checkbox" name="Sneezing" value="Y">
                        <label for="Sneezing">Sneezing</label>
                    </div>
                    <div class="checkbox">
                        <input id="Runny_Nose" type="checkbox" name="Runny_Nose" value="Y">
                        <label for="Runny_Nose">Runny Nose</label>
                    </div>
                </div>
            </div>

            <div class="wrap-input100 bg1 ">
                <span class="label-input100">Pre-Existing Conditions</span>
                <div class="m-t-15 checbox_maindiv1">
                    <div class="checkbox">
                        <input id="Heart_Problems" type="checkbox" name="Heart_Problems" value="Y">
                        <label for="Heart_Problems">Heart Problems</label>
                    </div>
                    <div class="checkbox">
                        <input id="Diabetics" type="checkbox" name="Diabetics" value="Y">
                        <label for="Diabetics">Diabetics</label>
                    </div>
                    <div class="checkbox">
                        <input id="Hypertensive" type="checkbox" name="Hypertensive" value="Y">
                        <label for="Hypertensive">Hypertensive</label>
                    </div>
                    <div class="checkbox">
                        <input id="Respiratory_Illness" type="checkbox" name="Respiratory_Illness" value="Y">
                        <label for="Respiratory_Illness">Respiratory Illness</label>
                    </div>
                    <div class="checkbox">
                        <input id="Cancer" type="checkbox" name="Cancer" value="Y">
                        <label for="Cancer">Cancer</label>
                    </div>
                </div>
            </div>

            <div class="container-contact100-form-btn">
                <button class="contact100-form-btn" onclick="submitdata()">
						<span>
							Submit
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
                </button>
            </div>
        </div>
    </div>
</div>
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--<script src="vendor/animsition/js/animsition.min.js"></script>-->
<!--<script src="vendor/bootstrap/js/popper.js"></script>-->
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/select2/select2.min.js"></script>
<script src="js/sweetalert.min.js"></script>
<script>
    $(".js-select2").each(function () {
        $(this).select2({
            minimumResultsForSearch: 20,
            dropdownParent: $(this).next('.dropDownSelect2')
        });
        $(".js-select2").each(function () {
            $(this).on('select2:close', function (e) {
                if ($(this).val() == "Please chooses") {
                    $('.js-show-service').slideUp();
                } else {
                    $('.js-show-service').slideUp();
                    $('.js-show-service').slideDown();
                }
            });
        });
    })
</script>
<script src="js/main.js"></script>
<script src="js/submitform.js"></script>
</body>
</html>