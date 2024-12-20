<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>registration</title>
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap" rel="stylesheet"><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
<link rel="stylesheet" href="style.css">
</head>
<body>
<!-- partial:index.partial.html -->

<!--PEN HEADER-->
<header class="header">
  <h1 class="header__title">Multi Steps Form with animations</h1>
</header>
<!--PEN CONTENT     -->
<div class="content">
  <!--content inner-->
  <div class="content__inner">
    <div class="container overflow-hidden">
      <!--multisteps-form-->
      <div class="multisteps-form">
        <!--progress bar-->
        <div class="row">
          <div class="col-12 col-lg-8 ml-auto mr-auto mb-4">
            <div class="multisteps-form__progress">
              <button class="multisteps-form__progress-btn js-active" type="button" title="User Info">User Info</button>
              <button class="multisteps-form__progress-btn" type="button" title="Address">Company Info</button>
              <button class="multisteps-form__progress-btn" type="button" title="Order Info">Login Info</button>
            </div>
          </div>
        </div>
        <!--form panels-->
        <div class="row">
          <div class="col-12 col-lg-8 m-auto">
            <form class="multisteps-form__form">
              <!--single form panel-->
              <div class="multisteps-form__panel shadow p-4 rounded bg-white js-active" data-animation="scaleIn">
                <h3 class="multisteps-form__title">Your User Info</h3>
                <div class="multisteps-form__content">
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-6">
                      <input class="multisteps-form__input form-control" id="first" type="text" placeholder="First Name"/>
                    </div>
                    <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                      <input class="multisteps-form__input form-control" id="last" type="text" placeholder="Last Name"/>
                    </div>
                  </div>
                  <div class="button-row d-flex mt-4">
                    <button class="btn btn-primary ml-auto js-btn-next" id="next1" type="button" title="Next">Next</button>
                  </div>
                </div>
              </div>
              <!--single form panel-->
              <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                <h3 class="multisteps-form__title">Your Company Details</h3>
                <div class="multisteps-form__content">
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-6">
                      <input class="multisteps-form__input form-control" id="email" type="email" placeholder="Email Id"/>
                    </div>
                    <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                      <select name="gender" id="gender" class="custom-select multisteps-form__input form-control">
                        <option value="">Gender</option>
                        <option value="volvo">Volvo</option>
                        <option value="fiat">Fiat</option>
                        <option value="audi">Audi</option>
                      </select>
                      <!-- <input class="multisteps-form__input form-control" id="last" type="phone" placeholder="Last Name"/> -->
                    </div>
                  </div>
                  <div class="button-row d-flex mt-4">
                    <button class="btn btn-primary ml-auto js-btn-next" id="next2" type="button" title="Next">Next2</button>
                  </div>
                </div>
              </div>
              <!--single form panel-->
              <div class="multisteps-form__panel shadow p-4 rounded bg-white" data-animation="scaleIn">
                <h3 class="multisteps-form__title">Login Info</h3>
                <div class="multisteps-form__content">
                  <div class="form-row mt-4">
                    <div class="col-12 col-sm-6">
                      <input class="multisteps-form__input form-control" id="username" type="text" placeholder="Username"/>
                    </div>
                    <div class="col-12 col-sm-6 mt-4 mt-sm-0">
                      <input class="multisteps-form__input form-control" id="password" type="password" placeholder="Enter Password"/>
                    </div>
                  </div>
                  <div class="row">
                    <div class="button-row d-flex mt-4 col-12">
                      <button class="btn btn-primary ml-auto js-btn-next" id="submit" type="button" title="Next">Submit</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- partial -->
<script  src="script.js"></script>
<script src="https://www.hosteddialer.in/js/jquery.min.js"></script>
<script>
  $('#next1').click(function()
        { 
            var first=$("#first").val();
            var last = $("#last").val();
            var add = "insert";
            //var next1 = $('#next1');
        // name validation-------------------------------

      if(first==""){
        alert("Please Enter Your first Name");
        $("#first").focus();
        return false;
        }
      else if(last==""){
        alert("Please Enter Your last name");
        $("#last").focus();
        return false;
        }
      else{
        $.ajax({
        type:"POST",
        url: 'rgi.php',
        data: 'first='+ first +'&last='+last+'&add='+add,
        success: function(res){
          last_id = res;
          if(last_id){
            //======================================================================
            $('#next2').click(function(){
            var last = last_id;
            //alert(last); 
            var email = $('#email').val();
            var gender = $('#gender').val();
            var update = "update";
            if(email==''){
              alert('enter your email id');
              $('#email').focus();
              return false;
            }else if(gender==''){
              alert('plaese select gender');
              $('#gender').focus();
              return false;
            }else{
              $.ajax({
                type:'POST',
                url:'rgi.php',
                data:'email='+email+'&gender='+gender+'&id='+last+'&update='+update,
                success: function(res1){
                  last_id_update = res1;
                  alert(last_id_update);
                  if(last_id_update){
                    //alert("update successfully");
                    //======================================================================
                    $('#submit').click(function(){
                    var submit_id = last_id_update;
                    //alert(last); 
                    var username = $('#username').val();
                    var password = $('#password').val();
                    var submit = "submit";
                    if(username==''){
                      alert('enter your username');
                      $('#username').focus();
                      return false;
                    }else if(password==''){
                      alert('Enter login password');
                      $('#password').focus();
                      return false;
                    }else{
                      $.ajax({
                        type:'POST',
                        url:'rgi.php',
                        data:'username='+username+'&password='+password+'&submit_id='+submit_id+'&submit='+submit,
                        success: function(res2){
                          last_id_update = res2;
                          //alert(last_id_update);
                          if(last_id_update){
                            alert("update successfully");
                             window.location.href = "https://bpovendor.com/login.php";
                          }else{
                            alert('3rd form error');
                          }
                        }
                      });
                    }
                    })
                  }else{
                    alert('2nd form error');
                  }
                }
              });
            }
            }) 
            //========================================================       
          }else{
            alert('Error form submit')
          }
      }
      });
    }
    });
</script>

</body>
</html>