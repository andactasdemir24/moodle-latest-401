YUI.add("moodle-core-languninstallconfirm",function(i,n){function t(){t.superclass.constructor.apply(this,arguments)}var e="#languninstallbutton",l="#menuuninstalllang option",o="#menuuninstalllang option[value='en']";t.NAME=n,t.ATTRS={uninstallUrl:{validator:i.Lang.isString}},i.extend(t,i.Base,{initializer:function(){i.one(e).on("click",this._confirm,this)},_confirm:function(n){var t,e;n.preventDefault(),t=[],e=[],i.all(l).each(function(n){n.get("selected")&&(t.push(n.getAttribute("value")),e.push(n.get("text")))}),0===t.length?new M.core.alert({message:M.util.get_string("selectlangs","tool_langimport")}).show():-1<t.indexOf("en")?(i.one(o).set("selected",!1),new M.core.alert({message:M.util.get_string("noenglishuninstall","tool_langimport")}).show()):(n={modal:!0,visible:!1,centered:!0,title:M.util.get_string("uninstall","tool_langimport"),question:M.util.get_string("uninstallconfirm","tool_langimport",e.join(", "))},new M.core.confirm(n).show().on("complete-yes",this._uninstall,this,t))},_uninstall:function(n,t){i.config.win.location.href=this.get("uninstallUrl")+"?mode=4&sesskey="+M.cfg.sesskey+"&confirmtouninstall="+t.join("/")}}),i.namespace("M.core.languninstallconfirm").Confirmation=t,i.namespace("M.core.languninstallconfirm").init=function(n){return new t(n)}},"@VERSION@",{requires:["base","node","moodle-core-notification-confirm","moodle-core-notification-alert"]});