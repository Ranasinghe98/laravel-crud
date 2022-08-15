<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" rel="stylesheet">
<x-header />

<div class="userList">
    <div class="userData">
        <table>
            <tr>
                <td class="head">ID</td>
                <td class="head">NAME</td>
                <td class="head">PASSWORD</td>
                <td class="head">EMAIL</td>
                <td class="head">PHONE</td>
                <td class="head" colspan="2">ACTION</td>
            </tr>
            @foreach($members as $member)
            <tr>
                <td class="data">{{$member['id']}}</td>
                <td class="data">{{$member['name']}}</td>
                <td class="data">{{$member['password']}}</td>
                <td class="data">{{$member['email']}}</td>
                <td class="data">{{$member['phone']}}</td>
                <td class="data btn">
                    <a class="edit" href={{"edit/".$member['id']}}>Edit </i></a>
                </td>
                <td class="data btn">
                    <a class="delete" href={{"delete/".$member['id']}}>Delete </i></a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>

<x-footer />

<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:display=swap');
    *{
        margin: 0;
        padding: 0;
    }
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        font-family: 'Montserrat', sans-serif;
    }

    table{
        width: 500px;
        text-align: center;
    }

    td, tr{
        padding: 10px;
    }

    td a{
        text-decoration: none;
        color: white;
        
    }

    .btn{
        font-size: 12px;
    }

    td .edit {
        background-color: #0239c4;
        padding: 5px;
        border-radius: 5px;
    }

    td .delete {
        background-color: #c40202;
        padding: 5px;
        border-radius: 5px;
    }

    .head{
        background-color: #94B49F;
        font-weight: 600;
    }

    .data{
        background-color: #cccccc;
    }

    .userData{
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        height: 500px;
    }
</style>