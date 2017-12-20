<?php
	include 'partials/cards.php';
	include 'partials/tables.php';
	include 'partials/forms.php';
	
	function getStyles() {
		include 'partials/styles.php';
	}

	function getScripts($page = null) {
		include 'partials/scripts.php';
	}

	function getSocialTags() {
		include 'partials/social-tags.php';
	}

	function getHeader($title) {
		include 'partials/header.php';
	}

	function getSidebar($i) {
		include 'partials/sidebar.php';
	}

	function getTopbar() {
		include 'partials/topbar.php';
	}

	function getFooter() { ?>
		<footer class="footer">
            <div class="container-fluid">
                <p class="copyright pull-right">
                    &copy;
                    <script>document.write(new Date().getFullYear())</script> -
                    Desenvolvido por <a href="http://www.lucascraveiropaes.com">Lucas Craveiro Paes</a> e Jhonny Braga
                </p>
            </div>
        </footer> <?php
	}
?>