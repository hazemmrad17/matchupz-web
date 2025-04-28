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
/******/ 	return __webpack_require__(__webpack_require__.s = "./vendor/phpunit/php-code-coverage/src/Report/Html/Renderer/Template/js/file.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./vendor/phpunit/php-code-coverage/src/Report/Html/Renderer/Template/js/file.js":
/*!***************************************************************************************!*\
  !*** ./vendor/phpunit/php-code-coverage/src/Report/Html/Renderer/Template/js/file.js ***!
  \***************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("$(function () {\n  var $window = $(window),\n      $top_link = $('#toplink'),\n      $body = $('body, html'),\n      offset = $('#code').offset().top,\n      hidePopover = function hidePopover($target) {\n    $target.data('popover-hover', false);\n    setTimeout(function () {\n      if (!$target.data('popover-hover')) {\n        $target.popover('hide');\n      }\n    }, 300);\n  };\n\n  $top_link.hide().click(function (event) {\n    event.preventDefault();\n    $body.animate({\n      scrollTop: 0\n    }, 800);\n  });\n  $window.scroll(function () {\n    if ($window.scrollTop() > offset) {\n      $top_link.fadeIn();\n    } else {\n      $top_link.fadeOut();\n    }\n  }).scroll();\n  $('.popin').popover({\n    trigger: 'manual'\n  }).on({\n    'mouseenter.popover': function mouseenterPopover() {\n      var $target = $(this);\n      var $container = $target.children().first();\n      $target.data('popover-hover', true); // popover already displayed\n\n      if ($target.next('.popover').length) {\n        return;\n      } // show the popover\n\n\n      $container.popover('show'); // register mouse events on the popover\n\n      $target.next('.popover:not(.popover-initialized)').on({\n        'mouseenter': function mouseenter() {\n          $target.data('popover-hover', true);\n        },\n        'mouseleave': function mouseleave() {\n          hidePopover($container);\n        }\n      }).addClass('popover-initialized');\n    },\n    'mouseleave.popover': function mouseleavePopover() {\n      hidePopover($(this).children().first());\n    }\n  });\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi92ZW5kb3IvcGhwdW5pdC9waHAtY29kZS1jb3ZlcmFnZS9zcmMvUmVwb3J0L0h0bWwvUmVuZGVyZXIvVGVtcGxhdGUvanMvZmlsZS5qcz83ZGFjIl0sIm5hbWVzIjpbIiQiLCIkd2luZG93Iiwid2luZG93IiwiJHRvcF9saW5rIiwiJGJvZHkiLCJvZmZzZXQiLCJ0b3AiLCJoaWRlUG9wb3ZlciIsIiR0YXJnZXQiLCJkYXRhIiwic2V0VGltZW91dCIsInBvcG92ZXIiLCJoaWRlIiwiY2xpY2siLCJldmVudCIsInByZXZlbnREZWZhdWx0IiwiYW5pbWF0ZSIsInNjcm9sbFRvcCIsInNjcm9sbCIsImZhZGVJbiIsImZhZGVPdXQiLCJ0cmlnZ2VyIiwib24iLCIkY29udGFpbmVyIiwiY2hpbGRyZW4iLCJmaXJzdCIsIm5leHQiLCJsZW5ndGgiLCJhZGRDbGFzcyJdLCJtYXBwaW5ncyI6IkFBQUVBLENBQUMsQ0FBQyxZQUFXO0FBQ1osTUFBSUMsT0FBTyxHQUFPRCxDQUFDLENBQUNFLE1BQUQsQ0FBbkI7QUFBQSxNQUNJQyxTQUFTLEdBQUtILENBQUMsQ0FBQyxVQUFELENBRG5CO0FBQUEsTUFFSUksS0FBSyxHQUFTSixDQUFDLENBQUMsWUFBRCxDQUZuQjtBQUFBLE1BR0lLLE1BQU0sR0FBUUwsQ0FBQyxDQUFDLE9BQUQsQ0FBRCxDQUFXSyxNQUFYLEdBQW9CQyxHQUh0QztBQUFBLE1BSUlDLFdBQVcsR0FBRyxTQUFkQSxXQUFjLENBQVVDLE9BQVYsRUFBbUI7QUFDaENBLFdBQU8sQ0FBQ0MsSUFBUixDQUFhLGVBQWIsRUFBOEIsS0FBOUI7QUFFQUMsY0FBVSxDQUFDLFlBQVk7QUFDdEIsVUFBSSxDQUFDRixPQUFPLENBQUNDLElBQVIsQ0FBYSxlQUFiLENBQUwsRUFBb0M7QUFDbkNELGVBQU8sQ0FBQ0csT0FBUixDQUFnQixNQUFoQjtBQUNBO0FBQ0QsS0FKUyxFQUlQLEdBSk8sQ0FBVjtBQUtGLEdBWkg7O0FBY0FSLFdBQVMsQ0FBQ1MsSUFBVixHQUFpQkMsS0FBakIsQ0FBdUIsVUFBU0MsS0FBVCxFQUFnQjtBQUN0Q0EsU0FBSyxDQUFDQyxjQUFOO0FBQ0FYLFNBQUssQ0FBQ1ksT0FBTixDQUFjO0FBQUNDLGVBQVMsRUFBQztBQUFYLEtBQWQsRUFBNkIsR0FBN0I7QUFDQSxHQUhEO0FBS0FoQixTQUFPLENBQUNpQixNQUFSLENBQWUsWUFBVztBQUN6QixRQUFHakIsT0FBTyxDQUFDZ0IsU0FBUixLQUFzQlosTUFBekIsRUFBaUM7QUFDaENGLGVBQVMsQ0FBQ2dCLE1BQVY7QUFDQSxLQUZELE1BRU87QUFDTmhCLGVBQVMsQ0FBQ2lCLE9BQVY7QUFDQTtBQUNELEdBTkQsRUFNR0YsTUFOSDtBQVFBbEIsR0FBQyxDQUFDLFFBQUQsQ0FBRCxDQUNFVyxPQURGLENBQ1U7QUFBQ1UsV0FBTyxFQUFFO0FBQVYsR0FEVixFQUVFQyxFQUZGLENBRUs7QUFDSCwwQkFBc0IsNkJBQVk7QUFDakMsVUFBSWQsT0FBTyxHQUFHUixDQUFDLENBQUMsSUFBRCxDQUFmO0FBQ0EsVUFBSXVCLFVBQVUsR0FBR2YsT0FBTyxDQUFDZ0IsUUFBUixHQUFtQkMsS0FBbkIsRUFBakI7QUFFQWpCLGFBQU8sQ0FBQ0MsSUFBUixDQUFhLGVBQWIsRUFBOEIsSUFBOUIsRUFKaUMsQ0FNakM7O0FBQ0EsVUFBSUQsT0FBTyxDQUFDa0IsSUFBUixDQUFhLFVBQWIsRUFBeUJDLE1BQTdCLEVBQXFDO0FBQ3BDO0FBQ0EsT0FUZ0MsQ0FXakM7OztBQUNBSixnQkFBVSxDQUFDWixPQUFYLENBQW1CLE1BQW5CLEVBWmlDLENBY2pDOztBQUNBSCxhQUFPLENBQUNrQixJQUFSLENBQWEsb0NBQWIsRUFDRUosRUFERixDQUNLO0FBQ0gsc0JBQWMsc0JBQVk7QUFDekJkLGlCQUFPLENBQUNDLElBQVIsQ0FBYSxlQUFiLEVBQThCLElBQTlCO0FBQ0EsU0FIRTtBQUlILHNCQUFjLHNCQUFZO0FBQ3pCRixxQkFBVyxDQUFDZ0IsVUFBRCxDQUFYO0FBQ0E7QUFORSxPQURMLEVBU0VLLFFBVEYsQ0FTVyxxQkFUWDtBQVVBLEtBMUJFO0FBMkJILDBCQUFzQiw2QkFBWTtBQUNqQ3JCLGlCQUFXLENBQUNQLENBQUMsQ0FBQyxJQUFELENBQUQsQ0FBUXdCLFFBQVIsR0FBbUJDLEtBQW5CLEVBQUQsQ0FBWDtBQUNBO0FBN0JFLEdBRkw7QUFpQ0EsQ0E3REEsQ0FBRCIsImZpbGUiOiIuL3ZlbmRvci9waHB1bml0L3BocC1jb2RlLWNvdmVyYWdlL3NyYy9SZXBvcnQvSHRtbC9SZW5kZXJlci9UZW1wbGF0ZS9qcy9maWxlLmpzLmpzIiwic291cmNlc0NvbnRlbnQiOlsiICAkKGZ1bmN0aW9uKCkge1xuICAgdmFyICR3aW5kb3cgICAgID0gJCh3aW5kb3cpXG4gICAgICwgJHRvcF9saW5rICAgPSAkKCcjdG9wbGluaycpXG4gICAgICwgJGJvZHkgICAgICAgPSAkKCdib2R5LCBodG1sJylcbiAgICAgLCBvZmZzZXQgICAgICA9ICQoJyNjb2RlJykub2Zmc2V0KCkudG9wXG4gICAgICwgaGlkZVBvcG92ZXIgPSBmdW5jdGlvbiAoJHRhcmdldCkge1xuICAgICAgICAkdGFyZ2V0LmRhdGEoJ3BvcG92ZXItaG92ZXInLCBmYWxzZSk7XG5cbiAgICAgICAgc2V0VGltZW91dChmdW5jdGlvbiAoKSB7XG4gICAgICAgICBpZiAoISR0YXJnZXQuZGF0YSgncG9wb3Zlci1ob3ZlcicpKSB7XG4gICAgICAgICAgJHRhcmdldC5wb3BvdmVyKCdoaWRlJyk7XG4gICAgICAgICB9XG4gICAgICAgIH0sIDMwMCk7XG4gICAgIH07XG5cbiAgICR0b3BfbGluay5oaWRlKCkuY2xpY2soZnVuY3Rpb24oZXZlbnQpIHtcbiAgICBldmVudC5wcmV2ZW50RGVmYXVsdCgpO1xuICAgICRib2R5LmFuaW1hdGUoe3Njcm9sbFRvcDowfSwgODAwKTtcbiAgIH0pO1xuXG4gICAkd2luZG93LnNjcm9sbChmdW5jdGlvbigpIHtcbiAgICBpZigkd2luZG93LnNjcm9sbFRvcCgpID4gb2Zmc2V0KSB7XG4gICAgICR0b3BfbGluay5mYWRlSW4oKTtcbiAgICB9IGVsc2Uge1xuICAgICAkdG9wX2xpbmsuZmFkZU91dCgpO1xuICAgIH1cbiAgIH0pLnNjcm9sbCgpO1xuXG4gICAkKCcucG9waW4nKVxuICAgIC5wb3BvdmVyKHt0cmlnZ2VyOiAnbWFudWFsJ30pXG4gICAgLm9uKHtcbiAgICAgJ21vdXNlZW50ZXIucG9wb3Zlcic6IGZ1bmN0aW9uICgpIHtcbiAgICAgIHZhciAkdGFyZ2V0ID0gJCh0aGlzKTtcbiAgICAgIHZhciAkY29udGFpbmVyID0gJHRhcmdldC5jaGlsZHJlbigpLmZpcnN0KCk7XG5cbiAgICAgICR0YXJnZXQuZGF0YSgncG9wb3Zlci1ob3ZlcicsIHRydWUpO1xuXG4gICAgICAvLyBwb3BvdmVyIGFscmVhZHkgZGlzcGxheWVkXG4gICAgICBpZiAoJHRhcmdldC5uZXh0KCcucG9wb3ZlcicpLmxlbmd0aCkge1xuICAgICAgIHJldHVybjtcbiAgICAgIH1cblxuICAgICAgLy8gc2hvdyB0aGUgcG9wb3ZlclxuICAgICAgJGNvbnRhaW5lci5wb3BvdmVyKCdzaG93Jyk7XG5cbiAgICAgIC8vIHJlZ2lzdGVyIG1vdXNlIGV2ZW50cyBvbiB0aGUgcG9wb3ZlclxuICAgICAgJHRhcmdldC5uZXh0KCcucG9wb3Zlcjpub3QoLnBvcG92ZXItaW5pdGlhbGl6ZWQpJylcbiAgICAgICAub24oe1xuICAgICAgICAnbW91c2VlbnRlcic6IGZ1bmN0aW9uICgpIHtcbiAgICAgICAgICR0YXJnZXQuZGF0YSgncG9wb3Zlci1ob3ZlcicsIHRydWUpO1xuICAgICAgICB9LFxuICAgICAgICAnbW91c2VsZWF2ZSc6IGZ1bmN0aW9uICgpIHtcbiAgICAgICAgIGhpZGVQb3BvdmVyKCRjb250YWluZXIpO1xuICAgICAgICB9XG4gICAgICAgfSlcbiAgICAgICAuYWRkQ2xhc3MoJ3BvcG92ZXItaW5pdGlhbGl6ZWQnKTtcbiAgICAgfSxcbiAgICAgJ21vdXNlbGVhdmUucG9wb3Zlcic6IGZ1bmN0aW9uICgpIHtcbiAgICAgIGhpZGVQb3BvdmVyKCQodGhpcykuY2hpbGRyZW4oKS5maXJzdCgpKTtcbiAgICAgfVxuICAgIH0pO1xuICB9KTtcbiJdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./vendor/phpunit/php-code-coverage/src/Report/Html/Renderer/Template/js/file.js\n");

/***/ })

/******/ })));