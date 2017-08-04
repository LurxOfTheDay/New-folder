<?php
	require_once "add-new-content(var).php";
	include_once "../WEFiles/Server/DB/OEDB.php";
?><!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en">
 <head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <meta name="generator" content="openElement (1.57.9)" />
  <link id="openElement" rel="stylesheet" type="text/css" href="../WEFiles/Css/v02/openElement.css?v=50491130400" />
  <link id="siteFonts" rel="stylesheet" type="text/css" href="../Files/Fonts/Fonts.css?v=50491130400" />
  <link id="OEBase" rel="stylesheet" type="text/css" href="add-new-content.css?v=50491130400" />
  <link rel="stylesheet" type="text/css" href="../WEFiles/Css/opentip.css?v=50491130400" />
  <!--[if lte IE 7]>
  <link rel="stylesheet" type="text/css" href="../WEFiles/Css/ie7.css?v=50491130400" />
  <![endif]-->
  <script type="text/javascript">
   var WEInfoPage = {"PHPVersion":"phpOK","OEVersion":"1-57-9","PagePath":"oe-bkoffice-v1/add-new-content","Culture":"DEFAULT","LanguageCode":"EN","RelativePath":"../","RenderMode":"Export","PageAssociatePath":"oe-bkoffice-v1/add-new-content","EditorTexts":null};
  </script>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script type="text/javascript" src="../WEFiles/Client/jQuery/migrate.js?v=50491130400"></script>
  <script type="text/javascript" src="../WEFiles/Client/Common/oe.min.js?v=50491130400"></script>
  <script type="text/javascript" src="add-new-content(var).js?v=50491130400"></script>
  <script type="text/javascript" src="../WEFiles/Client/jQuery/Plugins/jquery.form.js?v=50491130400"></script>
  <script type="text/javascript" src="../WEFiles/Client/opentip-jquery.min.js?v=50491130400"></script>
  <script type="text/javascript" src="../WEFiles/Client/WESendForm-v210.js?v=50491130400"></script>
  <script type="text/javascript">
   var WEEdValidators = {"WE5c0fac9c51":[{"MsgError":"Veuillez inscrire votre message d'erreur.","Expression":".+"}],"WE2e082bab7c":[{"MsgError":"Veuillez inscrire votre message d'erreur.","Expression":".+"}],"WE956d48ef36":[{"MsgError":"Please configure your error message.","Expression":"^[\\d]*$"}],"WE344c555617":[{"MsgError":"Please configure your error message.","Expression":"^[\\d]*$"}]}
  </script><?php
  	if (isset($oeHeaderInlineCode)) echo $oeHeaderInlineCode;
  ?>
 </head>
 <body class=""><?php
  	if (isset($oeStartBodyInlineCode)) echo $oeStartBodyInlineCode;
  ?>
  <form id="XForm" method="post" action="#"></form>
  <div id="XBody" class="BaseDiv RWidth OEPageXbody OESK_XBody_Default" style="z-index:0">
   <div class="OESZ OESZ_DivContent OESZG_XBody">
    <div class="OESZ OESZ_XBodyContent OESZG_XBody OECT OECT_Content OECTAbs">
     <div id="WEfbbaf6934f" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1">
      <div class="OESZ OESZ_DivContent OESZG_WEfbbaf6934f">
       <div class="OECT OECT_Content OECTAbs OEDynTag0">
        <div id="WEe8ef68ec6e" class="BaseDiv RNone OEWELink OESK_WELink_Default" style="z-index:1">
         <div class="OESZ OESZ_DivContent OESZG_WEe8ef68ec6e">
          <a class="OESZ OESZ_Link OESZG_WEe8ef68ec6e ContentBox OEDynTag0" data-cd="PageLink" href="<?php echo $oei['WEe8ef68ec6e..OEDynTag0.href'];?>">Go to Content Administration page<br /></a>
         </div>
        </div>
        <div id="WE283910f28c" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:3">
         <div class="OESZ OESZ_DivContent OESZG_WE283910f28c">
          <span class="OESZ OESZ_Text OESZG_WE283910f28c ContentBox OEDynTag0"><?php echo $oei['WE283910f28c..OEDynTag0.html1'];?></span>
         </div>
        </div>
        <div id="WEa3ad32486c" class="BaseDiv RNone OEWECodeBlock OESK_WECodeBlock_Default" style="z-index:2">
         <div class="OESZ OESZ_DivContent OESZG_WEa3ad32486c">
          <script>
            $(function(){
            // Animate report:
              var $reportTag = $('#WE283910f28c');
              $reportTag.fadeTo('slow', 0.25).fadeTo('slow', 1.0);
            });
          </script>
         </div>
        </div>
        <div id="WEe46f1a786d" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:4">
         <div class="OESZ OESZ_DivContent OESZG_WEe46f1a786d">
          <span class="OESZ OESZ_Text OESZG_WEe46f1a786d ContentBox">Item name (new or existing)</span>
         </div>
        </div>
        <div id="WE5c0fac9c51" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:5">
         <div class="OESZ OESZ_DivContent OESZG_WE5c0fac9c51">
          <input name="oebkArticleName" type="text" class="OESZ OESZ_TextBox OESZG_WE5c0fac9c51 OEDynTag0" value="<?php echo $oei['WE5c0fac9c51..OEDynTag0.value'];?>" />
         </div>
        </div>
        <div id="WEf7903bcf6a" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:6">
         <div class="OESZ OESZ_DivContent OESZG_WEf7903bcf6a">
          <span class="OESZ OESZ_Text OESZG_WEf7903bcf6a ContentBox">Detail name</span>
         </div>
        </div>
        <div id="WE2e082bab7c" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:7">
         <div class="OESZ OESZ_DivContent OESZG_WE2e082bab7c">
          <input name="oebkArticleDetail" type="text" class="OESZ OESZ_TextBox OESZG_WE2e082bab7c OEDynTag0" value="<?php echo $oei['WE2e082bab7c..OEDynTag0.value'];?>" />
         </div>
        </div>
        <div id="WE408eb21827" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:8">
         <div class="OESZ OESZ_DivContent OESZG_WE408eb21827">
          <span class="OESZ OESZ_Text OESZG_WE408eb21827 ContentBox">Type of content</span>
         </div>
        </div>
        <div id="WE331523038e" class="BaseDiv RWidth OEWEListBoxV2 OESK_WEListBox2_Default" style="z-index:9">
         <div class="OESZ OESZ_DivContent OESZG_WE331523038e">
          <select name="oebkDetailType" class="OESZ OESZ_ListBox OESZG_WE331523038e OEDynTag0"><?php echo $oeIter['WE331523038e.OEDynTag0.0']; ?>
          </select>
         </div>
        </div>
        <div id="WE12654b1f5a" class="BaseDiv RNone OEWECheckBoxV2 OESK_WECheckBox2_Default" style="z-index:10">
         <div class="OESZ OESZ_DivContent OESZG_WE12654b1f5a">
          <input type="checkbox" class="OESZ OESZ_CheckBox OESZG_WE12654b1f5a OEDynTag0" name="oebkSetOfficialDate" value="Valeur du champ" <?php echo $oei['WE12654b1f5a..OEDynTag0.checked'];?>="<?php echo $oei['WE12654b1f5a..OEDynTag0.checked'];?>"  />
         </div>
        </div>
        <div id="WE354511e8a1" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:11">
         <div class="OESZ OESZ_DivContent OESZG_WE354511e8a1">
          <span class="OESZ OESZ_Text OESZG_WE354511e8a1 ContentBox">Use current date+time as "official" date of the item</span>
         </div>
        </div>
        <div id="WE956d48ef36" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:12">
         <div class="OESZ OESZ_DivContent OESZG_WE956d48ef36">
          <input name="oebkSort" type="text" class="OESZ OESZ_TextBox OESZG_WE956d48ef36 OEDynTag0" value="<?php echo $oei['WE956d48ef36..OEDynTag0.value'];?>" maxlength="8" />
         </div>
        </div>
        <div id="WE594406a2ad" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:13">
         <div class="OESZ OESZ_DivContent OESZG_WE594406a2ad">
          <span class="OESZ OESZ_Text OESZG_WE594406a2ad ContentBox OEDynTag0">(Optional) Sorting Value (relative importance or priority of the item) e.g. "10" or "-10"</span>
         </div>
        </div>
        <div id="WE344c555617" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:19">
         <div class="OESZ OESZ_DivContent OESZG_WE344c555617">
          <input name="oebkCategories" type="text" class="OESZ OESZ_TextBox OESZG_WE344c555617 OEDynTag0" maxlength="8" />
         </div>
        </div>
        <div id="WE68d0592239" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:20">
         <div class="OESZ OESZ_DivContent OESZG_WE68d0592239">
          <span class="OESZ OESZ_Text OESZG_WE68d0592239 ContentBox OEDynTag0">(Optional, Invisible) IDs of Categories in format ID1+ID2+..+IDn, e.g. 1 or 2+4. Applied to new Items only.</span>
         </div>
        </div>
        <div id="WEd170e19645" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:14">
         <div class="OESZ OESZ_DivContent OESZG_WEd170e19645">
          <span class="OESZ OESZ_Text OESZG_WEd170e19645 ContentBox">(Optional) Detail's Content (HTML or simple text)</span>
         </div>
        </div>
        <div id="WEf0c5c312ed" class="BaseDiv RBoth OEWETextAreaV2 OESK_WETextArea2_Default" style="z-index:15">
         <div class="OESZ OESZ_DivContent OESZG_WEf0c5c312ed">
          <textarea class="OESZ OESZ_TextArea OESZG_WEf0c5c312ed OEDynTag0" name="oebkHTML" rows="3" cols="50"><?php echo $oei['WEf0c5c312ed..OEDynTag0.html1'];?></textarea>
         </div>
        </div>
        <div id="WE5e9ba620f4" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:16">
         <div class="OESZ OESZ_DivContent OESZG_WE5e9ba620f4">
          <span class="OESZ OESZ_Text OESZG_WE5e9ba620f4 ContentBox OEDynTag0">For security reasons, enter the backoffice password:<br /></span>
         </div>
        </div>
        <div id="WEd4672b1b79" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:17">
         <div class="OESZ OESZ_DivContent OESZG_WEd4672b1b79">
          <input name="oebkPW" type="password" autocomplete="off" class="OESZ OESZ_TextBox OESZG_WEd4672b1b79 OEDynTag0" style="<?php echo $oei['WEd4672b1b79..OEDynTag0.style'];?>" value="<?php echo $oei['WEd4672b1b79..OEDynTag0.value'];?>" />
         </div>
        </div>
        <div id="WE80e9334d75" class="BaseDiv RWidth OEWEButton OESK_WEButton_Default" style="z-index:18">
         <div class="OESZ OESZ_DivContent OESZG_WE80e9334d75">
          <button class="OESZ OESZ_Button OESZG_WE80e9334d75 OEDynTag0" type="button" name="WE80e9334d75">Add to database</button>
         </div>
        </div>
       </div>
      </div>
     </div>
    </div>
    <div class="OESZ OESZ_XBodyFooter OESZG_XBody OECT OECT_Footer OECTAbs"></div>
   </div>
  </div>
 </body>
</html>