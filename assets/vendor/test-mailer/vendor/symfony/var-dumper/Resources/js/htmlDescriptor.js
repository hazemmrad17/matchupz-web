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
/******/ 	return __webpack_require__(__webpack_require__.s = "./test-mailer/vendor/symfony/var-dumper/Resources/js/htmlDescriptor.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./test-mailer/vendor/symfony/var-dumper/Resources/js/htmlDescriptor.js":
/*!******************************************************************************!*\
  !*** ./test-mailer/vendor/symfony/var-dumper/Resources/js/htmlDescriptor.js ***!
  \******************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("document.addEventListener('DOMContentLoaded', function () {\n  var prev = null;\n  Array.from(document.getElementsByTagName('article')).reverse().forEach(function (article) {\n    var dedupId = article.dataset.dedupId;\n\n    if (dedupId === prev) {\n      article.getElementsByTagName('header')[0].classList.add('hidden');\n    }\n\n    prev = dedupId;\n  });\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi90ZXN0LW1haWxlci92ZW5kb3Ivc3ltZm9ueS92YXItZHVtcGVyL1Jlc291cmNlcy9qcy9odG1sRGVzY3JpcHRvci5qcz8yNDM1Il0sIm5hbWVzIjpbImRvY3VtZW50IiwiYWRkRXZlbnRMaXN0ZW5lciIsInByZXYiLCJBcnJheSIsImZyb20iLCJnZXRFbGVtZW50c0J5VGFnTmFtZSIsInJldmVyc2UiLCJmb3JFYWNoIiwiYXJ0aWNsZSIsImRlZHVwSWQiLCJkYXRhc2V0IiwiY2xhc3NMaXN0IiwiYWRkIl0sIm1hcHBpbmdzIjoiQUFBQUEsUUFBUSxDQUFDQyxnQkFBVCxDQUEwQixrQkFBMUIsRUFBOEMsWUFBVztBQUN2RCxNQUFJQyxJQUFJLEdBQUcsSUFBWDtBQUNBQyxPQUFLLENBQUNDLElBQU4sQ0FBV0osUUFBUSxDQUFDSyxvQkFBVCxDQUE4QixTQUE5QixDQUFYLEVBQXFEQyxPQUFyRCxHQUErREMsT0FBL0QsQ0FBdUUsVUFBVUMsT0FBVixFQUFtQjtBQUN4RixRQUFNQyxPQUFPLEdBQUdELE9BQU8sQ0FBQ0UsT0FBUixDQUFnQkQsT0FBaEM7O0FBQ0EsUUFBSUEsT0FBTyxLQUFLUCxJQUFoQixFQUFzQjtBQUNwQk0sYUFBTyxDQUFDSCxvQkFBUixDQUE2QixRQUE3QixFQUF1QyxDQUF2QyxFQUEwQ00sU0FBMUMsQ0FBb0RDLEdBQXBELENBQXdELFFBQXhEO0FBQ0Q7O0FBQ0RWLFFBQUksR0FBR08sT0FBUDtBQUNELEdBTkQ7QUFPRCxDQVREIiwiZmlsZSI6Ii4vdGVzdC1tYWlsZXIvdmVuZG9yL3N5bWZvbnkvdmFyLWR1bXBlci9SZXNvdXJjZXMvanMvaHRtbERlc2NyaXB0b3IuanMuanMiLCJzb3VyY2VzQ29udGVudCI6WyJkb2N1bWVudC5hZGRFdmVudExpc3RlbmVyKCdET01Db250ZW50TG9hZGVkJywgZnVuY3Rpb24oKSB7XG4gIGxldCBwcmV2ID0gbnVsbDtcbiAgQXJyYXkuZnJvbShkb2N1bWVudC5nZXRFbGVtZW50c0J5VGFnTmFtZSgnYXJ0aWNsZScpKS5yZXZlcnNlKCkuZm9yRWFjaChmdW5jdGlvbiAoYXJ0aWNsZSkge1xuICAgIGNvbnN0IGRlZHVwSWQgPSBhcnRpY2xlLmRhdGFzZXQuZGVkdXBJZDtcbiAgICBpZiAoZGVkdXBJZCA9PT0gcHJldikge1xuICAgICAgYXJ0aWNsZS5nZXRFbGVtZW50c0J5VGFnTmFtZSgnaGVhZGVyJylbMF0uY2xhc3NMaXN0LmFkZCgnaGlkZGVuJyk7XG4gICAgfVxuICAgIHByZXYgPSBkZWR1cElkO1xuICB9KTtcbn0pO1xuIl0sInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./test-mailer/vendor/symfony/var-dumper/Resources/js/htmlDescriptor.js\n");

/***/ })

/******/ })));