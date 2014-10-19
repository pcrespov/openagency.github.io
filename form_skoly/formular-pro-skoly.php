<?php
	// Start session.
	session_start();
	
	// Set a key, checked in mailer, prevents against spammers trying to hijack the mailer.
	$security_token = $_SESSION['security_token'] = uniqid(rand());
	
	if ( ! isset($_SESSION['formMessage'])) {
		$_SESSION['formMessage'] = 'Te&scaron;&iacute; n&aacute;s V&aacute;&scaron; z&aacute;jem o na&scaron;e kurzy. Pros&iacute;me V&aacute;s o vyplněn&iacute; nez&aacute;vazn&eacute; objedn&aacute;vky.';	
	}
	
	if ( ! isset($_SESSION['formFooter'])) {
		$_SESSION['formFooter'] = '';
	}
	
	if ( ! isset($_SESSION['form'])) {
		$_SESSION['form'] = array();
	}
	
	function check($field, $type = '', $value = '') {
		$string = "";
		if (isset($_SESSION['form'][$field])) {
			switch($type) {
				case 'checkbox':
					$string = 'checked="checked"';
					break;
				case 'radio':
					if($_SESSION['form'][$field] === $value) {
						$string = 'checked="checked"';
					}
					break;
				case 'select':
					if($_SESSION['form'][$field] === $value) {
						$string = 'selected="selected"';
					}
					break;
				default:
					$string = $_SESSION['form'][$field];
			}
		}
		return $string;
	}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="description" content="Kontaktujte n&aacute;s. Nena&scaron;li jste na na&scaron;ich webov&yacute;ch str&aacute;nk&aacute;ch odpověď na ot&aacute;zku t&yacute;kaj&iacute;c&iacute; s produktů či služeb? Chcete, aby V&aacute;s kontaktoval někter&yacute; z na&scaron;ich pracovn&iacute;ků?" />
		<meta name="generator" content="RapidWeaver" />
		
		<title>OPEN AGENCY | Formul&aacute;ř &scaron;koly</title>
		<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/cameo/styles.css"  />
		<!--[if lte IE 7]><link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/cameo/css/ie/ie.css"  /><![endif]-->
		<!--[if IE 6]><link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/cameo/css/ie/ie6.css"  /><![endif]-->
		<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/cameo/colourtag.css"  />
		<link rel="stylesheet" type="text/css" media="print" href="../rw_common/themes/cameo/print.css"  />
		<link rel="stylesheet" type="text/css" media="handheld" href="../rw_common/themes/cameo/handheld.css"  />
		<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/cameo/css/width/1000.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/cameo/css/icons/graphite.css" />
		<link rel="stylesheet" type="text/css" media="screen" href="../rw_common/themes/cameo/css/sidebar/sidebar_hide.css" />
		
		
		<style type="text/css" media="all">#footer
{
text-align: center
}</style>
		
		<script type="text/javascript" src="../rw_common/themes/cameo/javascript.js"></script>
		
		
<!--[if IE 6]><script type="text/javascript" charset="utf-8">
			var blankSrc = "../rw_common/themes/cameo/png/blank.gif";
		</script>	
		<style type="text/css">

		img {
			behavior:	url("../rw_common/themes/cameo/png/pngbehavior.htc");
		}

		</style><![endif]-->
		
		
		
	<!-- Start Google Analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-43333241-1', 'openagency.cz');
  ga('send', 'pageview');

</script><!-- End Google Analytics -->
</head>
<body>
<div id="container"><!-- Start container -->
	<div id="pageHeader"><!-- Start page header -->
		<div id="grad">
		<img src="../rw_common/themes/cameo/images/header_bottom_grad.png" alt="" style="width: 1000px; height: 66px;" />
		</div>
		<img src="../rw_common/images/logo.png" width="185" height="44" alt="Site logo"/>
		<h1></h1>
		<h2></h2>
	</div><!-- End page header -->
	<div id="navcontainer"><!-- Start Navigation -->
		<div id="top_grad">
			<img src="../rw_common/themes/cameo/images/menu_top_grad.png" alt="" style="width: 3000px; height: 32px;" />
		</div>
		<ul><li><a href="../index.html" rel="self">Aktuality</a></li><li><a href="../openlearning/open-learning.html" rel="self">OPEN LEARNING</a></li><li><a href="../kurzy_pro_podniky/kurzy-pro-podniky.html" rel="self">Kurzy pro podniky</a></li><li><a href="../online_kurzy_pro_verejnost/online-kurzy-verejnost.html" rel="self">Online kurzy pro veřejnost</a></li><li><a href="../sluzby_skolam/sluzby-pro-skoly-a-ucitele.html" rel="self">Služby &scaron;kol&aacute;m</a></li><li><a href="../o_nas/o-nas.html" rel="self">O n&aacute;s</a></li><li><a href="../reference/reference.html" rel="self">Reference</a></li><li><a href="../kontakt/kontakt.html" rel="self">Kontakt</a></li></ul>
		<div class="clearer"></div>
	</div><!-- End navigation -->
	<div id="sidebarContainer"><!-- Start Sidebar wrapper -->
		<div id="sidebar"><!-- Start sidebar content -->
			<h1 class="sideHeader">Produkty</h1><!-- Sidebar header -->
			Kurzy pro podniky<br />Kurzy pro &scaron;koly<br />Služby učitelům a lektorům<br />Odborn&aacute; angličtina<br />Odborn&aacute; němčina<br />Odborn&aacute; ru&scaron;tina<!-- sidebar content you enter in the page inspector -->
			
		</div><!-- End sidebar content -->
	</div><!-- End sidebar wrapper -->
	<div id="contentContainer"><!-- Start main content wrapper -->
		<div id="content"><!-- Start content -->
			
<div class="message-text"><?php echo $_SESSION['formMessage']; unset($_SESSION['formMessage']); ?></div><br />

<form action="./files/mailer.php" method="post" enctype="multipart/form-data">
	 <div>
		<label>Va&scaron;e jm&eacute;no:</label> *<br />
		<input class="form-input-field" type="text" value="<?php echo check('element0'); ?>" name="form[element0]" size="40"/><br /><br />

		<label>Va&scaron;e emailov&aacute; adresa:</label> *<br />
		<input class="form-input-field" type="text" value="<?php echo check('element1'); ?>" name="form[element1]" size="40"/><br /><br />

		<label>Zastupuji:</label> *<br />
		<select name="form[element2]">			<option <?php echo check('element2', 'select','&Scaron;kolu'); ?> value="&Scaron;kolu">&Scaron;kolu</option>
			<option <?php echo check('element2', 'select','Podnik'); ?> value="Podnik">Podnik</option>
			<option <?php echo check('element2', 'select','Soukromou osobu'); ?> value="Soukromou osobu">Soukromou osobu</option>
			<option <?php echo check('element2', 'select','Jin&eacute;'); ?> value="Jin&eacute;">Jin&eacute;</option>
		</select><br /><br />

		<label>M&aacute;m z&aacute;jem o online kurz:</label> <br />
		<select name="form[element3]">			<option <?php echo check('element3', 'select','Stroj&iacute;rensk&aacute; technologie, odborn&aacute; angličtina'); ?> value="Stroj&iacute;rensk&aacute; technologie, odborn&aacute; angličtina">Stroj&iacute;rensk&aacute; technologie, odborn&aacute; angličtina</option>
			<option <?php echo check('element3', 'select','Stroje a zař&iacute;zen&iacute;, odborn&aacute; angličtina'); ?> value="Stroje a zař&iacute;zen&iacute;, odborn&aacute; angličtina">Stroje a zař&iacute;zen&iacute;, odborn&aacute; angličtina</option>
			<option <?php echo check('element3', 'select','Kvalita a kontrola ve stroj&iacute;rensk&eacute; v&yacute;robě, odborn&aacute; angličtina'); ?> value="Kvalita a kontrola ve stroj&iacute;rensk&eacute; v&yacute;robě, odborn&aacute; angličtina">Kvalita a kontrola ve stroj&iacute;rensk&eacute; v&yacute;robě, odborn&aacute; angličtina</option>
			<option <?php echo check('element3', 'select','Obchod a marketing, odborn&aacute; angličtina'); ?> value="Obchod a marketing, odborn&aacute; angličtina">Obchod a marketing, odborn&aacute; angličtina</option>
			<option <?php echo check('element3', 'select','Z&aacute;kladn&iacute; chemick&aacute; terminologie, odborn&aacute; angličtina'); ?> value="Z&aacute;kladn&iacute; chemick&aacute; terminologie, odborn&aacute; angličtina">Z&aacute;kladn&iacute; chemick&aacute; terminologie, odborn&aacute; angličtina</option>
			<option <?php echo check('element3', 'select','Farmaceutick&aacute; v&yacute;roba, odborn&aacute; angličtina'); ?> value="Farmaceutick&aacute; v&yacute;roba, odborn&aacute; angličtina">Farmaceutick&aacute; v&yacute;roba, odborn&aacute; angličtina</option>
			<option <?php echo check('element3', 'select','V&yacute;roba a zpracov&aacute;n&iacute; plastů, odborn&aacute; angličtina'); ?> value="V&yacute;roba a zpracov&aacute;n&iacute; plastů, odborn&aacute; angličtina">V&yacute;roba a zpracov&aacute;n&iacute; plastů, odborn&aacute; angličtina</option>
			<option <?php echo check('element3', 'select','Zaji&scaron;ťov&aacute;n&iacute; kvality a bezpečnost pr&aacute;ce, odborn&aacute; angličtina'); ?> value="Zaji&scaron;ťov&aacute;n&iacute; kvality a bezpečnost pr&aacute;ce, odborn&aacute; angličtina">Zaji&scaron;ťov&aacute;n&iacute; kvality a bezpečnost pr&aacute;ce, odborn&aacute; angličtina</option>
			<option <?php echo check('element3', 'select','Stroj&iacute;rensk&aacute; technologie, odborn&aacute; němčina'); ?> value="Stroj&iacute;rensk&aacute; technologie, odborn&aacute; němčina">Stroj&iacute;rensk&aacute; technologie, odborn&aacute; němčina</option>
			<option <?php echo check('element3', 'select','Obchod a marketing, odborn&aacute; němčina'); ?> value="Obchod a marketing, odborn&aacute; němčina">Obchod a marketing, odborn&aacute; němčina</option>
			<option <?php echo check('element3', 'select','Obchod a marketing, odborn&aacute; ru&scaron;tina'); ?> value="Obchod a marketing, odborn&aacute; ru&scaron;tina">Obchod a marketing, odborn&aacute; ru&scaron;tina</option>
			<option <?php echo check('element3', 'select','Obchod v cestovn&iacute;m ruchu, odborn&aacute; angličtina'); ?> value="Obchod v cestovn&iacute;m ruchu, odborn&aacute; angličtina">Obchod v cestovn&iacute;m ruchu, odborn&aacute; angličtina</option>
			<option <?php echo check('element3', 'select','Obchod v cestovn&iacute;m ruchu, odborn&aacute; němčina'); ?> value="Obchod v cestovn&iacute;m ruchu, odborn&aacute; němčina">Obchod v cestovn&iacute;m ruchu, odborn&aacute; němčina</option>
			<option <?php echo check('element3', 'select','Služby v cestovn&iacute;m ruchu, odborn&aacute; angličtina'); ?> value="Služby v cestovn&iacute;m ruchu, odborn&aacute; angličtina">Služby v cestovn&iacute;m ruchu, odborn&aacute; angličtina</option>
			<option <?php echo check('element3', 'select','Služby v cestovn&iacute;m ruchu, odborn&aacute; němčina'); ?> value="Služby v cestovn&iacute;m ruchu, odborn&aacute; němčina">Služby v cestovn&iacute;m ruchu, odborn&aacute; němčina</option>
		</select><br /><br />

		<label>M&aacute;m z&aacute;jem o v&yacute;ukov&eacute; materi&aacute;ly pro studenty:</label> <br />
		<select name="form[element4]">			<option <?php echo check('element4', 'select','Stroj&iacute;rensk&aacute; technologie, odborn&aacute; angličtina'); ?> value="Stroj&iacute;rensk&aacute; technologie, odborn&aacute; angličtina">Stroj&iacute;rensk&aacute; technologie, odborn&aacute; angličtina</option>
			<option <?php echo check('element4', 'select','Stroje a zař&iacute;zen&iacute;, odborn&aacute; angličtina'); ?> value="Stroje a zař&iacute;zen&iacute;, odborn&aacute; angličtina">Stroje a zař&iacute;zen&iacute;, odborn&aacute; angličtina</option>
			<option <?php echo check('element4', 'select','Kvalita a kontrola ve stroj&iacute;rensk&eacute; v&yacute;robě, odborn&aacute; angličtina'); ?> value="Kvalita a kontrola ve stroj&iacute;rensk&eacute; v&yacute;robě, odborn&aacute; angličtina">Kvalita a kontrola ve stroj&iacute;rensk&eacute; v&yacute;robě, odborn&aacute; angličtina</option>
			<option <?php echo check('element4', 'select','Obchod a marketing, odborn&aacute; angličtina'); ?> value="Obchod a marketing, odborn&aacute; angličtina">Obchod a marketing, odborn&aacute; angličtina</option>
			<option <?php echo check('element4', 'select','Z&aacute;kladn&iacute; chemick&aacute; terminologie, odborn&aacute; angličtina'); ?> value="Z&aacute;kladn&iacute; chemick&aacute; terminologie, odborn&aacute; angličtina">Z&aacute;kladn&iacute; chemick&aacute; terminologie, odborn&aacute; angličtina</option>
			<option <?php echo check('element4', 'select','Farmaceutick&aacute; v&yacute;roba, odborn&aacute; angličtina'); ?> value="Farmaceutick&aacute; v&yacute;roba, odborn&aacute; angličtina">Farmaceutick&aacute; v&yacute;roba, odborn&aacute; angličtina</option>
			<option <?php echo check('element4', 'select','V&yacute;roba a zpracov&aacute;n&iacute; plastů, odborn&aacute; angličtina'); ?> value="V&yacute;roba a zpracov&aacute;n&iacute; plastů, odborn&aacute; angličtina">V&yacute;roba a zpracov&aacute;n&iacute; plastů, odborn&aacute; angličtina</option>
			<option <?php echo check('element4', 'select','Zaji&scaron;ťov&aacute;n&iacute; kvality a bezpečnost pr&aacute;ce, odborn&aacute; angličtina'); ?> value="Zaji&scaron;ťov&aacute;n&iacute; kvality a bezpečnost pr&aacute;ce, odborn&aacute; angličtina">Zaji&scaron;ťov&aacute;n&iacute; kvality a bezpečnost pr&aacute;ce, odborn&aacute; angličtina</option>
			<option <?php echo check('element4', 'select','Stroj&iacute;rensk&aacute; technologie, odborn&aacute; němčina'); ?> value="Stroj&iacute;rensk&aacute; technologie, odborn&aacute; němčina">Stroj&iacute;rensk&aacute; technologie, odborn&aacute; němčina</option>
			<option <?php echo check('element4', 'select','Obchod a marketing, odborn&aacute; němčina'); ?> value="Obchod a marketing, odborn&aacute; němčina">Obchod a marketing, odborn&aacute; němčina</option>
			<option <?php echo check('element4', 'select','Obchod a marketing, odborn&aacute; ru&scaron;tina'); ?> value="Obchod a marketing, odborn&aacute; ru&scaron;tina">Obchod a marketing, odborn&aacute; ru&scaron;tina</option>
			<option <?php echo check('element4', 'select','Obchod v cestovn&iacute;m ruchu, odborn&aacute; angličtina'); ?> value="Obchod v cestovn&iacute;m ruchu, odborn&aacute; angličtina">Obchod v cestovn&iacute;m ruchu, odborn&aacute; angličtina</option>
			<option <?php echo check('element4', 'select','Obchod v cestovn&iacute;m ruchu, odborn&aacute; němčina'); ?> value="Obchod v cestovn&iacute;m ruchu, odborn&aacute; němčina">Obchod v cestovn&iacute;m ruchu, odborn&aacute; němčina</option>
			<option <?php echo check('element4', 'select','Služby v cestovn&iacute;m ruchu, odborn&aacute; angličtina'); ?> value="Služby v cestovn&iacute;m ruchu, odborn&aacute; angličtina">Služby v cestovn&iacute;m ruchu, odborn&aacute; angličtina</option>
			<option <?php echo check('element4', 'select','Služby v cestovn&iacute;m ruchu, odborn&aacute; němčina'); ?> value="Služby v cestovn&iacute;m ruchu, odborn&aacute; němčina">Služby v cestovn&iacute;m ruchu, odborn&aacute; němčina</option>
		</select><br /><br />

		<label>Pozn&aacute;mka:</label> <br />
		<input class="form-input-field" type="text" value="<?php echo check('element5'); ?>" name="form[element5]" size="40"/><br /><br />

		<div style="display: none;">
			<label>Spam Protection: Please don't fill this in:</label>
			<textarea name="comment" rows="1" cols="1"></textarea>
		</div>
		<input type="hidden" name="form_token" value="<?php echo $security_token; ?>" />
		<input class="form-input-button" type="reset" name="resetButton" value="Vymazat v&scaron;echna pole" />
		<input class="form-input-button" type="submit" name="submitButton" value="Odeslat formul&aacute;ř" />
	</div>
</form>

<br />
<div class="form-footer"><?php echo $_SESSION['formFooter']; unset($_SESSION['formFooter']); ?></div><br />

<?php unset($_SESSION['form']); ?>
		</div><!-- End content -->
		<div class="clearer"></div>
	</div><!-- End main content wrapper -->
	<div id="footer"><!-- Start Footer -->
		<p>&copy; 2013 Open Agency <a href="#" id="rw_email_contact">Kontakt</a><script type="text/javascript">var _rwObsfuscatedHref0 = "mai";var _rwObsfuscatedHref1 = "lto";var _rwObsfuscatedHref2 = ":in";var _rwObsfuscatedHref3 = "fo@";var _rwObsfuscatedHref4 = "ope";var _rwObsfuscatedHref5 = "nag";var _rwObsfuscatedHref6 = "enc";var _rwObsfuscatedHref7 = "y.c";var _rwObsfuscatedHref8 = "z";var _rwObsfuscatedHref = _rwObsfuscatedHref0+_rwObsfuscatedHref1+_rwObsfuscatedHref2+_rwObsfuscatedHref3+_rwObsfuscatedHref4+_rwObsfuscatedHref5+_rwObsfuscatedHref6+_rwObsfuscatedHref7+_rwObsfuscatedHref8; document.getElementById('rw_email_contact').href = _rwObsfuscatedHref;</script></p>
		<div id="breadcrumbcontainer"><!-- Start the breadcrumb wrapper -->
			
		</div><!-- End breadcrumb -->
	</div><!-- End Footer -->
</div><!-- End container -->
</body>
</html>
