// public/js/custom.js

function addSection() {
    const sectionName = document.getElementById('name').value;
    const login = document.getElementById('login').value;
    const password = document.getElementById('password').value;

    $.ajax({
        type: 'POST',
        url: '/sections',
        data: {
            name: sectionName,
            login: login,
            password: password,
            _token: '{{ csrf_token() }}',
        },
        success: function (response) {
            alert('Section added successfully');
            addSectionToSidebar(response.sectionName);
        },
        error: function (error) {
            console.error(error);
        }
    });

    document.getElementById('sectionForm').reset();
}

function addSectionToSidebar(sectionName) {
    const li = document.createElement('li');
    li.className = 'nav-item';

    const a = document.createElement('a');
    a.className = 'nav-link';
    a.textContent = sectionName;
    a.href = '{{ route("sections.index") }}';

    li.appendChild(a);

    const sidebar = document.getElementById('sidenav-collapse-main');
    sidebar.appendChild(li);
}
