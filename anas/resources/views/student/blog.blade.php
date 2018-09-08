<!DOCTYPE html>
<html>
<head>
    <title>BLOGS</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<style>
    th,td{
        text-align: center;
    }
    h1{
        color: #0468AA;
    }
</style>
<div class="container">
    <br />
    <h1 align="center">BLOGS</h1>
    <br />
    <br />
    <form method="post" id="student_form">
                <div align="center">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label>First Name</label>
                        <input style="width: 300px;" type="text" name="first_name" id="first_name" class="form-control" />
                    </div>
                    <div class="form-group">
                        <label>Last Name</label>
                        <input style="width: 300px;" type="text" name="last_name" id="last_name" class="form-control" />
                    </div>
                </div>
                <div align="center">
                    <input type="submit" name="submit" id="action" value="Add BLOG" class="btn btn-primary" />
                </div>
                <br>
    </form>
    <table id="student_table" class="table table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
            </tr>
        </thead>
    </table>
</div>


<script type="text/javascript">
$(document).ready(function() {
     $('#student_table').DataTable({
        "ajax": "blog/getdata",
        "columns":[
            { "data": "id" },
            { "data": "first_name" },
            { "data": "last_name" }
        ],
     });

    $('#student_form').on('submit', function(event){
        event.preventDefault();
        var form_data = $(this).serialize();
        $.ajax({
            url:"blog/postdata",
            method:"POST",
            data:form_data,
            success:function(data)
            {
                $('#student_table').DataTable().ajax.reload();
            }
        })
    });

});
</script>
</body>
</html>
