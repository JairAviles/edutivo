function smoothScroll(target, time) {
    // time when scroll starts
    var start = new Date().getTime(),

        // set an interval to update scrollTop attribute every 25 ms
        timer = setInterval(function() {

            // calculate the step, i.e the degree of completion of the smooth scroll
            var step = Math.min(1, (new Date().getTime() - start) / time);

            // calculate the scroll distance and update the scrollTop
            document.body['scrollTop'] = (step * target.offsetTop);

            // end interval if the scroll is completed
            if (step == 1) clearInterval(timer);
        }, 25);
}

function closeResponsiveMenu(id) {
    var chkNav = document.getElementById(id);

    if(chkNav.checked) {
        chkNav.checked = false;
    }
}