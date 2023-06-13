<!DOCTYPE html>
<html>
<head>
  <title>Role Management</title>
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
    <h2>Role Management</h2>
    <form action="create_role" method="post">
      @csrf
      <label for="username">Role Name:</label>
      <input type="text" id="role_name" name="role_name">

      <label>Status:</label>
      <input type="radio" id="status1" name="status" value="active">
      <lable>Active</lable>
      <input type="radio" id="status2" name="status" value="inactive">
      <lable>Inactive</lable>
      </br>
      <input type="submit" value="Submit">
    </form>
  </div>
</body>
</html>
