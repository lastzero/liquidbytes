</div>
	</div>

	
	<div id="linkList">
		<div id="linkList2">
			<div id="larchives">
				<h2 class="offscreen" id="navigation">Hauptnavigation</h2>
				<ul>
					<li<?php if(strpos($_SERVER["REQUEST_URI"], 'index.html') !== false || strpos($_SERVER["REQUEST_URI"], 'html') === false) { ?> id="current"<?php } ?>>
						<a href="index.html">About</a>
					</li>
					<li<?php if(strpos($_SERVER["REQUEST_URI"], 'vision.html') !== false) { ?> id="current"<?php } ?>>
						<a href="vision.html">Vision</a>
					</li>	
					<li<?php if(strpos($_SERVER["REQUEST_URI"], 'clients.html') !== false) { ?> id="current"<?php } ?>>
						<a href="clients.html">Clients</a>
					</li>									
					<li<?php if(strpos($_SERVER["REQUEST_URI"], 'contact.html') !== false) { ?> id="current"<?php } ?>>
						<a href="contact.html">Contact</a>
					</li>					
				</ul>
			</div>
		</div>
	</div>

	<div id="supportingText">

		<div id="footer">			
			<ul>			
				<li><a href="http://lastzero.net/" title="Blog">&copy; 2001 - <?php echo date('Y'); ?> Michael Mayer</a></li>
			</ul>
		</div>

	</div>
</div>
</body>
</html>
