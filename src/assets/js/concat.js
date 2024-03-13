!(function (e) {
  var t,
    a = { kitId: "tmd3soq", scriptTimeout: 3e3, async: !0 },
    s = e.documentElement,
    i = setTimeout(function () {
      s.className = s.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
    }, a.scriptTimeout),
    o = e.createElement("script"),
    c = !1,
    e = e.getElementsByTagName("script")[0];
  (s.className += " wf-loading"),
    (o.src = "https://use.typekit.net/" + a.kitId + ".js"),
    (o.async = !0),
    (o.onload = o.onreadystatechange =
      function () {
        if (
          ((t = this.readyState),
          !(c || (t && "complete" != t && "loaded" != t)))
        ) {
          (c = !0), clearTimeout(i);
          try {
            Typekit.load(a);
          } catch (e) {}
        }
      }),
    e.parentNode.insertBefore(o, e);
})(document),
  jQuery(function () {
    $("#js-drawer").on("click", function (e) {
      return (
        e.preventDefault(),
        $(this).toggleClass("is-active"),
        $(".c-drawer-content").toggleClass("is-active"),
        $(".c-drawer-background").toggleClass("is-active"),
        $(this).hasClass("is-active")
          ? $("body,html").css("overflow-y", "hidden")
          : $("body,html").css("overflow-y", "visible"),
        !1
      );
    });
    new Swiper(".swiper", {
      loop: !0,
      slidesPerView: "auto",
      spaceBetween: 24,
      speed: 800,
      effect: "fade",
      autoplay: { delay: 4e3, disableOnInteraction: !1 },
      pagination: {
        el: ".swiper-pagination",
        type: "bullets",
        clickable: "true",
      },
      scrollbar: { el: ".swiper-scrollbar" },
    });
    $("#c-pagetop").hide(),
      $(window).scroll(function () {
        100 < $(this).scrollTop()
          ? $("#c-pagetop").fadeIn()
          : $("#c-pagetop").fadeOut();
      }),
      $("#c-pagetop").on(
        "click",
        () => ($("body,html").animate({ scrollTop: 0 }, 500), !1)
      );
  });
!(function (e) {
  var t,
    a = { kitId: "tmd3soq", scriptTimeout: 3e3, async: !0 },
    s = e.documentElement,
    i = setTimeout(function () {
      s.className = s.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
    }, a.scriptTimeout),
    o = e.createElement("script"),
    c = !1,
    e = e.getElementsByTagName("script")[0];
  (s.className += " wf-loading"),
    (o.src = "https://use.typekit.net/" + a.kitId + ".js"),
    (o.async = !0),
    (o.onload = o.onreadystatechange =
      function () {
        if (
          ((t = this.readyState),
          !(c || (t && "complete" != t && "loaded" != t)))
        ) {
          (c = !0), clearTimeout(i);
          try {
            Typekit.load(a);
          } catch (e) {}
        }
      }),
    e.parentNode.insertBefore(o, e);
})(document),
  jQuery(function () {
    $("#js-drawer").on("click", function (e) {
      return (
        e.preventDefault(),
        $(this).toggleClass("is-active"),
        $(".c-drawer-content").toggleClass("is-active"),
        $(".c-drawer-background").toggleClass("is-active"),
        $(this).hasClass("is-active")
          ? $("body,html").css("overflow-y", "hidden")
          : $("body,html").css("overflow-y", "visible"),
        !1
      );
    });
    new Swiper(".swiper", {
      loop: !0,
      slidesPerView: "auto",
      spaceBetween: 24,
      speed: 800,
      effect: "fade",
      autoplay: { delay: 4e3, disableOnInteraction: !1 },
      pagination: {
        el: ".swiper-pagination",
        type: "bullets",
        clickable: "true",
      },
      scrollbar: { el: ".swiper-scrollbar" },
    });
    $("#c-pagetop").hide(),
      $(window).scroll(function () {
        100 < $(this).scrollTop()
          ? $("#c-pagetop").fadeIn()
          : $("#c-pagetop").fadeOut();
      }),
      $("#c-pagetop").on(
        "click",
        () => ($("body,html").animate({ scrollTop: 0 }, 500), !1)
      );
  });
!(function (e) {
  var t,
    a = { kitId: "tmd3soq", scriptTimeout: 3e3, async: !0 },
    s = e.documentElement,
    i = setTimeout(function () {
      s.className = s.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
    }, a.scriptTimeout),
    o = e.createElement("script"),
    c = !1,
    e = e.getElementsByTagName("script")[0];
  (s.className += " wf-loading"),
    (o.src = "https://use.typekit.net/" + a.kitId + ".js"),
    (o.async = !0),
    (o.onload = o.onreadystatechange =
      function () {
        if (
          ((t = this.readyState),
          !(c || (t && "complete" != t && "loaded" != t)))
        ) {
          (c = !0), clearTimeout(i);
          try {
            Typekit.load(a);
          } catch (e) {}
        }
      }),
    e.parentNode.insertBefore(o, e);
})(document),
  jQuery(function () {
    $("#js-drawer").on("click", function (e) {
      return (
        e.preventDefault(),
        $(this).toggleClass("is-active"),
        $(".c-drawer-content").toggleClass("is-active"),
        $(".c-drawer-background").toggleClass("is-active"),
        $(this).hasClass("is-active")
          ? $("body,html").css("overflow-y", "hidden")
          : $("body,html").css("overflow-y", "visible"),
        !1
      );
    }),
      new Swiper(".swiper", {
        loop: !0,
        slidesPerView: "auto",
        spaceBetween: 24,
        speed: 800,
        effect: "fade",
        autoplay: { delay: 4e3, disableOnInteraction: !1 },
        pagination: {
          el: ".swiper-pagination",
          type: "bullets",
          clickable: "true",
        },
        scrollbar: { el: ".swiper-scrollbar" },
      }),
      $("#c-pagetop").hide(),
      $(window).scroll(function () {
        100 < $(this).scrollTop()
          ? $("#c-pagetop").fadeIn()
          : $("#c-pagetop").fadeOut();
      }),
      $("#c-pagetop").on(
        "click",
        () => ($("body,html").animate({ scrollTop: 0 }, 500), !1)
      );
  }),
  (function (e) {
    var t,
      a = { kitId: "tmd3soq", scriptTimeout: 3e3, async: !0 },
      s = e.documentElement,
      i = setTimeout(function () {
        s.className =
          s.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
      }, a.scriptTimeout),
      o = e.createElement("script"),
      c = !1,
      e = e.getElementsByTagName("script")[0];
    (s.className += " wf-loading"),
      (o.src = "https://use.typekit.net/" + a.kitId + ".js"),
      (o.async = !0),
      (o.onload = o.onreadystatechange =
        function () {
          if (
            ((t = this.readyState),
            !(c || (t && "complete" != t && "loaded" != t)))
          ) {
            (c = !0), clearTimeout(i);
            try {
              Typekit.load(a);
            } catch (e) {}
          }
        }),
      e.parentNode.insertBefore(o, e);
  })(document),
  jQuery(function () {
    $("#js-drawer").on("click", function (e) {
      return (
        e.preventDefault(),
        $(this).toggleClass("is-active"),
        $(".c-drawer-content").toggleClass("is-active"),
        $(".c-drawer-background").toggleClass("is-active"),
        $(this).hasClass("is-active")
          ? $("body,html").css("overflow-y", "hidden")
          : $("body,html").css("overflow-y", "visible"),
        !1
      );
    }),
      new Swiper(".swiper", {
        loop: !0,
        slidesPerView: "auto",
        spaceBetween: 24,
        speed: 800,
        effect: "fade",
        autoplay: { delay: 4e3, disableOnInteraction: !1 },
        pagination: {
          el: ".swiper-pagination",
          type: "bullets",
          clickable: "true",
        },
        scrollbar: { el: ".swiper-scrollbar" },
      }),
      $("#c-pagetop").hide(),
      $(window).scroll(function () {
        100 < $(this).scrollTop()
          ? $("#c-pagetop").fadeIn()
          : $("#c-pagetop").fadeOut();
      }),
      $("#c-pagetop").on(
        "click",
        () => ($("body,html").animate({ scrollTop: 0 }, 500), !1)
      );
  });
!(function (e) {
  var t,
    a = { kitId: "tmd3soq", scriptTimeout: 3e3, async: !0 },
    s = e.documentElement,
    i = setTimeout(function () {
      s.className = s.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
    }, a.scriptTimeout),
    o = e.createElement("script"),
    c = !1,
    e = e.getElementsByTagName("script")[0];
  (s.className += " wf-loading"),
    (o.src = "https://use.typekit.net/" + a.kitId + ".js"),
    (o.async = !0),
    (o.onload = o.onreadystatechange =
      function () {
        if (
          ((t = this.readyState),
          !(c || (t && "complete" != t && "loaded" != t)))
        ) {
          (c = !0), clearTimeout(i);
          try {
            Typekit.load(a);
          } catch (e) {}
        }
      }),
    e.parentNode.insertBefore(o, e);
})(document),
  jQuery(function () {
    $("#js-drawer").on("click", function (e) {
      return (
        e.preventDefault(),
        $(this).toggleClass("is-active"),
        $(".c-drawer-content").toggleClass("is-active"),
        $(".c-drawer-background").toggleClass("is-active"),
        $(this).hasClass("is-active")
          ? $("body,html").css("overflow-y", "hidden")
          : $("body,html").css("overflow-y", "visible"),
        !1
      );
    });
    new Swiper(".swiper", {
      loop: !0,
      slidesPerView: "auto",
      spaceBetween: 24,
      speed: 800,
      effect: "fade",
      autoplay: { delay: 4e3, disableOnInteraction: !1 },
      pagination: {
        el: ".swiper-pagination",
        type: "bullets",
        clickable: "true",
      },
      scrollbar: { el: ".swiper-scrollbar" },
    });
    $("#c-pagetop").hide(),
      $(window).scroll(function () {
        100 < $(this).scrollTop()
          ? $("#c-pagetop").fadeIn()
          : $("#c-pagetop").fadeOut();
      }),
      $("#c-pagetop").on(
        "click",
        () => ($("body,html").animate({ scrollTop: 0 }, 500), !1)
      );
  });
const stalker = document.getElementById("cursor__stalker");
const cursor = document.getElementById("cursor");
const mouseTarget = document.getElementsByTagName("a");
document.addEventListener("mousemove", function (e) {
  stalker.style.transform =
    "translate(" + e.clientX + "px, " + e.clientY + "px)";
  cursor.style.transform =
    "translate(" + e.clientX + "px, " + e.clientY + "px)";
});

let scale = (stalker.style.scale = 1);

mouseTarget.addEventListener(
  "mouseenter",
  function (e) {
    scale = 2;
    talker.style.transform =
      "translate(" + x + "px," + y + "px) scale(" + scale + ")";
  },
  function () {
    scale = 1;
  }
);

//
//aタグにホバー中かどうかの判別フラグ
let hovFlag = false;

//マウスに追従させる処理 （リンクに吸い付いてる時は除外する）
document.addEventListener("mousemove", function (e) {
  if (!hovFlag) {
    stalker.style.transform =
      "translate(" + e.clientX + "px, " + e.clientY + "px)";
  }
});

//リンクへ吸い付く処理
const linkElem = document.querySelectorAll("a:not(.no_stick_)");
for (let i = 0; i < linkElem.length; i++) {
  //マウスホバー時
  linkElem[i].addEventListener("mouseover", function (e) {
    hovFlag = true;

    //マウスストーカーにクラスをつける
    stalker.classList.add("hov_");

    //マウスストーカーの位置をリンクの中心に固定
    let rect = e.target.getBoundingClientRect();
    let posX = rect.left + rect.width / 2;
    let posY = rect.top + rect.height / 2;

    stalker.style.transform = "translate(" + posX + "px, " + posY + "px)";
  });
  //マウスホバー解除時
  linkElem[i].addEventListener("mouseout", function (e) {
    hovFlag = false;
    stalker.classList.remove("hov_");
  });
}
