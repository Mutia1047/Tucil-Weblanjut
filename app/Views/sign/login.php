<?= $this->extend('sign/layout/header') ?>

<?= $this->section('content') ?>

<title>Login</title>

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <div class="fadeIn first">
		<h3>Silakan LOGIN</h3>
    </div>

    <!-- Login Form -->
    <form action="/page/index" method="post">
      <input type="text" id="username" class="fadeIn second" name="username" placeholder="username">
      <input type="text" id="password" class="fadeIn third" name="password" placeholder="password">
	    <input type="submit" class="fadeIn fourth" value="Log In">
    </form>

    <!-- Register -->
    <div id="formFooter">
      <a class="underlineHover" href="/page/register">Register</a>
    </div>

    <!-- Mengingatkan Password -->
    <div id="formFooter1">
      <a class="underlineHover" href="#">Lupa Password?</a>
    </div>

  </div>
</div>

<?= $this->endSection('content') ?>