function validateForm() {
    var name = document.forms[0]["name"].value;
    var photo = document.forms[0]["photo"].value;
    var gender = document.querySelector('input[name="gender"]:checked');
    var address = document.forms[0]["address"].value;

    if (name == "") {
        alert("Name must be filled out");
        return false;
    }

    if (photo == "") {
        alert("Please upload a photo");
        return false;
    } else {
        var fileExtension = photo.split('.').pop().toLowerCase();
        if (!['jpg', 'jpeg', 'png'].includes(fileExtension)) {
            alert("Only JPG, JPEG, and PNG files are allowed");
            return false;
        }
    }

    if (!gender) {
        alert("Gender must be selected");
        return false;
    }

    if (address.length > 255) {
        alert("Address must be less than 255 characters");
        return false;
    }

    return true;
}


