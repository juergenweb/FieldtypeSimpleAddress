document.addEventListener("DOMContentLoaded", function(event) {

var showCoordinatesField = document.getElementById('Inputfield_input_coordinates');


if (typeof showCoordinatesField !== 'undefined' || showCoordinatesField !== null) {
  var reqLatBox = document.getElementById('Inputfield_input_required_lat');
  var reqLngBox = document.getElementById('Inputfield_input_required_lng');
  //get status of showCoordinatesfield on page load
  var status = showCoordinatesField.checked;
  console.log(status);
  if(status){
    reqLatBox.parentElement.parentElement.style.display = "block";
    reqLngBox.parentElement.parentElement.style.display = "block";
  } else {
    reqLatBox.parentElement.parentElement.style.display = "none";
    reqLngBox.parentElement.parentElement.style.display = "none";
  }

  showCoordinatesField.addEventListener('click', function(){

    if (showCoordinatesField.checked){
      reqLatBox.parentElement.parentElement.style.display = "block";
      reqLngBox.parentElement.parentElement.style.display = "block";
    } else {
      reqLatBox.parentElement.parentElement.style.display = "none";
      reqLngBox.parentElement.parentElement.style.display = "none";
    }
  });

}

});
