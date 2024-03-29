/*
    A simple jQuery modal (http://github.com/kylefox/jquery-modal)
    Version 0.6.1
*/
! function(o) {
    var t = null;
    o.modal = function(e, i) {
        o.modal.close();
        var s, l;
        if (this.$body = o("body"), this.options = o.extend({}, o.modal.defaults, i), this.options.doFade = !isNaN(parseInt(this.options.fadeDuration, 10)), e.is("a"))
            if (l = e.attr("href"), /^#/.test(l)) {
                if (this.$elm = o(l), 1 !== this.$elm.length) return null;
                this.$body.append(this.$elm), this.open()
            } else this.$elm = o("<div>"), this.$body.append(this.$elm), s = function(o, t) {
                t.elm.remove()
            }, this.showSpinner(), e.trigger(o.modal.AJAX_SEND), o.get(l).done(function(i) {
                t && (e.trigger(o.modal.AJAX_SUCCESS), t.$elm.empty().append(i).on(o.modal.CLOSE, s), t.hideSpinner(), t.open(), e.trigger(o.modal.AJAX_COMPLETE))
            }).fail(function() {
                e.trigger(o.modal.AJAX_FAIL), t.hideSpinner(), e.trigger(o.modal.AJAX_COMPLETE)
            });
        else this.$elm = e, this.$body.append(this.$elm), this.open()
    }, o.modal.prototype = {
        constructor: o.modal,
        open: function() {
            var t = this;
            this.options.doFade ? (this.block(), setTimeout(function() {
                t.show()
            }, this.options.fadeDuration * this.options.fadeDelay)) : (this.block(), this.show()), this.options.escapeClose && o(document).on("keydown.modal", function(t) {
                27 == t.which && o.modal.close()
            }), this.options.clickClose && this.blocker.click(function(t) {
                t.target == this && o.modal.close()
            })
        },
        close: function() {
            this.unblock(), this.hide(), o(document).off("keydown.modal")
        },
        block: function() {
            this.$elm.trigger(o.modal.BEFORE_BLOCK, [this._ctx()]), this.blocker = o('<div class="jquery-modal blocker"></div>'), this.$body.css("overflow", "hidden"), this.$body.append(this.blocker), this.options.doFade && this.blocker.css("opacity", 0).animate({
                opacity: 1
            }, this.options.fadeDuration), this.$elm.trigger(o.modal.BLOCK, [this._ctx()])
        },
        unblock: function() {
            if (this.options.doFade) {
                var o = this;
                this.blocker.fadeOut(this.options.fadeDuration, function() {
                    o.blocker.children().appendTo(o.$body), o.blocker.remove(), o.$body.css("overflow", "")
                })
            } else this.blocker.children().appendTo(this.$body), this.blocker.remove(), this.$body.css("overflow", "")
        },
        show: function() {
            this.$elm.trigger(o.modal.BEFORE_OPEN, [this._ctx()]), this.options.showClose && (this.closeButton = o('<a href="#close-modal" rel="modal:close" class="close-modal ' + this.options.closeClass + '">' + this.options.closeText + "</a>"), this.$elm.append(this.closeButton)), this.$elm.addClass(this.options.modalClass + " current"), this.$elm.appendTo(this.blocker), this.options.doFade ? this.$elm.css("opacity", 0).show().animate({
                opacity: 1
            }, this.options.fadeDuration) : this.$elm.show(), this.$elm.trigger(o.modal.OPEN, [this._ctx()])
        },
        hide: function() {
            this.$elm.trigger(o.modal.BEFORE_CLOSE, [this._ctx()]), this.closeButton && this.closeButton.remove(), this.$elm.removeClass("current");
            var t = this;
            this.options.doFade ? this.$elm.fadeOut(this.options.fadeDuration, function() {
                t.$elm.trigger(o.modal.AFTER_CLOSE, [t._ctx()])
            }) : this.$elm.hide(0, function() {
                t.$elm.trigger(o.modal.AFTER_CLOSE, [t._ctx()])
            }), this.$elm.trigger(o.modal.CLOSE, [this._ctx()])
        },
        showSpinner: function() {
            this.options.showSpinner && (this.spinner = this.spinner || o('<div class="' + this.options.modalClass + '-spinner"></div>').append(this.options.spinnerHtml), this.$body.append(this.spinner), this.spinner.show())
        },
        hideSpinner: function() {
            this.spinner && this.spinner.remove()
        },
        _ctx: function() {
            return {
                elm: this.$elm,
                blocker: this.blocker,
                options: this.options
            }
        }
    }, o.modal.close = function(o) {
        if (t) {
            o && o.preventDefault(), t.close();
            var e = t.$elm;
            return t = null, e
        }
    }, o.modal.isActive = function() {
        return t ? !0 : !1
    }, o.modal.defaults = {
        escapeClose: !0,
        clickClose: !0,
        closeText: "Close",
        closeClass: "",
        modalClass: "modal",
        spinnerHtml: null,
        showSpinner: !0,
        showClose: !0,
        fadeDuration: null,
        fadeDelay: 1
    }, o.modal.BEFORE_BLOCK = "modal:before-block", o.modal.BLOCK = "modal:block", o.modal.BEFORE_OPEN = "modal:before-open", o.modal.OPEN = "modal:open", o.modal.BEFORE_CLOSE = "modal:before-close", o.modal.CLOSE = "modal:close", o.modal.AFTER_CLOSE = "modal:after-close", o.modal.AJAX_SEND = "modal:ajax:send", o.modal.AJAX_SUCCESS = "modal:ajax:success", o.modal.AJAX_FAIL = "modal:ajax:fail", o.modal.AJAX_COMPLETE = "modal:ajax:complete", o.fn.modal = function(e) {
        return 1 === this.length && (t = new o.modal(this, e)), this
    }, o(document).on("click.modal", 'a[rel="modal:close"]', o.modal.close), o(document).on("click.modal", 'a[rel="modal:open"]', function(t) {
        t.preventDefault(), o(this).modal()
    })
}(jQuery);