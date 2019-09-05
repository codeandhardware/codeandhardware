(window.webpackJsonp = window.webpackJsonp || []).push([
    ["8e14"], {
        "+9rI": function (e, t, n) {
            "use strict";
            var a = n("/6KZ"),
                r = n("HD3J"),
                o = n("8Xl/"),
                i = n("s9UB");
            e.exports = function (e) {
                a(a.S, e, {
                    from: function (e) {
                        var t, n, a, s, l = arguments[1];
                        return r(this), (t = void 0 !== l) && r(l), null == e ? new this : (n = [], t ? (a = 0, s = o(l, arguments[2], 2), i(e, !1, function (e) {
                            n.push(s(e, a++))
                        })) : i(e, !1, n.push, n), new this(n))
                    }
                })
            }
        },
        "+QYX": function (e, t, n) {
            n("1lGj"), e.exports = n("TaGV").Array.isArray
        },
        "/1nD": function (e, t, n) {
            var a = n("g2rQ"),
                r = n("0Sp3")("toStringTag"),
                o = "Arguments" == a(function () {
                    return arguments
                }());
            e.exports = function (e) {
                var t, n, i;
                return void 0 === e ? "Undefined" : null === e ? "Null" : "string" == typeof (n = function (e, t) {
                    try {
                        return e[t]
                    } catch (n) {}
                }(t = Object(e), r)) ? n : o ? a(t) : "Object" == (i = a(t)) && "function" == typeof t.callee ? "Arguments" : i
            }
        },
        "/3ze": function (e, t, n) {
            "use strict";
            var a = n("PL1w"),
                r = a(n("U8Yc")),
                o = a(n("KBEF")),
                i = a(n("J/q3")),
                s = a(n("3esu")),
                l = a(n("8m4E")),
                c = a(n("Od8a")),
                u = function (e) {
                    return e && e.__esModule ? e : {
                        default: e
                    }
                };
            Object.defineProperty(t, "__esModule", {
                value: !0
            });
            var m = u(n("mXGw")),
                p = u(n("W0B4"));
            t.default = function (e) {
                var t = function (t) {
                    function n() {
                        return (0, o.default)(this, n), (0, s.default)(this, (0, l.default)(n).apply(this, arguments))
                    }
                    return (0, c.default)(n, t), (0, i.default)(n, [{
                        key: "render",
                        value: function () {
                            return m.default.createElement(e, (0, r.default)({
                                router: this.context.router
                            }, this.props))
                        }
                    }]), n
                }(m.default.Component);
                return t.contextTypes = {
                    router: p.default.object
                }, t.getInitialProps = e.getInitialProps, t
            }
        },
        "/YX7": function (e, t, n) {
            var a = n("SfGT");
            e.exports = function (e, t) {
                return new(a(e))(t)
            }
        },
        "0EY2": function (e, t, n) {
            "use strict";
            var a = n("PL1w")(n("OAWj")),
                r = function (e) {
                    return e && e.__esModule ? e : {
                        default: e
                    }
                };
            Object.defineProperty(t, "__esModule", {
                value: !0
            });
            var o = r(n("mXGw")),
                i = r(n("uYFp")),
                s = n("eoaJ"),
                l = n("KBoY"),
                c = n("qQSc");

            function u() {
                var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : "next-head",
                    t = arguments.length > 1 && void 0 !== arguments[1] && arguments[1],
                    n = [o.default.createElement("meta", {
                        key: "charSet",
                        charSet: "utf-8",
                        className: e
                    })];
                return t || n.push(o.default.createElement("meta", {
                    key: "viewport",
                    name: "viewport",
                    content: "width=device-width,minimum-scale=1,initial-scale=1",
                    className: e
                })), n
            }

            function m(e, t) {
                return "string" == typeof t || "number" == typeof t ? e : t.type === o.default.Fragment ? e.concat(o.default.Children.toArray(t.props.children).reduce(function (e, t) {
                    return "string" == typeof t || "number" == typeof t ? e : e.concat(t)
                }, [])) : e.concat(t)
            }
            t.defaultHead = u;
            var p = ["name", "httpEquiv", "charSet", "viewport", "itemProp"];

            function d(e, t) {
                return e.reduce(function (e, t) {
                    var n = o.default.Children.toArray(t.props.children);
                    return e.concat(n)
                }, []).reduce(m, []).reverse().concat(u("", t.isAmp)).filter((n = new a.default, r = new a.default, i = new a.default, s = {}, function (e) {
                    if (e.key && "number" != typeof e.key && 0 === e.key.indexOf(".$")) return !n.has(e.key) && (n.add(e.key), !0);
                    switch (e.type) {
                        case "title":
                        case "base":
                            if (r.has(e.type)) return !1;
                            r.add(e.type);
                            break;
                        case "meta":
                            for (var t = 0, o = p.length; t < o; t++) {
                                var l = p[t];
                                if (e.props.hasOwnProperty(l))
                                    if ("charSet" === l || "viewport" === l) {
                                        if (i.has(l)) return !1;
                                        i.add(l)
                                    } else {
                                        var c = e.props[l],
                                            u = s[l] || new a.default;
                                        if (u.has(c)) return !1;
                                        u.add(c), s[l] = u
                                    }
                            }
                    }
                    return !0
                })).reverse().map(function (e, t) {
                    var n = (e.props && e.props.className ? e.props.className + " " : "") + "next-head",
                        a = e.key || t;
                    return o.default.cloneElement(e, {
                        key: a,
                        className: n
                    })
                });
                var n, r, i, s
            }
            var f = i.default();

            function h(e) {
                var t = e.children;
                return o.default.createElement(s.AmpModeContext.Consumer, null, function (e) {
                    return o.default.createElement(l.HeadManagerContext.Consumer, null, function (n) {
                        return o.default.createElement(f, {
                            reduceComponentsToState: d,
                            handleStateChange: n,
                            isAmp: c.isAmp(e)
                        }, t)
                    })
                })
            }
            h.rewind = f.rewind, t.default = h
        },
        "0XBy": function (e, t, n) {
            var a = n("/1nD"),
                r = n("0Sp3")("iterator"),
                o = n("N9zW");
            e.exports = n("TaGV").isIterable = function (e) {
                var t = Object(e);
                return void 0 !== t[r] || "@@iterator" in t || o.hasOwnProperty(a(t))
            }
        },
        "0tNF": function (e, t, n) {
            "use strict";
            n.r(t);
            var a = n("s20r"),
                r = n.n(a);
            var o = n("8ET1"),
                i = n.n(o),
                s = n("7X5e"),
                l = n.n(s);

            function c(e) {
                return function (e) {
                    if (r()(e)) {
                        for (var t = 0, n = new Array(e.length); t < e.length; t++) n[t] = e[t];
                        return n
                    }
                }(e) || function (e) {
                    if (l()(Object(e)) || "[object Arguments]" === Object.prototype.toString.call(e)) return i()(e)
                }(e) || function () {
                    throw new TypeError("Invalid attempt to spread non-iterable instance")
                }()
            }
            n.d(t, "default", function () {
                return c
            })
        },
        "0yN4": function (e, t, n) {
            "use strict";
            n.r(t), n.d(t, "default", function () {
                return p
            });
            var a = n("2Fjn"),
                r = n("LkAs"),
                o = n("Moms"),
                i = n("bMj6"),
                s = n("hZod"),
                l = n("tEuJ"),
                c = n("mXGw"),
                u = n.n(c),
                m = n("dDab"),
                p = function (e) {
                    function t(e) {
                        var n;
                        return Object(r.default)(this, t), (n = Object(i.default)(this, Object(s.default)(t).call(this, e))).layout = null, n
                    }
                    return Object(l.default)(t, e), Object(o.default)(t, [{
                        key: "render",
                        value: function () {
                            var e = this.props,
                                t = e.components;
                            Object(a.a)(e, ["components"]);
                            return u.a.createElement(m.MDXTag, {
                                name: "wrapper",
                                components: t
                            }, u.a.createElement(m.MDXTag, {
                                name: "h2",
                                components: t
                            }, "Cycles"), u.a.createElement("div", {
                                style: {
                                    display: "flex",
                                    flex: 1,
                                    alignItems: "center",
                                    flexDirection: "column"
                                }
                            }, u.a.createElement("img", {
                                src: "/static/changelog/2019-07-05/cycles.png",
                                style: {
                                    width: "100%",
                                    margin: "20px 0",
                                    borderRadius: "12px"
                                }
                            })), u.a.createElement(m.MDXTag, {
                                name: "p",
                                components: t
                            }, "You might know them as sprints, but we decided to call them cycles to give them meaning outside of the agile methodology. Whether you work in agile ways or not, cycles provide a great way of planning and measuring iterative development cycles. Take some time each week (or weeks, depending on how long you configure your cycle to be) to plan what your team is supposed to work on next, then let Linear measure how you're executing towards that goal."), u.a.createElement(m.MDXTag, {
                                name: "p",
                                components: t
                            }, "You can enable cycles in your ", u.a.createElement("a", {
                                href: "/settings/teams"
                            }, "team settings"), ", but need to first opt-in to see ", u.a.createElement("b", null, "Developer preview"), " in your ", u.a.createElement("a", {
                                href: "/settings/preferences"
                            }, "preferences"), ". You'll choose how long each cycle is and what day of the week they start and Linear takes care of the rest. Cycles are automatically created and closed based on the selected schedule and any unfinished work in each cycle will automatically be moved to the next cycle."), u.a.createElement(m.MDXTag, {
                                name: "h2",
                                components: t
                            }, "Estimation"), u.a.createElement(m.MDXTag, {
                                name: "p",
                                components: t
                            }, "You can now opt in to show time estimates for your issues. Estimation complements cycles and lets your team communicate the complexity of each issue."), u.a.createElement(m.MDXTag, {
                                name: "p",
                                components: t
                            }, "Turn on estimates in the ", u.a.createElement("a", {
                                href: "/settings/teams"
                            }, "team settings"), ". You can choose between a number of ways to estimate issues. Use a linear scale, exponential scale, Fibonacci scale, or use T-Shirt sizes to describe the complexity of each issue. Regardless of what scale you choose, cycles will automatically compute the overall effort required to complete the cycle and update its graphs accordingly."), u.a.createElement(m.MDXTag, {
                                name: "h2",
                                components: t
                            }, "Other improvements and fixes"), u.a.createElement(m.MDXTag, {
                                name: "ul",
                                components: t
                            }, u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Added action to set estimates: ", u.a.createElement("kbd", null, "Shift"), u.a.createElement("kbd", null, "e")), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Added actions to assign the cycle of an issue: ", u.a.createElement("kbd", null, "Shift"), u.a.createElement("kbd", null, "c")), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Added an action to assign an issue to the active cycle: ", u.a.createElement("kbd", null, "Shift"), u.a.createElement("kbd", null, "Command"), u.a.createElement("kbd", null, "c")), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "The issue lists will show the estimate and cycle of each issue"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Issues are automatically moved out of the backlog when added to a cycle"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Issues are automatically removed from a cycle if move back to the backlog"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Added toasts when you move issues between active and the backlog so that issues just don't disappear on you")))
                        }
                    }]), t
                }(u.a.Component);
            p.isMDXComponent = !0
        },
        "1lGj": function (e, t, n) {
            var a = n("/6KZ");
            a(a.S, "Array", {
                isArray: n("Jh4J")
            })
        },
        "2CfY": function (e, t, n) {
            e.exports = function (e) {
                var t = {};

                function n(a) {
                    if (t[a]) return t[a].exports;
                    var r = t[a] = {
                        i: a,
                        l: !1,
                        exports: {}
                    };
                    return e[a].call(r.exports, r, r.exports, n), r.l = !0, r.exports
                }
                return n.m = e, n.c = t, n.d = function (e, t, a) {
                    n.o(e, t) || Object.defineProperty(e, t, {
                        enumerable: !0,
                        get: a
                    })
                }, n.r = function (e) {
                    "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, {
                        value: "Module"
                    }), Object.defineProperty(e, "__esModule", {
                        value: !0
                    })
                }, n.t = function (e, t) {
                    if (1 & t && (e = n(e)), 8 & t) return e;
                    if (4 & t && "object" == typeof e && e && e.__esModule) return e;
                    var a = Object.create(null);
                    if (n.r(a), Object.defineProperty(a, "default", {
                            enumerable: !0,
                            value: e
                        }), 2 & t && "string" != typeof e)
                        for (var r in e) n.d(a, r, function (t) {
                            return e[t]
                        }.bind(null, r));
                    return a
                }, n.n = function (e) {
                    var t = e && e.__esModule ? function () {
                        return e.default
                    } : function () {
                        return e
                    };
                    return n.d(t, "a", t), t
                }, n.o = function (e, t) {
                    return Object.prototype.hasOwnProperty.call(e, t)
                }, n.p = "", n(n.s = 86)
            }({
                17: function (e, t, n) {
                    var a, r, o;
                    r = [t, n(89)], void 0 === (o = "function" == typeof (a = function (n, a) {
                        "use strict";

                        function r(e, t) {
                            for (var n = 0; n < t.length; n++) {
                                var a = t[n];
                                a.enumerable = a.enumerable || !1, a.configurable = !0, "value" in a && (a.writable = !0), Object.defineProperty(e, a.key, a)
                            }
                        }
                        Object.defineProperty(n, "__esModule", {
                            value: !0
                        }), n.default = void 0;
                        var o = function () {
                            function e() {
                                ! function (e, t) {
                                    if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
                                }(this, e)
                            }
                            return t = e, (n = [{
                                key: "getFirstMatch",
                                value: function (e, t) {
                                    var n = t.match(e);
                                    return n && n.length > 0 && n[1] || ""
                                }
                            }, {
                                key: "getSecondMatch",
                                value: function (e, t) {
                                    var n = t.match(e);
                                    return n && n.length > 1 && n[2] || ""
                                }
                            }, {
                                key: "matchAndReturnConst",
                                value: function (e, t, n) {
                                    if (e.test(t)) return n
                                }
                            }, {
                                key: "getWindowsVersionName",
                                value: function (e) {
                                    switch (e) {
                                        case "NT":
                                            return "NT";
                                        case "XP":
                                            return "XP";
                                        case "NT 5.0":
                                            return "2000";
                                        case "NT 5.1":
                                            return "XP";
                                        case "NT 5.2":
                                            return "2003";
                                        case "NT 6.0":
                                            return "Vista";
                                        case "NT 6.1":
                                            return "7";
                                        case "NT 6.2":
                                            return "8";
                                        case "NT 6.3":
                                            return "8.1";
                                        case "NT 10.0":
                                            return "10";
                                        default:
                                            return
                                    }
                                }
                            }, {
                                key: "getAndroidVersionName",
                                value: function (e) {
                                    var t = e.split(".").splice(0, 2).map(function (e) {
                                        return parseInt(e, 10) || 0
                                    });
                                    if (t.push(0), !(1 === t[0] && t[1] < 5)) return 1 === t[0] && t[1] < 6 ? "Cupcake" : 1 === t[0] && t[1] >= 6 ? "Donut" : 2 === t[0] && t[1] < 2 ? "Eclair" : 2 === t[0] && 2 === t[1] ? "Froyo" : 2 === t[0] && t[1] > 2 ? "Gingerbread" : 3 === t[0] ? "Honeycomb" : 4 === t[0] && t[1] < 1 ? "Ice Cream Sandwich" : 4 === t[0] && t[1] < 4 ? "Jelly Bean" : 4 === t[0] && t[1] >= 4 ? "KitKat" : 5 === t[0] ? "Lollipop" : 6 === t[0] ? "Marshmallow" : 7 === t[0] ? "Nougat" : 8 === t[0] ? "Oreo" : void 0
                                }
                            }, {
                                key: "getVersionPrecision",
                                value: function (e) {
                                    return e.split(".").length
                                }
                            }, {
                                key: "compareVersions",
                                value: function (t, n) {
                                    var a = arguments.length > 2 && void 0 !== arguments[2] && arguments[2],
                                        r = e.getVersionPrecision(t),
                                        o = e.getVersionPrecision(n),
                                        i = Math.max(r, o),
                                        s = 0,
                                        l = e.map([t, n], function (t) {
                                            var n = i - e.getVersionPrecision(t),
                                                a = t + new Array(n + 1).join(".0");
                                            return e.map(a.split("."), function (e) {
                                                return new Array(20 - e.length).join("0") + e
                                            }).reverse()
                                        });
                                    for (a && (s = i - Math.min(r, o)), i -= 1; i >= s;) {
                                        if (l[0][i] > l[1][i]) return 1;
                                        if (l[0][i] === l[1][i]) {
                                            if (i === s) return 0;
                                            i -= 1
                                        } else if (l[0][i] < l[1][i]) return -1
                                    }
                                }
                            }, {
                                key: "map",
                                value: function (e, t) {
                                    var n, a = [];
                                    if (Array.prototype.map) return Array.prototype.map.call(e, t);
                                    for (n = 0; n < e.length; n += 1) a.push(t(e[n]));
                                    return a
                                }
                            }, {
                                key: "getBrowserAlias",
                                value: function (e) {
                                    return a.BROWSER_ALIASES_MAP[e]
                                }
                            }]) && r(t, n), e;
                            var t, n
                        }();
                        n.default = o, e.exports = t.default
                    }) ? a.apply(t, r) : a) || (e.exports = o)
                },
                86: function (e, t, n) {
                    var a, r, o;
                    r = [t, n(87)], void 0 === (o = "function" == typeof (a = function (n, a) {
                        "use strict";

                        function r(e, t) {
                            for (var n = 0; n < t.length; n++) {
                                var a = t[n];
                                a.enumerable = a.enumerable || !1, a.configurable = !0, "value" in a && (a.writable = !0), Object.defineProperty(e, a.key, a)
                            }
                        }
                        var o;
                        Object.defineProperty(n, "__esModule", {
                            value: !0
                        }), n.default = void 0, a = (o = a) && o.__esModule ? o : {
                            default: o
                        };
                        var i = function () {
                            function e() {
                                ! function (e, t) {
                                    if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
                                }(this, e)
                            }
                            return t = e, (n = [{
                                key: "getParser",
                                value: function (e) {
                                    var t = arguments.length > 1 && void 0 !== arguments[1] && arguments[1];
                                    if ("string" != typeof e) throw new Error("UserAgent should be a string");
                                    return new a.default(e, t)
                                }
                            }, {
                                key: "parse",
                                value: function (e) {
                                    return new a.default(e).getResult()
                                }
                            }]) && r(t, n), e;
                            var t, n
                        }();
                        n.default = i, e.exports = t.default
                    }) ? a.apply(t, r) : a) || (e.exports = o)
                },
                87: function (e, t, n) {
                    var a, r, o;
                    r = [t, n(88), n(90), n(91), n(92), n(17)], void 0 === (o = "function" == typeof (a = function (n, a, r, o, i, s) {
                        "use strict";

                        function l(e) {
                            return e && e.__esModule ? e : {
                                default: e
                            }
                        }

                        function c(e) {
                            return (c = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (e) {
                                return typeof e
                            } : function (e) {
                                return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : typeof e
                            })(e)
                        }

                        function u(e, t) {
                            for (var n = 0; n < t.length; n++) {
                                var a = t[n];
                                a.enumerable = a.enumerable || !1, a.configurable = !0, "value" in a && (a.writable = !0), Object.defineProperty(e, a.key, a)
                            }
                        }
                        Object.defineProperty(n, "__esModule", {
                            value: !0
                        }), n.default = void 0, a = l(a), r = l(r), o = l(o), i = l(i), s = l(s);
                        var m = function () {
                            function e(t) {
                                var n = arguments.length > 1 && void 0 !== arguments[1] && arguments[1];
                                if (function (e, t) {
                                        if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
                                    }(this, e), null == t || "" === t) throw new Error("UserAgent parameter can't be empty");
                                this._ua = t, this.parsedResult = {}, !0 !== n && this.parse()
                            }
                            return t = e, (n = [{
                                key: "getUA",
                                value: function () {
                                    return this._ua
                                }
                            }, {
                                key: "test",
                                value: function (e) {
                                    return e.test(this._ua)
                                }
                            }, {
                                key: "parseBrowser",
                                value: function () {
                                    var e = this;
                                    this.parsedResult.browser = {};
                                    var t = a.default.find(function (t) {
                                        if ("function" == typeof t.test) return t.test(e);
                                        if (t.test instanceof Array) return t.test.some(function (t) {
                                            return e.test(t)
                                        });
                                        throw new Error("Browser's test function is not valid")
                                    });
                                    return t && (this.parsedResult.browser = t.describe(this.getUA())), this.parsedResult.browser
                                }
                            }, {
                                key: "getBrowser",
                                value: function () {
                                    return this.parsedResult.browser ? this.parsedResult.browser : this.parseBrowser()
                                }
                            }, {
                                key: "getBrowserName",
                                value: function (e) {
                                    return e ? String(this.getBrowser().name).toLowerCase() || "" : this.getBrowser().name || ""
                                }
                            }, {
                                key: "getBrowserVersion",
                                value: function () {
                                    return this.getBrowser().version
                                }
                            }, {
                                key: "getOS",
                                value: function () {
                                    return this.parsedResult.os ? this.parsedResult.os : this.parseOS()
                                }
                            }, {
                                key: "parseOS",
                                value: function () {
                                    var e = this;
                                    this.parsedResult.os = {};
                                    var t = r.default.find(function (t) {
                                        if ("function" == typeof t.test) return t.test(e);
                                        if (t.test instanceof Array) return t.test.some(function (t) {
                                            return e.test(t)
                                        });
                                        throw new Error("Browser's test function is not valid")
                                    });
                                    return t && (this.parsedResult.os = t.describe(this.getUA())), this.parsedResult.os
                                }
                            }, {
                                key: "getOSName",
                                value: function (e) {
                                    var t = this.getOS(),
                                        n = t.name;
                                    return e ? String(n).toLowerCase() || "" : n || ""
                                }
                            }, {
                                key: "getOSVersion",
                                value: function () {
                                    return this.getOS().version
                                }
                            }, {
                                key: "getPlatform",
                                value: function () {
                                    return this.parsedResult.platform ? this.parsedResult.platform : this.parsePlatform()
                                }
                            }, {
                                key: "getPlatformType",
                                value: function () {
                                    var e = arguments.length > 0 && void 0 !== arguments[0] && arguments[0],
                                        t = this.getPlatform(),
                                        n = t.type;
                                    return e ? String(n).toLowerCase() || "" : n || ""
                                }
                            }, {
                                key: "parsePlatform",
                                value: function () {
                                    var e = this;
                                    this.parsedResult.platform = {};
                                    var t = o.default.find(function (t) {
                                        if ("function" == typeof t.test) return t.test(e);
                                        if (t.test instanceof Array) return t.test.some(function (t) {
                                            return e.test(t)
                                        });
                                        throw new Error("Browser's test function is not valid")
                                    });
                                    return t && (this.parsedResult.platform = t.describe(this.getUA())), this.parsedResult.platform
                                }
                            }, {
                                key: "getEngine",
                                value: function () {
                                    return this.parsedResult.engine ? this.parsedResult.engine : this.parseEngine()
                                }
                            }, {
                                key: "getEngineName",
                                value: function (e) {
                                    return e ? String(this.getEngine().name).toLowerCase() || "" : this.getEngine().name || ""
                                }
                            }, {
                                key: "parseEngine",
                                value: function () {
                                    var e = this;
                                    this.parsedResult.engine = {};
                                    var t = i.default.find(function (t) {
                                        if ("function" == typeof t.test) return t.test(e);
                                        if (t.test instanceof Array) return t.test.some(function (t) {
                                            return e.test(t)
                                        });
                                        throw new Error("Browser's test function is not valid")
                                    });
                                    return t && (this.parsedResult.engine = t.describe(this.getUA())), this.parsedResult.engine
                                }
                            }, {
                                key: "parse",
                                value: function () {
                                    return this.parseBrowser(), this.parseOS(), this.parsePlatform(), this.parseEngine(), this
                                }
                            }, {
                                key: "getResult",
                                value: function () {
                                    return Object.assign({}, this.parsedResult)
                                }
                            }, {
                                key: "satisfies",
                                value: function (e) {
                                    var t = this,
                                        n = {},
                                        a = 0,
                                        r = {},
                                        o = 0,
                                        i = Object.keys(e);
                                    if (i.forEach(function (t) {
                                            var i = e[t];
                                            "string" == typeof i ? (r[t] = i, o += 1) : "object" === c(i) && (n[t] = i, a += 1)
                                        }), a > 0) {
                                        var s = Object.keys(n),
                                            l = s.find(function (e) {
                                                return t.isOS(e)
                                            });
                                        if (l) {
                                            var u = this.satisfies(n[l]);
                                            if (void 0 !== u) return u
                                        }
                                        var m = s.find(function (e) {
                                            return t.isPlatform(e)
                                        });
                                        if (m) {
                                            var p = this.satisfies(n[m]);
                                            if (void 0 !== p) return p
                                        }
                                    }
                                    if (o > 0) {
                                        var d = Object.keys(r),
                                            f = d.find(function (e) {
                                                return t.isBrowser(e, !0)
                                            });
                                        if (void 0 !== f) return this.compareVersion(r[f])
                                    }
                                }
                            }, {
                                key: "isBrowser",
                                value: function (e) {
                                    var t = arguments.length > 1 && void 0 !== arguments[1] && arguments[1],
                                        n = this.getBrowserName(),
                                        a = [n.toLowerCase()],
                                        r = s.default.getBrowserAlias(n);
                                    return t && void 0 !== r && a.push(r.toLowerCase()), -1 !== a.indexOf(e.toLowerCase())
                                }
                            }, {
                                key: "compareVersion",
                                value: function (e) {
                                    var t = [0],
                                        n = e,
                                        a = !1,
                                        r = this.getBrowserVersion();
                                    if ("string" == typeof r) return ">" === e[0] || "<" === e[0] ? (n = e.substr(1), "=" === e[1] ? (a = !0, n = e.substr(2)) : t = [], ">" === e[0] ? t.push(1) : t.push(-1)) : "=" === e[0] ? n = e.substr(1) : "~" === e[0] && (a = !0, n = e.substr(1)), t.indexOf(s.default.compareVersions(r, n, a)) > -1
                                }
                            }, {
                                key: "isOS",
                                value: function (e) {
                                    return this.getOSName(!0) === String(e).toLowerCase()
                                }
                            }, {
                                key: "isPlatform",
                                value: function (e) {
                                    return this.getPlatformType(!0) === String(e).toLowerCase()
                                }
                            }, {
                                key: "isEngine",
                                value: function (e) {
                                    return this.getEngineName(!0) === String(e).toLowerCase()
                                }
                            }, {
                                key: "is",
                                value: function (e) {
                                    return this.isBrowser(e) || this.isOS(e) || this.isPlatform(e)
                                }
                            }, {
                                key: "some",
                                value: function () {
                                    var e = this,
                                        t = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : [];
                                    return t.some(function (t) {
                                        return e.is(t)
                                    })
                                }
                            }]) && u(t.prototype, n), e;
                            var t, n
                        }();
                        n.default = m, e.exports = t.default
                    }) ? a.apply(t, r) : a) || (e.exports = o)
                },
                88: function (e, t, n) {
                    var a, r, o;
                    r = [t, n(17)], void 0 === (o = "function" == typeof (a = function (n, a) {
                        "use strict";
                        var r;
                        Object.defineProperty(n, "__esModule", {
                            value: !0
                        }), n.default = void 0, a = (r = a) && r.__esModule ? r : {
                            default: r
                        };
                        var o = /version\/(\d+(\.?_?\d+)+)/i,
                            i = [{
                                test: [/googlebot/i],
                                describe: function (e) {
                                    var t = {
                                            name: "Googlebot"
                                        },
                                        n = a.default.getFirstMatch(/googlebot\/(\d+(\.\d+))/i, e) || a.default.getFirstMatch(o, e);
                                    return n && (t.version = n), t
                                }
                            }, {
                                test: [/opera/i],
                                describe: function (e) {
                                    var t = {
                                            name: "Opera"
                                        },
                                        n = a.default.getFirstMatch(o, e) || a.default.getFirstMatch(/(?:opera)[\s\/](\d+(\.?_?\d+)+)/i, e);
                                    return n && (t.version = n), t
                                }
                            }, {
                                test: [/opr\/|opios/i],
                                describe: function (e) {
                                    var t = {
                                            name: "Opera"
                                        },
                                        n = a.default.getFirstMatch(/(?:opr|opios)[\s\/](\S+)/i, e) || a.default.getFirstMatch(o, e);
                                    return n && (t.version = n), t
                                }
                            }, {
                                test: [/SamsungBrowser/i],
                                describe: function (e) {
                                    var t = {
                                            name: "Samsung Internet for Android"
                                        },
                                        n = a.default.getFirstMatch(o, e) || a.default.getFirstMatch(/(?:SamsungBrowser)[\s\/](\d+(\.?_?\d+)+)/i, e);
                                    return n && (t.version = n), t
                                }
                            }, {
                                test: [/Whale/i],
                                describe: function (e) {
                                    var t = {
                                            name: "NAVER Whale Browser"
                                        },
                                        n = a.default.getFirstMatch(o, e) || a.default.getFirstMatch(/(?:whale)[\s\/](\d+(?:\.\d+)+)/i, e);
                                    return n && (t.version = n), t
                                }
                            }, {
                                test: [/MZBrowser/i],
                                describe: function (e) {
                                    var t = {
                                            name: "MZ Browser"
                                        },
                                        n = a.default.getFirstMatch(/(?:MZBrowser)[\s\/](\d+(?:\.\d+)+)/i, e) || a.default.getFirstMatch(o, e);
                                    return n && (t.version = n), t
                                }
                            }, {
                                test: [/focus/i],
                                describe: function (e) {
                                    var t = {
                                            name: "Focus"
                                        },
                                        n = a.default.getFirstMatch(/(?:focus)[\s\/](\d+(?:\.\d+)+)/i, e) || a.default.getFirstMatch(o, e);
                                    return n && (t.version = n), t
                                }
                            }, {
                                test: [/swing/i],
                                describe: function (e) {
                                    var t = {
                                            name: "Swing"
                                        },
                                        n = a.default.getFirstMatch(/(?:swing)[\s\/](\d+(?:\.\d+)+)/i, e) || a.default.getFirstMatch(o, e);
                                    return n && (t.version = n), t
                                }
                            }, {
                                test: [/coast/i],
                                describe: function (e) {
                                    var t = {
                                            name: "Opera Coast"
                                        },
                                        n = a.default.getFirstMatch(o, e) || a.default.getFirstMatch(/(?:coast)[\s\/](\d+(\.?_?\d+)+)/i, e);
                                    return n && (t.version = n), t
                                }
                            }, {
                                test: [/yabrowser/i],
                                describe: function (e) {
                                    var t = {
                                            name: "Yandex Browser"
                                        },
                                        n = a.default.getFirstMatch(/(?:yabrowser)[\s\/](\d+(\.?_?\d+)+)/i, e) || a.default.getFirstMatch(o, e);
                                    return n && (t.version = n), t
                                }
                            }, {
                                test: [/ucbrowser/i],
                                describe: function (e) {
                                    var t = {
                                            name: "UC Browser"
                                        },
                                        n = a.default.getFirstMatch(o, e) || a.default.getFirstMatch(/(?:ucbrowser)[\s\/](\d+(\.?_?\d+)+)/i, e);
                                    return n && (t.version = n), t
                                }
                            }, {
                                test: [/Maxthon|mxios/i],
                                describe: function (e) {
                                    var t = {
                                            name: "Maxthon"
                                        },
                                        n = a.default.getFirstMatch(o, e) || a.default.getFirstMatch(/(?:Maxthon|mxios)[\s\/](\d+(\.?_?\d+)+)/i, e);
                                    return n && (t.version = n), t
                                }
                            }, {
                                test: [/epiphany/i],
                                describe: function (e) {
                                    var t = {
                                            name: "Epiphany"
                                        },
                                        n = a.default.getFirstMatch(o, e) || a.default.getFirstMatch(/(?:epiphany)[\s\/](\d+(\.?_?\d+)+)/i, e);
                                    return n && (t.version = n), t
                                }
                            }, {
                                test: [/puffin/i],
                                describe: function (e) {
                                    var t = {
                                            name: "Puffin"
                                        },
                                        n = a.default.getFirstMatch(o, e) || a.default.getFirstMatch(/(?:puffin)[\s\/](\d+(\.?_?\d+)+)/i, e);
                                    return n && (t.version = n), t
                                }
                            }, {
                                test: [/sleipnir/i],
                                describe: function (e) {
                                    var t = {
                                            name: "Sleipnir"
                                        },
                                        n = a.default.getFirstMatch(o, e) || a.default.getFirstMatch(/(?:sleipnir)[\s\/](\d+(\.?_?\d+)+)/i, e);
                                    return n && (t.version = n), t
                                }
                            }, {
                                test: [/k-meleon/i],
                                describe: function (e) {
                                    var t = {
                                            name: "K-Meleon"
                                        },
                                        n = a.default.getFirstMatch(o, e) || a.default.getFirstMatch(/(?:k-meleon)[\s\/](\d+(\.?_?\d+)+)/i, e);
                                    return n && (t.version = n), t
                                }
                            }, {
                                test: [/micromessenger/i],
                                describe: function (e) {
                                    var t = {
                                            name: "WeChat"
                                        },
                                        n = a.default.getFirstMatch(/(?:micromessenger)[\s\/](\d+(\.?_?\d+)+)/i, e) || a.default.getFirstMatch(o, e);
                                    return n && (t.version = n), t
                                }
                            }, {
                                test: [/msie|trident/i],
                                describe: function (e) {
                                    var t = {
                                            name: "Internet Explorer"
                                        },
                                        n = a.default.getFirstMatch(/(?:msie |rv:)(\d+(\.?_?\d+)+)/i, e);
                                    return n && (t.version = n), t
                                }
                            }, {
                                test: [/\sedg\//i],
                                describe: function (e) {
                                    var t = {
                                            name: "Microsoft Edge"
                                        },
                                        n = a.default.getFirstMatch(/\sedg\/(\d+(\.?_?\d+)+)/i, e);
                                    return n && (t.version = n), t
                                }
                            }, {
                                test: [/edg([ea]|ios)/i],
                                describe: function (e) {
                                    var t = {
                                            name: "Microsoft Edge"
                                        },
                                        n = a.default.getSecondMatch(/edg([ea]|ios)\/(\d+(\.?_?\d+)+)/i, e);
                                    return n && (t.version = n), t
                                }
                            }, {
                                test: [/vivaldi/i],
                                describe: function (e) {
                                    var t = {
                                            name: "Vivaldi"
                                        },
                                        n = a.default.getFirstMatch(/vivaldi\/(\d+(\.?_?\d+)+)/i, e);
                                    return n && (t.version = n), t
                                }
                            }, {
                                test: [/seamonkey/i],
                                describe: function (e) {
                                    var t = {
                                            name: "SeaMonkey"
                                        },
                                        n = a.default.getFirstMatch(/seamonkey\/(\d+(\.?_?\d+)+)/i, e);
                                    return n && (t.version = n), t
                                }
                            }, {
                                test: [/sailfish/i],
                                describe: function (e) {
                                    var t = {
                                            name: "Sailfish"
                                        },
                                        n = a.default.getFirstMatch(/sailfish\s?browser\/(\d+(\.\d+)?)/i, e);
                                    return n && (t.version = n), t
                                }
                            }, {
                                test: [/silk/i],
                                describe: function (e) {
                                    var t = {
                                            name: "Amazon Silk"
                                        },
                                        n = a.default.getFirstMatch(/silk\/(\d+(\.?_?\d+)+)/i, e);
                                    return n && (t.version = n), t
                                }
                            }, {
                                test: [/phantom/i],
                                describe: function (e) {
                                    var t = {
                                            name: "PhantomJS"
                                        },
                                        n = a.default.getFirstMatch(/phantomjs\/(\d+(\.?_?\d+)+)/i, e);
                                    return n && (t.version = n), t
                                }
                            }, {
                                test: [/slimerjs/i],
                                describe: function (e) {
                                    var t = {
                                            name: "SlimerJS"
                                        },
                                        n = a.default.getFirstMatch(/slimerjs\/(\d+(\.?_?\d+)+)/i, e);
                                    return n && (t.version = n), t
                                }
                            }, {
                                test: [/blackberry|\bbb\d+/i, /rim\stablet/i],
                                describe: function (e) {
                                    var t = {
                                            name: "BlackBerry"
                                        },
                                        n = a.default.getFirstMatch(o, e) || a.default.getFirstMatch(/blackberry[\d]+\/(\d+(\.?_?\d+)+)/i, e);
                                    return n && (t.version = n), t
                                }
                            }, {
                                test: [/(web|hpw)[o0]s/i],
                                describe: function (e) {
                                    var t = {
                                            name: "WebOS Browser"
                                        },
                                        n = a.default.getFirstMatch(o, e) || a.default.getFirstMatch(/w(?:eb)?[o0]sbrowser\/(\d+(\.?_?\d+)+)/i, e);
                                    return n && (t.version = n), t
                                }
                            }, {
                                test: [/bada/i],
                                describe: function (e) {
                                    var t = {
                                            name: "Bada"
                                        },
                                        n = a.default.getFirstMatch(/dolfin\/(\d+(\.?_?\d+)+)/i, e);
                                    return n && (t.version = n), t
                                }
                            }, {
                                test: [/tizen/i],
                                describe: function (e) {
                                    var t = {
                                            name: "Tizen"
                                        },
                                        n = a.default.getFirstMatch(/(?:tizen\s?)?browser\/(\d+(\.?_?\d+)+)/i, e) || a.default.getFirstMatch(o, e);
                                    return n && (t.version = n), t
                                }
                            }, {
                                test: [/qupzilla/i],
                                describe: function (e) {
                                    var t = {
                                            name: "QupZilla"
                                        },
                                        n = a.default.getFirstMatch(/(?:qupzilla)[\s\/](\d+(\.?_?\d+)+)/i, e) || a.default.getFirstMatch(o, e);
                                    return n && (t.version = n), t
                                }
                            }, {
                                test: [/firefox|iceweasel|fxios/i],
                                describe: function (e) {
                                    var t = {
                                            name: "Firefox"
                                        },
                                        n = a.default.getFirstMatch(/(?:firefox|iceweasel|fxios)[\s\/](\d+(\.?_?\d+)+)/i, e);
                                    return n && (t.version = n), t
                                }
                            }, {
                                test: [/chromium/i],
                                describe: function (e) {
                                    var t = {
                                            name: "Chromium"
                                        },
                                        n = a.default.getFirstMatch(/(?:chromium)[\s\/](\d+(\.?_?\d+)+)/i, e) || a.default.getFirstMatch(o, e);
                                    return n && (t.version = n), t
                                }
                            }, {
                                test: [/chrome|crios|crmo/i],
                                describe: function (e) {
                                    var t = {
                                            name: "Chrome"
                                        },
                                        n = a.default.getFirstMatch(/(?:chrome|crios|crmo)\/(\d+(\.?_?\d+)+)/i, e);
                                    return n && (t.version = n), t
                                }
                            }, {
                                test: function (e) {
                                    var t = !e.test(/like android/i),
                                        n = e.test(/android/i);
                                    return t && n
                                },
                                describe: function (e) {
                                    var t = {
                                            name: "Android Browser"
                                        },
                                        n = a.default.getFirstMatch(o, e);
                                    return n && (t.version = n), t
                                }
                            }, {
                                test: [/playstation 4/i],
                                describe: function (e) {
                                    var t = {
                                            name: "PlayStation 4"
                                        },
                                        n = a.default.getFirstMatch(o, e);
                                    return n && (t.version = n), t
                                }
                            }, {
                                test: [/safari|applewebkit/i],
                                describe: function (e) {
                                    var t = {
                                            name: "Safari"
                                        },
                                        n = a.default.getFirstMatch(o, e);
                                    return n && (t.version = n), t
                                }
                            }, {
                                test: [/.*/i],
                                describe: function (e) {
                                    var t = -1 !== e.search("\\("),
                                        n = t ? /^(.*)\/(.*)[ \t]\((.*)/ : /^(.*)\/(.*) /;
                                    return {
                                        name: a.default.getFirstMatch(n, e),
                                        version: a.default.getSecondMatch(n, e)
                                    }
                                }
                            }];
                        n.default = i, e.exports = t.default
                    }) ? a.apply(t, r) : a) || (e.exports = o)
                },
                89: function (e, t, n) {
                    var a, r, o;
                    r = [t], void 0 === (o = "function" == typeof (a = function (e) {
                        "use strict";
                        Object.defineProperty(e, "__esModule", {
                            value: !0
                        }), e.BROWSER_ALIASES_MAP = void 0, e.BROWSER_ALIASES_MAP = {
                            "Amazon Silk": "amazon_silk",
                            "Android Browser": "android",
                            Bada: "bada",
                            BlackBerry: "blackberry",
                            Chrome: "chrome",
                            Chromium: "chromium",
                            Epiphany: "epiphany",
                            Firefox: "firefox",
                            Focus: "focus",
                            Generic: "generic",
                            Googlebot: "googlebot",
                            "Internet Explorer": "ie",
                            "K-Meleon": "k_meleon",
                            Maxthon: "maxthon",
                            "Microsoft Edge": "edge",
                            "MZ Browser": "mz",
                            "NAVER Whale Browser": "naver",
                            Opera: "opera",
                            "Opera Coast": "opera_coast",
                            PhantomJS: "phantomjs",
                            Puffin: "puffin",
                            QupZilla: "qupzilla",
                            Safari: "safari",
                            Sailfish: "sailfish",
                            "Samsung Internet for Android": "samsung_internet",
                            SeaMonkey: "seamonkey",
                            Sleipnir: "sleipnir",
                            Swing: "swing",
                            Tizen: "tizen",
                            "UC Browser": "uc",
                            Vivaldi: "vivaldi",
                            "WebOS Browser": "webos",
                            WeChat: "wechat",
                            "Yandex Browser": "yandex"
                        }
                    }) ? a.apply(t, r) : a) || (e.exports = o)
                },
                90: function (e, t, n) {
                    var a, r, o;
                    r = [t, n(17)], void 0 === (o = "function" == typeof (a = function (n, a) {
                        "use strict";
                        var r;
                        Object.defineProperty(n, "__esModule", {
                            value: !0
                        }), n.default = void 0, a = (r = a) && r.__esModule ? r : {
                            default: r
                        };
                        var o = [{
                            test: [/windows phone/i],
                            describe: function (e) {
                                var t = a.default.getFirstMatch(/windows phone (?:os)?\s?(\d+(\.\d+)*)/i, e);
                                return {
                                    name: "Windows Phone",
                                    version: t
                                }
                            }
                        }, {
                            test: [/windows/i],
                            describe: function (e) {
                                var t = a.default.getFirstMatch(/Windows ((NT|XP)( \d\d?.\d)?)/i, e),
                                    n = a.default.getWindowsVersionName(t);
                                return {
                                    name: "Windows",
                                    version: t,
                                    versionName: n
                                }
                            }
                        }, {
                            test: [/macintosh/i],
                            describe: function (e) {
                                var t = a.default.getFirstMatch(/mac os x (\d+(\.?_?\d+)+)/i, e).replace(/[_\s]/g, ".");
                                return {
                                    name: "macOS",
                                    version: t
                                }
                            }
                        }, {
                            test: [/(ipod|iphone|ipad)/i],
                            describe: function (e) {
                                var t = a.default.getFirstMatch(/os (\d+([_\s]\d+)*) like mac os x/i, e).replace(/[_\s]/g, ".");
                                return {
                                    name: "iOS",
                                    version: t
                                }
                            }
                        }, {
                            test: function (e) {
                                var t = !e.test(/like android/i),
                                    n = e.test(/android/i);
                                return t && n
                            },
                            describe: function (e) {
                                var t = a.default.getFirstMatch(/android[\s\/-](\d+(\.\d+)*)/i, e),
                                    n = a.default.getAndroidVersionName(t),
                                    r = {
                                        name: "Android",
                                        version: t
                                    };
                                return n && (r.versionName = n), r
                            }
                        }, {
                            test: [/(web|hpw)[o0]s/i],
                            describe: function (e) {
                                var t = a.default.getFirstMatch(/(?:web|hpw)[o0]s\/(\d+(\.\d+)*)/i, e),
                                    n = {
                                        name: "WebOS"
                                    };
                                return t && t.length && (n.version = t), n
                            }
                        }, {
                            test: [/blackberry|\bbb\d+/i, /rim\stablet/i],
                            describe: function (e) {
                                var t = a.default.getFirstMatch(/rim\stablet\sos\s(\d+(\.\d+)*)/i, e) || a.default.getFirstMatch(/blackberry\d+\/(\d+([_\s]\d+)*)/i, e) || a.default.getFirstMatch(/\bbb(\d+)/i, e);
                                return {
                                    name: "BlackBerry",
                                    version: t
                                }
                            }
                        }, {
                            test: [/bada/i],
                            describe: function (e) {
                                var t = a.default.getFirstMatch(/bada\/(\d+(\.\d+)*)/i, e);
                                return {
                                    name: "Bada",
                                    version: t
                                }
                            }
                        }, {
                            test: [/tizen/i],
                            describe: function (e) {
                                var t = a.default.getFirstMatch(/tizen[\/\s](\d+(\.\d+)*)/i, e);
                                return {
                                    name: "Tizen",
                                    version: t
                                }
                            }
                        }, {
                            test: [/linux/i],
                            describe: function () {
                                return {
                                    name: "Linux"
                                }
                            }
                        }, {
                            test: [/CrOS/],
                            describe: function () {
                                return {
                                    name: "Chrome OS"
                                }
                            }
                        }, {
                            test: [/PlayStation 4/],
                            describe: function (e) {
                                var t = a.default.getFirstMatch(/PlayStation 4[\/\s](\d+(\.\d+)*)/i, e);
                                return {
                                    name: "PlayStation 4",
                                    version: t
                                }
                            }
                        }];
                        n.default = o, e.exports = t.default
                    }) ? a.apply(t, r) : a) || (e.exports = o)
                },
                91: function (e, t, n) {
                    var a, r, o;
                    r = [t, n(17)], void 0 === (o = "function" == typeof (a = function (n, a) {
                        "use strict";
                        var r;
                        Object.defineProperty(n, "__esModule", {
                            value: !0
                        }), n.default = void 0, a = (r = a) && r.__esModule ? r : {
                            default: r
                        };
                        var o = {
                                tablet: "tablet",
                                mobile: "mobile",
                                desktop: "desktop",
                                tv: "tv"
                            },
                            i = [{
                                test: [/googlebot/i],
                                describe: function () {
                                    return {
                                        type: "bot",
                                        vendor: "Google"
                                    }
                                }
                            }, {
                                test: [/huawei/i],
                                describe: function (e) {
                                    var t = a.default.getFirstMatch(/(can-l01)/i, e) && "Nova",
                                        n = {
                                            type: o.mobile,
                                            vendor: "Huawei"
                                        };
                                    return t && (n.model = t), n
                                }
                            }, {
                                test: [/nexus\s*(?:7|8|9|10).*/i],
                                describe: function () {
                                    return {
                                        type: o.tablet,
                                        vendor: "Nexus"
                                    }
                                }
                            }, {
                                test: [/ipad/i],
                                describe: function () {
                                    return {
                                        type: o.tablet,
                                        vendor: "Apple",
                                        model: "iPad"
                                    }
                                }
                            }, {
                                test: [/kftt build/i],
                                describe: function () {
                                    return {
                                        type: o.tablet,
                                        vendor: "Amazon",
                                        model: "Kindle Fire HD 7"
                                    }
                                }
                            }, {
                                test: [/silk/i],
                                describe: function () {
                                    return {
                                        type: o.tablet,
                                        vendor: "Amazon"
                                    }
                                }
                            }, {
                                test: [/tablet/i],
                                describe: function () {
                                    return {
                                        type: o.tablet
                                    }
                                }
                            }, {
                                test: function (e) {
                                    var t = e.test(/ipod|iphone/i),
                                        n = e.test(/like (ipod|iphone)/i);
                                    return t && !n
                                },
                                describe: function (e) {
                                    var t = a.default.getFirstMatch(/(ipod|iphone)/i, e);
                                    return {
                                        type: o.mobile,
                                        vendor: "Apple",
                                        model: t
                                    }
                                }
                            }, {
                                test: [/nexus\s*[0-6].*/i, /galaxy nexus/i],
                                describe: function () {
                                    return {
                                        type: o.mobile,
                                        vendor: "Nexus"
                                    }
                                }
                            }, {
                                test: [/[^-]mobi/i],
                                describe: function () {
                                    return {
                                        type: o.mobile
                                    }
                                }
                            }, {
                                test: function (e) {
                                    return "blackberry" === e.getBrowserName(!0)
                                },
                                describe: function () {
                                    return {
                                        type: o.mobile,
                                        vendor: "BlackBerry"
                                    }
                                }
                            }, {
                                test: function (e) {
                                    return "bada" === e.getBrowserName(!0)
                                },
                                describe: function () {
                                    return {
                                        type: o.mobile
                                    }
                                }
                            }, {
                                test: function (e) {
                                    return "windows phone" === e.getBrowserName()
                                },
                                describe: function () {
                                    return {
                                        type: o.mobile,
                                        vendor: "Microsoft"
                                    }
                                }
                            }, {
                                test: function (e) {
                                    var t = Number(String(e.getOSVersion()).split(".")[0]);
                                    return "android" === e.getOSName(!0) && t >= 3
                                },
                                describe: function () {
                                    return {
                                        type: o.tablet
                                    }
                                }
                            }, {
                                test: function (e) {
                                    return "android" === e.getOSName(!0)
                                },
                                describe: function () {
                                    return {
                                        type: o.mobile
                                    }
                                }
                            }, {
                                test: function (e) {
                                    return "macos" === e.getOSName(!0)
                                },
                                describe: function () {
                                    return {
                                        type: o.desktop,
                                        vendor: "Apple"
                                    }
                                }
                            }, {
                                test: function (e) {
                                    return "windows" === e.getOSName(!0)
                                },
                                describe: function () {
                                    return {
                                        type: o.desktop
                                    }
                                }
                            }, {
                                test: function (e) {
                                    return "linux" === e.getOSName(!0)
                                },
                                describe: function () {
                                    return {
                                        type: o.desktop
                                    }
                                }
                            }, {
                                test: function (e) {
                                    return "playstation 4" === e.getOSName(!0)
                                },
                                describe: function () {
                                    return {
                                        type: o.tv
                                    }
                                }
                            }];
                        n.default = i, e.exports = t.default
                    }) ? a.apply(t, r) : a) || (e.exports = o)
                },
                92: function (e, t, n) {
                    var a, r, o;
                    r = [t, n(17)], void 0 === (o = "function" == typeof (a = function (n, a) {
                        "use strict";
                        var r;
                        Object.defineProperty(n, "__esModule", {
                            value: !0
                        }), n.default = void 0, a = (r = a) && r.__esModule ? r : {
                            default: r
                        };
                        var o = [{
                            test: function (e) {
                                return "microsoft edge" === e.getBrowserName(!0)
                            },
                            describe: function (e) {
                                var t = /\sedg\//i.test(e);
                                if (t) return {
                                    name: "Blink"
                                };
                                var n = a.default.getFirstMatch(/edge\/(\d+(\.?_?\d+)+)/i, e);
                                return {
                                    name: "EdgeHTML",
                                    version: n
                                }
                            }
                        }, {
                            test: [/trident/i],
                            describe: function (e) {
                                var t = {
                                        name: "Trident"
                                    },
                                    n = a.default.getFirstMatch(/trident\/(\d+(\.?_?\d+)+)/i, e);
                                return n && (t.version = n), t
                            }
                        }, {
                            test: function (e) {
                                return e.test(/presto/i)
                            },
                            describe: function (e) {
                                var t = {
                                        name: "Presto"
                                    },
                                    n = a.default.getFirstMatch(/presto\/(\d+(\.?_?\d+)+)/i, e);
                                return n && (t.version = n), t
                            }
                        }, {
                            test: function (e) {
                                var t = e.test(/gecko/i),
                                    n = e.test(/like gecko/i);
                                return t && !n
                            },
                            describe: function (e) {
                                var t = {
                                        name: "Gecko"
                                    },
                                    n = a.default.getFirstMatch(/gecko\/(\d+(\.?_?\d+)+)/i, e);
                                return n && (t.version = n), t
                            }
                        }, {
                            test: [/(apple)?webkit\/537\.36/i],
                            describe: function () {
                                return {
                                    name: "Blink"
                                }
                            }
                        }, {
                            test: [/(apple)?webkit/i],
                            describe: function (e) {
                                var t = {
                                        name: "WebKit"
                                    },
                                    n = a.default.getFirstMatch(/webkit\/(\d+(\.?_?\d+)+)/i, e);
                                return n && (t.version = n), t
                            }
                        }];
                        n.default = o, e.exports = t.default
                    }) ? a.apply(t, r) : a) || (e.exports = o)
                }
            })
        },
        "2agv": function (e, t, n) {
            "use strict";
            var a = n("8Xl/"),
                r = n("/6KZ"),
                o = n("dCrc"),
                i = n("oICS"),
                s = n("Ng5M"),
                l = n("gou2"),
                c = n("ErhN"),
                u = n("VJcA");
            r(r.S + r.F * !n("Clx3")(function (e) {
                Array.from(e)
            }), "Array", {
                from: function (e) {
                    var t, n, r, m, p = o(e),
                        d = "function" == typeof this ? this : Array,
                        f = arguments.length,
                        h = f > 1 ? arguments[1] : void 0,
                        g = void 0 !== h,
                        v = 0,
                        y = u(p);
                    if (g && (h = a(h, f > 2 ? arguments[2] : void 0, 2)), null == y || d == Array && s(y))
                        for (n = new d(t = l(p.length)); t > v; v++) c(n, v, g ? h(p[v], v) : p[v]);
                    else
                        for (m = y.call(p), n = new d; !(r = m.next()).done; v++) c(n, v, g ? i(m, h, [r.value, v], !0) : r.value);
                    return n.length = v, n
                }
            })
        },
        "3Fso": function (e, t, n) {
            "use strict";
            n.r(t), n.d(t, "default", function () {
                return p
            });
            var a = n("2Fjn"),
                r = n("LkAs"),
                o = n("Moms"),
                i = n("bMj6"),
                s = n("hZod"),
                l = n("tEuJ"),
                c = n("mXGw"),
                u = n.n(c),
                m = n("dDab"),
                p = function (e) {
                    function t(e) {
                        var n;
                        return Object(r.default)(this, t), (n = Object(i.default)(this, Object(s.default)(t).call(this, e))).layout = null, n
                    }
                    return Object(l.default)(t, e), Object(o.default)(t, [{
                        key: "render",
                        value: function () {
                            var e = this.props,
                                t = e.components;
                            Object(a.a)(e, ["components"]);
                            return u.a.createElement(m.MDXTag, {
                                name: "wrapper",
                                components: t
                            }, u.a.createElement(m.MDXTag, {
                                name: "h2",
                                components: t
                            }, "Grouping headers"), u.a.createElement("div", {
                                style: {
                                    display: "flex",
                                    flex: 1,
                                    alignItems: "center",
                                    flexDirection: "column"
                                }
                            }, u.a.createElement("img", {
                                src: "/static/changelog/2019-05-27/grouping.png",
                                style: {
                                    width: "100%",
                                    margin: "20px 0",
                                    borderRadius: "12px"
                                }
                            })), u.a.createElement(m.MDXTag, {
                                name: "p",
                                components: t
                            }, "The open and closed issue views received UI improvements in the form of grouping headers. While issues have always been sorted primarily based on their workflow status, the new headers make this a lot more clear."), u.a.createElement(m.MDXTag, {
                                name: "h2",
                                components: t
                            }, "Timezone"), u.a.createElement(m.MDXTag, {
                                name: "p",
                                components: t
                            }, "In settings, teams can now define which timezone most of their people are working from. This setting doesn't affect much yet but will be important once you can, for example, define what day of the week a sprint should start on."), u.a.createElement(m.MDXTag, {
                                name: "p",
                                components: t
                            }, "On that note, don't expect too many updates in the next few weeks as we're working hard behind the scenes to build out support for our next big features: Backlogs, sprints, and projects."), u.a.createElement(m.MDXTag, {
                                name: "h2",
                                components: t
                            }, "Other improvements and fixes"), u.a.createElement(m.MDXTag, {
                                name: "ul",
                                components: t
                            }, u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Added some missing tooltips to the sidebar"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Issue lists have better performance"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Editing the issue title no longer has cursor problems"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Check-boxes for issues in the list view have a larger click-area"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Fixed exceptions when looking at issues that are over a year old"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Cleaned up the layout of forms in settings"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Updated icon buttons to be more consistent across the application"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Pressing down the command or shift keys after having changed the selection via the keyboard on Safari no longer resets the selection.")))
                        }
                    }]), t
                }(u.a.Component);
            p.isMDXComponent = !0
        },
        "3Hfq": function (e, t, n) {
            var a = n("TaGV"),
                r = a.JSON || (a.JSON = {
                    stringify: JSON.stringify
                });
            e.exports = function (e) {
                return r.stringify.apply(r, arguments)
            }
        },
        "3esu": function (e, t, n) {
            var a = n("NluH"),
                r = n("oS/Z");
            e.exports = function (e, t) {
                return !t || "object" !== a(t) && "function" != typeof t ? r(e) : t
            }
        },
        "4GoZ": function (e, t, n) {
            "use strict";
            n.r(t), n.d(t, "default", function () {
                return p
            });
            var a = n("2Fjn"),
                r = n("LkAs"),
                o = n("Moms"),
                i = n("bMj6"),
                s = n("hZod"),
                l = n("tEuJ"),
                c = n("mXGw"),
                u = n.n(c),
                m = n("dDab"),
                p = function (e) {
                    function t(e) {
                        var n;
                        return Object(r.default)(this, t), (n = Object(i.default)(this, Object(s.default)(t).call(this, e))).layout = null, n
                    }
                    return Object(l.default)(t, e), Object(o.default)(t, [{
                        key: "render",
                        value: function () {
                            var e = this.props,
                                t = e.components;
                            Object(a.a)(e, ["components"]);
                            return u.a.createElement(m.MDXTag, {
                                name: "wrapper",
                                components: t
                            }, u.a.createElement(m.MDXTag, {
                                name: "h2",
                                components: t
                            }, "Boards"), u.a.createElement("div", {
                                style: {
                                    display: "flex",
                                    flex: 1,
                                    alignItems: "center",
                                    flexDirection: "column"
                                }
                            }, u.a.createElement("img", {
                                src: "/static/changelog/2019-08-13/board.png",
                                style: {
                                    width: "100%",
                                    margin: "20px 0",
                                    borderRadius: "12px"
                                }
                            })), u.a.createElement(m.MDXTag, {
                                name: "p",
                                components: t
                            }, "Linear now has better support for boards, with a refreshed design. Unlike lists, which are more information-dense and ordered by priority, boards offer manual ordering via mouse drag&drop."), u.a.createElement(m.MDXTag, {
                                name: "p",
                                components: t
                            }, "Similar to lists, boards are grouped by the teams' workflow states and can be filtered using our ", u.a.createElement(m.MDXTag, {
                                name: "a",
                                components: t,
                                parentName: "p",
                                props: {
                                    href: "https://linear.app/changelog#2019-08-05"
                                }
                            }, "new filters"), ". You can now also perform keyboard shortcut actions hovering over the card of an issue."), u.a.createElement(m.MDXTag, {
                                name: "p",
                                components: t
                            }, "Both active cycle and project pages can now be viewed in board view mode. Just toggle the view from the top right corner, or switch with ", u.a.createElement("kbd", null, "Cmd"), u.a.createElement("kbd", null, "b"), " shortcut. To view all your issues in board view mode, select ", u.a.createElement(m.MDXTag, {
                                name: "em",
                                components: t,
                                parentName: "p"
                            }, "Board"), " option from the team sidebar."), u.a.createElement(m.MDXTag, {
                                name: "h2",
                                components: t
                            }, "Filter improvements"), u.a.createElement(m.MDXTag, {
                                name: "p",
                                components: t
                            }, "After adding new filters ", u.a.createElement(m.MDXTag, {
                                name: "a",
                                components: t,
                                parentName: "p",
                                props: {
                                    href: "https://linear.app/changelog#2019-08-05"
                                }
                            }, "last week"), " we shipped several improvements to them:"), u.a.createElement(m.MDXTag, {
                                name: "ul",
                                components: t
                            }, u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Filters can now be applied using free text search on any field of an issue. For example, press ", u.a.createElement("kbd", null, "f"), " to open filter menu and type ", u.a.createElement(m.MDXTag, {
                                name: "em",
                                components: t,
                                parentName: "li"
                            }, "done"), " to filter by this status"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, u.a.createElement(m.MDXTag, {
                                name: "em",
                                components: t,
                                parentName: "li"
                            }, "Assignee"), " and ", u.a.createElement(m.MDXTag, {
                                name: "em",
                                components: t,
                                parentName: "li"
                            }, "created by"), " filters now supports ", u.a.createElement(m.MDXTag, {
                                name: "inlineCode",
                                components: t,
                                parentName: "li"
                            }, "me"), " as a shortcut for the current user"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "The current user is now shown as the first option for filtering and changing assignee in the action menu"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Filters for the same type are now visually grouped"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "New filter options to filter by ", u.a.createElement(m.MDXTag, {
                                name: "em",
                                components: t,
                                parentName: "li"
                            }, "no cycle"), ", ", u.a.createElement(m.MDXTag, {
                                name: "em",
                                components: t,
                                parentName: "li"
                            }, "no project"), " and ", u.a.createElement(m.MDXTag, {
                                name: "em",
                                components: t,
                                parentName: "li"
                            }, "unassigned"))), u.a.createElement(m.MDXTag, {
                                name: "h2",
                                components: t
                            }, "New preferences"), u.a.createElement("div", {
                                style: {
                                    display: "flex",
                                    flex: 1,
                                    alignItems: "center",
                                    flexDirection: "column"
                                }
                            }, u.a.createElement("img", {
                                src: "/static/changelog/2019-08-13/preferences.png",
                                style: {
                                    width: "100%",
                                    margin: "20px 0",
                                    borderRadius: "12px"
                                }
                            })), u.a.createElement(m.MDXTag, {
                                name: "p",
                                components: t
                            }, "The preferences page now features a new look with more information about individual preference options."), u.a.createElement(m.MDXTag, {
                                name: "p",
                                components: t
                            }, "Three new personal preferences were added:"), u.a.createElement(m.MDXTag, {
                                name: "ul",
                                components: t
                            }, u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, u.a.createElement(m.MDXTag, {
                                name: "strong",
                                components: t,
                                parentName: "li"
                            }, "Default home view"), " - You can now configure what view Linear should open by default"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, u.a.createElement(m.MDXTag, {
                                name: "strong",
                                components: t,
                                parentName: "li"
                            }, "Auto-assign to self"), " - Issues you create are automatically assigned to yourself"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, u.a.createElement(m.MDXTag, {
                                name: "strong",
                                components: t,
                                parentName: "li"
                            }, "On git branch copy, move the issue to in progress"), " - If you're like us and use git branch copy action (", u.a.createElement("kbd", null, "Cmd"), u.a.createElement("kbd", null, "Shift"), u.a.createElement("kbd", null, "."), ") when starting work on an issue, toggle on this small automation")), u.a.createElement(m.MDXTag, {
                                name: "h2",
                                components: t
                            }, "Other improvements and fixes"), u.a.createElement(m.MDXTag, {
                                name: "ul",
                                components: t
                            }, u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Added new action: ", u.a.createElement(m.MDXTag, {
                                name: "em",
                                components: t,
                                parentName: "li"
                            }, "Duplicate as new issue…"), " ", u.a.createElement("kbd", null, "Cmd"), u.a.createElement("kbd", null, "Shift"), u.a.createElement("kbd", null, "c")), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Improved the action menu's performance and responsiveness"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Cycle and project links in issue details have been updated to work both as open and change actions"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Filters are now team-based, so you can keep different filters open for each team"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Several small improvements to the projects list"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Projects can now be removed via the action menu"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "URLs for uploaded images are now cleaner and the filename is used in Slack notifications"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Canceling new issue composition or issue editing now returns you to the last view you had open before opening edit mode"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Fixed ", u.a.createElement("kbd", null, "Esc"), " behavior when opening an issue through a link"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Fixed a bug where archiving an issue sent unrelated Slack notifications"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Fixed a bug which lead to high idle CPU usage")))
                        }
                    }]), t
                }(u.a.Component);
            p.isMDXComponent = !0
        },
        "4j9R": function (e, t, n) {
            "use strict";
            var a = n("PL1w")(n("6Ndq"));
            Object.defineProperty(t, "__esModule", {
                value: !0
            }), t.default = function () {
                var e = (0, a.default)(null);
                return {
                    on: function (t, n) {
                        (e[t] || (e[t] = [])).push(n)
                    },
                    off: function (t, n) {
                        e[t] && e[t].splice(e[t].indexOf(n) >>> 0, 1)
                    },
                    emit: function (t) {
                        for (var n = arguments.length, a = new Array(n > 1 ? n - 1 : 0), r = 1; r < n; r++) a[r - 1] = arguments[r];
                        (e[t] || []).slice().map(function (e) {
                            e.apply(void 0, a)
                        })
                    }
                }
            }
        },
        "4vxr": function (e, t, n) {
            "use strict";
            var a = function (e) {
                if (e && e.__esModule) return e;
                var t = {};
                if (null != e)
                    for (var n in e) Object.hasOwnProperty.call(e, n) && (t[n] = e[n]);
                return t.default = e, t
            };
            Object.defineProperty(t, "__esModule", {
                value: !0
            });
            var r = a(n("mXGw"));
            t.RouterContext = r.createContext(null)
        },
        "5D4J": function (e, t, n) {
            var a = {
                "./2019-04-12.mdx": "8XRw",
                "./2019-04-26.mdx": "SMGp",
                "./2019-05-03.mdx": "V1oW",
                "./2019-05-10.mdx": "ZWEY",
                "./2019-05-20.mdx": "vT5H",
                "./2019-05-27.mdx": "3Fso",
                "./2019-06-21.mdx": "hFOM",
                "./2019-06-28.mdx": "zDFP",
                "./2019-07-05.mdx": "0yN4",
                "./2019-07-12.mdx": "IQOz",
                "./2019-07-19.mdx": "nR9g",
                "./2019-07-29.mdx": "bfeq",
                "./2019-08-05.mdx": "kIll",
                "./2019-08-13.mdx": "4GoZ",
                "./2019-08-19.mdx": "nQ8/",
                "./2019-08-26.mdx": "68X7",
                "./2019-09-03.mdx": "iOo5"
            };

            function r(e) {
                var t = o(e);
                return n(t)
            }

            function o(e) {
                var t = a[e];
                if (!(t + 1)) {
                    var n = new Error("Cannot find module '" + e + "'");
                    throw n.code = "MODULE_NOT_FOUND", n
                }
                return t
            }
            r.keys = function () {
                return Object.keys(a)
            }, r.resolve = o, e.exports = r, r.id = "5D4J"
        },
        "5IsQ": function (e, t) {
            var n, a, r = e.exports = {};

            function o() {
                throw new Error("setTimeout has not been defined")
            }

            function i() {
                throw new Error("clearTimeout has not been defined")
            }

            function s(e) {
                if (n === setTimeout) return setTimeout(e, 0);
                if ((n === o || !n) && setTimeout) return n = setTimeout, setTimeout(e, 0);
                try {
                    return n(e, 0)
                } catch (t) {
                    try {
                        return n.call(null, e, 0)
                    } catch (t) {
                        return n.call(this, e, 0)
                    }
                }
            }! function () {
                try {
                    n = "function" == typeof setTimeout ? setTimeout : o
                } catch (e) {
                    n = o
                }
                try {
                    a = "function" == typeof clearTimeout ? clearTimeout : i
                } catch (e) {
                    a = i
                }
            }();
            var l, c = [],
                u = !1,
                m = -1;

            function p() {
                u && l && (u = !1, l.length ? c = l.concat(c) : m = -1, c.length && d())
            }

            function d() {
                if (!u) {
                    var e = s(p);
                    u = !0;
                    for (var t = c.length; t;) {
                        for (l = c, c = []; ++m < t;) l && l[m].run();
                        m = -1, t = c.length
                    }
                    l = null, u = !1,
                        function (e) {
                            if (a === clearTimeout) return clearTimeout(e);
                            if ((a === i || !a) && clearTimeout) return a = clearTimeout, clearTimeout(e);
                            try {
                                a(e)
                            } catch (t) {
                                try {
                                    return a.call(null, e)
                                } catch (t) {
                                    return a.call(this, e)
                                }
                            }
                        }(e)
                }
            }

            function f(e, t) {
                this.fun = e, this.array = t
            }

            function h() {}
            r.nextTick = function (e) {
                var t = new Array(arguments.length - 1);
                if (arguments.length > 1)
                    for (var n = 1; n < arguments.length; n++) t[n - 1] = arguments[n];
                c.push(new f(e, t)), 1 !== c.length || u || s(d)
            }, f.prototype.run = function () {
                this.fun.apply(null, this.array)
            }, r.title = "browser", r.browser = !0, r.env = {}, r.argv = [], r.version = "", r.versions = {}, r.on = h, r.addListener = h, r.once = h, r.off = h, r.removeListener = h, r.removeAllListeners = h, r.emit = h, r.prependListener = h, r.prependOnceListener = h, r.listeners = function (e) {
                return []
            }, r.binding = function (e) {
                throw new Error("process.binding is not supported")
            }, r.cwd = function () {
                return "/"
            }, r.chdir = function (e) {
                throw new Error("process.chdir is not supported")
            }, r.umask = function () {
                return 0
            }
        },
        "5dyF": function (e, t, n) {
            e.exports = n("9CGT")
        },
        "5tTa": function (e, t) {
            e.exports = function (e) {
                try {
                    return {
                        e: !1,
                        v: e()
                    }
                } catch (t) {
                    return {
                        e: !0,
                        v: t
                    }
                }
            }
        },
        "68X7": function (e, t, n) {
            "use strict";
            n.r(t), n.d(t, "default", function () {
                return p
            });
            var a = n("2Fjn"),
                r = n("LkAs"),
                o = n("Moms"),
                i = n("bMj6"),
                s = n("hZod"),
                l = n("tEuJ"),
                c = n("mXGw"),
                u = n.n(c),
                m = n("dDab"),
                p = function (e) {
                    function t(e) {
                        var n;
                        return Object(r.default)(this, t), (n = Object(i.default)(this, Object(s.default)(t).call(this, e))).layout = null, n
                    }
                    return Object(l.default)(t, e), Object(o.default)(t, [{
                        key: "render",
                        value: function () {
                            var e = this.props,
                                t = e.components;
                            Object(a.a)(e, ["components"]);
                            return u.a.createElement(m.MDXTag, {
                                name: "wrapper",
                                components: t
                            }, u.a.createElement(m.MDXTag, {
                                name: "h2",
                                components: t
                            }, "GitHub Pull Request improvements"), u.a.createElement("div", {
                                style: {
                                    display: "flex",
                                    flex: 1,
                                    alignItems: "center",
                                    flexDirection: "column"
                                }
                            }, u.a.createElement("img", {
                                src: "/static/changelog/2019-08-26/pr.png",
                                style: {
                                    width: "100%",
                                    margin: "20px 0",
                                    borderRadius: "12px"
                                }
                            })), u.a.createElement(m.MDXTag, {
                                name: "p",
                                components: t
                            }, u.a.createElement(m.MDXTag, {
                                name: "strong",
                                components: t,
                                parentName: "p"
                            }, "New automation for PR reviews")), u.a.createElement(m.MDXTag, {
                                name: "p",
                                components: t
                            }, "Linear has supported GitHub pull request automation for opened and closed PRs since day one. We noticed it's common for teams to separate the time they work on an issue, and the time when an associated PR is waiting to be reviewed. You can now automate this by creating a new workflow state (e.g. ", u.a.createElement(m.MDXTag, {
                                name: "em",
                                components: t,
                                parentName: "p"
                            }, "In Review"), ") and have Linear move issues to it when a review has been requested on an associated pull request."), u.a.createElement(m.MDXTag, {
                                name: "p",
                                components: t
                            }, "Linear will now also show when a review has been requested on an associated pul request."), u.a.createElement(m.MDXTag, {
                                name: "p",
                                components: t
                            }, u.a.createElement(m.MDXTag, {
                                name: "strong",
                                components: t,
                                parentName: "p"
                            }, "Reopen issue when pull request is reverted")), u.a.createElement(m.MDXTag, {
                                name: "p",
                                components: t
                            }, "Not all merges go well and sometimes you'll need to revert a merged PR. Linear is now aware of these reverts and will automatically reopen the associated issue so you won't forget about it."), u.a.createElement(m.MDXTag, {
                                name: "p",
                                components: t
                            }, u.a.createElement(m.MDXTag, {
                                name: "strong",
                                components: t,
                                parentName: "p"
                            }, "De-associate pull requests from Linear issues")), u.a.createElement(m.MDXTag, {
                                name: "p",
                                components: t
                            }, 'We added new actions to de-associated pull requests from issues. You can find them from the command menu by typing "', u.a.createElement(m.MDXTag, {
                                name: "em",
                                components: t,
                                parentName: "p"
                            }, "github"), '".'), u.a.createElement(m.MDXTag, {
                                name: "p",
                                components: t
                            }, u.a.createElement(m.MDXTag, {
                                name: "strong",
                                components: t,
                                parentName: "p"
                            }, "Pull request links")), u.a.createElement(m.MDXTag, {
                                name: "p",
                                components: t
                            }, "Lists and board now include links to the associated pull requests. This makes it much faster to open the pull request of an issue, or to glance what issues have PR's open."), u.a.createElement(m.MDXTag, {
                                name: "h2",
                                components: t
                            }, "Subscription management"), u.a.createElement(m.MDXTag, {
                                name: "p",
                                components: t
                            }, "Subscribing (", u.a.createElement("kbd", null, "Shift"), u.a.createElement("kbd", null, "s"), ") and unsubscribing (", u.a.createElement("kbd", null, "Cmd"), u.a.createElement("kbd", null, "Shift"), u.a.createElement("kbd", null, "s"), ") to issue updates is now built into the issue comment section. You can quickly toggle your subscription and see who else is subscribed to the issue. To keep your team up to date, you can also subscribe others to an issue."), u.a.createElement(m.MDXTag, {
                                name: "h2",
                                components: t
                            }, "Other improvements and fixes"), u.a.createElement(m.MDXTag, {
                                name: "ul",
                                components: t
                            }, u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Links in the project description can now be opened from the project list"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Improved data sync reliability"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Fixed workflow status sorting in certain cases"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Fixed moving an issue to a new team when they have sub-issues"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Fixed board ordering bug"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Fixed bug causing uncompleted issues from moving to next cycle")))
                        }
                    }]), t
                }(u.a.Component);
            p.isMDXComponent = !0
        },
        "69Jm": function (e) {
            e.exports = {
                a: [{
                    id: "2019-09-03",
                    date: "September 03, 2019",
                    title: "2019 / September / 03",
                    published: !0
                }, {
                    id: "2019-08-26",
                    date: "August 26, 2019",
                    title: "2019 / August / 26",
                    published: !0
                }, {
                    id: "2019-08-19",
                    date: "August 19, 2019",
                    title: "2019 / August / 19",
                    published: !0
                }, {
                    id: "2019-08-13",
                    date: "August 13, 2019",
                    title: "2019 / August / 13",
                    published: !0
                }, {
                    id: "2019-08-05",
                    date: "August 5, 2019",
                    title: "2019 / August / 05",
                    published: !0
                }, {
                    id: "2019-07-29",
                    date: "July 29, 2019",
                    title: "2019 / July / 29",
                    published: !0
                }, {
                    id: "2019-07-19",
                    date: "July 19, 2019",
                    title: "2019 / July / 19",
                    published: !0
                }, {
                    id: "2019-07-12",
                    date: "July 12, 2019",
                    title: "2019 / July / 12",
                    published: !0
                }, {
                    id: "2019-07-05",
                    date: "July 5, 2019",
                    title: "2019 / July / 05",
                    published: !0
                }, {
                    id: "2019-06-28",
                    date: "June 28, 2019",
                    title: "2019 / June / 28",
                    published: !0
                }, {
                    id: "2019-06-21",
                    date: "June 21, 2019",
                    title: "2019 / June / 21",
                    published: !0
                }, {
                    id: "2019-05-27",
                    date: "May 27, 2019",
                    title: "2019 / May / 27",
                    published: !0
                }, {
                    id: "2019-05-20",
                    date: "May 20, 2019",
                    title: "2019 / May / 20",
                    published: !0
                }, {
                    id: "2019-05-10",
                    date: "May 10, 2019",
                    title: "2019 / May / 10",
                    published: !0
                }, {
                    id: "2019-05-03",
                    date: "May 3, 2019",
                    title: "2019 / May / 03",
                    published: !0
                }, {
                    id: "2019-04-26",
                    date: "April 26, 2019",
                    title: "2019 / April / 26",
                    published: !0
                }, {
                    id: "2019-04-12",
                    date: "April 12, 2019",
                    title: "2019 / April / 12",
                    published: !0
                }]
            }
        },
        "6oba": function (e, t, n) {
            n("iKhv"), n("WwSA"), n("k/kI"), n("oiJE"), n("P8hI"), n("L7yD"), e.exports = n("TaGV").Promise
        },
        "7X5e": function (e, t, n) {
            e.exports = n("8/po")
        },
        "7mTa": function (e, t, n) {
            e.exports = n("xGJO")
        },
        "8/po": function (e, t, n) {
            n("k/kI"), n("WwSA"), e.exports = n("0XBy")
        },
        "8ET1": function (e, t, n) {
            e.exports = n("Vlwe")
        },
        "8XRw": function (e, t, n) {
            "use strict";
            n.r(t), n.d(t, "default", function () {
                return p
            });
            var a = n("2Fjn"),
                r = n("LkAs"),
                o = n("Moms"),
                i = n("bMj6"),
                s = n("hZod"),
                l = n("tEuJ"),
                c = n("mXGw"),
                u = n.n(c),
                m = n("dDab"),
                p = function (e) {
                    function t(e) {
                        var n;
                        return Object(r.default)(this, t), (n = Object(i.default)(this, Object(s.default)(t).call(this, e))).layout = null, n
                    }
                    return Object(l.default)(t, e), Object(o.default)(t, [{
                        key: "render",
                        value: function () {
                            var e = this.props,
                                t = e.components;
                            Object(a.a)(e, ["components"]);
                            return u.a.createElement(m.MDXTag, {
                                name: "wrapper",
                                components: t
                            }, u.a.createElement(m.MDXTag, {
                                name: "h2",
                                components: t
                            }, "New features"), u.a.createElement(m.MDXTag, {
                                name: "h3",
                                components: t
                            }, "Option to display usernames or real names"), u.a.createElement(m.MDXTag, {
                                name: "p",
                                components: t
                            }, "Those of us who grew up with IRC, forums and games, we love display and nicknames. To give more control over display and\nreal names in Linear, we added a setting to prefer one or the other. If you use display names, you can still see the other\nuser's real name in their profile by clicking the name."), u.a.createElement(m.MDXTag, {
                                name: "h2",
                                components: t
                            }, "Improvements"), u.a.createElement(m.MDXTag, {
                                name: "ul",
                                components: t
                            }, u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Improved ", u.a.createElement(m.MDXTag, {
                                name: "inlineCode",
                                components: t,
                                parentName: "li"
                            }, "git"), " branch name generation by changing format and breaking at full words."), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Better error experience for frontend exceptions and ability to reset the client."), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "User autocomplete now supports both usernames and display names."), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "New welcome email for newly signed up users."), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Fixes related to Safari on iOS. We improved the experience for iPad but are still working on mobile phone support.")))
                        }
                    }]), t
                }(u.a.Component);
            p.isMDXComponent = !0
        },
        "8jdf": function (e, t, n) {
            "use strict";
            n.r(t);
            var a = n("z3IF"),
                r = n("YIwv"),
                o = n.n(r),
                i = n("0EY2"),
                s = n.n(i),
                l = n("mXGw"),
                c = n("69Jm"),
                u = n("9Hbq"),
                m = n("PeVk"),
                p = function (e) {
                    return l.createElement("h1", Object(a.a)({}, e, {
                        className: o.a.dynamic([
                            ["953595689", [m.a.labelTitle]]
                        ]) + " " + (null != e.className && e.className || "")
                    }), e.children, l.createElement(o.a, {
                        id: "953595689",
                        dynamic: [m.a.labelTitle]
                    }, ["h1.__jsx-style-dynamic-selector{font-style:normal;font-weight:800;font-size:52px;margin-bottom:28px;color:".concat(m.a.labelTitle, ";}")]))
                },
                d = n("fjcK");
            n.d(t, "ChangelogLogo", function () {
                return f
            }), n.d(t, "ChangelogHeader", function () {
                return h
            }), n.d(t, "LeftSection", function () {
                return v
            });
            var f = function () {
                    return l.createElement("svg", {
                        width: "101",
                        height: "39",
                        viewBox: "0 0 101 39",
                        fill: "none",
                        xmlns: "http://www.w3.org/2000/svg"
                    }, l.createElement("path", {
                        d: "M84.7502 4.7614C84.7502 17.2614 78.7843 22.0909 71.3979 22.0909C65.1479 22.0909 61.1706 18.6819 54.9206 12.4319C46.3979 3.90912 38.4434 0.215942 29.6365 0.215942C13.4434 0.215942 1.22745 12.7159 0.943359 33.4546H16.5684C17.4206 21.5228 22.8184 16.4091 30.4888 16.4091C36.1706 16.4091 40.7161 19.25 46.3979 25.7841C53.7843 34.0228 62.307 38.2841 71.9661 38.2841C88.4434 38.2841 100.659 25.5 100.375 4.7614H84.7502Z",
                        fill: "#5E6AD2"
                    }))
                },
                h = function () {
                    return l.createElement(l.Fragment, null, l.createElement("div", {
                        className: o.a.dynamic([
                            ["3042043343", [m.a.labelMuted]]
                        ]) + " header"
                    }, l.createElement("div", {
                        className: o.a.dynamic([
                            ["3042043343", [m.a.labelMuted]]
                        ]) + " left heroIcon"
                    }, l.createElement(f, null)), l.createElement("div", {
                        className: o.a.dynamic([
                            ["3042043343", [m.a.labelMuted]]
                        ]) + " hero"
                    }, l.createElement(p, {
                        style: {
                            marginBottom: "10px"
                        }
                    }, "Changelog"), l.createElement("p", {
                        className: o.a.dynamic([
                            ["3042043343", [m.a.labelMuted]]
                        ])
                    }, "New updates and improvements to Linear. ", l.createElement("a", {
                        href: d.a,
                        className: o.a.dynamic([
                            ["3042043343", [m.a.labelMuted]]
                        ])
                    }, "Subscribe to updates")))), l.createElement(o.a, {
                        id: "3042043343",
                        dynamic: [m.a.labelMuted]
                    }, [".header.__jsx-style-dynamic-selector{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-direction:row;-ms-flex-direction:row;flex-direction:row;position:relative;}", ".left.__jsx-style-dynamic-selector{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-align-items:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;width:25%;min-width:160px;margin-right:24px;}", ".left.heroIcon.__jsx-style-dynamic-selector{-webkit-align-items:flex-start;-webkit-box-align:flex-start;-ms-flex-align:flex-start;align-items:flex-start;margin-top:38px;}", ".hero.__jsx-style-dynamic-selector{padding:24px 0;}", "@media (max-width:600px){.hero.__jsx-style-dynamic-selector{padding:24px 0;text-align:center;}}", ".hero.__jsx-style-dynamic-selector p.__jsx-style-dynamic-selector{color:".concat(m.a.labelMuted, ";font-size:16px;margin-left:2px;}"), "@media (max-width:600px){.header.__jsx-style-dynamic-selector{-webkit-align-items:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;}.left.__jsx-style-dynamic-selector{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-webkit-justify-content:center;-ms-flex-pack:center;justify-content:center;width:100%;margin-right:0px;}}"]))
                },
                g = (t.default = function () {
                    return l.createElement(u.a, null, l.createElement(s.a, null, l.createElement("title", {
                        className: "jsx-804957775"
                    }, "Changelog")), l.createElement("div", {
                        className: "jsx-804957775 contentContainer page"
                    }, l.createElement("div", {
                        className: "jsx-804957775 background"
                    }), l.createElement(h, null), l.createElement("div", {
                        className: "jsx-804957775 posts"
                    }, c.a.filter(function (e) {
                        return e.published
                    }).map(function (e) {
                        var t = e.id,
                            n = e.date,
                            a = e.title;
                        return l.createElement(g, {
                            id: t,
                            key: t,
                            date: n,
                            title: a
                        })
                    }))), l.createElement(o.a, {
                        id: "804957775"
                    }, [".background.jsx-804957775{background:linear-gradient(180deg,#16161aaa 0%,#0d1d27a0 40%,#241e2250 70.14%,#16161aa0 100%);position:absolute;top:0;left:0;right:0;height:1000px;}", ".posts.jsx-804957775{position:relative;margin:32px 0;}"]))
                }, function (e) {
                    var t = e.id,
                        a = e.title,
                        r = n("5D4J")("./".concat(t, ".mdx")).default;
                    return l.createElement("div", null, l.createElement("hr", null), l.createElement("div", {
                        className: o.a.dynamic([
                            ["682398031", [m.a.labelMuted]]
                        ]) + " post"
                    }, l.createElement("div", {
                        className: o.a.dynamic([
                            ["682398031", [m.a.labelMuted]]
                        ]) + " left"
                    }, l.createElement("h4", {
                        className: o.a.dynamic([
                            ["682398031", [m.a.labelMuted]]
                        ])
                    }, l.createElement("a", {
                        href: "#".concat(t),
                        id: t,
                        className: o.a.dynamic([
                            ["682398031", [m.a.labelMuted]]
                        ])
                    }, a))), l.createElement("div", {
                        className: o.a.dynamic([
                            ["682398031", [m.a.labelMuted]]
                        ])
                    }, l.createElement(r, {
                        className: o.a.dynamic([
                            ["682398031", [m.a.labelMuted]]
                        ])
                    })), l.createElement(o.a, {
                        id: "682398031",
                        dynamic: [m.a.labelMuted]
                    }, [".post.__jsx-style-dynamic-selector{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;margin:48px 0 80px 0;}", ".left.__jsx-style-dynamic-selector{width:25%;margin-right:24px;-webkit-flex-shrink:0;-ms-flex-negative:0;flex-shrink:0;-webkit-align-items:flex-start;-webkit-box-align:flex-start;-ms-flex-align:flex-start;align-items:flex-start;}", ".left.__jsx-style-dynamic-selector h4.__jsx-style-dynamic-selector a.__jsx-style-dynamic-selector{display:block;padding-top:120px;margin-top:-70px;color:".concat(m.a.labelMuted, ";}"), ".left.__jsx-style-dynamic-selector h4.__jsx-style-dynamic-selector a.__jsx-style-dynamic-selector:focus{outline:none;}", ".post.__jsx-style-dynamic-selector ul{margin-left:18px;list-style-type:disc;}", ".post.__jsx-style-dynamic-selector code{font-family:monospace;}", "@media (max-width:600px){.left.__jsx-style-dynamic-selector{width:100%;margin-right:0px;-webkit-flex-shrink:0;-ms-flex-negative:0;flex-shrink:0;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;}.post.__jsx-style-dynamic-selector{margin:20px 0;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;}}"])))
                }),
                v = function (e) {
                    return l.createElement("div", Object(a.a)({}, e, {
                        className: o.a.dynamic([
                            ["2952771690", [m.a.labelTitle]]
                        ]) + " " + (null != e.className && e.className || "")
                    }), e.children, l.createElement(o.a, {
                        id: "2952771690",
                        dynamic: [m.a.labelTitle]
                    }, ["div.__jsx-style-dynamic-selector{font-style:normal;font-weight:800;font-size:52px;line-height:57px;margin-bottom:28px;color:".concat(m.a.labelTitle, ";}")]))
                }
        },
        "8m4E": function (e, t, n) {
            var a = n("jDdP"),
                r = n("OKNm");

            function o(t) {
                return e.exports = o = r ? a : function (e) {
                    return e.__proto__ || a(e)
                }, o(t)
            }
            e.exports = o
        },
        "9CGT": function (e, t, n) {
            "use strict";
            var a = n("PL1w"),
                r = a(n("JYC+")),
                o = a(n("KBEF")),
                i = a(n("J/q3")),
                s = a(n("3esu")),
                l = a(n("8m4E")),
                c = a(n("Od8a")),
                u = function (e) {
                    if (e && e.__esModule) return e;
                    var t = {};
                    if (null != e)
                        for (var n in e) Object.hasOwnProperty.call(e, n) && (t[n] = e[n]);
                    return t.default = e, t
                },
                m = function (e) {
                    return e && e.__esModule ? e : {
                        default: e
                    }
                };
            Object.defineProperty(t, "__esModule", {
                value: !0
            });
            var p = n("so/P"),
                d = u(n("mXGw")),
                f = (m(n("W0B4")), u(n("bBV7"))),
                h = n("MUK1");

            function g(e) {
                return e && "object" == typeof e ? h.formatWithValidation(e) : e
            }
            var v = function (e) {
                function t() {
                    var e, n, a, r, i;
                    return (0, o.default)(this, t), (e = (0, s.default)(this, (0, l.default)(t).apply(this, arguments))).formatUrls = (n = function (e, t) {
                        return {
                            href: g(e),
                            as: g(t)
                        }
                    }, a = null, r = null, i = null, function (e, t) {
                        if (e === a && t === r) return i;
                        var o = n(e, t);
                        return a = e, r = t, i = o, o
                    }), e.linkClicked = function (t) {
                        var n = t.currentTarget,
                            a = n.nodeName,
                            r = n.target;
                        if ("A" !== a || !(r && "_self" !== r || t.metaKey || t.ctrlKey || t.shiftKey || t.nativeEvent && 2 === t.nativeEvent.which)) {
                            var o = e.formatUrls(e.props.href, e.props.as),
                                i = o.href,
                                s = o.as;
                            if (function (e) {
                                    var t = p.parse(e, !1, !0),
                                        n = p.parse(h.getLocationOrigin(), !1, !0);
                                    return !t.host || t.protocol === n.protocol && t.host === n.host
                                }(i)) {
                                var l = window.location.pathname;
                                i = p.resolve(l, i), s = s ? p.resolve(l, s) : i, t.preventDefault();
                                var c = e.props.scroll;
                                null == c && (c = s.indexOf("#") < 0), f.default[e.props.replace ? "replace" : "push"](i, s, {
                                    shallow: e.props.shallow
                                }).then(function (e) {
                                    e && c && (window.scrollTo(0, 0), document.body.focus())
                                }).catch(function (t) {
                                    e.props.onError && e.props.onError(t)
                                })
                            }
                        }
                    }, e
                }
                return (0, c.default)(t, e), (0, i.default)(t, [{
                    key: "componentDidMount",
                    value: function () {
                        this.prefetch()
                    }
                }, {
                    key: "componentDidUpdate",
                    value: function (e) {
                        (0, r.default)(this.props.href) !== (0, r.default)(e.href) && this.prefetch()
                    }
                }, {
                    key: "prefetch",
                    value: function () {
                        if (this.props.prefetch && "undefined" != typeof window) {
                            var e = window.location.pathname,
                                t = this.formatUrls(this.props.href, this.props.as).href,
                                n = p.resolve(e, t);
                            f.default.prefetch(n)
                        }
                    }
                }, {
                    key: "render",
                    value: function () {
                        var e = this,
                            t = this.props.children,
                            n = this.formatUrls(this.props.href, this.props.as),
                            a = n.href,
                            r = n.as;
                        "string" == typeof t && (t = d.default.createElement("a", null, t));
                        var o = d.Children.only(t),
                            i = {
                                onClick: function (t) {
                                    o.props && "function" == typeof o.props.onClick && o.props.onClick(t), t.defaultPrevented || e.linkClicked(t)
                                }
                            };
                        return !this.props.passHref && ("a" !== o.type || "href" in o.props) || (i.href = r || a), i.href && "undefined" != typeof __NEXT_DATA__ && __NEXT_DATA__.nextExport && (i.href = f.Router._rewriteUrlForNextExport(i.href)), d.default.cloneElement(o, i)
                    }
                }]), t
            }(d.Component);
            t.default = v
        },
        "9Hbq": function (e, t, n) {
            "use strict";
            var a = n("pdCo");
            n.d(t, "a", function () {
                return a.a
            })
        },
        AFnJ: function (e, t, n) {
            n("CAwg"), e.exports = n("TaGV").Object.assign
        },
        BGbK: function (e, t, n) {
            var a = n("/1nD"),
                r = n("lyqB");
            e.exports = function (e) {
                return function () {
                    if (a(this) != e) throw TypeError(e + "#toJSON isn't generic");
                    return r(this)
                }
            }
        },
        CAwg: function (e, t, n) {
            var a = n("/6KZ");
            a(a.S + a.F, "Object", {
                assign: n("tbIA")
            })
        },
        Clx3: function (e, t, n) {
            var a = n("0Sp3")("iterator"),
                r = !1;
            try {
                var o = [7][a]();
                o.return = function () {
                    r = !0
                }, Array.from(o, function () {
                    throw 2
                })
            } catch (i) {}
            e.exports = function (e, t) {
                if (!t && !r) return !1;
                var n = !1;
                try {
                    var o = [7],
                        s = o[a]();
                    s.next = function () {
                        return {
                            done: n = !0
                        }
                    }, o[a] = function () {
                        return s
                    }, e(o)
                } catch (i) {}
                return n
            }
        },
        Ddho: function (e, t, n) {
            (window.__NEXT_P = window.__NEXT_P || []).push(["/changelog", function () {
                var e = n("8jdf");
                return {
                    page: e.default || e
                }
            }])
        },
        E02R: function (e, t, n) {
            "use strict";
            e.exports = "SECRET_DO_NOT_PASS_THIS_OR_YOU_WILL_BE_FIRED"
        },
        EUvJ: function (e, t, n) {
            "use strict";
            n.d(t, "a", function () {
                return o
            });
            var a = n("z3IF"),
                r = n("mXGw");

            function o(e) {
                return r.createElement("svg", Object(a.a)({
                    width: "64",
                    height: "64",
                    viewBox: "0 0 64 64",
                    fill: "none",
                    xmlns: "http://www.w3.org/2000/svg"
                }, e), r.createElement("path", {
                    d: "M0.403013 37.3991L26.6009 63.597C13.2225 61.3356 2.66442 50.7775 0.403013 37.3991Z",
                    fill: "#5E6AD2"
                }), r.createElement("path", {
                    d: "M0 30.2868L33.7132 64C35.7182 63.8929 37.6742 63.6013 39.5645 63.142L0.85799 24.4355C0.398679 26.3259 0.10713 28.2818 0 30.2868Z",
                    fill: "#5E6AD2"
                }), r.createElement("path", {
                    d: "M2.53593 19.4042L44.5958 61.4641C46.1277 60.8066 47.598 60.0331 48.9956 59.1546L4.84543 15.0044C3.96691 16.402 3.19339 17.8723 2.53593 19.4042Z",
                    fill: "#5E6AD2"
                }), r.createElement("path", {
                    d: "M7.69501 11.1447C13.5677 4.32093 22.2677 0 31.9769 0C49.6628 0 64 14.3372 64 32.0231C64 41.7323 59.6791 50.4323 52.8553 56.305L7.69501 11.1447Z",
                    fill: "#5E6AD2"
                }))
            }
        },
        ErhN: function (e, t, n) {
            "use strict";
            var a = n("eOWL"),
                r = n("zJT+");
            e.exports = function (e, t, n) {
                t in e ? a.f(e, t, r(0, n)) : e[t] = n
            }
        },
        H09g: function (e, t, n) {
            "use strict";
            var a = n("PL1w"),
                r = a(n("UrUy")),
                o = a(n("R3/3")),
                i = a(n("hDBU")),
                s = a(n("ZOIa")),
                l = a(n("U8Yc")),
                c = a(n("OAWj")),
                u = a(n("LkAs")),
                m = a(n("Moms")),
                p = function (e) {
                    return e && e.__esModule ? e : {
                        default: e
                    }
                };
            Object.defineProperty(t, "__esModule", {
                value: !0
            });
            var d = n("so/P"),
                f = p(n("4j9R")),
                h = n("MUK1");

            function g(e) {
                return e.replace(/\/$/, "") || "/"
            }
            var v = function () {
                function e(t, n, a, r) {
                    var o = this,
                        i = r.initialProps,
                        s = r.pageLoader,
                        m = r.App,
                        p = r.Component,
                        d = r.err;
                    (0, u.default)(this, e), this.onPopState = function (e) {
                        if (e.state) {
                            if ((!e.state.options || !e.state.options.fromExternal) && (!o._bps || o._bps(e.state))) {
                                var t = e.state,
                                    n = t.url,
                                    a = t.as,
                                    r = t.options;
                                0, o.replace(n, a, r)
                            }
                        } else {
                            var i = o.pathname,
                                s = o.query;
                            o.changeState("replaceState", h.formatWithValidation({
                                pathname: i,
                                query: s
                            }), h.getURL())
                        }
                    }, this.route = g(t), this.components = {}, "/_error" !== t && (this.components[this.route] = {
                        Component: p,
                        props: i,
                        err: d
                    }), this.components["/_app"] = {
                        Component: m
                    }, this.events = e.events, this.pageLoader = s, this.pathname = t, this.query = n, this.asPath = a, this.subscriptions = new c.default, this.componentLoadCancel = null, "undefined" != typeof window && (this.changeState("replaceState", h.formatWithValidation({
                        pathname: t,
                        query: n
                    }), a), window.addEventListener("popstate", this.onPopState), window.addEventListener("unload", function () {
                        if (history.state) {
                            var e = history.state,
                                t = e.url,
                                n = e.as,
                                a = e.options;
                            o.changeState("replaceState", t, n, (0, l.default)({}, a, {
                                fromExternal: !0
                            }))
                        }
                    }))
                }
                var t, n;
                return (0, m.default)(e, [{
                    key: "update",
                    value: function (e, t) {
                        var n = this.components[e];
                        if (!n) throw new Error("Cannot update unavailable route: ".concat(e));
                        var a = (0, l.default)({}, n, {
                            Component: t
                        });
                        this.components[e] = a, "/_app" !== e ? e === this.route && this.notify(a) : this.notify(this.components[this.route])
                    }
                }, {
                    key: "reload",
                    value: function (t) {
                        var n = this;
                        return new s.default(function (a, r) {
                            if (delete n.components[t], n.pageLoader.clearCache(t), t !== n.route) return a();
                            var o = n.pathname,
                                i = n.query,
                                s = window.location.href,
                                l = window.location.pathname + window.location.search + window.location.hash;
                            e.events.emit("routeChangeStart", s), n.getRouteInfo(t, o, i, l).then(function (t) {
                                var o = t.error;
                                return o && o.cancelled ? a() : (n.notify(t), o ? (e.events.emit("routeChangeError", o, s), r(o)) : void e.events.emit("routeChangeComplete", s))
                            })
                        })
                    }
                }, {
                    key: "back",
                    value: function () {
                        window.history.back()
                    }
                }, {
                    key: "push",
                    value: function (e) {
                        var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : e,
                            n = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : {};
                        return this.change("pushState", e, t, n)
                    }
                }, {
                    key: "replace",
                    value: function (e) {
                        var t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : e,
                            n = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : {};
                        return this.change("replaceState", e, t, n)
                    }
                }, {
                    key: "change",
                    value: function (t, n, a, r) {
                        var o = this;
                        return new s.default(function (i, s) {
                            var c = "object" == typeof n ? h.formatWithValidation(n) : n,
                                u = "object" == typeof a ? h.formatWithValidation(a) : a;
                            if (__NEXT_DATA__.nextExport && (u = e._rewriteUrlForNextExport(u)), o.abortComponentLoad(u), o.onlyAHashChange(u)) return e.events.emit("hashChangeStart", u), o.changeState(t, c, u), o.scrollToHash(u), e.events.emit("hashChangeComplete", u), !0;
                            var m = d.parse(c, !0),
                                p = m.pathname,
                                f = m.query;
                            o.urlIsNew(u) || (t = "replaceState");
                            var v = g(p),
                                y = r.shallow,
                                b = void 0 !== y && y;
                            e.events.emit("routeChangeStart", u), o.getRouteInfo(v, p, f, u, b).then(function (n) {
                                var a = n.error;
                                if (a && a.cancelled) return i(!1);
                                e.events.emit("beforeHistoryChange", u), o.changeState(t, c, u, r);
                                var s = window.location.hash.substring(1);
                                if (o.set(v, p, f, u, (0, l.default)({}, n, {
                                        hash: s
                                    })), a) throw e.events.emit("routeChangeError", a, u), a;
                                return e.events.emit("routeChangeComplete", u), i(!0)
                            }, s)
                        })
                    }
                }, {
                    key: "changeState",
                    value: function (e, t, n) {
                        var a = arguments.length > 3 && void 0 !== arguments[3] ? arguments[3] : {};
                        "pushState" === e && h.getURL() === n || window.history[e]({
                            url: t,
                            as: n,
                            options: a
                        }, null, n)
                    }
                }, {
                    key: "getRouteInfo",
                    value: function (e, t, n, a) {
                        var r = this,
                            o = arguments.length > 4 && void 0 !== arguments[4] && arguments[4],
                            i = this.components[e];
                        return o && i && this.route === e ? s.default.resolve(i) : new s.default(function (t, n) {
                            if (i) return t(i);
                            r.fetchComponent(e).then(function (e) {
                                return t({
                                    Component: e
                                })
                            }, n)
                        }).then(function (o) {
                            var i = o.Component;
                            return new s.default(function (s, l) {
                                var c = {
                                    pathname: t,
                                    query: n,
                                    asPath: a
                                };
                                r.getInitialProps(i, c).then(function (t) {
                                    o.props = t, r.components[e] = o, s(o)
                                }, l)
                            })
                        }).catch(function (e) {
                            return new s.default(function (o) {
                                return "PAGE_LOAD_ERROR" === e.code ? (window.location.href = a, e.cancelled = !0, o({
                                    error: e
                                })) : e.cancelled ? o({
                                    error: e
                                }) : void o(r.fetchComponent("/_error").then(function (a) {
                                    var o = {
                                            Component: a,
                                            err: e
                                        },
                                        i = {
                                            err: e,
                                            pathname: t,
                                            query: n
                                        };
                                    return new s.default(function (t) {
                                        r.getInitialProps(a, i).then(function (n) {
                                            o.props = n, o.error = e, t(o)
                                        }, function (n) {
                                            console.error("Error in error page `getInitialProps`: ", n), o.error = e, o.props = {}, t(o)
                                        })
                                    })
                                }))
                            })
                        })
                    }
                }, {
                    key: "set",
                    value: function (e, t, n, a, r) {
                        this.route = e, this.pathname = t, this.query = n, this.asPath = a, this.notify(r)
                    }
                }, {
                    key: "beforePopState",
                    value: function (e) {
                        this._bps = e
                    }
                }, {
                    key: "onlyAHashChange",
                    value: function (e) {
                        if (!this.asPath) return !1;
                        var t = this.asPath.split("#"),
                            n = (0, i.default)(t, 2),
                            a = n[0],
                            r = n[1],
                            o = e.split("#"),
                            s = (0, i.default)(o, 2),
                            l = s[0],
                            c = s[1];
                        return !(!c || a !== l || r !== c) || a === l && r !== c
                    }
                }, {
                    key: "scrollToHash",
                    value: function (e) {
                        var t = e.split("#"),
                            n = (0, i.default)(t, 2)[1];
                        if ("" !== n) {
                            var a = document.getElementById(n);
                            if (a) a.scrollIntoView();
                            else {
                                var r = document.getElementsByName(n)[0];
                                r && r.scrollIntoView()
                            }
                        } else window.scrollTo(0, 0)
                    }
                }, {
                    key: "urlIsNew",
                    value: function (e) {
                        return this.asPath !== e
                    }
                }, {
                    key: "prefetch",
                    value: function (e) {
                        var t = this;
                        return new s.default(function (n, a) {
                            var r = g(d.parse(e).pathname);
                            t.pageLoader.prefetch(r).then(n, a)
                        })
                    }
                }, {
                    key: "fetchComponent",
                    value: (n = (0, o.default)(r.default.mark(function e(t) {
                        var n, a, o, i;
                        return r.default.wrap(function (e) {
                            for (;;) switch (e.prev = e.next) {
                                case 0:
                                    return n = !1, a = this.componentLoadCancel = function () {
                                        n = !0
                                    }, e.next = 4, this.pageLoader.loadPage(t);
                                case 4:
                                    if (o = e.sent, !n) {
                                        e.next = 9;
                                        break
                                    }
                                    throw (i = new Error('Abort fetching component for route: "'.concat(t, '"'))).cancelled = !0, i;
                                case 9:
                                    return a === this.componentLoadCancel && (this.componentLoadCancel = null), e.abrupt("return", o);
                                case 11:
                                case "end":
                                    return e.stop()
                            }
                        }, e, this)
                    })), function (e) {
                        return n.apply(this, arguments)
                    })
                }, {
                    key: "getInitialProps",
                    value: (t = (0, o.default)(r.default.mark(function e(t, n) {
                        var a, o, i, s, l;
                        return r.default.wrap(function (e) {
                            for (;;) switch (e.prev = e.next) {
                                case 0:
                                    return a = !1, o = function () {
                                        a = !0
                                    }, this.componentLoadCancel = o, i = this.components["/_app"].Component, e.next = 6, h.loadGetInitialProps(i, {
                                        Component: t,
                                        router: this,
                                        ctx: n
                                    });
                                case 6:
                                    if (s = e.sent, o === this.componentLoadCancel && (this.componentLoadCancel = null), !a) {
                                        e.next = 12;
                                        break
                                    }
                                    throw (l = new Error("Loading initial props cancelled")).cancelled = !0, l;
                                case 12:
                                    return e.abrupt("return", s);
                                case 13:
                                case "end":
                                    return e.stop()
                            }
                        }, e, this)
                    })), function (e, n) {
                        return t.apply(this, arguments)
                    })
                }, {
                    key: "abortComponentLoad",
                    value: function (t) {
                        this.componentLoadCancel && (e.events.emit("routeChangeError", new Error("Route Cancelled"), t), this.componentLoadCancel(), this.componentLoadCancel = null)
                    }
                }, {
                    key: "notify",
                    value: function (e) {
                        var t = this.components["/_app"].Component;
                        this.subscriptions.forEach(function (n) {
                            return n((0, l.default)({}, e, {
                                App: t
                            }))
                        })
                    }
                }, {
                    key: "subscribe",
                    value: function (e) {
                        var t = this;
                        return this.subscriptions.add(e),
                            function () {
                                return t.subscriptions.delete(e)
                            }
                    }
                }], [{
                    key: "_rewriteUrlForNextExport",
                    value: function (e) {
                        var t = e.split("#"),
                            n = (0, i.default)(t, 2),
                            a = n[0],
                            r = n[1],
                            o = a.split("?"),
                            s = (0, i.default)(o, 2),
                            l = s[0],
                            c = s[1];
                        return l = l.replace(/\/$/, ""), /\.[^\/]+\/?$/.test(l) || (l += "/"), c && (l += "?" + c), r && (l += "#" + r), l
                    }
                }]), e
            }();
            v.events = f.default(), t.default = v
        },
        HrG8: function (e, t, n) {
            "use strict";
            (function (e) {
                function n(e, t) {
                    for (var n = 0; n < t.length; n++) {
                        var a = t[n];
                        a.enumerable = a.enumerable || !1, a.configurable = !0, "value" in a && (a.writable = !0), Object.defineProperty(e, a.key, a)
                    }
                }
                Object.defineProperty(t, "__esModule", {
                    value: !0
                }), t.default = void 0;
                var a = e.env && !0,
                    r = function (e) {
                        return "[object String]" === Object.prototype.toString.call(e)
                    },
                    o = function () {
                        function e() {
                            var t = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {},
                                n = t.name,
                                o = void 0 === n ? "stylesheet" : n,
                                s = t.optimizeForSpeed,
                                l = void 0 === s ? a : s,
                                c = t.isBrowser,
                                u = void 0 === c ? "undefined" != typeof window : c;
                            ! function (e, t) {
                                if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
                            }(this, e), i(r(o), "`name` must be a string"), this._name = o, this._deletedRulePlaceholder = "#".concat(o, "-deleted-rule____{}"), i("boolean" == typeof l, "`optimizeForSpeed` must be a boolean"), this._optimizeForSpeed = l, this._isBrowser = u, this._serverSheet = void 0, this._tags = [], this._injected = !1, this._rulesCount = 0;
                            var m = this._isBrowser && document.querySelector('meta[property="csp-nonce"]');
                            this._nonce = m ? m.getAttribute("content") : null
                        }
                        var t, o, s;
                        return t = e, (o = [{
                            key: "setOptimizeForSpeed",
                            value: function (e) {
                                i("boolean" == typeof e, "`setOptimizeForSpeed` accepts a boolean"), i(0 === this._rulesCount, "optimizeForSpeed cannot be when rules have already been inserted"), this.flush(), this._optimizeForSpeed = e, this.inject()
                            }
                        }, {
                            key: "isOptimizeForSpeed",
                            value: function () {
                                return this._optimizeForSpeed
                            }
                        }, {
                            key: "inject",
                            value: function () {
                                var e = this;
                                if (i(!this._injected, "sheet already injected"), this._injected = !0, this._isBrowser && this._optimizeForSpeed) return this._tags[0] = this.makeStyleTag(this._name), this._optimizeForSpeed = "insertRule" in this.getSheet(), void(this._optimizeForSpeed || (a || console.warn("StyleSheet: optimizeForSpeed mode not supported falling back to standard mode."), this.flush(), this._injected = !0));
                                this._serverSheet = {
                                    cssRules: [],
                                    insertRule: function (t, n) {
                                        return "number" == typeof n ? e._serverSheet.cssRules[n] = {
                                            cssText: t
                                        } : e._serverSheet.cssRules.push({
                                            cssText: t
                                        }), n
                                    },
                                    deleteRule: function (t) {
                                        e._serverSheet.cssRules[t] = null
                                    }
                                }
                            }
                        }, {
                            key: "getSheetForTag",
                            value: function (e) {
                                if (e.sheet) return e.sheet;
                                for (var t = 0; t < document.styleSheets.length; t++)
                                    if (document.styleSheets[t].ownerNode === e) return document.styleSheets[t]
                            }
                        }, {
                            key: "getSheet",
                            value: function () {
                                return this.getSheetForTag(this._tags[this._tags.length - 1])
                            }
                        }, {
                            key: "insertRule",
                            value: function (e, t) {
                                if (i(r(e), "`insertRule` accepts only strings"), !this._isBrowser) return "number" != typeof t && (t = this._serverSheet.cssRules.length), this._serverSheet.insertRule(e, t), this._rulesCount++;
                                if (this._optimizeForSpeed) {
                                    var n = this.getSheet();
                                    "number" != typeof t && (t = n.cssRules.length);
                                    try {
                                        n.insertRule(e, t)
                                    } catch (s) {
                                        return a || console.warn("StyleSheet: illegal rule: \n\n".concat(e, "\n\nSee https://stackoverflow.com/q/20007992 for more info")), -1
                                    }
                                } else {
                                    var o = this._tags[t];
                                    this._tags.push(this.makeStyleTag(this._name, e, o))
                                }
                                return this._rulesCount++
                            }
                        }, {
                            key: "replaceRule",
                            value: function (e, t) {
                                if (this._optimizeForSpeed || !this._isBrowser) {
                                    var n = this._isBrowser ? this.getSheet() : this._serverSheet;
                                    if (t.trim() || (t = this._deletedRulePlaceholder), !n.cssRules[e]) return e;
                                    n.deleteRule(e);
                                    try {
                                        n.insertRule(t, e)
                                    } catch (o) {
                                        a || console.warn("StyleSheet: illegal rule: \n\n".concat(t, "\n\nSee https://stackoverflow.com/q/20007992 for more info")), n.insertRule(this._deletedRulePlaceholder, e)
                                    }
                                } else {
                                    var r = this._tags[e];
                                    i(r, "old rule at index `".concat(e, "` not found")), r.textContent = t
                                }
                                return e
                            }
                        }, {
                            key: "deleteRule",
                            value: function (e) {
                                if (this._isBrowser)
                                    if (this._optimizeForSpeed) this.replaceRule(e, "");
                                    else {
                                        var t = this._tags[e];
                                        i(t, "rule at index `".concat(e, "` not found")), t.parentNode.removeChild(t), this._tags[e] = null
                                    }
                                else this._serverSheet.deleteRule(e)
                            }
                        }, {
                            key: "flush",
                            value: function () {
                                this._injected = !1, this._rulesCount = 0, this._isBrowser ? (this._tags.forEach(function (e) {
                                    return e && e.parentNode.removeChild(e)
                                }), this._tags = []) : this._serverSheet.cssRules = []
                            }
                        }, {
                            key: "cssRules",
                            value: function () {
                                var e = this;
                                return this._isBrowser ? this._tags.reduce(function (t, n) {
                                    return n ? t = t.concat(e.getSheetForTag(n).cssRules.map(function (t) {
                                        return t.cssText === e._deletedRulePlaceholder ? null : t
                                    })) : t.push(null), t
                                }, []) : this._serverSheet.cssRules
                            }
                        }, {
                            key: "makeStyleTag",
                            value: function (e, t, n) {
                                t && i(r(t), "makeStyleTag acceps only strings as second parameter");
                                var a = document.createElement("style");
                                this._nonce && a.setAttribute("nonce", this._nonce), a.type = "text/css", a.setAttribute("data-".concat(e), ""), t && a.appendChild(document.createTextNode(t));
                                var o = document.head || document.getElementsByTagName("head")[0];
                                return n ? o.insertBefore(a, n) : o.appendChild(a), a
                            }
                        }, {
                            key: "length",
                            get: function () {
                                return this._rulesCount
                            }
                        }]) && n(t.prototype, o), s && n(t, s), e
                    }();

                function i(e, t) {
                    if (!e) throw new Error("StyleSheet: ".concat(t, "."))
                }
                t.default = o
            }).call(this, n("5IsQ"))
        },
        IQOz: function (e, t, n) {
            "use strict";
            n.r(t), n.d(t, "default", function () {
                return p
            });
            var a = n("2Fjn"),
                r = n("LkAs"),
                o = n("Moms"),
                i = n("bMj6"),
                s = n("hZod"),
                l = n("tEuJ"),
                c = n("mXGw"),
                u = n.n(c),
                m = n("dDab"),
                p = function (e) {
                    function t(e) {
                        var n;
                        return Object(r.default)(this, t), (n = Object(i.default)(this, Object(s.default)(t).call(this, e))).layout = null, n
                    }
                    return Object(l.default)(t, e), Object(o.default)(t, [{
                        key: "render",
                        value: function () {
                            var e = this.props,
                                t = e.components;
                            Object(a.a)(e, ["components"]);
                            return u.a.createElement(m.MDXTag, {
                                name: "wrapper",
                                components: t
                            }, u.a.createElement(m.MDXTag, {
                                name: "h2",
                                components: t
                            }, "GitHub workflow configuration"), u.a.createElement("div", {
                                style: {
                                    display: "flex",
                                    flex: 1,
                                    alignItems: "center",
                                    flexDirection: "column"
                                }
                            }, u.a.createElement("img", {
                                src: "/static/changelog/2019-07-12/github.png",
                                style: {
                                    width: "100%",
                                    margin: "20px 0",
                                    borderRadius: "12px"
                                }
                            })), u.a.createElement(m.MDXTag, {
                                name: "p",
                                components: t
                            }, "GitHub integration is one of our time-saving features in Linear. It lets Linear manage the status of issues based on associated Github pull requests. Previously, if you had the integration enabled, a pull request would automatically move associated issues into the ", u.a.createElement(m.MDXTag, {
                                name: "em",
                                components: t,
                                parentName: "p"
                            }, "In Progress"), " status once the PR has been opened, and into the ", u.a.createElement(m.MDXTag, {
                                name: "em",
                                components: t,
                                parentName: "p"
                            }, "Completed"), " status upon PR merge."), u.a.createElement(m.MDXTag, {
                                name: "p",
                                components: t
                            }, "We wanted to give teams more control over their workflows and now you can customize the automation by setting your own\nworkflow status for PR open and merge events. For example, to separate issues waiting for a code review, create a\n", u.a.createElement(m.MDXTag, {
                                name: "em",
                                components: t,
                                parentName: "p"
                            }, "In Review"), " status for your team and associate PR open to trigger this status. You can also omit the automation for\neach step and configure automation for each team separately."), u.a.createElement(m.MDXTag, {
                                name: "p",
                                components: t
                            }, "We also improved how multiple pull requests per issue are treated. If your issue has several open pull requests open,\nwe'll wait for all of them being merged until we trigger the merge automation step."), u.a.createElement(m.MDXTag, {
                                name: "h2",
                                components: t
                            }, "Cycle improvements"), u.a.createElement(m.MDXTag, {
                                name: "p",
                                components: t
                            }, "Cycles are still under active development and available under ", u.a.createElement(m.MDXTag, {
                                name: "em",
                                components: t,
                                parentName: "p"
                            }, "Developer Preview"), " option in your personal settings.\nThis week we shipped several cycle improvements:"), u.a.createElement(m.MDXTag, {
                                name: "ul",
                                components: t
                            }, u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Weekends are now drawn to estimation chart, and also taken into account with estimation calculations"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Several fixes to cycle progress calculation and drawing"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Issues are associated with the cycle if the issue is created from the cycle view"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "When enabling cycles an active cycle is created instead of having to wait a week for the planned cycle to start"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Issues in ", u.a.createElement(m.MDXTag, {
                                name: "em",
                                components: t,
                                parentName: "li"
                            }, "My Issues"), " are grouped by cycle and ordered by cycle start date"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Improvements to keyboard shortcuts when adding issues into cycles"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Fixed workflow ordering on cycle views")), u.a.createElement(m.MDXTag, {
                                name: "h2",
                                components: t
                            }, "Other improvements and fixes"), u.a.createElement(m.MDXTag, {
                                name: "ul",
                                components: t
                            }, u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Better dark mode color scheme and other style tweaks"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "@mentions and links are now more visible in comments and issue descriptions"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Added links to toast messages when moving issues between views for easier navigation"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Move visible default label colors and styling in lists"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Added issue filtering options for priority and labels"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Bulk actions for issues are now shown in more views if they share the same team"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Fixes to toast messages when inviting new teammates"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Fixed issue with keyboard shortcuts not always working in the issue view"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Several fixes to action menu"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Fixed issue saving when image upload is still in progress")))
                        }
                    }]), t
                }(u.a.Component);
            p.isMDXComponent = !0
        },
        IUx0: function (e, t, n) {
            var a = n("PPkd");
            e.exports = function (e, t, n) {
                for (var r in t) n && e[r] ? e[r] = t[r] : a(e, r, t[r]);
                return e
            }
        },
        "IXD+": function (e, t, n) {
            "use strict";
            var a = n("Yvct"),
                r = n("O/tV");
            e.exports = n("VX2v")("Set", function (e) {
                return function () {
                    return e(this, arguments.length > 0 ? arguments[0] : void 0)
                }
            }, {
                add: function (e) {
                    return a.def(r(this, "Set"), e = 0 === e ? 0 : e, e)
                }
            }, a)
        },
        "J/q3": function (e, t, n) {
            var a = n("hHgk");

            function r(e, t) {
                for (var n = 0; n < t.length; n++) {
                    var r = t[n];
                    r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), a(e, r.key, r)
                }
            }
            e.exports = function (e, t, n) {
                return t && r(e.prototype, t), n && r(e, n), e
            }
        },
        "JYC+": function (e, t, n) {
            e.exports = n("3Hfq")
        },
        KBEF: function (e, t) {
            e.exports = function (e, t) {
                if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
            }
        },
        KBoY: function (e, t, n) {
            "use strict";
            var a = function (e) {
                if (e && e.__esModule) return e;
                var t = {};
                if (null != e)
                    for (var n in e) Object.hasOwnProperty.call(e, n) && (t[n] = e[n]);
                return t.default = e, t
            };
            Object.defineProperty(t, "__esModule", {
                value: !0
            });
            var r = a(n("mXGw"));
            t.HeadManagerContext = r.createContext(null)
        },
        L7yD: function (e, t, n) {
            "use strict";
            var a = n("/6KZ"),
                r = n("WJTZ"),
                o = n("5tTa");
            a(a.S, "Promise", {
                try: function (e) {
                    var t = r.f(this),
                        n = o(e);
                    return (n.e ? t.reject : t.resolve)(n.v), t.promise
                }
            })
        },
        LuVv: function (e, t) {
            e.exports = function (e, t, n, a) {
                if (!(e instanceof t) || void 0 !== a && a in e) throw TypeError(n + ": incorrect invocation!");
                return e
            }
        },
        MNOf: function (e, t, n) {
            "use strict";

            function a(e, t) {
                return Object.prototype.hasOwnProperty.call(e, t)
            }
            e.exports = function (e, t, n, o) {
                t = t || "&", n = n || "=";
                var i = {};
                if ("string" != typeof e || 0 === e.length) return i;
                var s = /\+/g;
                e = e.split(t);
                var l = 1e3;
                o && "number" == typeof o.maxKeys && (l = o.maxKeys);
                var c = e.length;
                l > 0 && c > l && (c = l);
                for (var u = 0; u < c; ++u) {
                    var m, p, d, f, h = e[u].replace(s, "%20"),
                        g = h.indexOf(n);
                    g >= 0 ? (m = h.substr(0, g), p = h.substr(g + 1)) : (m = h, p = ""), d = decodeURIComponent(m), f = decodeURIComponent(p), a(i, d) ? r(i[d]) ? i[d].push(f) : i[d] = [i[d], f] : i[d] = f
                }
                return i
            };
            var r = Array.isArray || function (e) {
                return "[object Array]" === Object.prototype.toString.call(e)
            }
        },
        MUK1: function (e, t, n) {
            "use strict";
            var a = n("PL1w"),
                r = a(n("UrUy")),
                o = (a(n("1qCV")), a(n("R3/3")));
            Object.defineProperty(t, "__esModule", {
                value: !0
            });
            var i = n("so/P");

            function s() {
                var e = window.location,
                    t = e.protocol,
                    n = e.hostname,
                    a = e.port;
                return "".concat(t, "//").concat(n).concat(a ? ":" + a : "")
            }

            function l(e) {
                return "string" == typeof e ? e : e.displayName || e.name || "Unknown"
            }

            function c(e) {
                return e.finished || e.headersSent
            }

            function u() {
                return (u = (0, o.default)(r.default.mark(function e(t, n) {
                    var a, o;
                    return r.default.wrap(function (e) {
                        for (;;) switch (e.prev = e.next) {
                            case 0:
                                e.next = 4;
                                break;
                            case 4:
                                if (t.getInitialProps) {
                                    e.next = 6;
                                    break
                                }
                                return e.abrupt("return", {});
                            case 6:
                                return e.next = 8, t.getInitialProps(n);
                            case 8:
                                if (a = e.sent, !n.res || !c(n.res)) {
                                    e.next = 11;
                                    break
                                }
                                return e.abrupt("return", a);
                            case 11:
                                if (a) {
                                    e.next = 14;
                                    break
                                }
                                throw o = '"'.concat(l(t), '.getInitialProps()" should resolve to an object. But found "').concat(a, '" instead.'), new Error(o);
                            case 14:
                                return e.abrupt("return", a);
                            case 15:
                            case "end":
                                return e.stop()
                        }
                    }, e)
                }))).apply(this, arguments)
            }
            t.execOnce = function (e) {
                var t = this,
                    n = !1;
                return function () {
                    if (!n) {
                        n = !0;
                        for (var a = arguments.length, r = new Array(a), o = 0; o < a; o++) r[o] = arguments[o];
                        e.apply(t, r)
                    }
                }
            }, t.getLocationOrigin = s, t.getURL = function () {
                var e = window.location.href,
                    t = s();
                return e.substring(t.length)
            }, t.getDisplayName = l, t.isResSent = c, t.loadGetInitialProps = function (e, t) {
                return u.apply(this, arguments)
            }, t.urlObjectKeys = ["auth", "hash", "host", "hostname", "href", "path", "pathname", "port", "protocol", "query", "search", "slashes"], t.formatWithValidation = function (e, t) {
                return i.format(e, t)
            }
        },
        NS33: function (e, t, n) {
            "use strict";
            var a = n("E02R");

            function r() {}
            e.exports = function () {
                function e(e, t, n, r, o, i) {
                    if (i !== a) {
                        var s = new Error("Calling PropTypes validators directly is not supported by the `prop-types` package. Use PropTypes.checkPropTypes() to call them. Read more at http://fb.me/use-check-prop-types");
                        throw s.name = "Invariant Violation", s
                    }
                }

                function t() {
                    return e
                }
                e.isRequired = e;
                var n = {
                    array: e,
                    bool: e,
                    func: e,
                    number: e,
                    object: e,
                    string: e,
                    symbol: e,
                    any: e,
                    arrayOf: t,
                    element: e,
                    instanceOf: t,
                    node: e,
                    objectOf: t,
                    oneOf: t,
                    oneOfType: t,
                    shape: t,
                    exact: t
                };
                return n.checkPropTypes = r, n.PropTypes = n, n
            }
        },
        Ng5M: function (e, t, n) {
            var a = n("N9zW"),
                r = n("0Sp3")("iterator"),
                o = Array.prototype;
            e.exports = function (e) {
                return void 0 !== e && (a.Array === e || o[r] === e)
            }
        },
        NlCR: function (e, t, n) {
            var a = n("8Xl/"),
                r = n("6wgB"),
                o = n("dCrc"),
                i = n("gou2"),
                s = n("/YX7");
            e.exports = function (e, t) {
                var n = 1 == e,
                    l = 2 == e,
                    c = 3 == e,
                    u = 4 == e,
                    m = 6 == e,
                    p = 5 == e || m,
                    d = t || s;
                return function (t, s, f) {
                    for (var h, g, v = o(t), y = r(v), b = a(s, f, 3), w = i(y.length), x = 0, E = n ? d(t, w) : l ? d(t, 0) : void 0; w > x; x++)
                        if ((p || x in y) && (g = b(h = y[x], x, v), e))
                            if (n) E[x] = g;
                            else if (g) switch (e) {
                        case 3:
                            return !0;
                        case 5:
                            return h;
                        case 6:
                            return x;
                        case 2:
                            E.push(h)
                    } else if (u) return !1;
                    return m ? -1 : c || u ? u : E
                }
            }
        },
        NluH: function (e, t, n) {
            var a = n("t+lh"),
                r = n("XzKa");

            function o(e) {
                return (o = "function" == typeof r && "symbol" == typeof a ? function (e) {
                    return typeof e
                } : function (e) {
                    return e && "function" == typeof r && e.constructor === r && e !== r.prototype ? "symbol" : typeof e
                })(e)
            }

            function i(t) {
                return "function" == typeof r && "symbol" === o(a) ? e.exports = i = function (e) {
                    return o(e)
                } : e.exports = i = function (e) {
                    return e && "function" == typeof r && e.constructor === r && e !== r.prototype ? "symbol" : o(e)
                }, i(t)
            }
            e.exports = i
        },
        "O/tV": function (e, t, n) {
            var a = n("fGh/");
            e.exports = function (e, t) {
                if (!a(e) || e._t !== t) throw TypeError("Incompatible receiver, " + t + " required!");
                return e
            }
        },
        OAWj: function (e, t, n) {
            e.exports = n("bdJ0")
        },
        Od8a: function (e, t, n) {
            var a = n("6Ndq"),
                r = n("g9SA");
            e.exports = function (e, t) {
                if ("function" != typeof t && null !== t) throw new TypeError("Super expression must either be null or a function");
                e.prototype = a(t && t.prototype, {
                    constructor: {
                        value: e,
                        writable: !0,
                        configurable: !0
                    }
                }), t && r(e, t)
            }
        },
        P8hI: function (e, t, n) {
            "use strict";
            var a = n("/6KZ"),
                r = n("TaGV"),
                o = n("41F1"),
                i = n("PK7I"),
                s = n("zafj");
            a(a.P + a.R, "Promise", {
                finally: function (e) {
                    var t = i(this, r.Promise || o.Promise),
                        n = "function" == typeof e;
                    return this.then(n ? function (n) {
                        return s(t, e()).then(function () {
                            return n
                        })
                    } : e, n ? function (n) {
                        return s(t, e()).then(function () {
                            throw n
                        })
                    } : e)
                }
            })
        },
        PK7I: function (e, t, n) {
            var a = n("ADe/"),
                r = n("HD3J"),
                o = n("0Sp3")("species");
            e.exports = function (e, t) {
                var n, i = a(e).constructor;
                return void 0 === i || null == (n = a(i)[o]) ? t : r(n)
            }
        },
        PL1w: function (e, t) {
            e.exports = function (e) {
                return e && e.__esModule ? e : {
                    default: e
                }
            }
        },
        PeVk: function (e, t, n) {
            "use strict";
            n.d(t, "a", function () {
                return a
            });
            var a = {
                bgBase: "#29292f",
                bgShade: "#28272b",
                bgBorder: "#313035",
                labelFaint: "#434C58",
                labelMuted: "#95A2B3",
                labelBase: "#D0D6E0",
                labelTitle: "#F7F8F8",
                controlBase: "#5E6AD2",
                controlLabel: "#D0D6E0",
                controlSelectedBg: "#2B2B38",
                controlSelectLabel: "#D9DCF8",
                tealBg: "#D3EEF3",
                tealBase: "#26B5CE",
                tealText: "#0F7488",
                greenBg: "#D7EDE1",
                greenBase: "#4CB782",
                greenText: "#0F783C",
                yellowBg: "#FFF8E2",
                yellowBase: "#F2C94C",
                yellowText: "##5A450D",
                orangeBg: "#FBE1CA",
                orangeBase: "#F2994A",
                orangeText: "#DB6E1F",
                redBg: "#F7C8C1",
                redBase: "#EB5757",
                redText: "#C52828"
            }
        },
        "R3/3": function (e, t, n) {
            "use strict";
            n.r(t), n.d(t, "default", function () {
                return i
            });
            var a = n("ZOIa"),
                r = n.n(a);

            function o(e, t, n, a, o, i, s) {
                try {
                    var l = e[i](s),
                        c = l.value
                } catch (u) {
                    return void n(u)
                }
                l.done ? t(c) : r.a.resolve(c).then(a, o)
            }

            function i(e) {
                return function () {
                    var t = this,
                        n = arguments;
                    return new r.a(function (a, r) {
                        var i = e.apply(t, n);

                        function s(e) {
                            o(i, a, r, s, l, "next", e)
                        }

                        function l(e) {
                            o(i, a, r, s, l, "throw", e)
                        }
                        s(void 0)
                    })
                }
            }
        },
        RoC8: function (e, t) {
            e.exports = function (e) {
                return e.webpackPolyfill || (e.deprecate = function () {}, e.paths = [], e.children || (e.children = []), Object.defineProperty(e, "loaded", {
                    enumerable: !0,
                    get: function () {
                        return e.l
                    }
                }), Object.defineProperty(e, "id", {
                    enumerable: !0,
                    get: function () {
                        return e.i
                    }
                }), e.webpackPolyfill = 1), e
            }
        },
        Rzy4: function (e, t, n) {
            "use strict";
            var a = n("z3IF"),
                r = n("LkAs"),
                o = n("Moms"),
                i = n("bMj6"),
                s = n("hZod"),
                l = n("YKN3"),
                c = n("tEuJ"),
                u = n("azxR"),
                m = n("YIwv"),
                p = n.n(m),
                d = n("5dyF"),
                f = n.n(d),
                h = n("mXGw"),
                g = n("EUvJ");

            function v(e) {
                return h.createElement("svg", Object(a.a)({}, e, {
                    width: "55",
                    height: "15",
                    viewBox: "0 0 55 15",
                    fill: "none",
                    xmlns: "http://www.w3.org/2000/svg"
                }), h.createElement("path", {
                    d: "M0.487393 14H8.86737V11.718H3.25515V0.909091H0.487393V14ZM10.6491 14H13.3722V4.18182H10.6491V14ZM12.017 3.01847C12.8097 3.01847 13.4936 2.41761 13.4936 1.63778C13.4936 0.864346 12.8097 0.263494 12.017 0.263494C11.2308 0.263494 10.5469 0.864346 10.5469 1.63778C10.5469 2.41761 11.2308 3.01847 12.017 3.01847ZM18.2765 8.32386C18.2828 7.05824 19.0371 6.31676 20.1365 6.31676C21.2296 6.31676 21.888 7.03267 21.8816 8.23438V14H24.6046V7.74858C24.6046 5.46023 23.2623 4.05398 21.2168 4.05398C19.7594 4.05398 18.7047 4.76989 18.2637 5.91406H18.1486V4.18182H15.5534V14H18.2765V8.32386ZM31.2507 14.1918C33.6861 14.1918 35.3161 13.0092 35.6996 11.1875L33.1875 11.0213C32.9126 11.7692 32.2031 12.1591 31.3018 12.1591C29.9403 12.1591 29.0774 11.2578 29.0774 9.79403V9.78764H35.7635V9.03977C35.7635 5.70312 33.7436 4.05398 31.1484 4.05398C28.2592 4.05398 26.3864 6.10582 26.3864 9.13565C26.3864 12.2486 28.2337 14.1918 31.2507 14.1918ZM29.0774 8.10014C29.1286 6.98153 29.9851 6.08665 31.1932 6.08665C32.3693 6.08665 33.1875 6.9304 33.2003 8.10014H29.0774ZM40.3786 14.1854C41.8295 14.1854 42.7692 13.5526 43.2486 12.6385H43.3253V14H45.9077V7.37784C45.9077 5.03835 43.907 4.05398 41.7848 4.05398C39.3686 4.05398 37.8409 5.17898 37.4638 6.96875L39.9822 7.1733C40.1676 6.52131 40.7493 6.0419 41.7273 6.0419C42.6669 6.0419 43.1783 6.50213 43.1847 7.3267C43.1911 7.9723 42.5135 8.06818 40.8068 8.23438C38.8636 8.41335 37.1186 9.06534 37.1186 11.2578C37.1186 13.201 38.5057 14.1854 40.3786 14.1854ZM41.1584 12.3061C40.321 12.3061 39.7202 11.9162 39.7202 11.1683C39.7202 10.4013 40.353 10.0241 41.3118 9.88991C41.9062 9.80682 42.8778 9.66619 43.2038 9.44886V10.4908C43.2038 11.5199 42.3537 12.3061 41.1584 12.3061ZM48.0202 14H50.7433V8.44531C50.7496 7.24361 51.619 6.41903 52.7184 6.41903C53.0891 6.41903 53.3896 6.52131 53.6452 6.64915L54.4634 4.39915C54.1055 4.18182 53.6452 4.04119 53.1211 4.04119C52.0153 4.04119 51.1204 4.6804 50.7624 5.89489H50.6602V4.18182H48.0202V14Z",
                    fill: "#F4F5FF"
                }))
            }
            var y = n("2CfY"),
                b = function () {
                    function e() {
                        Object(r.default)(this, e)
                    }
                    return Object(o.default)(e, null, [{
                        key: "supported",
                        get: function () {
                            return Object(y.getParser)(window.navigator.userAgent).satisfies(w) || !1
                        }
                    }]), e
                }(),
                w = {
                    chrome: ">=58",
                    safari: ">=10.1",
                    firefox: ">=51"
                },
                x = n("PeVk"),
                E = n("fjcK");
            n.d(t, "a", function () {
                return k
            });
            var k = function (e) {
                    function t(e) {
                        var n;
                        return Object(r.default)(this, t), n = Object(i.default)(this, Object(s.default)(t).call(this, e)), Object(u.a)(Object(l.default)(n), "toggleMenu", function () {
                            n.setState({
                                menuOpen: !n.state.menuOpen
                            })
                        }), n.state = {
                            displayBrowserWarning: !1
                        }, n
                    }
                    return Object(c.default)(t, e), Object(o.default)(t, [{
                        key: "componentDidMount",
                        value: function () {
                            this.setState({
                                displayBrowserWarning: !b.supported
                            })
                        }
                    }, {
                        key: "render",
                        value: function () {
                            return h.createElement("header", {
                                className: p.a.dynamic([
                                    ["3885773449", [this.state.menuOpen ? "black" : "rgba(22, 22, 26, 0.85)"]]
                                ])
                            }, h.createElement("div", {
                                className: p.a.dynamic([
                                    ["3885773449", [this.state.menuOpen ? "black" : "rgba(22, 22, 26, 0.85)"]]
                                ]) + " contentContainer"
                            }, h.createElement(f.a, {
                                prefetch: !0,
                                href: "/"
                            }, h.createElement("a", {
                                style: {
                                    display: "flex",
                                    alignItems: "center"
                                },
                                className: p.a.dynamic([
                                    ["3885773449", [this.state.menuOpen ? "black" : "rgba(22, 22, 26, 0.85)"]]
                                ])
                            }, h.createElement(g.a, {
                                style: {
                                    width: "24px",
                                    height: "24px",
                                    marginRight: "12px"
                                }
                            }), h.createElement(v, {
                                style: {
                                    marginTop: "2px"
                                }
                            }))), h.createElement("div", {
                                onClick: this.toggleMenu,
                                className: p.a.dynamic([
                                    ["3885773449", [this.state.menuOpen ? "black" : "rgba(22, 22, 26, 0.85)"]]
                                ]) + " mobile menuToggle"
                            }, h.createElement(T, null)), h.createElement("div", {
                                className: p.a.dynamic([
                                    ["3885773449", [this.state.menuOpen ? "black" : "rgba(22, 22, 26, 0.85)"]]
                                ]) + " desktop"
                            }, h.createElement(M, {
                                displayBrowserWarning: this.state.displayBrowserWarning
                            }))), this.state.menuOpen && h.createElement("div", {
                                className: p.a.dynamic([
                                    ["3885773449", [this.state.menuOpen ? "black" : "rgba(22, 22, 26, 0.85)"]]
                                ]) + " mobile mobileMenu"
                            }, h.createElement(M, {
                                displayBrowserWarning: this.state.displayBrowserWarning
                            })), h.createElement(p.a, {
                                id: "3885773449",
                                dynamic: [this.state.menuOpen ? "black" : "rgba(22, 22, 26, 0.85)"]
                            }, ["header.__jsx-style-dynamic-selector{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;background-color:".concat(this.state.menuOpen ? "black" : "rgba(22, 22, 26, 0.85)", ";position:fixed;top:0;left:0;right:0;-webkit-align-items:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;border-bottom:1px solid rgba(255,255,255,0.1);z-index:2;-webkit-backdrop-filter:blur(5px);}"), "header.__jsx-style-dynamic-selector .contentContainer.__jsx-style-dynamic-selector{-webkit-box-flex:1;-webkit-flex-grow:1;-ms-flex-positive:1;flex-grow:1;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-align-items:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:justify;-webkit-justify-content:space-between;-ms-flex-pack:justify;justify-content:space-between;font-size:14px;-webkit-flex-shrink:0;-ms-flex-negative:0;flex-shrink:0;height:66px;}", ".mobile.__jsx-style-dynamic-selector{display:none;}", ".desktop.__jsx-style-dynamic-selector{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;}", ".mobileMenu.__jsx-style-dynamic-selector{width:100%;}", ".toggleMenu.__jsx-style-dynamic-selector{width:22px;height:22px;}", "@media (max-width:700px){.mobile.__jsx-style-dynamic-selector{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;}.desktop.__jsx-style-dynamic-selector{display:none;}}"]))
                        }
                    }]), t
                }(h.Component),
                M = function (e) {
                    return h.createElement(h.Fragment, null, h.createElement("div", {
                        className: p.a.dynamic([
                            ["1984380441", [x.a.controlLabel]]
                        ]) + " links"
                    }, h.createElement("a", {
                        href: "https://twitter.com/linear_app",
                        className: p.a.dynamic([
                            ["1984380441", [x.a.controlLabel]]
                        ]) + " secondary"
                    }, "Twitter"), h.createElement(f.a, {
                        href: "/changelog"
                    }, h.createElement("a", {
                        className: p.a.dynamic([
                            ["1984380441", [x.a.controlLabel]]
                        ]) + " secondary"
                    }, "Changelog")), h.createElement("a", {
                        href: e.displayBrowserWarning ? "/browser-compatibility" : E.d,
                        className: p.a.dynamic([
                            ["1984380441", [x.a.controlLabel]]
                        ]) + " signIn"
                    }, "Sign in")), h.createElement(p.a, {
                        id: "1984380441",
                        dynamic: [x.a.controlLabel]
                    }, [".links.__jsx-style-dynamic-selector{-webkit-box-pack:end;-webkit-justify-content:flex-end;-ms-flex-pack:end;justify-content:flex-end;width:100%;}", ".links.__jsx-style-dynamic-selector a.__jsx-style-dynamic-selector{margin-left:48px;font-size:14px;-webkit-text-decoration:none;text-decoration:none;}", ".links.__jsx-style-dynamic-selector a.secondary.__jsx-style-dynamic-selector{color:".concat(x.a.controlLabel, ";}"), ".links.__jsx-style-dynamic-selector a.signIn.__jsx-style-dynamic-selector{font-weight:600;}", "@media (max-width:700px){.links.__jsx-style-dynamic-selector{-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;padding:0 0 12px 24px;}.links.__jsx-style-dynamic-selector a.__jsx-style-dynamic-selector{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;padding:12px 0;margin-left:0px;font-size:16px;font-weight:400;color:#f4f5ff;}}"]))
                };

            function T(e) {
                return h.createElement(h.Fragment, null, h.createElement("svg", Object(a.a)({
                    width: "18",
                    height: "11",
                    viewBox: "0 0 18 11",
                    fill: "none",
                    xmlns: "http://www.w3.org/2000/svg"
                }, e), h.createElement("path", {
                    d: "M0 0H18V1H0V0Z",
                    fill: "white"
                }), h.createElement("path", {
                    d: "M0 10H18V11H0V10Z",
                    fill: "white"
                })))
            }
        },
        SMGp: function (e, t, n) {
            "use strict";
            n.r(t), n.d(t, "default", function () {
                return p
            });
            var a = n("2Fjn"),
                r = n("LkAs"),
                o = n("Moms"),
                i = n("bMj6"),
                s = n("hZod"),
                l = n("tEuJ"),
                c = n("mXGw"),
                u = n.n(c),
                m = n("dDab"),
                p = function (e) {
                    function t(e) {
                        var n;
                        return Object(r.default)(this, t), (n = Object(i.default)(this, Object(s.default)(t).call(this, e))).layout = null, n
                    }
                    return Object(l.default)(t, e), Object(o.default)(t, [{
                        key: "render",
                        value: function () {
                            var e = this.props,
                                t = e.components;
                            Object(a.a)(e, ["components"]);
                            return u.a.createElement(m.MDXTag, {
                                name: "wrapper",
                                components: t
                            }, u.a.createElement(m.MDXTag, {
                                name: "h2",
                                components: t
                            }, "Linear desktop app"), u.a.createElement("div", {
                                style: {
                                    display: "flex",
                                    flex: 1,
                                    alignItems: "center",
                                    flexDirection: "column"
                                }
                            }, u.a.createElement("img", {
                                src: "/static/changelog/2019-04-26/linearapp.jpg",
                                style: {
                                    width: "100%",
                                    margin: "20px 0",
                                    borderRadius: "12px"
                                }
                            })), u.a.createElement(m.MDXTag, {
                                name: "p",
                                components: t
                            }, "We released our desktop application for macOS this week. It uses the same Javascript/React application we build for the web, but with the Electron wrapper you get nicer notifications, dock badge for unread messages, and most importantly: it's always on. Together with the new application we refreshed our logo (thanks ", u.a.createElement(m.MDXTag, {
                                name: "a",
                                components: t,
                                parentName: "p",
                                props: {
                                    href: "https://twitter.com/maxvoltar"
                                }
                            }, "@maxvoltar"), "!) and redesigned the login page."), u.a.createElement(m.MDXTag, {
                                name: "h2",
                                components: t
                            }, "New settings"), u.a.createElement(m.MDXTag, {
                                name: "p",
                                components: t
                            }, "Settings views have been combined into one area. This makes navigating personal and team settings easier. GitHub and Slack integration capabilities are also explained in more detail."), u.a.createElement(m.MDXTag, {
                                name: "h2",
                                components: t
                            }, "Better notifications"), u.a.createElement(m.MDXTag, {
                                name: "p",
                                components: t
                            }, "We added emails for unread notifications. They are only sent if you were to miss them in the desktop app. We do want to keep your email inbox for more important messages."), u.a.createElement(m.MDXTag, {
                                name: "p",
                                components: t
                            }, "Desktop notifications have been redesigned so that titles and descriptions are easier to read. Issues marked as ", u.a.createElement(m.MDXTag, {
                                name: "em",
                                components: t,
                                parentName: "p"
                            }, "Urgent"), " will also require user interaction as we don't want you to miss them."), u.a.createElement(m.MDXTag, {
                                name: "h2",
                                components: t
                            }, "Other improvements"), u.a.createElement(m.MDXTag, {
                                name: "ul",
                                components: t
                            }, u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, 'Inbox\'s "mark all as read" has been re-mapped to ', u.a.createElement("kbd", null, "Shift"), u.a.createElement("kbd", null, "Esc"), " shortcut and it's now also outside the Inbox view."), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "New action for adding a comment to an issue was added ", u.a.createElement("kbd", null, "Cmd"), u.a.createElement("kbd", null, "Shift"), u.a.createElement("kbd", null, "M")), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Internal links have been fixed and they will load significantly faster. You can also paste an issue ID into a description or comment and it's linked automatically."), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Issue actions have been cleaned and un-relevant ones have been removed from the new issue view.")))
                        }
                    }]), t
                }(u.a.Component);
            p.isMDXComponent = !0
        },
        SY1S: function (e, t, n) {
            e.exports = n("UR6/")
        },
        SfGT: function (e, t, n) {
            var a = n("fGh/"),
                r = n("Jh4J"),
                o = n("0Sp3")("species");
            e.exports = function (e) {
                var t;
                return r(e) && ("function" != typeof (t = e.constructor) || t !== Array && !r(t.prototype) || (t = void 0), a(t) && null === (t = t[o]) && (t = void 0)), void 0 === t ? Array : t
            }
        },
        THQi: function (e, t, n) {
            "use strict";
            var a = function (e) {
                switch (typeof e) {
                    case "string":
                        return e;
                    case "boolean":
                        return e ? "true" : "false";
                    case "number":
                        return isFinite(e) ? e : "";
                    default:
                        return ""
                }
            };
            e.exports = function (e, t, n, s) {
                return t = t || "&", n = n || "=", null === e && (e = void 0), "object" == typeof e ? o(i(e), function (i) {
                    var s = encodeURIComponent(a(i)) + n;
                    return r(e[i]) ? o(e[i], function (e) {
                        return s + encodeURIComponent(a(e))
                    }).join(t) : s + encodeURIComponent(a(e[i]))
                }).join(t) : s ? encodeURIComponent(a(s)) + n + encodeURIComponent(a(e)) : ""
            };
            var r = Array.isArray || function (e) {
                return "[object Array]" === Object.prototype.toString.call(e)
            };

            function o(e, t) {
                if (e.map) return e.map(t);
                for (var n = [], a = 0; a < e.length; a++) n.push(t(e[a], a));
                return n
            }
            var i = Object.keys || function (e) {
                var t = [];
                for (var n in e) Object.prototype.hasOwnProperty.call(e, n) && t.push(n);
                return t
            }
        },
        U8Yc: function (e, t, n) {
            e.exports = n("AFnJ")
        },
        UKnr: function (e, t, n) {
            "use strict";
            t.decode = t.parse = n("MNOf"), t.encode = t.stringify = n("THQi")
        },
        "UR6/": function (e, t, n) {
            n("k/kI"), n("WwSA"), e.exports = n("uMC/")
        },
        UrUy: function (e, t, n) {
            e.exports = n("Y9pn")
        },
        V1oW: function (e, t, n) {
            "use strict";
            n.r(t), n.d(t, "default", function () {
                return p
            });
            var a = n("2Fjn"),
                r = n("LkAs"),
                o = n("Moms"),
                i = n("bMj6"),
                s = n("hZod"),
                l = n("tEuJ"),
                c = n("mXGw"),
                u = n.n(c),
                m = n("dDab"),
                p = function (e) {
                    function t(e) {
                        var n;
                        return Object(r.default)(this, t), (n = Object(i.default)(this, Object(s.default)(t).call(this, e))).layout = null, n
                    }
                    return Object(l.default)(t, e), Object(o.default)(t, [{
                        key: "render",
                        value: function () {
                            var e = this.props,
                                t = e.components;
                            Object(a.a)(e, ["components"]);
                            return u.a.createElement(m.MDXTag, {
                                name: "wrapper",
                                components: t
                            }, u.a.createElement(m.MDXTag, {
                                name: "h2",
                                components: t
                            }, "Creating new issues via email"), u.a.createElement("div", {
                                style: {
                                    display: "flex",
                                    flex: 1,
                                    alignItems: "center",
                                    flexDirection: "column"
                                }
                            }, u.a.createElement("img", {
                                src: "/static/changelog/2019-05-03/email.jpg",
                                style: {
                                    width: "100%",
                                    margin: "20px 0",
                                    borderRadius: "12px"
                                }
                            })), u.a.createElement(m.MDXTag, {
                                name: "p",
                                components: t
                            }, "This week we added the ability to create new issues via email. Perfect for when one of your users emails you a bug report. Simply forward it to your team's email address (you can find the correct email address in your team's settings). The subject of the email becomes the issue's title and the body the description."), u.a.createElement(m.MDXTag, {
                                name: "h2",
                                components: t
                            }, "Board enhancements"), u.a.createElement(m.MDXTag, {
                                name: "p",
                                components: t
                            }, "Boards received some love this week, too. You can now easily archive all issues in a board column using the column's drop-down menu. Perfect for when you want to archive all completed issues at the end of the week. Next to the drop-down menu, there's a nifty short-cut to creating new issues for the column."), u.a.createElement(m.MDXTag, {
                                name: "h2",
                                components: t
                            }, "Jump to an issue via the command menu"), u.a.createElement(m.MDXTag, {
                                name: "p",
                                components: t
                            }, "You can now use the command menu to jump directly to an issue if you now it's identifier. For example, if you type ", u.a.createElement(m.MDXTag, {
                                name: "inlineCode",
                                components: t,
                                parentName: "p"
                            }, "lin-123"), ", the command menu will search for an issue with that identifier and let you instantly navigate to it."), u.a.createElement(m.MDXTag, {
                                name: "h2",
                                components: t
                            }, "Other improvements & fixes"), u.a.createElement(m.MDXTag, {
                                name: "ul",
                                components: t
                            }, u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Fixed issues potentially appearing in two board columns at the same time when creating them"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Overly long issue titles now don't break layout anymore"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Synchronization across users of the organization now works more reliably")))
                        }
                    }]), t
                }(u.a.Component);
            p.isMDXComponent = !0
        },
        VJcA: function (e, t, n) {
            var a = n("/1nD"),
                r = n("0Sp3")("iterator"),
                o = n("N9zW");
            e.exports = n("TaGV").getIteratorMethod = function (e) {
                if (null != e) return e[r] || e["@@iterator"] || o[a(e)]
            }
        },
        VX2v: function (e, t, n) {
            "use strict";
            var a = n("41F1"),
                r = n("/6KZ"),
                o = n("hYpR"),
                i = n("/Vl9"),
                s = n("PPkd"),
                l = n("IUx0"),
                c = n("s9UB"),
                u = n("LuVv"),
                m = n("fGh/"),
                p = n("sWB5"),
                d = n("eOWL").f,
                f = n("NlCR")(0),
                h = n("lBnu");
            e.exports = function (e, t, n, g, v, y) {
                var b = a[e],
                    w = b,
                    x = v ? "set" : "add",
                    E = w && w.prototype,
                    k = {};
                return h && "function" == typeof w && (y || E.forEach && !i(function () {
                    (new w).entries().next()
                })) ? (w = t(function (t, n) {
                    u(t, w, e, "_c"), t._c = new b, null != n && c(n, v, t[x], t)
                }), f("add,clear,delete,forEach,get,has,set,keys,values,entries,toJSON".split(","), function (e) {
                    var t = "add" == e || "set" == e;
                    e in E && (!y || "clear" != e) && s(w.prototype, e, function (n, a) {
                        if (u(this, w, e), !t && y && !m(n)) return "get" == e && void 0;
                        var r = this._c[e](0 === n ? 0 : n, a);
                        return t ? this : r
                    })
                }), y || d(w.prototype, "size", {
                    get: function () {
                        return this._c.size
                    }
                })) : (w = g.getConstructor(t, e, v, x), l(w.prototype, n), o.NEED = !0), p(w, e), k[e] = w, r(r.G + r.W + r.F, k), y || g.setStrong(w, e, v), w
            }
        },
        Vlwe: function (e, t, n) {
            n("WwSA"), n("2agv"), e.exports = n("TaGV").Array.from
        },
        W0B4: function (e, t, n) {
            e.exports = n("NS33")()
        },
        WJTZ: function (e, t, n) {
            "use strict";
            var a = n("HD3J");

            function r(e) {
                var t, n;
                this.promise = new e(function (e, a) {
                    if (void 0 !== t || void 0 !== n) throw TypeError("Bad Promise constructor");
                    t = e, n = a
                }), this.resolve = a(t), this.reject = a(n)
            }
            e.exports.f = function (e) {
                return new r(e)
            }
        },
        XZM3: function (e, t, n) {
            n("pFlO")("Set")
        },
        Y9pn: function (e, t, n) {
            var a = function () {
                    return this || "object" == typeof self && self
                }() || Function("return this")(),
                r = a.regeneratorRuntime && Object.getOwnPropertyNames(a).indexOf("regeneratorRuntime") >= 0,
                o = r && a.regeneratorRuntime;
            if (a.regeneratorRuntime = void 0, e.exports = n("wcNg"), r) a.regeneratorRuntime = o;
            else try {
                delete a.regeneratorRuntime
            } catch (i) {
                a.regeneratorRuntime = void 0
            }
        },
        YIwv: function (e, t, n) {
            e.exports = n("s1G/")
        },
        Yvct: function (e, t, n) {
            "use strict";
            var a = n("eOWL").f,
                r = n("G+Zn"),
                o = n("IUx0"),
                i = n("8Xl/"),
                s = n("LuVv"),
                l = n("s9UB"),
                c = n("gMWQ"),
                u = n("TTxG"),
                m = n("hXZv"),
                p = n("lBnu"),
                d = n("hYpR").fastKey,
                f = n("O/tV"),
                h = p ? "_s" : "size",
                g = function (e, t) {
                    var n, a = d(t);
                    if ("F" !== a) return e._i[a];
                    for (n = e._f; n; n = n.n)
                        if (n.k == t) return n
                };
            e.exports = {
                getConstructor: function (e, t, n, c) {
                    var u = e(function (e, a) {
                        s(e, u, t, "_i"), e._t = t, e._i = r(null), e._f = void 0, e._l = void 0, e[h] = 0, null != a && l(a, n, e[c], e)
                    });
                    return o(u.prototype, {
                        clear: function () {
                            for (var e = f(this, t), n = e._i, a = e._f; a; a = a.n) a.r = !0, a.p && (a.p = a.p.n = void 0), delete n[a.i];
                            e._f = e._l = void 0, e[h] = 0
                        },
                        delete: function (e) {
                            var n = f(this, t),
                                a = g(n, e);
                            if (a) {
                                var r = a.n,
                                    o = a.p;
                                delete n._i[a.i], a.r = !0, o && (o.n = r), r && (r.p = o), n._f == a && (n._f = r), n._l == a && (n._l = o), n[h]--
                            }
                            return !!a
                        },
                        forEach: function (e) {
                            f(this, t);
                            for (var n, a = i(e, arguments.length > 1 ? arguments[1] : void 0, 3); n = n ? n.n : this._f;)
                                for (a(n.v, n.k, this); n && n.r;) n = n.p
                        },
                        has: function (e) {
                            return !!g(f(this, t), e)
                        }
                    }), p && a(u.prototype, "size", {
                        get: function () {
                            return f(this, t)[h]
                        }
                    }), u
                },
                def: function (e, t, n) {
                    var a, r, o = g(e, t);
                    return o ? o.v = n : (e._l = o = {
                        i: r = d(t, !0),
                        k: t,
                        v: n,
                        p: a = e._l,
                        n: void 0,
                        r: !1
                    }, e._f || (e._f = o), a && (a.n = o), e[h]++, "F" !== r && (e._i[r] = o)), e
                },
                getEntry: g,
                setStrong: function (e, t, n) {
                    c(e, t, function (e, n) {
                        this._t = f(e, t), this._k = n, this._l = void 0
                    }, function () {
                        for (var e = this._k, t = this._l; t && t.r;) t = t.p;
                        return this._t && (this._l = t = t ? t.n : this._t._f) ? u(0, "keys" == e ? t.k : "values" == e ? t.v : [t.k, t.v]) : (this._t = void 0, u(1))
                    }, n ? "entries" : "values", !n, !0), m(t)
                }
            }
        },
        ZOIa: function (e, t, n) {
            e.exports = n("6oba")
        },
        ZWEY: function (e, t, n) {
            "use strict";
            n.r(t), n.d(t, "default", function () {
                return p
            });
            var a = n("2Fjn"),
                r = n("LkAs"),
                o = n("Moms"),
                i = n("bMj6"),
                s = n("hZod"),
                l = n("tEuJ"),
                c = n("mXGw"),
                u = n.n(c),
                m = n("dDab"),
                p = function (e) {
                    function t(e) {
                        var n;
                        return Object(r.default)(this, t), (n = Object(i.default)(this, Object(s.default)(t).call(this, e))).layout = null, n
                    }
                    return Object(l.default)(t, e), Object(o.default)(t, [{
                        key: "render",
                        value: function () {
                            var e = this.props,
                                t = e.components;
                            Object(a.a)(e, ["components"]);
                            return u.a.createElement(m.MDXTag, {
                                name: "wrapper",
                                components: t
                            }, u.a.createElement(m.MDXTag, {
                                name: "h2",
                                components: t
                            }, "First-time user experience"), u.a.createElement("div", {
                                style: {
                                    display: "flex",
                                    flex: 1,
                                    alignItems: "center",
                                    flexDirection: "column"
                                }
                            }, u.a.createElement("img", {
                                src: "/static/changelog/2019-05-10/welcome.jpg",
                                style: {
                                    width: "100%",
                                    margin: "20px 0",
                                    borderRadius: "12px"
                                }
                            })), u.a.createElement(m.MDXTag, {
                                name: "p",
                                components: t
                            }, "This week we made major improvements to the sign in and first-time user experience: everyone in your team will now get an introduction to the command menu and other Linear features."), u.a.createElement(m.MDXTag, {
                                name: "p",
                                components: t
                            }, 'If you are an existing user, you can initiate first-time introduction through the command menu by searching for "welcome tutorial."'), u.a.createElement(m.MDXTag, {
                                name: "h2",
                                components: t
                            }, "Keyboard shortcuts"), u.a.createElement(m.MDXTag, {
                                name: "p",
                                components: t
                            }, "Redesigned the keyboard shortcuts page with a new design and added all the supported shortcuts. Hit ", u.a.createElement("code", null, "?"), " to bring up the keyboard shortcuts."), u.a.createElement(m.MDXTag, {
                                name: "h2",
                                components: t
                            }, "Emoji autocomplete"), u.a.createElement(m.MDXTag, {
                                name: "p",
                                components: t
                            }, "Typing ", u.a.createElement("kbd", null, ":"), " in any of the issue descriptions or comments now brings up the emoji autocomplete."), u.a.createElement(m.MDXTag, {
                                name: "h2",
                                components: t
                            }, "Slack /linear command"), u.a.createElement(m.MDXTag, {
                                name: "p",
                                components: t
                            }, 'In addition to the "More actions" message action, you can now open the new issue dialog with ', u.a.createElement("code", null, "/linear"), " command to file new issues quickly from Slack."), u.a.createElement(m.MDXTag, {
                                name: "h2",
                                components: t
                            }, "Loading state"), u.a.createElement(m.MDXTag, {
                                name: "p",
                                components: t
                            }, "While we don't like seeing loading states in the app, having one for the initial load and browser refresh is necessary. We improved design with a subtle logo animation."), u.a.createElement(m.MDXTag, {
                                name: "h2",
                                components: t
                            }, "Other improvements & fixes"), u.a.createElement(m.MDXTag, {
                                name: "ul",
                                components: t
                            }, u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Updated favicon"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Fixed bugs in GitHub integration and removed source code access from permissions"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Fixed keyboard navigation in Inbox"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Fixed sub-issue actions to focus on the correct sub-issue"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Moved add team functionality to settings page")))
                        }
                    }]), t
                }(u.a.Component);
            p.isMDXComponent = !0
        },
        azxR: function (e, t, n) {
            "use strict";
            n.d(t, "a", function () {
                return o
            });
            var a = n("hHgk"),
                r = n.n(a);

            function o(e, t, n) {
                return t in e ? r()(e, t, {
                    value: n,
                    enumerable: !0,
                    configurable: !0,
                    writable: !0
                }) : e[t] = n, e
            }
        },
        bBV7: function (e, t, n) {
            "use strict";
            var a = n("PL1w"),
                r = a(n("U8Yc")),
                o = a(n("ied0")),
                i = a(n("hHgk")),
                s = function (e) {
                    return e && e.__esModule ? e : {
                        default: e
                    }
                };
            Object.defineProperty(t, "__esModule", {
                value: !0
            });
            var l = s(n("mXGw")),
                c = s(n("H09g"));
            t.Router = c.default;
            var u = n("4vxr"),
                m = n("kD9r"),
                p = {
                    router: null,
                    readyCallbacks: [],
                    ready: function (e) {
                        if (this.router) return e();
                        "undefined" != typeof window && this.readyCallbacks.push(e)
                    }
                },
                d = ["pathname", "route", "query", "asPath"],
                f = ["components"],
                h = ["push", "replace", "reload", "back", "prefetch", "beforePopState"];

            function g() {
                if (!p.router) {
                    throw new Error('No router instance found.\nYou should only use "next/router" inside the client side of your app.\n')
                }
                return p.router
            }
            Object.defineProperty(p, "events", {
                get: function () {
                    return c.default.events
                }
            }), f.concat(d).forEach(function (e) {
                (0, i.default)(p, e, {
                    get: function () {
                        return g()[e]
                    }
                })
            }), h.forEach(function (e) {
                p[e] = function () {
                    var t = g();
                    return t[e].apply(t, arguments)
                }
            }), ["routeChangeStart", "beforeHistoryChange", "routeChangeComplete", "routeChangeError", "hashChangeStart", "hashChangeComplete"].forEach(function (e) {
                p.ready(function () {
                    c.default.events.on(e, function () {
                        var t = "on".concat(e.charAt(0).toUpperCase()).concat(e.substring(1)),
                            n = p;
                        if (n[t]) try {
                            n[t].apply(n, arguments)
                        } catch (a) {
                            console.error("Error when running the Router event: ".concat(t)), console.error("".concat(a.message, "\n").concat(a.stack))
                        }
                    })
                })
            }), t.default = p;
            var v = n("/3ze");
            t.withRouter = v.default, t.useRouter = function () {
                return l.default.useContext(u.RouterContext)
            }, t.useRequest = function () {
                return l.default.useContext(m.RequestContext)
            }, t.createRouter = function () {
                for (var e = arguments.length, t = new Array(e), n = 0; n < e; n++) t[n] = arguments[n];
                return p.router = (0, o.default)(c.default, t), p.readyCallbacks.forEach(function (e) {
                    return e()
                }), p.readyCallbacks = [], p.router
            }, t.makePublicRouterInstance = function (e) {
                for (var t = e, n = {}, a = 0; a < d.length; a++) {
                    var o = d[a];
                    "object" != typeof t[o] ? n[o] = t[o] : n[o] = (0, r.default)({}, t[o])
                }
                return n.events = c.default.events, f.forEach(function (e) {
                    (0, i.default)(n, e, {
                        get: function () {
                            return t[e]
                        }
                    })
                }), h.forEach(function (e) {
                    n[e] = function () {
                        return t[e].apply(t, arguments)
                    }
                }), n
            }
        },
        bdJ0: function (e, t, n) {
            n("iKhv"), n("WwSA"), n("k/kI"), n("IXD+"), n("mVXz"), n("XZM3"), n("mPQl"), e.exports = n("TaGV").Set
        },
        bfeq: function (e, t, n) {
            "use strict";
            n.r(t), n.d(t, "default", function () {
                return p
            });
            var a = n("2Fjn"),
                r = n("LkAs"),
                o = n("Moms"),
                i = n("bMj6"),
                s = n("hZod"),
                l = n("tEuJ"),
                c = n("mXGw"),
                u = n.n(c),
                m = n("dDab"),
                p = function (e) {
                    function t(e) {
                        var n;
                        return Object(r.default)(this, t), (n = Object(i.default)(this, Object(s.default)(t).call(this, e))).layout = null, n
                    }
                    return Object(l.default)(t, e), Object(o.default)(t, [{
                        key: "render",
                        value: function () {
                            var e = this.props,
                                t = e.components;
                            Object(a.a)(e, ["components"]);
                            return u.a.createElement(m.MDXTag, {
                                name: "wrapper",
                                components: t
                            }, u.a.createElement(m.MDXTag, {
                                name: "h2",
                                components: t
                            }, "Projects"), u.a.createElement("div", {
                                style: {
                                    display: "flex",
                                    flex: 1,
                                    alignItems: "center",
                                    flexDirection: "column"
                                }
                            }, u.a.createElement("img", {
                                src: "/static/changelog/2019-07-29/projects.png",
                                style: {
                                    width: "100%",
                                    margin: "20px 0",
                                    borderRadius: "12px"
                                }
                            })), u.a.createElement(m.MDXTag, {
                                name: "p",
                                components: t
                            }, "To set direction and long term goals for the team it is often useful to plan larger initiatives or features alongside all the other work that needs to happen."), u.a.createElement(m.MDXTag, {
                                name: "p",
                                components: t
                            }, "With ", u.a.createElement(m.MDXTag, {
                                name: "strong",
                                components: t,
                                parentName: "p"
                            }, "Linear Projects"), ", we wanted to make exceptionally easy and fast to create a project, and start refining it as you go. You can optionally set a target date, description, and link to the product spec so that the necessary context is there."), u.a.createElement(m.MDXTag, {
                                name: "p",
                                components: t
                            }, "You can break the individual work to multiple Cycles, and make constant progress each week to complete the project."), u.a.createElement(m.MDXTag, {
                                name: "p",
                                components: t
                            }, "This is our first release of Projects and we're excited to continue expanding them to make it easier for you to design and build software."), u.a.createElement(m.MDXTag, {
                                name: "p",
                                components: t
                            }, u.a.createElement(m.MDXTag, {
                                name: "strong",
                                components: t,
                                parentName: "p"
                            }, "ProTip:"), " If you need to group issues but they are too small to use Projects, you can link them together as sub-issues. Select an issue, and from command menu pick ", u.a.createElement(m.MDXTag, {
                                name: "em",
                                components: t,
                                parentName: "p"
                            }, "Set parent issue"), "."), u.a.createElement(m.MDXTag, {
                                name: "h2",
                                components: t
                            }, "Other improvements and fixes"), u.a.createElement(m.MDXTag, {
                                name: "ul",
                                components: t
                            }, u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Archived issues can now be accessed via their URL and no longer return a 404"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Scroll lists with ", u.a.createElement("kbd", null, "Ctrl"), u.a.createElement("kbd", null, "n"), " and ", u.a.createElement("kbd", null, "Ctrl"), u.a.createElement("kbd", null, "p"), " shortcuts"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Issues are now deselected in multi-select when changing views."), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Hovering over sub-issues now support keyboard shortcuts"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Improved editor styles"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Improved styling for All Cycles view"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Improved messaging for git branch name copying"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Better error handling for failed user actions"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Optimized initial application data loading performance"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Don't trigger issue peek in inputs (tip: show issue peek by pressing ", u.a.createElement("kbd", null, "Option"), " in lists)"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Fixed setting parent issue when creating a new sub-issue in some views"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Fixed duplicate linking with GitHub pull requests"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Fixed command menu mouse focus and styling for Safari")))
                        }
                    }]), t
                }(u.a.Component);
            p.isMDXComponent = !0
        },
        cCv0: function (e, t, n) {
            var a, r, o, i = n("8Xl/"),
                s = n("qacR"),
                l = n("5gKE"),
                c = n("m/Uw"),
                u = n("41F1"),
                m = u.process,
                p = u.setImmediate,
                d = u.clearImmediate,
                f = u.MessageChannel,
                h = u.Dispatch,
                g = 0,
                v = {},
                y = function () {
                    var e = +this;
                    if (v.hasOwnProperty(e)) {
                        var t = v[e];
                        delete v[e], t()
                    }
                },
                b = function (e) {
                    y.call(e.data)
                };
            p && d || (p = function (e) {
                for (var t = [], n = 1; arguments.length > n;) t.push(arguments[n++]);
                return v[++g] = function () {
                    s("function" == typeof e ? e : Function(e), t)
                }, a(g), g
            }, d = function (e) {
                delete v[e]
            }, "process" == n("g2rQ")(m) ? a = function (e) {
                m.nextTick(i(y, e, 1))
            } : h && h.now ? a = function (e) {
                h.now(i(y, e, 1))
            } : f ? (o = (r = new f).port2, r.port1.onmessage = b, a = i(o.postMessage, o, 1)) : u.addEventListener && "function" == typeof postMessage && !u.importScripts ? (a = function (e) {
                u.postMessage(e + "", "*")
            }, u.addEventListener("message", b, !1)) : a = "onreadystatechange" in c("script") ? function (e) {
                l.appendChild(c("script")).onreadystatechange = function () {
                    l.removeChild(this), y.call(e)
                }
            } : function (e) {
                setTimeout(i(y, e, 1), 0)
            }), e.exports = {
                set: p,
                clear: d
            }
        },
        eoaJ: function (e, t, n) {
            "use strict";
            var a = function (e) {
                if (e && e.__esModule) return e;
                var t = {};
                if (null != e)
                    for (var n in e) Object.hasOwnProperty.call(e, n) && (t[n] = e[n]);
                return t.default = e, t
            };
            Object.defineProperty(t, "__esModule", {
                value: !0
            });
            var r = a(n("mXGw"));
            t.AmpModeContext = r.createContext({})
        },
        fjcK: function (e, t, n) {
            "use strict";
            n.d(t, "d", function () {
                return a
            }), n.d(t, "c", function () {
                return r
            }), n.d(t, "b", function () {
                return o
            }), n.d(t, "a", function () {
                return i
            });
            var a = "https://accounts.google.com/o/oauth2/v2/auth?\n  redirect_uri=".concat("https://linear.app/auth/google/callback", "&\n  response_type=code&\n  access_type=offline&\n  client_id=").concat("463717515632-5f96ed9uaue5p206umg9toffdbfmsfbm.apps.googleusercontent.com", "&\n  scope=").concat("https://www.googleapis.com/auth/userinfo.email%20https://www.googleapis.com/auth/userinfo.profile", "&\n  prompt=consent").replace(/\s/g, ""),
                r = "https://linearapp.typeform.com/to/jobhoX",
                o = "https://twitter.com/linear_app/",
                i = "https://newsletter.linear.app"
        },
        g9SA: function (e, t, n) {
            var a = n("OKNm");

            function r(t, n) {
                return e.exports = r = a || function (e, t) {
                    return e.__proto__ = t, e
                }, r(t, n)
            }
            e.exports = r
        },
        gDZL: function (e, t, n) {
            var a = n("41F1").navigator;
            e.exports = a && a.userAgent || ""
        },
        hDBU: function (e, t, n) {
            "use strict";
            n.r(t);
            var a = n("s20r"),
                r = n.n(a);
            var o = n("SY1S"),
                i = n.n(o);

            function s(e, t) {
                return function (e) {
                    if (r()(e)) return e
                }(e) || function (e, t) {
                    var n = [],
                        a = !0,
                        r = !1,
                        o = void 0;
                    try {
                        for (var s, l = i()(e); !(a = (s = l.next()).done) && (n.push(s.value), !t || n.length !== t); a = !0);
                    } catch (c) {
                        r = !0, o = c
                    } finally {
                        try {
                            a || null == l.return || l.return()
                        } finally {
                            if (r) throw o
                        }
                    }
                    return n
                }(e, t) || function () {
                    throw new TypeError("Invalid attempt to destructure non-iterable instance")
                }()
            }
            n.d(t, "default", function () {
                return s
            })
        },
        hFOM: function (e, t, n) {
            "use strict";
            n.r(t), n.d(t, "default", function () {
                return p
            });
            var a = n("2Fjn"),
                r = n("LkAs"),
                o = n("Moms"),
                i = n("bMj6"),
                s = n("hZod"),
                l = n("tEuJ"),
                c = n("mXGw"),
                u = n.n(c),
                m = n("dDab"),
                p = function (e) {
                    function t(e) {
                        var n;
                        return Object(r.default)(this, t), (n = Object(i.default)(this, Object(s.default)(t).call(this, e))).layout = null, n
                    }
                    return Object(l.default)(t, e), Object(o.default)(t, [{
                        key: "render",
                        value: function () {
                            var e = this.props,
                                t = e.components;
                            Object(a.a)(e, ["components"]);
                            return u.a.createElement(m.MDXTag, {
                                name: "wrapper",
                                components: t
                            }, u.a.createElement(m.MDXTag, {
                                name: "h2",
                                components: t
                            }, "International keyboard shortcut improvements"), u.a.createElement(m.MDXTag, {
                                name: "p",
                                components: t
                            }, "Keyboard shortcuts have been improved for non-US keyboard layouts. As part of the improvements, a few shortcuts were remapped to different shortcuts:"), u.a.createElement(m.MDXTag, {
                                name: "ul",
                                components: t
                            }, u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Copy issue ID: ", u.a.createElement("kbd", null, "Cmd"), u.a.createElement("kbd", null, ".")), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Copy issue git branch: ", u.a.createElement("kbd", null, "Cmd"), u.a.createElement("kbd", null, "Shift"), u.a.createElement("kbd", null, "."))), u.a.createElement(m.MDXTag, {
                                name: "h2",
                                components: t
                            }, "New version for Linear desktop application"), u.a.createElement(m.MDXTag, {
                                name: "p",
                                components: t
                            }, "As part of macOS 10.14.5 Apple tightened security requirements for applications. New version of the Linear desktop app has been notarized to match the requirements. If you had issues running the application before, please download the new version here: ", u.a.createElement(m.MDXTag, {
                                name: "a",
                                components: t,
                                parentName: "p",
                                props: {
                                    href: "https://linear.app/download"
                                }
                            }, "https://linear.app/download")), u.a.createElement(m.MDXTag, {
                                name: "h2",
                                components: t
                            }, "Improved issue details bar"), u.a.createElement(m.MDXTag, {
                                name: "p",
                                components: t
                            }, "The UI is simplified and the drop-downs are replaced with the command menu actions."), u.a.createElement(m.MDXTag, {
                                name: "h2",
                                components: t
                            }, "Other improvements and fixes"), u.a.createElement(m.MDXTag, {
                                name: "ul",
                                components: t
                            }, u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Comment text is now included in desktop notifications"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Rename issues from the command menu"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Ability to copy url to the team. You can find it in the more menu by the team"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Fix to ", u.a.createElement("kbd", null, "Cmd"), u.a.createElement("kbd", null, "Enter"), " / ", u.a.createElement("kbd", null, "Escape"), " outside editor"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Fix to back button behavior in issue compose"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Removed showing of duplicate toasts"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Removed empty grouping headers")))
                        }
                    }]), t
                }(u.a.Component);
            p.isMDXComponent = !0
        },
        hXZv: function (e, t, n) {
            "use strict";
            var a = n("41F1"),
                r = n("TaGV"),
                o = n("eOWL"),
                i = n("lBnu"),
                s = n("0Sp3")("species");
            e.exports = function (e) {
                var t = "function" == typeof r[e] ? r[e] : a[e];
                i && t && !t[s] && o.f(t, s, {
                    configurable: !0,
                    get: function () {
                        return this
                    }
                })
            }
        },
        iOo5: function (e, t, n) {
            "use strict";
            n.r(t), n.d(t, "default", function () {
                return p
            });
            var a = n("2Fjn"),
                r = n("LkAs"),
                o = n("Moms"),
                i = n("bMj6"),
                s = n("hZod"),
                l = n("tEuJ"),
                c = n("mXGw"),
                u = n.n(c),
                m = n("dDab"),
                p = function (e) {
                    function t(e) {
                        var n;
                        return Object(r.default)(this, t), (n = Object(i.default)(this, Object(s.default)(t).call(this, e))).layout = null, n
                    }
                    return Object(l.default)(t, e), Object(o.default)(t, [{
                        key: "render",
                        value: function () {
                            var e = this.props,
                                t = e.components;
                            Object(a.a)(e, ["components"]);
                            return u.a.createElement(m.MDXTag, {
                                name: "wrapper",
                                components: t
                            }, u.a.createElement(m.MDXTag, {
                                name: "h2",
                                components: t
                            }, "Video uploads and player"), u.a.createElement("div", {
                                style: {
                                    display: "flex",
                                    flex: 1,
                                    alignItems: "center",
                                    flexDirection: "column"
                                }
                            }, u.a.createElement("img", {
                                src: "/static/changelog/2019-09-03/videos.jpg",
                                style: {
                                    width: "100%",
                                    margin: "20px 0",
                                    borderRadius: "12px"
                                }
                            })), u.a.createElement(m.MDXTag, {
                                name: "p",
                                components: t
                            }, "For new designs or bug reports, videos can tell more than pictures or words. Linear now supports video uploads as well as Loom embeds. "), u.a.createElement(m.MDXTag, {
                                name: "p",
                                components: t
                            }, "To embedd a video, just drag and drop a video file onto the issue description or comment field or paste in a Loom link and it will automatically be embedded."), u.a.createElement(m.MDXTag, {
                                name: "h2",
                                components: t
                            }, "Easier way to send feedback"), u.a.createElement(m.MDXTag, {
                                name: "p",
                                components: t
                            }, "We want to learn as much as possible from you on how we can improve Linear. We've added an easier way to send feedback from the app sidebar. We also have a new Slack community, the link of which you can find in the settings menu."), u.a.createElement(m.MDXTag, {
                                name: "h2",
                                components: t
                            }, "Copy issue link"), u.a.createElement(m.MDXTag, {
                                name: "p",
                                components: t
                            }, "In addition to copying the issue id and git branch name, you can now also easily copy a link to the issue. Use the icon on the right corner or use the action menu (copy issue url)."), u.a.createElement(m.MDXTag, {
                                name: "h2",
                                components: t
                            }, "Other improvements and fixes"), u.a.createElement(m.MDXTag, {
                                name: "ul",
                                components: t
                            }, u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Added clear-button for search field"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "The project name in the project editor now automatically receives focus"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Improvements to sync reliability"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Fixed a problem where one could accidentally archive a project instead of an issue within a project")))
                        }
                    }]), t
                }(u.a.Component);
            p.isMDXComponent = !0
        },
        ied0: function (e, t, n) {
            var a = n("7mTa"),
                r = n("g9SA");

            function o(t, n, i) {
                return ! function () {
                    if ("undefined" == typeof Reflect || !a) return !1;
                    if (a.sham) return !1;
                    if ("function" == typeof Proxy) return !0;
                    try {
                        return Date.prototype.toString.call(a(Date, [], function () {})), !0
                    } catch (e) {
                        return !1
                    }
                }() ? e.exports = o = function (e, t, n) {
                    var a = [null];
                    a.push.apply(a, t);
                    var o = new(Function.bind.apply(e, a));
                    return n && r(o, n.prototype), o
                } : e.exports = o = a, o.apply(null, arguments)
            }
            e.exports = o
        },
        kD9r: function (e, t, n) {
            "use strict";
            var a = function (e) {
                if (e && e.__esModule) return e;
                var t = {};
                if (null != e)
                    for (var n in e) Object.hasOwnProperty.call(e, n) && (t[n] = e[n]);
                return t.default = e, t
            };
            Object.defineProperty(t, "__esModule", {
                value: !0
            });
            var r = a(n("mXGw"));
            t.RequestContext = r.createContext(null)
        },
        kIll: function (e, t, n) {
            "use strict";
            n.r(t), n.d(t, "default", function () {
                return p
            });
            var a = n("2Fjn"),
                r = n("LkAs"),
                o = n("Moms"),
                i = n("bMj6"),
                s = n("hZod"),
                l = n("tEuJ"),
                c = n("mXGw"),
                u = n.n(c),
                m = n("dDab"),
                p = function (e) {
                    function t(e) {
                        var n;
                        return Object(r.default)(this, t), (n = Object(i.default)(this, Object(s.default)(t).call(this, e))).layout = null, n
                    }
                    return Object(l.default)(t, e), Object(o.default)(t, [{
                        key: "render",
                        value: function () {
                            var e = this.props,
                                t = e.components;
                            Object(a.a)(e, ["components"]);
                            return u.a.createElement(m.MDXTag, {
                                name: "wrapper",
                                components: t
                            }, u.a.createElement(m.MDXTag, {
                                name: "h2",
                                components: t
                            }, "Filters"), u.a.createElement("div", {
                                style: {
                                    display: "flex",
                                    flex: 1,
                                    alignItems: "center",
                                    flexDirection: "column"
                                }
                            }, u.a.createElement("img", {
                                src: "/static/changelog/2019-08-05/filters.png",
                                style: {
                                    width: "100%",
                                    margin: "20px 0",
                                    borderRadius: "12px"
                                }
                            })), u.a.createElement(m.MDXTag, {
                                name: "p",
                                components: t
                            }, "Once your team's issue count starts growing, filtering becomes necessary to narrow down the scope of issues that you want to look at or manage. We gained valuable experience from our initial filter design, and wanted to improve the design in two ways:"), u.a.createElement(m.MDXTag, {
                                name: "ol",
                                components: t
                            }, u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ol"
                            }, "The filter UI should scale with more options and filter types"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ol"
                            }, "You should be able to use filters 100% via the keyboard")), u.a.createElement(m.MDXTag, {
                                name: "p",
                                components: t
                            }, "This week we fully redesigned and reimplemented how filters work. In any view that lists issues - including the board - you can access filter via the ", u.a.createElement("kbd", null, "f"), " shortcut. Once a filter has been applied it can be removed with the ", u.a.createElement("kbd", null, "Shift"), u.a.createElement("kbd", null, "f"), " shortcut."), u.a.createElement(m.MDXTag, {
                                name: "p",
                                components: t
                            }, 'Filters are now view based, so you can, for example, apply different filters to "My Issues" and "Active Issues" and jump between these views without losing each filter.'), u.a.createElement(m.MDXTag, {
                                name: "h2",
                                components: t
                            }, "Other improvements and fixes"), u.a.createElement(m.MDXTag, {
                                name: "ul",
                                components: t
                            }, u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Project status can now be changed via actions and the ", u.a.createElement("kbd", null, "s"), " shortcut"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Projects are sorted according to their status"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Labels can now be modified from the ", u.a.createElement("a", {
                                href: "/settings/teams"
                            }, "team settings")), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Fixed navigation issues, the back-button will now yield more expected results"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Cycle burn-up graphs have less crowded x-axis labels for long cycles"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "@Mentioning users now work better if you have a substantial amount of team members"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Peek now deactivates if you hide the client by ", u.a.createElement("kbd", null, "Option"), "-clicking your desktop on a Mac."), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Fixed issues with project target date entry on Safari"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Keyboard help has been updated"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Issues are now longer selected when typing x with the command menu open"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Modal states are now visually more distinguishable")))
                        }
                    }]), t
                }(u.a.Component);
            p.isMDXComponent = !0
        },
        lphy: function (e, t, n) {
            (function (e, a) {
                var r;
                ! function (o) {
                    t && t.nodeType, e && e.nodeType;
                    var i = "object" == typeof a && a;
                    i.global !== i && i.window !== i && i.self;
                    var s, l = 2147483647,
                        c = 36,
                        u = 1,
                        m = 26,
                        p = 38,
                        d = 700,
                        f = 72,
                        h = 128,
                        g = "-",
                        v = /^xn--/,
                        y = /[^\x20-\x7E]/,
                        b = /[\x2E\u3002\uFF0E\uFF61]/g,
                        w = {
                            overflow: "Overflow: input needs wider integers to process",
                            "not-basic": "Illegal input >= 0x80 (not a basic code point)",
                            "invalid-input": "Invalid input"
                        },
                        x = c - u,
                        E = Math.floor,
                        k = String.fromCharCode;

                    function M(e) {
                        throw new RangeError(w[e])
                    }

                    function T(e, t) {
                        for (var n = e.length, a = []; n--;) a[n] = t(e[n]);
                        return a
                    }

                    function _(e, t) {
                        var n = e.split("@"),
                            a = "";
                        return n.length > 1 && (a = n[0] + "@", e = n[1]), a + T((e = e.replace(b, ".")).split("."), t).join(".")
                    }

                    function D(e) {
                        for (var t, n, a = [], r = 0, o = e.length; r < o;)(t = e.charCodeAt(r++)) >= 55296 && t <= 56319 && r < o ? 56320 == (64512 & (n = e.charCodeAt(r++))) ? a.push(((1023 & t) << 10) + (1023 & n) + 65536) : (a.push(t), r--) : a.push(t);
                        return a
                    }

                    function j(e) {
                        return T(e, function (e) {
                            var t = "";
                            return e > 65535 && (t += k((e -= 65536) >>> 10 & 1023 | 55296), e = 56320 | 1023 & e), t += k(e)
                        }).join("")
                    }

                    function X(e, t) {
                        return e + 22 + 75 * (e < 26) - ((0 != t) << 5)
                    }

                    function O(e, t, n) {
                        var a = 0;
                        for (e = n ? E(e / d) : e >> 1, e += E(e / t); e > x * m >> 1; a += c) e = E(e / x);
                        return E(a + (x + 1) * e / (e + p))
                    }

                    function C(e) {
                        var t, n, a, r, o, i, s, p, d, v, y, b = [],
                            w = e.length,
                            x = 0,
                            k = h,
                            T = f;
                        for ((n = e.lastIndexOf(g)) < 0 && (n = 0), a = 0; a < n; ++a) e.charCodeAt(a) >= 128 && M("not-basic"), b.push(e.charCodeAt(a));
                        for (r = n > 0 ? n + 1 : 0; r < w;) {
                            for (o = x, i = 1, s = c; r >= w && M("invalid-input"), ((p = (y = e.charCodeAt(r++)) - 48 < 10 ? y - 22 : y - 65 < 26 ? y - 65 : y - 97 < 26 ? y - 97 : c) >= c || p > E((l - x) / i)) && M("overflow"), x += p * i, !(p < (d = s <= T ? u : s >= T + m ? m : s - T)); s += c) i > E(l / (v = c - d)) && M("overflow"), i *= v;
                            T = O(x - o, t = b.length + 1, 0 == o), E(x / t) > l - k && M("overflow"), k += E(x / t), x %= t, b.splice(x++, 0, k)
                        }
                        return j(b)
                    }

                    function N(e) {
                        var t, n, a, r, o, i, s, p, d, v, y, b, w, x, T, _ = [];
                        for (b = (e = D(e)).length, t = h, n = 0, o = f, i = 0; i < b; ++i)(y = e[i]) < 128 && _.push(k(y));
                        for (a = r = _.length, r && _.push(g); a < b;) {
                            for (s = l, i = 0; i < b; ++i)(y = e[i]) >= t && y < s && (s = y);
                            for (s - t > E((l - n) / (w = a + 1)) && M("overflow"), n += (s - t) * w, t = s, i = 0; i < b; ++i)
                                if ((y = e[i]) < t && ++n > l && M("overflow"), y == t) {
                                    for (p = n, d = c; !(p < (v = d <= o ? u : d >= o + m ? m : d - o)); d += c) T = p - v, x = c - v, _.push(k(X(v + T % x, 0))), p = E(T / x);
                                    _.push(k(X(p, 0))), o = O(n, w, a == r), n = 0, ++a
                                }++ n, ++t
                        }
                        return _.join("")
                    }
                    s = {
                        version: "1.4.1",
                        ucs2: {
                            decode: D,
                            encode: j
                        },
                        decode: C,
                        encode: N,
                        toASCII: function (e) {
                            return _(e, function (e) {
                                return y.test(e) ? "xn--" + N(e) : e
                            })
                        },
                        toUnicode: function (e) {
                            return _(e, function (e) {
                                return v.test(e) ? C(e.slice(4).toLowerCase()) : e
                            })
                        }
                    }, void 0 === (r = function () {
                        return s
                    }.call(t, n, t, e)) || (e.exports = r)
                }()
            }).call(this, n("RoC8")(e), n("pCvA"))
        },
        lyqB: function (e, t, n) {
            var a = n("s9UB");
            e.exports = function (e, t) {
                var n = [];
                return a(e, !1, n.push, n, t), n
            }
        },
        mPQl: function (e, t, n) {
            n("+9rI")("Set")
        },
        mVXz: function (e, t, n) {
            var a = n("/6KZ");
            a(a.P + a.R, "Set", {
                toJSON: n("BGbK")("Set")
            })
        },
        mouY: function (e, t, n) {
            "use strict";
            n.d(t, "a", function () {
                return i
            });
            var a = n("0EY2"),
                r = n.n(a),
                o = n("mXGw"),
                i = function (e) {
                    var t = e.title || "Linear – The issue tracking tool you'll enjoy using",
                        n = e.description || "Linear lets you manage software development and track bugs. Linear's streamlined design is built for speed and efficiency — helping high performing teams accomplish great things.";
                    return o.createElement(r.a, null, o.createElement("title", null, t), o.createElement("meta", {
                        name: "viewport",
                        content: "width=device-width, initial-scale=1, shrink-to-fit=no"
                    }), o.createElement("meta", {
                        name: "theme-color",
                        content: "#1B1A16"
                    }), o.createElement("link", {
                        rel: "shortcut icon",
                        href: "/static/favicon.ico"
                    }), o.createElement("link", {
                        rel: "apple-touch-icon",
                        sizes: "180x180",
                        href: "/static/apple-touch-icon.png"
                    }), o.createElement("link", {
                        rel: "mask-icon",
                        href: "/static/linear-safari.svg",
                        color: "#5E6AD2;"
                    }), o.createElement("meta", {
                        charSet: "utf-8"
                    }), o.createElement("meta", {
                        name: "description",
                        content: n
                    }), o.createElement("meta", {
                        name: "twitter:card",
                        content: "summary"
                    }), o.createElement("meta", {
                        name: "twitter:title",
                        content: "Linear"
                    }), o.createElement("meta", {
                        name: "twitter:description",
                        content: n
                    }), o.createElement("meta", {
                        name: "twitter:site",
                        content: "@linear_app"
                    }), o.createElement("meta", {
                        property: "twitter:image",
                        content: "https://linear.app/static/metaImage3.png"
                    }), o.createElement("meta", {
                        name: "og:title",
                        content: "Linear"
                    }), o.createElement("meta", {
                        name: "og:description",
                        content: n
                    }), o.createElement("meta", {
                        name: "og:url",
                        content: "https://linear.app"
                    }), o.createElement("meta", {
                        name: "og:site_name",
                        content: "Linear"
                    }), o.createElement("meta", {
                        name: "og:type",
                        content: "website"
                    }), o.createElement("meta", {
                        property: "og:image",
                        content: "https://linear.app/static/metaImage3.png"
                    }))
                }
        },
        "nQ8/": function (e, t, n) {
            "use strict";
            n.r(t), n.d(t, "default", function () {
                return p
            });
            var a = n("2Fjn"),
                r = n("LkAs"),
                o = n("Moms"),
                i = n("bMj6"),
                s = n("hZod"),
                l = n("tEuJ"),
                c = n("mXGw"),
                u = n.n(c),
                m = n("dDab"),
                p = function (e) {
                    function t(e) {
                        var n;
                        return Object(r.default)(this, t), (n = Object(i.default)(this, Object(s.default)(t).call(this, e))).layout = null, n
                    }
                    return Object(l.default)(t, e), Object(o.default)(t, [{
                        key: "render",
                        value: function () {
                            var e = this.props,
                                t = e.components;
                            Object(a.a)(e, ["components"]);
                            return u.a.createElement(m.MDXTag, {
                                name: "wrapper",
                                components: t
                            }, u.a.createElement(m.MDXTag, {
                                name: "h2",
                                components: t
                            }, "New search"), u.a.createElement(m.MDXTag, {
                                name: "p",
                                components: t
                            }, "The search view has been redesigned and the search input has been moved to the sidebar. With this change, search is faster to use and you're also able to filter the results of your query the same way as you would filter other views."), u.a.createElement(m.MDXTag, {
                                name: "h2",
                                components: t
                            }, "Improved list multi-select"), u.a.createElement(m.MDXTag, {
                                name: "p",
                                components: t
                            }, "Linear has always had basic multi-selection of issues for applying shortcuts and actions to several issues at once. To make this easier and faster, we added more ways to select multiple issues and accidentally discovered even new UI patterns (", u.a.createElement("a", {
                                href: "https://twitter.com/jorilallo/status/1161290981192474627"
                            }, "tweet"), ")."), u.a.createElement(m.MDXTag, {
                                name: "p",
                                components: t
                            }, "There are now four ways to select issues in list view:"), u.a.createElement(m.MDXTag, {
                                name: "ul",
                                components: t
                            }, u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Select issues individually by clicking the checkbox or pressing ", u.a.createElement("kbd", null, "x")), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Select range by first selecting one issue and then selecting another one while holding down ", u.a.createElement("kbd", null, "Shift")), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Hold ", u.a.createElement("kbd", null, "Shift"), " and press ", u.a.createElement("kbd", null, "Arrow Up"), "/", u.a.createElement("kbd", null, "Arrow Down"), " to expand selection"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Hold ", u.a.createElement("kbd", null, "Shift"), " and move the mouse over other issues to select")), u.a.createElement(m.MDXTag, {
                                name: "h2",
                                components: t
                            }, "Other improvements and fixes"), u.a.createElement(m.MDXTag, {
                                name: "ul",
                                components: t
                            }, u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Improved code highlighting performance"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Improved page title updating"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "New actions for copying the URL to the active project and current view"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "New shortcut for assigning issue to a project (", u.a.createElement("kbd", null, "Shift"), u.a.createElement("kbd", null, "p"), ")"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "You are now redirected to the previous view after archiving an issue"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Creating new issues in the Active Issues view now sets their statuses to active"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, u.a.createElement(m.MDXTag, {
                                name: "em",
                                components: t,
                                parentName: "li"
                            }, "My Issues"), " view has a new welcome screen for new users"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Notifications are now grouped per issue in emails"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Fixed bug on keyboard actions after issue selection"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Minor visual updates to boards")))
                        }
                    }]), t
                }(u.a.Component);
            p.isMDXComponent = !0
        },
        nR9g: function (e, t, n) {
            "use strict";
            n.r(t), n.d(t, "default", function () {
                return p
            });
            var a = n("2Fjn"),
                r = n("LkAs"),
                o = n("Moms"),
                i = n("bMj6"),
                s = n("hZod"),
                l = n("tEuJ"),
                c = n("mXGw"),
                u = n.n(c),
                m = n("dDab"),
                p = function (e) {
                    function t(e) {
                        var n;
                        return Object(r.default)(this, t), (n = Object(i.default)(this, Object(s.default)(t).call(this, e))).layout = null, n
                    }
                    return Object(l.default)(t, e), Object(o.default)(t, [{
                        key: "render",
                        value: function () {
                            var e = this.props,
                                t = e.components;
                            Object(a.a)(e, ["components"]);
                            return u.a.createElement(m.MDXTag, {
                                name: "wrapper",
                                components: t
                            }, u.a.createElement(m.MDXTag, {
                                name: "h2",
                                components: t
                            }, "Cycles are here!"), u.a.createElement("div", {
                                style: {
                                    display: "flex",
                                    flex: 1,
                                    alignItems: "center",
                                    flexDirection: "column"
                                }
                            }, u.a.createElement("img", {
                                src: "/static/changelog/2019-07-19/cycles.png",
                                style: {
                                    width: "100%",
                                    margin: "20px 0",
                                    borderRadius: "12px"
                                }
                            })), u.a.createElement(m.MDXTag, {
                                name: "p",
                                components: t
                            }, "Cycles are no longer a developer preview feature and are available to every team. We've added a neat side-bar to the cycle view (", u.a.createElement("kbd", null, "Cmd"), u.a.createElement("kbd", null, "i"), ") that gives you a great overview of the cycle. It helps you figure out where you're at in the cycle and what the workload for each of your team-members looks like."), u.a.createElement(m.MDXTag, {
                                name: "p",
                                components: t
                            }, "You can enable cycles in your ", u.a.createElement("a", {
                                href: "/settings/teams"
                            }, "team settings")), u.a.createElement(m.MDXTag, {
                                name: "h2",
                                components: t
                            }, "Email notification improvements"), u.a.createElement(m.MDXTag, {
                                name: "p",
                                components: t
                            }, "Linear was a bit too eager to send emails on unread notifications. We've tweaked the delays to be based on the urgency of the notification."), u.a.createElement(m.MDXTag, {
                                name: "ul",
                                components: t
                            }, u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Unread urgent notifications are delivered via email after ", u.a.createElement("b", null, "30 seconds")), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Unread mention notifications are sent after ", u.a.createElement("b", null, "5 minutes")), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Unread issue assignment notifications are sent after ", u.a.createElement("b", null, "1 hour")), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Unread comment notifications on issues that you subscribe to are sent after ", u.a.createElement("b", null, "1 hour"))), u.a.createElement(m.MDXTag, {
                                name: "h2",
                                components: t
                            }, "Other improvements and fixes"), u.a.createElement(m.MDXTag, {
                                name: "ul",
                                components: t
                            }, u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Comments now have a submit button. If you still prefer to submit via the keyboard, ", u.a.createElement("kbd", null, "Cmd"), u.a.createElement("kbd", null, "Enter"), " is there to help you"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "The list group rows received a small + button that lets you quickly create a new issue for that workflow state"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "The action menu has new colors in dark mode"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "A toast is now displayed when saving team settings"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, 'Added "Remove from cycle" command'), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "The issue's back button now works the same as hitting ", u.a.createElement("kbd", null, "Esc")), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Cycles and projects are now automatically removed from issues that are moved to another team"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Fixes to some rendering issues with the cycle burn-up chart"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Fixes a problem where the action menu would not always show up when pressing ", u.a.createElement("kbd", null, "Cmd"), u.a.createElement("kbd", null, "k"))))
                        }
                    }]), t
                }(u.a.Component);
            p.isMDXComponent = !0
        },
        oICS: function (e, t, n) {
            var a = n("ADe/");
            e.exports = function (e, t, n, r) {
                try {
                    return r ? t(a(n)[0], n[1]) : t(n)
                } catch (i) {
                    var o = e.return;
                    throw void 0 !== o && a(o.call(e)), i
                }
            }
        },
        "oS/Z": function (e, t) {
            e.exports = function (e) {
                if (void 0 === e) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
                return e
            }
        },
        oiJE: function (e, t, n) {
            "use strict";
            var a, r, o, i, s = n("gtwY"),
                l = n("41F1"),
                c = n("8Xl/"),
                u = n("/1nD"),
                m = n("/6KZ"),
                p = n("fGh/"),
                d = n("HD3J"),
                f = n("LuVv"),
                h = n("s9UB"),
                g = n("PK7I"),
                v = n("cCv0").set,
                y = n("qg1s")(),
                b = n("WJTZ"),
                w = n("5tTa"),
                x = n("gDZL"),
                E = n("zafj"),
                k = l.TypeError,
                M = l.process,
                T = M && M.versions,
                _ = T && T.v8 || "",
                D = l.Promise,
                j = "process" == u(M),
                X = function () {},
                O = r = b.f,
                C = !! function () {
                    try {
                        var e = D.resolve(1),
                            t = (e.constructor = {})[n("0Sp3")("species")] = function (e) {
                                e(X, X)
                            };
                        return (j || "function" == typeof PromiseRejectionEvent) && e.then(X) instanceof t && 0 !== _.indexOf("6.6") && -1 === x.indexOf("Chrome/66")
                    } catch (a) {}
                }(),
                N = function (e) {
                    var t;
                    return !(!p(e) || "function" != typeof (t = e.then)) && t
                },
                S = function (e, t) {
                    if (!e._n) {
                        e._n = !0;
                        var n = e._c;
                        y(function () {
                            for (var a = e._v, r = 1 == e._s, o = 0, i = function (t) {
                                    var n, o, i, s = r ? t.ok : t.fail,
                                        l = t.resolve,
                                        c = t.reject,
                                        u = t.domain;
                                    try {
                                        s ? (r || (2 == e._h && P(e), e._h = 1), !0 === s ? n = a : (u && u.enter(), n = s(a), u && (u.exit(), i = !0)), n === t.promise ? c(k("Promise-chain cycle")) : (o = N(n)) ? o.call(n, l, c) : l(n)) : c(a)
                                    } catch (m) {
                                        u && !i && u.exit(), c(m)
                                    }
                                }; n.length > o;) i(n[o++]);
                            e._c = [], e._n = !1, t && !e._h && F(e)
                        })
                    }
                },
                F = function (e) {
                    v.call(l, function () {
                        var t, n, a, r = e._v,
                            o = A(e);
                        if (o && (t = w(function () {
                                j ? M.emit("unhandledRejection", r, e) : (n = l.onunhandledrejection) ? n({
                                    promise: e,
                                    reason: r
                                }) : (a = l.console) && a.error && a.error("Unhandled promise rejection", r)
                            }), e._h = j || A(e) ? 2 : 1), e._a = void 0, o && t.e) throw t.v
                    })
                },
                A = function (e) {
                    return 1 !== e._h && 0 === (e._a || e._c).length
                },
                P = function (e) {
                    v.call(l, function () {
                        var t;
                        j ? M.emit("rejectionHandled", e) : (t = l.onrejectionhandled) && t({
                            promise: e,
                            reason: e._v
                        })
                    })
                },
                I = function (e) {
                    var t = this;
                    t._d || (t._d = !0, (t = t._w || t)._v = e, t._s = 2, t._a || (t._a = t._c.slice()), S(t, !0))
                },
                R = function (e) {
                    var t, n = this;
                    if (!n._d) {
                        n._d = !0, n = n._w || n;
                        try {
                            if (n === e) throw k("Promise can't be resolved itself");
                            (t = N(e)) ? y(function () {
                                var a = {
                                    _w: n,
                                    _d: !1
                                };
                                try {
                                    t.call(e, c(R, a, 1), c(I, a, 1))
                                } catch (r) {
                                    I.call(a, r)
                                }
                            }): (n._v = e, n._s = 1, S(n, !1))
                        } catch (a) {
                            I.call({
                                _w: n,
                                _d: !1
                            }, a)
                        }
                    }
                };
            C || (D = function (e) {
                f(this, D, "Promise", "_h"), d(e), a.call(this);
                try {
                    e(c(R, this, 1), c(I, this, 1))
                } catch (t) {
                    I.call(this, t)
                }
            }, (a = function (e) {
                this._c = [], this._a = void 0, this._s = 0, this._d = !1, this._v = void 0, this._h = 0, this._n = !1
            }).prototype = n("IUx0")(D.prototype, {
                then: function (e, t) {
                    var n = O(g(this, D));
                    return n.ok = "function" != typeof e || e, n.fail = "function" == typeof t && t, n.domain = j ? M.domain : void 0, this._c.push(n), this._a && this._a.push(n), this._s && S(this, !1), n.promise
                },
                catch: function (e) {
                    return this.then(void 0, e)
                }
            }), o = function () {
                var e = new a;
                this.promise = e, this.resolve = c(R, e, 1), this.reject = c(I, e, 1)
            }, b.f = O = function (e) {
                return e === D || e === i ? new o(e) : r(e)
            }), m(m.G + m.W + m.F * !C, {
                Promise: D
            }), n("sWB5")(D, "Promise"), n("hXZv")("Promise"), i = n("TaGV").Promise, m(m.S + m.F * !C, "Promise", {
                reject: function (e) {
                    var t = O(this);
                    return (0, t.reject)(e), t.promise
                }
            }), m(m.S + m.F * (s || !C), "Promise", {
                resolve: function (e) {
                    return E(s && this === i ? D : this, e)
                }
            }), m(m.S + m.F * !(C && n("Clx3")(function (e) {
                D.all(e).catch(X)
            })), "Promise", {
                all: function (e) {
                    var t = this,
                        n = O(t),
                        a = n.resolve,
                        r = n.reject,
                        o = w(function () {
                            var n = [],
                                o = 0,
                                i = 1;
                            h(e, !1, function (e) {
                                var s = o++,
                                    l = !1;
                                n.push(void 0), i++, t.resolve(e).then(function (e) {
                                    l || (l = !0, n[s] = e, --i || a(n))
                                }, r)
                            }), --i || a(n)
                        });
                    return o.e && r(o.v), n.promise
                },
                race: function (e) {
                    var t = this,
                        n = O(t),
                        a = n.reject,
                        r = w(function () {
                            h(e, !1, function (e) {
                                t.resolve(e).then(n.resolve, a)
                            })
                        });
                    return r.e && a(r.v), n.promise
                }
            })
        },
        pCvA: function (e, t) {
            var n;
            n = function () {
                return this
            }();
            try {
                n = n || new Function("return this")()
            } catch (a) {
                "object" == typeof window && (n = window)
            }
            e.exports = n
        },
        pFlO: function (e, t, n) {
            "use strict";
            var a = n("/6KZ");
            e.exports = function (e) {
                a(a.S, e, {
                    of: function () {
                        for (var e = arguments.length, t = new Array(e); e--;) t[e] = arguments[e];
                        return new this(t)
                    }
                })
            }
        },
        pdCo: function (e, t, n) {
            "use strict";
            var a = n("LkAs"),
                r = n("Moms"),
                o = n("bMj6"),
                i = n("hZod"),
                s = n("tEuJ"),
                l = n("YIwv"),
                c = n.n(l),
                u = n("0EY2"),
                m = n.n(u),
                p = n("5dyF"),
                d = n.n(p),
                f = n("mXGw"),
                h = n("EUvJ"),
                g = n("PeVk"),
                v = f.createElement(c.a, {
                    id: "3689662634",
                    dynamic: [g.a.controlBase, g.a.labelTitle, g.a.bgBorder]
                }, ['@import url("https://static.linear.app/fonts/fonts.css");', "*{box-sizing:border-box;}", "html,body{width:100%;min-height:100vh;margin:0;padding:0;background-color:rgba(22,22,26,1);}",  'body,button,input,optgroup,select,textarea{font-family:"Inter UI","SF Pro Display",-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen,Ubuntu, Cantarell,"Open Sans","Helvetica Neue",sans-serif;}', "body{font-size:15px;line-height:1.5;-moz-osx-font-smoothing:grayscale;-webkit-font-smoothing:antialiased;text-rendering:optimizeLegibility;color:#dadfe7;}", "a,a svg path{color:".concat(g.a.controlBase, ";-webkit-text-decoration:none;text-decoration:none;cursor:pointer;color:#828fff;-webkit-transition:all 0.2s;transition:all 0.2s;}"), "a:hover{color:#ced2fa;}", "h1,h2,h3,h4,h5,h6{font-weight:500;line-height:1.25;margin-top:1.8em;margin:0 0 0.5em 0;color:".concat(g.a.labelTitle, ";}"), "h1{font-size:2.5em;font-weight:800;}", "h2{font-size:1.5em;font-weight:600;margin:2em 0 0 0;}", "h3{font-size:1.25em;}", "h4{font-size:1em;}", "h5{font-size:0.875em;}", "h6{font-size:0.75em;}", "i,em{font-style:italic;}", "p,dl,ol,ul,pre,blockquote{font-size:1.1em;margin-top:0.8em;margin-bottom:1.2em;color:#dadfe7;}", "strong{font-weight:500;}", "ul{list-style:none;}", "ol{padding:8px 18px 16px;margin:0;}", "li{margin-bottom:8px;list-style-type:disc;margin-left:20px;}", "ul kbd{padding:0 4px;margin:-4px 2px;}", "hr{border:0;height:0;border-top:1px solid ".concat(g.a.bgBorder, ";}"), "b,strong{font-weight:600;color:#fff;}", "kbd{border:1px solid rgba(255,255,255,0.5);border-radius:4px;padding:1px 4px;font-size:0.8em;font-weight:600;text-align:center;min-width:1.4em;display:inline-block;background-color:rgba(255,255,255,0.05);margin:-2px 2px;}", "kbd{padding:0 4px;margin:-4px 2px;}"]),
                y = f.createElement(c.a, {
                    id: "2279818120"
                }, ["html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline;}", "article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block;}", "body{line-height:1;}", "blockquote,q{quotes:none;}", 'blockquote:before,blockquote:after,q:before,q:after{content:"";content:none;}', "table{border-collapse:collapse;border-spacing:0;}"]),
                b = n("Rzy4"),
                w = n("mouY");
            n.d(t, "a", function () {
                return x
            });
            var x = function (e) {
                function t() {
                    return Object(a.default)(this, t), Object(o.default)(this, Object(i.default)(t).apply(this, arguments))
                }
                return Object(s.default)(t, e), Object(r.default)(t, [{
                    key: "render",
                    value: function () {
                        var e = this.props.children;
                        return f.createElement("div", {
                            className: "jsx-4171143236 " + c.a.dynamic([
                                ["2620514736", [g.a.labelMuted, g.a.labelMuted]]
                            ]) + " container"
                        }, f.createElement(w.a, null), f.createElement(m.a, null, f.createElement("script", {
                            async: !0,
                            src: "https://www.googletagmanager.com/gtag/js?id=UA-128896280-2",
                            className: "jsx-4171143236 " + c.a.dynamic([
                                ["2620514736", [g.a.labelMuted, g.a.labelMuted]]
                            ])
                        }), f.createElement("script", {
                            dangerouslySetInnerHTML: {
                                __html: "window.dataLayer = window.dataLayer || []; function gtag() {dataLayer.push(arguments);} gtag(\"js\", new Date()); gtag('config', 'UA-128896280-2');"
                            },
                            className: "jsx-4171143236 " + c.a.dynamic([
                                ["2620514736", [g.a.labelMuted, g.a.labelMuted]]
                            ])
                        })), y, v, f.createElement(b.a, null), f.createElement("div", {
                            className: "jsx-4171143236 " + c.a.dynamic([
                                ["2620514736", [g.a.labelMuted, g.a.labelMuted]]
                            ]) + " content"
                        }, e), f.createElement("footer", {
                            className: "jsx-4171143236 " + c.a.dynamic([
                                ["2620514736", [g.a.labelMuted, g.a.labelMuted]]
                            ])
                        }, f.createElement("div", {
                            className: "jsx-4171143236 " + c.a.dynamic([
                                ["2620514736", [g.a.labelMuted, g.a.labelMuted]]
                            ]) + " contentContainer"
                        }, f.createElement("div", {
                            className: "jsx-4171143236 " + c.a.dynamic([
                                ["2620514736", [g.a.labelMuted, g.a.labelMuted]]
                            ]) + " footerLogo"
                        }, f.createElement(h.a, {
                            style: {
                                width: "16px",
                                height: "16px",
                                fill: "#FFFFFF",
                                marginRight: "30px"
                            }
                        }), "Linear Orbit, Inc. — San Francisco, CA"), f.createElement("div", {
                            className: "jsx-4171143236 " + c.a.dynamic([
                                ["2620514736", [g.a.labelMuted, g.a.labelMuted]]
                            ]) + " stretch"
                        }), f.createElement("a", {
                            href: "https://twitter.com/linear_app",
                            className: "jsx-4171143236 " + c.a.dynamic([
                                ["2620514736", [g.a.labelMuted, g.a.labelMuted]]
                            ])
                        }, "Twitter"), f.createElement(d.a, {
                            href: "/download"
                        }, f.createElement("a", {
                            className: "jsx-4171143236 " + c.a.dynamic([
                                ["2620514736", [g.a.labelMuted, g.a.labelMuted]]
                            ])
                        }, "Download")), f.createElement(d.a, {
                            href: "/privacy"
                        }, f.createElement("a", {
                            className: "jsx-4171143236 " + c.a.dynamic([
                                ["2620514736", [g.a.labelMuted, g.a.labelMuted]]
                            ])
                        }, "Privacy")), f.createElement(d.a, {
                            href: "/terms"
                        }, f.createElement("a", {
                            className: "jsx-4171143236 " + c.a.dynamic([
                                ["2620514736", [g.a.labelMuted, g.a.labelMuted]]
                            ])
                        }, "Terms of Service")))), f.createElement(c.a, {
                            id: "4171143236"
                        }, [".contentContainer{padding:0 32px;max-width:1024px;width:100%;margin:0 auto;}", ".contentContainer.page{margin:120px auto;min-height:calc(100vh - 120px - 120px - 104px);}", "@-webkit-keyframes fadeZoom{0%{opacity:0;-webkit-transform:translate3d(0,-10px,0);-ms-transform:translate3d(0,-10px,0);transform:translate3d(0,-10px,0);}100%{opacity:1;-webkit-transform:none;-ms-transform:none;transform:none;}}", "@keyframes fadeZoom{0%{opacity:0;-webkit-transform:translate3d(0,-10px,0);-ms-transform:translate3d(0,-10px,0);transform:translate3d(0,-10px,0);}100%{opacity:1;-webkit-transform:none;-ms-transform:none;transform:none;}}", ".animated{-webkit-animation-duration:1.5s;animation-duration:1.5s;-webkit-transition-timing-function:ease-out;transition-timing-function:ease-out;-webkit-animation-fill-mode:both;animation-fill-mode:both;}", ".animated.zoom{-webkit-animation-name:fadeZoom;animation-name:fadeZoom;}", ".animated.t0{-webkit-animation-delay:0s;animation-delay:0s;}", ".animated.t1{-webkit-animation-delay:0.1s;animation-delay:0.1s;}", ".animated.t2{-webkit-animation-delay:0.2s;animation-delay:0.2s;}", ".animated.t3{-webkit-animation-delay:0.3s;animation-delay:0.3s;}", ".animated.t4{-webkit-animation-delay:0.4s;animation-delay:0.4s;}", ".animated.t5{-webkit-animation-delay:0.5s;animation-delay:0.5s;}", ".animated.t6{-webkit-animation-delay:0.8s;animation-delay:0.8s;}", "@media (max-width:700px){.contentContainer.page{min-height:calc(100vh - 120px - 120px - 194px);}}", "@media (max-width:600px){.contentContainer{padding:0 24px;}}"]), f.createElement(c.a, {
                            id: "2620514736",
                            dynamic: [g.a.labelMuted, g.a.labelMuted]
                        }, [".container.__jsx-style-dynamic-selector{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;width:100%;min-height:100vh;overflow-x:hidden;line-height:1.53em;}", ".content.__jsx-style-dynamic-selector{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex:1;-ms-flex:1;flex:1;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;}", "footer.__jsx-style-dynamic-selector{border-top:1px solid #292830;margin:0 8px;}", "footer.__jsx-style-dynamic-selector .contentContainer.__jsx-style-dynamic-selector{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-direction:row;-ms-flex-direction:row;flex-direction:row;-webkit-align-items:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;padding:40px 24px;font-size:14px;color:".concat(g.a.labelMuted, ";}"), ".footerLogo.__jsx-style-dynamic-selector{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-align-items:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;}", "footer.__jsx-style-dynamic-selector .stretch.__jsx-style-dynamic-selector{-webkit-box-flex:1;-webkit-flex-grow:1;-ms-flex-positive:1;flex-grow:1;}", "footer.__jsx-style-dynamic-selector a.__jsx-style-dynamic-selector{margin-left:32px;color:".concat(g.a.labelMuted, ";-webkit-transition:color 0.2s;transition:color 0.2s;}"), "footer.__jsx-style-dynamic-selector a.__jsx-style-dynamic-selector:hover{color:#fff;}", "@media (max-width:700px){footer.__jsx-style-dynamic-selector .contentContainer.__jsx-style-dynamic-selector{-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;-webkit-align-items:flex-start;-webkit-box-align:flex-start;-ms-flex-align:flex-start;align-items:flex-start;}footer.__jsx-style-dynamic-selector a.__jsx-style-dynamic-selector{margin-left:46px;margin-top:8px;}}"]))
                    }
                }]), t
            }(f.Component)
        },
        qQSc: function (e, t, n) {
            "use strict";
            var a = function (e) {
                return e && e.__esModule ? e : {
                    default: e
                }
            };
            Object.defineProperty(t, "__esModule", {
                value: !0
            });
            var r = a(n("mXGw")),
                o = n("eoaJ");

            function i() {
                var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {},
                    t = e.enabled,
                    n = void 0 !== t && t,
                    a = e.hybrid,
                    r = void 0 !== a && a,
                    o = e.hasQuery;
                return n && (!r || r && (void 0 !== o && o))
            }
            t.isAmp = i, t.useAmp = function () {
                return i(r.default.useContext(o.AmpModeContext))
            }, t.withAmp = function (e) {
                var t = (arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {}).hybrid,
                    n = void 0 !== t && t;

                function a() {
                    var t = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {},
                        a = r.default.useContext(o.AmpModeContext);
                    return a.enabled = !0, a.hybrid = n, r.default.createElement(e, t)
                }
                return a.__nextAmpOnly = !n, a.getInitialProps = e.getInitialProps, a
            }
        },
        qacR: function (e, t) {
            e.exports = function (e, t, n) {
                var a = void 0 === n;
                switch (t.length) {
                    case 0:
                        return a ? e() : e.call(n);
                    case 1:
                        return a ? e(t[0]) : e.call(n, t[0]);
                    case 2:
                        return a ? e(t[0], t[1]) : e.call(n, t[0], t[1]);
                    case 3:
                        return a ? e(t[0], t[1], t[2]) : e.call(n, t[0], t[1], t[2]);
                    case 4:
                        return a ? e(t[0], t[1], t[2], t[3]) : e.call(n, t[0], t[1], t[2], t[3])
                }
                return e.apply(n, t)
            }
        },
        qg1s: function (e, t, n) {
            var a = n("41F1"),
                r = n("cCv0").set,
                o = a.MutationObserver || a.WebKitMutationObserver,
                i = a.process,
                s = a.Promise,
                l = "process" == n("g2rQ")(i);
            e.exports = function () {
                var e, t, n, c = function () {
                    var a, r;
                    for (l && (a = i.domain) && a.exit(); e;) {
                        r = e.fn, e = e.next;
                        try {
                            r()
                        } catch (o) {
                            throw e ? n() : t = void 0, o
                        }
                    }
                    t = void 0, a && a.enter()
                };
                if (l) n = function () {
                    i.nextTick(c)
                };
                else if (!o || a.navigator && a.navigator.standalone)
                    if (s && s.resolve) {
                        var u = s.resolve(void 0);
                        n = function () {
                            u.then(c)
                        }
                    } else n = function () {
                        r.call(a, c)
                    };
                else {
                    var m = !0,
                        p = document.createTextNode("");
                    new o(c).observe(p, {
                        characterData: !0
                    }), n = function () {
                        p.data = m = !m
                    }
                }
                return function (a) {
                    var r = {
                        fn: a,
                        next: void 0
                    };
                    t && (t.next = r), e || (e = r, n()), t = r
                }
            }
        },
        rPaN: function (e, t, n) {
            "use strict";
            var a = n("HD3J"),
                r = n("fGh/"),
                o = n("qacR"),
                i = [].slice,
                s = {};
            e.exports = Function.bind || function (e) {
                var t = a(this),
                    n = i.call(arguments, 1),
                    l = function () {
                        var a = n.concat(i.call(arguments));
                        return this instanceof l ? function (e, t, n) {
                            if (!(t in s)) {
                                for (var a = [], r = 0; r < t; r++) a[r] = "a[" + r + "]";
                                s[t] = Function("F,a", "return new F(" + a.join(",") + ")")
                            }
                            return s[t](e, n)
                        }(t, a.length, a) : o(t, a, e)
                    };
                return r(t.prototype) && (l.prototype = t.prototype), l
            }
        },
        rgc3: function (e, t, n) {
            var a = n("/6KZ"),
                r = n("G+Zn"),
                o = n("HD3J"),
                i = n("ADe/"),
                s = n("fGh/"),
                l = n("/Vl9"),
                c = n("rPaN"),
                u = (n("41F1").Reflect || {}).construct,
                m = l(function () {
                    function e() {}
                    return !(u(function () {}, [], e) instanceof e)
                }),
                p = !l(function () {
                    u(function () {})
                });
            a(a.S + a.F * (m || p), "Reflect", {
                construct: function (e, t) {
                    o(e), i(t);
                    var n = arguments.length < 3 ? e : o(arguments[2]);
                    if (p && !m) return u(e, t, n);
                    if (e == n) {
                        switch (t.length) {
                            case 0:
                                return new e;
                            case 1:
                                return new e(t[0]);
                            case 2:
                                return new e(t[0], t[1]);
                            case 3:
                                return new e(t[0], t[1], t[2]);
                            case 4:
                                return new e(t[0], t[1], t[2], t[3])
                        }
                        var a = [null];
                        return a.push.apply(a, t), new(c.apply(e, a))
                    }
                    var l = n.prototype,
                        d = r(s(l) ? l : Object.prototype),
                        f = Function.apply.call(e, d, t);
                    return s(f) ? f : d
                }
            })
        },
        "s1G/": function (e, t, n) {
            "use strict";
            Object.defineProperty(t, "__esModule", {
                value: !0
            }), t.flush = function () {
                var e = u.cssRules();
                return u.flush(), e
            }, t.default = void 0;
            var a, r = n("mXGw");

            function o(e) {
                return (o = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (e) {
                    return typeof e
                } : function (e) {
                    return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : typeof e
                })(e)
            }

            function i(e, t) {
                for (var n = 0; n < t.length; n++) {
                    var a = t[n];
                    a.enumerable = a.enumerable || !1, a.configurable = !0, "value" in a && (a.writable = !0), Object.defineProperty(e, a.key, a)
                }
            }

            function s(e, t) {
                return !t || "object" !== o(t) && "function" != typeof t ? function (e) {
                    if (void 0 === e) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
                    return e
                }(e) : t
            }

            function l(e) {
                return (l = Object.setPrototypeOf ? Object.getPrototypeOf : function (e) {
                    return e.__proto__ || Object.getPrototypeOf(e)
                })(e)
            }

            function c(e, t) {
                return (c = Object.setPrototypeOf || function (e, t) {
                    return e.__proto__ = t, e
                })(e, t)
            }
            var u = new(((a = n("uVoP")) && a.__esModule ? a : {
                    default: a
                }).default),
                m = function (e) {
                    function t(e) {
                        var n;
                        return function (e, t) {
                            if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
                        }(this, t), (n = s(this, l(t).call(this, e))).prevProps = {}, n
                    }
                    var n, a, o;
                    return function (e, t) {
                        if ("function" != typeof t && null !== t) throw new TypeError("Super expression must either be null or a function");
                        e.prototype = Object.create(t && t.prototype, {
                            constructor: {
                                value: e,
                                writable: !0,
                                configurable: !0
                            }
                        }), t && c(e, t)
                    }(t, r.Component), n = t, o = [{
                        key: "dynamic",
                        value: function (e) {
                            return e.map(function (e) {
                                var t = e[0],
                                    n = e[1];
                                return u.computeId(t, n)
                            }).join(" ")
                        }
                    }], (a = [{
                        key: "shouldComponentUpdate",
                        value: function (e) {
                            return this.props.id !== e.id || String(this.props.dynamic) !== String(e.dynamic)
                        }
                    }, {
                        key: "componentWillUnmount",
                        value: function () {
                            u.remove(this.props)
                        }
                    }, {
                        key: "render",
                        value: function () {
                            return this.shouldComponentUpdate(this.prevProps) && (this.prevProps.id && u.remove(this.prevProps), u.add(this.props), this.prevProps = this.props), null
                        }
                    }]) && i(n.prototype, a), o && i(n, o), t
                }();
            t.default = m
        },
        s20r: function (e, t, n) {
            e.exports = n("+QYX")
        },
        s9UB: function (e, t, n) {
            var a = n("8Xl/"),
                r = n("oICS"),
                o = n("Ng5M"),
                i = n("ADe/"),
                s = n("gou2"),
                l = n("VJcA"),
                c = {},
                u = {};
            (t = e.exports = function (e, t, n, m, p) {
                var d, f, h, g, v = p ? function () {
                        return e
                    } : l(e),
                    y = a(n, m, t ? 2 : 1),
                    b = 0;
                if ("function" != typeof v) throw TypeError(e + " is not iterable!");
                if (o(v)) {
                    for (d = s(e.length); d > b; b++)
                        if ((g = t ? y(i(f = e[b])[0], f[1]) : y(e[b])) === c || g === u) return g
                } else
                    for (h = v.call(e); !(f = h.next()).done;)
                        if ((g = r(h, y, f.value, t)) === c || g === u) return g
            }).BREAK = c, t.RETURN = u
        },
        "so/P": function (e, t, n) {
            "use strict";
            var a = n("lphy"),
                r = n("wjI5");

            function o() {
                this.protocol = null, this.slashes = null, this.auth = null, this.host = null, this.port = null, this.hostname = null, this.hash = null, this.search = null, this.query = null, this.pathname = null, this.path = null, this.href = null
            }
            t.parse = b, t.resolve = function (e, t) {
                return b(e, !1, !0).resolve(t)
            }, t.resolveObject = function (e, t) {
                return e ? b(e, !1, !0).resolveObject(t) : t
            }, t.format = function (e) {
                r.isString(e) && (e = b(e));
                return e instanceof o ? e.format() : o.prototype.format.call(e)
            }, t.Url = o;
            var i = /^([a-z0-9.+-]+:)/i,
                s = /:[0-9]*$/,
                l = /^(\/\/?(?!\/)[^\?\s]*)(\?[^\s]*)?$/,
                c = ["{", "}", "|", "\\", "^", "`"].concat(["<", ">", '"', "`", " ", "\r", "\n", "\t"]),
                u = ["'"].concat(c),
                m = ["%", "/", "?", ";", "#"].concat(u),
                p = ["/", "?", "#"],
                d = /^[+a-z0-9A-Z_-]{0,63}$/,
                f = /^([+a-z0-9A-Z_-]{0,63})(.*)$/,
                h = {
                    javascript: !0,
                    "javascript:": !0
                },
                g = {
                    javascript: !0,
                    "javascript:": !0
                },
                v = {
                    http: !0,
                    https: !0,
                    ftp: !0,
                    gopher: !0,
                    file: !0,
                    "http:": !0,
                    "https:": !0,
                    "ftp:": !0,
                    "gopher:": !0,
                    "file:": !0
                },
                y = n("UKnr");

            function b(e, t, n) {
                if (e && r.isObject(e) && e instanceof o) return e;
                var a = new o;
                return a.parse(e, t, n), a
            }
            o.prototype.parse = function (e, t, n) {
                if (!r.isString(e)) throw new TypeError("Parameter 'url' must be a string, not " + typeof e);
                var o = e.indexOf("?"),
                    s = -1 !== o && o < e.indexOf("#") ? "?" : "#",
                    c = e.split(s);
                c[0] = c[0].replace(/\\/g, "/");
                var b = e = c.join(s);
                if (b = b.trim(), !n && 1 === e.split("#").length) {
                    var w = l.exec(b);
                    if (w) return this.path = b, this.href = b, this.pathname = w[1], w[2] ? (this.search = w[2], this.query = t ? y.parse(this.search.substr(1)) : this.search.substr(1)) : t && (this.search = "", this.query = {}), this
                }
                var x = i.exec(b);
                if (x) {
                    var E = (x = x[0]).toLowerCase();
                    this.protocol = E, b = b.substr(x.length)
                }
                if (n || x || b.match(/^\/\/[^@\/]+@[^@\/]+/)) {
                    var k = "//" === b.substr(0, 2);
                    !k || x && g[x] || (b = b.substr(2), this.slashes = !0)
                }
                if (!g[x] && (k || x && !v[x])) {
                    for (var M, T, _ = -1, D = 0; D < p.length; D++) {
                        -1 !== (j = b.indexOf(p[D])) && (-1 === _ || j < _) && (_ = j)
                    } - 1 !== (T = -1 === _ ? b.lastIndexOf("@") : b.lastIndexOf("@", _)) && (M = b.slice(0, T), b = b.slice(T + 1), this.auth = decodeURIComponent(M)), _ = -1;
                    for (D = 0; D < m.length; D++) {
                        var j; - 1 !== (j = b.indexOf(m[D])) && (-1 === _ || j < _) && (_ = j)
                    } - 1 === _ && (_ = b.length), this.host = b.slice(0, _), b = b.slice(_), this.parseHost(), this.hostname = this.hostname || "";
                    var X = "[" === this.hostname[0] && "]" === this.hostname[this.hostname.length - 1];
                    if (!X)
                        for (var O = this.hostname.split(/\./), C = (D = 0, O.length); D < C; D++) {
                            var N = O[D];
                            if (N && !N.match(d)) {
                                for (var S = "", F = 0, A = N.length; F < A; F++) N.charCodeAt(F) > 127 ? S += "x" : S += N[F];
                                if (!S.match(d)) {
                                    var P = O.slice(0, D),
                                        I = O.slice(D + 1),
                                        R = N.match(f);
                                    R && (P.push(R[1]), I.unshift(R[2])), I.length && (b = "/" + I.join(".") + b), this.hostname = P.join(".");
                                    break
                                }
                            }
                        }
                    this.hostname.length > 255 ? this.hostname = "" : this.hostname = this.hostname.toLowerCase(), X || (this.hostname = a.toASCII(this.hostname));
                    var L = this.port ? ":" + this.port : "",
                        B = this.hostname || "";
                    this.host = B + L, this.href += this.host, X && (this.hostname = this.hostname.substr(1, this.hostname.length - 2), "/" !== b[0] && (b = "/" + b))
                }
                if (!h[E])
                    for (D = 0, C = u.length; D < C; D++) {
                        var U = u[D];
                        if (-1 !== b.indexOf(U)) {
                            var z = encodeURIComponent(U);
                            z === U && (z = escape(U)), b = b.split(U).join(z)
                        }
                    }
                var G = b.indexOf("#"); - 1 !== G && (this.hash = b.substr(G), b = b.slice(0, G));
                var q = b.indexOf("?");
                if (-1 !== q ? (this.search = b.substr(q), this.query = b.substr(q + 1), t && (this.query = y.parse(this.query)), b = b.slice(0, q)) : t && (this.search = "", this.query = {}), b && (this.pathname = b), v[E] && this.hostname && !this.pathname && (this.pathname = "/"), this.pathname || this.search) {
                    L = this.pathname || "";
                    var V = this.search || "";
                    this.path = L + V
                }
                return this.href = this.format(), this
            }, o.prototype.format = function () {
                var e = this.auth || "";
                e && (e = (e = encodeURIComponent(e)).replace(/%3A/i, ":"), e += "@");
                var t = this.protocol || "",
                    n = this.pathname || "",
                    a = this.hash || "",
                    o = !1,
                    i = "";
                this.host ? o = e + this.host : this.hostname && (o = e + (-1 === this.hostname.indexOf(":") ? this.hostname : "[" + this.hostname + "]"), this.port && (o += ":" + this.port)), this.query && r.isObject(this.query) && Object.keys(this.query).length && (i = y.stringify(this.query));
                var s = this.search || i && "?" + i || "";
                return t && ":" !== t.substr(-1) && (t += ":"), this.slashes || (!t || v[t]) && !1 !== o ? (o = "//" + (o || ""), n && "/" !== n.charAt(0) && (n = "/" + n)) : o || (o = ""), a && "#" !== a.charAt(0) && (a = "#" + a), s && "?" !== s.charAt(0) && (s = "?" + s), t + o + (n = n.replace(/[?#]/g, function (e) {
                    return encodeURIComponent(e)
                })) + (s = s.replace("#", "%23")) + a
            }, o.prototype.resolve = function (e) {
                return this.resolveObject(b(e, !1, !0)).format()
            }, o.prototype.resolveObject = function (e) {
                if (r.isString(e)) {
                    var t = new o;
                    t.parse(e, !1, !0), e = t
                }
                for (var n = new o, a = Object.keys(this), i = 0; i < a.length; i++) {
                    var s = a[i];
                    n[s] = this[s]
                }
                if (n.hash = e.hash, "" === e.href) return n.href = n.format(), n;
                if (e.slashes && !e.protocol) {
                    for (var l = Object.keys(e), c = 0; c < l.length; c++) {
                        var u = l[c];
                        "protocol" !== u && (n[u] = e[u])
                    }
                    return v[n.protocol] && n.hostname && !n.pathname && (n.path = n.pathname = "/"), n.href = n.format(), n
                }
                if (e.protocol && e.protocol !== n.protocol) {
                    if (!v[e.protocol]) {
                        for (var m = Object.keys(e), p = 0; p < m.length; p++) {
                            var d = m[p];
                            n[d] = e[d]
                        }
                        return n.href = n.format(), n
                    }
                    if (n.protocol = e.protocol, e.host || g[e.protocol]) n.pathname = e.pathname;
                    else {
                        for (var f = (e.pathname || "").split("/"); f.length && !(e.host = f.shift()););
                        e.host || (e.host = ""), e.hostname || (e.hostname = ""), "" !== f[0] && f.unshift(""), f.length < 2 && f.unshift(""), n.pathname = f.join("/")
                    }
                    if (n.search = e.search, n.query = e.query, n.host = e.host || "", n.auth = e.auth, n.hostname = e.hostname || e.host, n.port = e.port, n.pathname || n.search) {
                        var h = n.pathname || "",
                            y = n.search || "";
                        n.path = h + y
                    }
                    return n.slashes = n.slashes || e.slashes, n.href = n.format(), n
                }
                var b = n.pathname && "/" === n.pathname.charAt(0),
                    w = e.host || e.pathname && "/" === e.pathname.charAt(0),
                    x = w || b || n.host && e.pathname,
                    E = x,
                    k = n.pathname && n.pathname.split("/") || [],
                    M = (f = e.pathname && e.pathname.split("/") || [], n.protocol && !v[n.protocol]);
                if (M && (n.hostname = "", n.port = null, n.host && ("" === k[0] ? k[0] = n.host : k.unshift(n.host)), n.host = "", e.protocol && (e.hostname = null, e.port = null, e.host && ("" === f[0] ? f[0] = e.host : f.unshift(e.host)), e.host = null), x = x && ("" === f[0] || "" === k[0])), w) n.host = e.host || "" === e.host ? e.host : n.host, n.hostname = e.hostname || "" === e.hostname ? e.hostname : n.hostname, n.search = e.search, n.query = e.query, k = f;
                else if (f.length) k || (k = []), k.pop(), k = k.concat(f), n.search = e.search, n.query = e.query;
                else if (!r.isNullOrUndefined(e.search)) {
                    if (M) n.hostname = n.host = k.shift(), (X = !!(n.host && n.host.indexOf("@") > 0) && n.host.split("@")) && (n.auth = X.shift(), n.host = n.hostname = X.shift());
                    return n.search = e.search, n.query = e.query, r.isNull(n.pathname) && r.isNull(n.search) || (n.path = (n.pathname ? n.pathname : "") + (n.search ? n.search : "")), n.href = n.format(), n
                }
                if (!k.length) return n.pathname = null, n.search ? n.path = "/" + n.search : n.path = null, n.href = n.format(), n;
                for (var T = k.slice(-1)[0], _ = (n.host || e.host || k.length > 1) && ("." === T || ".." === T) || "" === T, D = 0, j = k.length; j >= 0; j--) "." === (T = k[j]) ? k.splice(j, 1) : ".." === T ? (k.splice(j, 1), D++) : D && (k.splice(j, 1), D--);
                if (!x && !E)
                    for (; D--; D) k.unshift("..");
                !x || "" === k[0] || k[0] && "/" === k[0].charAt(0) || k.unshift(""), _ && "/" !== k.join("/").substr(-1) && k.push("");
                var X, O = "" === k[0] || k[0] && "/" === k[0].charAt(0);
                M && (n.hostname = n.host = O ? "" : k.length ? k.shift() : "", (X = !!(n.host && n.host.indexOf("@") > 0) && n.host.split("@")) && (n.auth = X.shift(), n.host = n.hostname = X.shift()));
                return (x = x || n.host && k.length) && !O && k.unshift(""), k.length ? n.pathname = k.join("/") : (n.pathname = null, n.path = null), r.isNull(n.pathname) && r.isNull(n.search) || (n.path = (n.pathname ? n.pathname : "") + (n.search ? n.search : "")), n.auth = e.auth || n.auth, n.slashes = n.slashes || e.slashes, n.href = n.format(), n
            }, o.prototype.parseHost = function () {
                var e = this.host,
                    t = s.exec(e);
                t && (":" !== (t = t[0]) && (this.port = t.substr(1)), e = e.substr(0, e.length - t.length)), e && (this.hostname = e)
            }
        },
        tbIA: function (e, t, n) {
            "use strict";
            var a = n("/Lgp"),
                r = n("phsM"),
                o = n("kBaS"),
                i = n("dCrc"),
                s = n("6wgB"),
                l = Object.assign;
            e.exports = !l || n("/Vl9")(function () {
                var e = {},
                    t = {},
                    n = Symbol(),
                    a = "abcdefghijklmnopqrst";
                return e[n] = 7, a.split("").forEach(function (e) {
                    t[e] = e
                }), 7 != l({}, e)[n] || Object.keys(l({}, t)).join("") != a
            }) ? function (e, t) {
                for (var n = i(e), l = arguments.length, c = 1, u = r.f, m = o.f; l > c;)
                    for (var p, d = s(arguments[c++]), f = u ? a(d).concat(u(d)) : a(d), h = f.length, g = 0; h > g;) m.call(d, p = f[g++]) && (n[p] = d[p]);
                return n
            } : l
        },
        "uMC/": function (e, t, n) {
            var a = n("ADe/"),
                r = n("VJcA");
            e.exports = n("TaGV").getIterator = function (e) {
                var t = r(e);
                if ("function" != typeof t) throw TypeError(e + " is not iterable!");
                return a(t.call(e))
            }
        },
        uVoP: function (e, t, n) {
            "use strict";
            Object.defineProperty(t, "__esModule", {
                value: !0
            }), t.default = void 0;
            var a = o(n("zcKR")),
                r = o(n("HrG8"));

            function o(e) {
                return e && e.__esModule ? e : {
                    default: e
                }
            }

            function i(e, t) {
                for (var n = 0; n < t.length; n++) {
                    var a = t[n];
                    a.enumerable = a.enumerable || !1, a.configurable = !0, "value" in a && (a.writable = !0), Object.defineProperty(e, a.key, a)
                }
            }
            var s = function () {
                function e() {
                    var t = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {},
                        n = t.styleSheet,
                        a = void 0 === n ? null : n,
                        o = t.optimizeForSpeed,
                        i = void 0 !== o && o,
                        s = t.isBrowser,
                        l = void 0 === s ? "undefined" != typeof window : s;
                    ! function (e, t) {
                        if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
                    }(this, e), this._sheet = a || new r.default({
                        name: "styled-jsx",
                        optimizeForSpeed: i
                    }), this._sheet.inject(), a && "boolean" == typeof i && (this._sheet.setOptimizeForSpeed(i), this._optimizeForSpeed = this._sheet.isOptimizeForSpeed()), this._isBrowser = l, this._fromServer = void 0, this._indices = {}, this._instancesCounts = {}, this.computeId = this.createComputeId(), this.computeSelector = this.createComputeSelector()
                }
                var t, n, o;
                return t = e, (n = [{
                    key: "add",
                    value: function (e) {
                        var t = this;
                        void 0 === this._optimizeForSpeed && (this._optimizeForSpeed = Array.isArray(e.children), this._sheet.setOptimizeForSpeed(this._optimizeForSpeed), this._optimizeForSpeed = this._sheet.isOptimizeForSpeed()), this._isBrowser && !this._fromServer && (this._fromServer = this.selectFromServer(), this._instancesCounts = Object.keys(this._fromServer).reduce(function (e, t) {
                            return e[t] = 0, e
                        }, {}));
                        var n = this.getIdAndRules(e),
                            a = n.styleId,
                            r = n.rules;
                        if (a in this._instancesCounts) this._instancesCounts[a] += 1;
                        else {
                            var o = r.map(function (e) {
                                return t._sheet.insertRule(e)
                            }).filter(function (e) {
                                return -1 !== e
                            });
                            this._indices[a] = o, this._instancesCounts[a] = 1
                        }
                    }
                }, {
                    key: "remove",
                    value: function (e) {
                        var t = this,
                            n = this.getIdAndRules(e).styleId;
                        if (function (e, t) {
                                if (!e) throw new Error("StyleSheetRegistry: ".concat(t, "."))
                            }(n in this._instancesCounts, "styleId: `".concat(n, "` not found")), this._instancesCounts[n] -= 1, this._instancesCounts[n] < 1) {
                            var a = this._fromServer && this._fromServer[n];
                            a ? (a.parentNode.removeChild(a), delete this._fromServer[n]) : (this._indices[n].forEach(function (e) {
                                return t._sheet.deleteRule(e)
                            }), delete this._indices[n]), delete this._instancesCounts[n]
                        }
                    }
                }, {
                    key: "update",
                    value: function (e, t) {
                        this.add(t), this.remove(e)
                    }
                }, {
                    key: "flush",
                    value: function () {
                        this._sheet.flush(), this._sheet.inject(), this._fromServer = void 0, this._indices = {}, this._instancesCounts = {}, this.computeId = this.createComputeId(), this.computeSelector = this.createComputeSelector()
                    }
                }, {
                    key: "cssRules",
                    value: function () {
                        var e = this,
                            t = this._fromServer ? Object.keys(this._fromServer).map(function (t) {
                                return [t, e._fromServer[t]]
                            }) : [],
                            n = this._sheet.cssRules();
                        return t.concat(Object.keys(this._indices).map(function (t) {
                            return [t, e._indices[t].map(function (e) {
                                return n[e].cssText
                            }).join(e._optimizeForSpeed ? "" : "\n")]
                        }).filter(function (e) {
                            return Boolean(e[1])
                        }))
                    }
                }, {
                    key: "createComputeId",
                    value: function () {
                        var e = {};
                        return function (t, n) {
                            if (!n) return "jsx-".concat(t);
                            var r = String(n),
                                o = t + r;
                            return e[o] || (e[o] = "jsx-".concat((0, a.default)("".concat(t, "-").concat(r)))), e[o]
                        }
                    }
                }, {
                    key: "createComputeSelector",
                    value: function () {
                        var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : /__jsx-style-dynamic-selector/g,
                            t = {};
                        return function (n, a) {
                            this._isBrowser || (a = a.replace(/\/style/gi, "\\/style"));
                            var r = n + a;
                            return t[r] || (t[r] = a.replace(e, n)), t[r]
                        }
                    }
                }, {
                    key: "getIdAndRules",
                    value: function (e) {
                        var t = this,
                            n = e.children,
                            a = e.dynamic,
                            r = e.id;
                        if (a) {
                            var o = this.computeId(r, a);
                            return {
                                styleId: o,
                                rules: Array.isArray(n) ? n.map(function (e) {
                                    return t.computeSelector(o, e)
                                }) : [this.computeSelector(o, n)]
                            }
                        }
                        return {
                            styleId: this.computeId(r),
                            rules: Array.isArray(n) ? n : [n]
                        }
                    }
                }, {
                    key: "selectFromServer",
                    value: function () {
                        return Array.prototype.slice.call(document.querySelectorAll('[id^="__jsx-"]')).reduce(function (e, t) {
                            return e[t.id.slice(2)] = t, e
                        }, {})
                    }
                }]) && i(t.prototype, n), o && i(t, o), e
            }();
            t.default = s
        },
        uYFp: function (e, t, n) {
            "use strict";
            var a = n("PL1w"),
                r = a(n("LkAs")),
                o = a(n("bMj6")),
                i = a(n("hZod")),
                s = a(n("YKN3")),
                l = a(n("Moms")),
                c = a(n("tEuJ")),
                u = a(n("0tNF")),
                m = a(n("OAWj"));
            Object.defineProperty(t, "__esModule", {
                value: !0
            });
            var p = n("mXGw"),
                d = "undefined" == typeof window;
            t.default = function () {
                var e, t = new m.default;

                function n(n) {
                    e = n.props.reduceComponentsToState((0, u.default)(t), n.props), n.props.handleStateChange && n.props.handleStateChange(e)
                }
                return function (a) {
                    function u(e) {
                        var a;
                        return (0, r.default)(this, u), a = (0, o.default)(this, (0, i.default)(u).call(this, e)), d && (t.add((0, s.default)(a)), n((0, s.default)(a))), a
                    }
                    return (0, c.default)(u, a), (0, l.default)(u, null, [{
                        key: "rewind",
                        value: function () {
                            var n = e;
                            return e = void 0, t.clear(), n
                        }
                    }]), (0, l.default)(u, [{
                        key: "componentDidMount",
                        value: function () {
                            t.add(this), n(this)
                        }
                    }, {
                        key: "componentDidUpdate",
                        value: function () {
                            n(this)
                        }
                    }, {
                        key: "componentWillUnmount",
                        value: function () {
                            t.delete(this), n(this)
                        }
                    }, {
                        key: "render",
                        value: function () {
                            return null
                        }
                    }]), u
                }(p.Component)
            }
        },
        vT5H: function (e, t, n) {
            "use strict";
            n.r(t), n.d(t, "default", function () {
                return p
            });
            var a = n("2Fjn"),
                r = n("LkAs"),
                o = n("Moms"),
                i = n("bMj6"),
                s = n("hZod"),
                l = n("tEuJ"),
                c = n("mXGw"),
                u = n.n(c),
                m = n("dDab"),
                p = function (e) {
                    function t(e) {
                        var n;
                        return Object(r.default)(this, t), (n = Object(i.default)(this, Object(s.default)(t).call(this, e))).layout = null, n
                    }
                    return Object(l.default)(t, e), Object(o.default)(t, [{
                        key: "render",
                        value: function () {
                            var e = this.props,
                                t = e.components;
                            Object(a.a)(e, ["components"]);
                            return u.a.createElement(m.MDXTag, {
                                name: "wrapper",
                                components: t
                            }, u.a.createElement(m.MDXTag, {
                                name: "h2",
                                components: t
                            }, "New sidebar design"), u.a.createElement(m.MDXTag, {
                                name: "p",
                                components: t
                            }, "We re-designed the sidebar to be more compact and scalable for upcoming features. It now shows more information and teams are sectioned better. Under each team, you can find their issues grouped into open and closed views. You'll also have the ability to see all issues in a list in addition to the existing board view."), u.a.createElement(m.MDXTag, {
                                name: "p",
                                components: t
                            }, "Together with the sidebar, we improved headers for better navigation and issue counts. We also added issue filters to all list views so it's easier to drill down issues based on different parameters."), u.a.createElement(m.MDXTag, {
                                name: "h2",
                                components: t
                            }, "Copy issue ID and git branch name"), u.a.createElement(m.MDXTag, {
                                name: "p",
                                components: t
                            }, "To make it faster to copy the issue ID or suggested git branch name, we added icons to the issue view sidebar for them. You'll still be able to get them through the action menu but this change should make copying easier for users who prefer to use a mouse."), u.a.createElement(m.MDXTag, {
                                name: "h2",
                                components: t
                            }, "Other improvements and fixes"), u.a.createElement(m.MDXTag, {
                                name: "ul",
                                components: t
                            }, u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Unified view components for different lists"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "App icon for iOS devices when saved to the home screen"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Improved Slack notifications"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "New view for editing issue states")))
                        }
                    }]), t
                }(u.a.Component);
            p.isMDXComponent = !0
        },
        wcNg: function (e, t) {
            ! function (t) {
                "use strict";
                var n, a = Object.prototype,
                    r = a.hasOwnProperty,
                    o = "function" == typeof Symbol ? Symbol : {},
                    i = o.iterator || "@@iterator",
                    s = o.asyncIterator || "@@asyncIterator",
                    l = o.toStringTag || "@@toStringTag",
                    c = "object" == typeof e,
                    u = t.regeneratorRuntime;
                if (u) c && (e.exports = u);
                else {
                    (u = t.regeneratorRuntime = c ? e.exports : {}).wrap = w;
                    var m = "suspendedStart",
                        p = "suspendedYield",
                        d = "executing",
                        f = "completed",
                        h = {},
                        g = {};
                    g[i] = function () {
                        return this
                    };
                    var v = Object.getPrototypeOf,
                        y = v && v(v(C([])));
                    y && y !== a && r.call(y, i) && (g = y);
                    var b = M.prototype = E.prototype = Object.create(g);
                    k.prototype = b.constructor = M, M.constructor = k, M[l] = k.displayName = "GeneratorFunction", u.isGeneratorFunction = function (e) {
                        var t = "function" == typeof e && e.constructor;
                        return !!t && (t === k || "GeneratorFunction" === (t.displayName || t.name))
                    }, u.mark = function (e) {
                        return Object.setPrototypeOf ? Object.setPrototypeOf(e, M) : (e.__proto__ = M, l in e || (e[l] = "GeneratorFunction")), e.prototype = Object.create(b), e
                    }, u.awrap = function (e) {
                        return {
                            __await: e
                        }
                    }, T(_.prototype), _.prototype[s] = function () {
                        return this
                    }, u.AsyncIterator = _, u.async = function (e, t, n, a) {
                        var r = new _(w(e, t, n, a));
                        return u.isGeneratorFunction(t) ? r : r.next().then(function (e) {
                            return e.done ? e.value : r.next()
                        })
                    }, T(b), b[l] = "Generator", b[i] = function () {
                        return this
                    }, b.toString = function () {
                        return "[object Generator]"
                    }, u.keys = function (e) {
                        var t = [];
                        for (var n in e) t.push(n);
                        return t.reverse(),
                            function n() {
                                for (; t.length;) {
                                    var a = t.pop();
                                    if (a in e) return n.value = a, n.done = !1, n
                                }
                                return n.done = !0, n
                            }
                    }, u.values = C, O.prototype = {
                        constructor: O,
                        reset: function (e) {
                            if (this.prev = 0, this.next = 0, this.sent = this._sent = n, this.done = !1, this.delegate = null, this.method = "next", this.arg = n, this.tryEntries.forEach(X), !e)
                                for (var t in this) "t" === t.charAt(0) && r.call(this, t) && !isNaN(+t.slice(1)) && (this[t] = n)
                        },
                        stop: function () {
                            this.done = !0;
                            var e = this.tryEntries[0].completion;
                            if ("throw" === e.type) throw e.arg;
                            return this.rval
                        },
                        dispatchException: function (e) {
                            if (this.done) throw e;
                            var t = this;

                            function a(a, r) {
                                return s.type = "throw", s.arg = e, t.next = a, r && (t.method = "next", t.arg = n), !!r
                            }
                            for (var o = this.tryEntries.length - 1; o >= 0; --o) {
                                var i = this.tryEntries[o],
                                    s = i.completion;
                                if ("root" === i.tryLoc) return a("end");
                                if (i.tryLoc <= this.prev) {
                                    var l = r.call(i, "catchLoc"),
                                        c = r.call(i, "finallyLoc");
                                    if (l && c) {
                                        if (this.prev < i.catchLoc) return a(i.catchLoc, !0);
                                        if (this.prev < i.finallyLoc) return a(i.finallyLoc)
                                    } else if (l) {
                                        if (this.prev < i.catchLoc) return a(i.catchLoc, !0)
                                    } else {
                                        if (!c) throw new Error("try statement without catch or finally");
                                        if (this.prev < i.finallyLoc) return a(i.finallyLoc)
                                    }
                                }
                            }
                        },
                        abrupt: function (e, t) {
                            for (var n = this.tryEntries.length - 1; n >= 0; --n) {
                                var a = this.tryEntries[n];
                                if (a.tryLoc <= this.prev && r.call(a, "finallyLoc") && this.prev < a.finallyLoc) {
                                    var o = a;
                                    break
                                }
                            }
                            o && ("break" === e || "continue" === e) && o.tryLoc <= t && t <= o.finallyLoc && (o = null);
                            var i = o ? o.completion : {};
                            return i.type = e, i.arg = t, o ? (this.method = "next", this.next = o.finallyLoc, h) : this.complete(i)
                        },
                        complete: function (e, t) {
                            if ("throw" === e.type) throw e.arg;
                            return "break" === e.type || "continue" === e.type ? this.next = e.arg : "return" === e.type ? (this.rval = this.arg = e.arg, this.method = "return", this.next = "end") : "normal" === e.type && t && (this.next = t), h
                        },
                        finish: function (e) {
                            for (var t = this.tryEntries.length - 1; t >= 0; --t) {
                                var n = this.tryEntries[t];
                                if (n.finallyLoc === e) return this.complete(n.completion, n.afterLoc), X(n), h
                            }
                        },
                        catch: function (e) {
                            for (var t = this.tryEntries.length - 1; t >= 0; --t) {
                                var n = this.tryEntries[t];
                                if (n.tryLoc === e) {
                                    var a = n.completion;
                                    if ("throw" === a.type) {
                                        var r = a.arg;
                                        X(n)
                                    }
                                    return r
                                }
                            }
                            throw new Error("illegal catch attempt")
                        },
                        delegateYield: function (e, t, a) {
                            return this.delegate = {
                                iterator: C(e),
                                resultName: t,
                                nextLoc: a
                            }, "next" === this.method && (this.arg = n), h
                        }
                    }
                }

                function w(e, t, n, a) {
                    var r = t && t.prototype instanceof E ? t : E,
                        o = Object.create(r.prototype),
                        i = new O(a || []);
                    return o._invoke = function (e, t, n) {
                        var a = m;
                        return function (r, o) {
                            if (a === d) throw new Error("Generator is already running");
                            if (a === f) {
                                if ("throw" === r) throw o;
                                return N()
                            }
                            for (n.method = r, n.arg = o;;) {
                                var i = n.delegate;
                                if (i) {
                                    var s = D(i, n);
                                    if (s) {
                                        if (s === h) continue;
                                        return s
                                    }
                                }
                                if ("next" === n.method) n.sent = n._sent = n.arg;
                                else if ("throw" === n.method) {
                                    if (a === m) throw a = f, n.arg;
                                    n.dispatchException(n.arg)
                                } else "return" === n.method && n.abrupt("return", n.arg);
                                a = d;
                                var l = x(e, t, n);
                                if ("normal" === l.type) {
                                    if (a = n.done ? f : p, l.arg === h) continue;
                                    return {
                                        value: l.arg,
                                        done: n.done
                                    }
                                }
                                "throw" === l.type && (a = f, n.method = "throw", n.arg = l.arg)
                            }
                        }
                    }(e, n, i), o
                }

                function x(e, t, n) {
                    try {
                        return {
                            type: "normal",
                            arg: e.call(t, n)
                        }
                    } catch (a) {
                        return {
                            type: "throw",
                            arg: a
                        }
                    }
                }

                function E() {}

                function k() {}

                function M() {}

                function T(e) {
                    ["next", "throw", "return"].forEach(function (t) {
                        e[t] = function (e) {
                            return this._invoke(t, e)
                        }
                    })
                }

                function _(e) {
                    var t;
                    this._invoke = function (n, a) {
                        function o() {
                            return new Promise(function (t, o) {
                                ! function t(n, a, o, i) {
                                    var s = x(e[n], e, a);
                                    if ("throw" !== s.type) {
                                        var l = s.arg,
                                            c = l.value;
                                        return c && "object" == typeof c && r.call(c, "__await") ? Promise.resolve(c.__await).then(function (e) {
                                            t("next", e, o, i)
                                        }, function (e) {
                                            t("throw", e, o, i)
                                        }) : Promise.resolve(c).then(function (e) {
                                            l.value = e, o(l)
                                        }, function (e) {
                                            return t("throw", e, o, i)
                                        })
                                    }
                                    i(s.arg)
                                }(n, a, t, o)
                            })
                        }
                        return t = t ? t.then(o, o) : o()
                    }
                }

                function D(e, t) {
                    var a = e.iterator[t.method];
                    if (a === n) {
                        if (t.delegate = null, "throw" === t.method) {
                            if (e.iterator.return && (t.method = "return", t.arg = n, D(e, t), "throw" === t.method)) return h;
                            t.method = "throw", t.arg = new TypeError("The iterator does not provide a 'throw' method")
                        }
                        return h
                    }
                    var r = x(a, e.iterator, t.arg);
                    if ("throw" === r.type) return t.method = "throw", t.arg = r.arg, t.delegate = null, h;
                    var o = r.arg;
                    return o ? o.done ? (t[e.resultName] = o.value, t.next = e.nextLoc, "return" !== t.method && (t.method = "next", t.arg = n), t.delegate = null, h) : o : (t.method = "throw", t.arg = new TypeError("iterator result is not an object"), t.delegate = null, h)
                }

                function j(e) {
                    var t = {
                        tryLoc: e[0]
                    };
                    1 in e && (t.catchLoc = e[1]), 2 in e && (t.finallyLoc = e[2], t.afterLoc = e[3]), this.tryEntries.push(t)
                }

                function X(e) {
                    var t = e.completion || {};
                    t.type = "normal", delete t.arg, e.completion = t
                }

                function O(e) {
                    this.tryEntries = [{
                        tryLoc: "root"
                    }], e.forEach(j, this), this.reset(!0)
                }

                function C(e) {
                    if (e) {
                        var t = e[i];
                        if (t) return t.call(e);
                        if ("function" == typeof e.next) return e;
                        if (!isNaN(e.length)) {
                            var a = -1,
                                o = function t() {
                                    for (; ++a < e.length;)
                                        if (r.call(e, a)) return t.value = e[a], t.done = !1, t;
                                    return t.value = n, t.done = !0, t
                                };
                            return o.next = o
                        }
                    }
                    return {
                        next: N
                    }
                }

                function N() {
                    return {
                        value: n,
                        done: !0
                    }
                }
            }(function () {
                return this || "object" == typeof self && self
            }() || Function("return this")())
        },
        wjI5: function (e, t, n) {
            "use strict";
            e.exports = {
                isString: function (e) {
                    return "string" == typeof e
                },
                isObject: function (e) {
                    return "object" == typeof e && null !== e
                },
                isNull: function (e) {
                    return null === e
                },
                isNullOrUndefined: function (e) {
                    return null == e
                }
            }
        },
        xGJO: function (e, t, n) {
            n("rgc3"), e.exports = n("TaGV").Reflect.construct
        },
        z3IF: function (e, t, n) {
            "use strict";
            n.d(t, "a", function () {
                return o
            });
            var a = n("U8Yc"),
                r = n.n(a);

            function o() {
                return (o = r.a || function (e) {
                    for (var t = 1; t < arguments.length; t++) {
                        var n = arguments[t];
                        for (var a in n) Object.prototype.hasOwnProperty.call(n, a) && (e[a] = n[a])
                    }
                    return e
                }).apply(this, arguments)
            }
        },
        zDFP: function (e, t, n) {
            "use strict";
            n.r(t), n.d(t, "default", function () {
                return p
            });
            var a = n("2Fjn"),
                r = n("LkAs"),
                o = n("Moms"),
                i = n("bMj6"),
                s = n("hZod"),
                l = n("tEuJ"),
                c = n("mXGw"),
                u = n.n(c),
                m = n("dDab"),
                p = function (e) {
                    function t(e) {
                        var n;
                        return Object(r.default)(this, t), (n = Object(i.default)(this, Object(s.default)(t).call(this, e))).layout = null, n
                    }
                    return Object(l.default)(t, e), Object(o.default)(t, [{
                        key: "render",
                        value: function () {
                            var e = this.props,
                                t = e.components;
                            Object(a.a)(e, ["components"]);
                            return u.a.createElement(m.MDXTag, {
                                name: "wrapper",
                                components: t
                            }, u.a.createElement(m.MDXTag, {
                                name: "h2",
                                components: t
                            }, "Backlog and Active Issues"), u.a.createElement("div", {
                                style: {
                                    display: "flex",
                                    flex: 1,
                                    alignItems: "center",
                                    flexDirection: "column"
                                }
                            }, u.a.createElement("img", {
                                src: "/static/changelog/2019-06-28/backlog.png",
                                style: {
                                    width: "100%",
                                    margin: "20px 0",
                                    borderRadius: "12px"
                                }
                            })), u.a.createElement(m.MDXTag, {
                                name: "p",
                                components: t
                            }, "Managing a large number of issues can be challenging if you keep them in one place. We added Backlog as the place for new issues and ideas. These are issues that have yet to be prioritized and put on your team's roadmap. Backlog will show up in the sidebar along with other issue categories. By default you'll have one backlog workflow status but you can add more of them in team settings."), u.a.createElement(m.MDXTag, {
                                name: "p",
                                components: t
                            }, "When your team is ready to work on issues in Backlog, move them into Active Issues. To make easy to move issues between Backlog and Active Issues, two new shortcuts are available:"), u.a.createElement(m.MDXTag, {
                                name: "ul",
                                components: t
                            }, u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Move to Active Issues: ", u.a.createElement("kbd", null, "Cmd"), u.a.createElement("kbd", null, "Shift"), u.a.createElement("kbd", null, "a")), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Move to Backlog : ", u.a.createElement("kbd", null, "Cmd"), u.a.createElement("kbd", null, "Shift"), u.a.createElement("kbd", null, "b"))), u.a.createElement(m.MDXTag, {
                                name: "h2",
                                components: t
                            }, "Select All & bulk actions toolbar"), u.a.createElement("div", {
                                style: {
                                    display: "flex",
                                    flex: 1,
                                    alignItems: "center",
                                    flexDirection: "column"
                                }
                            }, u.a.createElement("img", {
                                src: "/static/changelog/2019-06-28/selectall.gif",
                                style: {
                                    width: "100%",
                                    margin: "20px 0",
                                    borderRadius: "12px"
                                }
                            })), u.a.createElement(m.MDXTag, {
                                name: "p",
                                components: t
                            }, 'We added "Select All" check-boxes for each issue group which will select all issues in the group. You can (de)select individual issues by un-checking or by pressing ', u.a.createElement(m.MDXTag, {
                                name: "inlineCode",
                                components: t,
                                parentName: "p"
                            }, "x"), " shortcut."), u.a.createElement(m.MDXTag, {
                                name: "p",
                                components: t
                            }, "After selecting a group of issues, a new bulk action toolbar will appear at the bottom of the screen to make it easier to perform common actions."), u.a.createElement(m.MDXTag, {
                                name: "p",
                                components: t
                            }, "Pro tip: Did you know you can also select ranges with ", u.a.createElement("kbd", null, "Shift"), " + click?"), u.a.createElement(m.MDXTag, {
                                name: "h2",
                                components: t
                            }, "Other improvements and fixes"), u.a.createElement(m.MDXTag, {
                                name: "ul",
                                components: t
                            }, u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, 'Changed "Copy git branch" shortcut into ', u.a.createElement("kbd", null, "Cmd"), u.a.createElement("kbd", null, "Shift"), u.a.createElement("kbd", null, "."), " to support Windows"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Fixed archiving issue workflow states"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Fixed opening pull requests in the desktop application"), u.a.createElement(m.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "Improved search for certain actions in the command menu")))
                        }
                    }]), t
                }(u.a.Component);
            p.isMDXComponent = !0
        },
        zafj: function (e, t, n) {
            var a = n("ADe/"),
                r = n("fGh/"),
                o = n("WJTZ");
            e.exports = function (e, t) {
                if (a(e), r(t) && t.constructor === e) return t;
                var n = o.f(e);
                return (0, n.resolve)(t), n.promise
            }
        },
        zcKR: function (e, t, n) {
            "use strict";
            e.exports = function (e) {
                for (var t = 5381, n = e.length; n;) t = 33 * t ^ e.charCodeAt(--n);
                return t >>> 0
            }
        }
    },
    [
        ["Ddho", "5d41", "9da1"]
    ]
]);