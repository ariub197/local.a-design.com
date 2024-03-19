/*--------------------------------------------------------------------------*
 *
 *  tippyjs
 *
 *--------------------------------------------------------------------------*/
$(function () {
  // tippyGeneral
  tippy(".tippy", {
    theme: "main",
    zIndex: "19999",
    placement: 'top',
    animation: 'shift-toward-subtle',
    // allowHTML: true,
    arrow: true,
  });

  if (window.matchMedia("(min-width: 1080px)").matches) {
    tippy(".tippy-pc", {
      theme: "blue",
      zIndex: "19999",
      placement: "top",
      allowHTML: true,
    });
  }

  // tippyClick
  const instance = tippy(".tippy-click", {
    theme: "blue",
    trigger: "click",
    zIndex: "19999",
  });
});
