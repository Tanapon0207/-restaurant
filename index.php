<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>food dark</title>
</head>
<body>

    <div style="background-color: #DCDCDC;">
    <h2 style="text-align: center;">
        food dark restaurant
    </h2>
    <div class="container" >
     
       
        <div>
        <table class="table">
            <thead>
                <tr>
          <div class="input" style="text-align: center;">
                    <td colspan =2>
                    <input type="hidden" name="" id="txtRID" value="0"/>
                    <input type="password" class="form-control" id="txtUnique" placeholder="Unique Name" />
                
                    </td>
                    <td><input type="text" class="form-control" id="txtName" placeholder="Name" /></td>
                    <td><input type="text" class="form-control" id="txtOwner" placeholder="Owner" /></td>
                    <td><input type="text" class="form-control" id="txtWebSite" placeholder="WebSite"/></td>
                    <td><button class="btn btn-primary"  id="btnAdd"> <i class="fa fa-plus-circle" aria-hidden="true"></i> Add </button></td>
                </div>
                </tr>
                <tr>
                    <th></th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Owner</th>
                    <th>Website</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody id="tblRestaurants"></tbody>
       </table>
        </div>
      

        
        
        
        <select id="optCate" class="form-control"> 
            <option value="1"> Hello </option>
        </select>
    </div>











</div>
</body>
</html>
