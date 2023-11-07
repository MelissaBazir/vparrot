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

//do switch case

const sliderPrice = document.getElementById('price-slider')

if (sliderPrice) {
    const rangePrice = noUiSlider.create(sliderPrice, {
        start: [0, 100000],
        connect: true,
        range: {
            min: 0,
            max: 100000,
        },
    })
    const minPrice = document.getElementById('minPrice')
    const maxPrice = document.getElementById('maxPrice')

    rangePrice.on('slide', function (values, handle) {
        console.log(values, handle)
        // if (handle === 0) {
        //     minPrice.value = Math.round(values[0])
        // }
        // if (handle === 1) {
        //     maxPrice.value = Math.round(values[1])
        // }
    })
}

// const sliderYear = document.getElementById('year-slider')

// if (sliderYear) {
//     const rangeYear = noUiSlider.create(sliderYear, {
//         start: [1900, 2099],
//         connect: true,
//         range: {
//             min: 1900,
//             max: 2099,
//         },
//     })
//     const minYear = document.getElementById('minYear')
//     const maxYear = document.getElementById('maxYear')

//     rangeYear.on('slide', function (values, handle) {
//         console.log(values, handle)
//         if (handle === 0) {
//             minYear.value = Math.round(values[0])
//         }
//         if (handle === 1) {
//             maxYear.value = Math.round(values[1])
//         }
//     })
// }

// const sliderMileage = document.getElementById('mileage-slider')

// if (sliderMileage) {
//     const rangeMileage = noUiSlider.create(sliderMileage, {
//         start: [20, 80],
//         connect: true,
//         range: {
//             min: 0,
//             max: 100,
//         },
//     })
//     const minMileage = document.getElementById('minMileage')
//     const maxMileage = document.getElementById('maxMileage')

//     rangeMileage.on('slide', function (values, handle) {
//         if (handle === 0) {
//             minMileage.value = Math.round(values[0])
//         }
//         if (handle === 1) {
//             maxMileage.value = Math.round(values[1])
//         }
//     })
// }

function slide(id) {
    const slider = document.getElementById(id)

    if (slider) {
        noUiSlider.create(slider, {
            start: [20, 80],
            connect: true,
            range: {
                min: 0,
                max: 100,
            },
        })
    }
}

