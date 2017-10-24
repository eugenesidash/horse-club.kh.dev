<script type="text/javascript">
	function preload(images) {
		if (typeof document.body == "undefined") return;
		try {
			var div = document.createElement("div");
			var s = div.style;
			s.position = "absolute";
			s.top = s.left = 0;
			s.visibility = "hidden";
			document.body.appendChild(div);
			div.innerHTML = "<img src=\"" + images.join("\" /><img src=\"") + "\" />";
		} catch(e) {
		}
	}
	preload([
		'<?php bloginfo('template_directory') ?>/img/slide-1-hov.png',
		'<?php bloginfo('template_directory') ?>/img/slide-2-hov.png',
		'<?php bloginfo('template_directory') ?>/img/slide-3-hov.png',
		'<?php bloginfo('template_directory') ?>/img/slide-4-hov.png',
		'<?php bloginfo('template_directory') ?>/img/11-11-hov.png',
		'<?php bloginfo('template_directory') ?>/img/22-22-hov.png',
		'<?php bloginfo('template_directory') ?>/img/33-33-hov.png',
		'<?php bloginfo('template_directory') ?>/img/44-44-hov.png'
		]);
	</script>