<i class="widget-icon fa fa-5x fa-bar-chart-o" style="color:#34495e;"></i>

<h4 class="h3 mt0 inherit-font-color"><?=__('Full year') ?> <?=(date('Y') - 1) ?></h4>
<p><?=__('Paid invoices of the last year') ?></p>

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
					fillColor: "transparent",
					strokeColor: "rgba(255,255,255,0.3)",
					pointColor: "#fff",
					pointStrokeColor: "#fff",
					data: JSON.decode('<?=$data ?>')
				}]
			},
			options = {
				scaleLineColor: "transparent",
				scaleFontColor: '#fff',
				scaleLabel: "<%=value%> €",
				scaleShowGridLines: false,
				showTooltips: false,
				responsive: true,
				maintainAspectRatio: true,
				bezierCurveTension: 0
			};

		new Chart(ctx).Line(data, options);
	})();
</script>