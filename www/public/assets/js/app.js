// getMessages();
$(".message").click(function(e) {
    e.preventDefault();
    $.ajax({
        url: "?page=createdPoll",
        method: "POST",
        dataType: 'json',
        data: { message: $(".sendMessage").val() }
    }).done(function(response) {
        // getMessages();
    })
})

// function getMessages() {
//     $.ajax({
//         url: "Routeur.php?function=get",
//         dataType: 'json',
//         success: function(response) {
//             response.forEach(message => {
//                 $("#messages").append(`<p>${message.content}</p>`)

//             });
//             console.log(response);
//         }
//     })
// }