(window.webpackWcBlocksJsonp=window.webpackWcBlocksJsonp||[]).push([[10],{292:function(o,c){},302:function(o,c,t){"use strict";t.r(c);var n=t(6),e=t.n(n),r=t(1),s=(t(4),t(5)),a=t.n(s),i=t(69),u=t(188),k=(t(292),function(o){return Object(r.sprintf)(Object(r.__)("%d left in stock",'woocommerce'),o)}),b=function(o,c){return c?Object(r.__)("Available on backorder",'woocommerce'):o?Object(r.__)("In Stock",'woocommerce'):Object(r.__)("Out of Stock",'woocommerce')};c.default=Object(u.withProductDataContext)((function(o){var c,t=o.className,n=Object(i.useInnerBlockLayoutContext)().parentClassName,r=Object(i.useProductDataContext)().product;if(!r.id||!r.is_purchasable)return null;var s=!!r.is_in_stock,u=r.low_stock_remaining,d=r.is_on_backorder;return React.createElement("div",{className:a()(t,"wc-block-components-product-stock-indicator",(c={},e()(c,"".concat(n,"__stock-indicator"),n),e()(c,"wc-block-components-product-stock-indicator--in-stock",s),e()(c,"wc-block-components-product-stock-indicator--out-of-stock",!s),e()(c,"wc-block-components-product-stock-indicator--low-stock",!!u),e()(c,"wc-block-components-product-stock-indicator--available-on-backorder",!!d),c))},u?k(u):b(s,d))}))}}]);