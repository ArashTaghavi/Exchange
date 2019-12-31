(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[10],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/assets/common/Components/PortletButton.vue?vue&type=script&lang=js&":
/*!***********************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/assets/common/Components/PortletButton.vue?vue&type=script&lang=js& ***!
  \***********************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
//
//
//
//
//
//
//
//
//
/* harmony default export */ __webpack_exports__["default"] = ({
  props: {
    btnTitle: {
      type: Boolean,
      "default": true
    },
    icon: {
      type: String,
      "default": ''
    },
    type: {
      type: String,
      "default": 'success'
    },
    title: {
      type: String,
      "default": ''
    },
    to: {
      type: String,
      "default": ''
    },
    permission: {
      type: [String, Array],
      "default": function _default() {
        return [];
      }
    }
  },
  mounted: function mounted() {
    $('a').tooltip('hide');
    $(this.$el).tooltip();
  },
  methods: {
    handleClick: function handleClick() {
      if (this.to === '') {
        this.$emit('click');
      } else {
        this.$router.push(this.to);
      }
    }
  },
  computed: {
    checkAccess: function checkAccess() {
      if (this.permission === '') return true;
      return this.hasAccess(this.permission);
    }
  }
});

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/assets/common/Components/PortletButton.vue?vue&type=template&id=f3aa103a&":
/*!***************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/assets/common/Components/PortletButton.vue?vue&type=template&id=f3aa103a& ***!
  \***************************************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function() { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return staticRenderFns; });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _vm.btnTitle
    ? _c(
        "button",
        {
          class: "btn btn-xs btn-labeled mb-2 btn-" + _vm.type,
          attrs: { title: _vm.title, type: "button" },
          on: {
            click: function($event) {
              $event.preventDefault()
              return _vm.handleClick()
            }
          }
        },
        [
          _c("span", { staticClass: "btn-label" }, [
            _c("i", { class: "fa fa-" + _vm.icon })
          ]),
          _vm._v(_vm._s(_vm.title) + "\n")
        ]
      )
    : _c(
        "span",
        {
          staticClass: "mr-1 btn",
          attrs: { title: _vm.title },
          on: {
            click: function($event) {
              $event.preventDefault()
              return _vm.handleClick()
            }
          }
        },
        [_c("i", { class: "fa fa-" + _vm.icon })]
      )
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./resources/assets/common/Components/PortletButton.vue":
/*!**************************************************************!*\
  !*** ./resources/assets/common/Components/PortletButton.vue ***!
  \**************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _PortletButton_vue_vue_type_template_id_f3aa103a___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./PortletButton.vue?vue&type=template&id=f3aa103a& */ "./resources/assets/common/Components/PortletButton.vue?vue&type=template&id=f3aa103a&");
/* harmony import */ var _PortletButton_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./PortletButton.vue?vue&type=script&lang=js& */ "./resources/assets/common/Components/PortletButton.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _PortletButton_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _PortletButton_vue_vue_type_template_id_f3aa103a___WEBPACK_IMPORTED_MODULE_0__["render"],
  _PortletButton_vue_vue_type_template_id_f3aa103a___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/assets/common/Components/PortletButton.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/assets/common/Components/PortletButton.vue?vue&type=script&lang=js&":
/*!***************************************************************************************!*\
  !*** ./resources/assets/common/Components/PortletButton.vue?vue&type=script&lang=js& ***!
  \***************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_PortletButton_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib??ref--4-0!../../../../node_modules/vue-loader/lib??vue-loader-options!./PortletButton.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/assets/common/Components/PortletButton.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_PortletButton_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/assets/common/Components/PortletButton.vue?vue&type=template&id=f3aa103a&":
/*!*********************************************************************************************!*\
  !*** ./resources/assets/common/Components/PortletButton.vue?vue&type=template&id=f3aa103a& ***!
  \*********************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_PortletButton_vue_vue_type_template_id_f3aa103a___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../node_modules/vue-loader/lib??vue-loader-options!./PortletButton.vue?vue&type=template&id=f3aa103a& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/assets/common/Components/PortletButton.vue?vue&type=template&id=f3aa103a&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_PortletButton_vue_vue_type_template_id_f3aa103a___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_PortletButton_vue_vue_type_template_id_f3aa103a___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);