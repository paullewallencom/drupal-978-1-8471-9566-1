<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.
w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print
$language->language ?>" lang="<?php print $language->language ?>"
dir="<?php print $language->dir ?>">
<head>
<title>
<?php print $head_title; ?>
</title>
<?php print $head; ?>
<?php print $styles; ?>
<?php print $scripts; ?>
<script type="text/javascript"></script>
</head>
<body class="<?php print $body_classes; ?>">
<div id="page-wrapper">
<!-- secondary links -->
<?php if ($secondary_links): ?>
<div id="secondary-links">
<?php print theme('links', $secondary_links); ?>
</div>
<?php endif; ?>
<!-- BEGIN Header -->
<div id="header-wrapper">
<!-- logo -->
<div id="logo">
<?php if ($logo): ?>
<a href="<?php print $base_path; ?>" title="<?php print t('Click
to return to the Home page'); ?>"><img src="<?phpprint $logo; ?>"
alt="<?php print t('Click to return tothe Home page '); ?>" /></a>
<?php endif; ?>
</div>
<!-- site name -->
<?php if ($site_name): ?>
<div id="sitename">
<h1><a href="<?php print $base_path ?>" title="<?php printt('Home')
?>"><?php print $site_name; ?></a></h1>
</div>
<?php endif; ?>
<!-- theme search box -->
<?php if ($search_box): ?>
<div id="searchbox">
<?php print $search_box; ?>
</div>
<?php endif; ?>
<!-- slogan -->
<?php if ($site_slogan): ?>
<div id="site-slogan">
<?php print $site_slogan; ?>
</div>
<?php endif; ?>
<!-- mission statement -->
<?php if ($mission): ?>
<div id="mission">
<?php print $mission; ?>
</div>
<?php endif; ?>
<!-- Region: header -->
<?php if ($header): ?>
<div id="header-region">
<?php print $header; ?>
</div>
<?php endif; ?>
</div>
<!-- primary links -->
<?php if ($primary_links): ?>
<div id="primary-links">
<?php print theme('links', $primary_links); ?>
</div>
<?php endif; ?>
<!-- BEGIN Center Content -->
<div id="main-wrapper">
<!-- Region: sidebar left -->
<?php if ($left): ?>
<div id="sidebar-left-region">
<?php print $left; ?>
</div>
<?php endif; ?>
<div id="content">
<!-- breadcrumb trail -->
<?php if ($breadcrumb): ?>
<?php print $breadcrumb; ?>
<?php endif; ?>
<!-- title -->
<?php if ($title): ?>
<h2 class="content-title"><?php print $title; ?></h2>
<?php endif; ?>
<!-- tabs -->
<?php if ($tabs): ?>
<div class="tabs">
<?php print $tabs; ?>
</div>
<?php endif; ?>
<!-- help -->
<?php print $help; ?>
<!-- messages -->
<?php print $messages; ?>
<!-- Region: content -->
<?php print $content; ?>
</div>
<!-- Region: sidebar right -->
<?php if ($right): ?>
<div id="sidebar-right-region">
<?php print $right; ?>
</div>
<?php endif; ?>
</div>
<!-- END Content Area -->
<!-- BEGIN Footer -->
<!-- Region: footer -->
<div id="footer-region">
<?php print $footer; ?>
<!-- feed icons -->
<div id="feed-icons">
<?php print $feed_icons; ?>
</div>
<!-- footer text -->
<div id="footer-text">
<?php print $footer_message; ?>
</div>
</div>
</div>
<?php print $closure; ?>
</body>
</html>