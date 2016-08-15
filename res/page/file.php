<div class="uk-grid">
	<div id="iframe-container" class="uk-width-1-1">
		<iframe	id="file_embed" src="{{ @url }}" frameborder="0"></iframe>

		<script type="text/javascript">
			var embededPage = document.querySelector("#file_embed");
			embededPage.style.display = "block";
			embededPage.style.width = "100%";
			embededPage.style.minHeight = "90vh";
		</script>
	</div>
</div>
