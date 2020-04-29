var from1 = null,
    start = 0,
    url = 'http://localhost/programmation-web-2---s4---2020-master/assets/php/form.php';
$(document).ready(function() {
    from1 = prompt("Please enter your name");
    load();
    $('form').submit(function(e) {
        $.post(url, {
            message: $('#message').val(),
            from1: from1
        });
        $('#message').val('');
        return false;
    })
})

function load() {
    $.get(url + '?start=' + start, function(result) {
        if (result.items) {
            result.items.forEach(item => {
                start = item.id;
                $('#messages').append(renderMessage(item));
            });
            $('#messages').animate({ scrollTop: $('#messages')[0].scrollHeight });
        };
        load();
    });
}

function renderMessage(item) {
    let time = new Date(item.created);
    time = `${time.getHours()}:${time.getMinutes() < 10 ? '0' : ''}${time.getMinutes()}`;
    return `<div class="msg"><p>${item.from1}</p>${item.message}<span>${time}</span></div>`;
}