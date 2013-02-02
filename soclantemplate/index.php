<?php defined('_JEXEC') or die; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<jdoc:include type="head" />
<meta charset="utf-8">
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/style.css" type="text/css" media="all">
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/jquery-1.6.js" ></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/cufon-yui.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/cufon-replace.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/Shanti_400.font.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/Roboto_400.font.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/Didact_Gothic_400.font.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/jquery.jqtransform.js"></script>
<script>Cufon.now();</script>
<script>
jQuery(document).ready(function ($) {
    $('#form_1').jqTransform({
        imgPath: 'jqtransformplugin/img/'
    });
});
</script>
<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<style type="text/css">.button1{behavior:url("js/PIE.htc");}</style>
<![endif]-->
</head>
<body id="page1">
<jdoc:include type="message" />
<div class="body1">
  <div class="body2">
    <div class="main">
      <!-- header -->
      <header>
        <div class="wrapper">
          <ul id="icons">
            <jdoc:include type="modules" name="icons_menu" style="none" />
          </ul>
          <span class="call"><jdoc:include type="modules" name="call" style="none" /></span> </div>
        <div class="wrapper">
          <h1><a href="index.html" id="logo">Web Hosting</a></h1>
          <nav>
            <ul id="menu">
              <jdoc:include type="modules" name="top_menu" style="none" />
            </ul>
          </nav>
        </div>
        <span id="slogan1"><jdoc:include type="modules" name="slogan1" style="none" /></span> <span id="slogan2"><jdoc:include type="modules" name="slogan2" style="none" /></span> </header>
      <!-- / header -->
    </div>
  </div>
</div>
<div class="main">
  <!-- content -->
  <section id="content">
  <div class="line1">
      <div class="line2 wrapper">
<jdoc:include type="modules" name="left2" style="none" />
<jdoc:include type="modules" name="center2" style="none" />
<jdoc:include type="modules" name="right2" style="none" />
 </div>
    </div>
  </section>
</div>
<div class="body3">
  <div class="main">
    <section id="content2">
      <div class="wrapper">
       <jdoc:include type="modules" name="content2left" style="none" />
	   <jdoc:include type="modules" name="content2right" style="none" />
      </div>
    </section>
    <!-- / content  -->
  </div>
</div>
<div class="main">
  <!-- / footer -->
  <footer>Copyright &copy; <a href="#">Soclan.ru</a> Все права защищены<br>
    Design by <a target="_blank" href="http://www.templatemonster.com/">TemplateMonster.com</a></footer>
  <!-- / footer -->
</div>
</body>
</html>
