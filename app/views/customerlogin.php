<style>
  /* Giảm kích thước chiều ngang của tab pills */
  .nav-pills {
    padding-top: 50px;
    max-width: 40%;
    /* Đặt chiều rộng tối đa của tab pills */
    margin: 0 auto;
    /* Căn giữa tab pills */
  }

  /* Giảm kích thước chiều ngang của các nút social */
  .btn-link.btn-floating.mx-1 {
    font-size: 20px;
    /* Đặt kích thước font chữ của nút social */
    padding: 5px 10px;
    /* Điều chỉnh padding để giảm kích thước chiều ngang */
  }

  /* Giảm kích thước chiều ngang của form */
  .form-group {
    max-width: 40%;
    /* Đặt chiều rộng tối đa của form */
    margin: 0 auto;
    /* Căn giữa form */
  }

  /* Điều chỉnh kích thước font chữ trong label của form */
  .form-group label {
    font-size: 16px;
  }

  /* Điều chỉnh kích thước font chữ trong label của checkbox */
  .checkbox label {
    font-size: 16px;
  }

  /* Điều chỉnh margin bottom của checkbox */
  .checkbox {
    margin-bottom: 20px;
  }

  /* Điều chỉnh padding của button Submit */
  .btn-primary.btn-block {
    padding: 10px;
  }
</style>

<!-- Tabs navs -->
<ul class="nav nav-pills nav-justified" id="ex1" role="tablist">
  <li class="active">
    <a href="#pills-login" data-toggle="tab" role="tab" aria-controls="pills-login" aria-selected="true">Login</a>
  </li>
  <li>
    <a href="#pills-register" data-toggle="tab" role="tab" aria-controls="pills-register" aria-selected="false">Register</a>
  </li>
</ul>
<!-- Tabs navs -->

<!-- Tabs content -->
<div class="tab-content">
  <div class="tab-pane fade in active" id="pills-login">
    <form>
      <div class="text-center mb-3">
        <p>Sign in with:</p>
        <button type="button" class="btn btn-link btn-floating mx-1">
          <i class="fa fa-facebook"></i>
        </button>

        <button type="button" class="btn btn-link btn-floating mx-1">
          <i class="fa fa-google"></i>
        </button>

        <button type="button" class="btn btn-link btn-floating mx-1">
          <i class="fa fa-twitter"></i>
        </button>

        <button type="button" class="btn btn-link btn-floating mx-1">
          <i class="fa fa-github"></i>
        </button>
      </div>

      <p class="text-center">or:</p>

      <!-- Email input -->
      <div class="form-group">
        <label for="loginName">Email or username</label>
        <input type="email" id="loginName" class="form-control" />
      </div>

      <!-- Password input -->
      <div class="form-group">
        <label for="loginPassword">Password</label>
        <input type="password" id="loginPassword" class="form-control" />
      </div>

      <!-- Remember me -->
      <div class="checkbox">
        <label>
          <input type="checkbox" value="" id="loginCheck" checked /> Remember me
        </label>
      </div>

      <!-- Forgot password link -->
      <div class="text-center">
        <a href="#!">Forgot password?</a>
      </div>

      <!-- Submit button -->
      <button type="submit" class="btn btn-primary btn-block">Sign in</button>

      <!-- Register link -->
      <div class="text-center">
        <p>Not a member? <a href="#!">Register</a></p>
      </div>
    </form>
  </div>
  <div class="tab-pane fade" id="pills-register">
    <form>
      <div class="text-center mb-3">
        <p>Sign up with:</p>
        <button type="button" class="btn btn-link btn-floating mx-1">
          <i class="fa fa-facebook"></i>
        </button>

        <button type="button" class="btn btn-link btn-floating mx-1">
          <i class="fa fa-google"></i>
        </button>

        <button type="button" class="btn btn-link btn-floating mx-1">
          <i class="fa fa-twitter"></i>
        </button>

        <button type="button" class="btn btn-link btn-floating mx-1">
          <i class="fa fa-github"></i>
        </button>
      </div>

      <p class="text-center">or:</p>

      <!-- Name input -->
      <div class="form-group">
        <label for="registerName">Name</label>
        <input type="text" id="registerName" class="form-control" />
      </div>

      <!-- Username input -->
      <div class="form-group">
        <label for="registerUsername">Username</label>
        <input type="text" id="registerUsername" class="form-control" />
      </div>

      <!-- Email input -->
      <div class="form-group">
        <label for="registerEmail">Email</label>
        <input type="email" id="registerEmail" class="form-control" />
      </div>

      <!-- Password input -->
      <div class="form-group">
        <label for="registerPassword">Password</label>
        <input type="password" id="registerPassword" class="form-control" />
      </div>

      <!-- Repeat Password input -->
      <div class="form-group">
        <label for="registerRepeatPassword">Repeat password</label>
        <input type="password" id="registerRepeatPassword" class="form-control" />
      </div>

      <!-- I have read and agree to the terms -->
      <div class="checkbox">
        <label>
          <input type="checkbox" value="" id="registerCheck" checked /> I have read and agree to the terms
        </label>
      </div>

      <!-- Submit button -->
      <button type="submit" class="btn btn-primary btn-block">Sign up</button>
    </form>
  </div>
</div>
<!-- Tabs content -->