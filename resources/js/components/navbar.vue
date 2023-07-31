<template>
<<<<<<< Updated upstream
    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
          <a class="navbar-item" href="https://bulma.io">
            <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
          </a>
      
          <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
          </a>
        </div>
      
        <div id="navbarBasicExample" class="navbar-menu">
          <div class="navbar-start">
            <a class="navbar-item">
              Home
            </a>
      
            <a class="navbar-item">
              Documentation
            </a>
      
            <div class="navbar-item has-dropdown is-hoverable">
              <a class="navbar-link">
                More
              </a>
      
              <div class="navbar-dropdown">
                <a class="navbar-item">
                  About
                </a>
                <a class="navbar-item">
                  Jobs
                </a>
                <a class="navbar-item">
                  Contact
                </a>
                <hr class="navbar-divider">
                <a class="navbar-item">
                  Report an issue
                </a>
              </div>
            </div>
          </div>
      
          <div class="navbar-end">
            <div class="navbar-item">
              <div class="buttons">
                <a class="button is-primary">
                  <strong>Sign up</strong>
                </a>
                <a class="button is-light">
                  Log in
                </a>
              </div>
            </div>
          </div>
        </div>
      </nav>
=======
  <nav class="navbar is-primary" role="navigation" aria-label="main navigation">
    <!-- Navbar brand/logo -->
    <!-- ... Your brand/logo HTML code ... -->

    <!-- Navbar menu items -->
    <div id="navbarBlog" class="navbar-menu" :class="{ 'is-active': isMenuOpen }">
      <div class="navbar-start">
        <a class="navbar-item" href="/">Home</a>
        <a class="navbar-item">|</a> <!-- Debug: Display isAuthenticated -->
        <template v-if="isAuthenticated">
          <a class="navbar-item">
            <button @click="openNewPostModal" class="button is-success">New Post</button>
          </a>
        </template>
      </div>
      <div class="navbar-end">
        <!-- Show different content based on the authentication status -->
        <template v-if="isAuthenticated">
          <div class="navbar-item">Logged in as {{ currentUser }}</div>
          <!-- Show logout button when logged in -->
          <div class="navbar-item">
          <button class="button is-danger" @click="logout">Log Out</button>
        </div>
        </template>
        <template v-else>
          <div class="navbar-item">
            <div>Logged in as Guest</div>
            <div class="buttons">
              <button class="button is-info" @click="openLoginModal">Log In</button>
              <button class="button is-warning" @click="openRegisterModal">Register</button>
            </div>
          </div>
        </template>
      </div>
    </div>
  </nav>
  <br>
>>>>>>> Stashed changes
</template>

<script>
export default{

}
</script>