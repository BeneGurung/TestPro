<!DOCTYPE html>
<html>
<head>
  <title>Edit Role Management</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    .container {
      width: 300px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ccc;
      margin-top: 100px;
    }

    h2 {
      text-align: center;
    }

    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
    }

    input[type="submit"] {
      width: 100%;
      padding: 10px;
      background-color: #4CAF50;
      color: white;
      border: none;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Edit Role Management</h2>
    <form action="/update_role" method="post">
      @csrf
      <label for="username">Role Name:</label>
      <input type="text" value='{{$data->name}}'id="role_name" name="role_name">
      <input type="hidden" value='{{$data->id}}'id="record_id" name="record_id">
      <input type="hidden" value='{{$data->status}}'id="status_id" name="status_id">

      <label>Status:</label>
      <input type="radio" id="status1" name="status" value="active">
      <lable>Active</lable>
      <input type="radio" id="status2" name="status" value="inactive">
      <lable>Inactive</lable>
        <script>
            let status_value=document.getElementById('status_id').value;
        //alert(status_value);
        if(status_value=="Active"){
            document.getElementById('status1').checked = true;
        }else{
            document.getElementById('status2').checked = true;

        }
        </script>
      </br>
      <input type="submit" value="Update">
    </form>
  </div>
</body>
</html>
