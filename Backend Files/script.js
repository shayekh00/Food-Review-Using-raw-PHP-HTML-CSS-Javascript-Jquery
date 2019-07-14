function form_validation(){
    var r_rating = document.forms["review_form"]["r_rating"].value;
    var uname = document.forms["review_form"]["r_name"].value;

    var r_ambience = document.forms["review_form"]["r_ambience"].value;
    var r_service = document.forms["review_form"]["r_service"].value;

    

    if(r_rating==""){
        alert("Name cannot be empty");
    }

    if( uname=="" || uname.trim() == " " ){
        alert("Restaurant Name must be filled and no whitespaces");
    }

    if(r_rating>10 || r_ambience>10  || r_service>10){
        alert("Ratings Must be less than 10 and more than 1");
    }

}