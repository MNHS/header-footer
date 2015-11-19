// Native Javascript for Bootstrap | Dropdown
// by dnp_theme

(function(factory){

	// CommonJS/RequireJS and "native" compatibility
	if(typeof module !== "undefined" && typeof exports == "object") {
		// A commonJS/RequireJS environment
		if(typeof window != "undefined") {
			// Window and document exist, so return the factory's return value.
			module.exports = factory();
		} else {
			// Let the user give the factory a Window and Document.
			module.exports = factory;
		}
	} else {
		// Assume a traditional browser.
		window.Dropdown = factory();
	}

})

(function(root){
	var dropdowns = [];
	// DROPDOWN DEFINITION
	// ===================
	var Dropdown = function( element) {
		this.menu = typeof element === 'object' ? element : document.querySelector(element);
		this.init();
	}

	// DROPDOWN METHODS
	// ================
	Dropdown.prototype = {

		init : function() {
			var self = this;
			self.actions();
			self.menu.setAttribute('tabindex', '0'); // Fix onblur on Chrome
			self.menu.addEventListener('click', self.toggle, false);
		},

		actions : function() {
			var self = this;

			self.toggle = function(e) {
                if (e && e.stopPropagation) { e.stopPropagation(); }
                // close other menus first
                dropdowns.forEach(function (dropdown) {
					if (dropdown === self) { return; }
                    dropdown.close();
                });
				self.menu.parentNode.classList.toggle('open');
				e.preventDefault();
				return false;
			}

		self.close = function(e) {
                if (e && e.stopPropagation) { e.stopPropagation(); }
				self.menu.parentNode.classList.remove('open');
			}
		}
    }

	// DROPDOWN DATA API
	// =================
    var Dropdowns = document.querySelectorAll('[data-toggle=dropdown]');
	dropdowns = [].map.call(Dropdowns, function (item,index) {
		return new Dropdown(item);
	});
    
	document.addEventListener('click', function (e) {
    	dropdowns.forEach(function (dropdown) { dropdown.close(); });
    });

	return Dropdown;
});
// Native Javascript for Bootstrap | Affix
// by dnp_theme

(function(factory){

	// CommonJS/RequireJS and "native" compatibility
	if(typeof module !== "undefined" && typeof exports == "object") {
		// A commonJS/RequireJS environment
		if(typeof window != "undefined") {
			// Window and document exist, so return the factory's return value.
			module.exports = factory();
		} else {
			// Let the user give the factory a Window and Document.
			module.exports = factory;
		}
	} else {
		// Assume a traditional browser.
		window.Affix = factory();
	}

})(function(){

	//AFFIX DEFINITION
	var Affix = function(element,options) {
		this.element = typeof element === 'object' ? element : document.querySelector(element);
		this.options = {};
		this.options.target = options.target ? ((typeof(options.target) === 'object') ? options.target : document.querySelector(options.target)) : null; // target is an object
		this.options.offsetTop = options.offsetTop && options.offsetTop ? ( options.offsetTop === 'function' ? options.offsetTop() : parseInt(options.offsetTop,0) ) : 0; // offset option is an integer number or function to determine that number
		this.options.offsetBottom = options.offsetBottom && options.offsetBottom ? ( options.offsetBottom === 'function' ? options.offsetBottom() : parseInt(options.offsetBottom,0) ) : null;

		if (this.element && (this.options.target || this.options.offsetTop || this.options.offsetBottom ) ) { this.init(); }
	}

	//AFFIX METHODS
	Affix.prototype = {
		init: function () {
			this.affixed = false;
			this.affixedBottom = false;
			this.getPinOffsetTop = 0;
			this.getPinOffsetBottom = null;

			//actions
			this.checkPosition();
			this.updateAffix();
			this.scrollEvent();
			this.resizeEvent()
		},
		processOffsetTop: function () {
			if ( this.options.target !== null ) {
				return this.targetRect().top + this.scrollOffset();
			} else if ( this.options.offsetTop !== null ) {
				return this.options.offsetTop
			}
		},
		processOffsetBottom: function () {
			if ( this.options.offsetBottom !== null ) {
				var maxScroll = this.getMaxScroll();
				return maxScroll - this.elementHeight() - this.options.offsetBottom
			}
		},
		offsetTop: function () {
			return this.processOffsetTop()
		},
		offsetBottom: function () {
			return this.processOffsetBottom()
		},
		checkPosition: function () {
			this.getPinOffsetTop = this.offsetTop
			this.getPinOffsetBottom = this.offsetBottom
		},
		scrollOffset: function () {
			return window.pageYOffset || document.documentElement.scrollTop
		},
		pinTop: function () {
			if ( this.element.classList && !this.element.classList.contains('affix') ) this.element.classList.add('affix');
			this.affixed = true
		},
		unPinTop: function () {
			if ( this.element.classList && this.element.classList.contains('affix') ) this.element.classList.remove('affix');
			this.affixed = false
		},
		pinBottom: function () {
			if ( this.element.classList && !this.element.classList.contains('affix-bottom') ) this.element.classList.add('affix-bottom');
			this.affixedBottom = true
		},
		unPinBottom: function () {
			if ( this.element.classList && this.element.classList.contains('affix-bottom') ) this.element.classList.remove('affix-bottom');
			this.affixedBottom = false
		},

		updatePin: function () {
			if (this.affixed === false && (parseInt(this.offsetTop(),0) - parseInt(this.scrollOffset(),0) < 0)) {
				this.pinTop();
			} else if (this.affixed === true && (parseInt(this.scrollOffset(),0) <= parseInt(this.getPinOffsetTop(),0) )) {
				this.unPinTop()
			}

			if (this.affixedBottom === false && (parseInt(this.offsetBottom(),0) - parseInt(this.scrollOffset(),0) < 0)) {
				this.pinBottom();
			} else if (this.affixedBottom === true && (parseInt(this.scrollOffset(),0) <= parseInt(this.getPinOffsetBottom(),0) )) {
				this.unPinBottom()
			}
		},

		updateAffix : function () { // Unpin and check position again
			this.unPinTop();
			this.unPinBottom();
			this.checkPosition()

			this.updatePin() // If any case update values again
		},

		elementHeight : function(){
			return this.element.offsetHeight
		},

		targetRect : function(){
			return this.options.target.getBoundingClientRect()
		},

		getMaxScroll : function(){
			return Math.max( document.body.scrollHeight, document.body.offsetHeight, document.documentElement.clientHeight, document.documentElement.scrollHeight, document.documentElement.offsetHeight )
		},

		scrollEvent : function(){
			var self = this;
			window.addEventListener('scroll', affOnScroll = function() {
				self.updatePin()
			}, false);

		},
		resizeEvent : function(){
			var self = this;
			window.addEventListener('resize', affOnResize = function () {
				setTimeout(function(){
					self.updateAffix()
				},100);
			}, false);

		}
	};

	var Affixes = document.querySelectorAll('[data-spy="affix"]');
	[].forEach.call(Affixes, function (item) {
		var options = {};
			options.offsetTop		= item.getAttribute('data-offset-top');
			options.offsetBottom	= item.getAttribute('data-offset-bottom');
			options.target			= item.getAttribute('data-target');

		if ( item && (options.offsetTop !== null || options.offsetBottom !== null || options.target !== null) ) { //don't do anything unless we have something valid to pin
			return new Affix(item, options);
		}
	})

	return Affix;
});

// Native Javascript for Bootstrap | Collapse
// by dnp_theme

(function(factory){

	// CommonJS/RequireJS and "native" compatibility
	if(typeof module !== "undefined" && typeof exports == "object") {
		// A commonJS/RequireJS environment
		if(typeof window != "undefined") {
			// Window and document exist, so return the factory's return value.
			module.exports = factory();
		} else {
			// Let the user give the factory a Window and Document.
			module.exports = factory;
		}
	} else {
		// Assume a traditional browser.
		window.Collapse = factory();
	}

})(function(){

	// COLLAPSE DEFINITION
	// ===================
	var Collapse = function( element, options ) {
		this.btn = typeof element === 'object' ? element : document.querySelector(element);
		this.accordion = null;
		this.collapse = null;
		this.options = {};
		this.duration = 300; // default collapse transition duration
		this.options.duration = document.documentElement.classList.contains('ie') ? 0 : (options.duration || this.duration);
		this.init();
	}

	// COLLAPSE METHODS
	// ================
	Collapse.prototype = {

		init : function() {
			var self = this;
			this.actions();
			this.btn.addEventListener('click', this.toggle, false);

			// allows the collapse to expand
			// ** when window gets resized
			// ** or via internal clicks handers such as dropwowns or any other
			document.addEventListener('click', this.update, false);
			window.addEventListener('resize', this.update, false)
		},

		actions : function() {
			var self = this;

			this.toggle = function(e) {
				self.btn = self.getTarget(e).btn;
				self.collapse = self.getTarget(e).collapse;

				if (!self.collapse.classList.contains('in')) {
					self.open(e)
				} else {
					self.close(e)
				}
			},
			this.close = function(e) {
				e.preventDefault();
				self.btn = self.getTarget(e).btn;
				self.collapse = self.getTarget(e).collapse;
				self._close(self.collapse);
				self.btn.classList.remove('collapsed');
			},
			this.open = function(e) {
				e.preventDefault();
				self.btn = self.getTarget(e).btn;
				self.collapse = self.getTarget(e).collapse;
				self.accordion = self.btn.getAttribute('data-parent') && self.getClosest(self.btn, self.btn.getAttribute('data-parent'));

				self._open(self.collapse);
				self.btn.classList.add('collapsed');

				if ( self.accordion !== null ) {
					var active = self.accordion.querySelectorAll('.collapse.in');
					[].forEach.call(active,function(a) {
						if ( a !== self.collapse) self._close(a)
					})
				}
			},
			this._open = function(c) {

				c.classList.add('in');
				c.style.height = 0;
				c.style.overflow = 'hidden';
				c.setAttribute('area-expanded','true');

				// the collapse MUST have a childElement div to wrap them all inside, just like accordion/well
				var oh = this.getMaxHeight(c).oh;
				var br = this.getMaxHeight(c).br;

				c.style.height = oh + br + 'px';
				setTimeout(function() {
					c.style.overflow = '';
				}, self.options.duration)
			},
			this._close = function(c) {

				c.style.overflow = 'hidden';
				c.style.height = 0;
				setTimeout(function() {
					c.classList.remove('in');
					c.style.overflow = '';
					c.setAttribute('area-expanded','false');
				}, self.options.duration)
			},
			this.update = function(e) {
				var evt = e.type;
				var tg = e.target;
				var itms = document.querySelectorAll('.collapse.in');
				[].forEach.call(itms, function(itm) {
					var oh = self.getMaxHeight(itm).oh;
					var br = self.getMaxHeight(itm).br;

					if ( evt === 'resize' || ( evt === 'click' && self.getClosest(tg,'.collapse') === itm ) ) {
						setTimeout(function() {
							itm.style.height =  oh + br + 'px'
						}, 300)
					}
				})
			},
			this.getMaxHeight = function(l) { // get collapse trueHeight and border
				var t = l.children[0];
				var cs = l.currentStyle || window.getComputedStyle(l);

				return {
					oh : getOuterHeight(t),
					br : parseInt(cs.borderTop||0) + parseInt(cs.borderBottom||0)
				}
			},
			this.getTarget = function(e) {
				var t = e.currentTarget || e.srcElement,
					h = t.href && t.getAttribute('href').replace('#',''),
					d = t.getAttribute('data-target') && ( t.getAttribute('data-target') ),
					id = h || ( d && /#/.test(d)) && d.replace('#',''),
					cl = (d && d.charAt(0) === '.') && d, //the navbar collapse trigger targets a class
					c = id && document.getElementById(id) || cl && document.querySelector(cl);

				return {
					btn : t,
					collapse : c
				}
			},

			this.getClosest = function (el, s) { //el is the element and s the selector of the closest item to find
			// source http://gomakethings.com/climbing-up-and-down-the-dom-tree-with-vanilla-javascript/
				var f = s.charAt(0);

				for ( ; el && el !== document; el = el.parentNode ) {// Get closest match

					if ( f === '.' ) {// If selector is a class
						if ( el.classList.contains( s.substr(1) ) ) {
							return el;
						}
					}

					if ( f === '#' ) { // If selector is an ID
						if ( el.id === s.substr(1) ) {
							return el;
						}
					}
				}
				return false;
			}
		}
    }

	var getOuterHeight = function (el) {
		var s = el.currentStyle || window.getComputedStyle(el);

		return el.offsetHeight  //we need an accurate margin value
			+ parseInt( /px/.test(s.marginTop)		? Math.round(s.marginTop.replace('px',''))		: 0 )
			+ parseInt( /px/.test(s.marginBottom)	? Math.round(s.marginBottom.replace('px',''))	: 0 )
			+ parseInt( /em/.test(s.marginTop)		? Math.round(s.marginTop.replace('em','')		* parseInt(s.fontSize)) : 0 )
			+ parseInt( /em/.test(s.marginBottom)	? Math.round(s.marginBottom.replace('em','')	* parseInt(s.fontSize)) : 0 )
	}

	// COLLAPSE DATA API
	// =================
    var Collapses = document.querySelectorAll('[data-toggle="collapse"]');
	[].forEach.call(Collapses, function (item) {
		var options = {};
		options.duration = item.getAttribute('data-duration');
		return new Collapse(item,options);
	});

	//we must add the height to the pre-opened collapses
	window.addEventListener('load', function() {
		var openedCollapses = document.querySelectorAll('.collapse');
		[].forEach.call(openedCollapses, function(oc) {
			if (oc.classList.contains('in')) {
				var s = oc.currentStyle || window.getComputedStyle(oc);
				var oh = getOuterHeight(oc.children[0]);
				var br = parseInt(s.borderTop||0) + parseInt(s.borderBottom||0);
				oc.style.height = oh + br + 'px'
			}
		})
	})

	return Collapse;

});
