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
