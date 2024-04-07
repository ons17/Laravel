<!DOCTYPE html>
<html>
  <head>
    <title>Educational registration form</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, select, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 16px;
      color: #eee;
      }
      body {
      background: url("data:image/png;base64,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") no-repeat center;
      background-size:40%;

      }
      h1, h2 {
      text-transform: uppercase;
      font-weight: 400;
      }
      h2 {
      margin: 0 0 0 8px;
      }
      .main-block {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 100%;
      padding: 25px;
      background: rgba(0, 0, 0, 0.5); 
      }
      .left-part, form {
      padding: 25px;
      }
      .left-part {
      text-align: center;
      }
      .fa-graduation-cap {
      font-size: 72px;
      }
      form {
      background: rgba(0, 0, 0, 0.7); 
      }
      .title {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
      }
      .info {
      display: flex;
      flex-direction: column;
      }
      input, select {
      padding: 5px;
      margin-bottom: 30px;
      background: transparent;
      border: none;
      border-bottom: 1px solid #eee;
      }
      input::placeholder {
      color: #eee;
      }
      option:focus {
      border: none;
      }
      option {
      background: black; 
      border: none;
      }
      .checkbox input {
      margin: 0 10px 0 0;
      vertical-align: middle;
      }
      .checkbox a {
      color: #26a9e0;
      }
      .checkbox a:hover {
      color: #85d6de;
      }
      .btn-item, button {
      padding: 10px 5px;
      margin-top: 20px;
      border-radius: 5px; 
      border: none;
      background: #26a9e0; 
      text-decoration: none;
      font-size: 15px;
      font-weight: 400;
      color: #fff;
      }
      .btn-item {
      display: inline-block;
      margin: 20px 5px 0;
      }
      button {
      width: 100%;
      }
      button:hover, .btn-item:hover {
      background: #85d6de;
      }
      @media (min-width: 568px) {
      html, body {
      height: 100%;
      }
      .main-block {
      flex-direction: row;
      height: calc(100% - 50px);
      }
      .left-part, form {
      flex: 1;
      height: auto;
      }
      }
    </style>
  </head>
  <body>
    <div class="main-block">
      <div class="left-part">
        <i class="fas fa-graduation-cap"></i>
        <h1>Register to our courses</h1>
        <p>W3docs provides free learning materials for programming languages like HTML, CSS, Java Script, PHP etc.</p>
        <div class="btn-group">
          <a class="btn-item" href="https://www.w3docs.com/learn-html.html">Learn HTML</a>
          <a class="btn-item" href="https://www.w3docs.com/quiz/#">Select Quiz</a>
        </div>
      </div>
      <form action="/">
        <div class="title">
          <i class="fas fa-pencil-alt"></i> 
          <h2>Register here</h2>
        </div>
        <div class="info">
          <input class="fname" type="text" name="name" placeholder="Full name">
          <input type="text" name="name" placeholder="Email">
          <input type="text" name="name" placeholder="Phone number">
          <input type="password" name="name" placeholder="Password">
          <select>
            <option value="course-type" selected>Course type*</option>
            <option value="short-courses">Short courses</option>
            <option value="featured-courses">Featured courses</option>
            <option value="undergraduate">Undergraduate</option>
            <option value="diploma">Diploma</option>
            <option value="certificate">Certificate</option>
            <option value="masters-degree">Masters degree</option>
            <option value="postgraduate">Postgraduate</option>
          </select>
        </div>
        <div class="checkbox">
          <input type="checkbox" name="checkbox"><span>I agree to the <a href="https://www.w3docs.com/privacy-policy">Privacy Poalicy for W3Docs.</a></span>
        </div> <br>
             <div class="checkbox">
         <span>I already have account  <a href="{{url('/productcreate')}}" >My Account</a> </span>
        
    </div> 
     <button type="submit" >Submit</button>
    <div class="checkbox">
   
       <a href="{{url('/product')}}" > Go To</a>
    </div>
      </form>
    

    </div>
  </body>
</html>