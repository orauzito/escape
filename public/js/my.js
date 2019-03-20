//TODO review to show the news panel
$('#show').addEventListener('click', function () {
    console.log('teste');
    $.ajax({
        TYPE: 'POST',
        url: '/article/show',
        data: $('#showId'),
    }).done(function () {
        $('#newsPanel').show("slide", { direction: "left" }, 1000);
    })
});

$('#close').on('click', function () {
    $('#newsPanel').show("slide", { direction: "right" }, 1000);
});