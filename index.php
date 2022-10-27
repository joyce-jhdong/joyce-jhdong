<?php
//session_start();

$title = "Health, Safety & Environment Management System";
$subtitle = "Health, Safety & Environment Management System";

define("PATH_COMMON_CONSTANT", $_SERVER['DOCUMENT_ROOT']."/common/constant/common_constant.php");

//******* Required *******
include_once(PATH_COMMON_CONSTANT);
include_once(PATH_HEADER);
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"/>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<style type="text/css">
	.card-header { padding: .1rem 1rem !important; }
	.card-body { padding: 0.8rem !important; }
</style>
<br />

<div class="bs-example">
    <div class="accordion" id="accordionExample">
        <div class="card">
            <div class="card-header" id="heading1">
                <h2 class="mb-0">
                    <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapse1">Element 1 - Safety Policy</button>									
                </h2>
            </div>
            <div id="collapse1" class="collapse show" aria-labelledby="heading1" data-parent="#accordionExample">
                <div class="card-body">
                    <ul>
						<li><a href="/docs/index.php?file=HSEMS01_HSE_Policy_Organisation_Responsibility&type=pdf&department=hse&group=Element1"/>HSEMS01 HSE Policy, Organisation and Responsibility</a></li>
						<li><a href="/docs/index.php?file=HSE_Policy&type=pdf&department=hse&group=Element1"/>Bioinformatics Institute - HSE Policy</a></li>
					</ul> 
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="heading2">
                <h2 class="mb-0">
                    <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapse2">Element 2 - Safe Work Procedures</button>
                </h2>
            </div>
            <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordionExample">
                <div class="card-body">
                    <ul>
						<li class="dropdownItems"><a href="/docs/index.php?file=HSEMS02_Safe_Work_Procedures&type=pdf&department=hse&group=Element2"/>HSEMS02 Safe Work Procedures</a></li>
					</ul>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="heading3">
                <h2 class="mb-0">
                    <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapse3">Element 3 - Safety Training</button>                     
                </h2>
            </div>
            <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordionExample">
                <div class="card-body">
                    <ul>
						<li class="dropdownItems"><a href="/docs/index.php?file=HSEMS03-F-02-V01_Declaration_of_HSE_and_Security_Briefing&type=pdf&department=hse&group=Element3"/>HSEMS03-F-02-V01 - Declaration of HSE and Security Briefing</a></li>
						<li class="dropdownItems"><a href="/docs/index.php?file=HSEMS03-F-01-V02_Laboratory_HSE_Training_Records&type=pdf&department=hse&group=Element3"/>HSEMS03-F-01-V02 - Laboratory HSE Training Records</a></li>
						<li class="dropdownItems"><a href="/docs/index.php?file=HSEMS03_Safety_Training&type=pdf&department=hse&group=Element3"/>HSEMS03- Safety Training</a></li>
					</ul>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="heading4">
                <h2 class="mb-0">
                    <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapse4">Element 4 - Group Meeting</button>                     
                </h2>
            </div>
            <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordionExample">
                <div class="card-body">
                    <ul>
						<li class="dropdownItems"><a href="/docs/index.php?file=HSEMS04_Group_Meeting&type=pdf&department=hse&group=Element4"/>HSEMS04 Group Meeting</a></li>
					</ul>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="heading5">
                <h2 class="mb-0">
                    <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapse5">Element 5 - Incident Investigation</button>                     
                </h2>
            </div>
            <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordionExample">
                <div class="card-body">
                    <ul>
						<li class="dropdownItems"><a href="/docs/index.php?file=HSEMS05_Accident_Incident_Investigation_ Analysis&type=pdf&department=hse&group=Element5"/>HSEMS05 Accident & Incident Investigation and Analysis</a></li>
						<li class="dropdownItems"><a href="/docs/index.php?file=HSEMS05_Accident_ Incident_Investigation_Analysis_Report_Form&type=doc&department=hse&group=Element5"/>HSEMS05 Accident & Incident Investigation and Analysis - Report Form</a></li>
					</ul>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="heading6">
                <h2 class="mb-0">
                    <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapse6">Element 6 - In-House Safety Rules & Regulations</button>                     
                </h2>
            </div>
            <div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#accordionExample">
                <div class="card-body">
                    <ul>
						<li class="dropdownItems"><a href="/docs/index.php?file=HSEMS06_ InHouse_Safety_Rules_Regulations&type=pdf&department=hse&group=Element6"/>HSEMS06 - In-House Safety Rules & Regulations</a></li>
						<li class="dropdownItems"><a href="/docs/index.php?file=HSEMS06_AnnexA_General_HSE_Rules_Regulations&type=doc&department=hse&group=Element6"/>HSEMS06 Annex A General HSE Rules & Regulations</a></li>
						<li class="dropdownItems"><a href="/docs/index.php?file=HSEMS06_AnnexB_Violation_Notice&type=doc&department=hse&group=Element6"/>HSEMS06- Annex B- Violation Notice</a></li>
					</ul>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="heading7">
                <h2 class="mb-0">
                    <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapse7">Element 7 - Safety Promotion</button>                     
                </h2>
            </div>
            <div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#accordionExample">
                <div class="card-body">
                    <ul>
						<li class="dropdownItems"><a href="/docs/index.php?file=HSEMS07_Safety_Promotion&type=pdf&department=hse&group=Element7"/>HSEMS07 - Safety Promotion</a></li>
					</ul>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="heading8">
                <h2 class="mb-0">
                    <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapse8">Element 8 - Contractors Safety Guidelines and Working Conditions</button>                     
                </h2>
            </div>
            <div id="collapse8" class="collapse" aria-labelledby="heading8" data-parent="#accordionExample">
                <div class="card-body">
                    <ul>
						<li class="dropdownItems"><a href="/docs/index.php?file=HSEMS08_Contractors_safety_guidelines_working_conditions&type=pdf&department=hse&group=Element8"/>HSEMS08 Contractors safety guidelines and working conditions</a></li>
						<li class="dropdownItems"><a href="/docs/index.php?file=HSEMS08_Evaluation_selection_control_contractors&type=pdf&department=hse&group=Element8"/>HSEMS08 - Evaluation, selection and control of contractors</a></li>
					</ul>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="heading9">
                <h2 class="mb-0">
                    <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapse9">Element 9 - Safety Inspection</button>                     
                </h2>
            </div>
            <div id="collapse9" class="collapse" aria-labelledby="heading9" data-parent="#accordionExample">
                <div class="card-body">
                    <ul>
						<li class="dropdownItems"><a href="/docs/index.php?file=HSEMS09_Safety_Inspection&type=pdf&department=hse&group=Element9"/>HSEMS09- Safety Inspection</a></li>
					</ul>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="heading10">
                <h2 class="mb-0">
                    <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapse10">Element 10 - Maintenance Regime (underway)</button>                     
                </h2>
            </div>
            <div id="collapse10" class="collapse" aria-labelledby="heading10" data-parent="#accordionExample">
                <div class="card-body"></div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="heading11">
                <h2 class="mb-0">
                    <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapse11">Element 11 - Hazard Analysis and Risk Assessment</button>                     
                </h2>
            </div>
            <div id="collapse11" class="collapse" aria-labelledby="heading11" data-parent="#accordionExample">
                <div class="card-body">
                    <ul>
						<li class="dropdownItems"><a href="/docs/index.php?file=Risk_Management_Policy_current&type=pdf&department=hse&group=Element11"/>BII Risk Management Policy (Current)</a></li>
						<li class="dropdownItems"><a href="/docs/index.php?file=Appendix1_HSEMS11-01_Risk_Assessment_Register&type=docx&department=hse&group=Element11"/>Appendix 1 - HSEMS11-01 - Risk Assessment Register</a></li>
						<li class="dropdownItems"><a href="/docs/index.php?file=Appendix2_HSEMS11-02_Risk_Assessment_Form&type=doc&department=hse&group=Element11"/>Appendix 2 - HSEMS11-02 - Risk Assessment Form</a></li>
					</ul>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="heading12">
                <h2 class="mb-0">
                    <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapse12">Element 12 - Control of movement and use of hazardous substances</button>                     
                </h2>
            </div>
            <div id="collapse12" class="collapse" aria-labelledby="heading12" data-parent="#accordionExample">
                <div class="card-body">
                    <ul>
						<li class="dropdownItems"><a href="/docs/index.php?file=HSEMS12_Use_of_Hazardous_Materials&type=pdf&department=hse&group=Element12"/>HSEMS12 - Use of Hazardous Materials</a></li>
                        <li class="dropdownItems"><a href="/docs/index.php?file=LicensingRequirements&type=xlsx&department=hse&group=Element12"/>Licensing Requirements for locally acquired hazardous chemicals</a></li>
					</ul>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="heading13">
                <h2 class="mb-0">
                    <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapse13">Element 13 - Occupational Programme (Underway)</button>                     
                </h2>
            </div>
            <div id="collapse13" class="collapse" aria-labelledby="heading13" data-parent="#accordionExample">
                <div class="card-body">
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="heading14">
                <h2 class="mb-0">
                    <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapse14">Element 14 - Emergency Preparedness</button>                     
                </h2>
            </div>
            <div id="collapse14" class="collapse" aria-labelledby="heading14" data-parent="#accordionExample">
                <div class="card-body">
                    <ul>
						<li class="dropdownItems"><a href="/docs/index.php?file=ERP_2019&type=pdf&department=hse&group=Element14"/>BII ERP 2019</a></li>
					</ul>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="heading15">
                <h2 class="mb-0">
                    <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapse15">Element 15 - Biosafety Management</button>                     
                </h2>
            </div>
            <div id="collapse15" class="collapse" aria-labelledby="heading15" data-parent="#accordionExample">
                <div class="card-body">
                </div>
            </div>
        </div>
    </div>
</div>
<br />
<p> For any enquiries regarding HSE matters, please contact <a href="mailto:suhaimi_mustafa@hq.a-star.edu.sg">Suhaimi</a> (Senior Officer of HSE).</p>

<?php include_once(PATH_FOOTER);?>
