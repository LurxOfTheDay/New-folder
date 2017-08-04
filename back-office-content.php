<?php
	require_once "back-office-content(var).php";
	include_once "WEFiles/Server/DB/OEDB.php";
?><!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en">
 <head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <meta name="generator" content="openElement (1.57.9)" />
  <link id="openElement" rel="stylesheet" type="text/css" href="WEFiles/Css/v02/openElement.css?v=50491130400" />
  <link id="siteFonts" rel="stylesheet" type="text/css" href="Files/Fonts/Fonts.css?v=50491130400" />
  <link id="OEBase" rel="stylesheet" type="text/css" href="back-office-content.css?v=50491130400" />
  <link rel="stylesheet" type="text/css" href="WEFiles/Css/opentip.css?v=50491130400" />
  <!--[if lte IE 7]>
  <link rel="stylesheet" type="text/css" href="WEFiles/Css/ie7.css?v=50491130400" />
  <![endif]-->
  <script type="text/javascript">
   var WEInfoPage = {"PHPVersion":"phpOK","OEVersion":"1-57-9","PagePath":"back-office-content","Culture":"DEFAULT","LanguageCode":"EN","RelativePath":"","RenderMode":"Export","PageAssociatePath":"back-office-content","EditorTexts":null};
  </script>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script type="text/javascript" src="WEFiles/Client/jQuery/migrate.js?v=50491130400"></script>
  <script type="text/javascript" src="WEFiles/Client/Common/oe.min.js?v=50491130400"></script>
  <script type="text/javascript" src="back-office-content(var).js?v=50491130400"></script>
  <script type="text/javascript" src="WEFiles/Client/jQuery/Plugins/jquery.form.js?v=50491130400"></script>
  <script type="text/javascript" src="WEFiles/Client/opentip-jquery.min.js?v=50491130400"></script>
  <script type="text/javascript" src="WEFiles/Client/WESendForm-v210.js?v=50491130400"></script>
  <script type="text/javascript" src="WEFiles/Client/jQuery/Plugins/jquery.ui.effects.js?v=50491130400"></script>
  <script type="text/javascript" src="WEFiles/Client/WECollapsiblePanel-v22.js?v=50491130400"></script>
  <script type="text/javascript">
   var WEEdValidators = {"WE890f1cc794":[{"MsgError":"Please configure your error message.","Expression":"(^$)|(^([-])?[\\d]+$)"}],"WE5f86775fdd":[{"MsgError":"Please configure your error message.","Expression":"(^$)|(^(19|20)\\d\\d[/](0[1-9]|1[012])[/](0[1-9]|[12][0-9]|3[01])(\\s([01-9]|[01][01-9]|2[0123]):([01-9]|[012345][01-9]))?$)"}],"WEc4ab475920":[{"MsgError":"Please configure your error message.","Expression":"(^$)|(^[014]$)"}]}
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
     <div id="WEe0edd0d508" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:1">
      <div class="OESZ OESZ_DivContent OESZG_WEe0edd0d508">
       <div class="OECT OECT_Content OECTAbs OEDynTag0" style="overflow:visible">
        <div id="WE2f68e34ab5" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default OECenterAH" style="z-index:2">
         <div class="OESZ OESZ_DivContent OESZG_WE2f68e34ab5">
          <span class="OESZ OESZ_Text OESZG_WE2f68e34ab5 ContentBox">ALL ITEMS</span>
         </div>
        </div>
        <div id="WEaf94dd75cc" class="BaseDiv RNone OEWECodeBlock OESK_WECodeBlock_Default" style="z-index:9">
         <div class="OESZ OESZ_DivContent OESZG_WEaf94dd75cc">
          <script>
            $(function(){
              
              // * Anchors * //
              
              // Fix jump-to-anchor problem in certain browsers:
              var anchor_id = window.location.hash;
              if (anchor_id != "") {
                var $anchor = $(anchor_id); 		// anchor link defined at the top of this script
                if ($anchor.length) { 				// anchor found,force-scroll to it
                  var anchor_position; 				// anchor absolute position
                  while ($anchor && $anchor.css('position') != "absolute") { // go to first parent positioned absolutely, and take its coordinates:
                    $anchor = $anchor.parent();
                    if (!$anchor || !$anchor.length) return; // unknown error
                  }
                  anchor_position = $anchor.offset(); 
                  if (anchor_position) { 
                    //window.scrollTo(anchor_position.left,anchor_position.top);
                    setTimeout(function(){window.scrollTo(anchor_position.left,anchor_position.top); }, 250); // scroll after a small delay
                  }
                }
              }
                
              
              // * Edit Article - choose categories * //
              
              // on change in one of category inputs - dropdown list or text field - clear another input
              $('#WE55a2e8d382 select').change(function(){
                if ($('#WE55a2e8d382 select').val()) $('#WEaab11c6ece input').val('');
              });
              $('#WEaab11c6ece input').change(function(){
                if ($('#WEaab11c6ece input').val()) $("#WE55a2e8d382 select option").prop("selected", false);
              });
              
              
              // * Retractable Filter Panel * //
              
              // Open/Close retractable container with filters:
              $('#WE81a9a61eed').click(function(){ // show and open
                $('#WE0f3e684e2e').show();$('#WE0f3e684e2e').css('display','block');$('#WE0f3e684e2e').css('visibility','visible');
                $('#WE0f3e684e2e .PullZone').click();
              });
              
              // auto-hide on closure:
              $('#WE0f3e684e2e').bind('oeOnUpdate', function(event, action){
                if (action === 'close') { $('#WE0f3e684e2e').hide(); }
              });
              
              // filters fields:
              
              //Only one of two category-related checkboxes can be checked at a time:
              var $cbFiltCategory = $('#WE266b337eaf input');
              var $cbFiltCatgComb = $('#WE8376b60486 input');
              $cbFiltCategory.change(function(){ if ($cbFiltCategory.attr('checked')) $cbFiltCatgComb.attr('checked', false); });
              $cbFiltCatgComb.change(function(){ if ($cbFiltCatgComb.attr('checked')) $cbFiltCategory.attr('checked', false); });
          
              var $tFiltCategory = $('#WE20bd79d882 select'); // category select list
              var $tFiltCatgComb = $('#WE44afef9f7c input'); // category combination text field
              // on modifying category selection, check  its checkbox:
              $tFiltCategory.change(function(){   $cbFiltCategory.attr('checked', 'checked'); $tFiltCatgComb.val(''); $cbFiltCategory.change(); });
              // on modifying category combination text, check or uncheck its checkbox:
              $tFiltCatgComb.change(function(){   $cbFiltCatgComb.attr('checked', $tFiltCatgComb.val()?'checked':false); $cbFiltCatgComb.change(); });
              $tFiltCatgComb.keypress(function(){ $cbFiltCatgComb.attr('checked', 'checked'); $cbFiltCatgComb.change(); });
          
              // Set font size for all drop-downs:
              $('select.OESZ').css('font-size', '10px');
              
              
              
              
              // If no detail to edit,hide edit panels (containers) and reduce height of container and page's main content:
              if ($('#WE48d0fa0e71 textarea').css('display') == 'none' || $('#WE48d0fa0e71 textarea').css('visibility') == 'hidden') { // no article to edit
                var $container1 = $('#WEa427287c26');
                var $container2 = $('#WE096e953f67');
                var ctop = $container1.position();
                if (ctop) ctop = ctop.top;
                $container1.hide();
                $container2.hide();
                
                var $mainContainer = $('#WEe0edd0d508');
                if (ctop && $mainContainer.length) {
                  var currHt = parseInt($mainContainer.css('height'));
                  var newHt  = parseInt(ctop)-10;
                  $mainContainer.css('height', newHt+"px") ; // backoffice container
                  var newBt = $mainContainer.position().left + parseInt($mainContainer.css('height'));
                  var currPageHt = parseInt($('.OESZ_XBodyContent').css('height'));
                  var newPageHt  = currPageHt - (currHt - newHt);
                                            
          		$('.OESZ_XBodyContent').css('height', parseInt(newPageHt) + "px");
                }
                
              } else { // edit detail mode
                // Animate report:
                var $reportTag = $('#WE28651645f9');
                $reportTag.fadeTo('slow', 0.25).fadeTo('slow', 1.0);
              }
              
            });
          </script>
         </div>
        </div>
        <div id="WEf0179cfe6f" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default OECenterAH" style="z-index:13">
         <div class="OESZ OESZ_DivContent OESZG_WEf0179cfe6f">
          <div class="OECT OECT_Content OECTAbs OEDynTag0" style="<?php echo $oei['WEf0179cfe6f..OEDynTag0.style'];?>">
           <div id="WE78977b59fd" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:1">
            <div class="OESZ OESZ_DivContent OESZG_WE78977b59fd">
             <span class="OESZ OESZ_Text OESZG_WE78977b59fd ContentBox OEDynTag0">No items yet</span>
            </div>
           </div>
          </div>
         </div>
        </div>
        <div id="WE0fcdf0578d" class="BaseDiv RWidth OEWELink OESK_WELink_Default" style="z-index:11">
         <div class="OESZ OESZ_DivContent OESZG_WE0fcdf0578d">
          <a class="OESZ OESZ_Link OESZG_WE0fcdf0578d ContentBox OEDynTag0" data-cd="PageLink" href="<?php echo $oei['WE0fcdf0578d..OEDynTag0.href'];?>"><?php echo $oei['WE0fcdf0578d..OEDynTag0.html1'];?></a>
         </div>
        </div>
        <div id="WE81a9a61eed" class="BaseDiv RWidth OEWELink OESK_WELink_Default" style="z-index:8">
         <div class="OESZ OESZ_DivContent OESZG_WE81a9a61eed">
          <a class="OESZ OESZ_Link OESZG_WE81a9a61eed ContentBox OEDynTag0" data-cd="PageLink" href="#">Show/hide Sort and Filter options</a>
         </div>
        </div>
        <div id="WE0f3e684e2e" class="BaseDiv RBoth OEWECollapsiblePanel OESK_WECollapsiblePanel_Default" style="z-index:1">
         <div class="OESZ OESZ_DivContent OESZG_WE0f3e684e2e">
          <div style="overflow:hidden; height:100%;">
           <div class="WECollapsiblePanelContent">
            <div style="position:relative;" class="OESZ OESZ_OpenZoneTop OESZG_WE0f3e684e2e OpenZone">
             <div class="OECT OECT_OpenZone OECTAbs">
              <div id="WE3a978e2e0d" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:1">
               <div class="OESZ OESZ_DivContent OESZG_WE3a978e2e0d">
                <span class="OESZ OESZ_Text OESZG_WE3a978e2e0d ContentBox">Sort by:</span>
               </div>
              </div>
              <div id="WE1f2e608a42" class="BaseDiv RWidth OEWEListBoxV2 OESK_WEListBox2_Default" style="z-index:2">
               <div class="OESZ OESZ_DivContent OESZG_WE1f2e608a42">
                <select name="oebkSortType" class="OESZ OESZ_ListBox OESZG_WE1f2e608a42 OEDynTag0"><?php echo $oeIter['WE1f2e608a42.OEDynTag0.0']; ?>
                </select>
               </div>
              </div>
              <div id="WEb681ce9433" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:3">
               <div class="OESZ OESZ_DivContent OESZG_WEb681ce9433">
                <span class="OESZ OESZ_Text OESZG_WEb681ce9433 ContentBox">Show only if name begins with:</span>
               </div>
              </div>
              <div id="WEa10cb9d754" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:4">
               <div class="OESZ OESZ_DivContent OESZG_WEa10cb9d754">
                <input name="oebkFilterName" type="text" class="OESZ OESZ_TextBox OESZG_WEa10cb9d754 OEDynTag0" />
               </div>
              </div>
              <div id="WE266b337eaf" class="BaseDiv RNone OEWECheckBoxV2 OESK_WECheckBox2_Default" style="z-index:5">
               <div class="OESZ OESZ_DivContent OESZG_WE266b337eaf">
                <input type="checkbox" class="OESZ OESZ_CheckBox OESZG_WE266b337eaf OEDynTag0" name="oebkFilterCatgOn" value="Valeur du champ" />
               </div>
              </div>
              <div id="WEf41306dd50" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:6">
               <div class="OESZ OESZ_DivContent OESZG_WEf41306dd50">
                <span class="OESZ OESZ_Text OESZG_WEf41306dd50 ContentBox">Belongs to a category:</span>
               </div>
              </div>
              <div id="WE20bd79d882" class="BaseDiv RWidth OEWEListBoxV2 OESK_WEListBox2_Default" style="z-index:12">
               <div class="OESZ OESZ_DivContent OESZG_WE20bd79d882">
                <select name="oebkFilterCategory" class="OESZ OESZ_ListBox OESZG_WE20bd79d882 OEDynTag0"><?php echo $oeIter['WE20bd79d882.OEDynTag0.0']; ?>
                </select>
               </div>
              </div>
              <div id="WE8376b60486" class="BaseDiv RNone OEWECheckBoxV2 OESK_WECheckBox2_Default" style="z-index:7">
               <div class="OESZ OESZ_DivContent OESZG_WE8376b60486">
                <input type="checkbox" class="OESZ OESZ_CheckBox OESZG_WE8376b60486 OEDynTag0" name="oebkFilterCatgCombOn" value="Valeur du champ" />
               </div>
              </div>
              <div id="WE8745083af6" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:8">
               <div class="OESZ OESZ_DivContent OESZG_WE8745083af6">
                <span class="OESZ OESZ_Text OESZG_WE8745083af6 ContentBox">... or to a&nbsp;<span style="text-decoration:underline;">combination</span> of categories:</span>
               </div>
              </div>
              <div id="WE958ae315fd" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:9">
               <div class="OESZ OESZ_DivContent OESZG_WE958ae315fd">
                <span class="OESZ OESZ_Text OESZG_WE958ae315fd ContentBox">(specify ID# of categories&nbsp;separated by "+" e.g. "1+2+4")</span>
               </div>
              </div>
              <div id="WE44afef9f7c" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:10">
               <div class="OESZ OESZ_DivContent OESZG_WE44afef9f7c">
                <input name="oebkFilterCategoryComb" type="text" class="OESZ OESZ_TextBox OESZG_WE44afef9f7c OEDynTag0" />
               </div>
              </div>
              <div id="WE4f42c86e4d" class="BaseDiv RWidth OEWEButton OESK_WEButton_Default" style="z-index:11">
               <div class="OESZ OESZ_DivContent OESZG_WE4f42c86e4d">
                <button class="OESZ OESZ_Button OESZG_WE4f42c86e4d OEDynTag0" type="button" name="WE4f42c86e4d">Apply</button>
               </div>
              </div>
             </div>
            </div><div style="position:relative" class="OESZ OESZ_PullZoneCloseTop OESZG_WE0f3e684e2e PullZone PullZoneClose">
             <div></div>
            </div>
           </div>
          </div>
         </div>
        </div>
        <div id="WEffc8f07fbb" class="BaseDiv RBoth OEWEDynIteratorPanelDBG OESK_WEDynIteratorPanelDBG_Default" style="z-index:3">
         <div class="OESZ OESZ_DivContent OESZG_WEffc8f07fbb">
          <div class="OECT OECT_Content OECTAbs OEDynTag0" style="<?php echo $oei['WEffc8f07fbb..OEDynTag0.style'];?>">
           <div class="OEIteratorParent OEDynTag1"><?php echo $oeIter['WEffc8f07fbb.OEDynTag1.0']; ?>
           </div>
          </div>
         </div>
        </div>
        <div id="WE897e738d30" class="BaseDiv RNone OEWELink OESK_WELink_Default" style="z-index:4">
         <div class="OESZ OESZ_DivContent OESZG_WE897e738d30">
          <a class="OESZ OESZ_Link OESZG_WE897e738d30 ContentBox OEDynTag0" data-cd="PageLink" href="<?php echo $oei['WE897e738d30..OEDynTag0.href'];?>">Add an item and/or its detail</a>
         </div>
        </div>
        <div id="WEd854ba94da" class="BaseDiv RWidth OEWEListBoxV2 OESK_WEListBox2_Default" style="z-index:6">
         <div class="OESZ OESZ_DivContent OESZG_WEd854ba94da">
          <select name="WEd854ba94da" class="OESZ OESZ_ListBox OESZG_WEd854ba94da OEDynTag0"><?php echo $oeIter['WEd854ba94da.OEDynTag0.0']; ?></select>
         </div>
        </div>
        <div id="WE9ad3d82879" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:5">
         <div class="OESZ OESZ_DivContent OESZG_WE9ad3d82879">
          <span class="OESZ OESZ_Text OESZG_WE9ad3d82879 ContentBox OEDynTag0"><?php echo $oei['WE9ad3d82879..OEDynTag0.html1'];?></span>
         </div>
        </div>
        <div id="WE78190e2ab9" class="BaseDiv RNone OEWECodeBlock OESK_WECodeBlock_Default" style="z-index:7">
         <div class="OESZ OESZ_DivContent OESZG_WE78190e2ab9">
          <script>
            $(function(){
              
              var $pageSelect = $('#WEd854ba94da select'); // dropdown list of pages
          
              if ($pageSelect.find('option').length < 2) {
                // hide dropdown list if only 1 page
                $pageSelect.hide(); 
          
              } else {
                $pageSelect.change(function(){
                  
                  var page = $('#WEd854ba94da select').val();
                  
                  var currURL = window.location.href + '';
                  var param = 'oepage1=';
                  var pos = currURL.indexOf(param);
                  var posNum = pos + param.length;
                  if (pos > 0) { // url already contains current page parameter, modify its value
                    var pos2 = currURL.indexOf('&', pos);
                    if (pos2 < 0) pos2 = currURL.length-1;
                    var currPage = (pos2 > posNum) ? currURL.substring(posNum, pos2-posNum) : 0;
                    if (currPage == page) return; // same page
                    currURL = currURL.substring(0, pos) + param + page + ((pos2 < currURL.length-1) ? currURL.substring(pos2) : '');
                  
                  } else { // add page parameter
                    var pos2 = currURL.indexOf('#');
                    if (pos2 < 0) pos2 = currURL.length;
                    var ch = (currURL.indexOf('?') > 0) ? '&' : '?';
                    currURL = currURL.substring(0, pos2) + ch + param + page; // + ((pos2 < currURL.length) ? currURL.substring(pos2) : '') // no anchor
                  }
                  
                  if (currURL != window.location) window.location =currURL; // go to chosen page
                  
                });
              }
              
            });
            
          </script>
         </div>
        </div>
        <div id="WEa427287c26" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:10">
         <div class="OESZ OESZ_DivContent OESZG_WEa427287c26">
          <div class="OECT OECT_Content OECTAbs OEDynTag0">
           <div id="WE7626009c0c" class="BaseDiv RNone OEWECodeBlock OESK_WECodeBlock_Default" style="z-index:2">
            <div class="OESZ OESZ_DivContent OESZG_WE7626009c0c">
             <a name="oebk_edit_area" id="oebk_edit_area"></a>
             
             <script>
             $(function () { 
               
               // TinyMCE editor-related actions //////////////////////////////////////////
               var $buttonTMCE = $('#WE0bd0a63e2e'); // hidden button
               $buttonTMCE.hide();  
               
               if (typeof tinymce != 'undefined') {
                 
                 // Replace usual Save button with another button, to do certain actions before submit:
                 var $buttonSave = $('#WE74246de91a'); // normal Submit button
                 $buttonTMCE.css({width: $buttonSave.css('width'), 
                                  left:  $buttonSave.css('left'),
                                  top:   $buttonSave.css('top') });
                 $buttonTMCE.find(':button').html($buttonSave.find(':button').html()); // copy button text
                 $buttonTMCE.show();$buttonTMCE.css('visibility', 'visible');
                 $buttonSave.hide();
                 
                 // Save button - apply changes:
                 $buttonTMCE.find(':button').click(function() {
                   tinymce.triggerSave();
                   $('.mce-container').remove(); // otherwise submit doesn't find textarea (depends on OE version)
                   $('#WE74246de91a').click(); // only now call Submit button
                 });
               }
               
             }); 
             </script>
            </div>
           </div>
           <div id="WE28651645f9" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:1">
            <div class="OESZ OESZ_DivContent OESZG_WE28651645f9">
             <span class="OESZ OESZ_Text OESZG_WE28651645f9 ContentBox OEDynTag0" style="<?php echo $oei['WE28651645f9..OEDynTag0.style'];?>"><?php echo $oei['WE28651645f9..OEDynTag0.html1'];?></span>
            </div>
           </div>
           <div id="WE8a7bb7ebd2" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:3">
            <div class="OESZ OESZ_DivContent OESZG_WE8a7bb7ebd2">
             <span class="OESZ OESZ_Text OESZG_WE8a7bb7ebd2 ContentBox OEDynTag0">Type or paste HTML code corresponding to the detail of this item:<br /></span>
            </div>
           </div>
           <div id="WE48d0fa0e71" class="BaseDiv RBoth OEWETextAreaV2 OESK_WETextArea2_Default" style="z-index:4">
            <div class="OESZ OESZ_DivContent OESZG_WE48d0fa0e71">
             <textarea class="OESZ OESZ_TextArea OESZG_WE48d0fa0e71 OEDynTag0" name="oebkHTML" style="<?php echo $oei['WE48d0fa0e71..OEDynTag0.style'];?>" rows="3" cols="50"><?php echo $oei['WE48d0fa0e71..OEDynTag0.html1'];?></textarea>
            </div>
           </div>
           <div id="WE890f1cc794" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:5">
            <div class="OESZ OESZ_DivContent OESZG_WE890f1cc794">
             <input name="oebkSort" type="text" class="OESZ OESZ_TextBox OESZG_WE890f1cc794 OEDynTag0" value="<?php echo $oei['WE890f1cc794..OEDynTag0.value'];?>" maxlength="8" />
            </div>
           </div>
           <div id="WEe569caf842" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:6">
            <div class="OESZ OESZ_DivContent OESZG_WEe569caf842">
             <span class="OESZ OESZ_Text OESZG_WEe569caf842 ContentBox OEDynTag0">(Optional) Sorting value (importance or priority of the item) e.g. "10" or "-10"</span>
            </div>
           </div>
           <div id="WE5f86775fdd" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:7">
            <div class="OESZ OESZ_DivContent OESZG_WE5f86775fdd">
             <input name="oebkDateOffc" type="text" class="OESZ OESZ_TextBox OESZG_WE5f86775fdd OEDynTag0" value="<?php echo $oei['WE5f86775fdd..OEDynTag0.value'];?>" />
            </div>
           </div>
           <div id="WE024b7e41dd" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:8">
            <div class="OESZ OESZ_DivContent OESZG_WE024b7e41dd">
             <span class="OESZ OESZ_Text OESZG_WE024b7e41dd ContentBox OEDynTag0">(Optional) Official date for the Item, in format "<span style="font-style:italic;">yyyy/mm/dd</span>" (e.g. "2014/01/31")&nbsp;or "<span style="font-style:italic;">yyyy/mm/dd h:m</span>" (e.g.&nbsp;"2014/12/31 16:40")</span>
            </div>
           </div>
           <div id="WEc4ab475920" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:14">
            <div class="OESZ OESZ_DivContent OESZG_WEc4ab475920">
             <input name="oebkType" type="text" class="OESZ OESZ_TextBox OESZG_WEc4ab475920 OEDynTag0" value="<?php echo $oei['WEc4ab475920..OEDynTag0.value'];?>" maxlength="8" />
            </div>
           </div>
           <div id="WE2550ed432c" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:15">
            <div class="OESZ OESZ_DivContent OESZG_WE2550ed432c">
             <span class="OESZ OESZ_Text OESZG_WE2550ed432c ContentBox OEDynTag0">Modify (only if necessary) the content type / format: <b>0</b> - unformatted plain text, <b>1</b> - free HTML, <b>4</b> - Editor-managed HTML<br /></span>
            </div>
           </div>
           <div id="WE79e3c97eeb" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:9">
            <div class="OESZ OESZ_DivContent OESZG_WE79e3c97eeb">
             <span class="OESZ OESZ_Text OESZG_WE79e3c97eeb ContentBox OEDynTag0">For security reasons, enter the backoffice password (sometimes no need to re-enter if memorized on this computer):<br /></span>
            </div>
           </div>
           <div id="WEc87d915811" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:10">
            <div class="OESZ OESZ_DivContent OESZG_WEc87d915811">
             <input name="oebkPW" type="password" autocomplete="off" class="OESZ OESZ_TextBox OESZG_WEc87d915811 OEDynTag0" style="<?php echo $oei['WEc87d915811..OEDynTag0.style'];?>" value="<?php echo $oei['WEc87d915811..OEDynTag0.value'];?>" />
            </div>
           </div>
           <div id="WE969538b26a" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:13">
            <div class="OESZ OESZ_DivContent OESZG_WE969538b26a">
             <span class="OESZ OESZ_Text OESZG_WE969538b26a ContentBox OEDynTag0" style="<?php echo $oei['WE969538b26a..OEDynTag0.style'];?>"><span style="font-family:'Times New Roman', Times, serif;"><b>Note to webmaster</b>: this password by itself is <b style="color: rgb(192, 0, 0);">not enough</b> to guarantee protection against unwanted access; it is strongly recommended that you protect the page. Please consult the Wiki.</span><br /></span>
            </div>
           </div>
           <div id="WE1cb3ea0b87" class="BaseDiv RNone OEWECheckBoxV2 OESK_WECheckBox2_Default" style="z-index:17">
            <div class="OESZ OESZ_DivContent OESZG_WE1cb3ea0b87">
             <input type="checkbox" class="OESZ OESZ_CheckBox OESZG_WE1cb3ea0b87 OEDynTag0" name="oebkIsDeleting" value="1" readonly="readonly" disabled="disabled" checked="checked"  />
            </div>
           </div>
           <div id="WE74246de91a" class="BaseDiv RWidth OEWEButton OESK_WEButton_Default" style="z-index:11">
            <div class="OESZ OESZ_DivContent OESZG_WE74246de91a">
             <button class="OESZ OESZ_Button OESZG_WE74246de91a OEDynTag0" type="button" name="WE74246de91a" data-oe-target-url="<?php echo $oei['WE74246de91a..OEDynTag0.data-oe-target-url'];?>">Save HTML code</button>
            </div>
           </div>
           <div id="WE0bd0a63e2e" class="BaseDiv RWidth OEWEButton OESK_WEButton_Default" style="z-index:12">
            <div class="OESZ OESZ_DivContent OESZG_WE0bd0a63e2e">
             <button class="OESZ OESZ_Button OESZG_WE0bd0a63e2e OEDynTag0" type="button" name="WE0bd0a63e2e" style="<?php echo $oei['WE0bd0a63e2e..OEDynTag0.style'];?>">(Button only visible with TinyMCE editor)</button>
            </div>
           </div>
           <div id="WEb01d55aae5" class="BaseDiv RWidth OEWEButton OESK_WEButton_Default" style="z-index:16">
            <div class="OESZ OESZ_DivContent OESZG_WEb01d55aae5">
             <button class="OESZ OESZ_Button OESZG_WEb01d55aae5 OEDynTag0" type="button" name="WEb01d55aae5" data-oe-target-url="<?php echo $oei['WEb01d55aae5..OEDynTag0.data-oe-target-url'];?>">[X] Delete detail or item</button>
            </div>
           </div>
          </div>
         </div>
        </div>
        <div id="WE096e953f67" class="BaseDiv RBoth OEWEPanel OESK_WEPanel_Default" style="z-index:12">
         <div class="OESZ OESZ_DivContent OESZG_WE096e953f67">
          <div class="OECT OECT_Content OECTAbs OEDynTag0">
           <div id="WE23415e224e" class="BaseDiv RNone OEWECodeBlock OESK_WECodeBlock_Default" style="z-index:2">
            <div class="OESZ OESZ_DivContent OESZG_WE23415e224e">
             <a name="oebk_edit_catg" id="oebk-edit-catg"></a>
            </div>
           </div>
           <div id="WE1e4d5fa450" class="BaseDiv RWidth OEWELabel OESK_WELabel_Default" style="z-index:1">
            <div class="OESZ OESZ_DivContent OESZG_WE1e4d5fa450">
             <span class="OESZ OESZ_Text OESZG_WE1e4d5fa450 ContentBox OEDynTag0" style="<?php echo $oei['WE1e4d5fa450..OEDynTag0.style'];?>"><?php echo $oei['WE1e4d5fa450..OEDynTag0.html1'];?></span>
            </div>
           </div>
           <div id="WEe062adf5fd" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:11">
            <div class="OESZ OESZ_DivContent OESZG_WEe062adf5fd">
             <span class="OESZ OESZ_Text OESZG_WEe062adf5fd ContentBox">Item's current categories (click [X] to disassociate):</span>
            </div>
           </div>
           <div id="WE5ebe82a744" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:3">
            <div class="OESZ OESZ_DivContent OESZG_WE5ebe82a744">
             <span class="OESZ OESZ_Text OESZG_WE5ebe82a744 ContentBox">Add this item to an existing category:</span>
            </div>
           </div>
           <div id="WE889c488c61" class="BaseDiv RBoth OEWEDynIteratorPanelDBG OESK_WEDynIteratorPanelDBG_Default" style="z-index:12">
            <div class="OESZ OESZ_DivContent OESZG_WE889c488c61">
             <div class="OECT OECT_Content OECTAbs OEDynTag0">
              <div class="OEIteratorParent OEDynTag1"><?php echo $oeIter['WE889c488c61.OEDynTag1.0']; ?>
              </div>
             </div>
            </div>
           </div>
           <div id="WE55a2e8d382" class="BaseDiv RWidth OEWEListBoxV2 OESK_WEListBox2_Default" style="z-index:4">
            <div class="OESZ OESZ_DivContent OESZG_WE55a2e8d382">
             <select name="oebkListCategories" class="OESZ OESZ_ListBox OESZG_WE55a2e8d382 OEDynTag0"><?php echo $oeIter['WE55a2e8d382.OEDynTag0.0']; ?>
             </select>
            </div>
           </div>
           <div id="WE3f000a9a3a" class="BaseDiv RNone OEWECodeBlock OESK_WECodeBlock_Default" style="z-index:5">
            <div class="OESZ OESZ_DivContent OESZG_WE3f000a9a3a">
             <script>
             $(function(){
             
             });
               
             </script>
            </div>
           </div>
           <div id="WEb5eef3467f" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:6">
            <div class="OESZ OESZ_DivContent OESZG_WEb5eef3467f">
             <span class="OESZ OESZ_Text OESZG_WEb5eef3467f ContentBox">Or type a name of a new category:</span>
            </div>
           </div>
           <div id="WEaab11c6ece" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:7">
            <div class="OESZ OESZ_DivContent OESZG_WEaab11c6ece">
             <input name="oebkNewCategory" type="text" class="OESZ OESZ_TextBox OESZG_WEaab11c6ece OEDynTag0" />
            </div>
           </div>
           <div id="WE54ae73a26d" class="BaseDiv RNone OEWELabel OESK_WELabel_Default" style="z-index:8">
            <div class="OESZ OESZ_DivContent OESZG_WE54ae73a26d">
             <span class="OESZ OESZ_Text OESZG_WE54ae73a26d ContentBox OEDynTag0" style="<?php echo $oei['WE54ae73a26d..OEDynTag0.style'];?>">For security reasons, enter the backoffice password:<br /></span>
            </div>
           </div>
           <div id="WE53de35de39" class="BaseDiv RWidth OEWETextBoxV2 OESK_WETextBox2_Default" style="z-index:9">
            <div class="OESZ OESZ_DivContent OESZG_WE53de35de39">
             <input name="oebkPW" type="password" autocomplete="off" class="OESZ OESZ_TextBox OESZG_WE53de35de39 OEDynTag0" style="<?php echo $oei['WE53de35de39..OEDynTag0.style'];?>" value="<?php echo $oei['WE53de35de39..OEDynTag0.value'];?>" />
            </div>
           </div>
           <div id="WEfc1ac3b587" class="BaseDiv RWidth OEWEButton OESK_WEButton_Default" style="z-index:10">
            <div class="OESZ OESZ_DivContent OESZG_WEfc1ac3b587">
             <button class="OESZ OESZ_Button OESZG_WEfc1ac3b587 OEDynTag0" type="button" name="WEfc1ac3b587" data-oe-target-url="<?php echo $oei['WEfc1ac3b587..OEDynTag0.data-oe-target-url'];?>">Assign to category</button>
            </div>
           </div>
          </div>
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