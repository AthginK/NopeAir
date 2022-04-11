window.addEventListener('load', () => {

    const firstname = localStorage.getItem('firstname');
    const lastname = localStorage.getItem('lastname');
    const date_of_birth = localStorage.getItem('date_of_birth');
    const title = localStorage.getItem('title');
    const email = localStorage.getItem('email');
    const tel = localStorage.getItem('tel');

    document.getElementById('firstname').innerHTML = firstname;
    document.getElementById('lastname').innerHTML = lastname;
    document.getElementById('date_of_birth').innerHTML = date_of_birth;
    document.getElementById('title').innerHTML = title;
    document.getElementById('email').innerHTML = email;
    document.getElementById('tel').innerHTML = tel;
})