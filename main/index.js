function handleSubmit () {
    const firstname = document.getElementById('f-firstname').value;
    const lastname = document.getElementById('f-lastname').value;
    const date_of_birth = document.getElementById('f-date_of_birth').value;
    const tel = document.getElementById('tel').value;
    const title = document.getElementById('f-title').value;
    const email = document.getElementById('f-email').value;

    localStorage.setItem("firstname", firstname);
    localStorage.setItem("lastname", lastname);
    localStorage.setItem("date_of_birth", date_of_birth);
    localStorage.setItem("tel", tel);
    localStorage.setItem("title", title);
    localStorage.setItem("email", email);

    return;
}