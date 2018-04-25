<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--[if IEMobile 7 ]> <html dir="ltr" lang="en-US"class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html dir="ltr" lang="en-US" class="no-js ie6 oldie"> <![endif]-->
<!--[if IE 7 ]>    <html dir="ltr" lang="en-US" class="no-js ie7 oldie"> <![endif]-->
<!--[if IE 8 ]>    <html dir="ltr" lang="en-US" class="no-js ie8 oldie"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" itemscope itemtype="http://schema.org/Organization" dir="ltr" lang="en-US" class="no-js"><!--<![endif]-->
<head>
  <title><?php wp_title(); ?></title>

  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
  <meta http-equiv="cache-Control" content="no-cache, no-store, must-revalidate" />
  <meta http-equiv="expires" content="0" />
  <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
  <meta http-equiv="pragma" content="no-cache" />
  <meta name="viewport" content="width=device-width" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=no" />

  <link rel="canonical" href="<?php echo site_url(); ?>" />

  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="HandheldFriendly" content="true" />

  <!-- SEO -->

  <meta name="audience" content="all" />
  <meta name="keywords" content="Talento Souza Cruz, Jovens Talentos, 2016, Programa Estágio, Programa Trainee, Programa Technical Trainee, Souza Cruz, Tabaco, Tobaco" />

  <meta name="author" content="Wesley Andrade" />
  <meta name="copyright" content="Empresa Júnior PUC" />
  <meta name="resource-type" content="Document" />
  <meta name="distribution" content="Global" />
  <meta name="robots" content="index, follow, ALL" />
  <meta name="GOOGLEBOT" content="index, follow" />
  <meta name="rating" content="General" />
  <meta name="revisit-after" content="2 Days" />
  <meta name="language" content="pt-br" />

  <?php wp_meta(); ?>

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/default.css" type="text/css" media="all" />

  <link rel="stylesheet" href="<?php echo get_bloginfo('stylesheet_url')."?v=".rand(5, 15); ?>"> 

  <script src="http://code.jquery.com/jquery-latest.js"></script>

  <script src="<?php echo get_template_directory_uri(); ?>/js/modernizr.js" type="text/javascript"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/selectivizr.js" type="text/javascript"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js" type="text/javascript"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv-printshiv.js" type="text/javascript"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.bxslider.js"></script>
  <script src='//cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js'></script>
  <script defer src="http://flexslider.woothemes.com/js/jquery.flexslider.js"></script>

  <script src="<?php echo get_template_directory_uri(); ?>/js/functions.js?v=<?php echo rand(5, 15); ?>" type="text/javascript"></script>

  <script type="text/javascript">(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1&appId=493767340741485";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

  <style type="text/css">
  @font-face {
    font-family: 'ufonts_com_stone_sans_itc_tt_bold';
    src: url('<?php echo get_template_directory_uri(); ?>/fonts/ufonts_com_stone_sans_itc_tt_bold.eot');
    src: url('<?php echo get_template_directory_uri(); ?>/fonts/ufonts_com_stone_sans_itc_tt_bold.eot') format('embedded-opentype'),
    url('<?php echo get_template_directory_uri(); ?>/fonts/ufonts_com_stone_sans_itc_tt_bold.woff2') format('woff2'),
    url('<?php echo get_template_directory_uri(); ?>/fonts/ufonts_com_stone_sans_itc_tt_bold.woff') format('woff'),
    url('<?php echo get_template_directory_uri(); ?>/fonts/ufonts_com_stone_sans_itc_tt_bold.ttf') format('truetype'),
    url('<?php echo get_template_directory_uri(); ?>/fonts/ufonts_com_stone_sans_itc_tt_bold.svg#ufonts_com_stone_sans_itc_tt_bold') format('svg');
  }
  @font-face {
    font-family: 'ufonts_com_stonesans';
    src: url('<?php echo get_template_directory_uri(); ?>/fonts/ufonts_com_stonesans.eot');
    src: url('<?php echo get_template_directory_uri(); ?>/fonts/ufonts_com_stonesans.eot') format('embedded-opentype'),
    url('<?php echo get_template_directory_uri(); ?>/fonts/ufonts_com_stonesans.woff2') format('woff2'),
    url('<?php echo get_template_directory_uri(); ?>/fonts/ufonts_com_stonesans.woff') format('woff'),
    url('<?php echo get_template_directory_uri(); ?>/fonts/ufonts_com_stonesans.ttf') format('truetype'),
    url('<?php echo get_template_directory_uri(); ?>/fonts/ufonts_com_stonesans.svg#ufonts_com_stonesans') format('svg');
  }
  </style>

  <?php wp_head(); ?>
</head>
<body <?php if (is_front_page()) {?> class="pg-home" <?php } else { ?> class="pg-interna <?php global $post; echo "page_id_".$post->ID; ?>" <?php } ?>>
  <div id="wrap">
