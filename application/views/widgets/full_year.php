<i class="widget-icon fa fa-5x fa-bar-chart-o" style="color:#2c3e50;"></i>

<h4 class="h3 mt0 inherit-font-color"><?=__('Full year') ?> <?=date('Y') ?></h4>
<p><?=__('Paid invoices of the current year') ?></p>

<div class="mr10">
	<canvas id="<?=$id ?>-canvas"></canvas>
</div>
<script type="text/javascript">
	(function () {
		"use strict";

		var $canvas_container = $('<?=$id ?>-canvas'),
			ctx = $canvas_container.getContext("2d"),
			data = {
				labels: JSON.decode('<?=$months ?>'),
				datasets: [{
					label: "A",
					fillColor: "transparent",
					strokeColor: "rgba(255,255,255,0.3)",
					pointColor: "#fff",
					pointStrokeColor: "#fff",
					data: JSON.decode('<?=$this_year ?>')
				}]
			},
			options = {
				scaleLineColor: "transparent",
				scaleLineWidth: 2,
				scaleFontColor: '#fff',
				scaleLabel: "<%=value%> €",
				scaleShowGridLines: false,
				showTooltips: false,
				responsive: true,
				maintainAspectRatio: true,
				animation: false,
				bezierCurveTension: 0
			};

		new Chart(ctx).Line(data, options);
	})();
</script>