<?php require("../../db/connection.php"); ?>
<?php session_start(); ?>
<?php 
$updateSQL = "UPDATE tbl_purebiz_listings SET ";
$updateSQL .= "list_url='".$_POST["URL"]."',";
$updateSQL .= "list_recip='".$_POST["Recip"]."',";
$updateSQL .= "list_email='".$_POST["Email"]."',";
$updateSQL .= "list_num='".$_POST["Phone"]."',";
$updateSQL .= "list_addy='".$_POST["Address"]."',";
$updateSQL .= "list_country='".$_POST["Country"]."',";
$updateSQL .= "list_area='".$_POST["Area"]."',";
$updateSQL .= "list_postcode='".$_POST["Postcode"]."',";
$updateSQL .= "list_keys='".$_POST["Keywords"]."',";
if (isset($_POST["SponsoredText"])) {
  $updateSQL .= "list_desc='".str_replace("'","&acute;",$_POST["Description"])."',";
	$updateSQL .= "list_spon_text='".str_replace("'","&acute;",$_POST["SponsoredText"])."' ";
} else {
  $updateSQL .= "list_desc='".str_replace("'","&acute;",$_POST["Description"])."' ";
}
$updateSQL .= "WHERE tbl_id=".$_POST["tbl_id"];

mysql_select_db($database_Wisdom_Mcr, $Wisdom_Mcr);
$Result1 = mysql_query($updateSQL, $Wisdom_Mcr) or die(mysql_error());

header("Location: /adultdirectories/editmyprofile.php?s=1");
?>