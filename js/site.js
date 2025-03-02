! function(e) {
    var t = {};

    function r(n) { if (t[n]) return t[n].exports; var i = t[n] = { i: n, l: !1, exports: {} }; return e[n].call(i.exports, i, i.exports, r), i.l = !0, i.exports }
    r.m = e, r.c = t, r.d = function(e, t, n) { r.o(e, t) || Object.defineProperty(e, t, { configurable: !1, enumerable: !0, get: n }) }, r.r = function(e) { Object.defineProperty(e, "__esModule", { value: !0 }) }, r.n = function(e) { var t = e && e.__esModule ? function() { return e.default } : function() { return e }; return r.d(t, "a", t), t }, r.o = function(e, t) { return Object.prototype.hasOwnProperty.call(e, t) }, r.p = "", r(r.s = 10)
}([function(e, t, r) {
    "use strict";
    Object.defineProperty(t, "__esModule", { value: !0 });
    var n = function() {
        function e(t) {
            var r = this;
            this.VERSION = Number(150706), this.log = { setLevel: function(e) { r.currentLogLevel = e } }, this.setupStubFunctions(e.FUNCTION_LIST_TO_STUB, this.stubFunction, t), this.setupStubFunctions(e.FUNCTION_LIST_WITH_PROMISE_TO_STUB, this.stubPromiseFunction, t)
        }
        return e.prototype.setupStubFunctions = function(e, t, r) {
            for (var n = this, i = function(e) {
                    if (r.indexOf(e) > -1) return "continue";
                    Object.defineProperty(o, e, { value: function() { for (var r = [], i = 0; i < arguments.length; i++) r[i] = arguments[i]; return t(n, e, r) } })
                }, o = this, s = 0, a = e; s < a.length; s++) { i(a[s]) }
        }, e
    }();
    t.OneSignalStub = n, n.FUNCTION_LIST_TO_STUB = ["on", "off", "once", "push"], n.FUNCTION_LIST_WITH_PROMISE_TO_STUB = ["init", "_initHttp", "isPushNotificationsEnabled", "showHttpPrompt", "registerForPushNotifications", "setDefaultNotificationUrl", "setDefaultTitle", "syncHashedEmail", "getTags", "sendTag", "sendTags", "deleteTag", "deleteTags", "addListenerForNotificationOpened", "getIdsAvailable", "setSubscription", "showHttpPermissionRequest", "showNativePrompt", "showSlidedownPrompt", "getNotificationPermission", "getUserId", "getRegistrationId", "getSubscription", "sendSelfNotification", "setEmail", "logoutEmail", "setExternalUserId", "removeExternalUserId", "getExternalUserId", "provideUserConsent", "isOptedOut", "getEmailId"]
}, function(e, t, r) {
    "use strict";
    Object.defineProperty(t, "__esModule", { value: !0 });
    var n = function() {
        function e() {}
        return e.shouldLog = function() { try { if ("undefined" == typeof window || void 0 === window.localStorage) return !1; var e = window.localStorage.getItem("loglevel"); return !(!e || "trace" !== e.toLowerCase()) } catch (e) { return !1 } }, e.setLevel = function(t) { if ("undefined" != typeof window && void 0 !== window.localStorage) try { window.localStorage.setItem("loglevel", t), e.proxyMethodsCreated = void 0, e.createProxyMethods() } catch (e) { return } }, e.createProxyMethods = function() {
            if (void 0 === e.proxyMethodsCreated) {
                e.proxyMethodsCreated = !0;
                for (var t = { log: "debug", trace: "trace", info: "info", warn: "warn", error: "error" }, r = 0, n = Object.keys(t); r < n.length; r++) {
                    var i = n[r],
                        o = void 0 !== console[i],
                        s = t[i],
                        a = o && (e.shouldLog() || "error" === s);
                    e[s] = a ? console[i].bind(console) : function() {}
                }
            }
        }, e
    }();
    t.default = n, n.createProxyMethods()
}, function(e, t, r) {
    "use strict";
    var n, i = this && this.__extends || (n = Object.setPrototypeOf || { __proto__: [] }
        instanceof Array && function(e, t) { e.__proto__ = t } || function(e, t) { for (var r in t) t.hasOwnProperty(r) && (e[r] = t[r]) },
        function(e, t) {
            function r() { this.constructor = e }
            n(e, t), e.prototype = null === t ? Object.create(t) : (r.prototype = t.prototype, new r)
        });
    Object.defineProperty(t, "__esModule", { value: !0 });
    var o = function(e) {
        function t(r) { void 0 === r && (r = ""); var n = e.call(this, r) || this; return Object.defineProperty(n, "message", { configurable: !0, enumerable: !1, value: r, writable: !0 }), Object.defineProperty(n, "name", { configurable: !0, enumerable: !1, value: n.constructor.name, writable: !0 }), Error.hasOwnProperty("captureStackTrace") ? (Error.captureStackTrace(n, n.constructor), n) : (Object.defineProperty(n, "stack", { configurable: !0, enumerable: !1, value: new Error(r).stack, writable: !0 }), Object.setPrototypeOf(n, t.prototype), n) }
        return i(t, e), t
    }(Error);
    t.default = o
}, function(e, t, r) {
    "use strict";
    var n = this && this.__importDefault || function(e) { return e && e.__esModule ? e : { default: e } };
    Object.defineProperty(t, "__esModule", { value: !0 });
    var i = n(r(2)),
        o = function() {
            function e() {}
            return e.processItem = function(e, t) {
                if ("function" == typeof t) t();
                else {
                    if (!Array.isArray(t)) throw new i.default("Only accepts function and Array types!");
                    if (0 == t.length) throw new i.default("Empty array is not valid!");
                    var r = t.shift();
                    if (null == r || void 0 === r) throw new i.default("First element in array must be the OneSignal function name");
                    var n = e[r.toString()];
                    if ("function" != typeof n) throw new i.default("No OneSignal function with the name '" + r + "'");
                    n.apply(e, t)
                }
            }, e
        }();
    t.ProcessOneSignalPushCalls = o
}, function(e, t, r) {
    "use strict";
    var n, i = this && this.__extends || (n = Object.setPrototypeOf || { __proto__: [] }
            instanceof Array && function(e, t) { e.__proto__ = t } || function(e, t) { for (var r in t) t.hasOwnProperty(r) && (e[r] = t[r]) },
            function(e, t) {
                function r() { this.constructor = e }
                n(e, t), e.prototype = null === t ? Object.create(t) : (r.prototype = t.prototype, new r)
            }),
        o = this && this.__importDefault || function(e) { return e && e.__esModule ? e : { default: e } };
    Object.defineProperty(t, "__esModule", { value: !0 });
    var s = r(0),
        a = r(3),
        u = o(r(1)),
        d = function(e) {
            function t(r) { var n = e.call(this, Object.getOwnPropertyNames(t.prototype)) || this; return window.OneSignal = n, n.playPushes(r), n }
            return i(t, e), t.prototype.isPushNotificationsSupported = function() { return !1 }, t.prototype.isPushNotificationsEnabled = function() { return t.newPromiseIfDefined(function(e) { e(!1) }) }, t.prototype.push = function(e) { a.ProcessOneSignalPushCalls.processItem(this, e) }, t.prototype.stubFunction = function(e, t, r) {}, t.prototype.stubPromiseFunction = function(e, r, n) { return t.newPromiseIfDefined(function(e, t) {}) }, t.newPromiseIfDefined = function(e) { return "undefined" == typeof Promise ? void 0 : new Promise(e) }, t.prototype.playPushes = function(e) {
                if (e)
                    for (var t = 0, r = e; t < r.length; t++) { var n = r[t]; try { this.push(n) } catch (e) { u.default.error(e) } }
            }, t
        }(s.OneSignalStub);
    t.OneSignalStubES5 = d
}, function(e, t, r) {
    "use strict";
    var n, i = this && this.__extends || (n = Object.setPrototypeOf || { __proto__: [] }
        instanceof Array && function(e, t) { e.__proto__ = t } || function(e, t) { for (var r in t) t.hasOwnProperty(r) && (e[r] = t[r]) },
        function(e, t) {
            function r() { this.constructor = e }
            n(e, t), e.prototype = null === t ? Object.create(t) : (r.prototype = t.prototype, new r)
        });
    Object.defineProperty(t, "__esModule", { value: !0 });
    var OneSignalStubES6 = function(e) {
        function OneSignalStubES6(t) { var r = e.call(this, Object.getOwnPropertyNames(OneSignalStubES6.prototype)) || this; return r.directFunctionCallsArray = new Array, r.preExistingArray = t, r }
        return i(OneSignalStubES6, e), OneSignalStubES6.prototype.isPushNotificationsSupported = function() { return !0 }, OneSignalStubES6.prototype.stubFunction = function(e, t, r) { e.directFunctionCallsArray.push({ functionName: t, args: r, delayedPromise: void 0 }) }, OneSignalStubES6.prototype.stubPromiseFunction = function(e, t, r) {
            var n = void 0,
                i = new Promise(function(e, t) { n = { resolve: e, reject: t } });
            return e.directFunctionCallsArray.push({ functionName: t, delayedPromise: n, args: r }), i
        }, OneSignalStubES6
    }(r(0).OneSignalStub);
    t.OneSignalStubES6 = OneSignalStubES6
}, function(e, t) { e.exports = function() { throw new Error("define cannot be used indirect") } }, function(e, t, r) {
    var n;
    n = function() {
        var e = !0;

        function t(t) {
            function r(e) { var r = t.match(e); return r && r.length > 1 && r[1] || "" }
            var n, i, o, s = r(/(ipod|iphone|ipad)/i).toLowerCase(),
                a = !/like android/i.test(t) && /android/i.test(t),
                u = /nexus\s*[0-6]\s*/i.test(t),
                d = !u && /nexus\s*[0-9]+/i.test(t),
                c = /CrOS/.test(t),
                l = /silk/i.test(t),
                f = /sailfish/i.test(t),
                p = /tizen/i.test(t),
                m = /(web|hpw)os/i.test(t),
                v = /windows phone/i.test(t),
                h = (/SamsungBrowser/i.test(t), !v && /windows/i.test(t)),
                b = !s && !l && /macintosh/i.test(t),
                g = !a && !f && !p && !m && /linux/i.test(t),
                w = r(/edge\/(\d+(\.\d+)?)/i),
                y = r(/version\/(\d+(\.\d+)?)/i),
                S = /tablet/i.test(t) && !/tablet pc/i.test(t),
                O = !S && /[^-]mobi/i.test(t),
                P = /xbox/i.test(t);
            /opera/i.test(t) ? n = { name: "Opera", opera: e, version: y || r(/(?:opera|opr|opios)[\s\/](\d+(\.\d+)?)/i) } : /opr\/|opios/i.test(t) ? n = { name: "Opera", opera: e, version: r(/(?:opr|opios)[\s\/](\d+(\.\d+)?)/i) || y } : /SamsungBrowser/i.test(t) ? n = { name: "Samsung Internet for Android", samsungBrowser: e, version: y || r(/(?:SamsungBrowser)[\s\/](\d+(\.\d+)?)/i) } : /coast/i.test(t) ? n = { name: "Opera Coast", coast: e, version: y || r(/(?:coast)[\s\/](\d+(\.\d+)?)/i) } : /yabrowser/i.test(t) ? n = { name: "Yandex Browser", yandexbrowser: e, version: y || r(/(?:yabrowser)[\s\/](\d+(\.\d+)?)/i) } : /ucbrowser/i.test(t) ? n = { name: "UC Browser", ucbrowser: e, version: r(/(?:ucbrowser)[\s\/](\d+(?:\.\d+)+)/i) } : /mxios/i.test(t) ? n = { name: "Maxthon", maxthon: e, version: r(/(?:mxios)[\s\/](\d+(?:\.\d+)+)/i) } : /epiphany/i.test(t) ? n = { name: "Epiphany", epiphany: e, version: r(/(?:epiphany)[\s\/](\d+(?:\.\d+)+)/i) } : /puffin/i.test(t) ? n = { name: "Puffin", puffin: e, version: r(/(?:puffin)[\s\/](\d+(?:\.\d+)?)/i) } : /sleipnir/i.test(t) ? n = { name: "Sleipnir", sleipnir: e, version: r(/(?:sleipnir)[\s\/](\d+(?:\.\d+)+)/i) } : /k-meleon/i.test(t) ? n = { name: "K-Meleon", kMeleon: e, version: r(/(?:k-meleon)[\s\/](\d+(?:\.\d+)+)/i) } : v ? (n = { name: "Windows Phone", windowsphone: e }, w ? (n.msedge = e, n.version = w) : (n.msie = e, n.version = r(/iemobile\/(\d+(\.\d+)?)/i))) : /msie|trident/i.test(t) ? n = { name: "Internet Explorer", msie: e, version: r(/(?:msie |rv:)(\d+(\.\d+)?)/i) } : c ? n = { name: "Chrome", chromeos: e, chromeBook: e, chrome: e, version: r(/(?:chrome|crios|crmo)\/(\d+(\.\d+)?)/i) } : /chrome.+? edge/i.test(t) ? n = { name: "Microsoft Edge", msedge: e, version: w } : /vivaldi/i.test(t) ? n = { name: "Vivaldi", vivaldi: e, version: r(/vivaldi\/(\d+(\.\d+)?)/i) || y } : f ? n = { name: "Sailfish", sailfish: e, version: r(/sailfish\s?browser\/(\d+(\.\d+)?)/i) } : /seamonkey\//i.test(t) ? n = { name: "SeaMonkey", seamonkey: e, version: r(/seamonkey\/(\d+(\.\d+)?)/i) } : /firefox|iceweasel|fxios/i.test(t) ? (n = { name: "Firefox", firefox: e, version: r(/(?:firefox|iceweasel|fxios)[ \/](\d+(\.\d+)?)/i) }, /\((mobile|tablet);[^\)]*rv:[\d\.]+\)/i.test(t) && (n.firefoxos = e)) : l ? n = { name: "Amazon Silk", silk: e, version: r(/silk\/(\d+(\.\d+)?)/i) } : /phantom/i.test(t) ? n = { name: "PhantomJS", phantom: e, version: r(/phantomjs\/(\d+(\.\d+)?)/i) } : /slimerjs/i.test(t) ? n = { name: "SlimerJS", slimer: e, version: r(/slimerjs\/(\d+(\.\d+)?)/i) } : /blackberry|\bbb\d+/i.test(t) || /rim\stablet/i.test(t) ? n = { name: "BlackBerry", blackberry: e, version: y || r(/blackberry[\d]+\/(\d+(\.\d+)?)/i) } : m ? (n = { name: "WebOS", webos: e, version: y || r(/w(?:eb)?osbrowser\/(\d+(\.\d+)?)/i) }, /touchpad\//i.test(t) && (n.touchpad = e)) : /bada/i.test(t) ? n = { name: "Bada", bada: e, version: r(/dolfin\/(\d+(\.\d+)?)/i) } : p ? n = { name: "Tizen", tizen: e, version: r(/(?:tizen\s?)?browser\/(\d+(\.\d+)?)/i) || y } : /qupzilla/i.test(t) ? n = { name: "QupZilla", qupzilla: e, version: r(/(?:qupzilla)[\s\/](\d+(?:\.\d+)+)/i) || y } : /chromium/i.test(t) ? n = { name: "Chromium", chromium: e, version: r(/(?:chromium)[\s\/](\d+(?:\.\d+)?)/i) || y } : /chrome|crios|crmo/i.test(t) ? n = { name: "Chrome", chrome: e, version: r(/(?:chrome|crios|crmo)\/(\d+(\.\d+)?)/i) } : a ? n = { name: "Android", version: y } : /safari|applewebkit/i.test(t) ? (n = { name: "Safari", safari: e }, y && (n.version = y)) : s ? (n = { name: "iphone" == s ? "iPhone" : "ipad" == s ? "iPad" : "iPod" }, y && (n.version = y)) : n = /googlebot/i.test(t) ? { name: "Googlebot", googlebot: e, version: r(/googlebot\/(\d+(\.\d+))/i) || y } : { name: r(/^(.*)\/(.*) /), version: (i = /^(.*)\/(.*) /, o = t.match(i), o && o.length > 1 && o[2] || "") }, !n.msedge && /(apple)?webkit/i.test(t) ? (/(apple)?webkit\/537\.36/i.test(t) ? (n.name = n.name || "Blink", n.blink = e) : (n.name = n.name || "Webkit", n.webkit = e), !n.version && y && (n.version = y)) : !n.opera && /gecko\//i.test(t) && (n.name = n.name || "Gecko", n.gecko = e, n.version = n.version || r(/gecko\/(\d+(\.\d+)?)/i)), n.windowsphone || n.msedge || !a && !n.silk ? n.windowsphone || n.msedge || !s ? b ? n.mac = e : P ? n.xbox = e : h ? n.windows = e : g && (n.linux = e) : (n[s] = e, n.ios = e) : n.android = e;
            var _ = "";
            n.windows ? _ = function(e) {
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
            }(r(/Windows ((NT|XP)( \d\d?.\d)?)/i)) : n.windowsphone ? _ = r(/windows phone (?:os)?\s?(\d+(\.\d+)*)/i) : n.mac ? _ = (_ = r(/Mac OS X (\d+([_\.\s]\d+)*)/i)).replace(/[_\s]/g, ".") : s ? _ = (_ = r(/os (\d+([_\s]\d+)*) like mac os x/i)).replace(/[_\s]/g, ".") : a ? _ = r(/android[ \/-](\d+(\.\d+)*)/i) : n.webos ? _ = r(/(?:web|hpw)os\/(\d+(\.\d+)*)/i) : n.blackberry ? _ = r(/rim\stablet\sos\s(\d+(\.\d+)*)/i) : n.bada ? _ = r(/bada\/(\d+(\.\d+)*)/i) : n.tizen && (_ = r(/tizen[\/\s](\d+(\.\d+)*)/i)), _ && (n.osversion = _);
            var x = !n.windows && _.split(".")[0];
            return S || d || "ipad" == s || a && (3 == x || x >= 4 && !O) || n.silk ? n.tablet = e : (O || "iphone" == s || "ipod" == s || a || u || n.blackberry || n.webos || n.bada) && (n.mobile = e), n.msedge || n.msie && n.version >= 10 || n.yandexbrowser && n.version >= 15 || n.vivaldi && n.version >= 1 || n.chrome && n.version >= 20 || n.samsungBrowser && n.version >= 4 || n.firefox && n.version >= 20 || n.safari && n.version >= 6 || n.opera && n.version >= 10 || n.ios && n.osversion && n.osversion.split(".")[0] >= 6 || n.blackberry && n.version >= 10.1 || n.chromium && n.version >= 20 ? n.a = e : n.msie && n.version < 10 || n.chrome && n.version < 20 || n.firefox && n.version < 20 || n.safari && n.version < 6 || n.opera && n.version < 10 || n.ios && n.osversion && n.osversion.split(".")[0] < 6 || n.chromium && n.version < 20 ? n.c = e : n.x = e, n
        }
        var r = t("undefined" != typeof navigator && navigator.userAgent || "");

        function n(e) { return e.split(".").length }

        function i(e, t) { var r, n = []; if (Array.prototype.map) return Array.prototype.map.call(e, t); for (r = 0; r < e.length; r++) n.push(t(e[r])); return n }

        function o(e) { for (var t = Math.max(n(e[0]), n(e[1])), r = i(e, function(e) { var r = t - n(e); return i((e += new Array(r + 1).join(".0")).split("."), function(e) { return new Array(20 - e.length).join("0") + e }).reverse() }); --t >= 0;) { if (r[0][t] > r[1][t]) return 1; if (r[0][t] !== r[1][t]) return -1; if (0 === t) return 0 } }

        function s(e, n, i) {
            var s = r;
            "string" == typeof n && (i = n, n = void 0), void 0 === n && (n = !1), i && (s = t(i));
            var a = "" + s.version;
            for (var u in e)
                if (e.hasOwnProperty(u) && s[u]) { if ("string" != typeof e[u]) throw new Error("Browser version in the minVersion map should be a string: " + u + ": " + String(e)); return o([a, e[u]]) < 0 }
            return n
        }
        return r.test = function(e) { for (var t = 0; t < e.length; ++t) { var n = e[t]; if ("string" == typeof n && n in r) return !0 } return !1 }, r.isUnsupportedBrowser = s, r.compareVersions = o, r.check = function(e, t, r) { return !s(e, t, r) }, r._detect = t, r
    }, void 0 !== e && e.exports ? e.exports = n() : r(6)("bowser", n)
}, function(e, t, r) {
    "use strict";
    var n = this && this.__importDefault || function(e) { return e && e.__esModule ? e : { default: e } };
    Object.defineProperty(t, "__esModule", { value: !0 });
    var i = n(r(7));

    function o() { return "" === i.default.name && "" === i.default.version ? i.default._detect(navigator.userAgent) : i.default }
    t.redetectBrowserUserAgent = o, t.isPushNotificationsSupported = function() {
        var e = o(),
            t = navigator.userAgent || "";
        if ((e.chrome || e.chromium) && !1 === window.isSecureContext && void 0 === navigator.serviceWorker) return !0;
        if (e.firefox && Number(e.version) < 48 && (e.mobile || e.tablet)) return !1;
        if (e.firefox && Number(e.version) >= 47) return !(["20160725105554", "20160905130425", "20161031153904", "20161129180326", "20161209150850", "20170118123525", "20170227085837", "20170227131422", "20170301181722", "20170303022339", "20170316213902", "20170323110425", "20170410145022", "20170411115307", "20170412142208", "20170417065206", "20170504112025", "20170517122419", "20170607123825", "20170627155318", "20170801170322", "20170802111520", "20170917103825", "20170921064520", "20171005074949", "20171106172903", "20171107091003", "20171128121223", "20171206101620", "20171226003912", "20180116134019", "20180118122319", "20180307131617", "20180313134936", "20180315163333", "20180322140748", "20180426000307", "20180427183532", "20180427222832", "20180430140610", "20180503092946", "20180503164101", "20180516032417", "20180605153619", "20180605174236", "20180605201706", "20180619102821", "20180619173714", "20180621064021", "20180621121604", "20180830204350", "20180903060751", "20180920175354", "20181001135620", "20181017185317", "20181203164059", "20190121141556", "20190124141046", "20190211182645"].indexOf(navigator.buildID) > -1);
        return !(!e.safari && void 0 === navigator.serviceWorker || e.ios || e.ipod || e.iphone || e.ipad || e.msie || !(e.msedge && Number(e.version) >= 17.17063) && (t.indexOf("FBAN") > -1 || t.indexOf("FBAV") > -1 || navigator.appVersion.match(/ wv/) || !(e.safari && Number(e.version) >= 7.1) && !(e.samsungBrowser && Number(e.version) >= 4) && !((e.chrome || e.chromium) && Number(e.version) >= 54) && !(e.yandexbrowser && Number(e.version) >= 15.12) && !(e.opera && (e.mobile || e.tablet) && Number(e.version) >= 37 || e.opera && Number(e.version) >= 42) && !e.vivaldi))
    }
}, function(e, t, r) {
    "use strict";
    Object.defineProperty(t, "__esModule", { value: !0 });
    var n = r(8),
        i = r(5),
        o = r(4),
        s = function() {
            function e() {}
            return e.addScriptToPage = function(e) {
                var t = document.createElement("script");
                t.src = e, t.async = !0, document.head.appendChild(t)
            }, e.getPathAndPrefix = function() { return "https://cdn.onesignal.com/sdks/" }, e.isServiceWorkerRuntime = function() { return "undefined" == typeof window }, e.serviceWorkerSupportsPush = function() { return void 0 !== self.registration }, e.addOneSignalPageES6SDKStub = function() {
                var e = window.OneSignal,
                    t = Array.isArray(e);
                !e || t ? window.OneSignal = new i.OneSignalStubES6(e) : console.error("window.OneSignal already defined as '" + typeof OneSignal + "'!\n         Please make sure to define as 'window.OneSignal = window.OneSignal || [];'", OneSignal)
            }, e.addOneSignalPageES5SDKStub = function() {
                console.log("OneSignal: Using fallback ES5 Stub for backwards compatibility.");
                var e = window.OneSignal;
                window.OneSignal = new o.OneSignalStubES5(e)
            }, e.start = function() { e.isServiceWorkerRuntime() ? e.serviceWorkerSupportsPush() && self.importScripts(e.getPathAndPrefix() + "OneSignalSDKWorker.js?v=" + e.VERSION) : n.isPushNotificationsSupported() ? (e.addScriptToPage(e.getPathAndPrefix() + "OneSignalPageSDKES6.js?v=" + e.VERSION), e.addOneSignalPageES6SDKStub()) : e.addOneSignalPageES5SDKStub() }, e
        }();
    t.OneSignalShimLoader = s, s.VERSION = Number(150706)
}, function(e, t, r) {
    "use strict";
    Object.defineProperty(t, "__esModule", { value: !0 }), r(9).OneSignalShimLoader.start()
}]);
//# sourceMappingURL=OneSignalSDK.js.map