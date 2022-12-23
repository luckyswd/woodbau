const burgerMenu = document.querySelector('.burger-menu')
const html = document.querySelector('html')
const burgerCloseMenu = document.querySelector('.burger-menu__close')
const hasChildren = document.querySelector('.menu-item-has-children')
const arrowIcon = document.querySelector('.arrow-icon')


$('.burger-menu .menu-item-has-children').append(`<div class="arrow-icon"> <svg xmlns="http://www.w3.org/2000/svg" width="39" height="22" viewBox="0 0 39 22" fill="none">
<path d="M2 2C19.322 19.4309 20.8842 21.0029 19.5 19.61L37 2" stroke="#FFFFFF" stroke-width="4"/>
</svg></div>`)


if (burgerCloseMenu !== null) {
  burgerCloseMenu.addEventListener('click', () => {

    burgerMenu.classList.toggle('js-active-menu');
    html.classList.toggle('js-active-html-menu');
  })
}

$('.arrow-icon').click(function () {
  const menu = $(this).parent('.menu-item-has-children')
  $(menu).toggleClass('js-active-sub-menu')
})

const containerDelivery = document.querySelector('.calculator__block-left-delivery');
const containerModifications = document.querySelector('.calculator__block-left-modifications');
const containerWindow = document.querySelector('.calculator__block-left-window');
const containerDoor = document.querySelector('.calculator__block-left-door');
const containerRoofColor = document.querySelector('.calculator__block-left-roof_color');
const containerDiameter = document.querySelector('.calculator__block-left-diameter');
const containerOvenLocation = document.querySelector('.calculator__block-left-oven_location');
const containerMaterials = document.querySelector('.calculator__block-right-materials');
const containerOvens = document.querySelector('.calculator__block-right-ovens');
const containerExternalTreatmentColor = document.querySelector('.calculator__block-right-external_treatment_color');
const containerAdditionalOptions = document.querySelector('.calculator__block-right-additional_options');
let price = 0;
let itemsResult;


function addActiveClass(container) {
  if (container !== null) {
    let containerItems = container.querySelectorAll('.item-col-3');
    if (containerItems.length === 0) {
      containerItems = container.querySelectorAll('.item-col-4');
    }
    containerItems.forEach((item) => {
      item.addEventListener('click', () => {
        containerItems.forEach((elem) => {
          elem.classList.remove('js-active-item');
        })
        item.classList.add('js-active-item')
        priceList();
      })
    })
  }
}

addActiveClass(containerDelivery);
addActiveClass(containerModifications);
addActiveClass(containerWindow);
addActiveClass(containerDoor);
addActiveClass(containerRoofColor);
addActiveClass(containerDiameter);
addActiveClass(containerOvenLocation);
addActiveClass(containerMaterials);
addActiveClass(containerExternalTreatmentColor);

if (containerOvens !== null) {
  let containerItems = containerOvens.querySelectorAll('.item-col-3');
  containerItems.forEach((item) => {
    containerItems.forEach((item) => {

      item.addEventListener('click', () => {
        if (item.classList.contains('js-active-open') === true) {
          containerItems.forEach((elem) => {
            elem.classList.remove('js-active-open');
          })
        } else {
          item.classList.toggle('js-active-open')
        }
      })
    })
  })
}

if (containerOvens !== null) {
  const containerItems = containerOvens.querySelectorAll('.item-col-3');
  const allVariationItems = document.querySelectorAll('.ovens-variation-item');

  containerItems.forEach((item) => {
    item.addEventListener('click', () => {
      const variationItems = item.querySelector('.ovens-variation-items');
      if (variationItems !== null) {
        const variationItem = variationItems.querySelectorAll('.ovens-variation-item');
        variationItem.forEach((subItem) => {
          subItem.addEventListener('click', () => {
            allVariationItems.forEach((allSubItems) => {
              allSubItems.classList.remove('js-active-item')
            })
            containerItems.forEach((items) => {
              items.classList.remove('js-active-item')
            })
            subItem.classList.add('js-active-item');
          })
        })
      } else {
        allVariationItems.forEach((allSubItems) => {
          allSubItems.classList.remove('js-active-item')
        })

        item.classList.add('js-active-item');
      }

      priceList();
    })
  })
}

if (containerAdditionalOptions !== null) {
  let containerItems = containerAdditionalOptions.querySelectorAll('.item-col-4');
  containerItems.forEach((item) => {
    item.addEventListener('click', () => {
      item.classList.toggle('js-active-item')
      priceList();
    })
  })
}

const inputResultItems = document.querySelector('.hidden-fields-data input');
const containerResultScroll = document.querySelector('.total-price')
const containerPrice = document.querySelector('.calculator-total-price-sticky');

function priceList() {
  let activeItems = document.querySelectorAll('.js-active-item');
  price = [];
  itemsResult = [];

  const reducer = (previousValue, currentValue) => previousValue + currentValue;
  activeItems.forEach((item) => {
    const title = item.querySelector('.item-description');
    const subTitle = item.querySelector('.ovens-variation-item-title');
    const diameter = item.querySelector('.calculator__block-left-diameter-item-diametr');

    if (diameter !== null) {
      itemsResult.push(diameter.textContent.trim());
    }

    if (title !== null) {
      itemsResult.push(title.textContent.trim());
    }
    if (subTitle !== null) {
      itemsResult.push(subTitle.textContent.trim());
    }

    //       itemsResult.push(Number(item.getAttribute('data-price')));
    //      price = itemsResult.reduce(reducer);
    //      if (containerResultScroll !== null) {
    //          containerPrice.style.visibility = 'visible';
    //          containerResultScroll.textContent = price;
    //      }

    finalResult = itemsResult.join(', ');
    inputResultItems.value = finalResult;
  })

}

const resultDiameter = document.querySelector('.calculator__block-left-diameter-items-results');
const containerDiameterItems = document.querySelector('.calculator__block-left-diameter-items');
const containerDiameterItem = '.calculator__block-left-diameter-item'

const resultLength = document.querySelector('.container-length');
const containerLengthItems = document.querySelector('.length-items');
const containerLengthItem = '.length-item'

selectChoose(resultDiameter, containerDiameterItems, containerDiameterItem);
selectChoose(resultLength, containerLengthItems, containerLengthItem);

function selectChoose(containerClass, itemsClass, itemClass) {
  if (containerClass !== null) {
    containerClass.addEventListener('click', () => {
      containerClass.classList.toggle('js-open-select');
      itemsClass.classList.toggle('js-open-select-items');
    })

    if (itemsClass !== null) {
      const itemsDiameter = itemsClass.querySelectorAll(itemClass)
      const countItems = itemsDiameter.length;
      itemsDiameter.forEach((item, key) => {
        item.addEventListener('click', () => {
          itemsDiameter.forEach((elem) => {
            elem.classList.remove('js-active-item')
          })
          item.classList.add('js-active-item')
          priceList();
          containerClass.classList.remove('js-open-select');
          itemsClass.classList.remove('js-open-select-items');
          containerClass.textContent = item.textContent;

          if (key + 1 === countItems) {
            let penultimateElement = countItems - 2;
            itemsDiameter[penultimateElement].style.borderBottom = "unset";
          } else {
            let penultimateElement = countItems - 2;
            itemsDiameter[penultimateElement].style.borderBottom = "4px solid #459D69";
          }

        })
      })
    }

  }
}

const msnry = new Masonry('.grid-masonry', {
  itemSelector: '.grid-masonry-item',
  gutter: 15,
  fitWidth: true,
})

const calculator = document.querySelector('.calculator');

if (calculator !== null) {
  const html = document.querySelector('html');
  html.style.overflow = 'unset';
}

const swiper = new Swiper(".mySwiper", {
  spaceBetween: 20,
  slidesPerView: 3,
  freeMode: true,
  watchSlidesProgress: true,
});

const swiper2 = new Swiper(".mySwiper2", {
  spaceBetween: 20,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  thumbs: {
    swiper: swiper,
  },
});
const prodName = $('.slider-info__right h1');
if (prodName.length) {
  $('input[name="prod-name"]').val(prodName.text());
}

new Swiper(".gallerySlider", {
  slidesPerView: 3,
  spaceBetween: 20,
  loop: true,
  autoplay: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    320: {
      slidesPerView: 1,
      spaceBetween: 20
    },
    768: {
      slidesPerView: 3,
      spaceBetween: 20
    },
  }
});

const pSlider = $('.p-partners-slider');
if (pSlider.length) {
  new Swiper(".p-partners-slider", {
    slidesPerView: 4,
    loop: true,
    spaceBetween: 29,
    autoplay: true,
    navigation: {
      nextEl: ".p-nav-button-next",
      prevEl: ".p-nav-button-prev",
    },
  });
}

$.fn.collapsible = function (options, methodParam) {
  var defaults = {
    accordion: undefined,
    onOpen: undefined,
    onClose: undefined,
  };

  var methodName = options;
  options = $.extend(defaults, options);

  return this.each(function () {
    var $this = $(this);

    var $panel_headers = $(this).find("> li > .collapsible-header");

    var collapsible_type = $this.data("collapsible");

    /****************
     Helper Functions
     ****************/

    // Accordion Open
    function accordionOpen(object) {
      $panel_headers = $this.find("> li > .collapsible-header");
      if (object.hasClass("active")) {
        object.parent().addClass("active");
      } else {
        object.parent().removeClass("active");
      }
      if (object.parent().hasClass("active")) {
        object
          .siblings(".collapsible-body")
          .stop(true, false)
          .slideDown({
            duration: 350,
            queue: false,
            complete: function () {
              $(this).css("height", "");
            },
          });
      } else {
        object
          .siblings(".collapsible-body")
          .stop(true, false)
          .slideUp({
            duration: 350,
            queue: false,
            complete: function () {
              $(this).css("height", "");
            },
          });
      }

      $panel_headers
        .not(object)
        .removeClass("active")
        .parent()
        .removeClass("active");

      // Close previously open accordion elements.
      $panel_headers
        .not(object)
        .parent()
        .children(".collapsible-body")
        .stop(true, false)
        .each(function () {
          if ($(this).is(":visible")) {
            $(this).slideUp({
              duration: 350,
              queue: false,
              complete: function () {
                $(this).css("height", "");
                execCallbacks($(this).siblings(".collapsible-header"));
              },
            });
          }
        });
    }

    // Expandable Open
    function expandableOpen(object) {
      if (object.hasClass("active")) {
        object.parent().addClass("active");
      } else {
        object.parent().removeClass("active");
      }
      if (object.parent().hasClass("active")) {
        object
          .siblings(".collapsible-body")
          .stop(true, false)
          .slideDown({
            duration: 350,
            queue: false,
            complete: function () {
              $(this).css("height", "");
            },
          });
      } else {
        object
          .siblings(".collapsible-body")
          .stop(true, false)
          .slideUp({
            duration: 350,
            queue: false,
            complete: function () {
              $(this).css("height", "");
            },
          });
      }
    }

    // Open collapsible. object: .collapsible-header
    function collapsibleOpen(object, noToggle) {
      if (!noToggle) {
        object.toggleClass("active");
      }

      if (
        options.accordion ||
        collapsible_type === "accordion" ||
        collapsible_type === undefined
      ) {
        // Handle Accordion
        accordionOpen(object);
      } else {
        // Handle Expandables
        expandableOpen(object);
      }

      execCallbacks(object);
    }

    // Handle callbacks
    function execCallbacks(object) {
      if (object.hasClass("active")) {
        if (typeof options.onOpen === "function") {
          options.onOpen.call(this, object.parent());
        }
      } else {
        if (typeof options.onClose === "function") {
          options.onClose.call(this, object.parent());
        }
      }
    }

    function isChildrenOfPanelHeader(object) {
      var panelHeader = getPanelHeader(object);

      return panelHeader.length > 0;
    }

    function getPanelHeader(object) {
      return object.closest("li > .collapsible-header");
    }

    // Turn off any existing event handlers
    function removeEventHandlers() {
      $this.off("click.collapse", "> li > .collapsible-header");
    }

    /*****  End Helper Functions  *****/

    // Methods
    if (methodName === "destroy") {
      removeEventHandlers();
      return;
    } else if (methodParam >= 0 && methodParam < $panel_headers.length) {
      var $curr_header = $panel_headers.eq(methodParam);
      if (
        $curr_header.length &&
        (methodName === "open" ||
          (methodName === "close" && $curr_header.hasClass("active")))
      ) {
        collapsibleOpen($curr_header);
      }
      return;
    }

    removeEventHandlers();

    // Add click handler to only direct collapsible header children
    $this.on("click.collapse", "> li > .collapsible-header", function (e) {
      var element = $(e.target);

      if (isChildrenOfPanelHeader(element)) {
        element = getPanelHeader(element);
      }

      collapsibleOpen(element);
    });

    // Open first active
    if (
      options.accordion ||
      collapsible_type === "accordion" ||
      collapsible_type === undefined
    ) {
      // Handle Accordion
      collapsibleOpen($panel_headers.filter(".active").first(), true);
    } else {
      // Handle Expandables
      $panel_headers.filter(".active").each(function () {
        collapsibleOpen($(this), true);
      });
    }
  });
};

$('.collapsible').collapsible({
  accordion: false
});

let sliderPrice = document.querySelector('.slider-info__right-price span');
const switchers = document.querySelectorAll('.service-item-switcher');
const sliderInfoTabs = document.querySelectorAll('.slider-info-tabs h4');
const sliderInfoCharacteristics = document.querySelectorAll('.slider-info-content div');

if (switchers !== null) {
  switchers.forEach((item) => {
    item.addEventListener('click', () => {
      item.classList.toggle('active-switch')
      if (item.classList.contains('active-switch')) {
        sliderPrice.textContent = Number(sliderPrice.textContent) + Number(item.getAttribute('data-price'))
      } else {
        sliderPrice.textContent = Number(sliderPrice.textContent) - Number(item.getAttribute('data-price'))
      }
    })
  })
}

if (sliderInfoTabs !== null) {
  sliderInfoTabs.forEach((item) => {
    item.addEventListener('click', () => {

      const dataClass = document.querySelector(`.${item.getAttribute('data-class')}`)

      sliderInfoTabs.forEach((elem) => {
        elem.classList.remove('js-active-item')
      })

      sliderInfoCharacteristics.forEach((elem) => {
        elem.classList.remove('js-active-item')
      })

      dataClass.classList.add('js-active-item')
      item.classList.add('js-active-item')
    })
  })
}

