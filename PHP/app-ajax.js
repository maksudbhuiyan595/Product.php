const API_URL = {
    usersList : 'https://jsonplaceholder.typicode.com/users'
}


$('#get-users').on('click', ()=>{
    // console.log(new Date);
    let tblRows = '';
    jQuery.get(API_URL.usersList, (users)=>{
        // console.log({data});
        users.forEach((user)=>{
            // console.log(user);
            tblRows += `
                <tr>
                    <td>${user.name}</td>
                    <td>${user.username}</td>
                    <td>${user.email}</td>
                </tr>
            `;
        });
        console.log(tblRows);
        $('#users-tbl>tbody').html(tblRows);
    });

});

