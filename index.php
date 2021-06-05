<?php

	define('THIS_PAGE','index');
	require 'includes/config.inc.php';
	$pages->page_redir();
	if(is_installed('editorspick')) {
		assign('editor_picks',get_ep_videos());
	}

	//Displaying The Template
	template_files('index.html');
	display_it();

?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-VHS99R0K7L"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-VHS99R0K7L');
</script>