"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["app"],{

/***/ "./assets/app.js":
/*!***********************!*\
  !*** ./assets/app.js ***!
  \***********************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _bootstrap_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./bootstrap.js */ "./assets/bootstrap.js");
/* harmony import */ var bootstrap__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! bootstrap */ "./node_modules/bootstrap/dist/js/bootstrap.esm.js");
/* harmony import */ var _styles_app_scss__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./styles/app.scss */ "./assets/styles/app.scss");



console.log('This log comes from assets/app.js - welcome to AssetMapper! 🎉');

/***/ }),

/***/ "./assets/bootstrap.js":
/*!*****************************!*\
  !*** ./assets/bootstrap.js ***!
  \*****************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _symfony_stimulus_bundle__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @symfony/stimulus-bundle */ "./vendor/symfony/stimulus-bundle/assets/dist/loader.js");

var app = (0,_symfony_stimulus_bundle__WEBPACK_IMPORTED_MODULE_0__.startStimulusApp)();
// register any custom, 3rd party controllers here
// app.register('some_controller_name', SomeImportedController);

/***/ }),

/***/ "./assets/styles/app.scss":
/*!********************************!*\
  !*** ./assets/styles/app.scss ***!
  \********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./vendor/symfony/stimulus-bundle/assets/dist/controllers.js":
/*!*******************************************************************!*\
  !*** ./vendor/symfony/stimulus-bundle/assets/dist/controllers.js ***!
  \*******************************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   eagerControllers: () => (/* binding */ eagerControllers),
/* harmony export */   isApplicationDebug: () => (/* binding */ isApplicationDebug),
/* harmony export */   lazyControllers: () => (/* binding */ lazyControllers)
/* harmony export */ });
var eagerControllers = {};
var lazyControllers = {};
var isApplicationDebug = false;


/***/ }),

/***/ "./vendor/symfony/stimulus-bundle/assets/dist/loader.js":
/*!**************************************************************!*\
  !*** ./vendor/symfony/stimulus-bundle/assets/dist/loader.js ***!
  \**************************************************************/
/***/ ((__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   loadControllers: () => (/* binding */ loadControllers),
/* harmony export */   startStimulusApp: () => (/* binding */ startStimulusApp)
/* harmony export */ });
/* harmony import */ var core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.symbol.js */ "./node_modules/core-js/modules/es.symbol.js");
/* harmony import */ var core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.symbol.description.js */ "./node_modules/core-js/modules/es.symbol.description.js");
/* harmony import */ var core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! core-js/modules/es.symbol.iterator.js */ "./node_modules/core-js/modules/es.symbol.iterator.js");
/* harmony import */ var core_js_modules_es_symbol_to_primitive_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! core-js/modules/es.symbol.to-primitive.js */ "./node_modules/core-js/modules/es.symbol.to-primitive.js");
/* harmony import */ var core_js_modules_es_error_cause_js__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! core-js/modules/es.error.cause.js */ "./node_modules/core-js/modules/es.error.cause.js");
/* harmony import */ var core_js_modules_es_error_to_string_js__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! core-js/modules/es.error.to-string.js */ "./node_modules/core-js/modules/es.error.to-string.js");
/* harmony import */ var core_js_modules_es_array_filter_js__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! core-js/modules/es.array.filter.js */ "./node_modules/core-js/modules/es.array.filter.js");
/* harmony import */ var core_js_modules_es_array_flat_map_js__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! core-js/modules/es.array.flat-map.js */ "./node_modules/core-js/modules/es.array.flat-map.js");
/* harmony import */ var core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! core-js/modules/es.array.for-each.js */ "./node_modules/core-js/modules/es.array.for-each.js");
/* harmony import */ var core_js_modules_es_array_from_js__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! core-js/modules/es.array.from.js */ "./node_modules/core-js/modules/es.array.from.js");
/* harmony import */ var core_js_modules_es_array_is_array_js__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! core-js/modules/es.array.is-array.js */ "./node_modules/core-js/modules/es.array.is-array.js");
/* harmony import */ var core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! core-js/modules/es.array.iterator.js */ "./node_modules/core-js/modules/es.array.iterator.js");
/* harmony import */ var core_js_modules_es_array_slice_js__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! core-js/modules/es.array.slice.js */ "./node_modules/core-js/modules/es.array.slice.js");
/* harmony import */ var core_js_modules_es_array_unscopables_flat_map_js__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! core-js/modules/es.array.unscopables.flat-map.js */ "./node_modules/core-js/modules/es.array.unscopables.flat-map.js");
/* harmony import */ var core_js_modules_es_date_to_primitive_js__WEBPACK_IMPORTED_MODULE_14__ = __webpack_require__(/*! core-js/modules/es.date.to-primitive.js */ "./node_modules/core-js/modules/es.date.to-primitive.js");
/* harmony import */ var core_js_modules_es_date_to_string_js__WEBPACK_IMPORTED_MODULE_15__ = __webpack_require__(/*! core-js/modules/es.date.to-string.js */ "./node_modules/core-js/modules/es.date.to-string.js");
/* harmony import */ var core_js_modules_es_function_name_js__WEBPACK_IMPORTED_MODULE_16__ = __webpack_require__(/*! core-js/modules/es.function.name.js */ "./node_modules/core-js/modules/es.function.name.js");
/* harmony import */ var core_js_modules_es_number_constructor_js__WEBPACK_IMPORTED_MODULE_17__ = __webpack_require__(/*! core-js/modules/es.number.constructor.js */ "./node_modules/core-js/modules/es.number.constructor.js");
/* harmony import */ var core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_18__ = __webpack_require__(/*! core-js/modules/es.object.define-property.js */ "./node_modules/core-js/modules/es.object.define-property.js");
/* harmony import */ var core_js_modules_es_object_keys_js__WEBPACK_IMPORTED_MODULE_19__ = __webpack_require__(/*! core-js/modules/es.object.keys.js */ "./node_modules/core-js/modules/es.object.keys.js");
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_20__ = __webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");
/* harmony import */ var core_js_modules_es_regexp_exec_js__WEBPACK_IMPORTED_MODULE_21__ = __webpack_require__(/*! core-js/modules/es.regexp.exec.js */ "./node_modules/core-js/modules/es.regexp.exec.js");
/* harmony import */ var core_js_modules_es_regexp_test_js__WEBPACK_IMPORTED_MODULE_22__ = __webpack_require__(/*! core-js/modules/es.regexp.test.js */ "./node_modules/core-js/modules/es.regexp.test.js");
/* harmony import */ var core_js_modules_es_regexp_to_string_js__WEBPACK_IMPORTED_MODULE_23__ = __webpack_require__(/*! core-js/modules/es.regexp.to-string.js */ "./node_modules/core-js/modules/es.regexp.to-string.js");
/* harmony import */ var core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_24__ = __webpack_require__(/*! core-js/modules/es.string.iterator.js */ "./node_modules/core-js/modules/es.string.iterator.js");
/* harmony import */ var core_js_modules_es_string_split_js__WEBPACK_IMPORTED_MODULE_25__ = __webpack_require__(/*! core-js/modules/es.string.split.js */ "./node_modules/core-js/modules/es.string.split.js");
/* harmony import */ var core_js_modules_esnext_iterator_constructor_js__WEBPACK_IMPORTED_MODULE_26__ = __webpack_require__(/*! core-js/modules/esnext.iterator.constructor.js */ "./node_modules/core-js/modules/esnext.iterator.constructor.js");
/* harmony import */ var core_js_modules_esnext_iterator_filter_js__WEBPACK_IMPORTED_MODULE_27__ = __webpack_require__(/*! core-js/modules/esnext.iterator.filter.js */ "./node_modules/core-js/modules/esnext.iterator.filter.js");
/* harmony import */ var core_js_modules_esnext_iterator_flat_map_js__WEBPACK_IMPORTED_MODULE_28__ = __webpack_require__(/*! core-js/modules/esnext.iterator.flat-map.js */ "./node_modules/core-js/modules/esnext.iterator.flat-map.js");
/* harmony import */ var core_js_modules_esnext_iterator_for_each_js__WEBPACK_IMPORTED_MODULE_29__ = __webpack_require__(/*! core-js/modules/esnext.iterator.for-each.js */ "./node_modules/core-js/modules/esnext.iterator.for-each.js");
/* harmony import */ var core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_30__ = __webpack_require__(/*! core-js/modules/web.dom-collections.for-each.js */ "./node_modules/core-js/modules/web.dom-collections.for-each.js");
/* harmony import */ var core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_31__ = __webpack_require__(/*! core-js/modules/web.dom-collections.iterator.js */ "./node_modules/core-js/modules/web.dom-collections.iterator.js");
/* harmony import */ var _hotwired_stimulus__WEBPACK_IMPORTED_MODULE_32__ = __webpack_require__(/*! @hotwired/stimulus */ "./node_modules/@hotwired/stimulus/dist/stimulus.js");
/* harmony import */ var _controllers_js__WEBPACK_IMPORTED_MODULE_33__ = __webpack_require__(/*! ./controllers.js */ "./vendor/symfony/stimulus-bundle/assets/dist/controllers.js");
function _typeof(o) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (o) { return typeof o; } : function (o) { return o && "function" == typeof Symbol && o.constructor === Symbol && o !== Symbol.prototype ? "symbol" : typeof o; }, _typeof(o); }
function _createForOfIteratorHelper(r, e) { var t = "undefined" != typeof Symbol && r[Symbol.iterator] || r["@@iterator"]; if (!t) { if (Array.isArray(r) || (t = _unsupportedIterableToArray(r)) || e && r && "number" == typeof r.length) { t && (r = t); var _n = 0, F = function F() {}; return { s: F, n: function n() { return _n >= r.length ? { done: !0 } : { done: !1, value: r[_n++] }; }, e: function e(r) { throw r; }, f: F }; } throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); } var o, a = !0, u = !1; return { s: function s() { t = t.call(r); }, n: function n() { var r = t.next(); return a = r.done, r; }, e: function e(r) { u = !0, o = r; }, f: function f() { try { a || null == t["return"] || t["return"](); } finally { if (u) throw o; } } }; }
function _unsupportedIterableToArray(r, a) { if (r) { if ("string" == typeof r) return _arrayLikeToArray(r, a); var t = {}.toString.call(r).slice(8, -1); return "Object" === t && r.constructor && (t = r.constructor.name), "Map" === t || "Set" === t ? Array.from(r) : "Arguments" === t || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(t) ? _arrayLikeToArray(r, a) : void 0; } }
function _arrayLikeToArray(r, a) { (null == a || a > r.length) && (a = r.length); for (var e = 0, n = Array(a); e < a; e++) n[e] = r[e]; return n; }
































function _classCallCheck(a, n) { if (!(a instanceof n)) throw new TypeError("Cannot call a class as a function"); }
function _defineProperties(e, r) { for (var t = 0; t < r.length; t++) { var o = r[t]; o.enumerable = o.enumerable || !1, o.configurable = !0, "value" in o && (o.writable = !0), Object.defineProperty(e, _toPropertyKey(o.key), o); } }
function _createClass(e, r, t) { return r && _defineProperties(e.prototype, r), t && _defineProperties(e, t), Object.defineProperty(e, "prototype", { writable: !1 }), e; }
function _toPropertyKey(t) { var i = _toPrimitive(t, "string"); return "symbol" == _typeof(i) ? i : i + ""; }
function _toPrimitive(t, r) { if ("object" != _typeof(t) || !t) return t; var e = t[Symbol.toPrimitive]; if (void 0 !== e) { var i = e.call(t, r || "default"); if ("object" != _typeof(i)) return i; throw new TypeError("@@toPrimitive must return a primitive value."); } return ("string" === r ? String : Number)(t); }


var controllerAttribute = 'data-controller';
var loadControllers = function loadControllers(application, eagerControllers, lazyControllers) {
  for (var name in eagerControllers) {
    registerController(name, eagerControllers[name], application);
  }
  var lazyControllerHandler = new StimulusLazyControllerHandler(application, lazyControllers);
  lazyControllerHandler.start();
};
var startStimulusApp = function startStimulusApp() {
  var application = _hotwired_stimulus__WEBPACK_IMPORTED_MODULE_32__.Application.start();
  application.debug = _controllers_js__WEBPACK_IMPORTED_MODULE_33__.isApplicationDebug;
  loadControllers(application, _controllers_js__WEBPACK_IMPORTED_MODULE_33__.eagerControllers, _controllers_js__WEBPACK_IMPORTED_MODULE_33__.lazyControllers);
  return application;
};
var StimulusLazyControllerHandler = /*#__PURE__*/function () {
  function StimulusLazyControllerHandler(application, lazyControllers) {
    _classCallCheck(this, StimulusLazyControllerHandler);
    this.application = application;
    this.lazyControllers = lazyControllers;
  }
  return _createClass(StimulusLazyControllerHandler, [{
    key: "start",
    value: function start() {
      this.lazyLoadExistingControllers(document.documentElement);
      this.lazyLoadNewControllers(document.documentElement);
    }
  }, {
    key: "lazyLoadExistingControllers",
    value: function lazyLoadExistingControllers(element) {
      var _this = this;
      Array.from(element.querySelectorAll("[".concat(controllerAttribute, "]"))).flatMap(extractControllerNamesFrom).forEach(function (controllerName) {
        return _this.loadLazyController(controllerName);
      });
    }
  }, {
    key: "loadLazyController",
    value: function loadLazyController(name) {
      var _this2 = this;
      if (!this.lazyControllers[name]) {
        return;
      }
      var controllerLoader = this.lazyControllers[name];
      delete this.lazyControllers[name];
      if (!canRegisterController(name, this.application)) {
        return;
      }
      this.application.logDebugActivity(name, 'lazy:loading');
      controllerLoader().then(function (controllerModule) {
        _this2.application.logDebugActivity(name, 'lazy:loaded');
        registerController(name, controllerModule["default"], _this2.application);
      })["catch"](function (error) {
        console.error("Error loading controller \"".concat(name, "\":"), error);
      });
    }
  }, {
    key: "lazyLoadNewControllers",
    value: function lazyLoadNewControllers(element) {
      var _this3 = this;
      if (Object.keys(this.lazyControllers).length === 0) {
        return;
      }
      new MutationObserver(function (mutationsList) {
        var _iterator = _createForOfIteratorHelper(mutationsList),
          _step;
        try {
          for (_iterator.s(); !(_step = _iterator.n()).done;) {
            var _step$value = _step.value,
              attributeName = _step$value.attributeName,
              target = _step$value.target,
              type = _step$value.type;
            switch (type) {
              case 'attributes':
                {
                  if (attributeName === controllerAttribute && target.getAttribute(controllerAttribute)) {
                    extractControllerNamesFrom(target).forEach(function (controllerName) {
                      return _this3.loadLazyController(controllerName);
                    });
                  }
                  break;
                }
              case 'childList':
                {
                  _this3.lazyLoadExistingControllers(target);
                }
            }
          }
        } catch (err) {
          _iterator.e(err);
        } finally {
          _iterator.f();
        }
      }).observe(element, {
        attributeFilter: [controllerAttribute],
        subtree: true,
        childList: true
      });
    }
  }]);
}();
function registerController(name, controller, application) {
  if (canRegisterController(name, application)) {
    application.register(name, controller);
  }
}
function extractControllerNamesFrom(element) {
  var controllerNameValue = element.getAttribute(controllerAttribute);
  if (!controllerNameValue) {
    return [];
  }
  return controllerNameValue.split(/\s+/).filter(function (content) {
    return content.length;
  });
}
function canRegisterController(name, application) {
  return !application.router.modulesByIdentifier.has(name);
}


/***/ })

},
/******/ __webpack_require__ => { // webpackRuntimeModules
/******/ var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
/******/ __webpack_require__.O(0, ["vendors-node_modules_hotwired_stimulus_dist_stimulus_js-node_modules_bootstrap_dist_js_bootst-e54055"], () => (__webpack_exec__("./assets/app.js")));
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,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QUNuRCxtQkFBbUIsQ0FBQztFQUNyRSxJQUFJLENBQUM2RCxtQkFBbUIsRUFBRTtJQUN0QixPQUFPLEVBQUU7RUFDYjtFQUNBLE9BQU9BLG1CQUFtQixDQUFDQyxLQUFLLENBQUMsS0FBSyxDQUFDLENBQUNDLE1BQU0sQ0FBQyxVQUFDQyxPQUFPO0lBQUEsT0FBS0EsT0FBTyxDQUFDMUIsTUFBTTtFQUFBLEVBQUM7QUFDL0U7QUFDQSxTQUFTUixxQkFBcUJBLENBQUMzQixJQUFJLEVBQUVELFdBQVcsRUFBRTtFQUM5QyxPQUFPLENBQUNBLFdBQVcsQ0FBQytELE1BQU0sQ0FBQ0MsbUJBQW1CLENBQUNDLEdBQUcsQ0FBQ2hFLElBQUksQ0FBQztBQUM1RCIsInNvdXJjZXMiOlsid2VicGFjazovLy8uL2Fzc2V0cy9hcHAuanMiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2Jvb3RzdHJhcC5qcyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvc3R5bGVzL2FwcC5zY3NzPzhmNTkiLCJ3ZWJwYWNrOi8vLy4vdmVuZG9yL3N5bWZvbnkvc3RpbXVsdXMtYnVuZGxlL2Fzc2V0cy9kaXN0L2NvbnRyb2xsZXJzLmpzIiwid2VicGFjazovLy8uL3ZlbmRvci9zeW1mb255L3N0aW11bHVzLWJ1bmRsZS9hc3NldHMvZGlzdC9sb2FkZXIuanMiXSwic291cmNlc0NvbnRlbnQiOlsiaW1wb3J0ICcuL2Jvb3RzdHJhcC5qcyc7XG5pbXBvcnQgJ2Jvb3RzdHJhcCc7XG5pbXBvcnQgJy4vc3R5bGVzL2FwcC5zY3NzJztcblxuY29uc29sZS5sb2coJ1RoaXMgbG9nIGNvbWVzIGZyb20gYXNzZXRzL2FwcC5qcyAtIHdlbGNvbWUgdG8gQXNzZXRNYXBwZXIhIPCfjoknKTtcbiIsImltcG9ydCB7IHN0YXJ0U3RpbXVsdXNBcHAgfSBmcm9tICdAc3ltZm9ueS9zdGltdWx1cy1idW5kbGUnO1xuXG5jb25zdCBhcHAgPSBzdGFydFN0aW11bHVzQXBwKCk7XG4vLyByZWdpc3RlciBhbnkgY3VzdG9tLCAzcmQgcGFydHkgY29udHJvbGxlcnMgaGVyZVxuLy8gYXBwLnJlZ2lzdGVyKCdzb21lX2NvbnRyb2xsZXJfbmFtZScsIFNvbWVJbXBvcnRlZENvbnRyb2xsZXIpO1xuIiwiLy8gZXh0cmFjdGVkIGJ5IG1pbmktY3NzLWV4dHJhY3QtcGx1Z2luXG5leHBvcnQge307IiwiY29uc3QgZWFnZXJDb250cm9sbGVycyA9IHt9O1xuY29uc3QgbGF6eUNvbnRyb2xsZXJzID0ge307XG5jb25zdCBpc0FwcGxpY2F0aW9uRGVidWcgPSBmYWxzZTtcblxuZXhwb3J0IHsgZWFnZXJDb250cm9sbGVycywgaXNBcHBsaWNhdGlvbkRlYnVnLCBsYXp5Q29udHJvbGxlcnMgfTtcbiIsImltcG9ydCB7IEFwcGxpY2F0aW9uIH0gZnJvbSAnQGhvdHdpcmVkL3N0aW11bHVzJztcbmltcG9ydCB7IGlzQXBwbGljYXRpb25EZWJ1ZywgZWFnZXJDb250cm9sbGVycywgbGF6eUNvbnRyb2xsZXJzIH0gZnJvbSAnLi9jb250cm9sbGVycy5qcyc7XG5cbmNvbnN0IGNvbnRyb2xsZXJBdHRyaWJ1dGUgPSAnZGF0YS1jb250cm9sbGVyJztcbmNvbnN0IGxvYWRDb250cm9sbGVycyA9IChhcHBsaWNhdGlvbiwgZWFnZXJDb250cm9sbGVycywgbGF6eUNvbnRyb2xsZXJzKSA9PiB7XG4gICAgZm9yIChjb25zdCBuYW1lIGluIGVhZ2VyQ29udHJvbGxlcnMpIHtcbiAgICAgICAgcmVnaXN0ZXJDb250cm9sbGVyKG5hbWUsIGVhZ2VyQ29udHJvbGxlcnNbbmFtZV0sIGFwcGxpY2F0aW9uKTtcbiAgICB9XG4gICAgY29uc3QgbGF6eUNvbnRyb2xsZXJIYW5kbGVyID0gbmV3IFN0aW11bHVzTGF6eUNvbnRyb2xsZXJIYW5kbGVyKGFwcGxpY2F0aW9uLCBsYXp5Q29udHJvbGxlcnMpO1xuICAgIGxhenlDb250cm9sbGVySGFuZGxlci5zdGFydCgpO1xufTtcbmNvbnN0IHN0YXJ0U3RpbXVsdXNBcHAgPSAoKSA9PiB7XG4gICAgY29uc3QgYXBwbGljYXRpb24gPSBBcHBsaWNhdGlvbi5zdGFydCgpO1xuICAgIGFwcGxpY2F0aW9uLmRlYnVnID0gaXNBcHBsaWNhdGlvbkRlYnVnO1xuICAgIGxvYWRDb250cm9sbGVycyhhcHBsaWNhdGlvbiwgZWFnZXJDb250cm9sbGVycywgbGF6eUNvbnRyb2xsZXJzKTtcbiAgICByZXR1cm4gYXBwbGljYXRpb247XG59O1xuY2xhc3MgU3RpbXVsdXNMYXp5Q29udHJvbGxlckhhbmRsZXIge1xuICAgIGNvbnN0cnVjdG9yKGFwcGxpY2F0aW9uLCBsYXp5Q29udHJvbGxlcnMpIHtcbiAgICAgICAgdGhpcy5hcHBsaWNhdGlvbiA9IGFwcGxpY2F0aW9uO1xuICAgICAgICB0aGlzLmxhenlDb250cm9sbGVycyA9IGxhenlDb250cm9sbGVycztcbiAgICB9XG4gICAgc3RhcnQoKSB7XG4gICAgICAgIHRoaXMubGF6eUxvYWRFeGlzdGluZ0NvbnRyb2xsZXJzKGRvY3VtZW50LmRvY3VtZW50RWxlbWVudCk7XG4gICAgICAgIHRoaXMubGF6eUxvYWROZXdDb250cm9sbGVycyhkb2N1bWVudC5kb2N1bWVudEVsZW1lbnQpO1xuICAgIH1cbiAgICBsYXp5TG9hZEV4aXN0aW5nQ29udHJvbGxlcnMoZWxlbWVudCkge1xuICAgICAgICBBcnJheS5mcm9tKGVsZW1lbnQucXVlcnlTZWxlY3RvckFsbChgWyR7Y29udHJvbGxlckF0dHJpYnV0ZX1dYCkpXG4gICAgICAgICAgICAuZmxhdE1hcChleHRyYWN0Q29udHJvbGxlck5hbWVzRnJvbSlcbiAgICAgICAgICAgIC5mb3JFYWNoKChjb250cm9sbGVyTmFtZSkgPT4gdGhpcy5sb2FkTGF6eUNvbnRyb2xsZXIoY29udHJvbGxlck5hbWUpKTtcbiAgICB9XG4gICAgbG9hZExhenlDb250cm9sbGVyKG5hbWUpIHtcbiAgICAgICAgaWYgKCF0aGlzLmxhenlDb250cm9sbGVyc1tuYW1lXSkge1xuICAgICAgICAgICAgcmV0dXJuO1xuICAgICAgICB9XG4gICAgICAgIGNvbnN0IGNvbnRyb2xsZXJMb2FkZXIgPSB0aGlzLmxhenlDb250cm9sbGVyc1tuYW1lXTtcbiAgICAgICAgZGVsZXRlIHRoaXMubGF6eUNvbnRyb2xsZXJzW25hbWVdO1xuICAgICAgICBpZiAoIWNhblJlZ2lzdGVyQ29udHJvbGxlcihuYW1lLCB0aGlzLmFwcGxpY2F0aW9uKSkge1xuICAgICAgICAgICAgcmV0dXJuO1xuICAgICAgICB9XG4gICAgICAgIHRoaXMuYXBwbGljYXRpb24ubG9nRGVidWdBY3Rpdml0eShuYW1lLCAnbGF6eTpsb2FkaW5nJyk7XG4gICAgICAgIGNvbnRyb2xsZXJMb2FkZXIoKVxuICAgICAgICAgICAgLnRoZW4oKGNvbnRyb2xsZXJNb2R1bGUpID0+IHtcbiAgICAgICAgICAgIHRoaXMuYXBwbGljYXRpb24ubG9nRGVidWdBY3Rpdml0eShuYW1lLCAnbGF6eTpsb2FkZWQnKTtcbiAgICAgICAgICAgIHJlZ2lzdGVyQ29udHJvbGxlcihuYW1lLCBjb250cm9sbGVyTW9kdWxlLmRlZmF1bHQsIHRoaXMuYXBwbGljYXRpb24pO1xuICAgICAgICB9KVxuICAgICAgICAgICAgLmNhdGNoKChlcnJvcikgPT4ge1xuICAgICAgICAgICAgY29uc29sZS5lcnJvcihgRXJyb3IgbG9hZGluZyBjb250cm9sbGVyIFwiJHtuYW1lfVwiOmAsIGVycm9yKTtcbiAgICAgICAgfSk7XG4gICAgfVxuICAgIGxhenlMb2FkTmV3Q29udHJvbGxlcnMoZWxlbWVudCkge1xuICAgICAgICBpZiAoT2JqZWN0LmtleXModGhpcy5sYXp5Q29udHJvbGxlcnMpLmxlbmd0aCA9PT0gMCkge1xuICAgICAgICAgICAgcmV0dXJuO1xuICAgICAgICB9XG4gICAgICAgIG5ldyBNdXRhdGlvbk9ic2VydmVyKChtdXRhdGlvbnNMaXN0KSA9PiB7XG4gICAgICAgICAgICBmb3IgKGNvbnN0IHsgYXR0cmlidXRlTmFtZSwgdGFyZ2V0LCB0eXBlIH0gb2YgbXV0YXRpb25zTGlzdCkge1xuICAgICAgICAgICAgICAgIHN3aXRjaCAodHlwZSkge1xuICAgICAgICAgICAgICAgICAgICBjYXNlICdhdHRyaWJ1dGVzJzoge1xuICAgICAgICAgICAgICAgICAgICAgICAgaWYgKGF0dHJpYnV0ZU5hbWUgPT09IGNvbnRyb2xsZXJBdHRyaWJ1dGUgJiZcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICB0YXJnZXQuZ2V0QXR0cmlidXRlKGNvbnRyb2xsZXJBdHRyaWJ1dGUpKSB7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgZXh0cmFjdENvbnRyb2xsZXJOYW1lc0Zyb20odGFyZ2V0KS5mb3JFYWNoKChjb250cm9sbGVyTmFtZSkgPT4gdGhpcy5sb2FkTGF6eUNvbnRyb2xsZXIoY29udHJvbGxlck5hbWUpKTtcbiAgICAgICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICAgICAgICAgIGJyZWFrO1xuICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgICAgIGNhc2UgJ2NoaWxkTGlzdCc6IHtcbiAgICAgICAgICAgICAgICAgICAgICAgIHRoaXMubGF6eUxvYWRFeGlzdGluZ0NvbnRyb2xsZXJzKHRhcmdldCk7XG4gICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICB9XG4gICAgICAgIH0pLm9ic2VydmUoZWxlbWVudCwge1xuICAgICAgICAgICAgYXR0cmlidXRlRmlsdGVyOiBbY29udHJvbGxlckF0dHJpYnV0ZV0sXG4gICAgICAgICAgICBzdWJ0cmVlOiB0cnVlLFxuICAgICAgICAgICAgY2hpbGRMaXN0OiB0cnVlLFxuICAgICAgICB9KTtcbiAgICB9XG59XG5mdW5jdGlvbiByZWdpc3RlckNvbnRyb2xsZXIobmFtZSwgY29udHJvbGxlciwgYXBwbGljYXRpb24pIHtcbiAgICBpZiAoY2FuUmVnaXN0ZXJDb250cm9sbGVyKG5hbWUsIGFwcGxpY2F0aW9uKSkge1xuICAgICAgICBhcHBsaWNhdGlvbi5yZWdpc3RlcihuYW1lLCBjb250cm9sbGVyKTtcbiAgICB9XG59XG5mdW5jdGlvbiBleHRyYWN0Q29udHJvbGxlck5hbWVzRnJvbShlbGVtZW50KSB7XG4gICAgY29uc3QgY29udHJvbGxlck5hbWVWYWx1ZSA9IGVsZW1lbnQuZ2V0QXR0cmlidXRlKGNvbnRyb2xsZXJBdHRyaWJ1dGUpO1xuICAgIGlmICghY29udHJvbGxlck5hbWVWYWx1ZSkge1xuICAgICAgICByZXR1cm4gW107XG4gICAgfVxuICAgIHJldHVybiBjb250cm9sbGVyTmFtZVZhbHVlLnNwbGl0KC9cXHMrLykuZmlsdGVyKChjb250ZW50KSA9PiBjb250ZW50Lmxlbmd0aCk7XG59XG5mdW5jdGlvbiBjYW5SZWdpc3RlckNvbnRyb2xsZXIobmFtZSwgYXBwbGljYXRpb24pIHtcbiAgICByZXR1cm4gIWFwcGxpY2F0aW9uLnJvdXRlci5tb2R1bGVzQnlJZGVudGlmaWVyLmhhcyhuYW1lKTtcbn1cblxuZXhwb3J0IHsgbG9hZENvbnRyb2xsZXJzLCBzdGFydFN0aW11bHVzQXBwIH07XG4iXSwibmFtZXMiOlsiY29uc29sZSIsImxvZyIsInN0YXJ0U3RpbXVsdXNBcHAiLCJhcHAiLCJlYWdlckNvbnRyb2xsZXJzIiwibGF6eUNvbnRyb2xsZXJzIiwiaXNBcHBsaWNhdGlvbkRlYnVnIiwiQXBwbGljYXRpb24iLCJjb250cm9sbGVyQXR0cmlidXRlIiwibG9hZENvbnRyb2xsZXJzIiwiYXBwbGljYXRpb24iLCJuYW1lIiwicmVnaXN0ZXJDb250cm9sbGVyIiwibGF6eUNvbnRyb2xsZXJIYW5kbGVyIiwiU3RpbXVsdXNMYXp5Q29udHJvbGxlckhhbmRsZXIiLCJzdGFydCIsImRlYnVnIiwiX2NsYXNzQ2FsbENoZWNrIiwiX2NyZWF0ZUNsYXNzIiwia2V5IiwidmFsdWUiLCJsYXp5TG9hZEV4aXN0aW5nQ29udHJvbGxlcnMiLCJkb2N1bWVudCIsImRvY3VtZW50RWxlbWVudCIsImxhenlMb2FkTmV3Q29udHJvbGxlcnMiLCJlbGVtZW50IiwiX3RoaXMiLCJBcnJheSIsImZyb20iLCJxdWVyeVNlbGVjdG9yQWxsIiwiY29uY2F0IiwiZmxhdE1hcCIsImV4dHJhY3RDb250cm9sbGVyTmFtZXNGcm9tIiwiZm9yRWFjaCIsImNvbnRyb2xsZXJOYW1lIiwibG9hZExhenlDb250cm9sbGVyIiwiX3RoaXMyIiwiY29udHJvbGxlckxvYWRlciIsImNhblJlZ2lzdGVyQ29udHJvbGxlciIsImxvZ0RlYnVnQWN0aXZpdHkiLCJ0aGVuIiwiY29udHJvbGxlck1vZHVsZSIsImVycm9yIiwiX3RoaXMzIiwiT2JqZWN0Iiwia2V5cyIsImxlbmd0aCIsIk11dGF0aW9uT2JzZXJ2ZXIiLCJtdXRhdGlvbnNMaXN0IiwiX2l0ZXJhdG9yIiwiX2NyZWF0ZUZvck9mSXRlcmF0b3JIZWxwZXIiLCJfc3RlcCIsInMiLCJuIiwiZG9uZSIsIl9zdGVwJHZhbHVlIiwiYXR0cmlidXRlTmFtZSIsInRhcmdldCIsInR5cGUiLCJnZXRBdHRyaWJ1dGUiLCJlcnIiLCJlIiwiZiIsIm9ic2VydmUiLCJhdHRyaWJ1dGVGaWx0ZXIiLCJzdWJ0cmVlIiwiY2hpbGRMaXN0IiwiY29udHJvbGxlciIsInJlZ2lzdGVyIiwiY29udHJvbGxlck5hbWVWYWx1ZSIsInNwbGl0IiwiZmlsdGVyIiwiY29udGVudCIsInJvdXRlciIsIm1vZHVsZXNCeUlkZW50aWZpZXIiLCJoYXMiXSwic291cmNlUm9vdCI6IiJ9