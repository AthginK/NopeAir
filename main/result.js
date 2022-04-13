window.addEventListener('load', () => {
    const trip = localStorage.getItem('Trip');
    document.getElementById('get_trip').value = trip;
    document.getElementById('pre_get_trip').value = trip;
    const flight = localStorage.getItem('flight');
    document.getElementById('flight').value = flight;
    document.getElementById('pre_flight').value = flight;
    if (trip == 'rt') {
        const flight2 = localStorage.getItem('flight2');
        document.getElementById('flight2').value = flight2;
        document.getElementById('pre_flight2').value = flight2;
    }

    const firstname = localStorage.getItem('firstname');
    const lastname = localStorage.getItem('lastname');
    const date_of_birth = localStorage.getItem('date_of_birth');
    const title = localStorage.getItem('title');
    const email = localStorage.getItem('email');
    const tel = localStorage.getItem('tel');

    document.getElementById('f-firstname').value = firstname;
    document.getElementById('f-lastname').value = lastname;
    document.getElementById('f-date_of_birth').value = date_of_birth;
    document.getElementById('f-title').value = title;
    document.getElementById('f-email').value = email;
    document.getElementById('tel').value = tel;
    document.getElementById('firstname').innerHTML = firstname;
    document.getElementById('lastname').innerHTML = lastname;
    document.getElementById('date_of_birth').innerHTML = date_of_birth;
    document.getElementById('title').innerHTML = title;
    document.getElementById('email').innerHTML = email;

})