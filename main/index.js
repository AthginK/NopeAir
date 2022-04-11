function handleSubmit () {
    const firstname = document.getElementById('firstname').value;
    const lastname = document.getElementById('lastname').value;
    const date_of_birth = document.getElementById('date_of_birth').value;
    const tel = document.getElementById('tel').value;
    const title = document.getElementById('title').value;
    const email = document.getElementById('email').value;

    localStorage.setItem("firstname", firstname);
    localStorage.setItem("lastname", lastname);
    localStorage.setItem("date_of_birth", date_of_birth);
    localStorage.setItem("tel", tel);
    localStorage.setItem("title", title);
    localStorage.setItem("email", email);

    return;
}