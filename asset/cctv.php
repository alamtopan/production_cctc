<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Expires" content="Tue, 12 May 1962 1:00:00 GMT">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Cache-Control" content="no-cache">
<meta http-equiv="Content-type" CONTENT="text/html; charset=iso-8859-1">
<meta http-equiv="Content-language" CONTENT="en">
<title>Live view  - AXIS M1011 Network Camera</title>

<noscript>Your browser has JavaScript turned off.<br>For the user interface to work, you must enable JavaScript in your browser and reload/refresh this page.
</noscript>

<!-- GLOBAL JAVASCRIPTS -->
<script language="JavaScript" type="text/javascript"><!--
function launch(url) {
  var w = 480, h = 340;

  if (document.all) {
    /* the following is only available after onLoad */
    w = document.body.clientWidth;
    h = document.body.clientHeight;
  }
  else if (document.layers) {
    w = window.innerWidth;
    h = window.innerHeight;
  }

  var popW = 475, popH = 590;

  var leftPos = (w-popW)/2, topPos = (h-popH)/2;

  self.name = "opener";
  remote = open(url, 'helpWin', "resizable,scrollbars,status,width=" + popW + ",height="+popH+",left="+leftPos+",top="+topPos+"");

  //Fix for IE6 to solve problem with video stopping when opening help
  try {
    if ((typeof(useAMC) != "undefined")&&(useAMC == "yes") &&(navigator.appVersion.indexOf("MSIE 6") != -1) && (typeof(stopStartStream) == "function") && (typeof(imagepath) == "string"))
      stopStartStream(imagepath);
  } catch (e) {}
}

function openPopUp(thePage, theName, theWidth, theHeight)
{
  theWidth = Number( theWidth ) + 10;
  theHeight = Number( theHeight ) + 20;

  var someFeatures = 'scrollbars=yes,toolbar=0,location=no,directories=0,status=0,menubar=0,resizable=1,width=' + theWidth + ',height=' + theHeight;
  var aPopUpWin = window.open(thePage, theName, someFeatures);

  if (navigator.appName == "Netscape") {
    aPopUpWin.focus();
  }
}

function showStatus(msg)
{
  window.status = msg
  return true
}
// -->
</script><script language="JavaScript">
<!--
function CSS ()
{
  if ((navigator.appVersion.indexOf("Mac") != -1) && (navigator.appName.indexOf("Netscape") != -1)) {
    document.write('<link rel="stylesheet" href="http://83.64.164.6/css/mac_ns.css" type="text/css">');

  } else if ((navigator.appVersion.indexOf("Mac") != -1) && (navigator.appName.indexOf("Microsoft Internet Explorer") != -1)) {
    document.write('<link rel="stylesheet" href="http://83.64.164.6/css/mac_ie.css" type="text/css">');

  } else if ((navigator.appVersion.indexOf("Win") != -1) && (navigator.appName.indexOf("Netscape") != -1)) {
    document.write('<link rel="stylesheet" href="http://83.64.164.6/css/win_ns.css" type="text/css">');

  } else if ((navigator.appVersion.indexOf("Win") != -1) && (navigator.appName.indexOf("Microsoft Internet Explorer") != -1)) {
    document.write('<link rel="stylesheet" href="http://83.64.164.6/css/win_ie.css" type="text/css">');

  } else if (navigator.appName.indexOf("Netscape") != -1) {
    // Unix or other system
    document.write('<link rel="stylesheet" href="http://83.64.164.6/css/win_ns.css" type="text/css">');
  } else {         
    document.write('<link rel="stylesheet" href="http://83.64.164.6/css/other.css" type="text/css">');
  }

  // Wrapper for old browsers which can't handle getElementById
  if(!document.getElementById) {
     document.getElementById = function(element)
     {
       return eval("document.all." + element);
     }
  }
}
// -->
</script>
<script language="JavaScript" type="text/javascript"><!--
CSS ();
// -->
</script>

<script language="JavaScript" type="text/javascript">
<!--
function SubmitForm()
{
  document.WizardForm.submit();
}
// -->
</script>
<!-- END GLOBAL JAVASCRIPTS -->
<SCRIPT LANGUAGE="JavaScript">
<!--
  var imagepath = "http://83.64.164.6/mjpg/video.mjpg";
  var completePath = "?id=8753&imagepath=" + escape(imagepath) + "&size=1";
-->
</SCRIPT>
</HEAD>

<SCRIPT LANGUAGE="JavaScript">
<!--
  document.write("<FRAMESET ROWS=\"*,0\" BORDER=0>");
  document.write("<FRAME NAME=\"indexMain\" SRC=\"http://83.64.164.6/view/view.shtml" + completePath + "\" SCROLLING=\"auto\">");
  document.write("<FRAME NAME=\"Temp\" SRC=\"http://83.64.164.6/view/temp.shtml\" SCROLLING=NO MARGINGHEIGHT=0 MARGINWIDTH=0 noresize=\"noresize\">");
  document.write("</FRAMESET>");
-->
</SCRIPT>
</HTML>
