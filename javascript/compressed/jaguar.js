var JAG={currentPage:null,highlight:{border:"thin solid red"},lang:$("html").attr("lang"),phones:null,cities:cities,formEntriesValid:!0,opts2:{color:"#00FF00",top:"5%",left:"5%",lines:13,length:7,width:4,radius:40,corners:1,rotate:0,speed:1,trail:80,shadow:!1,hwaccel:!1,className:"spinner",zIndex:2e9},target2:null,spinner2:null,init:function(){var e=this;return e.setupCurrentPage().showVariants().attachEvents().setupPagination().ellipsis().setupDueNow().setupInputMasks(),"corporate_settings"===e.currentPage&&e.setupTabs(),"devices"!==e.currentPage&&"device"!==e.currentPage&&"accessories"!==e.currentPage||e.check_image_availability(),e},setupCurrentPage:function(){var e=this;return e.currentPage=$("html").attr("data-currentpage"),e},setupTabs:function(){var e=this;return $("#tab-container").easytabs({animate:!1}),e},attachEvents:function(){var e=this;return $(".menu").dropit(),$(".slider").slick({vertical:!0}),$(".datepicker").datepicker(),$("#myModal").on("shown.bs.modal",function(){$("#myInput").focus()}),$('a[href="#"]').click(function(e){e.preventDefault()}),e.stickyFooter(),$(".error_message .close").click(function(){$(this).closest(".error_message").fadeOut()}),$(".toggle_panel").click(function(){var e=$(this),s=(e.closest("h3"),e.attr("data-section")),t=e.closest(".outer-container").find(".advanced_search_table"),a=t.find("input"),i=(t.find(".frg-button"),!1);a.each(function(){var e=$(this);e.val().length>0&&(i=!0)}),s=void 0===s?".advanced_search_table":"."+s,e.hasClass("icon-plus-inverted")?e.closest(".advanced_search").removeClass("not_underlined").find(".icon-plus-inverted").removeClass("icon-plus-inverted").addClass("icon-minus-inverted"):e.hasClass("icon-minus-inverted")&&e.closest(".advanced_search").addClass("not_underlined").find(".icon-minus-inverted").removeClass("icon-minus-inverted").addClass("icon-plus-inverted"),$(s).hasClass("open")?$(s).addClass("hide").addClass("closed").removeClass("open"):$(s).hasClass("closed")&&$(s).removeClass("hide").removeClass("closed").addClass("open")}),$(".js-show_list").click(function(){var e=$(this),s=e.text(),t=e.closest("tr").index(),t=parseInt(t)+2;switch(s){case"View list":s="Hide list",e.closest("tbody").find("tr:nth-child( "+t+" )").removeClass("hide").find("div").removeClass("hide"),$(".js-hide_subscribers_list").click(function(){var e=$(this),s=e.closest("tr").index(),s=parseInt(s);$(this).closest(".subscriber_list").addClass("hide").closest("tr").addClass("hide"),e.closest("tbody").find("tr:nth-child( "+s+" )").find(".js-show_list").text("View list")});break;case"Hide list":s="View list",e.closest("tbody").find("tr:nth-child( "+t+" )").addClass("hide").find("div").addClass("hide")}e.text(s)}),$(".btn_group .btn").click(function(){var e=$(this),s=e.closest(".btn_group").find(".btn");s.removeClass("current"),e.addClass("current")}),$(".js-sort").click(function(){var s=$(this),t=s.closest("div").find(".js-sort.frg-icon"),a=null,i=t.attr("data-field");t.addClass("holdup"),$(".js-sort.frg-icon").not(".holdup").removeClass("icon-arrow-up").addClass("icon-arrow-down"),t.hasClass("icon-arrow-down")?(t.removeClass("icon-arrow-down").removeClass("holdup").addClass("icon-arrow-up"),a=-1):t.hasClass("icon-arrow-up")&&(t.removeClass("icon-arrow-up").removeClass("holdup").addClass("icon-arrow-down"),a=1),e.sortTable(i,a)}),e.setupFilters(),$(".js-sort-by").change(function(){var e=$(this).val();$("nav.filter_nav").addClass("hide"),$("nav.filter_nav."+e).removeClass("hide")}),$(".browse_files .frg-input-field, .browse_files .frg-button").click(function(){e.getFile()}),$(".js-view_more").click(function(){var e=$(this),s=e.closest("div").find("ul");e.hasClass("closed")?(s.show("slow"),e.removeClass("closed").addClass("open").find(".text").text("Hide all").closest(".js-view_more").find(".frg-icon").addClass("icon-minus-circled").removeClass("icon-plus-circled")):e.hasClass("open")&&(s.hide("slow"),e.removeClass("open").addClass("closed").find(".text").text("View all").closest(".js-view_more").find(".frg-icon").addClass("icon-plus-circled").removeClass("icon-minus-circled"))}),$(".port select").change(function(){var e=$(this),s=e.closest("tr"),t=s.find(".account_nbr").find(".empty"),a=s.find(".account_nbr").find("input"),i=s.find(".existing_phone_nbr").find(".empty"),r=s.find(".existing_phone_nbr").find(".status"),n=s.find(".js-calling-city").find(".empty"),l=s.find(".js-calling-city").find("input"),o=s.find(".js-preferred-area-code").find(".empty"),d=s.find(".js-preferred-area-code").find(".frg-select-container");"yes"===e.val()?($(".account_nbr").removeClass("hide"),$(".existing_phone_nbr").removeClass("hide"),t.addClass("hide"),i.addClass("hide"),a.removeClass("hide"),r.removeClass("hide"),n.removeClass("hide"),l.addClass("hide"),o.removeClass("hide"),d.addClass("hide")):"no"===e.val()&&(t.removeClass("hide"),i.removeClass("hide"),a.addClass("hide"),r.addClass("hide"),n.addClass("hide"),l.removeClass("hide"),o.addClass("hide"),d.removeClass("hide"))}),$(".sim select").change(function(){var s=$(this),t=s.closest("tr").find(".sim_nbr").find(".empty"),a=s.closest("tr").find(".sim_nbr").find(".frg-select-container, .status");"0"===s.val()?($(".sim_nbr").removeClass("hide"),t.addClass("hide"),a.removeClass("hide")):(t.removeClass("hide"),a.addClass("hide")),e.setupDueNow()}),$(".frg-checkbox").click(function(){var e=$(this),s=e.find(".icon .frg-icon");s.hasClass("icon-checkmark")?s.removeClass("icon-checkmark"):s.addClass("icon-checkmark")}),$(".js-select-all").click(function(){var s=$(this),t=s.find("input[type=checkbox]"),a=t.is(":checked"),i=$(".frg-checkbox");i.each(function(){var s=$(this),t=s.find("input[type=checkbox]");s.hasClass("js-select-all")||(a?t.is(":checked")||e.selectCheckbox("select",s):t.is(":checked")&&e.selectCheckbox("deselect",s))})}),$(".edit_name").click(function(){var e=$(this),s=e.closest("p"),t=s.find(".group_name_container"),a=s.find("input");e.addClass("hide"),t.addClass("hide"),a.removeClass("hide").focus()}),$(".js-auto_save").keypress(function(s){var t=$(this),a=t.val(),i=t.closest("p"),r=i.find(".group_name_container"),n=i.find(".edit_name"),l=i.find(".group_name"),o=s.which||s.keyCode;13!=o&&9!=o||""===a||(t.addClass("hide"),n.removeClass("hide"),l.text(a),r.removeClass("hide")),e.ellipsis()}).blur(function(s){var t=$(this),a=t.val(),i=t.closest("p"),r=i.find(".group_name_container"),n=i.find(".edit_name"),l=i.find(".group_name"),o=s.which||s.keyCode;13!=o&&9!=o||""===a||(t.addClass("hide"),n.removeClass("hide"),l.text(a),r.removeClass("hide")),e.ellipsis()}),$(".plan .select").click(function(){var s=$(this),t=($(".plan"),$(".plan .frg-button.select")),a=s.closest(".plan"),i=a.find(".frg-button.select"),r=a.find("input[name=price_per_month]").val(),n=$(".monthly"),l=$("input[name=nbr_device]").val(),o=r*l;t.removeClass("current").text("Select"),i.addClass("current").text("Selected"),o=e.currencyFormat(o),n.text(o.substring(0,o.indexOf(".")))}),$(".service .select").click(function(){var e=$(this),s="Add service",t="Remove service";e.hasClass("current")?(e.removeClass("current"),e.is("input")?e.val(s):e.text(s)):(e.addClass("current"),e.is("input")?e.val(t):e.text(t))}),$(".advanced_import").click(function(){$("#myModal").modal()}),$(".js-previous").click(function(){var s=$(this),t=$(".current.page"),a=$(".current.page").prev(),i=$(".view_all");a.is("table")&&(i.addClass("hide"),a.length>0&&(t.removeClass("current").addClass("hide"),a.removeClass("hide").addClass("current")),a.prev().is("table")||s.text(" - "),e.setupPagination())}),$(".js-next").click(function(){var s=($(this),$(".current.page")),t=$(".current.page + .page"),a=$(".view_all"),i=$(".js-previous");t.is("table")&&(a.addClass("hide"),i.text("Previous 10"),t.length>0&&(s.removeClass("current").addClass("hide"),t.removeClass("hide").addClass("current")),e.setupPagination())}),$(".js-view_all").click(function(){var s=$(".page"),t=$(".page.current");if(0===t.length&&(t=$(".current")),t.is("table")){var a=$(".view_all"),i=s.find("tbody tr").clone();s.addClass("hide").removeClass("current"),a.removeClass("hide").addClass("current").find("tbody").html(i)}else s.removeClass("current").removeClass("hide");e.setupPagination()}),$(".js-phone_nbr").blur(function(){var e=$(this),s=e.closest(".input_error_tooltip"),t=!1;t||s.addClass("error")}),$(".js-quantity").keyup(function(){var e=$(this),s=e.val(),t=e.attr("data-num")||null,a=e.closest(".status"),i=a.closest(".accessory").find(".frg-button"),r=a.closest("section").closest("div").find(".frg-button.color-green"),n=parseInt(a.find(".js-max_quantity").val()),l=null!==t?$("span.status[data-num="+t+"]"):$("span.status");if($.isNumeric(s))if(s>n){var o=0===n?"sorry, this item is not available at the moment":"The quantity you are trying to order is on back order. Please try reducing the quantity until the indicator changes to available";a.removeClass("positive").addClass("negative").find(".tooltip_bubble span").text(o),i.addClass("state-disabled"),r.addClass("state-disabled"),l.removeClass("positive").addClass("negative").text("Back order")}else a.removeClass("negative").addClass("positive"),i.removeClass("state-disabled"),i.hasClass("added")?i.text("Update"):i.text("Add to cart"),r.removeClass("state-disabled").text("Add to cart"),l.removeClass("negative").addClass("positive").text("Available");else i.addClass("state-disabled"),r.addClass("state-disabled"),""!==s?(l.removeClass("positive").addClass("negative").text("Invalid entry"),a.removeClass("positive").addClass("negative").find(".tooltip_bubble span").text("please, enter a valid number")):0!==n&&(a.removeClass("negative").addClass("positive"),l.text(""))}),$(".js-validate_number").keyup(function(){var e=$(this),s=e.val(),t=e.closest(".status"),a=t.find(".tooltip_bubble span");""===s||$.isNumeric(s)?t.removeClass("negative").addClass("positive"):(t.removeClass("positive").addClass("negative"),a.text("Please, enter a valid number"))}),$(".js-form-complete").keyup(function(){e.formCompleted()}).click(function(){e.formCompleted()}),$(".existing_phone_nbr .js-phone_input_mask").blur(function(){var s=$(this);e.portabilityCheck()?s.closest(".status").removeClass("negative").addClass("positive"):s.closest(".status").removeClass("positive").addClass("negative")}),$(".js-cities-auto-complete").keyup(function(){var s=$(this),t=s.val(),a=[],i=s.parent().find(".js-auto-complete-results");if(t.length>=3)for(var r=0;r<e.cities.length;r++)-1!==e.cities[r].value.toLowerCase().indexOf(t)&&a.push(e.cities[r]);if(i.text(""),a.length>0){i.removeClass("hide");for(var r=0;r<a.length;r++)i.append('<a class="block js-auto-complete-result" data-areacodes="'+a[r].data+'" href="#">'+a[r].value+"</a>")}else i.addClass("hide");$(".js-auto-complete-result").click(function(e){var s=$(this),t=s.parent(),a=t.parent().find(".js-cities-auto-complete"),i=s.closest("tr").find(".js-area-codes"),r=$(".subscriber_mobile_row .js-area-codes"),n=s.attr("data-areacodes");e.preventDefault(),t.text("").addClass("hide"),a.val(s.text().toLowerCase()),n=n.split(","),i.text(""),r.text("");for(var l=0;l<n.length;l++)i.append('<option value="'+n[l]+'">'+n[l]+"</option>"),r.append('<option value="'+n[l]+'">'+n[l]+"</option>")})}),$(".js-cities-auto-complete").blur(function(){var s=$(this);e.callingCityCheck(s)||s.val("")}),$(".advanced_search_table input, .advanced_search_table select").keyup(function(){e.validateSearchForm()}).change(function(){e.validateSearchForm()}),$(".js-loading").click(function(){var e=$(".js-loaded-content"),s=$(".js-loading-spinner");e.addClass("hide"),s.removeClass("hide"),setTimeout(function(){e.removeClass("hide"),s.addClass("hide")},5e3)}),$(".js-phone_input_mask").keyup(function(){var e=($(this),$(".js-validated_options"));-1===$(this).val().indexOf("_")?e.removeClass("state-disabled"):e.addClass("state-disabled")}),$(".js-filter-service-category").change(function(){var e=$(this).val(),s=$(".phone");"select"===e.toLowerCase()?s.each(function(){$(this).closest(".js-element").removeClass("hide")}):s.each(function(){var s=$(this),t=s.closest(".js-element"),a=s.attr("data-filter");-1!==a.indexOf(e)?t.removeClass("hide"):t.addClass("hide")})}),$(".js-not-empty").blur(function(){var s=$(this);""===s.val()?(s.closest(".status").removeClass("positive").addClass("negative").find(".frg-icon").removeClass("icon-checkmark-inverted").addClass("icon-warning-inverted"),e.formEntriesValid=!1):(s.closest(".status").removeClass("negative").addClass("positive").find(".frg-icon").removeClass("icon-warning-inverted").addClass("icon-checkmark-inverted"),e.formEntriesValid=!0)}),$(".js-email_validation").blur(function(){var s=$(this);e.validateEmail(s.val())?(s.closest(".status").removeClass("negative").addClass("positive"),s.closest(".status").find(".frg-icon").addClass("icon-checkmark-inverted").removeClass("icon-warning-inverted"),e.formEntriesValid=!0):(s.closest(".status").removeClass("positive").addClass("negative").find(".tooltip_bubble").text("Please, enter a valid email address"),s.closest(".status").find(".frg-icon").removeClass("icon-checkmark-inverted").addClass("icon-warning-inverted"),e.formEntriesValid=!1)}),$(".js-match-validation").blur(function(){var s=$(".js-match-validation"),t=$("input[name=email2]");""!==$(s[0]).val()&&""!==$(s[1]).val()&&($(s[0]).val()!==$(s[1]).val()?(t.closest(".status").removeClass("positive").addClass("negative").find(".tooltip_bubble").text("The emails you entered do not match.").closest(".status").find(".frg-icon").removeClass("icon-checkmark-inverted").addClass("icon-warning-inverted"),e.formEntriesValid=!1):(t.closest(".status").removeClass("negative").addClass("positive").closest(".status").find(".frg-icon").addClass("icon-checkmark-inverted").removeClass("icon-warning-inverted"),e.formEntriesValid=!0))}),$(".js-required").keyup(function(s){e.checkRequiredField(s)}).change(function(s){e.checkRequiredField(s)}),$(".js-more").click(function(){var e=$(".dep_accounts");e.append('<div class="row lenght70 top_margin20"><div class="col-xs-6"><label class="block devil_gray_text">DEP number</label><input class="frg-input-field full_width" /></div><div class="col-xs-6"><label class="block devil_gray_text">Description</label><input class="frg-input-field full_width" /></div></div>')}),$(".frg-checkbox.js-pricepoint").click(function(){var e=$(this),s=$(".js-hide-not-device-only"),t=$(".js-show-not-device-only"),a=$(".changeling"),i=s.find(".js-required");e.hasClass("js-device-only")?(s.hide(),t.removeClass("hide"),a.removeClass("halfwidth").addClass("full_width"),i.removeClass("js-required").addClass("js-required-hold")):(s.show(),t.addClass("hide"),a.removeClass("full_width").addClass("halfwidth"),i.addClass("js-required").removeClass("js-required-hold"))}),$(".js-incomplete").click(function(s){var t=$(this),a="error",i="Highlighted fields are required.",r="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse fringilla scelerisque mi, eget commodo justo euismod eu. Mauris nec scelerisque tortor, vel volutpat sapien.",n=$(".error_message"),l=$(".error_message_container"),o=$(".js-required");t.hasClass("js-incomplete")&&0!==l.length&&0!==o.length&&(s.preventDefault(),0===n.length?e.checkRequiredField(s).displayErrorMessage(a,i,r).scrollTo(l,15,1e3):e.scrollTo(l,15,1e3))}),$(".js-select-at-least-one").click(function(){var e=$(".js-select-at-least-one"),s=$(".js-submit"),t=!1;e.each(function(){var e=$(this);e.find(".frg-icon").hasClass("icon-checkmark")&&(t=!0)}),t?s.removeClass("state-disabled"):s.addClass("state-disabled")}),$(".js-delete-row").click(function(){var e=$(".frg-checkbox .icon-checkmark"),s=e.closest("tr"),t=s.next();s.remove(),t.remove()}),$(".js-unique").blur(function(){e.checkForDuplicates()}),$(".js-duplicates").click(function(){var s=$(".error_message_container"),t=$(".js-unique");if(0!==s.length&&0!==t.length&&(e.checkForDuplicates(),$(this).hasClass("js-active"))){var a=$("[data-duplicate=true]"),i="error",r="there's duplicates",n="Lorem ipsum";a.addClass("js-error").addClass("show_errors"),e.displayErrorMessage(i,r,n).scrollTo(s,15,1e3)}}),$(".js-clear-cart").click(function(){$("#clearCart").modal()}),$(".js-confirm-clear-cart").click(function(){console.info("clear cart")}),$(".js-display-overlay").click(function(){e.displayOverlay($(this))}),e},start:function(){var e=this;return target2=$(".spinner2").get(0),e.spinner2=new Spinner(e.opts2).spin(target2),e.startSpinner(),e},stop:function(){var e=this;return e.stopSpinner(),e.spinner2.stop(),e},startSpinner:function(){var e=this;return $.LoadingOverlay("show"),e},stopSpinner:function(){var e=this;return $.LoadingOverlay("hide"),e},selectCheckbox:function(e,s){"select"===e?s.find("input[type=checkbox]").prop("checked",!0).closest(".inner").find(".frg-icon").addClass("icon-checkmark"):"deselect"===e&&s.find("input[type=checkbox]").prop("checked",!1).closest(".inner").find(".frg-icon").removeClass("icon-checkmark")},scrollTo:function(e,s,t){$("html, body").animate({scrollTop:e.offset().top-s},t)},checkForDuplicates:function(){var e=this,s=$(".js-unique"),t=$(".frg-button"),a=!1,i=0;return s.removeAttr("data-duplicate"),s.each(function(){var e=$(this),t=0,r=0;s.each(function(){var s=$(this);""!==e.val()&&""!==s.val()&&e.val()===s.val()&&i!==r&&(t++,e.attr("data-duplicate","true"),s.attr("data-duplicate","true")),r++}),i++,t>0&&(a=!0)}),a?t.addClass("js-active"):t.removeClass("js-active"),e},checkRequiredField:function(e){var s=this,t=$(e.target).closest(".js-all-required-fields").length>0?$(e.target).closest(".js-all-required-fields"):$(".js-all-required-fields"),a=t.hasClass("disable"),i=t.find(".js-required"),r=t.find(".js-submit"),n=!0,l=t.find("input[type=radio].js-required"),o=!(l.length>0),d=$(".error_message_container");return d.empty(),i.removeClass("js-error").removeClass("show_errors").each(function(){var e=$(this);l.each(function(){$(this).is(":checked")&&(o=!0)}),null===e.val()||""===e.val()||"select"===e.val().toLowerCase()||-1!==e.val().indexOf("_")?(n=!1,e.addClass("js-error")):e.hasClass("js-quantity")&&e.parent().hasClass("status")&&e.parent().hasClass("negative")&&(n=!1,e.addClass("js-error"))}),n&&o&&s.formEntriesValid?(a?r.removeClass("state-disabled"):r.removeClass("js-incomplete"),d.empty()):a?r.addClass("state-disabled"):r.addClass("js-incomplete"),s},validateSearchForm:function(){var e=$(".advanced_search_table input, .advanced_search_table select"),s=$(".advanced_search_table .status"),t=$(".advanced_search_table .frg-button"),a=!1;e.each(function(){""!==$(this).val()&&"Select"!==$(this).val()&&(a=!0)}),s.each(function(){$(this).hasClass("negative")&&(a=!1)}),a?t.removeClass("state-disabled"):t.addClass("state-disabled")},portabilityCheck:function(){return!1},callingCityCheck:function(e){for(var s=this,t=e.val(),a=0;a<s.cities.length;a++)if(t.toLowerCase()===s.cities[a].value.toLowerCase())return!0;return!1},autoSave:function(e){var s=$(this),t=s.val(),a=s.closest("p"),i=a.find(".edit_name"),r=a.find("span, strong"),n=e.which||e.keyCode;13!=n&&9!=n||""===t||(s.addClass("hide"),i.removeClass("hide"),r.text(t).removeClass("hide"))},formCompleted:function(){var e=$(".js-form-complete"),s=!0,t=!1,a=$(".frg-button");e.each(function(){var e=$(this);"text"===e.attr("type")&&(""!==e.val()&&-1===e.val().indexOf("_")||(s=!1)),"radio"===e.attr("type")&&e.is(":checked")&&(t=!0)}),s||t?a.removeClass("state-disabled"):a.addClass("state-disabled")},setupFilters:function(){var e=this;$(".js-filter").click(function(){var s=$(this),t=$("nav ul li .js-filter"),a=$(".js-applied_filter");s.hasClass("btn")||(t.removeClass("current"),s.addClass("current"));var i=$("nav ul li .js-filter.current"),r=i.attr("data-filter"),n=i.attr("data-specific-spelling"),l=void 0!==n?n:e.capitalizeFirstLetter(r.replace("_"," ")),o=$(".js-filter.btn.current"),d=1===o.length?o.attr("data-filter"):null,c=$(".object");"plans"===e.currentPage||"devices"===e.currentPage?c.closest(".js-element").show():c.show(),a.text(l),c.each(function(){var s=$(this);"all"===r?null!==d&&-1!==s.attr("data-filter").indexOf(d)?"plans"===e.currentPage||"devices"===e.currentPage?s.closest(".js-element").show():s.show():null!==d&&-1===s.attr("data-filter").indexOf(d)?"plans"===e.currentPage||"devices"===e.currentPage?s.closest(".js-element").hide():s.hide():null===d&&("plans"===e.currentPage||"devices"===e.currentPage?s.closest(".js-element").show():s.show()):(-1===s.attr("data-filter").indexOf(r)||null!==d&&-1===s.attr("data-filter").indexOf(d))&&("plans"===e.currentPage||"devices"===e.currentPage?s.closest(".js-element").hide():s.hide())}),"accessories"===e.currentPage&&e.rearrangeSeparators()})},getFile:function(){$(".upfile").click()},capitalizeFirstLetter:function(e){return e.charAt(0).toUpperCase()+e.slice(1)},rearrangeSeparators:function(){$(".object").removeClass("separator").addClass("separator"),$(".object:visible:first").removeClass("separator"),$(".object:visible").each(function(e){e%3===0&&$(this).removeClass("separator")})},sortTable:function(e,s){var t,a,i,r,n=document.getElementById("sortable"),l=n.rows,o=l.length,d=new Array;for(t=0;o>t;t++)for(i=l[t].cells,r=i.length,d[t]=new Array,a=0;r>a;a++)d[t][a]=i[a].innerHTML;for(d.sort(function(t,a){return t[e]==a[e]?0:t[e]>a[e]?s:-1*s}),t=0;o>t;t++)l[t].innerHTML="<td>"+d[t].join("</td><td>")+"</td>"},displayErrorMessage:function(e,s,t){var a=this,i=$(".error_message_container"),r=$(".js-error"),n=null;switch(e){case"error":case"warning":n="icon-warning-inverted"}return i.append('<div class="error_message bottom_margin20 '+e+' clearfix"><a class="close right" href="#"><span class="frg-icon icon-x-circled"></span></a><div class="content clearfix"><div class="frg-icon '+n+' left"></div><div class="text left"><div class="h3 title"><strong>'+s+'</strong></div><span class="text">'+t+"</span></div></div></div>"),r.addClass("show_errors"),$(".error_message .close").click(function(){$(this).closest(".error_message").fadeOut()}),a},showFakeLinks:function(){var e=this;return $('a[href="#"]').css(e.highlight),e},stickyFooter:function(){function e(){s=a.height(),footerTopInt=$(window).scrollTop()+$(window).height()-s,t=footerTopInt+"px";footerTopInt<i?a.addClass("sticky"):a.removeClass("sticky")}var s=0,t=0,a=$(".stickyFooter"),i=a.length?a[0].offsetTop:null;null!==i&&e(),$(window).scroll(e).resize(e)},getPhones:function(){var e=this;return"devices"===e.currentPage&&$.ajax({url:"http://www.telus.com/services/cms/page/"+e.lang+"/bc/mobility/devices"}).done(function(s){e.phones=s.devices,$.each(e.phones,function(s,t){var a="";a+='<div class="box phone object clearfix left" data-filter="all voice_only">',a+='	<div class="image left">',a+='		<a href="device.php">';for(var s=0;s<t.variants.length;s++){var i=0===s?"":" hide";a+='			<img class="js-'+t.variants[s].id+i+'" src="'+t.variants[s].image_url+'" alt="'+t.variants[s].color_name+'" />'}a+="		</a>",a+='		<div class="device__variant-container">';for(var s=0;s<t.variants.length;s++)a+='			<button class="device-color-button device__variant-item" data-lang="en" data-sku="'+t.variants[s].id+'" aria-label="'+t.variants[s].color_name+'">',a+='				<span class="frg-icon icon-circle-solid" style="color: '+t.variants[s].color_hex+'"></span>',a+="			</button>";a+="		</div>",a+="	</div>",a+='	<div class="description right">',a+='		<div class="name">',a+="			<div>",a+='				<h6><a href="device.php">'+t.name+"</a></h6>",a+="			</div>",a+='			<div class="status positive">Available</div>',a+="		</div>",a+='		<div class="prices">',a+='			<div class="no-term left">',a+="				<h4>$200</h4>",a+='				<span class="time_period">No term</span>',a+="			</div>",a+='			<div class="long-term right">',a+="				<h4>$50</h4>",a+='				<span class="time_period">3-year term</span>',a+="			</div>",a+='			<div class="clear"></div>',a+="		</div>",a+='		<div class="mtm">',a+='			<div class="gray_text">$230 Monthly</div>',a+='			<a class="frg-button" href="device.php">Select</a>',a+="		</div>",a+="	</div>",a+='	<div class="clear"></div>',a+="</div>",$(".phones").append(a),e.showVariants()})}),e},showVariants:function(){var e=this;return $(".device-color-button").click(function(){var e=$(this),s=e.attr("data-sku"),t=e.closest(".image, .object"),a=t.find(".js-"+s),i=t.find("img");i.addClass("hide"),a.removeClass("hide")}),e},setupPagination:function(){var e=this,s=$(".paging_display"),t=s.find(".from"),a=s.find(".to"),i=$(".js-next"),r=null,n=s.find(".total"),l=$(".page"),o=l.find("tbody tr"),d=$(".page.current");return 0===d.length&&(d=$(".view_all.current")),t.text(parseInt(d.attr("data-from"))+1),a.text(parseInt(d.attr("data-from"))+d.find("tbody tr").length),n.text(o.length),r=parseInt(n.text())-parseInt(a.text())>10?10:parseInt(n.text())-parseInt(a.text()),r>0?i.text("Next "+r):i.text(" - "),e},ellipsis:function(){var e=this,s=$(".js-ellipsis");return s.each(function(){var e=$(this),s=e.attr("data-maxlen");e.text().trim().length>s&&e.text(e.text().trim().substr(0,parseInt(s)-3)+"...")}),e},setupDueNow:function(){var e=this,s=parseInt($("[name=base_total]").val()),t=$(".sim select"),a=0,i=$("p.now");return t.each(function(){a+=parseInt($(this).val())}),$.isNumeric(s)&&$.isNumeric(a)&&i.text(e.currencyFormat(s+a)),e},currencyFormat:function(e){return"$"+parseFloat(e,10).toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g,"$1,").toString()},validateEmail:function(e){var s=/^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;return s.test(e)},setupInputMasks:function(){var e=this;return $.mask.definitions["~"]="[+-]",$(".js-phone_input_mask").mask("(999) 999-9999"),$(".js-postalcode_input_mask").mask("a9a 9a9"),e},displayOverlay:function(e){var s=this;return s.start(),setTimeout(function(){s.stop();var t=e.closest(".bottom_section"),a=t.find(".js-quantity").val();$.isNumeric(a)&&a>0?e.addClass("current").addClass("added").text("Update"):$.isNumeric(a)&&0==a&&e.removeClass("current").removeClass("added").text("Add to cart")},3e3),s},check_image_availability:function(){var e=this,s=$(".js-check-availability"),t="img/no-image-available.jpg";return s.each(function(){var e=$(this);$.get(e.attr("src")).fail(function(){e.attr("src",t).addClass("replacement_img")})}),e}};