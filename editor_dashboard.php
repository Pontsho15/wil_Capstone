<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .chart{
            
            width: 120px;
            height: 120px;
            border-radius:50%;
            background: conic-gradient(
              white  0%   20%,
              red     20%  50%,
              rgb(208, 255, 0)    50%  100%  
            )
        }
     
        .sidebar {
            height: 100vh;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #6251e5;
            color: #ecf0f1;
            padding-top: 20px;
        }

        .sidebar a {
            text-decoration: none;
            color: #eff1ec;
            display: block;
            padding: 10px 15px;
            font-size: 18px;
            
        }

        .sidebar a:hover {
            background-color: #313bb3;
        }

        .main-content {
            margin-left: 250px;
            padding: 20px;
        }

        .navbar {
            background-color:   #40456b;
            color: #ecf0f1;
            padding: 15px;
            position: fixed;
            top: 0;
            left: 250px;
            width: calc(100% - 250px);
            z-index: 1000;
        }

        .navbar h1 {
            margin: 0;
            font-size: 24px;
        }

        .content {
            margin-top: 60px;
        }

        .card {
            background-color: #83838b;
            border: 1px solid #dddddd;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 15px;
            margin-bottom: 20px;
            width: 100%;
            color: rgb(255, 255, 255);
            height: 70px;
        }

        .card h2 {
            margin-top: 0;
        }

        .stats_card {
            background-color: #b434db;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 15px;
            margin-bottom: 20px;
            width: 100%;
            color: white;
            height: 200px;

        
        }

      .resize{
        width: 25px;
        height: auto;
        padding-left: 1px;
      }
      .metallic-button{
        font-size: 14px;
        padding: 6px 16px;
        font-weight: 400;
        border: none;
        outline: none;
        color: #000;
        background: linear-gradient(
          45deg,
          #999 5%,
          #fff 10%,
          #ccc 30%,
          #ddd 50%,
          #ccc 70%,
          #fff 80%,
          #999 95%
        );
        text-shadow: 1px 1px 2px rgba(255, 255, 255, 0.5);
        border-radius: 10px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        cursor: pointer;
        transition: all 0.2s ease-in-out;
      }
      
      .metallic-button:hover {
        transform: translateY(-2px);
      }

    .search-container {
    display: flex;
    align-items: center;
    border-radius: 25px;
    overflow: hidden;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.search-input {
    border: none;
    padding: 8px 12px;
    font-size: 17px;
    outline: none;
    border-radius: 25px 0 0 25px;
    flex: 1;
    background-color: #fff;
    
}

.search-button {
    background-color: #007bff;
    border: none;
    color: #fff;
    padding: 5px 10px;
    cursor: pointer;
    font-size: 16px;
    border-radius: 0 20px 20px 0;
    transition: background-color 0.3s;
}

.search-button:hover {
    background-color: #0056b3;
}





.grid-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(100px, 1fr));
    gap: 10px;
    width: 80%;
    max-width: 800px;
}

.grid-item {
    
    color: white;
    padding: 20px;
    text-align: center;
    border-radius: 8px;
}
     .metallic-button{
        font-size: 14px;
        padding: 6px 16px;
        font-weight: 400;
        border: none;
        outline: none;
        color: #000;
        background: linear-gradient(
          45deg,
          #999 5%,
          #fff 10%,
          #ccc 30%,
          #ddd 50%,
          #ccc 70%,
          #fff 80%,
          #999 95%
        );
        text-shadow: 1px 1px 2px rgba(255, 255, 255, 0.5);
        border-radius: 10px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        cursor: pointer;
        transition: all 0.2s ease-in-out;
      }
      
      .metallic-button:hover {
        transform: translateY(-2px);
      }
	


        
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
       <!--- <a href="#">Dashboard</a> -->
       <h1>&nbsp;&nbsp;&nbsp;Dashboard</h1>
       <a href="#"><img src="C:\Users\User\Desktop\Ice_project\user.svg" alt="Description of the SVG" class="resize">&nbsp;&nbsp;Profile</a>
        <a href="#"><img src="C:\Users\User\Desktop\Ice_project\view.svg" alt="Description of the SVG" class="resize">&nbsp;&nbsp;View Notice</a>
        <a href="#"><img src="C:\Users\User\Desktop\Ice_project\update.svg" alt="Description of the SVG" class="resize">&nbsp;&nbsp;Update Notice</a>
        <a href="components/user_logout.php"><img src="C:\Users\User\Desktop\Ice_project\off.svg" alt="Description of the SVG" class="resize">&nbsp;&nbsp;Logout</a>
    </div>

    <!-- Main content area -->
    <div class="main-content">

        <!-- Navbar -->
        <div class="navbar">
            <h1>Document Management System</h1>
            <h1> <img src="C:\Users\User\Downloads\prototype\Ice_project\editor.svg" alt="Description of the SVG" class="resize">Editor<h1>
        </div>
      <br>
        <!-- Content area -->
        <div class="content">
           
            <div class="card">
                <h2>Search Users</h2>
              <!--  <button type="submit">CREATE</button> -->
            
              <!-- <button class="metallic-button" type="button" onclick="window.location.href='form.html'">Create</button> -->
              <input type="text" class="search-input" placeholder="Search...">
              <button class="search-button">🔍</button>
            </div>
        
            <div class="card">
                <h2>View Form</h2>
                <button class="metallic-button" type="submit">VIEW</button>
            </div>
        
            <div class="card">
                <h2>Update Form</h2>
                <button class="metallic-button" type="submit">Update</button>
            </div>

        </div>

    </div>

</body>
</html>