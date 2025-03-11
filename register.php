<!-- 
    URL: https://sobieconference.org/register.html
    • View Page Source

    -- <form class="needs-validation" novalidate> --
      -- registrant info --
      <div class="card mb-2">
        <div class="card-body">
          -- name --
          <div class="input-group ms-2 mb-3">
            <span class="input-group-text">Name</span>
            -- <input type="text" class="form-control w-10" placeholder="Salutation (Mr., Mrs., Dr., ...)"> --
            <input type="text" id="firstName" class="ms-2 form-control w-20" placeholder="First Name" required>


            -- <input type="text" class="form-control w-10" placeholder="Middle Init."> --
            <input type="text" id="lastName" class="ms-2 form-control w-20" placeholder="Last Name" required>
          </div>




          -- email --
          <div class="input-group  ms-2 mb-3">
            <span class="input-group-text" id="">Email</span>
            <input type="email" id="email" class="ms-2 form-control w-20" placeholder="Email Address" required>
            <div class="invalid-feedback">
              Please enter a valid email address
            </div>
          </div>
 -->

<!DOCTYPE html>
<html>
  <body>
    <form method='POST' actoin='register.php'>
    <label for="name">Name:</label>
    <input type="text" id="name" name="name"><br><br>
    
  </body>
</html>