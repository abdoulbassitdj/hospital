date = new Date();

renderCalendar = () => {
    monthDays = document.querySelector('.days');
    monthDays2 = document.querySelector('.calendrier .days');

    lastDay = new Date(date.getFullYear(), date.getMonth() + 1, 0).getDate();

    prevLastDay = new Date(date.getFullYear(), date.getMonth(), 0).getDate();

    firsDayIndex = new Date(date.getFullYear(), date.getMonth(), 0).getDay(); //date.getDay()

    lastDayIndex = new Date(date.getFullYear(), date.getMonth() + 1, 0).getDay();

    nextDays = 7 - lastDayIndex;

    if(firsDayIndex <= 4) {
        nextDays += 7;
    }

    if(nextDays > 13){
        nextDays = 7;
    }

    if(date.getMonth() === 1 && firsDayIndex > 4){
        nextDays += 7;
    }

    if(date.getMonth() === 1 && firsDayIndex === 0){
        nextDays += 7;
    }

    console.log(lastDay);

    months = [
        "Janvier",
        "Fevrier",
        "Mars",
        "Avril",
        "Mai",
        "Juin",
        "Juillet",
        "Aout",
        "Septembre",
        "Octobre",
        "Novembre",
        "Decembre"
    ];

    document.querySelector('.date h1').innerHTML = months[date.getMonth()] + ' ' + date.getFullYear();
    document.querySelector('.programme .date h1').innerHTML = months[date.getMonth()] + ' ' + date.getFullYear();

    document.querySelector('.date p').innerHTML = new Date().toLocaleDateString();
    document.querySelector('.programme .date p').innerHTML = new Date().toLocaleDateString();

    days = "";

    for (let x = firsDayIndex; x > 0; x--) {
        days += `<div class="prev-date">${prevLastDay - x + 1}</div>`;
    }

    for (let i = 1; i <= lastDay; i++){
        if(i === new Date().getDate() && date.getMonth() === new Date().getMonth() && date.getFullYear() === new Date().getFullYear()){
            days += `<div class="today">${i}</div>`;
        } else {
            days += `<div>${i}</div>`;
        }
    }

    for (let j = 1; j <= nextDays; j++) {
        days += `<div class="next-date">${j}</div>`;
        monthDays.innerHTML = days;
        monthDays2.innerHTML = days;
    }
}

document.querySelector('.prev').onclick = () => {
    date.setMonth(date.getMonth() - 1);
    renderCalendar();
}

document.querySelector('.next').onclick = () => {
    date.setMonth(date.getMonth() + 1);
    renderCalendar();
}

// 2nd part

document.querySelector('.programme .prev').onclick = () => {
    date.setMonth(date.getMonth() - 1);
    renderCalendar();
}

document.querySelector('.programme .next').onclick = () => {
    date.setMonth(date.getMonth() + 1);
    renderCalendar();
}

renderCalendar();



















/* if(!(nextDays <= 0 )){
    for (let j = 1; j <= nextDays; j++) {
        days += `<div class="next-date">${j}</div>`;
        monthDays.innerHTML = days;
    }
} else {
    monthDays.innerHTML = days;
}*/