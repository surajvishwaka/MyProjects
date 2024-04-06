function showMenu() {
	var m = document.querySelector('.off-canvas-menu');
	m.classList.add('smenu');
}
function closeMenu() {
	var m = document.querySelector('.off-canvas-menu');
	m.classList.remove('smenu');
}

function showingMenu() {
	var n = document.querySelector('.search-canvas-menu');
	n.classList.add('rmenu');
}
function closingMenu() {
	var n = document.querySelector('.search-canvas-menu');
	n.classList.remove('rmenu');
}
function showedMenu() {
	var o = document.querySelector('.git-canvas-menu');
	o.classList.add('gmenu');
}
function closedMenu() {
	var o = document.querySelector('.git-canvas-menu');
	o.classList.remove('gmenu');
}
function showdebugMenu() {
	var p = document.querySelector('.debug-canvas-menu');
	p.classList.add('dmenu');
}
function closedebugMenu() {
	var p = document.querySelector('.debug-canvas-menu');
	p.classList.remove('dmenu');
}
function showextensionMenu() {
	var q = document.querySelector('.extension-canvas-menu');
	q.classList.add('emenu');
}
function closextensionMenu() {
	var q = document.querySelector('.extension-canvas-menu');
	q.classList.remove('emenu');
}

var toggleNode = document.getElementsByClassName('rightAngle');

for (var i = 0; i < toggleNode.length; i++) {
	toggleNode[i].addEventListener('click', function () {
		this.parentElement.querySelector('.nested').classList.toggle('active');
		this.classList.toggle('angleDown');
	});
}

const divContainer = document.querySelector('.settings1');
let isClicked = true;

let showOrHide = function () {
	if (isClicked) {
		divContainer.style.display = 'block';
		isClicked = false;
	} else {
		divContainer.style.display = 'none';
		isClicked = true;
	}
}

const divContainers = document.querySelector('.settings2');
let isClickeds = true;

let showOrHides = function () {
	if (isClickeds) {
		divContainers.style.display = 'block';
		isClickeds = false;
	} else {
		divContainers.style.display = 'none';
		isClickeds = true;
	}
}

const divTheme = document.querySelector('.darklightmode');
let inClickeds = true;

let divThemes = function () {
	if (inClickeds) {
		divTheme.style.display = 'block';
		inClickeds = false;
	} else {
		divTheme.style.display = 'none';
		inClickeds = true;
	}
}

var darkBtn = document.getElementById("dark-btn");
darkBtn.onclick = function () {
	darkBtn.classList.toggle("dark-btn-on");
	document.body.classList.toggle("dark-themed");

	if (localStorage.getItem("theme") == "light") {
		localStorage.setItem("theme", "dark");
	}
	else {
		localStorage.setItem("theme", "light");
	}
}

if (localStorage.getItem("theme") == "light") {
	darkBtn.classList.remove("dark-btn-on");
	document.body.classList.remove("dark-themed");
}
else if (localStorage.getItem("theme") == "dark") {
	darkBtn.classList.add("dark-btn-on");
	document.body.classList.add("dark-themed");
}
else {
	localStorage.setItem("theme", "light");
}

let editor = document.querySelector("#editor");
ace.edit(editor, {
	theme: "ace/theme/terminal",
	mode: "ace/mode/javascript",

});

function extnOpen() {
	var extn = document.querySelector('.extn-section');
	extn.classList.add('ssmenu');
}

function extnClose() {
	var extn = document.querySelector('.extn-section');
	extn.classList.remove('ssmenu');
}

function manageResize(md, sizeProp, posProp) {
	var r = md.target;

	var prev = r.previousElementSibling;
	var next = r.nextElementSibling;
	if (!prev || !next) {
		return;
	}

	md.preventDefault();

	var prevSize = prev[sizeProp];
	var nextSize = next[sizeProp];
	var sumSize = prevSize + nextSize;
	var prevGrow = Number(prev.style.flexGrow);
	var nextGrow = Number(next.style.flexGrow);
	var sumGrow = prevGrow + nextGrow;
	var lastPos = md[posProp];

	function onMouseMove(mm) {
		var pos = mm[posProp];
		var d = pos - lastPos;
		prevSize += d;
		nextSize -= d;
		if (prevSize < 0) {
			nextSize += prevSize;
			pos -= prevSize;
			prevSize = 0;
		}
		if (nextSize < 0) {
			prevSize += nextSize;
			pos += nextSize;
			nextSize = 0;
		}

		var prevGrowNew = sumGrow * (prevSize / sumSize);
		var nextGrowNew = sumGrow * (nextSize / sumSize);

		prev.style.flexGrow = prevGrowNew;
		next.style.flexGrow = nextGrowNew;

		lastPos = pos;
	}

	function onMouseUp(mu) {
		// Change cursor to signal a state's change: stop resizing.
		const html = document.querySelector('html');
		html.style.cursor = 'default';

		if (posProp === 'pageX') {
			r.style.cursor = 'ew-resize';
		} else {
			r.style.cursor = 'ns-resize';
		}

		window.removeEventListener("mousemove", onMouseMove);
		window.removeEventListener("mouseup", onMouseUp);
	}

	window.addEventListener("mousemove", onMouseMove);
	window.addEventListener("mouseup", onMouseUp);
}

function setupResizerEvents() {
	document.body.addEventListener("mousedown", function (md) {

		// Used to avoid cursor's flickering
		const html = document.querySelector('html');

		var target = md.target;
		if (target.nodeType !== 1 || target.tagName !== "FLEX-RESIZER") {
			return;
		}
		var parent = target.parentNode;
		var h = parent.classList.contains("h");
		var v = parent.classList.contains("v");
		if (h && v) {
			return;
		} else if (h) {
			// Change cursor to signal a state's change: begin resizing on H.
			target.style.cursor = 'col-resize';
			html.style.cursor = 'col-resize'; // avoid cursor's flickering

			// use offsetWidth versus scrollWidth to avoid splitter's jump on resize when content overflow.
			manageResize(md, "offsetWidth", "pageX");

		} else if (v) {
			// Change cursor to signal a state's change: begin resizing on V.
			target.style.cursor = 'row-resize';
			html.style.cursor = 'row-resize'; // avoid cursor's flickering

			manageResize(md, "offsetHeight", "pageY");
		}
	});
}

setupResizerEvents();

const tab = document.querySelectorAll('.lii');
const all_content = document.querySelectorAll('.terminal-tab');

tab.forEach((tab, index) => {
	tab.addEventListener('click', () => {
		tab.forEach(tab => { tab.classList.remove('active') });
		tab.classList.add('active');

		var line = document.querySelector('.linings');
		line.style.width = e.target.offsetWidth + "px";
		line.style.left = e.target.offsetLeft + "px";
	})
})