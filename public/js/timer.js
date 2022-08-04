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
        setInterval(() => {
            if (endTime < Math.floor(Date.now() / 1000)) {
                return
            }
            let elapsedTime = endTime - Math.floor(Date.now() / 1000)

            this.day = Math.floor(elapsedTime / 60 / 60 / 24)
            $(`#days-${id}`).text(this.days)

            this.hr = Math.floor(elapsedTime / 60 / 60 % 24)
            $(`#hours-${id}`).text(this.hours)

            this.min = Math.floor(elapsedTime / 60 % 60)
            $(`#minutes-${id}`).text(this.minutes)

            this.sec = Math.floor(elapsedTime % 60)
            $(`#seconds-${id}`).text(this.seconds)
        }, 1000)
    },

}