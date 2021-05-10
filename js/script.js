function validateLoginForm()
{
    var formErrors="";
    var x;
    var emailPattern;
    emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

    x=document.forms["loginform"]["email"].value;
    if (!(emailPattern.test(x)))
    {
        formErrors=formErrors+"Email Address is invalid.\n";
    }
    x=null;

    if (formErrors!="")
    {
        alert(formErrors);
        return false;
    }
}
function validateSignupForm()
{
    var formErrors="";
    var x;
    var emailPattern;
    emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

    x=document.forms["signupform"]["email"].value;
    if (!(emailPattern.test(x)))
    {
        formErrors=formErrors+"Email Address is invalid.\n";
    }
    x=null;
    var numberPattern;
    numberPattern = /^\d+$/;

    x=document.forms["signupform"]["age"].value;
    if (!(numberPattern.test(x)))
    {
        formErrors=formErrors+"Age Must Have Numeric Value.\n";
    }
    x=null;
    if (formErrors!="")
    {
        alert(formErrors);
        return false;
    }

}
function validateProduct()
{
    var formErrors="";
    var x;
    var numberPattern;
    numberPattern = /^\d+$/;

    x=document.forms["addproduct"]["price"].value;
    if (!(numberPattern.test(x)))
    {
        formErrors=formErrors+"Price Must Have Numeric Value.\n";
    }
    x=null;
    x=document.forms["addproduct"]["image"].value;
    if (x == '')
    {
        formErrors=formErrors+"Please select an image.\n";
    }
    
    else
    {
        x=null;
        x=document.forms["addproduct"]["image"].val().split('.').pop().toLowerCase();
        if(jQuery.inArray(extension, ['gif', 'png', 'jpg', 'jpeg']) == -1)
        {
            formErrors=formErrors+"Invalid image file.\n";
            document.forms["addproduct"]["image"].val('');
        }
    }
    x=null;
    if (formErrors!="")
    {
        alert(formErrors);
        return false;
    }

}
function change_status(user)
{
    document.getElementById('user').innerHTML = user;
    document.getElementById('useranchor').href = "user_info.php";
}
function change_status_admin(admin)
{
    document.getElementById('admin').innerHTML = admin;
    document.getElementById('adminanchor').href = "product-show.php";
}
function retain_user()
{
    document.getElementById('user').innerHTML = "User";
    document.getElementById('useranchor').href = "user_login.php";
}
function retain_admin()
{
    document.getElementById('admin').innerHTML = "Admin";
    document.getElementById('adminanchor').href = "admin_login.php";
}