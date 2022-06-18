$('.setup__content').on('submit', 'form', function (event) {
    var json;
    event.preventDefault();
    $.ajax({
        type: $(this).attr('method'),
        url: $(this).attr('action'),
        data: new FormData(this),
        contentType: false,
        cache: false,
        processData: false,
        success: function (result) {
            console.log(result);
            alert('Сохранено');
        }
    });
});


function clickAddSlide(url) {
    $.ajax({
        type: 'get',
        url: url,
        contentType: false,
        cache: false,
        processData: false,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        },
        success: function (result) {
            json = JSON.parse(result);
            if(json.message){
                alert(json.message);
            }

            // Вывод шаблона
            $('#main_page_slider_ru').prepend(json.layout);
        }
    });
}

function clickDeleteSlide(url, id) {
    if(confirm('Удалить?')) {
        $.ajax({
            type: 'get',
            url: url,
            data: {
                "id": id
            },
            contentType: false,
            cache: false,
            processData: false,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            },
            success: function (result) {
                $('#main_page_slider_ru_slide_' + id).remove();
            }
        });
    }
}
