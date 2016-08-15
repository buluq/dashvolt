<div class="uk-grid">
	<div id="iframe-container" class="uk-width-1-1">
		<iframe
			id="forum_embed"
			src="javascript:void(0)"
			frameborder="0">
		</iframe>

		<script type="text/javascript">
			document.getElementById('forum_embed').src = 'https://groups.google.com/forum/embed/?place=forum/jvmit'
			+ '&showsearch=true&showpopout=true&showtabs=false'
			+ '&parenturl='
			+ encodeURIComponent(window.location.href);

			var embededPage = document.querySelector("#forum_embed");
			embededPage.style.display = "block";
			embededPage.style.width = "100%";
			embededPage.style.minHeight= "90vh";
		</script>
	</div>
</div>
