!function(){this.SiteBackground=function(){function t(){}return t.cookie=function(t){var n,e,o,r;for(e=function(){var t,e,o,r;for(o=document.cookie.split(";"),r=[],t=0,e=o.length;e>t;t++)n=o[t],r.push(n.trim());return r}(),o=0,r=e.length;r>o;o++)if(n=e[o],0===n.indexOf(t+"="))return n.substring((t+"=").length)},t.loadFromParam=function(t){var n;return n=this.cookie("background_id"),null!=n?this.load(parseInt(n),t):this.loadRandom(t)},t.loadRandom=function(n){return t.load(t.randomIndex(),n)},t.load=function(n,e){var o,r,d;return o=document.getElementById("background_"+n),o||(n=t.randomIndex(),o||(o=document.getElementById("background_"+n))),d=document.querySelector("html").classList.contains("no-touch")?o.getAttribute("data-url"):o.getAttribute("data-small_url"),window.f_home_background_url=d,e?document.getElementById(e).style.backgroundImage="url("+d+")":document.body.style.backgroundImage="url("+d+")",r=document.getElementById("background_credit_name"),r.innerHTML=o.getAttribute("data-credit_name"),r.href=o.getAttribute("data-href"),document.cookie="background_id="+n},t.randomIndex=function(){return Math.floor(3*Math.random())+1},t}()}.call(this);