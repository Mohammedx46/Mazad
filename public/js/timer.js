function timer() {

    return {
        hr: 0,
        min: 0,
        sec: 0,
        elapsedTime: 0, // time out  or spent
        limitCounter: 0,
        timerOn: false,
        stage: 'task',
        category: 'work',
        tags: [],
        timerInterval: null,
        sound: document.querySelector('audio'),

        get now() {
            return Math.floor(Date.now() / 1000)
        },

        hours() {
            return (this.hr > 0) ? this.hr.toLocaleString('en-US', { minimumIntegerDigits: 2, useGrouping: false }) + ':' : '';
        },
        minutes() {
            return this.min.toLocaleString('en-US', { minimumIntegerDigits: 2, useGrouping: false });
        },
        seconds() {
            return this.sec.toLocaleString('en-US', { minimumIntegerDigits: 2, useGrouping: false });
        },
        // start or resume timer for any stage
        start() {
            this.timerOn = true;
            if (this.stage !== 'break')
                this.taskTime();
            else
                this.breakTime();
        },
        // stop timer for any stage, can be resumed by start
        stop() {
            this.timerOn = false;
            clearInterval(this.timerInterval);
        },
        // calculate timer ascending from 0 to upper limit
        taskTime() {
            let startTime = this.now - this.elapsedTime;
            this.timerInterval = setInterval(() => {
                this.elapsedTime = this.now - startTime;
                this.hr = Math.floor(this.elapsedTime / 60 / 60);
                this.min = Math.floor(this.elapsedTime / 60 % 60);
                this.sec = Math.floor(this.elapsedTime % 60);
            }, 1000);
        },
        // calculate timer descending from breaktime and 0, then change stage automatically
        breakTime() {
            let endTime = this.now + (this.elapsedTime || this.limitCounter)
            this.timerInterval = setInterval(() => {
                this.elapsedTime = endTime - this.now
                this.hr = Math.floor(this.elapsedTime / 60 / 60)
                this.min = Math.floor(this.elapsedTime / 60 % 60)
                this.sec = Math.floor(this.elapsedTime % 60)
                if (this.now >= endTime) {
                    this.sound.play()
                        // if (Notification.permission === 'granted') {
                        //     new Notification('Time is up!', {
                        //         body: 'Take a break!'
                        //     });
                        // }
                    this.forward()
                }
            }, 1000)
        },
        // change stage, reset, change timer and store data
        forward() {
            let period
            if (this.stage === 'task') {
                // period = this.elapsedTime
                // get period, if less than 15 mins, zero it
                period = (this.elapsedTime < 15 * 60) ? 0 : this.elapsedTime

                if (period) {
                    // add tags
                    let tagsText = prompt('ادخل الوسوم مفصولة فراغات')
                    this.tags = tagsText ? tagsText.split(' ') : []
                }
            } else
                period = (this.elapsedTime <= 0) ? this.limitCounter : this.limitCounter - this.elapsedTime

            const entry = {
                stage: this.stage,
                category: this.category,
                period: period,
                tags: this.tags,
                timestamp: this.now,
            }

            // stop and clean timer
            this.stop()
            this.elapsedTime = 0

            // store current period, if zero doesnt store
            if (period && store.user) {
                const entryRef = doc(db, store.contact, `${entry.timestamp}`)
                const prefsRef = doc(db, 'users', store.user)

                // update tags
                setDoc(prefsRef, {
                        tags: arrayUnion(...this.tags)
                    }, { merge: true })
                    .catch(err => {
                        store.fail(err)
                    })

                // add period to db
                setDoc(entryRef, entry)
                    .then(() => {
                        store.success('تم تسجيل الفترة')
                    })
                    .catch(err => {
                        store.fail(err)
                    })
            } else if (period) {
                let userStats = JSON.parse(localStorage.getItem('statistics')) || [];
                userStats.push(entry)
                localStorage.setItem('statistics', JSON.stringify(userStats))
            }

            if (this.stage !== 'break' && period) {
                this.stage = 'break'
                this.limitCounter = Math.floor(period / 5)
                this.start()
            } else {
                this.stage = 'task'
                this.hr = 0
                this.min = 0
                this.sec = 0
            }
        },
    }
}