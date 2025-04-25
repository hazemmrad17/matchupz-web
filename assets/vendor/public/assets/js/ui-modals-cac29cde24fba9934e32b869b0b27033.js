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
/******/ 	return __webpack_require__(__webpack_require__.s = "./public/assets/js/ui-modals-cac29cde24fba9934e32b869b0b27033.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./public/assets/js/ui-modals-cac29cde24fba9934e32b869b0b27033.js":
/*!************************************************************************!*\
  !*** ./public/assets/js/ui-modals-cac29cde24fba9934e32b869b0b27033.js ***!
  \************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";
eval("/**\n * UI Modals\n */\n\n\n(function () {\n  // On hiding modal, remove iframe video/audio to stop playing\n  var youTubeModal = document.querySelector('#youTubeModal'),\n      youTubeModalVideo = youTubeModal.querySelector('iframe');\n  youTubeModal.addEventListener('hidden.bs.modal', function () {\n    youTubeModalVideo.setAttribute('src', '');\n  }); // Function to get and auto play youTube video\n\n  var autoPlayYouTubeModal = function autoPlayYouTubeModal() {\n    var modalTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle=\"modal\"]'));\n    modalTriggerList.map(function (modalTriggerEl) {\n      modalTriggerEl.onclick = function () {\n        var theModal = this.getAttribute('data-bs-target'),\n            videoSRC = this.getAttribute('data-theVideo'),\n            videoSRCauto = \"\".concat(videoSRC, \"?autoplay=1\"),\n            modalVideo = document.querySelector(\"\".concat(theModal, \" iframe\"));\n\n        if (modalVideo) {\n          modalVideo.setAttribute('src', videoSRCauto);\n        }\n      };\n    });\n  }; // Calling function on load\n\n\n  autoPlayYouTubeModal();\n})();//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9wdWJsaWMvYXNzZXRzL2pzL3VpLW1vZGFscy1jYWMyOWNkZTI0ZmJhOTkzNGUzMmI4NjliMGIyNzAzMy5qcz9hYjRmIl0sIm5hbWVzIjpbInlvdVR1YmVNb2RhbCIsImRvY3VtZW50IiwicXVlcnlTZWxlY3RvciIsInlvdVR1YmVNb2RhbFZpZGVvIiwiYWRkRXZlbnRMaXN0ZW5lciIsInNldEF0dHJpYnV0ZSIsImF1dG9QbGF5WW91VHViZU1vZGFsIiwibW9kYWxUcmlnZ2VyTGlzdCIsInNsaWNlIiwiY2FsbCIsInF1ZXJ5U2VsZWN0b3JBbGwiLCJtYXAiLCJtb2RhbFRyaWdnZXJFbCIsIm9uY2xpY2siLCJ0aGVNb2RhbCIsImdldEF0dHJpYnV0ZSIsInZpZGVvU1JDIiwidmlkZW9TUkNhdXRvIiwibW9kYWxWaWRlbyJdLCJtYXBwaW5ncyI6IkFBQUE7QUFDQTtBQUNBO0FBRWE7O0FBRWIsQ0FBQyxZQUFZO0FBQ1g7QUFDQSxNQUFNQSxZQUFZLEdBQUdDLFFBQVEsQ0FBQ0MsYUFBVCxDQUF1QixlQUF2QixDQUFyQjtBQUFBLE1BQ0VDLGlCQUFpQixHQUFHSCxZQUFZLENBQUNFLGFBQWIsQ0FBMkIsUUFBM0IsQ0FEdEI7QUFFQUYsY0FBWSxDQUFDSSxnQkFBYixDQUE4QixpQkFBOUIsRUFBaUQsWUFBWTtBQUMzREQscUJBQWlCLENBQUNFLFlBQWxCLENBQStCLEtBQS9CLEVBQXNDLEVBQXRDO0FBQ0QsR0FGRCxFQUpXLENBUVg7O0FBQ0EsTUFBTUMsb0JBQW9CLEdBQUcsU0FBdkJBLG9CQUF1QixHQUFZO0FBQ3ZDLFFBQU1DLGdCQUFnQixHQUFHLEdBQUdDLEtBQUgsQ0FBU0MsSUFBVCxDQUFjUixRQUFRLENBQUNTLGdCQUFULENBQTBCLDBCQUExQixDQUFkLENBQXpCO0FBQ0FILG9CQUFnQixDQUFDSSxHQUFqQixDQUFxQixVQUFVQyxjQUFWLEVBQTBCO0FBQzdDQSxvQkFBYyxDQUFDQyxPQUFmLEdBQXlCLFlBQVk7QUFDbkMsWUFBTUMsUUFBUSxHQUFHLEtBQUtDLFlBQUwsQ0FBa0IsZ0JBQWxCLENBQWpCO0FBQUEsWUFDRUMsUUFBUSxHQUFHLEtBQUtELFlBQUwsQ0FBa0IsZUFBbEIsQ0FEYjtBQUFBLFlBRUVFLFlBQVksYUFBTUQsUUFBTixnQkFGZDtBQUFBLFlBR0VFLFVBQVUsR0FBR2pCLFFBQVEsQ0FBQ0MsYUFBVCxXQUEwQlksUUFBMUIsYUFIZjs7QUFJQSxZQUFJSSxVQUFKLEVBQWdCO0FBQ2RBLG9CQUFVLENBQUNiLFlBQVgsQ0FBd0IsS0FBeEIsRUFBK0JZLFlBQS9CO0FBQ0Q7QUFDRixPQVJEO0FBU0QsS0FWRDtBQVdELEdBYkQsQ0FUVyxDQXdCWDs7O0FBQ0FYLHNCQUFvQjtBQUNyQixDQTFCRCIsImZpbGUiOiIuL3B1YmxpYy9hc3NldHMvanMvdWktbW9kYWxzLWNhYzI5Y2RlMjRmYmE5OTM0ZTMyYjg2OWIwYjI3MDMzLmpzLmpzIiwic291cmNlc0NvbnRlbnQiOlsiLyoqXG4gKiBVSSBNb2RhbHNcbiAqL1xuXG4ndXNlIHN0cmljdCc7XG5cbihmdW5jdGlvbiAoKSB7XG4gIC8vIE9uIGhpZGluZyBtb2RhbCwgcmVtb3ZlIGlmcmFtZSB2aWRlby9hdWRpbyB0byBzdG9wIHBsYXlpbmdcbiAgY29uc3QgeW91VHViZU1vZGFsID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcignI3lvdVR1YmVNb2RhbCcpLFxuICAgIHlvdVR1YmVNb2RhbFZpZGVvID0geW91VHViZU1vZGFsLnF1ZXJ5U2VsZWN0b3IoJ2lmcmFtZScpO1xuICB5b3VUdWJlTW9kYWwuYWRkRXZlbnRMaXN0ZW5lcignaGlkZGVuLmJzLm1vZGFsJywgZnVuY3Rpb24gKCkge1xuICAgIHlvdVR1YmVNb2RhbFZpZGVvLnNldEF0dHJpYnV0ZSgnc3JjJywgJycpO1xuICB9KTtcblxuICAvLyBGdW5jdGlvbiB0byBnZXQgYW5kIGF1dG8gcGxheSB5b3VUdWJlIHZpZGVvXG4gIGNvbnN0IGF1dG9QbGF5WW91VHViZU1vZGFsID0gZnVuY3Rpb24gKCkge1xuICAgIGNvbnN0IG1vZGFsVHJpZ2dlckxpc3QgPSBbXS5zbGljZS5jYWxsKGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwoJ1tkYXRhLWJzLXRvZ2dsZT1cIm1vZGFsXCJdJykpO1xuICAgIG1vZGFsVHJpZ2dlckxpc3QubWFwKGZ1bmN0aW9uIChtb2RhbFRyaWdnZXJFbCkge1xuICAgICAgbW9kYWxUcmlnZ2VyRWwub25jbGljayA9IGZ1bmN0aW9uICgpIHtcbiAgICAgICAgY29uc3QgdGhlTW9kYWwgPSB0aGlzLmdldEF0dHJpYnV0ZSgnZGF0YS1icy10YXJnZXQnKSxcbiAgICAgICAgICB2aWRlb1NSQyA9IHRoaXMuZ2V0QXR0cmlidXRlKCdkYXRhLXRoZVZpZGVvJyksXG4gICAgICAgICAgdmlkZW9TUkNhdXRvID0gYCR7dmlkZW9TUkN9P2F1dG9wbGF5PTFgLFxuICAgICAgICAgIG1vZGFsVmlkZW8gPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKGAke3RoZU1vZGFsfSBpZnJhbWVgKTtcbiAgICAgICAgaWYgKG1vZGFsVmlkZW8pIHtcbiAgICAgICAgICBtb2RhbFZpZGVvLnNldEF0dHJpYnV0ZSgnc3JjJywgdmlkZW9TUkNhdXRvKTtcbiAgICAgICAgfVxuICAgICAgfTtcbiAgICB9KTtcbiAgfTtcblxuICAvLyBDYWxsaW5nIGZ1bmN0aW9uIG9uIGxvYWRcbiAgYXV0b1BsYXlZb3VUdWJlTW9kYWwoKTtcbn0pKCk7XG4iXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./public/assets/js/ui-modals-cac29cde24fba9934e32b869b0b27033.js\n");

/***/ })

/******/ })));