$(document).ready(function () {
    $("#myForm").on("submit", function (event) {
        event.preventDefault();
        const data = {
            article: $("#article").val(),
        };
        $.ajax({
            url: "./main.php",
            type: "get",
            dataType: 'json',
            data: data,
            success: function (data) {
                const element = document.querySelector('.table');
                const text = document.querySelector('.js-text');
                if (text) text.remove();
                if (!element) {
                    createTable(data);
                } else {
                    element.remove();
                    createTable(data);
                }
            },
            error: function (error) {
                if (error) {
                    const element = document.querySelector('.table');
                    if (element) {
                        element.remove();
                        alert("Ошибка при вводе данных");
                    }
                }
                $('#data').html("<p class='js-text text-white'>Ошибка при отправке данных </p>>")
                console.error("Ошибка при отправке данных: ", error);
            },
        });
    });
});

function createTable(data) {
    const table = $('<table class="table table-dark"></table>');
    const thead = $('<thead></thead>');
    const headerRow = $('<tr></tr>');
    headerRow.append('<th scope="col">Номер товара</th>');
    headerRow.append('<th scope="col">Название брэнда</th>');
    headerRow.append('<th scope="col">Наименование артикуля</th>');
    headerRow.append('<th scope="col">Название товара</th>');
    headerRow.append('<th scope="col">Цена</th>');
    thead.append(headerRow);
    table.append(thead);
    const tbody = $('<tbody class="js-table"></tbody>');
    table.append(tbody);
    $('#data').append(table);
    $.each(data, function (item, value) {
        tbody.append(`<tr><th scope="row">${value.gid}</th><td class="text-start">${value.brand}</td><td>${value.art}</td><td>${value.name}</td><td>${value.price}$</td></tr>`);
    })
}

function slider() {
    let txt = document.getElementById('output'),
        sliderFill = document.getElementById('fill'),
        input = document.getElementById('form-range'),
        range = (input.value - input.min) / (input.max - input.min) * 100;

    txt.innerText = input.value + " m";
    sliderFill.style.width = range + '%';

    if (input.value >= 100) {
        txt.style.right = 10 + 'px';
    } else if (input.value < 9) {
        txt.style.right = -10 + 'px';
    } else {
        txt.style.right = 0 + 'px';
    }
}

function close() {
    let btn = document.querySelector('.js-drop');
    btn.addEventListener('click', function (e) {
        btn.classList.toggle('icon-close');
    })
}

close();

// GSAP
let stepAnimation = () => {
    let tlStep = gsap.timeline({defaults: {duration: 1}, repeat: -1, repeatDelay: 1});
    tlStep
        .to('.scroll-layout', {y: -20})
        .to('.scroll-layout', {y: 0, ease: "bounce.out"});

    return tlStep;
}

const sa = stepAnimation();
const firstStep = document.querySelector('.scroll-layout');
firstStep.addEventListener('mouseover', () => {
    sa.pause();
});
firstStep.addEventListener('mouseleave', () => {
    sa.resume();
})

const timeline = gsap.timeline();
timeline.from('h1', {
    opacity: 0,
    x: -500,
    duration: 1
})
    .from('.js-gsap-text', {
        opacity: 0,
        x: -500,
        duration: 1
    })
    .from('.main__block-left-icons', {
        opacity: 0,
        x: -500,
        duration: 1
    })
    .from('.main__block-right', {
        opacity: 0,
        x: 500,
        duration: 1
    })
    .from('.bg-image', {
        opacity: 0,
        x: 500,
        duration: 1
    })

window.addEventListener('scroll', scrollImage);

scrollImage();

function scrollImage() {
    const img = document.querySelector('.bg-image');
    const imageTop = img.getBoundingClientRect().top;

    if (imageTop < 14) {
        img.classList.add('show');
    } else {
        img.classList.remove('show');
    }
}


$("#send").on("submit", function (event) {
    event.preventDefault();
    const data = {
        email: $("#email").val(),
    };
    $.ajax({
        url: "./mail.php",
        type: "POST",
        data: data,
        success: function (data) {
            alert('сообщение отправлено');
            console.log(data)
        },
        error: function (error) {
            console.error("Ошибка при отправке данных: ", error);
        },
    });
});


