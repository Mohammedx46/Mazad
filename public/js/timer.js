const timer = {

    day: 0,
    hr: 0,
    min: 0,
    sec: 0,

    get days() {
        return this.day;
    },

    get hours() {
        return (this.hr > 0) ? this.hr.toLocaleString('en-US', { minimumIntegerDigits: 2, useGrouping: false }) : '0';
    },

    get minutes() {
        return this.min.toLocaleString('en-US', { minimumIntegerDigits: 2, useGrouping: false });
    },

    get seconds() {
        return this.sec.toLocaleString('en-US', { minimumIntegerDigits: 2, useGrouping: false });
    },

    countDown(endDate, id) {
        let endTime = Math.floor(new Date(endDate).getTime() / 1000)
        const days = document.querySelector(`#days-${id}`)
        const hours = document.querySelector(`#hours-${id}`)
        const minutes = document.querySelector(`#minutes-${id}`)
        const seconds = document.querySelector(`#seconds-${id}`)

        setInterval(() => {

            if (endTime < Math.floor(Date.now() / 1000)) {
                return
            }
            let elapsedTime = endTime - Math.floor(Date.now() / 1000)

            this.day = Math.floor(elapsedTime / 60 / 60 / 24)
            days.innerText = this.days
            this.hr = Math.floor(elapsedTime / 60 / 60 % 24)
            hours.innerText = this.hours
            this.min = Math.floor(elapsedTime / 60 % 60)
            minutes.innerText = this.minutes
            this.sec = Math.floor(elapsedTime % 60)
            seconds.innerText = this.seconds
        }, 1000)
    },
}

document.querySelectorAll('.timer').forEach(node => {
    const endDate = node.dataset.endDate
    const productId = node.dataset.productId

    timer.countDown(endDate, productId)
})