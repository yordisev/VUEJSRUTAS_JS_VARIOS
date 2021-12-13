<?php include '../../includes/head.html' ?>

<div id='myapp'>
    <div class="message">
        <h1>{{ stmessage }}</h1>
        <h1>{{ res }}</h1>
    </div>
    <div class="container">
    <div class="section">
<div class="tile is-ancestor">
    <div class="tile is-parent">
        <div  class="card tile is-child">
        <div  class="card-content">
            <div  class="level">
                <div  class="level-item has-widget-icon">
                    <div  class="is-widget-icon">
                        <span class="icon has-text-primary is-large" >
                            <i class="mdi mdi-account-multiple mdi-48px"></i>
                        </span>
                    </div>
                </div>
                <div  class="level-item">
                    <div  class="is-widget-label">
                        <h3  class="subtitle is-spaced"> Clients </h3>
                        <h1  class="title">
                            <div > 512 </div>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="tile is-parent">
    <div  class="card tile is-child">
        <!----><div  class="card-content">
            <div  class="level">
                <div  class="level-item has-widget-icon">
                    <div  class="is-widget-icon">
                        <span class="icon has-text-info is-large" >
                            <i class="mdi mdi-cart-outline mdi-48px">
                            </i></span></div></div><div  class="level-item">
                                <div  class="is-widget-label">
                                    <h3  class="subtitle is-spaced"> Sales </h3>
                                    <h1  class="title">
                                        <div > $7,770 </div>
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tile is-parent">
                <div  class="card tile is-child">
                    <!----><div  class="card-content">
                        <div  class="level">
                            <div  class="level-item has-widget-icon">
                                <div  class="is-widget-icon">
                                    <span class="icon has-text-success is-large" >
                                        <i class="mdi mdi-chart-timeline-variant mdi-48px"></i>
                                    </span></div></div><div  class="level-item">
                                        <div  class="is-widget-label">
                                            <h3  class="subtitle is-spaced"> Performance </h3>
                                            <h1  class="title">
                                                <div > 256% </div>
                                            </h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
</div>
<div class="section">
        <input type='button' @click='addUser()' value='Add new user' class="button is-success">

        <!-- Select record by ID -->
        <div class="is-pulled-right is-clearfix">
            <input type='button' @click='recordByID()' value='Select user by ID' class="button is-primary">
        </div>

        <br><br>
        <!-- List records -->
        <table class="table is-responsive is-bordered">
            <tr>
                <th>UserId</th>
                <th>Username</th>
                <th>Name</th>
                <th>Email</th>
                <th>Delete</th>
            </tr>

            <tr v-for="usuario in usuarios" :key="usuario.id">
                <td>{{ usuario.id }}</td>
                <td>{{ usuario.username }}</td>
                <td>{{ usuario.name }}</td>
                <td>{{ usuario.email }}</td>
                <td>
                <p class="buttons">
  <button class="button is-success">
    <span class="icon is-small">
      <i class="mdi mdi-account-edit"></i>
    </span>
  </button>
  <button class="button is-primary">
    <span class="icon is-small">
      <i class="fas fa-italic"></i>
    </span>
  </button>
  <button class="button is-danger">
    <span class="icon is-small">
      <i class="mdi mdi-delete"></i>
    </span>
  </button>
</p>
                </td>
            </tr>
        </table>
        </div>
    </div>
    <?php include '../../includes/footer.html' ?>
    <script src="../../controllers/inicio/vue.js"></script>