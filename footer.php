<?php wp_footer();?>

<div id="footer_space"></div>

<footer>

	<div class="footer_section">
		<h6>Kontakt</h6>
		<ul>
			<li><a href="tel:036712160">036 – 71 21 60</a></li>
			<li><a href="mailto:info@gladjejonkoping.se" target="_top">info@gladjejonkoping.se</a></li>
		</ul>
	</div>

	<div class="footer_section">
		<h6>Hitta hit</h6>
			<p><strong>Glädje Restaurang & Bar</strong><br/>
			Västra Storgatan 9<br/>
			55315 JÖNKÖPING</p>
	</div>

	<div class="footer_section">
		<h6>Hyra</h6>
		<ul>
			<li><a href="/konferens">Konferens</a></li>
			<li><a href="/event" target="_top">Event</a></li>
		</ul>
	</div>

	<div class="footer_section">
		<h6>Öppettider</h6>
		<!-- Insåg att mina öppettider bara funkar på startsidan så tror vi behöver en footer plugin -->
		<?php get_template_part('openinghours'); ?>
	</div>

</footer>

</body>
</html>