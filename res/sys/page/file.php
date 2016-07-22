<div class="row">
	<div id="iframe-container" class="col s12">
		<iframe	id="file_embed" src="{{ @url }}" frameborder="0"></iframe>

		<script type="text/javascript">
			var embededPage = document.querySelector("#file_embed");
			embededPage.style.display = "block";
			embededPage.style.width = "100%";
			embededPage.style.minHeight = "80vh";
		</script>
	</div>
</div>