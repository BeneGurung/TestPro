<!DOCTYPE html>
<html>
<head>
    <title>HTML Table Example</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
        }
        
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        
        th {
            background-color: #f2f2f2;
        
        }
        
        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>
<body>
        <button type="button">
                    <a href="/create_role_index">   
                    Create New</a></button>
        <button type="button">
                    <a href="/get_role_list/Status/NA/Active">   
                    List Active Roles</a></button>

        <button type="button">
                    <a href="/get_role_list/Status/NA/Inactive">   
                    List Inactive Roles</a></button>

        <button type="button">
                    <a href="/get_role_list/ALL/NA/Active">   
                    List ALL Roles</a></button>

                    
    <h2>Role Management Table</h2>
    <table>
        <tr>
            <th>Sl.no</th>
            <th>Role Name</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        <tbody>
            @foreach ($response_data as $id=> $data)
            <tr>
                <td>{{$id+1}}</td>
                <td>{{$data->name}}</td>
                <td>{{$data->status}}</td>
                <td>
                    <button type="button">
                    <a href="/edit_role/{{$data->id}}">
                    Edit</a></button>
                    <button type="button">
                    <a href="/delete_role/{{$data->id}}">   
                    Delete</a></button>
            
                </td>
             </tr>
             @endforeach
         </tbody>    
    </table>
</body>
</html>
