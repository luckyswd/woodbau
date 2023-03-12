let sliderPrice = document.querySelector('.slider-info__right-price .price');
const switchersTop = document.querySelectorAll('.service-item-switcher.top');
const switchersBottom = document.querySelectorAll('.service-item-switcher.bottom');
const sliderInfoTabs = document.querySelectorAll('.slider-info-tabs h4');
const sliderInfoCharacteristics = document.querySelectorAll('.slider-info-content div');

if (switchersTop !== null) {
  switchersTop.forEach((item) => {
    item.addEventListener('click', () => {
      switchersTop.forEach((switchTop) => {
        if (switchTop.classList.contains('active-switch')) {
          switchTop.classList.remove('active-switch');
          sliderPrice.textContent = Number(sliderPrice.textContent) - Number(switchTop.getAttribute('data-price'))
        }
      })

      item.classList.add('active-switch');
      if (item.classList.contains('active-switch')) {
        item.classList.add('active-switch');
        sliderPrice.textContent = Number(sliderPrice.textContent) + Number(item.getAttribute('data-price'))
      }
    })
  })
}

if (switchersBottom !== null) {
  switchersBottom.forEach((item) => {
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

// const switchItems = document.querySelectorAll('.service-item-switcher')
// const textAreaInput = document.querySelector('#modal-popup textarea')
// let result;
//
// switchItems && switchItems.forEach((item) => {
//   item.addEventListener('click', () => {
//     const switchItemsActive = document.querySelectorAll('.service-item-switcher.active-switch')
//     console.log(switchItemsActive)
//     switchItemsActive.forEach((item) => {
//       const parentContainer = item.parentNode.parentNode;
//       const container = item.parentNode;
//       const categoryTitle = parentContainer && parentContainer.querySelector('h4');
//       const value = container && container.querySelector('.service-item-name');
//
//       result = `${categoryTitle.textContent} \r\n${value.textContent}`;
//     })
//
//     textAreaInput.value = result
//   })
// })