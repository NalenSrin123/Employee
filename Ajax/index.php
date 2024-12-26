<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
        <h1>Employee</h1>
        <button class="btn btn-primary float-end" id="addEmp">Add Employee</button>
        <table class="table table-hover text-center align-middle mt-5" style="table-layout: fixed;">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Sex</th>
                    <th>Position</th>
                    <th>Salary</th>
                    <th>Rate</th>
                    <th>Hour</th>
                    <th>Income</th>
                    <th>Profile</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Sok</td>
                    <td>Male</td>
                    <td>Web Front-end</td>
                    <td>250</td>
                    <td>5</td>
                    <td>10</td>
                    <td>300</td>
                    <td>
                        <img width="80px" src="https://i.pinimg.com/736x/48/6c/a0/486ca00640b169300b48e9ceacd8e401.jpg" alt="">
                    </td>
                    <td>
                        <button class="btn btn-warning me-1">Edit</button>
                        <button class="btn btn-danger">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="modals">
        <form action="" method="post" enctype="multipart/form-data">
            <h3 class="text-center">Add Employee</h3>
            <div class="form-group">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="sex" class="form-label">Sex</label>
                <select name="sex" id="sex" class="form-control">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>
            </div>
            <div class="form-group">
                <label for="position" class="form-label">Position</label>
                <select name="position" id="position" class="form-control">
                    <option value="Web Front-end">Web Front-end</option>
                    <option value="Web Back-end">Web Back-end</option>
                    <option value="Mobile App">Mobile App</option>
                    <option value="Design">Design</option>
                    <option value="Network">Network</option>
                    <option value="DevOp">DevOp</option>
                </select>
            </div>
            <div class="form-group">
                <label for="salary" class="form-label">Salary</label>
                <input type="text" name="salary" id="salary" class="form-control">
            </div>
            <div class="form-group">
                <label for="rate" class="form-label">Rate</label>
                <input type="text" name="rate" id="rate" class="form-control">
            </div>
            <div class="form-group">
                <label for="hour" class="form-label">Hour</label>
                <input type="text" name="hour" id="hour" class="form-control">
            </div>
            <div class="form-group">
                <label for="profile" class="form-label">Profile</label>
                <input type="file" name="profile" id="profile" class="form-control d-none"> <br>
                <img style="cursor: pointer;" width="100px" src="https://media.istockphoto.com/id/1324356458/vector/picture-icon-photo-frame-symbol-landscape-sign-photograph-gallery-logo-web-interface-and.jpg?s=612x612&w=0&k=20&c=ZmXO4mSgNDPzDRX-F8OKCfmMqqHpqMV6jiNi00Ye7rE=" alt="">
            </div>
            <div class="form-group d-flex justify-content-end">
                <button class="btn btn-primary mt-4 me-2">Save</button>
                <button class="btn btn-danger mt-4" id="btnCancel">Cancel</button>
            </div>
        </form>
    </div>
</body>
</html>
<script>
    $(document).ready(function(){
        $('#addEmp').click(function(){
            $('.modals').fadeIn()
        })
        $('#btnCancel').click(function(){
            $('.modals').fadeOut()
        })
    })
</script>