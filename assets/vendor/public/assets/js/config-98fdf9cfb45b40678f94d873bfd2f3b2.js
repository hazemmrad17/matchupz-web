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
/******/ 	return __webpack_require__(__webpack_require__.s = "./public/assets/js/config-98fdf9cfb45b40678f94d873bfd2f3b2.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./public/assets/js/config-98fdf9cfb45b40678f94d873bfd2f3b2.js":
/*!*********************************************************************!*\
  !*** ./public/assets/js/config-98fdf9cfb45b40678f94d873bfd2f3b2.js ***!
  \*********************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";
eval("/**\n * Config\n * -------------------------------------------------------------------------------------\n * ! IMPORTANT: Make sure you clear the browser local storage In order to see the config changes in the template.\n * ! To clear local storage: (https://www.leadshook.com/help/how-to-clear-local-storage-in-google-chrome-browser/).\n */\n // JS global variables\n\nvar config = {\n  colors: {\n    primary: '#696cff',\n    secondary: '#8592a3',\n    success: '#71dd37',\n    info: '#03c3ec',\n    warning: '#ffab00',\n    danger: '#ff3e1d',\n    dark: '#233446',\n    black: '#000',\n    white: '#fff',\n    body: '#f4f5fb',\n    headingColor: '#566a7f',\n    axisColor: '#a1acb8',\n    borderColor: '#eceef1'\n  }\n};//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9wdWJsaWMvYXNzZXRzL2pzL2NvbmZpZy05OGZkZjljZmI0NWI0MDY3OGY5NGQ4NzNiZmQyZjNiMi5qcz8yYjllIl0sIm5hbWVzIjpbImNvbmZpZyIsImNvbG9ycyIsInByaW1hcnkiLCJzZWNvbmRhcnkiLCJzdWNjZXNzIiwiaW5mbyIsIndhcm5pbmciLCJkYW5nZXIiLCJkYXJrIiwiYmxhY2siLCJ3aGl0ZSIsImJvZHkiLCJoZWFkaW5nQ29sb3IiLCJheGlzQ29sb3IiLCJib3JkZXJDb2xvciJdLCJtYXBwaW5ncyI6IkFBQUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0NBSUE7O0FBQ0EsSUFBSUEsTUFBTSxHQUFHO0FBQ1hDLFFBQU0sRUFBRTtBQUNOQyxXQUFPLEVBQUUsU0FESDtBQUVOQyxhQUFTLEVBQUUsU0FGTDtBQUdOQyxXQUFPLEVBQUUsU0FISDtBQUlOQyxRQUFJLEVBQUUsU0FKQTtBQUtOQyxXQUFPLEVBQUUsU0FMSDtBQU1OQyxVQUFNLEVBQUUsU0FORjtBQU9OQyxRQUFJLEVBQUUsU0FQQTtBQVFOQyxTQUFLLEVBQUUsTUFSRDtBQVNOQyxTQUFLLEVBQUUsTUFURDtBQVVOQyxRQUFJLEVBQUUsU0FWQTtBQVdOQyxnQkFBWSxFQUFFLFNBWFI7QUFZTkMsYUFBUyxFQUFFLFNBWkw7QUFhTkMsZUFBVyxFQUFFO0FBYlA7QUFERyxDQUFiIiwiZmlsZSI6Ii4vcHVibGljL2Fzc2V0cy9qcy9jb25maWctOThmZGY5Y2ZiNDViNDA2NzhmOTRkODczYmZkMmYzYjIuanMuanMiLCJzb3VyY2VzQ29udGVudCI6WyIvKipcbiAqIENvbmZpZ1xuICogLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLVxuICogISBJTVBPUlRBTlQ6IE1ha2Ugc3VyZSB5b3UgY2xlYXIgdGhlIGJyb3dzZXIgbG9jYWwgc3RvcmFnZSBJbiBvcmRlciB0byBzZWUgdGhlIGNvbmZpZyBjaGFuZ2VzIGluIHRoZSB0ZW1wbGF0ZS5cbiAqICEgVG8gY2xlYXIgbG9jYWwgc3RvcmFnZTogKGh0dHBzOi8vd3d3LmxlYWRzaG9vay5jb20vaGVscC9ob3ctdG8tY2xlYXItbG9jYWwtc3RvcmFnZS1pbi1nb29nbGUtY2hyb21lLWJyb3dzZXIvKS5cbiAqL1xuXG4ndXNlIHN0cmljdCc7XG5cbi8vIEpTIGdsb2JhbCB2YXJpYWJsZXNcbmxldCBjb25maWcgPSB7XG4gIGNvbG9yczoge1xuICAgIHByaW1hcnk6ICcjNjk2Y2ZmJyxcbiAgICBzZWNvbmRhcnk6ICcjODU5MmEzJyxcbiAgICBzdWNjZXNzOiAnIzcxZGQzNycsXG4gICAgaW5mbzogJyMwM2MzZWMnLFxuICAgIHdhcm5pbmc6ICcjZmZhYjAwJyxcbiAgICBkYW5nZXI6ICcjZmYzZTFkJyxcbiAgICBkYXJrOiAnIzIzMzQ0NicsXG4gICAgYmxhY2s6ICcjMDAwJyxcbiAgICB3aGl0ZTogJyNmZmYnLFxuICAgIGJvZHk6ICcjZjRmNWZiJyxcbiAgICBoZWFkaW5nQ29sb3I6ICcjNTY2YTdmJyxcbiAgICBheGlzQ29sb3I6ICcjYTFhY2I4JyxcbiAgICBib3JkZXJDb2xvcjogJyNlY2VlZjEnXG4gIH1cbn07XG4iXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./public/assets/js/config-98fdf9cfb45b40678f94d873bfd2f3b2.js\n");

/***/ })

/******/ })));