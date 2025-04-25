(function(e, a) { for(var i in a) e[i] = a[i]; }(window, /******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = "./public/assets/js/main-66b0f1d68727a05d73118f726aa1d92e.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./public/assets/js/main-66b0f1d68727a05d73118f726aa1d92e.js":
/*!*******************************************************************!*\
  !*** ./public/assets/js/main-66b0f1d68727a05d73118f726aa1d92e.js ***!
  \*******************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";
eval("/**\n * Main\n */\n\n\nvar menu, animate;\n\n(function () {\n  // Initialize menu\n  //-----------------\n  var layoutMenuEl = document.querySelectorAll('#layout-menu');\n  layoutMenuEl.forEach(function (element) {\n    menu = new Menu(element, {\n      orientation: 'vertical',\n      closeChildren: false\n    }); // Change parameter to true if you want scroll animation\n\n    window.Helpers.scrollToActive(animate = false);\n    window.Helpers.mainMenu = menu;\n  }); // Initialize menu togglers and bind click on each\n\n  var menuToggler = document.querySelectorAll('.layout-menu-toggle');\n  menuToggler.forEach(function (item) {\n    item.addEventListener('click', function (event) {\n      event.preventDefault();\n      window.Helpers.toggleCollapsed();\n    });\n  }); // Display menu toggle (layout-menu-toggle) on hover with delay\n\n  var delay = function delay(elem, callback) {\n    var timeout = null;\n\n    elem.onmouseenter = function () {\n      // Set timeout to be a timer which will invoke callback after 300ms (not for small screen)\n      if (!Helpers.isSmallScreen()) {\n        timeout = setTimeout(callback, 300);\n      } else {\n        timeout = setTimeout(callback, 0);\n      }\n    };\n\n    elem.onmouseleave = function () {\n      // Clear any timers set to timeout\n      document.querySelector('.layout-menu-toggle').classList.remove('d-block');\n      clearTimeout(timeout);\n    };\n  };\n\n  if (document.getElementById('layout-menu')) {\n    delay(document.getElementById('layout-menu'), function () {\n      // not for small screen\n      if (!Helpers.isSmallScreen()) {\n        document.querySelector('.layout-menu-toggle').classList.add('d-block');\n      }\n    });\n  } // Display in main menu when menu scrolls\n\n\n  var menuInnerContainer = document.getElementsByClassName('menu-inner'),\n      menuInnerShadow = document.getElementsByClassName('menu-inner-shadow')[0];\n\n  if (menuInnerContainer.length > 0 && menuInnerShadow) {\n    menuInnerContainer[0].addEventListener('ps-scroll-y', function () {\n      if (this.querySelector('.ps__thumb-y').offsetTop) {\n        menuInnerShadow.style.display = 'block';\n      } else {\n        menuInnerShadow.style.display = 'none';\n      }\n    });\n  } // Init helpers & misc\n  // --------------------\n  // Init BS Tooltip\n\n\n  var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle=\"tooltip\"]'));\n  tooltipTriggerList.map(function (tooltipTriggerEl) {\n    return new bootstrap.Tooltip(tooltipTriggerEl);\n  }); // Accordion active class\n\n  var accordionActiveFunction = function accordionActiveFunction(e) {\n    if (e.type == 'show.bs.collapse' || e.type == 'show.bs.collapse') {\n      e.target.closest('.accordion-item').classList.add('active');\n    } else {\n      e.target.closest('.accordion-item').classList.remove('active');\n    }\n  };\n\n  var accordionTriggerList = [].slice.call(document.querySelectorAll('.accordion'));\n  var accordionList = accordionTriggerList.map(function (accordionTriggerEl) {\n    accordionTriggerEl.addEventListener('show.bs.collapse', accordionActiveFunction);\n    accordionTriggerEl.addEventListener('hide.bs.collapse', accordionActiveFunction);\n  }); // Auto update layout based on screen size\n\n  window.Helpers.setAutoUpdate(true); // Toggle Password Visibility\n\n  window.Helpers.initPasswordToggle(); // Speech To Text\n\n  window.Helpers.initSpeechToText(); // Manage menu expanded/collapsed with templateCustomizer & local storage\n  //------------------------------------------------------------------\n  // If current layout is horizontal OR current window screen is small (overlay menu) than return from here\n\n  if (window.Helpers.isSmallScreen()) {\n    return;\n  } // If current layout is vertical and current window screen is > small\n  // Auto update menu collapsed/expanded based on the themeConfig\n\n\n  window.Helpers.setCollapsed(true, false);\n})();//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9wdWJsaWMvYXNzZXRzL2pzL21haW4tNjZiMGYxZDY4NzI3YTA1ZDczMTE4ZjcyNmFhMWQ5MmUuanM/NDFjYSJdLCJuYW1lcyI6WyJtZW51IiwiYW5pbWF0ZSIsImxheW91dE1lbnVFbCIsImRvY3VtZW50IiwicXVlcnlTZWxlY3RvckFsbCIsImZvckVhY2giLCJlbGVtZW50IiwiTWVudSIsIm9yaWVudGF0aW9uIiwiY2xvc2VDaGlsZHJlbiIsIndpbmRvdyIsIkhlbHBlcnMiLCJzY3JvbGxUb0FjdGl2ZSIsIm1haW5NZW51IiwibWVudVRvZ2dsZXIiLCJpdGVtIiwiYWRkRXZlbnRMaXN0ZW5lciIsImV2ZW50IiwicHJldmVudERlZmF1bHQiLCJ0b2dnbGVDb2xsYXBzZWQiLCJkZWxheSIsImVsZW0iLCJjYWxsYmFjayIsInRpbWVvdXQiLCJvbm1vdXNlZW50ZXIiLCJpc1NtYWxsU2NyZWVuIiwic2V0VGltZW91dCIsIm9ubW91c2VsZWF2ZSIsInF1ZXJ5U2VsZWN0b3IiLCJjbGFzc0xpc3QiLCJyZW1vdmUiLCJjbGVhclRpbWVvdXQiLCJnZXRFbGVtZW50QnlJZCIsImFkZCIsIm1lbnVJbm5lckNvbnRhaW5lciIsImdldEVsZW1lbnRzQnlDbGFzc05hbWUiLCJtZW51SW5uZXJTaGFkb3ciLCJsZW5ndGgiLCJvZmZzZXRUb3AiLCJzdHlsZSIsImRpc3BsYXkiLCJ0b29sdGlwVHJpZ2dlckxpc3QiLCJzbGljZSIsImNhbGwiLCJtYXAiLCJ0b29sdGlwVHJpZ2dlckVsIiwiYm9vdHN0cmFwIiwiVG9vbHRpcCIsImFjY29yZGlvbkFjdGl2ZUZ1bmN0aW9uIiwiZSIsInR5cGUiLCJ0YXJnZXQiLCJjbG9zZXN0IiwiYWNjb3JkaW9uVHJpZ2dlckxpc3QiLCJhY2NvcmRpb25MaXN0IiwiYWNjb3JkaW9uVHJpZ2dlckVsIiwic2V0QXV0b1VwZGF0ZSIsImluaXRQYXNzd29yZFRvZ2dsZSIsImluaXRTcGVlY2hUb1RleHQiLCJzZXRDb2xsYXBzZWQiXSwibWFwcGluZ3MiOiJBQUFBO0FBQ0E7QUFDQTtBQUVhOztBQUViLElBQUlBLElBQUosRUFBVUMsT0FBVjs7QUFFQSxDQUFDLFlBQVk7QUFDWDtBQUNBO0FBRUEsTUFBSUMsWUFBWSxHQUFHQyxRQUFRLENBQUNDLGdCQUFULENBQTBCLGNBQTFCLENBQW5CO0FBQ0FGLGNBQVksQ0FBQ0csT0FBYixDQUFxQixVQUFVQyxPQUFWLEVBQW1CO0FBQ3RDTixRQUFJLEdBQUcsSUFBSU8sSUFBSixDQUFTRCxPQUFULEVBQWtCO0FBQ3ZCRSxpQkFBVyxFQUFFLFVBRFU7QUFFdkJDLG1CQUFhLEVBQUU7QUFGUSxLQUFsQixDQUFQLENBRHNDLENBS3RDOztBQUNBQyxVQUFNLENBQUNDLE9BQVAsQ0FBZUMsY0FBZixDQUErQlgsT0FBTyxHQUFHLEtBQXpDO0FBQ0FTLFVBQU0sQ0FBQ0MsT0FBUCxDQUFlRSxRQUFmLEdBQTBCYixJQUExQjtBQUNELEdBUkQsRUFMVyxDQWVYOztBQUNBLE1BQUljLFdBQVcsR0FBR1gsUUFBUSxDQUFDQyxnQkFBVCxDQUEwQixxQkFBMUIsQ0FBbEI7QUFDQVUsYUFBVyxDQUFDVCxPQUFaLENBQW9CLFVBQUFVLElBQUksRUFBSTtBQUMxQkEsUUFBSSxDQUFDQyxnQkFBTCxDQUFzQixPQUF0QixFQUErQixVQUFBQyxLQUFLLEVBQUk7QUFDdENBLFdBQUssQ0FBQ0MsY0FBTjtBQUNBUixZQUFNLENBQUNDLE9BQVAsQ0FBZVEsZUFBZjtBQUNELEtBSEQ7QUFJRCxHQUxELEVBakJXLENBd0JYOztBQUNBLE1BQUlDLEtBQUssR0FBRyxTQUFSQSxLQUFRLENBQVVDLElBQVYsRUFBZ0JDLFFBQWhCLEVBQTBCO0FBQ3BDLFFBQUlDLE9BQU8sR0FBRyxJQUFkOztBQUNBRixRQUFJLENBQUNHLFlBQUwsR0FBb0IsWUFBWTtBQUM5QjtBQUNBLFVBQUksQ0FBQ2IsT0FBTyxDQUFDYyxhQUFSLEVBQUwsRUFBOEI7QUFDNUJGLGVBQU8sR0FBR0csVUFBVSxDQUFDSixRQUFELEVBQVcsR0FBWCxDQUFwQjtBQUNELE9BRkQsTUFFTztBQUNMQyxlQUFPLEdBQUdHLFVBQVUsQ0FBQ0osUUFBRCxFQUFXLENBQVgsQ0FBcEI7QUFDRDtBQUNGLEtBUEQ7O0FBU0FELFFBQUksQ0FBQ00sWUFBTCxHQUFvQixZQUFZO0FBQzlCO0FBQ0F4QixjQUFRLENBQUN5QixhQUFULENBQXVCLHFCQUF2QixFQUE4Q0MsU0FBOUMsQ0FBd0RDLE1BQXhELENBQStELFNBQS9EO0FBQ0FDLGtCQUFZLENBQUNSLE9BQUQsQ0FBWjtBQUNELEtBSkQ7QUFLRCxHQWhCRDs7QUFpQkEsTUFBSXBCLFFBQVEsQ0FBQzZCLGNBQVQsQ0FBd0IsYUFBeEIsQ0FBSixFQUE0QztBQUMxQ1osU0FBSyxDQUFDakIsUUFBUSxDQUFDNkIsY0FBVCxDQUF3QixhQUF4QixDQUFELEVBQXlDLFlBQVk7QUFDeEQ7QUFDQSxVQUFJLENBQUNyQixPQUFPLENBQUNjLGFBQVIsRUFBTCxFQUE4QjtBQUM1QnRCLGdCQUFRLENBQUN5QixhQUFULENBQXVCLHFCQUF2QixFQUE4Q0MsU0FBOUMsQ0FBd0RJLEdBQXhELENBQTRELFNBQTVEO0FBQ0Q7QUFDRixLQUxJLENBQUw7QUFNRCxHQWpEVSxDQW1EWDs7O0FBQ0EsTUFBSUMsa0JBQWtCLEdBQUcvQixRQUFRLENBQUNnQyxzQkFBVCxDQUFnQyxZQUFoQyxDQUF6QjtBQUFBLE1BQ0VDLGVBQWUsR0FBR2pDLFFBQVEsQ0FBQ2dDLHNCQUFULENBQWdDLG1CQUFoQyxFQUFxRCxDQUFyRCxDQURwQjs7QUFFQSxNQUFJRCxrQkFBa0IsQ0FBQ0csTUFBbkIsR0FBNEIsQ0FBNUIsSUFBaUNELGVBQXJDLEVBQXNEO0FBQ3BERixzQkFBa0IsQ0FBQyxDQUFELENBQWxCLENBQXNCbEIsZ0JBQXRCLENBQXVDLGFBQXZDLEVBQXNELFlBQVk7QUFDaEUsVUFBSSxLQUFLWSxhQUFMLENBQW1CLGNBQW5CLEVBQW1DVSxTQUF2QyxFQUFrRDtBQUNoREYsdUJBQWUsQ0FBQ0csS0FBaEIsQ0FBc0JDLE9BQXRCLEdBQWdDLE9BQWhDO0FBQ0QsT0FGRCxNQUVPO0FBQ0xKLHVCQUFlLENBQUNHLEtBQWhCLENBQXNCQyxPQUF0QixHQUFnQyxNQUFoQztBQUNEO0FBQ0YsS0FORDtBQU9ELEdBOURVLENBZ0VYO0FBQ0E7QUFFQTs7O0FBQ0EsTUFBTUMsa0JBQWtCLEdBQUcsR0FBR0MsS0FBSCxDQUFTQyxJQUFULENBQWN4QyxRQUFRLENBQUNDLGdCQUFULENBQTBCLDRCQUExQixDQUFkLENBQTNCO0FBQ0FxQyxvQkFBa0IsQ0FBQ0csR0FBbkIsQ0FBdUIsVUFBVUMsZ0JBQVYsRUFBNEI7QUFDakQsV0FBTyxJQUFJQyxTQUFTLENBQUNDLE9BQWQsQ0FBc0JGLGdCQUF0QixDQUFQO0FBQ0QsR0FGRCxFQXJFVyxDQXlFWDs7QUFDQSxNQUFNRyx1QkFBdUIsR0FBRyxTQUExQkEsdUJBQTBCLENBQVVDLENBQVYsRUFBYTtBQUMzQyxRQUFJQSxDQUFDLENBQUNDLElBQUYsSUFBVSxrQkFBVixJQUFnQ0QsQ0FBQyxDQUFDQyxJQUFGLElBQVUsa0JBQTlDLEVBQWtFO0FBQ2hFRCxPQUFDLENBQUNFLE1BQUYsQ0FBU0MsT0FBVCxDQUFpQixpQkFBakIsRUFBb0N2QixTQUFwQyxDQUE4Q0ksR0FBOUMsQ0FBa0QsUUFBbEQ7QUFDRCxLQUZELE1BRU87QUFDTGdCLE9BQUMsQ0FBQ0UsTUFBRixDQUFTQyxPQUFULENBQWlCLGlCQUFqQixFQUFvQ3ZCLFNBQXBDLENBQThDQyxNQUE5QyxDQUFxRCxRQUFyRDtBQUNEO0FBQ0YsR0FORDs7QUFRQSxNQUFNdUIsb0JBQW9CLEdBQUcsR0FBR1gsS0FBSCxDQUFTQyxJQUFULENBQWN4QyxRQUFRLENBQUNDLGdCQUFULENBQTBCLFlBQTFCLENBQWQsQ0FBN0I7QUFDQSxNQUFNa0QsYUFBYSxHQUFHRCxvQkFBb0IsQ0FBQ1QsR0FBckIsQ0FBeUIsVUFBVVcsa0JBQVYsRUFBOEI7QUFDM0VBLHNCQUFrQixDQUFDdkMsZ0JBQW5CLENBQW9DLGtCQUFwQyxFQUF3RGdDLHVCQUF4RDtBQUNBTyxzQkFBa0IsQ0FBQ3ZDLGdCQUFuQixDQUFvQyxrQkFBcEMsRUFBd0RnQyx1QkFBeEQ7QUFDRCxHQUhxQixDQUF0QixDQW5GVyxDQXdGWDs7QUFDQXRDLFFBQU0sQ0FBQ0MsT0FBUCxDQUFlNkMsYUFBZixDQUE2QixJQUE3QixFQXpGVyxDQTJGWDs7QUFDQTlDLFFBQU0sQ0FBQ0MsT0FBUCxDQUFlOEMsa0JBQWYsR0E1RlcsQ0E4Rlg7O0FBQ0EvQyxRQUFNLENBQUNDLE9BQVAsQ0FBZStDLGdCQUFmLEdBL0ZXLENBaUdYO0FBQ0E7QUFFQTs7QUFDQSxNQUFJaEQsTUFBTSxDQUFDQyxPQUFQLENBQWVjLGFBQWYsRUFBSixFQUFvQztBQUNsQztBQUNELEdBdkdVLENBeUdYO0FBRUE7OztBQUNBZixRQUFNLENBQUNDLE9BQVAsQ0FBZWdELFlBQWYsQ0FBNEIsSUFBNUIsRUFBa0MsS0FBbEM7QUFDRCxDQTdHRCIsImZpbGUiOiIuL3B1YmxpYy9hc3NldHMvanMvbWFpbi02NmIwZjFkNjg3MjdhMDVkNzMxMThmNzI2YWExZDkyZS5qcy5qcyIsInNvdXJjZXNDb250ZW50IjpbIi8qKlxuICogTWFpblxuICovXG5cbid1c2Ugc3RyaWN0JztcblxubGV0IG1lbnUsIGFuaW1hdGU7XG5cbihmdW5jdGlvbiAoKSB7XG4gIC8vIEluaXRpYWxpemUgbWVudVxuICAvLy0tLS0tLS0tLS0tLS0tLS0tXG5cbiAgbGV0IGxheW91dE1lbnVFbCA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwoJyNsYXlvdXQtbWVudScpO1xuICBsYXlvdXRNZW51RWwuZm9yRWFjaChmdW5jdGlvbiAoZWxlbWVudCkge1xuICAgIG1lbnUgPSBuZXcgTWVudShlbGVtZW50LCB7XG4gICAgICBvcmllbnRhdGlvbjogJ3ZlcnRpY2FsJyxcbiAgICAgIGNsb3NlQ2hpbGRyZW46IGZhbHNlXG4gICAgfSk7XG4gICAgLy8gQ2hhbmdlIHBhcmFtZXRlciB0byB0cnVlIGlmIHlvdSB3YW50IHNjcm9sbCBhbmltYXRpb25cbiAgICB3aW5kb3cuSGVscGVycy5zY3JvbGxUb0FjdGl2ZSgoYW5pbWF0ZSA9IGZhbHNlKSk7XG4gICAgd2luZG93LkhlbHBlcnMubWFpbk1lbnUgPSBtZW51O1xuICB9KTtcblxuICAvLyBJbml0aWFsaXplIG1lbnUgdG9nZ2xlcnMgYW5kIGJpbmQgY2xpY2sgb24gZWFjaFxuICBsZXQgbWVudVRvZ2dsZXIgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yQWxsKCcubGF5b3V0LW1lbnUtdG9nZ2xlJyk7XG4gIG1lbnVUb2dnbGVyLmZvckVhY2goaXRlbSA9PiB7XG4gICAgaXRlbS5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIGV2ZW50ID0+IHtcbiAgICAgIGV2ZW50LnByZXZlbnREZWZhdWx0KCk7XG4gICAgICB3aW5kb3cuSGVscGVycy50b2dnbGVDb2xsYXBzZWQoKTtcbiAgICB9KTtcbiAgfSk7XG5cbiAgLy8gRGlzcGxheSBtZW51IHRvZ2dsZSAobGF5b3V0LW1lbnUtdG9nZ2xlKSBvbiBob3ZlciB3aXRoIGRlbGF5XG4gIGxldCBkZWxheSA9IGZ1bmN0aW9uIChlbGVtLCBjYWxsYmFjaykge1xuICAgIGxldCB0aW1lb3V0ID0gbnVsbDtcbiAgICBlbGVtLm9ubW91c2VlbnRlciA9IGZ1bmN0aW9uICgpIHtcbiAgICAgIC8vIFNldCB0aW1lb3V0IHRvIGJlIGEgdGltZXIgd2hpY2ggd2lsbCBpbnZva2UgY2FsbGJhY2sgYWZ0ZXIgMzAwbXMgKG5vdCBmb3Igc21hbGwgc2NyZWVuKVxuICAgICAgaWYgKCFIZWxwZXJzLmlzU21hbGxTY3JlZW4oKSkge1xuICAgICAgICB0aW1lb3V0ID0gc2V0VGltZW91dChjYWxsYmFjaywgMzAwKTtcbiAgICAgIH0gZWxzZSB7XG4gICAgICAgIHRpbWVvdXQgPSBzZXRUaW1lb3V0KGNhbGxiYWNrLCAwKTtcbiAgICAgIH1cbiAgICB9O1xuXG4gICAgZWxlbS5vbm1vdXNlbGVhdmUgPSBmdW5jdGlvbiAoKSB7XG4gICAgICAvLyBDbGVhciBhbnkgdGltZXJzIHNldCB0byB0aW1lb3V0XG4gICAgICBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcubGF5b3V0LW1lbnUtdG9nZ2xlJykuY2xhc3NMaXN0LnJlbW92ZSgnZC1ibG9jaycpO1xuICAgICAgY2xlYXJUaW1lb3V0KHRpbWVvdXQpO1xuICAgIH07XG4gIH07XG4gIGlmIChkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnbGF5b3V0LW1lbnUnKSkge1xuICAgIGRlbGF5KGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdsYXlvdXQtbWVudScpLCBmdW5jdGlvbiAoKSB7XG4gICAgICAvLyBub3QgZm9yIHNtYWxsIHNjcmVlblxuICAgICAgaWYgKCFIZWxwZXJzLmlzU21hbGxTY3JlZW4oKSkge1xuICAgICAgICBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcubGF5b3V0LW1lbnUtdG9nZ2xlJykuY2xhc3NMaXN0LmFkZCgnZC1ibG9jaycpO1xuICAgICAgfVxuICAgIH0pO1xuICB9XG5cbiAgLy8gRGlzcGxheSBpbiBtYWluIG1lbnUgd2hlbiBtZW51IHNjcm9sbHNcbiAgbGV0IG1lbnVJbm5lckNvbnRhaW5lciA9IGRvY3VtZW50LmdldEVsZW1lbnRzQnlDbGFzc05hbWUoJ21lbnUtaW5uZXInKSxcbiAgICBtZW51SW5uZXJTaGFkb3cgPSBkb2N1bWVudC5nZXRFbGVtZW50c0J5Q2xhc3NOYW1lKCdtZW51LWlubmVyLXNoYWRvdycpWzBdO1xuICBpZiAobWVudUlubmVyQ29udGFpbmVyLmxlbmd0aCA+IDAgJiYgbWVudUlubmVyU2hhZG93KSB7XG4gICAgbWVudUlubmVyQ29udGFpbmVyWzBdLmFkZEV2ZW50TGlzdGVuZXIoJ3BzLXNjcm9sbC15JywgZnVuY3Rpb24gKCkge1xuICAgICAgaWYgKHRoaXMucXVlcnlTZWxlY3RvcignLnBzX190aHVtYi15Jykub2Zmc2V0VG9wKSB7XG4gICAgICAgIG1lbnVJbm5lclNoYWRvdy5zdHlsZS5kaXNwbGF5ID0gJ2Jsb2NrJztcbiAgICAgIH0gZWxzZSB7XG4gICAgICAgIG1lbnVJbm5lclNoYWRvdy5zdHlsZS5kaXNwbGF5ID0gJ25vbmUnO1xuICAgICAgfVxuICAgIH0pO1xuICB9XG5cbiAgLy8gSW5pdCBoZWxwZXJzICYgbWlzY1xuICAvLyAtLS0tLS0tLS0tLS0tLS0tLS0tLVxuXG4gIC8vIEluaXQgQlMgVG9vbHRpcFxuICBjb25zdCB0b29sdGlwVHJpZ2dlckxpc3QgPSBbXS5zbGljZS5jYWxsKGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwoJ1tkYXRhLWJzLXRvZ2dsZT1cInRvb2x0aXBcIl0nKSk7XG4gIHRvb2x0aXBUcmlnZ2VyTGlzdC5tYXAoZnVuY3Rpb24gKHRvb2x0aXBUcmlnZ2VyRWwpIHtcbiAgICByZXR1cm4gbmV3IGJvb3RzdHJhcC5Ub29sdGlwKHRvb2x0aXBUcmlnZ2VyRWwpO1xuICB9KTtcblxuICAvLyBBY2NvcmRpb24gYWN0aXZlIGNsYXNzXG4gIGNvbnN0IGFjY29yZGlvbkFjdGl2ZUZ1bmN0aW9uID0gZnVuY3Rpb24gKGUpIHtcbiAgICBpZiAoZS50eXBlID09ICdzaG93LmJzLmNvbGxhcHNlJyB8fCBlLnR5cGUgPT0gJ3Nob3cuYnMuY29sbGFwc2UnKSB7XG4gICAgICBlLnRhcmdldC5jbG9zZXN0KCcuYWNjb3JkaW9uLWl0ZW0nKS5jbGFzc0xpc3QuYWRkKCdhY3RpdmUnKTtcbiAgICB9IGVsc2Uge1xuICAgICAgZS50YXJnZXQuY2xvc2VzdCgnLmFjY29yZGlvbi1pdGVtJykuY2xhc3NMaXN0LnJlbW92ZSgnYWN0aXZlJyk7XG4gICAgfVxuICB9O1xuXG4gIGNvbnN0IGFjY29yZGlvblRyaWdnZXJMaXN0ID0gW10uc2xpY2UuY2FsbChkb2N1bWVudC5xdWVyeVNlbGVjdG9yQWxsKCcuYWNjb3JkaW9uJykpO1xuICBjb25zdCBhY2NvcmRpb25MaXN0ID0gYWNjb3JkaW9uVHJpZ2dlckxpc3QubWFwKGZ1bmN0aW9uIChhY2NvcmRpb25UcmlnZ2VyRWwpIHtcbiAgICBhY2NvcmRpb25UcmlnZ2VyRWwuYWRkRXZlbnRMaXN0ZW5lcignc2hvdy5icy5jb2xsYXBzZScsIGFjY29yZGlvbkFjdGl2ZUZ1bmN0aW9uKTtcbiAgICBhY2NvcmRpb25UcmlnZ2VyRWwuYWRkRXZlbnRMaXN0ZW5lcignaGlkZS5icy5jb2xsYXBzZScsIGFjY29yZGlvbkFjdGl2ZUZ1bmN0aW9uKTtcbiAgfSk7XG5cbiAgLy8gQXV0byB1cGRhdGUgbGF5b3V0IGJhc2VkIG9uIHNjcmVlbiBzaXplXG4gIHdpbmRvdy5IZWxwZXJzLnNldEF1dG9VcGRhdGUodHJ1ZSk7XG5cbiAgLy8gVG9nZ2xlIFBhc3N3b3JkIFZpc2liaWxpdHlcbiAgd2luZG93LkhlbHBlcnMuaW5pdFBhc3N3b3JkVG9nZ2xlKCk7XG5cbiAgLy8gU3BlZWNoIFRvIFRleHRcbiAgd2luZG93LkhlbHBlcnMuaW5pdFNwZWVjaFRvVGV4dCgpO1xuXG4gIC8vIE1hbmFnZSBtZW51IGV4cGFuZGVkL2NvbGxhcHNlZCB3aXRoIHRlbXBsYXRlQ3VzdG9taXplciAmIGxvY2FsIHN0b3JhZ2VcbiAgLy8tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS1cblxuICAvLyBJZiBjdXJyZW50IGxheW91dCBpcyBob3Jpem9udGFsIE9SIGN1cnJlbnQgd2luZG93IHNjcmVlbiBpcyBzbWFsbCAob3ZlcmxheSBtZW51KSB0aGFuIHJldHVybiBmcm9tIGhlcmVcbiAgaWYgKHdpbmRvdy5IZWxwZXJzLmlzU21hbGxTY3JlZW4oKSkge1xuICAgIHJldHVybjtcbiAgfVxuXG4gIC8vIElmIGN1cnJlbnQgbGF5b3V0IGlzIHZlcnRpY2FsIGFuZCBjdXJyZW50IHdpbmRvdyBzY3JlZW4gaXMgPiBzbWFsbFxuXG4gIC8vIEF1dG8gdXBkYXRlIG1lbnUgY29sbGFwc2VkL2V4cGFuZGVkIGJhc2VkIG9uIHRoZSB0aGVtZUNvbmZpZ1xuICB3aW5kb3cuSGVscGVycy5zZXRDb2xsYXBzZWQodHJ1ZSwgZmFsc2UpO1xufSkoKTtcbiJdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./public/assets/js/main-66b0f1d68727a05d73118f726aa1d92e.js\n");

/***/ })

/******/ })));