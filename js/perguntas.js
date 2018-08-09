var values = $.getJSON('../data/questoes.json', function(data) {
    var html = "<ul>";
    $.each(data.perguntas, function(index, value) {
        html += "<li>" + index + " : " +value + "</li>";
    })
    html += "</ul>";
    $("#perguntas").html(html)
})