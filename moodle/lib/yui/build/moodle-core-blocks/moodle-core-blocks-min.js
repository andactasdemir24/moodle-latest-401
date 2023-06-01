YUI.add("moodle-core-blocks",function(a,e){var o,r,t="/lib/ajax/blocks.php",d="block",l="block-region",s="block_adminblock",n="editing_move",g="region-content",c="skip-block",i="skip-block-to",u="page-my-index",p="region-main",h="blocks-moving",_={DRAGHANDLE:"."+"header"+" .commands .moodle-core-dragdrop-draghandle"},b=function(){b.superclass.constructor.apply(this,arguments)};a.extend(b,M.core.dragdrop,{skipnodetop:null,skipnodebottom:null,dragsourceregion:null,initializer:function(){var e,o,t,i;if(this.groups=["block"],this.samenodeclass=d,this.parentnodeclass=g,0<(e=a.Node.all("body#"+u+" #"+p+" > ."+g)).size()&&((e=e.item(0)).addClass(l),e.set("id",g),e.one("div").addClass(g)),0===(e=a.Node.all("div."+l)).size())return!1;e.size()!==this.get("regions").length&&(o=a.Node.create("<div></div>").addClass(l),t=a.Node.create("<div></div>").addClass(g),o.appendChild(t),t=e.filter("#region-pre"),i=e.filter("#region-post"),0===t.size()&&1===i.size()?(o.setAttrs({id:"region-pre"}),i.item(0).insert(o,"before"),e.unshift(o)):0===i.size()&&1===t.size()&&(o.setAttrs({id:"region-post"}),t.item(0).insert(o,"after"),e.push(o))),e.each(function(e){var o;new a.DD.Drop({node:e.one("div."+g),groups:this.groups,padding:"40 240 40 240"}),(o=new a.DD.Delegate({container:e,nodes:"."+d,target:!0,handles:[_.DRAGHANDLE],invalid:".block-hider-hide, .block-hider-show, .moveto",dragConfig:{groups:this.groups}})).dd.plug(a.Plugin.DDProxy,{moveOnEnd:!1}),o.dd.plug(a.Plugin.DDWinScroll),e.all("."+d).each(function(e){var o=e.one("a."+n);o&&(o.replace(this.get_drag_handle(o.getAttribute("title"),"","iconsmall",!0)),e.one(_.DRAGHANDLE).setStyle("cursor","move"))},this)},this)},get_block_id:function(e){return Number(e.get("id").replace(/inst/i,""))},get_block_region:function(e){e=e.ancestor("div."+l).get("id").replace(/region-/i,"");return-1===a.Array.indexOf(this.get("regions"),e)?(window.right_to_left()&&("post"===e?e="pre":"pre"===e&&(e="post")),"side-"+e):e},get_region_id:function(e){return e.get("id").replace(/region-/i,"")},drag_start:function(e){e=e.target;this.dragsourceregion=e.get("node").ancestor("div."+l),e.get("node").previous()&&e.get("node").previous().hasClass(c)&&(this.skipnodetop=e.get("node").previous()),e.get("node").next()&&e.get("node").next().hasClass(i)&&(this.skipnodebottom=e.get("node").next()),a.one("body").addClass(h)},drop_over:function(e){var o,t=e.drag.get("node"),e=e.drop.get("node");if(e.hasClass(this.parentnodeclass)&&e.one("."+s)&&e.one("."+s).next("."+d)&&e.prepend(t),this.dragsourceregion.contains(e))return!1;t=a.one("body"),o=this.get_region_id(this.dragsourceregion),t.hasClass("side-"+o+"-only")&&t.removeClass("side-"+o+"-only"),o=this.get_region_id(e.ancestor("div."+l)),0===this.dragsourceregion.all("."+d).size()&&this.dragsourceregion.get("id").match(/(region-pre|region-post)/i)&&!t.hasClass("side-"+o+"-only")&&t.addClass("side-"+o+"-only")},drag_end:function(){this.skipnodetop=null,this.skipnodebottom=null,this.dragsourceregion=null,a.one("body").removeClass(h)},drag_dropmiss:function(e){this.drop_hit(e)},drop_hit:function(i){var n,e=i.drag.get("node"),o=i.drop.get("node");e.previous()&&e.previous().hasClass(c)&&e.insert(e.previous(),"after"),this.skipnodetop&&e.insert(this.skipnodetop,"before"),this.skipnodebottom&&e.insert(this.skipnodebottom,"after"),n=M.util.add_lightbox(a,e),o={sesskey:M.cfg.sesskey,courseid:this.get("courseid"),pagelayout:this.get("pagelayout"),pagetype:this.get("pagetype"),subpage:this.get("subpage"),contextid:this.get("contextid"),action:"move",bui_moveid:this.get_block_id(e),bui_newregion:this.get_block_region(o)},this.get("cmid")&&(o.cmid=this.get("cmid")),e.next("."+this.samenodeclass)&&!e.next("."+this.samenodeclass).hasClass(s)&&(o.bui_beforeid=this.get_block_id(e.next("."+this.samenodeclass))),a.io(M.cfg.wwwroot+t,{method:"POST",data:o,on:{start:function(){n.show()},success:function(e,o){window.setTimeout(function(){n.hide()},250);try{var t=a.JSON.parse(o.responseText);t.error&&new M.core.ajaxException(t)}catch(i){}},failure:function(e,o){this.ajax_failure(o),n.hide()}},context:this})}},{NAME:"core-blocks-dragdrop",ATTRS:{courseid:{value:null},cmid:{value:null},contextid:{value:null},pagelayout:{value:null},pagetype:{value:null},subpage:{value:null},regions:{value:null}}}),M.core=M.core||{},M.core.blockdraganddrop=M.core.blockdraganddrop||{},M.core.blockdraganddrop._isusingnewblocksmethod=null,M.core.blockdraganddrop.is_using_blocks_render_method=function(){var e,o;return null===this._isusingnewblocksmethod&&(e=a.all(".block-region[data-blockregion]").size(),o=a.all(".block-region").size(),this._isusingnewblocksmethod=o===e),this._isusingnewblocksmethod},M.core.blockdraganddrop.init=function(e){new(this.is_using_blocks_render_method()?o:b)(e)},M.core_blocks=M.core_blocks||{},M.core_blocks.init_dragdrop=function(e){M.core.blockdraganddrop.init(e)},(o=function(){o.superclass.constructor.apply(this,arguments)}).prototype={skipnodetop:null,skipnodebottom:null,regionobjects:{},initializer:function(){var e,o,t,i,n=this.get("regions"),s=0;for(s in this.groups=["block"],this.samenodeclass=d,this.parentnodeclass=l,this.detectkeyboarddirection=!0,0<(i=a.Node.all("body#"+u+" #"+p+" > ."+g)).size()&&((i=i.item(0)).addClass(l),i.set("id",g),i.one("div").addClass(g)),n)t=n[s],o=a.one("#block-region-"+t),e=new r({manager:this,region:t,node:o}),this.regionobjects[t]=e,new a.DD.Drop({node:e.get_droptarget(),groups:this.groups,padding:"40 240 40 240"}),(t=new a.DD.Delegate({container:e.get_droptarget(),nodes:"."+d,target:!0,handles:[_.DRAGHANDLE],invalid:".block-hider-hide, .block-hider-show, .moveto, .block_fake",dragConfig:{groups:this.groups}})).dd.plug(a.Plugin.DDProxy,{moveOnEnd:!1}),null!==o&&(o=o.ancestor(".drag-container",!0))?t.dd.plug(a.Plugin.DDNodeScroll,{node:o}):t.dd.plug(a.Plugin.DDWinScroll),a.DD.DDM.on("ddm:start",this.enable_all_regions,this),e.change_block_move_icons(this)},get_block_id:function(e){return Number(e.get("id").replace(/inst/i,""))},
get_block_region:function(e){return(e=e.test("[data-blockregion]")?e:e.ancestor("[data-blockregion]")).getData("blockregion")},get_region_object:function(e){return this.regionobjects[this.get_block_region(e)]},enable_all_regions:function(){var e,o=a.DD.DDM.activeDrag.get("groups");if(o&&-1!==a.Array.indexOf(o,"block"))for(e in this.regionobjects)this.regionobjects.hasOwnProperty(e)&&this.regionobjects[e].enable()},disable_regions_if_required:function(){var e=0;for(e in this.regionobjects)this.regionobjects[e].disable_if_required()},drag_start:function(e){e=e.target;e.get("node").previous()&&e.get("node").previous().hasClass(c)&&(this.skipnodetop=e.get("node").previous()),e.get("node").next()&&e.get("node").next().hasClass(i)&&(this.skipnodebottom=e.get("node").next())},dragOver:function(e){var o=e.drop.get("node").ancestor(".drag-container",!0);if(o){if(e.drag[a.Plugin.DDNodeScroll]){if(e.drag[a.Plugin.DDNodeScroll].get("node")===o)return;e.drag.unplug(a.Plugin.DDNodeScroll)}e.drag.plug(a.Plugin.DDNodeScroll,{node:o})}},drop_over:function(e){var o=e.drag.get("node"),e=e.drop.get("node");e.hasClass(g)&&e.one("."+s)&&e.one("."+s).next("."+d)&&e.prepend(o)},drop_end:function(){this.skipnodetop=null,this.skipnodebottom=null,this.disable_regions_if_required()},drag_dropmiss:function(e){this.drop_hit(e)},drop_hit:function(i){var n,e=i.drag.get("node"),o=i.drop.get("node");e.previous()&&e.previous().hasClass(c)&&e.insert(e.previous(),"after"),this.skipnodetop&&e.insert(this.skipnodetop,"before"),this.skipnodebottom&&e.insert(this.skipnodebottom,"after"),n=M.util.add_lightbox(a,e),o={sesskey:M.cfg.sesskey,courseid:this.get("courseid"),pagelayout:this.get("pagelayout"),pagetype:this.get("pagetype"),subpage:this.get("subpage"),contextid:this.get("contextid"),action:"move",bui_moveid:this.get_block_id(e),bui_newregion:this.get_block_region(o)},this.get("cmid")&&(o.cmid=this.get("cmid")),e.next("."+d)&&!e.next("."+d).hasClass(s)&&(o.bui_beforeid=this.get_block_id(e.next("."+d))),a.io(M.cfg.wwwroot+t,{method:"POST",data:o,on:{start:function(){n.show()},success:function(e,o){window.setTimeout(function(){n.hide()},250);try{var t=a.JSON.parse(o.responseText);t.error&&new M.core.ajaxException(t)}catch(i){}},failure:function(e,o){this.ajax_failure(o),n.hide()},complete:function(){this.disable_regions_if_required()}},context:this})}},a.extend(o,M.core.dragdrop,o.prototype,{NAME:"core-blocks-dragdrop-manager",ATTRS:{courseid:{value:null},cmid:{value:null},contextid:{value:null},pagelayout:{value:null},pagetype:{value:null},subpage:{value:null},regions:{value:[]}}}),(r=function(){r.superclass.constructor.apply(this,arguments)}).prototype={initializer:function(){var e,o,t=this.get("node");t=t||this.create_and_add_node(),e=a.one("body"),t=0<t.all("."+d).size(),o=this.get_has_region_class(),this.set("hasblocks",t),e.hasClass(o)||e.addClass(o),e.addClass(t?this.get_used_region_class():this.get_empty_region_class()),e.removeClass(t?this.get_empty_region_class():this.get_used_region_class())},create_and_add_node:function(){var e,o=a.Node.create,t=this.get("region"),o=o('<div id="block-region-'+t+'" data-droptarget="1"></div>').addClass(l).setData("blockregion",t),i=this.get("manager").get("regions"),n=!1,s=!1,r=!1;for(e in i)i[e].match(/(pre|left)/)?n=i[e]:i[e].match(/(post|right)/)&&(s=i[e]);return!1!==n&&!1!==s&&(t===n?(t=a.one("#block-region-"+s))&&(t.insert(o,"before"),r=!0):(t=a.one("#block-region-"+n))&&(t.insert(o,"after"),r=!0)),!1===r&&a.one("body").append(o),this.set("node",o),o},change_block_move_icons:function(o){var t;this.get("node").all("."+d+" a."+n).each(function(e){e.setStyle("cursor","move"),(t=o.get_drag_handle(e.getAttribute("title"),"","icon",!0)).setAttribute("role","menuitem"),e.replace(t)})},get_has_region_class:function(){return"has-region-"+this.get("region")},get_empty_region_class:function(){return"empty-region-"+this.get("region")},get_used_region_class:function(){return"used-region-"+this.get("region")},get_droptarget:function(){var e=this.get("node");return e.test('[data-droptarget="1"]')?e:e.one('[data-droptarget="1"]')},enable:function(){a.one("body").addClass(this.get_used_region_class()).removeClass(this.get_empty_region_class())},disable_if_required:function(){0===this.get("node").all("."+d).size()&&a.one("body").addClass(this.get_empty_region_class()).removeClass(this.get_used_region_class())}},a.extend(r,a.Base,r.prototype,{NAME:"core-blocks-dragdrop-blockregion",ATTRS:{manager:{writeOnce:"initOnly",validator:function(e){return a.Lang.isObject(e)&&e instanceof o}},region:{writeOnce:"initOnly",validator:function(e){return a.Lang.isString(e)}},node:{validator:function(e){return a.Lang.isObject(e)||a.Lang.isNull(e)}},hasblocks:{value:!1,validator:function(e){return a.Lang.isBoolean(e)}}}})},"@VERSION@",{requires:["base","node","io","dom","dd","dd-scroll","moodle-core-dragdrop","moodle-core-notification"]});