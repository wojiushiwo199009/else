/*
 * Compressed by JSA(www.xidea.org)
 */
(function(_,$){jM=function(_){var A,$;if(_){$=jM.util.type(_);if($==="function")jM.loaded(_);else if($==="string"){A=new jM.fn();A[0]=jM.util.ID(_)}else if(_.nodeType){A=new jM.fn();A[0]=_}}return A};jM.fn=function(){};jM.uuid=1;jM.basic=(""+Math.random()).replace(/\D/g,"");jM.cache={};jM.loaded=function($){jM.Event.readyList.push($)};jM.extend=function(_){for(var $ in _)jM.fn.prototype[$]=_[$]};jM.util={mkDom:function(A,$,B){var _=document.createElement(A);_.id=$;if(B)for(i in B)_.style[i]=B[i];return _},search:{"class":function(_,$){if(_.className.indexOf($)!=-1)return true;return false},"tagName":function(A,$){var _=A.tagName;if(_)if(_.toLowerCase()==$.toLowerCase())return true;return false}},class2type:(function(){var A="Boolean Number String Function Array Date RegExp Object".split(" "),$={};for(var B=0,_=A.length;B<_;B++)$["[object "+A[B]+"]"]=A[B].toLowerCase();return $})(),type:function($){return $==null?String($):jM.util.class2type[Object.prototype.toString.call($)]||"object"},ID:function(_){var $=document.getElementById(_);return $?$:undefined},easeout:function(_,A,B,$){return-B*_*_/($*$)+2*B*_/$+A},linear:function(_,A,B,$){return B*_/$+A},swing:function(A,B,$,_){return((-Math.cos(A*Math.PI)/2)+0.5)*_+$},findByTag:function(_,E){var A=undefined;if(!_||_.nodeType!==1)return A;E=E.toUpperCase();var $=[],F=_.childNodes;if(!F||!F.length)return A;for(var G=0,D=F.length;G<D;G++){var C=F[G];if(C&&C.nodeType&&C.nodeType===1)if((C.tagName.toUpperCase()==E))$.push(F[G]);else if(C.childNodes){var B=jM.util.findByTag(F[G],E);if(B!==A)$=$.concat(B)}}return $.length>0?$:A},addScript:function(_){var A=document.createElement("script");A.type="text/javascript";A.async=true;A.src=_;var $=document.getElementsByTagName("script")[0];$.parentNode.insertBefore(A,$)},interLock:null,set:{"nopixatts":"zIndex zoom","defaultPx":function(A,_,$){A.style[_]=$+"px"},"defaultNum":function(A,_,$){A.style[_]=$},"opacity":function(_,$){_.style.opacity=$/10;_.style.filter="alpha(opacity="+$*10+")"}},css:function(D,B,_){if(!_&&_!=0){var A=jM.util.type(B);if("string"===A){var $=jM.util.getComputedStyle(D,B);if($)$=($+"").replace("px","")-0;return $}if("object"===A)for(var C in B)if(jM.util.set[B])jM.util.set[B](D,_);else if(-1!==jM.util.set.nopixatts.indexOf(B))jM.util.set["defaultNum"](D,B,_);else jM.util.set["defaultPx"](D,B,_)}else if(jM.util.set[B])jM.util.set[B](D,_);else if(-1!==jM.util.set.nopixatts.indexOf(B))jM.util.set["defaultNum"](D,B,_);else jM.util.set["defaultPx"](D,B,_);return undefined}};jM.extend({"get":function($){return $===0?this[0]:undefined},"B":function(A,_,$){jM.Event.bind(this,A,_,$);return this},"live":function(A,_,C){var B;if(/^./.test(A))B=1;else B=2;var $=this.get(0),C=(function(_,A,$){return function(B){var C=B||window.event;if(!C.target)C.target=C.srcElement||document;if(C.target.nodeType===3)C.target=C.target.parentNode;if(A.call(null,C.target,$)){jM.Event.stopPropgation(C);_.call(C.target)}}})(C,(B===1?jM.util.search["class"]:jM.util.search["tagName"]),(B===1?A.replace(/^./,""):A));jM.Event.bind2($,_,C)},"css":function(A,_){var B=this.get(0);if(!B)return this;var $=jM.util.css(B,A,_);return $===undefined?this:$},"attr":function(_,$){if(!this.get(0))return this;if(!$)return this.get(0).getAttribute(_);else this.get(0).setAttribute(_,$);return this},"empty":function(){if(!this.get(0))return this;var $=this.get(0);while($.firstChild)$.removeChild($.firstChild);return this},"show":function(){if(!this.get(0))return this;this.get(0).style.display="block";return this},"hide":function(){if(!this.get(0))return this;this.get(0).style.display="none";return this},"data":function($,_){var A=this.get(0);if(!A)return this;if(_!==undefined){if(!A[jM.basic]){A[jM.basic]=jM.uuid++;jM.cache[A[jM.basic]]={}}jM.cache[A[jM.basic]][$]=_;return this}else{ind=A[jM.basic];if(!ind)return undefined;return jM.cache[ind][$]}},"find":function($){if(!this.get(0))return this;return jM.util.findByTag(this.get(0),$)},"animate":function(J,C,G,D){if(!this.get(0))return this;if(jM.util.interLock)return;var _=this.get(0),L,$,B=false,E=false;for(var I in J)if(!E){L=I;$=J[I];E=true}else{if(!B)B={};B[I]=J[I]}var A=(new Date()).getTime(),H=parseInt(G||500),F=jM.util.css(_,L)||0,K=$-F;jM.util.interLock=setInterval((function(F,E,$,G,A,_,C,D,B){return function(){var J=(new Date()).getTime()-A;if(J>_){J=_;if(B)B.call($);clearInterval(jM.util.interLock);jM.util.interLock=false}var H=jM.util[F](J,C,D,_);jM.util.css($,G,H);if(E)for(var K in E){var I=jM.util.css($,K)||0,L=E[K]-I;jM.util.css($,K,jM.util[F](J,I,L,_))}}})(C,B,_,L,A,H,F,K,D),10);return this},"panel":function(B){var _=this;if(!_.get(0))return this;var A=jM(B),$=function(){A.data("isIn","0");setTimeout(function(){if(A.data("isIn")==="0")A.hide()},500)};_.B("click",function(){A.data("isIn","1").show()}).hover(function(){A.data("isIn","1").show()},$);A.hover(function(){A.data("isIn","1")},$)},"hover":function(_,$){jM.Event.bind2(this.get(0),"mouseover",_);jM.Event.bind2(this.get(0),"mouseout",$);return this}});jM.Event={bind2:function(_,$,A){if(_.addEventListener)_.addEventListener($,A,false);else if(_.attachEvent)_.attachEvent("on"+$,A)},bind:function($,A,E,B){var D=$.data("_jmEvent");if(!D)D={};var C=D[A];if(!C||!C.length){C=[];var _=$.get(0);if(_.addEventListener)_.addEventListener(A,jM.Event.hander,false);else if(_.attachEvent)_.attachEvent("on"+A,jM.Event.hander)}C.push({"fn":E,"param":B});D[A]=C;$.data("_jmEvent",D)},ready:function(){if(!jM.Event.readyList||!jM.Event.readyList.length)return;for(var _=0,$=jM.Event.readyList.length;_<$;_++)jM.Event.readyList[_].call();jM.Event.readyList=null},eventpack:function($,_){return{"keyCode":($.keyCode||$.which||$.charCode),"currentTarget":$.target,"data":_}},stopPropgation:function($){if($.stopPropagation)$.stopPropagation();$.cancelBubble=true},hander:function(C){var A=C||window.event,_=false;if(!A.target)A.target=A.srcElement||document;if(A.target.nodeType===3)A.target=A.target.parentNode;var $=jM(A.target),B=$.data("_jmEvent");if(B)if(B[A.type]&&B[A.type].length>0){var F=B[A.type];for(var G=0,E=F.length;G<E;G++){var D=F[G];A.keyCode=(A.keyCode||A.which||A.charCode);if(false===D["fn"].call(A.target,jM.Event.eventpack(A,D["param"])))_=true}}if(_&&A.target)if(A.target.preventDefault)A.target.preventDefault();else return false}};if($.addEventListener)jM.Event.DOMContentLoaded=function(){$.removeEventListener("DOMContentLoaded",jM.Event.DOMContentLoaded,false);jM.Event.ready()};else if($.attachEvent)jM.Event.DOMContentLoaded=function(){if($.readyState==="complete"){$.detachEvent("onreadystatechange",jM.Event.DOMContentLoaded);jM.Event.ready()}};if(!jM.Event.readyList){jM.Event.readyList=[];if($.readyState==="complete")return setTimeout(jM.Event.ready,1);if($.addEventListener){$.addEventListener("DOMContentLoaded",jM.Event.DOMContentLoaded,false);_.addEventListener("load",jM.Event.ready,false)}else if($.attachEvent){$.attachEvent("onreadystatechange",jM.Event.DOMContentLoaded);_.attachEvent("onload",jM.Event.ready)}}if($.defaultView&&$.defaultView.getComputedStyle)jM.util.getComputedStyle=function(_,B){var $,C,A;B=B.replace(/([A-Z]|^ms)/g,"-$1").toLowerCase();if((C=_.ownerDocument.defaultView)&&(A=C.getComputedStyle(_,null)))$=A.getPropertyValue(B);return $};if($.documentElement.currentStyle)jM.util.getComputedStyle=function(_,C){var B,$=_.currentStyle&&_.currentStyle[C],A=_.style;if($===null&&A&&(B=A[C]))$=B;return $};jM(function(){if(/(msie) ([\w.]+)/.exec(navigator.userAgent)&&!window.XMLHttpRequest){try{$.execCommand("BackgroundImageCache",false,true)}catch(_){}}jM("globalName").panel("globalContainer");jM("mzCust").show();if(window.jM_fn_loaded)jM_fn_loaded.call()});window.onload=function(){var _=navigator.userAgent,$=navigator.appVersion,B=!!_.match(/AppleWebKit.*Mobile.*/),A=jM("globalName")[0].offsetLeft;if(B){jM("globalContainer")[0].style.left=A-60+"px";jM("globalContainer")[0].style.bottom=99+"px"}else jM("globalContainer")[0].style.left=A+"px"}})(window,document)