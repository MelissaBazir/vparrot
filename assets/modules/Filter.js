/**
 * @property {HTMLElement} pagination
 * @property {HTMLElement} content
 * @property {HTMLFormElement} form
 */

export default class Filter {

    /**
     * 
     * @param {HTMLElement|null} element 
     */

    constructor(element){
        if (element === null) {
            return
        }
        this.pagination = element.querySelector('.js-filter-pagination')
        this.content = element.querySelector('.js-filter-content')
        this.form = element.querySelector('.js-filter-form')
        this.bindEvents()
    }

    /**
     * Add behaviour to the different elements
     */
    bindEvents() {
        this.form.querySelectorAll('input').forEach(input => {
            input.addEventListener('change', this.loadForm.bind(this))
        })
    }

    async loadForm () {
        const data = new FormData(this.form)
        const url = new URL(this.form.getAttribute('action') || window.location.href)
        const params = new URLSearchParams()
        data.forEach((value, key) => {
            params.append(key, value)
        })
        return this.loadUrl(url.pathname + '?' + params.toString())
    }

    // Ajax function with fetch
    async loadUrl (url) {
        // to keep in cache both Json and Ajax responses
        const ajaxUrl = url + '&ajax=1'
        const response = await fetch(ajaxUrl, {
            // this header indicates to the browser it's an Ajax request
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            }
        })
        if (response.status >= 200 && response.status < 300) {
            const data = await response.json()
            this.content.innerHTML = data.content
            history.replaceState({}, '', url)
        } else {
            console.error(response)
        }
    }
}