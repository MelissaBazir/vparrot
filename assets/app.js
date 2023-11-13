/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.scss';
require('bootstrap');

import * as noUiSlider from 'nouislider'
import 'nouislider/dist/nouislider.css'
import Filter from './modules/Filter'

new Filter(document.querySelector('.js-filter'))



const sliderPrice = document.getElementById('price-slider')

if (sliderPrice) {
    const minPrice = document.getElementById('minPrice')
    const maxPrice = document.getElementById('maxPrice')
    const rangePrice = noUiSlider.create(sliderPrice, {
        start: [minPrice.value || 0, maxPrice.value || 100000],
        connect: true,
        step: 1000,
        range: {
            min: 0,
            max: 100000,
        },
    })
    

    rangePrice.on('slide', function (values, handle) {
        console.log(values, handle)
        if (handle === 0) {
            minPrice.value = Math.round(values[0])
        }
        if (handle === 1) {
            maxPrice.value = Math.round(values[1])
        }
    })
    rangePrice.on('end', function (values, handle) {
        minPrice.dispatchEvent(new Event('change'))
    })
}

const sliderYear = document.getElementById('year-slider')

if (sliderYear) {
    const minYear = document.getElementById('minYear')
    const maxYear = document.getElementById('maxYear')
    const rangeYear = noUiSlider.create(sliderYear, {
        start: [minYear.value || 1900, maxYear.value || 2024],
        connect: true,
        step: 10,
        range: {
            min: 1900,
            max: 2024,
        },
    })
    
    

    rangeYear.on('slide', function (values, handle) {
        console.log(values, handle)
        if (handle === 0) {
            minYear.value = Math.round(values[0])
        }
        if (handle === 1) {
            maxYear.value = Math.round(values[1])
        }
    })
    rangeYear.on('end', function (values, handle) {
        minYear.dispatchEvent(new Event('change'))
    })
}

const sliderMileage = document.getElementById('mileage-slider')

if (sliderMileage) {
    const minMileage = document.getElementById('minMileage')
    const maxMileage = document.getElementById('maxMileage')
    const rangeMileage = noUiSlider.create(sliderMileage, {
        start: [minMileage.value || 0, maxMileage.value || 1000000],
        connect: true,
        step: 10000,
        range: {
            min: 0,
            max: 1000000,
        },
    })
    

    rangeMileage.on('slide', function (values, handle) {
        if (handle === 0) {
            minMileage.value = Math.round(values[0])
        }
        if (handle === 1) {
            maxMileage.value = Math.round(values[1])
        }
    })
    rangeMileage.on('end', function (values, handle) {
        minMileage.dispatchEvent(new Event('change'))
    })

}

// function slide(element) {
//     const slider = document.getElementById(id)

//     if (slider) {
//         noUiSlider.create(slider, {
//             start: [20, 80],
//             connect: true,
//             range: {
//                 min: 0,
//                 max: 100,
//             },
//         })
//     }
// }

