(window.blocksyJsonP=window.blocksyJsonP||[]).push([[9],{39:function(e,t,r){"use strict";r.r(t),r.d(t,"getCacheFor",(function(){return u})),r.d(t,"mount",(function(){return p}));var n=r(0),i=r.n(n);function a(e,t){var r=Object.keys(e);if(Object.getOwnPropertySymbols){var n=Object.getOwnPropertySymbols(e);t&&(n=n.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),r.push.apply(r,n)}return r}function l(e,t,r){return t in e?Object.defineProperty(e,t,{value:r,enumerable:!0,configurable:!0,writable:!0}):e[t]=r,e}const s=e=>[...e.querySelectorAll("[data-items] > [data-id]")].filter(e=>-1===e.dataset.id.indexOf("menu")).reduce((e,t)=>{let r=window.getComputedStyle(t);return e+t.getBoundingClientRect().width+parseInt(r.getPropertyValue("margin-left"))+parseInt(r.getPropertyValue("margin-right"))},0),d=e=>{let t=window.getComputedStyle(e);return u(e.dataset.id).itemsWidth.reduce((e,t)=>e+t,0)+(parseInt(t.getPropertyValue("margin-left"))+parseInt(t.getPropertyValue("margin-right")))},o=e=>{let t=(e=>{let t=e.closest('[class*="ct-container"]'),r=t.getBoundingClientRect().width,n=e.closest("[data-column]").dataset.column,i="start"===n||"end"===n?"side":"middle"===n?"middle":"secondary",a=t.querySelector('[data-column="middle"]');if("side"===i&&!a){let n=t.querySelectorAll('[data-id*="menu"]');const i=[...n].reduce((e,t)=>e+d(t),0),a=d(e);let l=r-s(t);return n.length>1&&(l*=100*a/i/100),l}return"middle"===i?r-2*Math.max(t.querySelector('[data-column="start"]')?s(t.querySelector('[data-column="start"]')):0,t.querySelector('[data-column="end"]')?s(t.querySelector('[data-column="end"]')):0):(r-(t.querySelector('[data-column="middle"]')?s(t.querySelector('[data-column="middle"]')):0))/2-s(e.closest("[data-column]"))})(e),r=e.closest('[class*="ct-container"]'),n=window.getComputedStyle(e);if(!(d(e)>t))return{fit:u(e.dataset.id).children,notFit:[]};let i=r.querySelectorAll('[data-id*="menu"]');return u(e.dataset.id).children.reduce((r,s,d)=>{let{fit:o,notFit:c}=r;return function(e){for(var t=1;t<arguments.length;t++){var r=null!=arguments[t]?arguments[t]:{};t%2?a(Object(r),!0).forEach((function(t){l(e,t,r[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(r)):a(Object(r)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(r,t))}))}return e}({},u(e.dataset.id).itemsWidth.slice(0,d+1).reduce((e,t)=>e+t,0)<t-100/i.length-(parseInt(n.getPropertyValue("margin-left"))+parseInt(n.getPropertyValue("margin-right")))?{fit:[...o,s],notFit:c}:{notFit:[...c,s],fit:o})},{fit:[],notFit:[]})};let c={};const u=e=>c[e],m=e=>Array.from(e.firstElementChild.children).filter(e=>!e.classList.contains(".more-items-container")&&e.firstElementChild).map(e=>{const t=e.firstElementChild;t.innerHTML=`<span>${t.innerHTML}</span>`;const r=window.getComputedStyle(t,null);let n=t.firstElementChild.getBoundingClientRect().width+parseInt(r.getPropertyValue("padding-left"),10)+parseInt(r.getPropertyValue("padding-right"),10)+(t.querySelector(".child-indicator")?13:0);return t.innerHTML=t.firstElementChild.innerHTML,n}),p=e=>{if(!e.firstElementChild)return;if((e=>{[...e.closest('[class*="ct-container"]').querySelectorAll('[data-id*="menu"]')].map(e=>{c[e.dataset.id]||e.firstElementChild&&(c[e.dataset.id]={el:e,previousRenderedWidth:null,children:[...Array.from(e.firstElementChild.children).filter(e=>!e.classList.contains("more-items-container")),...e.firstElementChild.querySelector(".more-items-container")?[...e.firstElementChild.querySelector(".more-items-container .sub-menu").children]:[]],itemsWidth:m(e)},e.dataset.responsive="yes")})})(e),c[e.dataset.id].previousRenderedWidth&&c[e.dataset.id].previousRenderedWidth===window.innerWidth)return;c[e.dataset.id].previousRenderedWidth=window.innerWidth;let{fit:t,notFit:r}=o(e);if(0===r.length)return e.querySelector(".more-items-container")&&(t.map(t=>{e.firstElementChild.insertBefore(t,e.querySelector(".more-items-container")),Array.from(t.querySelectorAll(".menu-item-has-children, .page_item_has_children")).filter(e=>!!e.closest('[class*="ct-mega-menu"]')).map(e=>e.classList.remove("animated-submenu"))}),e.querySelector(".more-items-container").remove()),h(),void i.a.trigger("ct:header:init-popper");document.querySelector('header [data-device="desktop"]')&&((e,t)=>{if(e.querySelector(".more-items-container"))return void t();const r=document.createElement("li");r.classList.add("menu-item-has-children"),r.classList.add("more-items-container"),r.classList.add("animated-submenu"),r.classList.add("menu-item"),r.insertAdjacentHTML("afterbegin",`<a href="#">\n      ${ct_localizations.more_text}\n      <span class="child-indicator">\n        <svg width="8" height="8" viewBox="0 0 15 15">\n            <path d="M2.1,3.2l5.4,5.4l5.4-5.4L15,4.3l-7.5,7.5L0,4.3L2.1,3.2z"></path>\n        </svg>\n      </span>\n    </a>\n    <ul class="sub-menu"></ul>`),e.firstElementChild.appendChild(r),t&&t()})(e,()=>{r.map(t=>{e.querySelector(".more-items-container .sub-menu").appendChild(t),t.classList.add("animated-submenu"),Array.from(t.querySelectorAll(".menu-item-has-children, .page_item_has_children")).map(e=>e.classList.add("animated-submenu"))}),t.map(t=>{e.firstElementChild.insertBefore(t,e.querySelector(".more-items-container")),Array.from(t.querySelectorAll(".menu-item-has-children, .page_item_has_children")).filter(e=>!!e.closest('[class*="ct-mega-menu"]')).map(e=>e.classList.remove("animated-submenu"))}),h(),i.a.trigger("ct:header:init-popper")})},h=()=>{[...document.querySelectorAll('header [data-device="desktop"] [data-id*="menu"] > .menu')].map(e=>{[...e.children].filter(e=>e.querySelector(".sub-menu")).filter(e=>(e=>e.classList.contains("animated-submenu")&&(!e.parentNode.classList.contains("menu")||-1===e.className.indexOf("ct-mega-menu")&&e.parentNode.classList.contains("menu")))(e)).map(e=>e.querySelector(".sub-menu")).map(e=>{[...e.querySelectorAll("[data-submenu]")].map(e=>{e.removeAttribute("data-submenu")}),e._popper&&(e._popper.destroy(),e._popper=null)})})}}}]);