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
/******/ 	return __webpack_require__(__webpack_require__.s = "./public/assets/js/ui-toasts-3d5cfb821e6a220c3e7c6c1381b17453.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./public/assets/js/ui-toasts-3d5cfb821e6a220c3e7c6c1381b17453.js":
/*!************************************************************************!*\
  !*** ./public/assets/js/ui-toasts-3d5cfb821e6a220c3e7c6c1381b17453.js ***!
  \************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";
eval("/**\n * UI Toasts\n */\n\n\n(function () {\n  // Bootstrap toasts example\n  // --------------------------------------------------------------------\n  var toastPlacementExample = document.querySelector('.toast-placement-ex'),\n      toastPlacementBtn = document.querySelector('#showToastPlacement');\n  var selectedType, selectedPlacement, toastPlacement; // Dispose toast when open another\n\n  function toastDispose(toast) {\n    if (toast && toast._element !== null) {\n      if (toastPlacementExample) {\n        toastPlacementExample.classList.remove(selectedType);\n        DOMTokenList.prototype.remove.apply(toastPlacementExample.classList, selectedPlacement);\n      }\n\n      toast.dispose();\n    }\n  } // Placement Button click\n\n\n  if (toastPlacementBtn) {\n    toastPlacementBtn.onclick = function () {\n      if (toastPlacement) {\n        toastDispose(toastPlacement);\n      }\n\n      selectedType = document.querySelector('#selectTypeOpt').value;\n      selectedPlacement = document.querySelector('#selectPlacement').value.split(' ');\n      toastPlacementExample.classList.add(selectedType);\n      DOMTokenList.prototype.add.apply(toastPlacementExample.classList, selectedPlacement);\n      toastPlacement = new bootstrap.Toast(toastPlacementExample);\n      toastPlacement.show();\n    };\n  }\n})();//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9wdWJsaWMvYXNzZXRzL2pzL3VpLXRvYXN0cy0zZDVjZmI4MjFlNmEyMjBjM2U3YzZjMTM4MWIxNzQ1My5qcz8xODI1Il0sIm5hbWVzIjpbInRvYXN0UGxhY2VtZW50RXhhbXBsZSIsImRvY3VtZW50IiwicXVlcnlTZWxlY3RvciIsInRvYXN0UGxhY2VtZW50QnRuIiwic2VsZWN0ZWRUeXBlIiwic2VsZWN0ZWRQbGFjZW1lbnQiLCJ0b2FzdFBsYWNlbWVudCIsInRvYXN0RGlzcG9zZSIsInRvYXN0IiwiX2VsZW1lbnQiLCJjbGFzc0xpc3QiLCJyZW1vdmUiLCJET01Ub2tlbkxpc3QiLCJwcm90b3R5cGUiLCJhcHBseSIsImRpc3Bvc2UiLCJvbmNsaWNrIiwidmFsdWUiLCJzcGxpdCIsImFkZCIsImJvb3RzdHJhcCIsIlRvYXN0Iiwic2hvdyJdLCJtYXBwaW5ncyI6IkFBQUE7QUFDQTtBQUNBO0FBRWE7O0FBRWIsQ0FBQyxZQUFZO0FBQ1g7QUFDQTtBQUNBLE1BQU1BLHFCQUFxQixHQUFHQyxRQUFRLENBQUNDLGFBQVQsQ0FBdUIscUJBQXZCLENBQTlCO0FBQUEsTUFDRUMsaUJBQWlCLEdBQUdGLFFBQVEsQ0FBQ0MsYUFBVCxDQUF1QixxQkFBdkIsQ0FEdEI7QUFFQSxNQUFJRSxZQUFKLEVBQWtCQyxpQkFBbEIsRUFBcUNDLGNBQXJDLENBTFcsQ0FPWDs7QUFDQSxXQUFTQyxZQUFULENBQXNCQyxLQUF0QixFQUE2QjtBQUMzQixRQUFJQSxLQUFLLElBQUlBLEtBQUssQ0FBQ0MsUUFBTixLQUFtQixJQUFoQyxFQUFzQztBQUNwQyxVQUFJVCxxQkFBSixFQUEyQjtBQUN6QkEsNkJBQXFCLENBQUNVLFNBQXRCLENBQWdDQyxNQUFoQyxDQUF1Q1AsWUFBdkM7QUFDQVEsb0JBQVksQ0FBQ0MsU0FBYixDQUF1QkYsTUFBdkIsQ0FBOEJHLEtBQTlCLENBQW9DZCxxQkFBcUIsQ0FBQ1UsU0FBMUQsRUFBcUVMLGlCQUFyRTtBQUNEOztBQUNERyxXQUFLLENBQUNPLE9BQU47QUFDRDtBQUNGLEdBaEJVLENBaUJYOzs7QUFDQSxNQUFJWixpQkFBSixFQUF1QjtBQUNyQkEscUJBQWlCLENBQUNhLE9BQWxCLEdBQTRCLFlBQVk7QUFDdEMsVUFBSVYsY0FBSixFQUFvQjtBQUNsQkMsb0JBQVksQ0FBQ0QsY0FBRCxDQUFaO0FBQ0Q7O0FBQ0RGLGtCQUFZLEdBQUdILFFBQVEsQ0FBQ0MsYUFBVCxDQUF1QixnQkFBdkIsRUFBeUNlLEtBQXhEO0FBQ0FaLHVCQUFpQixHQUFHSixRQUFRLENBQUNDLGFBQVQsQ0FBdUIsa0JBQXZCLEVBQTJDZSxLQUEzQyxDQUFpREMsS0FBakQsQ0FBdUQsR0FBdkQsQ0FBcEI7QUFFQWxCLDJCQUFxQixDQUFDVSxTQUF0QixDQUFnQ1MsR0FBaEMsQ0FBb0NmLFlBQXBDO0FBQ0FRLGtCQUFZLENBQUNDLFNBQWIsQ0FBdUJNLEdBQXZCLENBQTJCTCxLQUEzQixDQUFpQ2QscUJBQXFCLENBQUNVLFNBQXZELEVBQWtFTCxpQkFBbEU7QUFDQUMsb0JBQWMsR0FBRyxJQUFJYyxTQUFTLENBQUNDLEtBQWQsQ0FBb0JyQixxQkFBcEIsQ0FBakI7QUFDQU0sb0JBQWMsQ0FBQ2dCLElBQWY7QUFDRCxLQVhEO0FBWUQ7QUFDRixDQWhDRCIsImZpbGUiOiIuL3B1YmxpYy9hc3NldHMvanMvdWktdG9hc3RzLTNkNWNmYjgyMWU2YTIyMGMzZTdjNmMxMzgxYjE3NDUzLmpzLmpzIiwic291cmNlc0NvbnRlbnQiOlsiLyoqXG4gKiBVSSBUb2FzdHNcbiAqL1xuXG4ndXNlIHN0cmljdCc7XG5cbihmdW5jdGlvbiAoKSB7XG4gIC8vIEJvb3RzdHJhcCB0b2FzdHMgZXhhbXBsZVxuICAvLyAtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLVxuICBjb25zdCB0b2FzdFBsYWNlbWVudEV4YW1wbGUgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcudG9hc3QtcGxhY2VtZW50LWV4JyksXG4gICAgdG9hc3RQbGFjZW1lbnRCdG4gPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcjc2hvd1RvYXN0UGxhY2VtZW50Jyk7XG4gIGxldCBzZWxlY3RlZFR5cGUsIHNlbGVjdGVkUGxhY2VtZW50LCB0b2FzdFBsYWNlbWVudDtcblxuICAvLyBEaXNwb3NlIHRvYXN0IHdoZW4gb3BlbiBhbm90aGVyXG4gIGZ1bmN0aW9uIHRvYXN0RGlzcG9zZSh0b2FzdCkge1xuICAgIGlmICh0b2FzdCAmJiB0b2FzdC5fZWxlbWVudCAhPT0gbnVsbCkge1xuICAgICAgaWYgKHRvYXN0UGxhY2VtZW50RXhhbXBsZSkge1xuICAgICAgICB0b2FzdFBsYWNlbWVudEV4YW1wbGUuY2xhc3NMaXN0LnJlbW92ZShzZWxlY3RlZFR5cGUpO1xuICAgICAgICBET01Ub2tlbkxpc3QucHJvdG90eXBlLnJlbW92ZS5hcHBseSh0b2FzdFBsYWNlbWVudEV4YW1wbGUuY2xhc3NMaXN0LCBzZWxlY3RlZFBsYWNlbWVudCk7XG4gICAgICB9XG4gICAgICB0b2FzdC5kaXNwb3NlKCk7XG4gICAgfVxuICB9XG4gIC8vIFBsYWNlbWVudCBCdXR0b24gY2xpY2tcbiAgaWYgKHRvYXN0UGxhY2VtZW50QnRuKSB7XG4gICAgdG9hc3RQbGFjZW1lbnRCdG4ub25jbGljayA9IGZ1bmN0aW9uICgpIHtcbiAgICAgIGlmICh0b2FzdFBsYWNlbWVudCkge1xuICAgICAgICB0b2FzdERpc3Bvc2UodG9hc3RQbGFjZW1lbnQpO1xuICAgICAgfVxuICAgICAgc2VsZWN0ZWRUeXBlID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcignI3NlbGVjdFR5cGVPcHQnKS52YWx1ZTtcbiAgICAgIHNlbGVjdGVkUGxhY2VtZW50ID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcignI3NlbGVjdFBsYWNlbWVudCcpLnZhbHVlLnNwbGl0KCcgJyk7XG5cbiAgICAgIHRvYXN0UGxhY2VtZW50RXhhbXBsZS5jbGFzc0xpc3QuYWRkKHNlbGVjdGVkVHlwZSk7XG4gICAgICBET01Ub2tlbkxpc3QucHJvdG90eXBlLmFkZC5hcHBseSh0b2FzdFBsYWNlbWVudEV4YW1wbGUuY2xhc3NMaXN0LCBzZWxlY3RlZFBsYWNlbWVudCk7XG4gICAgICB0b2FzdFBsYWNlbWVudCA9IG5ldyBib290c3RyYXAuVG9hc3QodG9hc3RQbGFjZW1lbnRFeGFtcGxlKTtcbiAgICAgIHRvYXN0UGxhY2VtZW50LnNob3coKTtcbiAgICB9O1xuICB9XG59KSgpO1xuIl0sInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./public/assets/js/ui-toasts-3d5cfb821e6a220c3e7c6c1381b17453.js\n");

/***/ })

/******/ })));