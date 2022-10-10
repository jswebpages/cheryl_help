<body>
    <div class="header">
        <div class="logo"><span>JS</span>webpages</div>
            <div class="nav">
                    <li>Home</li>
                    <li>About</li>
                    <li>Blog</li>
                    <li><a href="student-create.php">Add_Student</a></li>
                    <li>Contact</li>
            </div>
    </div>
    
<div class="hero">
    <div class="hero_content">
        <h1>WEB DEVELOPMENT</h1>
        <p>ALways be coding...</p>
        <button>Learn to Code !!</button><br />
      
      
    <!--    begin here !!!!   -->
<div class="container">
        <h2>Modal Example</h2>
        <!-- Trigger the modal with a button1 -->
        <button 
                type="button"  
                onclick="document.querySelector('.modal-input').value = this.id" 
                id="1"  
                class="btn btn-info btn-lg" 
                data-toggle="modal" 
                data-target="#myModal1">Open Modal #1
        </button>
      
        <!-- Modal1 -->
        <div class="modal fade" id="myModal1" role="dialog">
          <div class="modal-dialog">
          
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">First Modal Header</h4>
              </div>
              <div class="modal-body">
                <input type="text" class="modal-input form-control" name="">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
            
          </div>
        </div>

        
      </div>
    <!--    end here !!!!   -->


    </div>
    
    <div class="table-reponsive col-md-12 mx-auto">
        <h4 class="my-4">Students</h4>
    <table class="table table-stiped table-hover">
        <tr><th>#ID</th><th>firstname</th><th>lastname</th><th>emailname</th><th>phonenum</th><th>password</th><th>coursename</th><th>created_at</th></tr>
        <tbody class="table-body">
            
        </tbody>
    </table>
    </div>

</div>    
    
    
<!--    begin here !!!!   -->




<!--    end here !!!!   --> 

    <div class="footer">
    <div class="row">
      <div class="footer_col">
        <h2>LINKS</h2>
        <ul>
            <li>about</li>
            <li>contact us</li>
            <li>practice quiz</li>
            <li>create account</li>            
        </ul>
      </div>
      <div class="footer_col">
        <h2>SERVICES</h2>
        <ul>
            <li>training</li>
            <li>web design</li>
            <li>cyber security</li>
            <li>computer repair</li>            
        </ul>
      </div>
      <div class="footer_col">
        <h2>USER ACCOUNTS</h2>
        <ul>
            <li>sign in</li>
            <li>student progress</li>
            <li>student notes</li>
            <li>blog</li>            
        </ul>
      </div>
      