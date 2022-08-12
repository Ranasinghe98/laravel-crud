<x-header />
<div class="usersList">
    <div class="userData">
        <table>
            <tr>
                <td class="head">ID</td>
                <td class="head">NAME</td>
                <td class="head">EMAIL</td>
                <td class="head">PHONE</td>
            </tr>
            @foreach($members as $member)
            <tr>
                <td class="data">{{$member['id']}}</td>
                <td class="data">{{$member['name']}}</td>
                <td class="data">{{$member['email']}}</td>
                <td class="data">{{$member['phone']}}</td>
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