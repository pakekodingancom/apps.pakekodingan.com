!function(d,h,r,n){var a="ontouchstart"in r,p=function(){var t=r.createElement("div"),e=r.documentElement;if(!("pointerEvents"in t.style))return!1;t.style.pointerEvents="auto",t.style.pointerEvents="x",e.appendChild(t);var s=h.getComputedStyle&&"auto"===h.getComputedStyle(t,"").pointerEvents;return e.removeChild(t),!!s}(),s={listNodeName:"ol",itemNodeName:"li",rootClass:"dd",listClass:"dd-list",itemClass:"dd-item",dragClass:"dd-dragel",handleClass:"dd-handle",collapsedClass:"dd-collapsed",placeClass:"dd-placeholder",noDragClass:"dd-nodrag",emptyClass:"dd-empty",expandBtnHTML:'<button data-action="expand" type="button">Expand</button>',collapseBtnHTML:'<button data-action="collapse" type="button">Collapse</button>',group:0,maxDepth:5,threshold:20};function i(t,e){this.w=d(r),this.el=d(t),this.options=d.extend({},s,e),this.init()}i.prototype={init:function(){var s=this;s.reset(),s.el.data("nestable-group",this.options.group),s.placeEl=d('<div class="'+s.options.placeClass+'"/>'),d.each(this.el.find(s.options.itemNodeName),function(t,e){s.setParent(d(e))}),s.el.on("click","button",function(t){var e;s.dragEl||(t=(e=d(t.currentTarget)).data("action"),e=e.parent(s.options.itemNodeName),"collapse"===t&&s.collapseItem(e),"expand"===t&&s.expandItem(e))});function t(t){var e=d(t.target);if(!e.hasClass(s.options.handleClass)){if(e.closest("."+s.options.noDragClass).length)return;e=e.closest("."+s.options.handleClass)}e.length&&!s.dragEl&&(s.isTouch=/^touch/.test(t.type),s.isTouch&&1!==t.touches.length||(t.preventDefault(),s.dragStart(t.touches?t.touches[0]:t)))}function e(t){s.dragEl&&(t.preventDefault(),s.dragMove(t.touches?t.touches[0]:t))}function i(t){s.dragEl&&(t.preventDefault(),s.dragStop(t.touches?t.touches[0]:t))}a&&(s.el[0].addEventListener("touchstart",t,!1),h.addEventListener("touchmove",e,!1),h.addEventListener("touchend",i,!1),h.addEventListener("touchcancel",i,!1)),s.el.on("mousedown",t),s.w.on("mousemove",e),s.w.on("mouseup",i)},serialize:function(){var a=this;return step=function(t,s){var i=[];return t.children(a.options.itemNodeName).each(function(){var t=d(this),e=d.extend({},t.data()),t=t.children(a.options.listNodeName);t.length&&(e.children=step(t,s+1)),i.push(e)}),i},step(a.el.find(a.options.listNodeName).first(),0)},serialise:function(){return this.serialize()},reset:function(){this.mouse={offsetX:0,offsetY:0,startX:0,startY:0,lastX:0,lastY:0,nowX:0,nowY:0,distX:0,distY:0,dirAx:0,dirX:0,dirY:0,lastDirX:0,lastDirY:0,distAxX:0,distAxY:0},this.isTouch=!1,this.moving=!1,this.dragEl=null,this.dragRootEl=null,this.dragDepth=0,this.hasNewRoot=!1,this.pointEl=null},expandItem:function(t){t.removeClass(this.options.collapsedClass),t.children('[data-action="expand"]').hide(),t.children('[data-action="collapse"]').show(),t.children(this.options.listNodeName).show()},collapseItem:function(t){t.children(this.options.listNodeName).length&&(t.addClass(this.options.collapsedClass),t.children('[data-action="collapse"]').hide(),t.children('[data-action="expand"]').show(),t.children(this.options.listNodeName).hide())},expandAll:function(){var t=this;t.el.find(t.options.itemNodeName).each(function(){t.expandItem(d(this))})},collapseAll:function(){var t=this;t.el.find(t.options.itemNodeName).each(function(){t.collapseItem(d(this))})},setParent:function(t){t.children(this.options.listNodeName).length&&(t.prepend(d(this.options.expandBtnHTML)),t.prepend(d(this.options.collapseBtnHTML))),t.children('[data-action="expand"]').hide()},unsetParent:function(t){t.removeClass(this.options.collapsedClass),t.children("[data-action]").remove(),t.children(this.options.listNodeName).remove()},dragStart:function(t){var e=this.mouse,s=d(t.target),i=s.closest(this.options.itemNodeName);this.placeEl.css("height",i.height()),e.offsetX=t.offsetX!==n?t.offsetX:t.pageX-s.offset().left,e.offsetY=t.offsetY!==n?t.offsetY:t.pageY-s.offset().top,e.startX=e.lastX=t.pageX,e.startY=e.lastY=t.pageY,this.dragRootEl=this.el,this.dragEl=d(r.createElement(this.options.listNodeName)).addClass(this.options.listClass+" "+this.options.dragClass),this.dragEl.css("width",i.width()),i.after(this.placeEl),i[0].parentNode.removeChild(i[0]),i.appendTo(this.dragEl),d(r.body).append(this.dragEl),this.dragEl.css({left:t.pageX-e.offsetX,top:t.pageY-e.offsetY});for(var a,o=this.dragEl.find(this.options.itemNodeName),l=0;l<o.length;l++)(a=d(o[l]).parents(this.options.listNodeName).length)>this.dragDepth&&(this.dragDepth=a)},dragStop:function(t){var e=this.dragEl.children(this.options.itemNodeName).first();e[0].parentNode.removeChild(e[0]),this.placeEl.replaceWith(e),this.dragEl.remove(),this.el.trigger("change"),this.hasNewRoot&&this.dragRootEl.trigger("change"),this.reset()},dragMove:function(t){var e,s=this.options,i=this.mouse;this.dragEl.css({left:t.pageX-i.offsetX,top:t.pageY-i.offsetY}),i.lastX=i.nowX,i.lastY=i.nowY,i.nowX=t.pageX,i.nowY=t.pageY,i.distX=i.nowX-i.lastX,i.distY=i.nowY-i.lastY,i.lastDirX=i.dirX,i.lastDirY=i.dirY,i.dirX=0===i.distX?0:0<i.distX?1:-1,i.dirY=0===i.distY?0:0<i.distY?1:-1;var a=Math.abs(i.distX)>Math.abs(i.distY)?1:0;if(!i.moving)return i.dirAx=a,void(i.moving=!0);i.dirAx!==a?(i.distAxX=0,i.distAxY=0):(i.distAxX+=Math.abs(i.distX),0!==i.dirX&&i.dirX!==i.lastDirX&&(i.distAxX=0),i.distAxY+=Math.abs(i.distY),0!==i.dirY&&i.dirY!==i.lastDirY&&(i.distAxY=0)),i.dirAx=a,i.dirAx&&i.distAxX>=s.threshold&&(i.distAxX=0,n=this.placeEl.prev(s.itemNodeName),0<i.distX&&n.length&&!n.hasClass(s.collapsedClass)&&(e=n.find(s.listNodeName).last(),this.placeEl.parents(s.listNodeName).length+this.dragDepth<=s.maxDepth&&(e.length?(e=n.children(s.listNodeName).last()).append(this.placeEl):((e=d("<"+s.listNodeName+"/>").addClass(s.listClass)).append(this.placeEl),n.append(e),this.setParent(n)))),i.distX<0&&(this.placeEl.next(s.itemNodeName).length||(l=this.placeEl.parent(),this.placeEl.closest(s.itemNodeName).after(this.placeEl),l.children().length||this.unsetParent(l.parent()))));var o=!1;if(p||(this.dragEl[0].style.visibility="hidden"),this.pointEl=d(r.elementFromPoint(t.pageX-r.body.scrollLeft,t.pageY-(h.pageYOffset||r.documentElement.scrollTop))),p||(this.dragEl[0].style.visibility="visible"),this.pointEl.hasClass(s.handleClass)&&(this.pointEl=this.pointEl.parent(s.itemNodeName)),this.pointEl.hasClass(s.emptyClass))o=!0;else if(!this.pointEl.length||!this.pointEl.hasClass(s.itemClass))return;var l,a=this.pointEl.closest("."+s.rootClass),n=this.dragRootEl.data("nestable-id")!==a.data("nestable-id");i.dirAx&&!n&&!o||n&&s.group!==a.data("nestable-group")||this.dragDepth-1+this.pointEl.parents(s.listNodeName).length>s.maxDepth||(t=t.pageY<this.pointEl.offset().top+this.pointEl.height()/2,l=this.placeEl.parent(),o?((e=d(r.createElement(s.listNodeName)).addClass(s.listClass)).append(this.placeEl),this.pointEl.replaceWith(e)):t?this.pointEl.before(this.placeEl):this.pointEl.after(this.placeEl),l.children().length||this.unsetParent(l.parent()),this.dragRootEl.find(s.itemNodeName).length||this.dragRootEl.append('<div class="'+s.emptyClass+'"/>'),n&&(this.dragRootEl=a,this.hasNewRoot=this.el[0]!==this.dragRootEl[0]))}},d.fn.nestable=function(e){var s=this;return this.each(function(){var t=d(this).data("nestable");t?"string"==typeof e&&"function"==typeof t[e]&&(s=t[e]()):(d(this).data("nestable",new i(this,e)),d(this).data("nestable-id",(new Date).getTime()))}),s||this}}(window.jQuery||window.Zepto,window,document);