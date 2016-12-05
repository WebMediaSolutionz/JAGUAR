!function(t){"function"==typeof define&&define.amd?define(["jquery"],t):t("object"==typeof exports?require("jquery"):jQuery)}(function(t,e){function i(){return new Date(Date.UTC.apply(Date,arguments))}function a(){var t=new Date;return i(t.getFullYear(),t.getMonth(),t.getDate())}function s(t,e){return t.getUTCFullYear()===e.getUTCFullYear()&&t.getUTCMonth()===e.getUTCMonth()&&t.getUTCDate()===e.getUTCDate()}function n(t){return function(){return this[t].apply(this,arguments)}}function o(t){return t&&!isNaN(t.getTime())}function r(e,i){function a(t,e){return e.toLowerCase()}var s,n=t(e).data(),o={},r=new RegExp("^"+i.toLowerCase()+"([A-Z])");i=new RegExp("^"+i.toLowerCase());for(var h in n)i.test(h)&&(s=h.replace(r,a),o[s]=n[h]);return o}function h(e){var i={};if(D[e]||(e=e.split("-")[0],D[e])){var a=D[e];return t.each(g,function(t,e){e in a&&(i[e]=a[e])}),i}}var l=function(){var e={get:function(t){return this.slice(t)[0]},contains:function(t){for(var e=t&&t.valueOf(),i=0,a=this.length;a>i;i++)if(this[i].valueOf()===e)return i;return-1},remove:function(t){this.splice(t,1)},replace:function(e){e&&(t.isArray(e)||(e=[e]),this.clear(),this.push.apply(this,e))},clear:function(){this.length=0},copy:function(){var t=new l;return t.replace(this),t}};return function(){var i=[];return i.push.apply(i,arguments),t.extend(i,e),i}}(),d=function(e,i){t(e).data("datepicker",this),this._process_options(i),this.dates=new l,this.viewDate=this.o.defaultViewDate,this.focusDate=null,this.element=t(e),this.isInline=!1,this.isInput=this.element.is("input"),this.component=!!this.element.hasClass("date")&&this.element.find(".add-on, .input-group-addon, .btn"),this.hasInput=this.component&&this.element.find("input").length,this.component&&0===this.component.length&&(this.component=!1),this.picker=t(v.template),this._buildEvents(),this._attachEvents(),this.isInline?this.picker.addClass("datepicker-inline").appendTo(this.element):this.picker.addClass("datepicker-dropdown dropdown-menu"),this.o.rtl&&this.picker.addClass("datepicker-rtl"),this.viewMode=this.o.startView,this.o.calendarWeeks&&this.picker.find("thead .datepicker-title, tfoot .today, tfoot .clear").attr("colspan",function(t,e){return parseInt(e)+1}),this._allow_update=!1,this.setStartDate(this._o.startDate),this.setEndDate(this._o.endDate),this.setDaysOfWeekDisabled(this.o.daysOfWeekDisabled),this.setDaysOfWeekHighlighted(this.o.daysOfWeekHighlighted),this.setDatesDisabled(this.o.datesDisabled),this.fillDow(),this.fillMonths(),this._allow_update=!0,this.update(),this.showMode(),this.isInline&&this.show()};d.prototype={constructor:d,_process_options:function(e){this._o=t.extend({},this._o,e);var s=this.o=t.extend({},this._o),n=s.language;switch(D[n]||(n=n.split("-")[0],D[n]||(n=f.language)),s.language=n,s.startView){case 2:case"decade":s.startView=2;break;case 1:case"year":s.startView=1;break;default:s.startView=0}switch(s.minViewMode){case 1:case"months":s.minViewMode=1;break;case 2:case"years":s.minViewMode=2;break;default:s.minViewMode=0}switch(s.maxViewMode){case 0:case"days":s.maxViewMode=0;break;case 1:case"months":s.maxViewMode=1;break;default:s.maxViewMode=2}s.startView=Math.min(s.startView,s.maxViewMode),s.startView=Math.max(s.startView,s.minViewMode),s.multidate!==!0&&(s.multidate=Number(s.multidate)||!1,s.multidate!==!1&&(s.multidate=Math.max(0,s.multidate))),s.multidateSeparator=String(s.multidateSeparator),s.weekStart%=7,s.weekEnd=(s.weekStart+6)%7;var o=v.parseFormat(s.format);if(s.startDate!==-(1/0)&&(s.startDate?s.startDate instanceof Date?s.startDate=this._local_to_utc(this._zero_time(s.startDate)):s.startDate=v.parseDate(s.startDate,o,s.language):s.startDate=-(1/0)),s.endDate!==1/0&&(s.endDate?s.endDate instanceof Date?s.endDate=this._local_to_utc(this._zero_time(s.endDate)):s.endDate=v.parseDate(s.endDate,o,s.language):s.endDate=1/0),s.daysOfWeekDisabled=s.daysOfWeekDisabled||[],t.isArray(s.daysOfWeekDisabled)||(s.daysOfWeekDisabled=s.daysOfWeekDisabled.split(/[,\s]*/)),s.daysOfWeekDisabled=t.map(s.daysOfWeekDisabled,function(t){return parseInt(t,10)}),s.daysOfWeekHighlighted=s.daysOfWeekHighlighted||[],t.isArray(s.daysOfWeekHighlighted)||(s.daysOfWeekHighlighted=s.daysOfWeekHighlighted.split(/[,\s]*/)),s.daysOfWeekHighlighted=t.map(s.daysOfWeekHighlighted,function(t){return parseInt(t,10)}),s.datesDisabled=s.datesDisabled||[],!t.isArray(s.datesDisabled)){var r=[];r.push(v.parseDate(s.datesDisabled,o,s.language)),s.datesDisabled=r}s.datesDisabled=t.map(s.datesDisabled,function(t){return v.parseDate(t,o,s.language)});var h=String(s.orientation).toLowerCase().split(/\s+/g),l=s.orientation.toLowerCase();if(h=t.grep(h,function(t){return/^auto|left|right|top|bottom$/.test(t)}),s.orientation={x:"auto",y:"auto"},l&&"auto"!==l)if(1===h.length)switch(h[0]){case"top":case"bottom":s.orientation.y=h[0];break;case"left":case"right":s.orientation.x=h[0]}else l=t.grep(h,function(t){return/^left|right$/.test(t)}),s.orientation.x=l[0]||"auto",l=t.grep(h,function(t){return/^top|bottom$/.test(t)}),s.orientation.y=l[0]||"auto";if(s.defaultViewDate){var d=s.defaultViewDate.year||(new Date).getFullYear(),c=s.defaultViewDate.month||0,u=s.defaultViewDate.day||1;s.defaultViewDate=i(d,c,u)}else s.defaultViewDate=a()},_events:[],_secondaryEvents:[],_applyEvents:function(t){for(var i,a,s,n=0;n<t.length;n++)i=t[n][0],2===t[n].length?(a=e,s=t[n][1]):3===t[n].length&&(a=t[n][1],s=t[n][2]),i.on(s,a)},_unapplyEvents:function(t){for(var i,a,s,n=0;n<t.length;n++)i=t[n][0],2===t[n].length?(s=e,a=t[n][1]):3===t[n].length&&(s=t[n][1],a=t[n][2]),i.off(a,s)},_buildEvents:function(){var e={keyup:t.proxy(function(e){-1===t.inArray(e.keyCode,[27,37,39,38,40,32,13,9])&&this.update()},this),keydown:t.proxy(this.keydown,this),paste:t.proxy(this.paste,this)};this.o.showOnFocus===!0&&(e.focus=t.proxy(this.show,this)),this.isInput?this._events=[[this.element,e]]:this.component&&this.hasInput?this._events=[[this.element.find("input"),e],[this.component,{click:t.proxy(this.show,this)}]]:this.element.is("div")?this.isInline=!0:this._events=[[this.element,{click:t.proxy(this.show,this)}]],this._events.push([this.element,"*",{blur:t.proxy(function(t){this._focused_from=t.target},this)}],[this.element,{blur:t.proxy(function(t){this._focused_from=t.target},this)}]),this.o.immediateUpdates&&this._events.push([this.element,{"changeYear changeMonth":t.proxy(function(t){this.update(t.date)},this)}]),this._secondaryEvents=[[this.picker,{click:t.proxy(this.click,this)}],[t(window),{resize:t.proxy(this.place,this)}],[t(document),{mousedown:t.proxy(function(t){this.element.is(t.target)||this.element.find(t.target).length||this.picker.is(t.target)||this.picker.find(t.target).length||this.picker.hasClass("datepicker-inline")||this.hide()},this)}]]},_attachEvents:function(){this._detachEvents(),this._applyEvents(this._events)},_detachEvents:function(){this._unapplyEvents(this._events)},_attachSecondaryEvents:function(){this._detachSecondaryEvents(),this._applyEvents(this._secondaryEvents)},_detachSecondaryEvents:function(){this._unapplyEvents(this._secondaryEvents)},_trigger:function(e,i){var a=i||this.dates.get(-1),s=this._utc_to_local(a);this.element.trigger({type:e,date:s,dates:t.map(this.dates,this._utc_to_local),format:t.proxy(function(t,e){0===arguments.length?(t=this.dates.length-1,e=this.o.format):"string"==typeof t&&(e=t,t=this.dates.length-1),e=e||this.o.format;var i=this.dates.get(t);return v.formatDate(i,e,this.o.language)},this)})},show:function(){var e=this.component?this.element.find("input"):this.element;if(!e.attr("readonly")||this.o.enableOnReadonly!==!1)return this.isInline||this.picker.appendTo(this.o.container),this.place(),this.picker.show(),this._attachSecondaryEvents(),this._trigger("show"),(window.navigator.msMaxTouchPoints||"ontouchstart"in document)&&this.o.disableTouchKeyboard&&t(this.element).blur(),this},hide:function(){return this.isInline?this:this.picker.is(":visible")?(this.focusDate=null,this.picker.hide().detach(),this._detachSecondaryEvents(),this.viewMode=this.o.startView,this.showMode(),this.o.forceParse&&(this.isInput&&this.element.val()||this.hasInput&&this.element.find("input").val())&&this.setValue(),this._trigger("hide"),this):this},remove:function(){return this.hide(),this._detachEvents(),this._detachSecondaryEvents(),this.picker.remove(),delete this.element.data().datepicker,this.isInput||delete this.element.data().date,this},paste:function(e){var i;if(e.originalEvent.clipboardData&&e.originalEvent.clipboardData.types&&-1!==t.inArray("text/plain",e.originalEvent.clipboardData.types))i=e.originalEvent.clipboardData.getData("text/plain");else{if(!window.clipboardData)return;i=window.clipboardData.getData("Text")}this.setDate(i),this.update(),e.preventDefault()},_utc_to_local:function(t){return t&&new Date(t.getTime()+6e4*t.getTimezoneOffset())},_local_to_utc:function(t){return t&&new Date(t.getTime()-6e4*t.getTimezoneOffset())},_zero_time:function(t){return t&&new Date(t.getFullYear(),t.getMonth(),t.getDate())},_zero_utc_time:function(t){return t&&new Date(Date.UTC(t.getUTCFullYear(),t.getUTCMonth(),t.getUTCDate()))},getDates:function(){return t.map(this.dates,this._utc_to_local)},getUTCDates:function(){return t.map(this.dates,function(t){return new Date(t)})},getDate:function(){return this._utc_to_local(this.getUTCDate())},getUTCDate:function(){var t=this.dates.get(-1);return"undefined"!=typeof t?new Date(t):null},clearDates:function(){var t;this.isInput?t=this.element:this.component&&(t=this.element.find("input")),t&&t.val(""),this.update(),this._trigger("changeDate"),this.o.autoclose&&this.hide()},setDates:function(){var e=t.isArray(arguments[0])?arguments[0]:arguments;return this.update.apply(this,e),this._trigger("changeDate"),this.setValue(),this},setUTCDates:function(){var e=t.isArray(arguments[0])?arguments[0]:arguments;return this.update.apply(this,t.map(e,this._utc_to_local)),this._trigger("changeDate"),this.setValue(),this},setDate:n("setDates"),setUTCDate:n("setUTCDates"),setValue:function(){var t=this.getFormattedDate();return this.isInput?this.element.val(t):this.component&&this.element.find("input").val(t),this},getFormattedDate:function(i){i===e&&(i=this.o.format);var a=this.o.language;return t.map(this.dates,function(t){return v.formatDate(t,i,a)}).join(this.o.multidateSeparator)},setStartDate:function(t){return this._process_options({startDate:t}),this.update(),this.updateNavArrows(),this},setEndDate:function(t){return this._process_options({endDate:t}),this.update(),this.updateNavArrows(),this},setDaysOfWeekDisabled:function(t){return this._process_options({daysOfWeekDisabled:t}),this.update(),this.updateNavArrows(),this},setDaysOfWeekHighlighted:function(t){return this._process_options({daysOfWeekHighlighted:t}),this.update(),this},setDatesDisabled:function(t){this._process_options({datesDisabled:t}),this.update(),this.updateNavArrows()},place:function(){if(this.isInline)return this;var e=this.picker.outerWidth(),i=this.picker.outerHeight(),a=10,s=t(this.o.container),n=s.width(),o="body"===this.o.container?t(document).scrollTop():s.scrollTop(),r=s.offset(),h=[];this.element.parents().each(function(){var e=t(this).css("z-index");"auto"!==e&&0!==e&&h.push(parseInt(e))});var l=Math.max.apply(Math,h)+this.o.zIndexOffset,d=this.component?this.component.parent().offset():this.element.offset(),c=this.component?this.component.outerHeight(!0):this.element.outerHeight(!1),u=this.component?this.component.outerWidth(!0):this.element.outerWidth(!1),p=d.left-r.left,f=d.top-r.top;"body"!==this.o.container&&(f+=o),this.picker.removeClass("datepicker-orient-top datepicker-orient-bottom datepicker-orient-right datepicker-orient-left"),"auto"!==this.o.orientation.x?(this.picker.addClass("datepicker-orient-"+this.o.orientation.x),"right"===this.o.orientation.x&&(p-=e-u)):d.left<0?(this.picker.addClass("datepicker-orient-left"),p-=d.left-a):p+e>n?(this.picker.addClass("datepicker-orient-right"),p+=u-e):this.picker.addClass("datepicker-orient-left");var g,D=this.o.orientation.y;if("auto"===D&&(g=-o+f-i,D=0>g?"bottom":"top"),this.picker.addClass("datepicker-orient-"+D),"top"===D?f-=i+parseInt(this.picker.css("padding-top")):f+=c,this.o.rtl){var v=n-(p+u);this.picker.css({top:f,right:v,zIndex:l})}else this.picker.css({top:f,left:p,zIndex:l});return this},_allow_update:!0,update:function(){if(!this._allow_update)return this;var e=this.dates.copy(),i=[],a=!1;return arguments.length?(t.each(arguments,t.proxy(function(t,e){e instanceof Date&&(e=this._local_to_utc(e)),i.push(e)},this)),a=!0):(i=this.isInput?this.element.val():this.element.data("date")||this.element.find("input").val(),i=i&&this.o.multidate?i.split(this.o.multidateSeparator):[i],delete this.element.data().date),i=t.map(i,t.proxy(function(t){return v.parseDate(t,this.o.format,this.o.language)},this)),i=t.grep(i,t.proxy(function(t){return!this.dateWithinRange(t)||!t},this),!0),this.dates.replace(i),this.dates.length?this.viewDate=new Date(this.dates.get(-1)):this.viewDate<this.o.startDate?this.viewDate=new Date(this.o.startDate):this.viewDate>this.o.endDate?this.viewDate=new Date(this.o.endDate):this.viewDate=this.o.defaultViewDate,a?this.setValue():i.length&&String(e)!==String(this.dates)&&this._trigger("changeDate"),!this.dates.length&&e.length&&this._trigger("clearDate"),this.fill(),this.element.change(),this},fillDow:function(){var t=this.o.weekStart,e="<tr>";for(this.o.calendarWeeks&&(this.picker.find(".datepicker-days .datepicker-switch").attr("colspan",function(t,e){return parseInt(e)+1}),e+='<th class="cw">&#160;</th>');t<this.o.weekStart+7;)e+='<th class="dow">'+D[this.o.language].daysMin[t++%7]+"</th>";e+="</tr>",this.picker.find(".datepicker-days thead").append(e)},fillMonths:function(){for(var t="",e=0;12>e;)t+='<span class="month">'+D[this.o.language].monthsShort[e++]+"</span>";this.picker.find(".datepicker-months td").html(t)},setRange:function(e){e&&e.length?this.range=t.map(e,function(t){return t.valueOf()}):delete this.range,this.fill()},getClassNames:function(e){var i=[],a=this.viewDate.getUTCFullYear(),s=this.viewDate.getUTCMonth(),n=new Date;return e.getUTCFullYear()<a||e.getUTCFullYear()===a&&e.getUTCMonth()<s?i.push("old"):(e.getUTCFullYear()>a||e.getUTCFullYear()===a&&e.getUTCMonth()>s)&&i.push("new"),this.focusDate&&e.valueOf()===this.focusDate.valueOf()&&i.push("focused"),this.o.todayHighlight&&e.getUTCFullYear()===n.getFullYear()&&e.getUTCMonth()===n.getMonth()&&e.getUTCDate()===n.getDate()&&i.push("today"),-1!==this.dates.contains(e)&&i.push("active"),(!this.dateWithinRange(e)||this.dateIsDisabled(e))&&i.push("disabled"),-1!==t.inArray(e.getUTCDay(),this.o.daysOfWeekHighlighted)&&i.push("highlighted"),this.range&&(e>this.range[0]&&e<this.range[this.range.length-1]&&i.push("range"),-1!==t.inArray(e.valueOf(),this.range)&&i.push("selected"),e.valueOf()===this.range[0]&&i.push("range-start"),e.valueOf()===this.range[this.range.length-1]&&i.push("range-end")),i},fill:function(){var a,s=new Date(this.viewDate),n=s.getUTCFullYear(),o=s.getUTCMonth(),r=this.o.startDate!==-(1/0)?this.o.startDate.getUTCFullYear():-(1/0),h=this.o.startDate!==-(1/0)?this.o.startDate.getUTCMonth():-(1/0),l=this.o.endDate!==1/0?this.o.endDate.getUTCFullYear():1/0,d=this.o.endDate!==1/0?this.o.endDate.getUTCMonth():1/0,c=D[this.o.language].today||D.en.today||"",u=D[this.o.language].clear||D.en.clear||"",p=D[this.o.language].titleFormat||D.en.titleFormat;if(!isNaN(n)&&!isNaN(o)){this.picker.find(".datepicker-days thead .datepicker-switch").text(v.formatDate(new i(n,o),p,this.o.language)),this.picker.find("tfoot .today").text(c).toggle(this.o.todayBtn!==!1),this.picker.find("tfoot .clear").text(u).toggle(this.o.clearBtn!==!1),this.picker.find("thead .datepicker-title").text(this.o.title).toggle(""!==this.o.title),this.updateNavArrows(),this.fillMonths();var f=i(n,o-1,28),g=v.getDaysInMonth(f.getUTCFullYear(),f.getUTCMonth());f.setUTCDate(g),f.setUTCDate(g-(f.getUTCDay()-this.o.weekStart+7)%7);var m=new Date(f);f.getUTCFullYear()<100&&m.setUTCFullYear(f.getUTCFullYear()),m.setUTCDate(m.getUTCDate()+42),m=m.valueOf();for(var y,w=[];f.valueOf()<m;){if(f.getUTCDay()===this.o.weekStart&&(w.push("<tr>"),this.o.calendarWeeks)){var k=new Date(+f+(this.o.weekStart-f.getUTCDay()-7)%7*864e5),b=new Date(Number(k)+(11-k.getUTCDay())%7*864e5),C=new Date(Number(C=i(b.getUTCFullYear(),0,1))+(11-C.getUTCDay())%7*864e5),T=(b-C)/864e5/7+1;w.push('<td class="cw">'+T+"</td>")}if(y=this.getClassNames(f),y.push("day"),this.o.beforeShowDay!==t.noop){var _=this.o.beforeShowDay(this._utc_to_local(f));_===e?_={}:"boolean"==typeof _?_={enabled:_}:"string"==typeof _&&(_={classes:_}),_.enabled===!1&&y.push("disabled"),_.classes&&(y=y.concat(_.classes.split(/\s+/))),_.tooltip&&(a=_.tooltip)}y=t.unique(y),w.push('<td class="'+y.join(" ")+'"'+(a?' title="'+a+'"':"")+">"+f.getUTCDate()+"</td>"),a=null,f.getUTCDay()===this.o.weekEnd&&w.push("</tr>"),f.setUTCDate(f.getUTCDate()+1)}this.picker.find(".datepicker-days tbody").empty().append(w.join(""));var M=D[this.o.language].monthsTitle||D.en.monthsTitle||"Months",U=this.picker.find(".datepicker-months").find(".datepicker-switch").text(this.o.maxViewMode<2?M:n).end().find("span").removeClass("active");if(t.each(this.dates,function(t,e){e.getUTCFullYear()===n&&U.eq(e.getUTCMonth()).addClass("active")}),(r>n||n>l)&&U.addClass("disabled"),n===r&&U.slice(0,h).addClass("disabled"),n===l&&U.slice(d+1).addClass("disabled"),this.o.beforeShowMonth!==t.noop){var x=this;t.each(U,function(e,i){if(!t(i).hasClass("disabled")){var a=new Date(n,e,1),s=x.o.beforeShowMonth(a);s===!1&&t(i).addClass("disabled")}})}w="",n=10*parseInt(n/10,10);var F=this.picker.find(".datepicker-years").find(".datepicker-switch").text(n+"-"+(n+9)).end().find("td");n-=1;for(var S,O=t.map(this.dates,function(t){return t.getUTCFullYear()}),Y=-1;11>Y;Y++){if(S=["year"],a=null,-1===Y?S.push("old"):10===Y&&S.push("new"),-1!==t.inArray(n,O)&&S.push("active"),(r>n||n>l)&&S.push("disabled"),this.o.beforeShowYear!==t.noop){var V=this.o.beforeShowYear(new Date(n,0,1));V===e?V={}:"boolean"==typeof V?V={enabled:V}:"string"==typeof V&&(V={classes:V}),V.enabled===!1&&S.push("disabled"),V.classes&&(S=S.concat(V.classes.split(/\s+/))),V.tooltip&&(a=V.tooltip)}w+='<span class="'+S.join(" ")+'"'+(a?' title="'+a+'"':"")+">"+n+"</span>",n+=1}F.html(w)}},updateNavArrows:function(){if(this._allow_update){var t=new Date(this.viewDate),e=t.getUTCFullYear(),i=t.getUTCMonth();switch(this.viewMode){case 0:this.o.startDate!==-(1/0)&&e<=this.o.startDate.getUTCFullYear()&&i<=this.o.startDate.getUTCMonth()?this.picker.find(".prev").css({visibility:"hidden"}):this.picker.find(".prev").css({visibility:"visible"}),this.o.endDate!==1/0&&e>=this.o.endDate.getUTCFullYear()&&i>=this.o.endDate.getUTCMonth()?this.picker.find(".next").css({visibility:"hidden"}):this.picker.find(".next").css({visibility:"visible"});break;case 1:case 2:this.o.startDate!==-(1/0)&&e<=this.o.startDate.getUTCFullYear()||this.o.maxViewMode<2?this.picker.find(".prev").css({visibility:"hidden"}):this.picker.find(".prev").css({visibility:"visible"}),this.o.endDate!==1/0&&e>=this.o.endDate.getUTCFullYear()||this.o.maxViewMode<2?this.picker.find(".next").css({visibility:"hidden"}):this.picker.find(".next").css({visibility:"visible"})}}},click:function(e){e.preventDefault(),e.stopPropagation();var s,n,o,r=t(e.target).closest("span, td, th");if(1===r.length)switch(r[0].nodeName.toLowerCase()){case"th":switch(r[0].className){case"datepicker-switch":this.showMode(1);break;case"prev":case"next":var h=v.modes[this.viewMode].navStep*("prev"===r[0].className?-1:1);switch(this.viewMode){case 0:this.viewDate=this.moveMonth(this.viewDate,h),this._trigger("changeMonth",this.viewDate);break;case 1:case 2:this.viewDate=this.moveYear(this.viewDate,h),1===this.viewMode&&this._trigger("changeYear",this.viewDate)}this.fill();break;case"today":this.showMode(-2);var l="linked"===this.o.todayBtn?null:"view";this._setDate(a(),l);break;case"clear":this.clearDates()}break;case"span":r.hasClass("disabled")||(this.viewDate.setUTCDate(1),r.hasClass("month")?(o=1,n=r.parent().find("span").index(r),s=this.viewDate.getUTCFullYear(),this.viewDate.setUTCMonth(n),this._trigger("changeMonth",this.viewDate),1===this.o.minViewMode?(this._setDate(i(s,n,o)),this.showMode()):this.showMode(-1)):(o=1,n=0,s=parseInt(r.text(),10)||0,this.viewDate.setUTCFullYear(s),this._trigger("changeYear",this.viewDate),2===this.o.minViewMode&&this._setDate(i(s,n,o)),this.showMode(-1)),this.fill());break;case"td":r.hasClass("day")&&!r.hasClass("disabled")&&(o=parseInt(r.text(),10)||1,s=this.viewDate.getUTCFullYear(),n=this.viewDate.getUTCMonth(),r.hasClass("old")?0===n?(n=11,s-=1):n-=1:r.hasClass("new")&&(11===n?(n=0,s+=1):n+=1),this._setDate(i(s,n,o)))}this.picker.is(":visible")&&this._focused_from&&t(this._focused_from).focus(),delete this._focused_from},_toggle_multidate:function(t){var e=this.dates.contains(t);if(t||this.dates.clear(),-1!==e?(this.o.multidate===!0||this.o.multidate>1||this.o.toggleActive)&&this.dates.remove(e):this.o.multidate===!1?(this.dates.clear(),this.dates.push(t)):this.dates.push(t),"number"==typeof this.o.multidate)for(;this.dates.length>this.o.multidate;)this.dates.remove(0)},_setDate:function(t,e){e&&"date"!==e||this._toggle_multidate(t&&new Date(t)),e&&"view"!==e||(this.viewDate=t&&new Date(t)),this.fill(),this.setValue(),e&&"view"===e||this._trigger("changeDate");var i;this.isInput?i=this.element:this.component&&(i=this.element.find("input")),i&&i.change(),!this.o.autoclose||e&&"date"!==e||this.hide()},moveDay:function(t,e){var i=new Date(t);return i.setUTCDate(t.getUTCDate()+e),i},moveWeek:function(t,e){return this.moveDay(t,7*e)},moveMonth:function(t,e){if(!o(t))return this.o.defaultViewDate;if(!e)return t;var i,a,s=new Date(t.valueOf()),n=s.getUTCDate(),r=s.getUTCMonth(),h=Math.abs(e);if(e=e>0?1:-1,1===h)a=-1===e?function(){return s.getUTCMonth()===r}:function(){return s.getUTCMonth()!==i},i=r+e,s.setUTCMonth(i),(0>i||i>11)&&(i=(i+12)%12);else{for(var l=0;h>l;l++)s=this.moveMonth(s,e);i=s.getUTCMonth(),s.setUTCDate(n),a=function(){return i!==s.getUTCMonth()}}for(;a();)s.setUTCDate(--n),s.setUTCMonth(i);return s},moveYear:function(t,e){return this.moveMonth(t,12*e)},moveAvailableDate:function(t,e,i){do{if(t=this[i](t,e),!this.dateWithinRange(t))return!1;i="moveDay"}while(this.dateIsDisabled(t));return t},weekOfDateIsDisabled:function(e){return-1!==t.inArray(e.getUTCDay(),this.o.daysOfWeekDisabled)},dateIsDisabled:function(e){return this.weekOfDateIsDisabled(e)||t.grep(this.o.datesDisabled,function(t){return s(e,t)}).length>0},dateWithinRange:function(t){return t>=this.o.startDate&&t<=this.o.endDate},keydown:function(t){if(!this.picker.is(":visible"))return void((40===t.keyCode||27===t.keyCode)&&(this.show(),t.stopPropagation()));var e,i,a=!1,s=this.focusDate||this.viewDate;switch(t.keyCode){case 27:this.focusDate?(this.focusDate=null,this.viewDate=this.dates.get(-1)||this.viewDate,this.fill()):this.hide(),t.preventDefault(),t.stopPropagation();break;case 37:case 38:case 39:case 40:if(!this.o.keyboardNavigation||7===this.o.daysOfWeekDisabled.length)break;e=37===t.keyCode||38===t.keyCode?-1:1,t.ctrlKey?(i=this.moveAvailableDate(s,e,"moveYear"),i&&this._trigger("changeYear",this.viewDate)):t.shiftKey?(i=this.moveAvailableDate(s,e,"moveMonth"),i&&this._trigger("changeMonth",this.viewDate)):37===t.keyCode||39===t.keyCode?i=this.moveAvailableDate(s,e,"moveDay"):this.weekOfDateIsDisabled(s)||(i=this.moveAvailableDate(s,e,"moveWeek")),i&&(this.focusDate=this.viewDate=i,this.setValue(),this.fill(),t.preventDefault());break;case 13:if(!this.o.forceParse)break;s=this.focusDate||this.dates.get(-1)||this.viewDate,this.o.keyboardNavigation&&(this._toggle_multidate(s),a=!0),this.focusDate=null,this.viewDate=this.dates.get(-1)||this.viewDate,this.setValue(),this.fill(),this.picker.is(":visible")&&(t.preventDefault(),t.stopPropagation(),this.o.autoclose&&this.hide());break;case 9:this.focusDate=null,this.viewDate=this.dates.get(-1)||this.viewDate,this.fill(),this.hide()}if(a){this.dates.length?this._trigger("changeDate"):this._trigger("clearDate");var n;this.isInput?n=this.element:this.component&&(n=this.element.find("input")),n&&n.change()}},showMode:function(t){t&&(this.viewMode=Math.max(this.o.minViewMode,Math.min(this.o.maxViewMode,this.viewMode+t))),this.picker.children("div").hide().filter(".datepicker-"+v.modes[this.viewMode].clsName).show(),this.updateNavArrows()}};var c=function(e,i){t(e).data("datepicker",this),this.element=t(e),this.inputs=t.map(i.inputs,function(t){return t.jquery?t[0]:t}),delete i.inputs,p.call(t(this.inputs),i).on("changeDate",t.proxy(this.dateUpdated,this)),this.pickers=t.map(this.inputs,function(e){return t(e).data("datepicker")}),this.updateDates()};c.prototype={updateDates:function(){this.dates=t.map(this.pickers,function(t){return t.getUTCDate()}),this.updateRanges()},updateRanges:function(){var e=t.map(this.dates,function(t){return t.valueOf()});t.each(this.pickers,function(t,i){i.setRange(e)})},dateUpdated:function(e){if(!this.updating){this.updating=!0;var i=t(e.target).data("datepicker");if("undefined"!=typeof i){var a=i.getUTCDate(),s=t.inArray(e.target,this.inputs),n=s-1,o=s+1,r=this.inputs.length;if(-1!==s){if(t.each(this.pickers,function(t,e){e.getUTCDate()||e.setUTCDate(a)}),a<this.dates[n])for(;n>=0&&a<this.dates[n];)this.pickers[n--].setUTCDate(a);else if(a>this.dates[o])for(;r>o&&a>this.dates[o];)this.pickers[o++].setUTCDate(a);this.updateDates(),delete this.updating}}}},remove:function(){t.map(this.pickers,function(t){t.remove()}),delete this.element.data().datepicker}};var u=t.fn.datepicker,p=function(i){var a=Array.apply(null,arguments);a.shift();var s;if(this.each(function(){var e=t(this),n=e.data("datepicker"),o="object"==typeof i&&i;if(!n){var l=r(this,"date"),u=t.extend({},f,l,o),p=h(u.language),g=t.extend({},f,p,l,o);e.hasClass("input-daterange")||g.inputs?(t.extend(g,{inputs:g.inputs||e.find("input").toArray()}),n=new c(this,g)):n=new d(this,g),e.data("datepicker",n)}"string"==typeof i&&"function"==typeof n[i]&&(s=n[i].apply(n,a))}),s===e||s instanceof d||s instanceof c)return this;if(this.length>1)throw new Error("Using only allowed for the collection of a single element ("+i+" function)");return s};t.fn.datepicker=p;var f=t.fn.datepicker.defaults={autoclose:!1,beforeShowDay:t.noop,beforeShowMonth:t.noop,beforeShowYear:t.noop,calendarWeeks:!1,clearBtn:!1,toggleActive:!1,daysOfWeekDisabled:[],daysOfWeekHighlighted:[],datesDisabled:[],endDate:1/0,forceParse:!0,format:"mm/dd/yyyy",keyboardNavigation:!0,language:"en",minViewMode:0,maxViewMode:2,multidate:!1,multidateSeparator:",",orientation:"auto",rtl:!1,startDate:-(1/0),startView:0,todayBtn:!1,todayHighlight:!1,weekStart:0,disableTouchKeyboard:!1,enableOnReadonly:!0,showOnFocus:!0,zIndexOffset:10,container:"body",immediateUpdates:!1,title:""},g=t.fn.datepicker.locale_opts=["format","rtl","weekStart"];t.fn.datepicker.Constructor=d;var D=t.fn.datepicker.dates={en:{days:["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],daysShort:["Sun","Mon","Tue","Wed","Thu","Fri","Sat"],daysMin:["Su","Mo","Tu","We","Th","Fr","Sa"],months:["January","February","March","April","May","June","July","August","September","October","November","December"],monthsShort:["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],today:"Today",clear:"Clear",titleFormat:"MM yyyy"}},v={modes:[{clsName:"days",navFnc:"Month",navStep:1},{clsName:"months",navFnc:"FullYear",navStep:1},{clsName:"years",navFnc:"FullYear",navStep:10}],isLeapYear:function(t){return t%4===0&&t%100!==0||t%400===0},getDaysInMonth:function(t,e){return[31,v.isLeapYear(t)?29:28,31,30,31,30,31,31,30,31,30,31][e]},validParts:/dd?|DD?|mm?|MM?|yy(?:yy)?/g,nonpunctuation:/[^ -\/:-@\[\u3400-\u9fff-`{-~\t\n\r]+/g,parseFormat:function(t){if("function"==typeof t.toValue&&"function"==typeof t.toDisplay)return t;var e=t.replace(this.validParts,"\0").split("\0"),i=t.match(this.validParts);if(!e||!e.length||!i||0===i.length)throw new Error("Invalid date format.");return{separators:e,parts:i}},parseDate:function(s,n,o){function r(){var t=this.slice(0,f[c].length),e=f[c].slice(0,t.length);return t.toLowerCase()===e.toLowerCase()}if(!s)return e;if(s instanceof Date)return s;if("string"==typeof n&&(n=v.parseFormat(n)),n.toValue)return n.toValue(s,n,o);var h,l,c,u,p=/([\-+]\d+)([dmwy])/,f=s.match(/([\-+]\d+)([dmwy])/g),g={d:"moveDay",m:"moveMonth",w:"moveWeek",y:"moveYear"};if(/^[\-+]\d+[dmwy]([\s,]+[\-+]\d+[dmwy])*$/.test(s)){for(s=new Date,c=0;c<f.length;c++)h=p.exec(f[c]),l=parseInt(h[1]),u=g[h[2]],s=d.prototype[u](s,l);return i(s.getUTCFullYear(),s.getUTCMonth(),s.getUTCDate())}f=s&&s.match(this.nonpunctuation)||[],s=new Date;var m,y,w={},k=["yyyy","yy","M","MM","m","mm","d","dd"],b={yyyy:function(t,e){return t.setUTCFullYear(e)},yy:function(t,e){return t.setUTCFullYear(2e3+e)},m:function(t,e){if(isNaN(t))return t;for(e-=1;0>e;)e+=12;for(e%=12,t.setUTCMonth(e);t.getUTCMonth()!==e;)t.setUTCDate(t.getUTCDate()-1);return t},d:function(t,e){return t.setUTCDate(e)}};b.M=b.MM=b.mm=b.m,b.dd=b.d,s=a();var C=n.parts.slice();if(f.length!==C.length&&(C=t(C).filter(function(e,i){return-1!==t.inArray(i,k)}).toArray()),f.length===C.length){var T;for(c=0,T=C.length;T>c;c++){if(m=parseInt(f[c],10),h=C[c],isNaN(m))switch(h){case"MM":y=t(D[o].months).filter(r),m=t.inArray(y[0],D[o].months)+1;break;case"M":y=t(D[o].monthsShort).filter(r),m=t.inArray(y[0],D[o].monthsShort)+1}w[h]=m}var _,M;for(c=0;c<k.length;c++)M=k[c],M in w&&!isNaN(w[M])&&(_=new Date(s),b[M](_,w[M]),isNaN(_)||(s=_))}return s},formatDate:function(e,i,a){if(!e)return"";if("string"==typeof i&&(i=v.parseFormat(i)),i.toDisplay)return i.toDisplay(e,i,a);var s={d:e.getUTCDate(),D:D[a].daysShort[e.getUTCDay()],DD:D[a].days[e.getUTCDay()],m:e.getUTCMonth()+1,M:D[a].monthsShort[e.getUTCMonth()],MM:D[a].months[e.getUTCMonth()],yy:e.getUTCFullYear().toString().substring(2),yyyy:e.getUTCFullYear()};s.dd=(s.d<10?"0":"")+s.d,s.mm=(s.m<10?"0":"")+s.m,e=[];for(var n=t.extend([],i.separators),o=0,r=i.parts.length;r>=o;o++)n.length&&e.push(n.shift()),e.push(s[i.parts[o]]);return e.join("")},headTemplate:'<thead><tr><th colspan="7" class="datepicker-title"></th></tr><tr><th class="prev">&#171;</th><th colspan="5" class="datepicker-switch"></th><th class="next">&#187;</th></tr></thead>',contTemplate:'<tbody><tr><td colspan="7"></td></tr></tbody>',footTemplate:'<tfoot><tr><th colspan="7" class="today"></th></tr><tr><th colspan="7" class="clear"></th></tr></tfoot>'};v.template='<div class="datepicker"><div class="datepicker-days"><table class=" table-condensed">'+v.headTemplate+"<tbody></tbody>"+v.footTemplate+'</table></div><div class="datepicker-months"><table class="table-condensed">'+v.headTemplate+v.contTemplate+v.footTemplate+'</table></div><div class="datepicker-years"><table class="table-condensed">'+v.headTemplate+v.contTemplate+v.footTemplate+"</table></div></div>",t.fn.datepicker.DPGlobal=v,t.fn.datepicker.noConflict=function(){return t.fn.datepicker=u,this},t.fn.datepicker.version="1.5.1",t(document).on("focus.datepicker.data-api click.datepicker.data-api",'[data-provide="datepicker"]',function(e){var i=t(this);i.data("datepicker")||(e.preventDefault(),p.call(i,"show"))}),t(function(){p.call(t('[data-provide="datepicker-inline"]'))})});