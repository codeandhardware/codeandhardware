(window.webpackJsonp = window.webpackJsonp || []).push([
    ["80f5"], {
        "+9rI": function (e, t, n) {
            "use strict";
            var r = n("/6KZ"),
                o = n("HD3J"),
                a = n("8Xl/"),
                i = n("s9UB");
            e.exports = function (e) {
                r(r.S, e, {
                    from: function (e) {
                        var t, n, r, s, c = arguments[1];
                        return o(this), (t = void 0 !== c) && o(c), null == e ? new this : (n = [], t ? (r = 0, s = a(c, arguments[2], 2), i(e, !1, function (e) {
                            n.push(s(e, r++))
                        })) : i(e, !1, n.push, n), new this(n))
                    }
                })
            }
        },
        "+QYX": function (e, t, n) {
            n("1lGj"), e.exports = n("TaGV").Array.isArray
        },
        "/1nD": function (e, t, n) {
            var r = n("g2rQ"),
                o = n("0Sp3")("toStringTag"),
                a = "Arguments" == r(function () {
                    return arguments
                }());
            e.exports = function (e) {
                var t, n, i;
                return void 0 === e ? "Undefined" : null === e ? "Null" : "string" == typeof (n = function (e, t) {
                    try {
                        return e[t]
                    } catch (n) {}
                }(t = Object(e), o)) ? n : a ? r(t) : "Object" == (i = r(t)) && "function" == typeof t.callee ? "Arguments" : i
            }
        },
        "/3ze": function (e, t, n) {
            "use strict";
            var r = n("PL1w"),
                o = r(n("U8Yc")),
                a = r(n("KBEF")),
                i = r(n("J/q3")),
                s = r(n("3esu")),
                c = r(n("8m4E")),
                u = r(n("Od8a")),
                l = function (e) {
                    return e && e.__esModule ? e : {
                        default: e
                    }
                };
            Object.defineProperty(t, "__esModule", {
                value: !0
            });
            var f = l(n("mXGw")),
                p = l(n("W0B4"));
            t.default = function (e) {
                var t = function (t) {
                    function n() {
                        return (0, a.default)(this, n), (0, s.default)(this, (0, c.default)(n).apply(this, arguments))
                    }
                    return (0, u.default)(n, t), (0, i.default)(n, [{
                        key: "render",
                        value: function () {
                            return f.default.createElement(e, (0, o.default)({
                                router: this.context.router
                            }, this.props))
                        }
                    }]), n
                }(f.default.Component);
                return t.contextTypes = {
                    router: p.default.object
                }, t.getInitialProps = e.getInitialProps, t
            }
        },
        "/YX7": function (e, t, n) {
            var r = n("SfGT");
            e.exports = function (e, t) {
                return new(r(e))(t)
            }
        },
        "0EY2": function (e, t, n) {
            "use strict";
            var r = n("PL1w")(n("OAWj")),
                o = function (e) {
                    return e && e.__esModule ? e : {
                        default: e
                    }
                };
            Object.defineProperty(t, "__esModule", {
                value: !0
            });
            var a = o(n("mXGw")),
                i = o(n("uYFp")),
                s = n("eoaJ"),
                c = n("KBoY"),
                u = n("qQSc");

            function l() {
                var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : "next-head",
                    t = arguments.length > 1 && void 0 !== arguments[1] && arguments[1],
                    n = [a.default.createElement("meta", {
                        key: "charSet",
                        charSet: "utf-8",
                        className: e
                    })];
                return t || n.push(a.default.createElement("meta", {
                    key: "viewport",
                    name: "viewport",
                    content: "width=device-width,minimum-scale=1,initial-scale=1",
                    className: e
                })), n
            }

            function f(e, t) {
                return "string" == typeof t || "number" == typeof t ? e : t.type === a.default.Fragment ? e.concat(a.default.Children.toArray(t.props.children).reduce(function (e, t) {
                    return "string" == typeof t || "number" == typeof t ? e : e.concat(t)
                }, [])) : e.concat(t)
            }
            t.defaultHead = l;
            var p = ["name", "httpEquiv", "charSet", "viewport", "itemProp"];

            function h(e, t) {
                return e.reduce(function (e, t) {
                    var n = a.default.Children.toArray(t.props.children);
                    return e.concat(n)
                }, []).reduce(f, []).reverse().concat(l("", t.isAmp)).filter((n = new r.default, o = new r.default, i = new r.default, s = {}, function (e) {
                    if (e.key && "number" != typeof e.key && 0 === e.key.indexOf(".$")) return !n.has(e.key) && (n.add(e.key), !0);
                    switch (e.type) {
                        case "title":
                        case "base":
                            if (o.has(e.type)) return !1;
                            o.add(e.type);
                            break;
                        case "meta":
                            for (var t = 0, a = p.length; t < a; t++) {
                                var c = p[t];
                                if (e.props.hasOwnProperty(c))
                                    if ("charSet" === c || "viewport" === c) {
                                        if (i.has(c)) return !1;
                                        i.add(c)
                                    } else {
                                        var u = e.props[c],
                                            l = s[c] || new r.default;
                                        if (l.has(u)) return !1;
                                        l.add(u), s[c] = l
                                    }
                            }
                    }
                    return !0
                })).reverse().map(function (e, t) {
                    var n = (e.props && e.props.className ? e.props.className + " " : "") + "next-head",
                        r = e.key || t;
                    return a.default.cloneElement(e, {
                        key: r,
                        className: n
                    })
                });
                var n, o, i, s
            }
            var d = i.default();

            function m(e) {
                var t = e.children;
                return a.default.createElement(s.AmpModeContext.Consumer, null, function (e) {
                    return a.default.createElement(c.HeadManagerContext.Consumer, null, function (n) {
                        return a.default.createElement(d, {
                            reduceComponentsToState: h,
                            handleStateChange: n,
                            isAmp: u.isAmp(e)
                        }, t)
                    })
                })
            }
            m.rewind = d.rewind, t.default = m
        },
        "0XBy": function (e, t, n) {
            var r = n("/1nD"),
                o = n("0Sp3")("iterator"),
                a = n("N9zW");
            e.exports = n("TaGV").isIterable = function (e) {
                var t = Object(e);
                return void 0 !== t[o] || "@@iterator" in t || a.hasOwnProperty(r(t))
            }
        },
        "0tNF": function (e, t, n) {
            "use strict";
            n.r(t);
            var r = n("s20r"),
                o = n.n(r);
            var a = n("8ET1"),
                i = n.n(a),
                s = n("7X5e"),
                c = n.n(s);

            function u(e) {
                return function (e) {
                    if (o()(e)) {
                        for (var t = 0, n = new Array(e.length); t < e.length; t++) n[t] = e[t];
                        return n
                    }
                }(e) || function (e) {
                    if (c()(Object(e)) || "[object Arguments]" === Object.prototype.toString.call(e)) return i()(e)
                }(e) || function () {
                    throw new TypeError("Invalid attempt to spread non-iterable instance")
                }()
            }
            n.d(t, "default", function () {
                return u
            })
        },
        "1lGj": function (e, t, n) {
            var r = n("/6KZ");
            r(r.S, "Array", {
                isArray: n("Jh4J")
            })
        },
        "2CfY": function (e, t, n) {
            e.exports = function (e) {
                var t = {};

                function n(r) {
                    if (t[r]) return t[r].exports;
                    var o = t[r] = {
                        i: r,
                        l: !1,
                        exports: {}
                    };
                    return e[r].call(o.exports, o, o.exports, n), o.l = !0, o.exports
                }
                return n.m = e, n.c = t, n.d = function (e, t, r) {
                    n.o(e, t) || Object.defineProperty(e, t, {
                        enumerable: !0,
                        get: r
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
                    var r = Object.create(null);
                    if (n.r(r), Object.defineProperty(r, "default", {
                            enumerable: !0,
                            value: e
                        }), 2 & t && "string" != typeof e)
                        for (var o in e) n.d(r, o, function (t) {
                            return e[t]
                        }.bind(null, o));
                    return r
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
                    var r, o, a;
                    o = [t, n(89)], void 0 === (a = "function" == typeof (r = function (n, r) {
                        "use strict";

                        function o(e, t) {
                            for (var n = 0; n < t.length; n++) {
                                var r = t[n];
                                r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(e, r.key, r)
                            }
                        }
                        Object.defineProperty(n, "__esModule", {
                            value: !0
                        }), n.default = void 0;
                        var a = function () {
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
                                    var r = arguments.length > 2 && void 0 !== arguments[2] && arguments[2],
                                        o = e.getVersionPrecision(t),
                                        a = e.getVersionPrecision(n),
                                        i = Math.max(o, a),
                                        s = 0,
                                        c = e.map([t, n], function (t) {
                                            var n = i - e.getVersionPrecision(t),
                                                r = t + new Array(n + 1).join(".0");
                                            return e.map(r.split("."), function (e) {
                                                return new Array(20 - e.length).join("0") + e
                                            }).reverse()
                                        });
                                    for (r && (s = i - Math.min(o, a)), i -= 1; i >= s;) {
                                        if (c[0][i] > c[1][i]) return 1;
                                        if (c[0][i] === c[1][i]) {
                                            if (i === s) return 0;
                                            i -= 1
                                        } else if (c[0][i] < c[1][i]) return -1
                                    }
                                }
                            }, {
                                key: "map",
                                value: function (e, t) {
                                    var n, r = [];
                                    if (Array.prototype.map) return Array.prototype.map.call(e, t);
                                    for (n = 0; n < e.length; n += 1) r.push(t(e[n]));
                                    return r
                                }
                            }, {
                                key: "getBrowserAlias",
                                value: function (e) {
                                    return r.BROWSER_ALIASES_MAP[e]
                                }
                            }]) && o(t, n), e;
                            var t, n
                        }();
                        n.default = a, e.exports = t.default
                    }) ? r.apply(t, o) : r) || (e.exports = a)
                },
                86: function (e, t, n) {
                    var r, o, a;
                    o = [t, n(87)], void 0 === (a = "function" == typeof (r = function (n, r) {
                        "use strict";

                        function o(e, t) {
                            for (var n = 0; n < t.length; n++) {
                                var r = t[n];
                                r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(e, r.key, r)
                            }
                        }
                        var a;
                        Object.defineProperty(n, "__esModule", {
                            value: !0
                        }), n.default = void 0, r = (a = r) && a.__esModule ? a : {
                            default: a
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
                                    return new r.default(e, t)
                                }
                            }, {
                                key: "parse",
                                value: function (e) {
                                    return new r.default(e).getResult()
                                }
                            }]) && o(t, n), e;
                            var t, n
                        }();
                        n.default = i, e.exports = t.default
                    }) ? r.apply(t, o) : r) || (e.exports = a)
                },
                87: function (e, t, n) {
                    var r, o, a;
                    o = [t, n(88), n(90), n(91), n(92), n(17)], void 0 === (a = "function" == typeof (r = function (n, r, o, a, i, s) {
                        "use strict";

                        function c(e) {
                            return e && e.__esModule ? e : {
                                default: e
                            }
                        }

                        function u(e) {
                            return (u = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (e) {
                                return typeof e
                            } : function (e) {
                                return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : typeof e
                            })(e)
                        }

                        function l(e, t) {
                            for (var n = 0; n < t.length; n++) {
                                var r = t[n];
                                r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(e, r.key, r)
                            }
                        }
                        Object.defineProperty(n, "__esModule", {
                            value: !0
                        }), n.default = void 0, r = c(r), o = c(o), a = c(a), i = c(i), s = c(s);
                        var f = function () {
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
                                    var t = r.default.find(function (t) {
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
                                    var t = o.default.find(function (t) {
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
                                    var t = a.default.find(function (t) {
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
                                        r = 0,
                                        o = {},
                                        a = 0,
                                        i = Object.keys(e);
                                    if (i.forEach(function (t) {
                                            var i = e[t];
                                            "string" == typeof i ? (o[t] = i, a += 1) : "object" === u(i) && (n[t] = i, r += 1)
                                        }), r > 0) {
                                        var s = Object.keys(n),
                                            c = s.find(function (e) {
                                                return t.isOS(e)
                                            });
                                        if (c) {
                                            var l = this.satisfies(n[c]);
                                            if (void 0 !== l) return l
                                        }
                                        var f = s.find(function (e) {
                                            return t.isPlatform(e)
                                        });
                                        if (f) {
                                            var p = this.satisfies(n[f]);
                                            if (void 0 !== p) return p
                                        }
                                    }
                                    if (a > 0) {
                                        var h = Object.keys(o),
                                            d = h.find(function (e) {
                                                return t.isBrowser(e, !0)
                                            });
                                        if (void 0 !== d) return this.compareVersion(o[d])
                                    }
                                }
                            }, {
                                key: "isBrowser",
                                value: function (e) {
                                    var t = arguments.length > 1 && void 0 !== arguments[1] && arguments[1],
                                        n = this.getBrowserName(),
                                        r = [n.toLowerCase()],
                                        o = s.default.getBrowserAlias(n);
                                    return t && void 0 !== o && r.push(o.toLowerCase()), -1 !== r.indexOf(e.toLowerCase())
                                }
                            }, {
                                key: "compareVersion",
                                value: function (e) {
                                    var t = [0],
                                        n = e,
                                        r = !1,
                                        o = this.getBrowserVersion();
                                    if ("string" == typeof o) return ">" === e[0] || "<" === e[0] ? (n = e.substr(1), "=" === e[1] ? (r = !0, n = e.substr(2)) : t = [], ">" === e[0] ? t.push(1) : t.push(-1)) : "=" === e[0] ? n = e.substr(1) : "~" === e[0] && (r = !0, n = e.substr(1)), t.indexOf(s.default.compareVersions(o, n, r)) > -1
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
                            }]) && l(t.prototype, n), e;
                            var t, n
                        }();
                        n.default = f, e.exports = t.default
                    }) ? r.apply(t, o) : r) || (e.exports = a)
                },
                88: function (e, t, n) {
                    var r, o, a;
                    o = [t, n(17)], void 0 === (a = "function" == typeof (r = function (n, r) {
                        "use strict";
                        var o;
                        Object.defineProperty(n, "__esModule", {
                            value: !0
                        }), n.default = void 0, r = (o = r) && o.__esModule ? o : {
                            default: o
                        };
                        var a = /version\/(\d+(\.?_?\d+)+)/i,
                            i = [{
                                test: [/googlebot/i],
                                describe: function (e) {
                                    var t = {
                                            name: "Googlebot"
                                        },
                                        n = r.default.getFirstMatch(/googlebot\/(\d+(\.\d+))/i, e) || r.default.getFirstMatch(a, e);
                                    return n && (t.version = n), t
                                }
                            }, {
                                test: [/opera/i],
                                describe: function (e) {
                                    var t = {
                                            name: "Opera"
                                        },
                                        n = r.default.getFirstMatch(a, e) || r.default.getFirstMatch(/(?:opera)[\s\/](\d+(\.?_?\d+)+)/i, e);
                                    return n && (t.version = n), t
                                }
                            }, {
                                test: [/opr\/|opios/i],
                                describe: function (e) {
                                    var t = {
                                            name: "Opera"
                                        },
                                        n = r.default.getFirstMatch(/(?:opr|opios)[\s\/](\S+)/i, e) || r.default.getFirstMatch(a, e);
                                    return n && (t.version = n), t
                                }
                            }, {
                                test: [/SamsungBrowser/i],
                                describe: function (e) {
                                    var t = {
                                            name: "Samsung Internet for Android"
                                        },
                                        n = r.default.getFirstMatch(a, e) || r.default.getFirstMatch(/(?:SamsungBrowser)[\s\/](\d+(\.?_?\d+)+)/i, e);
                                    return n && (t.version = n), t
                                }
                            }, {
                                test: [/Whale/i],
                                describe: function (e) {
                                    var t = {
                                            name: "NAVER Whale Browser"
                                        },
                                        n = r.default.getFirstMatch(a, e) || r.default.getFirstMatch(/(?:whale)[\s\/](\d+(?:\.\d+)+)/i, e);
                                    return n && (t.version = n), t
                                }
                            }, {
                                test: [/MZBrowser/i],
                                describe: function (e) {
                                    var t = {
                                            name: "MZ Browser"
                                        },
                                        n = r.default.getFirstMatch(/(?:MZBrowser)[\s\/](\d+(?:\.\d+)+)/i, e) || r.default.getFirstMatch(a, e);
                                    return n && (t.version = n), t
                                }
                            }, {
                                test: [/focus/i],
                                describe: function (e) {
                                    var t = {
                                            name: "Focus"
                                        },
                                        n = r.default.getFirstMatch(/(?:focus)[\s\/](\d+(?:\.\d+)+)/i, e) || r.default.getFirstMatch(a, e);
                                    return n && (t.version = n), t
                                }
                            }, {
                                test: [/swing/i],
                                describe: function (e) {
                                    var t = {
                                            name: "Swing"
                                        },
                                        n = r.default.getFirstMatch(/(?:swing)[\s\/](\d+(?:\.\d+)+)/i, e) || r.default.getFirstMatch(a, e);
                                    return n && (t.version = n), t
                                }
                            }, {
                                test: [/coast/i],
                                describe: function (e) {
                                    var t = {
                                            name: "Opera Coast"
                                        },
                                        n = r.default.getFirstMatch(a, e) || r.default.getFirstMatch(/(?:coast)[\s\/](\d+(\.?_?\d+)+)/i, e);
                                    return n && (t.version = n), t
                                }
                            }, {
                                test: [/yabrowser/i],
                                describe: function (e) {
                                    var t = {
                                            name: "Yandex Browser"
                                        },
                                        n = r.default.getFirstMatch(/(?:yabrowser)[\s\/](\d+(\.?_?\d+)+)/i, e) || r.default.getFirstMatch(a, e);
                                    return n && (t.version = n), t
                                }
                            }, {
                                test: [/ucbrowser/i],
                                describe: function (e) {
                                    var t = {
                                            name: "UC Browser"
                                        },
                                        n = r.default.getFirstMatch(a, e) || r.default.getFirstMatch(/(?:ucbrowser)[\s\/](\d+(\.?_?\d+)+)/i, e);
                                    return n && (t.version = n), t
                                }
                            }, {
                                test: [/Maxthon|mxios/i],
                                describe: function (e) {
                                    var t = {
                                            name: "Maxthon"
                                        },
                                        n = r.default.getFirstMatch(a, e) || r.default.getFirstMatch(/(?:Maxthon|mxios)[\s\/](\d+(\.?_?\d+)+)/i, e);
                                    return n && (t.version = n), t
                                }
                            }, {
                                test: [/epiphany/i],
                                describe: function (e) {
                                    var t = {
                                            name: "Epiphany"
                                        },
                                        n = r.default.getFirstMatch(a, e) || r.default.getFirstMatch(/(?:epiphany)[\s\/](\d+(\.?_?\d+)+)/i, e);
                                    return n && (t.version = n), t
                                }
                            }, {
                                test: [/puffin/i],
                                describe: function (e) {
                                    var t = {
                                            name: "Puffin"
                                        },
                                        n = r.default.getFirstMatch(a, e) || r.default.getFirstMatch(/(?:puffin)[\s\/](\d+(\.?_?\d+)+)/i, e);
                                    return n && (t.version = n), t
                                }
                            }, {
                                test: [/sleipnir/i],
                                describe: function (e) {
                                    var t = {
                                            name: "Sleipnir"
                                        },
                                        n = r.default.getFirstMatch(a, e) || r.default.getFirstMatch(/(?:sleipnir)[\s\/](\d+(\.?_?\d+)+)/i, e);
                                    return n && (t.version = n), t
                                }
                            }, {
                                test: [/k-meleon/i],
                                describe: function (e) {
                                    var t = {
                                            name: "K-Meleon"
                                        },
                                        n = r.default.getFirstMatch(a, e) || r.default.getFirstMatch(/(?:k-meleon)[\s\/](\d+(\.?_?\d+)+)/i, e);
                                    return n && (t.version = n), t
                                }
                            }, {
                                test: [/micromessenger/i],
                                describe: function (e) {
                                    var t = {
                                            name: "WeChat"
                                        },
                                        n = r.default.getFirstMatch(/(?:micromessenger)[\s\/](\d+(\.?_?\d+)+)/i, e) || r.default.getFirstMatch(a, e);
                                    return n && (t.version = n), t
                                }
                            }, {
                                test: [/msie|trident/i],
                                describe: function (e) {
                                    var t = {
                                            name: "Internet Explorer"
                                        },
                                        n = r.default.getFirstMatch(/(?:msie |rv:)(\d+(\.?_?\d+)+)/i, e);
                                    return n && (t.version = n), t
                                }
                            }, {
                                test: [/\sedg\//i],
                                describe: function (e) {
                                    var t = {
                                            name: "Microsoft Edge"
                                        },
                                        n = r.default.getFirstMatch(/\sedg\/(\d+(\.?_?\d+)+)/i, e);
                                    return n && (t.version = n), t
                                }
                            }, {
                                test: [/edg([ea]|ios)/i],
                                describe: function (e) {
                                    var t = {
                                            name: "Microsoft Edge"
                                        },
                                        n = r.default.getSecondMatch(/edg([ea]|ios)\/(\d+(\.?_?\d+)+)/i, e);
                                    return n && (t.version = n), t
                                }
                            }, {
                                test: [/vivaldi/i],
                                describe: function (e) {
                                    var t = {
                                            name: "Vivaldi"
                                        },
                                        n = r.default.getFirstMatch(/vivaldi\/(\d+(\.?_?\d+)+)/i, e);
                                    return n && (t.version = n), t
                                }
                            }, {
                                test: [/seamonkey/i],
                                describe: function (e) {
                                    var t = {
                                            name: "SeaMonkey"
                                        },
                                        n = r.default.getFirstMatch(/seamonkey\/(\d+(\.?_?\d+)+)/i, e);
                                    return n && (t.version = n), t
                                }
                            }, {
                                test: [/sailfish/i],
                                describe: function (e) {
                                    var t = {
                                            name: "Sailfish"
                                        },
                                        n = r.default.getFirstMatch(/sailfish\s?browser\/(\d+(\.\d+)?)/i, e);
                                    return n && (t.version = n), t
                                }
                            }, {
                                test: [/silk/i],
                                describe: function (e) {
                                    var t = {
                                            name: "Amazon Silk"
                                        },
                                        n = r.default.getFirstMatch(/silk\/(\d+(\.?_?\d+)+)/i, e);
                                    return n && (t.version = n), t
                                }
                            }, {
                                test: [/phantom/i],
                                describe: function (e) {
                                    var t = {
                                            name: "PhantomJS"
                                        },
                                        n = r.default.getFirstMatch(/phantomjs\/(\d+(\.?_?\d+)+)/i, e);
                                    return n && (t.version = n), t
                                }
                            }, {
                                test: [/slimerjs/i],
                                describe: function (e) {
                                    var t = {
                                            name: "SlimerJS"
                                        },
                                        n = r.default.getFirstMatch(/slimerjs\/(\d+(\.?_?\d+)+)/i, e);
                                    return n && (t.version = n), t
                                }
                            }, {
                                test: [/blackberry|\bbb\d+/i, /rim\stablet/i],
                                describe: function (e) {
                                    var t = {
                                            name: "BlackBerry"
                                        },
                                        n = r.default.getFirstMatch(a, e) || r.default.getFirstMatch(/blackberry[\d]+\/(\d+(\.?_?\d+)+)/i, e);
                                    return n && (t.version = n), t
                                }
                            }, {
                                test: [/(web|hpw)[o0]s/i],
                                describe: function (e) {
                                    var t = {
                                            name: "WebOS Browser"
                                        },
                                        n = r.default.getFirstMatch(a, e) || r.default.getFirstMatch(/w(?:eb)?[o0]sbrowser\/(\d+(\.?_?\d+)+)/i, e);
                                    return n && (t.version = n), t
                                }
                            }, {
                                test: [/bada/i],
                                describe: function (e) {
                                    var t = {
                                            name: "Bada"
                                        },
                                        n = r.default.getFirstMatch(/dolfin\/(\d+(\.?_?\d+)+)/i, e);
                                    return n && (t.version = n), t
                                }
                            }, {
                                test: [/tizen/i],
                                describe: function (e) {
                                    var t = {
                                            name: "Tizen"
                                        },
                                        n = r.default.getFirstMatch(/(?:tizen\s?)?browser\/(\d+(\.?_?\d+)+)/i, e) || r.default.getFirstMatch(a, e);
                                    return n && (t.version = n), t
                                }
                            }, {
                                test: [/qupzilla/i],
                                describe: function (e) {
                                    var t = {
                                            name: "QupZilla"
                                        },
                                        n = r.default.getFirstMatch(/(?:qupzilla)[\s\/](\d+(\.?_?\d+)+)/i, e) || r.default.getFirstMatch(a, e);
                                    return n && (t.version = n), t
                                }
                            }, {
                                test: [/firefox|iceweasel|fxios/i],
                                describe: function (e) {
                                    var t = {
                                            name: "Firefox"
                                        },
                                        n = r.default.getFirstMatch(/(?:firefox|iceweasel|fxios)[\s\/](\d+(\.?_?\d+)+)/i, e);
                                    return n && (t.version = n), t
                                }
                            }, {
                                test: [/chromium/i],
                                describe: function (e) {
                                    var t = {
                                            name: "Chromium"
                                        },
                                        n = r.default.getFirstMatch(/(?:chromium)[\s\/](\d+(\.?_?\d+)+)/i, e) || r.default.getFirstMatch(a, e);
                                    return n && (t.version = n), t
                                }
                            }, {
                                test: [/chrome|crios|crmo/i],
                                describe: function (e) {
                                    var t = {
                                            name: "Chrome"
                                        },
                                        n = r.default.getFirstMatch(/(?:chrome|crios|crmo)\/(\d+(\.?_?\d+)+)/i, e);
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
                                        n = r.default.getFirstMatch(a, e);
                                    return n && (t.version = n), t
                                }
                            }, {
                                test: [/playstation 4/i],
                                describe: function (e) {
                                    var t = {
                                            name: "PlayStation 4"
                                        },
                                        n = r.default.getFirstMatch(a, e);
                                    return n && (t.version = n), t
                                }
                            }, {
                                test: [/safari|applewebkit/i],
                                describe: function (e) {
                                    var t = {
                                            name: "Safari"
                                        },
                                        n = r.default.getFirstMatch(a, e);
                                    return n && (t.version = n), t
                                }
                            }, {
                                test: [/.*/i],
                                describe: function (e) {
                                    var t = -1 !== e.search("\\("),
                                        n = t ? /^(.*)\/(.*)[ \t]\((.*)/ : /^(.*)\/(.*) /;
                                    return {
                                        name: r.default.getFirstMatch(n, e),
                                        version: r.default.getSecondMatch(n, e)
                                    }
                                }
                            }];
                        n.default = i, e.exports = t.default
                    }) ? r.apply(t, o) : r) || (e.exports = a)
                },
                89: function (e, t, n) {
                    var r, o, a;
                    o = [t], void 0 === (a = "function" == typeof (r = function (e) {
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
                    }) ? r.apply(t, o) : r) || (e.exports = a)
                },
                90: function (e, t, n) {
                    var r, o, a;
                    o = [t, n(17)], void 0 === (a = "function" == typeof (r = function (n, r) {
                        "use strict";
                        var o;
                        Object.defineProperty(n, "__esModule", {
                            value: !0
                        }), n.default = void 0, r = (o = r) && o.__esModule ? o : {
                            default: o
                        };
                        var a = [{
                            test: [/windows phone/i],
                            describe: function (e) {
                                var t = r.default.getFirstMatch(/windows phone (?:os)?\s?(\d+(\.\d+)*)/i, e);
                                return {
                                    name: "Windows Phone",
                                    version: t
                                }
                            }
                        }, {
                            test: [/windows/i],
                            describe: function (e) {
                                var t = r.default.getFirstMatch(/Windows ((NT|XP)( \d\d?.\d)?)/i, e),
                                    n = r.default.getWindowsVersionName(t);
                                return {
                                    name: "Windows",
                                    version: t,
                                    versionName: n
                                }
                            }
                        }, {
                            test: [/macintosh/i],
                            describe: function (e) {
                                var t = r.default.getFirstMatch(/mac os x (\d+(\.?_?\d+)+)/i, e).replace(/[_\s]/g, ".");
                                return {
                                    name: "macOS",
                                    version: t
                                }
                            }
                        }, {
                            test: [/(ipod|iphone|ipad)/i],
                            describe: function (e) {
                                var t = r.default.getFirstMatch(/os (\d+([_\s]\d+)*) like mac os x/i, e).replace(/[_\s]/g, ".");
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
                                var t = r.default.getFirstMatch(/android[\s\/-](\d+(\.\d+)*)/i, e),
                                    n = r.default.getAndroidVersionName(t),
                                    o = {
                                        name: "Android",
                                        version: t
                                    };
                                return n && (o.versionName = n), o
                            }
                        }, {
                            test: [/(web|hpw)[o0]s/i],
                            describe: function (e) {
                                var t = r.default.getFirstMatch(/(?:web|hpw)[o0]s\/(\d+(\.\d+)*)/i, e),
                                    n = {
                                        name: "WebOS"
                                    };
                                return t && t.length && (n.version = t), n
                            }
                        }, {
                            test: [/blackberry|\bbb\d+/i, /rim\stablet/i],
                            describe: function (e) {
                                var t = r.default.getFirstMatch(/rim\stablet\sos\s(\d+(\.\d+)*)/i, e) || r.default.getFirstMatch(/blackberry\d+\/(\d+([_\s]\d+)*)/i, e) || r.default.getFirstMatch(/\bbb(\d+)/i, e);
                                return {
                                    name: "BlackBerry",
                                    version: t
                                }
                            }
                        }, {
                            test: [/bada/i],
                            describe: function (e) {
                                var t = r.default.getFirstMatch(/bada\/(\d+(\.\d+)*)/i, e);
                                return {
                                    name: "Bada",
                                    version: t
                                }
                            }
                        }, {
                            test: [/tizen/i],
                            describe: function (e) {
                                var t = r.default.getFirstMatch(/tizen[\/\s](\d+(\.\d+)*)/i, e);
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
                                var t = r.default.getFirstMatch(/PlayStation 4[\/\s](\d+(\.\d+)*)/i, e);
                                return {
                                    name: "PlayStation 4",
                                    version: t
                                }
                            }
                        }];
                        n.default = a, e.exports = t.default
                    }) ? r.apply(t, o) : r) || (e.exports = a)
                },
                91: function (e, t, n) {
                    var r, o, a;
                    o = [t, n(17)], void 0 === (a = "function" == typeof (r = function (n, r) {
                        "use strict";
                        var o;
                        Object.defineProperty(n, "__esModule", {
                            value: !0
                        }), n.default = void 0, r = (o = r) && o.__esModule ? o : {
                            default: o
                        };
                        var a = {
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
                                    var t = r.default.getFirstMatch(/(can-l01)/i, e) && "Nova",
                                        n = {
                                            type: a.mobile,
                                            vendor: "Huawei"
                                        };
                                    return t && (n.model = t), n
                                }
                            }, {
                                test: [/nexus\s*(?:7|8|9|10).*/i],
                                describe: function () {
                                    return {
                                        type: a.tablet,
                                        vendor: "Nexus"
                                    }
                                }
                            }, {
                                test: [/ipad/i],
                                describe: function () {
                                    return {
                                        type: a.tablet,
                                        vendor: "Apple",
                                        model: "iPad"
                                    }
                                }
                            }, {
                                test: [/kftt build/i],
                                describe: function () {
                                    return {
                                        type: a.tablet,
                                        vendor: "Amazon",
                                        model: "Kindle Fire HD 7"
                                    }
                                }
                            }, {
                                test: [/silk/i],
                                describe: function () {
                                    return {
                                        type: a.tablet,
                                        vendor: "Amazon"
                                    }
                                }
                            }, {
                                test: [/tablet/i],
                                describe: function () {
                                    return {
                                        type: a.tablet
                                    }
                                }
                            }, {
                                test: function (e) {
                                    var t = e.test(/ipod|iphone/i),
                                        n = e.test(/like (ipod|iphone)/i);
                                    return t && !n
                                },
                                describe: function (e) {
                                    var t = r.default.getFirstMatch(/(ipod|iphone)/i, e);
                                    return {
                                        type: a.mobile,
                                        vendor: "Apple",
                                        model: t
                                    }
                                }
                            }, {
                                test: [/nexus\s*[0-6].*/i, /galaxy nexus/i],
                                describe: function () {
                                    return {
                                        type: a.mobile,
                                        vendor: "Nexus"
                                    }
                                }
                            }, {
                                test: [/[^-]mobi/i],
                                describe: function () {
                                    return {
                                        type: a.mobile
                                    }
                                }
                            }, {
                                test: function (e) {
                                    return "blackberry" === e.getBrowserName(!0)
                                },
                                describe: function () {
                                    return {
                                        type: a.mobile,
                                        vendor: "BlackBerry"
                                    }
                                }
                            }, {
                                test: function (e) {
                                    return "bada" === e.getBrowserName(!0)
                                },
                                describe: function () {
                                    return {
                                        type: a.mobile
                                    }
                                }
                            }, {
                                test: function (e) {
                                    return "windows phone" === e.getBrowserName()
                                },
                                describe: function () {
                                    return {
                                        type: a.mobile,
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
                                        type: a.tablet
                                    }
                                }
                            }, {
                                test: function (e) {
                                    return "android" === e.getOSName(!0)
                                },
                                describe: function () {
                                    return {
                                        type: a.mobile
                                    }
                                }
                            }, {
                                test: function (e) {
                                    return "macos" === e.getOSName(!0)
                                },
                                describe: function () {
                                    return {
                                        type: a.desktop,
                                        vendor: "Apple"
                                    }
                                }
                            }, {
                                test: function (e) {
                                    return "windows" === e.getOSName(!0)
                                },
                                describe: function () {
                                    return {
                                        type: a.desktop
                                    }
                                }
                            }, {
                                test: function (e) {
                                    return "linux" === e.getOSName(!0)
                                },
                                describe: function () {
                                    return {
                                        type: a.desktop
                                    }
                                }
                            }, {
                                test: function (e) {
                                    return "playstation 4" === e.getOSName(!0)
                                },
                                describe: function () {
                                    return {
                                        type: a.tv
                                    }
                                }
                            }];
                        n.default = i, e.exports = t.default
                    }) ? r.apply(t, o) : r) || (e.exports = a)
                },
                92: function (e, t, n) {
                    var r, o, a;
                    o = [t, n(17)], void 0 === (a = "function" == typeof (r = function (n, r) {
                        "use strict";
                        var o;
                        Object.defineProperty(n, "__esModule", {
                            value: !0
                        }), n.default = void 0, r = (o = r) && o.__esModule ? o : {
                            default: o
                        };
                        var a = [{
                            test: function (e) {
                                return "microsoft edge" === e.getBrowserName(!0)
                            },
                            describe: function (e) {
                                var t = /\sedg\//i.test(e);
                                if (t) return {
                                    name: "Blink"
                                };
                                var n = r.default.getFirstMatch(/edge\/(\d+(\.?_?\d+)+)/i, e);
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
                                    n = r.default.getFirstMatch(/trident\/(\d+(\.?_?\d+)+)/i, e);
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
                                    n = r.default.getFirstMatch(/presto\/(\d+(\.?_?\d+)+)/i, e);
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
                                    n = r.default.getFirstMatch(/gecko\/(\d+(\.?_?\d+)+)/i, e);
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
                                    n = r.default.getFirstMatch(/webkit\/(\d+(\.?_?\d+)+)/i, e);
                                return n && (t.version = n), t
                            }
                        }];
                        n.default = a, e.exports = t.default
                    }) ? r.apply(t, o) : r) || (e.exports = a)
                }
            })
        },
        "2agv": function (e, t, n) {
            "use strict";
            var r = n("8Xl/"),
                o = n("/6KZ"),
                a = n("dCrc"),
                i = n("oICS"),
                s = n("Ng5M"),
                c = n("gou2"),
                u = n("ErhN"),
                l = n("VJcA");
            o(o.S + o.F * !n("Clx3")(function (e) {
                Array.from(e)
            }), "Array", {
                from: function (e) {
                    var t, n, o, f, p = a(e),
                        h = "function" == typeof this ? this : Array,
                        d = arguments.length,
                        m = d > 1 ? arguments[1] : void 0,
                        v = void 0 !== m,
                        y = 0,
                        g = l(p);
                    if (v && (m = r(m, d > 2 ? arguments[2] : void 0, 2)), null == g || h == Array && s(g))
                        for (n = new h(t = c(p.length)); t > y; y++) u(n, y, v ? m(p[y], y) : p[y]);
                    else
                        for (f = g.call(p), n = new h; !(o = f.next()).done; y++) u(n, y, v ? i(f, m, [o.value, y], !0) : o.value);
                    return n.length = y, n
                }
            })
        },
        "3Hfq": function (e, t, n) {
            var r = n("TaGV"),
                o = r.JSON || (r.JSON = {
                    stringify: JSON.stringify
                });
            e.exports = function (e) {
                return o.stringify.apply(o, arguments)
            }
        },
        "3esu": function (e, t, n) {
            var r = n("NluH"),
                o = n("oS/Z");
            e.exports = function (e, t) {
                return !t || "object" !== r(t) && "function" != typeof t ? o(e) : t
            }
        },
        "4j9R": function (e, t, n) {
            "use strict";
            var r = n("PL1w")(n("6Ndq"));
            Object.defineProperty(t, "__esModule", {
                value: !0
            }), t.default = function () {
                var e = (0, r.default)(null);
                return {
                    on: function (t, n) {
                        (e[t] || (e[t] = [])).push(n)
                    },
                    off: function (t, n) {
                        e[t] && e[t].splice(e[t].indexOf(n) >>> 0, 1)
                    },
                    emit: function (t) {
                        for (var n = arguments.length, r = new Array(n > 1 ? n - 1 : 0), o = 1; o < n; o++) r[o - 1] = arguments[o];
                        (e[t] || []).slice().map(function (e) {
                            e.apply(void 0, r)
                        })
                    }
                }
            }
        },
        "4vxr": function (e, t, n) {
            "use strict";
            var r = function (e) {
                if (e && e.__esModule) return e;
                var t = {};
                if (null != e)
                    for (var n in e) Object.hasOwnProperty.call(e, n) && (t[n] = e[n]);
                return t.default = e, t
            };
            Object.defineProperty(t, "__esModule", {
                value: !0
            });
            var o = r(n("mXGw"));
            t.RouterContext = o.createContext(null)
        },
        "5IsQ": function (e, t) {
            var n, r, o = e.exports = {};

            function a() {
                throw new Error("setTimeout has not been defined")
            }

            function i() {
                throw new Error("clearTimeout has not been defined")
            }

            function s(e) {
                if (n === setTimeout) return setTimeout(e, 0);
                if ((n === a || !n) && setTimeout) return n = setTimeout, setTimeout(e, 0);
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
                    n = "function" == typeof setTimeout ? setTimeout : a
                } catch (e) {
                    n = a
                }
                try {
                    r = "function" == typeof clearTimeout ? clearTimeout : i
                } catch (e) {
                    r = i
                }
            }();
            var c, u = [],
                l = !1,
                f = -1;

            function p() {
                l && c && (l = !1, c.length ? u = c.concat(u) : f = -1, u.length && h())
            }

            function h() {
                if (!l) {
                    var e = s(p);
                    l = !0;
                    for (var t = u.length; t;) {
                        for (c = u, u = []; ++f < t;) c && c[f].run();
                        f = -1, t = u.length
                    }
                    c = null, l = !1,
                        function (e) {
                            if (r === clearTimeout) return clearTimeout(e);
                            if ((r === i || !r) && clearTimeout) return r = clearTimeout, clearTimeout(e);
                            try {
                                r(e)
                            } catch (t) {
                                try {
                                    return r.call(null, e)
                                } catch (t) {
                                    return r.call(this, e)
                                }
                            }
                        }(e)
                }
            }

            function d(e, t) {
                this.fun = e, this.array = t
            }

            function m() {}
            o.nextTick = function (e) {
                var t = new Array(arguments.length - 1);
                if (arguments.length > 1)
                    for (var n = 1; n < arguments.length; n++) t[n - 1] = arguments[n];
                u.push(new d(e, t)), 1 !== u.length || l || s(h)
            }, d.prototype.run = function () {
                this.fun.apply(null, this.array)
            }, o.title = "browser", o.browser = !0, o.env = {}, o.argv = [], o.version = "", o.versions = {}, o.on = m, o.addListener = m, o.once = m, o.off = m, o.removeListener = m, o.removeAllListeners = m, o.emit = m, o.prependListener = m, o.prependOnceListener = m, o.listeners = function (e) {
                return []
            }, o.binding = function (e) {
                throw new Error("process.binding is not supported")
            }, o.cwd = function () {
                return "/"
            }, o.chdir = function (e) {
                throw new Error("process.chdir is not supported")
            }, o.umask = function () {
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
        "8m4E": function (e, t, n) {
            var r = n("jDdP"),
                o = n("OKNm");

            function a(t) {
                return e.exports = a = o ? r : function (e) {
                    return e.__proto__ || r(e)
                }, a(t)
            }
            e.exports = a
        },
        "9CGT": function (e, t, n) {
            "use strict";
            var r = n("PL1w"),
                o = r(n("JYC+")),
                a = r(n("KBEF")),
                i = r(n("J/q3")),
                s = r(n("3esu")),
                c = r(n("8m4E")),
                u = r(n("Od8a")),
                l = function (e) {
                    if (e && e.__esModule) return e;
                    var t = {};
                    if (null != e)
                        for (var n in e) Object.hasOwnProperty.call(e, n) && (t[n] = e[n]);
                    return t.default = e, t
                },
                f = function (e) {
                    return e && e.__esModule ? e : {
                        default: e
                    }
                };
            Object.defineProperty(t, "__esModule", {
                value: !0
            });
            var p = n("so/P"),
                h = l(n("mXGw")),
                d = (f(n("W0B4")), l(n("bBV7"))),
                m = n("MUK1");

            function v(e) {
                return e && "object" == typeof e ? m.formatWithValidation(e) : e
            }
            var y = function (e) {
                function t() {
                    var e, n, r, o, i;
                    return (0, a.default)(this, t), (e = (0, s.default)(this, (0, c.default)(t).apply(this, arguments))).formatUrls = (n = function (e, t) {
                        return {
                            href: v(e),
                            as: v(t)
                        }
                    }, r = null, o = null, i = null, function (e, t) {
                        if (e === r && t === o) return i;
                        var a = n(e, t);
                        return r = e, o = t, i = a, a
                    }), e.linkClicked = function (t) {
                        var n = t.currentTarget,
                            r = n.nodeName,
                            o = n.target;
                        if ("A" !== r || !(o && "_self" !== o || t.metaKey || t.ctrlKey || t.shiftKey || t.nativeEvent && 2 === t.nativeEvent.which)) {
                            var a = e.formatUrls(e.props.href, e.props.as),
                                i = a.href,
                                s = a.as;
                            if (function (e) {
                                    var t = p.parse(e, !1, !0),
                                        n = p.parse(m.getLocationOrigin(), !1, !0);
                                    return !t.host || t.protocol === n.protocol && t.host === n.host
                                }(i)) {
                                var c = window.location.pathname;
                                i = p.resolve(c, i), s = s ? p.resolve(c, s) : i, t.preventDefault();
                                var u = e.props.scroll;
                                null == u && (u = s.indexOf("#") < 0), d.default[e.props.replace ? "replace" : "push"](i, s, {
                                    shallow: e.props.shallow
                                }).then(function (e) {
                                    e && u && (window.scrollTo(0, 0), document.body.focus())
                                }).catch(function (t) {
                                    e.props.onError && e.props.onError(t)
                                })
                            }
                        }
                    }, e
                }
                return (0, u.default)(t, e), (0, i.default)(t, [{
                    key: "componentDidMount",
                    value: function () {
                        this.prefetch()
                    }
                }, {
                    key: "componentDidUpdate",
                    value: function (e) {
                        (0, o.default)(this.props.href) !== (0, o.default)(e.href) && this.prefetch()
                    }
                }, {
                    key: "prefetch",
                    value: function () {
                        if (this.props.prefetch && "undefined" != typeof window) {
                            var e = window.location.pathname,
                                t = this.formatUrls(this.props.href, this.props.as).href,
                                n = p.resolve(e, t);
                            d.default.prefetch(n)
                        }
                    }
                }, {
                    key: "render",
                    value: function () {
                        var e = this,
                            t = this.props.children,
                            n = this.formatUrls(this.props.href, this.props.as),
                            r = n.href,
                            o = n.as;
                        "string" == typeof t && (t = h.default.createElement("a", null, t));
                        var a = h.Children.only(t),
                            i = {
                                onClick: function (t) {
                                    a.props && "function" == typeof a.props.onClick && a.props.onClick(t), t.defaultPrevented || e.linkClicked(t)
                                }
                            };
                        return !this.props.passHref && ("a" !== a.type || "href" in a.props) || (i.href = o || r), i.href && "undefined" != typeof __NEXT_DATA__ && __NEXT_DATA__.nextExport && (i.href = d.Router._rewriteUrlForNextExport(i.href)), h.default.cloneElement(a, i)
                    }
                }]), t
            }(h.Component);
            t.default = y
        },
        "9yyn": function (e, t, n) {
            "use strict";
            n.d(t, "a", function () {
                return h
            });
            var r = n("LkAs"),
                o = n("Moms"),
                a = n("bMj6"),
                i = n("hZod"),
                s = n("tEuJ"),
                c = n("YIwv"),
                u = n.n(c),
                l = n("mXGw"),
                f = n("Rzy4"),
                p = n("pdCo"),
                h = function (e) {
                    function t() {
                        return Object(r.default)(this, t), Object(a.default)(this, Object(i.default)(t).apply(this, arguments))
                    }
                    return Object(s.default)(t, e), Object(o.default)(t, [{
                        key: "render",
                        value: function () {
                            var e = this.props.children;
                            return l.createElement(p.a, null, l.createElement(f.a, null), l.createElement("div", {
                                className: "jsx-2255061257 contentContainer page"
                            }, e, l.createElement(u.a, {
                                id: "2255061257"
                            }, [".content.jsx-2255061257{margin:120px 0;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;-webkit-box-flex:1;-webkit-flex-grow:1;-ms-flex-positive:1;flex-grow:1;max-width:720px;}"])))
                        }
                    }]), t
                }(l.Component)
        },
        AFnJ: function (e, t, n) {
            n("CAwg"), e.exports = n("TaGV").Object.assign
        },
        BGbK: function (e, t, n) {
            var r = n("/1nD"),
                o = n("lyqB");
            e.exports = function (e) {
                return function () {
                    if (r(this) != e) throw TypeError(e + "#toJSON isn't generic");
                    return o(this)
                }
            }
        },
        CAwg: function (e, t, n) {
            var r = n("/6KZ");
            r(r.S + r.F, "Object", {
                assign: n("tbIA")
            })
        },
        Clx3: function (e, t, n) {
            var r = n("0Sp3")("iterator"),
                o = !1;
            try {
                var a = [7][r]();
                a.return = function () {
                    o = !0
                }, Array.from(a, function () {
                    throw 2
                })
            } catch (i) {}
            e.exports = function (e, t) {
                if (!t && !o) return !1;
                var n = !1;
                try {
                    var a = [7],
                        s = a[r]();
                    s.next = function () {
                        return {
                            done: n = !0
                        }
                    }, a[r] = function () {
                        return s
                    }, e(a)
                } catch (i) {}
                return n
            }
        },
        E02R: function (e, t, n) {
            "use strict";
            e.exports = "SECRET_DO_NOT_PASS_THIS_OR_YOU_WILL_BE_FIRED"
        },
        EUvJ: function (e, t, n) {
            "use strict";
            n.d(t, "a", function () {
                return a
            });
            var r = n("z3IF"),
                o = n("mXGw");

            function a(e) {
                return o.createElement("svg", Object(r.a)({
                    width: "64",
                    height: "64",
                    viewBox: "0 0 64 64",
                    fill: "none",
                    xmlns: "http://www.w3.org/2000/svg"
                }, e), o.createElement("path", {
                    d: "M0.403013 37.3991L26.6009 63.597C13.2225 61.3356 2.66442 50.7775 0.403013 37.3991Z",
                    fill: "#5E6AD2"
                }), o.createElement("path", {
                    d: "M0 30.2868L33.7132 64C35.7182 63.8929 37.6742 63.6013 39.5645 63.142L0.85799 24.4355C0.398679 26.3259 0.10713 28.2818 0 30.2868Z",
                    fill: "#5E6AD2"
                }), o.createElement("path", {
                    d: "M2.53593 19.4042L44.5958 61.4641C46.1277 60.8066 47.598 60.0331 48.9956 59.1546L4.84543 15.0044C3.96691 16.402 3.19339 17.8723 2.53593 19.4042Z",
                    fill: "#5E6AD2"
                }), o.createElement("path", {
                    d: "M7.69501 11.1447C13.5677 4.32093 22.2677 0 31.9769 0C49.6628 0 64 14.3372 64 32.0231C64 41.7323 59.6791 50.4323 52.8553 56.305L7.69501 11.1447Z",
                    fill: "#5E6AD2"
                }))
            }
        },
        ErhN: function (e, t, n) {
            "use strict";
            var r = n("eOWL"),
                o = n("zJT+");
            e.exports = function (e, t, n) {
                t in e ? r.f(e, t, o(0, n)) : e[t] = n
            }
        },
        H09g: function (e, t, n) {
            "use strict";
            var r = n("PL1w"),
                o = r(n("UrUy")),
                a = r(n("R3/3")),
                i = r(n("hDBU")),
                s = r(n("ZOIa")),
                c = r(n("U8Yc")),
                u = r(n("OAWj")),
                l = r(n("LkAs")),
                f = r(n("Moms")),
                p = function (e) {
                    return e && e.__esModule ? e : {
                        default: e
                    }
                };
            Object.defineProperty(t, "__esModule", {
                value: !0
            });
            var h = n("so/P"),
                d = p(n("4j9R")),
                m = n("MUK1");

            function v(e) {
                return e.replace(/\/$/, "") || "/"
            }
            var y = function () {
                function e(t, n, r, o) {
                    var a = this,
                        i = o.initialProps,
                        s = o.pageLoader,
                        f = o.App,
                        p = o.Component,
                        h = o.err;
                    (0, l.default)(this, e), this.onPopState = function (e) {
                        if (e.state) {
                            if ((!e.state.options || !e.state.options.fromExternal) && (!a._bps || a._bps(e.state))) {
                                var t = e.state,
                                    n = t.url,
                                    r = t.as,
                                    o = t.options;
                                0, a.replace(n, r, o)
                            }
                        } else {
                            var i = a.pathname,
                                s = a.query;
                            a.changeState("replaceState", m.formatWithValidation({
                                pathname: i,
                                query: s
                            }), m.getURL())
                        }
                    }, this.route = v(t), this.components = {}, "/_error" !== t && (this.components[this.route] = {
                        Component: p,
                        props: i,
                        err: h
                    }), this.components["/_app"] = {
                        Component: f
                    }, this.events = e.events, this.pageLoader = s, this.pathname = t, this.query = n, this.asPath = r, this.subscriptions = new u.default, this.componentLoadCancel = null, "undefined" != typeof window && (this.changeState("replaceState", m.formatWithValidation({
                        pathname: t,
                        query: n
                    }), r), window.addEventListener("popstate", this.onPopState), window.addEventListener("unload", function () {
                        if (history.state) {
                            var e = history.state,
                                t = e.url,
                                n = e.as,
                                r = e.options;
                            a.changeState("replaceState", t, n, (0, c.default)({}, r, {
                                fromExternal: !0
                            }))
                        }
                    }))
                }
                var t, n;
                return (0, f.default)(e, [{
                    key: "update",
                    value: function (e, t) {
                        var n = this.components[e];
                        if (!n) throw new Error("Cannot update unavailable route: ".concat(e));
                        var r = (0, c.default)({}, n, {
                            Component: t
                        });
                        this.components[e] = r, "/_app" !== e ? e === this.route && this.notify(r) : this.notify(this.components[this.route])
                    }
                }, {
                    key: "reload",
                    value: function (t) {
                        var n = this;
                        return new s.default(function (r, o) {
                            if (delete n.components[t], n.pageLoader.clearCache(t), t !== n.route) return r();
                            var a = n.pathname,
                                i = n.query,
                                s = window.location.href,
                                c = window.location.pathname + window.location.search + window.location.hash;
                            e.events.emit("routeChangeStart", s), n.getRouteInfo(t, a, i, c).then(function (t) {
                                var a = t.error;
                                return a && a.cancelled ? r() : (n.notify(t), a ? (e.events.emit("routeChangeError", a, s), o(a)) : void e.events.emit("routeChangeComplete", s))
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
                    value: function (t, n, r, o) {
                        var a = this;
                        return new s.default(function (i, s) {
                            var u = "object" == typeof n ? m.formatWithValidation(n) : n,
                                l = "object" == typeof r ? m.formatWithValidation(r) : r;
                            if (__NEXT_DATA__.nextExport && (l = e._rewriteUrlForNextExport(l)), a.abortComponentLoad(l), a.onlyAHashChange(l)) return e.events.emit("hashChangeStart", l), a.changeState(t, u, l), a.scrollToHash(l), e.events.emit("hashChangeComplete", l), !0;
                            var f = h.parse(u, !0),
                                p = f.pathname,
                                d = f.query;
                            a.urlIsNew(l) || (t = "replaceState");
                            var y = v(p),
                                g = o.shallow,
                                b = void 0 !== g && g;
                            e.events.emit("routeChangeStart", l), a.getRouteInfo(y, p, d, l, b).then(function (n) {
                                var r = n.error;
                                if (r && r.cancelled) return i(!1);
                                e.events.emit("beforeHistoryChange", l), a.changeState(t, u, l, o);
                                var s = window.location.hash.substring(1);
                                if (a.set(y, p, d, l, (0, c.default)({}, n, {
                                        hash: s
                                    })), r) throw e.events.emit("routeChangeError", r, l), r;
                                return e.events.emit("routeChangeComplete", l), i(!0)
                            }, s)
                        })
                    }
                }, {
                    key: "changeState",
                    value: function (e, t, n) {
                        var r = arguments.length > 3 && void 0 !== arguments[3] ? arguments[3] : {};
                        "pushState" === e && m.getURL() === n || window.history[e]({
                            url: t,
                            as: n,
                            options: r
                        }, null, n)
                    }
                }, {
                    key: "getRouteInfo",
                    value: function (e, t, n, r) {
                        var o = this,
                            a = arguments.length > 4 && void 0 !== arguments[4] && arguments[4],
                            i = this.components[e];
                        return a && i && this.route === e ? s.default.resolve(i) : new s.default(function (t, n) {
                            if (i) return t(i);
                            o.fetchComponent(e).then(function (e) {
                                return t({
                                    Component: e
                                })
                            }, n)
                        }).then(function (a) {
                            var i = a.Component;
                            return new s.default(function (s, c) {
                                var u = {
                                    pathname: t,
                                    query: n,
                                    asPath: r
                                };
                                o.getInitialProps(i, u).then(function (t) {
                                    a.props = t, o.components[e] = a, s(a)
                                }, c)
                            })
                        }).catch(function (e) {
                            return new s.default(function (a) {
                                return "PAGE_LOAD_ERROR" === e.code ? (window.location.href = r, e.cancelled = !0, a({
                                    error: e
                                })) : e.cancelled ? a({
                                    error: e
                                }) : void a(o.fetchComponent("/_error").then(function (r) {
                                    var a = {
                                            Component: r,
                                            err: e
                                        },
                                        i = {
                                            err: e,
                                            pathname: t,
                                            query: n
                                        };
                                    return new s.default(function (t) {
                                        o.getInitialProps(r, i).then(function (n) {
                                            a.props = n, a.error = e, t(a)
                                        }, function (n) {
                                            console.error("Error in error page `getInitialProps`: ", n), a.error = e, a.props = {}, t(a)
                                        })
                                    })
                                }))
                            })
                        })
                    }
                }, {
                    key: "set",
                    value: function (e, t, n, r, o) {
                        this.route = e, this.pathname = t, this.query = n, this.asPath = r, this.notify(o)
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
                            r = n[0],
                            o = n[1],
                            a = e.split("#"),
                            s = (0, i.default)(a, 2),
                            c = s[0],
                            u = s[1];
                        return !(!u || r !== c || o !== u) || r === c && o !== u
                    }
                }, {
                    key: "scrollToHash",
                    value: function (e) {
                        var t = e.split("#"),
                            n = (0, i.default)(t, 2)[1];
                        if ("" !== n) {
                            var r = document.getElementById(n);
                            if (r) r.scrollIntoView();
                            else {
                                var o = document.getElementsByName(n)[0];
                                o && o.scrollIntoView()
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
                        return new s.default(function (n, r) {
                            var o = v(h.parse(e).pathname);
                            t.pageLoader.prefetch(o).then(n, r)
                        })
                    }
                }, {
                    key: "fetchComponent",
                    value: (n = (0, a.default)(o.default.mark(function e(t) {
                        var n, r, a, i;
                        return o.default.wrap(function (e) {
                            for (;;) switch (e.prev = e.next) {
                                case 0:
                                    return n = !1, r = this.componentLoadCancel = function () {
                                        n = !0
                                    }, e.next = 4, this.pageLoader.loadPage(t);
                                case 4:
                                    if (a = e.sent, !n) {
                                        e.next = 9;
                                        break
                                    }
                                    throw (i = new Error('Abort fetching component for route: "'.concat(t, '"'))).cancelled = !0, i;
                                case 9:
                                    return r === this.componentLoadCancel && (this.componentLoadCancel = null), e.abrupt("return", a);
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
                    value: (t = (0, a.default)(o.default.mark(function e(t, n) {
                        var r, a, i, s, c;
                        return o.default.wrap(function (e) {
                            for (;;) switch (e.prev = e.next) {
                                case 0:
                                    return r = !1, a = function () {
                                        r = !0
                                    }, this.componentLoadCancel = a, i = this.components["/_app"].Component, e.next = 6, m.loadGetInitialProps(i, {
                                        Component: t,
                                        router: this,
                                        ctx: n
                                    });
                                case 6:
                                    if (s = e.sent, a === this.componentLoadCancel && (this.componentLoadCancel = null), !r) {
                                        e.next = 12;
                                        break
                                    }
                                    throw (c = new Error("Loading initial props cancelled")).cancelled = !0, c;
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
                            return n((0, c.default)({}, e, {
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
                            r = n[0],
                            o = n[1],
                            a = r.split("?"),
                            s = (0, i.default)(a, 2),
                            c = s[0],
                            u = s[1];
                        return c = c.replace(/\/$/, ""), /\.[^\/]+\/?$/.test(c) || (c += "/"), u && (c += "?" + u), o && (c += "#" + o), c
                    }
                }]), e
            }();
            y.events = d.default(), t.default = y
        },
        HrG8: function (e, t, n) {
            "use strict";
            (function (e) {
                function n(e, t) {
                    for (var n = 0; n < t.length; n++) {
                        var r = t[n];
                        r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(e, r.key, r)
                    }
                }
                Object.defineProperty(t, "__esModule", {
                    value: !0
                }), t.default = void 0;
                var r = e.env && !0,
                    o = function (e) {
                        return "[object String]" === Object.prototype.toString.call(e)
                    },
                    a = function () {
                        function e() {
                            var t = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {},
                                n = t.name,
                                a = void 0 === n ? "stylesheet" : n,
                                s = t.optimizeForSpeed,
                                c = void 0 === s ? r : s,
                                u = t.isBrowser,
                                l = void 0 === u ? "undefined" != typeof window : u;
                            ! function (e, t) {
                                if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
                            }(this, e), i(o(a), "`name` must be a string"), this._name = a, this._deletedRulePlaceholder = "#".concat(a, "-deleted-rule____{}"), i("boolean" == typeof c, "`optimizeForSpeed` must be a boolean"), this._optimizeForSpeed = c, this._isBrowser = l, this._serverSheet = void 0, this._tags = [], this._injected = !1, this._rulesCount = 0;
                            var f = this._isBrowser && document.querySelector('meta[property="csp-nonce"]');
                            this._nonce = f ? f.getAttribute("content") : null
                        }
                        var t, a, s;
                        return t = e, (a = [{
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
                                if (i(!this._injected, "sheet already injected"), this._injected = !0, this._isBrowser && this._optimizeForSpeed) return this._tags[0] = this.makeStyleTag(this._name), this._optimizeForSpeed = "insertRule" in this.getSheet(), void(this._optimizeForSpeed || (r || console.warn("StyleSheet: optimizeForSpeed mode not supported falling back to standard mode."), this.flush(), this._injected = !0));
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
                                if (i(o(e), "`insertRule` accepts only strings"), !this._isBrowser) return "number" != typeof t && (t = this._serverSheet.cssRules.length), this._serverSheet.insertRule(e, t), this._rulesCount++;
                                if (this._optimizeForSpeed) {
                                    var n = this.getSheet();
                                    "number" != typeof t && (t = n.cssRules.length);
                                    try {
                                        n.insertRule(e, t)
                                    } catch (s) {
                                        return r || console.warn("StyleSheet: illegal rule: \n\n".concat(e, "\n\nSee https://stackoverflow.com/q/20007992 for more info")), -1
                                    }
                                } else {
                                    var a = this._tags[t];
                                    this._tags.push(this.makeStyleTag(this._name, e, a))
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
                                    } catch (a) {
                                        r || console.warn("StyleSheet: illegal rule: \n\n".concat(t, "\n\nSee https://stackoverflow.com/q/20007992 for more info")), n.insertRule(this._deletedRulePlaceholder, e)
                                    }
                                } else {
                                    var o = this._tags[e];
                                    i(o, "old rule at index `".concat(e, "` not found")), o.textContent = t
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
                                t && i(o(t), "makeStyleTag acceps only strings as second parameter");
                                var r = document.createElement("style");
                                this._nonce && r.setAttribute("nonce", this._nonce), r.type = "text/css", r.setAttribute("data-".concat(e), ""), t && r.appendChild(document.createTextNode(t));
                                var a = document.head || document.getElementsByTagName("head")[0];
                                return n ? a.insertBefore(r, n) : a.appendChild(r), r
                            }
                        }, {
                            key: "length",
                            get: function () {
                                return this._rulesCount
                            }
                        }]) && n(t.prototype, a), s && n(t, s), e
                    }();

                function i(e, t) {
                    if (!e) throw new Error("StyleSheet: ".concat(t, "."))
                }
                t.default = a
            }).call(this, n("5IsQ"))
        },
        IUx0: function (e, t, n) {
            var r = n("PPkd");
            e.exports = function (e, t, n) {
                for (var o in t) n && e[o] ? e[o] = t[o] : r(e, o, t[o]);
                return e
            }
        },
        "IXD+": function (e, t, n) {
            "use strict";
            var r = n("Yvct"),
                o = n("O/tV");
            e.exports = n("VX2v")("Set", function (e) {
                return function () {
                    return e(this, arguments.length > 0 ? arguments[0] : void 0)
                }
            }, {
                add: function (e) {
                    return r.def(o(this, "Set"), e = 0 === e ? 0 : e, e)
                }
            }, r)
        },
        "J/q3": function (e, t, n) {
            var r = n("hHgk");

            function o(e, t) {
                for (var n = 0; n < t.length; n++) {
                    var o = t[n];
                    o.enumerable = o.enumerable || !1, o.configurable = !0, "value" in o && (o.writable = !0), r(e, o.key, o)
                }
            }
            e.exports = function (e, t, n) {
                return t && o(e.prototype, t), n && o(e, n), e
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
            var r = function (e) {
                if (e && e.__esModule) return e;
                var t = {};
                if (null != e)
                    for (var n in e) Object.hasOwnProperty.call(e, n) && (t[n] = e[n]);
                return t.default = e, t
            };
            Object.defineProperty(t, "__esModule", {
                value: !0
            });
            var o = r(n("mXGw"));
            t.HeadManagerContext = o.createContext(null)
        },
        L7yD: function (e, t, n) {
            "use strict";
            var r = n("/6KZ"),
                o = n("WJTZ"),
                a = n("5tTa");
            r(r.S, "Promise", {
                try: function (e) {
                    var t = o.f(this),
                        n = a(e);
                    return (n.e ? t.reject : t.resolve)(n.v), t.promise
                }
            })
        },
        LuVv: function (e, t) {
            e.exports = function (e, t, n, r) {
                if (!(e instanceof t) || void 0 !== r && r in e) throw TypeError(n + ": incorrect invocation!");
                return e
            }
        },
        MNOf: function (e, t, n) {
            "use strict";

            function r(e, t) {
                return Object.prototype.hasOwnProperty.call(e, t)
            }
            e.exports = function (e, t, n, a) {
                t = t || "&", n = n || "=";
                var i = {};
                if ("string" != typeof e || 0 === e.length) return i;
                var s = /\+/g;
                e = e.split(t);
                var c = 1e3;
                a && "number" == typeof a.maxKeys && (c = a.maxKeys);
                var u = e.length;
                c > 0 && u > c && (u = c);
                for (var l = 0; l < u; ++l) {
                    var f, p, h, d, m = e[l].replace(s, "%20"),
                        v = m.indexOf(n);
                    v >= 0 ? (f = m.substr(0, v), p = m.substr(v + 1)) : (f = m, p = ""), h = decodeURIComponent(f), d = decodeURIComponent(p), r(i, h) ? o(i[h]) ? i[h].push(d) : i[h] = [i[h], d] : i[h] = d
                }
                return i
            };
            var o = Array.isArray || function (e) {
                return "[object Array]" === Object.prototype.toString.call(e)
            }
        },
        MUK1: function (e, t, n) {
            "use strict";
            var r = n("PL1w"),
                o = r(n("UrUy")),
                a = (r(n("1qCV")), r(n("R3/3")));
            Object.defineProperty(t, "__esModule", {
                value: !0
            });
            var i = n("so/P");

            function s() {
                var e = window.location,
                    t = e.protocol,
                    n = e.hostname,
                    r = e.port;
                return "".concat(t, "//").concat(n).concat(r ? ":" + r : "")
            }

            function c(e) {
                return "string" == typeof e ? e : e.displayName || e.name || "Unknown"
            }

            function u(e) {
                return e.finished || e.headersSent
            }

            function l() {
                return (l = (0, a.default)(o.default.mark(function e(t, n) {
                    var r, a;
                    return o.default.wrap(function (e) {
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
                                if (r = e.sent, !n.res || !u(n.res)) {
                                    e.next = 11;
                                    break
                                }
                                return e.abrupt("return", r);
                            case 11:
                                if (r) {
                                    e.next = 14;
                                    break
                                }
                                throw a = '"'.concat(c(t), '.getInitialProps()" should resolve to an object. But found "').concat(r, '" instead.'), new Error(a);
                            case 14:
                                return e.abrupt("return", r);
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
                        for (var r = arguments.length, o = new Array(r), a = 0; a < r; a++) o[a] = arguments[a];
                        e.apply(t, o)
                    }
                }
            }, t.getLocationOrigin = s, t.getURL = function () {
                var e = window.location.href,
                    t = s();
                return e.substring(t.length)
            }, t.getDisplayName = c, t.isResSent = u, t.loadGetInitialProps = function (e, t) {
                return l.apply(this, arguments)
            }, t.urlObjectKeys = ["auth", "hash", "host", "hostname", "href", "path", "pathname", "port", "protocol", "query", "search", "slashes"], t.formatWithValidation = function (e, t) {
                return i.format(e, t)
            }
        },
        NS33: function (e, t, n) {
            "use strict";
            var r = n("E02R");

            function o() {}
            e.exports = function () {
                function e(e, t, n, o, a, i) {
                    if (i !== r) {
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
                return n.checkPropTypes = o, n.PropTypes = n, n
            }
        },
        Ng5M: function (e, t, n) {
            var r = n("N9zW"),
                o = n("0Sp3")("iterator"),
                a = Array.prototype;
            e.exports = function (e) {
                return void 0 !== e && (r.Array === e || a[o] === e)
            }
        },
        NlCR: function (e, t, n) {
            var r = n("8Xl/"),
                o = n("6wgB"),
                a = n("dCrc"),
                i = n("gou2"),
                s = n("/YX7");
            e.exports = function (e, t) {
                var n = 1 == e,
                    c = 2 == e,
                    u = 3 == e,
                    l = 4 == e,
                    f = 6 == e,
                    p = 5 == e || f,
                    h = t || s;
                return function (t, s, d) {
                    for (var m, v, y = a(t), g = o(y), b = r(s, d, 3), w = i(g.length), x = 0, _ = n ? h(t, w) : c ? h(t, 0) : void 0; w > x; x++)
                        if ((p || x in g) && (v = b(m = g[x], x, y), e))
                            if (n) _[x] = v;
                            else if (v) switch (e) {
                        case 3:
                            return !0;
                        case 5:
                            return m;
                        case 6:
                            return x;
                        case 2:
                            _.push(m)
                    } else if (l) return !1;
                    return f ? -1 : u || l ? l : _
                }
            }
        },
        NluH: function (e, t, n) {
            var r = n("t+lh"),
                o = n("XzKa");

            function a(e) {
                return (a = "function" == typeof o && "symbol" == typeof r ? function (e) {
                    return typeof e
                } : function (e) {
                    return e && "function" == typeof o && e.constructor === o && e !== o.prototype ? "symbol" : typeof e
                })(e)
            }

            function i(t) {
                return "function" == typeof o && "symbol" === a(r) ? e.exports = i = function (e) {
                    return a(e)
                } : e.exports = i = function (e) {
                    return e && "function" == typeof o && e.constructor === o && e !== o.prototype ? "symbol" : a(e)
                }, i(t)
            }
            e.exports = i
        },
        "O/tV": function (e, t, n) {
            var r = n("fGh/");
            e.exports = function (e, t) {
                if (!r(e) || e._t !== t) throw TypeError("Incompatible receiver, " + t + " required!");
                return e
            }
        },
        OAWj: function (e, t, n) {
            e.exports = n("bdJ0")
        },
        Od8a: function (e, t, n) {
            var r = n("6Ndq"),
                o = n("g9SA");
            e.exports = function (e, t) {
                if ("function" != typeof t && null !== t) throw new TypeError("Super expression must either be null or a function");
                e.prototype = r(t && t.prototype, {
                    constructor: {
                        value: e,
                        writable: !0,
                        configurable: !0
                    }
                }), t && o(e, t)
            }
        },
        P8hI: function (e, t, n) {
            "use strict";
            var r = n("/6KZ"),
                o = n("TaGV"),
                a = n("41F1"),
                i = n("PK7I"),
                s = n("zafj");
            r(r.P + r.R, "Promise", {
                finally: function (e) {
                    var t = i(this, o.Promise || a.Promise),
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
            var r = n("ADe/"),
                o = n("HD3J"),
                a = n("0Sp3")("species");
            e.exports = function (e, t) {
                var n, i = r(e).constructor;
                return void 0 === i || null == (n = r(i)[a]) ? t : o(n)
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
                return r
            });
            var r = {
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
            var r = n("ZOIa"),
                o = n.n(r);

            function a(e, t, n, r, a, i, s) {
                try {
                    var c = e[i](s),
                        u = c.value
                } catch (l) {
                    return void n(l)
                }
                c.done ? t(u) : o.a.resolve(u).then(r, a)
            }

            function i(e) {
                return function () {
                    var t = this,
                        n = arguments;
                    return new o.a(function (r, o) {
                        var i = e.apply(t, n);

                        function s(e) {
                            a(i, r, o, s, c, "next", e)
                        }

                        function c(e) {
                            a(i, r, o, s, c, "throw", e)
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
            var r = n("z3IF"),
                o = n("LkAs"),
                a = n("Moms"),
                i = n("bMj6"),
                s = n("hZod"),
                c = n("YKN3"),
                u = n("tEuJ"),
                l = n("azxR"),
                f = n("YIwv"),
                p = n.n(f),
                h = n("5dyF"),
                d = n.n(h),
                m = n("mXGw"),
                v = n("EUvJ");

            function y(e) {
                return m.createElement("svg", Object(r.a)({}, e, {
                    width: "55",
                    height: "15",
                    viewBox: "0 0 55 15",
                    fill: "none",
                    xmlns: "http://www.w3.org/2000/svg"
                }), m.createElement("path", {
                    d: "M0.487393 14H8.86737V11.718H3.25515V0.909091H0.487393V14ZM10.6491 14H13.3722V4.18182H10.6491V14ZM12.017 3.01847C12.8097 3.01847 13.4936 2.41761 13.4936 1.63778C13.4936 0.864346 12.8097 0.263494 12.017 0.263494C11.2308 0.263494 10.5469 0.864346 10.5469 1.63778C10.5469 2.41761 11.2308 3.01847 12.017 3.01847ZM18.2765 8.32386C18.2828 7.05824 19.0371 6.31676 20.1365 6.31676C21.2296 6.31676 21.888 7.03267 21.8816 8.23438V14H24.6046V7.74858C24.6046 5.46023 23.2623 4.05398 21.2168 4.05398C19.7594 4.05398 18.7047 4.76989 18.2637 5.91406H18.1486V4.18182H15.5534V14H18.2765V8.32386ZM31.2507 14.1918C33.6861 14.1918 35.3161 13.0092 35.6996 11.1875L33.1875 11.0213C32.9126 11.7692 32.2031 12.1591 31.3018 12.1591C29.9403 12.1591 29.0774 11.2578 29.0774 9.79403V9.78764H35.7635V9.03977C35.7635 5.70312 33.7436 4.05398 31.1484 4.05398C28.2592 4.05398 26.3864 6.10582 26.3864 9.13565C26.3864 12.2486 28.2337 14.1918 31.2507 14.1918ZM29.0774 8.10014C29.1286 6.98153 29.9851 6.08665 31.1932 6.08665C32.3693 6.08665 33.1875 6.9304 33.2003 8.10014H29.0774ZM40.3786 14.1854C41.8295 14.1854 42.7692 13.5526 43.2486 12.6385H43.3253V14H45.9077V7.37784C45.9077 5.03835 43.907 4.05398 41.7848 4.05398C39.3686 4.05398 37.8409 5.17898 37.4638 6.96875L39.9822 7.1733C40.1676 6.52131 40.7493 6.0419 41.7273 6.0419C42.6669 6.0419 43.1783 6.50213 43.1847 7.3267C43.1911 7.9723 42.5135 8.06818 40.8068 8.23438C38.8636 8.41335 37.1186 9.06534 37.1186 11.2578C37.1186 13.201 38.5057 14.1854 40.3786 14.1854ZM41.1584 12.3061C40.321 12.3061 39.7202 11.9162 39.7202 11.1683C39.7202 10.4013 40.353 10.0241 41.3118 9.88991C41.9062 9.80682 42.8778 9.66619 43.2038 9.44886V10.4908C43.2038 11.5199 42.3537 12.3061 41.1584 12.3061ZM48.0202 14H50.7433V8.44531C50.7496 7.24361 51.619 6.41903 52.7184 6.41903C53.0891 6.41903 53.3896 6.52131 53.6452 6.64915L54.4634 4.39915C54.1055 4.18182 53.6452 4.04119 53.1211 4.04119C52.0153 4.04119 51.1204 4.6804 50.7624 5.89489H50.6602V4.18182H48.0202V14Z",
                    fill: "#F4F5FF"
                }))
            }
            var g = n("2CfY"),
                b = function () {
                    function e() {
                        Object(o.default)(this, e)
                    }
                    return Object(a.default)(e, null, [{
                        key: "supported",
                        get: function () {
                            return Object(g.getParser)(window.navigator.userAgent).satisfies(w) || !1
                        }
                    }]), e
                }(),
                w = {
                    chrome: ">=58",
                    safari: ">=10.1",
                    firefox: ">=51"
                },
                x = n("PeVk"),
                _ = n("fjcK");
            n.d(t, "a", function () {
                return E
            });
            var E = function (e) {
                    function t(e) {
                        var n;
                        return Object(o.default)(this, t), n = Object(i.default)(this, Object(s.default)(t).call(this, e)), Object(l.a)(Object(c.default)(n), "toggleMenu", function () {
                            n.setState({
                                menuOpen: !n.state.menuOpen
                            })
                        }), n.state = {
                            displayBrowserWarning: !1
                        }, n
                    }
                    return Object(u.default)(t, e), Object(a.default)(t, [{
                        key: "componentDidMount",
                        value: function () {
                            this.setState({
                                displayBrowserWarning: !b.supported
                            })
                        }
                    }, {
                        key: "render",
                        value: function () {
                            return m.createElement("header", {
                                className: p.a.dynamic([
                                    ["3885773449", [this.state.menuOpen ? "black" : "rgba(22, 22, 26, 0.85)"]]
                                ])
                            }, m.createElement("div", {
                                className: p.a.dynamic([
                                    ["3885773449", [this.state.menuOpen ? "black" : "rgba(22, 22, 26, 0.85)"]]
                                ]) + " contentContainer"
                            }, m.createElement(d.a, {
                                prefetch: !0,
                                href: "/"
                            }, m.createElement("a", {
                                style: {
                                    display: "flex",
                                    alignItems: "center"
                                },
                                className: p.a.dynamic([
                                    ["3885773449", [this.state.menuOpen ? "black" : "rgba(22, 22, 26, 0.85)"]]
                                ])
                            }, m.createElement(v.a, {
                                style: {
                                    width: "24px",
                                    height: "24px",
                                    marginRight: "12px"
                                }
                            }), m.createElement(y, {
                                style: {
                                    marginTop: "2px"
                                }
                            }))), m.createElement("div", {
                                onClick: this.toggleMenu,
                                className: p.a.dynamic([
                                    ["3885773449", [this.state.menuOpen ? "black" : "rgba(22, 22, 26, 0.85)"]]
                                ]) + " mobile menuToggle"
                            }, m.createElement(M, null)), m.createElement("div", {
                                className: p.a.dynamic([
                                    ["3885773449", [this.state.menuOpen ? "black" : "rgba(22, 22, 26, 0.85)"]]
                                ]) + " desktop"
                            }, m.createElement(k, {
                                displayBrowserWarning: this.state.displayBrowserWarning
                            }))), this.state.menuOpen && m.createElement("div", {
                                className: p.a.dynamic([
                                    ["3885773449", [this.state.menuOpen ? "black" : "rgba(22, 22, 26, 0.85)"]]
                                ]) + " mobile mobileMenu"
                            }, m.createElement(k, {
                                displayBrowserWarning: this.state.displayBrowserWarning
                            })), m.createElement(p.a, {
                                id: "3885773449",
                                dynamic: [this.state.menuOpen ? "black" : "rgba(22, 22, 26, 0.85)"]
                            }, ["header.__jsx-style-dynamic-selector{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;background-color:".concat(this.state.menuOpen ? "black" : "rgba(22, 22, 26, 0.85)", ";position:fixed;top:0;left:0;right:0;-webkit-align-items:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;border-bottom:1px solid rgba(255,255,255,0.1);z-index:2;-webkit-backdrop-filter:blur(5px);}"), "header.__jsx-style-dynamic-selector .contentContainer.__jsx-style-dynamic-selector{-webkit-box-flex:1;-webkit-flex-grow:1;-ms-flex-positive:1;flex-grow:1;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-align-items:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:justify;-webkit-justify-content:space-between;-ms-flex-pack:justify;justify-content:space-between;font-size:14px;-webkit-flex-shrink:0;-ms-flex-negative:0;flex-shrink:0;height:66px;}", ".mobile.__jsx-style-dynamic-selector{display:none;}", ".desktop.__jsx-style-dynamic-selector{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;}", ".mobileMenu.__jsx-style-dynamic-selector{width:100%;}", ".toggleMenu.__jsx-style-dynamic-selector{width:22px;height:22px;}", "@media (max-width:700px){.mobile.__jsx-style-dynamic-selector{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;}.desktop.__jsx-style-dynamic-selector{display:none;}}"]))
                        }
                    }]), t
                }(m.Component),
                k = function (e) {
                    return m.createElement(m.Fragment, null, m.createElement("div", {
                        className: p.a.dynamic([
                            ["1984380441", [x.a.controlLabel]]
                        ]) + " links"
                    }, m.createElement("a", {
                        href: "https://twitter.com/linear_app",
                        className: p.a.dynamic([
                            ["1984380441", [x.a.controlLabel]]
                        ]) + " secondary"
                    }, "Twitter"), m.createElement(d.a, {
                        href: "/changelog"
                    }, m.createElement("a", {
                        className: p.a.dynamic([
                            ["1984380441", [x.a.controlLabel]]
                        ]) + " secondary"
                    }, "Changelog")), m.createElement("a", {
                        href: e.displayBrowserWarning ? "/browser-compatibility" : _.d,
                        className: p.a.dynamic([
                            ["1984380441", [x.a.controlLabel]]
                        ]) + " signIn"
                    }, "Sign in")), m.createElement(p.a, {
                        id: "1984380441",
                        dynamic: [x.a.controlLabel]
                    }, [".links.__jsx-style-dynamic-selector{-webkit-box-pack:end;-webkit-justify-content:flex-end;-ms-flex-pack:end;justify-content:flex-end;width:100%;}", ".links.__jsx-style-dynamic-selector a.__jsx-style-dynamic-selector{margin-left:48px;font-size:14px;-webkit-text-decoration:none;text-decoration:none;}", ".links.__jsx-style-dynamic-selector a.secondary.__jsx-style-dynamic-selector{color:".concat(x.a.controlLabel, ";}"), ".links.__jsx-style-dynamic-selector a.signIn.__jsx-style-dynamic-selector{font-weight:600;}", "@media (max-width:700px){.links.__jsx-style-dynamic-selector{-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;padding:0 0 12px 24px;}.links.__jsx-style-dynamic-selector a.__jsx-style-dynamic-selector{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;padding:12px 0;margin-left:0px;font-size:16px;font-weight:400;color:#f4f5ff;}}"]))
                };

            function M(e) {
                return m.createElement(m.Fragment, null, m.createElement("svg", Object(r.a)({
                    width: "18",
                    height: "11",
                    viewBox: "0 0 18 11",
                    fill: "none",
                    xmlns: "http://www.w3.org/2000/svg"
                }, e), m.createElement("path", {
                    d: "M0 0H18V1H0V0Z",
                    fill: "white"
                }), m.createElement("path", {
                    d: "M0 10H18V11H0V10Z",
                    fill: "white"
                })))
            }
        },
        SY1S: function (e, t, n) {
            e.exports = n("UR6/")
        },
        SfGT: function (e, t, n) {
            var r = n("fGh/"),
                o = n("Jh4J"),
                a = n("0Sp3")("species");
            e.exports = function (e) {
                var t;
                return o(e) && ("function" != typeof (t = e.constructor) || t !== Array && !o(t.prototype) || (t = void 0), r(t) && null === (t = t[a]) && (t = void 0)), void 0 === t ? Array : t
            }
        },
        THQi: function (e, t, n) {
            "use strict";
            var r = function (e) {
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
                return t = t || "&", n = n || "=", null === e && (e = void 0), "object" == typeof e ? a(i(e), function (i) {
                    var s = encodeURIComponent(r(i)) + n;
                    return o(e[i]) ? a(e[i], function (e) {
                        return s + encodeURIComponent(r(e))
                    }).join(t) : s + encodeURIComponent(r(e[i]))
                }).join(t) : s ? encodeURIComponent(r(s)) + n + encodeURIComponent(r(e)) : ""
            };
            var o = Array.isArray || function (e) {
                return "[object Array]" === Object.prototype.toString.call(e)
            };

            function a(e, t) {
                if (e.map) return e.map(t);
                for (var n = [], r = 0; r < e.length; r++) n.push(t(e[r], r));
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
        Uz6G: function (e, t, n) {
            (window.__NEXT_P = window.__NEXT_P || []).push(["/privacy", function () {
                var e = n("nPQh");
                return {
                    page: e.default || e
                }
            }])
        },
        VJcA: function (e, t, n) {
            var r = n("/1nD"),
                o = n("0Sp3")("iterator"),
                a = n("N9zW");
            e.exports = n("TaGV").getIteratorMethod = function (e) {
                if (null != e) return e[o] || e["@@iterator"] || a[r(e)]
            }
        },
        VX2v: function (e, t, n) {
            "use strict";
            var r = n("41F1"),
                o = n("/6KZ"),
                a = n("hYpR"),
                i = n("/Vl9"),
                s = n("PPkd"),
                c = n("IUx0"),
                u = n("s9UB"),
                l = n("LuVv"),
                f = n("fGh/"),
                p = n("sWB5"),
                h = n("eOWL").f,
                d = n("NlCR")(0),
                m = n("lBnu");
            e.exports = function (e, t, n, v, y, g) {
                var b = r[e],
                    w = b,
                    x = y ? "set" : "add",
                    _ = w && w.prototype,
                    E = {};
                return m && "function" == typeof w && (g || _.forEach && !i(function () {
                    (new w).entries().next()
                })) ? (w = t(function (t, n) {
                    l(t, w, e, "_c"), t._c = new b, null != n && u(n, y, t[x], t)
                }), d("add,clear,delete,forEach,get,has,set,keys,values,entries,toJSON".split(","), function (e) {
                    var t = "add" == e || "set" == e;
                    e in _ && (!g || "clear" != e) && s(w.prototype, e, function (n, r) {
                        if (l(this, w, e), !t && g && !f(n)) return "get" == e && void 0;
                        var o = this._c[e](0 === n ? 0 : n, r);
                        return t ? this : o
                    })
                }), g || h(w.prototype, "size", {
                    get: function () {
                        return this._c.size
                    }
                })) : (w = v.getConstructor(t, e, y, x), c(w.prototype, n), a.NEED = !0), p(w, e), E[e] = w, o(o.G + o.W + o.F, E), g || v.setStrong(w, e, y), w
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
            var r = n("HD3J");

            function o(e) {
                var t, n;
                this.promise = new e(function (e, r) {
                    if (void 0 !== t || void 0 !== n) throw TypeError("Bad Promise constructor");
                    t = e, n = r
                }), this.resolve = r(t), this.reject = r(n)
            }
            e.exports.f = function (e) {
                return new o(e)
            }
        },
        XZM3: function (e, t, n) {
            n("pFlO")("Set")
        },
        Y9pn: function (e, t, n) {
            var r = function () {
                    return this || "object" == typeof self && self
                }() || Function("return this")(),
                o = r.regeneratorRuntime && Object.getOwnPropertyNames(r).indexOf("regeneratorRuntime") >= 0,
                a = o && r.regeneratorRuntime;
            if (r.regeneratorRuntime = void 0, e.exports = n("wcNg"), o) r.regeneratorRuntime = a;
            else try {
                delete r.regeneratorRuntime
            } catch (i) {
                r.regeneratorRuntime = void 0
            }
        },
        YIwv: function (e, t, n) {
            e.exports = n("s1G/")
        },
        Yvct: function (e, t, n) {
            "use strict";
            var r = n("eOWL").f,
                o = n("G+Zn"),
                a = n("IUx0"),
                i = n("8Xl/"),
                s = n("LuVv"),
                c = n("s9UB"),
                u = n("gMWQ"),
                l = n("TTxG"),
                f = n("hXZv"),
                p = n("lBnu"),
                h = n("hYpR").fastKey,
                d = n("O/tV"),
                m = p ? "_s" : "size",
                v = function (e, t) {
                    var n, r = h(t);
                    if ("F" !== r) return e._i[r];
                    for (n = e._f; n; n = n.n)
                        if (n.k == t) return n
                };
            e.exports = {
                getConstructor: function (e, t, n, u) {
                    var l = e(function (e, r) {
                        s(e, l, t, "_i"), e._t = t, e._i = o(null), e._f = void 0, e._l = void 0, e[m] = 0, null != r && c(r, n, e[u], e)
                    });
                    return a(l.prototype, {
                        clear: function () {
                            for (var e = d(this, t), n = e._i, r = e._f; r; r = r.n) r.r = !0, r.p && (r.p = r.p.n = void 0), delete n[r.i];
                            e._f = e._l = void 0, e[m] = 0
                        },
                        delete: function (e) {
                            var n = d(this, t),
                                r = v(n, e);
                            if (r) {
                                var o = r.n,
                                    a = r.p;
                                delete n._i[r.i], r.r = !0, a && (a.n = o), o && (o.p = a), n._f == r && (n._f = o), n._l == r && (n._l = a), n[m]--
                            }
                            return !!r
                        },
                        forEach: function (e) {
                            d(this, t);
                            for (var n, r = i(e, arguments.length > 1 ? arguments[1] : void 0, 3); n = n ? n.n : this._f;)
                                for (r(n.v, n.k, this); n && n.r;) n = n.p
                        },
                        has: function (e) {
                            return !!v(d(this, t), e)
                        }
                    }), p && r(l.prototype, "size", {
                        get: function () {
                            return d(this, t)[m]
                        }
                    }), l
                },
                def: function (e, t, n) {
                    var r, o, a = v(e, t);
                    return a ? a.v = n : (e._l = a = {
                        i: o = h(t, !0),
                        k: t,
                        v: n,
                        p: r = e._l,
                        n: void 0,
                        r: !1
                    }, e._f || (e._f = a), r && (r.n = a), e[m]++, "F" !== o && (e._i[o] = a)), e
                },
                getEntry: v,
                setStrong: function (e, t, n) {
                    u(e, t, function (e, n) {
                        this._t = d(e, t), this._k = n, this._l = void 0
                    }, function () {
                        for (var e = this._k, t = this._l; t && t.r;) t = t.p;
                        return this._t && (this._l = t = t ? t.n : this._t._f) ? l(0, "keys" == e ? t.k : "values" == e ? t.v : [t.k, t.v]) : (this._t = void 0, l(1))
                    }, n ? "entries" : "values", !n, !0), f(t)
                }
            }
        },
        ZOIa: function (e, t, n) {
            e.exports = n("6oba")
        },
        azxR: function (e, t, n) {
            "use strict";
            n.d(t, "a", function () {
                return a
            });
            var r = n("hHgk"),
                o = n.n(r);

            function a(e, t, n) {
                return t in e ? o()(e, t, {
                    value: n,
                    enumerable: !0,
                    configurable: !0,
                    writable: !0
                }) : e[t] = n, e
            }
        },
        bBV7: function (e, t, n) {
            "use strict";
            var r = n("PL1w"),
                o = r(n("U8Yc")),
                a = r(n("ied0")),
                i = r(n("hHgk")),
                s = function (e) {
                    return e && e.__esModule ? e : {
                        default: e
                    }
                };
            Object.defineProperty(t, "__esModule", {
                value: !0
            });
            var c = s(n("mXGw")),
                u = s(n("H09g"));
            t.Router = u.default;
            var l = n("4vxr"),
                f = n("kD9r"),
                p = {
                    router: null,
                    readyCallbacks: [],
                    ready: function (e) {
                        if (this.router) return e();
                        "undefined" != typeof window && this.readyCallbacks.push(e)
                    }
                },
                h = ["pathname", "route", "query", "asPath"],
                d = ["components"],
                m = ["push", "replace", "reload", "back", "prefetch", "beforePopState"];

            function v() {
                if (!p.router) {
                    throw new Error('No router instance found.\nYou should only use "next/router" inside the client side of your app.\n')
                }
                return p.router
            }
            Object.defineProperty(p, "events", {
                get: function () {
                    return u.default.events
                }
            }), d.concat(h).forEach(function (e) {
                (0, i.default)(p, e, {
                    get: function () {
                        return v()[e]
                    }
                })
            }), m.forEach(function (e) {
                p[e] = function () {
                    var t = v();
                    return t[e].apply(t, arguments)
                }
            }), ["routeChangeStart", "beforeHistoryChange", "routeChangeComplete", "routeChangeError", "hashChangeStart", "hashChangeComplete"].forEach(function (e) {
                p.ready(function () {
                    u.default.events.on(e, function () {
                        var t = "on".concat(e.charAt(0).toUpperCase()).concat(e.substring(1)),
                            n = p;
                        if (n[t]) try {
                            n[t].apply(n, arguments)
                        } catch (r) {
                            console.error("Error when running the Router event: ".concat(t)), console.error("".concat(r.message, "\n").concat(r.stack))
                        }
                    })
                })
            }), t.default = p;
            var y = n("/3ze");
            t.withRouter = y.default, t.useRouter = function () {
                return c.default.useContext(l.RouterContext)
            }, t.useRequest = function () {
                return c.default.useContext(f.RequestContext)
            }, t.createRouter = function () {
                for (var e = arguments.length, t = new Array(e), n = 0; n < e; n++) t[n] = arguments[n];
                return p.router = (0, a.default)(u.default, t), p.readyCallbacks.forEach(function (e) {
                    return e()
                }), p.readyCallbacks = [], p.router
            }, t.makePublicRouterInstance = function (e) {
                for (var t = e, n = {}, r = 0; r < h.length; r++) {
                    var a = h[r];
                    "object" != typeof t[a] ? n[a] = t[a] : n[a] = (0, o.default)({}, t[a])
                }
                return n.events = u.default.events, d.forEach(function (e) {
                    (0, i.default)(n, e, {
                        get: function () {
                            return t[e]
                        }
                    })
                }), m.forEach(function (e) {
                    n[e] = function () {
                        return t[e].apply(t, arguments)
                    }
                }), n
            }
        },
        bdJ0: function (e, t, n) {
            n("iKhv"), n("WwSA"), n("k/kI"), n("IXD+"), n("mVXz"), n("XZM3"), n("mPQl"), e.exports = n("TaGV").Set
        },
        cCv0: function (e, t, n) {
            var r, o, a, i = n("8Xl/"),
                s = n("qacR"),
                c = n("5gKE"),
                u = n("m/Uw"),
                l = n("41F1"),
                f = l.process,
                p = l.setImmediate,
                h = l.clearImmediate,
                d = l.MessageChannel,
                m = l.Dispatch,
                v = 0,
                y = {},
                g = function () {
                    var e = +this;
                    if (y.hasOwnProperty(e)) {
                        var t = y[e];
                        delete y[e], t()
                    }
                },
                b = function (e) {
                    g.call(e.data)
                };
            p && h || (p = function (e) {
                for (var t = [], n = 1; arguments.length > n;) t.push(arguments[n++]);
                return y[++v] = function () {
                    s("function" == typeof e ? e : Function(e), t)
                }, r(v), v
            }, h = function (e) {
                delete y[e]
            }, "process" == n("g2rQ")(f) ? r = function (e) {
                f.nextTick(i(g, e, 1))
            } : m && m.now ? r = function (e) {
                m.now(i(g, e, 1))
            } : d ? (a = (o = new d).port2, o.port1.onmessage = b, r = i(a.postMessage, a, 1)) : l.addEventListener && "function" == typeof postMessage && !l.importScripts ? (r = function (e) {
                l.postMessage(e + "", "*")
            }, l.addEventListener("message", b, !1)) : r = "onreadystatechange" in u("script") ? function (e) {
                c.appendChild(u("script")).onreadystatechange = function () {
                    c.removeChild(this), g.call(e)
                }
            } : function (e) {
                setTimeout(i(g, e, 1), 0)
            }), e.exports = {
                set: p,
                clear: h
            }
        },
        eoaJ: function (e, t, n) {
            "use strict";
            var r = function (e) {
                if (e && e.__esModule) return e;
                var t = {};
                if (null != e)
                    for (var n in e) Object.hasOwnProperty.call(e, n) && (t[n] = e[n]);
                return t.default = e, t
            };
            Object.defineProperty(t, "__esModule", {
                value: !0
            });
            var o = r(n("mXGw"));
            t.AmpModeContext = o.createContext({})
        },
        fjcK: function (e, t, n) {
            "use strict";
            n.d(t, "d", function () {
                return r
            }), n.d(t, "c", function () {
                return o
            }), n.d(t, "b", function () {
                return a
            }), n.d(t, "a", function () {
                return i
            });
            var r = "https://accounts.google.com/o/oauth2/v2/auth?\n  redirect_uri=".concat("https://linear.app/auth/google/callback", "&\n  response_type=code&\n  access_type=offline&\n  client_id=").concat("463717515632-5f96ed9uaue5p206umg9toffdbfmsfbm.apps.googleusercontent.com", "&\n  scope=").concat("https://www.googleapis.com/auth/userinfo.email%20https://www.googleapis.com/auth/userinfo.profile", "&\n  prompt=consent").replace(/\s/g, ""),
                o = "https://linearapp.typeform.com/to/jobhoX",
                a = "https://twitter.com/linear_app/",
                i = "https://newsletter.linear.app"
        },
        g9SA: function (e, t, n) {
            var r = n("OKNm");

            function o(t, n) {
                return e.exports = o = r || function (e, t) {
                    return e.__proto__ = t, e
                }, o(t, n)
            }
            e.exports = o
        },
        gDZL: function (e, t, n) {
            var r = n("41F1").navigator;
            e.exports = r && r.userAgent || ""
        },
        hDBU: function (e, t, n) {
            "use strict";
            n.r(t);
            var r = n("s20r"),
                o = n.n(r);
            var a = n("SY1S"),
                i = n.n(a);

            function s(e, t) {
                return function (e) {
                    if (o()(e)) return e
                }(e) || function (e, t) {
                    var n = [],
                        r = !0,
                        o = !1,
                        a = void 0;
                    try {
                        for (var s, c = i()(e); !(r = (s = c.next()).done) && (n.push(s.value), !t || n.length !== t); r = !0);
                    } catch (u) {
                        o = !0, a = u
                    } finally {
                        try {
                            r || null == c.return || c.return()
                        } finally {
                            if (o) throw a
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
        hXZv: function (e, t, n) {
            "use strict";
            var r = n("41F1"),
                o = n("TaGV"),
                a = n("eOWL"),
                i = n("lBnu"),
                s = n("0Sp3")("species");
            e.exports = function (e) {
                var t = "function" == typeof o[e] ? o[e] : r[e];
                i && t && !t[s] && a.f(t, s, {
                    configurable: !0,
                    get: function () {
                        return this
                    }
                })
            }
        },
        ied0: function (e, t, n) {
            var r = n("7mTa"),
                o = n("g9SA");

            function a(t, n, i) {
                return ! function () {
                    if ("undefined" == typeof Reflect || !r) return !1;
                    if (r.sham) return !1;
                    if ("function" == typeof Proxy) return !0;
                    try {
                        return Date.prototype.toString.call(r(Date, [], function () {})), !0
                    } catch (e) {
                        return !1
                    }
                }() ? e.exports = a = function (e, t, n) {
                    var r = [null];
                    r.push.apply(r, t);
                    var a = new(Function.bind.apply(e, r));
                    return n && o(a, n.prototype), a
                } : e.exports = a = r, a.apply(null, arguments)
            }
            e.exports = a
        },
        kD9r: function (e, t, n) {
            "use strict";
            var r = function (e) {
                if (e && e.__esModule) return e;
                var t = {};
                if (null != e)
                    for (var n in e) Object.hasOwnProperty.call(e, n) && (t[n] = e[n]);
                return t.default = e, t
            };
            Object.defineProperty(t, "__esModule", {
                value: !0
            });
            var o = r(n("mXGw"));
            t.RequestContext = o.createContext(null)
        },
        lphy: function (e, t, n) {
            (function (e, r) {
                var o;
                ! function (a) {
                    t && t.nodeType, e && e.nodeType;
                    var i = "object" == typeof r && r;
                    i.global !== i && i.window !== i && i.self;
                    var s, c = 2147483647,
                        u = 36,
                        l = 1,
                        f = 26,
                        p = 38,
                        h = 700,
                        d = 72,
                        m = 128,
                        v = "-",
                        y = /^xn--/,
                        g = /[^\x20-\x7E]/,
                        b = /[\x2E\u3002\uFF0E\uFF61]/g,
                        w = {
                            overflow: "Overflow: input needs wider integers to process",
                            "not-basic": "Illegal input >= 0x80 (not a basic code point)",
                            "invalid-input": "Invalid input"
                        },
                        x = u - l,
                        _ = Math.floor,
                        E = String.fromCharCode;

                    function k(e) {
                        throw new RangeError(w[e])
                    }

                    function M(e, t) {
                        for (var n = e.length, r = []; n--;) r[n] = t(e[n]);
                        return r
                    }

                    function S(e, t) {
                        var n = e.split("@"),
                            r = "";
                        return n.length > 1 && (r = n[0] + "@", e = n[1]), r + M((e = e.replace(b, ".")).split("."), t).join(".")
                    }

                    function T(e) {
                        for (var t, n, r = [], o = 0, a = e.length; o < a;)(t = e.charCodeAt(o++)) >= 55296 && t <= 56319 && o < a ? 56320 == (64512 & (n = e.charCodeAt(o++))) ? r.push(((1023 & t) << 10) + (1023 & n) + 65536) : (r.push(t), o--) : r.push(t);
                        return r
                    }

                    function C(e) {
                        return M(e, function (e) {
                            var t = "";
                            return e > 65535 && (t += E((e -= 65536) >>> 10 & 1023 | 55296), e = 56320 | 1023 & e), t += E(e)
                        }).join("")
                    }

                    function P(e, t) {
                        return e + 22 + 75 * (e < 26) - ((0 != t) << 5)
                    }

                    function D(e, t, n) {
                        var r = 0;
                        for (e = n ? _(e / h) : e >> 1, e += _(e / t); e > x * f >> 1; r += u) e = _(e / x);
                        return _(r + (x + 1) * e / (e + p))
                    }

                    function O(e) {
                        var t, n, r, o, a, i, s, p, h, y, g, b = [],
                            w = e.length,
                            x = 0,
                            E = m,
                            M = d;
                        for ((n = e.lastIndexOf(v)) < 0 && (n = 0), r = 0; r < n; ++r) e.charCodeAt(r) >= 128 && k("not-basic"), b.push(e.charCodeAt(r));
                        for (o = n > 0 ? n + 1 : 0; o < w;) {
                            for (a = x, i = 1, s = u; o >= w && k("invalid-input"), ((p = (g = e.charCodeAt(o++)) - 48 < 10 ? g - 22 : g - 65 < 26 ? g - 65 : g - 97 < 26 ? g - 97 : u) >= u || p > _((c - x) / i)) && k("overflow"), x += p * i, !(p < (h = s <= M ? l : s >= M + f ? f : s - M)); s += u) i > _(c / (y = u - h)) && k("overflow"), i *= y;
                            M = D(x - a, t = b.length + 1, 0 == a), _(x / t) > c - E && k("overflow"), E += _(x / t), x %= t, b.splice(x++, 0, E)
                        }
                        return C(b)
                    }

                    function j(e) {
                        var t, n, r, o, a, i, s, p, h, y, g, b, w, x, M, S = [];
                        for (b = (e = T(e)).length, t = m, n = 0, a = d, i = 0; i < b; ++i)(g = e[i]) < 128 && S.push(E(g));
                        for (r = o = S.length, o && S.push(v); r < b;) {
                            for (s = c, i = 0; i < b; ++i)(g = e[i]) >= t && g < s && (s = g);
                            for (s - t > _((c - n) / (w = r + 1)) && k("overflow"), n += (s - t) * w, t = s, i = 0; i < b; ++i)
                                if ((g = e[i]) < t && ++n > c && k("overflow"), g == t) {
                                    for (p = n, h = u; !(p < (y = h <= a ? l : h >= a + f ? f : h - a)); h += u) M = p - y, x = u - y, S.push(E(P(y + M % x, 0))), p = _(M / x);
                                    S.push(E(P(p, 0))), a = D(n, w, r == o), n = 0, ++r
                                }++ n, ++t
                        }
                        return S.join("")
                    }
                    s = {
                        version: "1.4.1",
                        ucs2: {
                            decode: T,
                            encode: C
                        },
                        decode: O,
                        encode: j,
                        toASCII: function (e) {
                            return S(e, function (e) {
                                return g.test(e) ? "xn--" + j(e) : e
                            })
                        },
                        toUnicode: function (e) {
                            return S(e, function (e) {
                                return y.test(e) ? O(e.slice(4).toLowerCase()) : e
                            })
                        }
                    }, void 0 === (o = function () {
                        return s
                    }.call(t, n, t, e)) || (e.exports = o)
                }()
            }).call(this, n("RoC8")(e), n("pCvA"))
        },
        lyqB: function (e, t, n) {
            var r = n("s9UB");
            e.exports = function (e, t) {
                var n = [];
                return r(e, !1, n.push, n, t), n
            }
        },
        mPQl: function (e, t, n) {
            n("+9rI")("Set")
        },
        mVXz: function (e, t, n) {
            var r = n("/6KZ");
            r(r.P + r.R, "Set", {
                toJSON: n("BGbK")("Set")
            })
        },
        mouY: function (e, t, n) {
            "use strict";
            n.d(t, "a", function () {
                return i
            });
            var r = n("0EY2"),
                o = n.n(r),
                a = n("mXGw"),
                i = function (e) {
                    var t = e.title || "Linear – The issue tracking tool you'll enjoy using",
                        n = e.description || "Linear lets you manage software development and track bugs. Linear's streamlined design is built for speed and efficiency — helping high performing teams accomplish great things.";
                    return a.createElement(o.a, null, a.createElement("title", null, t), a.createElement("meta", {
                        name: "viewport",
                        content: "width=device-width, initial-scale=1, shrink-to-fit=no"
                    }), a.createElement("meta", {
                        name: "theme-color",
                        content: "#1B1A16"
                    }), a.createElement("link", {
                        rel: "shortcut icon",
                        href: "/static/favicon.ico"
                    }), a.createElement("link", {
                        rel: "apple-touch-icon",
                        sizes: "180x180",
                        href: "/static/apple-touch-icon.png"
                    }), a.createElement("link", {
                        rel: "mask-icon",
                        href: "/static/linear-safari.svg",
                        color: "#5E6AD2;"
                    }), a.createElement("meta", {
                        charSet: "utf-8"
                    }), a.createElement("meta", {
                        name: "description",
                        content: n
                    }), a.createElement("meta", {
                        name: "twitter:card",
                        content: "summary"
                    }), a.createElement("meta", {
                        name: "twitter:title",
                        content: "Linear"
                    }), a.createElement("meta", {
                        name: "twitter:description",
                        content: n
                    }), a.createElement("meta", {
                        name: "twitter:site",
                        content: "@linear_app"
                    }), a.createElement("meta", {
                        property: "twitter:image",
                        content: "https://linear.app/static/metaImage3.png"
                    }), a.createElement("meta", {
                        name: "og:title",
                        content: "Linear"
                    }), a.createElement("meta", {
                        name: "og:description",
                        content: n
                    }), a.createElement("meta", {
                        name: "og:url",
                        content: "https://linear.app"
                    }), a.createElement("meta", {
                        name: "og:site_name",
                        content: "Linear"
                    }), a.createElement("meta", {
                        name: "og:type",
                        content: "website"
                    }), a.createElement("meta", {
                        property: "og:image",
                        content: "https://linear.app/static/metaImage3.png"
                    }))
                }
        },
        nPQh: function (e, t, n) {
            "use strict";
            n.r(t), n.d(t, "default", function () {
                return g
            });
            var r = n("U8Yc"),
                o = n.n(r),
                a = n("2Fjn"),
                i = n("LkAs"),
                s = n("Moms"),
                c = n("bMj6"),
                u = n("hZod"),
                l = n("tEuJ"),
                f = n("mXGw"),
                p = n.n(f),
                h = n("dDab"),
                d = n("0EY2"),
                m = n.n(d),
                v = n("9yyn"),
                y = {},
                g = function (e) {
                    function t(e) {
                        var n;
                        return Object(i.default)(this, t), (n = Object(c.default)(this, Object(u.default)(t).call(this, e))).layout = v.a, n
                    }
                    return Object(l.default)(t, e), Object(s.default)(t, [{
                        key: "render",
                        value: function () {
                            var e = this.props,
                                t = e.components,
                                n = Object(a.a)(e, ["components"]);
                            return p.a.createElement(h.MDXTag, {
                                name: "wrapper",
                                Layout: this.layout,
                                layoutProps: o()({}, y, n),
                                components: t
                            }, p.a.createElement(m.a, null, p.a.createElement("title", null, "Privacy policy")), p.a.createElement(h.MDXTag, {
                                name: "h1",
                                components: t
                            }, "Privacy policy"), p.a.createElement(h.MDXTag, {
                                name: "p",
                                components: t
                            }, p.a.createElement(h.MDXTag, {
                                name: "em",
                                components: t,
                                parentName: "p"
                            }, "Effective date: 03/27/2019")), p.a.createElement(h.MDXTag, {
                                name: "h2",
                                components: t
                            }, "Introduction"), p.a.createElement(h.MDXTag, {
                                name: "p",
                                components: t
                            }, "Welcome to ", p.a.createElement(h.MDXTag, {
                                name: "strong",
                                components: t,
                                parentName: "p"
                            }, "Linear Orbit, Inc.")), p.a.createElement(h.MDXTag, {
                                name: "p",
                                components: t
                            }, "Linear Orbit, Inc. (“us”, “we”, or “our”) operates ", p.a.createElement(h.MDXTag, {
                                name: "a",
                                components: t,
                                parentName: "p",
                                props: {
                                    href: "https://linear.app"
                                }
                            }, "linear.app"), " and Linear desktop application (hereinafter referred to as “", p.a.createElement(h.MDXTag, {
                                name: "strong",
                                components: t,
                                parentName: "p"
                            }, "Service"), "”)."), p.a.createElement(h.MDXTag, {
                                name: "p",
                                components: t
                            }, "Our Privacy Policy governs your visit to ", p.a.createElement(h.MDXTag, {
                                name: "a",
                                components: t,
                                parentName: "p",
                                props: {
                                    href: "https://linear.app"
                                }
                            }, "linear.app"), " and Linear desktop application, and explains how we collect, safeguard and disclose information that results from your use of our Service."), p.a.createElement(h.MDXTag, {
                                name: "p",
                                components: t
                            }, "We use your data to provide and improve Service. By using Service, you agree to the collection and use of information in accordance with this policy. Unless otherwise defined in this Privacy Policy, the terms used in this Privacy Policy have the same meanings as in our Terms and Conditions."), p.a.createElement(h.MDXTag, {
                                name: "p",
                                components: t
                            }, "Our Terms and Conditions (“", p.a.createElement(h.MDXTag, {
                                name: "strong",
                                components: t,
                                parentName: "p"
                            }, "Terms"), "”) govern all use of our Service and together with the Privacy Policy constitutes your agreement with us (“", p.a.createElement(h.MDXTag, {
                                name: "strong",
                                components: t,
                                parentName: "p"
                            }, "agreement"), "”)."), p.a.createElement(h.MDXTag, {
                                name: "h2",
                                components: t
                            }, "Definitions"), p.a.createElement(h.MDXTag, {
                                name: "p",
                                components: t
                            }, p.a.createElement(h.MDXTag, {
                                name: "strong",
                                components: t,
                                parentName: "p"
                            }, "SERVICE"), " means the ", p.a.createElement(h.MDXTag, {
                                name: "a",
                                components: t,
                                parentName: "p",
                                props: {
                                    href: "https://linear.app"
                                }
                            }, "linear.app"), " website and Linear desktop application operated by Linear Orbit, Inc."), p.a.createElement(h.MDXTag, {
                                name: "p",
                                components: t
                            }, p.a.createElement(h.MDXTag, {
                                name: "strong",
                                components: t,
                                parentName: "p"
                            }, "PERSONAL DATA"), " means data about a living individual who can be identified from those data (or from those and other information either in our possession or likely to come into our possession)."), p.a.createElement(h.MDXTag, {
                                name: "p",
                                components: t
                            }, p.a.createElement(h.MDXTag, {
                                name: "strong",
                                components: t,
                                parentName: "p"
                            }, "USAGE DATA"), " is data collected automatically either generated by the use of Service or from Service infrastructure itself (for example, the duration of a page visit)."), p.a.createElement(h.MDXTag, {
                                name: "p",
                                components: t
                            }, p.a.createElement(h.MDXTag, {
                                name: "strong",
                                components: t,
                                parentName: "p"
                            }, "COOKIES"), " are small files stored on your device (computer or mobile device)."), p.a.createElement(h.MDXTag, {
                                name: "p",
                                components: t
                            }, p.a.createElement(h.MDXTag, {
                                name: "strong",
                                components: t,
                                parentName: "p"
                            }, "DATA CONTROLLER"), " means a natural or legal person who (either alone or jointly or in common with other persons) determines the purposes for which and the manner in which any personal data are, or are to be, processed. For the purpose of this Privacy Policy, we are a Data Controller of your data."), p.a.createElement(h.MDXTag, {
                                name: "p",
                                components: t
                            }, p.a.createElement(h.MDXTag, {
                                name: "strong",
                                components: t,
                                parentName: "p"
                            }, "DATA PROCESSORS (OR SERVICE PROVIDERS)"), " means any natural or legal person who processes the data on behalf of the Data Controller. We may use the services of various Service Providers in order to process your data more effectively."), p.a.createElement(h.MDXTag, {
                                name: "p",
                                components: t
                            }, p.a.createElement(h.MDXTag, {
                                name: "strong",
                                components: t,
                                parentName: "p"
                            }, "DATA SUBJECT"), " is any living individual who is the subject of Personal Data."), p.a.createElement(h.MDXTag, {
                                name: "p",
                                components: t
                            }, p.a.createElement(h.MDXTag, {
                                name: "strong",
                                components: t,
                                parentName: "p"
                            }, "THE USER"), " is the individual using our Service. The User corresponds to the Data Subject, who is the subject of Personal Data."), p.a.createElement(h.MDXTag, {
                                name: "h2",
                                components: t
                            }, "Information Collection and Use"), p.a.createElement(h.MDXTag, {
                                name: "p",
                                components: t
                            }, "We collect several different types of information for various purposes to provide and improve our Service to you."), p.a.createElement(h.MDXTag, {
                                name: "h2",
                                components: t
                            }, "Types of Data Collected"), p.a.createElement(h.MDXTag, {
                                name: "p",
                                components: t
                            }, p.a.createElement(h.MDXTag, {
                                name: "strong",
                                components: t,
                                parentName: "p"
                            }, "Personal Data")), p.a.createElement(h.MDXTag, {
                                name: "p",
                                components: t
                            }, "While using our Service, we may ask you to provide us with certain personally identifiable information that can be used to contact or identify you (“", p.a.createElement(h.MDXTag, {
                                name: "strong",
                                components: t,
                                parentName: "p"
                            }, "Personal Data"), "”). Personally identifiable information may include, but is not limited to:"), p.a.createElement(h.MDXTag, {
                                name: "ol",
                                components: t
                            }, p.a.createElement(h.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ol"
                            }, p.a.createElement(h.MDXTag, {
                                name: "p",
                                components: t,
                                parentName: "li"
                            }, "Email address")), p.a.createElement(h.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ol"
                            }, p.a.createElement(h.MDXTag, {
                                name: "p",
                                components: t,
                                parentName: "li"
                            }, "First name and last name")), p.a.createElement(h.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ol"
                            }, p.a.createElement(h.MDXTag, {
                                name: "p",
                                components: t,
                                parentName: "li"
                            }, "Cookies and Usage Data"))), p.a.createElement(h.MDXTag, {
                                name: "p",
                                components: t
                            }, "We may use your Personal Data to contact you with newsletters, marketing or promotional materials and other information that may be of interest to you. You may opt out of receiving any, or all, of these communications from us by following the unsubscribe link."), p.a.createElement(h.MDXTag, {
                                name: "p",
                                components: t
                            }, p.a.createElement(h.MDXTag, {
                                name: "strong",
                                components: t,
                                parentName: "p"
                            }, "Usage Data")), p.a.createElement(h.MDXTag, {
                                name: "p",
                                components: t
                            }, "We may also collect information that your browser sends whenever you visit our Service or when you access Service by or through a mobile device (“", p.a.createElement(h.MDXTag, {
                                name: "strong",
                                components: t,
                                parentName: "p"
                            }, "Usage Data"), "”)."), p.a.createElement(h.MDXTag, {
                                name: "p",
                                components: t
                            }, "This Usage Data may include information such as your computer's Internet Protocol address (e.g. IP address), browser type, browser version, the pages of our Service that you visit, the time and date of your visit, the time spent on those pages, unique device identifiers and other diagnostic data."), p.a.createElement(h.MDXTag, {
                                name: "p",
                                components: t
                            }, "When you access Service with a mobile device, this Usage Data may include information such as the type of mobile device you use, your mobile device unique ID, the IP address of your mobile device, your mobile operating system, the type of mobile Internet browser you use, unique device identifiers and other diagnostic data."), p.a.createElement(h.MDXTag, {
                                name: "p",
                                components: t
                            }, p.a.createElement(h.MDXTag, {
                                name: "strong",
                                components: t,
                                parentName: "p"
                            }, "Tracking Cookies Data")), p.a.createElement(h.MDXTag, {
                                name: "p",
                                components: t
                            }, "We use cookies and similar tracking technologies to track the activity on our Service and we hold certain information."), p.a.createElement(h.MDXTag, {
                                name: "p",
                                components: t
                            }, "Cookies are files with a small amount of data which may include an anonymous unique identifier. Cookies are sent to your browser from a website and stored on your device. Other tracking technologies are also used such as beacons, tags and scripts to collect and track information and to improve and analyze our Service."), p.a.createElement(h.MDXTag, {
                                name: "p",
                                components: t
                            }, "You can instruct your browser to refuse all cookies or to indicate when a cookie is being sent. However, if you do not accept cookies, you may not be able to use some portions of our Service."), p.a.createElement(h.MDXTag, {
                                name: "p",
                                components: t
                            }, "Examples of Cookies we use:"), p.a.createElement(h.MDXTag, {
                                name: "ol",
                                components: t
                            }, p.a.createElement(h.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ol"
                            }, p.a.createElement(h.MDXTag, {
                                name: "strong",
                                components: t,
                                parentName: "li"
                            }, "Session Cookies:"), " We use Session Cookies to operate our Service."), p.a.createElement(h.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ol"
                            }, p.a.createElement(h.MDXTag, {
                                name: "strong",
                                components: t,
                                parentName: "li"
                            }, "Preference Cookies:"), " We use Preference Cookies to remember your preferences and various settings."), p.a.createElement(h.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ol"
                            }, p.a.createElement(h.MDXTag, {
                                name: "strong",
                                components: t,
                                parentName: "li"
                            }, "Security Cookies:"), " We use Security Cookies for security purposes."), p.a.createElement(h.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ol"
                            }, p.a.createElement(h.MDXTag, {
                                name: "strong",
                                components: t,
                                parentName: "li"
                            }, "Advertising Cookies:"), " Advertising Cookies are used to serve you with advertisements that may be relevant to you and your interests.")), p.a.createElement(h.MDXTag, {
                                name: "h2",
                                components: t
                            }, "Use of Data"), p.a.createElement(h.MDXTag, {
                                name: "p",
                                components: t
                            }, "Linear Orbit, Inc. uses the collected data for various purposes:"), p.a.createElement(h.MDXTag, {
                                name: "ol",
                                components: t
                            }, p.a.createElement(h.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ol"
                            }, "To provide and maintain our Service;"), p.a.createElement(h.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ol"
                            }, "To notify you about changes to our Service;"), p.a.createElement(h.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ol"
                            }, "To allow you to participate in interactive features of our Service when you choose to do so;"), p.a.createElement(h.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ol"
                            }, "To provide customer support;"), p.a.createElement(h.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ol"
                            }, "To gather analysis or valuable information so that we can improve our Service;"), p.a.createElement(h.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ol"
                            }, "To monitor the usage of our Service;"), p.a.createElement(h.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ol"
                            }, "To detect, prevent and address technical issues;"), p.a.createElement(h.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ol"
                            }, "To fulfill any other purpose for which you provide it;"), p.a.createElement(h.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ol"
                            }, "To carry out our obligations and enforce our rights arising from any contracts entered into between you and us, including for billing and collection;"), p.a.createElement(h.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ol"
                            }, "To provide you with notices about your account and/or subscription, including expiration and renewal notices, email-instructions, etc.;"), p.a.createElement(h.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ol"
                            }, "To provide you with news, special offers and general information about other goods, services and events which we offer that are similar to those that you have already purchased or enquired about unless you have opted not to receive such information;"), p.a.createElement(h.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ol"
                            }, "In any other way we may describe when you provide the information;"), p.a.createElement(h.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ol"
                            }, "For any other purpose with your consent.")), p.a.createElement(h.MDXTag, {
                                name: "h2",
                                components: t
                            }, "Retention of Data"), p.a.createElement(h.MDXTag, {
                                name: "p",
                                components: t
                            }, "We will retain your Personal Data only for as long as is necessary for the purposes set out in this Privacy Policy. We will retain and use your Personal Data to the extent necessary to comply with our legal obligations (for example, if we are required to retain your data to comply with applicable laws), resolve disputes, and enforce our legal agreements and policies."), p.a.createElement(h.MDXTag, {
                                name: "p",
                                components: t
                            }, "We will also retain Usage Data for internal analysis purposes. Usage Data is generally retained for a shorter period, except when this data is used to strengthen the security or to improve the functionality of our Service, or we are legally obligated to retain this data for longer time periods."), p.a.createElement(h.MDXTag, {
                                name: "h2",
                                components: t
                            }, "Transfer of Data"), p.a.createElement(h.MDXTag, {
                                name: "p",
                                components: t
                            }, "Your information, including Personal Data, may be transferred to – and maintained on – computers located outside of your state, province, country or other governmental jurisdiction where the data protection laws may differ from those of your jurisdiction."), p.a.createElement(h.MDXTag, {
                                name: "p",
                                components: t
                            }, "If you are located outside United States and choose to provide information to us, please note that we transfer the data, including Personal Data, to United States and process it there."), p.a.createElement(h.MDXTag, {
                                name: "p",
                                components: t
                            }, "Your consent to this Privacy Policy followed by your submission of such information represents your agreement to that transfer."), p.a.createElement(h.MDXTag, {
                                name: "p",
                                components: t
                            }, "Linear Orbit, Inc. will take all the steps reasonably necessary to ensure that your data is treated securely and in accordance with this Privacy Policy and no transfer of your Personal Data will take place to an organisation or a country unless there are adequate controls in place including the security of your data and other personal information."), p.a.createElement(h.MDXTag, {
                                name: "h2",
                                components: t
                            }, "Disclosure of Data"), p.a.createElement(h.MDXTag, {
                                name: "p",
                                components: t
                            }, "We may disclose personal information that we collect, or you provide:"), p.a.createElement(h.MDXTag, {
                                name: "p",
                                components: t
                            }, p.a.createElement(h.MDXTag, {
                                name: "strong",
                                components: t,
                                parentName: "p"
                            }, "Disclosure for Law Enforcement.")), p.a.createElement(h.MDXTag, {
                                name: "p",
                                components: t
                            }, "Under certain circumstances, we may be required to disclose your Personal Data if required to do so by law or in response to valid requests by public authorities."), p.a.createElement(h.MDXTag, {
                                name: "p",
                                components: t
                            }, p.a.createElement(h.MDXTag, {
                                name: "strong",
                                components: t,
                                parentName: "p"
                            }, " Business Transaction.")), p.a.createElement(h.MDXTag, {
                                name: "p",
                                components: t
                            }, "If we or our subsidiaries are involved in a merger, acquisition or asset sale, your Personal Data may be transferred."), p.a.createElement(h.MDXTag, {
                                name: "ol",
                                components: t
                            }, p.a.createElement(h.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ol"
                            }, p.a.createElement(h.MDXTag, {
                                name: "strong",
                                components: t,
                                parentName: "li"
                            }, "Other cases. We may disclose your information also:"))), p.a.createElement(h.MDXTag, {
                                name: "ul",
                                components: t
                            }, p.a.createElement(h.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "To our subsidiaries and affiliates;"), p.a.createElement(h.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ul"
                            }, "To fulfill the purpose for which you provide it;")), p.a.createElement(h.MDXTag, {
                                name: "h2",
                                components: t
                            }, "Security of Data"), p.a.createElement(h.MDXTag, {
                                name: "p",
                                components: t
                            }, "The security of your data is important to us but remember that no method of transmission over the Internet or method of electronic storage is 100% secure. While we strive to use commercially acceptable means to protect your Personal Data, we cannot guarantee its absolute security."), p.a.createElement(h.MDXTag, {
                                name: "h2",
                                components: t
                            }, "Your Data Protection Rights Under General Data Protection Regulation (GDPR)"), p.a.createElement(h.MDXTag, {
                                name: "p",
                                components: t
                            }, "If you are a resident of the European Union (EU) and European Economic Area (EEA), you have certain data protection rights, covered by GDPR. – See more at ", p.a.createElement(h.MDXTag, {
                                name: "a",
                                components: t,
                                parentName: "p",
                                props: {
                                    href: "https://eur-lex.europa.eu/eli/reg/2016/679/oj"
                                }
                            }, "https://eur-lex.europa.eu/eli/reg/2016/679/oj")), p.a.createElement(h.MDXTag, {
                                name: "p",
                                components: t
                            }, "We aim to take reasonable steps to allow you to correct, amend, delete, or limit the use of your Personal Data."), p.a.createElement(h.MDXTag, {
                                name: "p",
                                components: t
                            }, "If you wish to be informed what Personal Data we hold about you and if you want it to be removed from our systems, please email us at contact@linear.app."), p.a.createElement(h.MDXTag, {
                                name: "p",
                                components: t
                            }, "In certain circumstances, you have the following data protection rights:"), p.a.createElement(h.MDXTag, {
                                name: "ol",
                                components: t
                            }, p.a.createElement(h.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ol"
                            }, "The right to access, update or to delete the information we have on you."), p.a.createElement(h.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ol"
                            }, "The right of rectification. You have the right to have your information rectified if that information is inaccurate or incomplete."), p.a.createElement(h.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ol"
                            }, "The right to object. You have the right to object to our processing of your Personal Data."), p.a.createElement(h.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ol"
                            }, "The right of restriction. You have the right to request that we restrict the processing of your personal information."), p.a.createElement(h.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ol"
                            }, "The right to data portability. You have the right to be provided with a copy of your Personal Data in a structured, machine-readable and commonly used format."), p.a.createElement(h.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ol"
                            }, "The right to withdraw consent. You also have the right to withdraw your consent at any time where we rely on your consent to process your personal information.")), p.a.createElement(h.MDXTag, {
                                name: "p",
                                components: t
                            }, "Please note that we may ask you to verify your identity before responding to such requests. Please note, we may not able to provide Service without some necessary data."), p.a.createElement(h.MDXTag, {
                                name: "p",
                                components: t
                            }, "You have the right to complain to a Data Protection Authority about our collection and use of your Personal Data. For more information, please contact your local data protection authority in the European Economic Area (EEA)."), p.a.createElement(h.MDXTag, {
                                name: "h2",
                                components: t
                            }, "Your Data Protection Rights under the California Privacy Protection Act (CalOPPA)"), p.a.createElement(h.MDXTag, {
                                name: "p",
                                components: t
                            }, "CalOPPA is the first state law in the nation to require commercial websites and online services to post a privacy policy. The law’s reach stretches well beyond California to require a person or company in the United States (and conceivable the world) that operates websites collecting personally identifiable information from California consumers to post a conspicuous privacy policy on its website stating exactly the information being collected and those individuals with whom it is being shared, and to comply with this policy. – See more at: ", p.a.createElement(h.MDXTag, {
                                name: "a",
                                components: t,
                                parentName: "p",
                                props: {
                                    href: "https://consumercal.org/about-cfc/cfc-education-foundation/california-online-privacy-protection-act-caloppa-3/"
                                }
                            }, "https://consumercal.org/about-cfc/cfc-education-foundation/california-online-privacy-protection-act-caloppa-3/")), p.a.createElement(h.MDXTag, {
                                name: "p",
                                components: t
                            }, "According to CalOPPA we agree to the following:"), p.a.createElement(h.MDXTag, {
                                name: "ol",
                                components: t
                            }, p.a.createElement(h.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ol"
                            }, "Users can visit our site anonymously;"), p.a.createElement(h.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ol"
                            }, "Our Privacy Policy link includes the word “Privacy”, and can easily be found on the page specified above on the home page of our website;"), p.a.createElement(h.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ol"
                            }, "Users will be notified of any privacy policy changes on our Privacy Policy Page;"), p.a.createElement(h.MDXTag, {
                                name: "li",
                                components: t,
                                parentName: "ol"
                            }, "Users are able to change their personal information by emailing us at contact@linear.app.")), p.a.createElement(h.MDXTag, {
                                name: "p",
                                components: t
                            }, "Our Policy on “Do Not Track” Signals:"), p.a.createElement(h.MDXTag, {
                                name: "p",
                                components: t
                            }, "We honor Do Not Track signals and do not track, plant cookies, or use advertising when a Do Not Track browser mechanism is in place. Do Not Track is a preference you can set in your web browser to inform websites that you do not want to be tracked."), p.a.createElement(h.MDXTag, {
                                name: "p",
                                components: t
                            }, "You can enable or disable Do Not Track by visiting the Preferences or Settings page of your web browser."), p.a.createElement(h.MDXTag, {
                                name: "h2",
                                components: t
                            }, "Service Providers"), p.a.createElement(h.MDXTag, {
                                name: "p",
                                components: t
                            }, "We may employ third party companies and individuals to facilitate our Service (“", p.a.createElement(h.MDXTag, {
                                name: "strong",
                                components: t,
                                parentName: "p"
                            }, "Service Providers"), "”), provide Service on our behalf, perform Service-related services or assist us in analysing how our Service is used."), p.a.createElement(h.MDXTag, {
                                name: "p",
                                components: t
                            }, "These third parties have access to your Personal Data only to perform these tasks on our behalf and are obligated not to disclose or use it for any other purpose."), p.a.createElement(h.MDXTag, {
                                name: "h2",
                                components: t
                            }, "Analytics"), p.a.createElement(h.MDXTag, {
                                name: "p",
                                components: t
                            }, "We may use third-party Service Providers to monitor and analyze the use of our Service."), p.a.createElement(h.MDXTag, {
                                name: "p",
                                components: t
                            }, p.a.createElement(h.MDXTag, {
                                name: "strong",
                                components: t,
                                parentName: "p"
                            }, "Google Analytics")), p.a.createElement(h.MDXTag, {
                                name: "p",
                                components: t
                            }, "Google Analytics is a web analytics service offered by Google that tracks and reports website traffic. Google uses the data collected to track and monitor the use of our Service. This data is shared with other Google services. Google may use the collected data to contextualise and personalise the ads of its own advertising network."), p.a.createElement(h.MDXTag, {
                                name: "p",
                                components: t
                            }, "For more information on the privacy practices of Google, please visit the Google Privacy Terms web page: ", p.a.createElement(h.MDXTag, {
                                name: "a",
                                components: t,
                                parentName: "p",
                                props: {
                                    href: "https://policies.google.com/privacy?hl=en"
                                }
                            }, "https://policies.google.com/privacy?hl=en")), p.a.createElement(h.MDXTag, {
                                name: "p",
                                components: t
                            }, "We also encourage you to review the Google's policy for safeguarding your data: ", p.a.createElement(h.MDXTag, {
                                name: "a",
                                components: t,
                                parentName: "p",
                                props: {
                                    href: "https://support.google.com/analytics/answer/6004245."
                                }
                            }, "https://support.google.com/analytics/answer/6004245.")), p.a.createElement(h.MDXTag, {
                                name: "h2",
                                components: t
                            }, "Payments"), p.a.createElement(h.MDXTag, {
                                name: "p",
                                components: t
                            }, "We may provide paid products and/or services within Service. In that case, we use third-party services for payment processing (e.g. payment processors)."), p.a.createElement(h.MDXTag, {
                                name: "p",
                                components: t
                            }, "We will not store or collect your payment card details. That information is provided directly to our third-party payment processors whose use of your personal information is governed by their Privacy Policy. These payment processors adhere to the standards set by PCI-DSS as managed by the PCI Security Standards Council, which is a joint effort of brands like Visa, Mastercard, American Express and Discover. PCI-DSS requirements help ensure the secure handling of payment information."), p.a.createElement(h.MDXTag, {
                                name: "p",
                                components: t
                            }, "The payment processors we work with are:"), p.a.createElement(h.MDXTag, {
                                name: "p",
                                components: t
                            }, p.a.createElement(h.MDXTag, {
                                name: "strong",
                                components: t,
                                parentName: "p"
                            }, "Stripe:")), p.a.createElement(h.MDXTag, {
                                name: "p",
                                components: t
                            }, "Their Privacy Policy can be viewed at: ", p.a.createElement(h.MDXTag, {
                                name: "a",
                                components: t,
                                parentName: "p",
                                props: {
                                    href: "https://stripe.com/us/privacy"
                                }
                            }, "https://stripe.com/us/privacy")), p.a.createElement(h.MDXTag, {
                                name: "h2",
                                components: t
                            }, "Links to Other Sites"), p.a.createElement(h.MDXTag, {
                                name: "p",
                                components: t
                            }, "Our Service may contain links to other sites that are not operated by us. If you click a third party link, you will be directed to that third party's site. We strongly advise you to review the Privacy Policy of every site you visit."), p.a.createElement(h.MDXTag, {
                                name: "p",
                                components: t
                            }, "We have no control over and assume no responsibility for the content, privacy policies or practices of any third party sites or services."), p.a.createElement(h.MDXTag, {
                                name: "h2",
                                components: t
                            }, "Children's Privacy"), p.a.createElement(h.MDXTag, {
                                name: "p",
                                components: t
                            }, "Our Service does not address anyone under the age of 18 (“", p.a.createElement(h.MDXTag, {
                                name: "strong",
                                components: t,
                                parentName: "p"
                            }, "Children"), "”)."), p.a.createElement(h.MDXTag, {
                                name: "p",
                                components: t
                            }, "We do not knowingly collect personally identifiable information from anyone under the age of 18. If you are a parent or guardian and you are aware that your Child has provided us with Personal Data, please contact us. If we become aware that we have collected Personal Data from children without verification of parental consent, we take steps to remove that information from our servers."), p.a.createElement(h.MDXTag, {
                                name: "h2",
                                components: t
                            }, "Changes to This Privacy Policy"), p.a.createElement(h.MDXTag, {
                                name: "p",
                                components: t
                            }, "We may update our Privacy Policy from time to time. We will notify you of any changes by posting the new Privacy Policy on this page."), p.a.createElement(h.MDXTag, {
                                name: "p",
                                components: t
                            }, "We will let you know via email and/or a prominent notice on our Service, prior to the change becoming effective and update “effective date” at the top of this Privacy Policy."), p.a.createElement(h.MDXTag, {
                                name: "p",
                                components: t
                            }, "You are advised to review this Privacy Policy periodically for any changes. Changes to this Privacy Policy are effective when they are posted on this page."), p.a.createElement(h.MDXTag, {
                                name: "h2",
                                components: t
                            }, "Contact Us"), p.a.createElement(h.MDXTag, {
                                name: "p",
                                components: t
                            }, "If you have any questions about this Privacy Policy, please contact us:"), p.a.createElement(h.MDXTag, {
                                name: "p",
                                components: t
                            }, "By email: hello@linear.app"))
                        }
                    }]), t
                }(p.a.Component);
            g.isMDXComponent = !0
        },
        oICS: function (e, t, n) {
            var r = n("ADe/");
            e.exports = function (e, t, n, o) {
                try {
                    return o ? t(r(n)[0], n[1]) : t(n)
                } catch (i) {
                    var a = e.return;
                    throw void 0 !== a && r(a.call(e)), i
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
            var r, o, a, i, s = n("gtwY"),
                c = n("41F1"),
                u = n("8Xl/"),
                l = n("/1nD"),
                f = n("/6KZ"),
                p = n("fGh/"),
                h = n("HD3J"),
                d = n("LuVv"),
                m = n("s9UB"),
                v = n("PK7I"),
                y = n("cCv0").set,
                g = n("qg1s")(),
                b = n("WJTZ"),
                w = n("5tTa"),
                x = n("gDZL"),
                _ = n("zafj"),
                E = c.TypeError,
                k = c.process,
                M = k && k.versions,
                S = M && M.v8 || "",
                T = c.Promise,
                C = "process" == l(k),
                P = function () {},
                D = o = b.f,
                O = !! function () {
                    try {
                        var e = T.resolve(1),
                            t = (e.constructor = {})[n("0Sp3")("species")] = function (e) {
                                e(P, P)
                            };
                        return (C || "function" == typeof PromiseRejectionEvent) && e.then(P) instanceof t && 0 !== S.indexOf("6.6") && -1 === x.indexOf("Chrome/66")
                    } catch (r) {}
                }(),
                j = function (e) {
                    var t;
                    return !(!p(e) || "function" != typeof (t = e.then)) && t
                },
                X = function (e, t) {
                    if (!e._n) {
                        e._n = !0;
                        var n = e._c;
                        g(function () {
                            for (var r = e._v, o = 1 == e._s, a = 0, i = function (t) {
                                    var n, a, i, s = o ? t.ok : t.fail,
                                        c = t.resolve,
                                        u = t.reject,
                                        l = t.domain;
                                    try {
                                        s ? (o || (2 == e._h && F(e), e._h = 1), !0 === s ? n = r : (l && l.enter(), n = s(r), l && (l.exit(), i = !0)), n === t.promise ? u(E("Promise-chain cycle")) : (a = j(n)) ? a.call(n, c, u) : c(n)) : u(r)
                                    } catch (f) {
                                        l && !i && l.exit(), u(f)
                                    }
                                }; n.length > a;) i(n[a++]);
                            e._c = [], e._n = !1, t && !e._h && N(e)
                        })
                    }
                },
                N = function (e) {
                    y.call(c, function () {
                        var t, n, r, o = e._v,
                            a = A(e);
                        if (a && (t = w(function () {
                                C ? k.emit("unhandledRejection", o, e) : (n = c.onunhandledrejection) ? n({
                                    promise: e,
                                    reason: o
                                }) : (r = c.console) && r.error && r.error("Unhandled promise rejection", o)
                            }), e._h = C || A(e) ? 2 : 1), e._a = void 0, a && t.e) throw t.v
                    })
                },
                A = function (e) {
                    return 1 !== e._h && 0 === (e._a || e._c).length
                },
                F = function (e) {
                    y.call(c, function () {
                        var t;
                        C ? k.emit("rejectionHandled", e) : (t = c.onrejectionhandled) && t({
                            promise: e,
                            reason: e._v
                        })
                    })
                },
                R = function (e) {
                    var t = this;
                    t._d || (t._d = !0, (t = t._w || t)._v = e, t._s = 2, t._a || (t._a = t._c.slice()), X(t, !0))
                },
                I = function (e) {
                    var t, n = this;
                    if (!n._d) {
                        n._d = !0, n = n._w || n;
                        try {
                            if (n === e) throw E("Promise can't be resolved itself");
                            (t = j(e)) ? g(function () {
                                var r = {
                                    _w: n,
                                    _d: !1
                                };
                                try {
                                    t.call(e, u(I, r, 1), u(R, r, 1))
                                } catch (o) {
                                    R.call(r, o)
                                }
                            }): (n._v = e, n._s = 1, X(n, !1))
                        } catch (r) {
                            R.call({
                                _w: n,
                                _d: !1
                            }, r)
                        }
                    }
                };
            O || (T = function (e) {
                d(this, T, "Promise", "_h"), h(e), r.call(this);
                try {
                    e(u(I, this, 1), u(R, this, 1))
                } catch (t) {
                    R.call(this, t)
                }
            }, (r = function (e) {
                this._c = [], this._a = void 0, this._s = 0, this._d = !1, this._v = void 0, this._h = 0, this._n = !1
            }).prototype = n("IUx0")(T.prototype, {
                then: function (e, t) {
                    var n = D(v(this, T));
                    return n.ok = "function" != typeof e || e, n.fail = "function" == typeof t && t, n.domain = C ? k.domain : void 0, this._c.push(n), this._a && this._a.push(n), this._s && X(this, !1), n.promise
                },
                catch: function (e) {
                    return this.then(void 0, e)
                }
            }), a = function () {
                var e = new r;
                this.promise = e, this.resolve = u(I, e, 1), this.reject = u(R, e, 1)
            }, b.f = D = function (e) {
                return e === T || e === i ? new a(e) : o(e)
            }), f(f.G + f.W + f.F * !O, {
                Promise: T
            }), n("sWB5")(T, "Promise"), n("hXZv")("Promise"), i = n("TaGV").Promise, f(f.S + f.F * !O, "Promise", {
                reject: function (e) {
                    var t = D(this);
                    return (0, t.reject)(e), t.promise
                }
            }), f(f.S + f.F * (s || !O), "Promise", {
                resolve: function (e) {
                    return _(s && this === i ? T : this, e)
                }
            }), f(f.S + f.F * !(O && n("Clx3")(function (e) {
                T.all(e).catch(P)
            })), "Promise", {
                all: function (e) {
                    var t = this,
                        n = D(t),
                        r = n.resolve,
                        o = n.reject,
                        a = w(function () {
                            var n = [],
                                a = 0,
                                i = 1;
                            m(e, !1, function (e) {
                                var s = a++,
                                    c = !1;
                                n.push(void 0), i++, t.resolve(e).then(function (e) {
                                    c || (c = !0, n[s] = e, --i || r(n))
                                }, o)
                            }), --i || r(n)
                        });
                    return a.e && o(a.v), n.promise
                },
                race: function (e) {
                    var t = this,
                        n = D(t),
                        r = n.reject,
                        o = w(function () {
                            m(e, !1, function (e) {
                                t.resolve(e).then(n.resolve, r)
                            })
                        });
                    return o.e && r(o.v), n.promise
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
            } catch (r) {
                "object" == typeof window && (n = window)
            }
            e.exports = n
        },
        pFlO: function (e, t, n) {
            "use strict";
            var r = n("/6KZ");
            e.exports = function (e) {
                r(r.S, e, {
                    of: function () {
                        for (var e = arguments.length, t = new Array(e); e--;) t[e] = arguments[e];
                        return new this(t)
                    }
                })
            }
        },
        pdCo: function (e, t, n) {
            "use strict";
            var r = n("LkAs"),
                o = n("Moms"),
                a = n("bMj6"),
                i = n("hZod"),
                s = n("tEuJ"),
                c = n("YIwv"),
                u = n.n(c),
                l = n("0EY2"),
                f = n.n(l),
                p = n("5dyF"),
                h = n.n(p),
                d = n("mXGw"),
                m = n("EUvJ"),
                v = n("PeVk"),
                y = d.createElement(u.a, {
                    id: "3689662634",
                    dynamic: [v.a.controlBase, v.a.labelTitle, v.a.bgBorder]
                }, ['@import url("https://static.linear.app/fonts/fonts.css");', "*{box-sizing:border-box;}", "html,body{width:100%;min-height:100vh;margin:0;padding:0;background-color:rgba(22,22,26,1);}", "#__next{min-height:100vh; overflow: hidden !important;}", 'body,button,input,optgroup,select,textarea{font-family:"Inter UI","SF Pro Display",-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen,Ubuntu, Cantarell,"Open Sans","Helvetica Neue",sans-serif;}', "body{font-size:15px;line-height:1.5;-moz-osx-font-smoothing:grayscale;-webkit-font-smoothing:antialiased;text-rendering:optimizeLegibility;color:#dadfe7;}", "a,a svg path{color:".concat(v.a.controlBase, ";-webkit-text-decoration:none;text-decoration:none;cursor:pointer;color:#828fff;-webkit-transition:all 0.2s;transition:all 0.2s;}"), "a:hover{color:#ced2fa;}", "h1,h2,h3,h4,h5,h6{font-weight:500;line-height:1.25;margin-top:1.8em;margin:0 0 0.5em 0;color:".concat(v.a.labelTitle, ";}"), "h1{font-size:2.5em;font-weight:800;}", "h2{font-size:1.5em;font-weight:600;margin:2em 0 0 0;}", "h3{font-size:1.25em;}", "h4{font-size:1em;}", "h5{font-size:0.875em;}", "h6{font-size:0.75em;}", "i,em{font-style:italic;}", "p,dl,ol,ul,pre,blockquote{font-size:1.1em;margin-top:0.8em;margin-bottom:1.2em;color:#dadfe7;}", "strong{font-weight:500;}", "ul{list-style:none;}", "ol{padding:8px 18px 16px;margin:0;}", "li{margin-bottom:8px;list-style-type:disc;margin-left:20px;}", "ul kbd{padding:0 4px;margin:-4px 2px;}", "hr{border:0;height:0;border-top:1px solid ".concat(v.a.bgBorder, ";}"), "b,strong{font-weight:600;color:#fff;}", "kbd{border:1px solid rgba(255,255,255,0.5);border-radius:4px;padding:1px 4px;font-size:0.8em;font-weight:600;text-align:center;min-width:1.4em;display:inline-block;background-color:rgba(255,255,255,0.05);margin:-2px 2px;}", "kbd{padding:0 4px;margin:-4px 2px;}"]),
                g = d.createElement(u.a, {
                    id: "2279818120"
                }, ["html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline;}", "article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block;}", "body{line-height:1;}", "blockquote,q{quotes:none;}", 'blockquote:before,blockquote:after,q:before,q:after{content:"";content:none;}', "table{border-collapse:collapse;border-spacing:0;}"]),
                b = n("Rzy4"),
                w = n("mouY");
            n.d(t, "a", function () {
                return x
            });
            var x = function (e) {
                function t() {
                    return Object(r.default)(this, t), Object(a.default)(this, Object(i.default)(t).apply(this, arguments))
                }
                return Object(s.default)(t, e), Object(o.default)(t, [{
                    key: "render",
                    value: function () {
                        var e = this.props.children;
                        return d.createElement("div", {
                            className: "jsx-4171143236 " + u.a.dynamic([
                                ["2620514736", [v.a.labelMuted, v.a.labelMuted]]
                            ]) + " container"
                        }, d.createElement(w.a, null), d.createElement(f.a, null, d.createElement("script", {
                            async: !0,
                            src: "https://www.googletagmanager.com/gtag/js?id=UA-128896280-2",
                            className: "jsx-4171143236 " + u.a.dynamic([
                                ["2620514736", [v.a.labelMuted, v.a.labelMuted]]
                            ])
                        }), d.createElement("script", {
                            dangerouslySetInnerHTML: {
                                __html: "window.dataLayer = window.dataLayer || []; function gtag() {dataLayer.push(arguments);} gtag(\"js\", new Date()); gtag('config', 'UA-128896280-2');"
                            },
                            className: "jsx-4171143236 " + u.a.dynamic([
                                ["2620514736", [v.a.labelMuted, v.a.labelMuted]]
                            ])
                        })), g, y, d.createElement(b.a, null), d.createElement("div", {
                            className: "jsx-4171143236 " + u.a.dynamic([
                                ["2620514736", [v.a.labelMuted, v.a.labelMuted]]
                            ]) + " content"
                        }, e), d.createElement("footer", {
                            className: "jsx-4171143236 " + u.a.dynamic([
                                ["2620514736", [v.a.labelMuted, v.a.labelMuted]]
                            ])
                        }, d.createElement("div", {
                            className: "jsx-4171143236 " + u.a.dynamic([
                                ["2620514736", [v.a.labelMuted, v.a.labelMuted]]
                            ]) + " contentContainer"
                        }, d.createElement("div", {
                            className: "jsx-4171143236 " + u.a.dynamic([
                                ["2620514736", [v.a.labelMuted, v.a.labelMuted]]
                            ]) + " footerLogo"
                        }, d.createElement(m.a, {
                            style: {
                                width: "16px",
                                height: "16px",
                                fill: "#FFFFFF",
                                marginRight: "30px"
                            }
                        }), "Linear Orbit, Inc. — San Francisco, CA"), d.createElement("div", {
                            className: "jsx-4171143236 " + u.a.dynamic([
                                ["2620514736", [v.a.labelMuted, v.a.labelMuted]]
                            ]) + " stretch"
                        }), d.createElement("a", {
                            href: "https://twitter.com/linear_app",
                            className: "jsx-4171143236 " + u.a.dynamic([
                                ["2620514736", [v.a.labelMuted, v.a.labelMuted]]
                            ])
                        }, "Twitter"), d.createElement(h.a, {
                            href: "/download"
                        }, d.createElement("a", {
                            className: "jsx-4171143236 " + u.a.dynamic([
                                ["2620514736", [v.a.labelMuted, v.a.labelMuted]]
                            ])
                        }, "Download")), d.createElement(h.a, {
                            href: "/privacy"
                        }, d.createElement("a", {
                            className: "jsx-4171143236 " + u.a.dynamic([
                                ["2620514736", [v.a.labelMuted, v.a.labelMuted]]
                            ])
                        }, "Privacy")), d.createElement(h.a, {
                            href: "/terms"
                        }, d.createElement("a", {
                            className: "jsx-4171143236 " + u.a.dynamic([
                                ["2620514736", [v.a.labelMuted, v.a.labelMuted]]
                            ])
                        }, "Terms of Service")))), d.createElement(u.a, {
                            id: "4171143236"
                        }, [".contentContainer{padding:0 32px;max-width:1024px;width:100%;margin:0 auto;}", ".contentContainer.page{margin:120px auto;min-height:calc(100vh - 120px - 120px - 104px);}", "@-webkit-keyframes fadeZoom{0%{opacity:0;-webkit-transform:translate3d(0,-10px,0);-ms-transform:translate3d(0,-10px,0);transform:translate3d(0,-10px,0);}100%{opacity:1;-webkit-transform:none;-ms-transform:none;transform:none;}}", "@keyframes fadeZoom{0%{opacity:0;-webkit-transform:translate3d(0,-10px,0);-ms-transform:translate3d(0,-10px,0);transform:translate3d(0,-10px,0);}100%{opacity:1;-webkit-transform:none;-ms-transform:none;transform:none;}}", ".animated{-webkit-animation-duration:1.5s;animation-duration:1.5s;-webkit-transition-timing-function:ease-out;transition-timing-function:ease-out;-webkit-animation-fill-mode:both;animation-fill-mode:both;}", ".animated.zoom{-webkit-animation-name:fadeZoom;animation-name:fadeZoom;}", ".animated.t0{-webkit-animation-delay:0s;animation-delay:0s;}", ".animated.t1{-webkit-animation-delay:0.1s;animation-delay:0.1s;}", ".animated.t2{-webkit-animation-delay:0.2s;animation-delay:0.2s;}", ".animated.t3{-webkit-animation-delay:0.3s;animation-delay:0.3s;}", ".animated.t4{-webkit-animation-delay:0.4s;animation-delay:0.4s;}", ".animated.t5{-webkit-animation-delay:0.5s;animation-delay:0.5s;}", ".animated.t6{-webkit-animation-delay:0.8s;animation-delay:0.8s;}", "@media (max-width:700px){.contentContainer.page{min-height:calc(100vh - 120px - 120px - 194px);}}", "@media (max-width:600px){.contentContainer{padding:0 24px;}}"]), d.createElement(u.a, {
                            id: "2620514736",
                            dynamic: [v.a.labelMuted, v.a.labelMuted]
                        }, [".container.__jsx-style-dynamic-selector{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;width:100%;min-height:100vh;overflow-x:hidden;line-height:1.53em;}", ".content.__jsx-style-dynamic-selector{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex:1;-ms-flex:1;flex:1;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;}", "footer.__jsx-style-dynamic-selector{border-top:1px solid #292830;margin:0 8px;}", "footer.__jsx-style-dynamic-selector .contentContainer.__jsx-style-dynamic-selector{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-flex-direction:row;-ms-flex-direction:row;flex-direction:row;-webkit-align-items:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;padding:40px 24px;font-size:14px;color:".concat(v.a.labelMuted, ";}"), ".footerLogo.__jsx-style-dynamic-selector{display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-align-items:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;}", "footer.__jsx-style-dynamic-selector .stretch.__jsx-style-dynamic-selector{-webkit-box-flex:1;-webkit-flex-grow:1;-ms-flex-positive:1;flex-grow:1;}", "footer.__jsx-style-dynamic-selector a.__jsx-style-dynamic-selector{margin-left:32px;color:".concat(v.a.labelMuted, ";-webkit-transition:color 0.2s;transition:color 0.2s;}"), "footer.__jsx-style-dynamic-selector a.__jsx-style-dynamic-selector:hover{color:#fff;}", "@media (max-width:700px){footer.__jsx-style-dynamic-selector .contentContainer.__jsx-style-dynamic-selector{-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;-webkit-align-items:flex-start;-webkit-box-align:flex-start;-ms-flex-align:flex-start;align-items:flex-start;}footer.__jsx-style-dynamic-selector a.__jsx-style-dynamic-selector{margin-left:46px;margin-top:8px;}}"]))
                    }
                }]), t
            }(d.Component)
        },
        qQSc: function (e, t, n) {
            "use strict";
            var r = function (e) {
                return e && e.__esModule ? e : {
                    default: e
                }
            };
            Object.defineProperty(t, "__esModule", {
                value: !0
            });
            var o = r(n("mXGw")),
                a = n("eoaJ");

            function i() {
                var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {},
                    t = e.enabled,
                    n = void 0 !== t && t,
                    r = e.hybrid,
                    o = void 0 !== r && r,
                    a = e.hasQuery;
                return n && (!o || o && (void 0 !== a && a))
            }
            t.isAmp = i, t.useAmp = function () {
                return i(o.default.useContext(a.AmpModeContext))
            }, t.withAmp = function (e) {
                var t = (arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {}).hybrid,
                    n = void 0 !== t && t;

                function r() {
                    var t = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {},
                        r = o.default.useContext(a.AmpModeContext);
                    return r.enabled = !0, r.hybrid = n, o.default.createElement(e, t)
                }
                return r.__nextAmpOnly = !n, r.getInitialProps = e.getInitialProps, r
            }
        },
        qacR: function (e, t) {
            e.exports = function (e, t, n) {
                var r = void 0 === n;
                switch (t.length) {
                    case 0:
                        return r ? e() : e.call(n);
                    case 1:
                        return r ? e(t[0]) : e.call(n, t[0]);
                    case 2:
                        return r ? e(t[0], t[1]) : e.call(n, t[0], t[1]);
                    case 3:
                        return r ? e(t[0], t[1], t[2]) : e.call(n, t[0], t[1], t[2]);
                    case 4:
                        return r ? e(t[0], t[1], t[2], t[3]) : e.call(n, t[0], t[1], t[2], t[3])
                }
                return e.apply(n, t)
            }
        },
        qg1s: function (e, t, n) {
            var r = n("41F1"),
                o = n("cCv0").set,
                a = r.MutationObserver || r.WebKitMutationObserver,
                i = r.process,
                s = r.Promise,
                c = "process" == n("g2rQ")(i);
            e.exports = function () {
                var e, t, n, u = function () {
                    var r, o;
                    for (c && (r = i.domain) && r.exit(); e;) {
                        o = e.fn, e = e.next;
                        try {
                            o()
                        } catch (a) {
                            throw e ? n() : t = void 0, a
                        }
                    }
                    t = void 0, r && r.enter()
                };
                if (c) n = function () {
                    i.nextTick(u)
                };
                else if (!a || r.navigator && r.navigator.standalone)
                    if (s && s.resolve) {
                        var l = s.resolve(void 0);
                        n = function () {
                            l.then(u)
                        }
                    } else n = function () {
                        o.call(r, u)
                    };
                else {
                    var f = !0,
                        p = document.createTextNode("");
                    new a(u).observe(p, {
                        characterData: !0
                    }), n = function () {
                        p.data = f = !f
                    }
                }
                return function (r) {
                    var o = {
                        fn: r,
                        next: void 0
                    };
                    t && (t.next = o), e || (e = o, n()), t = o
                }
            }
        },
        rPaN: function (e, t, n) {
            "use strict";
            var r = n("HD3J"),
                o = n("fGh/"),
                a = n("qacR"),
                i = [].slice,
                s = {};
            e.exports = Function.bind || function (e) {
                var t = r(this),
                    n = i.call(arguments, 1),
                    c = function () {
                        var r = n.concat(i.call(arguments));
                        return this instanceof c ? function (e, t, n) {
                            if (!(t in s)) {
                                for (var r = [], o = 0; o < t; o++) r[o] = "a[" + o + "]";
                                s[t] = Function("F,a", "return new F(" + r.join(",") + ")")
                            }
                            return s[t](e, n)
                        }(t, r.length, r) : a(t, r, e)
                    };
                return o(t.prototype) && (c.prototype = t.prototype), c
            }
        },
        rgc3: function (e, t, n) {
            var r = n("/6KZ"),
                o = n("G+Zn"),
                a = n("HD3J"),
                i = n("ADe/"),
                s = n("fGh/"),
                c = n("/Vl9"),
                u = n("rPaN"),
                l = (n("41F1").Reflect || {}).construct,
                f = c(function () {
                    function e() {}
                    return !(l(function () {}, [], e) instanceof e)
                }),
                p = !c(function () {
                    l(function () {})
                });
            r(r.S + r.F * (f || p), "Reflect", {
                construct: function (e, t) {
                    a(e), i(t);
                    var n = arguments.length < 3 ? e : a(arguments[2]);
                    if (p && !f) return l(e, t, n);
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
                        var r = [null];
                        return r.push.apply(r, t), new(u.apply(e, r))
                    }
                    var c = n.prototype,
                        h = o(s(c) ? c : Object.prototype),
                        d = Function.apply.call(e, h, t);
                    return s(d) ? d : h
                }
            })
        },
        "s1G/": function (e, t, n) {
            "use strict";
            Object.defineProperty(t, "__esModule", {
                value: !0
            }), t.flush = function () {
                var e = l.cssRules();
                return l.flush(), e
            }, t.default = void 0;
            var r, o = n("mXGw");

            function a(e) {
                return (a = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (e) {
                    return typeof e
                } : function (e) {
                    return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : typeof e
                })(e)
            }

            function i(e, t) {
                for (var n = 0; n < t.length; n++) {
                    var r = t[n];
                    r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(e, r.key, r)
                }
            }

            function s(e, t) {
                return !t || "object" !== a(t) && "function" != typeof t ? function (e) {
                    if (void 0 === e) throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
                    return e
                }(e) : t
            }

            function c(e) {
                return (c = Object.setPrototypeOf ? Object.getPrototypeOf : function (e) {
                    return e.__proto__ || Object.getPrototypeOf(e)
                })(e)
            }

            function u(e, t) {
                return (u = Object.setPrototypeOf || function (e, t) {
                    return e.__proto__ = t, e
                })(e, t)
            }
            var l = new(((r = n("uVoP")) && r.__esModule ? r : {
                    default: r
                }).default),
                f = function (e) {
                    function t(e) {
                        var n;
                        return function (e, t) {
                            if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
                        }(this, t), (n = s(this, c(t).call(this, e))).prevProps = {}, n
                    }
                    var n, r, a;
                    return function (e, t) {
                        if ("function" != typeof t && null !== t) throw new TypeError("Super expression must either be null or a function");
                        e.prototype = Object.create(t && t.prototype, {
                            constructor: {
                                value: e,
                                writable: !0,
                                configurable: !0
                            }
                        }), t && u(e, t)
                    }(t, o.Component), n = t, a = [{
                        key: "dynamic",
                        value: function (e) {
                            return e.map(function (e) {
                                var t = e[0],
                                    n = e[1];
                                return l.computeId(t, n)
                            }).join(" ")
                        }
                    }], (r = [{
                        key: "shouldComponentUpdate",
                        value: function (e) {
                            return this.props.id !== e.id || String(this.props.dynamic) !== String(e.dynamic)
                        }
                    }, {
                        key: "componentWillUnmount",
                        value: function () {
                            l.remove(this.props)
                        }
                    }, {
                        key: "render",
                        value: function () {
                            return this.shouldComponentUpdate(this.prevProps) && (this.prevProps.id && l.remove(this.prevProps), l.add(this.props), this.prevProps = this.props), null
                        }
                    }]) && i(n.prototype, r), a && i(n, a), t
                }();
            t.default = f
        },
        s20r: function (e, t, n) {
            e.exports = n("+QYX")
        },
        s9UB: function (e, t, n) {
            var r = n("8Xl/"),
                o = n("oICS"),
                a = n("Ng5M"),
                i = n("ADe/"),
                s = n("gou2"),
                c = n("VJcA"),
                u = {},
                l = {};
            (t = e.exports = function (e, t, n, f, p) {
                var h, d, m, v, y = p ? function () {
                        return e
                    } : c(e),
                    g = r(n, f, t ? 2 : 1),
                    b = 0;
                if ("function" != typeof y) throw TypeError(e + " is not iterable!");
                if (a(y)) {
                    for (h = s(e.length); h > b; b++)
                        if ((v = t ? g(i(d = e[b])[0], d[1]) : g(e[b])) === u || v === l) return v
                } else
                    for (m = y.call(e); !(d = m.next()).done;)
                        if ((v = o(m, g, d.value, t)) === u || v === l) return v
            }).BREAK = u, t.RETURN = l
        },
        "so/P": function (e, t, n) {
            "use strict";
            var r = n("lphy"),
                o = n("wjI5");

            function a() {
                this.protocol = null, this.slashes = null, this.auth = null, this.host = null, this.port = null, this.hostname = null, this.hash = null, this.search = null, this.query = null, this.pathname = null, this.path = null, this.href = null
            }
            t.parse = b, t.resolve = function (e, t) {
                return b(e, !1, !0).resolve(t)
            }, t.resolveObject = function (e, t) {
                return e ? b(e, !1, !0).resolveObject(t) : t
            }, t.format = function (e) {
                o.isString(e) && (e = b(e));
                return e instanceof a ? e.format() : a.prototype.format.call(e)
            }, t.Url = a;
            var i = /^([a-z0-9.+-]+:)/i,
                s = /:[0-9]*$/,
                c = /^(\/\/?(?!\/)[^\?\s]*)(\?[^\s]*)?$/,
                u = ["{", "}", "|", "\\", "^", "`"].concat(["<", ">", '"', "`", " ", "\r", "\n", "\t"]),
                l = ["'"].concat(u),
                f = ["%", "/", "?", ";", "#"].concat(l),
                p = ["/", "?", "#"],
                h = /^[+a-z0-9A-Z_-]{0,63}$/,
                d = /^([+a-z0-9A-Z_-]{0,63})(.*)$/,
                m = {
                    javascript: !0,
                    "javascript:": !0
                },
                v = {
                    javascript: !0,
                    "javascript:": !0
                },
                y = {
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
                g = n("UKnr");

            function b(e, t, n) {
                if (e && o.isObject(e) && e instanceof a) return e;
                var r = new a;
                return r.parse(e, t, n), r
            }
            a.prototype.parse = function (e, t, n) {
                if (!o.isString(e)) throw new TypeError("Parameter 'url' must be a string, not " + typeof e);
                var a = e.indexOf("?"),
                    s = -1 !== a && a < e.indexOf("#") ? "?" : "#",
                    u = e.split(s);
                u[0] = u[0].replace(/\\/g, "/");
                var b = e = u.join(s);
                if (b = b.trim(), !n && 1 === e.split("#").length) {
                    var w = c.exec(b);
                    if (w) return this.path = b, this.href = b, this.pathname = w[1], w[2] ? (this.search = w[2], this.query = t ? g.parse(this.search.substr(1)) : this.search.substr(1)) : t && (this.search = "", this.query = {}), this
                }
                var x = i.exec(b);
                if (x) {
                    var _ = (x = x[0]).toLowerCase();
                    this.protocol = _, b = b.substr(x.length)
                }
                if (n || x || b.match(/^\/\/[^@\/]+@[^@\/]+/)) {
                    var E = "//" === b.substr(0, 2);
                    !E || x && v[x] || (b = b.substr(2), this.slashes = !0)
                }
                if (!v[x] && (E || x && !y[x])) {
                    for (var k, M, S = -1, T = 0; T < p.length; T++) {
                        -1 !== (C = b.indexOf(p[T])) && (-1 === S || C < S) && (S = C)
                    } - 1 !== (M = -1 === S ? b.lastIndexOf("@") : b.lastIndexOf("@", S)) && (k = b.slice(0, M), b = b.slice(M + 1), this.auth = decodeURIComponent(k)), S = -1;
                    for (T = 0; T < f.length; T++) {
                        var C; - 1 !== (C = b.indexOf(f[T])) && (-1 === S || C < S) && (S = C)
                    } - 1 === S && (S = b.length), this.host = b.slice(0, S), b = b.slice(S), this.parseHost(), this.hostname = this.hostname || "";
                    var P = "[" === this.hostname[0] && "]" === this.hostname[this.hostname.length - 1];
                    if (!P)
                        for (var D = this.hostname.split(/\./), O = (T = 0, D.length); T < O; T++) {
                            var j = D[T];
                            if (j && !j.match(h)) {
                                for (var X = "", N = 0, A = j.length; N < A; N++) j.charCodeAt(N) > 127 ? X += "x" : X += j[N];
                                if (!X.match(h)) {
                                    var F = D.slice(0, T),
                                        R = D.slice(T + 1),
                                        I = j.match(d);
                                    I && (F.push(I[1]), R.unshift(I[2])), R.length && (b = "/" + R.join(".") + b), this.hostname = F.join(".");
                                    break
                                }
                            }
                        }
                    this.hostname.length > 255 ? this.hostname = "" : this.hostname = this.hostname.toLowerCase(), P || (this.hostname = r.toASCII(this.hostname));
                    var B = this.port ? ":" + this.port : "",
                        L = this.hostname || "";
                    this.host = L + B, this.href += this.host, P && (this.hostname = this.hostname.substr(1, this.hostname.length - 2), "/" !== b[0] && (b = "/" + b))
                }
                if (!m[_])
                    for (T = 0, O = l.length; T < O; T++) {
                        var U = l[T];
                        if (-1 !== b.indexOf(U)) {
                            var z = encodeURIComponent(U);
                            z === U && (z = escape(U)), b = b.split(U).join(z)
                        }
                    }
                var V = b.indexOf("#"); - 1 !== V && (this.hash = b.substr(V), b = b.slice(0, V));
                var W = b.indexOf("?");
                if (-1 !== W ? (this.search = b.substr(W), this.query = b.substr(W + 1), t && (this.query = g.parse(this.query)), b = b.slice(0, W)) : t && (this.search = "", this.query = {}), b && (this.pathname = b), y[_] && this.hostname && !this.pathname && (this.pathname = "/"), this.pathname || this.search) {
                    B = this.pathname || "";
                    var q = this.search || "";
                    this.path = B + q
                }
                return this.href = this.format(), this
            }, a.prototype.format = function () {
                var e = this.auth || "";
                e && (e = (e = encodeURIComponent(e)).replace(/%3A/i, ":"), e += "@");
                var t = this.protocol || "",
                    n = this.pathname || "",
                    r = this.hash || "",
                    a = !1,
                    i = "";
                this.host ? a = e + this.host : this.hostname && (a = e + (-1 === this.hostname.indexOf(":") ? this.hostname : "[" + this.hostname + "]"), this.port && (a += ":" + this.port)), this.query && o.isObject(this.query) && Object.keys(this.query).length && (i = g.stringify(this.query));
                var s = this.search || i && "?" + i || "";
                return t && ":" !== t.substr(-1) && (t += ":"), this.slashes || (!t || y[t]) && !1 !== a ? (a = "//" + (a || ""), n && "/" !== n.charAt(0) && (n = "/" + n)) : a || (a = ""), r && "#" !== r.charAt(0) && (r = "#" + r), s && "?" !== s.charAt(0) && (s = "?" + s), t + a + (n = n.replace(/[?#]/g, function (e) {
                    return encodeURIComponent(e)
                })) + (s = s.replace("#", "%23")) + r
            }, a.prototype.resolve = function (e) {
                return this.resolveObject(b(e, !1, !0)).format()
            }, a.prototype.resolveObject = function (e) {
                if (o.isString(e)) {
                    var t = new a;
                    t.parse(e, !1, !0), e = t
                }
                for (var n = new a, r = Object.keys(this), i = 0; i < r.length; i++) {
                    var s = r[i];
                    n[s] = this[s]
                }
                if (n.hash = e.hash, "" === e.href) return n.href = n.format(), n;
                if (e.slashes && !e.protocol) {
                    for (var c = Object.keys(e), u = 0; u < c.length; u++) {
                        var l = c[u];
                        "protocol" !== l && (n[l] = e[l])
                    }
                    return y[n.protocol] && n.hostname && !n.pathname && (n.path = n.pathname = "/"), n.href = n.format(), n
                }
                if (e.protocol && e.protocol !== n.protocol) {
                    if (!y[e.protocol]) {
                        for (var f = Object.keys(e), p = 0; p < f.length; p++) {
                            var h = f[p];
                            n[h] = e[h]
                        }
                        return n.href = n.format(), n
                    }
                    if (n.protocol = e.protocol, e.host || v[e.protocol]) n.pathname = e.pathname;
                    else {
                        for (var d = (e.pathname || "").split("/"); d.length && !(e.host = d.shift()););
                        e.host || (e.host = ""), e.hostname || (e.hostname = ""), "" !== d[0] && d.unshift(""), d.length < 2 && d.unshift(""), n.pathname = d.join("/")
                    }
                    if (n.search = e.search, n.query = e.query, n.host = e.host || "", n.auth = e.auth, n.hostname = e.hostname || e.host, n.port = e.port, n.pathname || n.search) {
                        var m = n.pathname || "",
                            g = n.search || "";
                        n.path = m + g
                    }
                    return n.slashes = n.slashes || e.slashes, n.href = n.format(), n
                }
                var b = n.pathname && "/" === n.pathname.charAt(0),
                    w = e.host || e.pathname && "/" === e.pathname.charAt(0),
                    x = w || b || n.host && e.pathname,
                    _ = x,
                    E = n.pathname && n.pathname.split("/") || [],
                    k = (d = e.pathname && e.pathname.split("/") || [], n.protocol && !y[n.protocol]);
                if (k && (n.hostname = "", n.port = null, n.host && ("" === E[0] ? E[0] = n.host : E.unshift(n.host)), n.host = "", e.protocol && (e.hostname = null, e.port = null, e.host && ("" === d[0] ? d[0] = e.host : d.unshift(e.host)), e.host = null), x = x && ("" === d[0] || "" === E[0])), w) n.host = e.host || "" === e.host ? e.host : n.host, n.hostname = e.hostname || "" === e.hostname ? e.hostname : n.hostname, n.search = e.search, n.query = e.query, E = d;
                else if (d.length) E || (E = []), E.pop(), E = E.concat(d), n.search = e.search, n.query = e.query;
                else if (!o.isNullOrUndefined(e.search)) {
                    if (k) n.hostname = n.host = E.shift(), (P = !!(n.host && n.host.indexOf("@") > 0) && n.host.split("@")) && (n.auth = P.shift(), n.host = n.hostname = P.shift());
                    return n.search = e.search, n.query = e.query, o.isNull(n.pathname) && o.isNull(n.search) || (n.path = (n.pathname ? n.pathname : "") + (n.search ? n.search : "")), n.href = n.format(), n
                }
                if (!E.length) return n.pathname = null, n.search ? n.path = "/" + n.search : n.path = null, n.href = n.format(), n;
                for (var M = E.slice(-1)[0], S = (n.host || e.host || E.length > 1) && ("." === M || ".." === M) || "" === M, T = 0, C = E.length; C >= 0; C--) "." === (M = E[C]) ? E.splice(C, 1) : ".." === M ? (E.splice(C, 1), T++) : T && (E.splice(C, 1), T--);
                if (!x && !_)
                    for (; T--; T) E.unshift("..");
                !x || "" === E[0] || E[0] && "/" === E[0].charAt(0) || E.unshift(""), S && "/" !== E.join("/").substr(-1) && E.push("");
                var P, D = "" === E[0] || E[0] && "/" === E[0].charAt(0);
                k && (n.hostname = n.host = D ? "" : E.length ? E.shift() : "", (P = !!(n.host && n.host.indexOf("@") > 0) && n.host.split("@")) && (n.auth = P.shift(), n.host = n.hostname = P.shift()));
                return (x = x || n.host && E.length) && !D && E.unshift(""), E.length ? n.pathname = E.join("/") : (n.pathname = null, n.path = null), o.isNull(n.pathname) && o.isNull(n.search) || (n.path = (n.pathname ? n.pathname : "") + (n.search ? n.search : "")), n.auth = e.auth || n.auth, n.slashes = n.slashes || e.slashes, n.href = n.format(), n
            }, a.prototype.parseHost = function () {
                var e = this.host,
                    t = s.exec(e);
                t && (":" !== (t = t[0]) && (this.port = t.substr(1)), e = e.substr(0, e.length - t.length)), e && (this.hostname = e)
            }
        },
        tbIA: function (e, t, n) {
            "use strict";
            var r = n("/Lgp"),
                o = n("phsM"),
                a = n("kBaS"),
                i = n("dCrc"),
                s = n("6wgB"),
                c = Object.assign;
            e.exports = !c || n("/Vl9")(function () {
                var e = {},
                    t = {},
                    n = Symbol(),
                    r = "abcdefghijklmnopqrst";
                return e[n] = 7, r.split("").forEach(function (e) {
                    t[e] = e
                }), 7 != c({}, e)[n] || Object.keys(c({}, t)).join("") != r
            }) ? function (e, t) {
                for (var n = i(e), c = arguments.length, u = 1, l = o.f, f = a.f; c > u;)
                    for (var p, h = s(arguments[u++]), d = l ? r(h).concat(l(h)) : r(h), m = d.length, v = 0; m > v;) f.call(h, p = d[v++]) && (n[p] = h[p]);
                return n
            } : c
        },
        "uMC/": function (e, t, n) {
            var r = n("ADe/"),
                o = n("VJcA");
            e.exports = n("TaGV").getIterator = function (e) {
                var t = o(e);
                if ("function" != typeof t) throw TypeError(e + " is not iterable!");
                return r(t.call(e))
            }
        },
        uVoP: function (e, t, n) {
            "use strict";
            Object.defineProperty(t, "__esModule", {
                value: !0
            }), t.default = void 0;
            var r = a(n("zcKR")),
                o = a(n("HrG8"));

            function a(e) {
                return e && e.__esModule ? e : {
                    default: e
                }
            }

            function i(e, t) {
                for (var n = 0; n < t.length; n++) {
                    var r = t[n];
                    r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(e, r.key, r)
                }
            }
            var s = function () {
                function e() {
                    var t = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {},
                        n = t.styleSheet,
                        r = void 0 === n ? null : n,
                        a = t.optimizeForSpeed,
                        i = void 0 !== a && a,
                        s = t.isBrowser,
                        c = void 0 === s ? "undefined" != typeof window : s;
                    ! function (e, t) {
                        if (!(e instanceof t)) throw new TypeError("Cannot call a class as a function")
                    }(this, e), this._sheet = r || new o.default({
                        name: "styled-jsx",
                        optimizeForSpeed: i
                    }), this._sheet.inject(), r && "boolean" == typeof i && (this._sheet.setOptimizeForSpeed(i), this._optimizeForSpeed = this._sheet.isOptimizeForSpeed()), this._isBrowser = c, this._fromServer = void 0, this._indices = {}, this._instancesCounts = {}, this.computeId = this.createComputeId(), this.computeSelector = this.createComputeSelector()
                }
                var t, n, a;
                return t = e, (n = [{
                    key: "add",
                    value: function (e) {
                        var t = this;
                        void 0 === this._optimizeForSpeed && (this._optimizeForSpeed = Array.isArray(e.children), this._sheet.setOptimizeForSpeed(this._optimizeForSpeed), this._optimizeForSpeed = this._sheet.isOptimizeForSpeed()), this._isBrowser && !this._fromServer && (this._fromServer = this.selectFromServer(), this._instancesCounts = Object.keys(this._fromServer).reduce(function (e, t) {
                            return e[t] = 0, e
                        }, {}));
                        var n = this.getIdAndRules(e),
                            r = n.styleId,
                            o = n.rules;
                        if (r in this._instancesCounts) this._instancesCounts[r] += 1;
                        else {
                            var a = o.map(function (e) {
                                return t._sheet.insertRule(e)
                            }).filter(function (e) {
                                return -1 !== e
                            });
                            this._indices[r] = a, this._instancesCounts[r] = 1
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
                            var r = this._fromServer && this._fromServer[n];
                            r ? (r.parentNode.removeChild(r), delete this._fromServer[n]) : (this._indices[n].forEach(function (e) {
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
                            var o = String(n),
                                a = t + o;
                            return e[a] || (e[a] = "jsx-".concat((0, r.default)("".concat(t, "-").concat(o)))), e[a]
                        }
                    }
                }, {
                    key: "createComputeSelector",
                    value: function () {
                        var e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : /__jsx-style-dynamic-selector/g,
                            t = {};
                        return function (n, r) {
                            this._isBrowser || (r = r.replace(/\/style/gi, "\\/style"));
                            var o = n + r;
                            return t[o] || (t[o] = r.replace(e, n)), t[o]
                        }
                    }
                }, {
                    key: "getIdAndRules",
                    value: function (e) {
                        var t = this,
                            n = e.children,
                            r = e.dynamic,
                            o = e.id;
                        if (r) {
                            var a = this.computeId(o, r);
                            return {
                                styleId: a,
                                rules: Array.isArray(n) ? n.map(function (e) {
                                    return t.computeSelector(a, e)
                                }) : [this.computeSelector(a, n)]
                            }
                        }
                        return {
                            styleId: this.computeId(o),
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
                }]) && i(t.prototype, n), a && i(t, a), e
            }();
            t.default = s
        },
        uYFp: function (e, t, n) {
            "use strict";
            var r = n("PL1w"),
                o = r(n("LkAs")),
                a = r(n("bMj6")),
                i = r(n("hZod")),
                s = r(n("YKN3")),
                c = r(n("Moms")),
                u = r(n("tEuJ")),
                l = r(n("0tNF")),
                f = r(n("OAWj"));
            Object.defineProperty(t, "__esModule", {
                value: !0
            });
            var p = n("mXGw"),
                h = "undefined" == typeof window;
            t.default = function () {
                var e, t = new f.default;

                function n(n) {
                    e = n.props.reduceComponentsToState((0, l.default)(t), n.props), n.props.handleStateChange && n.props.handleStateChange(e)
                }
                return function (r) {
                    function l(e) {
                        var r;
                        return (0, o.default)(this, l), r = (0, a.default)(this, (0, i.default)(l).call(this, e)), h && (t.add((0, s.default)(r)), n((0, s.default)(r))), r
                    }
                    return (0, u.default)(l, r), (0, c.default)(l, null, [{
                        key: "rewind",
                        value: function () {
                            var n = e;
                            return e = void 0, t.clear(), n
                        }
                    }]), (0, c.default)(l, [{
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
                    }]), l
                }(p.Component)
            }
        },
        wcNg: function (e, t) {
            ! function (t) {
                "use strict";
                var n, r = Object.prototype,
                    o = r.hasOwnProperty,
                    a = "function" == typeof Symbol ? Symbol : {},
                    i = a.iterator || "@@iterator",
                    s = a.asyncIterator || "@@asyncIterator",
                    c = a.toStringTag || "@@toStringTag",
                    u = "object" == typeof e,
                    l = t.regeneratorRuntime;
                if (l) u && (e.exports = l);
                else {
                    (l = t.regeneratorRuntime = u ? e.exports : {}).wrap = w;
                    var f = "suspendedStart",
                        p = "suspendedYield",
                        h = "executing",
                        d = "completed",
                        m = {},
                        v = {};
                    v[i] = function () {
                        return this
                    };
                    var y = Object.getPrototypeOf,
                        g = y && y(y(O([])));
                    g && g !== r && o.call(g, i) && (v = g);
                    var b = k.prototype = _.prototype = Object.create(v);
                    E.prototype = b.constructor = k, k.constructor = E, k[c] = E.displayName = "GeneratorFunction", l.isGeneratorFunction = function (e) {
                        var t = "function" == typeof e && e.constructor;
                        return !!t && (t === E || "GeneratorFunction" === (t.displayName || t.name))
                    }, l.mark = function (e) {
                        return Object.setPrototypeOf ? Object.setPrototypeOf(e, k) : (e.__proto__ = k, c in e || (e[c] = "GeneratorFunction")), e.prototype = Object.create(b), e
                    }, l.awrap = function (e) {
                        return {
                            __await: e
                        }
                    }, M(S.prototype), S.prototype[s] = function () {
                        return this
                    }, l.AsyncIterator = S, l.async = function (e, t, n, r) {
                        var o = new S(w(e, t, n, r));
                        return l.isGeneratorFunction(t) ? o : o.next().then(function (e) {
                            return e.done ? e.value : o.next()
                        })
                    }, M(b), b[c] = "Generator", b[i] = function () {
                        return this
                    }, b.toString = function () {
                        return "[object Generator]"
                    }, l.keys = function (e) {
                        var t = [];
                        for (var n in e) t.push(n);
                        return t.reverse(),
                            function n() {
                                for (; t.length;) {
                                    var r = t.pop();
                                    if (r in e) return n.value = r, n.done = !1, n
                                }
                                return n.done = !0, n
                            }
                    }, l.values = O, D.prototype = {
                        constructor: D,
                        reset: function (e) {
                            if (this.prev = 0, this.next = 0, this.sent = this._sent = n, this.done = !1, this.delegate = null, this.method = "next", this.arg = n, this.tryEntries.forEach(P), !e)
                                for (var t in this) "t" === t.charAt(0) && o.call(this, t) && !isNaN(+t.slice(1)) && (this[t] = n)
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

                            function r(r, o) {
                                return s.type = "throw", s.arg = e, t.next = r, o && (t.method = "next", t.arg = n), !!o
                            }
                            for (var a = this.tryEntries.length - 1; a >= 0; --a) {
                                var i = this.tryEntries[a],
                                    s = i.completion;
                                if ("root" === i.tryLoc) return r("end");
                                if (i.tryLoc <= this.prev) {
                                    var c = o.call(i, "catchLoc"),
                                        u = o.call(i, "finallyLoc");
                                    if (c && u) {
                                        if (this.prev < i.catchLoc) return r(i.catchLoc, !0);
                                        if (this.prev < i.finallyLoc) return r(i.finallyLoc)
                                    } else if (c) {
                                        if (this.prev < i.catchLoc) return r(i.catchLoc, !0)
                                    } else {
                                        if (!u) throw new Error("try statement without catch or finally");
                                        if (this.prev < i.finallyLoc) return r(i.finallyLoc)
                                    }
                                }
                            }
                        },
                        abrupt: function (e, t) {
                            for (var n = this.tryEntries.length - 1; n >= 0; --n) {
                                var r = this.tryEntries[n];
                                if (r.tryLoc <= this.prev && o.call(r, "finallyLoc") && this.prev < r.finallyLoc) {
                                    var a = r;
                                    break
                                }
                            }
                            a && ("break" === e || "continue" === e) && a.tryLoc <= t && t <= a.finallyLoc && (a = null);
                            var i = a ? a.completion : {};
                            return i.type = e, i.arg = t, a ? (this.method = "next", this.next = a.finallyLoc, m) : this.complete(i)
                        },
                        complete: function (e, t) {
                            if ("throw" === e.type) throw e.arg;
                            return "break" === e.type || "continue" === e.type ? this.next = e.arg : "return" === e.type ? (this.rval = this.arg = e.arg, this.method = "return", this.next = "end") : "normal" === e.type && t && (this.next = t), m
                        },
                        finish: function (e) {
                            for (var t = this.tryEntries.length - 1; t >= 0; --t) {
                                var n = this.tryEntries[t];
                                if (n.finallyLoc === e) return this.complete(n.completion, n.afterLoc), P(n), m
                            }
                        },
                        catch: function (e) {
                            for (var t = this.tryEntries.length - 1; t >= 0; --t) {
                                var n = this.tryEntries[t];
                                if (n.tryLoc === e) {
                                    var r = n.completion;
                                    if ("throw" === r.type) {
                                        var o = r.arg;
                                        P(n)
                                    }
                                    return o
                                }
                            }
                            throw new Error("illegal catch attempt")
                        },
                        delegateYield: function (e, t, r) {
                            return this.delegate = {
                                iterator: O(e),
                                resultName: t,
                                nextLoc: r
                            }, "next" === this.method && (this.arg = n), m
                        }
                    }
                }

                function w(e, t, n, r) {
                    var o = t && t.prototype instanceof _ ? t : _,
                        a = Object.create(o.prototype),
                        i = new D(r || []);
                    return a._invoke = function (e, t, n) {
                        var r = f;
                        return function (o, a) {
                            if (r === h) throw new Error("Generator is already running");
                            if (r === d) {
                                if ("throw" === o) throw a;
                                return j()
                            }
                            for (n.method = o, n.arg = a;;) {
                                var i = n.delegate;
                                if (i) {
                                    var s = T(i, n);
                                    if (s) {
                                        if (s === m) continue;
                                        return s
                                    }
                                }
                                if ("next" === n.method) n.sent = n._sent = n.arg;
                                else if ("throw" === n.method) {
                                    if (r === f) throw r = d, n.arg;
                                    n.dispatchException(n.arg)
                                } else "return" === n.method && n.abrupt("return", n.arg);
                                r = h;
                                var c = x(e, t, n);
                                if ("normal" === c.type) {
                                    if (r = n.done ? d : p, c.arg === m) continue;
                                    return {
                                        value: c.arg,
                                        done: n.done
                                    }
                                }
                                "throw" === c.type && (r = d, n.method = "throw", n.arg = c.arg)
                            }
                        }
                    }(e, n, i), a
                }

                function x(e, t, n) {
                    try {
                        return {
                            type: "normal",
                            arg: e.call(t, n)
                        }
                    } catch (r) {
                        return {
                            type: "throw",
                            arg: r
                        }
                    }
                }

                function _() {}

                function E() {}

                function k() {}

                function M(e) {
                    ["next", "throw", "return"].forEach(function (t) {
                        e[t] = function (e) {
                            return this._invoke(t, e)
                        }
                    })
                }

                function S(e) {
                    var t;
                    this._invoke = function (n, r) {
                        function a() {
                            return new Promise(function (t, a) {
                                ! function t(n, r, a, i) {
                                    var s = x(e[n], e, r);
                                    if ("throw" !== s.type) {
                                        var c = s.arg,
                                            u = c.value;
                                        return u && "object" == typeof u && o.call(u, "__await") ? Promise.resolve(u.__await).then(function (e) {
                                            t("next", e, a, i)
                                        }, function (e) {
                                            t("throw", e, a, i)
                                        }) : Promise.resolve(u).then(function (e) {
                                            c.value = e, a(c)
                                        }, function (e) {
                                            return t("throw", e, a, i)
                                        })
                                    }
                                    i(s.arg)
                                }(n, r, t, a)
                            })
                        }
                        return t = t ? t.then(a, a) : a()
                    }
                }

                function T(e, t) {
                    var r = e.iterator[t.method];
                    if (r === n) {
                        if (t.delegate = null, "throw" === t.method) {
                            if (e.iterator.return && (t.method = "return", t.arg = n, T(e, t), "throw" === t.method)) return m;
                            t.method = "throw", t.arg = new TypeError("The iterator does not provide a 'throw' method")
                        }
                        return m
                    }
                    var o = x(r, e.iterator, t.arg);
                    if ("throw" === o.type) return t.method = "throw", t.arg = o.arg, t.delegate = null, m;
                    var a = o.arg;
                    return a ? a.done ? (t[e.resultName] = a.value, t.next = e.nextLoc, "return" !== t.method && (t.method = "next", t.arg = n), t.delegate = null, m) : a : (t.method = "throw", t.arg = new TypeError("iterator result is not an object"), t.delegate = null, m)
                }

                function C(e) {
                    var t = {
                        tryLoc: e[0]
                    };
                    1 in e && (t.catchLoc = e[1]), 2 in e && (t.finallyLoc = e[2], t.afterLoc = e[3]), this.tryEntries.push(t)
                }

                function P(e) {
                    var t = e.completion || {};
                    t.type = "normal", delete t.arg, e.completion = t
                }

                function D(e) {
                    this.tryEntries = [{
                        tryLoc: "root"
                    }], e.forEach(C, this), this.reset(!0)
                }

                function O(e) {
                    if (e) {
                        var t = e[i];
                        if (t) return t.call(e);
                        if ("function" == typeof e.next) return e;
                        if (!isNaN(e.length)) {
                            var r = -1,
                                a = function t() {
                                    for (; ++r < e.length;)
                                        if (o.call(e, r)) return t.value = e[r], t.done = !1, t;
                                    return t.value = n, t.done = !0, t
                                };
                            return a.next = a
                        }
                    }
                    return {
                        next: j
                    }
                }

                function j() {
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
                return a
            });
            var r = n("U8Yc"),
                o = n.n(r);

            function a() {
                return (a = o.a || function (e) {
                    for (var t = 1; t < arguments.length; t++) {
                        var n = arguments[t];
                        for (var r in n) Object.prototype.hasOwnProperty.call(n, r) && (e[r] = n[r])
                    }
                    return e
                }).apply(this, arguments)
            }
        },
        zafj: function (e, t, n) {
            var r = n("ADe/"),
                o = n("fGh/"),
                a = n("WJTZ");
            e.exports = function (e, t) {
                if (r(e), o(t) && t.constructor === e) return t;
                var n = a.f(e);
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
        ["Uz6G", "5d41", "9da1"]
    ]
]);