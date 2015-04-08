(function() {
	// Utils 
	var pfx = (function() {
		var style = document.createElement('dummy').style,
			prefixes = 'Webkit Moz O ms Khtml'.split(' '),
			memory = {};

		return function(prop) {
			if (typeof memory[prop] === "undefined") {

				var ucProp = prop.charAt(0).toUpperCase() + prop.substr(1),
					props = (prop + ' ' + prefixes.join(ucProp + ' ') + ucProp).split(' ');

				memory[prop] = null;
				for (var i in props) {
					if (style[props[i]] !== undefined) {
						memory[prop] = props[i];
						break;
					}
				}
			}
			return memory[prop];
		};
	})();



	var $window = null,
		$container = null,
		canvas = null,
		c = null,
		mod = Math.sqrt(0.75),
		margin = 0,
		width = 600,
		widthPrint = 0,
		height = 0,
		heightPrint = 0,
		sideX = 0,
		sideY = 0,
		triangPerSide = 0,
		resolution = 300,

		conf = {
			triangPerSide: 4,
			lineWidth_mm: 0.2,

			margin_cm: 1,
			resolution_dpi: 300,
			width_cm: 40,

			color: '#000000',
			background: '#ffffff',

			circleRadius_mm: 1,
			circleColor: '#cccccc',
			circleLineColor: '#000000',
			circleLineWidth_mm: 0.2
		},

		drawLine = function(a, b) {
			c.beginPath();
			c.moveTo(a[0], a[1]);
			c.lineTo(b[0], b[1]);
			c.closePath();
			c.stroke();
		},
		cm_inch = 0.393700787,
		cmToPix = function(cm) {
			return Math.round(cm * cm_inch * resolution);
		},
		inVertices = function(circleRadius) {
			c.beginPath();
			c.arc(0, 0, circleRadius, 0, Math.PI * 2);
			c.closePath();
			c.fill();
			c.stroke();
		}


	var Tri = {

		init: function(id) {
			var idCanvas = id || 'myCanvas';
			canvas = document.getElementById(idCanvas);
			c = canvas.getContext('2d');
			canvas.style[pfx('transform-origin')] = 'left top';

			$window = $(window);
			$container = $('#canvas-container');

			var self = this;
			$window.resize(function() {
				self.scale();
			});
			return this;
		},
		config: function(options) {
			conf = $.extend(conf, options);
			return this;
		},

		draw: function() {

			resolution = conf.resolution_dpi;
			margin = cmToPix(conf.margin_cm);
			width = cmToPix(conf.width_cm);
			widthPrint = width - 2 * margin;
			height = Math.round(mod * widthPrint + 2 * margin);
			heightPrint = height - 2 * margin;

			canvas.setAttribute('width', width);
			canvas.setAttribute('height', height);

			triangPerSide = conf.triangPerSide;
			sideX = widthPrint / (2 * triangPerSide);
			sideY = mod * sideX;


			// Draw
			c.setTransform(1, 0, 0, 1, 0, 0);
			c.strokeStyle = conf.color;
			c.fillStyle = conf.background;
			c.lineWidth = cmToPix(0.1 * conf.lineWidth_mm);

			c.rect(0, 0, width, height);
			c.fill();

			var a = [margin + 0.5 * sideX * triangPerSide, margin],
				b = [margin + 1.5 * sideX * triangPerSide, margin];

			for (var i = 0; i < (2 * triangPerSide + 1); i++) {

				drawLine(a, b);

				a[1] += sideY;
				b[1] += sideY;

				if (i < triangPerSide) {
					a[0] -= 0.5 * sideX;
					b[0] += 0.5 * sideX;
				} else {
					a[0] += 0.5 * sideX;
					b[0] -= 0.5 * sideX;
				}
			}
			a = [margin + 0.5 * sideX * triangPerSide, margin];
			b = [margin, margin + sideY * triangPerSide];

			for (var i = 0; i < (2 * triangPerSide + 1); i++) {

				drawLine(a, b);

				if (i < triangPerSide) {

					a[0] += sideX;
					b[0] += 0.5 * sideX;

					b[1] += sideY;
				} else {
					a[0] += 0.5 * sideX;
					b[0] += sideX;

					a[1] += sideY;
				}
			}
			a = [margin + 1.5 * sideX * triangPerSide, margin];
			b = [margin + 2 * sideX * triangPerSide, margin + sideY * triangPerSide];
			for (var i = 0; i < (2 * triangPerSide + 1); i++) {

				drawLine(a, b);

				if (i < triangPerSide) {

					a[0] -= sideX;
					b[0] -= 0.5 * sideX;

					b[1] += sideY;
				} else {
					a[0] -= 0.5 * sideX;
					b[0] -= sideX;

					a[1] += sideY;
				}
			}

			// inVertices

			c.translate(margin + 0.5 * sideX * triangPerSide, margin);
			var col = triangPerSide + 1,
				row = 0,
				ind = 0,
				onTop = true;

			var running = true;

			var radius = cmToPix(0.1 * conf.circleRadius_mm);

			c.fillStyle = conf.circleColor;
			c.strokeStyle = conf.circleLineColor;
			c.lineWidth = cmToPix(0.1 * conf.circleLineWidth_mm);

			if (radius > 0) {
				while (running) {
					inVertices(radius);
					c.translate(sideX, 0);
					ind++;
					if (ind >= col) {
						c.setTransform(1, 0, 0, 1, 0, 0);
						if (onTop) {
							col++;
						} else {
							col--;
						}
						if (col >= (2 * triangPerSide + 2)) {
							col--;
							col--;
							onTop = false;
						}
						if (col <= triangPerSide) {
							running = false;
						}
						row++;
						ind = 0;
						c.translate(margin + sideX * 0.5 * (2 * triangPerSide - (col - 1)), margin + row * sideY);
					}
				}
			}

			this.scale();
		},
		url: function() {
			return canvas.toDataURL();
		},
		scale: function() {
			var sc = $window.width() / width;
			canvas.style[pfx('transform')] = 'scale(' + sc + ')';
			$container.height(sc * height);
			return this;
		},
		cmToPix: cmToPix
	};

	window.Triang = function(id) {
		return Tri.init(id);
	};
})();

/*
c.beginPath();
c.moveTo(margin, margin);
c.lineTo(margin + side, margin);
c.lineTo(margin + .5 * side, margin + mod * side);
c.lineTo(margin, margin);
c.closePath();
c.stroke();
*/