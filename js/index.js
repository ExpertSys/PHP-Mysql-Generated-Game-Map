$(document).ready(function(){
    $(document).on("click", ".map_columns", function(){
        var x = $(this).attr("data-x");
        var y = $(this).attr("data-y");
        $.post('./index.php', {x: x, y: y}, function(){
        });
    });

    setInterval(function(){
        $("#map").load("./reload.php");
    }, 600);
});
