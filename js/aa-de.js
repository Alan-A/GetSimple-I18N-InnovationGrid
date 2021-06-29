//alert("It works!");

var aade = {};					//	namespaceURI

aade.pageFunctions = (function(){
	
	//	Private members
	
	//alert("Starting aade.testFunctions");
	
	function privateTitleFunction(parentId, tag) {
		
		// Function searchess for a (HTML) child of a page element with Id 'parentId'.
		// It inserts a HTML tag ('tag') around the portion of the child text after the last space in the text string.
		// It also replaces any underscore characters in the child text with spaces.
		// Used to reduce the height of the last part of the logo text in page headers.
		// Works in conjunction with the CSS in './assets/css/aa-de.css' file.
		
		//alert("parentId is: " + parentId + ", tag is: " + tag);
		var tagOpen = "<" + tag + ">";
		var tagClose = "</" + tag + ">";
		//alert("tagClose is: " + tagClose);
		
		parentEl = document.getElementById(parentId);
		var elText = parentEl.innerHTML;
		//alert("element text: " + elText);
		
		var posn = elText.lastIndexOf(' ') + 1;
		//alert("elText lastIndexOf space: " + posn);
		
		elText = String(elText);
		
		var posn = elText.lastIndexOf(' ') + 1;					// Assumes text to be styled has no spaces
		//alert("elText lastIndexOf space: " + posn);
		
		elText = elText.replace(/_/g, "&nbsp;");
		
		var textMajor = elText.substring(0,posn);
		//alert("textMajor: " + textMajor);
		
		var textMinor = elText.substring(posn);
		//alert("textMinor: " + textMinor);
		
		elText = textMajor + tagOpen + textMinor + tagClose;
		//alert("elText: " + elText);
		
		parentEl.innerHTML = elText;
		
	}
	
	function privateLinkFunction(parentClassName) {
		
		console.log(parentClassName);
		
		let parentElement = document.querySelector(parentClassName);
		
		if (parentElement.hasChildNodes()) {
			
			let children = parentElement.childNodes;
			console.log(children.length);
			
			let child;
			for (let i=0; i<children.length; i++) {
				
				child = children[i];
				console.log("i: ", child.nodeType, child.nodeName);
				
				if(child.nodeType == "1" && child.nodeName == "LI"){		// LI node
					console.log("i: ", child.nodeName, child.classList);
					
					if (child.hasChildNodes()) {
						
						let grandChildren = child.childNodes;
						
						console.log(grandChildren.length);
						
						let grandChild;
						let text;
						for (let j=0; j<grandChildren.length; j++) {
							
							grandChild = grandChildren[j];
							console.log("i: ", i, "j: ", j, grandChild.nodeType, grandChild.nodeName);
							
							if(grandChild.nodeType == "1" && grandChild.nodeName == "A"){		// A node
								text = grandChild.textContent
								console.log(text);
								text = text.replace(/ /g, "&nbsp;");	// Replace all spaces with non-breaking spaces
								console.log(text);
								grandChild.textContent = text;
								console.log(grandChild.textContent);
							}
							
						}
						
					} else {
						
						console.log("No grandchildren");
						
					}
					
				}
			}
			
		}
		
	}
		
	return{
		
		//	Public members
		
		pageFunction: function() {
			
			privateTitleFunction('logo', 'span');	// ID of link element containing logo text
													// Tag to be used to style text
			
//			privateLinkFunction ('.main-nav-list');	// 'main-nav-list' is class of main menu ul in header.
													// Function replaces all spaces in link names with &nbsp;
													// to stop line breaks.
		}
		
	}
	
})();

window.addEventListener("DOMContentLoaded", aade.pageFunctions.pageFunction());		//	Start 


