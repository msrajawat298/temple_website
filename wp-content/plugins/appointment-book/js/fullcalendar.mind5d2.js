/*!
 * FullCalendar v2.1.1
 * Docs & License: http://arshaw.com/fullcalendar/
 * (c) 2013 Adam Shaw
 */
(function(t) {
    "function" == typeof define && define.amd ? define(["jquery", "moment"], t) : t(jQuery, moment)
})(function(t, e) {
    function i(t, e) {
        return e.longDateFormat("LT").replace(":mm", "(:mm)").replace(/(\Wmm)$/, "($1)").replace(/\s*a$/i, "t")
    }

    function n(t, e) {
        var i = e.longDateFormat("L");
        return i = i.replace(/^Y+[^\w\s]*|[^\w\s]*Y+$/g, ""), t.isRTL ? i += " ddd" : i = "ddd " + i, i
    }

    function r(t) {
        o(De, t)
    }

    function o(e) {
        function i(i, n) {
            t.isPlainObject(n) && t.isPlainObject(e[i]) && !s(i) ? e[i] = o({}, e[i], n) : void 0 !== n && (e[i] = n)
        }
        for (var n = 1; arguments.length > n; n++) t.each(arguments[n], i);
        return e
    }

    function s(t) {
        return /(Time|Duration)$/.test(t)
    }

    function l(i, n) {
        function r(t) {
            var i = e.localeData || e.langData;
            return i.call(e, t) || i.call(e, "en")
        }

        function s(t) {
            ie ? h() && (p(), f(t)) : l()
        }

        function l() {
            ne = K.theme ? "ui" : "fc", i.addClass("fc"), K.isRTL ? i.addClass("fc-rtl") : i.addClass("fc-ltr"), K.theme ? i.addClass("ui-widget") : i.addClass("fc-unthemed"), ie = t("<div class='fc-view-container'/>").prependTo(i), te = new a(q, K), ee = te.render(), ee && i.prepend(ee), u(K.defaultView), K.handleWindowResize && (se = L(v, K.windowResizeDelay), t(window).resize(se))
        }

        function d() {
            re && re.destroy(), te.destroy(), ie.remove(), i.removeClass("fc fc-ltr fc-rtl fc-unthemed ui-widget"), t(window).unbind("resize", se)
        }

        function h() {
            return i.is(":visible")
        }

        function u(t) {
            f(0, t)
        }

        function f(e, i) {
            he++, re && i && re.name !== i && (te.deactivateButton(re.name), I(), re.start && re.destroy(), re.el.remove(), re = null), !re && i && (re = new xe[i](q), re.el = t("<div class='fc-view fc-" + i + "-view' />").appendTo(ie), te.activateButton(i)), re && (e && (le = re.incrementDate(le, e)), re.start && !e && le.isWithin(re.intervalStart, re.intervalEnd) || h() && (I(), re.start && re.destroy(), re.render(le), Z(), C(), x(), b())), Z(), he--
        }

        function g(t) {
            return h() ? (t && m(), he++, re.updateSize(!0), he--, !0) : void 0
        }

        function p() {
            h() && m()
        }

        function m() {
            oe = "number" == typeof K.contentHeight ? K.contentHeight : "number" == typeof K.height ? K.height - (ee ? ee.outerHeight(!0) : 0) : Math.round(ie.width() / Math.max(K.aspectRatio, .5))
        }

        function v(t) {
            !he && t.target === window && re.start && g(!0) && re.trigger("windowResize", de)
        }

        function y() {
            E(), S()
        }

        function w() {
            h() && (I(), re.destroyEvents(), re.renderEvents(ue), Z())
        }

        function E() {
            I(), re.destroyEvents(), Z()
        }

        function b() {
            !K.lazyFetching || ae(re.start, re.end) ? S() : w()
        }

        function S() {
            ce(re.start, re.end)
        }

        function D(t) {
            ue = t, w()
        }

        function T() {
            w()
        }

        function C() {
            te.updateTitle(re.title)
        }

        function x() {
            var t = q.getNow();
            t.isWithin(re.intervalStart, re.intervalEnd) ? te.disableButton("today") : te.enableButton("today")
        }

        function k(t, e) {
            t = q.moment(t), e = e ? q.moment(e) : t.hasTime() ? t.clone().add(q.defaultTimedEventDuration) : t.clone().add(q.defaultAllDayEventDuration), re.select(t, e)
        }

        function M() {
            re && re.unselect()
        }

        function R() {
            f(-1)
        }

        function P() {
            f(1)
        }

        function G() {
            le.add(-1, "years"), f()
        }

        function N() {
            le.add(1, "years"), f()
        }

        function Y() {
            le = q.getNow(), f()
        }

        function A(t) {
            le = q.moment(t), f()
        }

        function _(t) {
            le.add(e.duration(t)), f()
        }

        function O(t, e) {
            var i, n;
            e && void 0 !== xe[e] || (e = e || "day", i = te.getViewsWithButtons().join(" "), n = i.match(RegExp("\\w+" + z(e))), n || (n = i.match(/\w+Day/)), e = n ? n[0] : "agendaDay"), le = t, u(e)
        }

        function F() {
            return le.clone()
        }

        function I() {
            ie.css({
                width: "100%",
                height: ie.height(),
                overflow: "hidden"
            })
        }

        function Z() {
            ie.css({
                width: "",
                height: "",
                overflow: ""
            })
        }

        function B() {
            return q
        }

        function j() {
            return re
        }

        function X(t, e) {
            return void 0 === e ? K[t] : (("height" == t || "contentHeight" == t || "aspectRatio" == t) && (K[t] = e, g(!0)), void 0)
        }

        function $(t, e) {
            return K[t] ? K[t].apply(e || de, Array.prototype.slice.call(arguments, 2)) : void 0
        }
        var q = this;
        n = n || {};
        var U, K = o({}, De, n);
        U = K.lang in Te ? Te[K.lang] : Te[De.lang], U && (K = o({}, De, U, n)), K.isRTL && (K = o({}, De, Ce, U || {}, n)), q.options = K, q.render = s, q.destroy = d, q.refetchEvents = y, q.reportEvents = D, q.reportEventChange = T, q.rerenderEvents = w, q.changeView = u, q.select = k, q.unselect = M, q.prev = R, q.next = P, q.prevYear = G, q.nextYear = N, q.today = Y, q.gotoDate = A, q.incrementDate = _, q.zoomTo = O, q.getDate = F, q.getCalendar = B, q.getView = j, q.option = X, q.trigger = $;
        var Q = H(r(K.lang));
        if (K.monthNames && (Q._months = K.monthNames), K.monthNamesShort && (Q._monthsShort = K.monthNamesShort), K.dayNames && (Q._weekdays = K.dayNames), K.dayNamesShort && (Q._weekdaysShort = K.dayNamesShort), null != K.firstDay) {
            var J = H(Q._week);
            J.dow = K.firstDay, Q._week = J
        }
        q.defaultAllDayEventDuration = e.duration(K.defaultAllDayEventDuration), q.defaultTimedEventDuration = e.duration(K.defaultTimedEventDuration), q.moment = function() {
            var t;
            return "local" === K.timezone ? (t = He.moment.apply(null, arguments), t.hasTime() && t.local()) : t = "UTC" === K.timezone ? He.moment.utc.apply(null, arguments) : He.moment.parseZone.apply(null, arguments), "_locale" in t ? t._locale = Q : t._lang = Q, t
        }, q.getIsAmbigTimezone = function() {
            return "local" !== K.timezone && "UTC" !== K.timezone
        }, q.rezoneDate = function(t) {
            return q.moment(t.toArray())
        }, q.getNow = function() {
            var t = K.now;
            return "function" == typeof t && (t = t()), q.moment(t)
        }, q.calculateWeekNumber = function(t) {
            var e = K.weekNumberCalculation;
            return "function" == typeof e ? e(t) : "local" === e ? t.week() : "ISO" === e.toUpperCase() ? t.isoWeek() : void 0
        }, q.getEventEnd = function(t) {
            return t.end ? t.end.clone() : q.getDefaultEventEnd(t.allDay, t.start)
        }, q.getDefaultEventEnd = function(t, e) {
            var i = e.clone();
            return t ? i.stripTime().add(q.defaultAllDayEventDuration) : i.add(q.defaultTimedEventDuration), q.getIsAmbigTimezone() && i.stripZone(), i
        }, q.formatRange = function(t, e, i) {
            return "function" == typeof i && (i = i.call(q, K, Q)), W(t, e, i, null, K.isRTL)
        }, q.formatDate = function(t, e) {
            return "function" == typeof e && (e = e.call(q, K, Q)), V(t, e)
        }, c.call(q, K);
        var te, ee, ie, ne, re, oe, se, le, ae = q.isFetchNeeded,
            ce = q.fetchEvents,
            de = i[0],
            he = 0,
            ue = [];
        le = null != K.defaultDate ? q.moment(K.defaultDate) : q.getNow(), q.getSuggestedViewHeight = function() {
            return void 0 === oe && p(), oe
        }, q.isHeightAuto = function() {
            return "auto" === K.contentHeight || "auto" === K.height
        }
    }

    function a(e, i) {
        function n() {
            var e = i.header;
            return f = i.theme ? "ui" : "fc", e ? g = t("<div class='fc-toolbar'/>").append(o("left")).append(o("right")).append(o("center")).append('<div class="fc-clear"/>') : void 0
        }

        function r() {
            g.remove()
        }

        function o(n) {
            var r = t('<div class="fc-' + n + '"/>'),
                o = i.header[n];
            return o && t.each(o.split(" "), function() {
                var n, o = t(),
                    s = !0;
                t.each(this.split(","), function(n, r) {
                    var l, a, c, d, h, u, g, m;
                    "title" == r ? (o = o.add(t("<h2>&nbsp;</h2>")), s = !1) : (e[r] ? l = function() {
                        e[r]()
                    } : xe[r] && (l = function() {
                        e.changeView(r)
                    }, p.push(r)), l && (a = S(i.themeButtonIcons, r), c = S(i.buttonIcons, r), d = S(i.defaultButtonText, r), h = S(i.buttonText, r), u = h ? R(h) : a && i.theme ? "<span class='ui-icon ui-icon-" + a + "'></span>" : c && !i.theme ? "<span class='fc-icon fc-icon-" + c + "'></span>" : R(d || r), g = ["fc-" + r + "-button", f + "-button", f + "-state-default"], m = t('<button type="button" class="' + g.join(" ") + '">' + u + "</button>").click(function() {
                        m.hasClass(f + "-state-disabled") || (l(), (m.hasClass(f + "-state-active") || m.hasClass(f + "-state-disabled")) && m.removeClass(f + "-state-hover"))
                    }).mousedown(function() {
                        m.not("." + f + "-state-active").not("." + f + "-state-disabled").addClass(f + "-state-down")
                    }).mouseup(function() {
                        m.removeClass(f + "-state-down")
                    }).hover(function() {
                        m.not("." + f + "-state-active").not("." + f + "-state-disabled").addClass(f + "-state-hover")
                    }, function() {
                        m.removeClass(f + "-state-hover").removeClass(f + "-state-down")
                    }), o = o.add(m)))
                }), s && o.first().addClass(f + "-corner-left").end().last().addClass(f + "-corner-right").end(), o.length > 1 ? (n = t("<div/>"), s && n.addClass("fc-button-group"), n.append(o), r.append(n)) : r.append(o)
            }), r
        }

        function s(t) {
            g.find("h2").text(t)
        }

        function l(t) {
            g.find(".fc-" + t + "-button").addClass(f + "-state-active")
        }

        function a(t) {
            g.find(".fc-" + t + "-button").removeClass(f + "-state-active")
        }

        function c(t) {
            g.find(".fc-" + t + "-button").attr("disabled", "disabled").addClass(f + "-state-disabled")
        }

        function d(t) {
            g.find(".fc-" + t + "-button").removeAttr("disabled").removeClass(f + "-state-disabled")
        }

        function h() {
            return p
        }
        var u = this;
        u.render = n, u.destroy = r, u.updateTitle = s, u.activateButton = l, u.deactivateButton = a, u.disableButton = c, u.enableButton = d, u.getViewsWithButtons = h;
        var f, g = t(),
            p = []
    }

    function c(e) {
        function i(t, e) {
            return !T || t.clone().stripZone() < T.clone().stripZone() || e.clone().stripZone() > C.clone().stripZone()
        }

        function n(t, e) {
            T = t, C = e, A = [];
            var i = ++G,
                n = L.length;
            N = n;
            for (var o = 0; n > o; o++) r(L[o], i)
        }

        function r(e, i) {
            o(e, function(n) {
                var r, o, s = t.isArray(e.events);
                if (i == G) {
                    if (n)
                        for (r = 0; n.length > r; r++) o = n[r], s || (o = w(o, e)), o && A.push(o);
                    N--, N || R(A)
                }
            })
        }

        function o(i, n) {
            var r, s, l = He.sourceFetchers;
            for (r = 0; l.length > r; r++) {
                if (s = l[r].call(S, i, T.clone(), C.clone(), e.timezone, n), s === !0) return;
                if ("object" == typeof s) return o(s, n), void 0
            }
            var a = i.events;
            if (a) t.isFunction(a) ? (v(), a.call(S, T.clone(), C.clone(), e.timezone, function(t) {
                n(t), y()
            })) : t.isArray(a) ? n(a) : n();
            else {
                var c = i.url;
                if (c) {
                    var d, h = i.success,
                        u = i.error,
                        f = i.complete;
                    d = t.isFunction(i.data) ? i.data() : i.data;
                    var g = t.extend({}, d || {}),
                        p = M(i.startParam, e.startParam),
                        m = M(i.endParam, e.endParam),
                        w = M(i.timezoneParam, e.timezoneParam);
                    p && (g[p] = T.format()), m && (g[m] = C.format()), e.timezone && "local" != e.timezone && (g[w] = e.timezone), v(), t.ajax(t.extend({}, ke, i, {
                        data: g,
                        success: function(e) {
                            e = e || [];
                            var i = k(h, this, arguments);
                            t.isArray(i) && (e = i), n(e)
                        },
                        error: function() {
                            k(u, this, arguments), n()
                        },
                        complete: function() {
                            k(f, this, arguments), y()
                        }
                    }))
                } else n()
            }
        }

        function s(t) {
            var e = l(t);
            e && (L.push(e), N++, r(e, G))
        }

        function l(e) {
            var i, n, r = He.sourceNormalizers;
            if (t.isFunction(e) || t.isArray(e) ? i = {
                    events: e
                } : "string" == typeof e ? i = {
                    url: e
                } : "object" == typeof e && (i = t.extend({}, e)), i) {
                for (i.className ? "string" == typeof i.className && (i.className = i.className.split(/\s+/)) : i.className = [], t.isArray(i.events) && (i.origArray = i.events, i.events = t.map(i.events, function(t) {
                        return w(t, i)
                    })), n = 0; r.length > n; n++) r[n].call(S, i);
                return i
            }
        }

        function a(e) {
            L = t.grep(L, function(t) {
                return !c(t, e)
            }), A = t.grep(A, function(t) {
                return !c(t.source, e)
            }), R(A)
        }

        function c(t, e) {
            return t && e && h(t) == h(e)
        }

        function h(t) {
            return ("object" == typeof t ? t.origArray || t.url || t.events : null) || t
        }

        function u(t) {
            t.start = S.moment(t.start), t.end && (t.end = S.moment(t.end)), E(t), f(t), R(A)
        }

        function f(t) {
            var e, i, n, r;
            for (e = 0; A.length > e; e++)
                if (i = A[e], i._id == t._id && i !== t)
                    for (n = 0; V.length > n; n++) r = V[n], void 0 !== t[r] && (i[r] = t[r])
        }

        function g(t, e) {
            var i = w(t);
            i && (i.source || (e && (z.events.push(i), i.source = z), A.push(i)), R(A))
        }

        function p(e) {
            var i, n;
            for (null == e ? e = function() {
                    return !0
                } : t.isFunction(e) || (i = e + "", e = function(t) {
                    return t._id == i
                }), A = t.grep(A, e, !0), n = 0; L.length > n; n++) t.isArray(L[n].events) && (L[n].events = t.grep(L[n].events, e, !0));
            R(A)
        }

        function m(e) {
            return t.isFunction(e) ? t.grep(A, e) : null != e ? (e += "", t.grep(A, function(t) {
                return t._id == e
            })) : A
        }

        function v() {
            Y++ || H("loading", null, !0, x())
        }

        function y() {
            --Y || H("loading", null, !1, x())
        }

        function w(i, n) {
            var r, o, s, l, a = {};
            return e.eventDataTransform && (i = e.eventDataTransform(i)), n && n.eventDataTransform && (i = n.eventDataTransform(i)), r = S.moment(i.start || i.date), r.isValid() && (o = null, !i.end || (o = S.moment(i.end), o.isValid())) ? (s = i.allDay, void 0 === s && (l = M(n ? n.allDayDefault : void 0, e.allDayDefault), s = void 0 !== l ? l : !(r.hasTime() || o && o.hasTime())), s ? (r.hasTime() && r.stripTime(), o && o.hasTime() && o.stripTime()) : (r.hasTime() || (r = S.rezoneDate(r)), o && !o.hasTime() && (o = S.rezoneDate(o))), t.extend(a, i), n && (a.source = n), a._id = i._id || (void 0 === i.id ? "_fc" + Me++ : i.id + ""), a.className = i.className ? "string" == typeof i.className ? i.className.split(/\s+/) : i.className : [], a.allDay = s, a.start = r, a.end = o, e.forceEventDuration && !a.end && (a.end = P(a)), d(a), a) : void 0
        }

        function E(t, e, i) {
            var n, r, o, s, l = t._allDay,
                a = t._start,
                c = t._end,
                d = !1;
            return e || i || (e = t.start, i = t.end), n = t.allDay != l ? t.allDay : !(e || i).hasTime(), n && (e && (e = e.clone().stripTime()), i && (i = i.clone().stripTime())), e && (r = n ? D(e, a.clone().stripTime()) : D(e, a)), n != l ? d = !0 : i && (o = D(i || S.getDefaultEventEnd(n, e || a), e || a).subtract(D(c || S.getDefaultEventEnd(l, a), a))), s = b(m(t._id), d, n, r, o), {
                dateDelta: r,
                durationDelta: o,
                undo: s
            }
        }

        function b(i, n, r, o, s) {
            var l = S.getIsAmbigTimezone(),
                a = [];
            return t.each(i, function(t, i) {
                    var c = i._allDay,
                        h = i._start,
                        u = i._end,
                        f = null != r ? r : c,
                        g = h.clone(),
                        p = !n && u ? u.clone() : null;
                    f ? (g.stripTime(), p && p.stripTime()) : (g.hasTime() || (g = S.rezoneDate(g)), p && !p.hasTime() && (p = S.rezoneDate(p))), p || !e.forceEventDuration && !+s || (p = S.getDefaultEventEnd(f, g)), g.add(o), p && p.add(o).add(s), l && (+o || +s) && (g.stripZone(), p && p.stripZone()), i.allDay = f, i.start = g, i.end = p, d(i), a.push(function() {
                        i.allDay = c, i.start = h, i.end = u, d(i)
                    })
                }),
                function() {
                    for (var t = 0; a.length > t; t++) a[t]()
                }
        }
        var S = this;
        S.isFetchNeeded = i, S.fetchEvents = n, S.addEventSource = s, S.removeEventSource = a, S.updateEvent = u, S.renderEvent = g, S.removeEvents = p, S.clientEvents = m, S.mutateEvent = E;
        var T, C, H = S.trigger,
            x = S.getView,
            R = S.reportEvents,
            P = S.getEventEnd,
            z = {
                events: []
            },
            L = [z],
            G = 0,
            N = 0,
            Y = 0,
            A = [];
        t.each((e.events ? [e.events] : []).concat(e.eventSources || []), function(t, e) {
            var i = l(e);
            i && L.push(i)
        });
        var V = ["title", "url", "allDay", "className", "editable", "color", "backgroundColor", "borderColor", "textColor"]
    }

    function d(t) {
        t._allDay = t.allDay, t._start = t.start.clone(), t._end = t.end ? t.end.clone() : null
    }

    function h(t, e) {
        e.left && t.css({
            "border-left-width": 1,
            "margin-left": e.left - 1
        }), e.right && t.css({
            "border-right-width": 1,
            "margin-right": e.right - 1
        })
    }

    function u(t) {
        t.css({
            "margin-left": "",
            "margin-right": "",
            "border-left-width": "",
            "border-right-width": ""
        })
    }

    function f(e, i, n) {
        var r = Math.floor(i / e.length),
            o = Math.floor(i - r * (e.length - 1)),
            s = [],
            l = [],
            a = [],
            c = 0;
        g(e), e.each(function(i, n) {
            var d = i === e.length - 1 ? o : r,
                h = t(n).outerHeight(!0);
            d > h ? (s.push(n), l.push(h), a.push(t(n).height())) : c += h
        }), n && (i -= c, r = Math.floor(i / s.length), o = Math.floor(i - r * (s.length - 1))), t(s).each(function(e, i) {
            var n = e === s.length - 1 ? o : r,
                c = l[e],
                d = a[e],
                h = n - (c - d);
            n > c && t(i).height(h)
        })
    }

    function g(t) {
        t.height("")
    }

    function p(e) {
        var i = 0;
        return e.find("> *").each(function(e, n) {
            var r = t(n).outerWidth();
            r > i && (i = r)
        }), i++, e.width(i), i
    }

    function m(t, e) {
        return t.height(e).addClass("fc-scroller"), t[0].scrollHeight - 1 > t[0].clientHeight ? !0 : (v(t), !1)
    }

    function v(t) {
        t.height("").removeClass("fc-scroller")
    }

    function y(e) {
        var i = e.css("position"),
            n = e.parents().filter(function() {
                var e = t(this);
                return /(auto|scroll)/.test(e.css("overflow") + e.css("overflow-y") + e.css("overflow-x"))
            }).eq(0);
        return "fixed" !== i && n.length ? n : t(e[0].ownerDocument || document)
    }

    function w(t) {
        var e = t.offset().left,
            i = e + t.width(),
            n = t.children(),
            r = n.offset().left,
            o = r + n.outerWidth();
        return {
            left: r - e,
            right: i - o
        }
    }

    function E(t) {
        return 1 == t.which && !t.ctrlKey
    }

    function b(t, e, i, n) {
        var r, o, s, l;
        return e > i && n > t ? (t >= i ? (r = t.clone(), s = !0) : (r = i.clone(), s = !1), n >= e ? (o = e.clone(), l = !0) : (o = n.clone(), l = !1), {
            start: r,
            end: o,
            isStart: s,
            isEnd: l
        }) : void 0
    }

    function S(t, e) {
        if (t = t || {}, void 0 !== t[e]) return t[e];
        for (var i, n = e.split(/(?=[A-Z])/), r = n.length - 1; r >= 0; r--)
            if (i = t[n[r].toLowerCase()], void 0 !== i) return i;
        return t["default"]
    }

    function D(t, i) {
        return e.duration({
            days: t.clone().stripTime().diff(i.clone().stripTime(), "days"),
            ms: t.time() - i.time()
        })
    }

    function T(t) {
        return "[object Date]" === Object.prototype.toString.call(t) || t instanceof Date
    }

    function C(t, e) {
        return t - e
    }

    function H(t) {
        var e = function() {};
        return e.prototype = t, new e
    }

    function x(t, e) {
        for (var i in e) e.hasOwnProperty(i) && (t[i] = e[i])
    }

    function k(e, i, n) {
        if (t.isFunction(e) && (e = [e]), e) {
            var r, o;
            for (r = 0; e.length > r; r++) o = e[r].apply(i, n) || o;
            return o
        }
    }

    function M() {
        for (var t = 0; arguments.length > t; t++)
            if (void 0 !== arguments[t]) return arguments[t]
    }

    function R(t) {
        return (t + "").replace(/&/g, "&amp;").replace(/</g, "&lt;").replace(/>/g, "&gt;").replace(/'/g, "&#039;").replace(/"/g, "&quot;").replace(/\n/g, "<br />")
    }

    function P(t) {
        return t.replace(/&.*?;/g, "")
    }

    function z(t) {
        return t.charAt(0).toUpperCase() + t.slice(1)
    }

    function L(t, e) {
        var i, n, r, o, s = function() {
            var l = +new Date - o;
            e > l && l > 0 ? i = setTimeout(s, e - l) : (i = null, t.apply(r, n), i || (r = n = null))
        };
        return function() {
            r = this, n = arguments, o = +new Date, i || (i = setTimeout(s, e))
        }
    }

    function G(i, n, r) {
        var o, s, l, a, c = i[0],
            d = 1 == i.length && "string" == typeof c;
        return e.isMoment(c) ? (a = e.apply(null, i), c._ambigTime && (a._ambigTime = !0), c._ambigZone && (a._ambigZone = !0)) : T(c) || void 0 === c ? a = e.apply(null, i) : (o = !1, s = !1, d ? Pe.test(c) ? (c += "-01", i = [c], o = !0, s = !0) : (l = ze.exec(c)) && (o = !l[5], s = !0) : t.isArray(c) && (s = !0), a = n ? e.utc.apply(e, i) : e.apply(null, i), o ? (a._ambigTime = !0, a._ambigZone = !0) : r && (s ? a._ambigZone = !0 : d && a.zone(c))), new N(a)
    }

    function N(t) {
        x(this, t)
    }

    function Y(t, e) {
        var i, n = [],
            r = !1,
            o = !1;
        for (i = 0; t.length > i; i++) n.push(He.moment.parseZone(t[i])), r = r || n[i]._ambigTime, o = o || n[i]._ambigZone;
        for (i = 0; n.length > i; i++) r && !e ? n[i].stripTime() : o && n[i].stripZone();
        return n
    }

    function A(t, i) {
        return e.fn.format.call(t, i)
    }

    function V(t, e) {
        return _(t, Z(e))
    }

    function _(t, e) {
        var i, n = "";
        for (i = 0; e.length > i; i++) n += O(t, e[i]);
        return n
    }

    function O(t, e) {
        var i, n;
        return "string" == typeof e ? e : (i = e.token) ? Le[i] ? Le[i](t) : A(t, i) : e.maybe && (n = _(t, e.maybe), n.match(/[1-9]/)) ? n : ""
    }

    function W(t, e, i, n, r) {
        var o;
        return t = He.moment.parseZone(t), e = He.moment.parseZone(e), o = (t.localeData || t.lang).call(t), i = o.longDateFormat(i) || i, n = n || " - ", F(t, e, Z(i), n, r)
    }

    function F(t, e, i, n, r) {
        var o, s, l, a, c = "",
            d = "",
            h = "",
            u = "",
            f = "";
        for (s = 0; i.length > s && (o = I(t, e, i[s]), o !== !1); s++) c += o;
        for (l = i.length - 1; l > s && (o = I(t, e, i[l]), o !== !1); l--) d = o + d;
        for (a = s; l >= a; a++) h += O(t, i[a]), u += O(e, i[a]);
        return (h || u) && (f = r ? u + n + h : h + n + u), c + f + d
    }

    function I(t, e, i) {
        var n, r;
        return "string" == typeof i ? i : (n = i.token) && (r = Ge[n.charAt(0)], r && t.isSame(e, r)) ? A(t, n) : !1
    }

    function Z(t) {
        return t in Ne ? Ne[t] : Ne[t] = B(t)
    }

    function B(t) {
        for (var e, i = [], n = /\[([^\]]*)\]|\(([^\)]*)\)|(LT|(\w)\4*o?)|([^\w\[\(]+)/g; e = n.exec(t);) e[1] ? i.push(e[1]) : e[2] ? i.push({
            maybe: B(e[2])
        }) : e[3] ? i.push({
            token: e[3]
        }) : e[5] && i.push(e[5]);
        return i
    }

    function j(t) {
        this.options = t || {}
    }

    function X(t) {
        this.grid = t
    }

    function $(t) {
        this.coordMaps = t
    }

    function q(t, e) {
        this.coordMap = t, this.options = e || {}
    }

    function U(t, e) {
        return t || e ? t && e ? t.grid === e.grid && t.row === e.row && t.col === e.col : !1 : !0
    }

    function K(e, i) {
        this.options = i = i || {}, this.sourceEl = e, this.parentEl = i.parentEl ? t(i.parentEl) : e.parent()
    }

    function Q(t) {
        this.view = t
    }

    function J(t) {
        Q.call(this, t), this.coordMap = new X(this)
    }

    function te(t, e) {
        return t.eventStartMS - e.eventStartMS || e.eventDurationMS - t.eventDurationMS || e.event.allDay - t.event.allDay || (t.event.title || "").localeCompare(e.event.title)
    }

    function ee(t) {
        J.call(this, t)
    }

    function ie(t, e) {
        var i, n;
        for (i = 0; e.length > i; i++)
            if (n = e[i], n.leftCol <= t.rightCol && n.rightCol >= t.leftCol) return !0;
        return !1
    }

    function ne(t, e) {
        return t.leftCol - e.leftCol
    }

    function re(t) {
        J.call(this, t)
    }

    function oe(t) {
        var e, i, n;
        if (t.sort(te), e = se(t), le(e), i = e[0]) {
            for (n = 0; i.length > n; n++) ae(i[n]);
            for (n = 0; i.length > n; n++) ce(i[n], 0, 0)
        }
    }

    function se(t) {
        var e, i, n, r = [];
        for (e = 0; t.length > e; e++) {
            for (i = t[e], n = 0; r.length > n && de(i, r[n]).length; n++);
            i.level = n, (r[n] || (r[n] = [])).push(i)
        }
        return r
    }

    function le(t) {
        var e, i, n, r, o;
        for (e = 0; t.length > e; e++)
            for (i = t[e], n = 0; i.length > n; n++)
                for (r = i[n], r.forwardSegs = [], o = e + 1; t.length > o; o++) de(r, t[o], r.forwardSegs)
    }

    function ae(t) {
        var e, i, n = t.forwardSegs,
            r = 0;
        if (void 0 === t.forwardPressure) {
            for (e = 0; n.length > e; e++) i = n[e], ae(i), r = Math.max(r, 1 + i.forwardPressure);
            t.forwardPressure = r
        }
    }

    function ce(t, e, i) {
        var n, r = t.forwardSegs;
        if (void 0 === t.forwardCoord)
            for (r.length ? (r.sort(ue), ce(r[0], e + 1, i), t.forwardCoord = r[0].backwardCoord) : t.forwardCoord = 1, t.backwardCoord = t.forwardCoord - (t.forwardCoord - i) / (e + 1), n = 0; r.length > n; n++) ce(r[n], 0, t.forwardCoord)
    }

    function de(t, e, i) {
        i = i || [];
        for (var n = 0; e.length > n; n++) he(t, e[n]) && i.push(e[n]);
        return i
    }

    function he(t, e) {
        return t.bottom > e.top && t.top < e.bottom
    }

    function ue(t, e) {
        return e.forwardPressure - t.forwardPressure || (t.backwardCoord || 0) - (e.backwardCoord || 0) || te(t, e)
    }

    function fe(i) {
        function n(e) {
            var i = x[e];
            return t.isPlainObject(i) && !s(e) ? S(i, C.name) : i
        }

        function r(t, e) {
            return i.trigger.apply(i, [t, e || C].concat(Array.prototype.slice.call(arguments, 2), [C]))
        }

        function o(t) {
            var e = t.source || {};
            return M(t.startEditable, e.startEditable, n("eventStartEditable"), t.editable, e.editable, n("editable"))
        }

        function l(t) {
            var e = t.source || {};
            return M(t.durationEditable, e.durationEditable, n("eventDurationEditable"), t.editable, e.editable, n("editable"))
        }

        function a(t, e, n, o) {
            var s = i.mutateEvent(e, n, null);
            r("eventDrop", t, e, s.dateDelta, function() {
                s.undo(), H()
            }, o, {}), H()
        }

        function c(t, e, n, o) {
            var s = i.mutateEvent(e, null, n);
            r("eventResize", t, e, s.durationDelta, function() {
                s.undo(), H()
            }, o, {}), H()
        }

        function d(t) {
            return e.isMoment(t) && (t = t.day()), z[t]
        }

        function h() {
            return R
        }

        function u(t, e, i) {
            var n = t.clone();
            for (e = e || 1; z[(n.day() + (i ? e : 0) + 7) % 7];) n.add(e, "days");
            return n
        }

        function f() {
            var t = g.apply(null, arguments),
                e = p(t),
                i = m(e);
            return i
        }

        function g(t, e) {
            var i = C.colCnt,
                n = N ? -1 : 1,
                r = N ? i - 1 : 0;
            "object" == typeof t && (e = t.col, t = t.row);
            var o = t * i + (e * n + r);
            return o
        }

        function p(t) {
            var e = C.start.day();
            return t += L[e], 7 * Math.floor(t / R) + G[(t % R + R) % R] - e
        }

        function m(t) {
            return C.start.clone().add(t, "days")
        }

        function v(t) {
            var e = y(t),
                i = w(e),
                n = E(i);
            return n
        }

        function y(t) {
            return t.clone().stripTime().diff(C.start, "days")
        }

        function w(t) {
            var e = C.start.day();
            return t += e, Math.floor(t / 7) * R + L[(t % 7 + 7) % 7] - L[e]
        }

        function E(t) {
            var e = C.colCnt,
                i = N ? -1 : 1,
                n = N ? e - 1 : 0,
                r = Math.floor(t / e),
                o = (t % e + e) % e * i + n;
            return {
                row: r,
                col: o
            }
        }

        function b(t, e) {
            for (var i = C.rowCnt, n = C.colCnt, r = [], o = D(t, e), s = y(o.start), l = y(o.end), a = w(s), c = w(l) - 1, d = 0; i > d; d++) {
                var h = d * n,
                    u = h + n - 1,
                    f = Math.max(a, h),
                    g = Math.min(c, u);
                if (g >= f) {
                    var m = E(f),
                        v = E(g),
                        b = [m.col, v.col].sort(),
                        S = p(f) == s,
                        T = p(g) + 1 == l;
                    r.push({
                        row: d,
                        leftCol: b[0],
                        rightCol: b[1],
                        isStart: S,
                        isEnd: T
                    })
                }
            }
            return r
        }

        function D(t, e) {
            var i, n, r = t.clone().stripTime();
            return e && (i = e.clone().stripTime(), n = +e.time(), n && n >= k && i.add(1, "days")), (!e || r >= i) && (i = r.clone().add(1, "days")), {
                start: r,
                end: i
            }
        }

        function T(t) {
            var e = D(t.start, t.end);
            return e.end.diff(e.start, "days") > 1
        }
        var C = this;
        C.calendar = i, C.opt = n, C.trigger = r, C.isEventDraggable = o, C.isEventResizable = l, C.eventDrop = a, C.eventResize = c;
        var H = i.reportEventChange,
            x = i.options,
            k = e.duration(x.nextDayThreshold);
        C.init(), C.getEventTimeText = function(t, e) {
            var r, o;
            return "object" == typeof t && "object" == typeof e ? (r = t, o = e, e = arguments[2]) : (r = t.start, o = t.end), e = e || n("timeFormat"), o && n("displayEventEnd") ? i.formatRange(r, o, e) : i.formatDate(r, e)
        }, C.isHiddenDay = d, C.skipHiddenDays = u, C.getCellsPerWeek = h, C.dateToCell = v, C.dateToDayOffset = y, C.dayOffsetToCellOffset = w, C.cellOffsetToCell = E, C.cellToDate = f, C.cellToCellOffset = g, C.cellOffsetToDayOffset = p, C.dayOffsetToDate = m, C.rangeToSegments = b, C.isMultiDayEvent = T;
        var R, P = n("hiddenDays") || [],
            z = [],
            L = [],
            G = [],
            N = n("isRTL");
        (function() {
            n("weekends") === !1 && P.push(0, 6);
            for (var e = 0, i = 0; 7 > e; e++) L[e] = i, z[e] = -1 != t.inArray(e, P), z[e] || (G[i] = e, i++);
            if (R = i, !R) throw "invalid hiddenDays"
        })()
    }

    function ge(t) {
        fe.call(this, t), this.dayGrid = new ee(this), this.coordMap = this.dayGrid.coordMap
    }

    function pe(t) {
        ge.call(this, t)
    }

    function me(t) {
        ge.call(this, t)
    }

    function ve(t) {
        ge.call(this, t)
    }

    function ye(t, e) {
        return e.longDateFormat("LT").replace(":mm", "(:mm)").replace(/(\Wmm)$/, "($1)").replace(/\s*a$/i, "a")
    }

    function we(t, e) {
        return e.longDateFormat("LT").replace(/\s*a$/i, "")
    }

    function Ee(t) {
        fe.call(this, t), this.timeGrid = new re(this), this.opt("allDaySlot") ? (this.dayGrid = new ee(this), this.coordMap = new $([this.dayGrid.coordMap, this.timeGrid.coordMap])) : this.coordMap = this.timeGrid.coordMap
    }

    function be(t) {
        Ee.call(this, t)
    }

    function Se(t) {
        Ee.call(this, t)
    }
    var De = {
            lang: "en",
            defaultTimedEventDuration: "02:00:00",
            defaultAllDayEventDuration: {
                days: 1
            },
            forceEventDuration: !1,
            nextDayThreshold: "09:00:00",
            defaultView: "month",
            aspectRatio: 1.35,
            header: {
                left: "title",
                center: "",
                right: "today prev,next"
            },
            weekends: !0,
            weekNumbers: !1,
            weekNumberTitle: "W",
            weekNumberCalculation: "local",
            lazyFetching: !0,
            startParam: "start",
            endParam: "end",
            timezoneParam: "timezone",
            timezone: !1,
            titleFormat: {
                month: "MMMM YYYY",
                week: "ll",
                day: "LL"
            },
            columnFormat: {
                month: "ddd",
                week: n,
                day: "dddd"
            },
            timeFormat: {
                "default": i
            },
            displayEventEnd: {
                month: !1,
                basicWeek: !1,
                "default": !0
            },
            isRTL: !1,
            defaultButtonText: {
                prev: "prev",
                next: "next",
                prevYear: "prev year",
                nextYear: "next year",
                today: "today",
                month: "month",
                week: "week",
                day: "day"
            },
            buttonIcons: {
                prev: "left-single-arrow",
                next: "right-single-arrow",
                prevYear: "left-double-arrow",
                nextYear: "right-double-arrow"
            },
            theme: !1,
            themeButtonIcons: {
                prev: "circle-triangle-w",
                next: "circle-triangle-e",
                prevYear: "seek-prev",
                nextYear: "seek-next"
            },
            dragOpacity: .75,
            dragRevertDuration: 500,
            dragScroll: !0,
            unselectAuto: !0,
            dropAccept: "*",
            eventLimit: !1,
            eventLimitText: "more",
            eventLimitClick: "popover",
            dayPopoverFormat: "LL",
            handleWindowResize: !0,
            windowResizeDelay: 200
        },
        Te = {
            en: {
                columnFormat: {
                    week: "ddd M/D"
                },
                dayPopoverFormat: "dddd, MMMM D"
            }
        },
        Ce = {
            header: {
                left: "next,prev today",
                center: "",
                right: "title"
            },
            buttonIcons: {
                prev: "right-single-arrow",
                next: "left-single-arrow",
                prevYear: "right-double-arrow",
                nextYear: "left-double-arrow"
            },
            themeButtonIcons: {
                prev: "circle-triangle-e",
                next: "circle-triangle-w",
                nextYear: "seek-prev",
                prevYear: "seek-next"
            }
        },
        He = t.fullCalendar = {
            version: "2.1.1"
        },
        xe = He.views = {};
    t.fn.fullCalendar = function(e) {
        var i = Array.prototype.slice.call(arguments, 1),
            n = this;
        return this.each(function(r, o) {
            var s, a = t(o),
                c = a.data("fullCalendar");
            "string" == typeof e ? c && t.isFunction(c[e]) && (s = c[e].apply(c, i), r || (n = s), "destroy" === e && a.removeData("fullCalendar")) : c || (c = new l(a, e), a.data("fullCalendar", c), c.render())
        }), n
    }, He.langs = Te, He.datepickerLang = function(e, i, n) {
        var r = Te[e];
        r || (r = Te[e] = {}), o(r, {
            isRTL: n.isRTL,
            weekNumberTitle: n.weekHeader,
            titleFormat: {
                month: n.showMonthAfterYear ? "YYYY[" + n.yearSuffix + "] MMMM" : "MMMM YYYY[" + n.yearSuffix + "]"
            },
            defaultButtonText: {
                prev: P(n.prevText),
                next: P(n.nextText),
                today: P(n.currentText)
            }
        }), t.datepicker && (t.datepicker.regional[i] = t.datepicker.regional[e] = n, t.datepicker.regional.en = t.datepicker.regional[""], t.datepicker.setDefaults(n))
    }, He.lang = function(t, e) {
        var i;
        e && (i = Te[t], i || (i = Te[t] = {}), o(i, e || {})), De.lang = t
    }, He.sourceNormalizers = [], He.sourceFetchers = [];
    var ke = {
            dataType: "json",
            cache: !1
        },
        Me = 1,
        Re = ["sun", "mon", "tue", "wed", "thu", "fri", "sat"];
    He.applyAll = k;
    var Pe = /^\s*\d{4}-\d\d$/,
        ze = /^\s*\d{4}-(?:(\d\d-\d\d)|(W\d\d$)|(W\d\d-\d)|(\d\d\d))((T| )(\d\d(:\d\d(:\d\d(\.\d+)?)?)?)?)?$/;
    He.moment = function() {
        return G(arguments)
    }, He.moment.utc = function() {
        var t = G(arguments, !0);
        return t.hasTime() && t.utc(), t
    }, He.moment.parseZone = function() {
        return G(arguments, !0, !0)
    }, N.prototype = H(e.fn), N.prototype.clone = function() {
        return G([this])
    }, N.prototype.time = function(t) {
        if (null == t) return e.duration({
            hours: this.hours(),
            minutes: this.minutes(),
            seconds: this.seconds(),
            milliseconds: this.milliseconds()
        });
        delete this._ambigTime, e.isDuration(t) || e.isMoment(t) || (t = e.duration(t));
        var i = 0;
        return e.isDuration(t) && (i = 24 * Math.floor(t.asDays())), this.hours(i + t.hours()).minutes(t.minutes()).seconds(t.seconds()).milliseconds(t.milliseconds())
    }, N.prototype.stripTime = function() {
        var t = this.toArray();
        return e.fn.utc.call(this), this.year(t[0]).month(t[1]).date(t[2]).hours(0).minutes(0).seconds(0).milliseconds(0), this._ambigTime = !0, this._ambigZone = !0, this
    }, N.prototype.hasTime = function() {
        return !this._ambigTime
    }, N.prototype.stripZone = function() {
        var t = this.toArray(),
            i = this._ambigTime;
        return e.fn.utc.call(this), this.year(t[0]).month(t[1]).date(t[2]).hours(t[3]).minutes(t[4]).seconds(t[5]).milliseconds(t[6]), i && (this._ambigTime = !0), this._ambigZone = !0, this
    }, N.prototype.hasZone = function() {
        return !this._ambigZone
    }, N.prototype.zone = function(t) {
        return null != t && (delete this._ambigTime, delete this._ambigZone), e.fn.zone.apply(this, arguments)
    }, N.prototype.local = function() {
        var t = this.toArray(),
            i = this._ambigZone;
        return delete this._ambigTime, delete this._ambigZone, e.fn.local.apply(this, arguments), i && this.year(t[0]).month(t[1]).date(t[2]).hours(t[3]).minutes(t[4]).seconds(t[5]).milliseconds(t[6]), this
    }, N.prototype.utc = function() {
        return delete this._ambigTime, delete this._ambigZone, e.fn.utc.apply(this, arguments)
    }, N.prototype.format = function() {
        return arguments[0] ? V(this, arguments[0]) : this._ambigTime ? A(this, "YYYY-MM-DD") : this._ambigZone ? A(this, "YYYY-MM-DD[T]HH:mm:ss") : A(this)
    }, N.prototype.toISOString = function() {
        return this._ambigTime ? A(this, "YYYY-MM-DD") : this._ambigZone ? A(this, "YYYY-MM-DD[T]HH:mm:ss") : e.fn.toISOString.apply(this, arguments)
    }, N.prototype.isWithin = function(t, e) {
        var i = Y([this, t, e]);
        return i[0] >= i[1] && i[0] < i[2]
    }, N.prototype.isSame = function(t, i) {
        var n;
        return i ? (n = Y([this, t], !0), e.fn.isSame.call(n[0], n[1], i)) : (t = He.moment.parseZone(t), e.fn.isSame.call(this, t) && Boolean(this._ambigTime) === Boolean(t._ambigTime) && Boolean(this._ambigZone) === Boolean(t._ambigZone))
    }, t.each(["isBefore", "isAfter"], function(t, i) {
        N.prototype[i] = function(t, n) {
            var r = Y([this, t]);
            return e.fn[i].call(r[0], r[1], n)
        }
    });
    var Le = {
        t: function(t) {
            return A(t, "a").charAt(0)
        },
        T: function(t) {
            return A(t, "A").charAt(0)
        }
    };
    He.formatRange = W;
    var Ge = {
            Y: "year",
            M: "month",
            D: "day",
            d: "day",
            A: "second",
            a: "second",
            T: "second",
            t: "second",
            H: "second",
            h: "second",
            m: "second",
            s: "second"
        },
        Ne = {};
    j.prototype = {
        isHidden: !0,
        options: null,
        el: null,
        documentMousedownProxy: null,
        margin: 10,
        show: function() {
            this.isHidden && (this.el || this.render(), this.el.show(), this.position(), this.isHidden = !1, this.trigger("show"))
        },
        hide: function() {
            this.isHidden || (this.el.hide(), this.isHidden = !0, this.trigger("hide"))
        },
        render: function() {
            var e = this,
                i = this.options;
            this.el = t('<div class="fc-popover"/>').addClass(i.className || "").css({
                top: 0,
                left: 0
            }).append(i.content).appendTo(i.parentEl), this.el.on("click", ".fc-close", function() {
                e.hide()
            }), i.autoHide && t(document).on("mousedown", this.documentMousedownProxy = t.proxy(this, "documentMousedown"))
        },
        documentMousedown: function(e) {
            this.el && !t(e.target).closest(this.el).length && this.hide()
        },
        destroy: function() {
            this.hide(), this.el && (this.el.remove(), this.el = null), t(document).off("mousedown", this.documentMousedownProxy)
        },
        position: function() {
            var e, i, n, r, o, s = this.options,
                l = this.el.offsetParent().offset(),
                a = this.el.outerWidth(),
                c = this.el.outerHeight(),
                d = t(window),
                h = y(this.el);
            r = s.top || 0, o = void 0 !== s.left ? s.left : void 0 !== s.right ? s.right - a : 0, h.is(window) || h.is(document) ? (h = d, e = 0, i = 0) : (n = h.offset(), e = n.top, i = n.left), e += d.scrollTop(), i += d.scrollLeft(), s.viewportConstrain !== !1 && (r = Math.min(r, e + h.outerHeight() - c - this.margin), r = Math.max(r, e + this.margin), o = Math.min(o, i + h.outerWidth() - a - this.margin), o = Math.max(o, i + this.margin)), this.el.css({
                top: r - l.top,
                left: o - l.left
            })
        },
        trigger: function(t) {
            this.options[t] && this.options[t].apply(this, Array.prototype.slice.call(arguments, 1))
        }
    }, X.prototype = {
        grid: null,
        rows: null,
        cols: null,
        containerEl: null,
        minX: null,
        maxX: null,
        minY: null,
        maxY: null,
        build: function() {
            this.grid.buildCoords(this.rows = [], this.cols = []), this.computeBounds()
        },
        getCell: function(t, e) {
            var i, n = null,
                r = this.rows,
                o = this.cols,
                s = -1,
                l = -1;
            if (this.inBounds(t, e)) {
                for (i = 0; r.length > i; i++)
                    if (e >= r[i][0] && r[i][1] > e) {
                        s = i;
                        break
                    }
                for (i = 0; o.length > i; i++)
                    if (t >= o[i][0] && o[i][1] > t) {
                        l = i;
                        break
                    }
                s >= 0 && l >= 0 && (n = {
                    row: s,
                    col: l
                }, n.grid = this.grid, n.date = this.grid.getCellDate(n))
            }
            return n
        },
        computeBounds: function() {
            var t;
            this.containerEl && (t = this.containerEl.offset(), this.minX = t.left, this.maxX = t.left + this.containerEl.outerWidth(), this.minY = t.top, this.maxY = t.top + this.containerEl.outerHeight())
        },
        inBounds: function(t, e) {
            return this.containerEl ? t >= this.minX && this.maxX > t && e >= this.minY && this.maxY > e : !0
        }
    }, $.prototype = {
        coordMaps: null,
        build: function() {
            var t, e = this.coordMaps;
            for (t = 0; e.length > t; t++) e[t].build()
        },
        getCell: function(t, e) {
            var i, n = this.coordMaps,
                r = null;
            for (i = 0; n.length > i && !r; i++) r = n[i].getCell(t, e);
            return r
        }
    }, q.prototype = {
        coordMap: null,
        options: null,
        isListening: !1,
        isDragging: !1,
        origCell: null,
        origDate: null,
        cell: null,
        date: null,
        mouseX0: null,
        mouseY0: null,
        mousemoveProxy: null,
        mouseupProxy: null,
        scrollEl: null,
        scrollBounds: null,
        scrollTopVel: null,
        scrollLeftVel: null,
        scrollIntervalId: null,
        scrollHandlerProxy: null,
        scrollSensitivity: 30,
        scrollSpeed: 200,
        scrollIntervalMs: 50,
        mousedown: function(t) {
            E(t) && (t.preventDefault(), this.startListening(t), this.options.distance || this.startDrag(t))
        },
        startListening: function(e) {
            var i, n;
            this.isListening || (e && this.options.scroll && (i = y(t(e.target)), i.is(window) || i.is(document) || (this.scrollEl = i, this.scrollHandlerProxy = L(t.proxy(this, "scrollHandler"), 100), this.scrollEl.on("scroll", this.scrollHandlerProxy))), this.computeCoords(), e && (n = this.getCell(e), this.origCell = n, this.origDate = n ? n.date : null, this.mouseX0 = e.pageX, this.mouseY0 = e.pageY), t(document).on("mousemove", this.mousemoveProxy = t.proxy(this, "mousemove")).on("mouseup", this.mouseupProxy = t.proxy(this, "mouseup")).on("selectstart", this.preventDefault), this.isListening = !0, this.trigger("listenStart", e))
        },
        computeCoords: function() {
            this.coordMap.build(), this.computeScrollBounds()
        },
        mousemove: function(t) {
            var e, i;
            this.isDragging || (e = this.options.distance || 1, i = Math.pow(t.pageX - this.mouseX0, 2) + Math.pow(t.pageY - this.mouseY0, 2), i >= e * e && this.startDrag(t)), this.isDragging && this.drag(t)
        },
        startDrag: function(t) {
            var e;
            this.isListening || this.startListening(), this.isDragging || (this.isDragging = !0, this.trigger("dragStart", t), e = this.getCell(t), e && this.cellOver(e, !0))
        },
        drag: function(t) {
            var e;
            this.isDragging && (e = this.getCell(t), U(e, this.cell) || (this.cell && this.cellOut(), e && this.cellOver(e)), this.dragScroll(t))
        },
        cellOver: function(t) {
            this.cell = t, this.date = t.date, this.trigger("cellOver", t, t.date)
        },
        cellOut: function() {
            this.cell && (this.trigger("cellOut", this.cell), this.cell = null, this.date = null)
        },
        mouseup: function(t) {
            this.stopDrag(t), this.stopListening(t)
        },
        stopDrag: function(t) {
            this.isDragging && (this.stopScrolling(), this.trigger("dragStop", t), this.isDragging = !1)
        },
        stopListening: function(e) {
            this.isListening && (this.scrollEl && (this.scrollEl.off("scroll", this.scrollHandlerProxy), this.scrollHandlerProxy = null), t(document).off("mousemove", this.mousemoveProxy).off("mouseup", this.mouseupProxy).off("selectstart", this.preventDefault), this.mousemoveProxy = null, this.mouseupProxy = null, this.isListening = !1, this.trigger("listenStop", e), this.origCell = this.cell = null, this.origDate = this.date = null)
        },
        getCell: function(t) {
            return this.coordMap.getCell(t.pageX, t.pageY)
        },
        trigger: function(t) {
            this.options[t] && this.options[t].apply(this, Array.prototype.slice.call(arguments, 1))
        },
        preventDefault: function(t) {
            t.preventDefault()
        },
        computeScrollBounds: function() {
            var t, e = this.scrollEl;
            e && (t = e.offset(), this.scrollBounds = {
                top: t.top,
                left: t.left,
                bottom: t.top + e.outerHeight(),
                right: t.left + e.outerWidth()
            })
        },
        dragScroll: function(t) {
            var e, i, n, r, o = this.scrollSensitivity,
                s = this.scrollBounds,
                l = 0,
                a = 0;
            s && (e = (o - (t.pageY - s.top)) / o, i = (o - (s.bottom - t.pageY)) / o, n = (o - (t.pageX - s.left)) / o, r = (o - (s.right - t.pageX)) / o, e >= 0 && 1 >= e ? l = -1 * e * this.scrollSpeed : i >= 0 && 1 >= i && (l = i * this.scrollSpeed), n >= 0 && 1 >= n ? a = -1 * n * this.scrollSpeed : r >= 0 && 1 >= r && (a = r * this.scrollSpeed)), this.setScrollVel(l, a)
        },
        setScrollVel: function(e, i) {
            this.scrollTopVel = e, this.scrollLeftVel = i, this.constrainScrollVel(), !this.scrollTopVel && !this.scrollLeftVel || this.scrollIntervalId || (this.scrollIntervalId = setInterval(t.proxy(this, "scrollIntervalFunc"), this.scrollIntervalMs))
        },
        constrainScrollVel: function() {
            var t = this.scrollEl;
            0 > this.scrollTopVel ? 0 >= t.scrollTop() && (this.scrollTopVel = 0) : this.scrollTopVel > 0 && t.scrollTop() + t[0].clientHeight >= t[0].scrollHeight && (this.scrollTopVel = 0), 0 > this.scrollLeftVel ? 0 >= t.scrollLeft() && (this.scrollLeftVel = 0) : this.scrollLeftVel > 0 && t.scrollLeft() + t[0].clientWidth >= t[0].scrollWidth && (this.scrollLeftVel = 0)
        },
        scrollIntervalFunc: function() {
            var t = this.scrollEl,
                e = this.scrollIntervalMs / 1e3;
            this.scrollTopVel && t.scrollTop(t.scrollTop() + this.scrollTopVel * e), this.scrollLeftVel && t.scrollLeft(t.scrollLeft() + this.scrollLeftVel * e), this.constrainScrollVel(), this.scrollTopVel || this.scrollLeftVel || this.stopScrolling()
        },
        stopScrolling: function() {
            this.scrollIntervalId && (clearInterval(this.scrollIntervalId), this.scrollIntervalId = null, this.computeCoords())
        },
        scrollHandler: function() {
            this.scrollIntervalId || this.computeCoords()
        }
    }, K.prototype = {
        options: null,
        sourceEl: null,
        el: null,
        parentEl: null,
        top0: null,
        left0: null,
        mouseY0: null,
        mouseX0: null,
        topDelta: null,
        leftDelta: null,
        mousemoveProxy: null,
        isFollowing: !1,
        isHidden: !1,
        isAnimating: !1,
        start: function(e) {
            this.isFollowing || (this.isFollowing = !0, this.mouseY0 = e.pageY, this.mouseX0 = e.pageX, this.topDelta = 0, this.leftDelta = 0, this.isHidden || this.updatePosition(), t(document).on("mousemove", this.mousemoveProxy = t.proxy(this, "mousemove")))
        },
        stop: function(e, i) {
            function n() {
                this.isAnimating = !1, r.destroyEl(), this.top0 = this.left0 = null, i && i()
            }
            var r = this,
                o = this.options.revertDuration;
            this.isFollowing && !this.isAnimating && (this.isFollowing = !1, t(document).off("mousemove", this.mousemoveProxy), e && o && !this.isHidden ? (this.isAnimating = !0, this.el.animate({
                top: this.top0,
                left: this.left0
            }, {
                duration: o,
                complete: n
            })) : n())
        },
        getEl: function() {
            var t = this.el;
            return t || (this.sourceEl.width(), t = this.el = this.sourceEl.clone().css({
                position: "absolute",
                visibility: "",
                display: this.isHidden ? "none" : "",
                margin: 0,
                right: "auto",
                bottom: "auto",
                width: this.sourceEl.width(),
                height: this.sourceEl.height(),
                opacity: this.options.opacity || "",
                zIndex: this.options.zIndex
            }).appendTo(this.parentEl)), t
        },
        destroyEl: function() {
            this.el && (this.el.remove(), this.el = null)
        },
        updatePosition: function() {
            var t, e;
            this.getEl(), null === this.top0 && (this.sourceEl.width(), t = this.sourceEl.offset(), e = this.el.offsetParent().offset(), this.top0 = t.top - e.top, this.left0 = t.left - e.left), this.el.css({
                top: this.top0 + this.topDelta,
                left: this.left0 + this.leftDelta
            })
        },
        mousemove: function(t) {
            this.topDelta = t.pageY - this.mouseY0, this.leftDelta = t.pageX - this.mouseX0, this.isHidden || this.updatePosition()
        },
        hide: function() {
            this.isHidden || (this.isHidden = !0, this.el && this.el.hide())
        },
        show: function() {
            this.isHidden && (this.isHidden = !1, this.updatePosition(), this.getEl().show())
        }
    }, Q.prototype = {
        view: null,
        cellHtml: "<td/>",
        rowHtml: function(t, e) {
            var i, n, r = this.view,
                o = this.getHtmlRenderer("cell", t),
                s = "";
            for (e = e || 0, i = 0; r.colCnt > i; i++) n = r.cellToDate(e, i), s += o(e, i, n);
            return s = this.bookendCells(s, t, e), "<tr>" + s + "</tr>"
        },
        bookendCells: function(t, e, i) {
            var n = this.view,
                r = this.getHtmlRenderer("intro", e)(i || 0),
                o = this.getHtmlRenderer("outro", e)(i || 0),
                s = n.opt("isRTL"),
                l = s ? o : r,
                a = s ? r : o;
            return "string" == typeof t ? l + t + a : t.prepend(l).append(a)
        },
        getHtmlRenderer: function(t, e) {
            var i, n, r, o, s = this.view;
            return i = t + "Html", e && (n = e + z(t) + "Html"), n && (o = s[n]) ? r = s : n && (o = this[n]) ? r = this : (o = s[i]) ? r = s : (o = this[i]) && (r = this), "function" == typeof o ? function() {
                return o.apply(r, arguments) || ""
            } : function() {
                return o || ""
            }
        }
    }, J.prototype = H(Q.prototype), t.extend(J.prototype, {
        el: null,
        coordMap: null,
        cellDuration: null,
        render: function() {
            this.bindHandlers()
        },
        destroy: function() {},
        buildCoords: function() {},
        getCellDate: function() {},
        getCellDayEl: function() {},
        rangeToSegs: function() {},
        bindHandlers: function() {
            var e = this;
            this.el.on("mousedown", function(i) {
                t(i.target).is(".fc-event-container *, .fc-more") || t(i.target).closest(".fc-popover").length || e.dayMousedown(i)
            }), this.bindSegHandlers()
        },
        dayMousedown: function(t) {
            var e, i, n, r = this,
                o = this.view,
                s = o.opt("selectable"),
                l = null,
                a = new q(this.coordMap, {
                    scroll: o.opt("dragScroll"),
                    dragStart: function() {
                        o.unselect()
                    },
                    cellOver: function(t, o) {
                        a.origDate && (n = r.getCellDayEl(t), l = [o, a.origDate].sort(C), e = l[0], i = l[1].clone().add(r.cellDuration), s && r.renderSelection(e, i))
                    },
                    cellOut: function() {
                        l = null, r.destroySelection()
                    },
                    listenStop: function(t) {
                        l && (l[0].isSame(l[1]) && o.trigger("dayClick", n[0], e, t), s && o.reportSelection(e, i, t))
                    }
                });
            a.mousedown(t)
        },
        renderDrag: function() {},
        destroyDrag: function() {},
        renderResize: function() {},
        destroyResize: function() {},
        renderRangeHelper: function(t, e, i) {
            var n, r = this.view;
            !e && r.opt("forceEventDuration") && (e = r.calendar.getDefaultEventEnd(!t.hasTime(), t)), n = i ? H(i.event) : {}, n.start = t, n.end = e, n.allDay = !(t.hasTime() || e && e.hasTime()), n.className = (n.className || []).concat("fc-helper"), i || (n.editable = !1), this.renderHelper(n, i)
        },
        renderHelper: function() {},
        destroyHelper: function() {},
        renderSelection: function(t, e) {
            this.renderHighlight(t, e)
        },
        destroySelection: function() {
            this.destroyHighlight()
        },
        renderHighlight: function() {},
        destroyHighlight: function() {},
        headHtml: function() {
            return '<div class="fc-row ' + this.view.widgetHeaderClass + '">' + "<table>" + "<thead>" + this.rowHtml("head") + "</thead>" + "</table>" + "</div>"
        },
        headCellHtml: function(t, e, i) {
            var n = this.view,
                r = n.calendar,
                o = n.opt("columnFormat");
            return '<th class="fc-day-header ' + n.widgetHeaderClass + " fc-" + Re[i.day()] + '">' + R(r.formatDate(i, o)) + "</th>"
        },
        bgCellHtml: function(t, e, i) {
            var n = this.view,
                r = this.getDayClasses(i);
            return r.unshift("fc-day", n.widgetContentClass), '<td class="' + r.join(" ") + '" data-date="' + i.format() + '"></td>'
        },
        getDayClasses: function(t) {
            var e = this.view,
                i = e.calendar.getNow().stripTime(),
                n = ["fc-" + Re[t.day()]];
            return "month" === e.name && t.month() != e.intervalStart.month() && n.push("fc-other-month"), t.isSame(i, "day") ? n.push("fc-today", e.highlightStateClass) : i > t ? n.push("fc-past") : n.push("fc-future"), n
        }
    }), t.extend(J.prototype, {
        mousedOverSeg: null,
        isDraggingSeg: !1,
        isResizingSeg: !1,
        renderEvents: function() {},
        getSegs: function() {},
        destroyEvents: function() {
            this.triggerSegMouseout()
        },
        renderSegs: function(e, i) {
            var n, r = this.view,
                o = "",
                s = [];
            for (n = 0; e.length > n; n++) o += this.renderSegHtml(e[n], i);
            return t(o).each(function(i, n) {
                var o = e[i],
                    l = r.resolveEventEl(o.event, t(n));
                l && (l.data("fc-seg", o), o.el = l, s.push(o))
            }), s
        },
        renderSegHtml: function() {},
        eventsToSegs: function(e, i, n) {
            var r = this;
            return t.map(e, function(t) {
                return r.eventToSegs(t, i, n)
            })
        },
        eventToSegs: function(t, e, i) {
            var n, r, o, s = t.start.clone().stripZone(),
                l = this.view.calendar.getEventEnd(t).stripZone();
            for (e && i ? (o = b(s, l, e, i), n = o ? [o] : []) : n = this.rangeToSegs(s, l), r = 0; n.length > r; r++) o = n[r], o.event = t, o.eventStartMS = +s, o.eventDurationMS = l - s;
            return n
        },
        bindSegHandlers: function() {
            var e = this,
                i = this.view;
            t.each({
                mouseenter: function(t, i) {
                    e.triggerSegMouseover(t, i)
                },
                mouseleave: function(t, i) {
                    e.triggerSegMouseout(t, i)
                },
                click: function(t, e) {
                    return i.trigger("eventClick", this, t.event, e)
                },
                mousedown: function(n, r) {
                    t(r.target).is(".fc-resizer") && i.isEventResizable(n.event) ? e.segResizeMousedown(n, r) : i.isEventDraggable(n.event) && e.segDragMousedown(n, r)
                }
            }, function(i, n) {
                e.el.on(i, ".fc-event-container > *", function(i) {
                    var r = t(this).data("fc-seg");
                    return !r || e.isDraggingSeg || e.isResizingSeg ? void 0 : n.call(this, r, i)
                })
            })
        },
        triggerSegMouseover: function(t, e) {
            this.mousedOverSeg || (this.mousedOverSeg = t, this.view.trigger("eventMouseover", t.el[0], t.event, e))
        },
        triggerSegMouseout: function(t, e) {
            e = e || {}, this.mousedOverSeg && (t = t || this.mousedOverSeg, this.mousedOverSeg = null, this.view.trigger("eventMouseout", t.el[0], t.event, e))
        },
        segDragMousedown: function(t, e) {
            var i, n, r = this,
                o = this.view,
                s = t.el,
                l = t.event,
                a = new K(t.el, {
                    parentEl: o.el,
                    opacity: o.opt("dragOpacity"),
                    revertDuration: o.opt("dragRevertDuration"),
                    zIndex: 2
                }),
                c = new q(o.coordMap, {
                    distance: 5,
                    scroll: o.opt("dragScroll"),
                    listenStart: function(t) {
                        a.hide(), a.start(t)
                    },
                    dragStart: function(e) {
                        r.triggerSegMouseout(t, e), r.isDraggingSeg = !0, o.hideEvent(l), o.trigger("eventDragStart", s[0], l, e, {})
                    },
                    cellOver: function(e, s) {
                        var l = t.cellDate || c.origDate,
                            d = r.computeDraggedEventDates(t, l, s);
                        i = d.start, n = d.end, o.renderDrag(i, n, t) ? a.hide() : a.show()
                    },
                    cellOut: function() {
                        i = null, o.destroyDrag(), a.show()
                    },
                    dragStop: function(t) {
                        var e = i && !i.isSame(l.start);
                        a.stop(!e, function() {
                            r.isDraggingSeg = !1, o.destroyDrag(), o.showEvent(l), o.trigger("eventDragStop", s[0], l, t, {}), e && o.eventDrop(s[0], l, i, t)
                        })
                    },
                    listenStop: function() {
                        a.stop()
                    }
                });
            c.mousedown(e)
        },
        computeDraggedEventDates: function(t, e, i) {
            var n, r, o, s = this.view,
                l = t.event,
                a = l.start,
                c = s.calendar.getEventEnd(l);
            return i.hasTime() === e.hasTime() ? (n = D(i, e), r = a.clone().add(n), o = null === l.end ? null : c.clone().add(n)) : (r = i, o = null), {
                start: r,
                end: o
            }
        },
        segResizeMousedown: function(t, e) {
            function i() {
                r.destroyResize(), o.showEvent(l)
            }
            var n, r = this,
                o = this.view,
                s = t.el,
                l = t.event,
                a = l.start,
                c = o.calendar.getEventEnd(l),
                d = null;
            n = new q(this.coordMap, {
                distance: 5,
                scroll: o.opt("dragScroll"),
                dragStart: function(e) {
                    r.triggerSegMouseout(t, e), r.isResizingSeg = !0, o.trigger("eventResizeStart", s[0], l, e, {})
                },
                cellOver: function(e, n) {
                    n.isBefore(a) && (n = a), d = n.clone().add(r.cellDuration), d.isSame(c) ? (d = null, i()) : (r.renderResize(a, d, t), o.hideEvent(l))
                },
                cellOut: function() {
                    d = null, i()
                },
                dragStop: function(t) {
                    r.isResizingSeg = !1, i(), o.trigger("eventResizeStop", s[0], l, t, {}), d && o.eventResize(s[0], l, d, t)
                }
            }), n.mousedown(e)
        },
        getSegClasses: function(t, e, i) {
            var n = t.event,
                r = ["fc-event", t.isStart ? "fc-start" : "fc-not-start", t.isEnd ? "fc-end" : "fc-not-end"].concat(n.className, n.source ? n.source.className : []);
            return e && r.push("fc-draggable"), i && r.push("fc-resizable"), r
        },
        getEventSkinCss: function(t) {
            var e = this.view,
                i = t.source || {},
                n = t.color,
                r = i.color,
                o = e.opt("eventColor"),
                s = t.backgroundColor || n || i.backgroundColor || r || e.opt("eventBackgroundColor") || o,
                l = t.borderColor || n || i.borderColor || r || e.opt("eventBorderColor") || o,
                a = t.textColor || i.textColor || e.opt("eventTextColor"),
                c = [];
            return s && c.push("background-color:" + s), l && c.push("border-color:" + l), a && c.push("color:" + a), c.join(";")
        }
    }), ee.prototype = H(J.prototype), t.extend(ee.prototype, {
        numbersVisible: !1,
        cellDuration: e.duration({
            days: 1
        }),
        bottomCoordPadding: 0,
        rowEls: null,
        dayEls: null,
        helperEls: null,
        highlightEls: null,
        render: function(e) {
            var i, n = this.view,
                r = "";
            for (i = 0; n.rowCnt > i; i++) r += this.dayRowHtml(i, e);
            this.el.html(r), this.rowEls = this.el.find(".fc-row"), this.dayEls = this.el.find(".fc-day"), this.dayEls.each(function(e, i) {
                var r = n.cellToDate(Math.floor(e / n.colCnt), e % n.colCnt);
                n.trigger("dayRender", null, r, t(i))
            }), J.prototype.render.call(this)
        },
        destroy: function() {
            this.destroySegPopover()
        },
        dayRowHtml: function(t, e) {
            var i = this.view,
                n = ["fc-row", "fc-week", i.widgetContentClass];
            return e && n.push("fc-rigid"), '<div class="' + n.join(" ") + '">' + '<div class="fc-bg">' + "<table>" + this.rowHtml("day", t) + "</table>" + "</div>" + '<div class="fc-content-skeleton">' + "<table>" + (this.numbersVisible ? "<thead>" + this.rowHtml("number", t) + "</thead>" : "") + "</table>" + "</div>" + "</div>"
        },
        dayCellHtml: function(t, e, i) {
            return this.bgCellHtml(t, e, i)
        },
        buildCoords: function(e, i) {
            var n, r, o, s = this.view.colCnt;
            this.dayEls.slice(0, s).each(function(e, s) {
                n = t(s), r = n.offset().left, e && (o[1] = r), o = [r], i[e] = o
            }), o[1] = r + n.outerWidth(), this.rowEls.each(function(i, s) {
                n = t(s), r = n.offset().top, i && (o[1] = r), o = [r], e[i] = o
            }), o[1] = r + n.outerHeight() + this.bottomCoordPadding
        },
        getCellDate: function(t) {
            return this.view.cellToDate(t)
        },
        getCellDayEl: function(t) {
            return this.dayEls.eq(t.row * this.view.colCnt + t.col)
        },
        rangeToSegs: function(t, e) {
            return this.view.rangeToSegments(t, e)
        },
        renderDrag: function(t, e, i) {
            var n;
            return this.renderHighlight(t, e || this.view.calendar.getDefaultEventEnd(!0, t)), i && !i.el.closest(this.el).length ? (this.renderRangeHelper(t, e, i), n = this.view.opt("dragOpacity"), void 0 !== n && this.helperEls.css("opacity", n), !0) : void 0
        },
        destroyDrag: function() {
            this.destroyHighlight(), this.destroyHelper()
        },
        renderResize: function(t, e, i) {
            this.renderHighlight(t, e), this.renderRangeHelper(t, e, i)
        },
        destroyResize: function() {
            this.destroyHighlight(), this.destroyHelper()
        },
        renderHelper: function(e, i) {
            var n = [],
                r = this.renderEventRows([e]);
            this.rowEls.each(function(e, o) {
                var s, l = t(o),
                    a = t('<div class="fc-helper-skeleton"><table/></div>');
                s = i && i.row === e ? i.el.position().top : l.find(".fc-content-skeleton tbody").position().top, a.css("top", s).find("table").append(r[e].tbodyEl), l.append(a), n.push(a[0])
            }), this.helperEls = t(n)
        },
        destroyHelper: function() {
            this.helperEls && (this.helperEls.remove(), this.helperEls = null)
        },
        renderHighlight: function(e, i) {
            var n, r, o, s = this.rangeToSegs(e, i),
                l = [];
            for (n = 0; s.length > n; n++) r = s[n], o = t(this.highlightSkeletonHtml(r.leftCol, r.rightCol + 1)), o.appendTo(this.rowEls[r.row]), l.push(o[0]);
            this.highlightEls = t(l)
        },
        destroyHighlight: function() {
            this.highlightEls && (this.highlightEls.remove(), this.highlightEls = null)
        },
        highlightSkeletonHtml: function(t, e) {
            var i = this.view.colCnt,
                n = "";
            return t > 0 && (n += '<td colspan="' + t + '"/>'), e > t && (n += '<td colspan="' + (e - t) + '" class="fc-highlight" />'), i > e && (n += '<td colspan="' + (i - e) + '"/>'), n = this.bookendCells(n, "highlight"), '<div class="fc-highlight-skeleton"><table><tr>' + n + "</tr>" + "</table>" + "</div>"
        }
    }), t.extend(ee.prototype, {
        segs: null,
        rowStructs: null,
        renderEvents: function(e) {
            var i = this.rowStructs = this.renderEventRows(e),
                n = [];
            this.rowEls.each(function(e, r) {
                t(r).find(".fc-content-skeleton > table").append(i[e].tbodyEl), n.push.apply(n, i[e].segs)
            }), this.segs = n
        },
        getSegs: function() {
            return (this.segs || []).concat(this.popoverSegs || [])
        },
        destroyEvents: function() {
            var t, e;
            for (J.prototype.destroyEvents.call(this), t = this.rowStructs || []; e = t.pop();) e.tbodyEl.remove();
            this.segs = null, this.destroySegPopover()
        },
        renderEventRows: function(t) {
            var e, i, n = this.eventsToSegs(t),
                r = [];
            for (n = this.renderSegs(n), e = this.groupSegRows(n), i = 0; e.length > i; i++) r.push(this.renderEventRow(i, e[i]));
            return r
        },
        renderSegHtml: function(t, e) {
            var i, n = this.view,
                r = n.opt("isRTL"),
                o = t.event,
                s = n.isEventDraggable(o),
                l = !e && o.allDay && t.isEnd && n.isEventResizable(o),
                a = this.getSegClasses(t, s, l),
                c = this.getEventSkinCss(o),
                d = "";
            return a.unshift("fc-day-grid-event"), !o.allDay && t.isStart && (d = '<span class="fc-time">' + R(n.getEventTimeText(o)) + "</span>"),
			 i = '<span class="fc-title">' + (R(o.title || "") || "&nbsp;") + "</span>", '<a class="' + a.join(" ") + '"' + (o.url ? ' href="' + R(o.url) + 
			 '"' : "") + (c ? ' style="' + c + '"' : "") + ">" + '<div class="fc-content">' + (r ? i + " " + d : d + " " + i) + "</div>" + 
			 (l ? '<div class="fc-resizer"/>' : "") + "</a>"
        },
        renderEventRow: function(e, i) {
            function n(e) {
                for (; e > s;) d = (y[r - 1] || [])[s], d ? d.attr("rowspan", parseInt(d.attr("rowspan") || 1, 10) + 1) : (d = t("<td/>"), l.append(d)), v[r][s] = d, y[r][s] = d, s++
            }
            var r, o, s, l, a, c, d, h = this.view,
                u = h.colCnt,
                f = this.buildSegLevels(i),
                g = Math.max(1, f.length),
                p = t("<tbody/>"),
                m = [],
                v = [],
                y = [];
            for (r = 0; g > r; r++) {
                if (o = f[r], s = 0, l = t("<tr/>"), m.push([]), v.push([]), y.push([]), o)
                    for (a = 0; o.length > a; a++) {
                        for (c = o[a], n(c.leftCol), d = t('<td class="fc-event-container"/>').append(c.el), c.leftCol != c.rightCol ? d.attr("colspan", c.rightCol - c.leftCol + 1) : y[r][s] = d; c.rightCol >= s;) v[r][s] = d, m[r][s] = c, s++;
                        l.append(d),
						l.append('<td class="fc-event-container">Booking Closed</td>')
                    }
                n(u), this.bookendCells(l, "eventSkeleton"), p.append(l),
            }
            return {
                row: e,
                tbodyEl: p,
                cellMatrix: v,
                segMatrix: m,
                segLevels: f,
                segs: i
            }
        },
        buildSegLevels: function(t) {
            var e, i, n, r = [];
            for (t.sort(te), e = 0; t.length > e; e++) {
                for (i = t[e], n = 0; r.length > n && ie(i, r[n]); n++);
                i.level = n, (r[n] || (r[n] = [])).push(i)
            }
            for (n = 0; r.length > n; n++) r[n].sort(ne);
            return r
        },
        groupSegRows: function(t) {
            var e, i = this.view,
                n = [];
            for (e = 0; i.rowCnt > e; e++) n.push([]);
            for (e = 0; t.length > e; e++) n[t[e].row].push(t[e]);
            return n
        }
    }), t.extend(ee.prototype, {
        segPopover: null,
        popoverSegs: null,
        destroySegPopover: function() {
            this.segPopover && this.segPopover.hide()
        },
        limitRows: function(t) {
            var e, i, n = this.rowStructs || [];
            for (e = 0; n.length > e; e++) this.unlimitRow(e), i = t ? "number" == typeof t ? t : this.computeRowLevelLimit(e) : !1, i !== !1 && this.limitRow(e, i)
        },
        computeRowLevelLimit: function(t) {
            var e, i, n = this.rowEls.eq(t),
                r = n.height(),
                o = this.rowStructs[t].tbodyEl.children();
            for (e = 0; o.length > e; e++)
                if (i = o.eq(e).removeClass("fc-limited"), i.position().top + i.outerHeight() > r) return e;
            return !1
        },
        limitRow: function(e, i) {
            function n(n) {
                for (; n > T;) r = {
                    row: e,
                    col: T
                }, d = E.getCellSegs(r, i), d.length && (f = s[i - 1][T], w = E.renderMoreLink(r, d), y = t("<div/>").append(w), f.append(y), D.push(y[0])), T++
            }
            var r, o, s, l, a, c, d, h, u, f, g, p, m, v, y, w, E = this,
                b = this.view,
                S = this.rowStructs[e],
                D = [],
                T = 0;
            if (i && S.segLevels.length > i) {
                for (o = S.segLevels[i - 1], s = S.cellMatrix, l = S.tbodyEl.children().slice(i).addClass("fc-limited").get(), a = 0; o.length > a; a++) {
                    for (c = o[a], n(c.leftCol), u = [], h = 0; c.rightCol >= T;) r = {
                        row: e,
                        col: T
                    }, d = this.getCellSegs(r, i), u.push(d), h += d.length, T++;
                    if (h) {
                        for (f = s[i - 1][c.leftCol], g = f.attr("rowspan") || 1, p = [], m = 0; u.length > m; m++) v = t('<td class="fc-more-cell"/>').attr("rowspan", g), d = u[m], r = {
                            row: e,
                            col: c.leftCol + m
                        }, w = this.renderMoreLink(r, [c].concat(d)), y = t("<div/>").append(w), v.append(y), p.push(v[0]), D.push(v[0]);
                        f.addClass("fc-limited").after(t(p)), l.push(f[0])
                    }
                }
                n(b.colCnt), S.moreEls = t(D), S.limitedEls = t(l)
            }
        },
        unlimitRow: function(t) {
            var e = this.rowStructs[t];
            e.moreEls && (e.moreEls.remove(), e.moreEls = null), e.limitedEls && (e.limitedEls.removeClass("fc-limited"), e.limitedEls = null)
        },
        renderMoreLink: function(e, i) {
            var n = this,
                r = this.view;
            return t('<a class="fc-more"/>').text(this.getMoreLinkText(i.length)).on("click", function(o) {
                var s = r.opt("eventLimitClick"),
                    l = r.cellToDate(e),
                    a = t(this),
                    c = n.getCellDayEl(e),
                    d = n.getCellSegs(e),
                    h = n.resliceDaySegs(d, l),
                    u = n.resliceDaySegs(i, l);
                "function" == typeof s && (s = r.trigger("eventLimitClick", null, {
                    date: l,
                    dayEl: c,
                    moreEl: a,
                    segs: h,
                    hiddenSegs: u
                }, o)), "popover" === s ? n.showSegPopover(l, e, a, h) : "string" == typeof s && r.calendar.zoomTo(l, s)
            })
        },
        showSegPopover: function(t, e, i, n) {
            var r, o, s = this,
                l = this.view,
                a = i.parent();
            r = 1 == l.rowCnt ? this.view.el : this.rowEls.eq(e.row), o = {
                className: "fc-more-popover",
                content: this.renderSegPopoverContent(t, n),
                parentEl: this.el,
                top: r.offset().top,
                autoHide: !0,
                viewportConstrain: l.opt("popoverViewportConstrain"),
                hide: function() {
                    s.segPopover.destroy(), s.segPopover = null, s.popoverSegs = null
                }
            }, l.opt("isRTL") ? o.right = a.offset().left + a.outerWidth() + 1 : o.left = a.offset().left - 1, this.segPopover = new j(o), this.segPopover.show()
        },
        renderSegPopoverContent: function(e, i) {
            var n, r = this.view,
                o = r.opt("theme"),
                s = e.format(r.opt("dayPopoverFormat")),
                l = t('<div class="fc-header ' + r.widgetHeaderClass + '">' + '<span class="fc-close ' + (o ? "ui-icon ui-icon-closethick" : "fc-icon fc-icon-x") + '"></span>' + '<span class="fc-title">' + R(s) + "</span>" + '<div class="fc-clear"/>' + "</div>" + '<div class="fc-body ' + r.widgetContentClass + '">' + '<div class="fc-event-container"></div>' + "</div>"),
                a = l.find(".fc-event-container");
            for (i = this.renderSegs(i, !0), this.popoverSegs = i, n = 0; i.length > n; n++) i[n].cellDate = e, a.append(i[n].el);
            return l
        },
        resliceDaySegs: function(e, i) {
            var n = t.map(e, function(t) {
                    return t.event
                }),
                r = i.clone().stripTime(),
                o = r.clone().add(1, "days");
            return this.eventsToSegs(n, r, o)
        },
        getMoreLinkText: function(t) {
            var e = this.view,
                i = e.opt("eventLimitText");
            return "function" == typeof i ? i(t) : "+" + t + " " + i
        },
        getCellSegs: function(t, e) {
            for (var i, n = this.rowStructs[t.row].segMatrix, r = e || 0, o = []; n.length > r;) i = n[r][t.col], i && o.push(i), r++;
            return o
        }
    }), re.prototype = H(J.prototype), t.extend(re.prototype, {
        slotDuration: null,
        snapDuration: null,
        minTime: null,
        maxTime: null,
        dayEls: null,
        slatEls: null,
        slatTops: null,
        highlightEl: null,
        helperEl: null,
        render: function() {
            this.processOptions(), this.el.html(this.renderHtml()), this.dayEls = this.el.find(".fc-day"), this.slatEls = this.el.find(".fc-slats tr"), this.computeSlatTops(), J.prototype.render.call(this)
        },
        renderHtml: function() {
            return '<div class="fc-bg"><table>' + this.rowHtml("slotBg") + "</table>" + "</div>" + '<div class="fc-slats">' + "<table>" + this.slatRowHtml() + "</table>" + "</div>"
        },
        slotBgCellHtml: function(t, e, i) {
            return this.bgCellHtml(t, e, i)
        },
        slatRowHtml: function() {
            for (var t, i, n, r = this.view, o = r.calendar, s = r.opt("isRTL"), l = "", a = 0 === this.slotDuration.asMinutes() % 15, c = e.duration(+this.minTime); this.maxTime > c;) t = r.start.clone().time(c), i = t.minutes(), n = '<td class="fc-axis fc-time ' + r.widgetContentClass + '" ' + r.axisStyleAttr() + ">" + (a && i ? "" : "<span>" + R(o.formatDate(t, r.opt("axisFormat"))) + "</span>") + "</td>", l += "<tr " + (i ? 'class="fc-minor"' : "") + ">" + (s ? "" : n) + '<td class="' + r.widgetContentClass + '"/>' + (s ? n : "") + "</tr>", c.add(this.slotDuration);
            return l
        },
        processOptions: function() {
            var t = this.view,
                i = t.opt("slotDuration"),
                n = t.opt("snapDuration");
            i = e.duration(i), n = n ? e.duration(n) : i, this.slotDuration = i, this.snapDuration = n, this.cellDuration = n, this.minTime = e.duration(t.opt("minTime")), this.maxTime = e.duration(t.opt("maxTime"))
        },
        rangeToSegs: function(t, e) {
            var i, n, r, o, s, l = this.view,
                a = [];
            for (t = t.clone().stripZone(), e = e.clone().stripZone(), n = 0; l.colCnt > n; n++) r = l.cellToDate(0, n), o = r.clone().time(this.minTime), s = r.clone().time(this.maxTime), i = b(t, e, o, s), i && (i.col = n, a.push(i));
            return a
        },
        resize: function() {
            this.computeSlatTops(), this.updateSegVerticals()
        },
        buildCoords: function(i, n) {
            var r, o, s = this.view.colCnt,
                l = this.el.offset().top,
                a = e.duration(+this.minTime),
                c = null;
            for (this.dayEls.slice(0, s).each(function(e, i) {
                    r = t(i), o = r.offset().left, c && (c[1] = o), c = [o], n[e] = c
                }), c[1] = o + r.outerWidth(), c = null; this.maxTime > a;) o = l + this.computeTimeTop(a), c && (c[1] = o), c = [o], i.push(c), a.add(this.snapDuration);
            c[1] = l + this.computeTimeTop(a)
        },
        getCellDate: function(t) {
            var e = this.view,
                i = e.calendar;
            return i.rezoneDate(e.cellToDate(0, t.col).time(this.minTime + this.snapDuration * t.row))
        },
        getCellDayEl: function(t) {
            return this.dayEls.eq(t.col)
        },
        computeDateTop: function(t, i) {
            return this.computeTimeTop(e.duration(t.clone().stripZone() - i.clone().stripTime()))
        },
        computeTimeTop: function(t) {
            var e, i, n, r, o = (t - this.minTime) / this.slotDuration;
            return o = Math.max(0, o), o = Math.min(this.slatEls.length, o), e = Math.floor(o), i = o - e, n = this.slatTops[e], i ? (r = this.slatTops[e + 1], n + (r - n) * i) : n
        },
        computeSlatTops: function() {
            var e, i = [];
            this.slatEls.each(function(n, r) {
                e = t(r).position().top, i.push(e)
            }), i.push(e + this.slatEls.last().outerHeight()), this.slatTops = i
        },
        renderDrag: function(t, e, i) {
            var n;
            return i ? (this.renderRangeHelper(t, e, i), n = this.view.opt("dragOpacity"), void 0 !== n && this.helperEl.css("opacity", n), !0) : (this.renderHighlight(t, e || this.view.calendar.getDefaultEventEnd(!1, t)), void 0)
        },
        destroyDrag: function() {
            this.destroyHelper(), this.destroyHighlight()
        },
        renderResize: function(t, e, i) {
            this.renderRangeHelper(t, e, i)
        },
        destroyResize: function() {
            this.destroyHelper()
        },
        renderHelper: function(e, i) {
            var n, r, o, s = this.renderEventTable([e]),
                l = s.tableEl,
                a = s.segs;
            for (n = 0; a.length > n; n++) r = a[n], i && i.col === r.col && (o = i.el, r.el.css({
                left: o.css("left"),
                right: o.css("right"),
                "margin-left": o.css("margin-left"),
                "margin-right": o.css("margin-right")
            }));
            this.helperEl = t('<div class="fc-helper-skeleton"/>').append(l).appendTo(this.el)
        },
        destroyHelper: function() {
            this.helperEl && (this.helperEl.remove(), this.helperEl = null)
        },
        renderSelection: function(t, e) {
            this.view.opt("selectHelper") ? this.renderRangeHelper(t, e) : this.renderHighlight(t, e)
        },
        destroySelection: function() {
            this.destroyHelper(), this.destroyHighlight()
        },
        renderHighlight: function(e, i) {
            this.highlightEl = t(this.highlightSkeletonHtml(e, i)).appendTo(this.el)
        },
        destroyHighlight: function() {
            this.highlightEl && (this.highlightEl.remove(), this.highlightEl = null)
        },
        highlightSkeletonHtml: function(t, e) {
            var i, n, r, o, s, l = this.view,
                a = this.rangeToSegs(t, e),
                c = "",
                d = 0;
            for (i = 0; a.length > i; i++) n = a[i], n.col > d && (c += '<td colspan="' + (n.col - d) + '"/>', d = n.col), r = l.cellToDate(0, d), o = this.computeDateTop(n.start, r), s = this.computeDateTop(n.end, r), c += '<td><div class="fc-highlight-container"><div class="fc-highlight" style="top:' + o + "px;bottom:-" + s + 'px"/>' + "</div>" + "</td>", d++;
            return l.colCnt > d && (c += '<td colspan="' + (l.colCnt - d) + '"/>'), c = this.bookendCells(c, "highlight"), '<div class="fc-highlight-skeleton"><table><tr>' + c + "</tr>" + "</table>" + "</div>"
        }
    }), t.extend(re.prototype, {
        segs: null,
        eventSkeletonEl: null,
        renderEvents: function(e) {
            var i = this.renderEventTable(e);
            this.eventSkeletonEl = t('<div class="fc-content-skeleton"/>').append(i.tableEl), this.el.append(this.eventSkeletonEl), this.segs = i.segs
        },
        getSegs: function() {
            return this.segs || []
        },
        destroyEvents: function() {
            J.prototype.destroyEvents.call(this), this.eventSkeletonEl && (this.eventSkeletonEl.remove(), this.eventSkeletonEl = null), this.segs = null
        },
        renderEventTable: function(e) {
            var i, n, r, o, s, l, a = t("<table><tr/></table>"),
                c = a.find("tr"),
                d = this.eventsToSegs(e);
            for (d = this.renderSegs(d), i = this.groupSegCols(d), this.computeSegVerticals(d), o = 0; i.length > o; o++) {
                for (s = i[o], oe(s), l = t('<div class="fc-event-container"/>'), n = 0; s.length > n; n++) r = s[n], r.el.css(this.generateSegPositionCss(r)), 30 > r.bottom - r.top && r.el.addClass("fc-short"), l.append(r.el);
                c.append(t("<td/>").append(l))
            }
            return this.bookendCells(c, "eventSkeleton"), {
                tableEl: a,
                segs: d
            }
        },
        updateSegVerticals: function() {
            var t, e = this.segs;
            if (e)
                for (this.computeSegVerticals(e), t = 0; e.length > t; t++) e[t].el.css(this.generateSegVerticalCss(e[t]))
        },
        computeSegVerticals: function(t) {
            var e, i;
            for (e = 0; t.length > e; e++) i = t[e], i.top = this.computeDateTop(i.start, i.start), i.bottom = this.computeDateTop(i.end, i.start)
        },
        renderSegHtml: function(t, e) {
            var i, n, r, o = this.view,
                s = t.event,
                l = o.isEventDraggable(s),
                a = !e && t.isEnd && o.isEventResizable(s),
                c = this.getSegClasses(t, l, a),
                d = this.getEventSkinCss(s);
            return c.unshift("fc-time-grid-event"), o.isMultiDayEvent(s) ? (t.isStart || t.isEnd) && (i = o.getEventTimeText(t.start, t.end), n = o.getEventTimeText(t.start, t.end, "LT"), r = o.getEventTimeText(t.start, null)) : (i = o.getEventTimeText(s), n = o.getEventTimeText(s, "LT"), r = o.getEventTimeText(s.start, null)), '<a class="' + c.join(" ") + '"' + (s.url ? ' href="' + R(s.url) + '"' : "") + (d ? ' style="' + d + '"' : "") + ">" + '<div class="fc-content">' + (i ? '<div class="fc-time" data-start="' + R(r) + '"' + ' data-full="' + R(n) + '"' + ">" + "<span>" + R(i) + "</span>" + "</div>" : "") + (s.title ? '<div class="fc-title">' + R(s.title) + "</div>" : "") + "</div>" + '<div class="fc-bg"/>' + (a ? '<div class="fc-resizer"/>' : "") + "</a>"
        },
        generateSegPositionCss: function(t) {
            var e, i, n = this.view,
                r = n.opt("isRTL"),
                o = n.opt("slotEventOverlap"),
                s = t.backwardCoord,
                l = t.forwardCoord,
                a = this.generateSegVerticalCss(t);
            return o && (l = Math.min(1, s + 2 * (l - s))), r ? (e = 1 - l, i = s) : (e = s, i = 1 - l), a.zIndex = t.level + 1, a.left = 100 * e + "%", a.right = 100 * i + "%", o && t.forwardPressure && (a[r ? "marginLeft" : "marginRight"] = 20), a
        },
        generateSegVerticalCss: function(t) {
            return {
                top: t.top,
                bottom: -t.bottom
            }
        },
        groupSegCols: function(t) {
            var e, i = this.view,
                n = [];
            for (e = 0; i.colCnt > e; e++) n.push([]);
            for (e = 0; t.length > e; e++) n[t[e].col].push(t[e]);
            return n
        }
    }), fe.prototype = {
        calendar: null,
        coordMap: null,
        el: null,
        start: null,
        end: null,
        intervalStart: null,
        intervalEnd: null,
        rowCnt: null,
        colCnt: null,
        isSelected: !1,
        scrollerEl: null,
        scrollTop: null,
        widgetHeaderClass: null,
        widgetContentClass: null,
        highlightStateClass: null,
        documentMousedownProxy: null,
        documentDragStartProxy: null,
        init: function() {
            var e = this.opt("theme") ? "ui" : "fc";
            this.widgetHeaderClass = e + "-widget-header", this.widgetContentClass = e + "-widget-content", this.highlightStateClass = e + "-state-highlight", this.documentMousedownProxy = t.proxy(this, "documentMousedown"), this.documentDragStartProxy = t.proxy(this, "documentDragStart")
        },
        render: function() {
            this.updateSize(), this.trigger("viewRender", this, this, this.el), t(document).on("mousedown", this.documentMousedownProxy).on("dragstart", this.documentDragStartProxy)
        },
        destroy: function() {
            this.unselect(), this.trigger("viewDestroy", this, this, this.el), this.destroyEvents(), this.el.empty(), t(document).off("mousedown", this.documentMousedownProxy).off("dragstart", this.documentDragStartProxy)
        },
        incrementDate: function() {},
        updateSize: function(t) {
            t && this.recordScroll(), this.updateHeight(), this.updateWidth()
        },
        updateWidth: function() {},
        updateHeight: function() {
            var t = this.calendar;
            this.setHeight(t.getSuggestedViewHeight(), t.isHeightAuto())
        },
        setHeight: function() {},
        computeScrollerHeight: function(t) {
            var e, i = this.el.add(this.scrollerEl);
            return i.css({
                position: "relative",
                left: -1
            }), e = this.el.outerHeight() - this.scrollerEl.height(), i.css({
                position: "",
                left: ""
            }), t - e
        },
        recordScroll: function() {
            this.scrollerEl && (this.scrollTop = this.scrollerEl.scrollTop())
        },
        restoreScroll: function() {
            null !== this.scrollTop && this.scrollerEl.scrollTop(this.scrollTop)
        },
        renderEvents: function() {
            this.segEach(function(t) {
                this.trigger("eventAfterRender", t.event, t.event, t.el)
            }), this.trigger("eventAfterAllRender")
        },
        destroyEvents: function() {
            this.segEach(function(t) {
                this.trigger("eventDestroy", t.event, t.event, t.el)
            })
        },
        resolveEventEl: function(e, i) {
            var n = this.trigger("eventRender", e, e, i);
            return n === !1 ? i = null : n && n !== !0 && (i = t(n)), i
        },
        showEvent: function(t) {
            this.segEach(function(t) {
                t.el.css("visibility", "")
            }, t)
        },
        hideEvent: function(t) {
            this.segEach(function(t) {
                t.el.css("visibility", "hidden")
            }, t)
        },
        segEach: function(t, e) {
            var i, n = this.getSegs();
            for (i = 0; n.length > i; i++) e && n[i].event._id !== e._id || t.call(this, n[i])
        },
        getSegs: function() {},
        renderDrag: function() {},
        destroyDrag: function() {},
        documentDragStart: function(e) {
            var i, n = this,
                r = null;
            this.opt("droppable") && (i = new q(this.coordMap, {
                cellOver: function(t, e) {
                    r = e, n.renderDrag(e)
                },
                cellOut: function() {
                    r = null, n.destroyDrag()
                }
            }), t(document).one("dragstop", function(t, e) {
                n.destroyDrag(), r && n.trigger("drop", t.target, r, t, e)
            }), i.startDrag(e))
        },
        select: function(t, e, i) {
            this.unselect(i), this.renderSelection(t, e), this.reportSelection(t, e, i)
        },
        renderSelection: function() {},
        reportSelection: function(t, e, i) {
            this.isSelected = !0, this.trigger("select", null, t, e, i)
        },
        unselect: function(t) {
            this.isSelected && (this.isSelected = !1, this.destroySelection(), this.trigger("unselect", null, t))
        },
        destroySelection: function() {},
        documentMousedown: function(e) {
            var i;
            this.isSelected && this.opt("unselectAuto") && E(e) && (i = this.opt("unselectCancel"), i && t(e.target).closest(i).length || this.unselect(e))
        }
    }, ge.prototype = H(fe.prototype), t.extend(ge.prototype, {
        dayGrid: null,
        dayNumbersVisible: !1,
        weekNumbersVisible: !1,
        weekNumberWidth: null,
        headRowEl: null,
        render: function(t, e, i) {
            this.rowCnt = t, this.colCnt = e, this.dayNumbersVisible = i, this.weekNumbersVisible = this.opt("weekNumbers"), this.dayGrid.numbersVisible = this.dayNumbersVisible || this.weekNumbersVisible, this.el.addClass("fc-basic-view").html(this.renderHtml()), this.headRowEl = this.el.find("thead .fc-row"), this.scrollerEl = this.el.find(".fc-day-grid-container"), this.dayGrid.coordMap.containerEl = this.scrollerEl, this.dayGrid.el = this.el.find(".fc-day-grid"), this.dayGrid.render(this.hasRigidRows()), fe.prototype.render.call(this)
        },
        destroy: function() {
            this.dayGrid.destroy(), fe.prototype.destroy.call(this)
        },
        renderHtml: function() {
            return '<table><thead><tr><td class="' + this.widgetHeaderClass + '">' + this.dayGrid.headHtml() + "</td>" + "</tr>" + "</thead>" + "<tbody>" + "<tr>" + '<td class="' + this.widgetContentClass + '">' + '<div class="fc-day-grid-container">' + '<div class="fc-day-grid"/>' + "</div>" + "</td>" + "</tr>" + "</tbody>" + "</table>"
        },
        headIntroHtml: function() {
            return this.weekNumbersVisible ? '<th class="fc-week-number ' + this.widgetHeaderClass + '" ' + this.weekNumberStyleAttr() + ">" + "<span>" + R(this.opt("weekNumberTitle")) + "</span>" + "</th>" : void 0
        },
        numberIntroHtml: function(t) {
            return this.weekNumbersVisible ? '<td class="fc-week-number" ' + this.weekNumberStyleAttr() + ">" + "<span>" + this.calendar.calculateWeekNumber(this.cellToDate(t, 0)) + "</span>" + "</td>" : void 0
        },
        dayIntroHtml: function() {
            return this.weekNumbersVisible ? '<td class="fc-week-number ' + this.widgetContentClass + '" ' + this.weekNumberStyleAttr() + "></td>" : void 0
        },
        introHtml: function() {
            return this.weekNumbersVisible ? '<td class="fc-week-number" ' + this.weekNumberStyleAttr() + "></td>" : void 0
        },
        numberCellHtml: function(t, e, i) {
            var n;
            return this.dayNumbersVisible ? (n = this.dayGrid.getDayClasses(i), n.unshift("fc-day-number"), '<td class="' + n.join(" ") + '" data-date="' + i.format() + '">' + i.date() + "</td>") : "<td/>"
        },
        weekNumberStyleAttr: function() {
            return null !== this.weekNumberWidth ? 'style="width:' + this.weekNumberWidth + 'px"' : ""
        },
        hasRigidRows: function() {
            var t = this.opt("eventLimit");
            return t && "number" != typeof t
        },
        updateWidth: function() {
            this.weekNumbersVisible && (this.weekNumberWidth = p(this.el.find(".fc-week-number")))
        },
        setHeight: function(t, e) {
            var i, n = this.opt("eventLimit");
            v(this.scrollerEl), u(this.headRowEl), this.dayGrid.destroySegPopover(), n && "number" == typeof n && this.dayGrid.limitRows(n), i = this.computeScrollerHeight(t), this.setGridHeight(i, e), n && "number" != typeof n && this.dayGrid.limitRows(n), !e && m(this.scrollerEl, i) && (h(this.headRowEl, w(this.scrollerEl)), i = this.computeScrollerHeight(t), this.scrollerEl.height(i), this.restoreScroll())
        },
        setGridHeight: function(t, e) {
            e ? g(this.dayGrid.rowEls) : f(this.dayGrid.rowEls, t, !0)
        },
        renderEvents: function(t) {
            this.dayGrid.renderEvents(t), this.updateHeight(), fe.prototype.renderEvents.call(this, t)
        },
        getSegs: function() {
            return this.dayGrid.getSegs()
        },
        destroyEvents: function() {
            fe.prototype.destroyEvents.call(this), this.recordScroll(), this.dayGrid.destroyEvents()
        },
        renderDrag: function(t, e, i) {
            return this.dayGrid.renderDrag(t, e, i)
        },
        destroyDrag: function() {
            this.dayGrid.destroyDrag()
        },
        renderSelection: function(t, e) {
            this.dayGrid.renderSelection(t, e)
        },
        destroySelection: function() {
            this.dayGrid.destroySelection()
        }
    }), r({
        fixedWeekCount: !0
    }), xe.month = pe, pe.prototype = H(ge.prototype), t.extend(pe.prototype, {
        name: "month",
        incrementDate: function(t, e) {
            return t.clone().stripTime().add(e, "months").startOf("month")
        },
        render: function(t) {
            var e;
            this.intervalStart = t.clone().stripTime().startOf("month"), this.intervalEnd = this.intervalStart.clone().add(1, "months"), this.start = this.intervalStart.clone(), this.start = this.skipHiddenDays(this.start), this.start.startOf("week"), this.start = this.skipHiddenDays(this.start), this.end = this.intervalEnd.clone(), this.end = this.skipHiddenDays(this.end, -1, !0), this.end.add((7 - this.end.weekday()) % 7, "days"), this.end = this.skipHiddenDays(this.end, -1, !0), e = Math.ceil(this.end.diff(this.start, "weeks", !0)), this.isFixedWeeks() && (this.end.add(6 - e, "weeks"), e = 6), this.title = this.calendar.formatDate(this.intervalStart, this.opt("titleFormat")), ge.prototype.render.call(this, e, this.getCellsPerWeek(), !0)
        },
        setGridHeight: function(t, e) {
            e = e || "variable" === this.opt("weekMode"), e && (t *= this.rowCnt / 6), f(this.dayGrid.rowEls, t, !e)
        },
        isFixedWeeks: function() {
            var t = this.opt("weekMode");
            return t ? "fixed" === t : this.opt("fixedWeekCount")
        }
    }), xe.basicWeek = me, me.prototype = H(ge.prototype), t.extend(me.prototype, {
        name: "basicWeek",
        incrementDate: function(t, e) {
            return t.clone().stripTime().add(e, "weeks").startOf("week")
        },
        render: function(t) {
            this.intervalStart = t.clone().stripTime().startOf("week"), this.intervalEnd = this.intervalStart.clone().add(1, "weeks"), this.start = this.skipHiddenDays(this.intervalStart), this.end = this.skipHiddenDays(this.intervalEnd, -1, !0), this.title = this.calendar.formatRange(this.start, this.end.clone().subtract(1), this.opt("titleFormat"), " — "), ge.prototype.render.call(this, 1, this.getCellsPerWeek(), !1)
        }
    }), xe.basicDay = ve, ve.prototype = H(ge.prototype), t.extend(ve.prototype, {
        name: "basicDay",
        incrementDate: function(t, e) {
            var i = t.clone().stripTime().add(e, "days");
            return i = this.skipHiddenDays(i, 0 > e ? -1 : 1)
        },
        render: function(t) {
            this.start = this.intervalStart = t.clone().stripTime(), this.end = this.intervalEnd = this.start.clone().add(1, "days"), this.title = this.calendar.formatDate(this.start, this.opt("titleFormat")), ge.prototype.render.call(this, 1, 1, !1)
        }
    }), r({
        allDaySlot: !0,
        allDayText: "all-day",
        scrollTime: "06:00:00",
        slotDuration: "00:30:00",
        axisFormat: ye,
        timeFormat: {
            agenda: we
        },
        minTime: "00:00:00",
        maxTime: "24:00:00",
        slotEventOverlap: !0
    });
    var Ye = 5;
    Ee.prototype = H(fe.prototype), t.extend(Ee.prototype, {
        timeGrid: null,
        dayGrid: null,
        axisWidth: null,
        noScrollRowEls: null,
        bottomRuleEl: null,
        bottomRuleHeight: null,
        render: function(e) {
            this.rowCnt = 1, this.colCnt = e, this.el.addClass("fc-agenda-view").html(this.renderHtml()), this.scrollerEl = this.el.find(".fc-time-grid-container"), this.timeGrid.coordMap.containerEl = this.scrollerEl, this.timeGrid.el = this.el.find(".fc-time-grid"), this.timeGrid.render(), this.bottomRuleEl = t('<hr class="' + this.widgetHeaderClass + '"/>').appendTo(this.timeGrid.el), this.dayGrid && (this.dayGrid.el = this.el.find(".fc-day-grid"), this.dayGrid.render(), this.dayGrid.bottomCoordPadding = this.dayGrid.el.next("hr").outerHeight()), this.noScrollRowEls = this.el.find(".fc-row:not(.fc-scroller *)"), fe.prototype.render.call(this), this.resetScroll()
        },
        destroy: function() {
            this.timeGrid.destroy(), this.dayGrid && this.dayGrid.destroy(), fe.prototype.destroy.call(this)
        },
        renderHtml: function() {
            return '<table><thead><tr><td class="' + this.widgetHeaderClass + '">' + this.timeGrid.headHtml() + "</td>" + "</tr>" + "</thead>" + "<tbody>" + "<tr>" + '<td class="' + this.widgetContentClass + '">' + (this.dayGrid ? '<div class="fc-day-grid"/><hr class="' + this.widgetHeaderClass + '"/>' : "") + '<div class="fc-time-grid-container">' + '<div class="fc-time-grid"/>' + "</div>" + "</td>" + "</tr>" + "</tbody>" + "</table>"
        },
        headIntroHtml: function() {
            var t, e, i, n;
            return this.opt("weekNumbers") ? (t = this.cellToDate(0, 0), e = this.calendar.calculateWeekNumber(t), i = this.opt("weekNumberTitle"), n = this.opt("isRTL") ? e + i : i + e, '<th class="fc-axis fc-week-number ' + this.widgetHeaderClass + '" ' + this.axisStyleAttr() + ">" + "<span>" + R(n) + "</span>" + "</th>") : '<th class="fc-axis ' + this.widgetHeaderClass + '" ' + this.axisStyleAttr() + "></th>"
        },
        dayIntroHtml: function() {
            return '<td class="fc-axis ' + this.widgetContentClass + '" ' + this.axisStyleAttr() + ">" + "<span>" + (this.opt("allDayHtml") || R(this.opt("allDayText"))) + "</span>" + "</td>"
        },
        slotBgIntroHtml: function() {
            return '<td class="fc-axis ' + this.widgetContentClass + '" ' + this.axisStyleAttr() + "></td>"
        },
        introHtml: function() {
            return '<td class="fc-axis" ' + this.axisStyleAttr() + "></td>"
        },
        axisStyleAttr: function() {
            return null !== this.axisWidth ? 'style="width:' + this.axisWidth + 'px"' : ""
        },
        updateSize: function(t) {
            t && this.timeGrid.resize(), fe.prototype.updateSize.call(this, t)
        },
        updateWidth: function() {
            this.axisWidth = p(this.el.find(".fc-axis"))
        },
        setHeight: function(t, e) {
            var i, n;
            null === this.bottomRuleHeight && (this.bottomRuleHeight = this.bottomRuleEl.outerHeight()), this.bottomRuleEl.hide(), this.scrollerEl.css("overflow", ""), v(this.scrollerEl), u(this.noScrollRowEls), this.dayGrid && (this.dayGrid.destroySegPopover(), i = this.opt("eventLimit"), i && "number" != typeof i && (i = Ye), i && this.dayGrid.limitRows(i)), e || (n = this.computeScrollerHeight(t), m(this.scrollerEl, n) ? (h(this.noScrollRowEls, w(this.scrollerEl)), n = this.computeScrollerHeight(t), this.scrollerEl.height(n), this.restoreScroll()) : (this.scrollerEl.height(n).css("overflow", "hidden"), this.bottomRuleEl.show()))
        },
        resetScroll: function() {
            function t() {
                i.scrollerEl.scrollTop(r)
            }
            var i = this,
                n = e.duration(this.opt("scrollTime")),
                r = this.timeGrid.computeTimeTop(n);
            r = Math.ceil(r), r && r++, t(), setTimeout(t, 0)
        },
        renderEvents: function(t) {
            var e, i, n = [],
                r = [],
                o = [];
            for (i = 0; t.length > i; i++) t[i].allDay ? n.push(t[i]) : r.push(t[i]);
            e = this.timeGrid.renderEvents(r), this.dayGrid && (o = this.dayGrid.renderEvents(n)), this.updateHeight(), fe.prototype.renderEvents.call(this, t)
        },
        getSegs: function() {
            return this.timeGrid.getSegs().concat(this.dayGrid ? this.dayGrid.getSegs() : [])
        },
        destroyEvents: function() {
            fe.prototype.destroyEvents.call(this), this.recordScroll(), this.timeGrid.destroyEvents(), this.dayGrid && this.dayGrid.destroyEvents()
        },
        renderDrag: function(t, e, i) {
            return t.hasTime() ? this.timeGrid.renderDrag(t, e, i) : this.dayGrid ? this.dayGrid.renderDrag(t, e, i) : void 0
        },
        destroyDrag: function() {
            this.timeGrid.destroyDrag(), this.dayGrid && this.dayGrid.destroyDrag()
        },
        renderSelection: function(t, e) {
            t.hasTime() || e.hasTime() ? this.timeGrid.renderSelection(t, e) : this.dayGrid && this.dayGrid.renderSelection(t, e)
        },
        destroySelection: function() {
            this.timeGrid.destroySelection(), this.dayGrid && this.dayGrid.destroySelection()
        }
    }), xe.agendaWeek = be, be.prototype = H(Ee.prototype), t.extend(be.prototype, {
        name: "agendaWeek",
        incrementDate: function(t, e) {
            return t.clone().stripTime().add(e, "weeks").startOf("week")
        },
        render: function(t) {
            this.intervalStart = t.clone().stripTime().startOf("week"), this.intervalEnd = this.intervalStart.clone().add(1, "weeks"), this.start = this.skipHiddenDays(this.intervalStart), this.end = this.skipHiddenDays(this.intervalEnd, -1, !0), this.title = this.calendar.formatRange(this.start, this.end.clone().subtract(1), this.opt("titleFormat"), " — "), Ee.prototype.render.call(this, this.getCellsPerWeek())
        }
    }), xe.agendaDay = Se, Se.prototype = H(Ee.prototype), t.extend(Se.prototype, {
        name: "agendaDay",
        incrementDate: function(t, e) {
            var i = t.clone().stripTime().add(e, "days");
            return i = this.skipHiddenDays(i, 0 > e ? -1 : 1)
        },
        render: function(t) {
            this.start = this.intervalStart = t.clone().stripTime(), this.end = this.intervalEnd = this.start.clone().add(1, "days"), this.title = this.calendar.formatDate(this.start, this.opt("titleFormat")), Ee.prototype.render.call(this, 1)
        }
    })
});