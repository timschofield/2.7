<?php
require('./roots.php');
require($root_path.'include/core/inc_environment_global.php');
error_reporting($ErrorLevel);
$lang_tables[]='actions.php';
$lang_tables[]='prompt.php';
define('LANG_FILE','radio.php');
//$local_user='ck_radio_user';
define('NO_2LEVEL_CHK',1);
require_once($root_path.'include/core/inc_front_chain_lang.php');
if(isset($mode) && $mode=='save'&&isset($viewer)){
	$_SESSION['sess_dicom_viewer']=$viewer;
	 echo $viewer;
}
//if(!isset($_SESSION['sess_dicom_viewer'])) $_SESSION['sess_dicom_viewer']='nagoyatech';
?><?php html_rtl($lang); ?>
<!-- Generated by AceHTML Freeware http://freeware.acehtml.com -->
<head>
<?php echo setCharSet(); ?>

<title><?php echo $LDSelectViewer; ?></title>

</head>
<body onLoad="if (window.focus) window.focus()"><font face=arial>

<?php
if($mode=='save'){

?>
<script language="JavaScript">
<!-- Script Begin
window.opener.location.reload();
//window.close();
//  Script End -->
</script>
<?php
}
?>
<form name="classif" >
<table border=0 cellpadding=0 cellspacing=0 bgcolor="#efefef" width=100%>
  <tr>
    <td>
	<table border=0 cellspacing=1 width=100%>
   <tr>
     <td background="../../gui/img/common/default/tableHeaderbg.gif">
	 <font face=arial color="#efefef" size=2><b><?php echo $LDSelectViewer  ?> </b>
	 </td>
   </tr>
   <tr>
     <td>
	&nbsp;<p>
	 <font face=arial size=3>
	 <input type="radio" name="viewer" value="nagoyatech" <?php if($_SESSION['sess_dicom_viewer']=='nagoyatech') echo 'checked' ?>> <?php echo $LDNagoyaTechInst  ?>
	 	 <font size=1> ><a href="http://mars.elcom.nitech.ac.jp/dicom/index-e.html" target="_blank"><?php echo $LDPlsReadThis ?></a><</font> <br>
		 <br>
<!--       <input type="radio" name="viewer" value="raimjava" <?php if($_SESSION['sess_dicom_viewer']=='raimjava') echo 'checked' ?>> <?php echo $LDRAIMJAVA  ?>
	 <font size=1> ><a href="<?php echo $root_path  ?>modules/radiology/raimjava/care_demo_notice.htm" target="_blank"><?php echo $LDPlsReadThis ?></a><</font> <br>
 -->	 </td>
   </tr>

 </table>&nbsp;
 <p>
	</td>
  </tr>
</table>
<center>
 	<input type="hidden" name="mode" value="save">
 	<input type="hidden" name="lang" value="<?php echo $lang ?>">
 	<input type="hidden" name="sid" value="<?php echo $sid ?>">
 	<input type="submit" value=" <?php echo $LDOk ?> ">
  <input type="button" value="<?php echo $LDClose ?>" onClick="window.close()">
 </center>
</form>

</font>
</body>
</html>
