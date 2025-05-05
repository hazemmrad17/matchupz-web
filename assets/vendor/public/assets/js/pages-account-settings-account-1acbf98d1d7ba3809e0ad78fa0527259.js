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
/******/ 	return __webpack_require__(__webpack_require__.s = "./public/assets/js/pages-account-settings-account-1acbf98d1d7ba3809e0ad78fa0527259.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./public/assets/js/pages-account-settings-account-1acbf98d1d7ba3809e0ad78fa0527259.js":
/*!*********************************************************************************************!*\
  !*** ./public/assets/js/pages-account-settings-account-1acbf98d1d7ba3809e0ad78fa0527259.js ***!
  \*********************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";
eval("/**\n * Account Settings - Account\n */\n\n\ndocument.addEventListener('DOMContentLoaded', function (e) {\n  (function () {\n    var deactivateAcc = document.querySelector('#formAccountDeactivation'); // Update/reset user image of account page\n\n    var accountUserImage = document.getElementById('uploadedAvatar');\n    var fileInput = document.querySelector('.account-file-input'),\n        resetFileInput = document.querySelector('.account-image-reset');\n\n    if (accountUserImage) {\n      var resetImage = accountUserImage.src;\n\n      fileInput.onchange = function () {\n        if (fileInput.files[0]) {\n          accountUserImage.src = window.URL.createObjectURL(fileInput.files[0]);\n        }\n      };\n\n      resetFileInput.onclick = function () {\n        fileInput.value = '';\n        accountUserImage.src = resetImage;\n      };\n    }\n  })();\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9wdWJsaWMvYXNzZXRzL2pzL3BhZ2VzLWFjY291bnQtc2V0dGluZ3MtYWNjb3VudC0xYWNiZjk4ZDFkN2JhMzgwOWUwYWQ3OGZhMDUyNzI1OS5qcz9jYTc2Il0sIm5hbWVzIjpbImRvY3VtZW50IiwiYWRkRXZlbnRMaXN0ZW5lciIsImUiLCJkZWFjdGl2YXRlQWNjIiwicXVlcnlTZWxlY3RvciIsImFjY291bnRVc2VySW1hZ2UiLCJnZXRFbGVtZW50QnlJZCIsImZpbGVJbnB1dCIsInJlc2V0RmlsZUlucHV0IiwicmVzZXRJbWFnZSIsInNyYyIsIm9uY2hhbmdlIiwiZmlsZXMiLCJ3aW5kb3ciLCJVUkwiLCJjcmVhdGVPYmplY3RVUkwiLCJvbmNsaWNrIiwidmFsdWUiXSwibWFwcGluZ3MiOiJBQUFBO0FBQ0E7QUFDQTtBQUVhOztBQUViQSxRQUFRLENBQUNDLGdCQUFULENBQTBCLGtCQUExQixFQUE4QyxVQUFVQyxDQUFWLEVBQWE7QUFDekQsR0FBQyxZQUFZO0FBQ1gsUUFBTUMsYUFBYSxHQUFHSCxRQUFRLENBQUNJLGFBQVQsQ0FBdUIsMEJBQXZCLENBQXRCLENBRFcsQ0FHWDs7QUFDQSxRQUFJQyxnQkFBZ0IsR0FBR0wsUUFBUSxDQUFDTSxjQUFULENBQXdCLGdCQUF4QixDQUF2QjtBQUNBLFFBQU1DLFNBQVMsR0FBR1AsUUFBUSxDQUFDSSxhQUFULENBQXVCLHFCQUF2QixDQUFsQjtBQUFBLFFBQ0VJLGNBQWMsR0FBR1IsUUFBUSxDQUFDSSxhQUFULENBQXVCLHNCQUF2QixDQURuQjs7QUFHQSxRQUFJQyxnQkFBSixFQUFzQjtBQUNwQixVQUFNSSxVQUFVLEdBQUdKLGdCQUFnQixDQUFDSyxHQUFwQzs7QUFDQUgsZUFBUyxDQUFDSSxRQUFWLEdBQXFCLFlBQU07QUFDekIsWUFBSUosU0FBUyxDQUFDSyxLQUFWLENBQWdCLENBQWhCLENBQUosRUFBd0I7QUFDdEJQLDBCQUFnQixDQUFDSyxHQUFqQixHQUF1QkcsTUFBTSxDQUFDQyxHQUFQLENBQVdDLGVBQVgsQ0FBMkJSLFNBQVMsQ0FBQ0ssS0FBVixDQUFnQixDQUFoQixDQUEzQixDQUF2QjtBQUNEO0FBQ0YsT0FKRDs7QUFLQUosb0JBQWMsQ0FBQ1EsT0FBZixHQUF5QixZQUFNO0FBQzdCVCxpQkFBUyxDQUFDVSxLQUFWLEdBQWtCLEVBQWxCO0FBQ0FaLHdCQUFnQixDQUFDSyxHQUFqQixHQUF1QkQsVUFBdkI7QUFDRCxPQUhEO0FBSUQ7QUFDRixHQXBCRDtBQXFCRCxDQXRCRCIsImZpbGUiOiIuL3B1YmxpYy9hc3NldHMvanMvcGFnZXMtYWNjb3VudC1zZXR0aW5ncy1hY2NvdW50LTFhY2JmOThkMWQ3YmEzODA5ZTBhZDc4ZmEwNTI3MjU5LmpzLmpzIiwic291cmNlc0NvbnRlbnQiOlsiLyoqXG4gKiBBY2NvdW50IFNldHRpbmdzIC0gQWNjb3VudFxuICovXG5cbid1c2Ugc3RyaWN0JztcblxuZG9jdW1lbnQuYWRkRXZlbnRMaXN0ZW5lcignRE9NQ29udGVudExvYWRlZCcsIGZ1bmN0aW9uIChlKSB7XG4gIChmdW5jdGlvbiAoKSB7XG4gICAgY29uc3QgZGVhY3RpdmF0ZUFjYyA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJyNmb3JtQWNjb3VudERlYWN0aXZhdGlvbicpO1xuXG4gICAgLy8gVXBkYXRlL3Jlc2V0IHVzZXIgaW1hZ2Ugb2YgYWNjb3VudCBwYWdlXG4gICAgbGV0IGFjY291bnRVc2VySW1hZ2UgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgndXBsb2FkZWRBdmF0YXInKTtcbiAgICBjb25zdCBmaWxlSW5wdXQgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKCcuYWNjb3VudC1maWxlLWlucHV0JyksXG4gICAgICByZXNldEZpbGVJbnB1dCA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJy5hY2NvdW50LWltYWdlLXJlc2V0Jyk7XG5cbiAgICBpZiAoYWNjb3VudFVzZXJJbWFnZSkge1xuICAgICAgY29uc3QgcmVzZXRJbWFnZSA9IGFjY291bnRVc2VySW1hZ2Uuc3JjO1xuICAgICAgZmlsZUlucHV0Lm9uY2hhbmdlID0gKCkgPT4ge1xuICAgICAgICBpZiAoZmlsZUlucHV0LmZpbGVzWzBdKSB7XG4gICAgICAgICAgYWNjb3VudFVzZXJJbWFnZS5zcmMgPSB3aW5kb3cuVVJMLmNyZWF0ZU9iamVjdFVSTChmaWxlSW5wdXQuZmlsZXNbMF0pO1xuICAgICAgICB9XG4gICAgICB9O1xuICAgICAgcmVzZXRGaWxlSW5wdXQub25jbGljayA9ICgpID0+IHtcbiAgICAgICAgZmlsZUlucHV0LnZhbHVlID0gJyc7XG4gICAgICAgIGFjY291bnRVc2VySW1hZ2Uuc3JjID0gcmVzZXRJbWFnZTtcbiAgICAgIH07XG4gICAgfVxuICB9KSgpO1xufSk7XG4iXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./public/assets/js/pages-account-settings-account-1acbf98d1d7ba3809e0ad78fa0527259.js\n");

/***/ })

/******/ })));