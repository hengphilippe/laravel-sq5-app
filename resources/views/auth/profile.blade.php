<!DOCTYPE html>
<html>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0- 
alpha/css/bootstrap.css" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<link rel="stylesheet" type="text/css" 
href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,800&display=swap" rel="stylesheet">
<style>
  input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }

  button[type=submit] {
    font-weight: 600px;
    font-size: 1rem;
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

  button[type=submit]:hover {
    background-color: #45a049;
  }

  .main {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
  }
  h3{
      text-align: center
  }
  body{
      font-family: "poppins"
  }
  [type="file"] {
  /* Style the color of the message that says 'No file chosen' */
    color: #878787;
  }
  [type="file"]::-webkit-file-upload-button {
    margin: 6px 0 6px 0 ;  
    background: #45a049;
    border: 2px solid #45a049;
    border-radius: 4px;
    color: #fff;
    cursor: pointer;
    font-size: 12px;
    outline: none;
    padding: 10px 25px;
    text-transform: uppercase;
    transition: all 1s ease;
  }

  [type="file"]::-webkit-file-upload-button:hover {
    background: #fff;
    border: 2px solid #535353;
    color: #000;
  }
  .back{
    width: 100%;
    display: flex;
    justify-content: flex-end;
  }
  .back a{
    align-items: center;
    text-decoration: none;
    color: #fff;
    padding: 5px 10px 5px 10px;
    border-radius: 10px;
    font-size: 1rem;
    font-weight: 600;
    background: #4CAF50;
    display: flex;
    margin-bottom: 5px;
    box-shadow: 0 2px 6px rgba(41, 41, 41,.4);
  }
  .back a i{
    padding-right: 10px; 
  }
  .back a:hover{
    background: #45a049;
    transition: opacity 0.6s;
  }
</style>
<body>

<h3>Update Profile</h3>
<div class="back">
  <a href="/"><i class='bx bxs-share'></i>Back</a>
</div>

<div class="main">
  <form action="{{ route('user-profile-information.update') }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    <label for="name">Name</label>
    <input type="text" id="name" name="name" value="{{ auth()->user()->name}}" required>

    <label for="email">Email</label>
    <input type="text" id="email" name="email" value="{{ auth()->user()->email }}" required>
    <label for="phone">Phone</label>
    <input type="text" id="phone" name="phone" value="{{ auth()->user()->phone }}" required>

    <label for="country">Gender</label>
    <select id="gender" name="gender" required>
        <option value="" selected="" disabled="">Select</option>
                <option value="Male" {{ auth()->user()->gender == 'Male' ? 'selected' : '' }}>Male</option>
                <option value="Female" {{ auth()->user()->gender == 'Female' ? 'selected' : '' }}>Female</option>
    </select>
  <label for="photo">Photo</label><br>
  <input type="file" id="photo" name="photo" />
    <button type="submit">Save</button>
  </form>
</div>

<script>
  @if(Session::has('message'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.success("{{ session('message') }}");
  @endif

  @if(Session::has('error'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.error("{{ session('error') }}");
  @endif

  @if(Session::has('info'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.info("{{ session('info') }}");
  @endif

  @if(Session::has('warning'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.warning("{{ session('warning') }}");
  @endif
</script>
</body>
</html>


