YUI.add("moodle-course-categoryexpander",function(i,e){var a="collapse-all",t="disabled",l="loaded",r="notloaded",s="collapsed",c="with_children",n=".with_children",d=".with_children.loaded",p=".content",o=".category .info .categoryname",g=".categoryname",_=".category.with_children.collapsed",h=".category.with_children.loaded.collapsed",u=".category.with_children.loaded:not(.collapsed)",x=".collapseexpand",f=".coursebox",y=".coursebox .moreinfo",m=".info .moreinfo",v=".course_category_tree",b=".category",C=i.namespace("Moodle.course.categoryexpander"),w=M.cfg.wwwroot+"/course/category.ajax.php";C.init=function(){var e=i.one(i.config.doc);e.delegate("click",this.toggle_category_expansion,o,this),e.delegate("click",this.toggle_coursebox_expansion,y,this),e.delegate("click",this.collapse_expand_all,x,this),e.once("key",this.setup_keyboard_listeners,"tab",this)},C.setup_keyboard_listeners=function(){i.one(i.config.doc).all(o,y,x).setAttribute("tabindex","0"),i.one(i.config.doc).delegate("key",this.toggle_category_expansion,"enter",o,this),i.one(i.config.doc).delegate("key",this.toggle_coursebox_expansion,"enter",y,this),i.one(i.config.doc).delegate("key",this.collapse_expand_all,"enter",x,this)},C.expand_category=function(e){i.use("io-base","json-parse","moodle-core-notification","anim-node-plugin",function(){C.expand_category=C._expand_category,C.expand_category(e)})},C._expand_category=function(e){var o,n;e.hasClass(c)&&(e.hasClass(l)?this.run_expansion(e):(o=e.getData("categoryid"),n=e.getData("depth"),void 0!==o&&void 0!==n&&this._toggle_generic_expansion({parentnode:e,childnode:e.one(p),spinnerhandle:g,data:{categoryid:o,depth:n,showcourses:e.getData("showcourses"),type:0}})))},C.toggle_category_expansion=function(e){i.use("io-base","json-parse","moodle-core-notification","anim-node-plugin",function(){C.toggle_category_expansion=C._toggle_category_expansion,C.toggle_category_expansion(e)})},C.toggle_coursebox_expansion=function(e){i.use("io-base","json-parse","moodle-core-notification","anim-node-plugin",function(){C.toggle_coursebox_expansion=C._toggle_coursebox_expansion,C.toggle_coursebox_expansion(e)}),e.preventDefault()},C._toggle_coursebox_expansion=function(e){var o;o=e.target.ancestor(f,!0),e.preventDefault(),o.hasClass(l)?this.run_expansion(o):this._toggle_generic_expansion({parentnode:o,childnode:o.one(p),spinnerhandle:m,data:{courseid:o.getData("courseid"),type:1}})},C._toggle_category_expansion=function(e){var o,n,a;e.target.test("a")||e.target.test("img")||(o=e.target.ancestor(b,!0)).hasClass(c)&&(o.hasClass(l)?this.run_expansion(o):(n=o.getData("categoryid"),a=o.getData("depth"),void 0!==n&&void 0!==a&&this._toggle_generic_expansion({parentnode:o,childnode:o.one(p),spinnerhandle:g,data:{categoryid:n,depth:a,showcourses:o.getData("showcourses"),type:0}})))},C._toggle_generic_expansion=function(e){var o;e.spinnerhandle&&(o=M.util.add_spinner(i,e.parentnode.one(e.spinnerhandle)).show()),i.io(w,{method:"POST",context:this,on:{complete:this.process_results},data:e.data,arguments:{parentnode:e.parentnode,childnode:e.childnode,spinner:o}})},C.run_expansion=function(e){var o=e.one(p),n=this,a=e.ancestor(v);this.add_animation(o),e.hasClass(s)?(o.setStyle("height","0"),e.removeClass(s),e.setAttribute("aria-expanded","true"),o.fx.set("reverse",!1)):(o.fx.set("reverse",!0),o.fx.once("end",function(e,o){o.addClass(s),o.setAttribute("aria-expanded","false")},this,e)),o.fx.once("end",function(e,o){o.setStyles({height:"",opacity:""}),this.destroy(),n.update_collapsible_actions(a)},o.fx,o),o.fx.run()},C.collapse_expand_all=function(e){i.use("io-base","json-parse","moodle-core-notification","anim-node-plugin",function(){C.collapse_expand_all=C._collapse_expand_all,C.collapse_expand_all(e)}),e.preventDefault()},C._collapse_expand_all=function(e){var o;e.preventDefault(),e.currentTarget.hasClass(t)||(o=e.currentTarget.ancestor(v))&&(o.one(x).hasClass(a)?this.collapse_all(o):this.expand_all(o),this.update_collapsible_actions(o))},C.expand_all=function(e){var o=[];e.all(_).each(function(e){e.ancestor(_)?(e.removeClass(s),e.all(n).removeClass(s)):o.push(e)},this),i.all(o).each(function(e){this.expand_category(e)},this)},C.collapse_all=function(e){var o=[];e.all(u).each(function(e){e.ancestor(u)?o.push(e):this.run_expansion(e)},this),i.all(o).each(function(e){e.addClass(s),e.all(d).addClass(s)},this)},C.update_collapsible_actions=function(e){var o=!1,n=e.one(x);n&&(e.all(u).each(function(e){return!e.ancestor(h)&&(o=!0)}),o?n.setHTML(M.util.get_string("collapseall","moodle")).addClass(a).removeClass(t):n.setHTML(M.util.get_string("expandall","moodle")).removeClass(a).removeClass(t))},C.process_results=function(e,o,n){var a,t;try{if((t=i.JSON.parse(o.responseText)).error)return new M.core.ajaxException(t)}catch(s){return new M.core.exception(s)}a=i.Node.create(t),n.childnode.appendChild(a),n.parentnode.addClass(l).removeClass(r),this.run_expansion(n.parentnode),n.spinner&&n.spinner.hide().destroy()},C.add_animation=function(e){return"undefined"!=typeof e.fx||e.plug(i.Plugin.NodeFX,{from:{height:0,opacity:0},to:{height:function(e){return e.get("scrollHeight")},opacity:1},duration:.2}),e}},"@VERSION@",{requires:["node","event-key"]});