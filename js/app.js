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

	console.log('App1');


})();
