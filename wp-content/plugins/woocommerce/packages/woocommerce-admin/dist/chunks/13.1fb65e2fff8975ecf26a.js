(window.__wcAdmin_webpackJsonp=window.__wcAdmin_webpackJsonp||[]).push([[13],{718:function(t,e,r){"use strict";r.d(e,"b",(function(){return u})),r.d(e,"a",(function(){return f}));var n=r(0),c=r(49),o=r(188),i=r.n(o),a=r(33),s=i()(a.b),u=function(t){var e=s.getCurrencyConfig(),r=Object(c.applyFilters)("woocommerce_admin_report_currency",e,t);return i()(r)},f=Object(n.createContext)(s)},719:function(t,e,r){"use strict";var n=r(14),c=r.n(n),o=r(13),i=r.n(o),a=r(16),s=r.n(a),u=r(17),f=r.n(u),p=r(6),l=r.n(p),b=r(0),y=r(3),m=r(1),h=r.n(m),O=r(68),d=r(33);function j(t){var e=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Date.prototype.toString.call(Reflect.construct(Date,[],(function(){}))),!0}catch(t){return!1}}();return function(){var r,n=l()(t);if(e){var c=l()(this).constructor;r=Reflect.construct(n,arguments,c)}else r=n.apply(this,arguments);return f()(this,r)}}var v=function(t){s()(r,t);var e=j(r);function r(){return c()(this,r),e.apply(this,arguments)}return i()(r,[{key:"render",value:function(){var t,e,r,n,c=this.props,o=c.className,i=c.isError,a=c.isEmpty;return i?(t=Object(y.__)("There was an error getting your stats. Please try again.",'woocommerce'),e=Object(y.__)("Reload",'woocommerce'),n=function(){window.location.reload()}):a&&(t=Object(y.__)("No results could be found for this date range.",'woocommerce'),e=Object(y.__)("View Orders",'woocommerce'),r=Object(d.f)("edit.php?post_type=shop_order")),Object(b.createElement)(O.EmptyContent,{className:o,title:t,actionLabel:e,actionURL:r,actionCallback:n})}}]),r}(b.Component);v.propTypes={className:h.a.string,isError:h.a.bool,isEmpty:h.a.bool},v.defaultProps={className:""},e.a=v},765:function(t,e,r){},894:function(t,e,r){"use strict";r.r(e);var n=r(5),c=r.n(n),o=r(14),i=r.n(o),a=r(13),s=r.n(a),u=r(16),f=r.n(u),p=r(17),l=r.n(p),b=r(6),y=r.n(b),m=r(0),h=r(270),O=r(24),d=r(1),j=r.n(d),v=r(2),g=r(32),w=r(41),_=(r(765),r(719)),E=r(718),R=r(417);function P(t,e){var r=Object.keys(t);if(Object.getOwnPropertySymbols){var n=Object.getOwnPropertySymbols(t);e&&(n=n.filter((function(e){return Object.getOwnPropertyDescriptor(t,e).enumerable}))),r.push.apply(r,n)}return r}function D(t){for(var e=1;e<arguments.length;e++){var r=null!=arguments[e]?arguments[e]:{};e%2?P(Object(r),!0).forEach((function(e){c()(t,e,r[e])})):Object.getOwnPropertyDescriptors?Object.defineProperties(t,Object.getOwnPropertyDescriptors(r)):P(Object(r)).forEach((function(e){Object.defineProperty(t,e,Object.getOwnPropertyDescriptor(r,e))}))}return t}function k(t){var e=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Date.prototype.toString.call(Reflect.construct(Date,[],(function(){}))),!0}catch(t){return!1}}();return function(){var r,n=y()(t);if(e){var c=y()(this).constructor;r=Reflect.construct(n,arguments,c)}else r=n.apply(this,arguments);return l()(this,r)}}var C=function(t){var e=t.params,r=t.path;return e.report||r.replace(/^\/+/,"")},S=function(t){f()(r,t);var e=k(r);function r(){var t;return i()(this,r),(t=e.apply(this,arguments)).state={hasError:!1},t}return s()(r,[{key:"componentDidCatch",value:function(t){this.setState({hasError:!0}),console.warn(t)}},{key:"render",value:function(){if(this.state.hasError)return null;if(this.props.isError)return Object(m.createElement)(_.a,{isError:!0});var t=C(this.props),e=Object(v.find)(Object(R.a)(),{report:t});if(!e)return null;var r=e.component;return Object(m.createElement)(E.a.Provider,{value:Object(E.b)(Object(g.getQuery)())},Object(m.createElement)(r,this.props))}}]),r}(m.Component);S.propTypes={params:j.a.object.isRequired},e.default=Object(h.a)(Object(O.withSelect)((function(t,e){var r=Object(g.getQuery)();if(!r.search)return{};var n=C(e),o=Object(g.getSearchWords)(r),i="categories"===n&&"single_category"===r.filter?"products":n,a=Object(w.searchItemsByString)(t,i,o),s=a.isError,u=a.isRequesting,f=a.items,p=Object.keys(f);return p.length?{isError:s,isRequesting:u,query:D(D({},e.query),{},c()({},i,p.join(",")))}:{isError:s,isRequesting:u}})))(S)}}]);