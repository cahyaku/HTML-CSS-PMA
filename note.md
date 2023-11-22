> background: radial-gradient(circle, #91a7ff, #fff)
> background-color: #f8f9fa;

> background: rgb(63, 94, 251);
> background: radial-gradient(
> circle,
> rgba(63, 94, 251, 1) 0%,
> rgba(252, 70, 107, 1) 100%
> );

> background: rgb(238, 174, 202);
> background: radial-gradient(
> circle,
> rgba(238, 174, 202, 1) 0%,
> rgba(148, 187, 233, 1) 100%
> );

> background: #fff;
> background: radial-gradient(circle, #fff 0%, rgba(148, 187, 233, 1) 100%);

> background-color: #fff;
> background: linear-gradient(#fff 0%, rgba(63, 94, 251, 1) 120%);

    <header class="header">
      <!-- <div class="container"> -->
      <div class="logo-box">
        <!-- <h2 class="heading-secondary">
          <strong class="PMA">PMA</strong> - Persons Management App
        </h2> -->

        <a href="#">
          <img
            class="logo"
            alt="Persons Management App logo"
            src="img/Pasted image.png"
          />
        </a>
      </div>

      <div class="person-link-box">
        <ion-icon name="person" class="person-icon"></ion-icon>
        <a class="person-link" href="#">me@example.com</a>
        <!-- <a class="person-link" href="#">me@example.com</a> -->
      </div>
      <!-- </div> -->
    </header>

<table class="table">
                  <thead>
                    <tr>
                      <th scope="col">NO</th>
                      <th scope="col">Email</th>
                      <th scope="col">Name</th>
                      <th scope="col">Role</th>
                      <th scope="col"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>cahya@gmail.com</td>
                      <td>Cahya</td>
                      <td>ADMIN</td>
                      <td>
                        <div class="text-end">
                          <button type="button" class="btn btn-outline-primary">
                            Edit
                          </button>

                          <button type="button" class="btn btn-outline-dark">
                            View
                          </button>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Kumala</td>
                      <td>Kumala@gmail.com</td>
                      <td>MEMBER</td>
                      <td>
                        <div class="text-end">
                          <button type="button" class="btn btn-outline-primary">
                            Edit
                          </button>

                          <button type="button" class="btn btn-outline-dark">
                            View
                          </button>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Ayong</td>
                      <td>Ayong@gmail.com</td>
                      <!-- ini untuk langsung mengisi data nama dan melewati column selanjutnya-->
                      <!-- <td colspan="2">Larry the Bird</td> -->
                      <td>@twitter</td>
                      <td>
                        <div class="text-end">
                          <!-- <button
                            type="button"
                            class="btn btn-outline-light me-2"
                          >
                            Edit
                          </button>
                          <button type="button" class="btn btn-warning">
                            View
                          </button> -->

                          <button type="button" class="btn btn-outline-primary">
                            Edit
                          </button>

                          <button type="button" class="btn btn-outline-dark">
                            View
                          </button>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>

/_ background: radial-gradient(circle, #fff 0%, rgba(148, 187, 233, 1) 100%); _/
/_ background: radial-gradient(circle, #91a7ff, #fff); _/
/_ background: linear-gradient(#fff 0%, rgba(63, 94, 251, 1) 80%); _/

<!-- PERSONS PAGE -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard-PMA</title>

    <!-- LINK CSS FILE -->
    <link rel="stylesheet" href="css/dashboard.css" />
    <link rel="stylesheet" href="css/general.css" />
    <link rel="stylesheet" href="css/queries.css" />

    <!-- LINK ION ICON -->
    <script
      type="module"
      src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
    ></script>

    <!-- LINK FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&family=Rubik:wght@400;500;700&display=swap"
      rel="stylesheet"
    />

    <!-- BOOTSTRAPS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />

  </head>

  <body>
    <!-- BOOTSTRAPS -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>

    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
      integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
      crossorigin="anonymous"
    ></script>
    <header>
      <nav class="navbar bg-body-tertiary header-background">
        <div class="container-fluid">
          <div class="d-flex align-items-center">
            <button
              class="btn-nav d-lg-none"
              type="button"
              data-bs-toggle="offcanvas"
              data-bs-target="#offcanvasScrolling"
              aria-controls="offcanvasScrolling"
            >
              <ion-icon class="icon-header" name="menu"></ion-icon>
            </button>
            <div>
              <h2 class="PMA">LOGO PMA</h2>
            </div>
            <div
              class="offcanvas offcanvas-start"
              data-bs-scroll="true"
              data-bs-backdrop="false"
              tabindex="-1"
              id="offcanvasScrolling"
              aria-labelledby="offcanvasScrollingLabel"
            >
              <div class="offcanvas-header">
                <div class="d-flex align-items-center gx-2">
                  <h1>LOGO</h1>
                  <h2
                    class="offcanvas-title heading-secondary"
                    id="offcanvasScrollingLabel"
                  >
                    <strong class="PMA">PMA</strong>
                  </h2>
                </div>
                <button
                  class="btn-nav"
                  type="button"
                  data-bs-dismiss="offcanvas"
                >
                  <ion-icon class="icon-header" name="close"></ion-icon>
                </button>
              </div>
              <hr />
              <div
                class="offcanvas-body d-flex flex-column justify-content-between"
              >
                <nav class="main-nav">
                  <p>
                    Try scrolling the rest of the page to see this option in
                    action.
                  </p>
                  <ul class="main-nav-list">
                    <li>
                      <a class="main-nav-link dahsboard-link" href="#">
                        <ion-icon name="speedometer"></ion-icon>
                        Dashboard</a
                      >
                    </li>
                    <li>
                      <a class="main-nav-link persons-link" href="#">
                        <ion-icon name="people"></ion-icon>
                        Persons
                      </a>
                    </li>
                    <li>
                      <a class="main-nav-link account-link" href="#">
                        <ion-icon name="person-circle"></ion-icon>
                        My Account</a
                      >
                    </li>
                    <li>
                      <a class="main-nav-link edit-profile-link" href="#">
                        <ion-icon clas="nav-icon" name="create"></ion-icon>
                        Edit Profil
                      </a>
                    </li>
                    <li>
                      <a class="main-nav-link logout-link" href="#">
                        <ion-icon name="log-out"></ion-icon>
                        Logout</a
                      >
                    </li>
                  </ul>
                </nav>

                <div class="dropdown">
                  <hr />
                  <a
                    href="#"
                    class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                  >
                    <img
                      src="https://github.com/mdo.png"
                      alt=""
                      width="32"
                      height="32"
                      class="rounded-circle me-2"
                    />.sidebar { width: 2rem; }
                    <h3><srtong>mdo</srtong></h3>
                  </a>
                  <ul
                    class="dropdown-menu dropdown-menu-dark text-small shadow"
                  >
                    <li>
                      <a class="dropdown-item" href="#">New project...</a>
                    </li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li><hr class="dropdown-divider" /></li>
                    <li><a class="dropdown-item" href="#">Sign out</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="d-flex align-items-center">
            <div>
              <ion-icon name="person" class="person-icon"></ion-icon>
            </div>
            <div class="d-none d-lg-block">
              <a class="person-link" href="#">me@example.com</a>
            </div>
          </div>
        </div>
      </nav>
    </header>

    <main>
      <section class="section-dashboard d-flex">
        <!-- SIDEBAR -->
        <!-- <div col="row"> -->
        <!-- <div class="col-3"> -->
        <!-- <div class="sidebar position-fixed"> -->
        <div class="sidebar-content d-none d-lg-flex">
          <!-- <div class="sidebar-content d-none d-lg-flex"> -->
          <!-- <div
            class="offcanvas offcanvas-start show"
            data-bs-scroll="true"
            data-bs-backdrop="false"
            tabindex="-1"
            id="offcanvasScrolling"
            aria-labelledby="offcanvasScrollingLabel"
            aria-modal="true"
            role="dialog"
          > -->
          <!-- <div class="offcanvas-header">
              <div class="d-flex align-items-center gx-2">
                <h1>LOGO</h1>
                <h2
                  class="offcanvas-title heading-secondary"
                  id="offcanvasScrollingLabel"
                >
                  <strong class="PMA">PMA</strong>
                </h2>
              </div>
              <button class="btn-nav" type="button" data-bs-dismiss="offcanvas">
                <ion-icon
                  class="icon-header md hydrated"
                  name="close"
                  role="img"
                ></ion-icon>
              </button>
            </div> -->
          <hr />
          <div
            class="offcanvas-body d-flex flex-column justify-content-between sidebar-background"
          >
            <nav class="main-nav main-nav-padding">
              <!-- <p>
                Try scrolling the rest of the page to see this option in action.
              </p> -->
              <ul class="main-nav-list">
                <li>
                  <a class="main-nav-link dahsboard-link" href="#">
                    <ion-icon
                      name="speedometer"
                      role="img"
                      class="md hydrated"
                    ></ion-icon>
                    Dashboard</a
                  >
                </li>
                <li>
                  <a class="main-nav-link persons-link" href="#">
                    <ion-icon
                      name="people"
                      role="img"
                      class="md hydrated"
                    ></ion-icon>
                    Persons
                  </a>
                </li>
                <li>
                  <a class="main-nav-link account-link" href="#">
                    <ion-icon
                      name="person-circle"
                      role="img"
                      class="md hydrated"
                    ></ion-icon>
                    My Account</a
                  >
                </li>
                <li>
                  <a class="main-nav-link edit-profile-link" href="#">
                    <ion-icon
                      clas="nav-icon"
                      name="create"
                      role="img"
                      class="md hydrated"
                    ></ion-icon>
                    Edit Profil
                  </a>
                </li>
                <li>
                  <a class="main-nav-link logout-link" href="#">
                    <ion-icon
                      name="log-out"
                      role="img"
                      class="md hydrated"
                    ></ion-icon>
                    Logout</a
                  >
                </li>
              </ul>
            </nav>

            <div class="dropdown">
              <hr />
              <a
                href="#"
                class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <img
                  src="https://github.com/mdo.png"
                  alt=""
                  width="32"
                  height="32"
                  class="rounded-circle me-2"
                />
                <h3><srtong>mdo</srtong></h3>
              </a>
              <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                <li>
                  <a class="dropdown-item" href="#">New project...</a>
                </li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li><a class="dropdown-item" href="#">Sign out</a></li>
              </ul>
            </div>
          </div>
          <!-- </div> -->
          <!-- </div> -->
        </div>
        <!-- </div> -->
        <!-- <div class="col-9"> -->

        <div class="main-content">
          <!-- <div class="test"> -->
          <!-- <div class="container"> -->
          <!-- <div class="row"> -->
          <div class="persons-box">
            <div class="person-header">
              <h3 class="box-title">Persons</h3>
            </div>
            <div class="add-button">
              <button class="btn-a btn--full btn-add">+Add</button>
            </div>
          </div>

          <div class="search-box">
            <div class="form">
              <form class="d-flex" role="search">
                <input
                  class="form-control me-2 form"
                  type="search"
                  placeholder="Search..."
                  aria-label="Search"
                />
                <button type="button" class="btn btn-outline-primary">
                  Search
                </button>
              </form>
            </div>
          </div>

          <!-- <div class="scroll"> -->
          <div class="table-responsive">
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Email</th>
                  <th scope="col">Name</th>
                  <th scope="col">Role</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                <!-- <div class="table-body"> -->
                <tr>
                  <th scope="row">1</th>
                  <td>cahya@gmail.com</td>
                  <td>Cahya</td>
                  <td>ADMIN</td>
                  <td>
                    <div class="table-button">
                      <div class="text-end">
                        <button type="button" class="btn btn-outline-primary">
                          Edit
                        </button>

                        <button type="button" class="btn btn-outline-primary">
                          View
                        </button>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Kumala</td>
                  <td>Kumala@gmail.com</td>
                  <td>MEMBER</td>
                  <td>
                    <div class="table-button">
                      <div class="text-end">
                        <button type="button" class="btn btn-outline-primary">
                          Edit
                        </button>

                        <button type="button" class="btn btn-outline-primary">
                          View
                        </button>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Ayong</td>
                  <td>Ayong@gmail.com</td>

                  <td>@twitter</td>
                  <td>
                    <div class="table-button">
                      <div class="text-end">
                        <button
                          type="button"
                          class="btn btn-outline-primary btn-edit"
                        >
                          Edit
                        </button>
                        <button
                          type="button"
                          class="btn btn-outline-primary btn-table"
                        >
                          View
                        </button>
                      </div>
                    </div>
                  </td>
                </tr>
                <!-- </div> -->
              </tbody>
            </table>
          </div>
          <!-- </div> -->
          <!-- </div> -->
          <!-- </div> -->
        </div>
        <!-- </div> -->
        <!-- </div> -->
        <!-- </div> -->
        <!-- </div> -->
      </section>
    </main>

  </body>
</html>

<!-- box-shadow -->

/_ box-shadow: 0 2.4rem 4.8rem rgba(0, 0, 0, 0.075); _/
/_ box-shadow: 7px 10px 5px -7px rgba(0, 0, 0, 0.1); _/

/_ background-image: linear-gradient(to right bottom, white, #4c6ef5); _/
/_ background: linear-gradient(to right, #fff, #5c6cff); _/
/_ background: linear-gradient(to right, #bac8ff, #748ffc); _/
/_ background: linear-gradient(to right bottom, #748ffc, #fff); _/
/_ background: linear-gradient(to right bottom, #5c6cff, #fff); _/
/_ background-color: #748ffc; _/
/_ background-color: #bac8ff; _/
/_ background-color: #4263eb; _/
/_ background-color: rgba(0, 0, 0, 0.45); _/

 <div
                      class="form-check form-switch check-padding"
                      style="padding: 2rem 4rem"
                    >
                      <input
                        class="form-check-input"
                        type="checkbox"
                        role="switch"
                        id="flexSwitchCheckChecked"
                        checked
                        style="width: 4rem; margin-right: 0.5rem; border: none"
                      />
                      <label
                        class="form-check-label label-text"
                        style="font-size: 1.8rem"
                        for="flexSwitchCheckChecked"
                        >Checked switch checkbox input</label
                      >
                    </div>
