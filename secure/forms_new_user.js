function formhash(form, password)
{
// Get the hidden element input, this will be our hashed password field.
var p = document.getElementById("p");
// Edit the hidden element.
form.appendChild(p);
p.name = "p";
p.type = "hidden";
p.value = hex_sha512(password.value);
// Make sure the plaintext password doesn't get sent.
password.value = "";
// Finally submit the form.
form.submit();
}