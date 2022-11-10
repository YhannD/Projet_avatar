console.log('toto')

// document.getElementById("submit-button").addEventListener("click", function(event){
//     event.preventDefault()
// });

// function generateAvatar(){
//     let generateElement = document.getElementById('submit-form');
//     let formData = new FormData();
//     for(let count = 0; count < generateElement.length; count++)
//     {
//         formData.append(generateElement[count].name, generateElement[count].value);
//     }
//     // document.getElementById('submit-button').disabled = true;
//
//     let ajax_request = new XMLHttpRequest();
//     ajax_request.open('POST', '../public/index.php');
//     ajax_request.send(formData);
//     ajax_request.onreadystatechange = function ()
//     {
//         if(ajax_request.readyState == 4 && ajax_request.status == 200)
//         {
//             document.getElementById('submit-button').disabled = false;
//             document.getElementById('submit-form').reset();
//         }
//     }
// }
// generateAvatar();