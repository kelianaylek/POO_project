let btn = $("input[name='sendPollToDb']");

btn.click(function() {
    window.location.href = "http://localhost/poo_project/www/public/index.php?page=createdPoll";
    window.location.reload(true);
});